<?php
class Candidate_industry_type_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'candidate_industry_type';
	protected $_order_by = 'id';
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$industry_type = new stdClass();
		$industry_type->user_id='';
		$industry_type->industry_type_id='';
		return $industry_type;
	}
	public function delete_batch($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete('candidate_industry_type');
	}
	public function custom_insert_batch($sql=NULL)
	{
		$query = $this->db->query($sql);
	
	}
}