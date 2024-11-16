<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->isLogin();
	}
	
	public function index()
	{	
		try {
			

			 
			if($this->input->get('show_all') !== NULL){
				$this->userdata->user_widget = $this->userdata->role_widget;
				$result = $this->Admin_model->edit('hrm_user', ['user_widget'=>$this->userdata->role_widget], ['user_id'=>$this->userdata->user_id]);
				if($result){
					$this->addActivity('Reset User Widgets');
					$this->session->set_flashdata('success_msg', 'User widgets reset successfully.');
				}else{
					$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
				}
			}
			$data['role_widgets'] = ($this->userdata->user_widget != '') ? explode(",",$this->userdata->role_widget) : explode(",",$this->userdata->role_widget);
			$data['total_users'] = (in_array(1,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_user',['where'=>['is_deleted'=>'NO']]) : 0;
			$data['active_users'] = (in_array(1,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_user',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]) : 0;
			$data['inactive_users'] = (in_array(1,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_user',['where'=>['status'=>'INACTIVE','is_deleted'=>'NO']]) : 0;

			$data['total_user_roles'] = (in_array(2,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_role',['where'=>['is_deleted'=>'NO']]) : 0;
			$data['active_user_roles'] = (in_array(2,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_role',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]) : 0;
			$data['inactive_user_roles'] = (in_array(2,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_role',['where'=>['status'=>'INACTIVE','is_deleted'=>'NO']]) : 0;

			$data['total_user_access'] = (in_array(3,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_access',['where'=>['is_deleted'=>'NO']]) : 0;
			$data['active_user_access'] = (in_array(3,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_access',['where'=>['status'=>'ACTIVE','is_deleted'=>'NO']]) : 0;
			$data['inactive_user_access'] = (in_array(3,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_access',['where'=>['status'=>'INACTIVE','is_deleted'=>'NO']]) : 0;

			$data['loged_in_users'] = (in_array(4,$data['role_widgets'])) ? $this->Admin_model->getCount('hrm_user',['where'=>['is_loggedin'=>'YES']]) : 0;
			
		   	$data['top_rankers'] = (in_array(5,$data['role_widgets'])) ? $this->Admin_model->getRows('hrm_emp_eval ev',"ev.*,em.employee_name",['join'=>[['hrm_employee em','ev.employee_id = em.employee_id','inner']],'where'=>['ev.month'=>'September','ev.year'=>'2020','ev.rank >'=>'0'],'group_by'=>'ev.employee_id','order_by'=>['ev.rank','desc'],'limit'=>'3']) : 0;
			
			$over_dues_details = $this->Admin_model->getRows('hrm_task ts',"ts.manager_id,us.user_name as monitoring",['join'=>[['hrm_user us','us.user_id = ts.manager_id','left']],'where_not_in'=>['ts.status'=>['COMPLETED','CLOSED']],'where'=>['ts.actual_closing_date != '=>'NULL','DATEDIFF(ts.actual_closing_date,ts.estimated_closing_date) >= '=>'1','ts.is_deleted'=>'NO'],'group_by'=>'ts.manager_id','order_by'=>['ts.manager_id','desc']]);
            
		
			if($this->userdata->role_name=='Admin'){
			    $due_details = array();
			    if(!empty($over_dues_details)){
			    foreach($over_dues_details as $ovalue){
			       $due_details[]=array(
			           'task_count' => $this->Admin_model->getCount('hrm_task',['where_not_in'=>['status'=>['COMPLETED','CLOSED']],'where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','manager_id' =>$ovalue->manager_id]]),
			           'staff_name' => $ovalue->monitoring,
			           );
			    } }
			    $data['due_details'] = $due_details;
    			$data['overdues'] = $this->Admin_model->getCount('hrm_task',['where_not_in'=>['status'=>['COMPLETED','CLOSED']],'where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO']]);
    			$data['opened'] =$this->Admin_model->getCount('hrm_task',['where'=>['status'=>'OPENED']]) ;
    			$data['hold'] =$this->Admin_model->getCount('hrm_task',['where'=>['status'=>'HOLD']]) ;
    			$data['followup'] =$this->Admin_model->getCount('hrm_task',['where'=>['status'=>'FOLLOWUP']]) ;
    			$data['completed'] =$this->Admin_model->getCount('hrm_task',['where'=>['status'=>'COMPLETED']]) ;
    			$data['close'] =$this->Admin_model->getCount('hrm_task',['where'=>['status'=>'CLOSED']]) ;
    			
    			$data['close_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL', 'DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'CLOSED']]);
    			$data['opened_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'OPENED']]);
    			$data['hold_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'HOLD']]);
    			$data['followup_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'FOLLOWUP']]);
    			$data['completed_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'COMPLETED']]);
    			$data['totaltask'] = $this->Admin_model->getCount('hrm_task','') ;
			    
			}else if($this->userdata->status=='ACTIVE' && $this->userdata->is_deleted=='NO'){
			    
		        $data['overdues'] = $this->Admin_model->getCount('hrm_task',['where_not_in'=>['status'=>['COMPLETED','CLOSED']],'where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','manager_id'=>$this->userdata->user_id]]);
    			$data['opened'] = $this->Admin_model->getCount('hrm_task',['where'=>['status'=>'OPENED','manager_id'=>$this->userdata->user_id]]) ;
    			$data['hold'] = $this->Admin_model->getCount('hrm_task',['where'=>['status'=>'HOLD','manager_id'=>$this->userdata->user_id]]) ;
    			$data['followup'] = $this->Admin_model->getCount('hrm_task',['where'=>['status'=>'FOLLOWUP','manager_id'=>$this->userdata->user_id]]) ;
    			$data['completed'] = $this->Admin_model->getCount('hrm_task',['where'=>['status'=>'COMPLETED','manager_id'=>$this->userdata->user_id]]) ;
    			$data['close'] = $this->Admin_model->getCount('hrm_task',['where'=>['status'=>'CLOSED','manager_id'=>$this->userdata->user_id]]) ;
    			
    			$data['close_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'CLOSED','manager_id'=>$this->userdata->user_id]]);
    			$data['opened_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'OPENED','manager_id'=>$this->userdata->user_id]]);
    			$data['hold_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'HOLD','manager_id'=>$this->userdata->user_id]]);
    			$data['followup_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'FOLLOWUP','manager_id'=>$this->userdata->user_id]]);
    			$data['completed_overdues'] = $this->Admin_model->getCount('hrm_task',['where'=>['actual_closing_date != '=>'NULL','DATEDIFF(actual_closing_date,estimated_closing_date) >= '=>'1','is_deleted'=>'NO','status'=>'COMPLETED','manager_id'=>$this->userdata->user_id]]);
    			$data['totaltask'] =$this->Admin_model->getCount('hrm_task',['where'=>['manager_id'=>$this->userdata->user_id]]) ;	    
			}
			$curr_yr = date('Y');
			$curr_mo = date('F');
			$last_month = date('F', strtotime($curr_mo . " last month"));
			$last_month_yr = ($last_month == 'December') ? $curr_yr - 1 : $curr_yr;
			$data['last_month'] = $last_month;
			$data['last_month_yr'] = $last_month_yr;
			$data['pageTitle'] = 'Dashboard';
			$this->loadViews('home/dashboard',$data);
		} catch (Exception $e) {
			log_message('error ',$e->getMessage());
			return;
		}
	}


	public function alert_data()
	{
		// $work_order_id  = $this->input->post('work_order_id');
		// $conditions['where'] = ['acm.work_order_id' => $work_order_id];
		$st_date=strtotime('today');
		$ed_date=strtotime("+2 days");
		$s_date = date("Y-m-d",$st_date);
		$end_date = date("Y-m-d",$ed_date);

		// print_r($s_date);
		// print_r($end_date);exit;

		$conditions['where'] = ['acm.comp_date >='=> $s_date,'acm.comp_date <='=> $end_date];
		$conditions['join'] = [['activity_closing_master acm', "taa.time_assign_activity_id = acm.time_assign_activity_id", 'left'],
		['work_order wo', "taa.work_order_id = wo.work_order_id", 'left'],
		['customer_masters cm', "wo.customer_id = cm.customer_id", 'left'],
		['department_master dm', "taa.department_id = dm.department_id", 'left']];

		$data = $this->Admin_model->getRows('time_assign_activity taa','taa.*,acm.*,wo.work_order_date,wo.work_order_no,wo.customer_id,cm.customer_name,dm.department_name',$conditions);
			
	

		$result['data'] = $data;
	
		echo json_encode($result);


	}



public function mail()

	{

	$config = Array(
	'protocol' => 'smtp',
			'smtp_host' => 'https://5.9.111.147:8090',
			'smtp_port' => 25,
			'smtp_user' => 'Arcelor',
			'smtp_pass' => 'oMjeHdCC9logmmtw',
			'mailtype'  => 'html',
			'charset' => 'utf-8',
			'wordwrap' => TRUE
		);
	
	$this->load->library('email',$config);
	$this->email->from('orbital@orbitalsystems.arcelorstudio.live', 'Support');
	$this->email->to('sandeshlondhe111@gmail.com');
	$this->email->cc('');
	$this->email->bcc('');
	
	$this->email->subject('Test');
	$this->email->message('This is a test email');
	
	if ( ! $this->email->send())
	{
		
		echo "Email is not sent!!";
	}
	
	
}


}