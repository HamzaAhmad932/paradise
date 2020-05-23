<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Home_model');
	}
	public function index($id)
	{
	 
		$data['brands']=$this->Home_model->get_brands_data();
		$data['top_brands']=$this->Home_model->get_top_brands_data();
        //$data['menu']=$this->Home_model->get_menu_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Products/product_data');
		$this->load->view('Footer/footer',$data);
	}
	public function Products_data($product_name){
		$data['brands']=$this->Home_model->get_brands_data();
	 	$data['brands']=$this->Product_model->get_brands_data();
		$data['row']=$this->Product_model->get_product_data($product_name);
		$data['top_brands']=$this->Home_model->get_top_brands_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Products/product_data',$data);
		$this->load->view('Footer/footer',$data);
	}
	public function Products_detail($id){
		$data['images']=$this->Home_model->get_products_images_data($id);
	 	$data['brands']=$this->Home_model->get_brands_data();
		$data['row']=$this->Product_model->get_product_detail_data($id);
		$data['top_brands']=$this->Home_model->get_top_brands_data();
		$data['script'] = 'product_detail';
		
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Products/product_detail',$data);
		$this->load->view('Footer/footer',$data);
	}
	public function Brands_data($id){
		$data['images']=$this->Home_model->get_products_images_data($id);
		$data['brands']=$this->Home_model->get_brands_data();
	 	$data['brands']=$this->Product_model->get_brands_data();
		$data['row']=$this->Product_model->get_brand_data_by_id($id);
		$data['top_brands']=$this->Home_model->get_top_brands_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Products/brand_data',$data);
		$this->load->view('Footer/footer',$data);
	}
	public function product_price(){
		$data['brands']=$this->Home_model->get_brands_data();
	 	$data['brands']=$this->Product_model->get_brands_data();
		$data['row']=$this->Product_model->get_product_price_data();
		$data['top_brands']=$this->Home_model->get_top_brands_data();
		//print_r($data['row']);die();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Products/product_price_data',$data);
		$this->load->view('Footer/footer',$data);
	}
	
}
