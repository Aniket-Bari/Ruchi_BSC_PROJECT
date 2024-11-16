<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller {

	function __construct(){
        parent::__construct();
    }
	
	public function index()
	{
		try { 
			$this->checkLogin();
			
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[5]|max_length[32]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if($this->form_validation->run() == FALSE)
			{
				$data['segment3'] = $this->uri->segment(3);
				$data['pageTitle'] = 'Login';
				$this->load->view('admin/login/index',$data);
			}
			else
			{
				
				$conditions['where'] = array(			
					'ls.user_username'=>$this->input->post('username'),			
					'ls.user_password'=>$this->input->post('password'),//md5($this->input->post('password')),
					'ls.status' =>'ACTIVE',
					'ls.is_deleted'=>'NO');
					
				$conditions['join'] = [['hrm_role lr', 'ls.role_id = lr.role_id', 'left']];
				$result = $this->Admin_model->getRow('hrm_user ls', 'ls.*,lr.role_name,lr.role_widget', $conditions);
				if(!empty($result))
				{
					$result->login_token = $this->gen_token(10);
					if($this->input->post('remember') != ''){
						$cookie = array(
							'name'   => 'login_token_adm',
							'value'  => $result->login_token,
							'expire' => 7*24*60*60,  // One week
							'domain' => COOKIE_DOMAIN,
							'path'   => '/'
						);
						set_cookie($cookie);
					}
					$this->session->set_userdata('userdata_adm', $result);
					
					$config_result = $this->Admin_model->getRow('hrm_config','*',['where'=>['org_id'=>'1']]);
					if(!empty($config_result)) $this->session->set_userdata('orgconfigdata_adm', $config_result);
					$this->addActivity('Logged In');
					$this->Admin_model->edit('hrm_user ls', ['ls.is_loggedin'=>'YES','ls.login_token'=>$result->login_token], $conditions['where']);
					
					redirect(base_url('admin/dashboard'));					
				}
				else
				{
					$this->session->set_flashdata('error_msg', 'Invalid Credentials..');
				}
				redirect(base_url('admin/login'));				
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
	public function forget_password()
	{
		try { 
			$this->checkLogin();
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[5]|max_length[32]');
			
			if($this->form_validation->run() == FALSE)
			{
				$data['segment3'] = $this->uri->segment(3);
				$data['pageTitle'] = 'Forget Password';
				$this->load->view('admin/login/index',$data);
			}
			else
			{
				$username = $this->input->post('username');
				$result = $this->Admin_model->getRow('hrm_user', '*', ['where'=>['user_username'=>$username,'status'=>'ACTIVE','is_deleted'=>'NO']]);
				if(!empty($result))
				{
					if($result->otp_attempt == '3' && $result->otp_attempt_date == date('Y-m-d')){
						$this->session->set_flashdata('error_msg', 'Reached todays maximum attempts.');
					}else{
						$otp = mt_rand(100000,999999);
						$message=$otp. "is the OTP to reset your password for our services.";
 
						$sendSMS = false;
						if($result->user_phone != '')
						$sendSMS = $this->msg91->sendSMS($result->user_phone,$message);

						$d1 = array();
						$d1['email'] = $result->user_email;
						$d1['subject'] = "Forget password OTP";
						$d1['message'] = $message;

						if(sendMail($d1) || $sendSMS){
							$this->Admin_model->edit('hrm_user', ['user_otp'=>$otp], ['user_username'=>$username]);
							$this->session->set_flashdata("success_msg","OTP Send Successfully.");
							redirect(base_url('admin/login/otp_verify/'.urlencode($username)));
						}
						else{
							$this->session->set_flashdata('error_msg', 'currently we cant process..!, please try again...');
						}
					}
				}
				else
				{
					$this->session->set_flashdata('error_msg', 'Username is not valid, please try again.');
				}
				redirect(base_url('admin/login'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function otp_verify($username='')
	{
		try { 
			$this->form_validation->set_rules('user_otp','OTP','trim|required|numeric');
			
			$result = $this->Admin_model->getRow('hrm_user', '*', ['where'=>['user_username'=>urldecode($username)]]);
			if($result->otp_attempt_date != date('Y-m-d') ){
				$this->Admin_model->edit('hrm_user', ['otp_attempt'=> 0,'otp_attempt_date'=>date('Y-m-d')], ['user_username'=>urldecode($username)]);
			}

			if(empty($result)){
				$this->session->set_flashdata('error_msg', 'User not found, please try again.');
				redirect(base_url('admin/login'));
			}
			else if($this->form_validation->run() == FALSE)
			{ 
				if($result->otp_attempt < 3)
				{
					$data['segment3'] = $this->uri->segment(3);
					$data['username'] = $result->user_username;
					$data['otp_attempt'] = $result->otp_attempt;
					$data['pageTitle'] = 'OTP Verify';
					$this->load->view('admin/login/index',$data);
				}else{
					$this->session->set_flashdata('error_msg', 'Reached maximum attempts.');
					redirect(base_url('admin/login'));
				}
			}
			else{ 
				$user_otp = $this->input->post('user_otp'); 

				if($result->user_otp == $user_otp)
				{
					$this->Admin_model->edit('hrm_user', ['otp_attempt'=>0], ['user_username'=>urldecode($username)]);
					$this->session->set_flashdata('success_msg', 'OTP matched');
					redirect(base_url('admin/login/otp_password/'.$username.'/'.$user_otp));	
				}
				else 
				{
					$otp_attempt = $result->otp_attempt + 1;
					$this->Admin_model->edit('hrm_user', ['otp_attempt'=>$otp_attempt], ['user_username'=>urldecode($username)]);
					$this->session->set_flashdata('error_msg', 'OTP not matching.');
				}
				redirect(base_url('admin/login/otp_verify/'.$username));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}

	public function otp_password($username='',$user_otp='')
	{
		try { 
			$this->form_validation->set_rules('new_pwd', 'New Password', 'trim|required|callback_valid_password');
			$this->form_validation->set_rules('con_pwd', 'Confirm Password', 'trim|required|matches[new_pwd]');
			
			$result = $this->Admin_model->getRow('hrm_user', '*', ['where'=>['user_username'=>urldecode($username),'user_otp'=>$user_otp]]);
			
			if(empty($result)){
				$this->session->set_flashdata('error_msg', 'User not found, please try again.');
				redirect(base_url('admin/login'));
			}
			else if($this->form_validation->run() == FALSE)
			{
				$data['segment3'] = $this->uri->segment(3);
				$data['email_id'] = $username;
				$data['user_otp'] = $user_otp;
				$data['pageTitle'] = 'OTP Password';
				$this->load->view('admin/login/index',$data);	
			}else{
				$old_password = $result->user_password;
				$new_password = trim($this->input->post('new_pwd'));
				$con_password = trim($this->input->post('con_pwd'));
				$new_pwd = $new_password;//md5($new_password);
				$con_pwd = $con_password;//md5($con_password);
				$this->session->set_userdata('new_pwd', $new_password);
				$this->session->set_userdata('con_pwd', $con_password);

				if($new_pwd==$old_password)
				{
					$this->session->set_flashdata('error_msg', 'new password should be different than old password');
				}
				else 
				{
					$result_change_pwd = $this->Admin_model->edit('hrm_user', ['user_password'=>$new_pwd], ['user_username'=>$result->user_username]);
					if($result_change_pwd)
					{
						$this->session->unset_userdata('new_pwd');
						$this->session->unset_userdata('con_pwd');
						$this->Admin_model->edit('hrm_user', ['user_otp'=>'', 'otp_attempt'=>0], ['user_username'=>urldecode($username)]);
						$this->session->set_flashdata('success_msg', 'Password changed successfully.');
						redirect(base_url('admin/login'));
					}
					else
					{
						$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
					}
				}

				redirect(base_url('admin/login/otp_password/'.$username.'/'.$user_otp));	

			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
}