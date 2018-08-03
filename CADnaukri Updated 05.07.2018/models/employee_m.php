<?php

class Employee_M extends MY_Model 

{

	protected $_primary_key = 'id';

	protected $_table_name = 'employer';

	protected $_order_by = 'id';

	public $rule_login = array(

				'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email|xss_clean'),

				'password' => array('field'=>'password','label'=>'Password', 'rules'=>'trim|required')

				);

	public $rule_forgotpass = array(

				'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email|xss_clean'),

				);	

	public $change_pwd_rule = array(

				'cpassword' => array('field'=>'cpassword','label'=>'Old Password', 'rules'=>'trim|required|callback_check_oldpassword'),

				'npassword' => array('field'=>'npassword','label'=>'New Password', 'rules'=>'trim|required'),

				'ncpassword' => array('field'=>'ncpassword','label'=>'Confirm Password', 'rules'=>'trim|required|matches[npassword]')

				);	

	public $password_reset_rule = array(

				'password' => array('field'=>'password','label'=>'New Password', 'rules'=>'trim|required'),

				'cpassword' => array('field'=>'cpassword','label'=>'Confirm Password', 'rules'=>'trim|required|matches[password]')

				);		

	function __construct()

	{

		parent::__construct();

	}

	public function login()

	{

		$user = $this->get_by(array(

									'email'=> $this->input->post('email_id'),

									'password' =>md5($this->input->post('password')),

									

									), TRUE);

		//echo $this->db2->last_query();exit;

		if(count($user))

		{
				$data = array('name'=>$user->name,

						  // 'lName'=>$user->lName,

						  //  'mName'=>$user->mName,

						   'email'=>$user->email,

						   'emp_id'=>$user->id, 

						   'mobile'=>$user->mobile, 

						   'companyName'=>$user->companyName,

						   'roles'=>$user->roles,

						   'imagePath'=>$user->imagePath,

						   'emp_loggedin'=>TRUE);
			//print_r($data);exit();

             if($this->session->userdata('candidate_id') 
             || $this->session->userdata('intern_id') || $this->session->userdata('superadminId'))
			{
					$this->session->sess_destroy();
					$this->session->set_userdata($data);

					//	echo 'Here';exit();
			}
		    else
		    {
				$this->session->set_userdata($data);
			}

			

			return TRUE;

		}

		else

		{

			return FALSE;

		}

		

	}

	public function logout()

	{

		$this->session->sess_destroy();

	}

	

	

	public function isLoggedin()

	{

		return (bool)$this->session->userdata('emp_loggedin');

	}

	public function updatePassword($email,$encryptedpass)

	{

		$data=array('password'=>$encryptedpass);				

	    $this->db->where('email',$email);			

	    $this->db->update('employer',$data);

				

	}

	public function check_email_exist()

	{

		$email=$this->input->post('email_id');

		$user_exist = $this->get_by(array(

						'email'=> $this->input->post('email_id'),), TRUE);

									

		if(count($user_exist) > 0)

		{

			return TRUE;

		}

		else

		{

			return FALSE;

		}

	}

	public function save_employee($data)

	{

        $this->db->insert('employer',$data);

		$emp_id=$this->db->insert_id();		

		return $emp_id;

   }
   public function get_total_employees()
   {
      $sql="SELECT id FROM employer;";
      $query=$this->db->query($sql);
      return $query->num_rows();
   }

   // public function update_downloaded($employer_id)
   // {
   // 		$sql="UPDATE employer SET cv_downloaded=(cv_downloaded + 1) WHERE id='$employer_id';";
   // 		$query=$this->db->query($sql);
   // 		//redirect(base_url()."employer/get_applied_candidate/".$job_id);

   // }
   public function update_it($employer_id)
   {
   		$sql="UPDATE employer SET cv_downloaded=(cv_downloaded + 1) WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   		//var_dump($this->db->last_query());exit();
   }
   // public function substract_cv_count($employer_id)
   // {
   // 		$sql="UPDATE employer SET cv_downloaded=(cv_downloaded - 1) WHERE id='$employer_id';";
   // 		$query=$this->db->query($sql);
   // }

   public function check_cv_download_limit($employer_id)
   {
   		$sql="SELECT id FROM employer WHERE cv_downloaded < cv_download_limit AND id='$employer_id';";
   		$query=$this->db->query($sql);
   		if($query->num_rows() == 1)
   		{
   			return "No";
   		}
   		else
   		{
   			return "Yes";
   		}
   }
   	public function save_wrong_login_atempts($emp_email)
   	{
   		//echo $emp_email;exit();
   		$sql="UPDATE employer SET login_wrong_attempt=( login_wrong_attempt + 1) WHERE email='$emp_email';";
   		$query=$this->db->query($sql);

	}
   	public function reset_wrong_login_atempts($emp_email)
   	{
   		//echo $emp_email;exit();
   		$sql="UPDATE employer SET login_wrong_attempt='0' WHERE email='$emp_email';";
   		$query=$this->db->query($sql);

    }
	public function count_wrong_attempts($emp_email)
	{
		$sql="SELECT login_wrong_attempt FROM employer WHERE email='$emp_email';";
		$query=$this->db->query($sql);
		//var_dump($query->row()->login_wrong_attempt);exit();
		return $query->row()->login_wrong_attempt;
	}
	public function get_employer_details($emp_email)
	{
		$sql="SELECT * FROM employer WHERE email='$emp_email';";
		$query=$this->db->query($sql);
		if($query->num_rows == 1)
		{
			//var_dump($query->result());exit();
			return $query->result();

		}
		else
		{
			return false;
		}
		
	}
	public function display_temp_msg_when_sis_function_calling($id)
	{
		$sql="UPDATE employer SET temp_msg_col='1' WHERE id='$id';";
		$query=$this->db->query($sql);

	}
	public function hide_temp_msg_when_sis_function_calling()
	{
		$sql="UPDATE employer SET temp_msg_col='0' ";
		$query=$this->db->query($sql);
		
	}
	public function delete_posted_job($job_id)
	{
		$sql="DELETE FROM job WHERE id='$job_id';";
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
	public function get_emp_name($employer_id)
	{
		$sql="SELECT name FROM employer WHERE id='$employer_id';";
		$query=$this->db->query($sql);
		return $query->row()->name;
	}
   public function get_emp_email($employer_id)
   {
      $sql="SELECT email FROM employer WHERE id='$employer_id';";
      $query=$this->db->query($sql);
      return $query->row()->email;
   }
	public function save_last_login_ip($ip,$employer_id)
   {
   		$sql="UPDATE employer SET last_login_ip='$ip' WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   }
   public function save_last_login_date($date,$employer_id)
   {
   		$sql="UPDATE employer SET last_login_date='$date' WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   }
   public function get_last_login_ip($employer_id)
   {
   		$sql="SELECT last_login_ip FROM employer WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->last_login_ip;
   }
   public function get_last_login_date($employer_id)
   {
   		$sql="SELECT last_login_date FROM employer WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->last_login_date;
   }
   public function save_last_posted_job($job_id,$employer_id)
   {
   		$sql="UPDATE employer SET last_posted_job='$job_id' WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   }
   public function get_last_posted_job($employer_id)
   {
   		$sql="SELECT last_posted_job FROM employer WHERE id='$employer_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->last_posted_job;
   		//var_dump($query->row()->last_posted_job);
   }
    public function get_jobtitle($job_id)
   {
   		//$job_id='129';
   		//$employer_id='72';
   	//echo $employer_id;
   		$sql="SELECT jobtitle FROM job LEFT JOIN employer ON job.userId=employer.id WHERE job.id='$job_id';";
   		//print_r($sql);
   		$query=$this->db->query($sql);
   		return $query->row()->jobtitle;
   		//var_dump($query->row()->jobtitle);
   }
   public function get_gender($employer_id)
   {
   		// echo $employer_id;
   		$sql="SELECT gender FROM userdetails WHERE userId='$employer_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->gender;
   }
   public function get_candidate_detials($candidate_id)
   {
   		$sql="SELECT location,name,cvpath FROM candidate WHERE id='$candidate_id' AND deactive_profile = '0';";
   		$query=$this->db->query($sql);
   		return $query->row();
   }
 	public function save_profile_view($udata)
 	{
 		$success=$this->db->insert('candidate_profile_view',$udata);
 		$sql="DELETE FROM candidate_profile_view WHERE candidate_id='0';";
 		$this->db->query($sql);
 	
 	}
 	public function profile_viewed_notification($candidate_id)
 	{
 		$sql="UPDATE candidate SET profile_view_notify='1';";
 		$query=$this->db->query($sql);
 	}
 	public function get_designations()
 	{
 		$sql="SELECT * FROM designations ORDER BY designation_name ASC";
 		$query=$this->db->query($sql);
 		return $query->result();
 	}
 	public function get_company_details($company_id)
 	{
 		$sql="SELECT * FROM company WHERE id='$company_id';";
 		$query=$this->db->query($sql);
 		if($query->num_rows() == 1)
 		{
 			return $query->result();
 		}
 		else
 		{
 			return 'No Company There';
 		}
 		
 	}
 	public function get_job_details($job_id)
 	{
 		$sql="SELECT * FROM job WHERE id='$job_id';";
 		$query=$this->db->query($sql);
 		if($query->num_rows() == 1)
 		{
 			return $query->result();
 		}
 		else
 		{
 			return 'No Company There';
 		}
 		
 	}
 	public function get_industry_types()
 	{
 		$sql="SELECT * FROM industry_type;";
 		$query=$this->db->query($sql);
 		return $query->result();
 	}
 	public function get_internship_details($internship_id)
 	{
 		$sql="SELECT * FROM internsip 
 		LEFT JOIN job_skills ON internsip.id = job_skills.job_id 
 		LEFT JOIN skills ON skills.id= job_skills.skill_id 
 		WHERE internsip.id ='$internship_id' 
 		AND job_skills.is_internship = '1' 
 		ORDER BY internsip.created DESC;";
 		//echo $sql;exit();
 		$query=$this->db->query($sql);
 		//var_dump($query->result());exit();
 		return $query->result();

 	}
 	public function get_password($emp_id)
   {
      $sql="SELECT password FROM employer WHERE id='$emp_id'";
      $query=$this->db->query($sql);
      return $query->row()->password;
   }
   public function check_secondary_email_exists($emp_id)
   {
      $sql="SELECT secondary_email FROM employer WHERE id='$emp_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return $query->row()->secondary_email;
      }
      else
      {
         return false;
      }
   }
    public function get_cand_detials($candidate_id)
   {
   		$sql="SELECT candidate.name AS candidate_name,
         candidate.email,
         candidate.id AS candidate_id, 
   		expdetails.experience,industry_type.name AS industry_type,
   		candidate.location,
   		expdetails.ctc AS salary,
   		edudetails.qualification,
   		candidate.cvpath 
   		FROM candidate 
   		LEFT JOIN expdetails ON candidate.id=expdetails.userId 
   		LEFT JOIN candidate_industry_type ON candidate_industry_type.user_id=candidate.id 
   		LEFT JOIN industry_type ON industry_type.id=candidate_industry_type.industry_type_id 
   		LEFT JOIN edudetails ON edudetails.userId=candidate.id 
   		WHERE candidate.id='$candidate_id' AND candidate.deactive_profile = '0';";
   		$query=$this->db->query($sql);
   		return $query->row();
   }
   public function get_skill_name($candidate_id)
   {
   		$sql="SELECT skills.name AS skill_name FROM skills  
   		LEFT JOIN candiate_key_skills ON candiate_key_skills.key_id=skills.id 
   		WHERE candiate_key_skills.user_id='$candidate_id';";
   		$query=$this->db->query($sql);
   		return $query->result();
   }
   public function get_language($candidate_id)
   {
   		$sql="SELECT language.name AS language_name FROM language 
   		LEFT JOIN candidate_language ON  candidate_language.language_id=language.id 
   		WHERE candidate_language.user_id='$candidate_id';";
   		$query=$this->db->query($sql);
   		return $query->result();
   }
    public function get_project($candidate_id)
   {
   		$sql="SELECT descrition FROM projectdetails WHERE userId='$candidate_id';";
   		$query=$this->db->query($sql);
   		//var_dump($query->result());exit();
   		return $query->result();
   }
    public function get_notifications()
  {
    $sql="SELECT * FROM notification WHERE notice_for='Employer';";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_my_details($emp_id)
  {
      $sql="SELECT * FROM employer 
      LEFT JOIN userdetails ON employer.id= userdetails.userId 
      WHERE employer.id='$emp_id';";
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->row();
  }
  public function is_company_mail_verified($emp_id)
  {
      $sql="SELECT id FROM employer WHERE company_email_verified='1' AND id='$emp_id'";
      $query=$this->db->query($sql);
      //echo $query->num_rows();exit();
      if($query->num_rows() == 1)
      {
         return true;
      }
      else
      {
         return false;
      }
   }
   public function get_account_type($emp_id)
   {
      $sql="SELECT account_type FROM employer WHERE id='$emp_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row()->account_type);exit();
      return $query->row()->account_type;
   }
   // public function already_requested($emp_id)
   // {
   //    $sql="SELECT request_id FROM employer_upgrade_account_request WHERE emp_id='$emp_id' AND acc_upgrade_rqst='1'";
   //    $query=$this->db->query($sql);
   //    if($query->num_rows() > 0)
   //    {
   //       echo "Requested";exit();
   //       return TRUE;
   //    } 
   //    else
   //    {
   //       echo "Not Requested";exit();
   //       return false;
   //    }  
   // }
   public function already_requested($emp_id)
   {
      $sql="SELECT id FROM employer WHERE id='$emp_id' AND acc_upgrade_rqst='1'";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
         //echo "Exists";exit();
         return TRUE;
      } 
      else
      {
         //echo "Access";exit();
         return false;
      }  
   }
   public function is_there_notification($emp_id)
   {
      $sql="SELECT acc_upgrade_notify FROM employer WHERE id='$emp_id' AND acc_upgrade_notify='1'; ";
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
   public function add_company_permitted($emp_id)
   {
      $sql="SELECT id FROM employer WHERE company_permission ='YES' AND id='$emp_id';";
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
   public function question_left($emp_id)
   {
      $sql="SELECT qtn1,qtn2,qtn3,qtn4,qtn5,qtn6,qtn7,qtn8,qtn9,qtn10 FROM exams WHERE emp_id='$emp_id' AND exam_over='NO';";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function exam_already_set($emp_id)
   {
      $sql="SELECT exam_id FROM exams WHERE emp_id='$emp_id' AND exam_set='YES' AND exam_over='NO';";
      $query=$this->db->query($sql);
      if($query->num_rows == 1)
      {
         return true;
      }
      else
      {
         return false;
      }
   }
   public function check_exam_details_there($emp_id)
   {
      $sql="SELECT exam_details_id FROM exam_details WHERE emp_id='$emp_id' AND is_over='NO';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
         return $query->row()->exam_details_id; //Exam there
      }
      else
      {
         return false; // No exams
      }
   }
   public function is_there_exam_details($exam_details_id)
   {
      $sql="SELECT exam_details_id FROM exam_details WHERE exam_details_id='$exam_details_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return true; // Ok
      }
      else
      {
         return false; // Not Ok
      }
   }
   public function get_questions($exam_id)
   {
      $sql="SELECT qtn1,qtn2,qtn3,qtn4,qtn5,qtn6,qtn7,qtn8,qtn9,qtn10 FROM exams WHERE exam_id ='$exam_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row());exit();
      return $query->row();
   }
   public function get_question_details($question_id)
   {
      $sql="SELECT question_id,question,opt1,opt2,opt3,opt4,correctopt FROM question WHERE question_id='$question_id';";
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->row();
   }
   public function is_exam_set($exam_id)
   {
      $sql="SELECT exam_id FROM exams WHERE exam_id='$exam_id' AND exam_set='YES' AND exam_over='NO';";
      $query=$this->db->query($sql);
      if($query->num_rows == 1)
      {
         return true; // Exam set
      }
      else
      {
         return false; //Exam Not set
      }
   }
   public function get_exam_qualifiers($exam_details_id)
   {
      $sql="SELECT candidate.name,applied_exams.exam_start_time,applied_exams.exam_end_time,applied_exams.apply_id,applied_exams.created,candidate.cvpath,applied_exams.exam_details_id 
            FROM candidate 
            LEFT JOIN applied_exams ON candidate.id = applied_exams.candidate_id 
            WHERE exam_details_id='$exam_details_id' AND is_spam ='0' AND is_over='YES' 
            ORDER BY applied_exams.created DESC;";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function cart_services($emp_id)
   {
      $sql="SELECT services_cart.id AS order_id,services.id,services.service_name,services.service_description,services.service_amount,employer.location,services.duration FROM services 
            LEFT JOIN services_cart ON services.id = services_cart.service_id 
            LEFT JOIN employer ON employer.id = services_cart.user_id 
            WHERE services_cart.user_id='$emp_id' 
            AND isCheckedOut = '0' 
            ORDER BY services_cart.created DESC;";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function istaken_service($emp_id,$service_id)
   {
      $sql="SELECT service_id FROM services_cart WHERE user_id='$emp_id' AND service_id='$service_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
         return $query->row()->service_id; //Taken service
      }
      else
      {
         return false; //Not taken service
      }
   }
   public function get_city_name($city_id)
   {
      $sql="SELECT city_name FROM cities WHERE city_id='$city_id' LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row()->city_name;
   }
    public function get_city_state($city_id)
   {
      $sql="SELECT state_id FROM cities WHERE city_id='$city_id' LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row()->state_id;
   }
   public function check_service_active($emp_id)
   {
      $sql="SELECT isServiceActive FROM employer WHERE id='$emp_id';";
      $query=$this->db->query($sql);
      return $query->row()->isServiceActive;
   }
   public function get_service_ids($user_id)
   {
      $sql="SELECT service_id FROM  services_cart WHERE user_id='$user_id'";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function count_cart_items()
   {
      $emp_id=$this->session->userdata('emp_id');
      $sql="SELECT service_id FROM services_cart WHERE user_id='$emp_id';";
      $query=$this->db->query($sql);
      return $query->num_rows();
   }

}
?>
