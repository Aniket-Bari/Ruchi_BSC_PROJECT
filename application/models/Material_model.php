<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model {

    // public function getTechnicians() {
    //     // Fetch technicians from database
    //     return $this->db->get('technicians')->result_array();
    // }

    public function getInventoryItems() {
        // Fetch inventory items from database
        return $this->db->get('inventory_items')->result_array();
    }

    public function saveRequest($data) {
        $this->db->insert('toolkit_requests', $data);
    }
}
