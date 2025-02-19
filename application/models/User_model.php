<?php

class User_model extends CI_Model
{

    function getData()
    {
        $this->db->where('isActive',1);
        return $this->db->get('registeration')->result_array();
    }
    function deActiveUserlist(){
        $this->db->where('isActive',0);
        return $this->db->get('registeration')->result_array();
    }

    function getUserCount()
    {
        $sql = "SELECT count(registeration.id) as user FROM registeration where isActive = 1";
        return $this->db->query($sql)->row_array();
    }
    function showData($id)
    {
        $sql = "SELECT * FROM registeration WHERE id = '$id'";
        return $this->db->query($sql)->row_array();
    }
    function showUsername()
    {
        $this->db->where('isActive',1);
        return $this->db->get('registeration')->result_array();
    }

    function showUsernameForDebit()
    {

        $sql = "SELECT Distinct registeration.id ,registeration.name,registeration.user_num  from registeration, cash_head 
                where registeration.id = cash_head.reg_id and registeration.isActive = 1";
        return $this->db->query($sql)->result_array();
    }

    function getPassword($id){
        $sql = "SELECT * FROM registeration WHERE id = '$id'";
        return $this->db->query($sql)->row_array();
    }

    function updatePassword($pass,$id){
        $sql = "UPDATE registeration SET password = '$pass' WHERE id = '$id'";
        $status = $this->db->query($sql);
        if($status){
            return true;
        }else{
            return false;
        }
    }

    function getUserById($email){
        $sql = "SELECT * FROM registeration WHERE email = '$email'";
        return $this->db->query($sql)->row_array();
    }
    public function addUser()
    {

        $name = $this->input->post('name');
        $str = strtoupper(substr($name, 0, 4));
        $year = date('Y', strtotime($this->input->post('dob')));
        $pass = $str . '' . $year;
        // print_r($id);die;
        $cnumber = "USR" . '-' . random_int('1', '1000');

        $data = array(
            'user_num' => $cnumber,
            'name' => $name,
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('number'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address'),
            'landmark' => $this->input->post('landmark'),
            'password' => $pass,
            'isActive' => 1
        );
        $status = $this->db->insert('registeration', $data);
        if ($status) {
            return true;
        } else {
            return false;
        }
    }

    function deActiveUser($id)
    {
        $admin = $this->session->userdata('dashboard_user_email');
        $update = date('d-m-Y h:i:s');
        

        $sql = "UPDATE `registeration` SET `isActive`='0', `updated_at`= '$update',
                `updated_by`='$admin' WHERE id = '$id'";

        // Execute the SQL query
        $this->db->query($sql);

        // Check if the query was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    function activeUser($id)
    {
        $admin = $this->session->userdata('dashboard_user_email');
        $update = date('d-m-Y h:i:s');
        

        $sql = "UPDATE `registeration` SET `isActive`='1', `updated_at`= '$update',
                `updated_by`='$admin' WHERE id = '$id'";

        // Execute the SQL query
        $this->db->query($sql);

        // Check if the query was successful
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }
}
