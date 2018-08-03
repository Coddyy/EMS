<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intern extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
     $this->load->model('Intern_M');
            $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('superadminId')){
               $result['internInfo'] = $this->SuperAdmin_M->internInfo();
	      $this->load->view('superadmin/intern',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
     function signup(){
          if($this->session->userdata('superadminId')){
                $this->load->view('superadmin/intern_signup');
            }else{
                redirect('superadmin/index/index');
            }
         
     }
     function  insertSignup(){
            // $rand='';
            // $seed = str_split('abcdefghijklmnopqrstuvwxyz'  .'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789'.'!@#$%^&*'); // and any other characters
            // shuffle($seed); // probably optional since array_is randomized; this may be redundant
            // foreach (array_rand($seed, 6) as $k) $rand.= $seed[$k];
            $password=$_POST['password'];
            $encryptedpass=md5($password);
            $firstname=$this->input->post('firstname');
            //$lastname=$this->input->post('lastname');
            $phone_primary=$this->input->post('phone_primary');
            $email=$this->input->post('email');
             $data = array(
                           'name' => $firstname,
                           'email'=>$email,
                           'password'=> $encryptedpass,
                           'phno'=>$phone_primary,
                           'created'=>date('y-m-d'),
		                   'modified'=>date('y-m-d'),
                           'dob'=>$this->input->post('dob'),
                           'nick_name'=>$this->input->post('nick_name'),
                           'isActive'=>1,
                           'admin_created_password'=>$password
                );
            $this->SuperAdmin_M->inset_Intern($data);
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $message = '<html><body>';
            $message .= "<img src='http://cadnaukri.com/images/dottedline.png' alt='cadnaukri.com' /><br />";
            $message .= "<p style='color:orange'>Dear $firstname,</p><br /><br />";
            $message .= "<p> You are succesfully connected with cad naukri:<br/>";
            $message .= "<p> You can login with following credential:<br/>";
            $message .= "Email  $email<br/><br/>";
            $message .= "Password $password<br/>";
            $message .= "<b>NB:</b> Please visit our site once again to discover a new intership,job  search experience with host of features & benefits..<br/><br/>";
            $message .= "<b>Wising you all the very best.. :</b><br /><br/>"; 
            $message .= "<b>cadnaukri.com</p>"; 
            $message .= "</body></html>";
            $this->load->library('email');
            $this->email->from('no-reply@cadnaukri.com','Cad Naukri');
            $this->email->to($email); 
            $this->email->subject('Cadnukri Greetings ');
            $this->email->message($message);
            $this->email->send();
            redirect('superadmin/intern/index','refresh');
        }
          public function deleteIntern(){
             if($this->session->userdata('superadminId')){
                 $id=$_GET['id'];
                 
                 $this->SuperAdmin_M->deleteIntern($id);
                 redirect('superadmin/intern/index','refresh');
                 
             }
             else{
                redirect('superadmin/index/index');
            }
        }
          public function editIntern() {
           if($this->session->userdata('superadminId')){
            $id=$_GET['id'];
          $singleList['internsingleList']=$this->SuperAdmin_M->internSingleList($id);
          $this->load->view('superadmin/intern_edit',$singleList);
             }
             else{
                redirect('superadmin/index/index');
            }
            
        }
        public function updateIntern() {
           if($this->session->userdata('superadminId')){
            $id=$_POST['id'];
             $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $phone_primary=$this->input->post('phone_primary');
            $email=$this->input->post('email');
            $data = array(
                           'name' => $firstname,
			                //'lastname'=>$lastname,
                          'email'=>$email,
                          
                          'phno'=>$phone_primary,
                          'modified'=>date('y-m-d'),
                          'isActive'=>1,
                );
            $this->SuperAdmin_M->updateIntern($id,$data);
             redirect('superadmin/intern/index');
             }
             else{
                redirect('superadmin/index/index');
            }
            
        }
		//Delete Checked Intern
		     public function deleteallIntern()	 {	
	
			if($this->session->userdata('superadminId')){
				if(isset($_POST['delete'])){
			$userId=$this->input->post('userId');
			
			$this->SuperAdmin_M->deletechkdIntern($userId);
			redirect('superadmin/intern');
				} 
				else if(isset($_POST['mail']))
				{
					$userId=$this->input->post('userId');	
					$data['emailid']=$this->SuperAdmin_M->getIntern_emailid($userId);
					$this->load->view('superadmin/mail',$data);	
				}
				
				
						
			}  
		
		}
        public function view_profile($id)
		{
            //echo $id;
            $data['intern']=$this->Intern_M->get_intern_details($id);            
            $data['intern_edu']=$this->Intern_M->get_intern_edu_details($id);
            $data['subview']='superadmin/intern_profile';
            $this->load->view('superadmin/_layout_superadmin',$data);
        }
        public function delete_intern($id)
        {
            //echo $id;exit();
            $this->db->where('id',$id);
            $success=$this->db->delete('intern');
            if($success)
            {
                redirect(base_url()."superadmin/intern/intern_deleted");
            }
            else
            {
                echo "Not Deleted";
            }
        }
        public function intern_deleted()
        {
            $this->index();
        }
           
             
        
     
}