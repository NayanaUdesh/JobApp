<?php
error_reporting(NULL);
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

    public function activate(){
        $this->load->model('model_db');
        $email= $_GET['email'];
        $rand=$_GET['random'];
        //echo $_GET['random'];
        //$this->load->view("view_activate");

        $activatedata=$this->model_db->activate($email);

        foreach ($activatedata as $a) {
            $code=$a['random'];
            $mail=$a['email'];
        }

        
   




        if(($email == $mail) && ($rand==$code)){

        $newRow = array(
                        "status" => 1
                    );
        $this->model_db->activationupdate($newRow,$email);

            $this->session->set_flashdata('activated', 'Your account is activated');
            $this->load->view("view_activate");
        }else{
            $this->session->set_flashdata('notactivated', 'There is a problem while activating your account.Please contact site admin');
            $this->load->view("view_activate");
        }

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
                       
                $checkactivation=$this->model_db->activate($email);

                foreach ($checkactivation as $c) {
                        $status=$c['status'];
                    } 


                    //echo $status;   
               
               if($status =="1"){
                $data = array(
                    'email' => $this->input->post('email'),
                    'is_logged_in' => 1,
                    'welcome_name' => $name,
                    'welcome_icon'=> $icon,
                    
                );
                $this->session->set_userdata($data);
                //echo 'test';
                }
            }
        
            if($this->session->userdata('is_logged_in') ==1){
                $this->load->view('view_home', $data);
                
            }else if($status != "1"){
                $this->session->set_flashdata('activatebeforlogin', 'Your account is not activated yet.Please check your mail for activation link');
                $this->load->view('view_reg');
                
            }else{
               $this->load->view('view_reg'); 
            }
        }


         function validate() {
            $this->load->model('model_db');
            if ($this->model_db->can_log_in()) {
                
                return true;
            } else {
                
                $this->form_validation->set_message('validate', 'Incorrect username or password. Check your credentials and try again.');
               
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
            $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[user.email]");
            $this->form_validation->set_rules("last_name", "Last Name", "required|trim");

            //$this->form_validation->set_rules("phone", "Phone Number", "trim|numeric");

           

            $cpass=$this->input->post('cpassword');
            $pass=$this->input->post('password');
            $rand=rand(10000000000,90000000000);


            $newUser = array(
                "first_name" => $this->input->post('first_name'),
                "last_name" => $this->input->post('last_name'),
                "email" => $this->input->post('email'),
                "password" => md5($this->input->post('password')),
                "random" =>$rand,
                "cname" => $this->input->post('cname')
               
            );

            //after sending mail above detials will save in database from 'addNotification' function in model_db
            if ($this->form_validation->run() == FALSE) {
                $this->load->view("view_reg");
                          } else {
               
               if($pass != $cpass){
                $this->session->set_flashdata('password', 'Entered password doesn`t match. Please check and try again');
                $this->load->view("view_reg");
                //exit();
               }else if(strlen($pass) < 6){
                $this->session->set_flashdata('passwordlen', 'Password length should be atleast 6');
                $this->load->view("view_reg");
               }else{
                $this->model_db->register($newUser);
                $this->session->set_flashdata('registered', 'Registerd. Please check your email to confirm the account.');
                $this->load->view("view_reg");
               // $this->SendMail();


                 $fname=$this->input->post('first_name');
                $lname=$this->input->post('last_name');
                $email=$this->input->post('email');
                $headers = "From: support@sljobs.com";

                $body="

                Hello $fname,

                Please use following link to active your account.

                http://job.onholidaytravels.com/site/activate?email=$email&&random=$rand;

                Thank You.


                ";
                
                
                mail( $email, 'Activate your account!!', $body, $headers);
                //echo 'sent';
            }
            }

        }

     
}
?>
</html>
