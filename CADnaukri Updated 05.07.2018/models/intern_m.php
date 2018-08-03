<?php
class Intern_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'intern';
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
		$this->load->helper('date');
		
	}
	public function get_new()
	{
		$candidate = new stdClass();
		$candidate->name='';
		//$candidate->lName='';
		//$candidate->mName='';
		$candidate->password='';
		$candidate->email='';
		$candidate->phno='';
		return $candidate;
	}
	public function login()
	{
		$user = $this->get_by(array(
									'email'=> $this->input->post('email_id'),
									'password' =>md5($this->input->post('password')),
									), TRUE);
		if(count($user))
		{
			  if($this->session->userdata('candidate_id') || $this->session->userdata('emp_id') 
             || $this->session->userdata('intern_id') || $this->session->userdata('superadminId'))
			{
					$this->session->sess_destroy();
			}
			$data = array('name'=>$user->name,
						  //'lName'=>$user->lName,
						  'intern_id'=>$user->id, 
						  'email'=>$user->email,
						  'phno'=>$user->phno,
						  'loggedin'=>TRUE);
			$this->session->set_userdata($data);
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
		return (bool)$this->session->userdata('loggedin');
	}
	public function check_email_exist()
	{
		$email=$this->input->post('email_id');
		$user_exist = $this->get_by(array('email'=> $email), TRUE);
		if(count($user_exist) > 0)
		{
			return TRUE;
		}
         return FALSE;
	
	}
	public function save_internship_apply($data)
	{
		$success=$this->db->insert('internship_apply',$data);
		if($success)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
    function email_exists($email){
            $this->db->select('*');
            $this->db->from('intern');
           $this->db->where('email',$email);
            $this -> db -> where('isActive', 1);
	  // $this->db->where('isEmailVerified','1');
           $query = $this->db->get();
           return $result = $query->num_rows();
        }
        public function insert_inern($data) {
        $this->db->insert('intern',$data); 
        }
     /*  public  function login($email, $password){ 
                 $encryptedpass=md5($password);
	          $this -> db -> select('id, email, password');
		   $this -> db -> from('intern');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
                    $this -> db -> where('isActive', 1);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
				return 1;
		   }
		   else
		   {
				return 0;
		   }
 	}*/
      function internInfo($email, $password)
	{ 
		 $encryptedpass=md5($password);
		   $this -> db -> select('id ');
		   $this -> db -> from('intern');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		  $this -> db -> where('isActive', 1);
		   $query = $this->db->get();
                  return $query->result();
 	}
       
         public function interinfobyId($internId){
             $this -> db -> select('* ');
		   $this -> db -> from('intern');
		   $this -> db -> where('id', $internId);
                    $this -> db -> where('isActive', 1);
		   $query = $this->db->get();
                  return $query->result();
             
         }
        public function insert_edudetails($data) {
        $this->db->insert('intern_edudetails',$data); 
        }
        public function insert_internPreference($data) {
        $this->db->insert('intern_prefer',$data); 
        }
        public function intern_edudetails($internId){
             $this -> db -> select('* ');
		   $this -> db -> from('intern_edudetails');
		   $this -> db -> where('internId', $internId);
                    $this -> db -> where('isActive', 1);
		   $query = $this->db->get();
                  return $query->result();
             
         }
         public function intern_info($internId){
             $this -> db -> select('* ');
		   $this -> db -> from('intern');
		   $this -> db -> where('id', $internId);
                    $this -> db -> where('isActive', 1);
		   $query = $this->db->get();
                  return $query->result();
             
         }
         public function update_edudetails($internId,$data)
         {
             $this->db->where('internId',$internId);			
	           $this->db->update('intern_edudetails',$data);
             
             
         }
          public function intern_prefrence($internId){
             $this -> db -> select('* ');
		   $this -> db -> from('intern_prefer');
		   $this -> db -> where('id', $internId);
                    $this -> db -> where('isActive', 1);
		   $query = $this->db->get();
                  return $query->result();
             
         }
         public function update_internPreference($internId,$data){
             $this->db->where('internId',$internId);			
	      $this->db->update('intern_prefer',$data);
             
          }
          public function insert_intership($data){
                $this->db->insert('internsip',$data); 
          }
          public function applied_intership($data){
                $this->db->insert('intership_apply',$data); 
          }
          /******************USER RESET PASSWORD***********************************/
       public function updatePassword($email,$encryptedpass){
				
				$data=array('password'=>$encryptedpass);				
	                     $this->db->where('email',$email);			
	                  $this->db->update('intern',$data);
				
			}
	 public function check_url($id)
    {
        //echo $id;exit();
        $sql="SELECT id FROM intern WHERE id='$id' AND email_verify= 0;";
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
    public function save_sequrity_ans($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('intern',$data);
    }
      public function set_password($password,$id)
    {
        $sql="UPDATE intern SET password='$password',email_verify='1' WHERE id='$id';";
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
    public function get_intern_details($id)
    {
    	//echo $id;exit();
    	$sql="SELECT * 
    	FROM intern
    	WHERE id='$id';";
    	$query=$this->db->query($sql);
    	//var_dump($query->result());exit();
    	return $query->result();
    }
    public function get_intern_edu_details($id)
    {
    	//echo $id;exit();
    	$sql="SELECT * 
    	FROM intern_edudetails
    	WHERE internId='$id';";
    	$query=$this->db->query($sql);
    	//var_dump($query->result());exit();
    	return $query->result();
    }
    public function get_internship_details($internship_id)
 	{
 		$sql="SELECT internsip.id AS internship_id,skills.name AS skill_name,internsip.duration,internsip.stipend,internsip.whocanapply,internsip.noofintership,internsip.startDate,internsip.endDate,internsip.location,internsip.title,company.name AS company_name,internsip.description FROM internsip 
 		LEFT JOIN job_skills ON internsip.id = job_skills.job_id 
 		LEFT JOIN skills ON skills.id= job_skills.skill_id   
    LEFT JOIN company ON company.id=internsip.companyId 
    LEFT JOIN employer ON company.userid=employer.id 
 		WHERE internsip.id ='$internship_id' 
 		AND job_skills.is_internship = '1' LIMIT 1;";
 		//echo $sql;exit();
 		$query=$this->db->query($sql);
 		//var_dump($query->result());exit();
 		return $query->result();

 	}
 	 public function get_all_internships()
 	{
 		$sql="SELECT internsip.id AS internship_id,skills.name AS skill_name,internsip.duration,internsip.stipend,internsip.whocanapply,internsip.noofintership,internsip.startDate,internsip.endDate,internsip.location,internsip.title FROM internsip 
 		LEFT JOIN job_skills ON internsip.id = job_skills.job_id 
 		LEFT JOIN skills ON skills.id= job_skills.skill_id 
 		WHERE job_skills.is_internship = '1' 
 		GROUP BY internsip.title  
 		ORDER BY internsip.created DESC;";
 		//echo $sql;exit();
 		$query=$this->db->query($sql);
 		//var_dump($query->result());exit();
 		return $query->result();

 	}
 	public function check_applied($intern_id,$internship_id)
 	{
 		//echo $intern_id;echo $internship_id;exit();
 		$sql="SELECT id FROM internship_apply WHERE intern_id='$intern_id' AND internship_id='$internship_id';";
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
  public function check_have_cv($intern_id)
  {
    $sql="SELECT id FROM intern WHERE id='$intern_id' AND cvpath IS NOT NULL;";
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
 	public function cv_upload($data)
   	{
   		$query=$this->db->insert('quick_apply_interns',$data);
   		if($query)
   		{
   			return $this->db->insert_id();
   		}
   		else
   		{
   			return false;
   		}

   	}
   	public function get_emp_email($internship_id)
   	{
   		$sql="SELECT email FROM employer 
   			LEFT JOIN internsip ON employer.id = internsip.userid 
   			WHERE internsip.id='$internship_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->email;
   	}
   	public function get_emp_name($internship_id)
   	{
   		$sql="SELECT name FROM employer 
   			LEFT JOIN internsip ON employer.id = internsip.userid 
   			WHERE internsip.id='$internship_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->name;
   	}
   	public function get_internship_title($internship_id)
   	{
   		$sql="SELECT title FROM internsip WHERE internsip.id='$internship_id';";
   		$query=$this->db->query($sql);
   		return $query->row()->title;
   	}
   	public function quick_apply_details($apply_id)
   	{
   		$sql="SELECT * FROM quick_apply_interns WHERE apply_id='$apply_id'";
   		$query=$this->db->query($sql);
   		return $query->row();
   	}
    
    public function save_last_login_ip($ip,$intern_id)
   {
      $sql="UPDATE intern SET last_login_ip='$ip' WHERE id='$intern_id';";
      $query=$this->db->query($sql);
   }
   public function save_last_login_date($date,$intern_id)
   {
      $sql="UPDATE intern SET last_login_date='$date' WHERE id='$intern_id';";
      $query=$this->db->query($sql);
   }
   public function get_last_login_ip($intern_id)
   {
      $sql="SELECT last_login_ip FROM intern WHERE id='$intern_id';";
      $query=$this->db->query($sql);
      return $query->row()->last_login_ip;
   }
   public function get_last_login_date($intern_id)
   {
      $sql="SELECT last_login_date FROM intern WHERE id='$intern_id';";
      $query=$this->db->query($sql);
      return $query->row()->last_login_date;
   }
   public function save_last_applied_internship($internship_name,$intern_id)
   {
      $sql="UPDATE intern SET last_applied_internship='$internship_name' WHERE id='$intern_id';";
      $query=$this->db->query($sql);
   }
   public function get_last_applied_internship($intern_id)
   {
      $sql="SELECT last_applied_internship FROM intern WHERE id='$intern_id';";
      $query=$this->db->query($sql);
      return $query->row()->last_applied_internship;
   }
   public function get_internship_name($internship_id)
   {
      $sql="SELECT title FROM internsip WHERE id='$internship_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row()->email);exit();
      return $query->row()->title;
   }
   public function cvupload($data,$id)
    {
      $this->db->where('id', $id); 
      $query=$this->db->update('intern',$data);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }

    }
    public function get_all_intern_details($id)
    {
      //echo $id;exit();
      $sql="SELECT * FROM intern 
      LEFT JOIN intern_edudetails ON intern.id=intern_edudetails.internId 
      WHERE intern.id='$id';";
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->row();
    }
    public function check_update_pass($id,$password)
    {
      $sql="SELECT password FROM intern WHERE id='$id' AND password='$password';";
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
    public function get_applied_internships($intern_id)
    {
        $sql="SELECT internsip.title,internship_apply.created AS applied_date,internsip.location AS location,company.name AS company_name FROM internsip 
        JOIN internship_apply ON internship_apply.internship_id = internsip.id 
        JOIN company ON company.id=internsip.companyId 
        AND internship_apply.intern_id='$intern_id' 
        GROUP BY internsip.title 
        ORDER BY internship_apply.created DESC;";
        $query=$this->db->query($sql);
        //var_dump($query->result());exit();
        return $query->result();
    }
    public function get_resume_name($intern_id)
    {
        $sql="SELECT cvname FROM intern WHERE id='$intern_id';";
        $query=$this->db->query($sql);
        return $query->row()->cvname;
    }
    public function check_security_questions($dob,$nick_name,$email)
    {
        $sql="SELECT id FROM intern WHERE dob='$dob' AND nick_name='$nick_name' AND email='$email';";
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