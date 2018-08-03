<?php
class Signup extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
    	$this->load->model('Sign_up_m');
        $this->load->model('Candidate_M');
        $this->load->model('Employee_M');
        $this->load->model('Job_M');
        $this->load->model('View_M');
        $this->load->model('Country_M');
        
    }
    public function index()
    {
        //echo 'Hello';

    }
    public function sign_up()
    {   
        $result=$this->Sign_up_m->permission();
        if($result != false)
        {
            //echo "Success";exit();
            //var_dump($_POST);exit();
        	$email=$_POST['email'];
            $result=$this->Sign_up_m->check_already_exist($email);
            if($result != false)
            {
                if($_POST['segment'] != '' && $_POST['segment'] != NULL)
                {
                    $data=array(
                        "name"=>$this->input->post("name"),
                        "email"=>$this->input->post("email"),
                        "mobile"=>$this->input->post("mobile"),
                        "yet_to_apply_job_id"=>$this->input->post("segment"),
                        "created"=>date('Y-m-d H:i:s')
                        );
                }
                else
                {
                	$data=array(
                		"name"=>$this->input->post("name"),
                		"email"=>$this->input->post("email"),
                		"mobile"=>$this->input->post("mobile"),
                        "created"=>date('Y-m-d H:i:s')
                		);
                }
            	$result=$this->Sign_up_m->sign_up($data);
            	if($result != false)
            	{
            		$id=$this->Sign_up_m->get_id($email);
                    $name=$this->Sign_up_m->get_name($id);
                    if($_POST['segment'] != '' && $_POST['segment'] != NULL)
                    {
                        $job_id=$_POST['segment'];
                        $data=array('user_id' => $id, 
                                    'job_id' => $job_id,
                                    'created'=>date("Y-m-d H:i:s")
                                    //'modified'=>date("Y-m-d H:i:s")
                                    );
                        $this->Job_M->save_this_job($data);
                    }
                    redirect("https://www.softcadinfotech.in/email/candidate/".$email."/".$name."/".$id);
                    ////echo "Wait Wait Wait - (Abhra Sarkar)...Working";exit();
            		////echo $id; exit();
                    ////$msg='Set Password';
        	    	// $this->load->library('email');

        	     //    $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
        	     //    $this->email->to($email);
        	     //    ////$this->email->cc('shaktiprasad.dash@softcadinfotech.in');
        	     //    ////$this->email->bcc('them@their-example.com');
        	        
        	     //    $this->email->subject("Set Password");
        	     //    $this->email->message("Hello ".$name."\n\n"."Click the link below To set your password"."\n\n".'http://cadnaukri.com/signup/set_password/'.$id."\n\n"."NB: Please visit our site to discover a new job search experience with host of features & benefits.."."\n\n"."
              //           Wising you all the very best.. "."\n\n"."- CADnaukri Team");
        	        
        	        //$this->email->send();
                  ////   if($_POST['segment'] != '' && $_POST['segment'] != NULL)
                  ////   {
                  ////       $job_id=$_POST['segment'];
                  ////       $the_job=$this->Job_M->get_that_job($job_id);
                  ////       foreach($the_job as $fj)
                  ////       {
                  ////           $jobtitle=$fj->jobtitle;
                  ////           $job_title=str_replace(' ', '-', $fj->jobtitle);
                  ////           $location=str_replace(' ', '-', $fj->location);
                  ////           $designation=str_replace(' ', '-', $fj->designation);
                  ////           //$url=base_url('best_design_jobs/signle_search/'.$fj->id).'"><h5>'.$fj->jobtitle;
                  ////           $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$fj->id;
                  ////       }
        	    	    // redirect(base_url($url));
                  ////   }
                  ////   else
                  ////   {
                        //redirect(base_url()."signup/sign_up_success1");
                    //}
            	}
            	else
            	{
            		redirect(base_url()."signup/sign_up_failed");
            	}
            }
            else
            {
                redirect(base_url()."signup/email_already_exist");
            }
        }
        else
        {
            redirect(base_url()."signup/not_authorized");
        }
    } 
    public function not_authorized()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function sign_up_success()
    {
        $this->session->set_flashdata('success', 'Information...');
        //redirect(base_url()."candidate/login");
        // $this->data['subview'] ='check_email';
        // $this->load->view('_layout_home',$this->data);
        $this->data['country_list']=$this->Country_M->get();
        
        $this->data['subview']='candidate/subview/login';
        $this->load->view('_layout_home',$this->data);
    }
    public function sign_up_failed()
    {
    	$this->data['subview'] ='flashdata';
		$this->load->view('_layout_home',$this->data);
    }
    public function email_already_exist()
    {
    	$this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function set_password()
    {
    	$id=$this->uri->segment(3);
    	//echo $id;exit();
        $result=$this->Sign_up_m->check_url($id);
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
                $save=$this->Sign_up_m->save_sequrity_ans($data,$id);
                $result=$this->Sign_up_m->set_password($password,$id);
                if($result != false)
                {
                    $name=$this->Sign_up_m->get_name($id);
                    $email=$this->Sign_up_m->get_email($id);
                    // echo "Testing..Wait 5 min ";
                    // var_dump($name);exit();
                    $this->load->library('email');

                    //****Email To Cadnaukri Team****//

                    $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
                    $this->email->to('shaktiprasad.dash@softcadinfotech.in');
                    // $this->email->cc('admin@cadnaukri.com');
                    // $this->email->bcc('admin@cadnaukri.com');
                
                    $this->email->subject('Candidate Signed Up');
                    $this->email->message("New Candidate Signed Up"."\n\n"."Candidate_id: ".$id."\n\n"."Name: ".$name);
                
                    $this->email->send();

                    //**** End Email To Cadnaukri Team****//



                	//****Email To Candidate****//

                    // $this->email->from('no-reply@cadnaukri.com','Cadnaukri.com');
                    // $this->email->to($email);
                    // $this->email->cc('admin@cadnaukri.com');
                    // $this->email->bcc('admin@cadnaukri.com');
                
                    // $this->email->subject("Registered Successfully");
                    // $this->email->message("Hello ".$name."\n\n"."Your Registration Completed Successfully");
                
                    // $this->email->send();





                    $this->load->library('email');
    				$this->email->set_mailtype("html");

					$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
			        $this->email->to($email);
					$this->email->subject("Registered Successfully");


			        $this->email->message("
			        	
		        	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


					Congratulations ".$name."
					<br />
					<br />

					It is always a pleasure to have you on-board with CADnaukri.com | India's First Ever Job Portal For Design Industry.
						
					Upload your CV now and complete your profile to get the most out of CADnaukri. Survey says that 100% profile completeness gets maximum response from recruiters.
					<br /><br />
					<a href='http://cadnaukri.com/signup/registration_successfully'><button class='btn btn-primary' style='background-color:#90EE90;'>Click Here To Sign In</button></a>
					<br /><br />
					Best wishes,
					<br />
					<br />
					Team CADnaukri.com
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

                	//****End Email To Candidate****//

                    redirect(base_url()."signup/registration_successfully");
                }
                else
                {
                    redirect(base_url()."signup/password_set_failed");
                }
            }
            $this->data['subview'] ='set_password';
            $this->load->view('_layout_home',$this->data);
        }
        else
        {
            redirect(base_url()."signup/link_expired");
        }

    }
    public function link_expired()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function registration_successfully()
    {
        $this->session->set_flashdata('success', 'Password Has Been Set Successfully');
        $this->data['subview'] ='log_in_now';
        $this->load->view('_layout_home',$this->data);
    }
    public function password_set_failed()
    {
        $this->session->set_flashdata('error', 'Password Not Set');
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function test()
    {
        $this->data['subview'] ='set_password';
        $this->load->view('_layout_home',$this->data);
    }
    public function permission()
    {
        $this->data['subview'] ='permission';
        $this->load->view('_layout_home',$this->data);
    }
    public function allow_sign_up()
    {
        $this->Sign_up_m->allow_sign_up();
        $this->data['subview'] ='permission';
        $this->load->view('_layout_home',$this->data);
    }
    public function stop_sign_up()
    {
        $this->Sign_up_m->stop_sign_up();
        $this->data['subview'] ='permission';
        $this->load->view('_layout_home',$this->data);
    }

    // ********   EMAiL MODIFIED  ********//

    public function emailtest()
    {
    	$this->load->library('email');
    	$this->email->set_mailtype("html");

		$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
        $this->email->to('cadtestmymail@gmail.com');
		$this->email->subject("New User");


        $this->email->message("
        	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
			<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
			<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
			<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
			<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


			Congratulations Name
			<br />
			<br />

			It is always a pleasure to have you on-board with CADnaukri.com | India's First Ever Job Portal For Design Industry.
				
			Upload your CV now and complete your profile to get the most out of CADnaukri. Survey says that 100% profile completeness gets maximum response from recruiters.
			<br /><br />
			Sign in now: <a href=''><button class='btn btn-primary' style='background-color:#90EE90;'>Sign In</button></a>
			<br /><br />
			Best wishes,
			<br />
			<br />
			Team CADnaukri.com
			
			<br />
			<br />
			Follow Us On

			<div>
        		<h5><a href='https://www.facebook.com/CADnaukri'>Facebook</a> 
				<a href='https://twitter.com/cadnaukri'>Twitter</a></h5>
        	</div>
        	<div align='right'>
				<a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:10%;width:20%;'></a>
			</div>

        	 ");
    
        $this->email->send();
    }

    // ********  END EMAiL MODIFIED  ********//


    // public function decrypt_pass()
    // {
    //     $this->load->library('encrypt');
    //     $key = 'secret-key-in-config';
    //     $decrypted_string = $this->encrypt->decode($encrypted_password, $key);
    //     $data['decrpyt']=$this->Sign_up_m->decrypt_pass();
    //     $this->load->view('decrypt_pass',$data);
    // }

    public function get_job()
    {
        $this->load->view('get_mail');
        if($_POST)
        {
            $company=$_POST['company'];
            $this->data['job']=$this->Sign_up_m->get_job($company);
            $this->load->view('view_job',$this->data);
        }
    }
    public function get_candidate()
    {
        $job_id=$this->uri->segment(3);
        //echo $job_id;exit();
        $this->data['cand']=$this->Sign_up_m->get_candidate($job_id);
        $this->load->view('get_candidate',$this->data);
    }


    public function testmail()
    {
        $emp_name=rand(10,1000);
        $job_name=20;
        $cand_name=30;
        $data=array(
            "emp_name"=>$emp_name,
            "job_name"=>$job_name,
            "cand_name"=>$cand_name
            );
        $result=$this->Sign_up_m->delaytest($data);
        if($result == true)
        {
            $temptest_id=$this->Sign_up_m->get_temp_id($emp_name);
            echo "Data Inserted";
            echo "<br />";
            $rand_number=rand(10,20);
            sleep($rand_number);
            $results=$this->Sign_up_m->get_temp_detail($temptest_id);
            
            foreach ($results as $value) 
            {
                // echo $value->emp_name;
                // exit();

                $this->load->library('email');
                $this->email->set_mailtype("html");

                $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
                $this->email->to('cadtestmymail@gmail.com');
                $this->email->subject("New Candidate Applied");

                $this->email->message("
                    
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
                <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
                <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


                Hi ".$value->emp_name."
                <br />
                <br />
                Your job title [".$value->job_name."] had received a new application from ".$value->cand_name."
                <br /><br />
                <a href='http://www.cadnaukri.com/employer/login'>Login here</a> to check the application.
                <br /><br />
                Regards,
                <br />
                <br />
                Team CADnaukri.com
                <br />
                <br />
                <div >
                    <a href='www.cadnaukri.com'><img src='http://cadnaukri.com/assets/images/logo.png' alt='Cadnaukri.com' style='height:15%;width:25%;'></a>
                </div>
                <br />
                <br />
                <b>NB: If you have any complaints / suggestions regarding our service, we would love to hear them. Please write to us here feedback@cadnaukri.com</b>
                <br />
                <br />
                Follow Us On
                <br />
                <br />
                <div>
                    <a href='https://www.facebook.com/CADnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
                    <a href='https://twitter.com/cadnaukri'><img style='height:4%;width:4%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
                </div>
                

                ");
                $this->email->send();
            
           
                $delete=$this->Sign_up_m->delete_temp_id($temptest_id);
                if($delete == true)
                {
                    echo "Temp Data Removed";
                    echo "<br />";
                    echo "Redirecting....";
                    echo "<br />";
                    echo "Complete";
                }
                else
                {
                    echo "Not Deleted";
                    exit();
                }
            }

            
        }
        else
        {
            echo "Data Insert Failed";
            exit();
        }
    }
    public function testcron()
    {
        $this->load->library('email');
        $this->email->set_mailtype("html");

        $this->email->from('no-reply@cadnaukri.com','CRon | Test');
        $this->email->to('cadtestmymail@gmail.com');
        $this->email->subject("Cron Test");

        $this->email->message("Cron Test");
        $this->email->send();
    }
    public function shootmail()
    {
        $this->load->library('email');
        $this->email->from('no-reply@softcadinfotech.in', 'Softcad Infotech');
        $this->email->to('cadtestmymail@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        $this->email->subject('Test');
        $this->email->message('Hi');

        $this->email->send();
        
    }



    public function requestmodify()
    {
        $this->load->library('email');

            $this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to('trupti@softcadinfotech.in');
            $this->email->bcc('cadtestmymail@gmail.com');
            $this->email->subject("Request Modification");

            
            $this->email->message("
                
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


            <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
            <table style='width: 100%;'>
              <tr>
                <td></td>
                <td bgcolor='#FFFFFF'>
                  <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                    <table style='width: 100%;background: #f0f1fa ;'>
                      <tr>
                        <td></td>
                        <td>
                          <div>
                            <table width='100%'>
                              <tr>
                                <td rowspan='2' style='text-align:center;padding:10px;'>
                                  <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                    
                                    <span style='color:orange;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                    'Social Login'<span></span></span></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </table>
                    <table style='padding: 10px;font-size:14px; width:100%;'>
                        <tr>
                            <td style='padding:10px;font-size:14px; width:100%;'>
                                <p>Hi </p>
                                <p style=''>
                                    <table width='100%'>
                                  <tr>
                            <td rowspan='2' style='text-align:left;padding:0px;height:40%;'>
                              
                            </td>
                        </tr>
                    </table>
                                <div><b>Job Posting Guidelines</b></div>
                                <br >
                               <span style='font-size:12px;'> Please follow the CADnaukri job posting guidelines and make the most exhibiting advertisement through our exclusive services at industry’s best ever pricing. 
                                <br /> 
                                We suggest you to develop the content of the advertisement in a very consistent manner that matches the optimal standards of CADnaukri’s ideal practices specified for recruiters. Please note that the following is a guide to make your job posts look better 
                                and consistent in terms of industry standards only. </span>
                                <br />
                                <br />
                                <h4>Job Titles and Descriptions <br /></h4>
                                <br />
                                <span style=''>
                                ● <b>No offensive content.</b> Due diligence is necessary while creating a job post.Offensive or inappropriate content shall be out-rightly rejected without a second chance for modification. 
                                <br />
                                <br />
                                ● No clickbait in job titles or in description. Job titles should be the actual name of the particular job opening only, with no other information allowed such as LOCATIONS or EMAIL IDs or WEBLINKS, etc. Job descriptions must contain only details of exact roles & responsibilities for the candidates with their exact skills & expertise. 
                                <br />
                                <br />
                                ● Salary/Compensation. There should be clear information of the salary or 
                                cost to company in Indian Rupees per annum. Negotiable salary advertisements do not attract good candidates. Plus the compensation must match that of the industry and the location of the job. 
                                <br />
                                <br />
                                ● Skills. Use the field provided to list all the key skills like CATIA, CREO, HYPERMESH, etc. for a better visibility and search performance of the job advertisement. 
                                <br />
                                <br />
                                ● Job Location. Exact location of job is required. No address details should be mentioned. Use the location field to specify the same. 
                                <br />
                                <br />
                                ● Eligibility. A perfectly detailed advertisement is clear for the candidates to apply. Jargon information wastes everyone’s time including our databases. Therefore, do  not forget to fill this field with exact qualification necessary to apply for the job. 
                                <br />
                                <br />
                                ● Experience. Do not leave the field marked experience empty as most job 
                                    seekers prefer job opportunities that exactly match their own experience levels having a better salary package. 
                                <br />
                                <br />
                                ● Don’t copy used job contents. CADnaukri allows only uniquely prepared 
                                job contents as it always performs better on popular search engines. 
                                <br />
                                <br />
                                ● Don’t post on behalf of others. Job posts other than that of yours are 
                                rejected by CADnaukri. Advertisements by only authorized representative(s) of the company are allowed to post their vacancies. If any post found to be ineligible shall be removed from the listing without notice. 
                                <br />
                                <br />
                                ● Post only a real job. CADnaukri allows only jobs that are real. Non-job 
                                content–including spam, scams and other offers–will not be shown to job seekers. 
                                <br />
                                <br />
                                ● Avoid posting of same jobs repeatedly. CADnaukri job portal uses 
                                algorithms as well as human intellect to cross-check freshness of job post, most relevant content in response to searches. Companies that attempt to exploit these principles by reposting roles within a short timeframe or posting roles in more locations than the job is offered for increased visibility will be removed from the listing without prior notice.  
                                </span> 
                                <br />
                                <br />
                                <span style=''>The Do’s and Don’ts</span> 
                                <br />
                                <br />
                                <span style=''>
                                <br />
                                ● Use CADnaukri to fill a genuine job opening. Each posting should 
                                represent the most currently available job in your company. 
                                <br />
                                ● Non-discriminative posts. The advertisements must be made available to 
                                only the eligible & meritorious candidates irrespective of their race, gender and sexual orientation. 
                                <br />
                                ● Clarity in compensation. Advertisements must indicate the actual 
                                cost-to-company for a candidate on an annual basis. There should not be any charges for the candidates to either apply or attend any interview. 
                                <br />
                                ● Follow one step application process. There should not be any tedious 
                                process of application for the job-seekers. Once their application through CADnaukri gets shortlisted, they may be called for interviews. 
                                <br />
                                ● Complete Privacy. CADnaukri believes in cent percent privacy of the 
                                recruiters as well as the candidates. We urge not to disclose this to any 3rd party for eventual misuse. 
                                 <br />
                                ● Tell the truth. Provide the true details of your job, including its location, duties and whether the job is `being offered by the hiring company or by a recruiter on the company’s behalf. 
                                 <br />
                               <span style='' Forbidden posts </span>
                               <span style=''>
                               <br />
                                ● Career fairs 
                                <br />
                                ● Franchise or training opportunities 
                                <br />
                                ● Multi-level marketing positions 
                                <br />
                                <br />
                                CADnaukri is very sensitive towards the use of its platform for posting of job advertisements as per its standards from the hiring company. Listings that prove misleading, compromise the job seeker experience or those which we are not convinced represent a “real” job may be made only selectively visible or removed from organic search results altogether. 
                                 <br />
                                 </span>
                                 <br />
                                 <br />
                               <span style=''> Important: </span>
                               <br />
                               <br />
                               <span style=''>
                               CADnaukri may reject or remove any job and may disable any 
                                company’s account, for any or no reason. We cannot give every reason why a 
                                job or a company may be removed, and we always retain the right to undertake such the removal of any job, organic or sponsored, if we feel it is in our interest or our users’ interest.  
                                 
                                </span>


                            </p>
                            <p>If you have any questions about these guidelines and how they affect your recruiting 
                                needs, please write to HR@CADNAUKRI.COM </p>
                            <p> </p>
                            <p>Thanks for choosing CADnaukri</p>
                            <p>CADnaukri Team.</p>
                         </td>
                        </tr>
                        <tr>
                        <td>
                        <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                            © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>cadnaukri.com</a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
          
            

                 ");

            $this->email->send();
    }

    public function googleSignUp()
    {
        if($_POST)
        {
            //echo json_encode($_POST);exit();
            $postdata= explode(' ',$_POST['name']);
            $name=ucfirst($postdata[0]);

            $string=$name.'@CADnaukri2018';
            $password=md5($string);
            $data=array(
                    "name"=>$_POST['name'],
                    "email"=>$_POST['email'],
                    "mobile"=>$_POST['mobile'],
                    "googleUserId"=>$_POST['user_id'],
                    "password"=>$password,
                    "created"=>date('Y-m-d H:i:s')
                        );
            $result=$this->Sign_up_m->sign_up($data);
            if($result)
            {
                echo json_encode('Success');
            }
            else
            {
                echo json_encode('Failed');
            }
        }
        //echo 'hello';
        
    }


     public function cron()
    {
        $this->load->library('email');

            //$this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to('trupti@softcadinfotech.in');
            $this->email->bcc('cadtestmymail@gmail.com');
            $this->email->subject('Request Modification');

            
            $this->email->message('Hi');
    }
    public function contestthis()
    {
        $this->load->view('hackerearth');
    }

}
?>