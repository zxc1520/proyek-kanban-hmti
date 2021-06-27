<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Sampul extends CI_Model
{

  var $table = "sampul";

  public function __construct()
  {
    parent::__construct();
  }

  public function select_all($limit=null)
  {
    $this->db->limit($limit);
    $query = $this->db->get($this->table);

    if($query->num_rows() > 0)
    {
      return $query->result();
    }
    else
    {
      return array();
    }
  }

  public function select_by_id($id)
  {
    $this->db->where('id_sampul', $id);
    $query = $this->db->get($this->table);

    if($query->num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function update($data, $id)
  {
    $this->db->where('id_sampul', $id);
    $this->db->update($this->table, $data);
  }

}
