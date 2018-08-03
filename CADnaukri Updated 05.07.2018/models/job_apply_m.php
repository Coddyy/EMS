<?php
class Job_apply_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'job_apply';
	protected $_order_by = 'id';
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	function job_appiled($emp_id)
	{
			$sql="SELECT job.jobtitle,company.name,job_apply.user_id candidate_id,job.id as job_id,
					job_apply.id as job_apply_id ,company.id as companyId
			FROM `job`,`job_apply`,`company`  
			where job.id=`job_apply` .job_id and `company`.id=job.companyId and `company`.userId=job.userId
			and job.userId=$emp_id group by job.id";
		$q=$this->db->query($sql);
		//echo $this->db->last_query();exit();
		return $q->result();
	}
	function get_applied_candidate($job_id)
	{
		$sql="SELECT candidate.id,candidate.name,candidate.email,candidate.mobile,candidate.location,candidate.cvpath,expdetails.experience FROM candidate,job,job_apply,expdetails WHERE job.id=job_apply.job_id AND job_apply.user_id=candidate.id AND job_apply.job_id='$job_id' AND candidate.deactive_profile='0' AND candidate.id=expdetails.userId GROUP BY candidate.name ORDER BY job_apply.created DESC;";
		$query=$this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
			return true;
		}
		else
		{
			return false;
		}
		//var_dump($query->num_rows());exit();
	}
	function get_job_name($job_id)
	{
		$sql="SELECT jobtitle FROM job WHERE id='$job_id';";
		$query=$this->db->query($sql);
		return $query->row()->jobtitle;
	}
	public function get_featured_jobs()
   	{
   		$sql="SELECT 
   		skills.name AS skill_name,
   		job.jobtitle,
   		job.location,
   		job.yop,
   		job.id AS job_id,
   		skills.id,
   		job.designation,
   		job_skills.skill_id,
   		company.userId,
   		company.name AS company_name 
   		FROM job,company,job_skills,skills 
   		WHERE job.id=job_skills.job_id 
   		AND job_skills.skill_id=skills.id 
   		AND job.id=company.userId 
   		AND job.is_feature='Y' 
   		GROUP BY job.jobtitle 
   		ORDER BY job.modified 
   		DESC 
   		LIMIT 3;";
   		$query=$this->db->query($sql);
   		return $query->result();
   	}
   	public function dashboard_search($skill,$experience,$location)
   	{
  		// echo $skill;
		// echo $experience;
		// echo $location;
		// exit();
		if($skill !="cad" && $skill != "CAD")
		{
	   		// $sql="SELECT 
	   		// skills.name AS skill_name,
	   		// job.jobtitle,
	   		// job.location,
	   		// job.yop,
	   		// job.id AS job_id,
	   		// job.designation,
	   		// skills.id,
	   		// job_skills.skill_id,
	   		// company.userId,
	   		// company.name AS company_name 
	   		// FROM job,company,job_skills,skills 
	   		// WHERE job.id=job_skills.job_id 
	   		// AND job_skills.skill_id=skills.id 
	   		// AND skills.name LIKE '%$skill%' 
	   		// AND (job.yop ='$experience' 
	   		// OR job.location ='$location') 
	   		// AND job.id=company.userId 
	   		// GROUP BY job.location;";
	   		// $query=$this->db->query($sql);
	   		// if($query->num_rows() > 0)
	   		// {
	   		// 	//var_dump($query->result());exit();
	   		// 	return $query->result();
	   		// }
	   		// else
	   		// {
	   		// 	return 0;
	   		// }







			$sql="SELECT 
	   		skills.name AS skill_name,
	   		job.jobtitle,
	   		job.location,
	   		job.yop,
	   		job.id AS job_id,
	   		job.designation,
	   		skills.id,
	   		job_skills.skill_id,
	   		company.userId,
	   		company.name AS company_name 
	   		FROM job,company,job_skills,skills 
	   		WHERE job.id=job_skills.job_id";

		if(($experience != "0") && ($location != "0"))
		{	   		
	   		$sql.=" AND job_skills.skill_id=skills.id 
	   		AND skills.name LIKE '%$skill%' 
	   		AND (job.yop ='$experience' 
	   		OR job.location ='$location') 
	   		AND job.id=company.userId ";
	   	}
	   	else if(($experience == "0") && ($location == "0"))
	   	{
	   		$sql.=" AND job_skills.skill_id=skills.id 
	   		AND skills.name LIKE '%$skill%' 
	   		AND job.id=company.userId";
	   	}
	   	else if(($experience != "0") && ($location == "0"))
	   	{
	   		$sql.=" AND job_skills.skill_id=skills.id 
	   		AND skills.name LIKE '%$skill%' 
	   		AND job.yop ='$experience' 
	   		AND job.id=company.userId";
	   	}
	   	else if(($experience == "0") && ($location != "0"))
	   	{
	   		$sql.=" AND job_skills.skill_id=skills.id 
	   		AND skills.name LIKE '%$skill%' 
	   		AND job.location ='$location' 
	   		AND job.id=company.userId";
	   	}
	   	$sql.=" GROUP BY job.location;";









	   		$query=$this->db->query($sql);
	   		if($query->num_rows() > 0)
	   		{
	   			//var_dump($query->result());exit();
	   			return $query->result();
	   		}
	   		else
	   		{
	   			return 0;
	   		}






	   	}
	   	else
   		{
   			return 0;
   		}
   		
   		//return $query->result();
   	}
}