<?php

class Export extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		$logged_in = $this->customfunctions->is_logged_in();
		if (!$logged_in) {
			redirect(base_url());
		}
        $this->load->model('exportfunctions');
		
	}
	
	public function index() {
		
		$this->load->view('export');
		
	}

    /**
     *
     */
    public function submit() {
		
		if (isset($_POST['export_submit'])) {
			
			$baseQuery = "SELECT * FROM details2 WHERE ";
            $query = "";
            var_dump($_POST);

            if ($this->input->post('branch') && $this->input->post('branch') != 0) {
				
				$branch = $this->input->post('branch');
				$query.= "branch = '$branch' ";
				
			}
			if ($this->input->post('cgpa')) {

                if ($query !== "") {

                    $query.= "AND ";

                }

				$cgpa= $this->input->post('cgpa');
				$query.= "cgpa > '$cgpa' ";
			
			}
			if ($this->input->post('active_supplies')) {

				$active_supplies = $this->input->post('active_supplies');
				if (trim($active_supplies ) == 'no') {

                    if ($query !== "") {

                        $query.= "AND ";

                    }

					$query.= "active_supplies = '0' ";
							
				}
			}
			if ($this->input->post('12_percent')) {
			
				$twelve_percent = $this->input->post('12_percent');

                if ($query !== "") {

                    $query.= "AND ";

                }

				$query.= "twelve_percent > '$twelve_percent' ";
			
			}
			
			if ($this->input->post('10_percent')) {
			
				$ten_percent = $this->input->post('10_percent');

                if ($query !== "") {

                    $query.= "AND ";

                }

				$query.= "ten_percent > '$ten_percent' ";
			
			}
			
//			echo $query;
            if ($query != "") {

                $query = $baseQuery.$query;

            }
            else {

                $query = "SELECT * FROM details2";

            }
            echo $query."<br>";
            $result = $this->get_data($query);
            $counter = 0;
            foreach ($result as $key) {
                echo $key->name . " : " . $key->cgpa. " : " . $key->twelve_percent  . " : " . $key->active_supplies ."<br>";
                $counter++;
            }
            echo $counter;
//            var_dump($result);
			
		}
		else {
			
			redirect(base_url());
			
		}
	}

    public function get_data($query) {

        return $this->exportfunctions->export_details($query);

    }
	
		
}