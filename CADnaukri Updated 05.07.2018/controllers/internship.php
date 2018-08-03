
<?php
class Internship extends MY_Controller  
{
	//constructor function 
  function __construct()
   {
     parent::__construct();
		$this->load->model('Candidate_M');
		$this->load->model('Employee_M');
		$this->load->model('View_M');
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
		$this->load->model('Candidate_language_M');
		$this->load->model('Intern_M');
		$this->load->model('Internship_M');
		$this->load->model('Intern_edudetails_M');
		$this->load->model('Intern_prefernce_M');
		$this->load->library('form_validation');
     	$this->load->helper('form');
     	$this->load->library('email');	
     	$exception_url=array("internship/login","internship/forgot_password","internship/logout","internship/signup",
     			"internship/verification","internship/reset_password","internship/security_questions","internship/email_exists","internship/phone_exists","corn");
     	if($this->uri->segment(2)=='email_verify' || $this->uri->segment(2)=='internship_details' || $this->uri->segment(2)=='quick_apply' || $this->uri->segment(2)=='quick_apply_success' || $this->uri->segment(2)=='sign_up_success' || $this->uri->segment(2)=='registration_successfully' || $this->uri->segment(2)=='set_password' || $this->uri->segment(2)=='internships' || $this->uri->segment(2)=='intern_header')
     	{
     		//
     	}
     	else if((in_array(uri_string(),$exception_url) == FALSE) && ($this->Intern_M->isLoggedin() == FALSE))
     	{
     		redirect("internship/login", "refresh");
     	}
    }
    public function index()
    {
		echo 'Acesss Denied';exit;
	}
	public function login()
	{

		// ###### DYNAMIC BANNER ######## //
		//echo uri_string();
    	//$total_banners=$this->View_M->get_total_banners();
		//$banner_id=rand(1,$total_banners);
		if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$this->data['login_tab']="No";
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$this->data['login_tab']="No";
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        }
        else if($this->Intern_M->isLoggedin() == TRUE)
		{
			$this->data['login_tab']="No";
			$banner_id=$this->View_M->select_a_random_banner_candidate();
		}
        else
        {
        	$this->data['login_tab']="Yes";
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        }
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		// ###### END DYNAMIC BANNER ######## //

