<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Member_model');
        }

	public function index()
	{
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar_m_view');
		$this->load->view('main_view/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}

	public function blog_news()
	{

  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar_m_view');
  		$this->load->view('main_view/Blog_news_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}

	public function sign_in()
	{

  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar_m_view');
  		$this->load->view('main_view/register_m_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}

	public function success()
	{
			$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/Success_view');
			$this->load->view('main_view/js_m_view');

	}

	public function admin()
	{
		print_r($_SESSION);
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar_admin_m_view');
		$this->load->view('main_view/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}

	public function member()
	{
		if($this->session->userdata('m_type')!=0){
			redirect('login','refresh');
		}
		print_r($_SESSION);
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar_member_m_view');
		$this->load->view('main_view/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}


}
