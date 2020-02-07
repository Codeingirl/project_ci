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
                      return false;
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
      echo $this->upload->display_errors();
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
    echo 'Edit success';
  }else {
    echo 'Edit false';
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
        echo 'Edit success';
      }else {
        echo 'Edit false';
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
              return FALSE;
        }
//-------------------------------------------//
public function blog_delete($blog_id)
      {
        $this->db->delete('tbl_blog',array('blog_id'=>$blog_id));
      }

}

?>
