<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Candidate extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');
	  $this->load->model('Candidate_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('download');
    }
    function index(){
//echo  'Heloooooooooooo';exit();
           if($this->session->userdata('admin_id'))		   {	
		   $result['candInfo'] = $this->SuperAdmin_M->candidatelist();
		  // print_r($result);
		  if(isset($_POST['search'])){
			 if(isset($_POST['skill'])){
						$skill=$this->input->post('skill');
						}
						else
						{
							$skill="";
						}
						if(isset($_POST['exeperience'])){
						$exeperience=$this->input->post('exeperience');
						}
						else{
							$exeperience="";
						} 
					$result['searchdata']=$this->SuperAdmin_M->searchcandidate($skill,$exeperience);
					
		  }
	       $this->load->view('admin/candidate',$result);		
		   }		
		   else		
		   {
                redirect('admin/index/index');
            }			
     }
     function signup(){
          if($this->session->userdata('admin_id')){
                $this->load->view('admin/candidate_signup');
            }else{
                redirect('admin/index/index');
            }
         
     }
     public function insertData(){
             /*#####################Form Validation###########################*/
				
				//$this->load->library('MY_Form_validation');
				echo "hello";
			if(isset($_POST['emailid'])){
                $email=$_POST['emailid'];
                $this->form_validation->set_rules('emailid', 'emailid', 'trim|required|valid_email|callback_email_exists['.$email.']');
                }
                 if(isset($_POST['phoneno'])){
                $phoneno=$_POST['phoneno'];
               $this->form_validation->set_rules('phoneno', 'phoneno', 'trim|required|valid_phone|exact_length[10]|callback_phoneno_exists['.$phoneno.']');
                }
                  $this->form_validation->set_rules('password', 'Password', 'matches[confirmpassword]');
                 //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]');
				 
			if ($this->form_validation->run() == FALSE)
			{
	               $this->load->view('admin/candidate_signup');
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
			
			$target_dir = "assets/uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {
			  //  echo "Sorry, only docs, DOCX, PDF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  //  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
                                 // redirect('user/signup');
				  //header('Location: cand_signup.php?fail=fail');
				}
			}
			
			$pathname=$target_file;
			$filename=$_FILES["fileToUpload"]["name"];
            $email=$_POST['emailid'];
			echo $email;
               /*########################End Cv Upload################*/
		     $password=$rand;
		    $encryptedpass=md5($password);
			$data=array(
			'id'=>NULL,
			'fName'=>$_POST['firstname'],
			'lName'=>$_POST['lastname'],
			'mName'=>$_POST['middlename'],
			'password'=>$encryptedpass,		
			'email'=>$email,
			'mobile'=>$_POST['phoneno'],
			'isEmail'=>'1',
			'isMobile'=>'1',
			'deviceId'=>'0',
			'isEmailVerified'=>'1',
			'isMobileVerified'=>'1',
			'serviceOpted'=>'0',
			'cvname'=>$filename,
			'cvpath'=>$pathname,
			'location'=>$_POST['presentlocation'],
			'nationality'=>$_POST['nationality'],
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1'
			
			);
			//print_r($data);
			$this->SuperAdmin_M->insertcandidate($data);
			/*########################Email send################*/
                        
                         //$config['mailtype'] = 'html';
                         //$this->email->initialize($config);
                        
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('no-reply@cadnaukri.com','Cad Naukri');
						$this->email->to($email); 
						$this->email->subject('Email Verification ');
						 $message = '<html><body>';
                         $message .= "<img src='http://cadnaukri.com/images/dottedline.png' alt='cadnaukri.com' /><br />";
                         $message .= "<p style='color:orange'>Dear job-seeker,</p><br /><br /><br />";
                         $message .= "<p> Your Cadnaukri Candidate Login Credential:<br/><br/>";
                         $message .= "Email :" .$email;     
                         $message .= "Password :" .$rand;     
                         $message .= "<br/><br/>";     				 
                         $message .= "<b>NB:</b> Please visit our site once again to discover a new job search experience with host of features & benefits..<br/><br/>";
                         $message .= "<b>Wising you all the very best.. :</b><br /><br/>"; 
                         $message .= "<b>cadnaukri.com</p>"; 
                         $message .= "</body></html>";
						$this->email->message($message);
						$this->email->send();
						redirect('admin/index');
                  }
				  
               
     }
    public function  candidateSingleList (){
             $id=$_POST['candid'];
             $singleList=$this->SuperAdmin_M->candSingleList($id);
           //print_r($singleList);
           foreach ($singleList as $value) {
               $name=$value->fName.' '.$value->lName;
                      
         echo "
			<h4>Candidate Name: " . $name. "</h4> 
                         <h4>Email " . $value->email. "</h4> 
			<h4>Email: " .$value->email  . "</h4> 
			<h4>Mobile  : " . $value->mobile   . "</h4> 
                         <h4>Location  : " . $value->location   . "</h4> 
			<h4>Nationality: " . $value->nationality   . "</h4> ";
			
           }

    } 	
     public function deleteallCandidate()	 {	
	
			if($this->session->userdata('admin_id')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			
			$this->SuperAdmin_M->deleteallCandidate($userId);
			redirect('admin/candidate');
				} 
				else if(isset($_POST['mail']))
				{
					$userId=$this->input->post('userId');	
					$data['emailid']=$this->SuperAdmin_M->getemailid($userId);
					
					$this->load->view('admin/mail',$data);
					
				}
				
				
						
			}  
		
		}	


 public function sendMailall()	 {	
	if($this->session->userdata('admin_id')){		

		// echo "hhe";
		$mailid=$_POST['mailid'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$emailid=explode(" ",$mailid);
		$length=count($emailid);
	
		for($x = 0; $x < $length; $x++) {
					$email1=$emailid[$x];
					//echo $email1;
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('no-reply@cadnaukri.com', 'Cadnaukri Team');
					$this->email->to($email1); 
					$this->email->subject($subject);
					$msg='';
					$msg.='Hi <br>Welcome to Cadnaukri !<br>';
					$msg.=$message;
					$msg.=' <br><br><br>Thanking You<br>Cadnaukri Team';
					$this->email->message($msg); 
					$this->email->send(); 
		}
		$data['emailid']=$emailid;
		 $this->load->view('admin/mail',$data);		
		}		 
		}		

	
	
	
	 	 public function sendMail()	 {	
		if($this->session->userdata('admin_id')){		
		$str=$_POST['ids'];
		$arr=explode(",",$str);
		//print_r($arr);
	//$arr=explode($_POST['ids');
		//$this->SuperAdmin_M->deleteallCandidate($arr);
		echo 'Send Mail';
		
		}		 
		}
     public function deleteCandidate(){
             if($this->session->userdata('admin_id')){
                 $id=$_GET['id'];
                 $data=array('isActive'=>0);
                 $this->SuperAdmin_M->deleteCandidate($id,$data);
                 redirect('admin/candidate/index','refresh');
                 
             }
             else{
                redirect('admin/index/index');
            }
        }
         public function editCandidate() {
             if($this->session->userdata('admin_id')){
            $id=$_GET['id'];
        //echo $id;
           $singleList['candsingleList']=$this->SuperAdmin_M->candSingleList($id);
         //  print_r($singleList);
           $this->load->view('admin/cand_edit',$singleList);
             }
             else{
                redirect('admin/index/index');
            }
            
        }
        public function updateData(){
            $today=date("Y-m-d h:i:s");
			
			$target_dir = "assets/uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {
			  //  echo "Sorry, only docs, DOCX, PDF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  //  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
                                 // redirect('user/signup');
				  //header('Location: cand_signup.php?fail=fail');
				}
			}
			
			$pathname=$target_file;
			$filename=$_FILES["fileToUpload"]["name"];
                    $id=$_POST['id'];
                 $data=array(
			'fName'=>$_POST['firstname'],
			'lName'=>$_POST['lastname'],
			'mName'=>$_POST['middlename'],
			'email'=>$_POST['emailid'],
			'mobile'=>$_POST['phoneno'],
			'cvname'=>$filename,
			'cvpath'=>$pathname,
			'location'=>$_POST['presentlocation'],
			'nationality'=>$_POST['nationality'],
			'modified'=>$today,
			'isActive'=>'1'
			
			);
                 $this->SuperAdmin_M->updateCandidate($id,$data);
                 redirect('admin/candidate/index');
        }
		
		 public function download() {
             if($this->session->userdata('admin_id')){
				$id=$_GET['id'];
				 $data=$this->SuperAdmin_M->getresume($id);
				 if(!empty($data))
				 {
				 foreach($data as $res)
				 {
					 $cvname=$res->cvname;
					 $cvpath=$res->cvpath;
				 }
				 $file = file_get_contents($cvpath); // Read the file's contents
				$name = $cvname;
				if(!empty($file))
				{
					force_download($name, $file);
				}
				  else
				{
					
					$this->session->set_flashdata('msg', 'File Not found');
					redirect('admin/candidate/index');
				}
				 
				 }
				
            }
            
        }
        public function view_profile_details()
	{
		$candidate_id=$this->uri->segment(4);
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		//$data['subview']='superadmin/cand_profile';
		$this->load->View('admin/cand_profile',$data);
	}
	public function download_profile_details()
	{
		$candidate_id=$this->uri->segment(4);
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		$this->load->View('admin/cand_profile',$data);
	}
		

        
    
}