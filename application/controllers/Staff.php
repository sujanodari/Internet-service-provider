<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	/* this method load satff dashboard*/
	public function profile()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='staff')
			{	
				
				$name=$this->session->name;
				 
				$data['user']= $this->Retrive->getUsers($name);
				$data['picture']= $this->Retrive->getPic($name);
				$this->load->view('staff/headerstaff');
				$this->load->view('user/customer',$data);
				$this->load->view('footer');
			}
			else
			{
				echo "Session Expired";
			redirect('/unique/login');
			}
	}
	
		/* this method load form  for staff to update profile*/
	public function updateprofile()
	{
			if (isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				$this->load->view('staff/headerstaff');
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
	
	/* this method load form  for staff to update bandwidth*/
	public function updatebandwidth()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='staff'){
				 
				$data['bandwidthlist']= $this->Retrive->getBandwidth();
				$this->load->view('staff/headerstaff');
				$this->load->view('staff/updatebandwidth',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}	
	}
			/* this method load form  for staff to update customer profile*/
	 public function updatecustomer()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='staff'){
				$type='user';
				 
				$data['userlist']= $this->Retrive->getUserss($type);
				$data['bandwidthlist']= $this->Retrive->getBandwidth();
				$this->load->view('staff/headerstaff');
				$this->load->view('staff/updatestaff',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/unique/login');
			}	
	}
	
		
                
            }
			?>