<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
  {
        parent::__construct();
        $this->load->model('member_model');
				 $this->load->model('Register_model');
         $this->load->model('Login_model');
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
	$config['upload_path'] = './img/profile/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '2000';
	$config['max_width'] = '3000';
	$config['max_heigth'] = '3000';

	$this->load->library('upload',$config);
	if (! $this->upload->do_upload('m_img'))
	{
			echo $this->upload->display_errors();
	}else {
		$data = $this->upload->data();
		$filename = $data['file_name'];

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
				 'm_password'=>sha1($m_password),
				 'm_email' => $m_email,
				 'm_tel'  => $m_tel,
				 'm_img' => $filename

				);
			 }
			 else
			 {
				 $this->session->set_flashdata('msg','ยืนยันรหัสผ่านไม่ตรงกัน กรุณาลองใหม่อีกครั้ง');
				return redirect('register');
			 }

			 $success = $this->db->insert('tbl_member',$data);
			 return redirect('Mainpage');
			 }
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
//-------------------------------------------------//

	public function checklogin2()
	{
		if($this->input->post('m_email')==''){
			$this->load->view('login');
		}else{
			// echo '<pre>';
			// print_r($_POST);
			// echo '</pre>';
			// exit;
			$result = $this->member_model->fetch_user_login(
				$this->input->post('m_email'),
				sha1($this->input->post('m_password'))
			);
			// print_r($result);
			// exit;
			if(!empty($result)){
				$session_user=array(
						'm_id' 		=> $result->m_id,
						'm_type'	=> $result->m_type,
						'm_name'	=> $result->m_name
				);
				// echo '<br>';
				//print_r{$session_user};
				//exit;
				$this->session->set_userdata($session_user);
				//echo <br>;
				//print_r{$_SESSION};
				$m_type = $_SESSION['m_type'];
				//echo 'level'.$m_type;
				//echp <hr>;
				if($m_type==1){
					redirect('admin','refresh');
				}elseif($m_type==0){
					redirect('home','refresh');
				}
			}else {
				$this->session->unset_userdata(array('m_id','m_type','m_name'));
				redirect('Register');
			}

		}


	}
//-----------------------------------------------//
	public function checklogin()
	{
		// $m_password =($this->input->post('m_password'));
		// echo '<pre>';
		// print_r($m_password);
		// echo '</pre>';
		// exit;
		$this->load->library('form_validation');
			$this->form_validation->set_rules('m_email', 'm_mail','required');
			$this->form_validation->set_rules('m_password', 'm_Password','required');
			if ($this->form_validation->run())
			{
					$m_email = $this->input->post('m_email');
					$m_password =md5($this->input->post('m_password'));
					$this->load->model('Login_model');

					if ($this->Login_model->login($m_email, $m_password))
					{
							$user_data = array(
									'm_email' => $m_email
							);
							$this->session->set_userdata($user_data);
							redirect('home');
					}
					else
					{
							$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> กรุณากรอก Email หรือ Password ให้ถูกต้อง !! </div>');
							redirect('Register/login','refresh');
					}
			}
			else
			{
					redirect('Register/login','refresh');
			}
	}

//--------------------------------------------------//
	public function editdata()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$this->member_model->editmember();
	}
//-------------------------------------------------//


}
