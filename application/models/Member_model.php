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
    'm_password'=>md5($m_password),
    'm_email' => $m_email,
    'm_tel'  => $m_tel,

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


}

?>
