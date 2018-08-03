<?php
class View_M extends MY_Model 
{
    	
    function __construct()
	{
		parent::__construct();
		  $this->load->helper('date');
		
	}
/*#################### Candidate Login ####################*/	
	function login($email, $password)
		 { $encryptedpass=md5($password);
		   $this -> db -> select('id, email, password');
		   $this -> db -> from('candidate');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
				return 1;
		   }
		   else
		   {
				return 0;
		   }
 		}
 		function getCandidateId($email,$password){
 		
 		$encryptedpass=md5($password);
		   $this -> db -> select('id');
		   $this -> db -> from('candidate');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
				return $query->result();
		   }
		   else
		   {
				return 0;
		   }
 		}
		/*#################### Candidate Provider name and id ####################*/	
	function cand_provider($email, $password)
		 { 
		 $encryptedpass=md5($password);
		   $this -> db -> select('id ,socialProvider');
		   $this -> db -> from('candidate');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		 
		   $query = $this->db->get();
            return $query->result();
 		}
/*#################### Employer Login ####################*/	
		function emplogin($email, $password)
		 {			$encryptedpass=md5($password);
		   $this -> db -> select('id, email, password');
		   $this -> db -> from('employer');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
				return 1;
		   }
		   else
		   {
				return 0;
		   }
 		}
/*#################### Candidate Data Insertion ####################*/		
  	public function insert_userlogin($data)
	{
      $this->db->insert('candidate',$data); 
        return $this->db->insert_id();


    }
     public function cand_emailverify($userId,$rand){
	        $this-> db -> select('*');
		   $this -> db -> from('candidate');
		   $this -> db -> where('id', $userId);
		   $this -> db -> where('emailVerificationCode', $rand);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
                $data=array('isEmailVerified'=>1);				
	            $this->db->where('id',$userId);			
	            $this->db->update('candidate',$data);
				return 1;
		   }
		   else
		   {
				return 0;
		   }
	}
      public function emailverify($randnumber,$emailid){
	        $this -> db -> select('emailVerificationCode');
		   $this -> db -> from('candidate');
		   $this -> db -> where('email', $emailid);
		   $this -> db -> where('emailVerificationCode', $randnumber);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
                       $data=array('isEmailVerified'=>1);				
	              $this->db->where('email',$emailid);			
	            $this->db->update('candidate',$data);
				return 1;
		   }
		   else
		   {
				return 0;
		   }
	}
	
	    public function mobileverify($mrandnumber,$id){
	   $this -> db -> select('mobileVerificationCode');
		   $this -> db -> from('candidate');
		   $this -> db -> where('id', $id);
		   $this -> db -> where('mobileVerificationCode', $mrandnumber);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
                       $data=array('isMobileVerified'=>1);				
	              $this->db->where('id',$id);			
	            $this->db->update('candidate',$data);
				return 1;
		   }
		   else
		   {
				return 0;
		   }
	}
/*#################### Employer Data Insertion ####################*/
		public function insert_emplogin($data)
	    {
        $this->db->insert('employer',$data); 
        }
		 public function empemailverify($randnumber,$email){
		   $this -> db -> select('emailVerificationCode');
		   $this -> db -> from('employer');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('emailVerificationCode', $randnumber);
		   $query = $this -> db -> get();
		   if($query -> num_rows() > 0)
		   {
				return 1;
		   }
		   else
		   {
				return 0;
		   }
	}
/*#################### Candidate Email or Phone Exist####################*/
		   public function email_exists($emailid)
      {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where('email',$emailid);	
		$this->db->where('isEmailVerified','1');
        $query = $this->db->get();
        return $result = $query->num_rows();
    
   }
	   public function phoneno_exists($phoneno)
{
       $this->db->select('*');
       $this->db->from('candidate');
       $this->db->where('mobile',$phoneno);	 
	   $this->db->where('isMobileVerified','1');
       $query = $this->db->get();
       return $result = $query->num_rows();
    
}	
/*#################### Employer Email or Phone Exist####################*/
				   public function email1_exists($email)
		{
				$this->db->select('*');
				$this->db->from('employer');
				$this->db->where('email',$email);
				$query = $this->db->get();
				return $result = $query->num_rows();
			
		}
			   public function mobile_exists($mobile)
				{
			   $this->db->select('*');
			   $this->db->from('employer');
			   $this->db->where('mobile',$mobile);
			   $query = $this->db->get();
			   return $result = $query->num_rows();
			
				}	
		      public function logout()
			   {
				$this->session->sess_destroy();
			   }
