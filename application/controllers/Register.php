<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
  {
        parent::__construct();
        $this->load->model('member_model');
  }

//-----------------------------------------//
	public function index()
	{
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;

				$this->load->view('css');
				$this->load->view('header');
				$this->load->view('banner');
				$this->load->view('navbar');
				$this->load->view('register_view');
				$this->load->view('footer');
				$this->load->view('js');
	}

//------------------------------------------//
	public function adding()
	{
				$this->member_model->addmember();
	}
//---------------------------------------------//
	public function login()
	{
				$this->load->view('css');
				$this->load->view('header');
				$this->load->view('banner');
				$this->load->view('navbar');
				$this->load->view('login_view');
				$this->load->view('footer');
				$this->load->view('js');
	}
//-----------------------------------------------//
	public function checklogin()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
	}

//--------------------------------------------------//
	public function editdata()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		$this->member_model->editmember();
	}
//-------------------------------------------------//


}
