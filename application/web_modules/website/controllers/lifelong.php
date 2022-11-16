<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lifelong extends CI_Controller
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

    public function opening()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'lifelong_opening']);
        $this->load->view('website/lifelong/opening');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function course()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'lifelong_course']);
        $this->load->view('website/lifelong/course');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function cooperates()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'lifelong_cooperates']);
        $this->load->view('website/lifelong/cooperates');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    

    public function experts()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'lifelong_experts']);
        $this->load->view('website/lifelong/experts');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
