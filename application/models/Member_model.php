<?php
class Member_model extends CI_Model {

  //public function addmember()
  //{

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;

  //   $data = array(
  //
  //     'm_user'=> $this->input->post('m_user'),
  //     'm_password'=> $this->input->post('m_password'),
  //     'm_name' => $this->input->post('m_name'),
  //     'm_lname' => $this->input->post('m_lname'),
  //     'm_email'=> $this->input->post('m_email'),
  //     'm_tel'=> $this->input->post('m_tel')
  //   );
  //   $query = $this->db->insert('tbl_member',$data);
  //
  //   if($query){
  //     redirect('','refresh');
  //   }else {
  //     echo 'false';
  //   }
  // }
//------------------------//
  public function showdata()
          {

                  $query = $this->db->get('tbl_member');
                  return $query->result();

          }

//-----------------------------//
public function showdata2()
        {

          $this->db->select('m.*,t.*');
          $this->db->from('tbl_member as m');
          $this->db->join('tbl_type as t', 'm.m_type=t.m_type');
          $query=$this->db->get();
          return $query->result();

        }
//------------------------------//

  public function read($m_id)
    {
            $this->db->select('*');
            $this->db->from('tbl_member');
            $this->db->where('m_id',$m_id);
            $query=$this->db->get();
                      if($query->num_rows()>0){
                        $data = $query->row();
                        return $data;
                      }
                      $this->session->set_flashdata('register_fail',TRUE);
    }
//---------------------------------//
public function editmember()
{
  $config['upload_path'] = './img/profile/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['max_size'] = '2000';
  $config['max_width'] = '3000';
  $config['max_heigth'] = '3000';

  $this->load->library('upload',$config);
  if (! $this->upload->do_upload('m_img'))
  {
      $this->session->set_flashdata('register_img_error',TRUE);;
  }else {
    $data = $this->upload->data();
    $filename = $data['file_name'];
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // exit;

  $m_user        = $this->input->post('m_user');
	$m_name         = $this->input->post('m_name');
	$m_lname         = $this->input->post('m_lname');
	$m_email             = $this->input->post('m_email');
	$m_password          = $this->input->post('m_password');
	$m_confirmpassword   = $this->input->post('m_confirmpassword');
	$m_tel            = $this->input->post('m_tel');

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

  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
  }

  }
}

//--------------------------------//
    public function editmember1()
    {

      // echo '<pre>';
      // print_r($_POST);
      // echo '</pre>';
      // exit;

      $data = array(

        'm_user'=> $this->input->post('m_user'),
        'm_name' => $this->input->post('m_name'),
        'm_password'=> $this->input->post('m_password'),
        'm_lname' => $this->input->post('m_lname'),
        'm_email'=> $this->input->post('m_email'),
        'm_tel'=> $this->input->post('m_tel')
      );


      $this->db->where('m_id',$this->input->post('m_id'));
      $query = $this->db->update('tbl_member',$data);

      if($query){
        $this->session->set_flashdata('register_success',TRUE);
      }else {
        $this->session->set_flashdata('register_fail',TRUE);
      }
    }
//----------------------------------//
    public function deldata($m_id)
            {
              // echo '<pre>';
              // print_r($data);
              // echo '</pre>';
              // exit;
              $this->db->delete('tbl_member',array('m_id' => $m_id ));

            }
//-----------------------------------//
public function fetch_user_login($m_email,$m_password)
        {
          $this->db->where('m_email',$m_email);
          $this->db->where('m_password',$m_password);
          $query = $this->db->get('tbl_member');
          return $query->row();
        }
//-------------------------------------//
public function blogjoin()
        {
              $this->db->select('tbl_blog.*,tbl_blogtype.*,tbl_member.*');
              $this->db->from('tbl_blog');
              $this->db->join('tbl_blogtype','tbl_blog.blog_type = tbl_blogtype.blog_type');
              $this->db->join('tbl_member','tbl_member.m_id = tbl_blog.m_id');
              $this->db->order_by('blog_id', 'DESC');

              $query = $this->db->get();
              return $query->result();
        }

//---------------------------------------//
public function read_blog($blog_id)
        {
              $this->db->select('*');
              $this->db->from('tbl_blog');
              $this->db->where('blog_id',$blog_id);
              $query = $this->db->get();
              if($query->num_rows() > 0){
                      $data = $query->row();
                      return $data;
              }
              $this->session->set_flashdata('register_fail',TRUE);
        }
//-------------------------------------------//
public function blog_delete($blog_id)
      {
        $this->db->delete('tbl_blog',array('blog_id'=>$blog_id));
      }
//-----------------------------------------------//

public function edit_password()
{
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // exit;


	$m_password          = $this->input->post('m_password');
	$m_confirmpassword   = $this->input->post('m_confirmpassword');

  if ($m_password == $m_confirmpassword)
  {
   $data = array
   (

    'm_password'=>sha1($m_password),

   );
  }
  else
  {
    $this->session->set_flashdata('msg','ยืนยันรหัสผ่านไม่ตรงกัน กรุณาลองใหม่อีกครั้ง');
   return redirect('register');
  }

  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Admin','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
  }
}
//---------------------------------------------------------------------------//
public function edit_img()
{
  $config['upload_path'] = './img/profile/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['max_size'] = '2000';
  $config['max_width'] = '3000';
  $config['max_heigth'] = '3000';

  $this->load->library('upload',$config);
  if (! $this->upload->do_upload('m_img'))
  {
      $this->session->set_flashdata('register_img_error',TRUE);
  }else {
    $data = $this->upload->data();
    $filename = $data['file_name'];
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // exit;
   $data = array
   ('m_img' => $filename);


  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Admin','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
      }

      }
    }
