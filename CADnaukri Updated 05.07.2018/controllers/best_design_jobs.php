<?php

/**
 * Description of Best_design_jobs
 *
 * @author Abhra
 */
class Best_design_jobs extends MY_Controller {
	//constructor function 
  function __construct()
   {
      parent::__construct();
	   $this->load->model('Skills_M');
		$this->load->model('Functional_area_M');
		$this->load->model('Industry_type_M');
		$this->load->model('Education_details_M');
		$this->load->model('Job_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Job_apply_M');
		$this->load->model('Candidate_M');
		$this->load->model('Employee_M');
		$this->load->model('Services_M');
		$this->load->model('City_M');
		$this->load->model('Intern_M');
		$this->load->model('Company_M');
		$this->load->model('News_event_M');	
		$this->load->model('Sponors_home_img_M');		
		$this->load->model('Sponors_M');		
		$this->load->model('Search_M');
		$this->load->model('Recuiter_details_M');	
		$this->load->library('form_validation');
     	$this->load->helper('form');
     	$this->load->model('View_M');
     	$this->load->model('SuperAdmin_M');
     	$this->load->helper('url');
     	// $urls=array('index','aboutus','terms_and_condition','disclaimer','privacy_policy','for_job_seeker','back_ground_check','search','cad_cam_cfd_plm','signle_search','news_subscription','cooming_soon','test_sms','send_sms','save_job_alert','alert_saved','alert_not_saved','CAE-Jobs','CFD-Jobs','BIM-Jobs','PLM-Jobs','CAD-Sales_Jobs','CAD_Developer_Jobs','featured_job','cron_update_per_day_visitors','Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Bhubaneswar','Mumbai','Delhi','Surat','Rest_of_india','cron_update_new_fake_registrations','daily_poll','view_daily_poll','cron_manage_daily_polls','contact_us','cron_permission_for_job_post','cron_sorting_city_mathed_jobs','test_landing_page');
     	// if(in_array($this->uri->segment(2),$urls) && in_array($this->uri->segment(3),$urls))
     	// {
     	// 	//Do Nothing
     	// }
     	// else
     	// {
     	// 	redirect(base_url());
     	// }

    }

   public  function index($city=NULL)
   {

// $var=current_url();
// echo $var;
   	    if($this->session->userdata('search_sql'))
		{
			$this->session->unset_userdata('search_sql');
		}

		$ip_address=$_SERVER['REMOTE_ADDR'];
    	$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
      	$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
		$google_city = $addrDetailsArr['geoplugin_city'];
		// echo $google_city;
		$top_cities=array('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneshwar');

		if($this->uri->segment(1) != "")
		{
			$city=$this->uri->segment(1);
			//echo $google_city;
		}
		else if(in_array($google_city,$top_cities))
		{
			if($google_city == 'Bhubaneshwar')
			{
				$city='Bhubaneswar';
			}
			else
			{
				$city=$google_city;
			}
		}
		else
		{
			$city='Rest-of-india';
		}
		// else if($city == NULL)
		// {
		// 	$city='Pune';
		// }
		$this->Search_M->add_new_visitor();

	   	$this->data['skills']=$this->Skills_M->skill_autocomplete();
		$this->data['functional_area']=$this->Functional_area_M->get();
		$this->data['jobs']=$this->Job_M->get();
		$this->data['featured_jobs']=$this->Job_M->get_active_jobs('Y');
		$this->data['citis']=$this->City_M->location_autocomplete();
		$this->data['industry_type']=$this->Industry_type_M->get();
		$this->data['home_images']=$this->Sponors_home_img_M->get_active_img();
		$this->data['recuiter_images']=$this->Recuiter_details_M->get();
		$this->data['news_events']=$this->News_event_M->get_by(array('status'=>'Y'));
		$this->data['cad_cam_schools']=$this->Sponors_M->get();

		$this->data['per_day_visitors']=$this->Search_M->get_per_day_visitors();
		$this->data['total_candidate_registerd']=$this->Candidate_M->get_total_candidates();
		$this->data['total_employee_registerd']=$this->Employee_M->get_total_employees();
		$this->data['total_jobs']=$this->Job_M->get_total_jobs();
		$this->data['active_candidates']=$this->Candidate_M->get_active_candidates();
		$this->data['selected_city']=$city;
		$this->data['fake_random_registrations']=$this->Search_M->get_random_fake_registrations();
		$this->data['new_fake_random_registrations']=$this->Search_M->get_new_fake_registrations();
		
		//$this->data['daliy_poll']='daily_poll_new';
		// $this->data['subview']='public/index';
		// $this->load->view('_layout_home',$this->data);



		$this->load->view('new_homepage',$this->data);
		
		//redirect(base_url()."best_design_jobs/Pune");
   }	

