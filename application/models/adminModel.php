<?php
class AdminModel extends CI_Model{
	function checkUser($username,$password){
		$this->db->select('username');
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password', $password);
		$query=$this->db->get();
		if($query->num_rows()==1){
			$session_data = array(
                   'username'  => $username,
                   'logged_in' => TRUE
               );

			$this->session->set_userdata($session_data);
			return true;	
		}
		else
		return false;
	}//end of checkuser
	
	function logout(){
		$session_data = array(
                   'username'  => '',
                   'logged_in' => FALSE
					);
		$this->session->unset_userdata($session_data);		
		$this->session->sess_destroy();
	}//end of logout
	
	function checkSession(){
		$session_data=$this->session->all_userdata();
		if(isset($session_data['logged_in'])){

			if($session_data['logged_in']==TRUE){
				return true;
			}
			else {
				return false;
			}
		}
		else
		return false;
		
		
		
	}//end of checksession
	
}//end of class
?>