<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Promotion_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$data['row']=$this->Promotion_model->get_promotion_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Promotions/admin_slider',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_image(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Promotions/add_new_image',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_slider_validate(){			 
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
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
				'c_date'=>$c_date
				 
				);

		  if($this->Promotion_model->insert_promotion($data)){
		  	redirect('Promotions');
		  }
		  else{
		  	redirect('Promotions');
		  	 } 
	}
	public function Slider_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['slider']=$this->Promotion_model->get_promotion_detail_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Promotions/slider_edit',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Update_edit_slider(){
		 $config['upload_path']='./images/';
		        $config['allowed_types']='gif|jpg|png';
		        $config['max_size']='1800';
		        $config['max_width']='4024';
		        $config['max_height']='3468';
		    $target_file = $config['upload_path'].basename($_FILES["image"]["name"]);
		       $this->load->library('upload',$config);
			      if(!$this->upload->do_upload('image')){ 
		 redirect('Promotions');
            
        }

        else{
            $data=$this->upload->data();

		$id=$this->input->post('hidden');
		$data = array(
			// 'name'=>$this->input->post('name') , 
			// 	'fname'=>$this->input->post('fname') , 
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file
			 );
		$this->Promotion_model->get_promotion_update($data,$id);  
		redirect('Promotions');

	}
}
	public function Slider_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['slider']=$this->Promotion_model->get_promotion_detail_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Promotions/slider_details',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Slider_delete($id){
		$this->Promotion_model->get_promotion_delete($id);
		redirect('Promotions');
	}
		 
}
