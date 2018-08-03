<?php
class Candidate_functional_area_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'candidate_functional_area';
	protected $_order_by = 'id';
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$functional_area = new stdClass();
		$functional_area->user_id='';
		$functional_area->functional_area_id='';
		return $functional_area;
	}
	public function delete_batch($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete('candidate_functional_area');
	}
	public function custom_insert_batch($sql=NULL)
	{
		$query = $this->db->query($sql);
	
	}
}