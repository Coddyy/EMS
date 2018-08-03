<?php
class Intern_edudetails_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'intern_edudetails';
	protected $_order_by = 'id';
    public $rule_login = array(
				'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email_id|xss_clean'),
				'password' => array('field'=>'password','label'=>'Password', 'rules'=>'trim|required')
				); 
	public $rule_forgot_password = array(
			'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email_id|xss_clean')); 
				
    function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		
	}
	public function get_new()
	{
		$intern_edu_details = new stdClass();
		$intern_edu_details->internId='';
		$intern_edu_details->institute='';
		//$intern_edu_details->mName='';
		$intern_edu_details->hometown='';
		$intern_edu_details->location_insti='';
		$intern_edu_details->degree='';
		$intern_edu_details->stream='';
		$intern_edu_details->current_year='';
		$intern_edu_details->gaduationyearr='';
		$intern_edu_details->performance_scale_pg='';
		$intern_edu_details->performance_pg='';
		$intern_edu_details->performance_scale_ug='';
		$intern_edu_details->performance_ug='';
		$intern_edu_details->twelve_percentage='';
		$intern_edu_details->ten_percentage='';
		return $intern_edu_details;
	}
	
}