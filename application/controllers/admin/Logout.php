<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->isLogin();
    }
	
	public function index()
	{	
		try { 
			if(!empty($this->userdata))
			{
				$this->addActivity('Logged Out');
				$this->Admin_model->edit('hrm_user', ['is_loggedin'=>'NO'], ['user_id'=>$this->userdata->user_id]);
				$this->destroy_session();
				redirect(base_url('admin'));
			}
			else
			{
				redirect(base_url('admin/login'));
			}
		} catch (Exception $e) {    
			log_message('error',$e->getMessage());
			return;
		}
	}
	
}