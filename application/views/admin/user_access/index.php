<!--main contents start-->
				<main class="content_wrapper">
					<!--page title start-->
					<div class="page-heading">
						<div class="container-fluid">
							<div class="row d-flex align-items-center">
								<div class="col-md-6">
									<div class="page-breadcrumb">
										<h1>User Access</h1>
									</div>
								</div>
								<div class="col-md-6 justify-content-md-end d-flex">
									<div class="breadcrumb_nav">
										<ol class="breadcrumb">
											<li>
												<i class="fa fa-home"></i>
												<a class="parent-item" href="<?php echo base_url('admin/dashboard')?>">Home</a>
												<i class="fa fa-angle-right"></i>
											</li>
											<li class="active">
												User Access
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
               <form method="post" enctype="multipart/form-data" action="">
               <div class="card">
                  <div class="card-body">
					 
                     <div class="alert alert-danger text-center" role="alert" id="error_alert" style="<?php echo ($this->session->flashdata('error_msg')) ? '' : 'display:none;'?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span id="error_msg">
                        <?php echo ($this->session->flashdata('error_msg')) ? $this->session->flashdata('error_msg') : ''; ?>
                        </span>                   
                     </div>
                     <div class="alert alert-success text-center" role="alert"  id="success_alert" style="<?php echo ($this->session->flashdata('success_msg')) ? '' : 'display:none;'?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span id="success_msg">
                        <?php echo ($this->session->flashdata('success_msg')) ? $this->session->flashdata('success_msg') : ''; ?>
                        </span>
                     </div>
                     <div class="d-flex no-block align-items-center">
                        <h6 class="card-title"><?php echo $pageTitle?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                     </div>
                     <div class="form-group row">
                        <label for="access_name" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('access_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Access Name : </label>
                        <div class="col-md-4 col-sm-8">
                           <input type="text" name="access_name" class="form-control <?php echo (form_error('access_name')) ? 'is-invalid' : '' ?>" placeholder="Enter access name" value="<?php echo (!set_value('access_name')  && !empty($p_record)) ? set_value('access_name',$p_record->access_name) : set_value('access_name'); ?>">
                           <?php echo form_error('access_name', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="access_url" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('access_url')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Access URL : </label>
                        <div class="col-md-4 col-sm-8">
                           <div class="input-group">
                           <div class="input-group-prepend" style="width:100%;">
                                <span class="input-group-text" id="basic-addon1"><?php echo base_url('admin/')?></span>
                            </div>
                           <input type="text" name="access_url" class="form-control <?php echo (form_error('access_url')) ? 'is-invalid' : '' ?>" placeholder="Enter access url" value="<?php echo (!set_value('access_url')  && !empty($p_record)) ? set_value('access_url',$p_record->access_url) : set_value('access_url'); ?>">
                           </div>
                           <?php echo form_error('access_url', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="status" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('status')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Access Status : </label>
                        <div class="col-md-4 col-sm-8">
                           <select class="select2 form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>" name="status" style="width: 100%; height:36px;">
                              <?php 
                                 $selected = (!set_value('status') && !empty($p_record)) ? set_value('status',$p_record->status) : set_value('status'); 
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
                           <a href="<?php echo base_url('admin/dashboard')?>" type="button" class="btn btn-danger btn-sm">Cancel</a>
                        </div>
                    </div>
                     
                  </div>
               </div>
            </form>


			<br/>
             <!-- Table start here -->
            
             <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
								<div class="loading text-center">
										<div class="overlay-content">
										   <img src="<?php echo base_url('assets/images/loading.gif') ?>" alt="Loading..."/>
										</div>
								  </div>
                                <div class="row">
								<div class="col-sm-12 col-md-9" style="padding-right: 0px;">
								<ul class="nav nav-tabs separator-tabs " role="tablist" id="rows-nav-tab">
									<li class="nav-item">
										<a class="nav-link active" id="active-tab" data-toggle="tab" href="#activetab"
											role="tab" aria-controls="activetab" aria-selected="true" onClick="searchFilter(0);">Active User Access</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="inactive-tab" data-toggle="tab" href="#inactivetab" role="tab"
											aria-controls="inactivetab" aria-selected="false" onClick="searchFilter1(0);">In-Active User Access</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="suspend-tab" data-toggle="tab" href="#suspendtab" role="tab"
											aria-controls="suspendtab" aria-selected="false" onClick="searchFilter2(0);">Suspend User Access</a>
									</li>
								</ul>
                                </div>
                                <div class="col-sm-12 col-md-3" style="border-bottom: 1px solid #dee2e6;">
                                    <div style="text-align:right;">
                                        <a href="<?php echo base_url('admin/user_access')?>" title="Add New" class="btn btn-primary btn-sm no-radius"><i class="mdi mdi-plus"></i> Add New</a>
                                    </div>
                                </div>
                                </div>
								
								<div class="tab-content" style="margin-top:20px;">
                                <div class="tab-pane fade show active" id="activetab" role="tabpanel" aria-labelledby="activetab-tab">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="width:270px;">
                                            <label class="input-group">Show &nbsp;
                                            <select name="rows_per_page" id="rows_per_page" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="500">500</option>
                                            </select> &nbsp; entries &nbsp;&nbsp;
                                            <div class="btn-group" id="zero_config_btn">
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="float: right;width:200px;">
                                            <label class="input-group">Search:
                                            <input type="search" id="search_keyword" name="search_keyword" class="form-control form-control-sm" placeholder="Search">
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                                <div id="zero_config_pagedata">
                                
                                </div>
								</div>
								<div class="tab-pane fade show" id="inactivetab" role="tabpanel" aria-labelledby="inactivetab-tab">
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="width:270px;">
                                            <label class="input-group">Show &nbsp;
                                            <select name="rows_per_page" id="rows_per_page1" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="500">500</option>
                                            </select> &nbsp; entries &nbsp;&nbsp;
                                            <div class="btn-group" id="zero_config1_btn">
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="float: right;width:200px;">
                                            <label class="input-group">Search:
                                            <input type="search" id="search_keyword1" name="search_keyword" class="form-control form-control-sm" placeholder="Search">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="zero_config1_pagedata">
                                
                                </div>
								</div>
								<div class="tab-pane fade show" id="suspendtab" role="tabpanel" aria-labelledby="suspendtab-tab">
                                
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="width:270px;">
                                            <label class="input-group">Show &nbsp;
                                            <select name="rows_per_page" id="rows_per_page2" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="500">500</option>
                                            </select> &nbsp; entries &nbsp;&nbsp;
                                            <div class="btn-group" id="zero_config2_btn">
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group-item" style="float: right;width:200px;">
                                            <label class="input-group">Search:
                                            <input type="search" id="search_keyword2" name="search_keyword" class="form-control form-control-sm" placeholder="Search">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="zero_config2_pagedata">
                                
                                </div>
								</div>
							</div>
                            </div>
                        </div>
                    </div>
                </div> 
               
            <!-- Table end here -->   


            </div>
         </div>
      </div>
   </main>
   <script>
function searchFilter(page_num) {
    page_num = page_num ? page_num : 0;
    var rows_per_page = $("#rows_per_page option:selected").val();
    var search_keyword = $('#search_keyword').val();
    $.ajax({
        type: 'POST',
        url: baseURL+'admin/user_access/ajax/active_rows',
        data: {page:page_num,rows_per_page:rows_per_page,search_keyword:search_keyword},
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#zero_config_pagedata').html(html);
            init_datatable();
            init_icheck();
            $('.loading').hide();
        }
    });
}
function searchFilter1(page_num) {
    page_num = page_num ? page_num : 0;
    var rows_per_page = $("#rows_per_page1 option:selected").val();
    var search_keyword = $('#search_keyword1').val();
    $.ajax({
        type: 'POST',
        url: baseURL+'admin/user_access/ajax/inactive_rows',
        data: {page:page_num,rows_per_page:rows_per_page,search_keyword:search_keyword},
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#zero_config1_pagedata').html(html);
            init_datatable1();
            init_icheck1();
            $('.loading').hide();
        }
    });
}
function searchFilter2(page_num) {
    page_num = page_num ? page_num : 0;
    var rows_per_page = $("#rows_per_page2 option:selected").val();
    var search_keyword = $('#search_keyword2').val();
    $.ajax({
        type: 'POST',
        url: baseURL+'admin/user_access/ajax/suspend_rows',
        data: {page:page_num,rows_per_page:rows_per_page,search_keyword:search_keyword},
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (html) {
            $('#zero_config2_pagedata').html(html);
            init_datatable2();
            init_icheck2();
            $('.loading').hide();
        }
    });
}
</script>
<script src="<?php echo base_url() ?>assets/js/index-tab.min.js"></script>