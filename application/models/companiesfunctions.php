<?php

class Companiesfunctions extends CI_Model {

    public function get_companies_data() {

        $query = $this->db->query("SELECT * FROM company_details");
        $result = $query->result();

        return $result;

    }

    public function get_branches($id) {

        $query = $this->db->query("SELECT branch FROM open_for WHERE hashed_id = '{$id}'");
        $result = $query->result();

        return $result;

    }

    public function delete_branches($id) {

        return $this->db->delete('open_for', array('hashed_id' =>  $id));

    }

    public function delete_company($id) {

        return $this->db->delete('company_details', array('hashed_id' =>  $id));

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

    public function get_companies_index () {

        $query = $this->db->query("SELECT value FROM config WHERE item = 'companies_index'");
        $result = $query->result();
        return $result[0];

    }

    public function add_company($data) {

        $query = $this->db->insert('company_details', $data);
        return $query;

    }

    public function add_branch($data) {
//        var_dump($data);
        $query = $this->db->insert('open_for', $data);
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

    public function check_company_id($id) {

        $query = $this->db->query("SELECT * FROM company_details WHERE hashed_id = '{$id}'");
        $result = $query->result();

        return $result;

    }

}