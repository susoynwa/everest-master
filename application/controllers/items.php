<?php
class Items extends CI_Controller{
		function index(){
			$this->load->model('itemModel');
			$data['item_list']=$this->itemModel->getAll_db();
			$item_count=$this->itemModel->getCount_db()-1;
			$data['item1']=$this->itemModel->getLastItem_db();
			$data['leftbar']=$this->load->view('items/leftbar',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			
			
			$this->load->view('layout/main',$data);
		}//end of index
		
		function myitem($id) {
			$this->load->model('itemModel');
			$data['item_list']=$this->itemModel->getAll_db();
			$data['item1']=$this->itemModel->getItem_db($id);
			$data['leftbar']=$this->load->view('items/myitem',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			
			
			$this->load->view('layout/main',$data);
		}
		
}//end of class