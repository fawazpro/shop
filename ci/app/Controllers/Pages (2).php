<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index()
	{
		$footer_data=[
			'message' => 'Welcome on board'
		];
		$this->load->view('header');
		$this->load->view('reg');
		$this->load->view('footer', $footer_data);
	}
	
	public function register()
	{
		$header_data = [
			'title' => 'SGM Mall Vendor Registration'
		];
		$footer_data = [
			'message' => NULL
		];
		$this->load->view('sign/header', $header_data);
		$this->load->view('sign/register');
		$this->load->view('sign/footer', $footer_data);
	}
	
	public function login()
	{
		$header_data = [
			'title' => 'SGM Mall Vendor Dashboard Login'
		];
		$footer_data = [
			'message' => NULL
		];
		$this->load->view('sign/header', $header_data);
		$this->load->view('sign/login');
		$this->load->view('sign/footer', $footer_data);
	}
    
	public function formreg1()
	{
		echo('I am here');
		$config['upload_path']          = './assets/stores/';
		$config['allowed_types']        = 'png|gif|svg|jpg';
		$config['max_size']             = 50000;

		$this->load->library('upload', $config);
		echo ('loaded');

		if ($this->upload->do_upload('slogo') == TRUE) {
			echo ('I uploaded');

			$slogo = $this->upload->data('file_name');
			$data=[
			'store_name' => $this->input->post('sname'),
			'store_fullname' => $this->input->post('sfullname'),
			'store_password' => $this->input->post('spassword'),
			'store_address' => $this->input->post('saddress'),
			'store_phone' => $this->input->post('sphone'),
			'store_email' => $this->input->post('semail'),
			'store_logo' => $slogo,
			'store_cloudinaryapi' => $this->input->post('cloudinaryapi'),
			'store_cloudinarysec' => $this->input->post('cloudinarysec'),
			'store_bank' => $this->input->post('sbank'),
			'store_accname' => $this->input->post('saccname'),
			'store_accnumber' => $this->input->post('saccnumber'),
			];

			if ($this->directus->postItem('store',$data)) {
				$err = 'Successfull';
				$this->dashboard($err);
			} else {
				$err = 'Failed';
				$this->dashboard($err);
			}
		} else{
			$err =  $this->upload->display_errors();
			echo($err);
			$this->dashboard($err);
			
		}
        
	}

	public function dashboard($message)
	{
		$footer_data = [
			'message' => $message
		];
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer', $footer_data);
	}
}
