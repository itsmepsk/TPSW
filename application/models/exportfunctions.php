<?php

   class Exportfunctions extends CI_Model {

       public function export_details ($query) {

           $query = $this->db->query($query);
           $result = $query->result();
           return $result;

       }

   }
