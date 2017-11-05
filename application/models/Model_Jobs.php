<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Jobs extends CI_Model {

    //insert data to Job Table
    function PostJob($data) {
        $this->db->insert('jobs', $data);
    }

}
