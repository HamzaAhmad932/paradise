<?php
class Top_brands_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_slider($data){
		$this->db->insert('top_brands',$data);
	}
	public function get_slider_data(){
		$q=$this->db->get('top_brands');
		return $q->result();
	}
	public function get_slider_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("top_brands");
		return $r->result();
	}
	public function get_slider_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("top_brands");
	}
	public function get_slider_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("top_brands",$data);
	}
 
 
	 
	 

	
}