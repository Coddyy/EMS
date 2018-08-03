<?php

class Job_skill_M extends MY_Model 

{

	protected $_primary_key = 'id';

	protected $_table_name = 'job_skills';

	protected $_order_by = 'id';

	

	public $password_reset_rule = array(

				'password' => array('field'=>'password','label'=>'New Password', 'rules'=>'trim|required'),

				'cpassword' => array('field'=>'cpassword','label'=>'Confirm Password', 'rules'=>'trim|required|matches[password]')

				);		

	function __construct()

	{

		parent::__construct();

	}
	public function delete_batch($job_id)
	{
		$this->db->where('job_id', $job_id);
		$this->db->delete('job_skills');
	}
	public function get_skills_name($job_id)
	{
		$sql="SELECT name  FROM `job_skills`,`skills`
		where job_skills.skill_id=skills.id and job_skills.job_id=$job_id
		group by skills.name";
		$query=$this->db->query($sql);
	   return $query->result();
	}
	public function get_skills($job_id)
	{
		$sql="SELECT *  FROM `job_skills`,`skills`
		where job_skills.skill_id=skills.id and job_skills.job_id=$job_id and job_skills.is_internship='1' 
		group by skills.name";
		$query=$this->db->query($sql);
	   return $query->result();
	}
}