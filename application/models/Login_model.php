<?php
class Login_model extends CI_Model {
  function __construct(){
      parent::__construct();
  }

  public function login($m_email, $m_password)
  {
     $this->db->where('m_email', $m_email);
     $this->db->where('m_password', $m_password);
     $query = $this->db->get('tbl_member');

     if ($query->num_rows() > 0)
     {
      return true;
     }
     else
     {
      return false;
     }

  }
}
//------------------------//

?>
