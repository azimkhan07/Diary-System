<?php
class Login_model extends CI_Model
{
    public function isvalidate($email, $password)
    {
        
        
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $data = $this->db->get('admin')->row_array();

       if($data != Null){
            return $data;
       } else{
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            return $this->db->get('registeration')->row_array();
       }
    }
}
