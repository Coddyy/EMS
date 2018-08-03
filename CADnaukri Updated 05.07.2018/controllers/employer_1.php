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
		 $this->load->library('form_validation');
     	$this->load->helper('form');
     	$this->load->library('email');	
    }
  	public function login()
	{
		if(isset($_POST['login']))
		{
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
					redirect($dashboad,'refresh');	
				}
				else
				{
					$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
					redirect(base_url('employer/login'),'refresh');
				}
			}
		}
		if(isset($_POST['signin']))
		{
			$target_dir = "assets/uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$email=$_POST['emailid'];
			$rand=$this->random_number();
			$data=array(
			'fName'=>$_POST['firstname'],
			'lName'=>$_POST['lastname'],
			'mName'=>$_POST['middlename'],
			'password'=>md5($_POST{'password'}),		
			'email'=>$email,
			'mobile'=>$_POST['phoneno'],
			'isEmail'=>'0',
			'isMobile'=>'0',
			'deviceId'=>'0',
			'emailVerificationCode'=>$rand,
			'mobileVerificationCode'=>$rand,
			'isEmailVerified'=>'0',
			'isMobileVerified'=>'0',
			'serviceOpted'=>'0',
			'socialProvider'=>'SELF',
			'cvname'=>$_FILES["fileToUpload"]["name"],
			'cvpath'=>$target_file,
			'location'=>$_POST['presentlocation'],
			'nationality'=>$_POST['nationality'],
			'created'=>date('Y-m-d'),
			'modified'=>date('Y-m-d'),
			'isActive'=>'0'
			);
			$candidate_id=$this->Candidate_M->save($data);
			$url=base_url()."candidate/emailveify/".$candidate_id."/".$rand;
			$logo=base_url().'assets/images/logo.png';
			/*########################Email send################*/
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$message = '<html><body>';
            $message .= "<img src='$logo' alt='cadnaukri.com' /><br />";
            $message .= "<p style='color:orange'>Dear job-seeker,</p><br /><br /><br />";
            $message .= "<p> Your can verify your account by clicking below link:<br/><br/>";
            $message .= $url;     
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
			  $this->session->set_flashdata('sucess', 'Please check your mailbox to valid your account');
	      		redirect( 'candidate/login');
		}
	
		$this->data['subview']='employer/subview/login';
		$this->load->view('_layout_home',$this->data);  //,$this->data
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
	public function forgotpasswordold(){
		
		$rules = $this->User_M->rule_forgotpass;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			if($user=$this->User_M->forgotpass())
			{
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@jasmineteam.com', 'JASMINE Team');
				$this->email->to($user->email_id); 
				$this->email->subject('PASSWORD');
				$msg='';
				$msg.='Hi '.$user->fname.',<br>Welcome to JASMINE ! <br>Your Account Password is <br>Password : '.$user->password.'<br><br>Thanking You<br>JASMINE Team';
				$this->email->message($msg);	
				$this->email->send();
				$this->session->set_flashdata('success','Check your Email Box');
				redirect($this->client_url.'user/forgotpassword','refresh');
			}
			else
			{
				$this->session->set_flashdata('error','Email ID Doesn\'t Exist');
				redirect($this->client_url.'user/forgotpassword','refresh');
			}
		}
		$this->load->view('user/_layout_forgetpass');
	}
	public function logout()
	{
		//$this->User_M->logout();
		$this->session->sess_destroy();
		$this->session->set_userdata(
						array('name' => '', 'loggedin' => FALSE, 'user_id'=>'','type'=>'','email'=>''));
		redirect('employer/login','refresh');
	}
	public function changepassword()
	{
		echo "hello";

		/* $rules = $this->User_M->change_pwd_rule;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			
			$data['password']=$this->input->post('npassword');
			$this->User_M->save($data,$this->session->userdata('employee_id'));
			$this->session->set_flashdata('success','Password Updated Successfully');
			redirect($this->client_url.'user/changepassword');
		}
		$this->data['sub_view']='user/changepassword';
		$this->load->view('admin/_layout_admin',$this->data); */
	}
	
	public function signup()
	{
	 $this->data['user']=$this->User_M->get_new();
		$rules = $this->User_M->rules_signup;
		
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			$data_user = $this->User_M->array_from_post(array('type','email','password'));
			$data_profile = $this->User_M->array_from_post(array('title','fname','lname','business_role','company_name','business_type','primary_trade','company_phone1','company_phone2','company_fax','company_email','address','city','state','pin','website'));
			//print_r($data);exit();
			$this->load->helper('string');
			$pstr=random_string('alnum', 8);
			$data_user['status']=1;
			$data_profile['user_id']=$this->User_M->save($data_user);
			$this->Profile_M->save($data_profile);
			$this->load->library('email');
			
			$this->email->set_mailtype("html");
			
			$this->email->from('noreply@mistri.com', 'Mistri System');
			$this->email->to($data_user['email']); 
			$this->email->subject('Your Account Created Successfully');
			$msg='';
			$msg.='Hi '.$data_profile['fname'].',<br>Welcome to Mistri.com ! <br>Your account is created successfully. Bellow is the login information.<br><br>Login ID or Email ID : '.$data_user['email'].'<br>Password : '.$data_user['password'].'<br><br>Thanking You<br>Mistri Team';
			$this->email->message($msg);	

			$this->email->send();

			redirect('/');
		}
		$opts='';
		$this->load->model('Category_M');
		$cats=$this->Category_M->getCategories();
		foreach($cats as $cat)
		{
			$opts.='<option value="'.$cat->id.'">'.$cat->name.'</option>';
		}
		$this->data['business_type'] = '';
		$this->data['primary_trade'] = $opts;
		$this->data['business_role'] = '';
		$this->data['subview'] = 'candidate/signup';
		$this->load->view('_layout_home',$this->data);
	}
	public function dashboard()
	{
		//echo md5(1111);exit;
		echo '<pre>';print_r($this->session->all_userdata());exit;
		$this->data['candidate_details']=$this->Candidate_M->get($this->session->userdata('candidate_id'));
		$this->data['candidate_details_all']=$this->Candidate_details_M->get_by(array('userId'=>$this->session->userdata('candidate_id')),TRUE);
		$this->data['subview'] = 'candidate/subview/dashboard';
		$this->load->view('_layout_home',$this->data);
	}
	function email_exists()
    {
		
    	$emailid=$_POST['emailid'];
    	//echo $emailid;
    	$result=$this->Candidate_M->get_by(array('email'=>$emailid));
    	echo count($result);
    	//echo 'Emailid='.$emailid;
          //$res=$this->Candidate_M->email_exists($emailid);
	     //echo $res;
    }
    function phone_exists()
	 {
		  /* $phoneno=$_POST['phoneno'];
		  $result=$this->Candidate_M->get_by(array('mobile'=>$phoneno));
    	echo count($result); */
		$res=1;
	  }

}