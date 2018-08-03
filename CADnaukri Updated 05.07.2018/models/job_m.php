<?php
class Job_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'job';
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
		$job = new stdClass ();
		$job->userId = '';
		$job->companyId = '';
		$job->jobtitle = '';
		$job->designation = '';
		$job->location = '';
		$job->qualification = '';	
		$job->yop = '';
		$job->lastdate = '';
		$job->skills = '';
		$job->description = '';
		$job->additionalSkills = '';
		$job->minsal = '';
		$job->maxsal = '';
	   $job->isActive = '';
	   $job->status = 'P';
	   $job->is_feature = 'N';
		return $job;
	}
	public function delete_batch($job_id)
	{
		$this->db->where('job_id', $job_id);
		$this->db->delete('job_skills');
	}
	public function get_job_tags($job_id)
	{
		$this->db->select('job_tag.name')
         ->from('job')
         ->join('job_tag', 'job.id = job_tag.job_id');
         $this->db->where('job.id',$job_id);
		$query = $this->db->get();
		if($query)
		{
			$result=$query->result();
			if($result)
			{
				$tags=array();
				foreach($result as $r)
				{
					array_push($tags,$r->name);
				}
				return $tags;
			}
		}
		return null;
	}
	public function get_active_jobs($is_feaure=NULL)
	{
		   $sql="SELECT job.*,GROUP_CONCAT(DISTINCT  skills.name SEPARATOR '|') all_skills,
		    GROUP_CONCAT(DISTINCT  job_tag.name SEPARATOR '|') all_job_tags
			FROM `job` 
			Left JOIN job_skills ON job.id = job_skills.job_id 
			Left JOIN job_tag ON job.id = job_tag.job_id 
			Left JOIN skills ON job_skills.skill_id = skills.id 
			where job.status='Y' AND job.is_obsolete='NO' 
			"; // " lastdate >= NOW() and "
		if($is_feaure != NULL)
		{
			$sql .=" and is_feature='Y'";
		}
		$sql .=" group by job.id order by job.modified DESC LIMIT 4";
		//echo $sql;exit();
		$query=$this->db->query($sql);
		if($query)
		{
			$result=$query->result();
			return $result;
		}
		return NULL;
		
	}
	public function check_job_status($id)
	{
		$sql="SELECT status FROM job WHERE status='Y' AND id='$id';";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_emp_email($job_id)
   {
   		$sql="SELECT employer.email FROM employer,job WHERE job.userId=employer.id AND job.id='$job_id';";
   		$query=$this->db->query($sql);
   		//var_dump($query->row()->email);exit();
   		return $query->row()->email;
   }
    public function get_job_name($job_id)
   {
   		$sql="SELECT jobtitle FROM job WHERE id='$job_id';";
   		$query=$this->db->query($sql);
   		//var_dump($query->row()->email);exit();
   		return $query->row()->jobtitle;
   }
   public function get_emp_name($job_id)
   {
   		$sql="SELECT employer.name FROM employer,job WHERE job.userId=employer.id AND job.id='$job_id';";
   		$query=$this->db->query($sql);
   		//var_dump($query->row()->email);exit();
   		return $query->row()->name;
   }
   public function countview($job_id)
   {
   		$sql="UPDATE job SET views = views +1 WHERE id ='$job_id';";
   		$query=$this->db->query($sql);
   }
   public function total_job_view($job_id)
   {
   		$sql="SELECT views FROM job WHERE id='$job_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->views;
   }
   public function total_job_application($job_id)
   {
   		$sql="SELECT id FROM job_apply WHERE job_id='$job_id';";
   		$query=$this->db->query($sql);
   		//var_dump($query->num_rows());exit();
   		if($query->num_rows() > 0)
   		{
   			return $query->num_rows();
   		}
   		else
   		{
   			return false;
   		}
   }
   public function search_by_city($city)
   {
   		$sql="SELECT * FROM job,job_skills,skills WHERE skills.id=job_skills.skill_id AND job.id=job_skills.job_id ";

         if($city == 'Rest-of-india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
         }
         else
         {
            $sql .="AND job.location = '$city' ";
         }
         
         $sql .="AND job.is_obsolete='NO' AND job.status='Y' GROUP BY job.jobtitle ORDER BY job.modified DESC;";
   		$query=$this->db->query($sql);
   		//var_dump($query->result());exit();
   		return $query->result();
   }
   public function check_approval($job_id)
   {
   		 $sql="SELECT id FROM job WHERE isActive='1' AND status='Y' AND id='$job_id';";
   		$query=$this->db->query($sql);
   		if($query->num_rows() == 1)
   		{
   			return true;
   		}
   		else
   		{
   			return false;
   		}
   }
   public function check_expiry($job_id)
   {
   		date_default_timezone_set('Asia/Kolkata');
   		$date=date('Y-m-d');
   		$sql="SELECT id FROM job WHERE lastdate < '$date' AND id='$job_id';";
   		$query=$this->db->query($sql);
   		if($query->num_rows() > 0)
   		{
   			return true;
   		}
   		else
   		{
   			return false;
   		}
   }
   public function save_job_alert($data)
   {
   		$success=$this->db->insert('job_alerts',$data);
   		if($success)
   		{
   			return true;
   		}
   		else
   		{
   			return false;
   		}
   }
   public function get_cad_jobs($city,$sort=NULL)
   {
      //echo "hello model";exit();
      //echo $city;
      // $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job_tag.name='CAD Jobs' ";

      // if($city != '' && $city != NULL)
      // {
      //    $sql .="AND job.location='$city' ";
      // }
      // $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      // $query=$this->db->query($sql);
      // return $query->result();
      // //var_dump($query->result());


      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='CAD Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
             $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";  
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function get_cae_jobs($city,$sort=NULL)
   {
      //echo "hello model";exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='CAE Jobs' ";
      // if($city != '' && $city != NULL) //Start Previous Code
      // {
      //    if($city == 'Rest_of_india')
      //    {
      //       //No query  
      //    }
      //    else
      //    {
      //       $sql .="AND job.location='$city' ";
      //    }
      // }
      // $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";  //END Previous Code
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
           if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') "; 
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
   public function get_cfd_jobs($city,$sort=NULL)
   {
      //echo "hello model";exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='CFD Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";  
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
   public function get_bim_jobs($city,$sort=NULL)
   {
      //echo "hello model";exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='BIM Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') "; 
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
   public function get_plm_jobs($city,$sort=NULL)
   {
      //echo "hello model";exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='PLM Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
   public function get_cad_sales_jobs($city,$sort)
   {
      //echo "hello model";exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='CAD Sales Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') "; 
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
   public function get_cad_developer_jobs($city,$sort)
   {
      //echo "hello model".$city;exit();
      $sql="SELECT * FROM job_tag,job WHERE job_tag.job_id=job.id AND job.is_obsolete='NO' AND job.status='Y' AND job_tag.name='CAD SoftwareDev.Jobs' ";
      if($sort != '' && $sort != NULL)
      {
         if($sort == 'exp_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop DESC;";
         }
         else if($sort == 'exp_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.yop ASC;";
         }
         else if($sort == 'sal_DESC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary DESC;";
         }
         else if($sort == 'sal_ASC')
         {
            if($city == 'Rest_of_india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
               $sql .="AND job.location='$city' ";
            }
            $sql .="GROUP BY job.jobtitle ORDER BY job.salary ASC;";
         }
      }
      else if($city != '' && $city != NULL)
      {
         if($city == 'Rest_of_india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";  
         }
         else
         {
            $sql .="AND job.location='$city' ";
         }
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      else
      {
         $sql .="GROUP BY job.jobtitle ORDER BY job.modified DESC;";
      }
      $query=$this->db->query($sql);
      return $query->result();
      //var_dump($query->result());
   }
    public function get_total_jobs()
   {
      $sql="SELECT id FROM job;";
      $query=$this->db->query($sql);
      return $query->num_rows();
   }
   public function get_city_matched_jobs($selected_city,$cron_num=NULL)
   {
      $sql="SELECT job.*,GROUP_CONCAT(DISTINCT  skills.name SEPARATOR '|') all_skills,
          GROUP_CONCAT(DISTINCT  job_tag.name SEPARATOR '|') all_job_tags
         FROM `job` 
         Left JOIN job_skills ON job.id = job_skills.job_id 
         Left JOIN job_tag ON job.id = job_tag.job_id 
         Left JOIN skills ON job_skills.skill_id = skills.id ";
         if($selected_city == 'Rest-of-india')
         {
            $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
         }
         else
         {
            $sql .="where job.location='$selected_city' ";
         }
         

         $sql .="AND job.is_obsolete='NO' AND job.status='Y' "; 


         // "lastdate >= NOW() and" [after WHERE clause]
      // if($is_feaure != NULL)
      // {
      //    $sql .=" and is_feature='Y'";
      // }
      $sql .=" group by job.id ";
      if($cron_num == NULL || $cron_num == '0' || $cron_num == '')
      {
         $sql .="order by job.modified DESC ";
      }
      else if($cron_num == 1)
      {
         $sql .="order by job.yop ASC ";
      }
      else if($cron_num == 2)
      {
         $sql .="order by job.yop DESC ";
      }
      else if($cron_num == 3)
      {
         $sql .="order by job.salary DESC ";
      }
      else if($cron_num == 4)
      {
         $sql .="order by job.salary ASC ";
      }
      

      $sql .="LIMIT 6;";
      //echo $sql;exit();
      $query=$this->db->query($sql);
      if($query)
      {
         $result=$query->result();
         return $result;
      }
      return NULL;
      
   }
   public function get_that_job($job_id)
   {
      $sql="SELECT * FROM job WHERE id='$job_id' AND is_obsolete='NO' AND status='Y';";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function save_this_job($data)
   {
      $this->db->insert('saved_jobs',$data);
   }
   public function update_obsolete_job_to_active()
   {
      $sql="UPDATE job SET is_obsolete='NO' WHERE status='Y';";
      $query=$this->db->query($sql);
   }

   public function save_job_profile($data)
   {
      $success=$this->db->insert('job',$data);
      if($success)
      {
         $job_id=$this->db->insert_id();
         //var_dump($job_id);exit();
         return $job_id;
      }
      else
      {
         echo "Job not inserted. Contact Developer Team";
      }
   }
   public function save_add_job_details($job_id,$data)
   {
      $this->db->where('id',$job_id);
      $this->db->update('job',$data);
   }
   public function save_qualification_details($job_id,$data)
   {
      $this->db->where('id',$job_id);
      $this->db->update('job',$data);
   }
   public function save_job_description($job_id,$data)
   {
      $this->db->where('id',$job_id);
      $this->db->update('job',$data);
   }
   public function save_job_submit($job_id,$data)
   {
      $this->db->where('id',$job_id);
      $this->db->update('job',$data);
   }
   public function get_all_job_tags($job_id)
   {
      $sql="SELECT name FROM job_tag WHERE job_id='$job_id';";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function get_cron_num()
   {
      $sql="SELECT rand_selection_cron FROM job LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row()->rand_selection_cron;
   }
   public function update_cron_num($cron_num)
   {
      $sql="UPDATE job SET rand_selection_cron='$cron_num';";
      $query=$this->db->query($sql);

   }
   public function add_pincode($data)
   {
      $success=$this->db->insert('pincode',$data);
      if($success)
      {
         return true;
      }
      else
      {
         return false;
      }
   }
   public function get_tags_name($job_id)
   {
      $sql="SELECT name FROM job_tag WHERE job_id='$job_id';";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function get_previous_searched_job_by_skill($skill_name)
   {
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
            WHERE job.id=job_skills.job_id 
            AND job_skills.skill_id=skills.id 
            AND skills.name LIKE '%$skill_name' 
            AND job.id=company.userId 
            AND job.status='Y' 
            AND job.is_obsolete='NO' 
            GROUP BY job.jobtitle 
            ORDER BY job.modified 
            DESC;";
            $query=$this->db->query($sql);
            if($query->num_rows() > 0)
            {
               //var_dump($query->result());exit();
               return $query->result();
            }
            else
            {
               return false;
            }
   }
   public function get_all_jobs()
   {
      //$sql="SELECT * FROM job WHERE status='Y' AND is_obsolete='NO' ORDER BY modified DESC;";
      $sql="SELECT 
            jobtitle, 
            location, 
            yop,is_feature, 
            id AS job_id, 
            designation 
            FROM job 
            WHERE job.status='Y' 
            AND job.is_obsolete='NO' 
            GROUP BY jobtitle 
            ORDER BY modified 
            DESC LIMIT 15;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      return $query->result();
   }
   public function job_is_featured($job_id)
   {
      $sql="SELECT id FROM job WHERE id='$job_id' AND is_feature='Y';";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      if($query->num_rows() == 1)
      {
         return true;
      }
      else
      {
         return false;
      }
      
   }
   public function get_jobs_by_skill($skill_name,$city)
   {
      $skill=str_replace('-',' ',$skill_name);
      // echo $city;
      // echo $skill;exit();
         $sql="SELECT 
            skills.name AS skill_name,
            job.jobtitle,
            job.location,
            job.yop,
            job.id AS job_id,
            job.designation,
            skills.id,
            job.lastdate,
            job.additionalSkills,
            job.modified,
            job_skills.skill_id 
            FROM job,job_skills,skills 
            WHERE job.id=job_skills.job_id 
            AND job_skills.skill_id=skills.id 
            AND skills.name LIKE '%$skill%' ";

            if($city == 'Rest-of-india')
            {
               $sql .="AND job.location NOT IN ('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneswar') ";
            }
            else
            {
                $sql .="AND job.location='$city' ";
            }
           

            $sql .="AND job.status='Y' 
            AND job.is_obsolete='NO' 
            GROUP BY job.jobtitle 
            ORDER BY job.modified 
            DESC;";
      //echo $sql;exit();
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      if($query->num_rows() > 0)
      {
         //var_dump($query->result());exit();
         $result=$query->result();
         return $result;
      }
      else
      {
         return false;
      }
      
      
   }







// ####################################  ON TRIAL ################################# //
   public function get_random_jobs()
   {
      $random=rand(1,4);
      $sql="SELECT job.*,GROUP_CONCAT(DISTINCT  skills.name SEPARATOR '|') all_skills,
          GROUP_CONCAT(DISTINCT  job_tag.name SEPARATOR '|') all_job_tags
         FROM `job` 
         Left JOIN job_skills ON job.id = job_skills.job_id 
         Left JOIN job_tag ON job.id = job_tag.job_id 
         Left JOIN skills ON job_skills.skill_id = skills.id WHERE AND job.is_obsolete='NO' AND job.status='Y'";
         if($random == 1)
         {
            $sql .=" group by job.id order by job.modified DESC LIMIT 6;";
         }
         else if($random == 2)
         {
            $sql .=" group by job.id order by job.modified ASC LIMIT 6;";
         }
         else if($random == 3)
         {
            $sql .=" group by job.id order by job.yop DESC LIMIT 6;";
         }
         else if($random == 4)
         {
            $sql .=" group by job.id order by job.yop ASC LIMIT 6;";
         }
         

         //echo $sql;exit();
         $query=$this->db->query($sql);
         if($query)
         {
            $result=$query->result();
            return $result;
         }
         return NULL;
   } 
   public function get_my_jobs($employer_id)
   {
      //$sql="SELECT * FROM job WHERE status='Y' AND is_obsolete='NO' ORDER BY modified DESC;";
      $sql="SELECT 
            jobtitle, 
            location, 
            yop,is_feature, 
            id AS job_id, 
            designation,views,created 
            FROM job 
            WHERE job.status='Y' 
            AND job.is_obsolete='NO' 
            AND userId='$employer_id' 
            GROUP BY jobtitle 
            ORDER BY views DESC ;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      return $query->result();
   }
   public function get_industry_type($industry_type_id=NULL)
   {
      if($industry_type_id == NULL)
      {
         $sql="SELECT * FROM industry_type";
         $query=$this->db->query($sql);
         return $query->result();
      }
      else
      {
         $sql="SELECT * FROM industry_type WHERE id='$industry_type_id';";
         $query=$this->db->query($sql);
         return $query->row();
      }
      
      
      
   }
    public function get_industry_type_name($type_id)
    {
         $sql="SELECT name FROM industry_type";
         $query=$this->db->query($sql);
         return $query->result();
    }
    public function get_emp_details($job_id)
   {
      $sql="SELECT employer.email,employer.name,job.jobtitle FROM employer 
         LEFT JOIN job ON employer.id = job.userId 
         WHERE job.id='$job_id';";
      $query=$this->db->query($sql);
      return $query->row();
   }
   public function cv_upload($data)
   {
      $query=$this->db->insert('quick_apply_job',$data);
      if($query)
      {
         return $this->db->insert_id();
      }
      else
      {
         return false;
      }

   }
   public function quick_apply_details($apply_id)
      {
         $sql="SELECT * FROM quick_apply_job WHERE apply_id='$apply_id'";
         $query=$this->db->query($sql);
         return $query->row();
      }

// #################################### END ON TRIAL ################################# //
   
}
?>