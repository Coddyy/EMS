<?php
class Employer extends MY_Controller  
{
	//constructor function 
  function __construct()
   {
     parent::__construct();
		$this->load->model('Candidate_M');
		$this->load->model('Candidate_details_M');
		$this->load->model('Employee_M');
		$this->load->model('Employee_details_M');
		$this->load->model('Company_M');
		$this->load->model('Job_M');
		$this->load->model('Country_M');
		$this->load->model('Skills_M');
		$this->load->model('Job_apply_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Internship_M');
		$this->load->model('Country_M');
		$this->load->model('City_M');
		$this->load->model('Sign_up_rec_M');
		//$this->load->model('Country_M');
		$this->load->library('form_validation');
     	$this->load->helper('form');
     	$this->load->library('email');
     	$this->load->model('View_M');
     	$this->load->model('Services_M');
     	$this->load->model('SuperAdmin_M');	
     	$exception_url=array("employer/login","employer/forgot_password","employer/logout","employer/signup",
     	"employer/reset","employer/verification","employer/reset_password","employer/security_questions","employer/check","employer/email_exists","employer/phone_exists","corn");
     	if($this->uri->segment(2)=='email_verify' || $this->uri->segment(2)=='suspicious_activity' || $this->uri->segment(2)=='change_password' || $this->uri->segment(3)=='check' || $this->uri->segment(2)=='new_password_updated' || $this->uri->segment(2)=='new_password_not_updated' || $this->uri->segment(2)=='change_email' || $this->uri->segment(2)=='email_changed_successfully' || $this->uri->segment(2)=='empty_cart_api')
     	{
     		//
     	}
     	else if((in_array(uri_string(),$exception_url) == FALSE) && ($this->Employee_M->isLoggedin() == FALSE))
     	{
     		redirect("employer/login", "refresh");
     	}
    }
  	public function login()
	{
		//echo md5("Abhra@12");
		if(isset($_POST['login']))
		{
			$emp_email=$_POST['email_id'];
			$wrong_attempts=$this->Employee_M->count_wrong_attempts($emp_email);
			//echo $wrong_attempts;exit();
			
			$dashboad=base_url('employer/dashboard');
			if($this->Employee_M->isLoggedin() == TRUE)
			{
				redirect($dashboad,'refresh');
			}	
			$rules = $this->Employee_M->rule_login;
			$this->form_validation->set_rules($rules);
		
			if($this->form_validation->run() == TRUE)
			{
				if($this->Employee_M->login() == TRUE)
				{
					//  print_r($this->session->all_userdata());exit();
					//	exit();
					$this->Employee_M->reset_wrong_login_atempts($emp_email);
					redirect($dashboad,'refresh');	
				}
				else
				{
					//echo "Working";exit();
					if($wrong_attempts < 3 )
					{
						$this->Employee_M->save_wrong_login_atempts($emp_email);
						$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
						redirect(base_url('employer/login'),'refresh');
					}
					else
					{
						$data=$this->Employee_M->get_employer_details($emp_email);
						if($data != false)
						{
							foreach($data as $key)
							{
								$id=$key->id;
								$emp_name=$key->name;
								//$urldata=$emp_email.'-'.$emp_name.'-'.$id; //Important But Not In Use
								$urldata=$emp_email.'-'.$emp_name;
								//echo $urldata;exit();
								$this->Employee_M->display_temp_msg_when_sis_function_calling($id);
								redirect("https://www.softcadinfotech.in/email/cadnaukri_sendmail_employer_login_wrong_attempts/".$urldata);
							}
							// $this->session->set_flashdata('wrong','Wrong Attempt');
							// redirect(base_url('employer/login'),'refresh');
						}
						else
						{
							$this->session->set_flashdata('details_not_found','Your Details Are Missing, Please Sign Up Again!');
							redirect(base_url('employer/login'),'refresh');
						}
						
					}
				}
		    }
			
	 		
	    }	
		if($this->uri->segment(3) == 'check')
		{
			echo '<div class="container">
					<div class="row">
						<div class="col-md-12">
						<form action="'.base_url().'employer/check" method="post" class="form-group">
							<input class="form-control" type="text" name="t" required="" placeholder="t" />
							<input class="form-control" type="text" name="c" required=""placeholder="c" />
							<input class="btn btn-danger" type="submit" value="Submit" />
						</form>
					</div>
				</div>';
		}
		
		if(isset($_POST['signup']))
		{
			//print_r($_POST);exit;
			$rand=$this->random_number();
			$data['fName']=$_POST['fname'];
			$data['lName']=$_POST['lname'];
			$data['password']=md5($_POST['password_sign']);
			$data['email']=$email=$_POST['email'];
			$data['mobile']=$_POST['mobile'];
			$data['emailVerificationCode']=$rand;
			$data['mobileVerificationCode']=$rand;
			$data['companyname']=$_POST['companyname'];
			$data['location']=$_POST['presentlocation'];
			$data['address']=$_POST['address'];
			$data['nationality']=$_POST['nationality'];
			$data['roles']=$_POST['role'];
			if(isset($_POST['is_mobile']))
			{
				$data['isMobile']=1;
			}
			else
			{
				$data['isMobile']=0;
			}
			if(isset($_POST['is_email'] ))
			{
				$data['isEmail']=1;
			}
			else
			{
				$data['isEmail']=0;
			}
			
			$data['created']=date('Y-m-d H:i:s');
			$data['isActive']='0';
		
		
			
			$emp_id=$this->Employee_M->save_employee($data);
			//print_r($data);exit();
			//$url=base_url()."employer/emailveify/".$emp_id."/".$rand;
			$encrypted_user_id=base64_encode($emp_id);
			$string = rawurlencode($encrypted_user_id);
			$link=base_url("employer/email_verify/$string");
			$logo=base_url().'assets/images/logo.png';
			/*########################Email send################*/
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$message = '<html><body>';
		    $message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
		    $message .= "<p style='color:orange'>Dear User,</p><br />";
		    $message.='<p>Your verification code is '.$rand.'</p><br><p>Please click below link to activate your account </p><br>'.$link;
		    $message .= "<br/><br/>";     				 
		    $message .= "<b>NB:</b> Please visit our site once again to discover a new job search experience with host of features & benefits..<br/><br/>";
			$message .= "<b>Happy Recuirting.. :</b><br /><br/>"; 
		    $message .= "<b>cadnaukri.com</p>"; 
		    $message .= "</body></html>";
			$this->email->from('no-reply@cadnaukri.com','CadNaukri');
			$this->email->to($email); 
			$this->email->subject('Email Verification ');
			$this->email->message($message);
			$this->email->send();
			
			$this->session->set_flashdata('sucess', 'Please check your mailbox to valid your account');
		   redirect('employer/login');
		}

		$this->data['designations']= $designations=$this->Sign_up_rec_M->get_designation();
		$this->data['country_list']=$this->Country_M->get();
		$this->data['subview']='employer/subview/login';
		$this->load->view('_layout_home',$this->data);  //,$this->data
	}

	public function suspicious_activity()
	{
		//$this->session->set_flashdata('wrong','Wrong Attempt');
		$this->login();
	}
	public function change_password()
	{
		if($_POST)
		{
			//var_dump($_POST);exit();
			$email=$this->uri->segment(3);
			$data=array(
				'password'=>md5($this->input->post('password'))
				);
			$this->db->where('email',$email);
			$success=$this->db->update('employer',$data);
			if($success)
			{
				redirect(base_url()."employer/new_password_updated");
			}
			else
			{
				redirect(base_url()."employer/new_password_not_updated");
			}
		}
		$data['subview']='employer/subview/chng_password';
		$this->load->view('_layout_home',$data);
	}

