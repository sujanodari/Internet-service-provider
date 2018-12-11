<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unique extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	 /* index method directs towards UniqueISP home page */
	public function index()
	{	   /* getBandwidth from database using model class AND method getBandwidth and direct to home page */
		$data['bandwidthlist']= $this->Retrive->getBandwidth();
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('happycustomer');
		$this->load->view('footer');
	}
	 /* about method directs towards UniqueISP about page */
			public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	 /* login method directs towards UniqueISP login page */
			public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
		 /* help method directs towards UniqueISP User_manual page */
			public function help()
	{
		$this->load->view('user_manual');
	}
	 /* order method directs towards UniqueISP order page */
			public function order()
	{
		  /* getBandwidth from database using model class AND method getBandwidth and direct to order page */
		$data['bandwidthlist']= $this->Retrive->getBandwidth();
		$this->load->view('header');
		$this->load->view('order',$data);
		$this->load->view('happycustomer');
		$this->load->view('footer');
	}

/* function to check login
			It also creates session						
			using username and redirect to respective 
			methods using  type for user	*/
			public function checklogin(){
			$username = $this->input->post("name");
			$password = $this->input->post("password");
			 
			$data= $this->Retrive->checkLogin($username, $password);
			$status=$data->num_rows();
			if($status>0){
				foreach($data->result_array() as $dat);
				$this->session->set_userdata("name",$dat['username']);
				$this->session->set_userdata("type",$dat['type']);
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Welcome ".$this->session->name."');</script>");
				if($_SESSION['type']=='user')
				{
				redirect('/customer/profile');
				}
				elseif($_SESSION['type']=='manager')
				{
				redirect('/manager/profile');
				}
				elseif($_SESSION['type']=='staff')
				{
				redirect('/staff/profile');
				}
			}
			else{
				echo "<script language=\"javascript\">alert('Login Failed User name or Password do not match');</script>";
				$this->login();
			}
		}	
	/* methods to to destroy session */
	public function logout()
	{
		$this->session->sess_destroy();
		$this->login();
	}
}
?>