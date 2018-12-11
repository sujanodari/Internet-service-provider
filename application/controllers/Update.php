<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {
	/* methods to Update users profile (Staff, manager,Customer)
		where manager can Update all three, staff can Update its and customer and customer can Update their profile*/
		public function users()
		{
			$name = $this->input->post("name");
			$gender = $this->input->post("gender");
			$dob = $this->input->post("dob");
			$address = $this->input->post("address");
			$number = $this->input->post("number");
			$usern = $this->input->post("usern");
			$password = $this->input->post("password");
			$user=$_SESSION['name'];
			 
			if(count($usern)==1)
			{
			$data= $this->Updatee->updateUsers($name,$gender,$dob,$address,$number,$usern,$password);	
			}
			elseif(isset($_SESSION['name']))
			{			
			$data= $this->Updatee->updateUsers($name,$gender,$dob,$address,$number,$user,$password);
			}
			if(count($data==1)){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('User Updated Sucessfully');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='user'){
				redirect('/customer/updateprofile');
			}
				if (isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/profile');
			}
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/profile');
			}
			}
		else
			{	
				echo "Update User Unsuccessfull";
				redirect('/unique/login');
			}			
		}
		
		/* methods to Update bandwidth*/
			public function bandwidth()

		{	
			$price= $this->input->post("price");
			$total = $this->input->post("bandwidth");
			/* separating string using space as point*/
			$info=(explode(" ",$total));
			$bandwidth = $info[0];
			$type = $info[1];
			 
			$data= $this->Updatee->updateBandwidth($bandwidth,$type,$price);
			if(count($data)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth Updated Sucessfully');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
					redirect('/manager/updatebandwidth');
				}
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');

		}
		}
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth is not Updated');</script>");
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatebandwidth');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');
			}
			}
	}
	
		/* methods to Update password*/
	public function usersPassword()
		{
			$pass = $this->input->post("password");
			$datas= $this->Updatee->updateUsersPassword($pass,$this->session->name);
				if(count($datas)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Password Updated Sucessfully');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='user'){
				redirect('/customer/updateprofile');
				}
				elseif (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updateprofile');
				}
				elseif (isset($_SESSION['name'])and $_SESSION['type']=='staff'){
					redirect('/staff/updateprofile');
				}
			}
		
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Password is not Updated');</script>");

				redirect('/unique/login');
			}
	
		}
	/* methods to Update bandwidth for customer*/
	public function usersBandwidth()
		{
			$month = $this->input->post("month");
			$total = $this->input->post("bandwidth");
			$info=(explode(" ",$total));
			$bandwidthtypes = $info[0];
			$bandwidth = $info[1];
			if($this->input->post("usern"))
			{
				$user=$this->input->post("usern");
			}
			else
			{
				$user=$_SESSION['name'];
			}
				
			 
			$data['idd']= $this->Retrive->getBandwidthByBandwidth($bandwidth,$bandwidthtypes);
			if(count($data)==1){
				foreach($data['idd']->result_array() as $iddd):
				$id=$iddd['id'];
				$price=$iddd['price'];
				endforeach;
			}
				$datas= $this->Updatee->updateUsersBandwidth($id,$price,$user,$month);
				if(count($datas)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth Updated Sucessfully');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='user'){
				redirect('/customer/updatebandwidth');
				}
				elseif (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatecustomer');
				}
				elseif (isset($_SESSION['name'])and $_SESSION['type']=='staff'){
					redirect('/staff/updatecustomer');
				}
			}
		
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth is not Updated');</script>");

				redirect('/unique/login');
			}
	}
	
	}
	?>