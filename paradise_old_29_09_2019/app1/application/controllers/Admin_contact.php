<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_contact_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 
		$data['row']=$this->Admin_contact_model->get_contact_data();
		//print_r($data['row']);die();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Contact/admin_contact',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_contact(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar');
	    $this->load->view('Contact/add_new_contact');
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_contact_validate(){			 	     
		  
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
		 		'city_name'=>$this->input->post('city_name'),
		 		'phone'=>$this->input->post('phone'),
		 		'email'=>$this->input->post('email'),
		 		'address'=>$this->input->post('address'),
				'c_date'=>$c_date
				 
				);

		  if($this->Admin_contact_model->insert_contact($data)){
		  	redirect('Admin_contact');
		  }
		  else{
		  	redirect('Admin_contact');
		  	 } 
	}
	public function Contact_edit($id){
	 
		$data['row']=$this->Admin_contact_model->get_contact_edit_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
 		$this->load->view('Sidebar/admin_sidebar',$data);
		$this->load->view('Contact/contact_edit',$data);
		$this->load->view('Footer/admin_footer');
	}
	public function update_contact(){
		 date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	 
			      	$id=$this->input->post('hidden');
			      $data = array(
			     'city_name'=>$this->input->post('city_name'),
		 		'phone'=>$this->input->post('phone'),
		 		'email'=>$this->input->post('email'),
		 		'address'=>$this->input->post('address'),
				'c_date'=>$c_date
			 );
		$this->Admin_contact_model->get_contact_data_update($data,$id);  
		 redirect('Admin_contact');

	}
	public function Contact_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Admin_contact_model->get_contact_edit_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
 		$this->load->view('Sidebar/admin_sidebar',$data);
		$this->load->view('Contact/contact_admin_detail',$data);
		$this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Contact_delete($id){
		$this->Admin_contact_model->get_contact_data_delete($id);
		redirect('Admin_contact');
	}
	 
}