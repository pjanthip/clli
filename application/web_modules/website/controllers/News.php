<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'news']);
        $this->load->view('website/news/view_all');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function detail($id)
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $reponse['id'] = $id;
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'news']);
        $this->load->view('website/news/detail',$reponse);
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
