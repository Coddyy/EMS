<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Sign_up_M extends MY_Model 

{
    function __construct() {

        parent::__construct();

    }
    public function permission()
    {
        $sql="SELECT id FROM permission WHERE status= 0;";
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
    public function stop_sign_up()
    {
        $sql="UPDATE permission SET status= 1 WHERE id='1';";
        $query=$this->db->query($sql);
    }
    public function allow_sign_up()
    {
        $sql="UPDATE permission SET status= 0 WHERE id='1';";
        $query=$this->db->query($sql);
    }
    public function sign_up($data)
    {
        $result=$this->db->insert('candidate',$data);
        if($result)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function get_id($email)
    {
        //echo $email;exit();
        $sql="SELECT id FROM candidate WHERE email='$email';";
        $query=$this->db->query($sql);
        return $query->row()->id;
    }
    public function check_already_exist($email)
    {
        $sql="SELECT email FROM candidate WHERE email='$email';";
        $query=$this->db->query($sql);
        if($query->num_rows() == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function check_url($id)
    {
        //echo $id;exit();
        $sql="SELECT id FROM candidate WHERE id='$id' AND email_verify= 0;";
        $query=$this->db->query($sql);
        //var_dump($query->result());exit();
        if($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_name($id)
    {
        $sql="SELECT name FROM candidate WHERE id='$id';";
        $query=$this->db->query($sql);
        return $query->row()->name;
    }
     public function get_email($id)
    {
        $sql="SELECT email FROM candidate WHERE id='$id';";
        $query=$this->db->query($sql);
        return $query->row()->email;
    }
     public function save_sequrity_ans($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('candidate',$data);
    }
    public function set_password($password,$id)
    {
        $sql="UPDATE candidate SET password='$password',email_verify= 1 WHERE id='$id';";
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
    // public function decrypt_pass()
    // {
    //     $sql="SELECT email,password FROM employer;";
    //     $query=$this->db->query($sql);
    //     return $query->result();
    // }
    public function get_job($company)
    {
        $sql="SELECT jobtitle,job.id FROM job,company WHERE job.companyId=company.id AND company.name='$company';";
        $query=$this->db->query($sql);
        //var_dump($query->num_rows());exit();
        if($query->num_rows > 0)
        {
            return $query->result();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_candidate($job_id=null)
    {
        $sql="SELECT email,name FROM candidate,job_apply WHERE candidate.id=job_apply.user_id AND job_apply.job_id='$job_id';";
        $query=$this->db->query($sql);
        //var_dump($query->result());exit();
        if($query->num_rows > 0)
        {
            return $query->result();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function ajaxtest()
    {
        $sql="SELECT * FROM country;";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function state($c_id)
    {
        $sql="SELECT * FROM state WHERE c_id='$c_id';";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function delaytest($data)
    {
        $query=$this->db->insert('temptest',$data);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_temp_id($emp_name)
    {
        $sql="SELECT temp_id FROM temptest WHERE emp_name='$emp_name';";
        $query=$this->db->query($sql);
        return $query->row()->temp_id;
    }
    public function delete_temp_id($temptest_id)
    {
        $sql="DELETE FROM temptest WHERE temp_id='$temptest_id';";
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
    public function get_temp_detail($temptest_id)
    {
        $sql="SELECT * FROM temptest WHERE temp_id='$temptest_id';";
        $query=$this->db->query($sql);
        return $query->result();
    }


}

?>