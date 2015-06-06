<?php

class EmailFunctions extends CI_Model {
	
	public function get_data() {
		
		$query = $this->db->query("SELECT email,roll_no FROM token WHERE first_login = 1");
		$result =  $query->result();
		//var_dump($result);
		return $result;
		
	}
	
	
	public function checkToken($token) {
		
		$query = $this->db->query("SELECT * FROM token WHERE token = '$token'");
		return $query->result();
		
	}
	
	public function insertToken($roll_no, $token) {
		
		$this->db->update("token",array('token'=>$token));
		$this->db->where('roll_no',$roll_no);
		
	}
	
	
}