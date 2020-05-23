<?php
class Admin_products_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
 	public function insert_product($data){
		$this->db->insert('products',$data);
	}
	public function get_product_edit_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("products");
		return $r->result();
	}
	public function get_product_data_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("products",$data);

	}
	public function get_product_data_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("products");
	}
	public function get_category_data(){
		$q=$this->db->get('category');
		return $q->result();
	}
	public function get_brands_data(){
		$q=$this->db->get('brands');
		return $q->result();
	}
	public function get_product_data(){
		$q=$this->db->get('products');
		return $q->result();
	}
	public function get_product_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("category");
		return $r->result();
	}
	public function get_product_delete($id){
		$this->db->where('id',$id);
		$this->db->delete("category");
	}
	public function get_product_update($data,$id){
		$this->db->where('id',$id);
		$this->db->update("category",$data);
	}
 	public function insert_gallery_images($images){
		 $this->db->insert('product_images',$images);	 
	}
 
 
	 
	 

	
}