<?php
class Product_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
	public function get_product_data($product_name){
		$this->db->where('cat_name',$product_name);
		$q=$this->db->get('products');
		return $q->result();
	}
	public function get_product_detail_data($id){
		$this->db->where('id',$id);
		$r=$this->db->get("products");
		return $r->result();
	}
	public function get_brands_data(){
		$q=$this->db->get('brands');
		return $q->result();
	}
	public function get_brand_data_by_id($id){
		$this->db->where('brand_id',$id);
		$r=$this->db->get("products");
		return $r->result();
	}
	public function get_product_price_data(){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('pro_oprice >=','68');
		$query = $this->db->get();
		return $query->result();
	}
 
 
	
}