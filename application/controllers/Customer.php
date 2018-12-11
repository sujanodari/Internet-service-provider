<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	/* methods for customer Dashboard */
		public function profile()
	{		
			
			if (isset($_SESSION['name']) and $_SESSION['type']=='user'){
			$name=$this->session->name;
			$data['picture']= $this->Retrive->getPic($name);
			$data['user']= $this->Retrive->getUsers($name);
			$datas['idd']= $this->Retrive->getBandwidthId($name);
			if(count($datas)==1){
				foreach($datas['idd']->result_array() as $iddd):
				$id=$iddd['id'];
				endforeach;
			}
				$data['bandwidth']= $this->Retrive->getBandwidthById($id);
				$data['order']=$this->Retrive->getBandwidthByIdd($id,$name);
				$this->load->view('user/header');
				$this->load->view('user/customer',$data);
				$this->load->view('footer');
			}
			else
			{
				echo "Session Expired";
				redirect('/unique/login');
			}
	}	
		/* this method load form  for customer to update profile*/
	public function updateprofile()
	{
			if (isset($_SESSION['name'])and $_SESSION['type']=='user'){

				$this->load->view('user/header');
				$this->load->view('user/updateprofile');			
				$this->load->helper('form');
				$this->load->view('custom_view', array('error' => ' ' ));
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/customer/profile');
			}
	}
	/* this method load form  for customer to update bandwidth*/
	public function updatebandwidth()
	{
			if (isset($_SESSION['name']) and $_SESSION['type']=='user'){
				 
				$data['bandwidthlist']= $this->Retrive->getBandwidth();
				$this->load->view('user/header');
				$this->load->view('user/updatebandwidth',$data);
				$this->load->view('footer');
			}
			else{
				echo "Session Expired";
				redirect('/customer/profile');
			}
	}	

}
?>