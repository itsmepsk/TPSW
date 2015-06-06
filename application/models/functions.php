<?php

class Functions extends CI_Model {
	
	public function fetch_fields() {
		
		$fields_obj = $this->fetch_fields_from_db();
		$fields = array();
		//var_dump($fields_obj);
		foreach ($fields_obj as $class) {
			
			array_push($fields,$class->Field);
			
		}
		//var_dump($fields);
		return  $fields;
		
	}
	
	public function fetch_fields_from_db() {
		
		$query = $this->db->query("SHOW COLUMNS FROM details");
		$result = $query->result();
		return $result;
		
	}
	
	public function get_data($id) {
		
		$query = $this->db->query("SELECT * FROM details WHERE id = '$id'");
		$result = $query->result();
		//var_dump($result);
		return $result[0];
		
	}
	
	public function update_details($id,$details) {
		
		$query = $this->db->update("details",$details,"id = '$id'");
		
		if($query) {
			
			return true;
			
		}
		
	}
        
    public function user_exists($username,$password) {

    	$query = $this->db->query("SELECT id FROM login_details WHERE roll_no = '$username' AND password = '$password'");
        $result = $query->result();
        return $result;
                    
    }
    
    public function email_exists($email) {
    	
    	//echo $email."<br>";
    	$query = $this->db->query("SELECT id FROM details WHERE email = '$email'");
    	$result = $query->result();
    	//var_dump($result);
    	return $result;
    	
    }
    
    public function update_photo($id,$name) {
    	
    	$details = array(
    		'image'	=>	$name
    	);
    	
    	$query = $this->db->update("details",$details,"id = '$id'");
    	
    	if($query) {
    			
    		return true;
    			
    	}
    	
    }
    
    public function delete_image($id) {
        
        $details = array(
            'image' =>  ''
        );
        
        $query = $this->db->update("details",$details,"id = '$id'");
        
        if($query) {
    			
    		return true;
    			
    	}
                
    }
    
    public function check_token($token) {
    	
    	$query = $this->db->query("SELECT roll_no,id FROM token WHERE token = '$token'");
    	$result = $query->result();
    	//var_dump($result);
    	return $result[0];
    	//$query = $this->db->query("SELECT * FROM user_data WHERE roll_no = '$roll'");
    	
    }
    
    public function reset_password($uid, $password) {
    	
    	$details = array(
    			'password'	=>	$password
    	);
    	//echo $uid;
    	$result = $this->db->update("login_details",$details,"encrypt_roll = '$uid'");
    	
    	return $result;
    	
    }
	
}