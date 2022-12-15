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
        $data_session = array(
			'fulllname' => '',
			'is_admin_logged_in' => FALSE,
			'user_id' => '',
			'user_type' => ''
		);
		$this->session->set_userdata($data_session);

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

            $this->db->select('personnels_username, personnels_password, showStatus, personnels_id');
            $query = $this->db->get_where('tb_personnels', array('personnels_username' => $login_username));

            // username exist guard
            if (!$query->num_rows() > 0) {
                $this->session->set_flashdata('errors', 'ไม่พบชื่อบัญชีนี้ในระบบ');
                $this->index();
                return;
            }

            // query variable
            $password = $query->row()->personnels_password;
            $status = $query->row()->showStatus;
            $user_id = $query->row()->personnels_id;

            // check password guard
            if ($password !== md5($login_password)) {
                $this->session->set_flashdata('errors', 'รหัสผ่านไม่ถูกต้อง');
                $this->index();
                return;
            }

            switch ($status) {
                case '1': // บุคลากร
                    $session_userdata = array(
                        'user_id' => $user_id,
                        'user_name' => $query->row()->personnels_username,
                        'is_admin' => TRUE,
                        'type' => '1'
                    );
                    break;
                default:
                    $this->session->set_flashdata('info', 'กรุณารอการอนุมัติจากผู้ดูแลระบบ');
                    $this->index();
                    return;
            }

            // set session
            $this->session->set_userdata($session_userdata);

            redirect('backend');
        }
        // On validation fail
        else {
            $this->index();
        }
    }

    public function on_logout()
    {
        $this->session->sess_destroy();

        redirect('backend/login');
    }
}