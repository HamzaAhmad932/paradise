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
	public function get_latest_products()
	{
		$sql = "select * from products where section_id like '%1%' order by c_date desc limit 20;";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function get_best_saller_products(){
		$sql = "select * from products where section_id like '%2%' order by c_date desc limit 20;";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function get_best_hot_products(){
		$sql = "select * from products where section_id like '%3%' order by c_date desc limit 20;";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}