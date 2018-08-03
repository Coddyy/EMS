<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cadcam_school extends MY_Controller
{

   function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('file');	
    }
    public function get_new()
	{
		$cad_cam = new stdClass();
		$cad_cam->id='';
		$cad_cam->institue_name='';
		$cad_cam->logo_url='';
		$cad_cam->contact_person='';
		$cad_cam->address_line1='';
		$cad_cam->address_line2='';
		$cad_cam->contact_no='';
		$cad_cam->additional_no='';
		$cad_cam->website='';
		$cad_cam->courses='';
		$cad_cam->isActive=1;
		return $cad_cam;
	}
    public function index()
    {
     $query = $this->db->get('cad_cam_school');
     $this->data['cad_cam_schools']=$query->result();
		 if($this->session->userdata('superadminId'))
	  {
	      $this->load->view('superadmin/cad_cam_school_list', $this->data);
	  }
      else
      {
          redirect('superadmin/index/index');
      }
	}
    public function cad_cam($id=NULL)
    {
    	if($id !=NULL)
    	{
    		$query =  $this->db->get_where('cad_cam_school', array('id' => $id));
			$this->data['cad_cam']=$query->row();
			
		}
		else
		{
			$this->data['cad_cam']=$this->get_new();
		}
    	if($_POST)
    	{
			if(isset($_FILES["fileToUpload"]["name"]))
           	{
           		if($_FILES["fileToUpload"]["name"] != '')
           		{
           			$target_dir = "assets/superadmin/sponors/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				    $pathname=base_url().$target_file;
				   $filename=$_FILES["fileToUpload"]["name"];
					
				}
				else
				{
					$pathname=$this->data['cad_cam']->logo_url;
				   $filename='';
				}
				
			}
			else
			{
				$pathname=$this->data['cad_cam']->logo_url;
				$filename='';
			}
          	$today=date('Y-m-d h:i:s');
			$data=array(
			'institue_name'=>$_POST['institue_name'],
			'logo_url'=>$pathname,
			'contact_person'=>$_POST['contact_person'],
			'address_line1'=>$_POST['address_line1'],	
			'address_line2'=>$_POST['address_line2'],
			'contact_no'=>$_POST['contact_no'],
			'additional_no'=>$_POST['additional_no'],
			'website'=>$_POST['website'],
			'courses'=>$_POST['courses'],
			'website'=>$_POST['website'],
			'created'=>$today,
			
			);
			if($id)
    	    {
    	    	$this->db->where('id', $id);
                $this->db->update('cad_cam_school', $data); 
    	    }
    	    else
    	    {
				$this->db->insert('cad_cam_school', $data); 
			}
			
			//$this->SuperAdmin_M->inset_Sponors($data);
			$this->session->set_flashdata('msg2', 'Succesfully updated ');
			redirect('superadmin/cadcam_school/cad_cam','refresh');
		}
		//print_r($this->data);exit();
	  if($this->session->userdata('superadminId'))
	  {
	      $this->load->view('superadmin/cad_cam_school',$this->data);
	  }
      else
      {
          redirect('superadmin/index/index');
      }
	}
}