
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Customer Management Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/customer_management') ?>">Customer_Management</a>
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
                    <h5 class="card-title">Customer Management Form
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
                            <form method="post" class="form-horizontal" action="<?php echo base_url('admin/lead') ?>">
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
                                    <label><b class="text-danger">*</b>Customer Name:</label>
                                    <input type="text" name="customer_name" id="customer_name"
                                        class="form-control <?php echo (form_error('customer_name')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Lead Name" value="<?php echo set_value('customer_name'); ?>"
                                        required maxlength="150">
                                    <?php echo form_error('customer_name', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="customer_type"><b class="text-danger">*</b>Customer
                                    Type:</label>
                                <select name="customer_type" id="customer_type"
                                    class="form-control <?php echo (form_error('customer_type')) ? 'is-invalid' : ''; ?>"
                                    required>
                                    <option value="">Select Customer Type</option>
                                    <option value="Residential" <?php echo set_select('customer_type', 'Residential'); ?>>
                                        Residential</option>
                                    <option value="Commercial" <?php echo set_select('customer_type', 'Commercial'); ?>>
                                        Commercial</option>
                                    <option value="AMC" <?php echo set_select('customer_type', 'AMC'); ?>>
                                        AMC</option>
                                </select>
                                <?php echo form_error('customer_type', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="contact_person"><b class="text-danger">*</b>Contact
                                    Person:</label>
                                <input type="text" name="contact_person" id="contact_person"
                                    class="form-control <?php echo (form_error('contact_person')) ? 'is-invalid' : ''; ?>"
                                    placeholder="Enter Contact Person Name"
                                    value="<?php echo set_value('contact_person'); ?>" required maxlength="100">
                                <?php echo form_error('contact_person', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="phone_number"><b class="text-danger">*</b>Phone Number:</label>
                                <input type="number" name="phone_number" id="phone_number"
                                    class="form-control <?php echo (form_error('phone_number')) ? 'is-invalid' : ''; ?>"
                                    placeholder="Enter Phone Number" value="<?php echo set_value('phone_number'); ?>"
                                    required>
                                <?php echo form_error('phone_number', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Email Address:</label>
                                <input type="email" name="email[]" id="email"
                                    class="form-control <?php echo (form_error('email')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Email Address"
                                    value="<?php echo (!set_value('email')) ? '' : set_value('email'); ?>" required>
                                <?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="billing_address"><b class="text-danger">*</b>Billing
                                    Address:</label>
                                <textarea name="billing_address" id="billing_address"
                                    class="form-control <?php echo (form_error('billing_address')) ? 'is-invalid' : ''; ?>"
                                    placeholder="Enter Billing Address" required
                                    maxlength="250"><?php echo set_value('billing_address'); ?></textarea>
                                <?php echo form_error('billing_address', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="multiple_projects">Multiple Projects:</label>
                                <input type="checkbox" name="multiple_projects" id="multiple_projects"
                                    class="form-check-input" <?php echo set_checkbox('multiple_projects', '1'); ?>>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="existing_contracts">Existing Contracts:</label>
                                <textarea name="existing_contracts" id="existing_contracts"
                                    class="form-control <?php echo (form_error('existing_contracts')) ? 'is-invalid' : ''; ?>"
                                    placeholder="Enter Existing Contracts"><?php echo set_value('existing_contracts'); ?></textarea>
                                <?php echo form_error('existing_contracts', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <br>
                        <!-- Submit and Cancel Buttons -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="form-group">
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/Lead'); ?>'">Cancel</button>
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