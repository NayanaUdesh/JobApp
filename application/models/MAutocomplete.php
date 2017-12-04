<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MAutocomplete extends CI_Model {

    function get_category($q){
		$this->db->select('category_id, category_name');
		$this->db->like('category_name', $q);
		$query = $this->db->get('category');
		if($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$new_row['label']=htmlentities(stripslashes($row['category_id']));
				$new_row['value']=htmlentities(stripslashes($row['category_name']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set); //format the array into json data
		}
	}
	
	
	function filter_subcat($q, $qa){
		$this->db->select('category_id');
		$this->db->like('category_name', $qa);
		$jobres = $this->db->get('category');

		$jrow = $jobres->row();
		$jid = $jrow->category_id;

		$this->db->select('cat_id, sub_name');
		$this->db->like('cat_id', $jid);
		$query = $this->db->get('subcategory');
		if($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$new_row['label']=htmlentities(stripslashes($row['cat_id']));
				$new_row['value']=htmlentities(stripslashes($row['sub_name']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set); //format the array into json data
		}
	}
	
	
	function get_subcategory($q){
		$this->db->select('cat_id, sub_name');
		$this->db->like('sub_name', $q);
		$query = $this->db->get('subcategory');
		if($query->num_rows() > 0){
			foreach ($query->result_array() as $row){
				$new_row['label']=htmlentities(stripslashes($row['cat_id']));
				$new_row['value']=htmlentities(stripslashes($row['sub_name']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set); //format the array into json data
		}
	}
	
}
