 <!--main contents start-->
 <!-- <link href="<?php //echo base_url('assets/css/select2.min.css')?>" rel="stylesheet" type="text/css" /> -->
 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/js/dataTables.min.js') ?>"></script> -->
<!-- <link href="<?php //echo base_url('assets/css/select2.min.css')?>" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
/>
                <main class="content_wrapper">
                    <!--page title start-->
                    <div class="page-heading">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="page-breadcrumb">
                                        <h1>Customers</h1>
                                    </div><br>
                                </div>
                                <div class="col-md-6 justify-content-md-end d-flex">
                                    <div class="breadcrumb_nav">
                                        <ol class="breadcrumb">
                                            <li>
                                                <i class="fa fa-home"></i>
                                                <a class="parent-item" href="<?php echo base_url('admin/dashboard')?>">Home</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li>
                                                <a class="parent-item" href="<?php echo base_url('admin/Customer')?>">Customers</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li class="active">
                                                Add
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="form-group row">
                    <div class="col-md-12">
                        <form name="customers" id="addcustomer" action="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h6 class="card-title"><?php echo $pageTitle?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-4 col-sm-8">
                                    <label for="customer_name" class="text-right control-label col-form-label <?php echo (form_error('customer_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Customer Name : </label>
                                    <input type="text" id="customer_name" name="customer_name" class="form-control <?php echo (form_error('customer_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Name" value="<?php echo (!set_value('customer_name')) ? '' : set_value('customer_name'); ?>">
                                    <?php echo form_error('customer_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-4 col-sm-8">
                                    <label for="customer_loc" class="text-right control-label col-form-label <?php echo (form_error('customer_loc')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Customer Location : </label>
                                    <input type="text" id="customer_loc" name="customer_loc" class="form-control <?php echo (form_error('customer_loc')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Name" value="<?php echo (!set_value('customer_loc')) ? '' : set_value('customer_loc'); ?>">
                                    <?php echo form_error('customer_loc', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                   
                                    <div class="col-md-4 col-sm-8">
                                    <label for="address" class="text-right control-label col-form-label <?php echo (form_error('address')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Customer Address : </label>
                                    <input type="text" id="address" name="address" class="form-control <?php echo (form_error('address')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer address" value="<?php echo (!set_value('address')) ? '' : set_value('address'); ?>">
                                    <?php echo form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                
                

                                <div class="form-group row">
                                    
                                    <div class="col-md-3 col-sm-4">
                                    <label for="contact_name" class="text-right control-label col-form-label <?php echo (form_error('contact_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Contact Person : </label>
                                    <input type="text" name="contact_name[]" id="contact_name" class="form-control <?php echo (form_error('contact_name')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact Person" value="<?php echo (!set_value('contact_name')) ? '' : set_value('contact_name'); ?>">
                                    <?php echo form_error('contact_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    
                                    <div class="col-md-3 col-sm-4">
                                    <label for="contact_no" class="text-right control-label col-form-label <?php echo (form_error('contact_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Contact No : </label>
                                    <input type="number" name="contact_no[]" id="contact_no" class="form-control <?php echo (form_error('contact_no')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No 1" value="<?php echo (!set_value('contact_no')) ? '' : set_value('contact_no'); ?>" maxlenght="10">
                                    <?php echo form_error('contact_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                   
                                    <div class="col-md-2 col-sm-4">
                                    <label for="email" class="text-right control-label col-form-label <?php echo (form_error('email')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Customer Email : </label>
                                    <input type="email" name="email[]" id="email" class="form-control <?php echo (form_error('email')) ? 'is-invalid' : '' ?>" placeholder="Enter Customer Email" value="<?php echo (!set_value('email')) ? '' : set_value('email'); ?>">
                                    <?php echo form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-2 col-sm-4">
                                    <label for="type" class="text-right control-label col-form-label <?php echo (form_error('type')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Department : </label>
                                    <select class="select2 form-control custom-select" id="type" name="type[]" >
                                    <option value="Technical">Technical</option>
                                    <option value="Purchase">Purchase</option>
                                    </select>
                                    <?php echo form_error('type', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="col-md-1 col-sm-4">
                                    <button type="button" class="btn btn-primary btn-lg" onclick="add_contact()" style="font-size: 10px;margin-top:30px;"><i class='fa fa-plus' title="Add More Contact" style='color: white;'></i>Add More</button>
                                     </div>
                                </div>
                                <div class="add_row"></div>

                            <hr>
                                

                                <!-- <div class="form-group row">
                                    <div class="col-md-10 col-sm-4"></div>
                                <div class="col-md-2 col-sm-4">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="add_contact()" style="font-size: 10px;"><i class='fa fa-plus'  style='color: white'> Add More Contact</i></button>
                                </div>
                                    <div id="contact" class="col-md-11"></div>

                                </div> -->
                                
                                <!-- <div class="form-group row">
                                    <label for="contact_person_2" class="col-sm-4 text-right control-label col-form-label <?php// echo (form_error('contact_person_2')) ? 'text-danger' : '' ?>">Contact Person 2 : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" name="contact_person_2" id="contact_person_2" class="form-control <?php //echo (form_error('contact_person_2')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact Person 2" value="<?php// echo (!set_value('contact_person_2')) ? '' : set_value('contact_person_2'); ?>">
                                    <?php //echo form_error('contact_person_2', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_no_2" class="col-sm-4 text-right control-label col-form-label <?php //echo (form_error('contact_no_2')) ? 'text-danger' : '' ?>">Contact No 2 : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" name="contact_no_2" id="contact_no_2" class="form-control <?php //echo (form_error('contact_no_2')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No 2" value="<?php //echo (!set_value('contact_no_2')) ? '' : set_value('contact_no_2'); ?>" maxlenght="10">
                                    <?php //echo form_error('contact_no_2', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div> -->

								

                                <div class="form-group row">
                                    <!-- <label for="vendor_code" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('vendor_code')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Vendor Code : </label>
                                    <div class="col-md-3 col-sm-4">
                                    <input type="text" name="vendor_code" id="vendor_code" class="form-control <?php echo (form_error('vendor_code')) ? 'is-invalid' : '' ?>" placeholder="Enter vendor Code" value="<?php echo (!set_value('vendor_code')) ? '' : set_value('gst_no'); ?>">
                                    <?php echo form_error('vendor_code', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div> -->

                                    <label for="gst_no" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('gst_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>GST No : </label>
                                    <div class="col-md-4 col-sm-4">
                                    <input type="text" name="gst_no" id="gst_no" maxlength="15" class="form-control <?php echo (form_error('gst_no')) ? 'is-invalid' : '' ?>" placeholder="Enter GST No" value="<?php echo (!set_value('gst_no')) ? '' : set_value('gst_no'); ?>">
                                    <?php echo form_error('gst_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <label for="pan_no" class="col-sm-2 text-right control-label col-form-label <?php echo (form_error('pan_no')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>PAN No : </label>
                                    <div class="col-md-4 col-sm-4">
                                    <input type="text" name="pan_no" id="pan_no" class="form-control <?php echo (form_error('pan_no')) ? 'is-invalid' : '' ?>" placeholder="Enter PAN No" value="<?php echo (!set_value('pan_no')) ? '' : set_value('pan_no'); ?>" readonly>
                                    <?php echo form_error('pan_no', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                </div>

                               
                                <div class="form-group row">
                                    <label for="city_id" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('state_id')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>City : </label>
                                    <div class="col-md-4 col-sm-4">
										<select class="form-control custom-select <?php echo (form_error('city_id')) ? 'is-invalid' : '' ?>" id="city_id" name="city_id" style="width: 100%; height:36px;">
											 <?php 
                                                $selected = (!set_value('city_id')) ? '' : set_value('city_id'); 
                                            ?>
											<option value="">Select city</option>
												<?php foreach($city as $row):?>
													<option value="<?php echo $row->city_id;?>"<?php echo ($row->city_id == $selected) ? 'selected' : '' ?>><?php echo $row->city_name;?></option>
												<?php endforeach;?>
										</select>
										<?php echo form_error('city_id', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
									<div class="col-md-1 col-sm-4">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="add_city()" style="font-size: 10px;"data-target="#cityModal"><i class='fa fa-plus'  style='color: white'></i></button>
                                    </div>

                                    <label for="state_id" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('state_id')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>State : </label>
                                    <div class="col-md-4 col-sm-4">
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
									<div class="col-md-1 col-sm-4">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="add_state()" style="font-size: 10px;"data-target="#myModal"><i class='fa fa-plus'  style='color: white'></i></button>
                                    </div>
                                </div>
                                
								<div class="form-group row">
                                   
                                </div> 

                                <div class="form-group row">
                                    <label for="country_id" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('state_id')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Country : </label>
                                    <div class="col-md-4 col-sm-4">
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
									<div class="col-md-1 col-sm-4">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="add_country()" style="font-size: 10px;"data-target="#countryModal"><i class='fa fa-plus'  style='color: white'></i></button>
                                    </div>

                                    <label for="state_code" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('state_code')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>State Code : </label>
                                    <div class="col-md-4 col-sm-4">
										<input type="text" name="state_code1" id="state_code" class="form-control <?php echo (form_error('state_code')) ? 'is-invalid' : '' ?>" placeholder="State Code" value="<?php echo (!set_value('state_code')) ? '' : set_value('state_code'); ?>" readonly>
										<?php echo form_error('state_code', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label for="status" class="col-sm-1 text-right control-label col-form-label <?php echo (form_error('status')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Customer Status : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <select class="select2 form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>" name="status" style="width: 100%; height:36px;">
                                        <?php 
                                            $selected = (!set_value('status')) ? '' : set_value('status'); 
                                        ?>
                                        <option value="ACTIVE" <?php echo ('ACTIVE' == $selected) ? 'selected' : '' ?>>ACTIVE</option>
                                        <option value="INACTIVE" <?php echo ('INACTIVE' == $selected) ? 'selected' : '' ?>>INACTIVE</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 m-t-15"></label>
                                    <div class="col-sm-6 text-center">
                                    <button type="Submit" name="Submit" class="btn btn-success btn-sm">Submit</button>
                                    <a href="<?php echo base_url('admin/Customer')?>" type="button" class="btn btn-danger btn-sm">Cancel</a>
                                    </div>
                                </div>

                                <?php
                                    $error = $this->session->flashdata('error_msg');
                                    if($error)
                                    {
                                ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('error_msg'); ?>                    
                                </div>
                                <?php } ?>
                                <?php  
                                    $success = $this->session->flashdata('success_msg');
                                    if($success)
                                    {
                                ?>
                                <div class="alert alert-success text-center" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

        <!-----------------------------------State Modal--------------------------------------------------------- -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>State</h5>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" id="addstate">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-label" for="state_name"><b>State</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter State" value="" name="state_name" id="mod_state_name">
                                                     <input type="hidden" class="form-control" placeholder="Enter State" value="" name="state_id" id="mod_state_id">
                                                     <input type="hidden" class="form-control" placeholder="Enter State" value="" name="row_id" id="row_id">
                                                </div>
												<div class="col-lg-4">
                                                    <label class="form-label" for="state_code"><b>State Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter State" value="" name="state_code" id="mod_state_code">
                                                     <input type="hidden" class="form-control" placeholder="Enter State" value="" name="state_id" id="mod_state_id">
                                                     <input type="hidden" class="form-control" placeholder="Enter State" value="" name="row_id" id="row_id">
                                                </div>
                                               
                                                <div class="col-lg-4">
                                                   <button  onclick="add_State_master()"  style="float:right;margin-top:30px" id="mod_state1" type="button" class="btn btn-primary fa fa-plus">Add</button>
                                                   <button  onclick="update_State_master()" style="float:right;margin-top:30px" id="mod_state2" style="float:right;margin-top:30px" type="button" class="btn btn-primary hide fa fa-edit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                          <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-3">State</h5>
                                            </div>
                                          </div>

                                            <div class="table-responsive">
                                              <table id="cityTable" class="table table-striped table-bordered table-sm">
                                                  <thead class="table-light">
                                                      <tr>
                                                          <th class="align-middle">Sr.No.</th>
                                                          <th class="align-middle">State</th>
														  <th class="align-middle">State Code</th>
                                                          <!-- <th class="align-middle">Active</th> -->
                                                          <th class="align-middle">Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="state_body">
                                                 
                                                </tbody>
                                              </table>
                                              <!-- end table -->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

 <!-- -------------------------------------End State Modal ------------------------------------------------------------------>


  <!-- -------------------------------------Start City Modal ------------------------------------------------------------------>

 <div class="modal fade" id="cityModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>City</h5>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" id="addcity">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-label" for="state_name"><b>City</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter City" value="" name="city_name" id="mod_city_name">
                                                     <input type="hidden" class="form-control" placeholder="Enter City" value="" name="city_id" id="mod_city_id">
                                                     <input type="hidden" class="form-control" placeholder="Enter City" value="" name="row_id" id="row_id">
                                                </div>
												
                                               
                                                <div class="col-lg-4">
                                                   <button  onclick="add_city_master()"  style="float:right;margin-top:30px" id="mod_city1" type="button" class="btn btn-primary fa fa-plus">Add</button>
                                                   <button  onclick="update_city_master()" style="float:right;margin-top:30px" id="mod_city2" style="float:right;margin-top:30px" type="button" class="btn btn-primary hide fa fa-edit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                          <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-3">City</h5>
                                            </div>
                                          </div>

                                            <div class="table-responsive">
                                              <table id="cityTable1" class="table table-striped table-bordered table-sm">
                                                  <thead class="table-light">
                                                      <tr>
                                                          <th class="align-middle">Sr.No.</th>
                                                          <th class="align-middle">City</th>
														  <!-- <th class="align-middle">State Code</th> -->
                                                          <!-- <th class="align-middle">Active</th> -->
                                                          <th class="align-middle">Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="city_body">
                                                 
                                                </tbody>
                                              </table>
                                              <!-- end table -->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

    <!-- ----------------------------------End City Modal------------------------------------------ -->


    
  <!-- -------------------------------------Start Country Modal ------------------------------------------------------------------>

 <div class="modal fade" id="countryModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Country</h5>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" id="addcountry">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-label" for="state_name"><b>Country</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter country" value="" name="country_name" id="mod_country_name">
                                                     <input type="hidden" class="form-control" placeholder="Enter country" value="" name="country_id" id="mod_country_id">
                                                     <input type="hidden" class="form-control" placeholder="Enter country" value="" name="row_id" id="row_id">
                                                </div>
												
                                               
                                                <div class="col-lg-4">
                                                   <button  onclick="add_country_master()"  style="float:right;margin-top:30px" id="mod_country1" type="button" class="btn btn-primary fa fa-plus">Add</button>
                                                   <button  onclick="update_country_master()" style="float:right;margin-top:30px" id="mod_country2" style="float:right;margin-top:30px" type="button" class="btn btn-primary hide fa fa-edit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                          <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-3">Country</h5>
                                            </div>
                                          </div>

                                            <div class="table-responsive">
                                              <table id="countryTable1" class="table table-striped table-bordered table-sm">
                                                  <thead class="table-light">
                                                      <tr>
                                                          <th class="align-middle">Sr.No.</th>
                                                          <th class="align-middle">Country</th>
														  <!-- <th class="align-middle">State Code</th> -->
                                                          <!-- <th class="align-middle">Active</th> -->
                                                          <th class="align-middle">Action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="country_body">
                                                 
                                                </tbody>
                                              </table>
                                              <!-- end table -->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

    <!-- ----------------------------------End Country Modal------------------------------------------ -->

                        </form>
                    </div>
                </div>  
            </div>
          </div>
        </div>
    </div>
</main>

    <script>
    // ---------------------  Start State Script------------------------------------------------------
        function add_state()
        {
            $.ajax({
                type: 'POST',
                url: baseURL+'admin/Customer/get_State',
                success: function (data) {
                   // console.log(data);
                        $('#state_body').html('');
                        var str = '';
                        var i = 1;
                        $.each(JSON.parse(data),function ( index, val )
                        {
                       
                        str += '<tr id="state_row_'+ i +'"><td>'+ i +'</td><td>'+ val.states +'</td><td>'+ val.state_code +'</td><td> <a href="#" onclick="edit_state('+ val.state_id +','+ i +')" data-placement="top"  title="Edit Customer" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete Customer" onclick="delete_state('+ val.state_id +','+ i +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
                        i++;
                    });
                    $('#state_body').html(str);
                }
            });
            $('#myModal').modal('show');
        }

        
        function add_State_master(){
            var state_name  = $('#mod_state_name').val();
			var state_code  = $('#mod_state_code').val();
            $.ajax({
                    type: 'POST',
                    data:{state : state_name, state_code : state_code },
                    url: baseURL+'admin/Customer/add_state1',
                    success: function (data) {
                            var dat = JSON.parse(data);
                            if(dat.status == 'success'){
                            var tableLength = $('#cityTable tr').length;
                            var insertdata = dat.data;
                            var str = '';
                            $.each(insertdata,function ( index, val )
                            {
                            str += '<tr id="state_row_'+ tableLength +'"><td>'+ tableLength +'</td><td>'+ val.states +'</td><td>'+ val.state_code +'</td><td> <a href="#" onclick="edit_state('+ val.state_id +','+ tableLength +')" data-placement="top"  title="Edit State" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete Customer" onclick="delete_state('+ val.state_id +','+ tableLength +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
                                var option = '';
                                option = '<option value="'+val.state_id+'">'+val.states+'</option>';
                       
                                $("#state_id").append(option);

                                });
                        $('#state_body').append(str);
                        $('#mod_state_name').val('');
						$('#mod_state_code').val('');

                        }else{
                            alert(dat.status);
                        }
                    }
            });
        }

        function edit_state(state_id,row_id)
        {
            // alert(State_Id);
                $.ajax({
                type: 'POST',
                data:{state_id : state_id},
                dataType:'JSON',
                url: baseURL+'admin/Customer/get_editstate',
                success: function (data) {
                    // console.log(data.states);
                $('#mod_state_name').val(data.states);
				$('#mod_state_code').val(data.state_code);
                $('#mod_state_id').val(data.state_id);
                $('#row_id').val(row_id);
                $('#mod_state2').removeClass('hide');
                $('#mod_state1').addClass('hide');

                }
            });
        } 

        function update_State_master(){
            var state_name  = $('#mod_state_name').val();
			var state_code  = $('#mod_state_code').val();
            var state_id  = $('#mod_state_id').val();
            var row_id  = $('#row_id').val();
            $.ajax({
                type: 'POST',
                data:{state : state_name, state_code : state_code, id : state_id},
                url: baseURL+'admin/Customer/update_state',
                success: function (data) {
    
                        var str = '';
                        $.each(JSON.parse(data),function ( index, val )
                        {
                        str += '<tr id="state_row_'+ row_id +'"><td>'+ row_id +'</td><td>'+ val.states +'</td><td>'+ val.state_code +'</td><td> <a href="#" onclick="edit_state('+ val.state_id +','+ row_id +')" data-placement="top"  title="Edit Customer" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete Customer" onclick="delete_state('+ val.state_id +','+ row_id +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
                    });
                    $('#state_row_'+ row_id).replaceWith(str);
                    $('#mod_state_name').val('');
					$('#mod_state_code').val('');
                    $('#mod_state1').removeClass('hide');
                    $('#mod_state2').addClass('hide');
                }
            });
        }

        function delete_state(state_id,row_id){
            // alert(State_Id);
            $.ajax({
                    type: 'POST',
                    data:{state_id : state_id},
                    dataType:'JSON',
                    url: baseURL+'admin/Customer/delete_state',
                    success: function (data) {
                    
                $('#state_row_'+ row_id).remove();
                $('#state_id option[value="'+state_id+'"]').remove();
                $('#state_id').select2();

                }
            });
        } 

            // ---------------------  End State Script------------------------------------------------------


     // ---------------------  Start City Script------------------------------------------------------

     function add_city()
        {
            $.ajax({
                type: 'POST',
                url: baseURL+'admin/Customer/get_city',
                success: function (data) {
                        $('#city_body').html('');
                        var str = '';
                        var i = 1;
                        $.each(JSON.parse(data),function ( index, val )
                        {
                        //     // alert(val.product_id);
                        str += '<tr id="city_row_'+ i +'"><td>'+ i +'</td><td>'+ val.city_name +'</td><td><a href="#" onclick="edit_city('+ val.city_id +','+ i +')" data-placement="top"  title="Edit city" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete city" onclick="delete_city('+ val.city_id +','+ i +')" class=""><i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>';
                        i++;
                    });
                    $('#city_body').html(str);
                    
                }
            });
            $('#cityModal').modal('show');
        }

        
        function add_city_master(){
            //   alert();
            var city_name  = $('#mod_city_name').val();
            //  alert(product_name);
            $.ajax({
                    type: 'POST',
                    data:{city_name : city_name},
                    url: baseURL+'admin/Customer/add_city_name',
                    success: function (data) {

                            var tableLength = $('#cityTable1 tr').length;
                            // alert(tableLength);
                            var str = '';
                            $.each(JSON.parse(data),function ( index, val )
                            {
                            str += '<tr id="city_row_'+ tableLength +'"><td>'+ tableLength +'</td><td>'+ val.city_name +'</td><td> <a href="#" onclick="edit_city('+ val.city_id +','+ tableLength +')" data-placement="top"  title="Edit city" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete Product" onclick="delete_city('+ val.city_id +','+ tableLength +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
							var option = '';
                                option = '<option value="'+val.city_id+'">'+val.city_name+'</option>';
                       
                                $("#city_id").append(option);

                                });
                        $('#city_body').append(str);
                        $('#mod_city_name').val('');
                         // alert();
                        
                       
                    }
            });
        }

        function edit_city(city_id,row_id)
        {
            // alert(product_Id);
                $.ajax({
                type: 'POST',
                data:{city_id : city_id},
                dataType:'JSON',
                url: baseURL+'admin/Customer/get_editcity',
                success: function (data) {
                    // console.log(data.states);
                $('#mod_city_name').val(data.city_name);
                $('#mod_city_id').val(data.city_id);
                $('#row_id').val(row_id);
                $('#mod_city2').removeClass('hide');
                $('#mod_city1').addClass('hide');

                }
            });
        } 

        function update_city_master(){
            var city_name  = $('#mod_city_name').val();
            var city_id  = $('#mod_city_id').val();
            // alert(product_Id);
            var row_id  = $('#row_id').val();
            $.ajax({
                type: 'POST',
                data:{city_name : city_name, city_id : city_id},
                url: baseURL+'admin/Customer/update_city',
                success: function (data) {
    
                        var str = '';
                        $.each(JSON.parse(data),function ( index, val )
                        {
                        str += '<tr id="city_row_'+ row_id +'"><td>'+ row_id +'</td><td>'+ val.city_name +'</td><td> <a href="#" onclick="edit_city('+ val.city_id +','+ row_id +')" data-placement="top"  title="Edit City" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete City" onclick="delete_city('+ val.city_id +','+ row_id +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
                    });
                    $('#city_row_'+ row_id).replaceWith(str);
                    $('#mod_city_name').val('');
                    $('#mod_city1').removeClass('hide');
                    $('#mod_city2').addClass('hide');
                }
            });
        }

        function delete_city(city_id,row_id){
            // alert(State_Id);
            $.ajax({
                    type: 'POST',
                    data:{city_id : city_id},
                    dataType:'JSON',
                    url: baseURL+'admin/Customer/delete_city',
                    success: function (data) {
                    
                $('#city_row_'+ row_id).remove();

                }
            });
        }
         // ---------------------  Start City Script------------------------------------------------------



          // ---------------------  Start Country Script------------------------------------------------------

     function add_country()
        {
            $.ajax({
                type: 'POST',
                url: baseURL+'admin/Customer/get_country',
                success: function (data) {
                        $('#country_body').html('');
                        var str = '';
                        var i = 1;
                        $.each(JSON.parse(data),function ( index, val )
                        {
                        //     // alert(val.product_id);
                        str += '<tr id="country_row_'+ i +'"><td>'+ i +'</td><td>'+ val.country_name +'</td><td><a href="#" onclick="edit_country('+ val.country_id +','+ i +')" data-placement="top"  title="Edit country" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete country" onclick="delete_country('+ val.country_id +','+ i +')" class=""><i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>';
                        i++;
                    });
                    $('#country_body').html(str);
                    
                }
            });
            $('#countryModal').modal('show');
        }

        
        function add_country_master(){
            //   alert();
            var country_name  = $('#mod_country_name').val();
            //  alert(product_name);
            $.ajax({
                    type: 'POST',
                    data:{country_name : country_name},
                    url: baseURL+'admin/Customer/add_country_name',
                    success: function (data) {

                            var tableLength = $('#countryTable1 tr').length;
                            // alert(tableLength);
                            var str = '';
                            $.each(JSON.parse(data),function ( index, val )
                            {
                            str += '<tr id="country_row_'+ tableLength +'"><td>'+ tableLength +'</td><td>'+ val.country_name +'</td><td> <a href="#" onclick="edit_country('+ val.country_id +','+ tableLength +')" data-placement="top"  title="Edit country" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete country" onclick="delete_country('+ val.country_id +','+ tableLength +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
							var option = '';
                                option = '<option value="'+val.country_id+'">'+val.country_name+'</option>';
                       
                                $("#country_id").append(option);

                                });
                        $('#country_body').append(str);
                        $('#mod_country_name').val('');
                         // alert();
                        
                       
                    }
            });
        }

        function edit_country(country_id,row_id)
        {
            // alert(product_Id);
                $.ajax({
                type: 'POST',
                data:{country_id : country_id},
                dataType:'JSON',
                url: baseURL+'admin/Customer/get_editcountry',
                success: function (data) {
                    // console.log(data.states);
                $('#mod_country_name').val(data.country_name);
                $('#mod_country_id').val(data.country_id);
                $('#row_id').val(row_id);
                $('#mod_country2').removeClass('hide');
                $('#mod_country1').addClass('hide');

                }
            });
        } 

        function update_country_master(){
            var country_name  = $('#mod_country_name').val();
            var country_id  = $('#mod_country_id').val();
            // alert(product_Id);
            var row_id  = $('#row_id').val();
            $.ajax({
                type: 'POST',
                data:{country_name : country_name, country_id : country_id},
                url: baseURL+'admin/Customer/update_country',
                success: function (data) {
    
                        var str = '';
                        $.each(JSON.parse(data),function ( index, val )
                        {
                        str += '<tr id="country_row_'+ row_id +'"><td>'+ row_id +'</td><td>'+ val.country_name +'</td><td> <a href="#" onclick="edit_country('+ val.country_id +','+ row_id +')" data-placement="top"  title="Edit country" class=""><i class="mdi mdi-18px mdi-lead-pencil text-default"></i></a><a href="#" title="Delete country" onclick="delete_country('+ val.country_id +','+ row_id +')" class=""> <i class="mdi mdi-18px mdi-delete text-danger"></i></a></td></tr>' ;
                    });
                    $('#country_row_'+ row_id).replaceWith(str);
                    $('#mod_country_name').val('');
                    $('#mod_country1').removeClass('hide');
                    $('#mod_country2').addClass('hide');
                }
            });
        }

        function delete_country(country_id,row_id){
            // alert(State_Id);
            $.ajax({
                    type: 'POST',
                    data:{country_id : country_id},
                    dataType:'JSON',
                    url: baseURL+'admin/Customer/delete_country',
                    success: function (data) {
                    
                $('#country_row_'+ row_id).remove();

                }
            });
        }
         // ---------------------  Start country Script------------------------------------------------------


       
         var room2 = 0;
   var chareaimg = 0;
         function add_contact() {
            // alert();
      room2++;
      chareaimg++;
    //   var objTo = document.getElementsByClassName('add_row')
      var divtest12 = document.createElement("div");
      divtest12.setAttribute("class", "form-group removeclass2" + room2);
      var rdiv12 = 'removeclass2' + room2;
    innerHTML = '<div class="form-group row '+rdiv12+'"><div class="col-md-3 col-sm-4"><label for="contact_name" class="text-right control-label col-form-label"><b class="text-danger">* </b> Contact Person : </label><input type="text" name="contact_name[]" id="contact_name" class="form-control" placeholder="Enter Contact Person" value=""></div><div class="col-md-3 col-sm-4"><label for="contact_no" class="text-right control-label col-form-label"><b class="text-danger">* </b>Contact No : </label><input type="number" name="contact_no[]" id="contact_no" class="form-control" placeholder="Enter Contact No 1" value="" maxlenght="10"></div><div class="col-md-2 col-sm-4"><label for="email" class="text-right control-label col-form-label"><b class="text-danger">* </b>Customer Email : </label><input type="email" name="email[]" id="email" class="form-control" placeholder="Enter Customer Email" value=""></div><div class="col-md-2 col-sm-4"><label for="email" class="text-right control-label col-form-label"><b class="text-danger">* </b>Department : </label> <select class="select2 form-control custom-select" id="type" name="type[]" ><option value="Technical">Technical</option><option value="Purchase">Purchase</option></select></div><div class="col-md-2 col-sm-4"><button type="button" onclick="remove_chargimg('+room2+')" class="btn btn-primary btn-lg"  style="font-size: 10px;"><i class="fa fa-minus" title="Remove Contact" style="color: white"></i>Remove</button></div></div>';

    //   objTo.appendChild(divtest12)
    $('.add_row').append(innerHTML);
   }

   function remove_chargimg(rid) {
      $('.removeclass2' + rid).remove();
   }


</script>

<script>
	$("#gst_no").on("keyup",function() {
                let gst_no = $("#gst_no").val();
                // alert(gst_no);
             $("#pan_no").val(gst_no.substring(2,12));
             $("#state_id").val(gst_no.substring(0,2));

       var state = $('#state_id').val();
   		$.ajax({
                 type:'POST',
                 url: baseURL+'admin/Customer/state_code',
                 data:{state:state},
                 // alert(state),
                 dataType: "json",
                 success:function(data){
                  // alert(data.State_code);
                   // console.log(data.State_code);
                     $('#state_code').val(data.state_code);      
   
                }
        });

    });
</script>

<!-- <script>
    $(document).ready(function(){
         $("#cityTable").DataTable();
         $('.datatables_length').addClass('bs-select');

        });
</script> -->

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
  $(function(){
    $("#cityTable").dataTable();
  })
</script>


