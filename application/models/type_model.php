<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class type_model extends CI_Model
{
  public function getalllist()
  {
    $this->db->select('*');
    $this->db->from('tbl_leavetypes');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

}
?>
