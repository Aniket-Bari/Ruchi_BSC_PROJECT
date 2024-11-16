<!--main contents start-->
				<main class="content_wrapper">
					<!--page title start-->
					<div class="page-heading">
						<div class="container-fluid">
							<div class="row d-flex align-items-center">
								<div class="col-md-6">
									<div class="page-breadcrumb">
										<h1>Users</h1>
									</div><br>
								</div>0
								<div class="col-md-6 justify-content-md-end d-flex">
									<div class="breadcrumb_nav">
										<ol class="breadcrumb">
											<li>
												<i class="fa fa-home"></i>
												<a class="parent-item" href="<?php echo base_url('admin/dashboard')?>">Home</a>
												<i class="fa fa-angle-right"></i>
											</li>
											<li>
												<a class="parent-item" href="<?php echo base_url('admin/user')?>">Users</a>
												<i class="fa fa-angle-right"></i>
											</li>
											<li class="active">
												Edit
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
                        <form name="users" id="addUser" action="" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h6 class="card-title"><?php echo $pageTitle ?></h6>&nbsp;&nbsp;&nbsp;&nbsp;<em class="text-danger">( * indicates mandatory fields )</em>
                                </div>
                                <div class="form-group row">
                                    <label for="user_name" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_name')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Name : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" id="user_name" name="user_name" class="form-control <?php echo (form_error('user_name')) ? 'is-invalid' : '' ?>" placeholder="Enter User Name" value="<?php echo (!set_value('user_name')  && !empty($p_record)) ? set_value('user_name',$p_record->user_name) : set_value('user_name'); ?>">
                                    <?php echo form_error('user_name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role_id" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('role_id')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Role : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <select class="select2 form-control custom-select <?php echo (form_error('role_id')) ? 'is-invalid' : '' ?>" id="role_id" name="role_id" style="width: 100%; height:36px;">
                                        <option value="">Select Role</option>
										  <?php  
											$selected = (!set_value('role_id') && !empty($p_record)) ? set_value('role_id',$p_record->role_id) : set_value('role_id');
											foreach ($role_data as $row)  
											  {  
										  ?>
										  <option value="<?php echo $row->role_id;?>" <?php echo ($row->role_id == $selected) ? 'selected' : '' ?>><?php echo $row->role_name;?></option>
										  <?php } ?>
									   </select>
                                    </select>
                                    <?php echo form_error('role_id', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_address" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_address')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Address : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <textarea rows="4" class="form-control <?php echo (form_error('user_address')) ? 'is-invalid' : '' ?>" id="user_address" name="user_address" placeholder="Enter User Address"><?php echo (!set_value('user_address')  && !empty($p_record)) ? set_value('user_address',$p_record->user_address) : set_value('user_address'); ?></textarea>
                                    <?php echo form_error('user_address', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_phone" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_phone')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Contact : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" id="user_phone" name="user_phone" class="form-control <?php echo (form_error('user_phone')) ? 'is-invalid' : '' ?>" placeholder="Enter Contact No" value="<?php echo (!set_value('user_phone')  && !empty($p_record)) ? set_value('user_phone',$p_record->user_phone) : set_value('user_phone'); ?>" pattern="[1-9]{1}[0-9]{9}" maxlength="10">
                                    <?php echo form_error('user_phone', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_email" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_email')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Email : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="email" id="user_email" name="user_email" class="form-control <?php echo (form_error('user_email')) ? 'is-invalid' : '' ?>" placeholder="Enter User Email" value="<?php echo (!set_value('user_email')  && !empty($p_record)) ? set_value('user_email',$p_record->user_email) : set_value('user_email'); ?>">
                                    <?php echo form_error('user_email', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_username" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_username')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>Login Username : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="text" id="user_username" name="user_username" class="form-control <?php echo (form_error('user_username')) ? 'is-invalid' : '' ?>" placeholder="Enter Username" value="<?php echo (!set_value('user_username')  && !empty($p_record)) ? set_value('user_username',$p_record->user_username) : set_value('user_username'); ?>">
                                    <?php echo form_error('user_username', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
								<div class="form-group row">
									<div class="col-sm-4">
									</div>
									<div class="col-md-4 col-sm-8">
										<button type="button" id="change_pwd" class="btn btn-sm btn-link">Change Password</button>
									</div>
								</div>
								<span id="change_pwd_span" style="display:none;">
								<div class="form-group row">
                                    <label for="user_password" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_password')) ? 'text-danger' : '' ?>">User Password : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="password" id="user_password" name="user_password" class="form-control <?php echo (form_error('user_password')) ? 'is-invalid' : '' ?>" placeholder="Enter User Password" value="<?php echo (!set_value('user_password')  && !empty($p_record)) ? set_value('user_password',$p_record->user_password) : set_value('user_password'); ?>"><i>Note : Leave it blank if don't want to change.</i>
                                    <?php echo form_error('user_password', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="confirm_password" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('confirm_password')) ? 'text-danger' : '' ?>">Confirm Password : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control <?php echo (form_error('confirm_password')) ? 'is-invalid' : '' ?>" placeholder="Enter Confirm Password" value="<?php echo (!set_value('confirm_password')  && !empty($p_record)) ? set_value('user_password',$p_record->user_password) : set_value('confirm_password'); ?>"><i>Note : Leave it blank if don't want to change.</i>
                                    <?php echo form_error('confirm_password', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
								</span>
                                <?php /* <div class="form-group row">
                                    <label for="session_timeout" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('session_timeout')) ? 'text-danger' : '' ?>">Session Timeout(In minutes) : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="number" name="session_timeout" class="form-control <?php echo (form_error('session_timeout')) ? 'is-invalid' : '' ?>" placeholder="Enter Username" value="<?php echo (!set_value('session_timeout')  && !empty($p_record)) ? set_value('session_timeout',$p_record->session_timeout) : set_value('session_timeout'); ?>" min="0"><i>Default 0 as unlimited</i>
                                    <?php echo form_error('session_timeout', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div> */ ?>
								<div class="form-group row">
                                    <label for="user_avatar" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('user_avatar')) ? 'text-danger' : '' ?>">User Avatar : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <input type="file" id="user_avatar" name="user_avatar" class="form-control <?php echo (form_error('user_avatar')) ? 'is-invalid' : '' ?>" accept="image/*">
                                    <?php echo form_error('user_avatar', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="user_avatar_img" class="col-sm-4 text-right control-label col-form-label"></label>
                                    <div class="col-md-4 col-sm-8">
                                    <img class="img-responsive" src="<?php echo (file_exists('./uploads/user_avatar/'.$p_record->user_avatar) && !empty($p_record->user_avatar) ) ? base_url('uploads/user_avatar/'). $p_record->user_avatar : base_url('assets/images/no_image.png')  ?>" id="user_avatar_img" height="100">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label <?php echo (form_error('status')) ? 'text-danger' : '' ?>"><b class="text-danger">* </b>User Status : </label>
                                    <div class="col-md-4 col-sm-8">
                                    <select id="status" class="select2 form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>" name="status" style="width: 100%; height:36px;">
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
                                    <a href="<?php echo base_url('admin/user')?>" type="button" class="btn btn-danger btn-sm">Cancel</a>
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

                </form>
    
                    </div>
                </div>
                </main>

            <script>
			$(document).ready(function() {
				document.getElementById("user_avatar").onchange = function () {
					var reader = new FileReader();
					reader.onload = function (e) {
						// get loaded data and render thumbnail.
						document.getElementById("user_avatar_img").src = e.target.result;
					};
					// read the image file as a data URL.
					reader.readAsDataURL(this.files[0]);
				};

                var user_id = '<?php echo (!empty($p_record)) ? $p_record->user_id : ""; ?>';
                var addUserForm = $("#addUser");
	
                var validator = addUserForm.validate({
                    errorElement : 'div',
                    errorClass : 'invalid-feedback is-invalid',
                    rules:{
                        user_name :{ required : true, minlength:4, maxlength:50,},
                        role_id :{ required : true, },
                        user_address :{ required : true, minlength:10, maxlength:150, },
                        user_username : { required : true, nowhitespace:true, minlength:6, maxlength:50,
                                              remote : { url : baseURL + "admin/ajax/checkUsernameExists/" + user_id, type :"post" },
                                            },
                        user_email : { required : true, email : true, nowhitespace:true, minlength:6, maxlength:32,
                                           remote : { url : baseURL + "admin/ajax/checkUserEmailExists/" + user_id, type :"post" },
                                         },
                        //user_password : { required : true, nowhitespace:true, minlength:6, maxlength:32, valid_password:true, },
                        //confirm_password : {required : true, nowhitespace:true, equalTo: "#user_password"},
                        user_phone : { required : true, nowhitespace:true, digits : true,
                                           remote : { url : baseURL + "admin/ajax/checkUserPhoneExists/" + user_id, type :"post" },
                                         },
                        status : { required : true, },
                    },
                    messages:{
                        user_name :{ required : "This field is required" },
                        user_address :{ required : "This field is required" },
                        user_username :{ required : "This field is required", remote : "Username already taken" },
                        status :{ required : "This field is required" },
                        user_email : { required : "This field is required", email : "Please enter valid email address", remote : "Email already taken" },
                        //user_password : { required : "This field is required" },
                        //confirm_password : {required : "This field is required", equalTo: "Please enter same password" },
                        user_phone : { required : "This field is required", digits : "Please enter numbers only", remote : "Phone already taken"  },
                        role_id : { required : "This field is required" },			
                    }
                });
			});
			$("#change_pwd").click(function(){
				$("#change_pwd_span").toggle();
			});
            </script>