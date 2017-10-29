<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Load_Jobs extends CI_Model {

    //insert data to Job Table
    function loadAllJobs() {
       $Jobs = $this->db->query("select * from jobs order by pdate desc");
       return $Jobs;
    }
    function loadContractJobs() {
       $Jobs = $this->db->query("select * from jobs where type='Contract' order by pdate desc;");
       return $Jobs;
    }
    function loadFullTimeJobs() {
       $Jobs = $this->db->query("select * from jobs where type='full time' order by pdate desc;");
       return $Jobs;
    }
    function loadFreelanceJobs() {
       $Jobs = $this->db->query("select * from jobs where type='freelance' order by pdate desc;");
       return $Jobs;
    }

}




