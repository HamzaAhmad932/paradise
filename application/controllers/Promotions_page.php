<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions_page extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Promotion_model');
		$this->load->model('Home_model');
	}
	public function index()
	{
	 
		$data['brands']=$this->Home_model->get_brands_data();
        $data['promotion']=$this->Promotion_model->get_promotion_data();
        $data['top_brands']=$this->Home_model->get_top_brands_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data); 
		$this->load->view('Promotions/promotion_data',$data);
		$this->load->view('Footer/footer',$data);
	}
	 
	
}
