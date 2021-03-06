<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
								if($this->session->userdata('m_type')!=1){
									redirect('Home','refresh');
								}
                $this->load->model('member_model');

        }
//-----------------------------------------------------//
	public function index()
	{
		//print_r($_SESSION);
		$data['query']=$this->member_model->showdata2();
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/main_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}
//----------------------------------------------------//
	public function edit_admin($m_id)
	{
		$data['rowedit']=$this->member_model->read($m_id);
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/edit/edit_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}
//---------------------------------------------------//
	public function delete($m_id)
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		$this->member_model->deldata($m_id);
		$this->session->set_flashdata('register_success',TRUE);
		redirect('admin','refresh');
	}
//-----------------------------------------------//
	public function blog()
	{
		//print_r($_SESSION);
		$data['query']=$this->member_model->blogjoin();
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',$data);
		$this->load->view('admin_view/blog/blog_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}
	//---------------------------------------------//
	public function blog_form_register()
	{
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/blog/blog_form_ad_view');
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}
//---------------------------------------------------------//
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
			$this->session->set_flashdata('register_img_error',TRUE);
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
			$this->session->set_flashdata('register_success',TRUE);
			redirect('admin/blog','refresh');
		}else {
						$this->session->set_flashdata('register_fail',TRUE);
					}
		}
	}
	//------------------------------------------------------//
	public function blog_edit($blog_id)
		{

		$data['rowedit']=$this->member_model->read_blog($blog_id);
	  $data['query']=$this->member_model->blogjoin();

		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/blog/blog_edit_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
		// echo '<pre>';
		//print_r($data);
		// echo '</pre>';
		//
		//exit();



		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
	}
	//---------------------------------------------------------//
	public function blog_update()
	{
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// exit;
		$config['upload_path'] = './img/blog/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2000';
		$config['max_width'] = '3000';
		$config['max_heigth'] = '3000';
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 425;
		$config['height']       = 321;


		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('blog_img'))
		{
			$this->session->set_flashdata('register_img_error',TRUE);
		}else {
			$data = $this->upload->data();
			$filename = $data['file_name'];
				$data = array(
					'blog_name' => $this->input->post('blog_name'),
					// 'blog_date' => $this->input->post('blog_date'),
					'blog_type' => $this->input->post('blog_type'),
					// 'member_ID' => $this->input->post('member_ID'),
					'blog_img' => $filename,
					'blog_details' => $this->input->post('blog_details')
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				// exit;
				$this->db->where('blog_id', $this->input->post('blog_id'));
				$query=$this->db->update('tbl_blog',$data);

				if($query){
					$this->session->set_flashdata('register_success',TRUE);
					redirect('Admin/blog','refresh');
				}else {
					$this->session->set_flashdata('register_fail',TRUE);
				}
			}
		}
	//-----------------------------------------------------------//
	public function blog_delete($blog_id)
	{
		$this->member_model->blog_delete($blog_id);
		$this->session->set_flashdata('register_success',TRUE);
		redirect('Admin/blog','refresh');
	}
//------------------------------------------------------------//
public function edit_password($m_id)
{
	$data['rowedit']=$this->member_model->read($m_id);
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/edit/edit_password_ad_view');
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//--------------------------------------------------------------//
public function edit_img($m_id)
{
	$data['rowedit']=$this->member_model->read($m_id);
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/edit/edit_img_ad_view');
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//------------------------------------------------------------------//
public function edit_data($m_id)
{
	$data['rowedit']=$this->member_model->read($m_id);
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/edit/edit_data_ad_view',$data);
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//-------------------------------------------------------------------//
public function type()
{
	$data['query']=$this->member_model->showdata2();
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/type_ad_view',$data);
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//---------------------------------------------------------------------//
public function edit_type($m_id)
{
	$data['rowedit']=$this->member_model->read($m_id);
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/edit/edit_type_ad_view',$data);
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//------------------------------------------------------------------------//
public function blog_me($m_id)
{
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		$data['query']=$this->member_model->blogjoin_member($m_id);
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2');
		$this->load->view('admin_view/blog/blog_me_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');


}
//---------------------------------------------------------------------------//
public function comment()
{
	//print_r($_SESSION);
	$data['query']=$this->member_model->blogjoin();
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2',$data);
	$this->load->view('admin_view/comment/comment_ad_view');
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//---------------------------------------------------------------------------//
public function comment_form($blog_id)
{
	//print_r($_SESSION);
	$data['query2']=$this->member_model->blog_join($blog_id);
	$data['query']=$this->member_model->comment($blog_id);
	$this->load->view('admin_view/css_ad_view');
	$this->load->view('admin_view/header_ad_view2');
	$this->load->view('admin_view/comment/comment_form_ad_view',$data);
	$this->load->view('admin_view/footer_ad_view');
	$this->load->view('admin_view/js_ad_view');
}
//--------------------------------------------------------------------------//
public function comment_delete($comment_id)
{
	$this->member_model->comment_delete($comment_id);
	$this->session->set_flashdata('register_success',TRUE);
	redirect('Admin/comment','refresh');
}
//-----------------------------------------------------------------------------//




}
