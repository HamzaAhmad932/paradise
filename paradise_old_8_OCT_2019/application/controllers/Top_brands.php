<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top_brands extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Top_brands_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
		$data['row']=$this->Top_brands_model->get_slider_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Top_brands/admin_slider',$data);
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
	    $this->load->view('Top_brands/add_new_image',$data);
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

		  if($this->Top_brands_model->insert_slider($data)){
		  	redirect('Top_brands');
		  }
		  else{
		  	redirect('Top_brands');
		  	 } 
	}
	public function Slider_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['slider']=$this->Top_brands_model->get_slider_detail_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Top_brands/slider_edit',$data);
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
		 redirect('Top_brands');
            
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
		$this->Top_brands_model->get_slider_update($data,$id);  
		redirect('Top_brands');

	}
}
	public function Slider_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['slider']=$this->Top_brands_model->get_slider_detail_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Top_brands/slider_details',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Slider_delete($id){
		$this->Top_brands_model->get_slider_delete($id);
		redirect('Top_brands');
	}
		 
}
