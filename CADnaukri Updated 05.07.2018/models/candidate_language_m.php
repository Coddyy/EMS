<?php
class Candidate_language_M extends MY_Model
{
	protected $_primary_key = 'id';
	protected $_table_name = 'candidate_language';
	protected $_order_by = 'id';

	
	function __construct()
	{
		parent::__construct();
	}
	public function delete_batch($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete('candidate_language');
	}
}