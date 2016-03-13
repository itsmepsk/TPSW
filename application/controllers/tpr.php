<?php

class Tpr extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        $this->load->model('companiesfunctions');

    }

    public function index() {

        $data['details'] = $this->get_companies_data();
        $this->load->view("companies_admin", $data);

    }

    public function get_branches($id) {

        return $this->companiesfunctions->get_branches($id);

    }

    public function get_companies_data() {

        $data =  $this->companiesfunctions->get_companies_data();
//        var_dump($data);
//        return $data;
        foreach($data as $company) {

            $id = $company->hashed_id;
            $branches = $this->get_branches($id);

            $string = "";

            foreach($branches as $branch) {

                $string.= $branch->branch;
                $string.=" ";

            }

            $company->open_branches = $string;

        }

        return $data;
    }

    public function get_notifications() {

        return $this->companiesfunctions->get_notifications();

    }

    public function delete_company() {

        if (isset($_POST['delete_company'])) {

//            var_dump($_POST);
            unset($_POST['delete_company']);

            if ($this->check_company_id($_POST)) {

                $delete_open_for = $this->companiesfunctions->delete_branches($_POST['hashed_id']);
                if ($delete_open_for) {

                    $delete_company = $this->companiesfunctions->delete_company($_POST['hashed_id']);

                }

                if ($delete_company) {

                    $count = $this->companiesfunctions->get_companies_count();
                    $count->value--;
                    $this->companiesfunctions->update_config("companies_count", $count);
                    $details = $this->get_companies_data();
//                    var_dump($details);
                    $details['success'] = true;
                    $details['success_delete_company'] = true;
                    $data['details'] = $details;
                    $this->load->view('companies_admin', $data);

                }
                else {

                    $details = $this->get_companies_data();
                    $details['success'] = false;
                    $details['success_delete_company'] = false;
                    $data['details'] = $details;
                    $this->load->view('companies_admin', $data);

                }

            }
            else {

                $details = $this->get_companies_data();
                $details['success'] = false;
                $details['success_delete'] = false;
                $data['details'] = $details;
                $this->load->view('companies_admin', $data);

            }

        }
        else {

            redirect(base_url()."tpr");

        }

    }

    public function submit_company() {

        if (isset($_POST['new_company'])) {
//        var_dump($_POST);
            $valid = $this->validate_company_fields();

            if ($valid) {

                unset($_POST['new_company']);
                $this->add_company($_POST);

            }

        }
        else
        if (isset($_POST['update_company'])) {

            $valid = $this->validate_fields();

            if ($valid) {

                unset($_POST['update_company']);
                $this->companiesfunctions->delete_branches($_POST['hashed_id']);
                $data = $this->process_company($_POST);
                $this->update($data);

            }


        }
        else {

            redirect(base_url()."tpr");

        }

    }

    private function add_company ($data) {

        $check = $this->check_company_exists($data);
        if ($check == null) {
            $id = $this->companiesfunctions->get_companies_index();
            $count = $this->companiesfunctions->get_companies_count();
            $id = (int)$id->value;
            $count = (int)$count->value;
            $hashed_id = sha1(md5($id));
            $data['hashed_id'] = $hashed_id;
            $data = $this->process_company($data);
            $result = $this->companiesfunctions->add_company($data);
            if ($result) {
                $id = array(
                    'value' => $id+1
                );
                $count = array(
                    'value' => $count+1
                );
                $this->companiesfunctions->update_config("companies_count", $count);
                $this->companiesfunctions->update_config("companies_index", $id);
                unset($data);
                $details = $this->get_companies_data();
                $details['success'] = true;
                $details['success_add_company'] = true;
//                var_dump($details);
                $flag = ['success_add_company'  =>  true];
//                $flag['success_add'] == true;
                $data['details'] = $details;
                $data['flag'] = $flag;
//                var_dump($data);
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

    public function check_company_id ($data) {

        $id = $data['hashed_id'];
        return ($this->companiesfunctions->check_company_id($id));
//        die;

    }

    private function process_company ($data) {

        $processed_data = new stdClass();
        $branch = [];
        $branch['hashed_id'] = $data['hashed_id'];
        foreach ($data as $key=>$value) {

            if ($key == "open_branches") {

                foreach ($value as $a=>$b) {

                    $branch['branch'] = $b;
                    $this->companiesfunctions->add_branch($branch);
                    unset($data['open_branches']);

                }

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
            $details['success_id_company'] = $success_id;
            $data['details'] = $details;
//            var_dump($details);
            $this->load->view("companies_admin",$data);
        }


    }

    public function validate_company_fields() {

        $config = array (
            array(
                'field'		=>		'company_name',
                'label'		=>		'Company Name',
                'rules'		=>		'required|trim|xss_clean'
            ),
            array(
                'field'		=>		'ctc',
                'label'		=>		'CTC',
                'rules'		=>		'trim|xss_clean'
            ),
            array(
                'field'		=>		'company_website',
                'label'		=>		'Company Website',
                'rules'		=>		'trim|xss_clean'
            ),
            array(
                'field'		=>		'min_cgpa',
                'label'		=>		'Minimum CGPA',
                'rules'		=>		'trim|xss_clean|callback_less_equal'
            ),
            array(
                'field'		=>		'location',
                'label'		=>		'Location',
                'rules'		=>		'trim|xss_clean'
            ),
            array(
                'field'		=>		'date_of_placement',
                'label'		=>		'Date of Placement',
                'rules'		=>		'trim|xss_clean'
            ),
            array(
                'field'		=>		'deadline',
                'label'		=>		'Deadline',
                'rules'		=>		'trim|xss_clean|date'
            ),
            array(
                'field'		=>		'open_branches',
                'label'		=>		'Open Branches',
                'rules'		=>		''
            ),
            array(
                'field'		=>		'min_tenth',
                'label'		=>		'Minimum 10th Marks',
                'rules'		=>		'trim|xss_clean|decimal|greater_than[0]|less_than[100]'
            ),
            array(
                'field'		=>		'min_twelve',
                'label'		=>		'Minimum 12th Marks',
                'rules'		=>		'trim|xss_clean|decimal|greater_than[0]|less_than[100]'
            )

        );
        $details = $this->get_companies_data();
        $this->form_validation->set_message('open_branches', 'Please Select atleast one branch.');
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE) {
            if (!isset($_POST['new_company'])) {

                $success_id = $_POST['hashed_id'];
                $details['success'] = false;
                $details['success_id_company'] = $success_id;

            }
            else {

                $details['success_add_company'] = false;

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