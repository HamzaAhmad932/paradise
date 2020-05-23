<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{
		$data['brands']=$this->Home_model->get_brands_data();
		//print_r($data['brands']);die();
        $data['slider']=$this->Home_model->get_slider_data();
        $data['contact']=$this->Home_model->get_contact_data();
        $data['top_brands']=$this->Home_model->get_top_brands_data();
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Contact/contact',$data);
		$this->load->view('Footer/footer',$data);
	}
}
