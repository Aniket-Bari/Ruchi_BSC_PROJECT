
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin/dashboard')?>">Home</a>
            </li>
            <li class="active">
                <a href="<?php echo base_url('admin/users')?>">User Roles</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $pageTitle ?></h5><br>
                       
                        <div class="row">
                            <div class="col-lg-2" style="float:right;">
                                    <a href="<?php echo base_url('admin/user_role/add')?>" title="Add New" class="btn btn-primary btn-sm no-radius"><i class="mdi mdi-plus"></i> Add New</a>
                            </div>
                            <div class="col-lg-10">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a class="nav-link active" id="active-tab" data-toggle="tab" href="#activetab"
                                        role="tab" aria-controls="activetab" aria-selected="true" onClick="searchFilter(0);">Active User Roles</a></li>
                                        <li class=""><a class="nav-link" id="inactive-tab" data-toggle="tab" href="#inactivetab" role="tab"
                                        aria-controls="inactivetab" aria-selected="false" onClick="searchFilter1(0);">In-Active User Roles</a></li>
                                        <li class=""><a class="nav-link" id="suspend-tab" data-toggle="tab" href="#suspendtab" role="tab"
                                        aria-controls="suspendtab" aria-selected="false" onClick="searchFilter2(0);">Suspend User Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="ibox-content">

                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Role Name</th>
                        <th>Role Widgets</th>
                        <th>Status</th>
                        <th width="10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php  $i=$page+1;
                        foreach ($records as $row)  
                        {  
                        ?>
                            <tr>
                                <!-- <td>
                                <input name="checkbox<?php echo $ajax_view_id ?>" type="checkbox" id="check<?php echo $ajax_view_id.'_'.$row->role_id;?>" value="<?php echo $row->role_id;?>" class="minimal-blue">
                               
                                </td> -->
                                <td><?php echo $i++;?> <?php if(date('Y-m-d') == date('Y-m-d',$row->created_at)){ ?><span class="badge badge-danger badge-xs" style="font-weight:bold;font-size: 7px;">NEW</span> <?php } ?></td>
                                <td><?php echo $row->role_name;?></td>
                                <td>
                                <?php 
                                    $role_widget = explode(",",$row->role_widget);
                                    $widget_names = array();
                                    if(!empty($widgets)){
                                        foreach($widgets as $widget_id=>$widget_name){
                                            if(in_array($widget_id,$role_widget))
                                                $widget_names[] = $widget_name;
                                        } 
                                    }
                                    echo implode(", ",$widget_names);
                                ?>
                                </td>
                                <td>
                                <a href="javascript:void(0);" title="Change Status" data-rowid="<?php echo $row->role_id; ?>" data-url="admin/user_role/status/<?php echo $row->status;?>"  data-restrict-id="1" class="changeRow<?php echo $ajax_view_id ?>">
                                <span class="badge badge-<?php echo ($row->status == 'ACTIVE') ? 'success' : 'warning' ?> badge-xs" style="font-weight:bold;"><?php echo $row->status;?></span>
                                </a>
                                </td> 
                                <td>
                                    <a href="<?php echo base_url('admin/user_role/view/'.$row->role_id)?>"  title="View User Role">
                                    <i class="fa fa-eye text-primary"></i>
                                    </a>
                                    <a href="<?php echo base_url('admin/role_based_access/'.$row->role_id)?>" data-placement="top"  title="Add Role Based Access" class="">
                                    <i class="fa fa-file text-primary"></i>
                                    </a>
                                    <a href="<?php echo base_url('admin/user_role/add/'.$row->role_id)?>" data-placement="top"  title="Edit User Role" class="">
                                    <i class="fa fa-pencil text-default"></i>
                                    </a>
                                    <?php if($ajax_view_id != 2) { ?>
                                    <a href="javascript:void(0);" data-placement="top" title="Delete User Role" class="deleteRow<?php echo $ajax_view_id ?>" data-rowid="<?php echo $row->role_id; ?>" data-url="admin/user_role/delete" data-restrict-id="1"> <i class="fa fa-trash text-danger"></i>
                                    </a>
                                    <?php } if($ajax_view_id == 2) { ?>
                                    <a href="javascript:void(0);" data-placement="top" title="Restore User Role" class="restoreRow<?php echo $ajax_view_id ?>" data-rowid="<?php echo $row->role_id; ?>" data-url="admin/user_role/restore"><i class="fa fa-trash-restore text-danger"></i>
                                    </a>
                                    <?php } ?>
                                </td>         
                            </tr>
                        <?php 
                        } 
                        ?>                                            
                            
                        </tbody>
                    <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        
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

