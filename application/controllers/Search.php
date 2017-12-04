<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Search extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('searchjob');
        $this->load->library('Ajax_pagination');
        $this->perPage = 5;
    }
    
    public function index(){
        $data = array();
        
        //total rows count
        $totalRec = count($this->searchjob->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = 'search/ajaxPaginationData/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['posts'] = $this->searchjob->getRows(array('limit'=>$this->perPage));
        
        //load the view
        $this->load->view('view_search_results', $data);
    }
    
    function ajaxPaginationData(){
        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //set conditions for search
        $keywords = $this->input->post('jobsubcatauto');
        $sortBy = $this->input->post('job_type');
		$location = $this->input->post('joblocation');
        if(!empty($keywords)){
            $conditions['search']['keywords'] = $keywords;
        }
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
        }
         if(!empty($location)){
            $conditions['search']['location'] = $location;
        }
        //total rows count
        $totalRec = count($this->searchjob->getRows($conditions));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = 'search/ajaxPaginationData/';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['posts'] = $this->searchjob->getRows($conditions);
        
        //load the view
        $this->load->view('view_search_results', $data, false);
    }
}