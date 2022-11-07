<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Diploma extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('user_id')) {
        //     redirect('agency/login');
        // }
    }

    public function main_variable()
    {
        $reponse['title'] = 'CLLI MIS';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        return $reponse;
    }

    public function index()
    {
        $reponse = $this->main_variable();

        $reponse['title_page'] = 'ออกเลขวุฒิบัตร';
        $reponse['icon_page'] = '<i class="fa-solid fa-barcode"></i>';
        $reponse['page'] = 'diploma';
        $reponse['active'] = 'diploma';
        $reponse['breadcrumb']=array(
                                        'วุฒิบัตร' => array(site_url('diploma'),'active'),
                                    );

        $this->load->view('backend/theme/header', $reponse);
        $this->load->view('backend/diploma/view_all', $reponse);
        $this->load->view('backend/theme/footer', $reponse);
    }

    public function form_add()
    {
        $reponse = $this->main_variable();

        $reponse['title_page'] = 'ข้อมูลวุฒิบัตร';
        $reponse['icon_page'] = '<i class="fa-solid fa-award"></i>';
        $reponse['page'] = 'diploma';
        $reponse['active'] = 'diploma';
        $reponse['breadcrumb']=array(
                                        'ข้อมูลวุฒิบัตร' => array(site_url('diploma'),'active'),
                                    );

        $this->load->view('backend/theme/header', $reponse);
        $this->load->view('backend/diploma/form_add', $reponse);
        $this->load->view('backend/theme/footer', $reponse);
    }
}
 