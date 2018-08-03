<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internship extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');
   $this->load->model('Skills_M');	
	 $this->load->library('form_validation');
   $this->load->model('Job_skill_M');
	 $this->load->library('session');
            $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('admin_id')){
               $result['internshipInfo'] = $this->SuperAdmin_M->internshipInfo();
	      $this->load->view('admin/internship',$result);
            }else{
                redirect('admin/index/index');
            }
     }
     public function  deleteInternship(){
             if($this->session->userdata('admin_id')){
                 $id=$_GET['id'];
                $this->SuperAdmin_M->deleteInternship($id);
                 redirect('admin/internship/index','refresh');
                 
             }
             else{
                redirect('admin/index/index');
            }
        }
         public function addInternship(){
            //  if($this->session->userdata('admin_id')){
				
            //    $result['companyInfo'] = $this->SuperAdmin_M->companyInfo();
            //     $this->load->view('admin/addInternship',$result);
                 
            //  }
            //  else{
            //     redirect('admin/index/index');
            // }
          if($this->session->userdata('admin_id')){
        
               $result['companyInfo'] = $this->SuperAdmin_M->companyInfo();
               $result['cities']=$this->SuperAdmin_M->get_cities();
               $result['skills']=$this->Skills_M->get();
               $this->load->view('admin/addInternship',$result);
                 
             }
             else{
                redirect('admin/index/index');
            }
        }
         public function insertInternship(){
  //                  $title=$this->input->post('title');
		// $companyId=$this->input->post('companyId');
  //               $location=$this->input->post('location');
  //               $description=$this->input->post('description');
  //               $whocanapply=$this->input->post('whocanapply');
  //                $noofintership=$this->input->post('noofintership');
  //               $startDate=$this->input->post('startDate');
  //               $timestamp = strtotime($startDate);
  //               $duration=$this->input->post('duration');
  //               $stipend=$this->input->post('stipend');
  //               $endDate=$this->input->post('endDate');
  //                $timestamp1 = strtotime($endDate);
  //                 $data=array(
  //                     'userid'=>2,
  //                      'title' => $title,
		//       'companyId'=>$companyId,
  //                     'whocanapply'=>$whocanapply,
  //                      'description'=>$description,
  //                      'location'=> $location,
  //                       'startDate'=>date("Y-m-d", $timestamp),
  //                      'duration'=>$duration,
  //                       'stipend'=>$stipend,
  //                       'endDate'=>date("Y-m-d", $timestamp1),
  //                       'created'=>date('y-m-d'),
  //                       'modified'=>date('y-m-d'),
  //                        'isActive'=>1,
  //                );
  //                  $this->SuperAdmin_M->insertInternship($data);
  //                //print_r($data);
  //                redirect('admin/internship/index','refresh');
  

            //var_dump($_POST);exit();

                  $title=$this->input->post('title');
                 $companyId=$this->input->post('companyId');
                 $location=$this->input->post('location');
                 $description=$this->input->post('description');
                 $whocanapply=$this->input->post('whocanapply');
                 $noofintership=$this->input->post('noofintership');
                 $startDate=$this->input->post('startDate');
                 $timestamp = strtotime($startDate);
                 $duration=$this->input->post('duration');
                 $stipend=$this->input->post('stipend');
                 $endDate=$this->input->post('endDate');
                 $timestamp1 = strtotime($endDate);
                 $data=array(
                       'userid'=>2,
                       'title' => $title,
                       'companyId'=>$companyId,
                       'whocanapply'=>$whocanapply,
                       'description'=>$description,
                       'location'=> $location,
                       'noofintership'=>$noofintership,
                       'startDate'=>date("Y-m-d", $timestamp),
                       'duration'=>$duration,
                       'stipend'=>$stipend,
                       'endDate'=>date("Y-m-d", $timestamp1),
                       'created'=>date('y-m-d'),
                       'modified'=>date('y-m-d'),
                       'isActive'=>1
                 );
                 //print_r($data);exit();
                 $internship_id=$this->SuperAdmin_M->insertInternship($data);
                 //echo $internship_id;

                if(isset($_POST['skills']))
                {
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
                 
                 redirect('admin/internship/index','refresh');

       }

         public function editInternship(){
            //    if($this->session->userdata('admin_id')){
            //        $id=$_GET['id'];
            //     $result['singleinternshipList'] = $this->SuperAdmin_M->singleinternshipList($id);
            //     $this->load->view('admin/editInternship',$result);
                 
            //  }
            //  else{
            //     redirect('admin/index/index');
            // }
          if($this->session->userdata('admin_id'))
               {
                   $id=$_GET['id'];
                   //echo $id;exit();
                $result['singleinternshipList'] = $this->SuperAdmin_M->singleinternshipList($id);
                $result['skills']=$this->Skills_M->get();
                $result['cities']=$this->SuperAdmin_M->get_cities();
                //$result['job_skills']=$this->Job_skill_M->get_skills($id);
                $job_skills=$this->Job_skill_M->get_by(array('job_id'=>$id,'is_internship'=>'1'));
                $result['job_skills']=array();
                foreach($job_skills as $js)
                {
                 array_push($result['job_skills'],$js->skill_id);
                }
                

                $this->load->view('admin/editInternship',$result);
                 
             }
             else{
                redirect('admin/index/index');
            }
         }
         public function updateInternship(){
   //            if($this->session->userdata('admin_id')){
   //                 $id=$_POST['id'];
   //             $title=$this->input->post('title');
			// $companyId=$this->input->post('companyId');
   //              $location=$this->input->post('location');
   //              $description=$this->input->post('description');
   //              $whocanapply=$this->input->post('whocanapply');
   //               $noofintership=$this->input->post('noofintership');
   //              $startDate=$this->input->post('startDate');
   //              $timestamp = strtotime($startDate);
   //              $duration=$this->input->post('duration');
   //              $stipend=$this->input->post('stipend');
   //              $endDate=$this->input->post('endDate');
   //               $timestamp1 = strtotime($endDate);
   //                $data=array(
   //                    'userid'=>2,
   //                     'title' => $title,
			// 			'companyId'=>$companyId,
   //                    'whocanapply'=>$whocanapply,
   //                     'description'=>$description,
   //                     'location'=> $location,
   //                      'startDate'=>date("Y-m-d", $timestamp),
   //                     'duration'=>$duration,
   //                      'stipend'=>$stipend,						 'noofintership'=>$noofintership,
   //                      'endDate'=>date("Y-m-d", $timestamp1),
   //                      'created'=>date('y-m-d'),
   //                      'modified'=>date('y-m-d'),
   //                       'isActive'=>1,
   //               );					//print_r($data);
   //                 $this->SuperAdmin_M->updateInternship($id,$data);
			// 	redirect('admin/internship/index');
                 
   //           }
   //           else{
   //              redirect('admin/index/index');
   //          }

          if($this->session->userdata('admin_id')){
                   $id=$_POST['id'];
               $title=$this->input->post('title');
      $companyId=$this->input->post('companyId');
                $location=$this->input->post('location');
                $description=$this->input->post('description');
                $whocanapply=$this->input->post('whocanapply');
                 $noofintership=$this->input->post('noofintership');
                $startDate=$this->input->post('startDate');
                $timestamp = strtotime($startDate);
                $duration=$this->input->post('duration');
                $stipend=$this->input->post('stipend');
                $endDate=$this->input->post('endDate');
                 $timestamp1 = strtotime($endDate);
                 $status=$this->input->post('status');
                  $data=array(
                      'userid'=>2,
                       'title' => $title,
            'companyId'=>$companyId,
                      'whocanapply'=>$whocanapply,
                       'description'=>$description,
                       'location'=> $location,
                        'startDate'=>date("Y-m-d", $timestamp),
                       'duration'=>$duration,
                        'stipend'=>$stipend,             'noofintership'=>$noofintership,
                        'endDate'=>date("Y-m-d", $timestamp1),
                        'created'=>date('y-m-d'),
                        'modified'=>date('y-m-d'),
                         'isActive'=>1,
                         'status'=>$status
                 );         //print_r($data);
                   $this->SuperAdmin_M->updateInternship($id,$data);
                   
                //echo $this->db->last_query();exit();
                //
                if(isset($_POST['skills']))
                 {
                  $this->db->where('job_id', $id);
                  $this->db->delete('job_skills');
                   foreach($_POST['skills'] as $key=>$val)
                    {
                      $batch_array_i[$j]['emp_id'] = 'superadmin';
                      $batch_array_i[$j]['company_id'] =$_POST['companyId'];
                      $batch_array_i[$j]['job_id'] =$id;
                      $batch_array_i[$j]['skill_id'] =  $_POST['skills'][$key];
                      $batch_array_i[$j]['status'] = 1;
                      $batch_array_i[$j]['is_internship'] = 1;
                      $j++;
                    }
              //echo '<pre>';print_r($batch_array_i);exit();
               
               $this->db->insert_batch('job_skills', $batch_array_i);
               }

        redirect('admin/internship/index');
                 
             }
             else{
                redirect('admin/index/index');
            }
             
         }
		 
		  public function deletechkdinternship()	 {	
	
			if($this->session->userdata('admin_id')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			
			$this->SuperAdmin_M->deletechkdinternship($userId);
			redirect('admin/internship');
				} 
				
			}  
		
		}
}