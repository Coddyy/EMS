<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internship extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
   $this->load->model('Skills_M');
   $this->load->model('Job_skill_M');
	 $this->load->library('session');
            $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('superadminId')){
               $result['internshipInfo'] = $this->SuperAdmin_M->internshipInfo();
	      $this->load->view('superadmin/internship',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
     public function  deleteInternship($id){
             if($this->session->userdata('superadminId')){
                 //$id=$_GET['id'];
                $this->SuperAdmin_M->deleteInternship($id);
                 redirect('superadmin/internship/index','refresh');
                 
             }
             else{
                redirect('superadmin/index/index');
            }
        }
         public function addInternship(){
             if($this->session->userdata('superadminId')){
				
               $result['companyInfo'] = $this->SuperAdmin_M->companyInfo();
               $result['cities']=$this->SuperAdmin_M->get_cities();
               $result['skills']=$this->Skills_M->get();
               $result['subview']='superadmin/addInternship';
                $this->load->view('superadmin/_layout_superadmin',$result);
                 
             }
             else{
                redirect('superadmin/index/index');
            }
        }
       public function insertInternship()
        {
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
                 
                 redirect('superadmin/internship/index','refresh');
         }
         public function editInternship(){
               if($this->session->userdata('superadminId'))
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
                

                $this->load->view('superadmin/editInternship',$result);
                 
             }
             else{
                redirect('superadmin/index/index');
            }
         }
         public function updateInternship(){
              if($this->session->userdata('superadminId')){
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
                      'stipend'=>$stipend,						 'noofintership'=>$noofintership,
                      'endDate'=>date("Y-m-d", $timestamp1),
                      'created'=>date('y-m-d'),
                      'modified'=>date('y-m-d'),
                      'isActive'=>1,
                      'status'=>$status
                 );					//print_r($data);
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

				redirect('superadmin/internship/index');
                 
             }
             else{
                redirect('superadmin/index/index');
            }
             
         }
		 
		  public function deletechkdinternship()	 {	
	
			if($this->session->userdata('superadminId')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			
			$this->SuperAdmin_M->deletechkdinternship($userId);
			redirect('superadmin/internship');
				} 
				
			}  
		
		}
    public function delete_internship()
    {
      $id=$this->uri->segment(4);
      //echo $id;exit();
            $this->db->where('id',$id);
            $success=$this->db->delete('internsip');
            if($success)
            {
                redirect(base_url()."superadmin/internship/internship_deleted");
            }
            else
            {
                echo "Not Deleted";
            }
    }
    public function internship_deleted()
    {
      $this->index();
    }
  public function get_applied_interns()
  {
    $internship_id=$this->uri->segment(4);
    $data['interns']=$this->SuperAdmin_M->get_applied_interns($internship_id);
    $data['subview'] ='superadmin/internship_applied_interns';
    $this->load->view('superadmin/_layout_superadmin',$data);
  }
}