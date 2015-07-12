<?php

class Tpr extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        $this->load->model('companiesfunctions');

    }

    public function index() {

        $data['details'] = $this->get_companies_data();
//        var_dump($data['details']);
        $this->load->view("companies_admin", $data);

    }

    public function get_companies_data() {

        return $this->companiesfunctions->get_companies_data();

    }

    public function get_notifications() {

        return $this->companiesfunctions->get_notifications();

    }

    public function submit() {

        if (isset($_POST['new_company'])) {
//        var_dump($_POST);
            $valid = $this->validate_fields();

            if ($valid) {

                unset($_POST['new_company']);
                $this->add_company($_POST);

            }

        }
        else
        if (isset($_POST['update'])) {

            $valid = $this->validate_fields();

            if ($valid) {

                unset($_POST['update']);
                $data = $this->process($_POST);
                $this->update($data);

            }


        }
        else {

            redirect(base_url());

        }

    }

    private function add_company ($data) {

        $check = $this->check_company_exists($data);
        if ($check == null) {
            $id = $this->companiesfunctions->get_companies_count();
            $id = (int)$id->value;
            $id = $id + 1;
            $hashed_id = sha1(md5($id));
            $data['hashed_id'] = $hashed_id;
            $data = $this->process($data);
            $result = $this->companiesfunctions->add_company($data);
            if ($result) {
                $id = array(
                    'value' => $id
                );
                $this->companiesfunctions->update_config("companies_count", $id);
                unset($data);
                $details = $this->get_companies_data();
                $details['success_add'] == true;
                $data['details'] = $details;
                $this->load->view("companies_admin", $data);
            }
        }
        else {

            $details = $this->get_companies_data();
            $details['company_exists'] = true;
            unset($data);
            $data['details'] = $details;
//            var_dump($details);
            $this->load->view('companies_admin', $data);

        }
    }

    public function check_company_exists ($data) {

        $company_name = $data['company_name'];
        return $this->companiesfunctions->check_company_exists($company_name);

    }

    private function process ($data) {

        $processed_data = new stdClass();

        foreach ($data as $key=>$value) {

            if ($key == "open_branches") {

                $string = "";

                foreach ($value as $a=>$b) {
                    if (!empty($string)) {
                        $string = $string.",";
                    }
                    $string = $string.trim($b);

                }

                $processed_data->$key = trim($string);

            }
            else {

                $processed_data->$key = trim($value);

            }

        }

        return $processed_data;

    }

    private function update($data) {

        $success_id = $data->hashed_id;
        $valid = $this->companiesfunctions->update_fields($data);

        if ($valid) {
            unset($data);
            $details = $this->get_companies_data();
            $details['success'] = true;
            $details['success_id'] = $success_id;
            $data['details'] = $details;
//            var_dump($details);
            $this->load->view("companies_admin",$data);
        }


    }

    public function validate_fields() {

        $config = array (
            array(
                'field'		=>		'company_name',
                'label'		=>		'Company Name',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'ctc',
                'label'		=>		'CTC',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'company_website',
                'label'		=>		'Company Website',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'min_cgpa',
                'label'		=>		'Minimum CGPA',
                'rules'		=>		'required|trim|xss_clean|callback_less_equal'
            ),
            array(
                'field'		=>		'location',
                'label'		=>		'Location',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'date_of_placement',
                'label'		=>		'Date of Placement',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'deadline',
                'label'		=>		'Deadline',
                'rules'		=>		'required|trim|xss_clean|date'
            ),
            array(
                'field'		=>		'open_branches',
                'label'		=>		'Open Branches',
                'rules'		=>		'required'
            ),
            array(
                'field'		=>		'min_tenth',
                'label'		=>		'Minimum 10th Marks',
                'rules'		=>		'required|trim|xss_clean|integer|greater_than[0]|less_than[101]'
            ),
            array(
                'field'		=>		'min_twelve',
                'label'		=>		'Minimum 12th Marks',
                'rules'		=>		'required|trim|xss_clean|integer|greater_than[0]|less_than[101]'
            )

        );
        $details = $this->get_companies_data();
        $this->form_validation->set_message('open_branches', 'Please Select atleast one branch.');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE) {
            if (!isset($_POST['new_company'])) {

                $success_id = $_POST['hashed_id'];
                $details['success'] = false;
                $details['success_id'] = $success_id;

            }
            else {

                $details['success_add'] = false;

            }
            $data['details'] = $details;
            $this->load->view('companies_admin',$data);

        }
        else {

            return TRUE;

        }

    }

    public function is_empty($data) {

        if (empty($_POST['open_branches'])) {

            return false;

        }
        else {

            return true;

        }

    }

    public function less_equal($data) {

        if ($data <= 10) {
            return TRUE;
        }
        else {
            return FALSE;
        }

    }

}