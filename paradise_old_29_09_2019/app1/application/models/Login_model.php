<?php
class Login_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
	public function login($user_name,$password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$user_name);
		$this->db->where('password',$password);
		$query=$this->db->get();
		if($query->row()){
			return $query->row();
		}else{
			return false;
		}
	}
 
 
	 
	 

	
}