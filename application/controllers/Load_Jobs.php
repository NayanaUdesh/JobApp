<?php
/**
* 
*/
class Load_Jobs extends CI_Controller
{	
	public function loadAllJobs($jobType)
	{
		$this->load->model('Model_Load_Jobs');
		$queryResult=$this->Model_Load_Jobs->$jobType();
		$data['result_array']=$queryResult->result_array();
		//echo var_dump($data['result_array']);
		//		echo '<br>.................................</br>';
		$this->load->view('view_jobs',$data);
	}
}
?>