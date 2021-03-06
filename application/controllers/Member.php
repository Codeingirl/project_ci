<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('member_model');
        }

//--------------------------------//
	public function index()
	{
		$data['query']=$this->member_model->showdata2();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('member_view',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

//-------------------------------//
	public function edit($m_id)
	{
		$data['rowedit']=$this->member_model->read($m_id);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('edit_view',$data);
		$this->load->view('footer');
		$this->load->view('js');
	}

//------------------------------//
	public function delete($m_id)
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		$this->member_model->deldata($m_id);
		$this->session->set_flashdata('register_success',TRUE);
		redirect('Member','refresh');
	}

//------------------------------//
public function logout()
{
		$this->session->sess_destroy();//ล้างsession
		redirect('Mainpage');//กลับไปหน้า Login
}
//-----------------------------//



}
