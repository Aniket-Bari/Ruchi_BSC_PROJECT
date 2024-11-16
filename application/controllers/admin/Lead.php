<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lead_model'); // Load Lead model
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        // $this->load->view('admin/lead/index');
        $this->loadViews('lead/index');

    }

    public function save() {
        // Set validation rules
        $this->form_validation->set_rules('lead_name', 'Lead Name', 'required|max_length[150]');
        $this->form_validation->set_rules('lead_type', 'Lead Type', 'required');
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'required');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'required|max_length[100]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('email_address', 'Email Address', 'valid_email');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the form with error messages
            $this->load->view('admin/lead_management/index');
        } else {
            // Prepare data for insertion
            $data = [
                'lead_name' => $this->input->post('lead_name'),
                'lead_type' => $this->input->post('lead_type'),
                'lead_source' => $this->input->post('lead_source'),
                'contact_person' => $this->input->post('contact_person'),
                'phone_number' => $this->input->post('phone_number'),
                'email_address' => $this->input->post('email_address'),
                'assigned_to' => $this->input->post('assigned_to'),
                'lead_status' => $this->input->post('lead_status'),
                'follow_up_date' => $this->input->post('follow_up_date')
            ];

            // Save data using the model
            $this->Lead_model->insert_lead($data);

            // Redirect or load a success message view
            redirect('admin/lead');
        }
    }
}