<?php
class Schools extends MY_Controller {
	//constructor function 
  function __construct()
   {
      parent::__construct();
	    
		$this->load->model('Candidate_M');
		$this->load->model('Employee_M');
     	$this->load->model('View_M');
     	$this->load->model('School_M');
     	$this->load->helper('url');
    }
    public function index()
    {

    }
    public function cad_cam_school()
    {
    	if($_POST)
    	{
    		//var_dump($_POST);
    		$data=array(
    			"company_name"=>$this->input->post('cname'),
    			"est_year"=>$this->input->post('es_year'),
    			"mobile"=>$this->input->post('mobile'),
    			"landno"=>$this->input->post('landno'),
    			"website"=>$this->input->post('website'),
    			"email"=>$this->input->post('email'),
    			"address"=>$this->input->post('address'),
    			"course"=>$this->input->post('course'),
    			"contact_person_name"=>$this->input->post("contact_person_name")
    			// "contact_person_name"=>$this->input->post("")
    			);
    		$result=$this->School_M->save_schools($data);
    		if($result == true)
    		{
    			redirect(base_url()."schools/saved");
    		}
    		else
    		{
    			redirect(base_url()."schools/not_saved");
    		}
    	}

     	$data['subview']='schools/sign_up';
     	$this->load->view('_layout_home',$data);
	}
	public function saved()
	{
		$this->cad_cam_school();
	}
	public function not_saved()
	{
		$this->cad_cam_school();
	}
	public function save_company_name()
	{
		$id=$this->input->post('id');
		echo $id;
	}
}
?>