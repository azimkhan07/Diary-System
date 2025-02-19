<?php


class Import_model extends CI_Model{

    function add_batch($data){
        $this->db->insert('medicine', $data);
    }
}