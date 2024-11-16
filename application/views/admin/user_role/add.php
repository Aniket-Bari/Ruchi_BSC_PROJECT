<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard')?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/users')?>">User Roles</a>
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
                <form method="post"  class="form-horizontal" action="<?php echo base_url('admin/user_role') ?>">
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
                    <div class="form-group"><label class="col-sm-2 control-label"><b class="text-danger">* </b>Role Name :</label>

                        <div class="col-sm-6">
                            <input type="text" name="role_name" id="role_name" class="form-control <?php echo (form_error('role_name')) ? 'is-invalid' : '' ?>" placeholder="Enter role name" value="<?php echo (!set_value('role_name')  && !empty($p_record)) ? set_value('role_name',$p_record->role_name) : set_value('role_name'); ?>">
                            <?php echo form_error('role_name', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                    </div>
                    
                    <div class="form-group"><label class="col-sm-2 control-label"><b class="text-danger">* </b>Widgets :</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="role_widget" name="role_widget[]"   style="height: 36px;width: 100%;" multiple>
                            <?php 
                            $role_widget = (!empty($p_record)) ? explode(",",$p_record->role_widget) : set_value('role_widget'); 
                                if(!empty($widgets)){
                                    foreach($widgets as $key => $value) {   
                                        ?>
                                    <option value="<?php echo $key ?>" <?php echo (!empty($role_widget) && in_array($key,$role_widget)) ? 'selected' : '' ?>><?php echo $value ?></option>
                                <?php } } ?>
                            </select>
                            <?php echo form_error('role_widget[]', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label"><b class="text-danger">* </b>Role Status : </label>

                        <div class="col-sm-6">
                        <select class="select2 form-control custom-select <?php echo (form_error('status')) ? 'is-invalid' : '' ?>" id="status" name="status" style="width: 100%; height:36px;">
                            <?php 
                                $selected = (!set_value('status') && !empty($p_record)) ? set_value('status',$p_record->status) : set_value('status'); 
                            ?>
                            <option value="ACTIVE" <?php echo ('ACTIVE' == $selected) ? 'selected' : '' ?>>ACTIVE</option>
                            <option value="INACTIVE" <?php echo ('INACTIVE' == $selected) ? 'selected' : '' ?>>INACTIVE</option>
                        </select>
                        <?php echo form_error('status', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>
                    </div>
                    
                    
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a class="nav-link active" id="active-tab" data-toggle="tab" href="#activetab"
                    role="tab" aria-controls="activetab" aria-selected="true" onClick="searchFilter(0);">Active User Roles</a></li>
                    <li class=""><a class="nav-link" id="inactive-tab" data-toggle="tab" href="#inactivetab" role="tab"
                    aria-controls="inactivetab" aria-selected="false" onClick="searchFilter1(0);">In-Active User Roles</a></li>
                    <li class=""><a class="nav-link" id="suspend-tab" data-toggle="tab" href="#suspendtab" role="tab"
                    aria-controls="suspendtab" aria-selected="false" onClick="searchFilter2(0);">Suspend User Roles</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-3" class="tab-pane active">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <br><br>

<script>
$(document).ready(function() {   
/*
      Define the adapter so that it's reusable
*/
$.fn.select2.amd.define('select2/selectAllAdapter', [
  'select2/utils',
  'select2/dropdown',
  'select2/dropdown/attachBody'
], function(Utils, Dropdown, AttachBody) {

  function SelectAll() {}
  SelectAll.prototype.render = function(decorated) {
    var self = this,
      $rendered = decorated.call(this),
      $selectAll = $(
        '<button class="btn btn-sm btn-link" type="button" style="margin-left:6px;"><i class="fa fa-check-square-o"></i> Select All</button>'
      ),
      $unselectAll = $(
        '<button class="btn btn-sm btn-link" type="button" style="margin-left:6px;"><i class="fa fa-square-o"></i> Unselect All</button>'
      ),
      $btnContainer = $('<div style="margin-top:3px;">').append($selectAll).append($unselectAll);
    if (!this.$element.prop("multiple")) {
      // this isn't a multi-select -> don't add the buttons!
      return $rendered;
    }
    $rendered.find('.select2-dropdown').prepend($btnContainer);
    $selectAll.on('click', function(e) {
      var $results = $rendered.find('.select2-results__option[aria-selected=false]');
      $results.each(function() {
        self.trigger('select', {
          data: $(this).data('data')
        });
      });
      self.trigger('close');
    });
    $unselectAll.on('click', function(e) {
      var $results = $rendered.find('.select2-results__option[aria-selected=true]');
      $results.each(function() {
        self.trigger('unselect', {
          data: $(this).data('data')
        });
      });
      self.trigger('close');
    });
    return $rendered;
  };

  return Utils.Decorate(
    Utils.Decorate(
      Dropdown,
      AttachBody
    ),
    SelectAll
  );

});

window.setTimeout(function() {
	$('#role_widget').select2({
	  dropdownAdapter: $.fn.select2.amd.require('select2/selectAllAdapter')
	});
}, 500);
//form validation
var addUserForm = $("#addUserRole");
  
  var validator = addUserForm.validate({
      errorElement : 'div',
      errorClass : 'invalid-feedback is-invalid',
      rules:{
          role_name :{ required : true, minlength:4, maxlength:50,},
          role_widget :{ required : true, },
          status : { required : true, },
      },
      messages:{
          role_name :{ required : "This field is required" },
          role_widget : { required : "This field is required" },         
          status :{ required : "This field is required" },
                
      }
  });
});



function searchFilter(page_num) {
    page_num = page_num ? page_num : 0;
    var rows_per_page = $("#rows_per_page option:selected").val();
    var search_keyword = $('#search_keyword').val();
    $.ajax({
        type: 'POST',
        url: baseURL+'admin/user_role/ajax/active_rows',
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
        url: baseURL+'admin/user_role/ajax/inactive_rows',
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
        url: baseURL+'admin/user_role/ajax/suspend_rows',
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
