<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Menu_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 
		$data['row']=$this->Menu_model->get_menu_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Menu/menu',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_menu(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Menu/add_new_menu',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_menu_validate(){			 
			  
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'menu_name' =>$this->input->post('menu_name'),
 				'c_date'=>$c_date
				 
				);

		  if($this->Menu_model->insert_menu($data)){
		  	redirect('Menu');
		  }
		  else{
		  	redirect('Menu');
		  	 } 
	}
	public function Menu_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Menu_model->get_menu_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Menu/menu_edit',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Update_edit_menu(){

		$id=$this->input->post('hidden');
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
				'menu_name' =>$this->input->post('menu_name'),
 				'c_date'=>$c_date
				 
				);
		$this->Menu_model->get_menu_update($data,$id);  
		redirect('Menu');
}
	public function Menu_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Menu_model->get_menu_detail_data($id);
 
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Menu/menu_details',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Menu_delete($id){
		$this->Menu_model->get_menu_delete($id);
		redirect('Menu');
	}
}