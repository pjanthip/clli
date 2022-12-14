<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('mydate_helper');
        // if (!$this->session->userdata('user_id') || $this->session->userdata('is_admin') === false) {
        //     redirect('backend/login');
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
        
        $this->load->view('backend/home/login', $reponse);
    }

    public function on_login()
    {
        // validate rule username
        $this->form_validation->set_rules(
            'login_username',
            'Username',
            'trim|required',
            array(
                'required' => 'กรุณากรอก Username'
            )
        );

        // validate rule Password
        $this->form_validation->set_rules(
            'login_password',
            'Password',
            'trim|required',
            array(
                'required' => 'กรุณากรอก Password'
            )
        );

        // On validation success
        if ($this->form_validation->run() == TRUE) {

            $login_username = $this->input->post('login_username');
            $login_password = $this->input->post('login_password');

            
        }
        // On validation fail
        else {
            $this->index();
        }
    }
}