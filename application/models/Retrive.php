<?PHP

class Retrive extends CI_Model{
	
	
	/* function to verify login*/
	public function checkLogin($username,$password){
		
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$data = $this->db->get("users");
		return $data;
	}
	/* function to get userinfo using username*/
	public function getUsers($username)
	{
		$this->db->where("username",$username);
		return $this->db->get("users");
	}
	/* function to get userinfo using usertype*/
		public function getUserss($type)
	{
		$this->db->where("type",$type);
		return $this->db->get("users");
	}
	/* function to check users_exists or not, if not exist return true */	
    public function users_exists($number){
        $this->db->where('username',$number);
        $query = $this->db->get('users');
        if($query->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
	/* method to get bandwidth info*/
		public function getBandwidth()
	{
		return $this->db->get("bandwidth");
	}
	/* method to get bandwidth using bandwidth and type */
		public function getBandwidthByBandwidth($bandwidth,$type)
	{
		$this->db->where("bandwidth",$bandwidth);
		$this->db->where("bandwidthtype",$type);
		return $this->db->get("bandwidth");
	}
	/* method to get bandwidth id using customer username*/
		public function getBandwidthId($user)
		{
			$this->db->where("username",$user);
			return $this->db->get("customerorder");
		}
		/* method to get bandwidth by bandwidth ID*/
				public function getBandwidthById($id)
		{
			$this->db->where("id",$id);
			return $this->db->get("bandwidth");
		}
			public function getBandwidthByIdd($id,$name)
		{
			$this->db->where("username",$name);
			$this->db->where("id",$id);
			return $this->db->get("customerorder");
		}
		
				public function getPic($name)
		{
			
			$this->db->where("user",$name);
			return $this->db->get("picture");		
		}					
}
?>