/******************USER RESET PASSWORD***********************************/
			public function updatePassword($email,$encryptedpass){
				
				$data=array('password'=>$encryptedpass);				
	                     $this->db->where('email',$email);			
	                  $this->db->update('candidate',$data);
				
			}
/******************USER Education details*********************************/
                       public function insert_edudetails($data1)
                        {
                      $this->db->insert('edudetails',$data1); 
                      }
                    public function insert_userdetails($userdata)
                    {
                        $this->db->insert('userdetails',$userdata); 
                    }
                      public function insert_projectdetails($projectdata)
                    {
                       $this->db->insert('projectdetails',$projectdata); 
                      }
                     public function insert_compnydetails($companydata)
                    {
                       $this->db->insert('expdetails',$companydata); 
                     }
					   public function insert_clientdetails($clientdetails)
                    {
                       $this->db->insert('client',$clientdetails); 
                     }
                     /*Retriving User Id*/
                  public  function getId($email,$socialProvider){
                 $this->db->select("id"); 
                 $this->db->from('candidate');
                  $this->db->where('email',$email);
                   $this->db->where('socialProvider',$socialProvider);
                 $query = $this->db->get();
                 return $query->result();
                }
				  /*Retriving fName Id*/
                  public  function getFname($email,$socialProvider){
                 $this->db->select("fName"); 
                 $this->db->from('candidate');
                  $this->db->where('email',$email);
                   $this->db->where('socialProvider',$socialProvider);
                 $query = $this->db->get();
                 return $query->result();
                }
				 /*Retriving Usser Id*/
                  public  function getEmp_Id($email,$socialProvider){
                 $this->db->select("id"); 
                 $this->db->from('employer');
                  $this->db->where('email',$email);
                   $this->db->where('socialProvider',$socialProvider);
                 $query = $this->db->get();
                 return $query->result();
                }
				 /*Retriving Employee First Name Id*/
                  public  function getEmpFname($empId){
                 $this->db->select("fName"); 
                 $this->db->from('employer');
                  $this->db->where('id',$empId);
                  // $this->db->where('socialProvider',$socialProvider);
                 $query = $this->db->get();
                 return $query->result();
                }
                  public  function update_userProfilePic($userId,$data){
                      $this->db->where('id',$userId);			
	                  $this->db->update('candidate',$data);
                      
                  }
				  public  function empUpdate_userProfilePic($userId,$data){
                      $this->db->where('id',$userId);			
	                  $this->db->update('employer',$data);
                      
                  }
                  public  function getUserData($userId){
                       $this->db->select("*");
                    $this->db->from('candidate');
                    //$this->db->join('expdetails', 'expdetails.userId = candidate.id');
                     $this->db->join('edudetails', 'edudetails.userId = candidate.id');
                     $this->db->join('userdetails', 'userdetails.userId = candidate.id');
                     $this->db->where('candidate.id',$userId);
                     $this->db->group_by('candidate.id'); 
                     
                    $query = $this->db->get();
                    return $query->result();
                      
                  }
				   public  function getUserDatadate($userId){
                       $this->db->select("*");
                    $this->db->from('candidate');
                     $this->db->where('id',$userId);
                    $query = $this->db->get();
                    return $query->result();
                      
                  }
				  
                   public  function getUserMobile($userId){
                       $this->db->select("mobile"); 
                 $this->db->from('candidate');
                  $this->db->where('id',$userId);
                 //  $this->db->where('socialProvider',$socialProvider);
                 $query = $this->db->get();
                 return $query->result();
                   }
                     public  function updateMobCode($userId,$rand){
                         $data=array('mobileVerificationCode'=>$rand);				
	                     $this->db->where('id',$userId);			
	                  $this->db->update('candidate',$data);
                         
                     }
                     public function getOnlyUserData($userId){
                          $this->db->select("*");
                    $this->db->from('candidate');
                    $this->db->where('candidate.id',$userId);
                     $this->db->group_by('candidate.id'); 
                     
                    $query = $this->db->get();
                    return $query->result();
                     }
					 /******************EMPLOYER RESET PASSWORD********/

			public function empupdatePassword($email,$encryptedpass)
			{
				
				$data=array('password'=>$encryptedpass);				
	                     $this->db->where('email',$email);			
	                  $this->db->update('employer',$data);
				
			}
