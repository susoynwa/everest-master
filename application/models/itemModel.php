<?php
class ItemModel extends CI_Model{
	function getAll_db(){
		
		$this->db->select(array('*'));
		$this->db->from('items');
		$query=$this->db->get();
		return $query->result();
		//return $this->$query->result();
		
	}//end of getall
	
	function getCount_db(){
		$query=$this->db->query('SELECT * FROM items');
		return  $query->num_fields();
		
		
	}//end of getcount
	
	function getItem_db($item_id){
		$this->db->select(array('*'));
		$this->db->from('items');
		$this->db->where('id',$item_id);
		$query=$this->db->get();
		return $query->row();
	}
	
	function getLastItem_db() {
		$query=$this->db->query('SELECT * FROM items WHERE ID = (SELECT MAX(ID)  FROM items)');
		return $query->row();
	}
	
	function deleteItem_db($id){
		$this->db->delete('items', array('id' => $id)); 
	}
	
	function addNewItem_db($newitem){
		
		return $this->db->insert('items',$newitem);
			
	}//end of addNewitem_db
	
	function editItem_db($id,$itemData){
		

$this->db->where('id', $id);
$this->db->update('items', $itemData); 
	}
	
	
	
	//news queries
	
	function getAllNews_db(){
		
		$this->db->select(array('*'));
		$this->db->from('news');
		$query=$this->db->get();
		return $query->result();
		//return $this->$query->result();
		
	}//end of getallNews
	
	function getCountNews_db(){
		$query=$this->db->query('SELECT * FROM news');
		return  $query->num_fields();
		
		
	}//end of getcount
	
	function getNews_db($id){
		$this->db->select(array('*'));
		$this->db->from('news');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	
	function getLastNews_db() {
		$query=$this->db->query('SELECT * FROM news WHERE ID = (SELECT MAX(ID)  FROM news)');
		return $query->row();
	}
	
	function deleteNews_db($id){
		$this->db->delete('news', array('id' => $id)); 
	}
	
	function addNewNews_db($newnews){
		
		return $this->db->insert('News',$newnews);
			
	}//end of addNewNews_db
	
	function editNews_db($id,$newsData){
		

		$this->db->where('id', $id);
		$this->db->update('news', $newsData); 
	}
		
}//end of model