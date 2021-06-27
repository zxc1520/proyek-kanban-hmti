<?php

class Model_kanban extends CI_Model {
    var $table = "kanban";

    public function __construct()
    {
        parent::__construct();
    }

    // Insert data
    public function insert($data)
    {
        # code...
        $this->db->insert($this->table, $data);
    }

    // Updating data
    public function update($data, $id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    // Deleting data
    public function delete($id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    // Select all data
    public function select_all()
    {
        # code...
        $this->db->order_by('todo');
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            # code...
            return $query->result();
        } else {
            return array();
        }
    }

    // Select data by id
    public function select_by_id($id)
    {
        # code...
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);

        if ($query->num_rows() == 1) {
            return $query->result;
        } else {
            return false;
        }
    }

    public function num_rows()
    {
        # code...
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

}