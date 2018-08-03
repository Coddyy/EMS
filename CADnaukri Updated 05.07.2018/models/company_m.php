<?php
class Company_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'company';
	protected $_order_by = 'id';
	
	public $password_reset_rule = array(
				'password' => array('field'=>'password','label'=>'New Password', 'rules'=>'trim|required'),
				'cpassword' => array('field'=>'cpassword','label'=>'Confirm Password', 'rules'=>'trim|required|matches[password]')
				);		
	function __construct()
	{
		parent::__construct();
	}
   function jobdata($userId)
   {
               $this->db->select('job.id,job.jobtitle,job.yop,job.location,job.minsal,job.maxsal,job.description,job.skills,job.lastdate,company.name');
               $this->db->from('job');
               $this->db->join('employer','job.userId = employer.id');
			   $this->db->join('company','job.companyId = company.id');
			   $this->db->where('employer.id', $userId); 
               $this->db->where('job.isActive', 1);
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
  } 
  public function get_new()
  {
		$company = new stdClass ();
		$company->name = '';
		$company->tagline = '';
		$company->teamsize = '';
		$company->regdoffc = '';
		$company->address = '';
		$company->website = '';
		$company->phno = '';
		$company->mobile = '';
		$company->email = '';
		$company->logo = '';
		$company->coverimage = '';
		$company->description = '';
		$company->facebook = '';
		$company->linkedin = '';
		$company->twitter = '';
		$company->google = '';
		$company->rating = '';
		$company->isActive = '';
		$company->isMobile = '';
		$company->isEmail = '';
		return $company;
	}

}