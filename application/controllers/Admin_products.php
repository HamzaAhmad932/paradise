<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_products_model');
	}
	public function index(){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 
		$data['row']=$this->Admin_products_model->get_product_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Products/admin_products',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Addnew_product(){
		
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['brands']=$this->Admin_products_model->get_brands_data();
 		$data['row']=$this->Admin_products_model->get_category_data();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
	    $this->load->view('Products/add_new_product',$data);
	    $this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function addnew_product_validate(){

		// echo "<pre>";
	 //    	var_dump($this->input->post());
	 //    echo "</pre>";
	 //    die();
	 //    return;			 	     
		$config['upload_path']='./images/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='1800';
		$config['max_width']='4024';
		$config['max_height']='3468';
		$file_name = $_FILES["image"]["name"];
		$refined_img_name = str_replace(" ", "_", $file_name);
		$target_file = $config['upload_path'].$refined_img_name;
		$this->load->library('upload',$config);
		$this->upload->do_upload('image'); 
		$data=$this->upload->data();
		date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	     
		 $data = array(
	 		'pro_title'=>$this->input->post('pro_title'),
	 		'pro_oprice'=>$this->input->post('pro_oprice'),
	 		'pro_dprice'=>$this->input->post('pro_dprice'),
	 		'pro_sprice'=>$this->input->post('pro_sprice'),
	 		'pro_monthly_instal'=>$this->input->post('pro_monthly_instal'),
	 		'pro_des'=>$this->input->post('pro_des'),
			'img_name' =>$data['file_name'],
			'img_path' =>$target_file,
			'cat_name'=>$this->input->post('cat_name'),
			'brand_id'=>$this->input->post('brand_id'),
			'cat_pname'=>$this->input->post('cat_name'),
			'section_id'=> implode(', ',$this->input->post('section_id')),
			'c_date'=>$c_date				 
			);

		  if($this->Admin_products_model->insert_product($data)){
		  	redirect('Admin_products');
		  }
		  else{
		  	redirect('Admin_products');
		  	 } 
	}
	public function Product_edit($id){
	 
		$data['row']=$this->Admin_products_model->get_product_edit_data($id);
		$added_sections = explode(', ', $data['row'][0]->section_id);
		$check = (in_array('1', $added_sections)) ? 'checked' : '';

		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
 		$this->load->view('Sidebar/admin_sidebar',$data);
		$this->load->view('Products/product_edit',$data);
		$this->load->view('Footer/admin_footer');
	}
	public function update_products(){
		 date_default_timezone_set("Asia/Karachi");
		$c_date=date("Y-m-d h:i:sa");	
	    $config['upload_path']='./images/';
        $config['allowed_types']='gif|jpg|png';
        $config['max_size']='1800';
        $config['max_width']='4024';
        $config['max_height']='3468';
		$file_name = $_FILES["image"]["name"];
		$refined_img_name = str_replace(" ", "_", $file_name);
		$target_file = $config['upload_path'].$refined_img_name;
	    // echo "<pre>";
	    // 	var_dump($this->input->post('hidden'));
	    // 	var_dump($_FILES["image"]["name"]);
	    // 	var_dump($refined_img_name);
	    // 	var_dump(basename($_FILES["image"]["name"]));
	    // 	var_dump($target_file);
	    // echo "</pre>";
	    // die();
	    // return;
       $this->load->library('upload',$config);
	    if(!$this->upload->do_upload('image')){ 
	      	$id=$this->input->post('hidden');
	      	$data = array(
			    'pro_title'=>$this->input->post('pro_title'),
		 		'pro_oprice'=>$this->input->post('pro_oprice'),
		 		'pro_dprice'=>$this->input->post('pro_dprice'),
		 		'pro_sprice'=>$this->input->post('pro_sprice'),
		 		'pro_monthly_instal'=>$this->input->post('pro_monthly_instal'),
		 		'pro_des'=>$this->input->post('pro_des'),
				'cat_name'=>$this->input->post('cat_name'),
				'cat_pname'=>$this->input->post('cat_name'),
				'section_id'=> implode(', ',$this->input->post('section_id')),
				'c_date'=>$c_date				 
			 );
		$this->Admin_products_model->get_product_data_update($data,$id);  
		 redirect('Admin_products');
            
        }

        else{

		$id=$this->input->post('hidden');
		$data = array(
			    'pro_title'=>$this->input->post('pro_title'),
		 		'pro_oprice'=>$this->input->post('pro_oprice'),
		 		'pro_dprice'=>$this->input->post('pro_dprice'),
		 		'pro_sprice'=>$this->input->post('pro_sprice'),
		 		'pro_monthly_instal'=>$this->input->post('pro_monthly_instal'),
		 		'pro_des'=>$this->input->post('pro_des'),
				'img_name' =>$data['file_name'],
				'img_path' =>$target_file,
				'cat_name'=>$this->input->post('cat_name'),
				'cat_pname'=>$this->input->post('cat_name'),
				'section_id'=> implode(', ',$this->input->post('section_id')),
				'c_date'=>$c_date
			 );
		$this->Admin_products_model->get_product_data_update($data,$id);  
		redirect('Admin_products');

	}
	}
	public function Product_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Admin_products_model->get_product_edit_data($id);
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
 		$this->load->view('Sidebar/admin_sidebar',$data);
		$this->load->view('Products/product_admin_detail',$data);
		$this->load->view('Footer/admin_footer');
		}
		else{
				redirect('Login');
		}
	}
	public function Product_delete($id){
		$this->Admin_products_model->get_product_data_delete($id);
		redirect('Admin_products');
	}
	public function Category_edit($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Admin_products_model->get_category_detail_data($id);
 
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
		$this->Admin_products_model->get_category_update($data,$id);  
		redirect('Category');
}
	public function Category_detail($id){
		if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
	 	$data['row']=$this->Admin_products_model->get_category_detail_data($id);
 
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
		$this->Admin_products_model->get_category_delete($id);
		redirect('Category');
	}
	public function Addimage_gallery($id){
	if(isset($this->session->userdata['logged_in'])) {
			$sess_data=$this->session->userdata('logged_in');
			//print_r($sess_data); die();
		$data['username']=$sess_data;
 		$data['id']=$id;
 		//print_r($data['id']);die();
		$this->load->view('Header/admin_header');
	    $this->load->view('Top_bar/admin_topbar');
	    $this->load->view('Sidebar/admin_sidebar',$data);
		$this->load->view('Products/addimage_gallery',$data);
		$this->load->view('Footer/admin_footer');		}
		else{
				redirect('Login');
		}
       }
       public function addimage_gallery_validate(){
			 	$post_data = $_POST;
			 	if(isset($post_data)){		 			 
				$images['brand_id'] = $this->input->post('hidden'); 
				//$images['u_fk'] = $u_fk;
				print_r($images['brand_id']);
				$upload_path = 'upload/';
                if (!is_dir($upload_path)) {
                    mkdir($upload_path, 0777, TRUE);
                }
                for ($i = 0; $i < sizeof($_FILES['file']['name']); $i++) {
                    if (!empty($_FILES['file']['name'][$i]) && $_FILES['file']['error'][$i] == 0) {
                        $file_name = $_FILES['file']['name'][$i];
                        move_uploaded_file($_FILES['file']['tmp_name'][$i], $upload_path . $file_name);
                        $images['image_url'] ="./upload/".$_FILES['file']['name'][$i];
                        $this->Admin_products_model->insert_gallery_images($images);

                    }
                } 
				
				redirect('Admin_products');	 
		}//end of if statement.  		  
	}

}