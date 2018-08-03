<?php
class Jobapply_M extends MY_Model
{
	protected $_primary_key = 'id';
	protected $_table_name = 'jobapply';
	protected $_order_by = 'id';

	
	function __construct()
	{
		parent::__construct();
	}
	public function job_appiled($emp_id)
	{
		$sql="SELECT jb.jobtitle,cp.name ,CONCAT(cd.fName,' ' ,cd.lName) as candidate_name,cd.id as candidate_id,
				cd.cvpath as cvpath,cd.cvname as cvname
				FROM `jobapply` as ja, `job` as jb,`company` as cp,`candidate` as cd
				WHERE ja.companyId=jb.companyId and jb.companyId=cp.id and ja.userId=cd.id and jb.userId=cp.userId
				and ja.userId='$emp_id' ";
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
}