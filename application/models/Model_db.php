<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_db extends CI_Model {

    //insert data to catogory
    function register($data) {
        $this->db->insert("user", $data);
    }


     function can_log_in(){
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        
        $query= $this->db->get('user');
        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }


    function getFirstName($email) {

        $q = $this->db->query("SELECT * FROM user WHERE email='$email'");
        return $q->result_array();
    }
    

    function getIcon($email) {

        $q = $this->db->query("SELECT `icon` FROM user WHERE email='$email'");
        return $q->result_array();
    }

    function activate($email){

        $q=$this->db->query("SELECT * FROM user WHERE email='$email'");
        return $q->result_array();
    }

    function activationupdate($update,$where) {
            $this->db->where('email', $where);
            $this->db->update('user', $update);
            
        }
}
