<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id') || $this->session->userdata('is_admin') === false) {
            redirect('backend/login');
        }

        //$this->load->model('GetDataTablemodel', 'GetDataTablemodel');
        $this->load->helper('mydate_helper');
    }

    public function main_variable()
    {
        $reponse['title'] = 'CLLI MIS';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        $reponse['page'] = '';
        $reponse['has_button_nav'] = false;
        $reponse['has_button_nav_icon'] = '';
        $reponse['has_button_nav_name'] = '';
        return $reponse;
    }

    public function index()
    {
        $reponse = $this->main_variable();
        $reponse['has_button_nav'] = true;
        if($reponse['has_button_nav']){
            $reponse['has_button_nav_icon'] = '<i class="fa fa-plus-circle"></i>';
            $reponse['has_button_nav_name'] = 'เพิ่มข่าวใหม่';
            $reponse['has_button_nav_link'] = site_url('backend/news/add');
        }

        $reponse['title_page'] = 'Advertising';
        $reponse['icon_page'] = '<i class="fas fa-bullhorn"></i>';
        $reponse['page'] = 'Advertising';
        $reponse['active'] = 'news';
        $reponse['breadcrumb']=array(
                                        'Advertising' => array('javascript:void(0)',''),
                                        'ข่าวประชาสัมพันธ์' => array(site_url('backend/news'),'active'),
                                    );

        $this->load->view('backend/theme/header', $reponse);
        $this->load->view('backend/news/mian_view', $reponse);
        $this->load->view('backend/theme/footer', $reponse);
    }
    public function add()
    {
        $reponse = $this->main_variable();

        $reponse['title_page'] = 'Advertising';
        $reponse['icon_page'] = '<i class="fas fa-bullhorn"></i>';
        $reponse['page'] = 'Advertising';
        $reponse['active'] = 'news';
        $reponse['breadcrumb']=array(
                                        'Advertising' => array('javascript:void(0)',''),
                                        'ข่าวประชาสัมพันธ์' => array(site_url('backend/news'),''),
                                        'เพิ่มข่าวใหม่' => array(site_url('backend/news/add'),'active'),
                                    );

        $this->db->select('news_type_id, news_type_name_th, news_type_name_en');
        $reponse['news_type'] = $this->db->get('tb_news_type')->result();

        $this->load->view('backend/theme/header', $reponse);
        $this->load->view('backend/news/frm_add', $reponse);
        $this->load->view('backend/theme/footer', $reponse);
    }
}
