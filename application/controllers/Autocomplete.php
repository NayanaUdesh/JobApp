<?php
/**
* 
*/
class Autocomplete extends CI_Controller
{	
	private $selectedCat;
	
	function get_categories(){
		$this->load->model('mautocomplete');
		if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->mautocomplete->get_category($q);
		}
	}
	
	function get_selectedcat(){
		$selectedCat = $this->input->post('id');
		
	}
	
	function filter_subcategories(){
		$this->load->model('mautocomplete');
		if (isset($_GET['term'])){
			$qa = $this->selectedCat;
			$q = strtolower($_GET['term']);
			$this->mautocomplete->filter_subcat($q, $qa);
		}
	}
	
	function get_subcategories(){
		$this->load->model('mautocomplete');
		if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->mautocomplete->get_subcategory($q);
		}
	}
	
	
}
?>