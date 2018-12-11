<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
	
	
	/* methods to delete bandwidth*/
	public function bandwidth()
		{
			$total = $this->input->post("bandwidth");
			$info=(explode(" ",$total));
			$bandwidth = $info[0];
			$type = $info[1];
			 
			$data= $this->Deletee->deleteBandwidth($bandwidth,$type);
			if(count($data)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth Deleted');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatebandwidth');
				}
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');

		}
		}
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth id not Deleted');</script>");
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatebandwidth');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');
			}
			}
	}
	
	/* Deleting user(Staff or Customer ) using theri user name
		manager can delete both of theam where as satff can delete customer*/
		public function user()
		{
			$usern = $this->input->post("usern");
			 
			$data['password']= $this->Deletee->deleteUser($usern);
			if(count($data)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('User Deleted');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/profile');
				}
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatecustomer');

		}
		}
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('User is not Deleted');</script>");
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/profile');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatecustomer');
			}
			}
	}
	}
	?>