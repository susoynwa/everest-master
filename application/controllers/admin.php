<?php
class Admin extends CI_Controller{
	function index() {
							
		$this->load->model('adminModel');
		$this->load->helper('form');
		$data['leftbar']=$this->load->view('admin/list','',true);
		$data['rightbar']=$this->load->view('home/rightbar','',true);
		$data['navigation']=$this->load->view('navigation','',true);
			
			


		$this->load->view('layout/main',$data);
	}//end of index
	
	function login() {
		$this->load->helper('form');
		$this->load->model('adminModel');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$userbool=$this->adminModel->checkUser($username,$password);
		$logged_in=$this->adminModel->checkSession();
		
		if($userbool==true && $logged_in==true){

			$data['leftbar']=$this->load->view('admin/default','',true);
		}
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
			}
		
		$data['rightbar']=$this->load->view('home/rightbar','',true);
		$data['navigation']=$this->load->view('navigation','',true);
		$this->load->view('layout/main',$data);
	}
	
	function logout(){
	$this->load->model('adminModel');
	$this->adminModel->logout();
	$this->load->helper('url');

	 $url=$this->config->base_url('admin/index');
	  redirect($url, 'refresh');	
	}//end of logout
	
	function itemManagement(){
		$this->load->model('adminModel');
		if($this->adminModel->checkSession()==true){
			$data['leftbar']=$this->load->view('admin/item','',true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}//end of itemManagement
	
	
	function newItem() {
		$this->load->model('adminModel');
		if($this->adminModel->checkSession()==true){
			$this->load->helper('form');
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['leftbar']=$this->load->view('admin/newitem',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
		
	}//end of newitem
	
	function addNewItem(){
	
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
			$newitem=array(
						'name'			=>	$this->input->post('name'),
						'itemcode'		=>	$this->input->post('itemcode'),
						'sizes'			=>	$this->input->post('sizes'),
						'weight'		=>	$this->input->post('weight'),
						'price'			=>	$this->input->post('price'),
						'description'	=>	$this->input->post('description'),
		);
		
		$target_path = $_SERVER['DOCUMENT_ROOT'].'/ci/assets/items/'.basename($_FILES['myfile']['name']);
		
	
		//echo $target_path;
		move_uploaded_file($_FILES['myfile']['tmp_name'],$target_path);

			$data['navTab']=$this->load->view('admin/item','',true);
			$data['newitem']=$this->itemModel->addNewItem_db($newitem);
			$data['leftbar']=$this->load->view('admin/addnewitem','',true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}//end of addnewitem
	
	function editItemList(){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['item_list']=$this->itemModel->getAll_db();
			$data['leftbar']=$this->load->view('admin/editItemList',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function editItem($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
			$this->load->helper('form');
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['item1']=$this->itemModel->getItem_db($id);
			
			$data['leftbar']=$this->load->view('admin/editItem',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function deleteItemList(){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['item_list']=$this->itemModel->getAll_db();
			$data['leftbar']=$this->load->view('admin/deleteItemList',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	
	function deleteItem($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['item1']=$this->itemModel->getItem_db($id);
			
			$data['leftbar']=$this->load->view('admin/deleteItem',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function confirmDelete($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/item','',true);
			$data['item1']=$this->itemModel->deleteItem_db($id);
			
			$data['leftbar']=$this->load->view('admin/confirmDelete',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function editedItem($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/item','',true);
			$ietmData = array(
						'name'			=>	$this->input->post('name'),
						'itemcode'		=>	$this->input->post('itemcode'),
						'sizes'			=>	$this->input->post('sizes'),
						'weight'		=>	$this->input->post('weight'),
						'price'			=>	$this->input->post('price'),
						'image'			=>	$this->input->post(''),
						'description'	=>	$this->input->post('description'),
		);
			$data['item1']=$this->itemModel->getItem_db($id);
			$data['leftbar']=$this->load->view('admin/editedItem',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function newsManagement(){
		$this->load->model('adminModel');
		if($this->adminModel->checkSession()==true){
			$data['leftbar']=$this->load->view('admin/news','',true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}//end of newsManagement
	
	function newNews() {
		$this->load->model('adminModel');
		if($this->adminModel->checkSession()==true){
			$this->load->helper('form');
			$data['navTab']=$this->load->view('admin/news','',true);
			
			$data['leftbar']=$this->load->view('admin/newNews',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
		
	}//end of newitem
	
	function addNewNews(){
	
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
			$newnews=array(
						'title'			=>	$this->input->post('title'),
						'type'		=>	$this->input->post('type'),
						'author'			=>	$this->input->post('author'),
						'image'		=>	$this->input->post('image'),
						'link'			=>	$this->input->post('link'),
						'description'	=>	$this->input->post('description'),
		);
		
	//	$target_path = $_SERVER['DOCUMENT_ROOT'].'/ci/assets/news/'.basename($_FILES['myfile']['name']);
		
	
		//echo $target_path;
	//	move_uploaded_file($_FILES['myfile']['tmp_name'],$target_path);

			$data['navTab']=$this->load->view('admin/news','',true);
			$data['newnews']=$this->itemModel->addNewNews_db($newnews);
			$data['leftbar']=$this->load->view('admin/newNews','',true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}//end of addnewnews
	
	function editNewsList(){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/news','',true);
			$data['news_list']=$this->itemModel->getAllNews_db();
			$data['leftbar']=$this->load->view('admin/editNewsList',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function editNews($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
			$this->load->helper('form');
			$data['navTab']=$this->load->view('admin/news','',true);
			$data['item1']=$this->itemModel->getNews_db($id);
			
			$data['leftbar']=$this->load->view('admin/editNews',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function deleteNewsList(){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/news','',true);
			$data['news_list']=$this->itemModel->getAllNews_db();
			$data['leftbar']=$this->load->view('admin/deleteNewsList',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	
	function deleteNews($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/News','',true);
			$data['item1']=$this->itemModel->getNews_db($id);
			
			$data['leftbar']=$this->load->view('admin/deleteNews',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function confirmDeleteNews($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/news','',true);
			$data['item1']=$this->itemModel->deleteNews_db($id);
			
			$data['leftbar']=$this->load->view('admin/confirmDeleteNews',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
	function editednews($id){
		$this->load->model('adminModel');
		$this->load->model('itemModel');

		if($this->adminModel->checkSession()==true){
		
			$data['navTab']=$this->load->view('admin/news','',true);
			$ietmData = array(
						'title'			=>	$this->input->post('title'),
						'type'		=>	$this->input->post('type'),
						'author'			=>	$this->input->post('author'),
						'image'		=>	$this->input->post('image'),
						'link'			=>	$this->input->post('link'),
						'description'	=>	$this->input->post('description'),
		);
			$data['news1']=$this->itemModel->getNews_db($id);
			$data['leftbar']=$this->load->view('admin/editedNews',$data,true);
			$data['rightbar']=$this->load->view('home/rightbar','',true);
			$data['navigation']=$this->load->view('navigation','',true);
			$this->load->view('layout/main',$data);
		}//end of if
		else
		{
			$this->load->helper('url');
			$url=$this->config->base_url('admin/index');
	  		redirect($url, 'refresh');	
		}//end of else
	}
	
}//end of class
?>