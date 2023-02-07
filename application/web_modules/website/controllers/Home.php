<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {  
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $reponse['banner'] = $this->get_banner();

        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'home']);
        $this->load->view('website/home/index');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function get_banner(){
        //แบนเนอร์

        $lifelong_db = $this->load->database('lifelong_crru', TRUE);
        $bannersql = "SELECT * FROM `lifelong_banner` WHERE lifelong_banner.lifelong_banner_status = '1' ORDER BY lifelong_banner.lifelong_ordering ASC";
        $bannerquery = $lifelong_db->query($bannersql);
        return $bannerquery->result();
    }
}// END CLASS
