<?php
class Experience_details_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'expdetails';
	protected $_order_by = 'id';
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$exp = new stdClass();
		$exp->userId='';
		$exp->company='';
		$exp->designation='';
		$exp->from='';
		$exp->to='';
		$exp->ctc='';
		return $exp;
	}
	public function delete_batch($user_id)
	{
		$this->db->where('userId', $user_id);
		$this->db->delete('expdetails');
	}
}