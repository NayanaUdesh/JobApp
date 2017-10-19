<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <?php

    class Site extends CI_Controller {

        public function index()
    {
        $this->load->view('view_home');
    }


  function register() {

            //load form validation class and models
            $this->load->library("form_validation");
            $this->load->model("model_db");
            $this->form_validation->set_rules("first_name", "First Name", "required|trim");
            $this->form_validation->set_rules("email", "Email", "required|trim|valid_email");
            $this->form_validation->set_rules("last_name", "Last Name", "required|trim");

            //$this->form_validation->set_rules("phone", "Phone Number", "trim|numeric");

           

            


            $newUser = array(
                "first_name" => $this->input->post('first_name'),
                "last_name" => $this->input->post('last_name'),
                "email" => $this->input->post('email'),
                "password" => $this->input->post('password')
               
            );

            //after sending mail above detials will save in database from 'addNotification' function in model_db
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("view_reg");
            } else {
                $data['msg'] = "Registerd!!";
                $this->model_db->register($newUser);
                $this->load->view("view_reg", $data);
            }

        }
}
?>
</html>