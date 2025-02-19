<?php 

class Profile_model extends CI_Model{

    function getData($id){
        $sql = "SELECT * From registeration where email = '$id'";
        $result = $this->db->query($sql)->row_array();

        if($result != NULL){
            return $result;
        } else {
            return $this->db->query("SELECT * From admin where email = '$id'")->row_array();
        }
    }
}