<?php

/**
 * Description of index
 *
 * @author kodekonductors
 */
class Index extends MY_Controller {
	//constructor function 
  function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
		
    }
    function index(){
         if($this->session->userdata('admin_id')){
              redirect('admin/index/dashboard');
	   
            }else{
                $this->load->view('admin/login');
            }
        //$this->load->view('superadmin/login');
       // echo 'hello';
        
    }	
	function dashboard()
	{
            if($this->session->userdata('admin_id'))
			{
	        $this->load->view('admin/index');
            }
			else
			{
                redirect('admin/index/index');
            }
	}
	
	function login()
	{
		
		$email=$this->input->post('email');
	    $password=$this->input->post('password');
	    $result = $this->SuperAdmin_M->adminlogin($email, $password);
	    
	    if($result > 0)
	    {
	        $result = $this->SuperAdmin_M->admininfo($email, $password);
	        foreach($result as $res)
	        {
				$internId=$res->id;
			}
	        $newdata = array('admin_id' => $internId);
	        $this->session->set_userdata($newdata);
	        redirect('admin/index/dashboard');
        }
        else
        {
		 	$message='<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           Invalid Email Id and password</div>';
            $this->session->set_flashdata('invalid', $message);
          	redirect('admin/index/index','refresh');
        }
			
	}
	
	function get_module()
	{
		$result['admin_id']=$this->session->userdata('admin_id');
		
		//$this->SuperAdmin_M->get_module();
	}
	
	
	
	
	
         public function logout()
	{
		$this->SuperAdmin_M->logout();
		redirect('admin/index/index','refresh');
	}
	
   
}