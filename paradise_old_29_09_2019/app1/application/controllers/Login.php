<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __Construct(){
		parent::__Construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
	    
		$this->load->view('Login/login');
 
	}
	public function validate(){
		$user_name=$this->input->post('username');
		$password=$this->input->post('password');
		$result=$this->Login_model->login($user_name,$password);
		 
		 //print_r($result->mobile); die();
		if($result){
				       $sess_array = array(
				       	'id'   =>$result->id,
				       	'username'=> $result->username,
				       	'full_name'=>$result->full_name,
				       	'email'   => $result->email,
				        'password'=> $result->password,
				        'assign_class'=> $result->assign_class,
				        'loggedin'=> TRUE
				       );
 			
				      $this->session->set_userdata('logged_in', $sess_array);
			     
			if($result->type==1){
				//print_r("Admin");die();
				$data['username,email']=$sess_array;
				 
				redirect ('Admin',$data);
			}
			 
			elseif($result->type==2){
				//print_r("Teacher");die();
				$data['username,full_name,email,password']=$sess_array;
				redirect ('Teacher',$data);
			}
			elseif($result->type==3){
				//print_r("Parent");die();
				$data['username,full_name,email,password']=$sess_array;
				redirect ('Parent',$data);
			}
			elseif($result->type==4){
				//print_r("Parent");die();
				$data['username,full_name,email,password,assign_class']=$sess_array;
				redirect ('Class_teacher',$data);
			}
			else{
				$this->session->set_flashdata('account_error', "Your account is not approve");
			redirect('Login');
			}
		}
		else{
			$this->session->set_flashdata('error', "Invalid User name and password");
			redirect('Login');
		}         

	}
	public function logout(){

   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Login', 'refresh');
 }
 
 
}
