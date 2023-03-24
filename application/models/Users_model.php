<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

        private $table_name = 'users';

        public function get_lists()
        {
                $query = $this->db->get($this->table_name);
               // return $query->result();
                return $query->result_array();
                //เปลี่ยนให้ return เป็น array
        }

}