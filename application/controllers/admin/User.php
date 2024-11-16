<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

	function __construct(){
        parent::__construct();
		$this->isLogin();
    }
	
	public function index()
	{
		try { 
			$this->hasAccess('user','is_view');
			// echo "<pre>"; print_r($this->hasAccess('user','is_view'));exit();
			$data['pageTitle'] = 'Users';
			$this->loadViews('user/index',$data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function ajax($tab='active_rows')
	{
		try { 
			$data['rows_per_page'] = $this->input->post('rows_per_page');
			$data['page'] = $this->input->post('page');
			$search_keyword = $this->input->post('search_keyword');
			
			if($tab=='active_rows'){
				$conditions['where'] = ['su.status'=>'ACTIVE','su.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user/ajax/active_rows';
				$searchFilter = 'searchFilter';
				$data['ajax_view_id'] = '';
			}
			else if($tab=='inactive_rows'){
				$conditions['where'] = ['su.status'=>'INACTIVE','su.is_deleted'=>'NO'];
				$base_url = base_url().'admin/user/ajax/inactive_rows';
				$searchFilter = 'searchFilter1';
				$data['ajax_view_id'] = '1';
			}
			else if($tab=='suspend_rows'){
				$conditions['where'] = ['su.is_deleted'=>'YES'];
				$base_url = base_url().'admin/user/ajax/suspend_rows';
				$searchFilter = 'searchFilter2';
				$data['ajax_view_id'] = '2';
			}

			$conditions['where_raw'] = '';
			if(!empty($search_keyword)) $conditions['where_raw'] = "( su.user_name LIKE '%".$search_keyword."%' OR su.user_address LIKE '%".$search_keyword."%' OR su.user_phone LIKE '%".$search_keyword."%' OR su.user_email LIKE '%".$search_keyword."%' OR su.user_username LIKE '%".$search_keyword."%' OR rl.role_name LIKE '%".$search_keyword."%' )";
			$conditions['join'] = [['hrm_role rl','su.role_id = rl.role_id','left']];
			$conditions['group_by'] = ['su.user_id'];
			$conditions['order_by'] = ['su.user_id','desc'];
			$data['total_records'] = $this->Admin_model->getCount('hrm_user su',$conditions);
			$conditions['limit'] = [$data['rows_per_page'],$data['page']];
			$data['records'] = $this->Admin_model->getRows('hrm_user su',"su.*,rl.role_name",$conditions);

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

			$this->load->view('admin/user/ajax_rows', $data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function view($user_id)
	{
		try { 
			$this->hasAccess('user','is_view');
			$conditions['join'] = [['hrm_role rl','su.role_id = rl.role_id','left'],['hrm_user s1','su.created_by = s1.user_id','left'],['hrm_user s2','su.updated_by = s2.user_id','left']];
			$conditions['where'] = ['su.user_id' => $user_id];
			$data['p_record'] = $this->Admin_model->getRow('hrm_user su', 'su.*,rl.role_name,s1.user_name as createdby,s2.user_name as updatedby', $conditions);
			$data['user_id'] = $user_id;
			$data['pageTitle'] = 'View User';
			$this->loadViews('user/view',$data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function add()
	{
		try { 
			$this->hasAccess('user','is_add');
			// print_r($this->hasAccess('user','is_add'));exit();
			$this->form_validation->set_rules('role_id','User Role','trim|required');
			$this->form_validation->set_rules('user_name','User Name','trim|required|callback_valid_name|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('user_address','User Address','trim|required|callback_valid_address');
			$this->form_validation->set_rules('user_phone','User Contact','trim|required|callback_valid_phone|callback_is_unique['.'hrm_user.user_phone]');
			$this->form_validation->set_rules('user_email','User Email','trim|valid_email|required|min_length[5]|max_length[32]|callback_is_unique['.'hrm_user.user_email]');
			$this->form_validation->set_rules('status','User Status','trim|required');
			$this->form_validation->set_rules('user_username','Username','trim|required|callback_alpha_num_only|min_length[5]|max_length[32]|callback_is_unique['.'hrm_user.user_username]');
			$this->form_validation->set_rules('user_password', 'User Password', 'trim|required|callback_valid_password');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[user_password]');

			if($this->form_validation->run() == FALSE)
			{
				$data['role_data'] = $this->Admin_model->getRows('hrm_role', "role_id,role_name", ['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]);
				$data['pageTitle'] = 'Add User';
				$this->loadViews('user/add',$data);
			}
			else{
				
				$user_avatar = '';
				if(!empty($_FILES['user_avatar']['name']))
				{
					$directory = './uploads/user_avatar/';
					if(!is_dir($directory)){
	                        mkdir($directory, 0755, true);
	                }
					$config['upload_path'] = $directory;
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                $config['file_name'] = $_FILES['user_avatar']['name'];
	                
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('user_avatar')){
	                    $uploadData = $this->upload->data();
						//print_r($uploadData);exit;
	                    $user_avatar = $uploadData['file_name'];
						$configer =  array(
						  'image_library'   => 'gd2',
						  'source_image'    =>  $uploadData['full_path'],
						  'create_thumb'    =>  FALSE,
						  'maintain_ratio'  =>  TRUE,
						  'width'           =>  200,
						  'height'          =>  200
						);
						$this->load->library('image_lib');
						$this->image_lib->initialize($configer);
						if (!$this->image_lib->resize()) {
							$errors =  array('error' => $this->image_lib->display_errors());
						}
						chmod($directory.$user_avatar, 0755);
	                }
				}  
	                                                  
				$insert_data = array(
					'role_id'=>$this->input->post('role_id'),
					'user_name'=>$this->input->post('user_name'),
					'user_address'=>$this->input->post('user_address'),
					'user_phone'=>$this->input->post('user_phone'),
					'user_email'=>$this->input->post('user_email'),
					'user_username'=>$this->input->post('user_username'),
					'user_password'=>$this->input->post('user_password'),//md5($this->input->post('user_password')),
					'session_timeout'=>'0',//$this->input->post('session_timeout'),
					'user_avatar'=>$user_avatar,
					'status'=>$this->input->post('status')
				);
					
				$result = $this->Admin_model->add('hrm_user',$insert_data);
				if($result)
				{
					$this->addActivity('Added User');
					$this->session->set_flashdata('success_msg', 'User added successfully');
				}else{
					$this->session->set_flashdata('error_msg', 'Record not saved..!');
				}
				
				redirect(base_url('admin/user'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function edit($user_id)
	{
		try { 
			$this->hasAccess('user','is_edit');
			$this->form_validation->set_rules('role_id','User Role','trim|required');
			$this->form_validation->set_rules('user_name','User Name','trim|required|callback_valid_name|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('user_address','User Address','trim|required|callback_valid_address');
			$this->form_validation->set_rules('user_phone','User Contact','trim|required|callback_valid_phone|callback_is_unique['.'hrm_user.user_phone,user_id,'.$user_id.']');
			$this->form_validation->set_rules('user_email','User Email','trim|valid_email|required|min_length[5]|max_length[32]|callback_is_unique['.'hrm_user.user_email,user_id,'.$user_id.']');
			$this->form_validation->set_rules('status','User Status','trim|required');
			$this->form_validation->set_rules('user_username','Username','trim|required|callback_alpha_num_only|min_length[5]|max_length[32]|callback_is_unique['.'hrm_user.user_username,user_id,'.$user_id.']');
			if($this->input->post('user_password')!=''){
				$this->form_validation->set_rules('user_password', 'User Password', 'trim|required|callback_valid_password');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[user_password]');
			}
			if($this->input->post('confirm_password')!=''){
				$this->form_validation->set_rules('user_password', 'User Password', 'trim|required|callback_valid_password');
				$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[user_password]');
			}

			if($this->form_validation->run() == FALSE)
			{
				$data['p_record'] = $this->Admin_model->getRow('hrm_user', '*', ['where'=>['user_id' => $user_id]]);
				$data['role_data'] = $this->Admin_model->getRows('hrm_role', "role_id,role_name", ['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]);
				$data['pageTitle'] = 'Edit User';
				$this->loadViews('user/edit',$data);
			}
			else{
				
				$user_avatar = '';
				if(!empty($_FILES['user_avatar']['name']))
				{
	                $directory = './uploads/user_avatar/';
					if(!is_dir($directory)){
	                        mkdir($directory, 0755, true);
	                }
					$config['upload_path'] = $directory;
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                $config['file_name'] = $_FILES['user_avatar']['name'];
	                
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('user_avatar')){
	                    $uploadData = $this->upload->data();
						//print_r($uploadData);exit;
	                    $user_avatar = $uploadData['file_name'];
						$configer =  array(
						  'image_library'   => 'gd2',
						  'source_image'    =>  $uploadData['full_path'],
						  'create_thumb'    =>  FALSE,
						  'maintain_ratio'  =>  TRUE,
						  'width'           =>  200,
						  'height'          =>  200
						);
						$this->load->library('image_lib');
						$this->image_lib->initialize($configer);
						if (!$this->image_lib->resize()) {
							$errors =  array('error' => $this->image_lib->display_errors());
						}
						chmod($directory.$user_avatar, 0755);
	                }
				} 
				
				$edit_user = array(
					'role_id'=>$this->input->post('role_id'),
					'user_name'=>$this->input->post('user_name'),
					'user_address'=>$this->input->post('user_address'),
					'user_phone'=>$this->input->post('user_phone'),
					'user_email'=>$this->input->post('user_email'),
					'user_username'=>$this->input->post('user_username'),
					'session_timeout'=>'0',//$this->input->post('session_timeout'),
					'status'=>$this->input->post('status')
				);
				
				if($user_avatar != ''){
					$edit_user['user_avatar']=$user_avatar;
				}
				if($this->input->post('user_password')!=''){
					$edit_user['user_password']=$this->input->post('user_password');//md5($this->input->post('user_password'));
				}

				if($user_id == $this->userdata->user_id){
					if($user_avatar != ''){
						$this->userdata->user_avatar=$user_avatar;
					}
					$this->userdata->user_name = $this->input->post('user_name');
					$this->userdata->user_email = $this->input->post('user_email');
					$this->userdata->user_phone = $this->input->post('user_phone');
					$this->userdata->user_address = $this->input->post('user_address');
					$this->userdata->role_id = $this->input->post('role_id');
					$this->userdata->role_name = $this->input->post('role_name');
					$this->userdata->session_timeout = '0';//$this->input->post('session_timeout');
				}

				$result = $this->Admin_model->edit('hrm_user',$edit_user,['user_id'=>$user_id]);

				if($result)
				{
					$this->addActivity('Updated User');
					$this->session->set_flashdata('success_msg', 'User updated successfully.');
				}
				else
				{
					$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
				}
		
				redirect(base_url('admin/user'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function status($status='ACTIVE')
	{
		try { 
			if($this->check_access('user/edit')){
				$user_id = $this->input->post('rowId');
				$status = ($status=='ACTIVE') ? 'INACTIVE' : 'ACTIVE';
				$role_data = $this->Admin_model->getRow('hrm_role rl','rl.*',['join'=>[['hrm_user st','rl.role_id = st.role_id AND st.user_id = '.$user_id,'inner']],'where'=>['rl.status'=>'ACTIVE']]);
				if(!empty($role_data)){
					$result = $this->Admin_model->edit('hrm_user',['status'=>$status],['user_id'=>$user_id]);
					if($result)
					{						
						$this->addActivity('Changed User Status');
						$response['status'] = 'success';
						$response['msg'] = 'User status changed successfully.';
					}
					else
					{
						$response['status'] = 'error';
						$response['msg'] = 'Some problems occured, please try again.';
					}
				}
				else{
					$response['status'] = 'error';
					$response['msg'] = 'Change role status to active of this user first.';
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
			if($this->check_access('user/delete')){
				$user_id = $this->input->post('rowId');
				
					$result = $this->Admin_model->edit('hrm_user',['is_deleted'=>'YES'],['user_id'=>$user_id]);
					if($result)
					{
						$this->Admin_model->edit('hrm_user_role_access',['is_deleted'=>'YES'],['user_id'=>$user_id]);
						$this->addActivity('Deleted User');
						$response['status'] = 'success';
						$response['msg'] = 'User deleted successfully.';
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
	public function deleteChecked()
	{
		try { 
			if($this->check_access('user/delete')){
				$user_ids = $this->input->post('rowIds');
				$user_ids = json_decode($user_ids);
				$result = 0;
				if(!empty($user_ids)){
					foreach($user_ids as $user_id){
						$result = $this->Admin_model->edit('hrm_user',['is_deleted'=>'YES'],['user_id'=>$user_id]);
					}
				}
				if($result)
				{
					$this->addActivity('Delete Checked User');
					$response['status'] = 'success';
					$response['msg'] = 'Users deleted successfully.';
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
			if($this->check_access('user/edit')){
				$user_ids = $this->input->post('rowIds');
				$user_ids = json_decode($user_ids);
				$err = 0;
				$result = 0;
				if(!empty($user_ids)){
					foreach($user_ids as $user_id){
						$role_data = $this->Admin_model->getRow('hrm_role rl','rl.*',['join'=>[['hrm_user st','rl.role_id = st.role_id AND st.user_id = '.$user_id,'inner']],'where'=>['rl.status'=>'ACTIVE']]);
						if(!empty($role_data)){
							$result = $this->Admin_model->edit('hrm_user',['status'=>$status],['user_id'=>$user_id]);
						}else $err = 1;
					}
				}
				if($result || $err = 1)
				{
					$this->addActivity('Change Checked User');
					if($err){
						$response['status'] = 'error';
						$response['msg'] = 'Change role status of this user first.';
					}
					else{
						$response['status'] = 'success';
						$response['msg'] = 'Users status changed successfully.';
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
			if($this->check_access('user/restore')){
				$user_id = $this->input->post('rowId');
				$role_data = $this->Admin_model->getRow('hrm_role rl','rl.*',['join'=>[['hrm_user st','rl.role_id = st.role_id AND st.user_id = '.$user_id,'inner']],'where'=>['rl.is_deleted'=>'NO']]);
				
				if(!empty($role_data)){
					$result = $this->Admin_model->edit('hrm_user',['is_deleted'=>'NO'],['user_id'=>$user_id]);
					if($result)
					{
						$this->addActivity('Restored User');
						$response['status'] = 'success';
						$response['msg'] = 'User restored successfully.';
					}
					else
					{
						$response['status'] = 'error';
						$response['msg'] = 'Some problems occured, please try again.';
					}
				}
				else{
					$response['status'] = 'error';
					$response['msg'] = 'Restore user role to restore of this user first.';
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
			if($this->check_access('user/restore')){
				$user_ids = $this->input->post('rowIds');
				$user_ids = json_decode($user_ids);
				$err = 0;
				$result = 0;
				if(!empty($user_ids)){
					foreach($user_ids as $user_id){
						$role_data = $this->Admin_model->getRow('hrm_role rl','rl.*',['join'=>[['hrm_user st','rl.role_id = st.role_id AND st.user_id = '.$user_id,'inner']],'where'=>['rl.is_deleted'=>'NO']]);
						if(!empty($role_data)){
							$result = $this->Admin_model->edit('hrm_user',['is_deleted'=>'NO'],['user_id'=>$user_id]);
						}else $err = 1;
					}
				}
				if($result || $err = 1)
				{
					$this->addActivity('Restore Checked User');
					if($err){
						$response['status'] = 'error';
						$response['msg'] = 'Restore role of this user first.';
					}
					else{
						$response['status'] = 'success';
						$response['msg'] = 'Users restored successfully.';
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
	
}