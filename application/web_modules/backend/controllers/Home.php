<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('user_id') || $this->session->userdata('is_admin') === false) {
        //     redirect('admin/login/on_logout');
        // }
    }

    public function main_variable()
    {
        $reponse['title'] = 'CLLI MIS';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        $reponse['page'] = '';
        return $reponse;
    }

    public function index()
    {
        $reponse = $this->main_variable();

        $reponse['title_page'] = 'Dashboard';
        $reponse['icon_page'] = '<i class="feather icon-home"></i>';
        $reponse['page'] = 'home';
        $reponse['active'] = 'home';
        $reponse['breadcrumb']=array(
                                        'Dashboard' => array(site_url('home'),'active'),
                                    );


        $this->load->view('backend/theme/header', $reponse);
        $this->load->view('backend/home/index', $reponse);
        $this->load->view('backend/theme/footer', $reponse);
    }
}
