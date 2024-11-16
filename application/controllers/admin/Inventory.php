<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    // Load the form view
    public function index() {
        // $this->load->view('admin/inventory/index');
        $this->loadViews('inventory/index');
    }

    // Handle form submission
    public function submit() {
        // Set validation rules
        $this->form_validation->set_rules('item_name', 'Item Name', 'required|max_length[150]');
        $this->form_validation->set_rules('item_category', 'Item Category', 'required');
        $this->form_validation->set_rules('sku', 'SKU', 'max_length[100]');
        $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'required');
        $this->form_validation->set_rules('unit_price', 'Unit Price', 'required|numeric');
        $this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'required|integer');
        $this->form_validation->set_rules('reorder_level', 'Reorder Level', 'integer');
        $this->form_validation->set_rules('storage_location', 'Storage Location', 'max_length[100]');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form
            $this->load->view('inventory_form');
        } else {
            // Collect form data
            $data = array(
                'item_name' => $this->input->post('item_name'),
                'item_category' => $this->input->post('item_category'),
                'sku' => $this->input->post('sku'),
                'vendor_name' => $this->input->post('vendor_name'),
                'unit_price' => $this->input->post('unit_price'),
                'stock_quantity' => $this->input->post('stock_quantity'),
                'reorder_level' => $this->input->post('reorder_level'),
                'storage_location' => $this->input->post('storage_location')
            );

            // Save data to database
            if ($this->Inventory_model->save_item($data)) {
                $this->load->view('inventory_success');
            } else {
                echo "Error saving data.";
            }
        }
    }
}