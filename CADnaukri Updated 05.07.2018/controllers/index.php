<?php

/**
 * Description of index
 *
 * @author Subodha
 */
class index extends MY_Controller {
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
		$this->load->model('City_M');
		$this->load->model('Company_M');
		$this->load->model('News_event_M');	
		 $this->load->model('Sponors_home_img_M');		
		 $this->load->model('Sponors_M');		
		 $this->load->model('Recuiter_details_M');	
		$this->load->library('form_validation');
     	$this->load->helper('form');
		
    }
   public  function index()
   {
   	     if($this->session->userdata('search_sql'))
			{
				$this->session->unset_userdata('search_sql');
			}
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
		$this->data['subview']='public/index';
		$this->load->view('_layout_home',$this->data);
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
      
        $this->data['subview']='public/contactUs';
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
   	
	 //echo '<pre>';print_r($this->session->all_userdata());exit();
	 $sql="SELECT job.id as job_id,`companyId`,`jobtitle`,`designation` ,`yop`,`description` , `qualification`,`location`,job.created,job.lastdate";
	 if($job_tags !=NULL)
	 {
	 	$job_tags=rawurldecode($job_tags);
	 	$this->data['title']= ucfirst($job_tags);
	 	$new_sql="SELECT name as tag_name  FROM `job_tag` WHERE `job_url` = '$job_tags'";
	 	$j=$this->db->query($new_sql)->row();
	 	$tage_name=$job_tags;
	 	iF(count($j) > 0)
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
			$sql .=" and job.location= $selected_location ";
		}
		else if($location !='')
		{
			$sql .=" and job.location LIKE %$location% ";
		}
		
	 	
	 }
	 $sql .="GROUP BY job.id ORDER BY job.modified DESC; ";
	   if($this->session->userdata('search_sql'))
	   {
	   	  $sql=$this->session->userdata('search_sql');
	   }
	$query=$this->db->query($sql);
	 $this->data['search_result']= $search_result=$query->result();
//	 echo $this->db->last_query();exit();
	// echo '<pre>';print_r($this->data['search_result']);
	//echo $sql;exit();
	  //$this->session->set_userdata($data);
	   if($this->session->userdata('search_sql'))
			{
				$this->session->unset_userdata('search_sql');
			}
	   $this->session->set_userdata('search_sql',$sql);
        $this->data['subview']='public/search';
		$this->load->view('_layout_home',$this->data);
   }
   public function signle_search($id=1)
   {
	   	$this->data['id']=$id;
	   	if(isset($_POST['login']))
	   	{
	   		$rules = $this->Candidate_M->rule_login;
		    $this->form_validation->set_rules($rules);
			if($this->form_validation->run() == TRUE)
			{
				if($this->Candidate_M->login() == TRUE)
				{
					$data['user_id']=$this->session->userdata('candidate_id');
			   		$data['job_id']=$id;
			   		$data['created']=date('Y-m-d H:i:s');
			   		$this->Job_apply_M->save($data);
					   $this->session->set_flashdata('success','Job applied successfully');
						redirect(base_url("index/signle_search/$id"),'refresh');
				}
				else
				{
					$this->session->set_flashdata('error','Email ID / Password Combination Doesn\'t Exist');
					redirect(base_url("index/signle_search/$id"),'refresh');
				}
			}
	   		
	   		
			//print_r($_POST);
		}
		if(isset($_POST['apply_job']))
	   	{
	   		$data['user_id']=$this->input->post('candidate_id');
	   		$data['job_id']=$this->input->post('job_id');
	   		$data['created']=date('Y-m-d H:i:s');
	   		$this->Job_apply_M->save($data);
			$this->session->set_flashdata('success','Job applied successfully');
			redirect(base_url("index/signle_search/$id"),'refresh');
			
		}
		if(isset($_POST['save_job']))
	   	{
	   		$data['user_id']=$this->input->post('candidate_id');
	   		$data['job_id']=$this->input->post('job_id');
	   		$data['created']=date('Y-m-d H:i:s');
	   		 $this->db->insert('job_favourite',$data); 
			$this->session->set_flashdata('success','Job saved as favourite');
			redirect(base_url("index/signle_search/$id"),'refresh');
			
		}
   		
	   	  $this->data['job']=$this->Job_M->get($id,TRUE);
	   	  //$this->data['job_skills']=$this->Job_skill_M->get_by(array('job_id'=>$id));
	   	  $this->data['job_skills']=$this->Job_skill_M->get_skills_name($id);
	   //	 echo '<pre>';print_r($this->data['job_skills']);exit();
	   		//$this->data['subview']='public/signle_search';
			$this->load->view('public/signle_search',$this->data);
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
  

	public function shootmail()
	{
		$this->load->library('email');
		$this->email->from('no-reply@cadnaukri.com','CADNAUKRI | HERE');
		$this->email->to('cadtestmymail@gmail.com');
		$this->email->subject("CADNAUKRI");
		$this->email->message("Working");
		$this->email->send();

	}
}
?>