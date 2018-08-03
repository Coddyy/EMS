<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('download');
    }
    function index(){
	//echo  'Heloooooooooooo';
	$this->load->view('admin/addadmin');
	if(isset($_POST['SaveAdmin']))
	{
		
		$name=$this->input->post('name');
		$emailid=$this->input->post('emailid');
		$password=$this->input->post('password');
		
	
		$admindetails=array(
		'name'=>$name,
		'email'=>$emailid,
		'password'=>$password,
		'timestamp'=>now(),
		'status'=>'0'
		);
	$last_ins_id=$this->SuperAdmin_M->addAdmin($admindetails);
	$module=$this->input->post('module');
		$escaped_module = array_map('mysql_real_escape_string', array_values($module));
		$module_id  = implode(", ", $escaped_module);
	 $role_tbl_data=array(
		'module_id'=>$module_id,
		'admin_id'=>$last_ins_id,
		'timestamp'=>now(),
		'status'=>'0'
		);
	$this->SuperAdmin_M->assignModule($role_tbl_data);
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('no-reply@cadnaukri.com', 'Cadnaukri Team');
					$this->email->to($emailid); 
					$this->email->subject('WELCOME');
					$msg='';
					$msg.='Hi <br>Welcome to Cadnaukri !<br>';
					$msg.='your account has been created with admin previlaged.';
					$msg.='please login using this link and this credential.';
					$msg.=' <br><br><br>Thanking You<br>Cadnaukri Team';
					$this->email->message($msg); 
					$this->email->send();
	}
	
	}
	public function job_admin()
	{
		echo "Hello";
		//$this->load->view('admin/job_admin');
	}
}