<?php
class Internship_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'internsip';
	protected $_order_by = 'id';
	
	public $password_reset_rule = array(
				'password' => array('field'=>'password','label'=>'New Password', 'rules'=>'trim|required'),
				'cpassword' => array('field'=>'cpassword','label'=>'Confirm Password', 'rules'=>'trim|required|matches[password]')
				
				);
				
			
	function __construct()
	{
		parent::__construct();
	}
	public function get_new()
	{
		$internship = new stdClass ();
		$internship->userid = '';
		$internship->title = '';
		$internship->description = '';
		$internship->whocanapply = '';
		$internship->noofintership = '';
		$internship->companyId = '';
		$internship->location = '';
		$internship->startDate = '';
		$internship->duration = '';
		$internship->stipend = '';
		$internship->endDate = '';
		$internship->isActive = '';
		return $internship;
	}
	public function internship_details($emp_id)
	{
		$sql="SELECT internsip.`id` as intern_id,`title`,`startDate`,`duration`, 
			`endDate`,`company`.id,`company`.userId 
		   FROM `internsip`,`company` where `internsip`.companyId = `company`.id and `company`.userId='$emp_id'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();exit;
		if($query)
		{
			$result = $query->result();
			return $result;
		}
		else
		{
			return false;
		}
	}
	public function hotlisted_internships()
	{
		$sql="SELECT title,internsip.location AS location,endDate,company.name AS company_name,internsip.id AS internship_id FROM internsip 
				LEFT JOIN company ON company.id=internsip.companyId 
				LEFT JOIN employer ON company.userid=employer.id 
				WHERE internsip.is_featured='1' 
				AND internsip.status='1' 
				GROUP BY internsip.title 
				ORDER BY internsip.created DESC
				LIMIT 4";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();exit;
		if($query)
		{
			$result = $query->result();
			//var_dump($result);exit();
			return $result;
		}
		else
		{
			return false;
		}
	}
	public function internships($emp_id=NULL)
	{
		//echo $emp_id;exit();
		$sql="SELECT title,internsip.location AS location,endDate,company.name AS company_name,internsip.id AS internship_id,internsip.created FROM internsip 
				LEFT JOIN company ON company.id=internsip.companyId 
				LEFT JOIN employer ON company.userid=employer.id 
				LEFT JOIN internship_apply ON internship_apply.internship_id=internsip.id 
				WHERE internsip.status='1' ";
		if($emp_id != NULL)
		{
			//echo $emp_id;exit();
			$sql.="AND internsip.userid='$emp_id' ";
		}
		$sql.="GROUP BY internsip.title 
			ORDER BY internsip.created DESC";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();exit;
		if($query)
		{
			$result = $query->result();
			//var_dump($result);exit();
			return $result;
		}
		else
		{
			return false;
		}
	}
	public function get_applied_intern($internship_id)
	{
		$sql="SELECT intern.name,internship_apply.created,intern.cvpath FROM intern 
		LEFT JOIN internship_apply ON intern.id=internship_apply.intern_id 
		WHERE internship_apply.internship_id='$internship_id' 
		ORDER BY internship_apply.created DESC;";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
}