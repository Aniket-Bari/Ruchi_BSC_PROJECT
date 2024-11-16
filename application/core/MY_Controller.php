<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->input->cookie('sidebar_nav', TRUE);
		$this->input->cookie('full_screen', TRUE);
    }
	
	function getBrowserAgent()
    {
    	try {
	        $agent = '';

	        if ($this->agent->is_browser()){
	            $agent = $this->agent->browser().' '.$this->agent->version();
	        }
	        else if ($this->agent->is_robot()){
	            $agent = $this->agent->robot();
	        }
	        else if ($this->agent->is_mobile()){
	            $agent = $this->agent->mobile();
	        }else{
	            $agent = 'Unidentified User Agent';
	        }

	        return $agent;
        } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
    }
	
	public function valid_text($str='') 
	{
		try { 
			if (is_numeric($str))
			{
				$this->form_validation->set_message('valid_text', 'The {field} field cannot be number.');
				return false;
			}
			else if (strlen($str) < 6)
			{
				$this->form_validation->set_message('valid_text', 'The {field} field must be at least 6 characters in length.');
				return false;
			}
			else if (strlen($str) > 50)
			{
				$this->form_validation->set_message('valid_text', 'The {field} field cannot exceed 50 characters in length.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
		
	public function valid_name($str='') 
	{
		try { 
			if (! preg_match("/^([a-z ])+$/i", $str) && $str != '')
			{
				$this->form_validation->set_message('valid_name', '%s field can only allowed space and alphabets');
				return false;
			}
			else if (strlen($str) < 4)
			{
				$this->form_validation->set_message('valid_name', 'The {field} field must be at least 4 characters in length.');
				return false;
			}
			else if (strlen($str) > 50)
			{
				$this->form_validation->set_message('valid_name', 'The {field} field cannot exceed 50 characters in length.');
				return false;
			}
			return TRUE;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function valid_phone($no='') 
	{
		try { 
			if (preg_match("~^0\d+$~", $no)) {
			    $this->form_validation->set_message('valid_phone', '%s field should not start with 0');
				return false;
			}
			if (! preg_match("/^[0-9]{10}$/", $no) && $no != '')
			{
				$this->form_validation->set_message('valid_phone', '%s field must be 10 digit number');
				return false;
			} 
			return TRUE;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	function valid_address($addr='') {
		try {
			if (is_numeric($addr))
			{
				$this->form_validation->set_message('valid_address', 'The {field} field cannot be number.');
				return false;
			}
			else if (strlen($addr) < 10)
			{
				$this->form_validation->set_message('valid_address', 'The {field} field must be at least 10 characters in length.');
				return false;
			}
			else if (strlen($addr) > 150)
			{
				$this->form_validation->set_message('valid_address', 'The {field} field cannot exceed 200 characters in length.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function valid_password($password='')
	{
		try { 
			$password = trim($password);
			$regex_lowercase = '/[a-z]/';
			$regex_uppercase = '/[A-Z]/';
			$regex_number = '/[0-9]/';
			$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
			
			if (preg_match_all($regex_lowercase, $password) < 1 || preg_match_all($regex_uppercase, $password) < 1 || preg_match_all($regex_number, $password) < 1 || preg_match_all($regex_special, $password) < 1)
			{
				$this->form_validation->set_message('valid_password', 'The {field} must be at least one lowercase,one uppercase letter,one number and one special character.');
				return false;
			}
			else if (strlen($password) < 6)
			{
				$this->form_validation->set_message('valid_password', 'The {field} field must be at least 6 characters in length.');
				return false;
			}
			else if (strlen($password) > 32)
			{
				$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function valid_json($str='') 
	{
		try { 
			json_decode($str);
			$err = (json_last_error() == JSON_ERROR_NONE || json_last_error() == JSON_ERROR_CTRL_CHAR);
			if ($err == false)
			{
				$this->form_validation->set_message('valid_json', 'The {field} field is not in correct json format.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function gen_token($n=5)
	{
		try { 
			$characters = '0123456789abcdefghjklmnopqrstuvwxyz'; 
			$uid = ''; 
			for ($i = 0; $i < $n; $i++) 
			{ 
				$index = rand(0, strlen($characters) - 1); 
				$uid .= $characters[$index]; 
			}
			return $uid; 
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function gen_uno()
	{
		try { 
			list($microseconds, $seconds) = explode(" ", microtime());
			$microseconds = (int)($microseconds * 100);
			return date('YmdHis', $seconds).sprintf('%02d', $microseconds);
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function is_unique($str, $field)
	{
		try { 
			$field = explode(',',$field);
			$key = isset($field[1]) ? $field[1] : '';
			$val = isset($field[2]) ? $field[2] : '';
			$field = $field[0];
			sscanf($field, '%[^.].%[^.]', $table, $field);
			$where = array($field => $str);
			if($key != '' && $val != '') $where[$key.' !='] = $val;
			if(isset($this->db)){
				if($this->db->limit(1)->get_where($table, $where)->num_rows() !== 0){ 
					$this->form_validation->set_message('is_unique', 'The {field} field value is already exists in database.');
					return FALSE;
				}
			}
			return TRUE;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function valid_date($dt='') 
	{
		try { 
			$today = date("Y-m-d");
			if ($dt < $today)
			{
				$this->form_validation->set_message('valid_date', 'The {field} field must be today or future date.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function valid_time($time='') 
	{
		try { 
			$date = $this->input->post('book_date');
	   		
			$current_date = date('Y-m-d');
			$current_time = time();
			$current_date_time = strtotime($current_date).$current_time;
			$date_time = strtotime($date).strtotime($time);

			if ($date_time < $current_date_time)
			{
				$this->form_validation->set_message('valid_time', 'The {field} field must be greater than current time.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function valid_b_date($dt='') 
	{
		try { 
			$today = date("Y-m-d");
			if ($today < $dt)
			{
				$this->form_validation->set_message('valid_b_date', 'The {field} field must be today or Past date.');
				return false;
			}
			return true;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function alpha_num_only($str){
		try { 
		    if (! preg_match('/^[a-zA-Z0-9]+$/', $str)) {
		        	$this->form_validation->set_message('alpha_num_only', 'The %s field may only contain alpha characters & number');
		        return FALSE;
		    } else if (is_numeric($str)){
				$this->form_validation->set_message('alpha_num_only', 'The {field} field cannot be number.');
				return false;
			}else{
	       		return TRUE;
		    }
	    } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function not_num_only($str){
		try { 
			if (is_numeric($str)){
				$this->form_validation->set_message('not_num_only', 'The {field} field cannot be number.');
				return false;
			}else{
	       		return TRUE;
		    }
	    } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function valid_package_price($str){
		try { 
			$flag = $this->input->post('greater_packge_price');
			if (empty($flag)){
				$this->form_validation->set_message('valid_package_price', 'The Final price should not greater than Calculated price .');
				return false;
			}else{
	       		return TRUE;
		    }
	    } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	public function valid_amount_paid($str){
		try { 
			$flag = $this->input->post('greatere_price');
			if (!empty($flag)){
				$this->form_validation->set_message('valid_amount_paid', 'The payment should not greater than remain payment.');
				return false;
			}else{
	       		return TRUE;
		    }
	    } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
}

class Admin_Controller extends MY_Controller {

	protected $userdata = '';
	protected $useraccess = '';
	protected $orgconfigdata = '';
	
	function __construct(){
        parent::__construct();
		$this->load->model('Admin_model');
		$this->input->cookie('login_token_adm', TRUE);
		if($this->session->userdata('userdata_adm') == ''){
			$login_token_adm = get_cookie('login_token_adm');
			if($login_token_adm != '') $this->loginMe();
		}
		$this->userdata = $this->session->userdata('userdata_adm');
		$this->orgconfigdata = $this->session->userdata('orgconfigdata_adm');

		if(!empty($this->userdata) && $this->orgconfigdata != ''){
			
			$this->orgconfigdata = $this->Admin_model->getRow('hrm_config','*',['where'=>['org_id'=>$this->orgconfigdata->org_id]]);
			$this->session->set_userdata('orgconfigdata_adm', $this->orgconfigdata);
			
			//$conditions['where'] = array(			
			//	'ls.user_username'=>$this->userdata->user_username,			
			//	'ls.user_password'=>$this->userdata->user_password,
			//	'ls.status' =>'ACTIVE',
			//	'ls.is_deleted'=>'NO');
				
			//$conditions['join'] = [['hrm_role lr', 'ls.role_id = lr.role_id', 'left']];
			//$this->userdata = $this->Admin_model->getRow('hrm_user ls', 'ls.*,lr.role_name,lr.role_widget', $conditions);
			//$this->session->set_userdata('userdata_adm', $this->userdata);

			$access_result = $this->Admin_model->getRows('hrm_user_role_access ra', 'sa.access_url', ['join'=>[['hrm_access sa',"ra.access_id = sa.access_id and sa.status = 'ACTIVE' and sa.is_deleted = 'NO'",'left']],'where'=>['ra.status'=>'ACTIVE','ra.is_deleted'=>'NO','ra.role_id'=>$this->userdata->role_id]]);
				
			if(!empty($access_result)){
				foreach($access_result as $row){
					$useraccess[] = $row->access_url;
				}
				$this->useraccess = array_unique($useraccess);
				$this->session->set_userdata('useraccess_adm', $this->useraccess);
			}
		}
	}
	
	public function loginMe(){
		try { 
			$login_token_adm = get_cookie('login_token_adm');
			$conditions['where'] = array(			
				'login_token'=>$login_token_adm,
				'status'=>'ACTIVE',
				'is_deleted'=>'NO'				    
			);
			$conditions['join'] = [['hrm_role lr', 'ls.role_id = lr.role_id', 'left']];
			$result = $this->Admin_model->getRow('hrm_user ls', 'ls.*,lr.role_name,lr.role_widget', $conditions);
			if(!empty($result))
			{ 
				$cookie = array(
					'name'   => 'login_token_adm',
					'value'  => $login_token_adm,
					'expire' => 7*24*60*60,  // One week
					'domain' => COOKIE_DOMAIN,
					'path'   => '/'
				);
				set_cookie($cookie);
				$this->session->set_userdata('userdata_adm', $result);
				$config_result = $this->Admin_model->getRow('hrm_config','*',['where'=>['org_id'=>'1']]);
				if(!empty($config_result)) $this->session->set_userdata('orgconfigdata_adm', $config_result);
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function destroy_session()
	{
		$this->session->unset_userdata('userdata_adm');
		$this->session->unset_userdata('useraccess_adm');
		$this->session->unset_userdata('orgconfigdata_adm');
		delete_cookie('login_token_adm', COOKIE_DOMAIN, '/');
	}
	
	public function gen_uid($table,$field)
	{
		try { 
			$uid = $this->gen_token();
			$uid_count = $this->Admin_model->getCount($table,[$field=>$uid]);
			if($uid_count > 0) return $this->gen_uid($table,$field);
			return $uid; 
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function check_login_token()
	{
		try { 
			$result = $this->Admin_model->getRow('hrm_user', '*', ['where'=>['user_username'=>$this->userdata->user_username]]);
			if(!empty($result)){
				if($result->login_token == $this->userdata->login_token){
					return true;
				}
			}
			return false;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function isLogin()
	{
		try { 
			$user_id = (isset($this->userdata->user_id)) ? $this->userdata->user_id : '';
			if($user_id == '' || $this->check_login_token() == false){ 	
				$this->destroy_session();
				redirect(base_url('admin/login'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function checkLogin()
	{
		try { 
			$user_id = (isset($this->userdata->user_id)) ? $this->userdata->user_id : '';
			if($user_id != ''){ 
				if($this->check_login_token() == true)
					redirect(base_url('admin/dashboard'));
				else redirect(base_url('admin/logout'));
			}
			//else redirect(base_url('admin/login'));
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function hasAccess($url){
		try { 
			if(!empty($this->useraccess) && in_array($url,$this->useraccess)) return true;
			redirect(base_url('admin/no_access'));
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function check_access($url){
		try { 
			if(!empty($this->useraccess) && in_array($url,$this->useraccess)) return true;
			return false;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	function addActivity($activity = '',$db = ''){
		try { 
			$activityInfo = array("activity" => $activity, "remote_ip"=>$this->input->ip_address(), "user_agent"=>$this->getBrowserAgent(), "platform"=>$this->agent->platform());
			$table = ($db == '') ? 'hrm_user_activity_log' : $db.'.hrm_user_activity_log';
	        $this->Admin_model->add($table,$activityInfo);
        } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function loadViews($viewName = "", $pageInfo = NULL){
		try { 
			$pageInfo['userdata'] = (!empty($this->userdata)) ? $this->userdata : [];
			$pageInfo['useraccess'] = (!empty($this->useraccess)) ? $this->useraccess : [];
			$pageInfo['orgconfigdata'] = (!empty($this->orgconfigdata)) ? $this->orgconfigdata : [];
			$activity = $this->Admin_model->getRows('hrm_user_activity_log', '*', ['where'=>['created_by'=>$this->userdata->user_id],'order_by'=>['id','desc'],'limit'=>'10']);
			$pageInfo['activity'] = (!empty($activity)) ? $activity : [];

			$activity_count = $this->Admin_model->getRows('hrm_user_activity_log', '*', ['where'=>['is_seen'=>'NO','created_by'=>$this->userdata->user_id]]);
			$pageInfo['activity_count'] = (!empty($activity_count)) ? $activity_count : [];
			
// 			$pageInfo['config_data'] = json_decode(file_get_contents(base_url('assets/config/config.json')));

			$pageInfo['sidebar_nav'] = get_cookie('sidebar_nav');
			$pageInfo['full_screen'] = get_cookie('full_screen');
			$pageInfo['login_token_adm'] = get_cookie('login_token_adm');
			$this->load->vars($pageInfo);
			$this->load->view('admin/theme/header');
			// $this->load->view('admin/theme/sidebar');
			$this->load->view('admin/'.$viewName);
			$this->load->view('admin/theme/footer');
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
}

class Staff_Controller extends MY_Controller {

	protected $userdata = '';
	protected $useraccess = '';
	protected $orgconfigdata = '';
	
	function __construct(){
        parent::__construct();
		$this->load->model('Staff_model');
		$this->input->cookie('login_token_stf', TRUE);
		if($this->session->userdata('userdata_stf') == ''){
			$login_token_stf = get_cookie('login_token_stf');
			if($login_token_stf != '') $this->loginMe();
		}
		$this->userdata = $this->session->userdata('userdata_stf');
		$this->orgconfigdata = $this->session->userdata('orgconfigdata_stf');

		if(!empty($this->userdata) && $this->orgconfigdata != ''){
			
			$this->orgconfigdata = $this->Staff_model->getRow('hrm_config','*',['where'=>['org_id'=>$this->orgconfigdata->org_id]]);
			$this->session->set_userdata('orgconfigdata_stf', $this->orgconfigdata);
			
			/*$access_result = $this->Staff_model->getRows('hrm_user_role_access ra', 'sa.access_url', ['join'=>[['hrm_access sa',"ra.access_id = sa.access_id and sa.status = 'ACTIVE' and sa.is_deleted = 'NO'",'left']],'where'=>['ra.status'=>'ACTIVE','ra.is_deleted'=>'NO','ra.role_id'=>$this->userdata->role_id]]);
				
			if(!empty($access_result)){
				foreach($access_result as $row){
					$useraccess[] = $row->access_url;
				}
				$this->useraccess = array_unique($useraccess);
				$this->session->set_userdata('useraccess_stf', $this->useraccess);
			}*/
		}
	}
	
	public function loginMe(){
		try { 
			$login_token_stf = get_cookie('login_token_stf');
			$conditions['where'] = array(			
				'login_token'=>$login_token_stf,
				'status'=>'ACTIVE',
				'is_deleted'=>'NO'				    
			);
			//$conditions['join'] = [['hrm_role lr', 'ls.role_id = lr.role_id', 'left']];
			$result = $this->Staff_model->getRow('hrm_employee ls', 'ls.*', $conditions);
			if(!empty($result))
			{ 
				$cookie = array(
					'name'   => 'login_token_stf',
					'value'  => $login_token_stf,
					'expire' => 7*24*60*60,  // One week
					'domain' => COOKIE_DOMAIN,
					'path'   => '/'
				);
				set_cookie($cookie);
				$this->session->set_userdata('userdata_stf', $result);
				$config_result = $this->Staff_model->getRow('hrm_config','*',['where'=>['org_id'=>'1']]);
				if(!empty($config_result)) $this->session->set_userdata('orgconfigdata_stf', $config_result);
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function destroy_session()
	{
		$this->session->unset_userdata('userdata_stf');
		$this->session->unset_userdata('useraccess_stf');
		$this->session->unset_userdata('orgconfigdata_stf');
		delete_cookie('login_token_stf', COOKIE_DOMAIN, '/');
	}
	
	public function gen_uid($table,$field)
	{
		try { 
			$uid = $this->gen_token();
			$uid_count = $this->Staff_model->getCount($table,[$field=>$uid]);
			if($uid_count > 0) return $this->gen_uid($table,$field);
			return $uid; 
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function check_login_token()
	{
		try { 
			$result = $this->Staff_model->getRow('hrm_employee', '*', ['where'=>['employee_username'=>$this->userdata->employee_username]]);
			if(!empty($result)){
				if($result->login_token == $this->userdata->login_token){
					return true;
				}
			}
			return false;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function isLogin()
	{
		try { 
			$employee_id = (isset($this->userdata->employee_id)) ? $this->userdata->employee_id : '';
			if($employee_id == '' || $this->check_login_token() == false){ 	
				$this->destroy_session();
				redirect(base_url('staff/login'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function checkLogin()
	{
		try { 
			$employee_id = (isset($this->userdata->employee_id)) ? $this->userdata->employee_id : '';
			if($employee_id != ''){ 
				if($this->check_login_token() == true)
					redirect(base_url('staff/dashboard'));
				else redirect(base_url('staff/logout'));
			}
			//else redirect(base_url('staff/login'));
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function hasAccess($url){
		try { 
			if(!empty($this->useraccess) && in_array($url,$this->useraccess)) return true;
			redirect(base_url('admin/no_access'));
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function check_access($url){
		try { 
			if(!empty($this->useraccess) && in_array($url,$this->useraccess)) return true;
			return false;
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	function addActivity($activity = '',$db = ''){
		try { 
			$activityInfo = array("activity" => $activity, "remote_ip"=>$this->input->ip_address(), "user_agent"=>$this->getBrowserAgent(), "platform"=>$this->agent->platform());
			$table = ($db == '') ? 'hrm_employee_activity_log' : $db.'.hrm_employee_activity_log';
	        $this->Staff_model->add($table,$activityInfo);
        } catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function loadViews($viewName = "", $pageInfo = NULL){
		try { 
			$pageInfo['userdata'] = (!empty($this->userdata)) ? $this->userdata : [];
			$pageInfo['useraccess'] = (!empty($this->useraccess)) ? $this->useraccess : [];
			$pageInfo['orgconfigdata'] = (!empty($this->orgconfigdata)) ? $this->orgconfigdata : [];
			$activity = $this->Staff_model->getRows('hrm_employee_activity_log', '*', ['where'=>['created_by'=>$this->userdata->employee_id],'order_by'=>['id','desc'],'limit'=>'10']);
			$pageInfo['activity'] = (!empty($activity)) ? $activity : [];

			$activity_count = $this->Staff_model->getRows('hrm_employee_activity_log', '*', ['where'=>['is_seen'=>'NO','created_by'=>$this->userdata->employee_id]]);
			$pageInfo['activity_count'] = (!empty($activity_count)) ? $activity_count : [];
			
			$pageInfo['config_data'] = json_decode(file_get_contents(base_url('assets/config/config.json')));

			$pageInfo['sidebar_nav'] = get_cookie('sidebar_nav');
			$pageInfo['full_screen'] = get_cookie('full_screen');
			$pageInfo['login_token_stf'] = get_cookie('login_token_stf');
			$this->load->vars($pageInfo);
			$this->load->view('staff/theme/header');
			// $this->load->view('staff/theme/sidebar');
			$this->load->view('staff/'.$viewName);
			$this->load->view('staff/theme/footer');
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
}