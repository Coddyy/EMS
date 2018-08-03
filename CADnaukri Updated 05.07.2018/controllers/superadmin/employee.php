<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends MY_Controller 
{
	function __construct()
   	{
     	parent::__construct();
	 	$this->load->model('SuperAdmin_M');	
	 	$this->load->model('Candidate_M');
	 	$this->load->model('Employee_M');
		$this->load->model('Candidate_details_M');
		$this->load->model('Skills_M');
		$this->load->model('Functional_area_M');
		$this->load->model('Industry_type_M');
		$this->load->model('Education_details_M');
		$this->load->model('Candiate_key_skills_M');
		$this->load->model('Candidate_functional_area_M');
		$this->load->model('Candidate_industry_type_M');
		$this->load->model('Experience_details_M');
		$this->load->model('Project_details_M');
		$this->load->model('Country_M');
		$this->load->model('Job_M');
		$this->load->model('Jobapply_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Internship_M');
		$this->load->model('Sign_up_rec_M');
		$this->load->model('State_M');
		$this->load->model('Language_M');
		$this->load->model('City_M');
	 	$this->load->library('form_validation');
	 	$this->load->library('session');
        $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('superadminId')){
               $result['empInfo'] = $this->SuperAdmin_M->empInfo();
	      $this->load->view('superadmin/employee',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
     function signup(){
           if($this->session->userdata('superadminId')){
          $this->data['designations']= $designations=$this->Sign_up_rec_M->get_designation();       
	      $this->load->view('superadmin/employee_signup',$this->data);
            }else{
                redirect('superadmin/index/index');
            }
     }
       /*#####################EMployee Insert Form###########################*/
     public function empdata()
	{ 
  
		if(isset($_POST['emailid']))
		{
                $email=$_POST['emailid'];
                $this->form_validation->set_rules('emailid', 'emailid', 'trim|required|valid_email|callback_email_exists1['.$email.']');
                }
                 if(isset($_POST['phoneno'])){
                $phoneno=$_POST['phoneno'];
             $this->form_validation->set_rules('phoneno', 'phoneno', 'trim|required|valid_phone|exact_length[10]|callback_phoneno_exists1['.$phoneno.']');
                }
                  $this->form_validation->set_rules('password', 'Password', 'matches[cpassword]');
                 //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]');
				 
			if ($this->form_validation->run() == FALSE)
			{
	                redirect('hauth_emp/index');
			}
			else
			{
		
			$rand='';
			$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
				shuffle($seed); // probably optional since array_is randomized; this may be redundant
			foreach (array_rand($seed, 6) as $k) 
			$rand.= $seed[$k];
			$today=date("Y-m-d h:i:s");
		    $password=$_POST['password'];
		    $encryptedpass1=md5($password);
			$email=$_POST['email'];
		     	 
			$data=array(
			'id'=>NULL,
			'fName'=>$_POST['fname'],
			'lName'=>$_POST['lname'],	
			'email'=>$_POST['email'],
			'password'=>$encryptedpass1,	
			'mobile'=>$_POST['mobile'],
			'companyname'=>$_POST['companyname'],
			'location'=>$_POST['presentlocation'],
			'address'=>$_POST['address'],
			'roles'=>$_POST['role'],
			'nationality'=>$_POST['nationality'],
			'isEmail'=>'0',
			'isMobile'=>'0',
			'deviceId'=>'0',
			'emailVerificationCode'=>$rand,
			'mobileVerificationCode'=>$rand,
			'socialProvider'=>'SELF',
			'isEmailverified'=>'0',
			'isMobileVerified'=>'0',
			'serviceOptd'=>'0',
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1',
			
			);
			$config['mailtype'] = 'html';
			$this->email->initialize($config);

			     $message = '<html><body style="font-size: 10pt;font-family: Verdana,Arial,Helvetica,sans-serif;">';
                 $message .= "<img src='http://cadnaukri.com/images/dottedline.png' alt='cadnaukri.com' /><br />";
                 $message .= "<p>Dear Employer,</p><br />";
                 $message .= "<p>Welcome aboard CADnaukri.com!,</p><br />";
                 $message .= "<p>It is always a pleasure to have you with us for a qualitative outcome. Our team works to its maximum capabilities to provide you with an effective recruitment solution.,</p><br />";
                  $message .="Your login credentials:<br/>";
                  $message .= "<p> <span style='font-weight:600'>Username</span>: $email<br/></p>";
                  $message .= "<p> <span style='font-weight:600'>Password</span>: $password<br/></p>";
                  $message .="<p>**You are requested to change the above default password after successfully logging into your account**</p>";
                  $message .="<p>Happy Recruiting!</p><br/>";
                  $message .="<p>CADnaukri.com</p><br/>";
                 
                $message .= "<b>NB:</b> NB: You can send your enquiries to HR@CADNAUKRI.COM and also message us in WhatsApp: +918260701701 for instant response. Working hours: 10:30 am to 8:00 pm (MON to FRI).<br/><br/>";

                
                //$message .= "</table>";
                     $message .= "</body></html>";
			$this->load->library('email');
			$this->email->from('no-reply@cadnaukri.com','Cadnaukri');
			$this->email->to($email); 
			$this->email->subject('Employer login credentialsl');
			$this->email->message($message);
			$this->email->send();
                        /*########################End Email send################*/
                        /*########################Insert Date into database################*/
			$this->SuperAdmin_M->insert_emplogin($data);
                           $this->session->set_flashdata('msg2', 'Succesfully Update Sponors');
			
            redirect('superadmin/employee/signup','refresh');
			}
			
	}
    public function empSingleList() 
	{
	    if($this->session->userdata('superadminId'))
	    {
            $id=$_POST['empid'];
        // echo $id;
           $singleList=$this->SuperAdmin_M->empSingleList($id);
        //  print_r($singleList);
           foreach ($singleList as $value) {
               $name=$value->name;
                      
         echo 

         "<h4>Employee Name: " . $name. "</h4> 
                         <h4>Email " . $value->email. "</h4> 
			<h4>Company Name : " .$value->companyName  . "</h4> 
			<h4>Mobile  : " . $value->mobile   . "</h4> 
                         <h4>Location  : " . $value->location   . "</h4> 
			<h4>Address : " .$value->address   . "</h4> 
			<h4>Roles: " . $value->roles   . "</h4> 
			<h4>Nationality: " . $value->nationality   . "</h4> ";
			
           }
           }
           else{
                redirect('superadmin/index/index');
            }
        }
        public function editEmployee() {
             if($this->session->userdata('superadminId')){
            $id=$_GET['id'];
        //echo $id;
           $singleList['empsingleList']=$this->SuperAdmin_M->empSingleList($id);
         //  print_r($singleList);
           $this->load->view('superadmin/employee_edit',$singleList);
             }
             else{
                redirect('superadmin/index/index');
            }
            
        }
        public function empUpdate(){
             if($this->session->userdata('superadminId')){
                $id= $_POST['id'];
                 $data=array(
			'name'=>$_POST['fname'],
			// 'lName'=>$_POST['lname'],	
			'email'=>$_POST['email'],
			'mobile'=>$_POST['mobile'],
			'companyname'=>$_POST['companyname'],
			'location'=>$_POST['presentlocation'],
			'address'=>$_POST['address'],
			'roles'=>$_POST['role'],
			'nationality'=>$_POST['nationality'],
			'modified'=>date('Y-m-d h:i:s'),
			
			
			);
                 $this->SuperAdmin_M->updateEmployee($id,$data);
                 redirect('superadmin/employee/index','refresh');
             }
             else{
                redirect('superadmin/index/index');
            }
        }
         public function deleteEmployee(){
             if($this->session->userdata('superadminId')){
                 $id=$_GET['id'];
                 $data=array('isActive'=>0);
                 $this->SuperAdmin_M->deleteEmployee($id,$data);
                 redirect('superadmin/employee/index','refresh');
                 
             }
             else{
                redirect('superadmin/index/index');
            }
        }		
        //Delete Employee		 public function actionEmployee()	 {			 echo "hello";				 if($this->session->userdata('superadminId')){				if(isset($_POST['delete'])){			$userId=$this->input->post('userId');			$this->SuperAdmin_M->deleteAllEmployee($userId);			//redirect('superadmin/employee');				} 				/* else if(isset($_POST['mail']))				{					$userId=$this->input->post('userId');						$data['emailid']=$this->SuperAdmin_M->getemailid($userId);										$this->load->view('superadmin/mail',$data);									} */																	}  				}
        
	//Delete Employee
		 public function actionEmployee()	 {	
	
			 if($this->session->userdata('superadminId')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			$this->SuperAdmin_M->deleteAllEmployee($userId);
			redirect('superadmin/employee');
				} 
				else if(isset($_POST['mail']))
				{
					$employee_id=$this->input->post('userId');	
					$data['emailid']=$this->SuperAdmin_M->getEmployee_emailid($employee_id);
					$this->load->view('superadmin/mail',$data);
					
				}
				
				
						
			}  
		
		}
		public function view_profile($id)
		{
			  echo $id;
               $singleList=$this->SuperAdmin_M->empSingleList($id);
           //print_r($singleList);
                      
          foreach ($singleList as $value) {
             //$name=$value->fName.' '.$value->lName;
          	$name=$value->name;
                      
         echo "
			<h4>Employee Name: " . $name. "</h4> 
            <h4>Email " . $value->email. "</h4> 
			<h4>Company Name : " .$value->companyName  . "</h4> 
			<h4>Mobile  : " . $value->mobile   . "</h4> 
            <h4>Location  : " . $value->location   . "</h4> 
			<h4>Address : " .$value->address   . "</h4> 
			<h4>Designation : " . $value->designation_name   . "</h4> 
			<h4>Nationality: " . $value->nationality . "</h4> ";
			
           }

                            
		}
	public function cv_upgrade_service_requests()
	{
		$data['requests']=$this->SuperAdmin_M->get_cv_upgrade_service_requests();
		$data['subview']='superadmin/cv_upgrade_service_requests';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function approve_service()
	{
		$download_limit=$this->uri->segment(4);
		$emp_id=$this->uri->segment(5);
		$request_id=$this->uri->segment(6);
		$sql1="UPDATE employer SET cv_download_limit=(cv_download_limit + '$download_limit') WHERE id ='$emp_id';";
		$query1=$this->db->query($sql1);
		if($query1)
		{
			//$date=date('Y m d H:i:s');
			//echo $date;exit();
			$sql2="UPDATE cv_upgrade_service_request SET request_status='1',approved_date=NOW() WHERE request_id ='$request_id';";
			$success=$query2=$this->db->query($sql2);
			if($success)
			{
				redirect(base_url()."superadmin/employee/request_upgraded");
			}
		}	
	}
	public function request_upgraded()
	{
		$this->cv_upgrade_service_requests();
	}
	public function view_profile_details()
	{
		$emp_id=$this->uri->segment(4);
		$data['mydata']=$this->Employee_M->get_my_details($emp_id);
		$data['subview']='superadmin/emp_profile';
		$this->load->View('superadmin/_layout_superadmin',$data);
	}
	public function download_profile_details()
	{
		$emp_id=$this->uri->segment(4);
		$data['mydata']=$this->Employee_M->get_my_details($emp_id);
		$this->load->View('superadmin/emp_profile',$data);
	}
	public function company_details($emp_id)
	{
		$data['companies']=$this->SuperAdmin_M->get_company_details($emp_id);
		$data['subview']='superadmin/company_details';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function requests($sort=NULL)
	{

		// $approve_date = date('Y-m-d');
		// $last_date = date('Y-m-d', strtotime("+60 days"));
		// echo $approve_date;echo "<br />";
		// echo $last_date;exit();
		$less20days=date('Y-m-d', strtotime("+20 days"));
		$less10days=date('Y-m-d', strtotime("+10 days"));

		$sql="SELECT * FROM employer_upgrade_account_request ";

		if($sort== NULL)
		{
			//echo "hi";
			$sql.="WHERE (status='Approved' OR status='Pending' OR status='Stopped') ";
		}
		else if($sort == 'lesstwenty')
		{
			$sql.="WHERE (last_date < '$less20days') AND (status='Approved') ";
		}
		else if($sort == 'lessten')
		{
			$sql.="WHERE (last_date < '$less10days') AND (status='Approved') ";
		}
		//$sql .="ORDER BY created DESC";
		

		$query=$this->db->query($sql);
		$data['requests']=$query->result();
		// $data['subview']='superadmin/employer_account_requests';
		// $this->load->view('superadmin/_layout_superadmin',$data);
		$this->load->view('superadmin/employer_account_requests_new',$data);
	}
	public function approve_request()
	{
		$id=$this->uri->segment(4);
		$account_type=$this->uri->segment(5);
		$name=$this->uri->segment(6);
		$email=$this->uri->segment(7);
		$request=$this->uri->segment(8);
		$request_id=$this->uri->segment(9);
		//echo $request_id;exit();
		if($request == "YES")
		{
			$approve_date = date('Y-m-d');
			$last_date = date('Y-m-d', strtotime("+60 days"));

			$sql="UPDATE  employer_upgrade_account_request SET status='Approved',acc_upgrade_rqst='0',approve_date='$approve_date',last_date='$last_date' WHERE request_id='$request_id';";
			$query=$this->db->query($sql);
				
			$this->db->where('id',$id);
			$data['account_type']=$account_type;
			$data['acc_upgrade_notify']='1';
			$data['acc_upgrade_rqst']='0';
			$this->db->update('employer',$data);
		}
		else if($request == "NO")
		{
			$this->db->where('request_id',$request_id);
			$edata['acc_upgrade_rqst']='0';
			$edata['status']='Rejected';
			$this->db->update('employer_upgrade_account_request',$edata);

			$sql="UPDATE  employer SET acc_upgrade_rqst='0' WHERE id='$id';";
			$query=$this->db->query($sql);
		}
		//exit();
		redirect("https://www.softcadinfotech.in/email/employer_account_upgrade_by_admin/".$name."/".$email."/".$account_type."/".$request);
	}
	public function stop_add_company()
	{
		$emp_id=$this->uri->segment(4);
		$request_id=$this->uri->segment(5);
		//echo $emp_id;echo $request_id;exit();
		$sql="UPDATE employer_upgrade_account_request SET status='Stopped',acc_upgrade_rqst='0' WHERE request_id='$request_id';";

		$query=$this->db->query($sql);

		$data['company_permission']='NO';
		$this->db->where('id',$emp_id);
		$success=$this->db->update('employer',$data);
		if($success)
		{
			redirect(base_url()."superadmin/employee/requests");
		}
		else
		{
			echo "Problem";
		}
	}
	public function start_add_company()
	{
		$emp_id=$this->uri->segment(4);
		$request_id=$this->uri->segment(5);
		$approve_date = date('Y-m-d');
		$last_date = date('Y-m-d', strtotime("+60 days"));
		$sql="UPDATE employer_upgrade_account_request SET status='Approved',acc_upgrade_rqst='0',approve_date='$approve_date',last_date='$last_date' WHERE request_id='$request_id';";

		$query=$this->db->query($sql);

		$data['company_permission']='YES';
		$this->db->where('id',$emp_id);
		$success=$this->db->update('employer',$data);
		if($success)
		{
			redirect(base_url()."superadmin/employee/requests");
		}
		else
		{
			echo "Problem";
		}
	}
		
}
 