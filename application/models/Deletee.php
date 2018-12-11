<?PHP

class Deletee extends CI_Model{
	
	/*method to delete users*/
		public function deleteUser($usern){
		$this->db->where("username",$usern);
		$this->db->delete("customerorder");
		$this->db->where("user",$usern);
		$this->db->delete("picture");
		$this->db->where("username",$usern);
		return $this->db->delete("users");
		

	}
	
	
	/* method to delete bandwidth*/
		public function deleteBandwidth($bandwidth,$type){
		$this->db->where("bandwidth",$bandwidth);
		$this->db->where("bandwidthtype",$type);
		return $this->db->delete("bandwidth");

	}
}
?>