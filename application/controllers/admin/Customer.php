<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Admin_Controller {

	function __construct(){
        parent::__construct();
		$this->isLogin();
    }
	
	public function index()
	{
		try { 
			$this->hasAccess('customer');
			$data['pageTitle'] = 'customers';
			$this->loadViews('customer/index',$data);
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
				$conditions['where'] = ['cm.status'=>'ACTIVE','cm.is_deleted'=>'NO'];
				$base_url = base_url().'admin/Customer/ajax/active_rows';
				$searchFilter = 'searchFilter';
				$data['ajax_view_id'] = '';
			}
			else if($tab=='inactive_rows'){
				$conditions['where'] = ['cm.status'=>'INACTIVE','cm.is_deleted'=>'NO'];
				$base_url = base_url().'admin/Customer/ajax/inactive_rows';
				$searchFilter = 'searchFilter1';
				$data['ajax_view_id'] = '1';
			}
			else if($tab=='suspend_rows'){
				$conditions['where'] = ['cm.is_deleted'=>'YES'];
				$base_url = base_url().'admin/Customer/ajax/suspend_rows';
				$searchFilter = 'searchFilter2';
				$data['ajax_view_id'] = '2';
			}

			$conditions['where_raw'] = '';
			if (!empty($search_keyword)) $conditions['where_raw'] = "( cm.customer_name LIKE '%" . $search_keyword . "%' OR cm.email_id LIKE '%" . $search_keyword . "%')";

			

			$data['total_records'] = $this->Admin_model->getCount('customer_masters cm',$conditions);
			
			$conditions['limit'] = [$data['rows_per_page'],$data['page']];

			// $conditions['group_by'] = ['st.state_id'];
			$conditions['order_by'] = ['st.state_id','desc'];

			$data['records'] = $this->Admin_model->getRows('customer_masters cm',"cm.*",$conditions);

			$conditions['join'] = [['state_type st', "cm.state_id = st.state_id", 'left']];
			
			$data['records'] = $this->Admin_model->getRows('customer_masters cm', "cm.*, st.states", $conditions);

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

			$this->load->view('admin/customer/ajax_rows', $data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function view($customer_id)
	{
		try { 
			$this->hasAccess('customer/view');

			
			
			$data['p_record'] = $this->Admin_model->getRow('customer_masters cm', 'st.states,cm.*,s1.user_name as createdby,s2.user_name as updatedby', ['join'=>[['state_type st', "cm.state_id = st.state_code", 'left'],['hrm_user s1','cm.created_by = s1.user_id','left'],['hrm_user s2','cm.updated_by = s2.user_id','left']],'where'=>['cm.customer_id' => $customer_id]]);
			// print_r($this->db->last_query());exit;
			$data['pageTitle'] = 'View Customer';
			$this->loadViews('customer/view',$data);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function add()
	{
		try { 
			$this->hasAccess('customer/add');
            $this->form_validation->set_rules('customer_name','Customer Name','trim|required|min_length[4]|max_length[50]');
			$this->form_validation->set_rules('address','Customer Address','trim|required');
			// $this->form_validation->set_rules('contact_person_1','Contact Person 1','trim|required');
			// $this->form_validation->set_rules('contact_no_1','Contact No 1','trim|required');
			// $this->form_validation->set_rules('contact_person_2','Contact Person 2','trim|required');
			// $this->form_validation->set_rules('contact_no_2','Contact No 2','trim|required|callback_valid_phone');
			// $this->form_validation->set_rules('state_id','State','trim|required');
			// $this->form_validation->set_rules('email_id','Customer Email','trim|valid_email|required|min_length[5]|max_length[50]');
			// $this->form_validation->set_rules('gst_no','GST_No','trim|required');
			// $this->form_validation->set_rules('pan_no','PAN_No','trim|required');
			// $this->form_validation->set_rules('status','Customer Status','trim|required');
			

			if($this->form_validation->run() == FALSE)
			{
				$data['pageTitle'] = 'Add Customer';
				// $data['country_data'] = $this->Admin_model->getRows('hrm_country', "id,country_name", ['where'=>['status'=>'ACTIVE','Is_Delete'=>'NO']]);
				$data['city'] = $this->Admin_model->getRows('city_type');
				$data['country'] = $this->Admin_model->getRows('country_type');
				$data['state'] = $this->Admin_model->getRows('state_type','*',['order_by'=>'states'],'state_code,states,state_id',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]);
				// print_r($data);exit();
				// $data['state'] = $this->Admin_model->getRows('state_type', "*", ['where' => ['status' => 'ACTIVE', 'is_deleted' => 'NO']]);

				$this->loadViews('customer/add',$data);
			}
			else{ 
	                                                  
				$insert_data = array(
					
					'customer_name'		=>$this->input->post('customer_name'),
					'customer_loc'		=>$this->input->post('customer_loc'),
					'address'			=>$this->input->post('address'),
					
					'gst_no'			=>$this->input->post('gst_no'),
					'pan_no'			=>$this->input->post('pan_no'),
					'city_id'			=>$this->input->post('city_id'),
					'state_id'			=>$this->input->post('state_id1'),
					'country_id'			=>$this->input->post('country_id'),
					'state_code'		=>$this->input->post('state_code1'),
					'status'			=>$this->input->post('status')
				);
					// print_r($insert_data);exit;
				$result = $this->Admin_model->add('customer_masters',$insert_data);

				// print_r($this->db->last_query());exit;

				$customer_id = $result; //$this->db->insert_id(); 

				if($result)
				{

					
					$customer_id	= $customer_id;
					$contact_name	= $this->input->post('contact_name');
					$contact_no		= $this->input->post('contact_no');
					$email			= $this->input->post('email');
					$type			= $this->input->post('type');


					for($i=0; $i<count($contact_name); $i++) {
					$in_tran_data = array(
					'customer_id'	=> $customer_id,
					'contact_name'	=> $contact_name[$i],
					'contact_no'	=> $contact_no[$i],
					'email'			=> $email[$i],
					'type'			=> $type[$i],
						
					);
					$result_tran=$this->db->insert('customer_contact_no',$in_tran_data);
									// print_r($this->db->last_query());exit;

				}


					$this->addActivity('Added Cutomer');
					$this->session->set_flashdata('success_msg', 'Customer added successfully');
					redirect(base_url('admin/Customer'));

				}else{
					$this->session->set_flashdata('error_msg', 'Record not saved..!');
				}
				
				// redirect(base_url('admin/Customer'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function edit($customer_id)
	{
		try { 
			$this->hasAccess('customer/edit');

			$this->form_validation->set_rules('customer_name','Customer Name','trim|required|min_length[4]|max_length[50]');
			$this->form_validation->set_rules('address','Customer Address','trim|required');
			// $this->form_validation->set_rules('contact_person_1','Contact Person 1','trim|required');
			// $this->form_validation->set_rules('contact_no_1','Contact No 1','trim|required');
			// $this->form_validation->set_rules('contact_person_2','Contact Person 2','trim|required');
			// $this->form_validation->set_rules('contact_no_2','Contact No 2','trim|required|callback_valid_phone');
			// $this->form_validation->set_rules('state_id','State','trim|required');
			// $this->form_validation->set_rules('email_id','Customer Email','trim|valid_email|required|min_length[5]|max_length[50]');
			// $this->form_validation->set_rules('gst_no','GST_No','trim|required');
			// $this->form_validation->set_rules('pan_no','PAN_No','trim|required');
			$this->form_validation->set_rules('status','Customer Status','trim|required');
			

			if($this->form_validation->run() == FALSE)
			{
				$tran_conditions['where'] = ['cm.customer_id'=>$customer_id,'cm.is_deleted'=>'NO'];
				$data['p_record'] = $this->Admin_model->getRow('customer_masters cm', 'cm.*', $tran_conditions);
				

				
				$tranc_conditions['where'] = ['ccn.customer_id'=>$customer_id,'ccn.is_deleted'=>'NO'];

				// $tranc_conditions['join']=[['customer_contact_no ccn','cm.customer_id = ccn.customer_id','left']];

				$data['c_record'] = $this->Admin_model->getRows('customer_contact_no ccn', 'ccn.*', $tranc_conditions);


								// print_r($this->db->last_query());exit();
				
				$data['pageTitle'] = 'Edit Customer';
				$data['city'] = $this->Admin_model->getRows('city_type');
				$data['country'] = $this->Admin_model->getRows('country_type');
				$data['state'] = $this->Admin_model->getRows('state_type','state_code,states,state_id',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]);
				$this->loadViews('customer/edit',$data);
			}
			else
			{
				$edit_customer = array(
				    'customer_name'		=>$this->input->post('customer_name'),
					'customer_loc'		=>$this->input->post('customer_loc'),
					'address'			=>$this->input->post('address'),
					// 'contact_person_1'	=>$this->input->post('contact_person_1'),
					// 'contact_no_1'		=>$this->input->post('contact_no_1'),
					// 'contact_person_2'	=>$this->input->post('contact_person_2'),
					// 'contact_no_2'	    =>$this->input->post('contact_no_2'),
					// 'email_id'			=>$this->input->post('email_id'),
					'vendor_code'			=>$this->input->post('vendor_code'),
					'gst_no'			=>$this->input->post('gst_no'),
					'pan_no'			=>$this->input->post('pan_no'),
					'city_id'			=>$this->input->post('city_id'),
					'state_id'			=>$this->input->post('state_id1'),
					'country_id'			=>$this->input->post('country_id'),
					'state_code'		=>$this->input->post('state_code1'),
					'status'			=>$this->input->post('status')
				);
				

				
				$result = $this->Admin_model->edit('customer_masters',$edit_customer,['customer_id'=>$customer_id]);
				// print_r($result);exit();
				// print_r($this->db->last_query());exit;
				// $customer_id = $result; //$this->db->insert_id(); 
				if($result)
				{



					$customer_id	= $customer_id;
					$contact_name	= $this->input->post('contact_name');
					$contact_no		= $this->input->post('contact_no');
					$email			= $this->input->post('email');

					// print_r($contact_name);exit;
					$this->db->delete('customer_contact_no',['customer_id'=> $customer_id]);
				
					for($i=0; $i<count($contact_name); $i++) {
					$in_tran_data = array(
					'customer_id'	=> $customer_id,
					'contact_name'	=> $contact_name[$i],
					'contact_no'	=> $contact_no[$i],
					'email'			=> $email[$i],
						
					);
					$result_tran=$this->db->insert('customer_contact_no',$in_tran_data);
					
				}
					$this->addActivity('Updated Customer');
					$this->session->set_flashdata('success_msg', 'Customer updated successfully.');
				}
				else
				{
					$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
				}
		
				redirect(base_url('admin/Customer'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function status($status='ACTIVE')
	{
		try { 
			if($this->check_access('customer/edit')){
				$customer_id = $this->input->post('rowId');
				$status = ($status=='ACTIVE') ? 'INACTIVE' : 'ACTIVE';
				
				$result = $this->Admin_model->edit('customer_masters',['status'=>$status],['customer_id'=>$customer_id]);
				if($result)
				{
					$this->addActivity('Changed customer Status');
					$response['status'] = 'success';
					$response['msg'] = 'customer status changed successfully.';
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
	
	public function delete()
	{
		try { 
			if($this->check_access('customer/delete')){
				$customer_id = $this->input->post('rowId');
				
				$result = $this->Admin_model->edit('customer_masters',['is_deleted'=>'YES'],['customer_id'=>$customer_id]);
				if($result)
				{
					$this->addActivity('Deleted customer');
					$response['status'] = 'success';
					$response['msg'] = 'customer deleted successfully.';
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
			if($this->check_access('customer/delete')){
				$customer_ids = $this->input->post('rowIds');
				$customer_ids = json_decode($customer_ids);
				$result = 0 ;
				if(!empty($customer_ids)){
					foreach($customer_ids as $customer_id){
							$result = $this->Admin_model->edit('customer_masters',['is_deleted'=>'YES'],['customer_id'=>$customer_id]);
					}
				}
				if($result)
				{
					$this->addActivity('Delete Checked customer');
					
					$response['status'] = 'success';
					$response['msg'] = 'customer deleted successfully.';
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
			if($this->check_access('customer/edit')){
				$customer_ids = $this->input->post('rowIds');
				$customer_ids = json_decode($customer_ids);
				$result = 0;
				if(!empty($customer_ids)){
					foreach($customer_ids as $customer_id){
						
						$result = $this->Admin_model->edit('customer_masters',['status'=>$status],['customer_id'=>$customer_id]);
					}
				}
				if($result)
				{
					$this->addActivity('Change Checked Customers Status');
					
					$response['status'] = 'success';
					$response['msg'] = 'Customers status changed successfully.';
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
			if($this->check_access('customer/restore')){
				$customer_id = $this->input->post('rowId');
				$result = $this->Admin_model->edit('customer_masters',['is_deleted'=>'NO'],['customer_id'=>$customer_id]);
				if($result)
				{
					$this->addActivity('Restored Customer');
					$response['status'] = 'success';
					$response['msg'] = 'Customer restored successfully.';
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
			if($this->check_access('customer/restore')){
				$customer_ids = $this->input->post('rowIds');
				$customer_ids = json_decode($customer_ids);
				foreach($customer_ids as $customer_id){
					$result = $this->Admin_model->edit('customer_masters',['is_deleted'=>'NO'],['customer_id'=>$customer_id]);
				}
				if($result)
				{
					$this->addActivity('Restore Checked Customer');
					$response['status'] = 'success';
					$response['msg'] = 'Customer restored successfully.';
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

		public function get_state(){
			
			// $conditions['where_raw'] = '';
			// if (!empty($search_keyword)) $conditions['where_raw'] = "( sm.states LIKE '%" . $search_keyword . "%' OR sm.state_code LIKE '%" . $search_keyword . "%')";

			// $data['total_records'] = $this->Admin_model->getCount('state_type sm',$conditions);
			
			// $conditions['limit'] = [$data['rows_per_page'],$data['page']];
			// $data['records'] = $this->Admin_model->getRows('state_type sm',"sm.*",$conditions);
			
			$State = $this->Admin_model->getRows('state_type st','st.*');
			echo json_encode($State);
		}

		public function get_editstate(){

			$states = $this->input->post('state_id');
			$condition['where'] = ['st.state_id'=>$states]; 
			$State = $this->Admin_model->getRow('state_type st','st.*',$condition);
			// print_r($State);exit;
			echo json_encode($State);
		}


		// public function	add_State(){

		// 		$insert_data = array(
		// 		'states' =>  $this->input->post('state'),
		// 		'state_code' =>  $this->input->post('state_code'),
		// 		// 'IS_Active' =>  '1',
		// 		// 'status' =>  'ACTIVE',
		// 		);
		// 		$result = $this->Admin_model->add('state_type',$insert_data);

		// 		$condition['where'] = ['st.state_id'=>$result];
		// 		$Staterow = $this->Admin_model->getRows('state_type st',"st.*",$condition);
		// 		echo json_encode($Staterow);		
		// }

		public function	add_state1(){
		

		$this->form_validation->set_rules('state', $this->lang->line('states'),'trim|required|alpha');
		$this->form_validation->set_rules('state_code', $this->lang->line('state_code'),'required|numeric');

		if($this->form_validation->run() == false)
			{
	            $msg = array(
	                'states'  		=> form_error('state'),
	                'state_code'  	=> form_error('state_code'),
	            );
	            $array = array('status' => 'Please Fill the Correct Data.', 'error' => $msg, 'message' => '');
			}
			else{
				$add_state_data = array(
		            'states'  		=> $this->input->post('state'), 
		            'state_code'  	=> $this->input->post('state_code'), 
		    	);

	        	$insert_id = $this->Admin_model->add('state_type',$add_state_data);
	        	// print_r($this->db->last_query());exit;
	        	$condition['where'] = ['st.state_id'=>$insert_id];
				$Staterow = $this->Admin_model->getRows('state_type st',"st.*",$condition);
			
	        	
	        	if($insert_id) {
	            	$array = array('status' => 'success', 'error' => '', 'message' => 'success_message','id' => $insert_id, 'data'=>$Staterow);

	        	}
	        	else{
	            	$array = array('status' => 'Please Fill the Correct Data.', 'error' => $msg, 'message' => '');
	        	}     
	    	}
	    echo json_encode($array);
	
	}

		public function	update_state(){

				$id = $this->input->post('id');
				
				$states = $this->input->post('state');
				$state_code = $this->input->post('state_code');
				// $result = $this->Admin_model->edit('state_type',$insert_data,$condition);
				$result = $this->Admin_model->edit('state_type',['states'=>$states,'state_code'=>$state_code],['state_id'=>$id]);
				// print_r($this->db->last_query());

				$conditions['where'] = ['st.state_id'=>$id];
				$Staterow = $this->Admin_model->getRows('state_type st',"st.*",$conditions);
				echo json_encode($Staterow);		
		}

		public function delete_state(){

			$states = $this->input->post('state_id');
			
			$State= $this->db->delete('state_type', array('state_id' => $states));
			// print_r($State);exit;
			echo json_encode($State);
		}

		public function state_code()
    	{
    	// $this->hasAccess('customer/add');
			$State= $this->input->post('state');
			// print_r('hello');exit;
			
			$condition['where'] = ['st.state_code'=>$State];
			$users = $this->Admin_model->getRow('state_type st',"st.*",$condition);
		//  print_r($this->db->last_query());exit;
			
			echo json_encode($users);
	}


	public function get_city(){
		$city = $this->Admin_model->getRows('city_type pt','pt.*');
		echo json_encode($city);
	}

	public function get_editcity(){

		$city_name = $this->input->post('city_id');
		$condition['where'] = ['pt.city_id'=>$city_name]; 
		$city = $this->Admin_model->getRow('city_type pt','pt.*',$condition);
		// print_r($State);exit;
		echo json_encode($city);
	}


	

	public function	add_city_name(){
			$insert_data = array('city_name' =>  $this->input->post('city_name'));
		
		$city_id = $this->Admin_model->add('city_type',$insert_data);

		$conditions['where'] = ['pt.city_id'=>$city_id];
		$Staterow = $this->Admin_model->getRows('city_type pt',"pt.*",$conditions);
		echo json_encode($Staterow);		
}

	public function	update_city(){

			$city_id = $this->input->post('city_id');
			
			$city_name = $this->input->post('city_name');
			// $result = $this->Admin_model->edit('state_type',$insert_data,$city_name);
			$result = $this->Admin_model->edit('city_type',['city_name'=>$city_name],['city_id'=>$city_id]);
			// print_r($this->db->last_query());

			$conditions['where'] = ['pt.city_id'=>$city_id];
			$Staterow = $this->Admin_model->getRows('city_type pt',"pt.*",$conditions);
			echo json_encode($Staterow);		
	}

	public function delete_city(){

		$city_name = $this->input->post('city_id');
		
		$city_name= $this->db->delete('city_type', array('city_id' => $city_name));
		// print_r($State);exit;
		echo json_encode($city_name);
	}



	public function get_country(){
		$country = $this->Admin_model->getRows('country_type pt','pt.*');
		echo json_encode($country);
	}

	public function get_editcountry(){

		$country_name = $this->input->post('country_id');
		$condition['where'] = ['pt.country_id'=>$country_name]; 
		$country = $this->Admin_model->getRow('country_type pt','pt.*',$condition);
		// print_r($State);exit;
		echo json_encode($country);
	}


	

	public function	add_country_name(){
			$insert_data = array('country_name' =>  $this->input->post('country_name'));
		
		$country_id = $this->Admin_model->add('country_type',$insert_data);

		$conditions['where'] = ['pt.country_id'=>$country_id];
		$Staterow = $this->Admin_model->getRows('country_type pt',"pt.*",$conditions);
		echo json_encode($Staterow);		
}

	public function	update_country(){

			$country_id = $this->input->post('country_id');
			
			$country_name = $this->input->post('country_name');
			// $result = $this->Admin_model->edit('state_type',$insert_data,$city_name);
			$result = $this->Admin_model->edit('country_type',['country_name'=>$country_name],['country_id'=>$country_id]);
			// print_r($this->db->last_query());

			$conditions['where'] = ['pt.country_id'=>$country_id];
			$Staterow = $this->Admin_model->getRows('country_type pt',"pt.*",$conditions);
			echo json_encode($Staterow);		
	}

	public function delete_country(){

		$country_name = $this->input->post('country_id');
		
		$country_name= $this->db->delete('country_type', array('country_id' => $country_name));
		// print_r($State);exit;
		echo json_encode($country_name);
	}


	
}
