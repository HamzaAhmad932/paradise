<?php
class Menu_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_menu($data){
		$this->db->insert('menu',$data);
	}
	public function get_menu_data(){
		$q=$this->db->get('menu');
		return $q->result();
	}
	public function get_menu_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("menu");
		return $r->result();
	}
	public function get_menu_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("menu");
	}
	public function get_menu_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("menu",$data);
	}
 
 
 
	 
	 

	
}