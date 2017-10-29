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
		$this->load->view('view_jobs',$data);
	}
	


	/*$data['title']="User Records Page";
				$data['Heading']="Loading Data From DB Table";
				$this->load->model('User_model');
				$resultQuery = $this->User_model->getmyUsers();
				$data['col_header'] = $resultQuery->list_fields();
				$data['result_array'] = $resultQuery->result_array();
				$data['result'] = $resultQuery->result();
				$data['row'] = $resultQuery->row();


				$data['num_rows'] = $resultQuery->num_rows();
				$data['num_fields'] = $resultQuery->num_fields();
				$data['free_result'] = $resultQuery->free_result();
				echo var_dump($data['col_header']);
				echo '<br>.................................</br>';
				echo var_dump($data['result_array']);
				echo '<br>.................................</br>';
				echo var_dump($data['result']);
				echo '<br>.................................</br>';
				echo var_dump($data['row']);
				echo '<br>.................................</br>';
				echo var_dump($data['num_rows']);
				echo '<br>.................................</br>';
				echo var_dump($data['num_fields']);
				echo '<br>.................................</br>';
				echo var_dump($data['free_result']);
				$this->load->view('Home/LoadResults',$data);*/
}
?>