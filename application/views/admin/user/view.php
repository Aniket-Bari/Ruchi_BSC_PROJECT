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
												<a class="parent-item" href="<?php echo base_url('admin/user')?>">Users</a>
												<i class="fa fa-angle-right"></i>
											</li>
											<li class="active">
												View
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
                        <form name="users" action="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h6 class="card-title"><?php echo $pageTitle ?> Details</h6>
                                </div>
                                <div class="form-group row">
                                    <label for="user_name" class="col-sm-4 text-right control-label col-form-label">User Name : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_name : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_role" class="col-sm-4 text-right control-label col-form-label">User Role : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->role_name : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_address" class="col-sm-4 text-right control-label col-form-label">User Address : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_address : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_phone" class="col-sm-4 text-right control-label col-form-label">User Contact : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_phone : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_username" class="col-sm-4 text-right control-label col-form-label">Username : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_username : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_password" class="col-sm-4 text-right control-label col-form-label">Password : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_password : ''; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_email" class="col-sm-4 text-right control-label col-form-label">User Email : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                    <?php echo (!empty($p_record)) ? $p_record->user_email : ''; ?>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="user_avatar_img" class="col-sm-4 text-right control-label col-form-label">User Avatar</label>
                                    <div class="col-md-4 col-sm-8">
                                    <img class="img-responsive" src="<?php echo (!empty($p_record->user_avatar)) ? base_url('uploads/user_avatar/'). $p_record->user_avatar : base_url('assets/images/avatar.png') ?>" id="user_avatar_img" height="100">
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label">User Status : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                        <?php echo (!empty($p_record)) ? $p_record->status : ''; 
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label">Created By : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                        <a href="<?php echo base_url('admin/user/view/'.$p_record->created_by)?>"  title="View User" class="badge badge-success badge-xs">
                                        <?php echo $p_record->createdby;?>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label">Created At : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                        <?php echo (!empty($p_record)) ? date('Y-m-d H:i:s',$p_record->created_at) : ''; 
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label">Updated By : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                        <?php if($p_record->updatedby != ''){ ?>
                                        <a href="<?php echo base_url('admin/user/view/'.$p_record->updated_by)?>"  title="View User" class="badge badge-success badge-xs">
                                        <?php echo $p_record->updatedby;?>
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 text-right control-label col-form-label">Updated At : </label>
                                    <div class="col-md-4 col-sm-8 pt-6">
                                        <?php echo (!empty($p_record) && $p_record->updated_at > 0) ? date('Y-m-d H:i:s',$p_record->updated_at) : ''; 
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-4 m-t-15"></label>
                                    <div class="col-sm-6">
                                    <a href="<?php echo base_url('admin/user')?>" type="button" class="btn btn-success btn-sm">Back</a>
									<a href="<?php echo base_url('admin/user/edit/'.$user_id)?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                </div>
                           
                        </div>
                     
                        
                    </div>

                </form>
    
                    </div>
                </div>
            </main>
             
