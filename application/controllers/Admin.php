<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
								if($this->session->userdata('m_type')!=1){
									redirect('login','refresh');
								}
                $this->load->model('member_model');
        }

	public function index()
	{
		print_r($_SESSION);
		$data['query']=$this->member_model->showdata2();
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',);
		$this->load->view('admin_view/main_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}

	public function edit_admin($m_id)
	{
		$data['rowedit']=$this->member_model->read($m_id);
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/edit_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}

	public function delete($m_id)
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		$this->member_model->deldata($m_id);
		redirect('admin','refresh');
	}
}
