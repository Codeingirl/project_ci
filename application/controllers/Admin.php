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
//-----------------------------------------------------//
	public function index()
	{
		//print_r($_SESSION);
		$data['query']=$this->member_model->showdata2();
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',);
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
		$this->load->view('admin_view/edit_ad_view',$data);
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
		redirect('admin','refresh');
	}
//-----------------------------------------------//
	public function blog()
	{
		//print_r($_SESSION);
		$data['query']=$this->member_model->blogjoin();
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',);
		$this->load->view('admin_view/blog_ad_view',$data);
		$this->load->view('admin_view/footer_ad_view');
		$this->load->view('admin_view/js_ad_view');
	}
	//---------------------------------------------//
	public function blog_form_register()
	{
		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',);
		$this->load->view('admin_view/blog_form_ad_view');
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
			redirect('admin/blog','refresh');
		}else {
						echo 'false';
					}
		}
	}
	//------------------------------------------------------//
	public function blog_edit($blog_id)
		{

		$data['rowedit']=$this->member_model->read_blog($blog_id);
	  $data['query']=$this->member_model->blogjoin();

		$this->load->view('admin_view/css_ad_view');
		$this->load->view('admin_view/header_ad_view2',);
		$this->load->view('admin_view/blog_edit_ad_view',$data);
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

		$this->load->library('upload',$config);
		if (! $this->upload->do_upload('blog_img'))
		{
			echo $this->upload->display_errors();
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
					redirect('Admin/blog','refresh');
				}else {
					echo 'false';
				}
			}
		}
	//-----------------------------------------------------------//
	public function blog_delete($blog_id)
	{
		$this->member_model->blog_delete($blog_id);
		redirect('Admin/blog','refresh');
	}


}