/**************************Insert Company Data*****************************/
			public function insert_companydata($compdata)
			{
		  $this->db->insert('company',$compdata); 
			}
			/**************************Insert Service Of A Company Data*****************************/
			public function insert_servicedata($servicedata)
			{
		  $this->db->insert('service',$servicedata); 
			}
/**************************Insert Job Data*****************************/
			public function insert_jobdata($jobdata)
			{
		  $this->db->insert('job',$jobdata); 
			}
/**************************Fetch Comapny Data*****************************/
    public function companydata($userId){
		
               $this->db->select('company.id,company.name,company.tagline,company.teamsize,company.regdoffc,company.address,company.website,company.phno,company.mobile,company.email,company.description');
               $this->db->from('company');
               $this->db->join('employer','company.userId = employer.id');
               $this->db->where('employer.id', $userId);
               $this->db->where('company.isActive', 1); 
	       $this->db->group_by('company.id'); 
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
/**************************Fetch Job Data*****************************/
    public function jobdata($userId){
               $this->db->select('job.id,job.jobtitle,job.yop,job.location,job.minsal,job.maxsal,job.description,job.skills,job.lastdate,company.name');
               $this->db->from('job');
               $this->db->join('employer','job.userId = employer.id');
			   $this->db->join('company','job.companyId = company.id');
			   //$this->db->join('company','job.userId = company.userId');
               $this->db->where('employer.id', $userId); 
               $this->db->where('job.isActive', 1);
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
			
/**************************Fetch Job Data*****************************/
    public function getempid($email){
               $this->db->select('id');
               $this->db->from('employer');
              // $this->db->join('employer','job.userId = employer.id');
               $this->db->where('email', $email); 
               $query = $this->db->get();
               $result = $query->result();
               return $result; 
            }
			public function Cand_update($userId,$data){
				 $this->db->where('id',$userId);			
	                  $this->db->update('candidate',$data);
			}
          public function editprofile($userId){
		$this->db->select('*');
        $this->db->from('candidate');
		$this->db->join('userdetails','userdetails.userId = candidate.id');
		$this->db->join('edudetails','edudetails.userId = candidate.id');
		$this->db->join('projectdetails','projectdetails.userId = candidate.id');
		$this->db->where('candidate.id', $userId);
		$this->db->group_by('candidate.id');
        $query = $this->db->get();
        return  $result = $query->result();
		//print_r($result);

	}
	
       public function update_userdetails($usereditdata,$userId)
			{
				 $this->db->where('userId',$userId);			
	                  $this->db->update('userdetails',$usereditdata);
			}
		
                        
                        public function updateEmpPassword($email,$encryptedpass){
				
				$data=array('password'=>$encryptedpass);				
	                     $this->db->where('email',$email);			
	                  $this->db->update('employer',$data);
				
			}
                         public  function update_empuserProfilePic($email,$data){
                      $this->db->where('email',$email);			
	                  $this->db->update('employer',$data);
                      
                  }
                  public function getempDetails($userId){
                       $this->db->select('*');
               $this->db->from('employer');
              // $this->db->join('employer','job.userId = employer.id');
               $this->db->where('id', $userId); 
               $query = $this->db->get();
               $result = $query->result();
               return $result; 
                  }
                  public function emp_updatePassword($userId,$encryptedpass){
				
				$data=array('password'=>$encryptedpass);				
	                     $this->db->where('id',$userId);			
	                  $this->db->update('employer',$data);
				
			}
/**********************Diaplay Matching job*********************/
			 public function getcandidatedata($userId){
               $this->db->select('*');
               $this->db->from('edudetails');
              //$this->db->join('employer','job.userId = employer.id');
               $this->db->where('userId', $userId); 
               $query = $this->db->get();
               $result = $query->result();
               return $result; 
                  }
			 public function getjobdata($userId){
				 $this->db->select('keyskills,industryType,preferredPosition');
               $this->db->from('userdetails');
                $this->db->where('userId', $userId);
				 $query = $this->db->get();
               $result = $query->result();
			  // print_r($result);
			  if(!empty($result)){
			   foreach($result as $res)
						{
                           // echo $result->id;
						     $keyskills=$res->keyskills;
						     $industryType=$res->industryType;
							 $preferredPosition=$res->preferredPosition;
                            
                          
							
						}
						$myArray = explode(',', $keyskills);
						//print_r($myArray);
						/*********Skills Divided to single string*********/
					$query_parts = array();
					$arrlength = count($myArray);
						for($x = 0; $x < $arrlength; $x++) {
							$skill=$myArray[$x];
						//echo $skill;
						
					//foreach ($myArray as $val) {
						//$query_parts[] = "'%".mysql_real_escape_string($val)."%'";
					

					//$string = implode(' Or job.skills  Like', $query_parts);
//}
			$query = "select company.name,job.id,job.jobtitle,job.minsal,job.maxsal,job.companyId,job.designation,job.yop,job.location,job.description,job.skills,job.additionalSkills,job.modified from job ,company where job.userId = company.userId and job.skills LIKE  '%$skill%' group by job.id";
				


				$result = $this->db->query($query)->result();
				//print_r($result);
				return $result;
				}
					
			  }
			  else{
				  
				return 0;
				
			  }
					
			}
			 public function getfavouritejobdata($userId){
				   $this->db->select('company.name,job.id,job.jobtitle,job.minsal,job.maxsal,job.companyId,job.designation,job.yop,job.location,job.description,job.skills,job.additionalSkills,job.modified');
                $this->db->from('job');
               $this->db->join('company','job.companyId = company.id');
			 
              $this->db->join('favourite', 'favourite.jobId = job.id'); 
			    $this->db->where('favourite.userId', $userId);
			     $query = $this->db->get();
               $result = $query->result();
               return $result; 
				
					
			  }
			 
				  public function getCompany($userId){
				 $this->db->select('*');
               $this->db->from('company');
                $this->db->where('userId', $userId); 
				 $this->db->group_by('userId'); 
               $query = $this->db->get();
               $result = $query->result();
               return $result; 
			}
			public function mobilenum($userId){
				 $this->db->select('*');
               $this->db->from('candidate');
                $this->db->where('id', $userId); 
               $query = $this->db->get();
               $result = $query->result();
               return $result; 
			}
/***************************Edit Job Data********************************/
 public function Editjobdata($pid){
               $this->db->select('job.jobtitle,job.yop,job.minsal,job.maxsal,job.description,job.skills,job.additionalSkills,job.qualification,job.location,job.lastdate,job.designation,company.name');
               $this->db->from('job');
               $this->db->join('company','job.userId = company.userId');
               $this->db->where('job.id', $pid); 
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
			
/******************EMPLOYER UPDATE JOBDATA****************************/
			
			 public function update_jobdata($jobid,$jobeditdata)
			{
					$this->db->where('id',$jobid);			
	                  $this->db->update('job',$jobeditdata);
			}
			 public function delete_jobdata($jobid,$deletedata)
			{
				
					$this->db->where('id',$jobid);			
	                  $this->db->update('job',$deletedata);
			}
/*************************Edit Company Data***************************/

        public function Editcompanydata($pid){
               $this->db->select('*');
               $this->db->from('company');
              // $this->db->join('company','job.userId = company.userId');
               $this->db->where('id', $pid); 
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
			
			 public function update_companydata($compid,$companyeditdata)
			{
			
					$this->db->where('id',$compid);			
	                  $this->db->update('company',$companyeditdata);
			}
/*******************EDIT  SERVICE ************************/
 public function Editservicedata($pid){
               $this->db->select('*');
               $this->db->from('service');
              // $this->db->join('company','service.userId = company.userId');
               $this->db->where('companyId', $pid); 
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
             public function update_servicedata($compid,$serviceeditdata)
			{
			
					$this->db->where('companyId',$compid);			
	                  $this->db->update('service',$serviceeditdata);
			}
/*******************EDIT  Client************************/
 public function Editclientdata($pid){
               $this->db->select('*');
               $this->db->from('client');
              // $this->db->join('company','service.userId = company.userId');
               $this->db->where('companyId', $pid); 
               $query = $this->db->get();
               $result = $query->result_array();
               return $result; 
            } 
             public function update_clientdata($compid,$clienteditdata)
			{
			
					$this->db->where('companyId',$compid);			
	                  $this->db->update('client',$clienteditdata);
			}
/**********************Delete Company Data********************************/
			 public function delete_companydata($compid,$deletedata)
			{
				
					$this->db->where('id',$compid);			
	                  $this->db->update('company',$deletedata);
			}
  
        public function update_username($updatedata,$userid)
			{
			
					$this->db->where('id',$userid);			
	                $this->db->update('candidate',$updatedata);
			}
			/*********Checking User Email**************/
			
	  public function email_exist1($email,$provider)
      {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where('email',$email);	
		 $this->db->where('socialProvider',$provider);	
		 $query = $this->db->get();
        return $result = $query->num_rows();
    
   }
   
   /*********Checking Email Email**************/
			
	  public function email_exist2($email,$provider)
      {
        $this->db->select('*');
        $this->db->from('employer');
        $this->db->where('email',$email);	
		 $this->db->where('socialProvider',$provider);	
		 $query = $this->db->get();
        return $result = $query->num_rows();
    
   }
     /*********Resemue Upload**************/
    public  function update_resume($userId,$data){
                      $this->db->where('id',$userId);			
	                  $this->db->update('candidate',$data);
                      
                  }
/*********************************Apply For Job*********************/

		public function insert_applydata($applydata)
	{
  $this->db->insert('jobapply',$applydata); 
    }
	/*********************************Update Resume in Apply For Job*********************/

	public function insert_resumejobapply($data)
	{
  $this->db->insert('jobapply',$data);
    }
/********************Search Data***********************************/
public function search_anydata($skill,$exeperience,$salary,$company_nature,$role,$location,$jobbyabroad,$company)
	{
		
		 $this->db->select('*');
		 $this->db->from('company as c');
         $this->db->join('job as j','c.id = j.companyId');
		 
		$this->db->like('j.skills', $skill); 
		$this->db->like('j.yop', $exeperience);
		$this->db->or_like('j.minsal', $salary);
		$this->db->or_like('j.maxsal', $salary); 
		$this->db->or_like('j.description', $role);
		$this->db->or_like('j.location', $location);
		$this->db->or_like('c.name', $company);	
	
			$query = $this->db->get();
            $result = $query->result();
            return $result;
		
    }
/************************************PERSIONAL DATA********************/

	public function personaldata($empid)
      {
        $this->db->select('*');
        $this->db->from('employer');
        $this->db->where('id',$empid);	
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
   
	 /*********Update Employee**************/
    public  function upadate_employee($empdetail,$userId){
                      $this->db->where('id',$userId);			
	                  $this->db->update('employer',$empdetail);
                      
                  }
      public  function upadate_employeealt($empdetailalt,$userId){
                     $this -> db -> select('id');
					$this -> db -> from('employerdetails');
					$this -> db -> where('userId', $userId);
					$query = $this -> db -> get();
					if($query -> num_rows() > 0)
					{
						$this->db->where('userId',$userId);			
						$this->db->update('employerdetails',$empdetailalt);
					}
					else
					{
						$altEmail=$empdetailalt['altEmail'];
						$altMobile=$empdetailalt['altMobile'];
						$data=array('userId'=>$userId,'altEmail'=>$altEmail,'altMobile'=>$altMobile,
						'created'=>date('y-m-d H:i:s'),'modified'=>date('Y-m-d H:i:s'));
						$this->db->insert('employerdetails',$data); 
               //print_r($empdetailalt);
					}	
					}
				  
/************************************Company DATA********************/

	public function companydeatils($companyid)
      {
        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('id',$companyid);	
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
/************************************Application DATA********************/

	public function appcount($jobid)
      {
		  
        $this->db->select('count(*) as total');
        $this->db->from('jobapply');
        $this->db->where('jobid',$jobid);	
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
 /**********************************Appplied job data**********************/
   	public function jobapplied($pid)
      {
		  
        $this->db->select('candidate.id as candId,candidate.fName,candidate.mName,candidate.lName,userdetails.yrofexp,jobapply.desgination,jobapply.resumename,jobapply.id,jobapply.resumepath');
        $this->db->from('jobapply');
		$this->db->join('candidate','jobapply.userId = candidate.id');
		$this->db->join('userdetails','candidate.id = userdetails.userId');
        $this->db->where('jobid',$pid);	
		$this->db->group_by("jobapply.id");
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
     	public function jobappliedresume($jobid1)
      {
		  
        $this->db->select('candidate.fName,candidate.mName,candidate.lName,userdetails.yrofexp,jobapply.desgination,jobapply.resumename,jobapply.id,jobapply.resumepath');
        $this->db->from('jobapply');
		$this->db->join('candidate','jobapply.userId = candidate.id');
		$this->db->join('userdetails','candidate.id = userdetails.userId');
        $this->db->where('jobapply.id',$jobid1);	
		$this->db->group_by("jobapply.id");
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
/******************************************Insert FREE CREDIT*****************************/

			public function insert_credit($creditdata)
	{
  $this->db->insert('emp_credit',$creditdata); 
    }
/******************************************Fetch FREE CREDIT*****************************/
	
	public function creditbalance($userId)
      {
		  
        $this->db->select('*');
        $this->db->from('emp_credit');
        $this->db->where('userId',$userId);	
		$query = $this->db->get();
        $result = $query->result();
		return $result;
    
   }
/*******************************update skill************************************/
 
    public  function update_skill($updatedata,$userId){
                      $this->db->where('userId',$userId);			
	                  $this->db->update('userdetails',$updatedata);
                      
                  }
/***************************UPADATE CONATCT**************************************/
				  
				   public  function update_contact($updatedata,$userId)
				   {
                      $this->db->where('userId',$userId);			
	                  $this->db->update('userdetails',$updatedata);
                      
                  }
				  
				  
/*************************EDUCATION************************/
		public function editeducation($userId){
		$this->db->select('*');
        $this->db->from('edudetails');
		$this->db->where('userId', $userId);
        $query = $this->db->get();
        return  $result = $query->result();
		//print_r($result);

	}
	/*************************Favourite Job Add Of User***********************/
	public function insert_favouriteJob($creditdata)
	{
    $this->db->insert('favourite',$creditdata); 
    }
/***************************************UPADATE EDUCATION************************/
	
	  public  function upadate_education($edudetail,$eduid)
				   {
                      $this->db->where('id',$eduid);			
	                  $this->db->update('edudetails',$edudetail);
                      
                  }
/**************************EMAIL NOTIFICATION************************************/

 public function notifydata($cid,$jid,$userId){
	 
	 
				   $this->db->select('company.name,job.id,job.jobtitle,job.location');
                $this->db->from('job');
               $this->db->join('company','job.companyId = company.id');
			    //$this->db->join('jobapply','jobapply.userId = job.userId');
              $this->db->where('job.id', $jid);
			  //$this->db->where('jobapply.userId', $userId);
			    $this->db->where('company.id', $cid);
			     $query = $this->db->get();
               $result = $query->result();
              return $result; 
				//print_r($result);
					
			  }
			  
/********************************************GET MAIL ID**************************/
public function emailid($userId){
		$this->db->select('*');
        $this->db->from('candidate');
		$this->db->where('id', $userId);
        $query = $this->db->get();
        return  $result = $query->result();
		//print_r($result);

	}
	public function empProvider($email,$password){
		$encryptedpass=md5($password);
		  $this -> db -> select('id,socialProvider');
		   $this -> db -> from('employer');
		   $this -> db -> where('email', $email);
		   $this -> db -> where('password', $encryptedpass);
		   $query = $this -> db -> get();
		     return  $result = $query->result();
	}
/***********************************COMPANY JOB DATA*********************************/
	 public function compnayjobdata($compid){
				   $this->db->select('company.name,company.tagline,company.logo,company.description,company.coverimage,company.website,company.phno,company.mobile,company.email,company.address,company.facebook,company.linkedin,company.twitter,company.google,service.indusrtyType,service.product,job.id,job.jobtitle,job.minsal,job.maxsal,job.companyId,job.designation,job.yop,job.location,job.description,job.skills,job.additionalSkills,job.modified,job.lastdate');
                $this->db->from('job');
               $this->db->join('company','job.companyId = company.id');
			   $this->db->join('service','service.companyId = company.id');
			    $this->db->where('company.id', $compid);
			     $query = $this->db->get();
               $result = $query->result();
               return $result; 
				
					
			  }
public function record_count() {
        return $this->db->count_all("job");
		
    }
			  
			   public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("job");
 
        if ($query->num_rows() > 0) {
			  $this->db->limit($limit, $start);
             $this->db->select('company.name,job.id,job.jobtitle,job.minsal,job.maxsal,job.companyId,job.designation,job.yop,job.location,job.description,job.skills,job.additionalSkills,job.modified,job.lastdate');
                $this->db->from('job');
               $this->db->join('company','job.companyId = company.id');
			    $this->db->order_by('job.lastdate', 'asc');
			     $query = $this->db->get();
               $data = $query->result();
               //return $data;
            
            return $data;
        }
        return false;
   }
   
   public function insert_downloaddata($download)
	{
    $this->db->insert('download',$download); 
    }
	
	public function countdownload($userId){
		$this->db->select('count(*) as total');
        $this->db->from('download');
		$this->db->where('userId', $userId);
        $query = $this->db->get();
        return  $result = $query->result();
		//print_r($result);

	}
	
	  public  function update_credit($countdata,$userId)
				   {
                      $this->db->where('userId',$userId);			
	                  $this->db->update('emp_credit',$countdata);
                      
                  }
				  
				  public function get_companyid($userId){
		$this->db->select('id');
        $this->db->from('company');
		$this->db->where('userId', $userId);
        $query = $this->db->get();
        return  $result = $query->result();
		//print_r($result);

	}
	 public function compnayjobdata1($compid){
				   $this->db->select('client.userId,client.clientName,client.noofcontract,client.description');
                $this->db->from('client');
               $this->db->join('company','client.companyId = company.id');
			  
			    $this->db->where('company.id', $compid);
			     $query = $this->db->get();
               $result = $query->result();
               return $result; 
				
					
			  }
			  	 public function recentjobdata($compid){
				   $this->db->select('company.name,company.tagline,company.logo,company.description,company.coverimage,company.website,company.phno,company.mobile,company.email,company.address,job.id,job.jobtitle,job.minsal,job.maxsal,job.companyId,job.designation,job.yop,job.location,job.description,job.skills,job.additionalSkills,job.modified,job.lastdate');
                $this->db->from('job');
               $this->db->join('company','job.companyId = company.id');
			    $this->db->where('company.id', $compid);
				 $this->db->order_by('job.lastdate', 'asc');
			     $query = $this->db->get();
               $result = $query->result();
               return $result; 
				
					
			  }
			  /**************Compnay Employee Page***************************/
			  public function compnayempdata($compid){
	       $this->db->select('company.name,company.tagline,company.logo,company.description,company.coverimage,company.website,company.phno,company.mobile,company.email,company.address,company.facebook,company.linkedin,company.twitter,company.google,service.indusrtyType,service.product');
                $this->db->from('company');
               $this->db->join('service','service.companyId = company.id');
			 
			    $this->db->where('company.id', $compid);
			     $query = $this->db->get();
               $result = $query->result();
               return $result; 
				
					
	}
           public function get_internshiDetails($userId){
	         $this->db->select('*');
                $this->db->from('internsip');
               $this->db->where('internsip.userid', $userId);
               $this->db->where('isActive', 1);
	      $query = $this->db->get();
               $result = $query->result();
               return $result; 
	 }
         public function intership_detail($intern_id) {
             $this->db->select('*');
                $this->db->from('internsip');
                $this->db->join('company','internsip.companyId = company.id');
               $this->db->where('internsip.id', $intern_id);
               $this->db->where('internsip.isActive', 1);
                 $this->db->where('company.isActive', 1);
	      $query = $this->db->get();
               $result = $query->result();
               return $result; 
             
         }     
         public function intership_details(){
             $this->db->select('internsip.id as internid,internsip.title,internsip.location,'
                     . 'internsip.startDate,internsip.duration,internsip.stipend,internsip.created,internsip.endDate,company.name');
                $this->db->from('internsip');
                $this->db->join('company','internsip.companyId = company.id');
              // $this->db->where('internsip.id', $intern_id);
               $this->db->where('internsip.isActive', 1);
                 $this->db->where('company.isActive', 1);
	      $query = $this->db->get();
               $result = $query->result();
               return $result; 
         }
		 public function intership_details_searcresult($skill,$catagory,$location){
             $this->db->select('internsip.id as internid,internsip.title,internsip.location,'
                     . 'internsip.startDate,internsip.duration,internsip.stipend,internsip.created,internsip.endDate,company.name');
                 $this->db->from('internsip');
                $this->db->join('company','internsip.companyId = company.id');
              // $this->db->where('internsip.id', $intern_id);
               $this->db->where('internsip.isActive', 1);
                 $this->db->where('company.isActive', 1);
				 $this->db->like('internsip.location', $location);
				//$this->db->or_like('internsip.title', $catagory);
				 //$this->db->or_like('internsip.title', $skill);
	           $query = $this->db->get();
               $result = $query->result();
               return $result; 
         }
		 public function intership_subscribe($data){
		     $this->db->insert('intership_subscribe',$data); 
		 
		 
		 
		 }

	public function add_banner($data)
	{
		$success=$this->db->insert('banner',$data);
		if($success)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	// public function select_a_random_banner()
	// {
	// 	$sql="SELECT banner_id FROM banner ORDER BY rand() LIMIT 1;";
	// 	$query=$this->db->query($sql);
	// 	return $query->row()->banner_id;
	// }
	public function select_a_random_banner_candidate()
	{
		$sql="SELECT banner_id FROM banner WHERE type='Candidate' ORDER BY rand() LIMIT 1;";
		$query=$this->db->query($sql);
		return $query->row()->banner_id;
	}
	public function select_a_random_banner_employer()
	{
		$sql="SELECT banner_id FROM banner WHERE type='Employer' ORDER BY rand() LIMIT 1;";
		$query=$this->db->query($sql);
		return $query->row()->banner_id;
	}
	public function select_a_random_banner_public()
	{
		$sql="SELECT banner_id FROM banner WHERE type='Public' ORDER BY rand() LIMIT 1;";
		$query=$this->db->query($sql);
		return $query->row()->banner_id;
	}
	
	public function allow_banner($banner_id)
	{
		//echo $banner_id;
		$sql="UPDATE banner SET display='SHOW' WHERE banner_id='$banner_id'";
		$query=$this->db->query($sql);
	}
	public function disallow_banner($banner_id)
	{
		//echo $banner_id;
		$sql="UPDATE banner SET display='HIDE' WHERE NOT banner_id='$banner_id';";
		$query=$this->db->query($sql);
	}
	// public function get_the_banner()
	// {
	// 	$sql="SELECT * FROM banner WHERE display='SHOW';";
	// 	$query=$this->db->query($sql);
	// 	return $query->result();
	// }
	public function get_the_banner_candidate()
	{
		$sql="SELECT * FROM banner WHERE display='SHOW' AND type='Candidate';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_the_banner_employer()
	{
		$sql="SELECT * FROM banner WHERE display='SHOW' AND type='Employer';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_the_banner_public()
	{
		$sql="SELECT * FROM banner WHERE display='SHOW' AND type='Public';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function save_tickets($data)
	{
		$success=$this->db->insert('query_tickets',$data);
		if($success)
		{
			return true;
		}
		else
		{
			return false;
		}
	} 
	public function meta_description($cat)
	{
		//echo $cat;exit();
		$sql="SELECT description FROM meta_description WHERE desc_for='$cat';";
		$query=$this->db->query($sql);
		//var_dump($query->row()->description);exit();
		return $query->row()->description;
	}
	public function get_all_exams()
	{
		$sql="SELECT * FROM exam_details 
		LEFT JOIN exams ON exam_details.exam_details_id = exams.exam_details_id 
		WHERE exams.exam_set='YES' AND exams.exam_over='NO' 
		ORDER BY exam_details.created DESC;";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function is_there_exam($exam_details_id)
	{
		$sql="SELECT exam_details_id FROM exam_details WHERE exam_details_id='$exam_details_id';";
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
	public function get_all_qualifiers()
	{
		$sql="SELECT id,name FROM candidate WHERE CADcat_score != '0' ORDER BY CADcat_score DESC,CADcat_total_score ASC";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_ongoing_exams()
	{
		$sql="SELECT * FROM exam_details 
		LEFT JOIN exams ON exam_details.exam_details_id = exams.exam_details_id 
		WHERE exams.exam_set='YES' AND exams.exam_over='NO' AND NOW() >= exam_details.start_date 
		ORDER BY exam_details.created DESC;";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_upcoming_exams()
	{
		$sql="SELECT * FROM exam_details 
		LEFT JOIN exams ON exam_details.exam_details_id = exams.exam_details_id 
		WHERE exams.exam_set='YES' AND exams.exam_over='NO' AND exam_details.start_date > NOW() 
		ORDER BY exam_details.start_date ASC;";
		$query=$this->db->query($sql);
		return $query->result();
	}
}
?>