<?php

class Functions extends CI_Model {
	
	public function fetch_fields() {
		
		$fields_obj = $this->fetch_fields_from_db();
		$fields = array();
		foreach ($fields_obj as $class) {
			array_push($fields,$class->Field);
		}
		
		return  $fields;
		
	}
	
	public function fetch_fields_from_db() {
		
		$query = $this->db->query("SHOW COLUMNS FROM details");
		$result = $query->result();
		return $result;
		
	}
	
	public function get_data($id = 1) {
		
		$query = $this->db->query("SELECT * FROM details WHERE id = '$id'");
		$result = $query->result();
		//var_dump($result);
		return $result[0];
		
	}
	
}