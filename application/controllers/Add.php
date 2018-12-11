<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	
	
		
/* methods to addCustomer */
		public function customer()
		{
			$name = $this->input->post("name");
			$gender = $this->input->post("gender");
			$dob = $this->input->post("dob");
			$address = $this->input->post("address");
			$number = $this->input->post("number");
			$citizen = $this->input->post("citizen");
			$type="user";
			$month = $this->input->post("month");			
			$total = $this->input->post("bandwidth");
			$info=(explode(" ",$total));
			$bandwidthtypes = $info[0];
			$bandwidth = $info[1];
			 /* checks user validation  if users_exists is true then there is no user in database*/			
			 if ($this->Retrive->users_exists($number))
            {
			/*get bandwidth id using bandwidth and its type*/	
			$data['idd']= $this->Retrive->getBandwidthByBandwidth($bandwidth,$bandwidthtypes);
			if(count($data)==1){
				foreach($data['idd']->result_array() as $iddd):
				$id=$iddd['id'];
				$price=$iddd['price'];				
			    endforeach;	
			}
			/* adding user or customer */
			$data= $this->Insert->addUsers($id,$month,$price,$name,$gender,$dob,$address,$number,$type,$citizen);
			if(count($data==1)){
			/* directing to respective order page */	
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatecustomer');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
					redirect('/staff/updatecustomer');
			}
			
			else{
			redirect('/unique/login');
			}
			}
			} 
			else
             {
				/* user exist in database */
							$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Phone Number Already Existed please use new one');</script>");
			   				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatecustomer');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatecustomer');
			}
			else{
			redirect('/unique/login');
			}
                
            }

}


		/* methods to add staff*/
		public function staff()
		{
			$name = $this->input->post("name");
			$gender = $this->input->post("gender");
			$dob = $this->input->post("dob");
			$address = $this->input->post("address");
			$number = $this->input->post("number");
			$citizen = $this->input->post("citizen");
			$type="staff";
			
			 
			if ($this->Retrive->users_exists($number))
            {
			$data= $this->Insert->addStaff($name,$gender,$dob,$address,$number,$type,$citizen);
			if(count($data==1)){
				
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatestaff');
			}
			}
			}
			else
             {
               
			   	if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
					$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Phone Number Already Existed please use new one');</script>");
					redirect('/manager/updatestaff');
			      }	
						
		       }
			}
			
				/* methods to add bandwidth*/
	public function bandwidth()
		{
			$bandwidth = $this->input->post("bandwidth");
			$type = $this->input->post("bandwidthType");
			$price = $this->input->post("price");
			 
			$data= $this->Insert->addBandwidth($bandwidth,$type,$price);
			if(count($data)==1){
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth Added');</script>");
				if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
					redirect('/manager/updatebandwidth');
				}
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');

		}
		}
		else{
			$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Bandwidth is not Added');</script>");
			if (isset($_SESSION['name'])and $_SESSION['type']=='manager'){
				redirect('/manager/updatebandwidth');
			}	
				elseif(isset($_SESSION['name'])and $_SESSION['type']=='staff'){
				redirect('/staff/updatebandwidth');
			}
			}
	}

	public function do_upload(){
			$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'file_name'=>uniqid(),
			'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)	
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$data=$this->upload->data();
				$image_path=$data['raw_name'].$data['file_ext'];
				//resize
				$path=$data['full_path'];
				$this->reSize($path,$data['file_name']);
				$datas['picture']=$this->Retrive->getPic($this->session->name);
				foreach($datas['picture']->result_array() as $pictu):
				$name=$pictu['user'];
				endforeach;	
				if($name==$this->session->name)
				{	
				$this->Updatee->updatePic($this->session->name,$image_path);					
				}
				else{
				$this->Insert->addPic($this->session->name,$image_path);
				}
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Image uploaded Sucessfully');</script>");
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
				$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Image is not uploaded');</script>");
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
	}	
			private function reSize($path,$file)
			{
			$config['image_library'] = 'gd2';
			$config['source_image'] = $path;
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']= 258;
			$config['height']= 172;
			$config['new_image']='./Uploads/'.$file;
			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			}
		
}
?>