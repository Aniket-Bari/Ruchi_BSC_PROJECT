<div class="table-responsive">
	<table id="zero_config<?php echo $ajax_view_id ?>" class="table table-striped table-bordered table-sm">
		<thead>
			<tr>
				<th width="5%" style="padding-right:0px;min-width:45px;">
					<div class="row" style="margin:0px;">
					  <div class="input-group">
					   <div class="input-group-prepend">
						<input type="checkbox" id="check_all<?php echo $ajax_view_id ?>" class="square-blue">
					   </div>
						<div class="dropdown" style="padding-left:2px">
						<a href="javascript:void(0);" class="badge badge-info badge-xs dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:15px;height:15px;">
						</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="left:0;">
							<?php if($ajax_view_id != 2) { ?>
								<a class="dropdown-item deleteChecked<?php echo $ajax_view_id ?>" href="javascript:void(0);" data-url="admin/user_access/deleteChecked">Delete Checked</a>
							<?php } if($ajax_view_id == 2) { ?>
								<a class="dropdown-item restoreChecked<?php echo $ajax_view_id ?>" href="javascript:void(0);" data-url="admin/user_access/restoreChecked">Restore Checked</a>
							<?php } if($ajax_view_id != '') { ?>	
								<a class="dropdown-item changeChecked<?php echo $ajax_view_id ?>" href="javascript:void(0);" data-url="admin/user_access/changeChecked/ACTIVE">Mark as Active</a>
							<?php } if($ajax_view_id != 1) { ?>	
								<a class="dropdown-item changeChecked<?php echo $ajax_view_id ?>" href="javascript:void(0);" data-url="admin/user_access/changeChecked/INACTIVE">Mark as In-active</a>
							<?php } ?>	
							</div>
						</div>
					  </div>
					</div>
				</th>
				<th>Sr.No.</th>
				<th>Access Name</th>
				<th>Access URL</th>
				<th>Status</th>
				<th width="8%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php  $i=$page+1;
		foreach ($records as $row)  
		{  
		 ?>
			<tr>
				<td>
				<input name="checkbox<?php echo $ajax_view_id ?>" type="checkbox" id="check<?php echo $ajax_view_id.'_'.$row->access_id;?>" value="<?php echo $row->access_id;?>" class="minimal-blue">
				<?php if(date('Y-m-d') == date('Y-m-d',$row->created_at)){ ?><span class="badge badge-danger badge-xs" style="font-weight:bold;font-size: 7px;">NEW</span> <?php } ?>
				</td>
				<td><?php echo $i++;?></td>
				<td><?php echo $row->access_name;?></td>
				<td><?php echo $row->access_url;?></td>
				<td>
				   <a href="javascript:void(0);" title="Change Status" data-rowid="<?php echo $row->access_id; ?>" data-url="admin/user_access/status/<?php echo $row->status;?>" class="changeRow<?php echo $ajax_view_id ?>">
				   <span class="badge badge-<?php echo ($row->status == 'ACTIVE') ? 'success' : 'warning' ?> badge-xs" style="font-weight:bold;"><?php echo $row->status;?></span>
				   </a>
				</td> 
				<td>
					<a href="<?php echo base_url('admin/user_access/view/'.$row->access_id)?>"  title="View User Access">
					<i class="mdi mdi-18px mdi-eye text-primary"></i>
					</a>
					<a href="<?php echo base_url('admin/user_access/'.$row->access_id)?>" data-placement="top"  title="Edit User Access" class="">
					<i class="mdi mdi-18px mdi-lead-pencil text-default"></i>
					</a>
					<?php if($ajax_view_id != 2) { ?>
					<a href="javascript:void(0);" data-placement="top" title="Delete User Access" class="deleteRow<?php echo $ajax_view_id ?>" data-rowid="<?php echo $row->access_id; ?>" data-url="admin/user_access/delete"> <i class="mdi mdi-18px mdi-delete text-danger"></i>
					</a>
					<?php } if($ajax_view_id == 2) { ?>
					<a href="javascript:void(0);" data-placement="top" title="Restore User Access" class="restoreRow<?php echo $ajax_view_id ?>" data-rowid="<?php echo $row->access_id; ?>" data-url="admin/user_access/restore"><i class="mdi mdi-18px mdi-restore text-danger"></i>
					</a>
					<?php } ?>
				</td>         
			</tr>
		<?php 
		} 
		?>                                            
			
		</tbody>
	   
	</table>
</div>
<div class="row">
	<div class="col-sm-12 col-md-5">
	    <?php 
		$rows_from = (($page+1) > $total_records) ? $total_records : ($page+1);
		$rows_to = ($page+$rows_per_page > $total_records) ? $total_records : ($page+$rows_per_page);
		if($total_records > 1){
		?>
		<div class="input-group-item">Showing <?php echo $rows_from.' to '.$rows_to.' of '.$total_records ?> entries
		</div>
		<?php } ?>
	</div>
	<div class="col-sm-12 col-md-7">
		<div class="input-group-item" style="float:right;padding-right: 15px;">
			<?php echo $this->ajax_pagination->create_links(); ?>
		</div>
	</div>
</div>