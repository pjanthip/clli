<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function main_variable()
    {

        $reponse['title'] = 'ข่าวประชาสัมพันธ์ | CRRU Lifelong Learning Institute';
        $reponse['keywords'] = 'Credit Bank, CreditBank, Credit, Credit Bank CRRU, CRRU, คลังหน่วยกิต, สะสมหน่วยกิต, การศึกษาต่อเนื่อง, ชุดฝึกอบรม, Modular, Training, เก็บเกรด, มหาวิทยาลัย, ราชภัฏเชียงราย, เชียงราย, เทียบโอน, เทียบโอนหน่วยกิต, หน่วยกิต, Pre University, เรียนเก็บเกรดก่อน, คลังหน่วยกิตภาคเหนือ';
        $reponse['description'] = 'งานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย ดำเนินการโดย สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย (CLLI)';
        $reponse['author'] = 'สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page'] = 'NEWS';
        $reponse['title_page'] = 'ข่าวประชาสัมพันธ์';
        $reponse['title_page_detail'] = 'News';
        $reponse['ACTIVE'] = 'NEWS';
        $reponse['breadcrumb'] = array(
            'ข่าวประชาสัมพันธ์' => array(site_url('news'), 'active'),
        );
        return $reponse;
    }

    public function index()
    {
        $reponse = [];

        $reponse['title'] = 'ข่าวประชาสัมพันธ์ | CRRU Lifelong Learning Institute';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = 'สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page'] = 'news';
        $reponse['title_page'] = 'ข่าวประชาสัมพันธ์';
        $reponse['title_page_detail'] = 'News';
        $reponse['ACTIVE'] = 'news';
        $reponse['breadcrumb'] = array(
            'ข่าวประชาสัมพันธ์' => array(site_url('news'), 'active'),
        );

        $this->load->view('website/theme/header', $reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/news/view_all');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }

    public function detail($id)
    {
        $reponse = [];
        $reponse['title'] = "CRRU Lifelong Learning Institute | สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย";
        $reponse['id'] = $id;

        $reponse['topic_news'] = 'อบรมเชิงปฏิบัติการ "การทำตุงและโคมประดิษฐ์"';

        $reponse['title'] = 'ข่าวประชาสัมพันธ์ | CRRU Lifelong Learning Institute';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = 'สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page'] = 'news';
        $reponse['title_page'] = 'ข่าวประชาสัมพันธ์';
        $reponse['title_page_detail'] = 'News';
        $reponse['ACTIVE'] = 'news';
        $reponse['breadcrumb'] = array(
            'ข่าวประชาสัมพันธ์' => array(site_url('news'), ''),
            $reponse['topic_news'] => array(site_url('news/detail/1'), 'active')
        );

        $this->load->view('website/theme/header', $reponse);
        $this->load->view('website/theme/navbar', ['ACTIVE' => 'news']);
        $this->load->view('website/news/detail', $reponse);
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
