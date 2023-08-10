<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newdean extends CI_Controller
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

        $reponse['title'] = 'โครงการ New Dean | CRRU Lifelong Learning Institute';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = 'สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page'] = 'newdean';
        $reponse['title_page'] = 'โครงการ "New Dean"';
        $reponse['title_page_detail'] = 'การพัฒนาศักยภาพผู้นำองค์กรรุ่นใหม่ "สิ่งที่เห็น..อาจไม่ใช่สิ่งที่เป็น"';
        $reponse['ACTIVE'] = 'newdean';
        $reponse['breadcrumb'] = array(
            'NEWDEAN' => array(site_url('newdean'), 'active'),
        );

        $this->load->view('website/theme/header', $reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/newdean/main_view');
        $this->load->view('website/theme/include/script');
        $this->load->view('website/theme/footer');
    }
}// END CLASS
