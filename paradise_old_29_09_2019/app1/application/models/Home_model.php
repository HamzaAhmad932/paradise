<?php
class Home_model extends CI_Model{
	public function __Construct(){
		parent::__Construct();
	}
	public function get_menu_data(){
		$q=$this->db->get('menu');
		return $q->result();
	}
	public function get_contact_data(){
		$q=$this->db->get('contact');
		return $q->result();
	}
	public function get_slider_data(){
		$q=$this->db->get('slider');
		return $q->result();
	}
	public function get_brands_data(){
		$q=$this->db->get('brands');
		return $q->result();
	}
	public function get_products_images_data($id){
		$this->db->where('brand_id',$id);
		$r=$this->db->get("product_images");
		return $r->result();
	}
	public function get_top_brands_data(){
		$q=$this->db->get('top_brands');
		return $q->result();
	}
	 
 
	
}