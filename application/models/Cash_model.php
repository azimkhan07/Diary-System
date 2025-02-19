<?php 

class Cash_model extends CI_Model{

    function getData(){
        return $this->db->get('registeration')->result_array();
    }
    

    function allData(){
        $sql = "SELECT distinct registeration.id,registeration.user_num,registeration.name,registeration.email,
        registeration.mobile,(SELECT SUM(cash_head.credit) from cash_head where registeration.id = cash_head.reg_id)as credit,
        (SELECT SUM(cash_head.debit) from cash_head where registeration.id = cash_head.reg_id)as debit 
        FROM registeration,cash_head WHERE registeration.id = cash_head.reg_id";
        return $this->db->query($sql)->result_array();
    }

    function getCreditCount(){
        $sql = "SELECT sum(credit)as id FROM cash_head";
        return $this->db->query($sql)->row_array();
    }

    function getDebitCount(){
        $sql = "SELECT sum(debit)as id FROM cash_head";
        return $this->db->query($sql)->row_array();
    }
    function getCredit(){
        $sql = "SELECT SUM(credit)as id from cash_head,registeration where credit != 0 
                AND registeration.isActive = 1 AND registeration.id = cash_head.reg_id";
        return $this->db->query($sql)->row_array();
    }
    function getDebit(){
        $sql = "SELECT SUM(debit)as id from cash_head,registeration where debit != 0 
        AND registeration.isActive = 1 AND registeration.id = cash_head.reg_id";
        return $this->db->query($sql)->row_array();
    }

    function getCash(){
        $sql = "SELECT registeration.id,registeration.user_num,registeration.name,registeration.email,registeration.mobile,cash_head.date,cash_head.credit,cash_head.debit 
        FROM registeration,cash_head WHERE registeration.id = cash_head.reg_id and registeration.isActive = 1";
        return $this->db->query($sql)->result_array();
    }

    public function addCash(){

        $addDate = date('Y-m-d',strtotime($this->input->post('date')));

        $cashHeaddata = array (
            'reg_id'=>$this->input->post('usernumber'),
            'date'=>$addDate,
            'credit'=>$this->input->post('amount'),
            'debit'=>0
        );
        $status = $this->db->insert('cash_head',$cashHeaddata);

        // $insertId = $this->db->insert_id();



        // $creditData = array(
        //     'reg_id'=>$this->input->post('usernumber'),
        //     'ch_id'=>$insertId,
        //     'amount'=>$this->input->post('amount'),
        //     // 'created_by'=>$_SESSION['id']
        // );
        
        // $status = $this->db->insert('credit',$creditData);
        if($status){
            return true;
        }else{
            return false;
        }
    }

    public function debitCash(){

        $addDate = date('Y-m-d',strtotime($this->input->post('date')));

        $cashHeaddata = array (
            'reg_id'=>$this->input->post('usernumber'),
            'date'=>$addDate,
            'credit'=>0,
            'debit'=>$this->input->post('amount')
        );
        $status = $this->db->insert('cash_head',$cashHeaddata);

        
        if($status){
            return true;
        }else{
            return false;
        }
    }

    function getCashById($email){
        $sql = "SELECT registeration.id,registeration.user_num,registeration.name,registeration.email,registeration.mobile,cash_head.date,cash_head.credit,cash_head.debit 
        FROM registeration,cash_head WHERE registeration.id = cash_head.reg_id And registeration.id = '$email'";
        return $this->db->query($sql)->result_array();
    }
    function getCreditCountById($email){
        $sql = "SELECT sum(credit)as id FROM cash_head Where cash_head.reg_id = '$email'";
        return $this->db->query($sql)->row_array();
    }

    function getDebitCountById($email){
        $sql = "SELECT sum(debit)as id FROM cash_head Where cash_head.reg_id = '$email'";
        return $this->db->query($sql)->row_array();
    }

    function checkCash($id){
        $iid = $this->session->userdata('dashboard_user');
        $sql = "SELECT sum(credit)as credit,sum(debit)as debit From cash_head WHERE cash_head.reg_id = $id";
        return $this->db->query($sql)->row_array();
    }
}