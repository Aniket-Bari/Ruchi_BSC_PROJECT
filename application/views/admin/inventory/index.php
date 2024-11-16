<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Inventory</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard') ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/inventory') ?>">Inventory</a>
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
                    <h5 class="card-title">Inventory Management Form
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
                                action="<?php echo base_url('admin/inventory') ?>">
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
                                    <label><b class="text-danger">*</b>Item Name:</label>
                                    <input type="text" name="storage_location" id="storage_location"
                                        class="form-control <?php echo (form_error('storage_location')) ? 'is-invalid' : '' ?>"
                                        placeholder="Enter Item Name"
                                        value="<?php echo set_value('storage_location'); ?>">
                                    <?php echo form_error('storage_location', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Item Category:</label>
                                <select name="item_category" id="item_category"
                                    class="form-control <?php echo (form_error('item_category')) ? 'is-invalid' : '' ?>">
                                    <option value="">Select Item Category</option>
                                    <option value="Commercial AC Unit" <?php echo set_select('item_category', 'Commercial AC Unit'); ?>>Commercial AC Unit</option>
                                    <option value="Installation Material" <?php echo set_select('item_category', 'Installation Material'); ?>>Installation Material</option>
                                    <option value="AMC Consumables" <?php echo set_select('item_category', 'AMC Consumables'); ?>>AMC Consumables</option>
                                </select>
                                <?php echo form_error('item_category', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>SKU:</label>
                                <input type="text" name="sku" id="sku"
                                    class="form-control <?php echo (form_error('sku')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter SKU" value="<?php echo set_value('sku'); ?>">
                                <?php echo form_error('sku', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Vendor Name:</label>
                                <input type="text" name="vendor_name[]" id="vendor_name"
                                    class="form-control <?php echo (form_error('vendor_name')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Vendor Name"
                                    value="<?php echo (!set_value('vendor_name')) ? '' : set_value('vendor_name'); ?>">
                                <?php echo form_error('vendor_name', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Unit Price:</label>
                                <input type="number" name="unit_price" id="unit_price"
                                    class="form-control <?php echo (form_error('unit_price')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Unit Price" value="<?php echo set_value('unit_price'); ?>"
                                    step="0.01" min="0">
                                <?php echo form_error('unit_price', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Stock Quantity:</label>
                                <input type="number" name="stock_quantity" id="stock_quantity"
                                    class="form-control <?php echo (form_error('stock_quantity')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Stock Quantity"
                                    value="<?php echo set_value('stock_quantity'); ?>" min="0" required>
                                <?php echo form_error('stock_quantity', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>



                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Reorder Level:</label>
                                <input type="number" name="reorder_level" id="reorder_level"
                                    class="form-control <?php echo (form_error('reorder_level')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Reorder Level" value="<?php echo set_value('reorder_level'); ?>"
                                    min="0">
                                <?php echo form_error('reorder_level', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label><b class="text-danger">*</b>Stoarage Location:</label>
                                <input type="text" name="storage_location" id="storage_location"
                                    class="form-control <?php echo (form_error('storage_location')) ? 'is-invalid' : '' ?>"
                                    placeholder="Enter Stoarage Location"
                                    value="<?php echo set_value('storage_location'); ?>">
                                <?php echo form_error('storage_location', '<div class="invalid-feedback">', '</div>'); ?>

                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <br>
                        <!-- Submit and Cancel Buttons -->
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="form-group">
                                <button class="btn btn-white" type="button"
                                    onclick="window.location.href='<?php echo base_url('admin/inventory'); ?>'">Cancel</button>
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