	public function email_verify($emp_id=NULL)
	 {
	 	if($_POST)
	 	{
			$emp_id=$this->input->post('emp_id');
			$verification_code=$this->input->post('verification_code');
		//	$decrypt_user_id=$this->decrypt($emp_id);
			$decrypt_user_id=base64_decode($emp_id);
			$result=$this->Employee_M->get_by(array('id'=>$decrypt_user_id,'emailVerificationCode'=>$verification_code));
			//echo $this->db->last_query();exit();
			if(count($result) > 0)
			{
				$data=array('isEmailVerified'=>1,'isActive'=>1);
				$this->Employee_M->save($data,$decrypt_user_id);
			    $this->session->set_flashdata('sucess','Your account is activated.Please login to your account');
				redirect(base_url().'employer/login');
			}
			
			else
			{
				$this->session->set_flashdata('error','Wrong verification code');
				redirect(current_url());
			}
		}
	 	
	 	
	 	$this->data['subview'] = 'employer/subview/emailveryfy';
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
              $this->data['subview'] = 'employer/subview/forgot_password';
			  $this->load->view('_layout_home',$this->data);        
      }
	public function forgot_password()
	{	
		$rules = $this->Employee_M->rule_forgotpass;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			
			if($this->Employee_M->check_email_exist()==TRUE)
			{
				$email=$this->input->post('email_id');
				$rand='';
				$seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789');
				shuffle($seed); 
				foreach (array_rand($seed, 6) as $k) 
				$rand.= $seed[$k];
				$encryptedpass=md5($rand);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('no-reply@cadnaukri.com','CadNaukri');
				$this->email->to($email); 
				$this->email->subject('PASSWORD');
				$login_url=base_url('employer/login');
				$str ="<a href='".base_url('employer/login')."' >Click Here </a>";
				$msg='';
				$msg.='Hello User ,
					<br>Welcome to CadNaukri ! 
					<br>Your Account Password is <br>Password : '.$rand.'<br>You Can login using 
					this password and also change your password after login.<br>';
					$msg .=$str .'or copy  the below url to your browser <br/>';
					$msg .=$login_url;
				  $msg.='<br>Thanking You<br>CadNaukri Team';
				$this->email->message($msg);	
				$this->email->send();
				$this->session->set_flashdata('success','Check your Email Box');
				$this->Employee_M->updatePassword($email,$encryptedpass);
				redirect(base_url('employer/reset'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('error','Email ID Doesn\'t Exist');
				redirect(base_url('employer/reset'),'refresh');
				
			}
		} 
		$this->data['subview'] = 'employer/subview/forgot_password';
	   $this->load->view('_layout_home',$this->data);
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
	
	public function logout()
	{
		//$this->User_M->logout();
		$this->session->sess_destroy();
		$this->session->set_userdata(
						array('name' => '', 'loggedin' => FALSE, 'user_id'=>'','type'=>'','email'=>''));
		//redirect('employer/login','refresh');
		redirect('Logout','refresh');
	}
	
	
	
	public function dashboard()
	{

		// ####### DYNAMIC BANNER ######## //

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
        $this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		// ####### END DYNAMIC BANNER ######## //
		$emp_id=$this->session->userdata('emp_id');
		  if(isset($_POST['upload']))
		  {
		 
			  	$target_dir = "assets/employer/profile_image/";
			  	$target_file = $target_dir . basename($_FILES["file"]["name"]);
			  	move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			  	$pathname=$target_file;
			  	$filename=$_FILES["file"]["name"];
			    $data=array('profileImage'=>$filename,'imagePath'=>base_url($pathname));
			    $this->Employee_M->save($data,$emp_id);
			    $this->session->set_flashdata('success','Image changed successfully');
			       redirect(base_url().'employer/dashboard','refresh');
			   	//print_r($_POST);exit();
		  }
		$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
		$this->data['employee_details_all']=$this->Employee_details_M->get_by(array('userId'=>$this->session->userdata('emp_id')),TRUE);
		//$this->data['subview'] = 'employer/subview/employer_dashboard';

		$employer_id=$this->session->userdata('emp_id');
		$ip = $this->input->ip_address();
        date_default_timezone_set("Asia/Kolkata"); 
   		$date=date("Y-m-d H:i:s");
   		$this->data['last_login_ip']=$this->Employee_M->get_last_login_ip($employer_id);
        $this->data['last_login_date']=$this->Employee_M->get_last_login_date($employer_id);
		$last_login_ip=$this->Employee_M->save_last_login_ip($ip,$employer_id);
      	$last_login_date=$this->Employee_M->save_last_login_date($date,$employer_id);

      	// $this->data['last_posted_job']=$this->Employee_M->get_jobtitle($this->Employee_M->get_last_posted_job($employer_id)); //OLD CODE
      	$this->data['last_posted_job']=$this->Employee_M->get_last_posted_job($employer_id);
      	// echo $this->session->userdata('email');
      	if(isset($_POST['search_candidate']))
      	{
      		$this->data['title']='Your Search Results';
      		//echo "Hello";
      		//var_dump($_POST);
      		$skill=$_POST['skill'];
      		$location=$_POST['location'];
      		$experience=$_POST['experience'];
      		$sql="SELECT skills.name AS skillName,candidate.name AS Name,candidate.location AS Location,expdetails.experience AS experience,candidate.id AS candidate_id 
      				FROM candidate 
      				INNER JOIN candiate_key_skills 
      					ON candidate.id = candiate_key_skills.user_id 
      				INNER JOIN skills 
      					ON candiate_key_skills.key_id = skills.id 
      				INNER JOIN expdetails 
      					ON candidate.id=expdetails.userId 
      				WHERE skills.name LIKE '%$skill%' 
      				AND candidate.deactive_profile='0' ";
      		if($_POST['location'])
      		{
      			$sql .= "AND candidate.location='$location' ";
      		}
      		if($_POST['experience'])
      		{
      			$sql .= "AND expdetails.experience != '' AND expdetails.experience='$experience' ";
      		}	
      		$sql .="GROUP BY Name ORDER BY candidate.created DESC LIMIT 10";
      		$query=$this->db->query($sql);
      		//print_r($query->num_rows());
      		//print_r($query->result());
      		$this->data['candidates']=$query->result();
      		
      	}
      	else
      	{
      		$this->data['title']='Search Your Candidates';
      	}
      	$this->db->order_by('city_name','ASC');
      	$locationsql=$this->db->get('cities');
      	//print_r($locationsql->result());
      	$this->data['locationapi']=$locationsql->result();


      	$this->db->where('id',$employer_id);
      	$this->db->select('location');
      	$locresult=$this->db->get('employer');
      	//echo $locresult->row()->location;exit();
      	$this->data['empLocation']=$locresult->row()->location;
      	if($locresult->row()->location)
      	{
      		$city_id=$locresult->row()->location;
      		$csql="SELECT city_name FROM cities WHERE city_id='$city_id';";
      		$cquery=$this->db->query($csql);
      		$city_name=$cquery->row()->city_name;
      		$this->db->where('location',$city_name);
      		$this->db->order_by('created','DESC');
      		$this->db->limit(10, 0);
      		$locresult=$this->db->get('candidate');
      		$this->data['nearbycandidates']=$locresult->result();
      	}
      	
		$this->data['subview'] = 'employer_dashboard';
		//$this->data['subview'] = 'employer/subview/dashboard';
		$this->load->view('_layout_home',$this->data);
	}
	
	public function view_candidate_profile($candidate_id)
	{
		$employer_id=$this->session->userdata('emp_id');
		$candidate_id=$this->uri->segment(3);
		$udata=array(

			"candidate_id"=>$candidate_id,
			"employer_id"=>$employer_id,
			"created"=>date('Y-m-d H:i:S')
			);
		$this->Employee_M->save_profile_view($udata);
		$this->Employee_M->profile_viewed_notification($candidate_id);
		$data['skill_name']=$this->Employee_M->get_skill_name($candidate_id);
		$data['language']=$this->Employee_M->get_language($candidate_id);
		$data['project']=$this->Employee_M->get_project($candidate_id);
		$data['subview']='employer/subview/candidate_profile_view';
		$this->load->view('_layout_home',$data);
	}
	public function schedule_interview()
	{
		if($_POST)
		{
			$employer_id=$this->session->userdata('emp_id');
			$candidate_id=$this->uri->segment(3);
			$data=array(

				'candidate_id'=>$candidate_id,
				'employer_id'=>$employer_id,
				'date'=>$this->input->post('date'),
				'contact_person'=>$this->input->post('name'),
				'mobile'=>$this->input->post('mobile'),
				'time'=>$this->input->post('time'),
				'venue'=>$this->input->post('venue'),
				'note'=>$this->input->post('note'),
				'created'=>date('Y-m-d H:i:s'),
				'modified'=>date('Y-m-d H:i:s'),
				'status'=>'Pending'
				);
			$success=$this->db->insert('candidate_inteviews',$data);
			$this->Candidate_M->change_interview_notify($candidate_id);
			if($success)
			{
				redirect(base_url()."employer/interview_scheduled");
			}
			else
			{
				redirect(base_url()."employer/interview_not_scheduled");
			}
		}
		$data['subview']='employer/subview/schedule_interview';
		$this->load->view('_layout_home',$data);
	}
	public function interview_scheduled()
	{
		$this->schedule_interview();
	}
	public function interview_not_scheduled()
	{
		$this->schedule_interview();
	}
	public function view_interviews()
	{
		$employer_id=$this->session->userdata('emp_id');
		$sql="SELECT candidate_inteviews.contact_person,candidate_inteviews.note,candidate_inteviews.date,candidate_inteviews.venue,candidate_inteviews.mobile AS mobile,candidate.name AS candidate_name,candidate_inteviews.time,candidate_inteviews.interview_id,candidate.id AS candidate_id,candidate_inteviews.status 
				FROM candidate 
				INNER JOIN candidate_inteviews
					ON candidate.id=candidate_inteviews.candidate_id 
				WHERE candidate_inteviews.employer_id='$employer_id' 
				ORDER BY candidate_inteviews.interview_id DESC";
				$query=$this->db->query($sql);
		$data['interviews']=$query->result();
		$data['subview']='employer/subview/view_interviews';
		$this->load->view('_layout_home',$data);
	}
	public function update_interview()
	{
		$interview_id=$this->uri->segment(3);
		$employer_id=$this->session->userdata('emp_id');
		if($_POST)
		{
			//var_dump($_POST);exit();
			$candidate_id=$this->input->post('hidden_candidate_id');
			$data=array(

				'candidate_id'=>$this->input->post('hidden_candidate_id'),
				'employer_id'=>$employer_id,
				'date'=>$this->input->post('date'),
				'contact_person'=>$this->input->post('name'),
				'mobile'=>$this->input->post('mobile'),
				'time'=>$this->input->post('time'),
				'venue'=>$this->input->post('venue'),
				'note'=>$this->input->post('note'),
				'modified'=>date('Y-m-d H:i:s'),
				'status'=>'Pending'
				);
			$this->db->where('interview_id',$interview_id);
			echo $candidate_id;
			$this->Candidate_M->change_interview_notify($candidate_id);
			$success=$this->db->update('candidate_inteviews',$data);
			if($success)
			{
				redirect(base_url()."employer/interview_schedule_updated/".$interview_id);
			}
			else
			{
				redirect(base_url()."employer/interview_not_updated".$interview_id);
			}
			
		}
		$this->db->where('interview_id',$interview_id);
		$query=$this->db->get('candidate_inteviews');
		$data['interview']=$query->result();
		$data['subview']='employer/subview/update_interview';
		$this->load->view('_layout_home',$data);
	}
	public function interview_schedule_updated()
	{
		$this->update_interview();
	}
	public function interview_not_updated()
	{
		$this->update_interview();
	}
	public function delete_interview()
	{
		$interview_id=$this->uri->segment(3);
		$this->db->where('interview_id',$interview_id);
		$success=$this->db->delete('candidate_inteviews');
		if($success)
		{
			redirect(base_url()."employer/schedule_deleted");
		}
	}
	public function view_job_views()
	{
		$employer_id=$this->session->userdata('emp_id');
		$data['my_jobs']=$this->Job_M->get_my_jobs($employer_id);
		$data['subview']='employer/subview/view_job_views';
		$this->load->view('_layout_home',$data);
	}
	public function schedule_deleted()
	{
		$this->view_interviews();
	}
	public function changepassword()
	{

		$emp_id=$this->session->userdata('emp_id');
		if($_POST)
		{
			$password=$_POST['password'];
			$confirmpassword=$_POST['confirmpassword'];
			$this->form_validation->set_rules('password', 'Password', 'required|matches[confirmpassword]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('employer/changePassword');
			}
			else
			{
				
				$encryptedpass=md5($password);
				$data['password']=$encryptedpass;
				$this->Employee_M->save($data,$emp_id);
				$this->session->set_flashdata('successmsg', 'Your Password changed successfully');
				redirect('employer/changePassword');
			
			}
		}
		$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
		$this->data['subview'] = 'employer/subview/change_password';
		$this->load->view('_layout_home',$this->data);
	}
	public function profile()
	{
		$emp_id=$this->session->userdata('emp_id');
		if($_POST['personal_details'])
		{
			$data['name']=$this->input->post('fName');
			$data['mobile']=$this->input->post('mobile');
			$data['address']=$this->input->post('address');
			$data['nationality']=$this->input->post('nationality');
			$data['location']=$this->input->post('location');
			$this->Employee_M->save($data,$emp_id);
			redirect(base_url()."employer/company_details");

		}
		if($_POST['company_details'])
		{

			$data['companyName']=$this->input->post('companyName');
			$data['roles']=$this->input->post('roles');
			$data['industry_type']=$this->input->post('industry_type');
			$data['company_email']=$this->input->post('company_email');
			$this->Employee_M->save($data,$emp_id);
			redirect(base_url()."employer/social_logins");
		}
		if($_POST['social_logins'])
		{
			$data['facebook']=$this->input->post('facebook');
			$data['linkdin']=$this->input->post('linkdin');
			$data['twitter']=$this->input->post('twitter');
			$this->Employee_M->save($data,$emp_id);
			$this->session->set_flashdata('success','Record update successfully');
			redirect(base_url().'employer/profile');
		}
		
		$this->data['profile']=$profile=$this->Employee_M->get($emp_id,TRUE);
		$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	//	$this->data['country_nam']=$this->Country_M->get_by(array('country_id',$profile->nationality),TRUE);
		$this->data['country_list']=$this->Country_M->get();
		$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$this->data['city_list']=$query->result();
		$this->data['industry_types']=$this->Employee_M->get_industry_types();
		$this->data['employee_details_all']=$this->Employee_details_M->get_by(array('userId'=>$this->session->userdata('emp_id')),TRUE);
		$this->data['designations']=$this->Employee_M->get_designations();
		$this->data['subview'] ='employer/subview/profile';
		$this->load->view('_layout_home',$this->data);
	}
	public function company_details()
	{
		$this->profile();
	}
	public function social_logins()
	{
		$this->profile();
	}
	public function view_company()
	{
		$company_id=$this->uri->segment(3);
		$data['details']=$this->Employee_M->get_company_details($company_id);
		$data['subview'] = 'employer/subview/view_company';
		$this->load->view('_layout_home',$data);
	}
	public function view_job()
	{
		$job_id=$this->uri->segment(3);
		$data['details']=$this->Employee_M->get_job_details($job_id);
		$data['subview'] = 'employer/subview/view_job';
		$this->load->view('_layout_home',$data);
	}
	public function email_exists()
    {
		
    	$emailid=$_POST['emailid'];
   		$result=$this->Employee_M->get_by(array('email'=>$emailid));
    	echo count($result);
    	
    }
   public  function phone_exists()
	{
		  $phoneno=$_POST['phone_num'];
		  $result=$this->Employee_M->get_by(array('mobile'=>$phoneno));
    	echo count($result); 
		//$res=1;
	 }
	 public function company_profile()
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id,'isActive'=>1));
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['subview'] = 'employer/subview/company_profile';
		$this->load->view('_layout_home',$this->data);
	 }
	 public function add_company($id=NULL)
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	if($id)
	 	{
	 		$this->data['company']=$this->Company_M->get($id,TRUE);
	 	}
	 	else 
	 	{
	 		$this->data['company']=$this->Company_M->get_new();
	 	}
	 	if($_POST)
	 	{
	 		   $data['userId']=$emp_id;
		 		$data['name']=$this->input->post('name');
		 		//$data['tagline']=$this->input->post('tagline');
		 		$data['regdoffc']=$this->input->post('regdoffc');
		 		$data['address']=$this->input->post('address');
		 		$data['website']=$this->input->post('website');
		 		$data['company_email']=$this->input->post('company_email');
		 		//$data['teamsize']=$this->input->post('teamsize');
		 		//$data['phno']=$this->input->post('phno');
		 		//$data['mobile']=$this->input->post('mobile');
		 		//$data['email']=$this->input->post('email');

		 		$data['location']=$this->input->post('location');
		 		$data['description']=$this->input->post('description');
		 		$data['facebook']=$this->input->post('facebook');
		 		$data['linkedin']=$this->input->post('linkedin');
		 		$data['twitter']=$this->input->post('twitter');
		 		$data['google']=$this->input->post('google');
		 		$data['isActive']=1;
		 		$data['isMobile']=$this->input->post('isActive');
		 		$data['isEmail']=$this->input->post('isEmail');
		 		$data['created']=date('Y-m-d H:i:s');
		 	 if($_FILES["fileToUpload"]["name"])
		 	 {
			    $target_dir = "assets/company/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$filename=$_FILES["fileToUpload"]["name"];
				$data['logo']=base_url($target_file);
			}
			else{
				$pathname='';
			}
			if($_FILES["coverimage"]["name"])
			{
			 	$target_dir1 = "assets/company/";
				$target_file1 = $target_dir . basename($_FILES["coverimage"]["name"]);
				move_uploaded_file($_FILES["coverimage"]["tmp_name"], $target_file1);
				$filename=$_FILES["coverimage"]["name"];
				$data['coverimage']=base_url($target_file1);
			}
			$edata['company_email']=$this->input->post('company_email');
		 	$this->db->where('id',$this->session->userdata('emp_id'));
		 	$this->db->update('employer',$edata);	
		 	$this->Company_M->save($data,$id);	


		 	$name=$this->session->userdata('name');
		 	$company_email=urlencode($this->input->post('company_email'));
		 	$id=$this->session->userdata('emp_id');
			redirect("https://www.softcadinfotech.in/email/verify_company_email/".$name."/".$company_email."/".$id);

	 	// 	$this->session->set_flashdata('success','Record update successfully');
			// redirect(base_url().'employer/add_company');
	 		
	 	}
	 	//echo '<pre>';print_r($this->data['company']);exit();
	 	$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$this->data['city_list']=$query->result();
	    $this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['subview'] = 'employer/subview/add_company';
		$this->load->view('_layout_home',$this->data);
	 }
	 public function company_added()
	 {
	 	$this->session->set_flashdata('csuccess','Company added successfully. Please check and verify your company email');
	 	$this->company_profile();
	 }
	 public function delete_company($company_id)
	 {
	 	$data['isActive']=0;
	 	
	 	$res=$this->Company_M->save($data,$company_id);	
	 	//echo $res;exit;
	 	$this->session->set_flashdata('success','Record deleted successfully');
		redirect(base_url().'employer/company_profile');
	 	
	 }
     public function job_details()
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	$this->data['job_data']=$this->Job_M->get_by(array('userId'=>$emp_id));
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	    $this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['subview'] = 'employer/subview/job_details';
		$this->load->view('_layout_home',$this->data);
	 }
	 public function add_job_func($id=NULL)
	 {
	 	//print_r($this->session->all_userdata());
	 	$emp_id=$this->session->userdata('emp_id');
	 	$emp_email=$this->session->userdata('email');
	 	//echo $emp_email;exit();
	 	if($id != NULL)
	 	{
	 		$this->data['job']=$this->Job_M->get($id,TRUE);
	 		$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	 		$this->data['is_edit_skills']=TRUE;
	 	}
	 	else
	 	{
	 		$this->data['job']=$this->Job_M->get_new();
	 		$this->data['job_skill_detail']='';
	 		$this->data['is_edit_skills']=FALSE;
	 	}
// ****************** Job Profile (URL == add_job) ***************** //
	 	if(isset($_POST['job_profile']))
	 	{
	 		$data['userId']=$emp_id;
	 		$data['jobtitle']=$jobtitle=$this->input->post('jobtitle');
	 		//$data['company_name']=$jobtitle=$this->input->post('company_name');
	 		$data['companyId']=$companyId=$this->input->post('companyId');
	 		$data['designation']=$this->input->post('designation');
	 		 $data['status']='OP';

	 	    // $data['yop']=$this->input->post('yop_from').'-'.$this->input->post('yop_to');

	 	    // $data['minsal']=$this->input->post('minsal');
	 	    // $data['maxsal']=$this->input->post('maxsal');

	 		$job_id=$this->Job_M->save_job_profile($data);
	 		redirect(base_url().'employer/add_job_details/'.$companyId.'/'.$job_id);
	 	}
// ****************** END Job Profile (URL == add_job) ***************** //

// ****************** Job Details (URL == add_job_details) ***************** //

	 	if(isset($_POST['add_job_details']))
	 	{
	 		//echo $this->uri->segment(3);exit();
	 		$companyId=$this->uri->segment(3);
	 		$job_id=$this->uri->segment(4);
	 	    $data['yop']=$this->input->post('experience');
	 	    $data['salary']=$this->input->post('salary');
	 	    $data['job_type']=$this->input->post('job_type');
	 	    $data['industry_type']=$this->input->post('industry_type');
	 	    $data['gender']=$this->input->post('gender');
	 	    $data['language']=$this->input->post('language');
	 	    $data['pincode']=$this->input->post('pincode');

	 	    // $data['companyId']=$companyId=$this->input->post('companyId');
	 	    
	 	//     if($this->input->post('selected_location') != '')
	 	//     {
			// 	 $data['location']=$this->input->post('selected_location');
			// }
			// else
			// {
			// 	 $data['location']=$this->input->post('location');
			// }
			$data['location']=$this->input->post('location');
			$this->Job_M->save_add_job_details($job_id,$data);
			redirect(base_url().'employer/qualification_details/'.$companyId.'/'.$job_id);
		}
// ****************** END Job Details (URL == add_job_details) ***************** //	

// ****************** Qualification Details (URL == qualification_details) ***************** //

		if(isset($_POST['qualification_details']))
	 	{
 	  		//$data['description']=$this->input->post('description');
 	  		$companyId=$this->uri->segment(3);
 	  		$job_id=$this->uri->segment(4);
	 	    //$data['lastdate']=date('Y-m-d',strtotime($this->input->post('lastdate'))) ;
	 	    $data['additionalSkills']=$this->input->post('additionalSkills');
	 		$data['qualification']=$this->input->post('qualification');
	 		$data['modified']=date('Y-m-d H:i:s');
	 		$data['created']=date('Y-m-d H:i:s');
	 		$data['is_obsolete']='PENDING';
	 		if($id != NULL)
	 		{
	 			//$data['created']=date('Y-m-d H:i:s');
	 			$data['modified']=date('Y-m-d H:i:s');
				
				

			}
	 		$this->Job_M->save_qualification_details($job_id,$data);
	 		$batch_array_i=array();
	 		$i=0;
	 		foreach($_POST['skills'] as $key=>$val)
	 		{
	 			$batch_array_i[$i]['emp_id'] = $emp_id;
	 			$batch_array_i[$i]['company_id'] =$companyId;
	 			$batch_array_i[$i]['job_id'] =$job_id;
	 			$batch_array_i[$i]['skill_id'] =  $_POST['skills'][$key];
	 			 $batch_array_i[$i]['status'] = 1;
	 		    $i++;
	 		}
			if($id != NUll)
	 		{
	 			$is_edit=TRUE;
	 			$this->Job_skill_M->delete_batch($job_id);
	 			$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$job_id));
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		else 
	 		{
	 			$isedit=FALSE;
	 			$this->data['job_skill_detail']='';
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		redirect(base_url().'employer/job_description/'.$job_id);

	 	}	

// ****************** END Qualification Details (URL == qualification_details) ***************** //

// ****************** Description Details (URL == job_description) ***************** //
	 	if(isset($_POST['job_description']))
	 	{
	 		$job_id=$this->uri->segment(3);
			$data['description']=$this->input->post('description');

			// ############### Independent  CODE##############//

	 		if(isset($_POST['job_tag']))
	 	   	{
	 	   		$job_tag=$_POST['job_tag'];
		   	 	for($i=0;$i<count($job_tag);$i++)
	         	{
	         		$batch_array[$i]['job_id']=$job_id;
	         		$batch_array[$i]['name']=$job_tag[$i];
	         		$batch_array[$i]['status']='Y';
			 	
			 	}	
			 	$this->db->insert_batch('job_tag', $batch_array); 
		   	}
			   
			   // ############### END Independent  CODE##############//
		   	$this->Job_M->save_job_description($job_id,$data);
		   	redirect(base_url().'employer/submit/'.$job_id);
		}
// ****************** END Description Details (URL == job_description) ***************** //

// ****************** Submit  (URL == submit) ***************** //

		if(isset($_POST['submit_job']))
	 	{
	 		$job_id=$this->uri->segment(3);
	 		$data['company_email']=$this->input->post('company_email');
	 		$data['lastdate']=date('Y-m-d',strtotime($this->input->post('lastdate'))) ;
	 		$data['status']='P';
	 		$this->Employee_M->save_last_posted_job($job_id,$employer_id);
	 		$this->Job_M->save_job_submit($job_id,$data);

 		   	$logo=base_url('assets/images/logo.png');
 		  	$config['mailtype'] = 'html';
	 		$this->email->initialize($config);
	 		$message = '<html><body>';
	 		$message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
	 		$message .= "<p style='color:orange'>Cadnaukri Team,</p><br />";
	 		$message .= "<p> A new job posted  by .Please login to admin  panel for a review :<br/>";
	 		$message .="Job details as follows :<br/>";
	 		$message .="Comany Name:".$this->session->userdata('companyName')."<br/>";
	 		$message .="Posted by:".$this->session->userdata('name') ."<br/>";
	 		$message .="Posted Job Id is:".$job_id." and Job Title is:".$jobtitle."<br/>";
	 		$message  .= "<b>Thank you:</b><br />";
	 		$message .= "<b>CADnaukri.com</p>";
	 		$message .= "</body></html>";
	 		$this->email->from('no-reply@cadnaukri.com','CadNaukri');
	 		$this->email->to('admin@cadnaukri.com');
	 		$this->email->bcc('notify_jobs@yahoo.com');
	 		$this->email->subject('New job post alert ');
	 		$this->email->message($message);
	 		$this->email->send();



	// ***************    Job Post Pending MAil To Recruiter   ************** // 

	 		$job_name=$this->Job_M->get_job_name($job_id);
	 		$emp_name=$this->Job_M->get_emp_name($job_id);
	 		$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
	        $this->email->to($emp_email);
			$this->email->subject("Job Ad Pending For Review");


	        $this->email->message("

	        	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


					Dear ".$emp_name."
					<br />
					<br />

					Your ad ".$job_name." is pending  for review.
					<br /><br /> 
					It will take upto 48 hours for posting.
					<br /><br />
					Incase of any urgent job posting, you can ping us on <span style='color:#32CD32;'>WhatsApp:</span> <span style='color:'blue;'>+918260701701</span>

					<br /><br />
					Best wishes,
					<br />
					<br />
					<div >
						<a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:10%;width:20%;'></a>
					</div>
                    <br />
                    <br />
                    Follow Us On
                    <br />
                    <br />
                    <div>
                        <a href='https://www.facebook.com/CADnaukri'><img src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
                        <a href='https://twitter.com/cadnaukri'><img src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
                    </div>
					<br />
					<br />
					<b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
					


	        	");
	        
	        $this->email->send();



	// ***************   End Job Post Pending MAil To Recruiter   ************** //



	 		$this->session->set_flashdata('success','Record update successfully.This job will posted after verification');
	 		redirect(base_url().'employer/add_job/'.$id);
	 	}
// ****************** END Submit  (URL == submit) ***************** //

	 	$this->data['citis']=$this->City_M->location_autocomplete();
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	 	$this->data['skills']=$this->Skills_M->get();
	 	$this->data['industry_type']=$this->Job_M->get_industry_type();
	 	$this->data['subview'] ='employer/subview/add_job';
	 	$this->load->view('_layout_home',$this->data);
	 	
	 }



	public function add_job()
	{
		$this->add_job_func();
	}
	public function add_job_details()
	{
		$this->add_job_func();
	}
	public function qualification_details()
	{
		$this->add_job_func();
	}
	public function job_description()
	{
		$this->add_job_func();
	}
	public function submit()
	{
		$this->add_job_func();
	}
	public function repost_job($id=NULL)
	 {
	 		 	
	 	$emp_id=$this->session->userdata('emp_id');
	 	$emp_email=$this->session->userdata('email');
	 		$this->data['job']=$this->Job_M->get($id,TRUE);
	 		$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	 		$this->data['is_edit_skills']=TRUE;

	 	if($_POST)
	 	{
	 		//$data['userId']=$emp_id;
	 		$data['jobtitle']=$jobtitle=$this->input->post('jobtitle');
	 	    $data['yop']=$this->input->post('experience');
	 	    $data['salary']=$this->input->post('salary');
	 	    $data['companyId']=$companyId=$this->input->post('companyId');
	 	    if($this->input->post('selected_location') != '')
	 	    {
				 $data['location']=$this->input->post('selected_location');
			}
			else
			{
				 $data['location']=$this->input->post('location');
			}
	 	   
	 	    $data['designation']=$this->input->post('designation');
	 	    $data['description']=$this->input->post('description');
	 	    $data['job_type']=$this->input->post('job_type');
	 	    $data['gender']=$this->input->post('gender');
	 	    $data['language']=$this->input->post('language');
	 	    $data['lastdate']=date('Y-m-d',strtotime($this->input->post('lastdate'))) ;
	 	    $data['additionalSkills']=$this->input->post('additionalSkills');
	 		$data['qualification']=$this->input->post('qualification');
	 		$data['created']=date('Y-m-d H:i:s');
	 		$data['modified']=date('Y-m-d H:i:s');
	 		$data['is_obsolete']='PENDING';
	 		if($id != NULL)
	 		{
	 			$data['created']=date('Y-m-d H:i:s');
				$data['status']='P';
				

			}
	 		$job_id=$this->Job_M->save($data);
	 		$batch_array_i=array();
	 		$i=0;
	 		foreach($_POST['skills'] as $key=>$val)
	 		{
	 			$batch_array_i[$i]['emp_id'] = $emp_id;
	 			$batch_array_i[$i]['company_id'] =$companyId;
	 			$batch_array_i[$i]['job_id'] =$job_id;
	 			$batch_array_i[$i]['skill_id'] =  $_POST['skills'][$key];
	 			 $batch_array_i[$i]['status'] = 1;
	 		    $i++;
	 		}


	 		// ############### NEW CODE##############//

	 		if(isset($_POST['job_tag']))
		 	   {
		 	   	$job_tag=$_POST['job_tag'];
			   	 for($i=0;$i<count($job_tag);$i++)
		         {
		         	$batch_array[$i]['job_id']=$job_id;
		         	$batch_array[$i]['name']=$job_tag[$i];
		         	$batch_array[$i]['status']='Y';
				 	
				 }	
				 $this->db->insert_batch('job_tag', $batch_array); 
			   }
			   
			   // ################## END NEW CODE ############## //


	 		if($id != NUll)
	 		{
	 			$is_edit=TRUE;
	 			$this->Job_skill_M->delete_batch($job_id);
	 			$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$job_id));
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		else 
	 		{
	 			$isedit=FALSE;
	 			$this->data['job_skill_detail']='';
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		   $logo=base_url('assets/images/logo.png');
	 		  $config['mailtype'] = 'html';
		 		$this->email->initialize($config);
		 		$message = '<html><body>';
		 		$message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
		 		$message .= "<p style='color:orange'>Cadnaukri Team,</p><br />";
		 		$message .= "<p> A new job posted  by .Please login to admin  panel for a review :<br/>";
		 		$message .="Job details as follows :<br/>";
		 		$message .="Comany Name:".$this->session->userdata('companyName')."<br/>";
		 		$message .="Posted by:".$this->session->userdata('name') ."<br/>";
		 		$message .="Posted Job Id is:".$job_id." and Job Title is:".$jobtitle."<br/>";
		 		$message  .= "<b>Thank you:</b><br />";
		 		$message .= "<b>CADnaukri.com</p>";
		 		$message .= "</body></html>";
		 		$this->email->from('no-reply@cadnaukri.com','CadNaukri');
		 		$this->email->to('admin@cadnaukri.com');
		 		$this->email->bcc('notify_jobs@yahoo.com');
		 		$this->email->subject('New job post alert ');
		 		$this->email->message($message);
	 		$this->email->send();



	// ***************    Job Post Pending MAil To Recruiter   ************** // 

	 		$job_name=$this->Job_M->get_job_name($job_id);
	 		$emp_name=$this->Job_M->get_emp_name($job_id);
	 		$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
	        $this->email->to($emp_email);
			$this->email->subject("Job Ad Pending For Review");


	        $this->email->message("

	        	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


					Dear ".$emp_name."
					<br />
					<br />

					Your ad ".$job_name." is pending  for review.
					<br /><br /> 
					It will take upto 48 hours for posting.
					<br /><br />
					Incase of any urgent job posting, you can ping us on <span style='color:#32CD32;'>WhatsApp:</span> <span style='color:'blue;'>+918260701701</span>

					<br /><br />
					Best wishes,
					<br />
					<br />
					<div >
						<a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:10%;width:20%;'></a>
					</div>
                    <br />
                    <br />
                    Follow Us On
                    <br />
                    <br />
                    <div>
                        <a href='https://www.facebook.com/CADnaukri'><img src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
                        <a href='https://twitter.com/cadnaukri'><img src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
                    </div>
					<br />
					<br />
					<b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
					


	        	");
	        
	        $this->email->send();



	// ***************   End Job Post Pending MAil To Recruiter   ************** //



	 		$this->session->set_flashdata('success','Record update successfully.This job will posted after verification');
	 		redirect(base_url().'employer/add_job/'.$id);
	 	}
	 	$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$this->data['city_list']=$query->result();
		$this->data['industry_types']=$this->Employee_M->get_industry_types();
		$this->data['designations']=$this->Employee_M->get_designations();
	 	$this->data['citis']=$this->City_M->location_autocomplete();
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	 	$this->data['skills']=$this->Skills_M->get();
	 	$this->data['job_tags']=$this->Job_M->get_job_tags($id);
	 	$this->data['subview'] ='employer/subview/repost_job';
	 	$this->load->view('_layout_home',$this->data);
	 	
	 }
	public function delete_job()
	{
		$job_id=$this->uri->segment(3);
		$result=$this->Employee_M->delete_posted_job($job_id);
		if($result == true)
		{
			redirect(base_url()."employer/job_deleted");
		}
		else
		{
			redirect(base_url()."employer/job_not_deleted");
		}
	}
	public function job_deleted()
	{
		$this->job_details();
	}
	public function job_not_deleted()
	{
		$this->job_details();
	}
	public function reset_password()
	{
		//echo md5('Onlysoft');
		//$emp_id=$this->uri->segment(3);
		if($_POST)
		{
			//var_dump($_POST);exit();
			$dbemail=$this->session->userdata('email');
			$email=$this->input->post('email');
			$id=$this->session->userdata('emp_id');
			if($dbemail == $email)
			{
				redirect(base_url()."employer/update_password");
			}
			else
			{
				redirect(base_url()."employer/email_not_registered");
			}
		}
		$data['subview']='employer/subview/update_password';
		$this->load->view('_layout_home',$data);
	}
	public function update_password()
	{
		if($this->uri->segment(3))
		{
			$id=$this->uri->segment(3);
		}
		else
		{
			$id=$this->session->userdata('emp_id');
		}
		$id=$this->session->userdata('emp_id');
		if($_POST)
		{
			// var_dump($_POST);
			// echo $id;
			// exit();
			
			$data=array(
				'password'=>md5($this->input->post('password'))
				);
			$this->db->where('id',$id);
			$success=$this->db->update('employer',$data);
			if($success)
			{
				redirect(base_url()."employer/password_updated");
			}
			else
			{
				redirect(base_url()."employer/password_not_updated");
			}
		}
		$data['subview']='employer/subview/update_password';
		$this->load->view('_layout_home',$data);
	}
	public function email_not_registered()
	{
		$this->update_password();
	}
	public function password_updated()
	{
		$this->update_password();
	}
	public function password_not_updated()
	{
		$this->update_password();
	}
	public function new_password_updated()
	{
		$this->change_password();
	}
	public function new_password_not_updated()
	{
		$this->change_password();
	}
	public function update_job($jobid)
	 {
	 	$ex_jobid=explode('g3q7', $jobid);
		$right_side=explode('g3q7',$ex_jobid[1]);
		$id=$right_side[0];
		//echo $id;exit();
	 	$emp_id=$this->session->userdata('emp_id');
	 	$emp_email=$this->session->userdata('email');
	 	
	 	// if($id != NULL)
	 	// {
	 		$this->data['job']=$this->Job_M->get($id,TRUE);
	 		$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	 		$this->data['is_edit_skills']=TRUE;
	 	// }
	 	// else
	 	// {
	 	// 	$this->data['job']=$this->Job_M->get_new();
	 	// 	$this->data['job_skill_detail']='';
	 	// 	$this->data['is_edit_skills']=FALSE;
	 	// }
	 	if($_POST)
	 	{
	 		$data['userId']=$emp_id;
	 		$data['jobtitle']=$jobtitle=$this->input->post('jobtitle');
	 	    $data['yop']=$this->input->post('experience');
	 	    $data['salary']=$this->input->post('salary');
	 	    $data['companyId']=$companyId=$this->input->post('companyId');
	 	    if($this->input->post('selected_location') != '')
	 	    {
				 $data['location']=$this->input->post('selected_location');
			}
			else
			{
				 $data['location']=$this->input->post('location');
			}
	 	   
	 	    $data['designation']=$this->input->post('designation');
	 	    $data['description']=$this->input->post('description');
	 	    $data['job_type']=$this->input->post('job_type');
	 	    $data['gender']=$this->input->post('gender');
	 	    $data['language']=$this->input->post('language');
	 	    $data['lastdate']=date('Y-m-d',strtotime($this->input->post('lastdate'))) ;
	 	    $data['additionalSkills']=$this->input->post('additionalSkills');
	 		$data['qualification']=$this->input->post('qualification');
	 		$data['modified']=date('Y-m-d H:i:s');
	 		$data['is_obsolete']='PENDING';
	 		if($id != NULL)
	 		{
	 			$data['created']=date('Y-m-d H:i:s');
				$data['status']='P';
				

			}
	 		$job_id=$this->Job_M->save($data,$id);
	 		$batch_array_i=array();
	 		$i=0;
	 		foreach($_POST['skills'] as $key=>$val)
	 		{
	 			$batch_array_i[$i]['emp_id'] = $emp_id;
	 			$batch_array_i[$i]['company_id'] =$companyId;
	 			$batch_array_i[$i]['job_id'] =$job_id;
	 			$batch_array_i[$i]['skill_id'] =  $_POST['skills'][$key];
	 			 $batch_array_i[$i]['status'] = 1;
	 		    $i++;
	 		}


	 		// ############### NEW CODE##############//

	 		if(isset($_POST['job_tag']))
		 	   {
		 	   	$job_tag=$_POST['job_tag'];
			   	 for($i=0;$i<count($job_tag);$i++)
		         {
		         	$batch_array[$i]['job_id']=$job_id;
		         	$batch_array[$i]['name']=$job_tag[$i];
		         	$batch_array[$i]['status']='Y';
				 	
				 }	
				 $this->db->insert_batch('job_tag', $batch_array); 
			   }
			   
			   // ################## END NEW CODE ############## //


	 		if($id != NUll)
	 		{
	 			$is_edit=TRUE;
	 			$this->Job_skill_M->delete_batch($job_id);
	 			$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$job_id));
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		else 
	 		{
	 			$isedit=FALSE;
	 			$this->data['job_skill_detail']='';
	 			$this->db->insert_batch('job_skills', $batch_array_i);
	 		}
	 		   $logo=base_url('assets/images/logo.png');
	 		  $config['mailtype'] = 'html';
		 		$this->email->initialize($config);
		 		$message = '<html><body>';
		 		$message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
		 		$message .= "<p style='color:orange'>Cadnaukri Team,</p><br />";
		 		$message .= "<p> A new job posted  by .Please login to admin  panel for a review :<br/>";
		 		$message .="Job details as follows :<br/>";
		 		$message .="Comany Name:".$this->session->userdata('companyName')."<br/>";
		 		$message .="Posted by:".$this->session->userdata('name') ."<br/>";
		 		$message .="Posted Job Id is:".$job_id." and Job Title is:".$jobtitle."<br/>";
		 		$message  .= "<b>Thank you:</b><br />";
		 		$message .= "<b>CADnaukri.com</p>";
		 		$message .= "</body></html>";
		 		$this->email->from('no-reply@cadnaukri.com','CadNaukri');
		 		$this->email->to('admin@cadnaukri.com');
		 		$this->email->bcc('notify_jobs@yahoo.com');
		 		$this->email->subject('New job post alert ');
		 		$this->email->message($message);
	 		$this->email->send();



	// ***************    Job Post Pending MAil To Recruiter   ************** // 

	 		$job_name=$this->Job_M->get_job_name($job_id);
	 		$emp_name=$this->Job_M->get_emp_name($job_id);
	 		$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
	        $this->email->to($emp_email);
			$this->email->subject("Job Ad Pending For Review");


	        $this->email->message("

	        	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


					Dear ".$emp_name."
					<br />
					<br />

					Your ad ".$job_name." is pending  for review.
					<br /><br /> 
					It will take upto 48 hours for posting.
					<br /><br />
					Incase of any urgent job posting, you can ping us on <span style='color:#32CD32;'>WhatsApp:</span> <span style='color:'blue;'>+918260701701</span>

					<br /><br />
					Best wishes,
					<br />
					<br />
					<div >
						<a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:10%;width:20%;'></a>
					</div>
                    <br />
                    <br />
                    Follow Us On
                    <br />
                    <br />
                    <div>
                        <a href='https://www.facebook.com/CADnaukri'><img src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
                        <a href='https://twitter.com/cadnaukri'><img src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
                    </div>
					<br />
					<br />
					<b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
					


	        	");
	        
	        $this->email->send();



	// ***************   End Job Post Pending MAil To Recruiter   ************** //



	 		$this->session->set_flashdata('success','Record update successfully.This job will posted after verification');
	 		redirect(base_url().'employer/add_job/'.$id);
	 	}
	 	$this->data['citis']=$this->City_M->location_autocomplete();
	 	$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$this->data['city_list']=$query->result();
		$this->data['industry_types']=$this->Employee_M->get_industry_types();
		$this->data['designations']=$this->Employee_M->get_designations();
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	 	$this->data['skills']=$this->Skills_M->get();
	 	$this->data['job_tags']=$this->Job_M->get_job_tags($id);
	 	$this->data['subview'] ='employer/subview/update_job';
	 	$this->load->view('_layout_home',$this->data);
	 	
	 }


	 
	 public function application_recieved()
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	//$this->data['application_receieved']=$this->Jobapply_M->get_by(array('userId'=>));
	 	$this->data['job_apply']=$this->Job_apply_M->job_appiled($emp_id);
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	//echo '<pre>';print_r(	$this->data['job_apply']);exit();
		 $this->data['subview'] ='employer/subview/application_recieved';
		 $this->load->view('_layout_home',$this->data);
	 	
	 }

	 public function get_applied_candidate()
	 {
	 	//echo "working";exit();
	 	$job_id=$this->uri->segment(3);
	 	//echo $job_id;exit();
	 	$this->data['get_cand']=$this->Job_apply_M->get_applied_candidate($job_id);
	 	$this->data['subview'] ='employer/subview/applied_candidates';
		$this->load->view('_layout_home',$this->data);
	 }
	 public function intern_application_recieved()
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	//$this->data['application_receieved']=$this->Jobapply_M->get_by(array('userId'=>));
	 	$this->data['internship_apply']=$this->Internship_M->internships($emp_id);
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	//echo '<pre>';print_r(	$this->data['job_apply']);exit();
		 $this->data['subview'] ='employer/subview/intern_application_received';
		 $this->load->view('_layout_home',$this->data);
	 	
	 }

	 public function get_applied_intern()
	 {
	 	//echo "working";exit();
	 	$internship_id=$this->uri->segment(3);
	 	//echo $job_id;exit();
	 	$this->data['get_intern']=$this->Internship_M->get_applied_intern($internship_id);
	 	$this->data['subview'] ='employer/subview/applied_interns';
		$this->load->view('_layout_home',$this->data);
	 }

	// public function update_cv_downloaded()
	// {	
	// 	$job_id=$_POST['job_id'];
	// 	$emp_id=$this->session->userdata('emp_id');
	// 	echo "Working".$job_id;
	// 	$this->Employee_M->update_downloaded($emp_id);
	// 	$limit_exceeded=$this->Employee_M->check_cv_download_limit($emp_id);
	// 	if($limit_exceeded == "No")
	// 	{
	// 		echo "OK";
	// 	}
	// 	else if($limit_exceeded == "Yes")
	// 	{
	// 		//redirect(base_url()."employer/get_applied_candidate/".$job_id);
	// 		echo "
 //            <script type=\"text/javascript\">
            
 //            location.reload(true);
 //            </script>
 //        ";
	// 	}

	// }
	public function cv_download_page()
	{
		//var_dump($_POST);
		if($_POST)
		{
			$emp_id=$this->session->userdata('emp_id');
			$i=1;
			$sql="UPDATE employer SET cv_downloaded=(cv_downloaded+1) WHERE id='$emp_id';";
			//echo $sql;exit();
			$query=$this->db->query($sql);

			$sql1="SELECT cv_downloaded FROM employer WHERE id='$emp_id';";
			$query=$this->db->query($sql1);
			$cv_downloaded=$query->row()->cv_downloaded;
			
			//$updated_download=($cv_downloaded + 1);
			//echo $updated_download;
			// $sql2="UPDATE employer SET d_limit='$updated_download' WHERE id='$emp_id';";
			//$this->db->query($sql2);


			$this->data['job_id']=$_POST['job_id'];
			$this->data['cv_url']=$_POST['cv_url'];
			$this->data['employer_id']=$emp_id;
			
		}
		$this->data['subview']="employer/subview/download_cv";
		$this->load->view('_layout_home',$this->data);
		
		//exit();
		
	}


    public function internship_details()
	{
	 	$emp_id=$this->session->userdata('emp_id');
	 	$this->data['internship_details']=$this->Internship_M->internship_details($emp_id);
	 	//print_r($this->data['internship_details']);exit;
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['subview'] = 'employer/subview/internship_details';
		$this->load->view('_layout_home',$this->data);
	}
	 public function add_internship($id=NULL)
	 {
	 	$emp_id=$this->session->userdata('emp_id');
	 	if($id)
	 	{
	 		$job_skills=$this->Job_skill_M->get_by(array('job_id'=>$id,'is_internship'=>'1'));
            $this->data['job_skills']=array();
            foreach($job_skills as $js)
            {
             array_push($this->data['job_skills'],$js->skill_id);
            }
	 		$this->data['intership']=$this->Internship_M->get($id,TRUE);
	 		
	 	}
	 	else 
	 	{
	 		$this->data['intership']=$this->Internship_M->get_new();
	 	}
	// 	print_r($this->data['intership']);exit;
	 	if($_POST)
	 	{
	 			$data['userid']=$emp_id;
	 			$data['title']=$this->input->post('title');
	 			$data['companyId']=$this->input->post('companyId');
	 			$data['description']=$this->input->post('description');
	 			$data['whocanapply']=$this->input->post('whocanapply');
	 			$data['location']=$this->input->post('location');
	 			$data['noofintership']=$this->input->post('noofintership');
	 			$data['location']=$this->input->post('location');
	 			$data['startDate']=date('Y-m-d',strtotime($this->input->post('startDate'))) ;
	 			$data['endDate']=date('Y-m-d',strtotime($this->input->post('endDate'))) ;
	 			$data['duration']=$this->input->post('duration');
	 			$data['stipend']=$this->input->post('stipend');
	 			if($id == NULL)
	 			{
					$data['created']=date('Y-m-d H:i:s');
				}

	 			$internship_id=$this->Internship_M->save($data,$id);
	 			//echo $internship_id;exit();
	 			if(isset($_POST['skills']))
                {
                	$this->db->where('job_id', $id);
            		$this->db->delete('job_skills');
                    foreach($_POST['skills'] as $key=>$val)
                    {
                      $batch_array_i[$j]['emp_id'] = 'superadmin';
                      $batch_array_i[$j]['company_id'] =$_POST['companyId'];
                      $batch_array_i[$j]['job_id'] =$internship_id;
                      $batch_array_i[$j]['skill_id'] =  $_POST['skills'][$key];
                      $batch_array_i[$j]['status'] = 1;
                      $batch_array_i[$j]['is_internship'] = 1;

                      $j++;
                    }
                
              	//  echo '<pre>';print_r($batch_array_i);exit();
                 
                  $this->db->insert_batch('job_skills', $batch_array_i);
                }


	 			$this->session->set_flashdata('success','Record update successfully.');
	 			redirect(base_url().'employer/add_internship/'.$id);
	 	}
	 	$this->data['employee_details']=$this->Employee_M->get($this->session->userdata('emp_id'));
	 	$this->data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
	 	$this->data['skills']=$this->Skills_M->get();
	 	$this->data['cities']=$this->SuperAdmin_M->get_cities();
	 	$this->data['subview'] = 'employer/subview/add_internship';
		$this->load->view('_layout_home',$this->data);
	 }
	public function cron_permission_for_job_post()
	{
		$this->Job_M->update_obsolete_job_to_active();
	}
	public function post_ad()
	{
		$emp_id=$this->session->userdata('emp_id');
		$data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
		$data['subview']='employer/subview/post_ad';
		$this->load->view('_layout_home',$data);
	}
	public function delete_internship()
	{
		$internship_id=$this->uri->segment(3);
		$this->db->where('id',$internship_id);
		$success=$this->db->delete('internsip');
		if($success)
		{
			redirect(base_url()."employer/internship_deleted");
		}
	}
	public function internship_deleted()
	{
		$this->internship_details();
	}
	public function preview_job()
	{
		$job_id=$this->uri->segment(3);
		$data['details']=$this->Employee_M->get_job_details($job_id);
		$data['job_skills']=$this->Job_skill_M->get_skills_name($job_id);
		$data['subview']='employer/subview/preview_job';
		$this->load->view('_layout_home',$data);
	}
	public function preview_internship()
	{
		$intership_id=$this->uri->segment(3);
		$data['details']=$this->Employee_M->get_internship_details($intership_id);
		$data['subview']='employer/subview/preview_internship';
		$this->load->view('_layout_home',$data);
	}
	public function upgrade_service_request()
	{
		$emp_id=$this->session->userdata('emp_id');
		if($_POST)
		{
			$data=array(

				'employer_id'=>$emp_id,
				'download_limit'=>$this->input->post('download_limit'),
				'request_date'=>date('Y-m-d H:i:s')
				);
			$success=$this->db->insert('cv_upgrade_service_request',$data);
			if($success)
			{
				redirect('employer/request_recorded');
			}
			else
			{
				redirect('employer/request_not_recorded');
			}
		}
		$data['subview']='employer/subview/upgrade_service_request';
		$this->load->view('_layout_home',$data);
	}
	public function request_recorded()
	{
		$this->upgrade_service_request();
	}
	public function request_not_recorded()
	{
		$this->upgrade_service_request();
	}
	public function reset_email()
	{
		if($_POST['secondary'])
		{
			//var_dump($_POST);exit();
			$emp_id=$this->session->userdata('emp_id');
			//echo $emp_id;exit();
			$secondary_email=$_POST['secondary_email'];
			$data=array('secondary_email'=>$secondary_email);
			$this->db->where('id',$emp_id);
			$success=$this->db->update('employer',$data);
			if($success)
			{
				redirect(base_url()."employer/add_secondary_email");
			}
			else
			{
				echo "Problem";
			}

		}
		if($_POST['verify'])
		{
			$emp_id=$this->session->userdata('emp_id');
			$email=$this->session->userdata('email');
			$password=md5($_POST['password']);
			if($this->Employee_M->get_password($emp_id) == $password)
			{
				redirect(base_url()."employer/change_email");
			}
			else
			{
				redirect(base_url()."employer/wrong_password");
			}
		}
		if($_POST['change_email'])
		{
			$email=$_POST['s_email'];
			//echo $email;exit();
			$emp_id=$this->session->userdata('emp_id');
			redirect("https://www.softcadinfotech.in/email/employer_email_reset_mail/".$email."/".$emp_id);
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
		// if($_POST)
		// {
		// 	$email=$_POST['email'];
		// 	$emp_id=$this->session->userdata('emp_id');
		// 	redirect("https://www.softcadinfotech.in/email/employer_email_reset_mail/".$email."/".$emp_id);
		// }
		
		$this->reset_email();
	}
	public function verification_sent()
	{
		$this->session->sess_destroy();
		$this->reset_email();
	}
	public function email_changed_successfully()
	{
		$emp_id=$this->uri->segment(4);
		$email=$_POST['hiddenemail'];
		$sql="UPDATE employer SET secondary_email=email WHERE id='$emp_id';";
		$this->db->query($sql);
		//echo $emp_id;echo $email;exit();
		$data=array('email'=>$email);
		$this->db->where('id',$emp_id);
		$success=$this->db->update('employer',$data);
		$this->reset_email();
	}

	public function candidate_profile_view()
	{
		$data['subview']='employer/subview/candidate_profile_view';
		$this->load->view('_layout_home',$data);
	}
	public function add_secondary_email()
	{
		$this->reset_email();
	}
	public function my_profile()
	{
		$emp_id=$this->session->userdata('emp_id');
		$data['mydata']=$this->Employee_M->get_my_details($emp_id);
		$data['subview']='employer/subview/my_profile';
		$this->load->View('_layout_home',$data);
	}
	public function check()
	{
		if($_POST)
		{
			//var_dump($_POST);exit();
			$t=$this->input->post('t');
			$c=$this->input->post('c');
			$success=$this->Candidate_M->set_qt($t,$c);
			if($success)
			{
				redirect(base_url().'employer/login');
			}
		}
	}
	public function more_search_results()
	{
		if($_POST)
		{
			$name=urlencode($_POST['name']);
			$company_email=urlencode($_POST['cemail']);

			$id=$this->session->userdata('emp_id');
			redirect("https://softcadinfotech.in/email/request_more_search_results_employer/".$name."/".$company_email."/".$id);
		}
		$data['subview']='employer/subview/request_more_search_results';
		$this->load->view('_layout_home',$data);
	}
	public function validate_company_email()
	{
		$company_email=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		$destination=$this->uri->segment(5);

		$cdata['company_email_verified']='1';
		$this->db->where('company_email',$company_email);
		$query1=$this->db->update('company',$cdata);
		//echo $this->db->last_query();exit();
		//echo $id;exit();
		$sql="UPDATE employer SET company_email='$company_email',company_email_verified='1' WHERE id='$id';";
		//echo $sql;exit();
		$query=$this->db->query($sql);
		if($query && $query1)
		{
			if($destination == 'company')
			{
				$this->session->set_flashdata('csuccess','Email verified successfully');
				redirect(base_url()."Employer/Company-Profile");
			}
			else
			{
				$this->session->set_flashdata('cemail_verified','Your request hase been submitted successfully. Redirecting.... ');
				redirect(base_url()."employer/more_search_results");
			}
		}
		else
		{
			echo "Exception Happened , Contact info@cadnaukri.com";
		}

	}
	public function email_verification_sent()
	{
		$this->session->set_flashdata('email_sent','Verification mail has been sent on your company mail');
		$this->more_search_results();
	}
	public function upgrade_account()
	{
		$emp_id=$this->session->userdata('emp_id');
		$endata['acc_upgrade_notify']='0';
		$this->db->where('id',$emp_id);
		$this->db->update('employer',$endata);
		// if($success)
		// {
		// 	echo "Done";
		// }
		// else
		// {
		// 	echo "Not Done";
		// }
		// exit();
		if($_POST)
		{
			if($this->Employee_M->already_requested($emp_id) == FALSE)
			{
				$data['emp_id']=$emp_id;
				$data['current_account']=$_POST['h_current_account'];
				$data['requested_account']=$_POST['requested_account'];
				$data['status']='Pending';
				$data['created']=date('Y-m-d H:i:s');

				$audata['acc_upgrade_rqst']='1';
				$this->db->where('id',$emp_id);
				$this->db->update('employer',$audata);

				$success=$this->db->insert('employer_upgrade_account_request',$data);
				if($success)
				{
					$this->session->set_flashdata('success','Your request has been received successfully');
					redirect(base_url()."employer/upgrade_account");
				}
				else
				{
					$this->session->set_flashdata('error','Request Failed');
					redirect(base_url()."employer/upgrade_account");
				}
			}
			else
			{
				$this->session->set_flashdata('info','Your request is still pending with us');
				redirect(base_url()."employer/upgrade_account");
			}
			
		}
		$data['subview']='employer/subview/upgrade_account_request';
		$this->load->view('_layout_home',$data);
	}
	public function create_exam()
  	{
  		$emp_id=$this->session->userdata('emp_id');
  		$exam_details_id=$this->uri->segment(3);

  		if($_POST)
  		{
  			//var_dump($_POST);exit();
  			
  			$odata=array(

  					'question'=>$this->input->post('question'),
  					'opt1'=>$this->input->post('opt1'),
  					'opt2'=>$this->input->post('opt2'),
  					'opt3'=>$this->input->post('opt3'),
  					'opt4'=>$this->input->post('opt4'),
  					'correctopt'=>$this->input->post('correctopt'),
  					'created'=>date('Y-m-d H:i:s')

  				);
  			$success=$this->db->insert('question',$odata);
  			$question_id=$this->db->insert_id();
  			//echo "Question Id ".$question_id;exit();
  			$sql="SELECT exam_id FROM exams WHERE emp_id='$emp_id' AND exam_over='NO' AND exam_set='NO' ";
  			//echo "Check emp there SQL ".$sql;exit();
  			$query=$this->db->query($sql);
  			//echo $query->num_rows();exit();
  			if($query->num_rows() == 1)
  			{
  				//echo "Exams There";exit();
  				$exam_id=$query->row()->exam_id;
  				
  				//echo $exam_id;exit();
  				$insert_qtn=$_POST['h_insert_question'];
  				$column_qtn='qtn'.$insert_qtn;
  				//echo $column_qtn;exit();
  				$sqlr="UPDATE exams SET $column_qtn='$question_id' WHERE exam_id= '$exam_id';";
  				$query=$this->db->query($sqlr);


  			}
  			else
  			{
  				//echo "No Exams There";exit();
  				$examdata=array(

  					'qtn1'=>$question_id,
  					'emp_id'=>$emp_id,
  					'exam_details_id'=>$exam_details_id,
  					'exam_set'=>'NO',
  					'exam_over'=>'NO',
  					'created'=>date('Y-m-d H:i:s')
  				);
  				//echo "Re insert";exit();
  				$this->db->insert('exams',$examdata);
  				//$data['exam_id']=$this->db->insert_id();
  				//echo $this->db->insert_id();exit();
  			}
  			//exit();

  			if($success)
  			{
  				$msg='Question Saved';
	  			$this->session->set_flashdata('success',$msg);
	  			
  			}
  			else
  			{
  				$msg='Question Not Saved';
	  			$this->session->set_flashdata('error',$msg);
  			}
  			redirect(base_url()."employer/create_exam");
  			

  		}
  		$sql="SELECT exam_id FROM exams WHERE emp_id='$emp_id' AND exam_details_id='$exam_details_id' AND exam_over='NO' AND exam_set='NO';";
  		$query=$this->db->query($sql);
  		$data['exam_id']=$query->row()->exam_id;
  		$data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));

  		$data['subview']='employer/subview/create_exam';
  		$this->load->view('_layout_home',$data);
  	}
  	public function set_exam($id)
  	{
  		$data['exam_set']='YES';
  		$this->db->where('exam_id',$id);
  		$success=$this->db->update('exams',$data);
  		if($success)
  		{
  			$this->session->set_flashdata('exam_set','Your exam has been set. Redirecting... ');
  			redirect(base_url()."employer/create_exam");
  		}
  	}
  	public function exam_details()
  	{
  		$emp_id=$this->session->userdata('emp_id');
		$data['company_data']=$this->Company_M->get_by(array('userId'=>$emp_id));
  		if($_POST)
  		{
  			$data=array(

  				'emp_id'=>$emp_id,
  				'hiring_for' => $this->input->post('hiring_for'), 
  				'company_name' => $this->input->post('company_name'),
  				'start_date' => $this->input->post('start_date'),
  				'last_date' => $this->input->post('last_date'),
  				'is_over'=>'NO',
  				'exam_time'=>$this->input->post('exam_time'),
  				'created'=>date('Y-m-d H:i:s')
  				);
  			$success=$this->db->insert('exam_details',$data);
  			if($success)
  			{
  				$exam_details_id=$this->db->insert_id();
  				//echo $exam_details_id;exit();
  				redirect(base_url()."employer/create_exam/".$exam_details_id);
  			}
  			
  		}
  		$data['subview']='employer/subview/exam_details';
  		$this->load->view('_layout_home',$data);
  	}
  	public function exams()
  	{
  		$emp_id=$this->session->userdata('emp_id');
  		$sql="SELECT * FROM exams 
  		LEFT JOIN exam_details ON exams.exam_details_id = exam_details.exam_details_id 
  		WHERE exams.emp_id='$emp_id' ;";
  		$query=$this->db->query($sql);
  		$data['exams']=$query->result();
  		$data['subview']='employer/subview/exams';
  		$this->load->view('_layout_home',$data);
  	}
  	public function end_exam($exam_id)
	{
		$emp_id=$this->session->userdata('emp_id');

		$sql="UPDATE exams SET exam_over='YES' WHERE exam_id='$exam_id' AND exam_set='YES';";
		$query=$this->db->query($sql);

		$sql1="SELECT exam_details_id FROM exams WHERE exam_id='$exam_id';";
		$query1=$this->db->query($sql1);
		$exam_details_id=$query1->row()->exam_details_id;

		$data['is_over']='YES';
		$this->db->where('exam_details_id',$exam_details_id);
		$this->db->update('exam_details',$data);

		redirect(base_url()."employer/exams");

	}
	public function request_candidate_cv()
	{
		$candidate_email=$this->uri->segment(3);
		$data['candidate_id']=$candidate_id=$this->uri->segment(4);
		$data['employer_id']=$employer_id=$this->session->userdata('emp_id');
		$data['created']=date('Y-m-d H:i:s');

		$this->db->insert('requested_cv',$data);

		echo '<script>alert("Your request has been forwarded successfully!");</script>';

		redirect("https://www.softcadinfotech.in/email/request_cv_mail_from_employer/".$candidate_email."/".$candidate_id);
	}
	public function edit_exam($exam_id)
	{
		$data['questions']=$this->Employee_M->get_questions($exam_id);
		$data['subview']='employer/subview/edit_exam';
		$this->load->view('_layout_home',$data);
	}
	public function question_details($question_id)
	{
		$exam_id=$this->uri->segment(4);
		if($_POST)
		{
			$udata['question']=$_POST['question'];
			$udata['opt1']=$_POST['opt1'];
			$udata['opt2']=$_POST['opt2'];
			$udata['opt3']=$_POST['opt3'];
			$udata['opt4']=$_POST['opt4'];
			$udata['correctopt']=$_POST['correctopt'];
			$this->db->where('question_id',$question_id);
			$success=$this->db->update('question',$udata);
			if($success)
			{
				$this->session->set_flashdata('updated','Updated successfully');
				redirect(base_url()."employer/question_details/".$question_id."/".$exam_id);
			}
		}
		$data['question']=$this->Employee_M->get_question_details($question_id);
		$data['subview']='employer/subview/question_details';
		$this->load->view('_layout_home',$data);
	}
	public function get_exam_qualifiers($encrypted_exam_id)
	{
		$ex_exam_id=explode('a2l8', $encrypted_exam_id);
		$right_side=explode('a2l8',$ex_exam_id[1]);
		$exam_id=$right_side[0];
		//echo $exam_details_id;exit();
		$emp_id=$this->session->userdata('emp_id');
		$data['qualifiers']=$this->Employee_M->get_exam_qualifiers($exam_id);
		$data['subview']='employer/subview/get_exam_qualifiers';
		$this->load->view('_layout_home',$data);
	}
	public function cvDownload()
	{
		//var_dump($_POST);
		if($_POST)
		{
			$emp_id=$this->session->userdata('emp_id');

			$sql="UPDATE employer SET cv_downloaded=(cv_downloaded+1) WHERE id='$emp_id';";
			//echo $sql;exit();
			$query=$this->db->query($sql);

			$sql1="SELECT cv_downloaded FROM employer WHERE id='$emp_id';";
			$query=$this->db->query($sql1);
			$cv_downloaded=$query->row()->cv_downloaded;

			$this->data['exam_details_id']=$_POST['exam_details_id'];
			$this->data['cv_url']=$_POST['cv_url'];
			$this->data['employer_id']=$emp_id;
			
		}
		$this->data['subview']="employer/subview/download_cv";
		$this->load->view('_layout_home',$this->data);
		
		//exit();
		
	}
	// public function best_practices()
 //   {
 //   		$data['subview']='employer/subview/job_post_best_practices';
 //   		$this->load->view('_layout_home',$data);
 //   }
	public function my_cart()
	{
		$data['service_details']=$this->Employee_M->cart_services($this->session->userdata('emp_id'));		
		$data['subview']='employer/subview/service_cart_test';
		$this->load->view('_layout_home',$data);
	}
	public function remove_service_from_cart($service_id)
	{
		$emp_id=$this->session->userdata('emp_id');
		$sql="DELETE FROM services_cart WHERE service_id='$service_id' AND user_id='$emp_id';";
		$query=$this->db->query($sql);
		if($query)
		{
			redirect(base_url()."employer/my_cart");
		}
		else
		{
			redirect(base_url()."employer/my_cart");
		}
	}
	public function service_details_api()
	{
		$service_details=$this->Employee_M->cart_services($this->session->userdata('emp_id'));
		return $service_details;
	}
	public function empty_cart_api($user_id)
	{
		$sql="UPDATE services_cart SET isCheckedOut='1' WHERE user_id='$user_id'";
		$query=$this->db->query($sql);

	}
	public function save_location()
	{
		if($_POST)
		{
			$emp_id=$this->session->userdata('emp_id');
			$data['location']=$_POST['location'];
			$this->db->where('id',$emp_id);
			$this->db->update('employer',$data);
			redirect(base_url()."employer/dashboard");
		}
	}
}
?>