   public  function aboutus()
   {
      
        $this->data['subview']='public/aboutUs';
		$this->load->view('_layout_home',$this->data);
   }
     public  function terms_and_condition()
   {
      
        $this->data['subview']='public/terms_and_condition';
		$this->load->view('_layout_home',$this->data);
   }
   public  function contactus()
   {
      
        $this->data['subview']='public/contact_us';
		$this->load->view('_layout_home',$this->data);
   }
   public  function disclaimer()
   {
      
        $this->data['subview']='public/disclaimer';
		$this->load->view('_layout_home',$this->data);
   }
   public  function privacy_policy()
   {
      
        $this->data['subview']='public/privacy_policy';
		$this->load->view('_layout_home',$this->data);
   }
   public function for_job_seeker()
   {
   	  $this->data['subview']='public/for_job_seeker';
		$this->load->view('_layout_home',$this->data);
   
   }
   public function for_corporates_recruiters()
   {
   	  $this->data['subview']='public/for_corporates_recruiters';
	  $this->load->view('_layout_home',$this->data);
   
   }
   public function back_ground_check()
   {
      $this->data['subview']='public/back_ground_check';
	  $this->load->view('_layout_home',$this->data);
   }
   public function search($job_tags=NULL)
   {
   	// #### DYNAMIC BANNER ##### //
   		// echo '<script>
   		// 		parent.jQuery.colorbox.close();
   		// 		window.top.location.href = "http://www.facebook.com";
   		// 		</script>';
   		 
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

		// #### END DYNAMIC BANNER ##### //
	 //echo '<pre>';print_r($this->session->all_userdata());exit();
	 $sql="SELECT job.id as job_id,`companyId`,`jobtitle`,`designation` ,`yop`,`description` , `qualification`,`location`,job.created,job.lastdate";
	 if($job_tags !=NULL)
	 {
	 	$job_tags=rawurldecode($job_tags);
	 	$this->data['title']= ucfirst($job_tags);
	 	$new_sql="SELECT name as tag_name  FROM `job_tag` WHERE `job_url` = '$job_tags'";
	 	$j=$this->db->query($new_sql)->row();
	 	$tage_name=$job_tags;
	 	if(count($j) > 0)
	 	{
			 $tage_name=$j->tag_name;
		}
	  	$sql .=" FROM `job` ,`job_skills` ,job_tag ";
	 	$sql .="  WHERE job.id=job_skills.job_id and  job_tag.job_id=job.id";
	 	$sql .="  and job_tag.name='$tage_name'";
	 }
	 else
	 {
	 	$this->data['title']= "Job search results";
	 	$sql .="  FROM `job` ,`job_skills` ";
	 	$sql .="  WHERE job.id=job_skills.job_id ";
	 }
	        
       
	 if($_POST)
	 {
	 	$selected_skill=$this->input->post('selected_skill');
	 	$experience=$this->input->post('experience');
	 	$selected_location=$this->input->post('selected_location');
	 	$location=$this->input->post('location');
	 	//	echo $location;
	 	if($selected_skill != '')
	 	{
			$sql .= "and job_skills.skill_id=$selected_skill";
		}
		if($experience != '')
	 	{
			switch($experience)
			{
				case 0:
					$sql .= " and yop = 0";
					break;
				case 1:
					$sql .= " and yop  BETWEEN 0 AND 1";
					break;
				case 2:
					$sql .= " and yop  BETWEEN 1 AND 2";
					break;
				case 3:
						$sql .= " and yop  BETWEEN 2 AND 5";
					break;
				case 5:
					$sql .= " and yop  BETWEEN 5 AND 7";
					break;
				case 7:
					$sql .= " and yop  > 7";
					break;
				default:
					$sql .= " ";
					break;
			}
		}
		if($selected_location != '')
		{
			$sql .=" AND job.location= '$selected_location'";
		}
		else if($location !='')
		{
			$sql .=" AND job.location LIKE '%$location%'";
		}
		
	 	
	 }
	 $sql .=" GROUP BY job.id ORDER BY job.modified DESC;";
	   if($this->session->userdata('search_sql'))
	   {
	   	  $sql=$this->session->userdata('search_sql');
	   }
		$query=$this->db->query($sql);
		$this->data['search_result']= $search_result=$query->result();
	// echo $this->db->last_query();exit();
	// echo '<pre>';print_r($this->data['search_result']);
	// echo $sql;exit();
	// $this->session->set_userdata($data);
	   if($this->session->userdata('search_sql'))
		{
			$this->session->unset_userdata('search_sql');
		}
	   	$this->session->set_userdata('search_sql',$sql);
        $this->data['subview']='public/search';
		$this->load->view('_layout_home',$this->data);
   }
   public function cad_cam_cfd_plm($city=null)
   {
   		// #### DYNAMIC BANNER ##### //
   		// echo '<script>
   		// 		parent.jQuery.colorbox.close();
   		// 		window.top.location.href = "http://www.facebook.com";
   		// 		</script>';
   		 
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

		// #### END DYNAMIC BANNER ##### //

   		$city=$this->uri->segment(2);
   		//var_dump($city);exit();
   		$this->data['city_wise_job']=$this->Job_M->search_by_city($city);
   		$this->data['subview']='public/search_by_city';
		$this->load->view('_layout_home',$this->data);
   }
   public function signle_search($id=1)
   {
   		// #### DYNAMIC BANNER ##### //
   		// $uri=explode('=',uri_string());
   		// echo $uri[1];
   		if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        	$candidate_id=$this->session->userdata('candidate_id');
        	$skill_name=$this->Candidate_M->get_previous_searched_skill($candidate_id);
        	if($skill_name != NULL && $skill_name != '')
        	{
        		$this->data['right_side_jobs']=$this->Job_M->get_previous_searched_job_by_skill($skill_name);
        	}
        	else
        	{
        		$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        	}
        	

        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        	$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        }
        else
        {
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        	$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        }
        $this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		// #### END DYNAMIC BANNER ##### //
	   	$this->data['id']=$id;
	   	$view=$this->Job_M->countview($id);
	   	if(isset($_POST['login']))
	   	{
	   		$rules = $this->Candidate_M->rule_login;
		    $this->form_validation->set_rules($rules);
			if($this->form_validation->run() == TRUE)
			{
				if($this->Candidate_M->login() == TRUE)
				{

					$candidate_id=$this->session->userdata('candidate_id');
					$result=$this->Candidate_M->check_cv_exist($candidate_id);
					if($result == true)
					{
						//var_dump($id);exit();
						$data['user_id']=$this->session->userdata('candidate_id');
				   		$data['job_id']=$id;
				   		$data['created']=date('Y-m-d H:i:s');
				   		$this->Job_apply_M->save($data);

				   		$candidate_id=$this->session->userdata('candidate_id');
				   		$job_id=$id;
				   		$job_name=$this->Job_apply_M->get_job_name($job_id);
				   		//var_dump($job_name);exit();
						$save_last_applied_job=$this->Candidate_M->save_last_applied_job($job_name,$candidate_id);
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




						$this->session->set_flashdata('success','Job applied successfully');
						redirect(base_url("best_design_jobs/signle_search/$id"),'refresh');
					}
					else
					{
					  	$this->session->set_flashdata('job_appply_failed','Please upload your CV before applying job');
		 				redirect('candidate/dashboard','refresh');	
					}
				}
				else
				{
					$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
					redirect(base_url("best_design_jobs/signle_search/$id"),'refresh');
				}
			}
	   		
	   		
			//print_r($_POST);
		}
		if(isset($_POST['apply_job']))
	   	{
	   		$data['user_id']=$this->input->post('candidate_id');
	   		$data['job_id']=$this->input->post('job_id');
	   		$candidate_id=$this->input->post('candidate_id');
	   		$job_id=$this->input->post('job_id');
	   		//var_dump($this->input->post('candidate_id'));exit();
	   		$job_name=$this->Job_apply_M->get_job_name($job_id);
			//var_dump($job_name);exit();
			$save_last_applied_job=$this->Candidate_M->save_last_applied_job($job_name,$candidate_id);
	   		$data['created']=date('Y-m-d H:i:s');
	   		$this->Job_apply_M->save($data);
	   		$candidate_id=$this->input->post('candidate_id');
			$result=$this->Candidate_M->check_cv_exist($candidate_id);
			if($result == true)
			{

		   		$job_id=$this->input->post('job_id');
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
		        $this->email->to("applicationrcv@gmail.com");
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


				$this->session->set_flashdata('success','You have successfully applied to this job');
				redirect(base_url("best_design_jobs/signle_search/$id"),'refresh');
			}
			else
			{
				$this->session->set_flashdata('job_appply_failed','Please upload your CV before applying job');
		 		redirect('candidate/dashboard','refresh');
			}
			
		}
		if(isset($_POST['save_job']))
	   	{
	   		$data['user_id']=$this->input->post('candidate_id');
	   		$data['job_id']=$this->input->post('job_id');
	   		$data['created']=date('Y-m-d H:i:s');
	   		 $this->db->insert('job_favourite',$data); 
			$this->session->set_flashdata('success','Job saved as favourite');
			redirect(base_url("best_design_jobs/signle_search/$id"),'refresh');
			
		}
   		