//----------------------------------------------------------------------//
public function edit_data()
{
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // exit;
  $m_user        = $this->input->post('m_user');
  $m_name         = $this->input->post('m_name');
  $m_lname         = $this->input->post('m_lname');
  $m_tel            = $this->input->post('m_tel');

   $data = array
   (
    'm_user'=> $m_user,
    'm_name'=> $m_name,
    'm_lname'=> $m_lname,
    'm_tel'  => $m_tel
   );


  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Admin','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
  }


  }
//------------------------------------------------------------------//
public function edit_type()
{
  $m_type     = $this->input->post('m_type');

   $data = array
   (
    'm_type'  => $m_type
   );


  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Admin/type','refresh');
  }else {
  $this->session->set_flashdata('register_fail',TRUE);
  }

}
//---------------------------------------------------------------------//
public function m_edit_img(){
  $config['upload_path'] = './img/profile/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['max_size'] = '2000';
  $config['max_width'] = '3000';
  $config['max_heigth'] = '3000';

  $this->load->library('upload',$config);
  if (! $this->upload->do_upload('m_img'))
  {
      $this->session->set_flashdata('register_img_error',TRUE);
  }else {
    $data = $this->upload->data();
    $filename = $data['file_name'];
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';
  // exit;
   $data = array
   ('m_img' => $filename);


  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Mainpage/member','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
      }

      }
}
//----------------------------------------------------------------------//
public function m_edit_data(){
  $m_user        = $this->input->post('m_user');
  $m_name         = $this->input->post('m_name');
  $m_lname         = $this->input->post('m_lname');
  $m_tel            = $this->input->post('m_tel');

   $data = array
   (
    'm_user'=> $m_user,
    'm_name'=> $m_name,
    'm_lname'=> $m_lname,
    'm_tel'  => $m_tel
   );


  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Mainpage/member','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
  }
}
//--------------------------------------------------------------------//
public function m_edit_password(){
  $m_password          = $this->input->post('m_password');
	$m_confirmpassword   = $this->input->post('m_confirmpassword');

  if ($m_password == $m_confirmpassword)
  {
   $data = array
   (

    'm_password'=>sha1($m_password),

   );
  }
  else
  {
    $this->session->set_flashdata('register_pass_error',TRUE);
   return redirect('register');
  }

  $this->db->where('m_id',$this->input->post('m_id'));
  $query = $this->db->update('tbl_member',$data);

  if($query){
    $this->session->set_flashdata('register_success',TRUE);
    redirect('Mainpage/member','refresh');
  }else {
    $this->session->set_flashdata('register_fail',TRUE);
  }
}
//---------------------------------------------------------------------//
public function blog_join($blog_id)
        {
              $this->db->select('tbl_blog.*,tbl_blogtype.*,tbl_member.*');
              $this->db->from('tbl_blog');
              $this->db->join('tbl_blogtype','tbl_blog.blog_type = tbl_blogtype.blog_type');
              $this->db->join('tbl_member','tbl_member.m_id = tbl_blog.m_id');
              $this->db->order_by('blog_id', 'DESC');
              $this->db->where('blog_id',$blog_id);
              $query = $this->db->get();
              return $query->result();
        }
//-----------------------------------------------------------------------//
public function comment_join($blog_id)
        {
              $this->db->select('tbl_blog.*,tbl_blogtype.*,tbl_member.*,tbl_comment.*');
              $this->db->from('tbl_blog');
              $this->db->join('tbl_blogtype','tbl_blog.blog_type = tbl_blogtype.blog_type');
              $this->db->join('tbl_member','tbl_member.m_id = tbl_blog.m_id');
              $this->db->join('tbl_comment','tbl_comment.blog_id = tbl_blog.blog_id');
              $this->db->order_by('comment_id', 'DESC');
              $this->db->where('tbl_blog.blog_id',$blog_id);
              $query = $this->db->get();
              return $query->result();
        }
//----------------------------------------------------------------------//
public function blogjoin_member($m_id)
    {
      $this->db->select('tbl_blog.*,tbl_blogtype.*,tbl_member.*');
      $this->db->from('tbl_blog');
      $this->db->join('tbl_blogtype','tbl_blog.blog_type = tbl_blogtype.blog_type');
      $this->db->join('tbl_member','tbl_member.m_id = tbl_blog.m_id');
      $this->db->where('tbl_member.m_id',$m_id);
      $query = $this->db->get();
      return $query->result();
    }
//------------------------------------------------------------------------//
public function comment($blog_id)
        {
              $this->db->select('tbl_blog.*,tbl_blogtype.*,tbl_member.*,tbl_comment.*');
              $this->db->from('tbl_blog');
              $this->db->join('tbl_blogtype','tbl_blog.blog_type = tbl_blogtype.blog_type');
              $this->db->join('tbl_member','tbl_member.m_id = tbl_blog.m_id');
              $this->db->join('tbl_comment','tbl_comment.blog_id = tbl_blog.blog_id');
              $this->db->order_by('comment_id', 'DESC');
              $this->db->where('tbl_blog.blog_id',$blog_id);
              $query = $this->db->get();
              return $query->result();
        }
//--------------------------------------------------------------------------------------------//
public function comment_delete($comment_id)
        {
          {
            $this->db->delete('tbl_comment',array('comment_id'=>$comment_id));
          }
        }












































}

?>
