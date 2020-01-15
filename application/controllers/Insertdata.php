<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdata extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('member_model');
        }

//----------------------------------------------//
	public function index()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('insert_view');
		$this->load->view('footer');
		$this->load->view('js');
	}

//-------------------------------------------//
	public function adding()
	{
		$this->member_model->addmember();

	}
//--------------------------------------------//



}
