<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Brands_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 
		$data['row']=$this->Brands_model->get_brand_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Brands/brands',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_brand(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Brands/add_new_brand',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_brand_validate(){			 
			  $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		        $this->load->library('upload',$config);
			       $this->upload->do_upload('image'); 
			         $data=$this->upload->data();
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'brand_name' =>$this->input->post('brand_name'),
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
 				'c_date'=>$c_date
				 
				);

		  if($this->Brands_model->insert_brand($data)){
		  	redirect('Brands');
		  }
		  else{
		  	redirect('Brands');
		  	 } 
	}
	public function Brand_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Brands_model->get_brand_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Brands/brand_edit',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Update_edit_brand(){
			 date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	
			    $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		       $this->load->library('upload',$config);
			      if(!$this->upload->do_upload('image')){
		$id=$this->input->post('hidden');	     
		 $data = array(
				'brand_name' =>$this->input->post('brand_name'),
 				'c_date'=>$c_date
				 
				);
		$this->Brands_model->get_brand_update($data,$id);  
		redirect('Brands');
	}

        else{
            $data=$this->upload->data();

		$id=$this->input->post('hidden');
		$data = array(
			     'brand_name' =>$this->input->post('brand_name'),
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
				'c_date'=>$c_date
			 );
		$this->Brands_model->get_brand_update($data,$id);  
		redirect('Brands');

	}
}
	public function Brand_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Brands_model->get_brand_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Brands/brand_details',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Brand_delete($id){
		$this->Brands_model->get_brand_delete($id);
		redirect('Brands');
	}
}