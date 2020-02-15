<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Member_model');
								// if($this->session->userdata('m_type')==''){
								// 	redirect('Mainpage','refresh');
								// }
        }

	public function index()
	{
		// echo '<pre>';
		// print_r($_SESSION);
		// echo '</pre>';
		// exit;
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar/navbar_m_view');
		$this->load->view('main_view/main/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}
	//-------------------------------------------------------//
	public function blog_details($blog_id)
	{
		// echo '<pre>';
		// print_r($_SESSION);
		// echo '</pre>';
		// exit;
			$data1['query']=$this->Member_model->blog_join($blog_id);
			$data['query']=$this->Member_model->comment_join($blog_id);

  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_m_view');
  		$this->load->view('main_view/blog/blog_details_m_view',$data1);
			$this->load->view('main_view/blog/blog_comment_m_view',$data);
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
	//-------------------------------------------------------//
	public function sign_in(){

		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar/navbar_m_view');
		$this->load->view('main_view/register_m_view');
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}


}
