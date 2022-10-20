<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'about']);
        $this->load->view('website/about/main_view');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function structure()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'about_structure']);
        $this->load->view('website/about/structure_view');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function personels()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'about_personels']);
        $this->load->view('website/about/personels_view');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
