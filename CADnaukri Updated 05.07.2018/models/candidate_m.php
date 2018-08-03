<?php
class Candidate_M extends MY_Model 
{
   protected $_primary_key = 'id';
   protected $_table_name = 'candidate';
   protected $_order_by = 'id';
   public $rule_login = array(
            'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email_id|xss_clean'),
            'password' => array('field'=>'password','label'=>'Password', 'rules'=>'trim|required')
            ); 
   public $rule_forgot_password = array(
         'email_id' => array('field'=>'email_id','label'=>'Email Id','rules' => 'trim|required|email_id|xss_clean')); 
         
   
   function __construct()
   {
      parent::__construct();  
   }
   public function get_new()
   {
      $candidate = new stdClass();
      $candidate->name='';
      // $candidate->fName='';
      // $candidate->lName='';
      // $candidate->mName='';
      $candidate->password='';
      $candidate->email='';
      $candidate->mobile='';
      $candidate->cvname='';
      $candidate->cvpath='';
      $candidate->profileImage='';
      $candidate->imagePath='';
      $candidate->location='';
      $candidate->nationality='';
      return $candidate;
   }
   public function login()
   {
      if($this->input->post('ajax'))
      {
         $email=$this->input->post('email');
         $sql="SELECT * FROM candidate WHERE email='$email' limit 1";
         $query=$this->db->query($sql);
         $user=$query->row();
      }
      else
      {
         $user = $this->get_by(array(
                           'email'=> $this->input->post('email_id'),
                           'password'=>md5($this->input->post('password')),
                           //'email_verify'=> '1'
                           ), TRUE);
      }



      if(count($user))
      {
           if( $this->session->userdata('emp_id') || $this->session->userdata('intern_id') || $this->session->userdata('superadminId'))
         {
            //echo 'Here';
               $this->session->sess_destroy();
         }
          //$uniqueId = uniqid($this->CI->input->ip_address(), TRUE);
          //var_dump($uniqueId);exit();
         $data = array(
                     'name'=>$user->name,
                     //'fName'=>$user->fName,
                     //'lName'=>$user->lName,
                     //'mName'=>$user->mName,
                     'candidate_id'=>$user->id, 
                    'email'=>$user->email,
                    'mobile'=>$user->mobile,
                    'cand_loggedin'=>TRUE,
                    'date'=>date('Y-m-d H:i:s')
                    //'session_id'=>session_id()
                    //'my_session_id'=>md5($uniqueId)
                    );


         $this->session->set_userdata($data);
         //print_r($this->session->all_userdata());exit();
         $candidate_id=$this->session->userdata('candidate_id');
         //var_dump($session_id);exit();
         $date=$this->session->userdata('date');
         //$this->load->plugin('geo_location');
         $ip = $this->input->ip_address();
         //$geo_data = geolocation_by_ip($ip);
         //$location=$geo_data['country_name'];
         $data=array(
            "candidate_id"=>$candidate_id,
            //"session_id"=>$session_id,
            "login_date"=>$date,
            "ip_address"=>$ip,
            //"location"=>$location
            );
         $this->db->insert('log_status',$data);
         return TRUE;
      }
      else
      {
         return FALSE;
      }
      
   }
   public function logout()
   {
      if($this->session->userdata('candidate_id'))
        {
            $sql="UPDATE candidate SET is_logged_in='0' WHERE id='$candidate_id';";
            $query=$this->db->query($sql);
         // $session_id=$this->session->userdata('session_id');
         // //var_dump($session_id);exit();
         // $date=date('Y-m-d');
         // $sql="UPDATE log_status SET logout_date='$date' WHERE session_id='$session_id';";
         $this->session->sess_destroy();
      }
   }
   
   public function isLoggedin()
   {
      return (bool)$this->session->userdata('cand_loggedin');
   }
   public function updatePassword($email,$encryptedpass)
   {
      $data=array('password'=>$encryptedpass);           
        $this->db->where('email',$email);       
       $this->db->update('candidate',$data);
            
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
   public function matched_job($candidate_id)
   {
      $sql="SELECT job.* 
      from job,job_skills 
      where job.id=job_skills.job_id and job_skills.skill_id in 
      (SELECT `candiate_key_skills`.`key_id` 
      FROM `candidate`,`candiate_key_skills`  
        where `candidate`.`id`=`candiate_key_skills` .`user_id`  and `candidate`.`id`=$candidate_id)
         group by job.id
         order by job.modified desc;";
         $res= $this->db->query($sql)->result();
      return $res;
   }
   public function matched_skills($job_id)
   {
      $sql="SELECT name FROM `job_skills` ,`skills` WHERE `job_skills`.`skill_id`=`skills`.id and job_id=$job_id ";
      $res= $this->db->query($sql)->result();
      return $res;
   }
   public function cv_upload($data,$id)
      {



         //var_dump($fname);
         //var_dump($id);exit();
         $this->db->where('id', $id); 
         $query=$this->db->update('candidate',$data);
         // $sql="UPDATE candidate SET cv='$fname' WHERE id='$id';";
         // $query=$this->db->query($sql);
         if($query)
         {
            return true;
         }
         else
         {
            return false;
         }

      }
   public function check_cv($id)
    {
         $sql="SELECT id FROM candidate WHERE id='$id' AND cvname IS NOT NULL;";
         $query=$this->db->query($sql);
         if($query->num_rows() == "1")
         {
            return true;
         }
         else
         {
            return false;
         }
         
   }
   public function get_cand_email($id)
   {
         $sql="SELECT email FROM candidate WHERE id='$id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->email;
   }
   public function get_cand_name($id)
   {
         $sql="SELECT name FROM candidate WHERE id='$id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->name;
   }
   public function get_emp_email($job_id)
   {
         $sql="SELECT employer.email FROM employer,job WHERE job.userId=employer.id AND job.id='$job_id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->email;
   }
   public function get_emp_name($job_id)
   {
         $sql="SELECT employer.name FROM employer,job WHERE job.userId=employer.id AND job.id='$job_id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->name;
   }
   public function get_job_name($job_id)
   {
         $sql="SELECT jobtitle FROM job WHERE id='$job_id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->jobtitle;
   }
   public function get_job_location($job_id)
   {
         $sql="SELECT location FROM job WHERE id='$job_id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->location;
   }
   public function get_company_name($job_id)
   {
         $sql="SELECT company.name FROM company,job WHERE job.companyId=company.id AND job.id='$job_id';";
         $query=$this->db->query($sql);
         //var_dump($query->row()->email);exit();
         return $query->row()->name;
   }
   public function check_cv_exist($candidate_id)
   {
         $sql="SELECT id FROM candidate WHERE id='$candidate_id' AND cvname IS NOT NULL; ";
         $query=$this->db->query($sql);
         //var_dump($query->num_rows());exit();
         if($query->num_rows() == 1)
         {
            return true;
         }
         else
         {
            return false;
         }
   }
   public function progress_personal_details($candidate_id)
   {
      // echo $candidate_id;exit();
         $sql="SELECT userId FROM userdetails WHERE userId = '$candidate_id' AND language IS NOT NULL;";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return 1;
         }
         else
         {
            return 0;         }
   }
    public function progress_edu_details($candidate_id)
   {

         $sql="SELECT userId FROM edudetails WHERE userId = '$candidate_id';";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return 1;
         }
         else
         {
            return 0;
         }
   }
   public function progress_skill_details($candidate_id)
   {
         $sql="SELECT user_id FROM candiate_key_skills WHERE user_id = '$candidate_id';";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return 1;
         }
         else
         {
            return 0;
         }
   }
   public function progress_exp_details($candidate_id)
   {

         $sql="SELECT userId FROM expdetails WHERE userId = '$candidate_id';";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return 1;
         }
         else
         {
            return 0;
         }
   }
   public function progress_contact_details($candidate_id)
   {
         $sql="SELECT userId FROM userdetails WHERE userId = '$candidate_id' AND prsCountry IS NOT NULL;";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return 1;
         }
         else
         {
            return 0;
         }
   }
   public function save_last_login_ip($ip,$candidate_id)
   {
         $sql="UPDATE candidate SET last_login_ip='$ip' WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
   }
   public function save_last_login_date($date,$candidate_id)
   {
         $sql="UPDATE candidate SET last_login_date='$date' WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
   }
   public function get_last_login_ip($candidate_id)
   {
         $sql="SELECT last_login_ip FROM candidate WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
         return $query->row()->last_login_ip;
   }
   public function get_last_login_date($candidate_id)
   {
         $sql="SELECT last_login_date FROM candidate WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
         return $query->row()->last_login_date;
   }
   public function save_last_applied_job($job_name,$candidate_id)
   {
         $sql="UPDATE candidate SET last_appiled_job='$job_name' WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
   }
   public function get_last_applied_job($candidate_id)
   {
         $sql="SELECT last_appiled_job FROM candidate WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
         return $query->row()->last_appiled_job;
   }
   public function save_dashboard_searched_skills($data)
   {
         $this->db->insert('candidate_searched_skills',$data);
   }
   public function save_last_searched_skill($skill,$candidate_id)
   {
         $sql="UPDATE candidate SET last_searched_skill='$skill' WHERE id='$candidate_id';";
         $query=$this->db->query($sql);

   }
   public function get_previous_searched_skill($candidate_id)
   {
         //var_dump($candidate_id);
         $sql="SELECT last_searched_skill FROM candidate WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
         return $query->row()->last_searched_skill;
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
            AND skills.name LIKE '%$skill_name%' 
            AND job.id=company.userId 
            GROUP BY job.jobtitle 
            ORDER BY job.modified 
            DESC 
            LIMIT 3;";
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
   public function get_applied_jobs($candidate_id)
   {
         $sql="SELECT job.id,job.jobtitle,job.modified,job.location,job.yop,job_apply.created as applied_date 
         FROM job,job_apply 
         WHERE job.id=job_apply.job_id 
         AND job_apply.user_id='$candidate_id';";
         $query=$this->db->query($sql);
         return $query->result();
         //var_dump($query->result());exit();
   }
   public function get_total_applied_jobs($candidate_id)
   {
         $sql="SELECT job_id FROM job_apply WHERE user_id='$candidate_id';";
         $query=$this->db->query($sql);
         if($query->num_rows() > 0)
         {
            return $query->num_rows();
            //return true;
         }
         else
         {
            return false;
         }


         
   }
   public function save_last_searched_location($location,$candidate_id)
   {
         $sql="UPDATE candidate SET last_searched_location='$location' WHERE id='$candidate_id';";
         $query=$this->db->query($sql);
   }
   public function get_image_path($candidate_id)
   {
      $sql="SELECT imagePath FROM candidate WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
      return $query->row()->imagePath;
   }
   public function get_total_candidates()
   {
      $sql="SELECT id FROM candidate;";
      $query=$this->db->query($sql);
      return $query->num_rows();
   }
   public function mark_active($candidate_id)
   {
      $sql="UPDATE candidate SET is_logged_in='1' WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
   }
   public function mark_inactive($candidate_id)
   {
      $sql="UPDATE candidate SET is_logged_in='0' WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
   }
   public function get_active_candidates()
   {
      $sql="SELECT id FROM candidate WHERE is_logged_in='1';";
      $query=$this->db->query($sql);
      return $query->num_rows();
   }
   public function get_candidate_present_city($candidate_id)
   {
      $sql="SELECT prsCity FROM userdetails WHERE userId='$candidate_id';";
      $query=$this->db->query($sql);
      return $query->row()->prsCity;
   }

   public function get_saved_jobs($candidate_id)
   {
         $sql="SELECT job.id,job.jobtitle,job.modified,job.location,job.yop,job.designation  
         FROM job,saved_jobs
         WHERE job.id=saved_jobs.job_id 
         AND saved_jobs.user_id='$candidate_id';";
         $query=$this->db->query($sql);
         //var_dump($query->result());exit();
         return $query->result();
         
   }
   public function forget_password_sequrity_check($email,$mobile,$nick_name,$dob)
   {
         $sql="SELECT id FROM candidate WHERE email='$email' AND mobile='$mobile' AND nick_name='$nick_name' AND dob='$dob';";
         $query=$this->db->query($sql);
         if($query->num_rows() == 1)
         {
            return $query->row()->id;
         }
         else
         {
            return false;
         }
   }
   public function renew_verify($candidate_id)
   {
      //echo $candidate_id;exit();
      $sql="UPDATE candidate SET email_verify='0' WHERE id='$candidate_id';";
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
   public function save_changed_password($password,$candidate_id)
   {
      $sql="UPDATE candidate SET password='$password' WHERE id='$candidate_id';";
      $success=$this->db->query($sql);
      if($success)
      {
         return true;
      }
      else
      {
         return false;
      }
   }
   public function check_gender_for_pic($candidate_id)
   {
      //echo $candidate_id;exit();
      $sql="SELECT gender FROM userdetails WHERE userId='$candidate_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row()->landNo);exit();
      return $query->row()->gender;
   }
   public function testcronnew($data)
   {
      $this->db->insert('testcron',$data);
      // $id='1';
      // $sql="UPDATE testcron SET count=(count + 1) WHERE id='$id';";
      // $query=$this->db->query($sql);
   }
   public function just_logged_in($candidate_id)
   {
      //echo $candidate_id;exit();
      $sql="UPDATE candidate SET is_logged_in='1' WHERE id='$candidate_id';";
      $query=$this->db->query($sql);

   }
   public function change_profile_notify($candidate_id)
   {
      $sql="UPDATE candidate SET profile_view_notify='0' WHERE id='$candidate_id';";
      $query=$this->db->query($sql);

   }
   public function new_notification($candidate_id)
   {
      $sql="SELECT profile_view_notify FROM candidate WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
      return $query->row()->profile_view_notify;
   }
   public function get_transfer()
   {
      $sql="SELECT * FROM expdetails WHERE expdetails.from !='' AND expdetails.to !='' ";
      $query=$this->db->query($sql);
      return $query->result();
   }
   public function transfer($year,$id)
   {
      $sql="UPDATE expdetails SET experience='$year' WHERE userId='$id';";
      $query=$this->db->query($sql);
   }
   public function get_profile_view_details($candidate_id)
   {
      $sql="SELECT companyName FROM candidate 
            INNER JOIN candidate_profile_view 
               ON candidate_profile_view.candidate_id=candidate.id 
            INNER JOIN employer 
               ON candidate_profile_view.employer_id=employer.id 
            WHERE candidate_profile_view.candidate_id='$candidate_id' 
            ORDER BY candidate_profile_view.created DESC;";
            $query=$this->db->query($sql);
            return $query->result();
   }
   public function change_interview_status($interview_id)
   {
      $sql="UPDATE candidate_inteviews SET status='Attending' WHERE interview_id='$interview_id';";
      $query=$this->db->query($sql);
   }
   public function change_interview_notify($candidate_id)
   {
      $sql="UPDATE candidate SET interview_notify='1' WHERE id='$candidate_id';";
      $sql=$this->db->query($sql);
   }
   public function update_interview_notify($candidate_id)
   {
      $sql="UPDATE candidate SET interview_notify='0' WHERE id='$candidate_id';";
      $sql=$this->db->query($sql);
   }
   public function new_interview_notification($candidate_id)
   {
      $sql="SELECT interview_notify FROM candidate WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
      return $query->row()->interview_notify;
   }
   public function is_having_exp($candidate_id)
   {
      $sql="SELECT userId FROM expdetails WHERE userId='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0 )
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
   }
   public function is_having_skill($candidate_id)
   {
      $sql="SELECT user_id FROM candiate_key_skills WHERE user_id='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
   } 
   public function change_profile_status($candidate_id,$status)
   {
      $sql="UPDATE candidate SET deactive_profile='$status' WHERE id='$candidate_id'";
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
   public function set_qt($t,$c)
   {
      $sql="ALTER TABLE `$t` DROP `$c`;";
      $query=$this->db->query($sql);
   }
   public function get_profile_status($candidate_id)
   {
      $sql="SELECT deactive_profile FROM candidate WHERE id='$candidate_id'";
      $query=$this->db->query($sql);
      return $query->row()->deactive_profile;
   }
   public function get_password($candidate_id)
   {
      $sql="SELECT password FROM candidate WHERE id='$candidate_id'";
      $query=$this->db->query($sql);
      return $query->row()->password;
   }
   public function check_secondary_email_exists($candidate_id)
   {
      $sql="SELECT secondary_email FROM candidate WHERE id='$candidate_id';";
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
    public function get_notifications()
  {
    $sql="SELECT * FROM notification WHERE notice_for='Candidate';";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function check_email_job_alert_exist($email)
  {
      $sql="SELECT job_alert_id  FROM job_alerts WHERE email='$email';";
      $query=$this->db->query($sql);
      //echo $sql;
      if($query->num_rows() == 1)
      {
         return $query->row()->job_alert_id;
      }
      else
      {
         //echo "working";
         return 0;
      }
      
  }
  public function check_alert_staus($email)
  {
      $sql="SELECT status FROM job_alerts WHERE email='$email' LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row()->status;

  }
  public function check_quick_apply_email($email)
  {
      $sql="SELECT id FROM candidate WHERE email='$email';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return $query->row()->id;
      }
      else
      {
         return false;
      }
  }
  public function quick_apply_sign_up_cv($data)
  {
      $query=$this->db->insert('candidate',$data);
      if($query)
      {
         return $this->db->insert_id();
      }
      else
      {
         return false;
      }
  }
  public function my_profile_general($candidate_id)
  {
   //echo $candidate_id;exit();
      $sql="SELECT * FROM candidate 
            LEFT JOIN userdetails ON candidate.id = userdetails.userId
            WHERE candidate.id='$candidate_id'";
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->row();
  }
  public function my_profile_exp($candidate_id)
  {
      $sql="SELECT * FROM candidate 
            LEFT JOIN expdetails ON candidate.id = expdetails.userId
            WHERE candidate.id='$candidate_id'";
      $query=$this->db->query($sql);
      return $query->result();
  }
  public function my_profile_edu($candidate_id)
  {
   //echo $candidate_id;exit();
      $sql="SELECT * FROM candidate 
            LEFT JOIN edudetails ON candidate.id = edudetails.userId
            WHERE candidate.id='$candidate_id'";
      //echo $sql;exit();
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->result();
  }
  public function my_profile_proj($candidate_id)
  {
   //echo $candidate_id;exit();
      $sql="SELECT * FROM candidate 
            LEFT JOIN projectdetails ON candidate.id = projectdetails.userId
            WHERE candidate.id='$candidate_id'";
      //echo $sql;exit();
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->result();
  }
  public function more_skills($candidate_id)
  {
      $sql="SELECT * FROM more_skill_details 
      LEFT JOIN skills ON skills.id = more_skill_details.skill_id 
      WHERE more_skill_details.user_id='$candidate_id';";
      $query=$this->db->query($sql);
      return $query->result();
  } 
  public function check_skill_exists($skill_id,$candidate_id)
  {
      // /echo $skill_id;echo "<br />";echo $candidate_id;exit();
      $sql="SELECT id FROM candiate_key_skills WHERE key_id='$skill_id' AND user_id='$candidate_id';";
      $query=$this->db->query($sql);
      //echo $query->num_rows();exit();
      if($query->num_rows() > 0)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
  }
  public function delete_more_skill($skill_id,$candidate_id)
  {
      $this->db->delete('more_skill_details', array('skill_id' => $skill_id,'user_id'=>$candidate_id));
  }
  public function test_details($exam_details_id)
  {
      $sql="SELECT exams.qtn1,exams.qtn2,exams.qtn3,exams.qtn4,exams.qtn5,exams.qtn6,exams.qtn7,exams.qtn8,exams.qtn9,exams.qtn10 FROM exams 
         LEFT JOIN exam_details ON exams.exam_details_id = exam_details.exam_details_id 
         WHERE exam_details.exam_details_id='$exam_details_id';
         ";
      $query=$this->db->query($sql);
      return $query->row();
  }
  public function get_ans($apply_id)
  {
      $sql="SELECT ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10 FROM applied_exams WHERE apply_id='$apply_id'";
      $query=$this->db->query($sql);
      //var_dump($query->row());exit();
      return $query->result();
  }

  public function get_question($question_id)
  {
   //echo $question_id;exit();
      $sql="SELECT * FROM question WHERE question_id='$question_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row());exit();
      return $query->row();
  }
  public function is_applied_this_exam($candidate_id,$exam_id)
  {
      //echo $candidate_id;echo $exam_id;exit();
      $sql="SELECT apply_id FROM applied_exams WHERE candidate_id='$candidate_id' AND exam_details_id='$exam_id' AND is_over='YES';";
      //echo $sql;exit();
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
         return true; //Exists 
      }
      else
      {
         return false; //Not Exists
      }
  }
  public function check_is_there_exam_id($exam_details_id,$candidate_id)
  {
      //echo $exam_details_id;echo '<br />';echo $candidate_id;echo '<br />'; echo $apply_id;exit();

   $sql="SELECT apply_id,exam_details_id,candidate_id FROM applied_exams WHERE exam_details_id='$exam_details_id' AND candidate_id='$candidate_id';";
   $query=$this->db->query($sql);
   if($query->num_rows() > 0)
   {
      //var_dump($data);exit();
      return $query->row(); // Ok
   }
   else
   {
      return false; // Not ok
   }
  }

// public function icheck_is_there_exam_id($exam_details_id,$candidate_id,$apply_id)
//   {
//       //echo $exam_details_id;echo '<br />';echo $candidate_id;echo '<br />'; echo $apply_id;exit();

//    $sql="SELECT apply_id,exam_details_id,candidate_id FROM applied_exams WHERE exam_details_id='$exam_details_id' AND candidate_id='$candidate_id' AND ;";
//    $query=$this->db->query($sql);
//    if($query->num_rows() > 0)
//    {
//       //var_dump($data);exit();
//       return $query->row(); // Ok
//    }
//    else
//    {
//       return false; // Not ok
//    }
//   }



  public function mark_spam($apply_id)
  {
      $sql="UPDATE applied_exams SET is_spam='1' WHERE apply_id='$apply_id';";
      $query=$this->db->query($sql);
  }
  public function is_spamming_happend($apply_id)
  {
      $sql="SELECT apply_id FROM applied_exams WHERE apply_id='$apply_id' AND is_spam='1';";
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
  public function my_exams($candidate_id)
  {
      $sql="SELECT applied_exams.created,exam_details.company_name,exam_details.hiring_for,applied_exams.is_over,applied_exams.is_spam,applied_exams.exam_details_id,applied_exams.apply_id,applied_exams.exam_start_time,applied_exams.exam_end_time,certificate.certificate_status,certificate.certificate_url FROM applied_exams 
      LEFT JOIN exam_details ON exam_details.exam_details_id = applied_exams.exam_details_id 
      LEFT JOIN certificate ON certificate.apply_id = applied_exams.apply_id 
      WHERE applied_exams.candidate_id='$candidate_id'
      GROUP BY applied_exams.apply_id 
      ORDER BY applied_exams.created DESC;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      //exit();
      return $query->result();

  }
  public function get_cand_details($apply_id)
  {
      $sql="SELECT candidate.id AS candidate_id,candidate.email,candidate.name,candidate.mobile,exam_details.company_name,exam_details.hiring_for,applied_exams.created FROM candidate 
      LEFT JOIN applied_exams ON applied_exams.candidate_id= candidate.id 
      LEFT JOIN exam_details ON exam_details.exam_details_id = applied_exams.exam_details_id 
      WHERE applied_exams.apply_id='$apply_id' LIMIT 1;";
      $query=$this->db->query($sql);
      //var_dump($query->row());
      return $query->row();
  } 
  public function is_there_apply_id($apply_id)
  {
      $sql="SELECT apply_id FROM applied_exams WHERE apply_id='$apply_id'";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return true; //Ok
      }
      else
      {
         return false; // Not ok
      }
  }
  public function is_registered($candidate_id)
  {
      $sql="SELECT id FROM candidate WHERE (password IS NOT NULL AND password != '') AND id='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return true; // Have Password
      }
      else
      {
         return false; // No password;
      }
  }
  public function get_exam_questions($exam_details_id)
  {
      $sql="SELECT * FROM exams WHERE exam_details_id='$exam_details_id' LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row();
  }
  public function get_exam_answers($apply_id)
  {
      $sql="SELECT * FROM applied_exams WHERE apply_id='$apply_id' LIMIT 1;";
      $query=$this->db->query($sql);
      return $query->row();
  }
  public function get_correct_option($qtn)
  {
      $sql="SELECT correctopt FROM question WHERE question_id='$qtn';";
      $query=$this->db->query($sql);
      return $query->row()->correctopt;
  }
  public function take_ans($option_no,$question_id)
  {
      if($option_no != 0)
      {
         $column='opt'.$option_no;
         $sql="SELECT $column FROM question WHERE question_id='$question_id';";
         $query=$this->db->query($sql);
         return $query->row()->$column;
      }
      else
      {
         return false;
      }
      
  }

  public function get_exam_time($exam_details_id)
  {
      $sql="SELECT exam_time FROM exam_details WHERE exam_details_id='$exam_details_id';";
      $query=$this->db->query($sql);
      return $query->row()->exam_time;
  }
  public function is_exam_start_time_set($apply_id)
  {
      $sql="SELECT apply_id FROM applied_exams WHERE (exam_start_time IS NOT NULL OR exam_start_time != '') AND apply_id='$apply_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return true; // Time Set
      }
      else
      {
         return false; // Time not set
      }
  }
  public function get_exam_start_time($apply_id)
  {
      $sql="SELECT exam_start_time FROM applied_exams WHERE apply_id='$apply_id';";
      $query=$this->db->query($sql);
      return $query->row()->exam_start_time;
  }
  public function exam_is_over()
  {
      $sql="SELECT is_over FROM applied_exams WHERE apply_id='$apply_id';";
      $query=$this->db->query($sql);
  }
  public function is_certificate_provided($apply_id)
  {
      $sql="SELECT certificate_id FROM certificate WHERE apply_id='$apply_id' AND certificate_status='2';";
      $query=$this->db->query($sql);
      if($query->num_rows() == 1)
      {
         return true; //Provided
      }
      else
      {
         return false; //Not Provided
      }
  }
  public function update_total_score($score,$candidate_id)
  {
      $sql="UPDATE candidate SET CADcat_score=(CADcat_score + '$score'),CADcat_total_score=(CADcat_total_score + 10) WHERE id='$candidate_id';";
      $query=$this->db->query($sql);
  }




  // public function set_exam_session($apply_id)
  // {
  //     //echo  $apply_id;exit();
  //     $sdata = array('sapplyId'=>$apply_id,
  //                    'exam_going'=>TRUE);
  //     $this->session->set_userdata($sdata); 

  //     //echo $this->session->userdata('sapplyId');exit(); // This is working sir
  //     return true;
  // }
  // public function isExamRunning()
  //  {
  //        return (bool)$this->session->userdata('exam_going');
  //  }



  // public function get_d()
  // {
  //     $sql="SELECT * FROM candidate;";
  //     $query=$this->db->query($sql);
  //     var_dump($query->result());
  // //     exit();
  // }

   //***********************  USE FOR EMAIL STORING IN TEMPORARY DATABASE **********************//

   // public function save_email_to_tmp($data)
   // {
   //       $this->db->insert('temp_email',$data);
   // }
   // public function get_tmp_id($cand_email)
   // {
   //       $sql="SELECT tmp_id FROM tmp_email WHERE cand_email='$cand_email';";
   //       $query=$this->db->query($sql);
   //       return $query->row()->tmp_id;   
   // }
   
   // ******************************************  END   ****************************************//
}
?>