<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job extends MY_Controller {
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
		$this->load->model('Company_M');
		$this->load->model('Job_M');
		$this->load->model('Jobapply_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Internship_M');
		$this->load->model('State_M');
		$this->load->model('Language_M');
		$this->load->model('City_M');
	 	$this->load->library('form_validation');
	 	$this->load->library('session');
            $this->load->library('email');
		
    }
    function index()
    {
    	$udata['new_entry_check']='1';
    	$this->db->update('job',$udata);
        $this->db->order_by("created", "DESC"); 
		$this->data['jobinfo'] = $this->Job_M->get();
		$this->data['pending_job'] = $this->Job_M->get_by(array('status'=>'P'));
		$this->data['subview']='superadmin/job';
		$this->load->view('superadmin/_layout_superadmin',$this->data);
		//$this->load->view('superadmin/job',$result);
     }
     function addJob($id=NULL)
     {
         if($this->session->userdata('superadminId'))
         {
         	if($id)
	  		{
	  			$this->data['is_edit']=$is_edit=TRUE;
				$this->data['job']=$this->Job_M->get($id);
				$this->data['job_tags']=$this->Job_M->get_job_tags($id);
			    $job_skills=$this->Job_skill_M->get_by(array('job_id'=>$id));
			    $this->data['job_skills']=array();
			    foreach($job_skills as $js)
			    {
					 array_push($this->data['job_skills'],$js->skill_id);
				}
				$msg="Succesfully updated job";
			}
			else
			{
				$this->data['is_edit']=$is_edit=FALSE;
				$this->data['job']=$this->Job_M->get_new();
				$this->data['job_skills']=array();
				$this->data['job_tags']=array();
				$msg="Succesfully inserted job";
			}
         	if($_POST)
         	{
         		if($_POST['status'] == "N")
         		{
         			$is_obsolete='YES';	
	         	//	print_r($_POST);exit();
					$today=date('Y-m-d H:i:s');
	      		   	$timestamp = strtotime($_POST['lastdate']);
		            $data=array(
					'userId'=>$_POST['user_id'],
					'companyId'=>$_POST['companyId'],
					'designation'=>$_POST['designation'],
					'jobtitle'=>$_POST['jobtitle'],
					'industry_type'=>$_POST['industry_type'],
					'yop'=>$_POST['yop'],		
					'description'=>$_POST['description'],
					'location'=>$_POST['location'],
					'additionalSkills'=>$_POST['addtionkeyskill'],
					'minsal'=>$_POST['minsal'],
				     'maxsal'=>$_POST['maxsal'],
				   	'lastdate'=>date("Y-m-d", $timestamp),
					'qualification'=>$_POST['qualification'],
					'created'=>$today,
					'modified'=>$today,
					'isActive'=>'1',
					'status'=>$_POST['status'],
					'is_feature'=>$_POST['is_feature'],
					'is_obsolete'=>$is_obsolete
					);
	        	}
	        	else
	        	{
	        		$today=date('Y-m-d H:i:s');
	      		   	$timestamp = strtotime($_POST['lastdate']);
		            $data=array(
					'userId'=>$_POST['user_id'],
					'companyId'=>$_POST['companyId'],
					'designation'=>$_POST['designation'],
					'jobtitle'=>$_POST['jobtitle'],
					'yop'=>$_POST['experience'],		
					'description'=>$_POST['description'],
					'location'=>$_POST['location'],
					'additionalSkills'=>$_POST['addtionkeyskill'],
					'industry_type'=>$_POST['industry_type'],
					// 'minsal'=>$_POST['minsal'],
				 //     'maxsal'=>$_POST['maxsal'],
					'salary'=>$_POST['salary'],
				   	'lastdate'=>date("Y-m-d", $timestamp),
					'qualification'=>$_POST['qualification'],
					'created'=>$today,
					'modified'=>$today,
					'isActive'=>'1',
					'status'=>$_POST['status'],
					'is_feature'=>$_POST['is_feature'],
					);	
	        	}
				$batch_array_i=array();
		 		$j=0;
		 		
				
	            $job_id=$this->Job_M->save($data,$id);


	   // ************** Job Confirmed Mail To Recruiter ************//

	            $check_job_status=$this->Job_M->check_job_status($id);
	            $emp_email=$this->Job_M->get_emp_email($id);
	            $emp_name=$this->Job_M->get_emp_name($id);
	            $job_name=$this->Job_M->get_job_name($id);
	            if($check_job_status != false)
	            {
	            	$this->load->library('email');
					$this->email->set_mailtype("html");

					$this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
			        $this->email->to($emp_email);
					$this->email->subject("Job AD Approved By Admin");


			        $this->email->message("

			        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
					<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
					<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
					<link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
					<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

					Dear ".$emp_name."
 					<br />
					<br />
					Congratulations!
					<br /><br />
					 Your AD <b>".$job_name."</b>  has been successfully posted on CADnaukri.com.
				
					To check your AD responses <a href='http://cadnaukri.com/employer/login'>Sign in</a> now.
		

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
	            }

	  // ************** End Job Confirmed Mail To Recruiter ************//


	            if($is_edit == TRUE)
		 		{
					$this->db->where('job_id', $job_id);
					$this->db->delete('job_skills');
					$this->db->where('job_id', $job_id);
					$this->db->delete('job_tag');
				}
	            //echo $this->db->last_query();
	           // print_r($data);
		 	//	echo $job_id;exit();
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
		       if(isset($_POST['skills']))
		       {
			   	 foreach($_POST['skills'] as $key=>$val)
		 		  {
		 			$batch_array_i[$j]['emp_id'] = 'superadmin';
		 			$batch_array_i[$j]['company_id'] =$_POST['companyId'];
		 			$batch_array_i[$j]['job_id'] =$job_id;
		 			$batch_array_i[$j]['skill_id'] =  $_POST['skills'][$key];
		 			 $batch_array_i[$j]['status'] = 1;
		 		    $j++;
		 		  }
		 		
		 	//	echo '<pre>';print_r($batch_array_i);exit();
				 
				 $this->db->insert_batch('job_skills', $batch_array_i);
			   }
				
				 $this->session->set_flashdata('msg2', $msg);
			    redirect(current_url(),'refresh');
			}
                $this->data['companyInfo'] = $this->SuperAdmin_M->companyInfo();
             	$this->data['skills']=$this->Skills_M->get();
             	$this->data['industry_type']=$this->Job_M->get_industry_type();
             	$this->data['subview']='superadmin/addjob';
                $this->load->view('superadmin/_layout_superadmin',$this->data);
             }
             else
             {
                redirect('superadmin/index/index');
            }
     }
     
    
     public function delete_job($id)
     {
	 	$sql="DELETE from job where id=$id";
	 	$this->db->query($sql);
	 	$ysql="DELETE from job_skills where job_id=$id";
	 	$this->db->query($ysql);
	 	$xsql="DELETE from job_tag where job_id=$id";
	 	$this->db->query($xsql);
	 	$this->session->set_flashdata('msg2', 'Job deleted sucessfully');
	   redirect('superadmin/job/index','refresh');
	 }
	 public function skills()
	 {
	 	if($this->session->userdata('superadminId'))
         {
		 	 $this->data['skills_info'] = $this->Skills_M->get();
	          $this->data['subview']='superadmin/subview/skills';
	          $this->load->view('superadmin/_layout_superadmin',$this->data);
	       }
           else{
                redirect('superadmin/index/index');
            }
	 }
	 public function add_skill($id=NULL)
	 {
	 	if($this->session->userdata('superadminId'))
        {
         	if($id)
	  		{
	  				$this->data['skills'] = $this->Skills_M->get($id);
	  				
	  				$msg="Succesfully updated skill";
	  		}
	  		else
	  		{
				 $this->data['skills'] = $this->Skills_M->get_new();
				 $msg="Succesfully inserted skill";
			}
			if($_POST)
			{
				$data['name']=$this->input->post('name');
				$data['active']=1;
				$this->Skills_M->save($data,$id);
				$this->session->set_flashdata('msg2', $msg);
			    redirect('superadmin/job/add_skill','refresh');
			}	
		 	 	$this->data['skills_info'] = $this->Skills_M->get();
	          	$this->data['subview']='superadmin/subview/add_skill';
	          	$this->load->view('superadmin/_layout_superadmin',$this->data);
	       }
           else
           {
                redirect('superadmin/index/index');
           }
	 }
	 public function delete_skill($id)
	 {
	 	$ysql="DELETE from skills where id=$id";
	 	 
	 	$this->db->query($ysql);
	 	$this->session->set_flashdata('msg2', 'Skill deleted ');
		redirect('superadmin/job/skills','refresh');
	 }

	public function cron_permission_for_job_post()
	{
		$this->Job_M->update_obsolete_job_to_active();
	}
	public function repost_job($id=NULL)
	{	
		$id=$this->uri->segment(4);
		$emp_id=$this->SuperAdmin_M->get_emp_id($id);	
	 	$this->data['job']=$this->Job_M->get($id,TRUE);
	 	$this->data['job_skill_detail']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	 	$this->data['is_edit_skills']=TRUE;

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
	 		redirect(base_url().'superadmin/job/index');
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
	 	$this->data['subview'] ='superadmin/repost_job';
	 	$this->load->view('superadmin/_layout_superadmin',$this->data);
	 	
	}
	public function get_applied_candidates()
	{
		$job_id=$this->uri->segment(4);
		$data['candidates']=$this->SuperAdmin_M->get_applied_candidates($job_id);
		$data['subview'] ='superadmin/job_applied_candidates';
	 	$this->load->view('superadmin/_layout_superadmin',$data);
	}
     
}