<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_Management extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Material_model'); // Create and use this model
        $this->load->helper('url');
    }

    public function index() {
        // $data['technicians'] = $this->Material_model->getTechnicians();
        // $data['inventory_items'] = $this->Material_model->getInventoryItems();
        $this->loadViews('materialmanagement/index');
    }

    public function submit_request() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('technician_name', 'Technician Name', 'required');
        $this->form_validation->set_rules('inventory_items[]', 'Inventory Items', 'required');
        $this->form_validation->set_rules('quantity_requested', 'Quantity Requested', 'required|integer');
        $this->form_validation->set_rules('request_status', 'Request Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'technician_name' => $this->input->post('technician_name'),
                'toolkit_id' => $this->input->post('toolkit_id'),
                'request_date' => $this->input->post('request_date'),
                'inventory_items' => implode(',', $this->input->post('inventory_items')),
                'quantity_requested' => $this->input->post('quantity_requested'),
                'reason_for_request' => $this->input->post('reason_for_request'),
                'request_status' => $this->input->post('request_status'),
            );
            $this->Material_model->saveRequest($data);
            redirect('admin/Material_Management/index');
        }
    }
}
