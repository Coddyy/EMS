<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Job_admin_M extends MY_Model 

{
    function __construct() {

        parent::__construct();

    }
    public function index()
    {

    }
    public function get_posted_jobs()
    {
    	$sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                skills.id AS skill_id,
                job.modified AS job_posted,
                skills.name AS skill_name 
                FROM job,employer,company,skills,job_skills 
                WHERE job.userId=employer.id 
                AND job.companyId=company.id 
                AND job.id=job_skills.job_id 
                AND skills.id=job_skills.skill_id 
                GROUP BY job.jobtitle 
                ORDER BY job.modified DESC;";
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
    	
    }
    public function get_job_details($job_id=null)
    {
        $sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.email,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                -- skills.id AS skill_id,
                job.modified AS job_posted
                -- skills.name AS skill_name 
                FROM job,employer,company
                WHERE job.userId=employer.id 
                AND job.companyId=company.id 
                -- AND job.id=job_skills.job_id 
                -- AND skills.id=job_skills.skill_id 
                AND job.id='$job_id';";

        $query=$this->db->query($sql);
        // var_dump($query->result());exit();
        if($query->num_rows() == 1)
        {
            //var_dump($query->result());exit();
            return $query->result();
            return true;
        }
        else
        {
            echo "problem";
            return false;
        }
    }
    public function delete_job($job_id)
    {
        $sql="DELETE * FROM job WHERE id='$job_id';";
        $query=$this->db->query($sql);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function approve_job($approval,$job_id)
    {
        //var_dump($approval);exit();
        if($approval == 'Y')
        {
            $sql="UPDATE job SET isActive='1',status='Y' WHERE id='$job_id';";
            $query=$this->db->query($sql);
            if($query)
            {
                return Y;
            }
            else
            {
                return false;
            }
        }
        else if($approval == 'M')
        {
            return M;
        }
        else if($approval == 'N')
        {
            //var_dump($approval);exit();
            $sql="UPDATE job SET isActive='0',status='N' WHERE id='$job_id';";
            $query=$this->db->query($sql);
            if($query)
            {
                return N;
            }
            else
            {
                return false;
            }
        }
    }
    public function check_status($job_id=null)
    {
        $sql="SELECT status FROM job WHERE id='$job_id';";
        $query=$this->db->query($sql);
        return $query->row()->status;
    }
    public function get_emp_name($job_id=null)
    {
        $sql="SELECT employer.name FROM employer,job WHERE employer.id=job.userId AND job.id='$job_id';";
        $query=$this->db->query($sql);
        return $query->row()->name;
    }
    public function get_emp_email($job_id=null)
    {
        $sql="SELECT employer.email FROM employer,job WHERE employer.id=job.userId AND job.id='$job_id';";
        $query=$this->db->query($sql);
        return $query->row()->email;
    }
    public function pending_job()
    {
        $sql="SELECT id FROM job WHERE isActive='0' AND status='P';";
        $query=$this->db->query($sql);
        return $query->num_rows();
    }
    public function approved_job()
    {
        $sql="SELECT id FROM job WHERE isActive='1' AND status='Y';";
        $query=$this->db->query($sql);
        return $query->num_rows();
    }
    public function rejected_job()
    {
        $sql="SELECT id FROM job WHERE isActive='0' AND status='N';";
        $query=$this->db->query($sql);
        return $query->num_rows();
    }
    public function expired_job()
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date('Y-m-d');
        $sql="SELECT id FROM job WHERE lastdate < '$date';";
        $query=$this->db->query($sql);
        return $query->num_rows();
    }

    public function get_approved_jobs()
    {
        $sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                skills.id AS skill_id,
                job.modified AS job_posted,
                skills.name AS skill_name 
                FROM job,employer,company,skills,job_skills 
                WHERE job.isActive='1' 
                AND job.status='Y' 
                AND job.userId=employer.id 
                AND job.companyId=company.id 
                AND job.id=job_skills.job_id 
                AND skills.id=job_skills.skill_id 
                GROUP BY job.jobtitle 
                ORDER BY job.modified DESC;";
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
        
    }
    public function get_pending_jobs()
    {
        $sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                skills.id AS skill_id,
                job.modified AS job_posted,
                skills.name AS skill_name 
                FROM job,employer,company,skills,job_skills 
                WHERE job.isActive='0' 
                AND job.status='P' 
                AND job.userId=employer.id 
                AND job.companyId=company.id 
                AND job.id=job_skills.job_id 
                AND skills.id=job_skills.skill_id 
                GROUP BY job.jobtitle 
                ORDER BY job.modified DESC;";
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
        
    }
    public function get_rejected_jobs()
    {
        $sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                skills.id AS skill_id,
                job.modified AS job_posted,
                skills.name AS skill_name 
                FROM job,employer,company,skills,job_skills 
                WHERE job.isActive='0' 
                AND job.status='N' 
                AND job.userId=employer.id 
                AND job.companyId=company.id 
                AND job.id=job_skills.job_id 
                AND skills.id=job_skills.skill_id 
                GROUP BY job.jobtitle 
                ORDER BY job.modified DESC;";
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
        
    }
    public function get_expired_jobs()
    {
        date_default_timezone_set('Asia/Kolkata');
        $date=date('Y-m-d');
        $sql="SELECT job.id AS job_id,
                job.jobtitle,
                job.description,
                employer.email,
                job.userId,
                employer.id AS employer_id,
                employer.name AS employer_name,
                company.id AS company_id,
                company.name AS company_name,
                skills.id AS skill_id,
                job.modified AS job_posted,
                skills.name AS skill_name 
                FROM job,employer,company,skills,job_skills 
                WHERE job.lastdate < '$date' 
                AND job.userId=employer.id 
                AND job.companyId=company.id 
                AND job.id=job_skills.job_id 
                AND skills.id=job_skills.skill_id 
                GROUP BY job.jobtitle 
                ORDER BY job.modified DESC;";
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
        
    }
    public function set_pending($job_id)
    {
        $sql="UPDATE job SET status='P',isActive='0' WHERE id='$job_id';";
        $query=$this->db->query($sql);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function is_approved($job_id)
    {
        $sql="SELECT id FROM job WHERE id='$job_id' AND status='Y' AND isActive='1';";
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
}
?>