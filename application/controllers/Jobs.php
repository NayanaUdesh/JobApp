<?php
error_reporting(NULL);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <?php

    class Jobs extends CI_Controller {
   
	function validateJobData() {
			
			$this->load->model('model_jobs');
			$this->load->library('form_validation');
			
            $this->form_validation->set_rules("jobtitle", "Job Title", 'required');
            $this->form_validation->set_rules("jobcategory", "Job Category", "required");
			//$this->form_validation->set_rules("subcategory", "Sub Category", "");
			//$this->form_validation->set_rules("joblocation", "Job Location", "");
			$this->form_validation->set_rules("jobtype", "Job Type", "required");
			//$this->form_validation->set_rules("salary", "Salary", "required");
			$this->form_validation->set_rules("description", "Job Description", "required");
			$this->form_validation->set_rules("appemail", "Application Email", "required|valid_email");
			//$this->form_validation->set_rules("appurl", "Application URL", "required");
			$this->form_validation->set_rules("negotiable", "Salary Negotiable", "required");
			$this->form_validation->set_rules("jobimage", "Job Image", "required");
			$this->form_validation->set_rules("closedate", "Closing Date", "required");
			//$this->form_validation->set_rules("jobtag", "Job Tags", "required");
			$this->form_validation->set_rules("companyname", "Company Name", "required");
			//$this->form_validation->set_rules("website", "Website", "required");
			$this->form_validation->set_rules("companydesc", "Company Description", "required");
			//$this->form_validation->set_rules("linkedin", "Linked In User Name", "required");
			//$this->form_validation->set_rules("logo", "Company Logo", "required");
			
			
			
			
           // $name = $this->input->post('username');
            //$fname = $this->model_db->getFirstName($name);
			if ($this->form_validation->run() == TRUE) {
              
			}
        
            if($this->session->userdata('is_logged_in') == 1){
                //$this->load->view('view_post_job');
                
            }else if($status != "1"){
                $this->session->set_flashdata('LogIntoPostAD', 'Your are not logged in to post a job. Please Sign Up if you do not have an account!');
               // $this->load->view('view_reg');
                
            }else{
               //$this->load->view('view_reg'); 
            }
        }

        

     
}
?>
</html>
