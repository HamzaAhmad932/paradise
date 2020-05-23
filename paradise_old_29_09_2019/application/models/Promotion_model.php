<?php
class Promotion_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_promotion($data){
		$this->db->insert('promotions',$data);
	}
	public function get_promotion_data(){
		$q=$this->db->get('promotions');
		return $q->result();
	}
	public function get_promotion_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("promotions");
		return $r->result();
	}
	public function get_promotion_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("promotions");
	}
	public function get_promotion_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("promotions",$data);
	}
 
 
	 
	 

	
}