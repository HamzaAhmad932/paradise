<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Category_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 
		$data['row']=$this->Category_model->get_category_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Category/category',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_category(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Category/add_new_category',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_category_validate(){			 
			  
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'cat_name' =>$this->input->post('cat_name'),
 				'c_date'=>$c_date
				 
				);

		  if($this->Category_model->insert_category($data)){
		  	redirect('Category');
		  }
		  else{
		  	redirect('Category');
		  	 } 
	}
	public function Category_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Category_model->get_category_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Category/category_edit',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Update_edit_category(){

		$id=$this->input->post('hidden');
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'cat_name' =>$this->input->post('cat_name'),
 				'c_date'=>$c_date
				 
				);
		$this->Category_model->get_category_update($data,$id);  
		redirect('Category');
}
	public function Category_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Category_model->get_category_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Category/category_details',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Category_delete($id){
		$this->Category_model->get_category_delete($id);
		redirect('Category');
	}
}