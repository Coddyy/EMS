<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Company extends MY_Controller 
{

  function __construct()
  {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	  $this->load->model('Sponors_home_img_M');	
	  $this->load->model('State_M');	
	  $this->load->model('Recuiter_details_M');	
	  $this->load->model('Functional_area_M');	
	  $this->load->model('Sponors_M');	
	  $this->load->model('Company_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('file');	
	 
  }
  function index()
  {
  	if($this->session->userdata('superadminId'))
  	{
  		$this->data['company_list'] = $this->Company_M->get();
  		//$this->data['company_list'] = $this->Company_M->get_company_details();
  		$this->data['subview']='superadmin/subview/company_list';
  		$this->load->view('superadmin/_layout_superadmin',$this->data);
  	 }
  	 else
  	 {
  	 	redirect('superadmin/index/index');

      }

   }
   public function add_company($id=NULL)
   {
	   	if($this->session->userdata('superadminId'))
	  	{
	  		if($id)
  		    {
	  			$this->data['is_edit']=TRUE;
				$this->data['company']=$this->Company_M->get($id);
				$msg="Succesfully updated company";
		   }
		   else
		   {
				$this->data['is_edit']=FALSE;
				$this->data['company']=$this->Company_M->get_new();
				$msg="Succesfully inserted company";
			}
			if($_POST)
	 	{
	 		   $data['userId']='admin';
		 		$data['name']=$this->input->post('name');
		 		$data['tagline']=$this->input->post('tagline');
		 		$data['regdoffc']=$this->input->post('regdoffc');
		 		$data['address']=$this->input->post('address');
		 		$data['website']=$this->input->post('website');
		 		$data['teamsize']=$this->input->post('teamsize');
		 		$data['phno']=$this->input->post('phno');
		 		$data['mobile']=$this->input->post('mobile');
		 		$data['email']=$this->input->post('email');
		 		$data['description']=$this->input->post('description');
		 		$data['facebook']=$this->input->post('facebook');
		 		$data['linkedin']=$this->input->post('linkedin');
		 		$data['twitter']=$this->input->post('twitter');
		 		$data['google']=$this->input->post('google');
		 		$data['isActive']=1;
		 		$data['isMobile']=1;
		 		$data['isEmail']=1;
		 		$data['created']=date('Y-m-d H:i:s');
		 		$data['added_by']='Superadmin';
			 	 if($_FILES["fileToUpload"]["name"])
			 	 {
				    $target_dir = "assets/company/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
					$filename=$_FILES["fileToUpload"]["name"];
					$data['logo']=base_url($target_file);
				}
			   	if($_FILES["coverimage"]["name"])
			   	{
			   		   $target_dir1 = "assets/company/";
						$target_file1 = $target_dir . basename($_FILES["coverimage"]["name"]);
						move_uploaded_file($_FILES["coverimage"]["tmp_name"], $target_file1);
						$filename=$_FILES["coverimage"]["name"];
						$data['coverimage']=base_url($target_file1);
				}
		 		
		 	$this->Company_M->save($data,$id);	
	 		$this->session->set_flashdata('msg2',$msg);
			redirect(base_url().'superadmin/company/add_company');
	 		
	 	}
			
	  		
	  		$this->data['subview']='superadmin/subview/add_company';
	  		$this->load->view('superadmin/_layout_superadmin',$this->data);
	  	 }
	  	 else
	  	 {
	  	 	redirect('superadmin/index/index');

	      }
   }
   public function delete_comapny($id)
    {
	 	$sql="Delete from company where id=$id";
	 	$this->db->query($sql);
	 	$this->session->set_flashdata('msg2','Recored deleted successfully');
	 	redirect('superadmin/company/index');
	 	
	 }
     

    

}