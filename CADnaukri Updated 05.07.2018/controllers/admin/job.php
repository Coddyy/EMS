<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job extends MY_Controller {
function __construct()
   {
     parent::__construct();
    	  $this->load->model('SuperAdmin_M');	
    	  $this->load->library('form_validation');
    	  $this->load->library('session');
        $this->load->library('email');
        $this->load->model('Job_M');
        $this->load->model('City_M');
        $this->load->model('Job_skill_M');
        $this->load->model('Skills_M');
		
    }
    function index()
    {
       if($this->session->userdata('admin_id'))
       {
          $result['jobinfo'] = $this->SuperAdmin_M->jobInfo();
          $this->load->view('admin/job',$result);
        }
        else
        {
            redirect('admin/index/index');
        }
     }
     // function addJob(){
     //     if($this->session->userdata('admin_id')){
     //          $result['companyInfo'] = $this->SuperAdmin_M->companyInfo();
     //          $result['industry_type']=$this->Job_M->get_industry_type();
     //          $result['citis']=$this->City_M->location_autocomplete();
     //     $this->load->view('admin/addjob',$result);
     //         }
     //         else{
     //            redirect('admin/index/index');
     //        }
     // }

  function addJob(){
     if($this->session->userdata('admin_id'))
         {
          $id=$this->uri->segment(4);
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
            //var_dump($_POST);exit();
            if($_POST['status'] == "N")
            {
              $is_obsolete='YES'; 
            //  print_r($_POST);exit();
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
      //  echo $job_id;exit();
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
          $batch_array_i[$j]['emp_id'] = 'admin';
          $batch_array_i[$j]['company_id'] =$_POST['companyId'];
          $batch_array_i[$j]['job_id'] =$job_id;
          $batch_array_i[$j]['skill_id'] =  $_POST['skills'][$key];
           $batch_array_i[$j]['status'] = 1;
            $j++;
          }
        
      //  echo '<pre>';print_r($batch_array_i);exit();
         
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




     function editJob(){
       if($this->session->userdata('admin_id')){
            $id=$_GET['id'];
        //echo $id;
           $singleList['jobsingleList']=$this->SuperAdmin_M->jobSingleList($id);
           $singleList['companyInfo'] = $this->SuperAdmin_M->companyInfo();
           $singleList['industry_type']=$this->Job_M->get_industry_type();
              $singleList['citis']=$this->City_M->location_autocomplete();
         //  print_r($singleList);
           $this->load->view('admin/job_edit',$singleList);
             }
             else{
                redirect('admin/index/index');
            }
     }
     function saveJob(){
         if($this->session->userdata('admin_id')){
         $today=date('Y-m-d H:i:s');
         $timestamp = strtotime($_POST['lastdate']);
            $data=array(
			'id'=>NULL,
			'userId'=>2,
			'companyId'=>$_POST['companyId'],
			'designation'=>$_POST['designation'],
			'jobtitle'=>$_POST['jobtitle'],
			'yop'=>$_POST['yop'],		
			'description'=>$_POST['description'],
			'location'=>$_POST['location'],
      'industry_type'=>$_POST['industry_type'],
			'skills'=>$_POST['skills'],
			'additionalSkills'=>$_POST['addtionkeyskill'],
			'minsal'=>$_POST['minsal'],
		         'maxsal'=>$_POST['maxsal'],
			'lastdate'=>date("Y-m-d", $timestamp),
			'qualification'=>$_POST['qualification'],
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1',
			);
          $this->SuperAdmin_M->saveJob($data);
           redirect('admin/job/index');
         }else{
                redirect('admin/index/index');
            }
     }
     function updateJob(){
          if($this->session->userdata('admin_id')){
              $id=$_POST['id'];
              //echo $id;exit();
         $today=date('Y-m-d H:i:s');
         $timestamp = strtotime($_POST['lastdate']);
            $data=array(			
              'userId'=>2,
			'companyId'=>$_POST['companyId'],
			'designation'=>$_POST['designation'],
			'jobtitle'=>$_POST['jobtitle'],
			'yop'=>$_POST['yop'],		
			'description'=>$_POST['description'],
			'location'=>$_POST['location'],
			'additionalSkills'=>$_POST['skills'],
      'industry_type'=>$_POST['industry_type'],
			'additionalSkills'=>$_POST['addtionkeyskill'],
			'minsal'=>$_POST['minsal'],
		  'maxsal'=>$_POST['maxsal'],
			'lastdate'=>date("Y-m-d", $timestamp),
			'qualification'=>$_POST['qualification'],
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1',
			);
      if(isset($_POST['skills']))
      {
        $this->db->where('job_id', $id);
        $this->db->delete('job_skills');
        $j=0;
        foreach($_POST['skills'] as $key=>$val)
        {
          $batch_array_i[$j]['emp_id'] = 'admin';
          $batch_array_i[$j]['company_id'] =$_POST['companyId'];
          $batch_array_i[$j]['job_id'] =$id;
          $batch_array_i[$j]['skill_id'] =  $_POST['skills'][$key];
           $batch_array_i[$j]['status'] = 1;
            $j++;
        }
        $this->db->insert_batch('job_skills', $batch_array_i);
      }
        
      //  echo '<pre>';print_r($batch_array_i);exit();
         
         


          $this->SuperAdmin_M->updateJob($id,$data);
           redirect('admin/job/index');
         }else{
                redirect('admin/index/index');
            }
         
     }
     function deleteJob(){
          if($this->session->userdata('admin_id')){
                $id=$_GET['id'];
                $this->SuperAdmin_M->deleteJob($id);
                redirect('admin/job/index','refresh');
          }else{
                redirect('admin/index/index');
            }
     }		  public function deletechkdjob()	 {	
     				if($this->session->userdata('admin_id'))
					{
						
     						if(isset($_POST['delete'])){		
     							$userId=$this->input->post('userId');
								
     								$this->SuperAdmin_M->deletechkdjob($userId);	
     								redirect('admin/job');	
     													} 		
					}  		
				}	
}