		if($this->Intern_M->isLoggedin() == TRUE)
		{
			$dashboad=base_url('internship/dashboard');
			redirect($dashboad,'refresh');
		}
		if(isset($_POST['login']))
		{
			$dashboad=base_url('internship/dashboard');
			if($this->Intern_M->isLoggedin() == TRUE)
			{
				redirect($dashboad,'refresh');
			}	
			$rules = $this->Intern_M->rule_login;
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == TRUE)
			{
				if($this->Intern_M->login() == TRUE)
				{
					redirect($dashboad,'refresh');	
				}
				else
				{
					$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
					redirect(base_url('internship/login'),'refresh');
				}
			}
		}
		if(isset($_POST['signup_form']))
		{
			//print_r($_POST);exit;
			$data['name']=$firstname=$_POST['firstname'];
			//$data['lName']=$_POST['lastname'];
			//$data['mName']=$_POST['middlename'];
			$data['password']=md5($_POST['password_sign']);
			$data['email']=$email=$_POST['emailid'];
			$data['phno']=$_POST['phoneno'];
			$data['created']=date('Y-m-d H:i:s');
			$data['isActive']='1';
			$intern_id=$this->Intern_M->save($data);
			redirect("https://www.softcadinfotech.in/email/internship/".$email."/".$intern_id);
			// $logo=base_url().'assets/images/logo.png';
			// /*########################Email send################*/
			//  $config['mailtype'] = 'html';
			//  $this->email->initialize($config);
   //           $message = '<html><body>';
   //           $message .= "<img src='".$logo."' alt='cadnaukri.com' /><br />";
   //           $message .= "<p style='color:orange'>Dear $firstname,</p><br /><br />";
   //           $message .= "<p> You are succesfully connected with cad naukri:<br/><br/>";
   //           $message .= "<b>NB:</b> Please visit our site once again to discover a new intership,
   //           job  search experience with host of features & benefits..<br/><br/>";
   //           $message .= "<b>Wising you all the very best.. :</b><br /><br/>"; 
   //           $message .= "<b>cadnaukri.com</p>"; 
   //          $message .= "</body></html>";
			// $this->load->library('email');
			// $this->email->from('no-reply@cadnaukri.com','Cad Naukri');
			// $this->email->to($email); 
			// $this->email->subject('Cadnaukri Signup Conformation ');
			// $this->email->message($message);
			// $this->email->send();
			$this->session->set_flashdata('sucess', 'You are scceesfully register your account');
		    //$this->session->set_flashdata('sucess', 'Please check your mailbox to valid your account');
	      redirect( 'internship/login');
		}
		$this->data['hotlisted_internships']=$this->Internship_M->hotlisted_internships();
		//$this->data['internships']=$this->Internship_M->internships();
		// $this->data['subview']='internship/subview/login';
		// $this->load->view('_layout_home',$this->data);  //,$this->data
		$this->load->view('internship/subview/login',$this->data);
	}
	public function dashboard()
	{
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
		$intern_id=$this->session->userdata('intern_id');
        $ip = $this->input->ip_address();
        date_default_timezone_set("Asia/Kolkata"); 
   		$date=date("Y-m-d H:i:s");
        //var_dump($ip);
        $this->data['last_login_ip']=$this->Intern_M->get_last_login_ip($intern_id);
        $this->data['last_login_date']=$this->Intern_M->get_last_login_date($intern_id);
        $last_login_ip=$this->Intern_M->save_last_login_ip($ip,$intern_id);
      	$last_login_date=$this->Intern_M->save_last_login_date($date,$intern_id);
        $this->data['last_applied_internship']=$this->Intern_M->get_last_applied_internship($intern_id);


		$this->data['intern_details']=$this->Intern_M->get($this->session->userdata('intern_id'));
		$this->data['subview'] = 'internship/subview/dashboard';
		$this->load->view('_layout_home',$this->data);
		
		//print_r($this->session->all_userdata());
	}
	public function email_exists()
    {
		
    	$emailid=$_POST['email_id'];
    //	echo $emailid;
    	$result=$this->Intern_M->get_by(array('email'=>$emailid));
    	echo count($result);
    	//echo 'Emailid='.$emailid;
          //$res=$this->Candidate_M->email_exists($emailid);
	     //echo $res;
    }
    public function profile($site=NULL)
    {
    	$user_id=$this->session->userdata('intern_id');
    	$this->data['interns']=$this->Intern_M->get($user_id);
    	
    //	$this->data['candidate_details']=$candidate_details=$this->Candidate_details_M->get_by(array('userId'=>$user_id),TRUE);
    	
    	if(empty($this->data['interns']))
    	{
				$this->data['interns']=$this->Intern_M->get_new();
		}
		if($site == 'profile_details')
    	{
    		$this->data['intern_prefernce']=$this->Intern_prefernce_M->get_by(array('internId'=>$user_id),TRUE);
    		if(empty($this->data['intern_prefernce']))
    		{
				$this->data['intern_prefernce']=$this->Intern_prefernce_M->get_new();
				
			}
    		$this->data['intern_edu_details']=$this->Intern_edudetails_M->get_by(array('internId'=>$user_id),TRUE);
    		if(empty($this->data['intern_edu_details']))
    		{
				$this->data['intern_edu_details']=$this->Intern_edudetails_M->get_new();
				
			}
			$this->data['details']=$this->Intern_M->get_all_intern_details($user_id);
    		$this->data['subview'] = 'internship/subview/profile_details';
			$this->load->view('_layout_home',$this->data);
    	}
		// else if($site == 'internship_prefernce')
  //   	{
  //   		$this->data['intern_prefernce']=$this->Intern_prefernce_M->get_by(array('internId'=>$user_id),TRUE);
  //   		if(empty($this->data['intern_prefernce']))
  //   		{
		// 		$this->data['intern_prefernce']=$this->Intern_prefernce_M->get_new();
				
		// 	}
		// 	//echo '<pre>';
  //   		if($_POST)
  //   		{
  //   			$data=array(
  //                   'internId' => $user_id,
		//             'industrytype'=>$_POST['industry_type'],
  //                   'pLocation'=> $_POST['location_insti'],
  //                   'created'=>date('Y-m-d'),
		//             'isActive'=>1,
  //                );
  //                if(empty($this->data['intern_prefernce']))
  //   		    {
  //                  $this->Intern_prefernce_M->save($data);//INSERT
  //               }
  //               else
  //               {
  //               	$id=$this->data['intern_prefernce']->id;
		// 			$this->Intern_prefernce_M->save($data,$id);//UPDATE
		// 		}
  //               $this->session->set_flashdata('success','Record update suceesfully');
		// 		redirect('internship/profile/internship_prefernce'); 
  //   		}
  //   		$this->data['industry_type']=$this->Industry_type_M->get();
  //   		$this->data['subview'] = 'internship/subview/internship_prefernce';
		// 	$this->load->view('_layout_home',$this->data);
  //   	}
    	else if($site == 'contact_details')
    	{
    		// if($_POST)
    		// {
    		// 	$data=array(
      //               'internId' => $user_id,
		    //         'email'=>$_POST['industry_type'],
      //               'pLocation'=> $_POST['location_insti'],
      //               'created'=>date('Y-m-d'),
		    //         'isActive'=>1,
      //            );
      //       }
    		$this->data['subview'] = 'internship/subview/contact_details';
			$this->load->view('_layout_home',$this->data);
    	}
		else if($site == 'educational_details')
    	{
    		$this->data['intern_edu_details']=$this->Intern_edudetails_M->get_by(array('internId'=>$user_id),TRUE);
    		if(empty($this->data['intern_edu_details']))
    		{
				$this->data['intern_edu_details']=$this->Intern_edudetails_M->get_new();
				
			}
			//echo '<pre>';
    		if($_POST)
    		{
    			
                $data=array(
                    'internId' => $user_id,
		            'institute'=>$this->input->post('institute'),
                    'location_insti'=> $this->input->post('location_insti'),
                    //'hometown'=>$this->input->post('hometown'),
                    'degree'=>$this->input->post('degree'),
                    'stream'=>$this->input->post('stream'),
                    'current_year'=>$this->input->post('current_year'),
                    'gaduationyearr'=>$this->input->post('year'),
                    'current_sem'=>$this->input->post('current_sem'),
                    'university'=>$this->input->post('university'),
                    //'performance_scale_pg'=>$this->input->post('performance_scale_pg'),
                    //'performance_pg'=>$this->input->post('performance_pg'),
                    //'performance_scale_ug'=>$this->input->post('performance_scale_ug'),
                    //'performance_ug'=>$this->input->post('performance_ug'),
                    'twelve_percentage'=>$this->input->post('twelve_percentage'),
                    'ten_percentage'=>$this->input->post('ten_percentage'),
                    'created'=>date('y-m-d'),
		       		'isActive'=>1,
                 );
                 if(empty($this->data['intern_edu_details']))
    		     {
                     $this->Intern_edudetails_M->save($data);
                  }
                  else
                  {
				  	$id=$this->data['intern_edu_details']->id;
				  	$this->Intern_edudetails_M->save($data,$id);
				  }
    			
				$this->session->set_flashdata('success','Record update suceesfully');
				redirect('internship/profile/educational_details');
			}
    		$this->data['subview'] = 'internship/subview/educational_details';
			$this->load->view('_layout_home',$this->data);
    	}
		else if($site == 'personal_details')
    	{
    		if($_POST)
			{
				//var_dump($_POST);exit();
				$data['name']=$firstname=$_POST['firstname'];
			    //$data['lName']=$_POST['lastname'];
				//$data['password']=md5($_POST['password_sign']);
				//$data['email']=$email=$_POST['emailid'];
				//$data['phno']=$_POST['phoneno'];
				$data['gender']=$_POST['gender'];
				$data['nick_name']=$_POST['nick_name'];
				$data['dob']=$_POST['dob'];
				//$data['created']=date('Y-m-d H:i:s');
				//$data['isActive']='1';
				if(isset($_FILES['image']['name']))
				{
					$target_dir = "intern_image/";
					$target_file = $target_dir . basename($id.rand(153,9999999999).$_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
					$data['image_path']=$target_file;

				}
				$intern_id=$this->Intern_M->save($data,$user_id);
				
				$this->session->set_flashdata('success','Record update suceesfully');
				redirect('internship/profile/personal_details');
			}
    		$this->data['subview'] = 'internship/subview/personal_deatils';
			$this->load->view('_layout_home',$this->data);
    	}
		
		
	}
	public function changepassword()
	{
		$user_id=$this->session->userdata('intern_id');
		if($_POST)
		{
			
			$password=$_POST['password'];
			$confirmpassword=$_POST['confirmpassword'];
			$this->form_validation->set_rules('password', 'Password', 'required|matches[confirmpassword]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('internship/changePassword');
			}
			else
			{
				//$candidate_id=$this->session->userdata('candidate_id');
				$data['password']=md5($password);
				$this->Intern_M->save($data,$user_id);
				$this->session->set_flashdata('successmsg', 'Your Password changed succesfully');
				redirect('internship/changePassword');
		
			}
				
			
		}
		
    	$this->data['interns']=$this->Intern_M->get($user_id);
		$this->data['subview'] = 'internship/subview/change_password';
		$this->load->view('_layout_home',$this->data);
	}
	
	public function forgot_password()
	{	
		$email=$this->input->post('email_id');
		$dob=$this->input->post('dob');
		$nick_name=$this->input->post('nick_name');
		$rules = $this->Intern_M->rule_forgot_password;
		$this->form_validation->set_rules($rules);
		$security_questions=$this->Intern_M->check_security_questions($dob,$nick_name,$email);
		if($this->form_validation->run() == TRUE)
		{
			
			if($this->Intern_M->check_email_exist()==TRUE && $security_questions == TRUE)
			{
				
				$encryptedpass=md5($this->input->post('password'));
				// $rand='';
				// $seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789');
				// shuffle($seed); 
				// foreach (array_rand($seed, 6) as $k) 
				// $rand.= $seed[$k];
				// $encryptedpass=md5($rand);
				// $this->load->library('email');
				// $this->email->set_mailtype("html");
				// $this->email->from('no-reply@cadnaukri.com','CadNaukri');
				// $this->email->to($email); 
				// $this->email->subject('PASSWORD RECOVERY REQUEST');
				// $msg='';
				// 	$msg.='Hello User ,
				// 	<br>Welcome to CadNaukri ! 
				// 	<br>Your Account Password is <br>Password : '.$rand.'<br>You Can login using 
				// 	this password and also change your password after login.<br>
				// 	<br>Thanking You<br>CadNaukri Team';
				// $this->email->message($msg);	
				// $this->email->send();
				$this->Intern_M->updatePassword($email,$encryptedpass);
				$this->session->set_flashdata('sucess','Password Successfully Updated');
				redirect(base_url('internship/login'),'refresh');
			}
			else
			{
				$this->session->set_flashdata('error','Email ID Doesn\'t Exist');
				redirect(base_url('internship/forgot_password'),'refresh');
				
			}
		} 
		$this->data['subview'] = 'internship/subview/forgot_password';
		//$this->data['subview'] = 'employer/subview/forgot_password';
	   $this->load->view('_layout_home',$this->data);
	}
    public function phone_exists()
	 {
		   $phoneno=$_POST['phone_num'];
		  $result=$this->Intern_M->get_by(array('phno'=>$phoneno));
    	 echo count($result); 
		
	  }
	  public function logout()
	{
		//$this->User_M->logout();
		$this->session->sess_destroy();
		//redirect('internship/login','refresh');
		redirect('Logout','refresh');
	}
	public function set_password()
    {
    	$id=$this->uri->segment(3);
    	//echo $id;exit();
        $result=$this->Intern_M->check_url($id);
        //var_dump($result);exit();
        if($result != false)
        {
            //echo "Url Passed";exit();
            
            if($_POST)
            {
                $password=md5($_POST['password']);
                //echo $password;exit();
                $data= array(
                    'dob' => $this->input->post('dob'), 
                    'nick_name' => $this->input->post('nick_name')
                    );
                $save=$this->Intern_M->save_sequrity_ans($data,$id);
                $result=$this->Intern_M->set_password($password,$id);
                if($result != false)
                {
     //                //$name=$this->Intern_M->get_name($id);
     //                $email=$this->Intern_M->get_email($id);
     //                // echo "Testing..Wait 5 min ";
     //                // var_dump($name);exit();
     //                $this->load->library('email');

     //                //****Email To Cadnaukri Team****//

     //                $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
     //                $this->email->to('shaktiprasad.dash@softcadinfotech.in');
     //                // $this->email->cc('admin@cadnaukri.com');
     //                // $this->email->bcc('admin@cadnaukri.com');
                
     //                $this->email->subject('Candidate Signed Up');
     //                $this->email->message("New Candidate Signed Up"."\n\n"."Candidate_id: ".$id."\n\n"."Name: ".$name);
                
     //                $this->email->send();

     //                //**** End Email To Cadnaukri Team****//



     //            	//****Email To Candidate****//

     //                // $this->email->from('no-reply@cadnaukri.com','Cadnaukri.com');
     //                // $this->email->to($email);
     //                // $this->email->cc('admin@cadnaukri.com');
     //                // $this->email->bcc('admin@cadnaukri.com');
                
     //                // $this->email->subject("Registered Successfully");
     //                // $this->email->message("Hello ".$name."\n\n"."Your Registration Completed Successfully");
                
     //                // $this->email->send();





     //                $this->load->library('email');
    	// 			$this->email->set_mailtype("html");

					// $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
			  //       $this->email->to($email);
					// $this->email->subject("Registered Successfully");


			  //       $this->email->message("
			        	
		   //      	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					// <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					// <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					// <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					// <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


					// Congratulations ".$name."
					// <br />
					// <br />

					// It is always a pleasure to have you on-board with CADnaukri.com | India's First Ever Job Portal For Design Industry.
						
					// Upload your CV now and complete your profile to get the most out of CADnaukri. Survey says that 100% profile completeness gets maximum response from recruiters.
					// <br /><br />
					// <a href='http://cadnaukri.com/signup/registration_successfully'><button class='btn btn-primary' style='background-color:#90EE90;'>Click Here To Sign In</button></a>
					// <br /><br />
					// Best wishes,
					// <br />
					// <br />
					// Team CADnaukri.com
					// <br />
					// <br />
					// <div >
					// <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:10%;width:20%;'></a>
					// </div>
     //                <br />
     //                <br />
     //                Follow Us On
     //                <br />
     //                <br />
     //                <div>
     //                <a href='https://www.facebook.com/CADnaukri'><img src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
     //                <a href='https://twitter.com/cadnaukri'><img src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
     //                </div>
					// <br />
					// <br />
					// <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
					
		   //      	");
    
     //            $this->email->send();

                	//****End Email To Candidate****//

                    redirect(base_url()."internship/registration_successfully");
                }
                else
                {
                    redirect(base_url()."internship/password_set_failed");
                }
            }
            $this->data['subview'] ='set_password';
            $this->load->view('_layout_home',$this->data);
        }
        else
        {
            redirect(base_url()."internship/link_expired");
        }

    }
    public function sign_up_success()
    {
    	$this->login();
    }
    public function link_expired()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
     public function registration_successfully()
    {
        $this->login();
    }
    public function password_set_failed()
    {
        $this->session->set_flashdata('error', 'Password Not Set');
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
	public function internship_details($internship_id=NULL)
	{
		// $data['subview']='internship/subview/intern_details';
		$internship_id=$this->uri->segment(3);
		$data['details']=$this->Intern_M->get_internship_details($internship_id);
		$data['right_side_internships']=$this->Intern_M->get_all_internships();
		$this->load->view('internship/subview/internship_details',$data);
	}
	public function apply()
	{
		$internship_id=$this->uri->segment(3);
		//echo uri_string();exit();
		$url=uri_string();
		if($this->Intern_M->isLoggedin() == TRUE)
		{
			$intern_id=$this->session->userdata('intern_id');
			$data=array(

				"internship_id"=>$internship_id,
				"intern_id"=>$intern_id,
				"cover_letter"=>$this->input->post('cover_letter'),
				"created"=>date('Y-m-d H:i:s')

				);
			//echo $this->session->userdata('intern_id');exit();
			//$result=$this->Intern_M->save_internship_apply($data);
			$result=$this->db->insert('internship_apply',$data);
			$internship_name=$this->Intern_M->get_internship_name($internship_id);
			$save_last_applied_internship=$this->Intern_M->save_last_applied_internship($internship_name,$intern_id);
			if($result)
			{
				$this->session->set_flashdata('success', 'Internship Applied Successfully');
				redirect(base_url()."internship/internship_details/".$internship_id);
			}
			else
			{
				$this->session->set_flashdata('error', 'Internship Not Applied');
				redirect(base_url()."internship/internship_details/".$internship_id);
			}
		}
		else
		{
			redirect(base_url()."internship/login");
		}

		
	}
	public function apply_now()
	{
		$id=$this->session->userdata('intern_id');
		$data['resume']=$this->Intern_M->get_resume_name($id);
		$data['subview']='internship/subview/quick_apply';
		$this->load->View('_layout_home',$data);
	}
	public function quick_apply()
	{
		// echo "hi";
		if($_POST)
		{			
			$data['internship_id']=$this->uri->segment(3);
			$data['name']=$this->input->post('name');
			$data['intern_email']=$this->input->post('email');
			$data['mobile']=$this->input->post('mobile');
			$data['cover_letter']=$this->input->post('cover_letter');
			$data['created']=date('Y-m-d H:i:s');
			
			$emp_email=$this->Intern_M->get_emp_email($this->uri->segment(3));
			$emp_name=$this->Intern_M->get_emp_name($this->uri->segment(3));
			$internship_title=urlencode($this->Intern_M->get_internship_title($this->uri->segment(3)));

			if (isset($_FILES["fileToUpload"]["name"])) 
			{
				$target_dir = "intern_cv/";
				$filename=rand(133,4000000).$_FILES["fileToUpload"]["name"];
				$target_file = $target_dir . basename($filename);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				//$newfilename = round(microtime(true)) . '_' . $data['name'];
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$data['cvname']=$filename;
				//echo $id.rand(133,4000000).$_FILES["fileToUpload"]["name"];exit();
				$data['cvpath']=$target_file;
				$insert_id=$this->Intern_M->cv_upload($data);
				if($insert_id != false)
				{
					$details=$this->Intern_M->quick_apply_details($insert_id);
					//echo $details->name;exit();
					$intern_name=urlencode($details->name);
					$intern_email=$details->intern_email;
					$intern_mobile=$details->mobile;
					$cv_url=urlencode($details->cvname);
					$cover_letter=urlencode($details->cover_letter);
					redirect("https://www.softcadinfotech.in/email/quick_apply_intern/".$emp_email."/".$cv_url."/".$internship_title."/".$intern_name."/".$intern_email."/".$intern_mobile."/".$cover_letter."/".$emp_name);

				}
				else
				{
					redirect(base_url().'internship/apply_failed','refresh');
				}
			}
		}
		$data['subview']='internship/subview/quick_apply';
		$this->load->View('_layout_home',$data);
	}
	public function quick_apply_success()
	{
		echo "Success";
	}
	public function internships()
	{
		$data['internships']=$this->Internship_M->internships();
		$data['subview']='internship/subview/internships';
		$this->load->view('_layout_home',$data);
	}
	// public function intern_header()
	// {
	// 	$data['subview']='internship/subview/intern_header';
	// 	$this->load->view('_layout_home',$data);
	// }
	public function update_password()
	{
		if($_POST)
		{
			$current_pass=md5($_POST['current_pass']);
			$id=$this->session->userdata('intern_id');
			if($this->Intern_M->check_update_pass($id,$current_pass) == TRUE)
			{
				$data['password']=md5($_POST['password']);
				$this->db->where('id',$id);
				$success=$this->db->update('intern',$data);
				if($success)
				{
					redirect(base_url()."internship/password_updated");
				}
			}
			else
			{
				redirect(base_url()."internship/wrong_password");
			}
		}
		$data['subview']='internship/subview/update_password';
		$this->load->view('_layout_home',$data);
	}
	public function wrong_password()
	{
		$this->update_password();
	}
	public function password_updated()
	{
		$this->update_password();
	}
	public function cvupload()
	{
		$id=$_POST['hidden_id'];
		//echo $id;exit();
		if (isset($_FILES["fileToUpload"]["name"])) 
		{
			$target_dir = "intern_cv/";
			$name= basename($id.rand(133,4000000).$_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir .$name;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			//$newfilename = round(microtime(true)) . '_' . $data['name'];
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$data['cvname']=$name;
			//echo $id.rand(133,4000000).$_FILES["fileToUpload"]["name"];exit();
			$data['cvpath']=$target_file;
			$result=$this->Intern_M->cvupload($data,$id);
			if($result != false)
			{
				redirect(base_url().'internship/dashboard','refresh');
			}
			else
			{
				redirect(base_url().'internship/dashboard','refresh');
			}


		}
	}
	public function applied_internships()
	{
		$intern_id=$this->session->userdata('intern_id');
		$data['applied_internships']=$this->Intern_M->get_applied_internships($intern_id);
		$data['subview']='internship/subview/applied_internships';
		$this->load->view('_layout_home',$data);
	}
	public function update_resume()
	{
		$data['intern_id']=$this->session->userdata('intern_id');
		$data['subview']='internship/subview/update_cv';
		$this->load->view('_layout_home',$data);
	}
	public function intern_header()
	{
		$this->load->view('internship/subview/header_intern');
	}
	public function footer()
	{
		$this->load->view('internship/subview/intern_footer');
	}
}