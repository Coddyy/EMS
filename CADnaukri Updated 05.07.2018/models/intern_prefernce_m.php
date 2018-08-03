<?php
class Intern_prefernce_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'intern_prefer';
	protected $_order_by = 'id';
   
    function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		
	}
	public function get_new()
	{
		$intern_pre_details = new stdClass();
		$intern_pre_details->internId='';
		$intern_pre_details->industrytype='';
		//$intern_pre_details->mName='';
		$intern_pre_details->pLocation='';
		return $intern_pre_details;
	}
	
}