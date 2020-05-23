<?php
class Category_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_category($data){
		$this->db->insert('category',$data);
	}
	public function get_category_data(){
		$q=$this->db->get('category');
		return $q->result();
	}
	public function get_category_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("category");
		return $r->result();
	}
	public function get_category_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("category");
	}
	public function get_category_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("category",$data);
	}
 
 
 
	 
	 

	
}