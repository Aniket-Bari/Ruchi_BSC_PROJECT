<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_role extends Admin_Controller {

	protected $widgets;
	function __construct(){
        parent::__construct();
		$this->isLogin();
		$this->widgets = ['1'=> 'Total Users','2'=> 'Total User Roles','3'=> 'Total User Access','4'=> 'Logged In Users','5'=>'Top 3 ranks of last month'];
    }

	public function index($tab='active_rows')
	{
		try { 
			$data['rows_per_page'] = $this->input->post('rows_per_page');
			$data['page'] = $this->input->post('page');
			$search_keyword = $this->input->post('search_keyword');
			
			if($tab=='active_rows'){
				$conditions['where'] = ['sr.status'=>'ACTIVE','sr.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user_role/ajax/active_rows';
				$searchFilter = 'searchFilter';
				$data['ajax_view_id'] = '';
			}
			else if($tab=='inactive_rows'){
				$conditions['where'] = ['sr.status'=>'INACTIVE','sr.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user_role/ajax/inactive_rows';
				$searchFilter = 'searchFilter1';
				$data['ajax_view_id'] = '1';
			}
			else if($tab=='suspend_rows'){
				$conditions['where'] = ['sr.is_deleted'=>'YES'];
				$base_url = base_url().'admin/user_role/ajax/suspend_rows';
				$searchFilter = 'searchFilter2';
				$data['ajax_view_id'] = '2';
			}

			$conditions['where_raw'] = '';
			if(!empty($search_keyword)) $conditions['where_raw'] = "( sr.role_name LIKE '%".$search_keyword."%' )";
			$conditions['group_by'] = ['sr.role_id'];
			$conditions['order_by'] = ['sr.role_id','desc'];
			$data['total_records'] = $this->Admin_model->getCount('hrm_role sr',$conditions);
			$conditions['limit'] = [$data['rows_per_page'],$data['page']];
			$data['records'] = $this->Admin_model->getRows('hrm_role sr',"sr.*",$conditions);
			$data['widgets'] =  $this->widgets;

			// //pagination configuration
	        // $config['base_url'] =  $base_url;
			// $config['per_page'] = $data['rows_per_page'];
			// $config['total_rows'] = $data['total_records'];
			// $config['uri_segment'] = 3;
			// $config['cur_page_giv'] = $data['page'];
			// $function = "searchFilter('0')";
			// $config['first_link'] = '&laquo;';
			// $config['first_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			// $config['first_tag_close'] = '</a></li>';

			// $rr = ($config['total_rows'] - 1) / $config['per_page'];

			// $last_start = floor($rr) * $config['per_page'];
			// $function = $searchFilter."('" . $last_start . "')";
			// $config['last_link'] = '&raquo;';
			// $config['last_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			// $config['last_tag_close'] = '</a></li>';
			// $function = $searchFilter."('" . ($data['page'] - $config['per_page']) . "')";
			// $config['prev_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			// $config['prev_tag_close'] = '</a></li>';
			// $function = $searchFilter."('" . ($data['page'] + $config['per_page']) . "')";
			// $config['next_link'] = '>';
			// $config['next_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			// $config['next_tag_close'] = '</a></li>';

			// $config['full_tag_open'] = '<div class="row"><div class="text-center"><ul class="pagination">';
			// $config['full_tag_close'] = '</ul></div></div>';

			// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
			// $config['cur_tag_close'] = '</a></li>';

			// $function = $searchFilter."(((this.innerHTML-1)*" . $config['per_page'] . "))";
			
			// $config['num_tag_open'] = '<li class="page-item"><a class="page-link notranslate" onClick="' . $function . '">';
			// $config['num_tag_close'] = '</a></li>';
			// $this->ajax_pagination->initialize($config);
			$data['pageTitle'] = 'User Role';
			$this->loadViews('user_role/index', $data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function view($role_id)
	{
		try { 
			$this->hasAccess('user_role/view');
			$conditions['join'] = [['hrm_user s1','rl.created_by = s1.user_id','left'],['hrm_user s2','rl.updated_by = s2.user_id','left']];
			$conditions['where'] = ['rl.role_id' => $role_id];
			$data['p_record'] = $this->Admin_model->getRow('hrm_role rl', 'rl.*,s1.user_name as createdby,s2.user_name as updatedby', $conditions);
			$data['role_id'] = $role_id;
			$data['pageTitle'] = 'View User Role';
			$this->loadViews('user_role/view',$data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function add($role_id='')
	{
		try { 
			$this->hasAccess('user_role','is_view');
			if($role_id!=''){
				$this->form_validation->set_rules('role_name','Role Name','trim|required|callback_valid_name|min_length[5]|max_length[32]|callback_is_unique['.'hrm_role.role_name,role_id,'.$role_id.']');
			}
			else{
				$this->form_validation->set_rules('role_name','Role Name','trim|required|callback_valid_name|min_length[5]|max_length[32]|callback_is_unique['.'hrm_role.role_name]');
			}
			$this->form_validation->set_rules('role_widget[]','Role Widget','trim|required');
			$this->form_validation->set_rules('status','Role Status','trim|required');
			
			if($this->form_validation->run() == FALSE)
			{
				$data['widgets'] = $this->widgets;
				if($role_id != ''){
					$data['p_record'] =  $this->Admin_model->getRow('hrm_role','*',['where'=>['role_id'=>$role_id]]);
					$data['role_id'] = $role_id;
					$data['pageTitle'] = 'Edit User Role';
				}
				else{
					$data['p_record'] =  [];
					$data['role_id'] = '';
					$data['pageTitle'] = 'User Role';
				}
				
				$this->loadViews('user_role/add',$data);
			}
			else{
	                                                  
				$array_roles = array(
					'role_name'=>$this->input->post('role_name'),
					'role_widget'=> implode(",",$this->input->post('role_widget')),
					'status'=>$this->input->post('status')		
				);

				if($role_id==''){
					$result = $this->Admin_model->add('hrm_role', $array_roles);
	            
					if($result){
						$this->addActivity('Added User Role');
						$this->session->set_flashdata('success_msg', 'Role added successfully.');
					}else{
						$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
					}
				}
				else{
					$result = $this->Admin_model->edit('hrm_role', $array_roles, ['role_id'=>$role_id]);
					
					if($result){
						$this->addActivity('Updated User Role');
						$this->session->set_flashdata('success_msg', 'Role updated successfully.');
					}else{
						$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
					}
				}
				redirect(base_url('admin/user_role'));

			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function status($status='ACTIVE')
	{
		try { 
			if($this->check_access('user_role')){
				$role_id = $this->input->post('rowId');
				$status = ($status=='ACTIVE') ? 'INACTIVE' : 'ACTIVE';
				$user_data = $this->Admin_model->getRow('hrm_user','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','role_id'=>$role_id]]);
				$user_role_access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','role_id'=>$role_id]]);
				if(!empty($user_data) && $status=='INACTIVE'){
					$response['status'] = 'error';
					$response['msg'] = 'Can not change this role status to inactive, change its users status to inactive first.';
				}else if(!empty($user_role_access_data) && $status=='INACTIVE'){
					$response['status'] = 'error';
					$response['msg'] = 'Cant change this role status to inactive, change its user role access status to inactive first.';
				}else{
					$result = $this->Admin_model->edit('hrm_role',['status'=>$status],['role_id'=>$role_id]);
					if($result)
					{	
						$this->addActivity('Changed User Role Status');
						$response['status'] = 'success';
						$response['msg'] = 'Role status changed successfully.';
					}
					else
					{
						$response['status'] = 'error';
						$response['msg'] = 'Some problems occured, please try again.';
					}
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function delete()
	{
		try { 
			if($this->check_access('user_role/delete')){
				$role_id = $this->input->post('rowId');
				$user_data = $this->Admin_model->getRow('hrm_user','*',['where'=>['is_deleted'=>'NO','role_id'=>$role_id]]);
				$user_role_access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['is_deleted'=>'NO','role_id'=>$role_id]]);
				if(empty($user_data) && empty($user_role_access_data)){
					$result = $this->Admin_model->edit('hrm_role',['is_deleted'=>'YES'],['role_id'=>$role_id]);
					if($result)
					{
						$this->addActivity('Deleted User Role');
						$response['status'] = 'success';
						$response['msg'] = 'Role deleted successfully.';
					}
					else
					{
						$response['status'] = 'error';
						$response['msg'] = 'Some problems occured, please try again.';
					}
				}else if(!empty($user_data)){
					$response['status'] = 'error';
					$response['msg'] = 'Can not delete this role, delete its users first.';
				} else if(!empty($user_role_access_data)){
					$response['status'] = 'error';
					$response['msg'] = 'Can not delete this role, delete its user role access first.';
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function deleteChecked()
	{
		try { 
			if($this->check_access('user_role/delete')){
				$role_ids = $this->input->post('rowIds');
				$role_ids = json_decode($role_ids);
				$err = 0 ;
				$result = 0 ;
				if(!empty($role_ids)){
					foreach($role_ids as $role_id){
						$user_data = $this->Admin_model->getRow('hrm_user','*',['where'=>['is_deleted'=>'NO','role_id'=>$role_id]]);
						$user_role_access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['is_deleted'=>'NO','role_id'=>$role_id]]);
						if(empty($user_data) && empty($user_role_access_data)){
						$result = $this->Admin_model->edit('hrm_role',['is_deleted'=>'YES'],['role_id'=>$role_id]);
						}else if(!empty($user_data)) {
							$err = 1 ;
						}
						else {
							$err = 2;
						}
					}
				}

				if($result || $err)
				{
					$this->addActivity('Delete Checked User Role');
					if($err == 1){
						$response['status'] = 'error';
						$response['msg'] = 'Can not delete this role, delete its users first.';
					}
					else if($err == 2){
						$response['status'] = 'error';
						$response['msg'] = 'Can not delete this role, delete its user role access first.';
					}
					else{
						$response['status'] = 'success';
						$response['msg'] = 'Roles deleted successfully.';
					}
				}
				else
				{
					$response['status'] = 'error';
					$response['msg'] = 'Some problems occured, please try again.';
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function changeChecked($status="ACTIVE")
	{   
		try { 
			if($this->check_access('user_role')){
				$role_ids = $this->input->post('rowIds');
				$role_ids = json_decode($role_ids);
				$err = 0;
				$result = 0;
				if(!empty($role_ids)){
					foreach($role_ids as $role_id){
						$user_data = $this->Admin_model->getRow('hrm_user','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','role_id'=>$role_id]]);
						$user_role_access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','role_id'=>$role_id]]);
						if(!empty($user_data) && $status=='INACTIVE'){
							$err = 1;
						}
						else if(!empty($user_role_access_data) && $status=='INACTIVE'){
							$err = 2;
						}
						else{
							$result = $this->Admin_model->edit('hrm_role',['status'=>$status],['role_id'=>$role_id]);
						}
					}
				}
				if($result || $err)
				{
					$this->addActivity('Change Checked User Role Status');
					if($err == 1){
						$response['status'] = 'error';
						$response['msg'] = 'Can not change this role status to inactive, change its users status to inactive first.';
					}
					else if($err == 2){
						$response['status'] = 'error';
						$response['msg'] = 'Can not change this role status to inactive, change its user role access status to inactive first.';
					}
					else{
						$response['status'] = 'success';
						$response['msg'] = 'Roles status changed successfully.';
					}
				}
				else
				{
					$response['status'] = 'error';
					$response['msg'] = 'Some problems occured, please try again.';
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function restore()
	{	
		try { 
			if($this->check_access('user_role/restore')){
				$role_id = $this->input->post('rowId');
				$result = $this->Admin_model->edit('hrm_role',['is_deleted'=>'NO'],['role_id'=>$role_id]);
				if($result)
				{
					$this->addActivity('Restored User Role');
					$response['status'] = 'success';
					$response['msg'] = 'Role restored successfully.';
				}
				else
				{
					$response['status'] = 'error';
					$response['msg'] = 'Some problems occured, please try again.';
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function restoreChecked()
	{
		try { 
			if($this->check_access('user_role/restore')){
				$role_ids = $this->input->post('rowIds');
				$role_ids = json_decode($role_ids);
				$result = 0;
				if(!empty($role_ids)){
					foreach($role_ids as $role_id){
						$result = $this->Admin_model->edit('hrm_role',['is_deleted'=>'NO'],['role_id'=>$role_id]);
					}
				}
				if($result)
				{
					$this->addActivity('Restore Checked User Role');
					$response['status'] = 'success';
					$response['msg'] = 'Roles restored successfully.';
				}
				else
				{
					$response['status'] = 'error';
					$response['msg'] = 'Some problems occured, please try again.';
				}
			}
			else
			{
				$response['status'] = 'error';
				$response['msg'] = 'Access Denied.';
			}
			echo json_encode($response);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
}