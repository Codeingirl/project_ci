<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_news extends CI_Controller {


	public function index()
	{
    {
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar_m_view');
  		$this->load->view('main_view/Blog_news_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');
  	}
	}

}
