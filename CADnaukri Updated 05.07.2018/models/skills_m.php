<?php

class Skills_M extends MY_Model 

{

	protected $_primary_key = 'id';

	protected $_table_name = 'skills';

	protected $_order_by = 'id';

	

	function __construct()

	{

		parent::__construct();

	}
	function skill_autocomplete()
	{
		$this->db->select('name as label,id');
		$this->db->from($this->_table_name);
		$q=$this->db->get();
		//echo $this->db->last_query();exit;
		return $q->result();
	}
	public function get_new()
	{
		$skill =new stdClass();
		$skill->name='';
		return $skill;
	}

}