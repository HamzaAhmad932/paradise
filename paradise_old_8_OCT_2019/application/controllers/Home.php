<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('Home_model');
	}
	public function test(){
		// var_dump(md5(uniqid(rand(), true)));
		// $ext = pathinfo('hlkjslf.png', PATHINFO_EXTENSION);
		// var_dump($ext);
		$file_name = md5(uniqid(rand(), true));
		        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
		$refined_img_name = str_replace(" ", "_", $file_name);
		    $target_file = $config['upload_path'].$refined_img_name.'.'.$ext;
	}
	public function index()
	{
		$data['brands']=$this->Home_model->get_brands_data();
		//print_r($data['brands']);die();
        $data['slider']=$this->Home_model->get_slider_data();
        $data['top_brands']=$this->Home_model->get_top_brands_data();
        $data['latest_products'] = $this->Home_model->get_latest_products();
        $data['best_seller_products'] = $this->Home_model->get_best_saller_products();
        $data['hot_products'] = $this->Home_model->get_best_hot_products();
        
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Slider/slider',$data);
		// $this->load->view('Feature_items/feature_item');
		$this->load->view('Body/body');
		if(!$data['latest_products'] === false){
			$this->load->view('Latest_product/latest_product', $data);
		}
		$this->load->view('Adds/add_one');
		if(!$data['best_seller_products'] === false){
			$this->load->view('Seller/best_seller', $data);
		}
		$this->load->view('Adds/add_two');
		if(!$data['hot_products'] === false){
			$this->load->view('Products/hot_products', $data);
		}
		$this->load->view('Footer/footer',$data);
	}
}
