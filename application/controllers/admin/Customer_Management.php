<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Management extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Customer_model');
    }

    public function index() {
        // $this->load->view('admin/customer_management/index');
        $this->loadViews('customermanagement/index');


    }

    public function save() {
        // Set validation rules
        $this->form_validation->set_rules('customer_name', 'Customer Name', 'required|max_length[150]');
        $this->form_validation->set_rules('customer_type', 'Customer Type', 'required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'required|max_length[100]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('email_address', 'Email Address', 'valid_email');
        $this->form_validation->set_rules('billing_address', 'Billing Address', 'required|max_length[250]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/customer_management/index');
        } else {
            // Prepare data for insertion
            $data = array(
                'customer_name' => $this->input->post('customer_name'),
                'customer_type' => $this->input->post('customer_type'),
                'contact_person' => $this->input->post('contact_person'),
                'phone_number' => $this->input->post('phone_number'),
                'email_address' => $this->input->post('email_address'),
                'billing_address' => $this->input->post('billing_address'),
                'multiple_projects' => $this->input->post('multiple_projects') ? 1 : 0,
                'existing_contracts' => $this->input->post('existing_contracts')
            );
            
            // Save to database
            if ($this->Customer_model->save_customer($data)) {
                echo "Customer information saved successfully!";
            } else {
                echo "Failed to save customer information. Please try again.";
            }
        }
    }
}