	   	  $this->data['job']=$this->Job_M->get($id,TRUE);
	   	  //$this->data['job_skills']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	   	  $this->data['job_skills']=$this->Job_skill_M->get_skills_name($id);
	   	  $this->data['job_tags']=$this->Job_M->get_tags_name($id);
	   //	 echo '<pre>';print_r($this->data['job_skills']);exit();
	   		//$this->data['subview']='public/signle_search';


			$this->load->view('public/view_job_details_new',$this->data);

			// $this->data['subview']='public/view_job_details_new';
			// $this->load->view('_layout_home',$this->data);
   }
   public function news_subscription()
   {
   	//  print_r($_REQUEST);
   	    $_email=$_REQUEST['email'];
   	    $res=$this->db->insert('news_subscription', array('email'=>$_email,'created'=>date('Y-m-d H:i:s')));
   	    if($res):
   	    $_array=array('message','Thank you for connecting with us');
   	    echo json_encode($_array);
   	    endif; 

   	   // echo $_email;
   	   
   }
   public function cooming_soon()
   {
   	
   	  $this->data['subview']='public/cooming_soon';
		$this->load->view('_layout_home',$this->data);
   }
   public function  test_sms()
   {
    	$response=$this->send_sms('8895643575','test from cadnaukri');
    	//$response=$this->send_sms('8895643575,985432671,8992576477','test from cadnaukri');//For multiple number
    	print_r($response);
   	
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

	public function save_job_alert()
	{
		//echo "Working";exit();
		//var_dump($_POST);exit();
		$email=$_POST['email'];
		$sql="SELECT email FROM job_alerts WHERE email='$email';";
		$query=$this->db->query($sql);
		if($query->num_rows > 0)
		{
			$this->session->set_flashdata('email_exists', 'You\'re already subscribed');
			redirect(base_url()."Rest-of-india");
		}
		else
		{
			$data=array(

				"name"=>$this->input->post("name"),
				"email"=>$this->input->post("email"),
				"mobile"=>$this->input->post("mobile"),
				"industry_type"=>$this->input->post("industry_type"),
				"location"=>$this->input->post("location"),
				"created"=>date('Y-m-d H:i:s')

			);
			$saved=$this->Job_M->save_job_alert($data);
			if($saved == true)
			{
				$this->session->set_flashdata('alert_saved', 'Job Alert Saved');
				redirect(base_url()."Rest-of-india");
			}
			else
			{
				$this->session->set_flashdata('alert_not_saved', 'Job Alert Not Saved');
				redirect(base_url()."Rest-of-india");
			}
		}

	}
	public function CAD_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		//var_dump($_POST);exit();
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		//echo $selected_city."Working";
		$this->data['title']="CAD Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_cad_jobs($selected_city);
		}
		
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function CAE_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="CAE Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cae_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cae_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cae_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cae_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_cae_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function CFD_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="CFD Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cfd_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cfd_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cfd_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cfd_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_cfd_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function BIM_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="BIM Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_bim_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_bim_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_bim_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_bim_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_bim_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function PLM_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="PLM Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_plm_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_plm_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_plm_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_plm_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_plm_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function CAD_Sales_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="CAD Sales Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_sales_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_sales_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_sales_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_sales_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_cad_sales_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function CAD_Developer_Jobs($selected_city)
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		//echo "hello";
		$selected_city=$this->uri->segment(2);
		if($selected_city == 'Rest-of-india')
		{
			$selected_city='Rest_of_india';
		}
		$this->data['title']="CAD Developer Jobs";
		if(isset($_POST['exp_high_to_low']))
		{
			$sort="exp_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_developer_jobs($selected_city,$sort);
		}
		else if(isset($_POST['exp_low_to_high']))
		{
			$sort="exp_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_developer_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_high_to_low']))
		{
			$sort="sal_DESC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_developer_jobs($selected_city,$sort);
		}
		else if(isset($_POST['sal_low_to_high']))
		{
			$sort="sal_ASC";
			$this->data['tag_wise_job']=$this->Job_M->get_cad_developer_jobs($selected_city,$sort);
		}
		else
		{
			$this->data['tag_wise_job']=$this->Job_M->get_cad_developer_jobs($selected_city);
		}
   		$this->data['subview']='public/search_by_tag';
		$this->load->view('_layout_home',$this->data);
	}
	public function featured_job()
	{
		$this->data['featured_jobs']=$this->Job_M->get_active_jobs('Y');
		$this->data['subview']='public/featured_job';
		$this->load->view('_layout_home',$this->data);
	}
	public function cron_update_per_day_visitors()
	{
		// curl --silent http://www.cadnaukri.com/test/best_design_jobs/cron_update_per_day_visitors  [CRON URL CPANEL]
		$this->Search_M->update_daily_visitor();
		$random_number=rand(13,23);
		$this->Search_M->update_random_daily_candidates($random_number);

		// This function using for checking and activate service after payment

			$url="https://softcadinfotech.in/payment/transaction_api";
			$data = file_get_contents($url); // put the contents of the file into a variable
			$transactions = json_decode($data);

		// End function using for checking and activate service after payment

	}
	public function Pune()
	{
		$city='Pune';
		$this->data['title']="Jobs In Pune";
		$this->index($city);
	}
	public function Chennai()
	{
		$city='Chennai';
		$this->data['title']="Jobs In Chennai";
		$this->index($city);
	}
	public function Hyderabad()
	{
		$city='Hyderabad';
		$this->data['title']="Jobs In Hyderabad";
		$this->index($city);
	}
	public function Bangalore()
	{
		$city='Bangalore';
		$this->data['title']="Jobs In Bangalore";
		$this->index($city);
	}
	public function Ahmedabad()
	{
		$city='Ahmedabad';
		$this->data['title']="Jobs In Ahmedabad";
		$this->index($city);
	}
	public function Bhubaneswar()
	{
		$city='Bhubaneswar';
		$this->data['title']="Jobs In Bhubaneswar";
		$this->index($city);
	}
	public function Mumbai()
	{
		$city='Mumbai';
		$this->data['title']="Jobs In Mumbai";
		$this->index($city);
	}
	public function Delhi()
	{
		$city='Delhi';
		$this->data['title']="Jobs In Delhi";
		$this->index($city);
	}
	public function Indore()
	{
		$city='Indore';
		$this->data['title']="Jobs In Indore";
		$this->index($city);
	}
	public function Surat()
	{
		$city='Surat';
		$this->data['title']="Jobs In Surat";
		$this->index($city);
	}
	public function Rest_of_india()
	{
		$city='Rest_of_india';
		$this->data['title']="Jobs In India";
		$this->index($city);
	}
	public function cron_update_new_fake_registrations()
	{
		$random_number=rand(3,19);
		$this->Search_M->update_new_fake_registrations($random_number);
	}
	public function daily_poll()
	{
		$this->load->view('daily_poll');
	}
	public function view_daily_poll()
	{
		$this->load->view('view_daily_poll');
	}
	public function selected_daily_poll_ans()
	{
		$question_id=$this->uri->segment(3);
		$ans_id=$this->uri->segment(4);
		$this->Search_M->update_ans($question_id,$ans_id);
		$this->load->view('daily_poll');
	}
	public function cron_manage_daily_polls()
	{
		$pending_question_id=$this->Search_M->get_pending_question_id();
		$active_question_id=$this->Search_M->get_active_question_id();
		$this->Search_M->deactivate_question_id($active_question_id);
		$this->Search_M->activate_question_id($pending_question_id);

		$date=date('Y-m-d');
		$sql="UPDATE daily_poll SET posted_date= '$date' WHERE question_id='$pending_question_id';";
		$query=$this->db->query($sql);
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function cron_permission_for_job_post()
	{
		$this->Job_M->update_obsolete_job_to_active();
	}
	public function cron_sorting_city_mathed_jobs()
	{
		$cron_num=rand(0,4);
		$this->Job_M->update_cron_num($cron_num);
	}
	
	public function test_landing_page($id=310)
	{
		// #### DYNAMIC BANNER ##### //
   		if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        	$candidate_id=$this->session->userdata('candidate_id');
        	$skill_name=$this->Candidate_M->get_previous_searched_skill($candidate_id);
        	if($skill_name != NULL && $skill_name != '')
        	{
        		$this->data['right_side_jobs']=$this->Job_M->get_previous_searched_job_by_skill($skill_name);
        	}
        	else
        	{
        		$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        	}
        	

        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        	$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        }
        else
        {
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        	$this->data['right_side_jobs']=$this->Job_M->get_all_jobs();
        }
        $this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

	   	$this->data['job']=$this->Job_M->get($id,TRUE);
	   	//$this->data['job_skills']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	   	$this->data['job_skills']=$this->Job_skill_M->get_skills_name($id);
	   	$this->data['job_tags']=$this->Job_M->get_tags_name($id);

			$this->data['subview']='public/view_job_details_new';
			$this->load->view('_layout_home',$this->data);
   
	}
	public function development_is_going_on()
	{
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
		//$banner_id=$this->View_M->select_a_random_banner();
		//echo $banner_id;
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
		$data['subview']='development';
		$this->load->view('_layout_home',$data);
	}
	public function tickets()
	{
		if($this->Candidate_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        	$this->View_M->allow_banner($banner_id);
			$this->View_M->disallow_banner($banner_id);
			$candidate_id=$this->session->userdata('candidate_id');
			$data['is_active']='Candidate';
			$from='Candidate';
			$data['session']='candidate';
			$data['userdata'] = array($this->session->userdata('name'),$this->session->userdata('email'),$this->session->userdata('mobile'));
			//echo $userdata;
			$data['subview']='public/dashboard_enquiry';
        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_employer();
        	$this->View_M->allow_banner($banner_id);
			$this->View_M->disallow_banner($banner_id);
			$employer_id=$this->session->userdata('emp_id');
			$data['is_active']='Employer';
			$data['session']='employer';
			$data['userdata'] = array($this->session->userdata('name'),$this->session->userdata('email'),$this->session->userdata('mobile'));
			$from='Employer';
			$data['subview']='public/dashboard_enquiry';
        }
        else if($this->Intern_M->isLoggedin() == TRUE)
        {
        	$banner_id=$this->View_M->select_a_random_banner_candidate();
        	$this->View_M->allow_banner($banner_id);
			$this->View_M->disallow_banner($banner_id);
			$candidate_id=$this->session->userdata('intern_id');
			$data['is_active']='Intern';
			$from='Intern';
			$data['session']='internship';
			$data['userdata'] = array($this->session->userdata('name'),$this->session->userdata('email'),$this->session->userdata('phno'));
			//echo $userdata;
			$data['subview']='public/dashboard_enquiry';
        }

        else
        {
        	$banner_id=$this->View_M->select_a_random_banner_public();	
        	$this->View_M->allow_banner($banner_id);
			$this->View_M->disallow_banner($banner_id);
			$from='Public';
			$data['subview']='public/tickets';
        }
		$this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);

		if($_POST)
		{
			//var_dump($_POST);
			if(isset($_FILES["screenshot"]["name"])) 
		    {
		        
		        $config['upload_path']='query_screenshots/';
		        $config['allowed_types']='jpg|jpeg|png|gif';
		        $this->load->library('upload',$config);
		        if(!$this->upload->do_upload('screenshot'))
		        {
		          echo '<script type="text/javascript">alert("Unsupported Screenshot");</script>';
		          //echo $this->upload->display_errors();
		        }
		        else
		        {
		          $image=$this->upload->data();
		          $screenshot_name=$_FILES["screenshot"]["name"];
		        }
		    }
			$status="PENDING";
			$data=array(

				"query_date"=>date("Y-m-d H:i:s"),
				"related_to"=>$this->input->post("related_to"),
				"name"=>$this->input->post("name"),
				"mobile"=>$this->input->post("mobile"),
				"email"=>$this->input->post("email"),
				"comments"=>$this->input->post("comments"),
				"status"=>$status,
				"screenshot"=>$screenshot_name,
				"query_from"=>$from
				);
			$result=$this->View_M->save_tickets($data);
			if($result == true)
			{
				redirect(base_url()."Query-saved");
			}
			else
			{
				redirect(base_url()."Query-not-saved");
			}
		}
		
		$this->load->view('_layout_home',$data);
	}
	public function query_saved()
	{
		$this->tickets();
	}
	public function query_not_saved()
	{
		$this->tickets();
	}
	public function change_status_by_user()
	{
	    $status=$this->uri->segment(3);
	    $query_id=$this->uri->segment(4);
	    $result=$this->SuperAdmin_M->change_status_by_user($status,$query_id);
	    if($result == true)
	    {
	      redirect(base_url()."Queries/Re-Opened");
	    }
	    else
	    {
	      redirect(base_url()."Queries/Re-Open-Failed");
	    }
	}
	public function query_re_opened()
	{
		//$this->tickets();
		$data['subview']='public/re_open_query';
		$this->load->view('_layout_home',$data);
	}
	public function jobs_by_skill($skill=NULL,$city=NULL)
	{
		// echo $skill;
		// echo $city;
		$data['skill_wise_job']=$this->Job_M->get_jobs_by_skill($skill,$city);
		$data['subview']='public/search_by_skill';
		$this->load->view('_layout_home',$data);
	}

	public function submit_contest()
	{
		$this->load->view('hackerearth');
	}
	public function play_contest()
	{
		$data['subview']='test_new/first';
		$this->load->view('_layout_home',$data);
	}
	public function job_alert()
	{
		if($_POST)
		{
			$email=$_POST['email'];
			$rawsql="SELECT email FROM job_alerts WHERE email='$email';";
			$rawquery=$this->db->query($rawsql);

			if($rawquery->num_rows() > 0)
			{
				redirect(base_url()."best_design_jobs/email_exists");
			}
			else
			{


				$data=array(

					"name"=>$this->input->post("name"),
					"email"=>$this->input->post("email"),
					"mobile"=>$this->input->post("mobile"),
					"industry_type"=>$this->input->post("industry_type"),
					"location"=>$this->input->post("location"),
					"created"=>date('Y-m-d H:i:s')

				);
				$saved=$this->Job_M->save_job_alert($data);
				if($saved == true)
				{
					redirect(base_url()."best_design_jobs/job_alert_saved");
				}
				else
				{
					redirect(base_url()."best_design_jobs/job_alert_not_saved");
				}
			}
		}
		$sql="SELECT * FROM cities ORDER BY city_name ASC;";
		$query=$this->db->query($sql);
		$data['city_list']=$query->result();
		$data['skills']=$this->Skills_M->get();
		$data['industry_type']=$this->Industry_type_M->get();
		$data['subview']='job_alert';
		$this->load->view('_layout_home',$data);
		
	}
	public function job_alert_saved()
	{
		$this->job_alert();
	}
	public function job_alert_not_saved()
	{
		$this->job_alert();
	}
	public function email_exists()
	{
		$this->job_alert();
	}
	public  function homepage_test($city=NULL)
   {

// $var=current_url();
// echo $var;
   	    if($this->session->userdata('search_sql'))
		{
			$this->session->unset_userdata('search_sql');
		}

		$ip_address=$_SERVER['REMOTE_ADDR'];
    	$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
      	$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
		$google_city = $addrDetailsArr['geoplugin_city'];
		// echo $google_city;
		$top_cities=array('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneshwar');

		if($this->uri->segment(1) != "")
		{
			$city=$this->uri->segment(1);
			//echo $google_city;
		}
		else if(in_array($google_city,$top_cities))
		{
			if($google_city == 'Bhubaneshwar')
			{
				$city='Bhubaneswar';
			}
			else
			{
				$city=$google_city;
			}
		}
		else
		{
			$city='Rest-of-india';
		}
		// else if($city == NULL)
		// {
		// 	$city='Pune';
		// }
		$this->Search_M->add_new_visitor();

	   	$this->data['skills']=$this->Skills_M->skill_autocomplete();
		$this->data['functional_area']=$this->Functional_area_M->get();
		$this->data['jobs']=$this->Job_M->get();
		$this->data['featured_jobs']=$this->Job_M->get_active_jobs('Y');
		$this->data['citis']=$this->City_M->location_autocomplete();
		$this->data['industry_type']=$this->Industry_type_M->get();
		$this->data['home_images']=$this->Sponors_home_img_M->get_active_img();
		$this->data['recuiter_images']=$this->Recuiter_details_M->get();
		$this->data['news_events']=$this->News_event_M->get_by(array('status'=>'Y'));
		$this->data['cad_cam_schools']=$this->Sponors_M->get();

		$this->data['per_day_visitors']=$this->Search_M->get_per_day_visitors();
		$this->data['total_candidate_registerd']=$this->Candidate_M->get_total_candidates();
		$this->data['total_employee_registerd']=$this->Employee_M->get_total_employees();
		$this->data['total_jobs']=$this->Job_M->get_total_jobs();
		$this->data['active_candidates']=$this->Candidate_M->get_active_candidates();
		$this->data['selected_city']=$city;
		$this->data['fake_random_registrations']=$this->Search_M->get_random_fake_registrations();
		$this->data['new_fake_random_registrations']=$this->Search_M->get_new_fake_registrations();
		
		//$this->data['daliy_poll']='daily_poll_new';
		// $this->data['subview']='public/index';
		// $this->load->view('_layout_home',$this->data);



		$this->load->view('homepage_test_new',$this->data);
		
		//redirect(base_url()."best_design_jobs/Pune");
   }
   	public  function homepage_test_shanta($city=NULL)
   {

// $var=current_url();
// echo $var;
   	    if($this->session->userdata('search_sql'))
		{
			$this->session->unset_userdata('search_sql');
		}

		$ip_address=$_SERVER['REMOTE_ADDR'];
    	$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
      	$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
		$google_city = $addrDetailsArr['geoplugin_city'];
		// echo $google_city;
		$top_cities=array('Pune','Chennai','Hyderabad','Bangalore','Ahmedabad','Mumbai','Delhi','Indore','Surat','Bhubaneshwar');

		if($this->uri->segment(1) != "")
		{
			$city=$this->uri->segment(1);
			//echo $google_city;
		}
		else if(in_array($google_city,$top_cities))
		{
			if($google_city == 'Bhubaneshwar')
			{
				$city='Bhubaneswar';
			}
			else
			{
				$city=$google_city;
			}
		}
		else
		{
			$city='Rest-of-india';
		}
		// else if($city == NULL)
		// {
		// 	$city='Pune';
		// }
		$this->Search_M->add_new_visitor();

	   	$this->data['skills']=$this->Skills_M->skill_autocomplete();
		$this->data['functional_area']=$this->Functional_area_M->get();
		$this->data['jobs']=$this->Job_M->get();
		$this->data['featured_jobs']=$this->Job_M->get_active_jobs('Y');
		$this->data['citis']=$this->City_M->location_autocomplete();
		$this->data['industry_type']=$this->Industry_type_M->get();
		$this->data['home_images']=$this->Sponors_home_img_M->get_active_img();
		$this->data['recuiter_images']=$this->Recuiter_details_M->get();
		$this->data['news_events']=$this->News_event_M->get_by(array('status'=>'Y'));
		$this->data['cad_cam_schools']=$this->Sponors_M->get();

		$this->data['per_day_visitors']=$this->Search_M->get_per_day_visitors();
		$this->data['total_candidate_registerd']=$this->Candidate_M->get_total_candidates();
		$this->data['total_employee_registerd']=$this->Employee_M->get_total_employees();
		$this->data['total_jobs']=$this->Job_M->get_total_jobs();
		$this->data['active_candidates']=$this->Candidate_M->get_active_candidates();
		$this->data['selected_city']=$city;
		$this->data['fake_random_registrations']=$this->Search_M->get_random_fake_registrations();
		$this->data['new_fake_random_registrations']=$this->Search_M->get_new_fake_registrations();
		
		//$this->data['daliy_poll']='daily_poll_new';
		// $this->data['subview']='public/index';
		// $this->load->view('_layout_home',$this->data);



		$this->load->view('homepage_test_shanta',$this->data);
		
		//redirect(base_url()."best_design_jobs/Pune");
   }
   public function best_practices()
   {
   		$data['subview']='employer/subview/job_post_best_practices';
   		$this->load->view('_layout_home',$data);
   }

   	


	// public function testexplode()
	// {
	// 	$var=array("abhra,sarkar,paul,dash");
	// 	//$row=array();
	// 	$row=explode(',',$var);
	// 	$i=0;
	// 	for ($i=0; $i < count($row); $i++)
	// 	{ 
	// 		echo $row[i];
	// 	}
	// }
  	
  	public function create_exam()
  	{
  		$data['subview']='public/create_exam';
  		$this->load->view('_layout_home',$data);
  	}
  	public function sitemap()
  	{
  		$data['subview']='public/sitemap';
  		$this->load->view('_layout_home',$data);
  	}
  	public function exams()
  	{
  		$sql="SELECT apply_id FROM applied_exams;";
  		$query=$this->db->query($sql);
  		$data['candidate']=$query->result();
  		$data['ongoing_exams']=$this->View_M->get_ongoing_exams();
  		$data['upcoming_exams']=$this->View_M->get_upcoming_exams();
  		$data['qualifiers']=$this->View_M->get_all_qualifiers();
  		$data['subview']='public/all_exams';
  		$this->load->view('_layout_home',$data);
  	}
  	public function cadcat_header()
  	{
  		$this->load->view('cadcat_header');
  	}
  	public function cadcat_footer()
  	{
  		$this->load->view('cadcat_footer');
  	}
  	public function all_exams_test()
  	{
  		$sql="SELECT apply_id FROM applied_exams;";
  		$query=$this->db->query($sql);
  		$data['candidate']=$query->result();
  		$data['exams']=$this->View_M->get_all_exams();
  		$data['qualifiers']=$this->View_M->get_all_qualifiers();
  		$data['subview']='public/all_exams_test';
  		$this->load->view('_layout_home',$data);
  	}
  	public function logout()
  	{
  		$this->session->sess_destroy();
  		$data['subview']='public/logout_page';
  		$this->load->view('_layout_home',$data);
  	}
  	function encrypt($code) 
  	{
  		//echo $string;exit();
	    // you may change these values to your own
	    $secret_key = 'my_simple_secret_key';
	    $secret_iv = 'my_simple_secret_iv';
	 
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    $key = hash( 'sha256', $secret_key );
	    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	 	$encrypted = base64_encode( openssl_encrypt( $code, $encrypt_method, $key, 0, $iv ) );
	 	return $encrypted;
	}
	function decrypt($encrypted) 
  	{
  		//echo $string;exit();
	    // you may change these values to your own
	    $secret_key = 'my_simple_secret_key';
	    $secret_iv = 'my_simple_secret_iv';
	 
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    $key = hash( 'sha256', $secret_key );
	    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	 	$decrypted = openssl_decrypt( base64_decode( $encrypted ), $encrypt_method, $key, 0, $iv );
	 	return $decrypted;
	    
	}
	public function api()
	{
		$url="https://softcadinfotech.in/payment/cron_transaction_api";
		$data = file_get_contents($url); // put the contents of the file into a variable
		$transactions = json_decode($data);
		// echo '<pre>';
		// print_r($transactions);exit();
		foreach ($transactions as $key) 
		{
			$emp_id=$key->user_id;
			$serviceIdArr=$key->service_id;
			$paymentExpTimeArr=$key->payment_expire_time;
			//echo $serviceIdArr.'<br>';
			$serviceIds=explode('-',$serviceIdArr);
			$paymentTime=$key->payment_time;
			$paymentExpTimes=explode('&',$paymentExpTimeArr);

			

			$pacsql="SELECT isPackage FROM services WHERE id='$serviceIdArr' AND isPackage='1'";
			$pacquery=$this->db->query($pacsql);
			//echo $pacquery->num_rows();exit();
			if($pacquery->num_rows() > 0)
			{
				// Upgrade Account Type

					$accsql="SELECT service_name FROM services WHERE id='$serviceIdArr'";
					$accquery=$this->db->query($accsql);
					$account_type=$accquery->row()->service_name;
					//echo $account_type;exit();
					$edata['account_type']=$account_type;
					$edata['acc_upgrade_notify']='1';
					$edata['acc_upgrade_rqst']='0';
					$this->db->where('id',$emp_id);
					$this->db->update('employer',$edata);

					//echo $this->db->last_query();exit();

				// Upgrade Account Type
			}

			// echo $paymentTime;exit();
			if(strtotime($paymentTime) < strtotime($paymentExpTimes[0]))
			{
				//echo 'Ongoing';//exit();
				$udata['isServiceActive']='1';
				$apiurl="https://softcadinfotech.in/payment/mark_transacction_activated/".$key->transaction_id;
				$apidata = file_get_contents($apiurl); // put the contents of the file into a variable
				$returndata = json_decode($apidata);
				// echo "Done";
				$this->db->where('id',$emp_id);
				$this->db->update('employer',$udata);
			}
			else
			{
				//echo 'Over';//exit();
				$udata['isServiceActive']='0';
				// echo "Service Not Activated. Please contact the developer";
				$this->db->where('id',$emp_id);
				$this->db->update('employer',$udata);
			}
			
			
		}
	}

	public function api_multiple()
	{
		$url="https://softcadinfotech.in/payment/cron_transaction_api";
		$data = file_get_contents($url); // put the contents of the file into a variable
		$transactions = json_decode($data);
		// echo '<pre>';
		// print_r($transactions);
		foreach ($transactions as $key) 
		{
			$emp_id=$key->user_id;
			$serviceIdArr=$key->service_id;
			$paymentExpTimeArr=$key->payment_expire_time;
			//echo $serviceIdArr.'<br>';
			$serviceIds=explode('-',$serviceIdArr);
			$paymentTime=$key->payment_time;
			$paymentExpTimes=explode('&',$paymentExpTimeArr);
			// echo '<pre>';
			// print_r($serviceIds);
			// echo count($serviceIds);
			// exit();

			// ***** For Multiple Services **** //


			// for ($i=0; $i < count($serviceIds); $i++) 
			// {
			// 	if(strtotime($paymentTime) < strtotime($paymentExpTimes[$i]))
			// 	{
			// 		$udata['isServiceActive']='1';
			// 		// $this->db->where('id',$emp_id);
			// 		// $this->db->update('employer',$data);
			// 		echo "Done";
			// 		// $this->db->where('id',$emp_id);
			// 		// $this->db->update('employer',$data);
			// 		// exit();
			// 	}
			// 	else
			// 	{
			// 		$udata['isServiceActive']='0';
			// 		// $this->db->where('id',$emp_id);
			// 		// $this->db->update('employer',$data);
			// 		echo "Service Not Activated. Please contact the developer";
			// 		// exit();
			// 	}	
			// 	echo '<br>';
			// 	$this->db->where('id',$emp_id);
			// 	$this->db->update('employer',$udata);
					
			// }

			// ***** For Package Services **** //

			//echo $paymentTime;exit();
			if(strtotime($paymentTime) < strtotime($paymentExpTimes[0]))
			{
				//echo 'Ongoing';exit();
				$udata['isServiceActive']='1';
				// echo "Done";
			}
			else
			{
				//echo 'Over';exit();
				$udata['isServiceActive']='0';
				// echo "Service Not Activated. Please contact the developer";
			}
			$this->db->where('id',$emp_id);
			$this->db->update('employer',$udata);
			
		}
	}

}

?>