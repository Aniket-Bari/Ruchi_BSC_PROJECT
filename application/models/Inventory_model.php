<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Save item data to the database
    public function save_item($data) {
        return $this->db->insert('inventory', $data);
    }
}