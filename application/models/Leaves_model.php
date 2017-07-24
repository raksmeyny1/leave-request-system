<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Leaves_model extends CI_Model
{
  function getType()
  {
      $this->db->select('id, name');
      $this->db->from('tbl_leavetypes');
      $query = $this->db->get();
      return $query->result();
  }
  function getStatus()
  {
      $this->db->select('id, name');
      $this->db->from('tbl_status');
      $query = $this->db->get();
      return $query->result();
  }
 function addNewRequest($data)
  {
        $this->db->insert('tbl_leaves',$data);
       $this->db->set('id', NULL);
  }
  function ListallLeaveRequest(){
    $this->db->select('*');
    $this->db->from('tbl_leaves');
    $query = $this->db->get();
    return $query->result();
  }

}
