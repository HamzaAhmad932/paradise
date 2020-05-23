<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{
		$data['brands']=$this->Home_model->get_brands_data();
		//print_r($data['brands']);die();
        $data['slider']=$this->Home_model->get_slider_data();
        $data['top_brands']=$this->Home_model->get_top_brands_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Slider/slider',$data);
		$this->load->view('Feature_items/feature_item');
		$this->load->view('Body/body');
		$this->load->view('Sale_product/sale_product');
		$this->load->view('Adds/add_one');
		$this->load->view('Seller/best_seller');
		$this->load->view('Adds/add_two');
		$this->load->view('Products/hot_products');
		$this->load->view('Footer/footer',$data);
	}
}
