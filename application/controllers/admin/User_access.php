<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_access extends Admin_Controller {

	function __construct(){
        parent::__construct();
		$this->isLogin();
    }

	public function ajax($tab='active_rows')
	{
		try { 
			$data['rows_per_page'] = $this->input->post('rows_per_page');
			$data['page'] = $this->input->post('page');
			$search_keyword = $this->input->post('search_keyword');
			
			if($tab=='active_rows'){
				$conditions['where'] = ['sa.status'=>'ACTIVE','sa.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user_access/ajax/active_rows';
				$searchFilter = 'searchFilter';
				$data['ajax_view_id'] = '';
			}
			else if($tab=='inactive_rows'){
				$conditions['where'] = ['sa.status'=>'INACTIVE','sa.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user_access/ajax/inactive_rows';
				$searchFilter = 'searchFilter1';
				$data['ajax_view_id'] = '1';
			}
			else if($tab=='suspend_rows'){
				$conditions['where'] = ['sa.is_deleted'=>'YES'];
				$base_url = base_url().'admin/user_access/ajax/suspend_rows';
				$searchFilter = 'searchFilter2';
				$data['ajax_view_id'] = '2';
			}

			$conditions['where_raw'] = '';
			if(!empty($search_keyword)) $conditions['where_raw'] = "( sa.access_name LIKE '%".$search_keyword."%' or sa.access_url LIKE '%".$search_keyword."%' )";
			$conditions['group_by'] = ['sa.access_id'];
			$conditions['order_by'] = ['sa.access_id','desc'];
			$data['total_records'] = $this->Admin_model->getCount('hrm_access sa',$conditions);
			$conditions['limit'] = [$data['rows_per_page'],$data['page']];
			$data['records'] = $this->Admin_model->getRows('hrm_access sa',"sa.*",$conditions);

			//pagination configuration
	        $config['base_url'] =  $base_url;
			$config['per_page'] = $data['rows_per_page'];
			$config['total_rows'] = $data['total_records'];
			$config['uri_segment'] = 3;
			$config['cur_page_giv'] = $data['page'];
			$function = "searchFilter('0')";
			$config['first_link'] = '&laquo;';
			$config['first_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			$config['first_tag_close'] = '</a></li>';

			$rr = ($config['total_rows'] - 1) / $config['per_page'];

			$last_start = floor($rr) * $config['per_page'];
			$function = $searchFilter."('" . $last_start . "')";
			$config['last_link'] = '&raquo;';
			$config['last_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			$config['last_tag_close'] = '</a></li>';
			$function = $searchFilter."('" . ($data['page'] - $config['per_page']) . "')";
			$config['prev_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			$config['prev_tag_close'] = '</a></li>';
			$function = $searchFilter."('" . ($data['page'] + $config['per_page']) . "')";
			$config['next_link'] = '>';
			$config['next_tag_open'] = '<li class="page-item"><a class="page-link" onClick="' . $function . '">';
			$config['next_tag_close'] = '</a></li>';

			$config['full_tag_open'] = '<div class="row"><div class="text-center"><ul class="pagination">';
			$config['full_tag_close'] = '</ul></div></div>';

			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
			$config['cur_tag_close'] = '</a></li>';

			$function = $searchFilter."(((this.innerHTML-1)*" . $config['per_page'] . "))";
			
			$config['num_tag_open'] = '<li class="page-item"><a class="page-link notranslate" onClick="' . $function . '">';
			$config['num_tag_close'] = '</a></li>';
			$this->ajax_pagination->initialize($config);

			$this->load->view('admin/user_access/ajax_rows', $data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function index($access_id='')
	{
		try { 
			$this->hasAccess('user_access','is_view');
			if($access_id!=''){
				$this->form_validation->set_rules('access_name','Access Name','trim|required|alpha_numeric_spaces|min_length[5]|max_length[50]|callback_is_unique['.'hrm_access.access_name,access_id,'.$access_id.']');
			}
			else{
				$this->form_validation->set_rules('access_name','Access Name','trim|required|alpha_numeric_spaces|min_length[5]|max_length[50]|callback_is_unique['.'hrm_access.access_name]');
			}
			$this->form_validation->set_rules('access_url','Access URL','trim|required');
			$this->form_validation->set_rules('status','Access Status','trim|required');
			
			if($this->form_validation->run() == FALSE)
			{
				if($access_id != ''){
					$data['p_record'] =  $this->Admin_model->getRow('hrm_access','*',['where'=>['access_id'=>$access_id]]);
					$data['access_id'] = $access_id;
					$data['pageTitle'] = 'Edit User Access';
				}
				else{
					$data['p_record'] =  [];
					$data['access_id'] = '';
					$data['pageTitle'] = 'Add User Access';
				}
				
				$this->loadViews('user_access/index',$data);
			}
			else{
	                                                  
				$array_access = array(
					'access_name'=>$this->input->post('access_name'),
					'access_url'=>$this->input->post('access_url'),
					'status'=>$this->input->post('status')		
				);

				if($access_id==''){
					$result = $this->Admin_model->add('hrm_access', $array_access);
	            
					if($result){
						$this->addActivity('Added User Access');
						$this->session->set_flashdata('success_msg', 'Access added successfully.');
					}else{
						$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
					}
				}
				else{
					$result = $this->Admin_model->edit('hrm_access', $array_access, ['access_id'=>$access_id]);
					
					if($result){
						$this->addActivity('Updated User Access');
						$this->session->set_flashdata('success_msg', 'Access updated successfully.');
					}else{
						$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
					}
				}
				redirect(base_url('admin/user_access'));

			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
 
	public function view($access_id)
	{
		try { 
			$this->hasAccess('user_access','is_view');
			$conditions['join'] = [['hrm_user s1','sa.created_by = s1.user_id','left'],['hrm_user s2','sa.updated_by = s2.user_id','left']];
			$conditions['where'] = ['sa.access_id' => $access_id];
			$data['p_record'] = $this->Admin_model->getRow('hrm_access sa', 'sa.*,s1.user_name as createdby,s2.user_name as updatedby', $conditions);
			$data['access_id'] = $access_id;
			$data['pageTitle'] = 'View User Access';
			$this->loadViews('user_access/view',$data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function status($status='ACTIVE')
	{
		try { 
			if($this->check_access('user_access')){
				$access_id = $this->input->post('rowId');
				$status = ($status=='ACTIVE') ? 'INACTIVE' : 'ACTIVE';
				$access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','access_id'=>$access_id]]);
				if(empty($access_data)){
					$result = $this->Admin_model->edit('hrm_access',['status'=>$status],['access_id'=>$access_id]);
					if($result)
					{
						$this->addActivity('Changed User Access Status');
						$response['status'] = 'success';
						$response['msg'] = 'Access status changed successfully.';
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
					$response['msg'] = 'Can not change this access status to inactive, change its role base access status to inactive first.';
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
		if($this->check_access('user_access','is_delete')){
			$access_id = $this->input->post('rowId');
			$access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['is_deleted'=>'NO','access_id'=>$access_id]);
			if(empty($access_data)){
				$result = $this->Admin_model->edit('hrm_access',['is_deleted'=>'YES'],['access_id'=>$access_id]);
				if($result)
				{
					$this->addActivity('Deleted User Access');
					$response['status'] = 'success';
					$response['msg'] = 'Access deleted successfully.';
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
				$response['msg'] = 'This access is assigned to some role access, remove it from role access first.';
			}
		}
		else
		{
			$response['status'] = 'error';
			$response['msg'] = 'Access Denied.';
		}
		echo json_encode($response);
	}
	
	public function deleteChecked()
	{
		if($this->check_access('user_access','is_delete')){
			$access_ids = $this->input->post('rowIds');
			$access_ids = json_decode($access_ids);
			if(!empty($access_ids)){
				foreach($access_ids as $access_id){
					$access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['is_deleted'=>'NO','access_id'=>$access_id]);
					
					if(empty($access_data)){
						$result = $this->Admin_model->edit('hrm_access',['is_deleted'=>'YES'],['access_id'=>$access_id]);
					}
					else
					{
						$response['status'] = 'error';
						$response['msg'] = 'This access is assigned to some role access, remove it from role access first.';
					}
				}
			}
			if($result)
			{
				$this->addActivity('Delete Checked User Access');
				$response['status'] = 'success';
				$response['msg'] = 'Access deleted successfully.';
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
	}
	
	public function changeChecked($status="ACTIVE")
	{   
		try { 
			if($this->check_access('user_access')){
				$access_ids = $this->input->post('rowIds');
				$access_ids = json_decode($access_ids);
				$result = 0;
				if(!empty($access_ids)){
					foreach($access_ids as $access_id){
						$access_data = $this->Admin_model->getRow('hrm_user_role_access','*',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO','access_id'=>$access_id]]);
						if(empty($access_data)){
							$result = $this->Admin_model->edit('hrm_access',['status'=>$status],['access_id'=>$access_id]);
						}
						else
						{
							$response['status'] = 'error';
							$response['msg'] = 'This access is assigned to some role access, remove it from role access first.';
						}
					}
				}
				if($result)
				{
					$this->addActivity('Checked User Access Status');
					$response['status'] = 'success';
					$response['msg'] = 'Access status changed successfully.';
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
		if($this->check_access('user_access/restore')){
			$access_id = $this->input->post('rowId');
			$result = $this->Admin_model->edit('hrm_access',['is_deleted'=>'NO'],['access_id'=>$access_id]);
			if($result)
			{
				$this->addActivity('Restored User Access');
				$response['status'] = 'success';
				$response['msg'] = 'Access restored successfully.';
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
	}
	
	public function restoreChecked()
	{
		if($this->check_access('user_access/restore')){
			$access_ids = $this->input->post('rowIds');
			$access_ids = json_decode($access_ids);
			$result = 0;
			if(!empty($access_ids)){
				foreach($access_ids as $access_id){
					$result = $this->Admin_model->edit('hrm_access',['is_deleted'=>'NO'],['access_id'=>$access_id]);
				}
			}
			if($result)
			{
				$this->addActivity('Restore Checked User Access');
				$response['status'] = 'success';
				$response['msg'] = 'Access restored successfully.';
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
	}
}