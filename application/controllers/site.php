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

    public function Login(){
        $this->load->view("view_reg");
    }

   function LoginValidation() {
            $this->load->model('model_db');
            $this->load->library('form_validation');
            $this->form_validation->set_rules("email", "email", 'required|trim|xss_clean|callback_validate');
            $this->form_validation->set_rules("password", "Password", "required|trim");



           // $name = $this->input->post('username');
            //$fname = $this->model_db->getFirstName($name);

            if ($this->form_validation->run() == TRUE) {
              

                $email=$this->input->post('email');
                
                $name=$this->model_db->getFirstName($email);

                $icon=$this->model_db->getIcon($email);     
                           
               
                $data = array(
                    'email' => $this->input->post('email'),
                    'is_logged_in' => 1,
                    'welcome_name' => $name,
                    'welcome_icon'=> $icon,

                    
                );
                $this->session->set_userdata($data);
                //echo 'test';

                
            }
        

            if($this->session->userdata('is_logged_in') ==1){
                $this->load->view('view_home', $data);
                
            }else{
                $this->load->view('view_reg');
                
            }
        }


         function validate() {
            $this->load->model('model_db');
            if ($this->model_db->can_log_in()) {
                
                return true;
            } else {
                
                $this->form_validation->set_message('validate', 'incorrect username or password');
               
                return false;
            }
        }

         public function logout() {
            $this->session->sess_destroy();
            //$this->load->view("view_home");
            redirect('site/');
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