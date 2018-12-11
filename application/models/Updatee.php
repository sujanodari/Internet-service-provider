<?PHP

class Updatee extends CI_Model{
	
	/* methods to Update users*/
	public function updateUsers($name,$gender,$dob,$address,$number,$user,$password)
	{		$datas=array(
			"password"=>$password,
			"fullname"=>$name,
			"gender"=>$gender,
			"dob"=>$dob,
			"address"=>$address,
			"number"=>$number,
			);
		$this->db->where("username",$user);
		return $this->db->Update("users",$datas);
		

	}
	/* methods to Update users Password*/
	public function updateUsersPassword($pass,$name)
	{		$datas=array(
			"password"=>$pass
			);
		$this->db->where("username",$name);
		return $this->db->Update("users",$datas);
		

	}
	
	/* method to Update Bandwidth*/
		public function updateBandwidth($bandwidth,$type,$price)
	{		$datas=array(
			"price"=>$price
			);
		$this->db->where("bandwidth",$bandwidth);
		$this->db->where("bandwidthtype",$type);
		return $this->db->Update("bandwidth",$datas);
		 

	}
	
	/* method to Update customer bandwidth*/
			public function updateUsersBandwidth($id,$price,$user,$month)
	{
		
		
					
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
			"username"=>$user,
			"month"=>$month,
			"subscribedate"=>$date,
			"expirydate"=>$edate,
			"paymentmade"=>$payment
		
			);
			$this->db->where("username",$user);
			return $this->db->Update("customerorder",$datas);
	}
	
			public function updatePic($name,$image_path)
	{		$datas=array(
			"image_path"=>$image_path
			);
		$this->db->where("user",$name);
		return $this->db->Update("picture",$datas);
		 

	}
}
?>