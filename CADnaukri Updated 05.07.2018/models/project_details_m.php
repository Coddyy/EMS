<?php
class Project_details_M extends MY_Model 
{

	protected $_primary_key = 'id';
	protected $_table_name = 'projectdetails';
	protected $_order_by = 'id';
	function __construct()
	{
			parent::__construct();
	}
	public function get_new()
	{
		$project_details = new stdClass();
		$project_details->descrition='';
		$project_details->clientName='';
		$project_details->yearofexecution='';
		$project_details->clientLocation='';
		return $project_details;
	}
	public function delete_batch($user_id)
	{
		$this->db->where('userId', $user_id);
		$this->db->delete('projectdetails');
	}
}