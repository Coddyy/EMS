<?php
class Candiate_key_skills_M	 extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'candiate_key_skills';
	protected $_order_by = 'id';
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$key_skills = new stdClass();
		$key_skills->user_id='';
		$key_skills->key_id='';
		return $key_skills;
	}
	public function delete_batch($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete('candiate_key_skills');
	}
	public function custom_insert_batch($sql=NULL)
	{
		$query = $this->db->query($sql);

	}
}