<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Candidate extends MY_Controller {

function __construct()

   {

     parent::__construct();

	 $this->load->model('SuperAdmin_M');	

	 $this->load->model('Candidate_M');	

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

	 $this->load->library('form_validation');

	 $this->load->library('session');

	 $this->load->helper("file");

	 $this->load->helper('download');

    }

    function index()

    {

		//echo  'Heloooooooooooo';//exit;

        

		   //$result['candInfo'] = $this->SuperAdmin_M->candidatelist();

		    

		  // print_r($result);

		   if(isset($_POST['search']))

		   {

			 if(isset($_POST['skill']))

			 {

				$skill=$this->input->post('skill');

			 }

			 else

			 {

					$skill="";

			 }

			 if(isset($_POST['exeperience']))

			 {

			  $exeperience=$this->input->post('exeperience');

			 }

			 else

			 {

				 $exeperience="";

			 } 

			  $this->data['candInfo']=$this->SuperAdmin_M->searchcandidate($skill,$exeperience);

			 // echo '<pre>';print_r(  $this->data['searchdata']);exit();

			// redirect('superadmin/candidate/index');

					

		   }

		   else

		   {

		   	    $this->db->order_by('created','DESC');

		    	$this->data['candInfo'] = $this->Candidate_M->get();   

		   }

	    	

        // $this->data['result']=$result;

         $this->load->view('superadmin/candidate',  $this->data);			

     }

     function signup()

     {

         if($this->session->userdata('superadminId'))

         {

                $this->load->view('superadmin/candidate_signup');

          }

          else

          {

                redirect('superadmin/index/index');

           } 

         

     }

     public function insertData(){

             /*#####################Form Validation###########################*/

				

				//$this->load->library('MY_Form_validation');

				//echo "hello";

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

	               $this->load->view('superadmin/candidate_signup');

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

		//	echo $email;

               /*########################End Cv Upload################*/

		    $password=$rand;

		    $encryptedpass=md5($password);

			$data=array(

			'id'=>NULL,

			'name'=>$_POST['firstname'],

			// 'lName'=>$_POST['lastname'],

			// 'mName'=>$_POST['middlename'],

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

						$this->email->subject('Job-seeker login credentials');

						 $message = '<html><body>';

                         $message .= "<img src='http://cadnaukri.com/images/dottedline.png' alt='cadnaukri.com' /><br />";

                         $message .= "<p>Dear Job-seeker,</p><br />";

                         $message .= "<p> Welcome aboard CADnaukri.com!</p><br/>";

                         $message .= "<p> We are thankful to you for registering your CV with us.</p><br/>";

                         $message .= "<p> CADnaukri.com reassures you to reach your prospective employers as soon as possible. We continuously strive to reach additional HR personnel of reputed firms for your better employment prospects.</p><br/>";

                         $message .="<p>Your login credentials:</p>";

                         $message .= "<span style='font-weight:bold'>Username :</span>" .$email;     

                         $message .= "<span style='font-weigh     t:bold'>Password :</span>" .$rand;     

                        $message .= "<br/><br/>";     				 

                         $message .="<p>**You are requested to change the above default password after successfully logging into your account. Please login to your account regularly to get newer job notifications since our servers automatically removes inactive users; if not logged in for more than 30 days**</p></br/>";

                         $message .="<p>Happy Searching Jobs!<p></br/>";

                         $message .= "<p>CADnaukri.com</p>"; 

                         $message .= "<p>NB: You can send your enquiries to  <span style='font-weight:bold'>HR@CADNAUKRI.COM</span> and also message us in WhatsApp: 

                         <span style='font-weight:bold'>+918260701701</span> for instant response. Working hours: 10:30 am to 8:00 pm (MON to FRI)</p>"; 

                         $message .= "</body></html>";

						$this->email->message($message);

						$this->email->send();

						$this->session->flashdata('sucess','Sucessfully added the client');

						redirect('superadmin/candidate/signup');

                  }

				  

               

     }

    public function  candidateSingleList (){

             $id=$_POST['candid'];

             $singleList=$this->SuperAdmin_M->candSingleList($id);

           //print_r($singleList);

           foreach ($singleList as $value) {

               $name=$value->name;

                      

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

	

			if($this->session->userdata('superadminId')){

				if(isset($_POST['delete'])){

			$userId=$this->input->post('userId');

			

			$this->SuperAdmin_M->deleteallCandidate($userId);

			redirect('superadmin/candidate');

				} 

				else if(isset($_POST['mail']))

				{

					$userId=$this->input->post('userId');	

					$data['emailid']=$this->SuperAdmin_M->getemailid($userId);

					

					$this->load->view('superadmin/mail',$data);

					

				}	

				else if(isset($_POST['send_sms']))

				{

					$userId=$this->input->post('userId');

					$data['phone_num']=$this->SuperAdmin_M->getphonenum($userId);	

					$this->load->view('superadmin/send_sms',$data);

					//$data['emailid']=$this->SuperAdmin_M->getphoneno($userId);

					

					//$this->load->view('superadmin/mail',$data);

					

				}					

			}  

		}	





    public function sendMailall()	 

    {	

	if($this->session->userdata('superadminId')){		



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

		 $this->load->view('superadmin/mail',$data);		

		}		 

		}		

 public function test_sms()

   {

		$phone_number=$_POST['phone_num'];

		$message=$_POST['message']; 

		$ph_no=explode(" ",$phone_number);

		$length=count($ph_no);

		for($x = 0; $x < $length; $x++) {

			 $phn_num=$ph_no[$x];

			$response=$this->send_sms($phn_num,$message);

		}

    	//$response=$this->send_sms('8895643575,985432671,8992576477','test from cadnaukri');//For multiple number

    	if(!empty($response))

		{

			$data['msg']="SMS Successfully Sent";

			$this->load->view('superadmin/send_sms',$data);	

		};

   	

   }

   public function send_sms($ph_no,$text,array  $get = NULL,array $options = array())

	 {



		$from_Name='Cadnaukri';   

		$authKey="6c149d468030e136a38227b9181b148e";

		 $url="http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey; 

		//$url = 'http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms/';   

	

		$senderId="CADnau";

		$routeId=1;

		$mobileNos=$ph_no;

		$smsContentType='english';

		$user = 'jpattanayak';

		$message=$text;

		$apikey='6dc0537b-970e-4f93-8e79-32013534a0b2';

		$isunicode='normal';

		//$message='TEST_MSGGAGE';

		$postData = array(

         'mobileNumbers' => $mobileNos,        

        'smsContent' => $message,

        'senderId' => $senderId,

        'routeId' => $routeId,		

        "smsContentType" =>'english'

        );



    	 $data_json = json_encode($postData);

    	 $ch = curl_init();

	    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_HTTPHEADER => array('Content-Type: application/json','Content-Length: ' . strlen($data_json)),

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_POST => true,

        CURLOPT_POSTFIELDS => $data_json,

        CURLOPT_SSL_VERIFYHOST => 0,

        CURLOPT_SSL_VERIFYPEER => 0

    ));



    //get response

    $output = curl_exec($ch);

    return $output;

			//echo $url;

			/*$session = curl_init($url);

			curl_setopt ($session, CURLOPT_POST, true);

			curl_setopt ($session, CURLOPT_POSTFIELDS, $get);

			curl_setopt($session, CURLOPT_HEADER, false);

			curl_setopt($session, CURLOPT_SSLVERSION, 'CURL_SSLVERSION_TLSv1_2');

			curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

			curl_setopt($session, CURLINFO_HEADER_OUT, true);

			$response = curl_exec($session);

			$info = curl_getinfo($session);

			return $response;

			//print_result($info);

			//	print_r($response);

			curl_close($session);*/

	  }

	

	

	

	 	 public function sendMail()	 {	

		if($this->session->userdata('superadminId')){		

		$str=$_POST['ids'];

		$arr=explode(",",$str);

		//print_r($arr);

	//$arr=explode($_POST['ids');

		//$this->SuperAdmin_M->deleteallCandidate($arr);

		echo 'Send Mail';

		

		}		 

		}

     public function deleteCandidate(){

             if($this->session->userdata('superadminId')){

                 $id=$_GET['id'];

                 $data=array('isActive'=>0);

                 $this->SuperAdmin_M->deleteCandidate($id,$data);

                 redirect('superadmin/candidate/index','refresh');

                 

             }

             else{

                redirect('superadmin/index/index');

            }

        }

         public function editCandidate() {

             if($this->session->userdata('superadminId')){

            $id=$_GET['id'];

        //echo $id;

           $singleList['candsingleList']=$this->SuperAdmin_M->candSingleList($id);

         //  print_r($singleList);

           $this->load->view('superadmin/cand_edit',$singleList);

             }

             else{

                redirect('superadmin/index/index');

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

			'name'=>$_POST['firstname'],

			// 'lName'=>$_POST['lastname'],

			// 'mName'=>$_POST['middlename'],

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

                 redirect('superadmin/candidate/index');

        }

		

		 public function download() {

             if($this->session->userdata('superadminId')){

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

					redirect('superadmin/candidate/index');

				}

				 

				 }

				

            }

            

        }

		public function view_profile($candidate_id)

		{

			

			// echo 'Working Propoerly';
			$id= $candidate_id;

			// exit();

			// $user = $this->Candidate_M->get_by(array('id'=> $candidate_id), TRUE);

			// $data = array('fName'=>$user->name,
			// 			//'lName'=>$user->lName,
			// 			//'mName'=>$user->mName,
			// 			'candidate_id'=>$user->id, 
			// 			'email'=>$user->email,
			// 			'mobile'=>$user->mobile,
			// 			'cand_loggedin'=>TRUE);

			// $this->session->set_userdata($data);

			// redirect(base_url('candidate/dashboard_forAdmin'));



			// echo $id;
            $singleList=$this->SuperAdmin_M->candSingleList($id);
            $cand_skill=$this->SuperAdmin_M->cand_skill($id);
            $cand_exp=$this->SuperAdmin_M->check_exp($id);
            
            
            //print_r($cand_exp);exit();
           //print_r($singleList);
            //print_r($cand_skill);
            //echo $cand_skill;
                      
          foreach ($singleList as $value) {
          	$picture=$value->profileImage;
            $pic=base_url()."assets/candidate/profile_image/".$picture;
             //$name=$value->fName.' '.$value->lName;
          	$name=$value->name;
                      
        echo "
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' >
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' ></script>



		<br />
		<div class='container' style='margin-left:8%;'>
			<div class='row'>
				<h3 class='col-lg-4'>Candiate Profile</h3>
			</div>
		</div>
		
		<div class='container' style='margin-top:1%;'>

			<div class='row'>
				
				<div class='col-md-8'></div>
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Image</label>
			      		<div class='col-lg-4'> 
			      			<img style='height:20%;width:30%;' src='".$pic."' alt='".$name."' />
			     		</div>
					</div>
					<br />
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Name:</label>
			      		<div class='col-lg-4'> 
			      			".$name."
			     		</div>
					</div>
					<br />
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Email:</label>
			      		<div class='col-lg-4'> 
			      			".$value->email."
			     		</div>
			     		
					</div>
					<br />
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Mobile:</label>
			      		<div class='col-lg-4'> 
			      			".$value->mobile."
			     		</div>
			     		
					</div>
					<br />
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Location:</label>
			      		<div class='col-lg-4'> 
			      			".$value->location."
			     		</div>
			     		
					</div>
				</div>
				<div class='col-md-2'></div>
			</div>
		</div>";
		}
		echo "
			<div class='container'>
				<div class='row' >
					<div class='col-lg-12 form-group'>
					
			      		<label class='col-lg-1' > Skill:</label>
			      		<div class='col-lg-4'> 
			      			".$cand_skill."
			     		</div>
			     	
					</div>
				</div>
			</div>
	
			 ";
			if($cand_exp != false)
			{
				foreach ($cand_exp as $value) {

					echo "
						<div class='container'>
							<div class='row'>
								<div class='col-lg-12 form-group'>
									
						      		<label class='col-lg-1' > Company:</label>
						      		<div class='col-lg-4'> 
						      			".$value->company."
						     		</div>
						     		
								</div>
								<br />
								<div class='col-lg-12 form-group'>
									
						      		<label class='col-lg-1' > Designation:</label>
						      		<div class='col-lg-4'> 
						      			".$value->designation."
						     		</div>
						     		
								</div>
							</div>
						</div>
						";
				}
			}
			else
			{
				echo "
					<div class='container'>
						<div class='row' >
							<div class='col-lg-12 form-group'>
							
					      		<label class='col-lg-1' > Experience:</label>
					      		<div class='col-lg-4'> 
					      			Fresher
					     		</div>
					     		
							</div>
						</div>
					</div>";
				echo "

				<div class='container'>
					<div class='row'>
						<div class='col-lg-12 form-group'>
							<span class='col-lg-1'>
							<button class='btn btn-primary' style='width:150%;'>Print</button>
							</span>
						</div>
					</div>
				</div>";
			}


		}

		public function import()

		{

			 if($this->session->userdata('superadminId'))

			 {

			 	$this->data='';

			 	$this->load->view('superadmin/candidate_import',  $this->data);	

			 }

		}

		/* public function check_import()

		{

			///echo 'Hello';exit();

			$this->load->library('csvimport');

			$config['upload_path'] = 'assets/candidate/import_files/'; //Upload folder for the excel

            $config['allowed_types'] = '*'; //File type

            $config['max_size'] = '10000';

            $config['overwrite'] = TRUE;

            $file_element_name = 'userfile';

            $new_name = time().'candidate_import_file';

			$config['file_name'] = $new_name;

            $error=FALSE;

            $message='';

            $csv_array = [];

            $corect_data=[];

            $required_field_array=array('fName','lName','email','mobile');

            $all_skills=$this->Skills_M->get_ids_array();

            $all_functional_area=$this->Functional_area_M->get_ids_array();

            $all_industyr_type=$this->Industry_type_M->get_ids_array();

            $all_language=$this->Language_M->get_ids_array();

            $all_country=$this->Country_M->get_ids_array();

            $all_state=$this->State_M->get_ids_array();

          //  print_r($all_functional_area);

         	$this->load->library('upload', $config);

			if (!$this->upload->do_upload($file_element_name)) 

			{

				 $error=TRUE;

				 $message .=$this->upload->display_errors();

				// print_r($message);

                            

            } 

            else 

            {

                $file_data = $this->upload->data();

             //   print_r($file_data);

             //   echo $file_data['file_name'];

                $file_path = './assets/candidate/import_files/' . $file_data['file_name'];

              //  echo $file_path;exit();

                $fileType = pathinfo($file_path, PATHINFO_EXTENSION);

            //    chmod($file_data['full_path'], 777); ## this should change the permissions

                if ($this->csvimport->get_array($file_path)) 

                {

				   $csv_array = $this->csvimport->get_array($file_path);

				 // echo '<pre>';print_r($csv_array);

				    if (!empty($csv_array)) 

				    {

                        $c = 0;

                        $i=0;

                        $row_no=1;

                        $is_correct=0;

                        foreach($csv_array as $row):

                        $email=$row['email'];

                        $candidate_skills=explode(',',$row['key_id']);

                        $candidate_functional_area=explode(',',$row['functional_area_id']);

                        $candidate_industry_type=explode(',',$row['industry_type_id']);

                        $candidate_language=explode(',',$row['language_id']);

                        $candidate_country=explode(',',$row['country_id']);

                        $candidate_state=explode(',',$row['state_id']);

                        if($row['key_id'] !='' && (!in_array($row['key_id'],$all_skills)) )

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid skill id .Error on row number '.$row_no.'<br/>';

						}

					//	echo $row['functional_area_id'];

					//print_r(count(array_intersect($candidate_functional_area, $all_functional_area)));

					//echo count($candidate_functional_area);

						if($row['functional_area_id']!='' && (count(array_intersect($candidate_functional_area, $all_functional_area)) != count($candidate_functional_area)))

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid Functional area id  .Error on row number '.$row_no.'<br/>';

						}

						if($row['industry_type_id']!='' && (count(array_intersect($candidate_industry_type, $all_industyr_type)) != count($candidate_industry_type)))

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid Industry type id  .Error on row number '.$row_no.'<br/>';

						}

						if($row['language_id'] !='' &&  (count(array_intersect($candidate_language, $all_language)) != count($candidate_language)))

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid Language id   .Error on row number '.$row_no.'<br/>';

						}

						if($row['state_id'] !='' &&  (count(array_intersect($candidate_state, $all_state)) != count($candidate_state)))

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid State id  .Error on row number '.$row_no.'<br/>';

						}

						if($row['country_id'] !='' && (count(array_intersect($candidate_country, $all_country)) != count($candidate_country)))

                        {

							 $error=TRUE;

						   	 $is_correct=1;

							 $message .=' Invalid Country id  .Error on row number '.$row_no.'<br/>';

						}

                        

                       

                           for($i=0;$i<count($required_field_array);$i++)

                           {

						   	  if($row[$required_field_array[$i]]=='')

						   	  {

						   	  	  $error=TRUE;

						   	  	  $is_correct=1;

							  	 $message .=$required_field_array[$i].' can not be empty.Error on row number '.$row_no.'<br/>';

							  }

						   }

						   if(!$this->email_exists($email))

						   	{

							   	$error=TRUE;

							   	$is_correct=1;

							  	$message .='Email id is already registered.Error on row number '.$row_no.'<br/>';

							}

						   if($is_correct != 1)

						   {

						   	  array_push($corect_data,$row);

						   }

                           $row++; 

                           $row_no++;

                        endforeach;

                    }

                   // echo '<pre>';	print_r($corect_data);

                   //echo  $error;

                    if($error)

                    {

						$data=array('status'=>'error','message'=>$message);

					}

					else

					{

						$check= $this->session->userdata('correct_data');

						//print_r($check);exit();

						if(!empty($check)){

						  $this->session->unset_userdata('correct_data');

						 // $this->session->set_userdata('correct_data', $corect_data);

						}

						//$this->session->set_userdata('correct_data',$corect_data);

						//$string=serialize($csv_array);

						$data=array('status'=>'success','message'=>'Start Importing','data_array'=>json_encode($corect_data));

					}

					//echo 'Test';

			

					echo json_encode($data);

					//echo json_encode($corect_data);

                 

                }

                else

                {

					echo 'Some thing go wrong with your csv format';

				}

		    }

		    

     //  delete_files($file_path);

    } */

    public function email_exists($email)

    {

		$check=$this->Candidate_M->get_by(array('email'=>$email));

		if(count($check) > 0)

		{

			return FALSE;

		}

		else{

			return TRUE;

		}

	}  

	public function import_data()

	{

		

	  //$all_data= $this->session->userdata('correct_data');

	  $all_data=json_decode($_POST['import_data'],TRUE);

	//  echo '<pre>';print_r($all_data);exit();

	  //print_r($all_data);

	  if($all_data)

	  {

	  	  $i=0;

	  	  foreach($all_data as $all):

	  	  $candidate_array[$i]['fName']=$all['name'];

	  	  //$candidate_array[$i]['lName']=$all['lName'];

	  	  //$candidate_array[$i]['mName']=$all['mName'];

	  	  $candidate_array[$i]['password']=md5($all['email']);

	  	  $candidate_array[$i]['email']=$all['email'];

	  	  $candidate_array[$i]['mobile']=$all['mobile'];

	  	  $candidate_array[$i]['isEmail']=$all['isEmail'];

	  	  $candidate_array[$i]['cvpath']=$all['cvpath'];

	  	  $candidate_array[$i]['profileImage']=$all['profileImage'];

	  	  $candidate_array[$i]['imagePath']=$all['imagePath'];

	  	  $candidate_array[$i]['location']=$all['location'];

	  	  $candidate_array[$i]['nationality']=$all['country_id'];

	  	  $candidate_array[$i]['isActive']=1;

	  	  $candidate_array[$i]['is_job_email']=1;

	  	  $candidate_array[$i]['isMobileVerified']=1;

	  	  $candidate_array[$i]['isEmailVerified']=1;

	  	  $candidate_array[$i]['emailVerificationCode']=rand(1,999);

	  	  $candidate_array[$i]['mobileVerificationCode	']=rand(1,999);

	  	  $candidate_array[$i]['created']=date('Y-m-d H:i:s');

	  	  if($all['functional_area_id'] != '')

	  	 	 $candidate_function_area[$i]['functional_area_id']=explode(',',$all['functional_area_id']);

	  	  if($all['industry_type_id'] != '')

	  	 	 $candidate_industry_area[$i]['industry_type_id']=explode(',',$all['industry_type_id']);

	  	 if($all['key_id'] != '')

	  	  	$candidate_key[$i]['key_id']=explode(',',$all['key_id']);

	  	  $i++;

	  	  endforeach;

	  }	

	  

       if(!empty($candidate_array))

       {   

           $this->db->insert_batch('candidate',$candidate_array);  

       }

      

      $data=array('status'=>'success','message'=>'Import Sucess');

     	echo json_encode($data);

		

		

	}
	public function active_candidates()
	{
		
		$data['active_candidates']=$this->SuperAdmin_M->get_active_candidates();
		$data['subview']='superadmin/active_candidates';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function shoot_mail()
	{
		$this->load->view('superadmin/cv_update_mail');
	}
	// public function send_cv_mail()
	// {
	// 	$limit=$this->uri->segment(4);
	// 	if($this->uri->segment(5))
	// 	{
	// 		$i=$this->uri->segment(5);
	// 	}
	// 	else
	// 	{
	// 		$i=0;
	// 	}
	// 	$sql="SELECT id,email FROM candidate WHERE cv_mail_sent=0 LIMIT 1;";
	// 	$query=$this->db->query($sql);
	// 	$data=$query->row();
	// 	//echo $data->id;echo $data->email;exit();
	// 	//$i=0;
	// 	$email=$data->email;
	// 	$id=$data->id;
	// 	if($i < $limit)
	// 	{
	// 		$sql="UPDATE candidate SET cv_mail_sent='1' WHERE id='$id';";
	// 		$query=$this->db->query($sql);
	// 		redirect("https://www.softcadinfotech.in/email/cv_mail/".$email."/".$id."/YES/".$i);
	// 		//$i++;
	// 	}
	// 	else
	// 	{
	// 		$sql="UPDATE candidate SET cv_mail_sent='1' WHERE id='$id';";
	// 		$query=$this->db->query($sql);
	// 		redirect("https://www.softcadinfotech.in/email/cv_mail/".$email."/".$id."/NO");
	// 	}
	// }
	public function send_cv_mail()
	{
		$limit=$this->uri->segment(4);
		$sql="SELECT id,email FROM candidate WHERE cv_mail_sent=0 LIMIT 1;";
		$query=$this->db->query($sql);
		$data=$query->row();
		if($data)
		{
			$email=$data->email;
			$id=$data->id;

			$sql="UPDATE candidate SET cv_mail_sent='1' WHERE id='$id';";
			$query=$this->db->query($sql);

			redirect("https://www.softcadinfotech.in/email/cv_mail/".$email."/".$id);
		}
		else
		{
			echo "No more candidates left";
		}
	}
	public function mail_sent()
	{
		$this->shoot_mail();
	}
    public function cv_updated_candidates()
    {
    	$sql="SELECT * FROM candidate WHERE cv_updated=1;";
    	$query=$this->db->query($sql);
    	$data['details']=$query->result();
    	$data['subview']='superadmin/cv_updated_candidates';
    	$this->load->view('superadmin/_layout_superadmin',$data);
    }
    // public function view_job_alerts()
    // {
    // 	$sql="SELECT * FROM job_alerts ORDER BY created DESC; ";
    // 	$query=$this->db->query($sql);
    // 	$data['details']=$query->result();
    // 	$data['subview']='superadmin/view_job_alerts';
    // 	$this->load->view('superadmin/_layout_superadmin',$data);
    // }
    public function view_job_alerts()
    {
    	$data['job_alerts']=$this->SuperAdmin_M->get_job_alerts();
    	$data['subview']='superadmin/job_alerts';
    	$this->load->view('superadmin/_layout_superadmin',$data);
    }
    public function view_profile_details()
	{
		$candidate_id=$this->uri->segment(4);
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		$data['subview']='superadmin/cand_profile';
		$this->load->View('superadmin/_layout_superadmin',$data);
	}
	public function download_profile_details()
	{
		$candidate_id=$this->uri->segment(4);
		$data['gen_details']=$this->Candidate_M->my_profile_general($candidate_id);
		$data['edu_details']=$this->Candidate_M->my_profile_edu($candidate_id);
		$data['exp_details']=$this->Candidate_M->my_profile_exp($candidate_id);
		$data['proj_details']=$this->Candidate_M->my_profile_proj($candidate_id);
		$this->load->View('superadmin/cand_profile',$data);
	}
	public function casual_candidates()
	{
		$sort=$this->uri->segment(4);
		$sql="SELECT * FROM candidate ";
		if($sort == "Resume")
		{
			//echo "Resume";exit();
			$sql .="WHERE (cvpath IS NULL OR cvpath = '') ";
		}
		else if($sort == "Location")
		{
			$sql .="WHERE (location IS NULL OR location = '') ";
		}
		else if($sort == "Job_applying")
		{
			$sql .="WHERE (last_appiled_job IS NULL OR last_appiled_job = '') ";
		}
		else if($sort == "Skill")
		{
			$sql .="WHERE skill_there='0' ";
		}
		else if($sort == "All")
		{
			$sql .="WHERE (cvpath IS NULL OR cvpath = '') AND (location IS NULL OR location = '') AND (last_appiled_job IS NULL OR last_appiled_job = '') AND skill_there='0' ";
		}
		else if($sort == "No_filter")
		{
			//Do Nothing
		}
		$sql.="ORDER BY created DESC;";

		$query=$this->db->query($sql);
		$data['candidates']=$query->result();
		$this->load->view('superadmin/check_candidates',$data);
	}
	public function add_skill_to_candidate()
	{
		$sql="SELECT id FROM candidate";
		$query=$this->db->query($sql);
		$data=$query->result();
		foreach ($data as $key)
		{
			$candidate_id=$key->id;
			$sql1="SELECT id FROM candiate_key_skills WHERE user_id='$candidate_id';";
      		$query1=$this->db->query($sql1);
      		if($query1->num_rows() > 0)
		    {
		    	$dt['skill_there']='1';
		    	$this->db->where('id',$candidate_id);
		    	$this->db->update('candidate',$dt);
		        //return true;
		    }
		    else
		    {
		        //return false;Do Nothing;
		    }
		}
	}
	
}