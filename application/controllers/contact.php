<?php
	class Contact extends CI_Controller{
		function index() {
					
			$data['leftbar']=$this->load->view('contact/leftbar','',true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			
			
			$this->load->view('layout/main',$data);
		}//end of index
	}//end of class
	?>