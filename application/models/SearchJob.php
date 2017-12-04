<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class SearchJob extends CI_Model{
    /*
     * get rows from the posts table
     */
    function getRows($params = array()){

		$this->db->select('*');
        $this->db->from('jobs');
		
		if(!empty($params['search']['keywords'])){
            $this->db->like('title',$params['search']['keywords']);
        }
        //sort data by ascending or desceding order
        if(!empty($params['search']['sortBy'])){
			if($params['search']['sortBy'] != "All"){
				$this->db->like('type',$params['search']['sortBy']);
			}
        }
		if(!empty($params['search']['location'])){
			if($params['search']['location'] != "All"){
				$this->db->like('location',$params['search']['location']);
			}
        }
		
		
		else{
            // Do something if needed
			//$this->db->where('edate >=', 'CURDATE()', FALSE);
        }
		
		$this->db->order_by("edate", "desc");
		
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        //get records
        $query = $this->db->get();
        //return fetched data
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

}