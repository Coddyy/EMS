<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sponors extends MY_Controller 
{

  function __construct()
  {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');
	 $this->load->model('Candidate_M');
	 $this->load->model('Employee_M');	
	  $this->load->model('Sponors_home_img_M');	
	  $this->load->model('State_M');	
	  $this->load->model('Recuiter_details_M');	
	  $this->load->model('Functional_area_M');	
	  $this->load->model('Sponors_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('file');	
	 $this->load->model('View_M'); 
	 
  }
  function index()
  {
  		redirect(base_url()."sponors/sponorsEntry");
   }

   
   function sponorsEntry($id=NULL)
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
        $this->View_M->allow_banner($banner_id);
		$this->View_M->disallow_banner($banner_id);
	  
	   		if($id)
  		    {
	  			$this->data['is_edit']=TRUE;
				$this->data['sponors']=$this->Sponors_M->get($id);
				$msg="You've Succesfully updated your detials";
			   }
		    else
		    {
				$this->data['is_edit']=FALSE;
				$this->data['status']='Pending';
				$this->data['sponors']=$this->Sponors_M->get_new();
				$this->data['courses']=array();
				$msg="You're Succesfully registered with us";
		    }
		    if($_POST)
		    {
		       //print_r($_POST);exit();
			   $target_dir = "assets/superadmin/sponors/";
			   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			   $image_path=base_url().$target_file;
				$today=date('Y-m-d h:i:s');
				$filename=$_FILES["fileToUpload"]["name"];
				$data=array(
				'companyname'=>$_POST['companyname'],
				'category'=>$_POST['category'],
				'year_of_est'=>$_POST['year_of_est'],
				'logo'=>$filename,
	            'logo_path'=>$image_path,
				'description'=>$_POST['description'],
				'contact_person'=>$_POST['contact_person'],
				'email'=>$_POST['email'],
				'mobile'=>$_POST['mobile'],
				'location'=>$_POST['address'],	
				'city'=>$_POST['city'],
				'state'=>$_POST['state'],				
				'phno'=>$_POST['phno'],
				'cemail'=>$_POST['cemail'],
				'cmobile'=>$_POST['cmobile'],
				'pincode'=>$_POST['pincode'],
				'website'=>$_POST['website'],
				'course'=>$_POST['course'],
				'certification'=>$_POST['certification'],
				'affiliation'=>$_POST['affiliation'],
				'service'=>$_POST['service'],
				'created'=>$today,
				'modified'=>$today,
				'isActive'=>'1',
				'status'=>'Pending'
				
				);
				$insert_id=$this->Sponors_M->save($data,$id);
				//echo $insert_id;exit();
				$pdata=array(
					'sponor_id'=>$insert_id,
					'companyname'=>'Y',
					'category'=>'Y',
					'year_of_est'=>'Y',
					'description'=>'Y',
					'contact_person'=>'Y',
					'email'=>'Y',
					'mobile'=>'Y',
					'location'=>'Y',	
					'city'=>'Y',
					'state'=>'Y',				
					'phno'=>'Y',
					'cemail'=>'Y',
					'cmobile'=>'Y',
					'pincode'=>'Y',
					'website'=>'Y',
					'course'=>'Y',
					'certification'=>'Y',
					'affiliation'=>'Y',
					'service'=>'Y'
					);
				$this->Sponors_M->add_to_permission($pdata);
				//$this->db->batch_insert('sponors_courses',$batch_array);
				$this->session->set_flashdata('msg2', $msg);
			    redirect('CAD-CAM-Schools/Register','refresh');
			}
		    
	   		$this->data['states']=$this->State_M->get_by(array('country_id'=>100));
	   		$this->data['functional_area']=$this->Functional_area_M->get();
	   		// $this->data['subview']='sponors';
  		  //   $this->load->view('_layout_home',$this->data);
	   		 $this->load->view('sponors',$this->data);

     }
     public function saved()
     {
     	$this->sponorsEntry();
     }
     public function delete_sponors($id)
     {
     	$msgdelete="Successfully Deleted";
	 	$sql="Delete from sponors_courses where sponors_id=$id";
	 	$this->db->query($sql);
	 	$new_sql="Delete from sponors where id=$id";
	 	$this->db->query($new_sql);
	 	$this->session->set_flashdata('msgdelete', $msgdelete);
		redirect('CAD-CAM-Schools/Register','refresh');
	 }

	 public function get_all_sponors()
	 {
	 	$data['schools']=$this->Sponors_M->getall_sponors();
	 	$this->load->view('public/cad_cam_school',$data);
	 	// $data['subview']='public/cad_cam_school';
	 	// $this->load->view('_layout_home',$data);
	 }
     

     
    

}
?>