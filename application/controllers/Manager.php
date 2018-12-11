<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
	/* this method load  manager dashboard*/
		public function profile()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='manager')
			{
				$name=$this->session->name;
			   	$data['picture']= $this->Retrive->getPic($name);
			    $data['user']= $this->Retrive->getUsers($name);
				$this->load->view('staff/headermanager');
				$this->load->view('user/customer',$data);
				$this->load->view('footer');
			}
			else
			{
				echo "Session Expired";
				redirect('/unique/login');
			}
	}
	/* this method load form  for manager to update profile*/
	public function updateprofile()
	{
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				$this->load->view('staff/headermanager');
				$this->load->view('user/updateprofile');
				$this->load->helper('form');
				$this->load->view('custom_view', array('error' => ' ' ));
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}
	}
	/* this method load form  for manager to update bandwidth*/
	public function updatebandwidth()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='manager'){
				 
				$data['bandwidthlist']= $this->Retrive->getBandwidth();
				$this->load->view('staff/headermanager');
				$this->load->view('staff/updatebandwidth',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}	
	}
	/* this method load form  for manager to update customerprofile*/
	public function updatecustomer()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='manager'){
				$type='user';
				$this->load->view('staff/headermanager');
				 
				$data['userlist']= $this->Retrive->getUserss($type);
				$data['bandwidthlist']= $this->Retrive->getBandwidth();
				$this->load->view('staff/updatestaff',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}	
	}
	/* this method load form  for manager to update staff*/
	public function updatestaff()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='manager'){
				$type='staff';
				$this->load->view('staff/headermanager');
				 
				$data['userlist']= $this->Retrive->getUserss($type);
				$this->load->view('staff/updatemanager',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}	
	}
	}
	?>