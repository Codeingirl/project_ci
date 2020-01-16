<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
  {
        parent::__construct();
        $this->load->model('member_model');
				 $this->load->model('Register_model');
         //$this->load->model('Login_model');
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
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	//exit;

	$m_user        = $this->input->post('m_user');
	$m_name         = $this->input->post('m_name');
	$m_lname         = $this->input->post('m_lname');
	$m_email             = $this->input->post('m_email');
	$m_password          = $this->input->post('m_password');
	$m_confirmpassword   = $this->input->post('m_confirmpassword');
	$m_tel            = $this->input->post('m_tel');


	if ($this->Register_model->addmember($m_email))
	{
		 $this->session->set_flashdata('msg','ขออภัย E-mail นี้มีผู้อื่นใช้แล้ว กรุณาลองใหม่อีกครั้ง');
				return redirect('register');
	}
	else
	{
			 if ($m_password == $m_confirmpassword)
			 {
				$data = array
				(
				 'm_user'=> $m_user,
				 'm_name'=> $m_name,
				 'm_lname'=> $m_lname,
				 'm_password'=> md5($m_password),
				 'm_email' => $m_email,
				 'm_tel'  => $m_tel,

				);
			 }
			 else
			 {
				 $this->session->set_flashdata('msg','ยืนยันรหัสผ่านไม่ตรงกัน กรุณาลองใหม่อีกครั้ง');
				return redirect('register');
			 }

			 $success = $this->db->insert('tbl_member',$data);
			 return redirect('home');
	}




	// if($succeed > 0)
	// {
	// 	$this->session->set_flashdata('msg','ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง !!.');
	// }else{
	// 	$this->session->set_flashdata('response','สมัครสมาชิกเรียบร้อยแล้ว ท่านสามารถเข้าสู่ระบบได้');
	// }
		//redirect('','refresh');
}

//-----------------------------------------//

	// public function adding()
	// {
	// 			$this->member_model->addmember();
	//
	// }
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
