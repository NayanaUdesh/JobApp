<?php
error_reporting(NULL);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <?php

    class Jobs extends CI_Controller {
   
	function __construct() {
		parent::__construct();
		$this->load->model('model_jobs');
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}
   
	function index() {
			
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			
            $this->form_validation->set_rules('jobtitle', 'Job Title', 'required');
			$this->form_validation->set_rules('jobcategory', 'Job Category', 'required');
			//$this->form_validation->set_rules('subcategory', 'Sub Category', '');
			//$this->form_validation->set_rules('joblocation', 'Job Location', '');
			$this->form_validation->set_rules('jobtype', 'Job Type', 'required');
			//$this->form_validation->set_rules('salary', 'Salary', 'required');
			$this->form_validation->set_rules('description', 'Job Description', 'required');
			$this->form_validation->set_rules('appemail', 'Application Email', 'required|valid_email');
			//$this->form_validation->set_rules('appurl', 'Application URL', 'required');
			//$this->form_validation->set_rules('salary', 'Salary', 'required');
			//$this->form_validation->set_rules('negotiable', 'Salary Negotiable', 'required');
			//$this->form_validation->set_rules('jobimage', 'Job Image', 'required');
			$this->form_validation->set_rules('closedate', 'Closing Date', 'required');
			//$this->form_validation->set_rules('jobtag', 'Job Tags', 'required');
			$this->form_validation->set_rules('companyname', 'Company Name', 'required');
			//$this->form_validation->set_rules('website', 'Website', 'required');
			$this->form_validation->set_rules('companydesc', 'Company Description', 'required');
			//$this->form_validation->set_rules('linkedin', 'Linked In User Name', 'required');
			//$this->form_validation->set_rules('logo', 'Company Logo', 'required');
			
			if (empty($_FILES['logo']['name']))
			{
				$this->form_validation->set_rules('logo', 'Logo', 'required');
			}
			
			if (empty($_FILES['jobimage']['name']))
			{
				$this->form_validation->set_rules('jobimage', 'Job Image', 'required');
			}
			
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('ErrorJobPost', 'Please fill required fields to post job!');
				//Loading View
				$this->load->view('view_post_job');
			}
			else {
				$negotiableChecked = 0;
				if($this->input->post('negotiable') == '1'){
					$negotiableChecked = 1;
				}
				
				function uploadfiles(){
					$data = file_get_contents($_FILES['logo']['tmp_name']);
					$data = base64_encode($data);
					return $data;
				}
				
				$logoupload = uploadfiles();
				
				
				function do_upload()
				{	
					//Year in YYYY format.
					$year = date("Y");
					//Month in mm format, with leading zeros.
					$month = date("m");
					//Day in dd format, with leading zeros.
					$day = date("d");
 
					

					$url = "jobpostings/".date("Y").'/'.date("m").'/'.date("d").'/';
					
					if(!is_dir($url)){
						//Create our directory.
						mkdir($url, 755, true);
					}
					
					$image=basename($_FILES['jobimage']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					if (in_array($type,array('jpg','jpeg','png','gif')))
					{
						$tmppath= $url.uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
						if(is_uploaded_file($_FILES["jobimage"]["tmp_name"]))
						{
							move_uploaded_file($_FILES['jobimage']['tmp_name'],$tmppath);
							return $tmppath; // returns the url of uploaded image.
						}
					}
					else
					{
						return null;
					}
				}
				
				$jobPostImage = do_upload();
				
				$data = array(
				'title' => $this->input->post('jobtitle'),
				'category' => $this->input->post('jobcategory'),
				'subcategory' => $this->input->post('subcategory'),
				'location' => $this->input->post('joblocation'),
				'type' => $this->input->post('jobtype'),
				'description' => $this->input->post('description'),
				'email' => $this->input->post('appemail'),
				'applicationlink' => $this->input->post('appurl'),
				'salary' => $this->input->post('salary'),
				'nego' => $negotiableChecked,
				'edate' => $this->input->post('closedate'),
				'jobtags' => $this->input->post('jobtag'),
				'cname' => $this->input->post('companyname'),
				'cwebsite' => $this->input->post('website'),
				'cdescription' => $this->input->post('companydesc'),
				'linkedin' => $this->input->post('linkedin'),
				'jobimage' => $jobPostImage,
				'clogo' => $logoupload,
				);
				
					//$this->load->view('view_post_job');
					//Transfering data to Model
					$this->model_jobs->postjob($data);
					$this->session->set_flashdata('PostSucess', 'Job Posted Sucessfully!');
					//Loading View
					//$this->load->view('insert_view', $data);
					$this->load->view('view_post_job');
					
				/*}else if($status != "1"){
					$this->session->set_flashdata('activatebeforlogin', 'Your are not logged in to post a job. Please Sign Up if you do not have an account!');
					//Loading View
					$this->load->view('view_reg');
				
				}
				*/
				
			}
        }
}
?>
</html>
