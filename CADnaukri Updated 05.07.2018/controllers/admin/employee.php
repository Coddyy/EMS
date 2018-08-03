<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->model('Employee_M');
	 $this->load->library('form_validation');
	 $this->load->library('session');
          $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('admin_id')){
               $result['empInfo'] = $this->SuperAdmin_M->empInfo();
	      $this->load->view('admin/employee',$result);
            }else{
                redirect('admin/index/index');
            }
     }
     function signup(){
           if($this->session->userdata('admin_id')){
                 
	      $this->load->view('admin/employee_signup');
            }else{
                redirect('admin/index/index');
            }
     }
       /*#####################EMployee Insert Form###########################*/
     public function empdata()
	{ 
  
		if(isset($_POST['emailid'])){
                $email=$_POST['emailid'];
                $this->form_validation->set_rules('emailid', 'emailid', 'trim|required|valid_email|callback_email_exists1['.$email.']');
                }
                 if(isset($_POST['phoneno'])){
                $phoneno=$_POST['phoneno'];
             $this->form_validation->set_rules('phoneno', 'phoneno', 'trim|required|valid_phone|exact_length[10]|callback_phoneno_exists1['.$phoneno.']');
                }
                  $this->form_validation->set_rules('password', 'Password', 'matches[cpassword]');
                 //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'matches[password]');
				 
			if ($this->form_validation->run() == FALSE)
			{
	                redirect('hauth_emp/index');
			}
			else
			{
		
			$rand='';
			$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
				shuffle($seed); // probably optional since array_is randomized; this may be redundant
			foreach (array_rand($seed, 6) as $k) 
			$rand.= $seed[$k];
			$today=date("Y-m-d h:i:s");
		    $password=$_POST['password'];
		    $encryptedpass1=md5($password);
			$email=$_POST['email'];
		     	 
			$data=array(
			'id'=>NULL,
			'fName'=>$_POST['fname'],
			'lName'=>$_POST['lname'],	
			'email'=>$_POST['email'],
			'password'=>$encryptedpass1,	
			'mobile'=>$_POST['mobile'],
			'companyname'=>$_POST['companyname'],
			'location'=>$_POST['presentlocation'],
			'address'=>$_POST['address'],
			'roles'=>$_POST['role'],
			'nationality'=>$_POST['nationality'],
			'isEmail'=>'0',
			'isMobile'=>'0',
			'deviceId'=>'0',
			'emailVerificationCode'=>$rand,
			'mobileVerificationCode'=>$rand,
			'socialProvider'=>'SELF',
			'isEmailverified'=>'0',
			'isMobileVerified'=>'0',
			'serviceOptd'=>'0',
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1',
			
			);
			$config['mailtype'] = 'html';

                            $this->email->initialize($config);

			   $message = '<html><body>';
                  $message .= "<img src='http://cadnaukri.com/images/dottedline.png' alt='cadnaukri.com' /><br />";
                $message .= "<p style='color:orange'>Dear User,</p><br /><br /><br />";

                $message .= "<p> User Name: $email<br/><br/>";
                  $message .= "<p> Password: $password<br/><br/>";
                 //$message .= $rand;    
                  $message .= "<br/><br/>";    				 
                $message .= "<b>NB:</b> Please visit our site once again to discover a new job search experience with host of features & benefits..<br/><br/>";

                  $message .= "<b>Happy Recuirting.. :</b><br /><br/>"; 
                   $message .= "<b>cadnaukri.com</p>"; 
                //$message .= "</table>";
                     $message .= "</body></html>";
			$this->load->library('email');
			$this->email->from('no-reply@cadnaukri.com','Cadnaukri');
			$this->email->to($email); 
			$this->email->subject('CADnaukri Credential');
			$this->email->message($message);
			$this->email->send();
                        /*########################End Email send################*/
                        /*########################Insert Date into database################*/
			$this->SuperAdmin_M->insert_emplogin($data);
                           $this->session->set_flashdata('msg2', 'Succesfully Update Sponors');
			
                         redirect('admin/employee/signup','refresh');
			}
			
	}
        public function empSingleList() 
	{
	    if($this->session->userdata('admin_id')){
            $id=$_POST['empid'];
        // echo $id;
           $singleList=$this->SuperAdmin_M->empSingleList($id);
         //  print_r($singleList);
           foreach ($singleList as $value) {
               $name=$value->fName.' '.$value->lName;
                      
         echo "
			<h4>Employee Name: " . $name. "</h4> 
                         <h4>Email " . $value->email. "</h4> 
			<h4>Company Name : " .$value->companyName  . "</h4> 
			<h4>Mobile  : " . $value->mobile   . "</h4> 
                         <h4>Location  : " . $value->location   . "</h4> 
			<h4>Address : " .$value->address   . "</h4> 
			<h4>Roles : " . $value->roles   . "</h4> 
			<h4>Nationality: " . $value->nationality   . "</h4> ";
			
           }
           }
           else{
                redirect('admin/index/index');
            }
        }
        public function editEmployee() {
             if($this->session->userdata('admin_id')){
            $id=$_GET['id'];
        //echo $id;
           $singleList['empsingleList']=$this->SuperAdmin_M->empSingleList($id);
         //  print_r($singleList);
           $this->load->view('admin/employee_edit',$singleList);
             }
             else{
                redirect('admin/index/index');
            }
            
        }
        public function empUpdate(){
             if($this->session->userdata('admin_id')){
                $id= $_POST['id'];
                 $data=array(
			'fName'=>$_POST['fname'],
			'lName'=>$_POST['lname'],	
			'email'=>$_POST['email'],
			'mobile'=>$_POST['mobile'],
			'companyname'=>$_POST['companyname'],
			'location'=>$_POST['presentlocation'],
			'address'=>$_POST['address'],
			'roles'=>$_POST['role'],
			'nationality'=>$_POST['nationality'],
			'modified'=>date('Y-m-d h:i:s'),
			
			
			);
                 $this->SuperAdmin_M->updateEmployee($id,$data);
                 redirect('admin/employee/index','refresh');
             }
             else{
                redirect('admin/index/index');
            }
        }
         public function deleteEmployee(){
             if($this->session->userdata('admin_id')){
                 $id=$_GET['id'];
                 $data=array('isActive'=>0);
                 $this->SuperAdmin_M->deleteEmployee($id,$data);
                 redirect('admin/employee/index','refresh');
                 
             }
             else{
                redirect('admin/index/index');
            }
        }		//Delete Employee		 public function actionEmployee()	 {			 echo "hello";				 if($this->session->userdata('admin_id')){				if(isset($_POST['delete'])){			$userId=$this->input->post('userId');			$this->SuperAdmin_M->deleteAllEmployee($userId);			//redirect('superadmin/employee');				} 				/* else if(isset($_POST['mail']))				{					$userId=$this->input->post('userId');						$data['emailid']=$this->SuperAdmin_M->getemailid($userId);										$this->load->view('superadmin/mail',$data);									} */																	}  				}
        
	//Delete Employee
		 public function actionEmployee()	 {	
	
			 if($this->session->userdata('admin_id')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			$this->SuperAdmin_M->deleteAllEmployee($userId);
			redirect('admin/employee');
				} 
				else if(isset($_POST['mail']))
				{
					$employee_id=$this->input->post('userId');	
					$data['emailid']=$this->SuperAdmin_M->getEmployee_emailid($employee_id);
					$this->load->view('admin/mail',$data);
					
				}
				
				
						
			}  
		
		}
	public function view_profile_details()
	{
		$emp_id=$this->uri->segment(4);
		$data['mydata']=$this->Employee_M->get_my_details($emp_id);
		//$data['subview']='superadmin/emp_profile';
		$this->load->View('admin/emp_profile',$data);
	}
	public function download_profile_details()
	{
		$emp_id=$this->uri->segment(4);
		$data['mydata']=$this->Employee_M->get_my_details($emp_id);
		$this->load->View('admin/emp_profile',$data);
	}
		
		
}
 