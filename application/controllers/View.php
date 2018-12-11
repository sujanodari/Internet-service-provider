<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	/* method to view user password using username 
			manager can view both staff and customer password
			where as sataff can view customer password*/
				public function Password()
		{
			$usern = $this->input->post("usern");
			 
			$data['password']= $this->Retrive->getUsers($usern);
			if(count($data)==1){
				foreach($data['password']->result_array() as $users):
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('User:".$users['username']."Password:".$users['password']."');</script>");
				endforeach;
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/profile');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatecustomer');
			}
			}
			else{
				$this->session->set_flashdata('message','<p>User Not Found<p/>');
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/profile');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatecustomer');
			}
			}
	
		}
		
		

	/* this method is used to view customer profile by staff or manager*/
	public function customerprofile()
	{ 			
				$name=$this->input->post("name");
				 
				$data['user']= $this->Retrive->getUsers($name);
				$datas['idd']= $this->Retrive->getBandwidthId($name);
				if(count($datas)==1){
				foreach($datas['idd']->result_array() as $iddd):
				$id=$iddd['id'];
				endforeach;
			}
				$data['bandwidth']= $this->Retrive->getBandwidthById($id);
				$data['order']=$this->Retrive->getBandwidthByIdd($id,$name);
				$data['picture']= $this->Retrive->getPic($name);
				if (isset($_SESSION['name']) and $_SESSION['type']=='staff')
			{	
					
				$this->load->view('staff/headerstaff');
				$this->load->view('user/customerinfo',$data);
				$this->load->view('footer');
			}
				elseif (isset($_SESSION['name']) and $_SESSION['type']=='manager')
			{	
				$this->load->view('staff/headermanager');
				$this->load->view('user/customerinfo',$data);
				$this->load->view('footer');
			}
			else
			{
				echo "<script language=\"javascript\">alert('Session Expired');</script>";
			redirect('/unique/login');
	}
}
	
	}
	?>