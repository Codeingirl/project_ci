<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {


	public function index()
	{
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar_m_view');
		$this->load->view('main_view/main_m_view');
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}
}
