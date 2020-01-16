<?php
class Register_model extends CI_Model {

  function __construct(){
      parent::__construct();
  }

  public function addmember($m_email)
  {

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit;
    $this->db->select('*');
    $this->db->from('tbl_member');
    $this->db->where('m_email',$m_email);
    $get = $this->db->get();
    return $get->result();
  }
}
//------------------------//
?>
