<?php
class Brands_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_brand($data){
		$this->db->insert('brands',$data);
	}
	public function get_brand_data(){
		$q=$this->db->get('brands');
		return $q->result();
	}
	public function get_brand_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("brands");
		return $r->result();
	}
	public function get_brand_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("brands");
	}
	public function get_brand_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("brands",$data);
	}
 
 
 
	 
	 

	
}