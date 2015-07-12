<?php

class Companiesfunctions extends CI_Model {

    public function get_companies_data() {

        $query = $this->db->query("SELECT * FROM company_details");
        $result = $query->result();

        return $result;

    }

    public function update_fields ($data) {

        $id = $data->hashed_id;
        unset($data->hashed_id);
        $query = $this->db->update("company_details",$data,"hashed_id = '{$id}'");

        return $query;

    }

    public function get_companies_count () {

        $query = $this->db->query("SELECT value FROM config WHERE item = 'companies_count'");
        $result = $query->result();
        return $result[0];

    }

    public function add_company($data) {

        $query = $this->db->insert('company_details', $data);
        return $query;

    }

    public function update_config($id, $value) {

        $this->db->where('item', $id);
        $this->db->update('config', $value);

    }

    public function check_company_exists($name) {

        $query = $this->db->query("SELECT * FROM company_details WHERE company_name = '{$name}'");
        $result = $query->result();

        return $result;
    }

}