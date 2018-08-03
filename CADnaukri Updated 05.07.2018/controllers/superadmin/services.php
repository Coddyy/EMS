<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MY_Controller 
{
	function __construct()
   	{
     parent::__construct();
     $this->load->model('Services_M');
    }
    function index()
    {
    	//echo "hello";exit();
    	//$this->Services_M->index();
    }
    public function add_service()
    {
    	//echo "hello";exit();
    	if($_POST)
    	{
    		//var_dump($_POST);exit();
    		$data=array(
    			"service_name"=>$this->input->post("service_name"),
    			"service_description"=>$this->input->post("service_description"),
    			"service_amount"=>$this->input->post("service_price")
    			);
    		$result=$this->Services_M->save_service($data);
    		//exit();
    		if($result == true)
    		{
    			redirect(base_url()."superadmin/services/saved_successfully");
    		}
    		else
    		{
    			redirect(base_url()."superadmin/services/not_saved");	
    		}
    	}
    	$data['subview']='superadmin/add_service';
        $this->load->view('superadmin/_layout_superadmin',$data);
    }
    public function saved_successfully()
    {
    	$this->add_service();
    }
    public function not_saved()
    {
    	$this->add_service();
    }
}
?>