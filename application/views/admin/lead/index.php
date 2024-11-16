
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Lead Entry Form</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/lead') ?>">Lead</a>
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
                    <h5 class="card-title">Lead Entry Form
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
                                    <label><b class="text-danger">*</b>Lead Name:</label>
                                    <input type="text" name="lead_name" id="lead_name"
                                        class="form-control <?php echo (form_error('lead_name')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Lead Name" value="<?php echo set_value('lead_name'); ?>"
                                        required maxlength="150">
                                    <?php echo form_error('lead_name', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Lead Type:</label>
                                <select name="lead_type" id="lead_type" class="form-control" required>
                                    <option value="">Select Option</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                                <?php echo form_error('lead_type', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Lead Source:</label>
                                <select name="lead_source" id="lead_source" class="form-control" required>
                                    <option value="">Select Option</option>
                                    <option value="Referral">Referral</option>
                                    <option value="Website">Website</option>
                                    <option value="Cold Call">Cold Call</option>
                                    <option value="Tender">Tender</option>
                                </select>
                                <?php echo form_error('lead_source', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Contact Person:</label>
                                <input type="text" name="contact_person" id="contact_person"
                                    class="form-control <?php echo (form_error('contact_person')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Contact Person"
                                    value="<?php echo set_value('contact_person'); ?>" required maxlength="100">
                                <?php echo form_error('contact_person', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Phone Number:</label>
                                <input type="number" name="phone_number[]" id="phone_number"
                                    class="form-control <?php echo (form_error('phone_number')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Phone Number"
                                    value="<?php echo (!set_value('phone_number')) ? '' : set_value('phone_number'); ?>"
                                    maxlenght="10" required>
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
                                <label><b class="text-danger">*</b>Assigned To:</label>
                                <select name="assigned_to" id="assigned_to" class="form-control" required>
                                    <option value="">Select Option</option>
                                    <option value="Salesperson">Salesperson</option>
                                    <option value="Back Office Team">Back Office Team</option>
                                </select>
                                <?php echo form_error('assigned_to', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Lead Status:</label>
                                <select name="lead_status" id="lead_status" class="form-control" required>
                                    <option value="">Select Option</option>
                                    <option value="Interested">Interested</option>
                                    <option value="Not Interested">Not Interested</option>
                                    <option value="On Hold">On Hold</option>
                                </select>
                                <?php echo form_error('lead_status', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Follow-Up Date:</label>
                                <input type="date" name="follow_up_date" id="follow_up_date"
                                    class="form-control <?php echo (form_error('follow_up_date')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Follow-Up Date"
                                    value="<?php echo (!set_value('follow_up_date')) ? '' : set_value('follow_up_date'); ?>">
                                <?php echo form_error('follow_up_date', '<div class="invalid-feedback">', '</div>'); ?>
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