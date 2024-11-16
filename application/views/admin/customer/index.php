<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Customer</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url('admin/dashboard')?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/customer')?>">Customer</a>
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
                        <h5 class="card-title"><?php echo $pageTitle?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>  
                            </div>
                        </div>
                        <div class="ibox-content">
                        <div class="row">
                        <div class="col-sm-3">
                        <form method="post" class="form-horizontal" action="<?php echo base_url('admin/customer') ?>">
                             <!-- Error Alert -->
                             <div class="alert alert-danger text-center" role="alert" id="error_alert" style="<?php echo ($this->session->flashdata('error_msg')) ? '' : 'display:none;'?>">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <span id="error_msg"><?php echo ($this->session->flashdata('error_msg')) ? $this->session->flashdata('error_msg') : ''; ?></span>
                            </div>
                            
                            <!-- Success Alert -->
                            <div class="alert alert-success text-center" role="alert" id="success_alert" style="<?php echo ($this->session->flashdata('success_msg')) ? '' : 'display:none;'?>">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <span id="success_msg"><?php echo ($this->session->flashdata('success_msg')) ? $this->session->flashdata('success_msg') : ''; ?></span>
                            </div>
                        
                            
                                <div class="form-group">
                                    <label ><b class="text-danger">*</b>Customer Name:</label>
                                    <input type="text" name="customer_name" id="customer_name" class="form-control <?php echo (form_error('customer_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Name" value="<?php echo set_value('customer_name'); ?>">
                                    <?php echo form_error('customer_name', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Customer Location:</label>
                                    <input type="text" name="customer_loc" id="customer_loc" class="form-control <?php echo (form_error('customer_loc')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Location" value="<?php echo set_value('customer_loc'); ?>">
                                    <?php echo form_error('customer_loc', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                             
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Customer Address:</label>
                                    <input type="text" name="address" id="address" class="form-control <?php echo (form_error('address')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Address" value="<?php echo set_value('address'); ?>">
                                    <?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Customer Person:</label>
                                    <input type="text" name="contact_name[]" id="contact_name" class="form-control <?php echo (form_error('contact_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact Person" value="<?php echo (!set_value('contact_name')) ? '' : set_value('contact_name'); ?>">
                                    <?php echo form_error('contact_name', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Customer No:</label>
                                    <input type="number" name="contact_no[]" id="contact_no" class="form-control <?php echo (form_error('contact_no')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No 1" value="<?php echo (!set_value('contact_no')) ? '' : set_value('contact_no'); ?>" maxlenght="10">
                                    <?php echo form_error('contact_no', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Customer Email:</label>
                                    <input type="email" name="email[]" id="email" class="form-control <?php echo (form_error('email')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Email" value="<?php echo (!set_value('email')) ? '' : set_value('email'); ?>">
                                    <?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                             <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Department:</label>
                                    <select class="select2 form-control custom-select" id="type" name="type[]" >
                                    <option value="Technical">Technical</option>
                                    <option value="Purchase">Purchase</option>
                                    </select>
                                    <?php echo form_error('type', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                        
                            <!-- GST No -->
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>GST No:</label>
                                    <input type="text" name="gst_no" id="gst_no" class="form-control <?php echo (form_error('gst_no')) ? 'is-invalid' : '' ?>" placeholder="Enter GST No" value="<?php echo set_value('gst_no'); ?>" maxlength="15">
                                    <?php echo form_error('gst_no', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>PAN No:</label>
                                    <input type="text" name="pan_no" id="pan_no" class="form-control <?php echo (form_error('pan_no')) ? 'is-invalid' : '' ?>" placeholder="Enter PAN No" value="<?php echo (!set_value('pan_no')) ? '' : set_value('pan_no'); ?>" readonly>
                                    <?php echo form_error('pan_no', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>City:</label>
                                    <select name="city_id" id="city_id" class="form-control custom-select <?php echo (form_error('city_id')) ? 'is-invalid' : '' ?>">
                                        <option value="">Select City</option>
                                        <?php foreach($city as $row): ?>
                                            <option value="<?php echo $row->city_id; ?>" <?php echo ($row->city_id == set_value('city_id')) ? 'selected' : ''; ?>>
                                                <?php echo $row->city_name; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('city_id', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>State:</label>
                                    <select class="form-control custom-select <?php echo (form_error('state_id')) ? 'is-invalid' : '' ?>" id="state_id" name="state_id1" style="width: 100%; height:36px;">
											 <?php 
                                                $selected = (!set_value('state_code')) ? '' : set_value('state_code'); 
                                            ?>
											<option value="">Select State</option>
												<?php foreach($state as $row):?>
													<option value="<?php echo $row->state_code;?>"<?php echo ($row->state_code == $selected) ? 'selected' : '' ?>><?php echo $row->states;?></option>
												<?php endforeach;?>
										</select>
										<?php echo form_error('state_id', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>Country:</label>
                                    <select class="form-control custom-select <?php echo (form_error('country_id')) ? 'is-invalid' : '' ?>" id="country_id" name="country_id" style="width: 100%; height:36px;">
											 <?php 
                                                $selected = (!set_value('country_id')) ? '' : set_value('country_id'); 
                                            ?>
											<option value="">Select Country</option>
												<?php foreach($country as $row):?>
													<option value="<?php echo $row->country_id;?>"<?php echo ($row->country_id == $selected) ? 'selected' : '' ?>><?php echo $row->country_name;?></option>
												<?php endforeach;?>
										</select>
										<?php echo form_error('country_id', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label><b class="text-danger">*</b>State Code:</label>
                                    <input type="text" name="state_code1" id="state_code" class="form-control <?php echo (form_error('state_code')) ? 'is-invalid' : '' ?>" placeholder="State Code" value="<?php echo (!set_value('state_code')) ? '' : set_value('state_code'); ?>" readonly>
									<?php echo form_error('state_code', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                        

                            <!-- Customer Status -->
                            <div class="col-sm-3">
                                <div class="form-group">  
                                    <label><b class="text-danger">*</b>Customer Status:</label>
                                    <select name="status" id="status" class="form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>">
                                        <option value="ACTIVE" <?php echo (set_value('status') == 'ACTIVE') ? 'selected' : ''; ?>>ACTIVE</option>
                                        <option value="INACTIVE" <?php echo (set_value('status') == 'INACTIVE') ? 'selected' : ''; ?>>INACTIVE</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <!-- Submit and Cancel Buttons -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="form-group">
                                <button class="btn btn-white" type="button" onclick="window.location.href='<?php echo base_url('admin/Customer'); ?>'">Cancel</button>
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