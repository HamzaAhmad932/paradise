<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Body/admin_body',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	 
	 
}
