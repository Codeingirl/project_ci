<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Member_model');
        }
//---------------------------------------------------------------------------------//
	public function index()
	{
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar/navbar_m_view');
		$this->load->view('main_view/main/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}
//-------------------------------------------------------------------------------//
	public function blog_news()
	{

  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_m_view');
  		$this->load->view('main_view/blog/Blog_news_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//--------------------------------------------------------------------------------//
	public function sign_in()
	{

  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_m_view');
  		$this->load->view('main_view/register_m_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//-----------------------------------------------------------------------------//
	public function success()
	{
			$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/Success_view');
			$this->load->view('main_view/js_m_view');

	}
//----------------------------------------------------------------------------//
	public function admin()
	{
		if($this->session->userdata('m_type')!=1){
			redirect('Mainpage','refresh');
		}
		// print_r($_SESSION);
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar/navbar_admin_m_view');
		$this->load->view('main_view/main/main_admin_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}
//---------------------------------------------------------------------------//
	public function member()
	{
		if($this->session->userdata('m_type')!=0){
			redirect('login','refresh');
		}
		// print_r($_SESSION);
		$data['query'] = $this->Member_model->blogjoin();
		$this->load->view('main_view/header_m_view');
		$this->load->view('main_view/navbar/navbar_member_m_view');
		$this->load->view('main_view/main/main_m_view',$data);
		$this->load->view('main_view/footer_m_view');
		$this->load->view('main_view/js_m_view');
	}
//-----------------------------------------------------------------------------//
	public function m_edit_img($m_id)
	{
			$data['rowedit']=$this->Member_model->read($m_id);
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_member_m_view');
  		$this->load->view('main_view/edit/edit_img_m_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//-----------------------------------------------------------------------------//
	public function m_edit_data($m_id)
	{
		$data['rowedit']=$this->Member_model->read($m_id);
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_member_m_view');
  		$this->load->view('main_view/edit/edit_data_m_view',$data);
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//------------------------------------------------------------------------------//
	public function m_edit_password($m_id)
	{
			$data['rowedit']=$this->Member_model->read($m_id);
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_member_m_view');
  		$this->load->view('main_view/edit/edit_password_m_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//---------------------------------------------------------------------------//
	public function blog_details($blog_id)
	{
			$data['query']=$this->Member_model->blog_join($blog_id);
			// echo '<pre>';
		  // print_r($data);
		  // echo '</pre>';
		  // exit;
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_m_view');
  		$this->load->view('main_view/blog/blog_details_m_view',$data);
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//--------------------------------------------------------------------------//
	public function blog_details_admin($blog_id)
	{
			$data['query']=$this->Member_model->blog_join($blog_id);
			// echo '<pre>';
		  // print_r($data);
		  // echo '</pre>';
		  // exit;
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_admin_m_view');
  		$this->load->view('main_view/blog/blog_details_m_view',$data);
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
	//------------------------------------------------------------------------//
	public function add_blog_member()
	{
			// echo '<pre>';
		  // print_r($data);
		  // echo '</pre>';
		  // exit;
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_admin_m_view');
  		$this->load->view('main_view/blog/blog_add_m_view');
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//-------------------------------------------------------------------------//
	public function addblog()
	{

		$config['upload_path'] = './img/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_heigth'] = '3000';

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('blog_img'))
		{
			echo $this->upload->display_errors();
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];
		$data = array(
			'blog_name' => $this->input->post('blog_name'),
			'blog_type' => $this->input->post('blog_type'),
			'blog_img' => $filename,
			'blog_details' => $this->input->post('blog_details'),
			'm_id' => $this->input->post('m_id'),
		);

	 	// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;

		$query=$this->db->insert('tbl_blog',$data);
		if($query){
			redirect('Mainpage/member','refresh');
		}else {
						echo 'false';
					}
		}
	}
//------------------------------------------------------------------------//
	public function blog_me($m_id)
	{
			// echo '<pre>';
		  // print_r($data);
		  // echo '</pre>';
		  // exit;
			$data['query']=$this->Member_model->blogjoin_member($m_id);
  		$this->load->view('main_view/header_m_view');
  		$this->load->view('main_view/navbar/navbar_admin_m_view');
  		$this->load->view('main_view/blog/blog_me_m_view',$data);
  		$this->load->view('main_view/footer_m_view');
  		$this->load->view('main_view/js_m_view');

	}
//-------------------------------------------------------------------------//


}
