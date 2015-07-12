<?php

class Companies extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('companiesfunctions');
    }

    public function index() {

        $data['details'] = $this->get_companies_data();
//        var_dump($data);
        $this->load->view('companies2', $data);

    }

    public function get_companies_data() {

        return $this->companiesfunctions->get_companies_data();

    }

}