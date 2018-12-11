<?PHP

class Insert extends CI_Model{
	
	/* methods to add users(customer)*/
		public function addUsers($id,$month,$price,$name,$gender,$dob,$address,$number,$type,$citizen)
	{
			$token=uniqid();
			$data = array(
			"username"=>$number,
			"password"=>$token,
			"fullname"=>$name,
			"gender"=>$gender,
			"dob"=>$dob,
			"address"=>$address,
			"number"=>$number,
			"citizen"=>$citizen,
			"Type"=>$type
		
		);
			
		$this->db->insert("users",$data);
		
				//  the line below id for timezone!
			
			$date = date('Y-m-d');
			if($month==1){
			$edate=date('Y-m-d', strtotime($date. ' + 30 days'));
			$payment=$price;
			}
			elseif($month==3){
			$edate=date('Y-m-d', strtotime($date. ' + 90 days'));
			$payment=3*$price;
			}
			elseif($month==6){
			$edate=date('Y-m-d', strtotime($date. ' + 180 days'));
			$payment=6*$price;
			}
			elseif($month==12){
			$edate=date('Y-m-d', strtotime($date. ' + 420 days'));
			$payment=12*$price;
			}
			
			$datas = array(
			"id"=>$id,
			"username"=>$number,
			"month"=>$month,
			"subscribedate"=>$date,
			"expirydate"=>$edate,
			"paymentmade"=>$payment
		);
		$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Customer Order Sucessful User: ".$number."Password:".$token."');</script>");
		return $this->db->insert("customerorder",$datas);		
		 
	}
	/* methods to add Staff*/
	public function addStaff($name,$gender,$dob,$address,$number,$type,$citizen)
	{
			$token=uniqid();
			$data = array(
			"username"=>$number,
			"password"=>$token,
			"fullname"=>$name,
			"gender"=>$gender,
			"dob"=>$dob,
			"address"=>$address,
			"number"=>$number,
			"citizen"=>$citizen,
			"Type"=>$type
		);
		$this->session->set_flashdata('message',"<script language=\"javascript\">alert('Staff added User: ".$number."Password:".$token."');</script>");
		return $this->db->insert("users",$data);		

		 
	}
	/* method to add bandwidth*/
		public function addBandwidth($bandwidth,$type,$price)
	{		$datas=array(
			"bandwidth"=>$bandwidth,
			"price"=>$price,
			"bandwidthtype"=>$type
			);
		return $this->db->insert("bandwidth",$datas);
		

	}
		public function addPic($name,$image_path)
		{
			$datas=array(
			"user"=>$name,
			"image_path"=>$image_path,
			);
		return $this->db->insert("picture",$datas);
		}
}
?>