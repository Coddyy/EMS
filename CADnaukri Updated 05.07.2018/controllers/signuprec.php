<?php
class Signuprec extends MY_Controller  
{
    //constructor function 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sign_up_rec_M');
        $this->load->model('Candidate_M');
        $this->load->model('Employee_M');
        $this->load->model('View_M');
    }
    public function index()
    {
        //echo "Hello";

    }
    public function sign_up()
    {
        //echo "Success";exit();
        //var_dump($_POST);exit();
        $email=$_POST['email'];
        //echo $email;exit();
        $result=$this->Sign_up_rec_M->check_already_exist($email);
        if($result == true)
        {
            $data=array(
                "name"=>$this->input->post("name"),
                "email"=>$this->input->post("email"),
                "mobile"=>$this->input->post("mobile"),
                "roles"=>$this->input->post("role"),
                "cv_download_limit"=>'10',
                "company_permission"=>'YES',
                "account_type"=>"Basic",
                "created"=>date('Y-m-d H:i:s')
                );
            $result=$this->Sign_up_rec_M->sign_up($data);
            if($result != false)
            {
                $id=$this->Sign_up_rec_M->get_id($email);
                $name=$this->Sign_up_rec_M->get_name($id);
                redirect("https://www.softcadinfotech.in/email/recruiter/".$email."/".$id);
                //echo $id; exit();
                //$msg='Set Password';
                // $this->load->library('email');

                // $this->email->from('no-reply@cadnaukri.com','Cadnaukri.com');
                // $this->email->to($email);
                // //$this->email->cc('shaktiprasad.dash@softcadinfotech.in');
                // //$this->email->bcc('them@their-example.com');
                
                // $this->email->subject("Set Password");
                // $this->email->message("Hello ".$name."\n\n"."Click the link below To set your password"."\n\n".'http://cadnaukri.com/signuprec/set_password/'.$id."\n\n"."- CADnaukri Team");
                
                // $this->email->send();
                // redirect(base_url()."signuprec/sign_up_success");
            }
            else
            {
                redirect(base_url()."signuprec/sign_up_failed");
            }
        }
        else
        {
            redirect(base_url()."signuprec/email_already_exist");
        }
    } 
    public function sign_up_success()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function sign_up_failed()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function email_already_exist()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function set_password()
    {
        $id=$this->uri->segment(3);
        //echo $id;exit();
        $result=$this->Sign_up_rec_M->check_url($id);
        if($result != false)
        {
            //echo "Url Passed";exit();
            $this->data['subview'] ='set_password';
            $this->load->view('_layout_home',$this->data);
            if($_POST)
            {
                //var_dump($_POST['password']);exit();
                $password=md5($_POST['password']);
                //echo $password;exit();
                $result=$this->Sign_up_rec_M->set_password($password,$id);
                if($result != false)
                {
                    $name=$this->Sign_up_rec_M->get_name($id);
                    // $this->load->library('email');

                    // $this->email->from('no-reply@cadnaukri.com','Cadnaukri.com');
                    // $this->email->to('shaktiprasad.dash@softcadinfotech.in');
                    // //$this->email->cc();
                    // //$this->email->bcc('them@their-example.com');
                
                    // //$this->email->subject('New User');
                    // $this->email->message("New Recruiter Signed Up"."\n\n"."Recruiter_id: ".$id."\n\n"."Name: ".$name);
                
                    // $this->email->send();
                    $this->session->set_flashdata('successmsg', 'Password set successfully');
                    redirect(base_url('employer/login'),'refresh');
                }
                else
                {
                    redirect(base_url()."signuprec/password_set_failed");
                }
            }
        }
        else
        {
            redirect(base_url()."signuprec/link_expired");
        }

    }
    public function link_expired()
    {
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function rpassword_set_success()
    {
        $this->session->set_flashdata('success', 'Password Has Been Set Successfully');
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
    public function password_set_failed()
    {
        $this->session->set_flashdata('error', 'Password Not Set');
        $this->data['subview'] ='flashdata';
        $this->load->view('_layout_home',$this->data);
    }
}
?>