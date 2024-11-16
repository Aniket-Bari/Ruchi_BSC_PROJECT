<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Save customer data to the database
     * 
     * @param array $data - associative array containing customer data
     * @return bool - TRUE on success, FALSE on failure
     */
    public function save_customer($data) {
        return $this->db->insert('customers', $data);
    }
}
