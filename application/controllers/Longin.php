<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Longin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('member_model');
        }

//----------------------------------------------//
	public function index()
	{
    $this->load->view('main_view/header_m_view');
    $this->load->view('main_view/navbar_m_view');
    $this->load->view('main_view/longin_m_view');
    $this->load->view('main_view/footer_m_view');
    $this->load->view('main_view/js_m_view');
	}

//-------------------------------------------//
	public function adding()
	{
		$this->member_model->addmember();

	}
//--------------------------------------------//



}
