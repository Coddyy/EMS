<?php
class Search_M extends MY_Model 
{
    	
    function __construct()
	{
		parent::__construct();
		  $this->load->helper('date');
		
	}
	public function search_anydata($skill,$exeperience,$salary,$company_nature,$role,$location,$jobbyabroad,$company)
	{
	
		$query = "select company.name,job.id,job.jobtitle,job.minsal,job.qualification,job.maxsal,job.companyId,job.designation,job.yop,job.location,
		job.description,job.skills,job.additionalSkills,job.modified from job ,company 
		where job.userId = company.userId and job.skills LIKE  '%$skill%'  group by job.id";
		$result = $this->db->query($query)->result();
		return $result;
    }
	public function singleSearchresult($id)
	{
	
		$query = "select company.name,job.id,job.jobtitle,job.minsal,job.qualification,job.maxsal,job.companyId,job.designation,job.yop,job.location,
		job.description,job.skills,job.additionalSkills,job.modified from job ,company 
		where job.userId = company.userId and job.id = '$id'  group by job.id";
		$result = $this->db->query($query)->result();
		return $result;
    }
     public function companydata()
     {
        $this->db->select('*');
		$this->db->from('company');
		$this->db->where("isActive",1);
		$this->db->order_by("rating", "DESC");
		$this->db->group_by("id");
        $query = $this->db->get();
        $result = $query->result();
        return $result; 
    }
	public function getCompany($jobid)
	{
		$this->db->select('*');
		$this->db->from('job');
		$this->db->where("id",$jobid);
		$this->db->where("isActive",1);
		$this->db->group_by("id");
        $query = $this->db->get();
            $result = $query->result();
            return $result; 
	}
	public function add_new_visitor()
	{
		$sql="UPDATE site_visit SET visitors_per_day=(visitors_per_day + 1) WHERE site_id='1';";
		$query=$this->db->query($sql);
		//echo "hello";
	}
	public function get_per_day_visitors()
	{
		$sql="SELECT visitors_per_day FROM site_visit;";
		$query=$this->db->query($sql);
		return $query->row()->visitors_per_day;
	}
	public function update_daily_visitor()
	{
		$sql="UPDATE site_visit SET visitors_per_day='000' WHERE site_id='1';;";
		$query=$this->db->query($sql);
	}
	public function update_random_daily_candidates($random_number)
	{
		$sql="UPDATE site_visit SET random_fake_registrations=(random_fake_registrations + '$random_number' ) WHERE site_id='1';";
		$query=$this->db->query($sql);
	}
   	public function get_random_fake_registrations()
	{
		$sql="SELECT random_fake_registrations FROM site_visit;";
		$query=$this->db->query($sql);
		return $query->row()->random_fake_registrations;
	}
	public function update_new_fake_registrations($random_number)
	{
		
		$sql="UPDATE site_visit SET new_fake_registrations='$random_number' WHERE site_id='1';";
		$query=$this->db->query($sql);
	}
	public function get_new_fake_registrations()
	{
		$sql="SELECT new_fake_registrations FROM site_visit;";
		$query=$this->db->query($sql);
		return $query->row()->new_fake_registrations;
	}
	public function update_ans($question_id,$ans_id)
	{
		//$sql="UPDATE daily_poll_voting SET ans_A=(ans_A + 1),ans_B='$eid' WHERE vote_id='$id';";
		$sql="UPDATE daily_poll ";
		if($ans_id == '1')
		{
			$sql.="SET vote_ans_A=(vote_ans_A + 1) ";
		}
		else if($ans_id == '2')
		{
			$sql.="SET vote_ans_B=(vote_ans_B + 1) ";
		}
		else if($ans_id == '3')
		{
			$sql.="SET vote_ans_C=(vote_ans_C + 1) ";
		}
		else if($ans_id == '4')
		{
			$sql.="SET vote_ans_D=(vote_ans_D + 1) ";
		}
		$sql.="WHERE question_id='$question_id';";
		$query=$this->db->query($sql);
	}
	public function get_daily_poll_details()
	{
		$sql="SELECT * FROM daily_poll WHERE display_permission='YES' LIMIT 1;";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1)
		{
			//var_dump($query->result());exit();
			return $query->result();
		}
		else
		{
			//echo "Oops! Multiple Polls,Can't Show";
			$sql1="SELECT * FROM daily_poll ORDER BY question_id DESC LIMIT 1;";
			$query1=$this->db->query($sql1);
			if($query1->num_rows() == 1)
			{
				//var_dump($query1->result());exit();
				return $query1->result();
			}
			else
			{
				echo "Oops! We Will Back Soon";
			}
			
		}
		
	}
	public function get_daily_poll_result()
	{
		$sql="SELECT * FROM daily_poll WHERE display_result='YES' ORDER BY question_id DESC LIMIT 1;";
		$query=$this->db->query($sql);
		//if($query->num_rows() == 1)
		//{
			//var_dump($query->result());exit();
			return $query->result();
		// }
		// else
		// {
		// 	//echo "Oops! Multiple Polls,Can't Show";
		// 	$sql1="SELECT * FROM daily_poll WHERE display_result='YES' ORDER BY question_id DESC LIMIT 1;";
		// 	$query1=$this->db->query($sql1);
		// 	if($query1->num_rows() == 1)
		// 	{
		// 		//var_dump($query1->result());exit();
		// 		return $query1->result();
		// 	}
		// 	else
		// 	{
		// 		echo "Oops! We Will Back Soon";
		// 	}
			
		// }
		
	}
	public function get_pending_question_id()
	{
		$sql="SELECT question_id FROM daily_poll WHERE display_permission='Pending' ORDER BY question_id ASC LIMIT 1 ;";
		$query=$this->db->query($sql);
		return $query->row()->question_id;
	}
	public function get_active_question_id()
	{
		$sql="SELECT question_id FROM daily_poll WHERE display_permission='YES' LIMIT 1;";
		$query=$this->db->query($sql);
		return $query->row()->question_id;
	}
	public function deactivate_question_id($active_question_id)
	{	
		$sql="UPDATE daily_poll SET display_permission='NO',display_result='YES' WHERE question_id='$active_question_id';";
		$query=$this->db->query($sql);
	}
	public function activate_question_id($pending_question_id)
	{
		$sql="UPDATE daily_poll SET display_permission='YES' WHERE question_id='$pending_question_id';";
		$query=$this->db->query($sql);
	}
    
}
?>