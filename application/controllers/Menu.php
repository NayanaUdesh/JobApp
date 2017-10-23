<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <?php

    class Menu extends CI_Controller {

	public function PostJob(){
        $this->load->view("view_post_job");
    }
	
	public function AboutPage(){
        $this->load->view("view_about");
    }
  
	public function ContactPage(){
        $this->load->view("view_contact");
    }
  
	public function Advertise(){
        $this->load->view("view_advertise");
    }
}
?>
</html>