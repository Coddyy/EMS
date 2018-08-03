<?php
class Education_details_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'edudetails';
	protected $_order_by = 'id';
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$edu_details = new stdClass();
		$edu_details->qualification='';
		$edu_details->board='';
		$edu_details->institute='';
		$edu_details->subject='';
		$edu_details->passingYear='';
		$edu_details->markSecured='';
		$edu_details->specialization='';
		$edu_details->percenatge='';
		return $edu_details;
	}
   public function delete_batch($user_id)
   {
	   	$this->db->where('userId', $user_id);
	   	$this->db->delete('edudetails');
   }
}