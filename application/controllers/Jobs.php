<?php
error_reporting(NULL);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <?php

    class Jobs extends CI_Controller {

   
	function LoginValidation() {
            $this->load->model('model_jobs');
            $this->load->library('form_validation');
            $this->form_validation->set_rules("email", "email", 'required|trim|xss_clean|callback_validate');
            $this->form_validation->set_rules("password", "Password", "required|trim");
           // $name = $this->input->post('username');
            //$fname = $this->model_db->getFirstName($name);
            if ($this->form_validation->run() == TRUE) {
              
            }
        
            if($this->session->userdata('is_logged_in') == 1){
                $this->load->view('view_post_job', $data);
                
            }else if($status != "1"){
                $this->session->set_flashdata('LogIntoPostAD', 'Your are not logged in to post a job. Please Sign Up if you do not have an account!');
                $this->load->view('view_reg');
                
            }else{
               $this->load->view('view_reg'); 
            }
        }

        

     
}
?>
</html>
