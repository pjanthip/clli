<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ceramic extends CI_Controller
{
    public function index()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'cwie']);
        $this->load->view('website/ceramic/main_view');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function learning()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'ceramic_learning']);
        $this->load->view('website/ceramic/learning');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function products()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'ceramic_products']);
        $this->load->view('website/ceramic/products');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
