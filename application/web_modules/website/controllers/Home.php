<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {  
        $reponse = [];
        $reponse['title'] = "Muangdev.";
        $this->load->view('website/theme/header',$reponse);
        //$this->load->view('website/theme/navbar', ['ACTIVE' => 'HOME']);
        $this->load->view('website/home/index');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
