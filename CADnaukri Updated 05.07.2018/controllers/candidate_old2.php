
<?php
class Candidate extends MY_Controller  
{
	//constructor function 
  function __construct()
   {
     parent::__construct();
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
		$this->load->model('State_M');
		$this->load->model('Language_M');
		$this->load->model('Job_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Job_apply_M');
		$this->load->model('Sign_up_m');
		$this->load->model('View_M');
		$this->load->model('SuperAdmin_M');
		$this->load->model('Candidate_language_M');
		$this->load->library('form_validation');
     	$this->load->helper('form');
     	$this->load->library('email');	
     	$exception_url=array("candidate/login","candidate/forgot_password","candidate/logout","candidate/signup",
     			"candidate/verification","candidate/reset_password","candidate/security_questions","candidate/email_exists","candidate/phone_exists","candidate/encrypt","candidate/decrypt","candidate/dashboard_forAdmin","candidate/login/search","candidate/email_verify","corn");
     	if($this->uri->segment('2')=='email_verify' || $this->uri->segment('3')=='search' || $this->uri->segment('3')=='index' || $this->uri->segment(3)=='popup' || $this->uri->segment(2)=='change_email' || $this->uri->segment(2)=='email_changed_successfully'  || $this->uri->segment(2)=='quick_apply'|| $this->uri->segment(2)=='cvupload' || $this->uri->segment(2)=='already_applied' || $this->uri->segment(2)=='quick_apply_success' || $this->uri->segment(2)=='more_skill_details_test' || $this->uri->segment(2)=='user_details' || $this->uri->segment(2)=='instructions' || $this->uri->segment(2)=='give_exam' || $this->uri->segment(3)=='exam')
     	{
     		//Do nothing
     		//echo 'Here';exit();
     	}
     	
     	else if((in_array(uri_string(),$exception_url) == FALSE) && ($this->Candidate_M->isLoggedin() == FALSE))
     	{
     		redirect("candidate/login", "refresh");
     	}
    }
    public function index()
    {
		echo 'Acesss Denied';exit;
	}
  	public function login($return_url=NULL,$job_id=NULL)
	{
		//echo md5("Abhra@12");
		//echo "Hello";exit();
		$dashboad=base_url('candidate/dashboard');
		if(isset($_POST['login']))
		{
			
			if($this->Candidate_M->isLoggedin() == TRUE)
			{
				//print_r($this->session->all_userdata());exit();
				redirect($dashboad,'refresh');
			}	
			$rules = $this->Candidate_M->rule_login;
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == TRUE)
			{
				// print_r($this->session->all_userdata());exit();
				if($this->Candidate_M->login() == TRUE)
				{
				$candidate_id=$this->session->userdata('candidate_id');
				$result=$this->Candidate_M->check_cv_exist($candidate_id);
				if($result != false)
				{
				 
					  if($return_url != NULL && $job_id != NULL)
					  {
					  	//echo $job_id;
					  	$candidate_id=$this->session->userdata('candidate_id');
					  	$check_applied=$this->Job_apply_M->get_by(
	                                                	array('job_id'=>$job_id,
	                                                	'user_id'=>$candidate_id));
	                     if(count($check_applied) > 0)
	                     {
						 	//
						 }
						 else
						 {
						 	$data=array(
							'user_id'=>$candidate_id,
							'job_id'=>$job_id,
							'created'=>date('Y-m-d H:i:s')
							);
	// ###################################  NEW CODE 4 ################################### //
							$job_name=$this->Job_apply_M->get_job_name($job_id);
							$save_last_applied_job=$this->Candidate_M->save_last_applied_job($job_name,$candidate_id);
	// ################################### END NEW CODE 4 ################################### //
						 }
						//var_dump($candidate_id);
						//var_dump($job_id);
						//exit();
						$applied_id=$this->Job_apply_M->save($data);

						$cand_email=$this->Candidate_M->get_cand_email($candidate_id);
						$cand_name=$this->Candidate_M->get_cand_name($candidate_id);
						$emp_email=$this->Candidate_M->get_emp_email($job_id);
						$emp_name=$this->Candidate_M->get_emp_name($job_id);
						$job_location=$this->Candidate_M->get_job_location($job_id);
						$job_name=$this->Candidate_M->get_job_name($job_id);
						$company_name=$this->Candidate_M->get_company_name($job_id);

	//*********************************************************************************************************//
	//**                                                                                                     **//
	//**	         VERY IMPORTANT SECTION FOR FUTURE USE ,ALSO LOOK [CRON] METHOD IN CPANEL                **//
	//**	IT CREATE A TEMORARY DATA FOR FUTURE IF EMAILS ARE GOING CORRECTLY OR NOT. TABLENAME:temp_email	 **//
	//**                                                                                                     **//
	//*********************************************************************************************************//
	//					// $data=array(
	//					// 		"cand_id"=>$candidate_id,
	//					// 		"job_id"=>$job_id,
	//					// 		"cand_email"=>$cand_email,
	//					// 		"emp_email"=>$emp_email,
	//					// 		"job_location"=>$job_location,
	//					// 		"job_name"=>$job_name,
	//					// 		"company_name"=>$company_name,
	//					// 		"cand_name"=>$cand_name,
	//					// 		"emp_name"=>$emp_name
	//					// 	);
	//
	//			// $success=$this->Candidate_M->save_email_to_tmp($data); //Saving on Temporary Table For Email Delay
	//
	//			// $tmp_email_id=$this->Candidate_M->get_tmp_id($cand_email); //Taking the tmp_id For delete that row  when email sent.
	//***************************************************** END **************************************************//
 

						$this->load->library('email');
						// ********  Job Apply Success Email To Candidate   *********// 

						$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to($cand_email);
						$this->email->subject("Job Applied Successfully");
						//$this->email->message("Hello ");

						
						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    Hello ".$cand_name."
	                    <br />
	                    <br />
	                    You have successfully applied for the job ".$job_name." (<b>".$company_name.", ".$job_location."</b>)
	                    <br /><br />
	                    <a href='http://cadnaukri.com/candidate/login'>Sign in</a> now to check your application status.
	                    <br /><br />
	                    Best of luck,
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:15%;width:25%;'></a>
	                    </div>
	                    <br />
	                    
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                  
	                    

	                         ");
	    
	        			$this->email->send();



						// ******** End Job Apply Success Email To Candidate   *********//

						// ******** End Job Apply Success Email To Admin   *********//

	        			$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to('applicationrcv@gmail.com');
						$this->email->subject("New Application Received For <b>".$job_name."</b>");
						//$this->email->message("Hello ");

						
						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    Applicant Name: ".$cand_name." 
	                    <br />
	                    <br />
	                    Applied For: ".$job_name.".
	                    <br /><br />
	                    Posted By :".$emp_name."
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:15%;width:25%;'></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                  
	                    

	                         ");
	    
	        			$this->email->send();

						// ******** End Job Apply Success Email To Admin   *********//


						// ********  Job Apply Success Email To Employer   *********// 

						$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to($emp_email);
						$this->email->subject("New response on your job post- ".$job_name." in ".$job_location);

						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    <b>Hi ".$emp_name."</b>
	                    <br />
	                    <br />
	                    Your job title: <b>".$job_name."</b> had received a new application from <b>".$cand_name."</b>
	                    <br /><br />
	                    <a href='http://www.cadnaukri.com/employer/login'>Login here</a> to check the application.
	                    <br /><br />
	                    Regards,
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='CADnaukri.com' style='height:14%;width:23%;'></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:3%;width:3%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:3%;width:3%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                   
	                    

	                        ");


						// $this->email->message("<div>Name:&nbsp&nbsp".$cand_name."</div><br />
						// 					   <div>Email:&nbsp&nbsp".$cand_email."</div><br />
						// 					   <div>Applied For:&nbsp&nbsp".$job_name."</div><br />
						// 					   <div align='right' style='color:blue;'>CADnaukri Team</div>
						// 					");
	    
	        			$this->email->send();

						// ******** End Job Apply Success Email To Employer   *********//

						//$delete_tmp=



					  	$this->session->set_flashdata('job_appply_success','You have successfully applied to this job [ Site Upgradation is going on. So, there might be email delivery failure. ]');

						if($this->uri->segment(3) == "exam")
					  	{
					  		$exam_id=$this->uri->segment(4);
					  		$id=$this->session->userdata('candidate_id');
					  		if($this->Candidate_M->is_applied_this_exam($id,$exam_id) == TRUE)
		            		{
		            			//echo 'Already Exist'.$id;exit(); 
		            			$this->session->set_flashdata('applied', 'You\'ve already applied');
		            			redirect(base_url().'candidate/my_exams');
		            		}
		            		else
		            		{
		            			$edata['exam_details_id']=$exam_id;
			            		$edata['candidate_id']=$id;
			            		$edata['is_over']='NO';
			            		$edata['created']=date('Y-m-d H:i:s');
								$this->db->insert('applied_exams',$edata);
								$apply_id=$this->db->insert_id();
								//echo $apply_id;exit();
					  			redirect(base_url()."candidate/instructions/".$exam_id."/".$id."/".$apply_id);
					  		}
					  	}
					  	else if($return_url == 'search')
					  	{
							redirect('best_design_jobs/search','refresh');	
						}
						else
						{
							redirect('best_design_jobs/index','refresh');	
						}
					}
					else
					{
						//echo "R2";exit();
						if($this->uri->segment(3) == "exam")
					  	{
					  		$exam_id=$this->uri->segment(4);
					  		$id=$this->session->userdata('candidate_id');
					  		//echo $exam_id;echo $id;exit();
					  		if($this->Candidate_M->is_applied_this_exam($id,$exam_id) == TRUE)
	            			{
	            				$this->session->set_flashdata('already_applied','You\'ve already applied');
					  			redirect(base_url()."candidate/my_exams");
					  		}
					  		else
					  		{
					  			$edata['exam_details_id']=$exam_id;
			            		$edata['candidate_id']=$id;
			            		$edata['is_over']='NO';
			            		$edata['created']=date('Y-m-d H:i:s');
								$this->db->insert('applied_exams',$edata);
								$apply_id=$this->db->insert_id();
								//echo $apply_id;exit();
					  			redirect(base_url()."candidate/instructions/".$exam_id."/".$id."/".$apply_id);
					  		}
					  	}
					  	$this->session->set_flashdata('job_appply_failed','Please upload your CV before applying job');
					  	
		 				redirect('candidate/dashboard','refresh');	
					}
				  	
				  }
				  else
				  {

				  	//Parent colorbox close
				  	if($this->uri->segment(3) == "popup")
				  	{
				  		//echo "hello";
					  	echo '<script>
				   				parent.jQuery.colorbox.close();
				   				window.top.location.href = "http://www.facebook.com";
				   				</script>';
				  	}
				  	else if($this->uri->segment(3) == "exam")
				  	{
				  		//echo "R3";exit();
				  		$exam_id=$this->uri->segment(4);
					  	$id=$this->session->userdata('candidate_id');
					  	//echo $exam_id;echo $id;exit();
				  		if($this->Candidate_M->is_applied_this_exam($id,$exam_id) == TRUE)
            			{
            				//echo "If1";exit();
            				$this->session->set_flashdata('already_applied','You\'ve already applied');
				  			redirect(base_url()."candidate/my_exams");
				  		}
				  		else
				  		{
				  			//echo "If2";exit();
				  			$edata['exam_details_id']=$exam_id;
		            		$edata['candidate_id']=$id;
		            		$edata['is_over']='NO';
		            		$edata['created']=date('Y-m-d H:i:s');
							$success=$this->db->insert('applied_exams',$edata);
							if($success)
							{
								//echo "Inserted";exit();
								$apply_id=$this->db->insert_id();
								//echo $apply_id;exit();
								redirect(base_url()."candidate/instructions/".$exam_id."/".$id."/".$apply_id);
							}
							else
							{
								echo "Security Issues, Contact Admin";exit();
							}
				  			
				  		}
				  	}
				  	else
				  	{
				  		//echo "R3";exit();
				  		redirect($dashboad,'refresh');
				  	}
				  		
				  }
					
				}
				else
				{
					$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
					if($this->uri->segment(3) == "exam")
					{
						$exam_details_id=$this->uri->segment(4);
						redirect(base_url('candidate/login/exam/'.$exam_details_id),'refresh');
					}
					else
					{
						redirect(base_url('candidate/login'),'refresh');
					}
					
				}
			}
		}
		if(isset($_POST['signup_form']))
		{
			//print_r($_POST);exit;
			
			 $this->form_validation->set_rules('emailid', 'emailid', 'trim|required|valid_email|callback_email_check['.$_POST["emailid"].']');
			   $phoneno=$_POST['phoneno'];
               $this->form_validation->set_rules('phoneno', 'phoneno', 'trim|required|valid_phone|callback_phoneno_check['.$phoneno.']');
           if ($this->form_validation->run() == FALSE)
			{
	              redirect( 'candidate/login');
			}
			else
			{    
				$rand=$this->random_number();
				$data['name']=$_POST['firstname'];
				// $data['lName']=$_POST['lastname'];
				// $data['mName']=$_POST['middlename'];
				$data['password']=md5($_POST['password_sign']);
				$data['email']=$email=$_POST['emailid'];
				$data['mobile']=$_POST['phoneno'];
				$data['isEmail']='0';
				$data['isMobile']='0';
				$data['emailVerificationCode']=$rand;
				$data['mobileVerificationCode']=$rand;
				$data['location']=$_POST['presentlocation'];
				$data['nationality']=$_POST['nationality'];
				if($_POST['is_job_email'] == 'on')
				{
					$data['is_job_email']=1;
				}
				else
				{
					$data['is_job_email']=0;
				}
							
				$data['created']=date('Y-m-d H:i:s');
				$data['isActive']='0';
				if(isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] != UPLOAD_ERR_NO_FILE) 
				  {
					$target_dir = "assets/candidate/cv";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					$newfilename = round(microtime(true)) . '_' . $data['name'];
					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
					$data['cvname']=$_FILES["fileToUpload"]["name"];
					$data['cvpath']=$target_file;
				}
				//echo '<pre>';print_r($data);exit();
				$candidate_id=$this->Candidate_M->save($data);
						
				$url=base_url()."candidate/emailveify/".$candidate_id."/".$rand;
				$logo=base_url().'assets/images/logo.png';
				/*########################Email send################*/
				//$encrypted_user_id=$this->encrypt($candidate_id);
				$encrypted_user_id=base64_encode($candidate_id);
				$string = rawurlencode($encrypted_user_id);
				$link=base_url("candidate/email_verify/$string");
				$logo=base_url().'assets/images/logo.png';
				/*########################Email send################*/
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$message = '<html><body>';
			    $message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
			    $message .= "<p style='color:orange'>Dear job-seeker,</p><br />";
			    $message.='<p>Your verification code is '.$rand.'</p><br><p>Please click below link to activate your account </p><br>'.$link;
			    $message .= "<br/><br/>";     				 
			    $message .= "<b>NB:</b> Please visit our site once again to discover a new job search experience with host of features & benefits..<br/><br/>";
				$message .= "<b>Wising you all the very best.. :</b><br /><br/>"; 
			    $message .= "<b>cadnaukri.com</p>"; 
			    $message .= "</body></html>";
				$this->email->from('no-reply@cadnaukri.com','CadNaukri');
				$this->email->to($email); 
				$this->email->subject('Email Verification ');
				$this->email->message($message);
				$this->email->send();
				$this->session->set_flashdata('sucess', 'Please check your mailbox to valid your account [ Site Upgradation is going on. So, there might be email delivery failure. ]');
			
		      		redirect( 'candidate/login');
	     	}
	    }
		
		if($this->Candidate_M->isLoggedin() == TRUE)
		{
			if($return_url != NULL)
			  {
					redirect('best_design_jobs/search','refresh');	
			  }
			   else
				{
					redirect($dashboad,'refresh');	
			   	}
		}	
			
		
		$this->data['country_list']=$this->Country_M->get();
		
		if($this->uri->segment(3) == "popup")
		{
			$this->load->view('candidate/subview/login');
		}
		else
		{
			$this->data['subview']='candidate/subview/login';
			$this->load->view('_layout_home',$this->data);  //,$this->data
		}
		
	}
	
	public function email_check($emailid)
	{
		
		$result=$this->Candidate_M->get_by(array('email'=>$emailid));
    	$count=count($result);
		if ($count > 1)
		{
			$this->form_validation->set_message('email_check', 'Email id already exists.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function phone_check($ph_no)
	{
		$result=$this->Candidate_M->get_by(array('mobile'=>$ph_no));
    	$count=count($result);
		if ($count > 1)
		{
			$this->form_validation->set_message('phone_check', 'Phone number  already exists.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	public function random_number()
	{
		$rand='';
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789');
		shuffle($seed); 
		foreach (array_rand($seed, 6) as $k) 
			$rand.= $seed[$k];
			
		return $rand;
	}
	public function email_verify($candidate_id=NULL)
	 {
	 	if($_POST)
	 	{
			$user_id=$this->input->post('user_id');
			$verification_code=$this->input->post('verification_code');
			//$decrypt_user_id=$this->decrypt($user_id);
			$decrypt_user_id=base64_decode($user_id);
			$result=$this->Candidate_M->get_by(array('id'=>$decrypt_user_id,'emailVerificationCode'=>$verification_code));
			//echo $this->db->last_query();exit();
			//echo $this->db->last_query();exit();
			if(count($result) > 0)
			{
				$data=array('isEmailVerified'=>1,'isActive'=>1);
				$this->Candidate_M->save($data,$decrypt_user_id);
			    $this->session->set_flashdata('sucess','Your account is activated.Please login to your account [ Site Upgradation is going on. So, there might be email delivery failure. ]');
				redirect(base_url().'candidate/login');
			}
			
			else
			{
				$this->session->set_flashdata('error','Wrong verification code');
				redirect(current_url());
			}
		}
	 	
	 	
	 	$this->data['subview'] = 'candidate/subview/email_verification';
		$this->load->view('_layout_home',$this->data);
		
	 }
	
     public function encrypt($mprhase) 
	 {
	     $MASTERKEY = "KEY PHRASE!";
	     $td = mcrypt_module_open('tripledes', '', 'ecb', '');
	     $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
	     mcrypt_generic_init($td, $MASTERKEY, $iv);
	     $crypted_value = mcrypt_generic($td, $mprhase);
	      mcrypt_generic_deinit($td);
	     mcrypt_module_close($td);
	     return base64_encode($crypted_value);
	} 
	public function decrypt($mprhase)
	 {
		     $MASTERKEY = "KEY PHRASE!";
		     $td = mcrypt_module_open('tripledes', '', 'ecb', '');
		     $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
		     mcrypt_generic_init($td, $MASTERKEY, $iv);
		     $decrypted_value = mdecrypt_generic($td, base64_decode($mprhase));
		     mcrypt_generic_deinit($td);
		     mcrypt_module_close($td);
		     return $decrypted_value;
	}
	
	 public function reset()
	 {
           $this->data['subview'] = 'candidate/subview/forget_password';
		$this->load->view('_layout_home',$this->data);        
     }
    public function forgot_password() //My Code
    {
    	if($_POST)
    	{
    		// var_dump($_POST);exit();
    		$email=$this->input->post("email");
    		$mobile=$this->input->post("mobile");
    		$nick_name=$this->input->post("nick_name");
    		$dob=$this->input->post("dob");
    		$candidate_id=$this->Candidate_M->forget_password_sequrity_check($email,$mobile,$nick_name,$dob);
    		// var_dump($_POST);
    		// echo $candidate_id; 
    		// exit();
    		if($candidate_id != false)
    		{
    			$success=$this->Candidate_M->renew_verify($candidate_id);
    			if($success == true)
    			{
    				redirect("http://www.cadnaukri.com/signup/set_password/".$candidate_id);
    			}
    			else
    			{
    				redirect(base_url()."candidate/security_check_failed");
    			}
    			
    		}
    		else
    		{
    			redirect(base_url()."candidate/security_check_failed");
    		}
    	}
    	$this->data['subview'] = 'candidate/subview/forget_password';
		$this->load->view('_layout_home',$this->data);
    }
    public function security_check_failed()
    {
    	$this->session->set_flashdata('security_check_failed','Security Answers Not Matched');
    	$this->forgot_password();
    }
	// public function forgot_password()  //Subodh Sir's Code
	// {	
	// 		$rules = $this->Candidate_M->rule_forgot_password;
	// 		$this->form_validation->set_rules($rules);
	// 		if($this->form_validation->run() == TRUE)
	// 		{	
	// 			if($this->Candidate_M->check_email_exist()==TRUE)
	// 			{
	// 				$email=$this->input->post('email_id');
	// 				$rand='';
	// 				$seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789');
	// 				shuffle($seed); 
	// 				foreach (array_rand($seed, 6) as $k) 
	// 				$rand.= $seed[$k];
	// 				$encryptedpass=md5($rand);
	// 				$this->load->library('email');
	// 				$this->email->set_mailtype("html");
	// 				$this->email->from('no-reply@cadnaukri.com','CadNaukri');
	// 				$this->email->to($email); 
	// 				$this->email->subject('RESET PASSWORD');
	// 				$login_url=base_url('candidate/login');
	// 			    $str ="<a href='".base_url('candidate/login')."' >Click Here </a>";
	// 				$msg='';
	// 				$msg.='Hello User ,
	// 				<br>Welcome to CadNaukri ! 
	// 				<br>Your Account Password is <br>Password : '.$rand.'<br>You Can login using 
	// 				this password and also change your password after login.<br>';
	// 				$msg .=$str .'or copy  the below url to your browser <br/>';
	// 				$msg .=$login_url;
	// 				$msg.='<br>Thanking You<br>CadNaukri Team';
	// 				$this->email->message($msg);	
	// 				$this->email->send();
	// 				$this->session->set_flashdata('success','Check your Email Box [ Site Upgradation is going on. So, there might be email delivery failure. ]');
	// 				$this->Candidate_M->updatePassword($email,$encryptedpass);
	// 			//echo $this->email->print_debugger();exit();
	// 				//echo $email;exit();
	// 				redirect(base_url('candidate/forgot_password'),'refresh');
	// 			}
	// 			else
	// 			{
	// 				$this->session->set_flashdata('error','Email ID Doesn\'t Exist');
	// 				redirect(base_url('candidate/forgot_password'),'refresh');
					
					
	// 			}
	// 		}
	// 		$this->data['subview'] = 'candidate/subview/forget_password';
	// 		$this->load->view('_layout_home',$this->data);
	// 	}
	public function logout()
	{
		if($this->session->userdata('candidate_id'))
        {
			$session_id=$this->session->userdata('session_id');
			$candidate_id=$this->session->userdata('candidate_id');
			$date=$this->session->userdata('date');
			//var_dump($candidate_id);exit();
			//var_dump($session_id);exit();
			$logoutdate=date('Y-m-d H:i:s');
			// $sql="UPDATE log_status SET logout_date='$logoutdate' WHERE login_date='$date' AND candidate_id='$candidate_id';";
			$sql="UPDATE candidate SET is_logged_in='0' WHERE id='$candidate_id';";
            $query=$this->db->query($sql);
			//$this->User_M->logout();
			$this->session->sess_destroy();
			//$this->session->set_userdata(
						//	array('name' => '', 'loggedin' => FALSE, 'user_id'=>'','type'=>'','email'=>''));
			redirect('candidate/login','refresh');
		}
	}

	
	public function dashboard()
	{
		echo '<script>
   				parent.jQuery.colorbox.close();
   				window.top.location.href = "http://www.cadnaukri.com/candidate/dashboard";
   			</script>';
		// ###### DYNAMIC BANNER ######## //

    	//$total_banners=$this->View_M->get_total_banners();
		//$banner_id=rand(1,$total_banners);
		if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        }
        else
        {
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        }
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		// ###### END DYNAMIC BANNER ######## //
	//	print_r($this->session->all_userdata());
		if(isset($_POST['upload']))
		  {
		 
			  	$target_dir = "assets/candidate/profile_image/";
			  	$target_file = $target_dir . basename($_FILES["file"]["name"]);
			  	move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			  	$pathname=$target_file;
			  	$filename=$_FILES["file"]["name"];
			    $data=array('profileImage'=>$filename,'imagePath'=>base_url($pathname));
			   
			    $this->Candidate_M->save($data,$this->session->userdata('candidate_id'));
			     //$data_session=array('imagePath'=>base_url($pathname));
			    // $this->session->set_userdata($data_session);
			    $this->session->set_flashdata('success','Image changed successfully');
			    redirect(base_url().'candidate/dashboard','refresh');
			   	//print_r($_POST);exit();
		  }
		  $this->data['matched_job']=$this->Candidate_M->matched_job($this->session->userdata('candidate_id'));
		//  echo '<pre>';print_r($this->data['matched_job']);exit;
		$this->data['candidate_details']=$this->Candidate_M->get($this->session->userdata('candidate_id'));
		$this->data['candidate_details_all']=$this->Candidate_details_M->get_by(array('userId'=>$this->session->userdata('candidate_id')),TRUE);
		$candidate_id=$this->session->userdata('candidate_id');
		$sql="SELECT GROUP_CONCAT(DISTINCT b.name  
			ORDER BY  b.name ASC SEPARATOR '|'  ) as industry_type
			FROM 
			`candidate_industry_type` a
			join industry_type  b on a.industry_type_id=b.id 
			where user_id=$candidate_id";
		$sql1="SELECT GROUP_CONCAT(DISTINCT b.name  
		ORDER BY  b.name ASC SEPARATOR '|'  ) skills
		FROM 
		`candiate_key_skills` a
		join skills  b on a.key_id=b.id 
		where user_id=$candidate_id";
		$sql2="SELECT GROUP_CONCAT(DISTINCT b.name  
		ORDER BY  b.name ASC SEPARATOR '|'  ) preferred_postions
		FROM 
		`candidate_functional_area` a
		join functional_area  b on a.functional_area_id=b.id 
		where user_id=$candidate_id";
		$this->data['candidate_industry_type']=$this->db->query($sql)->row();
		$this->data['candidate_key_skills']=$this->db->query($sql1)->row();
		$this->data['candidate_preferred_postions']=$this->db->query($sql2)->row();

		// ##################################### NEW CODE 1 ############################## //

		//$candidate_id=$this->session->userdata('candidate_id');
		$progress1=$this->Candidate_M->progress_personal_details($candidate_id);
        $progress2=$this->Candidate_M->progress_edu_details($candidate_id);
        $progress3=$this->Candidate_M->progress_skill_details($candidate_id);
        $progress4=$this->Candidate_M->progress_exp_details($candidate_id);
        $progress5=$this->Candidate_M->progress_contact_details($candidate_id);
        // $progress=( $progress1 + $progress2 + $progress3 + $progress4 + $progress5 );
        // echo $progress;exit();
        $this->data['progress']=( $progress1 + $progress2 + $progress3 + $progress4 + $progress5 );

        //var_dump($progress);
        $ip = $this->input->ip_address();
        date_default_timezone_set("Asia/Kolkata"); 
   		$date=date("Y-m-d H:i:s");
        //var_dump($ip);
        $this->data['last_login_ip']=$this->Candidate_M->get_last_login_ip($candidate_id);
        $this->data['last_login_date']=$this->Candidate_M->get_last_login_date($candidate_id);
        $last_login_ip=$this->Candidate_M->save_last_login_ip($ip,$candidate_id);
      	$last_login_date=$this->Candidate_M->save_last_login_date($date,$candidate_id);
        $this->data['last_applied_job']=$this->Candidate_M->get_last_applied_job($candidate_id);

        $this->data['featured_jobs']=$this->Job_apply_M->get_featured_jobs();


        if(isset($_POST['Dashboard_search']))
        {

        	//var_dump($_POST);
        	
        	$candidate_id=$this->input->post('candidate_id');
			$skill=$this->input->post('skill');
			$experience=$this->input->post('experience');
			$location=$this->input->post('location');
			// echo $skill;
			// echo $experience;
			// echo $location;
			$data = array(
				"candidate_id"=>$candidate_id,
				"skill_name"=>$skill
				);
			$this->Candidate_M->save_last_searched_location($location,$candidate_id);
			$this->Candidate_M->save_dashboard_searched_skills($data);
			$this->Candidate_M->save_last_searched_skill($skill,$candidate_id);
			$this->data['search_results']=$this->Job_apply_M->dashboard_search($skill,$experience,$location);
			
        }
        else if(isset($_POST['View_previous_search']))
        {
        	//var_dump($_POST);exit();
        	$candidate_id=$this->input->post('candidate_id');
        	$skill_name=$this->Candidate_M->get_previous_searched_skill($candidate_id);
        	//var_dump($skill_name);exit();
            $this->data['previous_skill_search']=$this->Candidate_M->get_previous_searched_job_by_skill($skill_name);
        }

		// #################################### END NEW CODE 1 ############################ //

        //$this->load->view('candidate/subview/newdash');
        $this->Candidate_M->just_logged_in($candidate_id);
        $this->data['skills']=$this->Skills_M->get();
        $this->data['skill_name']=$this->Employee_M->get_skill_name($candidate_id);
		$this->data['subview'] = 'candidate/subview/newdash';
		$this->load->view('_layout_home',$this->data);
	}

	public function dashboard_forAdmin()
	{
	//	print_r($this->session->all_userdata());
		if(isset($_POST['upload']))
		  {
		 
			  	$target_dir = "assets/candidate/profile_image/";
			  	$target_file = $target_dir . basename($_FILES["file"]["name"]);
			  	move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			  	$pathname=$target_file;
			  	$filename=$_FILES["file"]["name"];
			    $data=array('profileImage'=>$filename,'imagePath'=>base_url($pathname));
			   
			    $this->Candidate_M->save($data,$this->session->userdata('candidate_id'));
			     //$data_session=array('imagePath'=>base_url($pathname));
			    // $this->session->set_userdata($data_session);
			    $this->session->set_flashdata('success','Image changed successfully');
			    redirect(base_url().'candidate/dashboard','refresh');
			   	//print_r($_POST);exit();
		  }

		  $this->data['matched_job']=$this->Candidate_M->matched_job($this->session->userdata('candidate_id'));
		//  echo '<pre>';print_r($this->data['matched_job']);exit;
		$this->data['candidate_details']=$this->Candidate_M->get($this->session->userdata('candidate_id'));
		$this->data['candidate_details_all']=$this->Candidate_details_M->get_by(array('userId'=>$this->session->userdata('candidate_id')),TRUE);
		$candidate_id=$this->session->userdata('candidate_id');

		$sql="SELECT GROUP_CONCAT(DISTINCT b.name  
			ORDER BY  b.name ASC SEPARATOR '|'  ) as industry_type
			FROM 
			`candidate_industry_type` a
			join industry_type  b on a.industry_type_id=b.id 
			where user_id=$candidate_id";
		$sql1="SELECT GROUP_CONCAT(DISTINCT b.name  
		ORDER BY  b.name ASC SEPARATOR '|'  ) skills
		FROM 
		`candiate_key_skills` a
		join skills  b on a.key_id=b.id 
		where user_id=$candidate_id";
		$sql2="SELECT GROUP_CONCAT(DISTINCT b.name  
		ORDER BY  b.name ASC SEPARATOR '|'  ) preferred_postions
		FROM 
		`candidate_functional_area` a
		join functional_area  b on a.functional_area_id=b.id 
		where user_id=$candidate_id";
		$this->data['candidate_industry_type']=$this->db->query($sql)->row();
		$this->data['candidate_key_skills']=$this->db->query($sql1)->row();
		$this->data['candidate_preferred_postions']=$this->db->query($sql2)->row();

		$this->data['subview'] = 'candidate/subview/dashboard';
		$this->load->view('_layout_home',$this->data);
	}
	public function changepassword()
	{
		if($_POST)
		{
			
			$password=$_POST['password'];
			$confirmpassword=$_POST['confirmpassword'];
			$this->form_validation->set_rules('password', 'Password', 'required|matches[confirmpassword]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('candidate/changePassword');
			}
			else
			{
				$candidate_id=$this->session->userdata('candidate_id');
				$data['password']=md5($password);
				$this->Candidate_M->save($data,$candidate_id);
				$this->session->set_flashdata('successmsg', 'Your Password changed successfully');
				redirect('candidate/changePassword');
		
			}
				
			
		}
		$this->data['candidate_details']=$this->Candidate_M->get($this->session->userdata('candidate_id'));
		$this->data['subview'] = 'candidate/subview/change_password';
		$this->load->view('_layout_home',$this->data);
	}
	
	public function updatePassword()
	{
		
	}
	
	public function email_exists()
    {
		
    	$emailid=$_POST['email_id'];
    //	echo $emailid;
    	$result=$this->Candidate_M->get_by(array('email'=>$emailid));
    	echo count($result);
    	//echo 'Emailid='.$emailid;
          //$res=$this->Candidate_M->email_exists($emailid);
	     //echo $res;
    }
   public function phone_exists()
	 {
		$phoneno=$_POST['phone_num'];
		$result=$this->Candidate_M->get_by(array('mobile'=>$phoneno));
    	 echo count($result); 
		
	  }
	
    public function profile($site=NULL)
    {
    	// ###### DYNAMIC BANNER ######## //

    	if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        }
        else
        {
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        }
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		// ###### END DYNAMIC BANNER ######## //

    	$user_id=$this->session->userdata('candidate_id');
    	$this->data['candidate']=$candidate_p=$this->Candidate_M->get($user_id);
    	
    	$this->data['candidate_details']=$candidate_details=$this->Candidate_details_M->get_by(array('userId'=>$user_id),TRUE);
    	//print_r($this->data['candidate_details']);exit();
    	if(empty($this->data['candidate']))
    	{
				$this->data['candidate']=$this->Candidate_M->get_new();
		}
		if(count($candidate_details)== 0)
		{
			$this->data['candidate_details']=$this->Candidate_details_M->get_new();
		}
		//echo '<pre>';print_r($this->data['candidate']);exit;
		/*******************************************************************************************
		 *
		 * Educational Details tab
		 *
		 *******************************************************************************************/
    	if($site == 'educational_details')
    	{
    		$this->data['educational_details']=$educational_details=$this->Education_details_M->get_by(array('userId'=>$user_id));
      		if(empty($this->data['educational_details']))
    		{
				$this->data['educational_details']=$this->Education_details_M->get_new();
				$this->data['is_edit']=FALSE;
			}
			else
			{
				$this->data['is_edit']=TRUE;
			}
			//print_r($this->data['educational_details']);exit();
			$count=count($educational_details);//Used to decide wheather to update or insert
			if($_POST)
			{
				
				$batch_array_i=array();
				$i=0;
				foreach($_POST['board'] as $key=>$val)
				{
					$batch_array_i[$i]['userId'] = $user_id;
					$batch_array_i[$i]['qualification'] = $_POST['qualification'][$key];
					$batch_array_i[$i]['board'] =  $_POST['board'][$key];
					$batch_array_i[$i]['institute'] =  $_POST['institute'][$key];
					$batch_array_i[$i]['subject'] =  '';
					$batch_array_i[$i]['passingYear'] = $_POST['dop_year'][$key];
					$batch_array_i[$i]['percenatge'] = $_POST['percentage'][$key];
					$batch_array_i[$i]['markSecured'] ='';
					$batch_array_i[$i]['specialization'] = $_POST['specialization'][$key];
					$batch_array_i[$i]['created'] = date('Y-m-d H:i:s');
					$batch_array_i[$i]['modified'] = date('Y-m-d H:i:s');
					
					$i++;
				}
				if($count > 0)
				{
					$this->Education_details_M->delete_batch($user_id);
					$this->db->insert_batch('edudetails', $batch_array_i);
				}
				else 
				{
					$this->db->insert_batch('edudetails', $batch_array_i);
				}
				if(isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] != UPLOAD_ERR_NO_FILE) 
			   {
				$target_dir = "assets/candidate/cv";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$newfilename = round(microtime(true)) . '_' . $candidate_p->name;
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$data['cvname']=$_FILES["fileToUpload"]["name"];
				$data['cvpath']=$target_file;
				$this->Candidate_M->save($data,$user_id);
					//echo '<pre>';print_r($data);exit();
			  }
		
			//$candidate_id=$this->Candidate_M->save($data);
					
				$this->session->set_flashdata('success','Record update successfully');
				redirect('candidate/profile/educational_details');
			//	redirect(base_url('/candidate/profile/educational_details'));
				//echo '<pre>';print_r($batch_array_i);exit;
			}
			$this->data['candidate_id']=$user_id;
			$this->data['subview'] = 'candidate/subview/educational_details';
			$this->load->view('_layout_home',$this->data);
		}
		/*******************************************************************************************
		 *
		 * More Skills Details tab
		 *
		 *******************************************************************************************/

		if($site == 'more_skill_details' )
		{
			//echo "hello";
			if($_POST)
			{
				//echo count($_POST['hidden_msd_id']);exit();
				$msd_id=$_POST['hidden_msd_id'];
				$this->db->where('user_id',$_POST['hidden_user_id']);
				$this->db->delete('more_skill_details');
				$i=0;
				foreach ($_POST['catagory'] as $key => $value) 
				{
					$msdata[$i]['msd_id']=$_POST['hidden_msd_id'][$key];
					$msdata[$i]['user_id']=$_POST['hidden_user_id'];
					$msdata[$i]['skill_id']=$_POST['hidden_skill_id'][$key];
					$msdata[$i]['catagory']=$_POST['catagory'][$key];
					$msdata[$i]['institute']=$_POST['institute'][$key];
					$msdata[$i]['certification']=$_POST['certification'][$key];
					$msdata[$i]['proficiency']=$_POST['proficiency'][$key];
					$i++;
				}
				
				$success=$this->db->insert_batch('more_skill_details',$msdata);
				if($success)
				{
					$this->session->set_flashdata('skillsuccess','Details saved successfully. Redirecting.....');
					redirect(base_url()."candidate/skill_details_saved");
				}
				

			}
			$this->data['subview'] = 'candidate/subview/more_skill_details';
			$this->load->view('_layout_home',$this->data);
		}
		/*******************************************************************************************
		 *
		 * Skills Details tab
		 *
		 *******************************************************************************************/
		if($site == 'skill_details' )
		{
			//echo 'Hello';
			$this->db->order_by('name');
			$this->data['skills']=$this->Skills_M->get();
			$this->data['functional_area']=$this->Functional_area_M->get();
			$this->data['industry_type']=$this->Industry_type_M->get();
			$this->data['candidate_skill_detail']=$candidate_skill_detail=$this->Candiate_key_skills_M->get_by(array('user_id'=>$user_id));
			$this->data['candidate_functional_area']=$candidate_functional_area=$this->Candidate_functional_area_M->get_by(array('user_id'=>$user_id));
			$this->data['candidate_industry_type']=$candidate_industry_type=$this->Candidate_industry_type_M->get_by(array('user_id'=>$user_id));
			
			
			if(count($candidate_skill_detail) == 0)
			{
				$this->data['is_edit_skills']=FALSE;
				$this->data['candidate_skill_detail']=$this->Candiate_key_skills_M->get_new();
			}
			else
			{
				$this->data['is_edit_skills']=TRUE;
			}
			
			if(count($candidate_functional_area) == 0)
			{
				$this->data['is_edit_functional']=FALSE;
				$this->data['candidate_functional_area']=$this->Candidate_functional_area_M->get_new();
			}
			else
			{
				$this->data['is_edit_functional']=TRUE;
			}
				
			
			if(count($candidate_industry_type) == 0)
			{
				
				$this->data['is_edit_industry']=FALSE;
				$this->data['candidate_industry_type']=$this->Candidate_industry_type_M->get_new();
			}
			else
			{
				$this->data['is_edit_industry']=TRUE;
			}
			/********For Form Action ***************************/
			if($_POST)
			{

				
				/***************************For candidate key skills batch updtae*********/
				
				
				if(!empty($_POST['keyskill']))
				{
					$candidate_id=$this->session->userdata('candidate_id');

					$msql="SELECT skill_id FROM more_skill_details WHERE user_id='$candidate_id';";
					//echo $sql;exit();
					$mquery=$this->db->query($msql);
					$dbskills=$mquery->result();
					$askill=array();
					foreach ($dbskills as $key) 
					{
						$askill[]=$key->skill_id;
					}

					$sql_key_skills="INSERT INTO `candiate_key_skills` (`user_id`, `key_id`, `status`) VALUES";
					foreach($_POST['keyskill'] as $key=>$val)
					{
						$sql_key_skills .='('.$user_id.','.$_POST['keyskill'][$key].','.'1'.')';
						$sql_key_skills.=',';

					}

					for ($i=0; $i <count($_POST['keyskill']) ; $i++) 
					{ 
						// ************ //

						// echo $_POST['keyskill'][$i];
						// echo "<br />";
						if(in_array($_POST['keyskill'][$i], $askill))
						{
							//Do Nothing;
						}
						else
						{
							$godata['skill_id']=$_POST['keyskill'][$i];
							$godata['user_id']=$candidate_id;
							$godata['created']=date('Y-m-d H:i:s');
							$success=$this->db->insert('more_skill_details',$godata);
							// if($success)
							// {
							// 	echo "Success";exit();
							// }
							//echo $_POST['keyskill'][$i];
						}

					}
					//exit();

					$sql_key_skills=trim($sql_key_skills,',');

					if(count($candidate_skill_detail) == 0)
					{
						
						$this->Candiate_key_skills_M->custom_insert_batch($sql_key_skills);
							
					}
					else
					{
						$this->Candiate_key_skills_M->delete_batch($user_id);
						$this->Candiate_key_skills_M->custom_insert_batch($sql_key_skills);
							
							
					}

				}
				else 
				{
					$this->Candiate_key_skills_M->delete_batch($user_id);
				}
				
				
				/***************************For candidate Industry type batch updtae*********/
				if(!empty($_POST['industrytype']))
				{
					$sql_industry_type="INSERT INTO `candidate_industry_type` (`user_id`, `industry_type_id`, `status`) VALUES";
					foreach($_POST['industrytype'] as $key=>$val)
					{
						$sql_industry_type .='('.$user_id.','.$_POST['industrytype'][$key].','.'1'.')';
						$sql_industry_type.=',';
					}
					$sql_industry_type=trim($sql_industry_type,',');
					if(count($candidate_industry_type) == 0)
					{
							
						$this->Candidate_industry_type_M->custom_insert_batch($sql_industry_type);
					
					}
					else
					{
						$this->Candidate_industry_type_M->delete_batch($user_id);
						$this->Candidate_industry_type_M->custom_insert_batch($sql_industry_type);
							
							
					}
				}
				else 
				{
					$this->Candidate_industry_type_M->delete_batch($user_id);
				}
				
				/***************************For candidate Functional area  batch updtae*********/
				if(!empty($_POST['functionalarea']))
				{
					$sql_functional_area="INSERT INTO `candidate_functional_area` (`user_id`, `functional_area_id`, `status`) VALUES";
					foreach($_POST['functionalarea'] as $key=>$val)
					{
						$sql_functional_area .='('.$user_id.','.$_POST['functionalarea'][$key].','.'1'.')';
						$sql_functional_area.=',';
							
					}
					$sql_functional_area=trim($sql_functional_area,',');
					if(count($candidate_functional_area) == 0)
					{
							
						$this->Candidate_functional_area_M->custom_insert_batch($sql_functional_area);
							
					}
					else
					{
						$this->Candidate_functional_area_M->delete_batch($user_id);
						$this->Candidate_functional_area_M->custom_insert_batch($sql_functional_area);
					
					}
				}
				else 
				{
					$this->Candidate_functional_area_M->delete_batch($user_id);
				}
						
				$this->session->set_flashdata('success','Record updated successfully');
				redirect('candidate/profile/skill_details');
				
				//$this->db->trans_complete();
			}
			//echo '<pre>';print_r($this->data);exit;
			$this->data['candidate_id']=$user_id;
			$this->data['subview'] = 'candidate/subview/skill_details';
			$this->load->view('_layout_home',$this->data);
		}
		/*******************************************************************************************
		 *
		 * Experience details tab
		 *
		 *******************************************************************************************/
		if($site == 'experience_details')
		{
			$this->data['exp_details']=$exp_details=$this->Experience_details_M->get_by(array('userId'=>$user_id));
			$this->data['project_details']=$project_details=$this->Project_details_M->get_by(array('userId'=>$user_id));
			if($_POST)
			{
			//	echo '<pre>';print_r($_POST);exit();
				$exp=$this->input->post('type');
				/***************************For candidate details updtae************/
				if($exp ==0)
				{
					$updatedata['yrofexp']=0;
					$updatedata['monthofexp']=0;
					//$newdata['notice_period']=0;
						
				}
				else
				{
					$updatedata['yrofexp']=$this->input->post('yop');
					$updatedata['monthofexp']=$this->input->post('monthexp');
					
						
				}
				if(empty($this->data['candidate_details']))
				{
					$this->Candidate_details_M->save($updatedata);
					$this->db->insert($newdata);
				}
				else
				{
					$this->Candidate_details_M->update_candidate_details($updatedata,$user_id);
					//echo $user_id;exit();
					
					//	echo $this->db->last_query();exit();
				}
				/***************************For candidate Experience  batch updtae*********/
				if((isset($_POST['company'])) && !empty($_POST['company']) )
				{

					$newdata['notice_period']=$this->input->post('notice_period');
					$this->db->where('id',$user_id);
					$this->db->update('candidate',$newdata);

					$m=0;
					foreach($_POST['company'] as $key=>$val)
					{
						$batch_array_company[$m]['userId'] = $user_id;
						$batch_array_company[$m]['company'] = $_POST['company'][$key];
						$batch_array_company[$m]['designation'] = $_POST['designation'][$key];
						$batch_array_company[$m]['experience'] = $_POST['joining_year'][$key];
						// $batch_array_company[$m]['from'] = $_POST['joining_year'][$key];
						//$batch_array_company[$m]['to'] = $_POST['leaving_year'][$key];
						$batch_array_company[$m]['ctc'] = $_POST['ctc'][$key];
						$batch_array_company[$m]['created'] = date('Y-m-d H:i:s');
						$batch_array_company[$m]['modified'] = date('Y-m-d H:i:s');
						$batch_array_company[$m]['isActive'] =1;
						$m++;
					}
						
					if(count($exp_details) > 0)
					{
						$this->Experience_details_M->delete_batch($user_id);
						$this->db->insert_batch('expdetails', $batch_array_company);
					}
					else
					{
						$this->db->insert_batch('expdetails', $batch_array_company);
					}
				
						
				}
				/*** ************* **************For candidate Project  batch updtae*******  ******/
				if((isset($_POST['projectdetail'])) && !empty($_POST['projectdetail']) )
				{
					//var_dump($_POST);exit();
					$n=0;
					foreach($_POST['projectdetail'] as $key=>$val)
					{
						$batch_array_project[$n]['userId'] = $user_id;
						$batch_array_project[$n]['descrition'] = $_POST['projectdetail'][$key];
						$batch_array_project[$n]['clientName'] = $_POST['cname'][$key];
						$batch_array_project[$n]['yearofexecution'] = $_POST['yexe'][$key];
						//$batch_array_project[$m]['clientLocation'] = $_POST['Clocation'][$key];
						$batch_array_project[$n]['created'] = date('Y-m-d H:i:s');
						$batch_array_project[$n]['modified'] = date('Y-m-d H:i:s');
						$batch_array_project[$n]['isActive'] =1;
						$n++;
					}
				
					if(count($exp_details) > 0)
					{
						
						$this->Project_details_M->delete_batch($user_id);//echo "EXP";exit();
						$this->db->insert_batch('projectdetails', $batch_array_project);
					}
					else
					{
						//echo "NON EXP";exit();
						$this->db->insert_batch('projectdetails', $batch_array_project);
					}
					//echo $this->db->last_query();exit();
				}
				$this->session->set_flashdata('success','Record updated successfully');
				redirect('candidate/profile/experience_details');
			}
			$this->data['candidate_id']=$user_id;
			$this->data['notice_period']=$this->Candidate_details_M->get_notice_period($user_id);
			$this->data['subview'] = 'candidate/subview/experience_details';
			$this->load->view('_layout_home',$this->data);
		}
		/*******************************************************************************************
		*
		* Contact Details tab
		 *
		*******************************************************************************************/
		if($site == 'contact_details')
		{
		
			
			if($_POST)
			{
				$data_user['mobile']=$this->input->post('mobile');//Original mobile
				$data['altMobile']=$this->input->post('alt_mob');
				$data['altEmail']=$this->input->post('alt_email');
				$data['landNo']=$this->input->post('land');
				// $data['secondary_email']=$this->input->post('secondary_email');
				$data['prsAddrr']=$this->input->post('presentaddress');
				$data['prsCountry']=$this->input->post('prscountry');
				$data['prsState']=$this->input->post('presentstate');
				$data['prsCity']=$this->input->post('presentcity');
				$data['prsPin']=$this->input->post('presentpincode');
				$data['prmAddrr']=$this->input->post('address');
				$data['prmCountry']=$this->input->post('country');
				$data['prmState']=$this->input->post('state');
				$data['prmCity']=$this->input->post('city');
				$data['prmPin']=$this->input->post('pincode');
				$data['hobbies']=$this->input->post('hobbies');
				$candidate_id=$this->session->userdata('candidate_id');
				if(count($candidate_details)== 0)
				{
					$data['userId']=$user_id;
					$data['created']=date('Y-m-d H:i:s');
					$data['modified']=date('Y-m-d H:i:s');
					$this->Candidate_details_M->save($data,NULL,FALSE);
					$thisdata=array('secondary_email'=>$this->input->post('secondary_email'));
					$this->db->where('id',$candidate_id);
					$this->db->update('candidate',$thisdata);
				}
				else 
				{
					$thisdata=array('secondary_email'=>$this->input->post('secondary_email'));
					$this->db->where('id',$candidate_id);
					$this->db->update('candidate',$thisdata);
					$this->Candidate_details_M->update_candidate_details($data,$user_id,FALSE);
				}
				$this->Candidate_M->save($data_user,$user_id);
				$this->session->set_flashdata('success','Record updated successfully');
				redirect('candidate/profile/contact_details');
			}
			$sql="SELECT * FROM cities ORDER BY city_name ASC;";
			$query=$this->db->query($sql);
			$this->data['city_list']=$query->result();
			$this->data['countris']=$this->Country_M->get();
			$this->data['candidate_id']=$user_id;
			$this->data['subview'] = 'candidate/subview/contact_details';
			$this->load->view('_layout_home',$this->data);
		}
		/*******************************************************************************************
		 *
		 * Personal Details tab
		 *
		 *******************************************************************************************/
		elseif($site == 'personal_details')
		{	
			$this->data['candidate_language']=$candidate_language=$this->Candidate_language_M->get_by(array('user_id'=>$user_id));
			if(count($candidate_language)== 0)
			{
				$this->data['is_edit_lang']=FALSE;
			}
			else 
			{
				$this->data['is_edit_lang']=TRUE;
			}
			if(empty($this->data['candidate_details']))
			{
				$this->data['candidate_details']=$this->Candidate_details_M->get_new();
			}
			$this->data['all_language']=$this->Language_M->get();
			if($_POST)
			{
				$updatedata = array(
						'name' =>$_POST['firstname'],
						'nick_name'=>$_POST['nick_name']
						// 'mName'=>$_POST['middlename'],
						// 'lName'=>$_POST['lastname'],
				);
				$this->Candidate_M->save($updatedata,$user_id);
				$data['userId']=$user_id;
				$data['martialStatus']=$_POST['mstatus'];
				$data['gender']=$_POST['gender'];
				$data['noofFamily']=$_POST['member'];
				$data['height']=$_POST['height'];
				$data['weight']=$_POST['weight'];
				$data['dob']=date('Y-m-d',strtotime($_POST['dob']));
				//print_r($data);exit();
				//$language=$_POST['language'];
			     $batch_array_i=array();
				$i=0;
				if((isset($_POST['language'])) && !empty($_POST['language']) )
				{
					foreach($_POST['language'] as $key=>$val)
					{
						$batch_array_i[$i]['user_id'] = $user_id;
						$batch_array_i[$i]['language_id'] = $_POST['language'][$key];
						$batch_array_i[$i]['status'] = 'Y';
							
						$i++;
					}
					if(count($candidate_language)==0)
					{
						$status=$this->db->insert_batch('candidate_language',$batch_array_i);
					}
					else 
					{
						$this->Candidate_language_M->delete_batch($user_id);
						$status=$this->db->insert_batch('candidate_language',$batch_array_i);
					}
					
					//echo $status;exit;
				}
				
				if(count($candidate_details)== 0)
				{
					$data['userId']=$user_id;
					$data['created']=date('Y-m-d H:i:s');
					$data['modified']=date('Y-m-d H:i:s');
					$this->Candidate_details_M->save($data);
				}
				else 
				{
					$this->Candidate_details_M->update_candidate_details($data,$user_id,FALSE);
				}
				//$this->session->set_userdata('user_detail',$data);
				$this->session->set_flashdata('success','Record updated successfully');
				redirect('candidate/profile/personal_details');
				
			}
			
			$this->data['candidate_id']=$user_id;
			$this->data['subview'] = 'candidate/subview/personal_deatils';
			$this->load->view('_layout_home',$this->data);
		}
		if($site == 'account_setting')
		{
			$candidate_id=$this->session->userdata('candidate_id');
			$this->data['candidate_id']=$candidate_id;
			//echo $candidate_id;
			if($_POST)
			{
				//var_dump($_POST);exit();
				$password=md5($this->input->post('password'));
				//echo $password;
				$result=$this->Candidate_M->save_changed_password($password,$candidate_id);
				if($result == true)
				{
					$this->session->set_flashdata('success', 'Saved');
				} 
				else
				{
					$this->session->set_flashdata('error', 'Not Saved');
				}

			}
			$this->data['subview'] = 'candidate/subview/account_setting';
			$this->load->view('_layout_home',$this->data);
		}
		else
		{
			//
		}
		
		
	}
	/****************************FOR AJAX CALL Country-State Drop down******************************/
	public function state_list()
	{
		$country_id=$this->input->post('country_id');
		$state_list=$this->State_M->get_by(array('country_id'=>$country_id));
		if(!empty($state_list))
		{
			foreach($state_list as $sl)
			{
				echo '<option value="'.$sl->state_id.'">'.$sl->state_name.'</option>';
			}
		}
	}
	public function job_apply($job_id)
	{
		//echo $job_id;
		$candidate_id=$this->session->userdata('candidate_id');

		$result=$this->Candidate_M->check_cv_exist($candidate_id);
		if($result == true)
		{
			$data=array(
			'user_id'=>$candidate_id,
			'job_id'=>$job_id,
			'created'=>date('Y-m-d H:i:s')
			);
			$check_applied=$this->Job_apply_M->get_by(
	                                        array('job_id'=>$job_id,
	                                        'user_id'=>$candidate_id));
	        if(count($check_applied) > 0)
	        {
						 	//
			}
			else
			{
				
				$dt['skill_there']='1';
		    	$this->db->where('id',$candidate_id);
		    	$this->db->update('candidate',$dt);


				$applied_id=$this->Job_apply_M->save($data);
	// ##################################### NEW CODE 3 ################################# //
				$job_name=$this->Job_apply_M->get_job_name($job_id);
				$save_last_applied_job=$this->Candidate_M->save_last_applied_job($job_name,$candidate_id);
	// ################################# END NEW CODE 3 ################################# //
			}

						$cand_email=$this->Candidate_M->get_cand_email($candidate_id);
						$cand_name=$this->Candidate_M->get_cand_name($candidate_id);
						$emp_email=$this->Candidate_M->get_emp_email($job_id);
						$emp_name=$this->Candidate_M->get_emp_name($job_id);
						$job_location=$this->Candidate_M->get_job_location($job_id);
						$job_name=$this->Candidate_M->get_job_name($job_id);
						$company_name=$this->Candidate_M->get_company_name($job_id);


						$this->load->library('email');
						// ********  Job Apply Success Email To Candidate   *********// 

						$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to($cand_email);
						$this->email->subject("Job Applied Successfully");
						//$this->email->message("Hello ");

						
						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    Hello ".$cand_name."
	                    <br />
	                    <br />
	                    You have successfully applied for the job ".$job_name." (<b>".$company_name.", ".$job_location."</b>)
	                    <br /><br />
	                    <a href='http://cadnaukri.com/candidate/login'>Sign in</a> now to check your application status.
	                    <br /><br />
	                    Best of luck,
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:15%;width:25%;'></a>
	                    </div>
	                    <br />
	                    
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                  
	                    

	                         ");
	    
	        			$this->email->send();



						// ******** End Job Apply Success Email To Candidate   *********//

						// ******** End Job Apply Success Email To Admin   *********//

	        			$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to('applicationrcv@gmail.com');
						$this->email->subject("New Application Received For <b>".$job_name."</b>");
						//$this->email->message("Hello ");

						
						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    Applicant Name: ".$cand_name." 
	                    <br />
	                    <br />
	                    Applied For: ".$job_name.".
	                    <br /><br />
	                    Posted By :".$emp_name."
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:15%;width:25%;'></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                  
	                    

	                         ");
	    
	        			$this->email->send();

						// ******** End Job Apply Success Email To Admin   *********//


						// ********  Job Apply Success Email To Employer   *********// 

						$this->email->set_mailtype("html");

						$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
				        $this->email->to($emp_email);
						$this->email->subject("New response on your job post- ".$job_name." in ".$job_location);

						$this->email->message("
	                        
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
	                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
	                    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
	                    <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
	                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


	                    <b>Hi ".$emp_name."</b>
	                    <br />
	                    <br />
	                    Your job title: <b>".$job_name."</b> had received a new application from <b>".$cand_name."</b>
	                    <br /><br />
	                    <a href='http://www.cadnaukri.com/employer/login'>Login here</a> to check the application.
	                    <br /><br />
	                    Regards,
	                    <br />
	                    <br />
	                    <div >
	                        <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='CADnaukri.com' style='height:14%;width:23%;'></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>follow us on:</b>
	                    <br />
	                    <br />
	                    <div>
	                        <a href='https://www.facebook.com/CADnaukri'><img style='height:3%;width:3%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
	                        <a href='https://twitter.com/cadnaukri'><img style='height:3%;width:3%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
	                    </div>
	                    <br />
	                    <br />
	                    <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
	                   
	                    

	                        ");


						// $this->email->message("<div>Name:&nbsp&nbsp".$cand_name."</div><br />
						// 					   <div>Email:&nbsp&nbsp".$cand_email."</div><br />
						// 					   <div>Applied For:&nbsp&nbsp".$job_name."</div><br />
						// 					   <div align='right' style='color:blue;'>CADnaukri Team</div>
						// 					");
	    
	        			$this->email->send();

						// ******** End Job Apply Success Email To Employer   *********//
			
			
			//echo $applied_id;exit;
			$this->session->set_flashdata('job_appply_success','Job applied successfully [ Site Upgradation is going on. So, there might be email delivery failure. ]');
			redirect('candidate/dashboard');
		}
		else
		{
		  	$this->session->set_flashdata('job_apply_failed','Please upload your CV before applying job');
		 	redirect('candidate/dashboard','refresh');	
		}
		
	}
	public function add_more_educationals()
	{
		$rowCount=$this->input->post('rowCount');
		//echo $rowCount;
		$str='<div id="rowCount'.$rowCount.'"> 
				<div class="row">
					<div class="col-md-4">
						<label>Qualification</label>
						<select name="qualification[]" class="form-control" id="" >
							<option value="10th">10th</option>
							<option value="12th/Intermediate">12th/Intermediate</option>
							<option value="ITI">ITI</option>
							<option value="Diploma">Diploma</option>
							<option value="BE">BE</option>
							<option value="B.Tech">B.Tech</option>
							<option value="MSc">MSc</option>
							<option value="M.Tech">M.Tech</option>
							<option value="Phd">Phd</option>
						</select>		
					</div>
					<div class="col-md-4">
						<label>Board/Council/University</label>
						<input type="text" class="form-control" name="board[]" value="">
					</div>
					<div class="col-md-4">
						<label>College/Institution</label>
						<input type="text" class="form-control" name="institute[]" value="">
					</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label >STREAM/TRADE/BRANCH</label>
					<input type="text" class="form-control" name="specialization[]">
			    </div>
			    <div class="col-md-4">
			    	<label>Year of passing</label>
			    	<select name="dop_year[]" id="dop_year" class="form-control">
				    	<option value="0">Select...</option>';
				    	 for($i=1980;$i<=Date('Y');$i++)
						{
							$str .='<option value="'.$i.'">'.$i.'</option>';
						}
			        $str .='</select> 
			    </div>
			    <div class="col-md-4">
			    	<label>Marks secured (%)</label>
			    	<input type="text" class="form-control" name="percentage[]">
			    </div>
			</div>
			<div class="col-md-offset-11 col-md-1">
				<a href="javascript:void(0);" onclick="removeRow('.$rowCount.')">
				<i class="fa fa-minus-circle" style="color: #FF0000;font-size:20px;margin-left:5px;"></i></a>
			</div>
		</div>
	</div>';
	echo $str;
					
	}
	public function cvupload()
	{
		$id=$_POST['hidden_id'];
		//echo $id;exit();
		if (isset($_FILES["fileToUpload"]["name"])) 
		{
			$target_dir = "newcv/";
			$target_file = $target_dir . basename($id.rand(133,4000000).$_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			//$newfilename = round(microtime(true)) . '_' . $data['name'];
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$data['cvname']=$id.rand(133,4000000).$_FILES["fileToUpload"]["name"];
			//echo $id.rand(133,4000000).$_FILES["fileToUpload"]["name"];exit();
			$data['cvpath']=$target_file;
			$data['cv_updated']='1';

			// $config['upload_path']='./cv/';
			// 	$config['allowed_types']='pdf|doc|docx';
			// 	$this->load->library('upload',$config);
			
			// 	if(!$this->upload->do_upload('fileToUpload'))
			// 	{
			// 		echo $this->upload->display_errors();
			// 	}
			// 	else
			// 	{
			// 		$file=$this->upload->data();
			// 	    $fname=$_FILES["fileToUpload"]["name"];
			// 	}
			$result=$this->Candidate_M->cv_upload($data,$id);
			if($result != false)
			{
				redirect(base_url().'candidate/dashboard','refresh');
			}
			else
			{
				redirect(base_url().'candidate/dashboard','refresh');
			}


		}
	}
	// ####################################### NEW CODE 2 ############################### //

	public function view_applied_jobs()
	{
		if($this->session->userdata('candidate_id'))
        {
			$candidate_id=$this->session->userdata('candidate_id');
			//echo $candidate_id;exit();
		
		//var_dump($candidate_id);exit();
		//$this->Job_apply_M->get_ajob($candidate_id);
			$this->data['applied_jobs']=$this->Candidate_M->get_applied_jobs($candidate_id);
			$this->data['subview']='candidate/subview/applied_jobs';
			$this->load->view('_layout_home',$this->data);
		// $this->data['subview']=$this->load->view('applied_jobs');
		}
	}
	public function working_on_it()
	{
		$this->data['subview']='working_on_it';
		$this->load->view('_layout_home',$this->data);
	}
	public function view_saved_jobs()
	{
		if($this->session->userdata('candidate_id'))
        {
			$candidate_id=$this->session->userdata('candidate_id');
			$this->data['saved_jobs']=$this->Candidate_M->get_saved_jobs($candidate_id);
			$this->data['subview']='candidate/subview/saved_jobs';
			$this->load->view('_layout_home',$this->data);

		}
	}
	public function job_expired()
	{
		$this->data['subview']='candidate/subview/job_expired';
		$this->load->view('_layout_home',$this->data);
	}
	public function signup_pop_up()
	{
		$this->load->view('signup_pop_up');
	}
	public function view_profile_views()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		$this->Candidate_M->change_profile_notify($candidate_id);
		$this->data['profile_view_details']=$this->Candidate_M->get_profile_view_details($candidate_id);
		$this->data['subview']='candidate/subview/profile_views';
		$this->load->view('_layout_home',$this->data);
		
	}
	public function view_interviews()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		$this->Candidate_M->update_interview_notify($candidate_id);
		$sql="SELECT candidate_inteviews.contact_person,candidate_inteviews.note,candidate_inteviews.date,candidate_inteviews.venue,candidate_inteviews.mobile AS mobile,candidate.name AS candidate_name,candidate_inteviews.time,candidate_inteviews.interview_id,candidate.id AS candidate_id,candidate_inteviews.status 
				FROM candidate 
				INNER JOIN candidate_inteviews
					ON candidate.id=candidate_inteviews.candidate_id 
				WHERE candidate_inteviews.candidate_id='$candidate_id' 
				ORDER BY candidate_inteviews.interview_id DESC";
				$query=$this->db->query($sql);
		$data['interviews']=$query->result();
		$data['subview']='candidate/subview/view_interviews';
		$this->load->view('_layout_home',$data);
	}
	public function inteview_confirmation()
	{
		$interview_id=$this->uri->segment(3);
		$this->Candidate_M->change_interview_status($interview_id);
		redirect(base_url()."candidate/view_interviews");
	}
	public function data_transfer()
	{
		$details=$this->Candidate_M->get_transfer();
		foreach ($details as $key) {
			$rawyear=(($key->to - $key->from) < 0 ? (($key->to - $key->from) * -1) : ($key->to - $key->from));
			$id=$key->userId;
			// echo $key->userId."  >  ".$year;
			// echo '<br />';
			$y1=array('0','1');$y2=array('1','2');$y3=array('2','3');$y4=array('3','4','5');$y5=array('5','6','7');
			if(in_array($rawyear,$y1 ))
			{
				$year='0-1';
			}
			else if(in_array($rawyear,$y2 ))
			{
				$year='1-2';
			}
			else if(in_array($rawyear,$y3 ))
			{
				$year='2-3';
			}
			else if(in_array($rawyear,$y4 ))
			{
				$year='3-5';
			}
			else if(in_array($rawyear,$y5 ))
			{
				$year='5-7';
			}
			else
			{
				$year='7';
			}
			

			$this->Candidate_M->transfer($year,$id);
		}
	}
	public function contestthis()
	{
		$this->load->view('hackerearth');
	}
	public function update_cv()
	{
		$data['subview']='candidate/subview/upload_cv';
		$this->load->view('_layout_home',$data);
	}
	public function social_links()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		if($_POST)
		{
			//var_dump($_POST);exit();
			$google=$_POST['google'];
			$facebook=$_POST['facebook'];
			$twitter=$_POST['twitter'];
			$linkedin=$_POST['linkedin'];

			

			$data=array(
				'google' =>$google,
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'linkedin'=>$linkedin
				);
			$this->db->where('id',$candidate_id);
			$success=$this->db->update('candidate',$data);

			if($success)
			{
				echo '<div class="alert alert-success" role="alert">
						  Social links are updated successfully
						</div>
					';
			}
			else
			{
				echo "Not Inserted";
			}

			//echo '<a href="'.$google.'">Google</a>';
			exit();
		}
		$data['subview']='candidate/subview/social_link';
		$this->load->view('_layout_home',$data);
	}
	public function change_profile_status()
	{
		if($this->session->userdata('candidate_id'))
      	{
      		$status=$this->uri->segment(3);
        	$candidate_id=$this->session->userdata('candidate_id');
        	$success=$this->Candidate_M->change_profile_status($candidate_id,$status);
        	if($success)
        	{
        		redirect(base_url()."candidate/update_cv");
        	}
        }
	}
	public function reset_email()
	{
		if($_POST['secondary'])
		{
			//var_dump($_POST);exit();
			$candidate_id=$this->session->userdata('candidate_id');
			//echo $candidate_id;exit();
			$secondary_email=$_POST['secondary_email'];
			$data=array('secondary_email'=>$secondary_email);
			$this->db->where('id',$candidate_id);
			$success=$this->db->update('candidate',$data);
			if($success)
			{
				redirect(base_url()."candidate/add_secondary_email");
			}
			else
			{
				echo "Problem";
			}

		}
		if($_POST['verify'])
		{
			$candidate_id=$this->session->userdata('candidate_id');
			$email=$this->session->userdata('email');
			$password=md5($_POST['password']);
			if($this->Candidate_M->get_password($candidate_id) == $password)
			{
				//echo "ok";exit();
				redirect(base_url()."candidate/change_email");
			}
			else
			{
				redirect(base_url()."candidate/wrong_password");
			}
		}
		if($_POST['change_email'])
		{
			$email=$_POST['s_email'];
			//echo $email;exit();
			$candidate_id=$this->session->userdata('candidate_id');
			redirect("https://www.softcadinfotech.in/email/candiate_email_reset_mail/".$email."/".$candidate_id);
		}
		$data['subview']='candidate/subview/add_secondary_email';
		$this->load->view('_layout_home',$data);
	}
	public function wrong_password()
	{
		$this->reset_email();
	}
	public function change_email()
	{
		$this->reset_email();
	}
	public function verification_sent()
	{
		$this->session->sess_destroy();
		$this->reset_email();
	}
	public function email_changed_successfully()
	{
		$candidate_id=$this->uri->segment(4);
		$email=$_POST['hiddenemail'];
		$sql="UPDATE candidate SET secondary_email=email WHERE id='$candidate_id';";
		$this->db->query($sql);
		//echo $candidate_id;echo $email;exit();
		$data=array('email'=>$email);
		$this->db->where('id',$candidate_id);
		$success=$this->db->update('candidate',$data);
		if($success)
		{
			$this->reset_email();
		}
		else
		{
			echo "Problem";exit();
		}
		
	}
	public function add_secondary_email()
	{
		$this->reset_email();
	}
	public function multiselect()
	{
		if($_POST['multi'])
		{
			$i=0;
			for($i=0;$i<count($_POST['skill']);++$i)
			{
				//echo $_POST['data'][$i];
				$data=array(
					'user_id'=>$this->session->userdata('candidate_id'),
					'key_id'=>$_POST['skill'][$i],
					'status'=>1

					);
				$this->db->insert('candiate_key_skills',$data);
			}
		}
	}
	public function job_alert()
	{	
		if($_POST)
		{
			//var_dump($_POST);exit();
			$email=$this->input->post('email');
			//echo $email;

			$alert_id=$this->Candidate_M->check_email_job_alert_exist($email);
			//echo $alert_id;exit();
			$adata=array(
				
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'), 
				'mobile' => $this->input->post('mobile'), 
				'industry_type' => $this->input->post('industry_type'), 
				'location' => $this->input->post('city'), 
				'skill' => $this->input->post('skill'), 
				'salary' => $this->input->post('salary'), 
				'email_frequency' => $this->input->post('email_frequency'),  
				'created' => date('Y-m-d H:i:s'),
				'status'=>1

				);


			if($alert_id != 0)
			{
				$this->db->where('job_alert_id',$alert_id);
				$success=$this->db->update('job_alerts',$adata);
			}
			else
			{
				$success=$this->db->insert('job_alerts',$adata);
			}
			if($success)
			{
				echo "<div class='alert alert-success'>
						  Job Alert Saving......
						</div>";
			}
			exit();

			

		}
		$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$data['city_list']=$query->result();
		$data['skills']=$this->Skills_M->get();
		$data['industry_type']=$this->Industry_type_M->get();
		$data['subview']='candidate/subview/job_alert';
		$this->load->view('_layout_home',$data);
	}
	public function load_job_alert_details()
	{
		$email=$this->session->userdata('email');
		$sql="SELECT * FROM job_alerts WHERE email='$email';";
		$query=$this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$rdata=json_encode($query->result());
			$data = (array)json_decode($rdata,true); 

			foreach ($data as $key){

				//echo $key['id'];
				$industry_type=$key['industry_type'];
				$location=$key['location'];
				$skill=$key['skill'];
				$salary=$key['salary'];
				$email_frequency=$key['email_frequency'];
				echo $industry_type.",".$location.",".$skill.",".$salary.",".$email_frequency;
				 				    
			}

		}
		else
		{
			//echo "No Matching Records";
			echo "AEC,Achalpur,3ds Max,0-1,Weekly";
		}
	}
	public function change_alert()
	{
		$email=$this->session->userdata('email');
		$status=$this->uri->segment(3);
		$data=array('status'=>$status);
		$this->db->where('email',$email);
		$success=$this->db->update('job_alerts',$data);
		if($success)
		{
			redirect(base_url()."candidate/job_alert");
		}
	}
	public function quick_apply($job_id=NULL)
	{
		// echo "hi";
		date_default_timezone_set("Asia/Kolkata"); 
		if($_POST)
		{			
			$job_id=$this->uri->segment(3);
			$data['name']=$name=$this->input->post('name');
			$data['email']=$email=$this->input->post('email');
			$data['mobile']=$this->input->post('mobile');
			//$data['cover_letter']=$this->input->post('cover_letter');
			$data['created']=date('Y-m-d H:i:s');
			
			$detail=$this->Job_M->get_emp_details($this->uri->segment(3));

			//$emp_name=$detail->name;
			//$emp_email=$detail->email;

			//$job_title=$detail->jobtitle;


			if (isset($_FILES["fileToUpload"]["name"])) 
			{
				$target_dir = "newcv/";
				$filename=rand(133,4000000).$_FILES["fileToUpload"]["name"];
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				//$newfilename = round(microtime(true)) . '_' . $data['name'];
				// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$data['cvname']=$filename;
				//echo $id.rand(133,4000000).$_FILES["fileToUpload"]["name"];exit();
				$data['cvpath']=$target_file;
				//$insert_id=$this->Job_M->cv_upload($data);
				$cid=$this->Candidate_M->check_quick_apply_email($email);
				if($cid != false)
				{
					$candidate_id=$cid;
				}
				else
				{
					$candidate_id=$this->Candidate_M->quick_apply_sign_up_cv($data);
				}
				//echo $candidate_id;echo $job_id;exit();
				$jdata=array(
					'user_id'=>$candidate_id,
					'job_id'=>$job_id,
					'created'=>date('Y-m-d H:i:s')
					);
				$check_applied=$this->Job_apply_M->get_by(array('job_id'=>$job_id,'user_id'=>$candidate_id));
		        if(count($check_applied) > 0)
		        {
					redirect(base_url()."candidate/already_applied/".$job_id);//exit();
				}
				else
				{
					$applied_id=$this->Job_apply_M->save($jdata);
					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
					if($applied_id)
					{
						//echo $email;echo $name;echo $candidate_id;exit();
						if($cid != false)
						{
							redirect(base_url()."candidate/quick_apply_success/".$job_id);
						}
						else
						{
							redirect("https://www.softcadinfotech.in/email/quick_apply_candidate/".urlencode($email)."/".urlencode($name)."/".$candidate_id."/".$job_id);
						}
						
						// $details=$this->Job_M->quick_apply_details($insert_id);
						// //echo $details->name;exit();
						// $candidate_name=urlencode($details->name);
						// $candidate_email=$details->intern_email;
						// $candidate_mobile=$details->mobile;
						// $cv_url=urlencode($details->cvname);
						// //$cover_letter=urlencode($details->cover_letter);
						// redirect("https://www.softcadinfotech.in/email/quick_apply_candidate/".$emp_email."/".$cv_url."/".$internship_title."/".$candidate_name."/".$candidate_email."/".$candidate_mobile."/".$emp_name);

					}
					else
					{
						redirect(base_url().'candidate/apply_failed','refresh');
					}
				}
			}
		}
		$job_id=$this->uri->segment(3);
		$sql="SELECT jobtitle,lastdate,location FROM job WHERE id='$job_id';";
		$query=$this->db->query($sql);
		$det=$query->row();
		$date=$det->lastdate;
		$title="Quick Apply | ".$det->jobtitle." | ".$det->location." | ".date('M Y',strtotime($date));
		$data['title']=$title;
		$data['subview']='public/quick_apply_job';
		$this->load->View('_layout_home',$data);
	}
	public function quick_apply_success($job_id)
	{
		$job_id=$this->uri->segment(3);
		$this->quick_apply($job_id);
	}
	public function already_applied($job_id)
	{
		$job_id=$this->uri->segment(3);
		$this->quick_apply($job_id);
	}
	public function my_profile()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		$data['subview']='candidate/subview/my_profile';
		$this->load->View('_layout_home',$data);
	}
	public function skill_details_saved()
	{
		$site='more_skill_details';
		$this->profile($site);
	}
	public function more_skill_details_test()
	{
		$this->data['subview'] = 'candidate/subview/more_skill_details_test';
		$this->load->view('_layout_home',$this->data);
	}
	public function my_profile_test()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		$data['subview']='candidate/subview/my_profile_test';
		$this->load->View('_layout_home',$data);
	}
	public function give_exam()
	{
		$exam_id=$this->uri->segment(3);
		$candidate_id=$this->uri->segment(4);
		//$apply_id=$this->uri->segment(5);
		$apply_id=$this->session->userdata('sapply_id');

		if($_POST)
		{
			if($this->Candidate_M->check_is_there_exam_id($exam_id,$candidate_id,$apply_id) != false)
			{
				//echo "Not Spam";exit();
				//var_dump($_POST);exit();
				$result=$this->Candidate_M->check_is_there_exam_id($exam_id,$candidate_id,$apply_id);
				$oexam_id=$result->exam_details_id;
				$ocandidate_id=$result->candidate_id;
				$oapply_id=$result->apply_id;
				$data['db_apply_id']=$oapply_id;
				//exit();

				$ans=$_POST['ans'];
				$apply_id=$_POST['h_apply_id'];
				$ans_col='ans'.$_POST['h_ans_no'];
				$sql="UPDATE applied_exams SET $ans_col='$ans' WHERE apply_id='$apply_id' AND exam_details_id='$exam_id' AND candidate_id='$candidate_id';";
				$success=$this->db->query($sql);
				//var_dump($success);exit();
				if($success)
				{

					//echo $oexam_id;echo $ocandidate_id;echo $oapply_id;exit();
					//echo "Not Spam";exit();
					redirect(base_url()."candidate/give_exam/".$oexam_id."/".$ocandidate_id."/".$oapply_id,'refresh');
				}
			}
			else
			{
				//echo "Spam";exit();
				$this->Candidate_M->mark_spam($apply_id);
				redirect(base_url()."candidate/give_exam/".$exam_id."/".$candidate_id."/".$apply_id);
			}

		}
		$result=$this->Candidate_M->check_is_there_exam_id($exam_id,$candidate_id,$apply_id);
		$data['db_apply_id']=$result->apply_id;
		$data['subview']='candidate/subview/give_exam';
		$this->load->View('_layout_home',$data);
	}
	public function user_details()
	{
		$exam_id=$this->uri->segment(3);
		if($exam_id)
		{
			//echo $exam_id;exit();
			if($_POST)
			{
				//echo $exam_id;exit();
	            //echo "Success";exit();
	            //var_dump($_POST);exit();
	        	$email=$_POST['email'];
	            $result=$this->Sign_up_m->check_already_exist($email);
	            //var_dump($result);exit();
	            if($result)
	            {
                	$data=array(
                		"name"=>$this->input->post("name"),
                		"email"=>$this->input->post("email"),
                		"mobile"=>$this->input->post("mobile"),
                        "created"=>date('Y-m-d H:i:s')
                		);
	            	$result1=$this->Sign_up_m->sign_up($data);
	            	if($result1)
	            	{
	            		$id=$this->Sign_up_m->get_id($email);
	            		//echo $id;exit();
	            		$edata['exam_details_id']=$exam_id;
	            		$edata['candidate_id']=$id;
	            		$edata['is_over']='NO';
	            		$edata['created']=date('Y-m-d H:i:s');

	            		if($this->Candidate_M->is_applied_this_exam($id,$exam_id) == TRUE)
	            		{
	            			//echo 'Already Exist'.$id;exit(); 
	            			$this->session->set_flashdata('applied', 'You\'ve already applied');
	            			redirect(base_url().'candidate/user_details');
	            		}
	            		else
	            		{
	            			//echo 'Inserting'.$id;exit();
	            			$this->db->insert('applied_exams',$edata);
	            			$apply_id=$this->db->insert_id();
	            			$name=$this->Sign_up_m->get_name($id);

	            			redirect(base_url()."candidate/instructions/".$exam_id."/".$id."/".$apply_id);
	                    //redirect("https://www.softcadinfotech.in/email/register_before_exam/".$email."/".$name."/".$id);
	            		}
	            		
	            	}
	            	else
	            	{
	            		//redirect(base_url()."signup/sign_up_failed");
	            		echo "Security Issues";exit();
	            	}
	            }
	            else
	            {
	            	//email_already_exist
	            	$this->session->set_flashdata('email_exists', 'Your email is already registered. please login to proceed');
	                redirect(base_url()."candidate/user_details/".$exam_id);
	            }

			}
			//$this->load->view('candidate/subview/personal_details_for_exam');
			$data['subview']='candidate/subview/save_exam_cand_details';
			$this->load->View('_layout_home',$data);
		}
		else
		{

		}
		
	}
	public function give_exam_now()
	{
		$exam_id=3;//$this->uri->segment(3);
		$id=$this->session->userdata('candidate_id');
		if($this->Candidate_M->is_applied_this_exam($id,$exam_id) == TRUE)
		{
			//echo "Exists";exit();
			$this->session->set_flashdata('already_applied','You\'ve already applied');
			redirect(base_url()."candidate/my_exams");
		}
		else
		{
			//echo "Inserting";exit();
			$edata['exam_details_id']=$exam_id;
			$edata['candidate_id']=$id;
			$edata['is_over']='NO';
			$edata['created']=date('Y-m-d H:i:s');
			$this->db->insert('applied_exams',$edata);
			$apply_id=$this->db->insert_id();
			//echo $apply_id;exit();
			redirect(base_url()."candidate/instructions/".$exam_id."/".$id."/".$apply_id);
		}
		
	}

	public function instructions()
	{
		$apply_id=$this->uri->segment(5);

		$this->Candidate_M->set_exam_session($apply_id);


		

		$data['subview']='candidate/subview/exam_instructions';
		$this->load->view('_layout_home',$data);
	}
	public function my_exams()
	{
		$candidate_id=$this->session->userdata('candidate_id');
		$data['exams']=$this->Candidate_M->my_exams($candidate_id);
		$data['subview']='candidate/subview/my_exams';
		$this->load->view('_layout_home',$data);
	}
	public function save_exam($apply_id)
	{
		if($apply_id)
		{
			//Candidate details for email by apply_id
			//Email Verify if not in session
			//Applied exam is_over change to 'YES'
			$data['details']=$c_details=$this->Candidate_M->get_cand_details($apply_id);
			if($_POST)
			{
				$udata['is_over']='YES';
				$this->db->where('apply_id',$apply_id);
				$this->db->update('applied_exams',$udata);
				//var_dump($_POST);exit();
				$email=$c_details->email;
				$name=$c_details->name;
				$id=$c_details->candidate_id;
				redirect("https://www.softcadinfotech.in/email/register_before_exam/".$email."/".$name."/".$id."/".$apply_id);
			}
			
			$data['subview']='candidate/subview/save_exam';
			$this->load->view('_layout_home',$data);
		}
		else
		{
			redirect(base_url()."candidate/dashboard");
		}
		
	}
	public function answer_details()
	{
		$data['subview']='candidate/subview/answer_details';
		$this->load->view('_layout_home',$data);
	}
	


	// ####################################### END NEW CODE 2 ############################### //


	// Sign Up
	// public function sign_up()
 //    {
 //    	//echo "Success";exit();
 //    	$data=array(
 //    		"name"=>$this->input->post("name"),
 //    		"email"=>$this->input->post("email"),
 //    		"mobile"=>$this->input->post("mobile")
 //    		);
 //    	$result=$this->sign_up_m->sign_up($data);
 //    	if($result != false)
 //    	{
 //    		$this->session->set_flashdata('success', 'Password Verification Link Has Been Sent On Your Email');
 //    		redirect(base_url('candidate/login'),'refresh');
 //    	}
 //    	else
 //    	{
 //    		$this->session->set_flashdata('error', 'Failed');
 //    		redirect(base_url('candidate/login'),'refresh');
 //    	}
 //    } 
 //    public function sign_up_success()
 //    {
    	
 //    }
 //    public function sign_up_failed()
 //    {
    	

 //    }

	// public function shootcron()
	// {
	// 	//echo "HELLO World";
	// 	$this->load->library('email');
	// 	$this->email->from('no-reply@cadnaukri.com','CRON | HERE');
	// 	$this->email->to('cadtestmymail@gmail.com');
	// 	$this->email->subject("CRON TEST");
	// 	$this->email->message("Hello");
	// 	$this->email->send();

	// }


}
?>