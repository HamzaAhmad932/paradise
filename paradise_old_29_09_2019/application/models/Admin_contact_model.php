<?php
class Admin_contact_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_contact($data){
		$this->db->insert('contact',$data);
	}
	public function get_contact_edit_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("contact");
		return $r->result();
	}
	public function get_contact_data_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("contact",$data);

	}
	public function get_contact_data_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("contact");
	}
	public function get_contact_data(){
		$q=$this->db->get('contact');
		return $q->result();
	}
 
}