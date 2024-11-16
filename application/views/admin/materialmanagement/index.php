<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Material Management Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/materialmanagement') ?>">Material Management</a>
            </li>
            <li class="active">
                <strong>Add</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 class="card-title">Material Management Form
                        <!-- <?php echo $pageTitle ?> -->
                        </h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                    </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>  
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <form method="post" class="form-horizontal"
                                action="<?php echo base_url('admin/materialmanagement') ?>">
                                <!-- Error Alert -->
                                <div class="alert alert-danger text-center" role="alert" id="error_alert"
                                    style="<?php echo ($this->session->flashdata('error_msg')) ? '' : 'display:none;' ?>">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <span
                                        id="error_msg"><?php echo ($this->session->flashdata('error_msg')) ? $this->session->flashdata('error_msg') : ''; ?></span>
                                </div>

                                <!-- Success Alert -->
                                <div class="alert alert-success text-center" role="alert" id="success_alert"
                                    style="<?php echo ($this->session->flashdata('success_msg')) ? '' : 'display:none;' ?>">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <span
                                        id="success_msg"><?php echo ($this->session->flashdata('success_msg')) ? $this->session->flashdata('success_msg') : ''; ?></span>
                                </div>
                               
                                    <div class="form-group">
                                        <label><b class="text-danger">*</b>Technician Name:</label>
                                        <select name="technician_name" id="technician_name"
                                            class="form-control <?php echo (form_error('technician_name')) ? 'is-invalid' : '' ?>">
                                            <option value="">Select Technician</option>
                                            <option value="Commercial AC Unit" <?php echo set_select('technician_name', 'Commercial AC Unit'); ?>>Item 1</option>
                                            <option value="Installation Material" <?php echo set_select('technician_name', 'Installation Material'); ?>>Item 2
                                            </option>
                                            <option value="AMC Consumables" <?php echo set_select('technician_name', 'AMC Consumables'); ?>>
                                                Item 3</option>
                                        </select>
                                        <?php echo form_error('technician_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b class="text-danger">*</b>Toolkit ID:</label>
                                        <input type="text" name="toolkit_id[]" id="toolkit_id"
                                            class="form-control <?php echo (form_error('toolkit_id')) ? 'is-invalid' : '' ?>"
                                            placeholder="Enter Toolkit ID" value="<?= uniqid('TK') ?>" readonly
                                            required>
                                        <?php echo form_error('toolkit_id', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Request Date:</label>
                                        <input type="text" name="request_date" id="request_date"
                                            class="form-control <?php echo (form_error('request_date')) ? 'is-invalid' : '' ?>"
                                            placeholder="Enter EOD Report Date" value="<?php echo date('Y-m-d'); ?>"
                                            readonly required>
                                        <?php echo form_error('request_date', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b class="text-danger">*</b>Inventory Items:</label>
                                        <select name="inventory_items" id="inventory_items"
                                            class="select2 form-control custom-select" required>
                                            <option value="">Select Option</option>
                                            <option value="Item 1">Item 1</option>
                                            <option value="Item 2">Item 2</option>
                                        </select>
                                        <?php echo form_error('inventory_items', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label><b class="text-danger">*</b>Quantity Requested:</label>
                                        <input type="number" name="quantity_requested" id="quantity_requested"
                                            class="form-control custom-input" placeholder="Enter quantity" required>
                                        <?php echo form_error('quantity_requested', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Reason for Request:</label>
                                        <textarea name="reason_for_request" id="reason_for_request"
                                            class="form-control custom-textarea" rows="3"
                                            placeholder="Enter reason (optional)"></textarea>
                                        <?php echo form_error('reason_for_request', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Manager Approval:</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="manager_approval" id="manager_approval"
                                                class="form-check-input" disabled>
                                            <label for="manager_approval" class="form-check-label">
                                                Approved / Rejected (Auto-populated)
                                            </label>
                                        </div>
                                        <?php echo form_error('manager_approval', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Request Status:</label>
                                        <select name="request_status" id="request_status"
                                            class="form-control custom-select" required>
                                            <option value="">Select Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                        <?php echo form_error('request_status', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                        </div>
                        <div class="row">

                            <br>
                            <!-- Submit and Cancel Buttons -->
                            <div class="col-sm-4 col-sm-offset-2">
                                <div class="form-group">
                                    <button class="btn btn-white" type="button"
                                        onclick="window.location.href='<?php echo base_url('admin/materialmanagement'); ?>'">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                            <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>