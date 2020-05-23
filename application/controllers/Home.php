<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('text');
		$this->load->model('Home_model');
	}
	public function test(){
		// var_dump(md5(uniqid(rand(), true)));
		// $ext = pathinfo('hlkjslf.png', PATHINFO_EXTENSION);
		// var_dump($ext);
		$file_name = md5(uniqid(rand(), true));
		        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
		$refined_img_name = str_replace(" ", "_", $file_name);
		    $target_file = $config['upload_path'].$refined_img_name.'.'.$ext;
	}
	public function index()
	{
		$data['brands']=$this->Home_model->get_brands_data();
		//print_r($data['brands']);die();
        $data['slider']=$this->Home_model->get_slider_data();
        $data['top_brands']=$this->Home_model->get_top_brands_data();
        $data['latest_products'] = $this->Home_model->get_latest_products();
        $data['best_seller_products'] = $this->Home_model->get_best_saller_products();
        $data['hot_products'] = $this->Home_model->get_best_hot_products();
        
		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Slider/slider',$data);
		// $this->load->view('Feature_items/feature_item');
		$this->load->view('Body/body');
		if(!$data['latest_products'] === false){
			$this->load->view('Latest_product/latest_product', $data);
		}
		$this->load->view('Adds/add_one');
		if(!$data['best_seller_products'] === false){
			$this->load->view('Seller/best_seller', $data);
		}
		// $this->load->view('Adds/add_two');
		if(!$data['hot_products'] === false){
			$this->load->view('Products/hot_products', $data);
		}
		$this->load->view('Footer/footer',$data);
	}

	public function inquiry($product_id){

		$data['brands']=$this->Home_model->get_brands_data();
		$data['top_brands']=$this->Home_model->get_top_brands_data();
		$data['product'] = $this->Home_model->get_product($product_id);

		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Inquiry/inquiry_form', $data);
		$this->load->view('Footer/footer',$data);
	}

	public function congratulations(){

		$data['brands']=$this->Home_model->get_brands_data();
		$data['top_brands']=$this->Home_model->get_top_brands_data();

		$this->load->view('Header/header');
		$this->load->view('Top_bar/top_bar');
		$this->load->view('Nav_bar/nav_bar',$data);
		$this->load->view('Inquiry/congrats');
		$this->load->view('Footer/footer',$data);
	}

	public function submit_inquiry(){


		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('product_id', 'Product No.', 'required');
		if($this->form_validation->run() == FALSE)
		{
			redirect($_SERVER['HTTP_REFERER']);
		}


		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$product_id = $this->input->post('product_id');
		$description = $this->input->post('description');
		$address = 'intizarhussain@live.com';

		$subject = 'Product inquiry by: '.$first_name;
		
		$data['product'] = $this->Home_model->get_product($product_id);
	    $data['product']['cus_name'] = $first_name.' '.$last_name;
	    $data['product']['cus_phone'] = $phone;
	    $data['product']['cus_email'] = $email;
	    $data['product']['description'] = $description;
	    
		$message = $this->load->view('Mail/mail', $data, TRUE);
		
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_timeout' => '30',
            'smtp_user' => 'hamza.ahmad.seo@gmail.com',
            'smtp_pass' => 'qnqxtltbssycsjup',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'wordwrap' => TRUE,
            'mailtype' => 'html'
            // 'protocol' => 'smtp',
            // 'smtp_host' => 'ssl://smtp.googlemail.com',
            // 'smtp_port' => 465,
            // 'smtp_user' => 'hamza.ahmad.seo@gmail.com',
            // 'smtp_pass' => 'qnqxtltbssycsjup',
            // 'mailtype'  => 'html', 
            // 'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");


        $this->email->to($address);
        $this->email->from($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        $status = $this->email->send();
        echo $this->email->print_debugger();
        if($status){
        	$this->congratulations();
        }else{
        	redirect($_SERVER['HTTP_REFERER']);
        }
	}
	
	public function mail_template(){
	    
	
	    $this->load->view('Mail/mail', $data);   
	}
}