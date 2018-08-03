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
   $this->load->model('View_M');  
   $this->load->library('form_validation');
   $this->load->library('session');
   $this->load->model('Services_M');
    
    }
    function index(){
         if($this->session->userdata('superadminId')){
              redirect('superadmin/index/dashboard');
     
            }else{
                $this->load->view('superadmin/login');
            }
        //$this->load->view('superadmin/login');
       // echo 'hello';
        
    } 
  function dashboard(){
            if($this->session->userdata('superadminId') || $this->session->userdata('admin_id')){
      $this->load->view('superadmin/index');
            }else{
                redirect('superadmin/index/index');
            }
  }
  
  function login(){

        $email=$this->input->post('email');
                    $password=$this->input->post('password');
                    $result = $this->SuperAdmin_M->login($email, $password);
                    //echo $result;
                    if($result > 0){
                        if($this->session->userdata('candidate_id') || $this->session->userdata('emp_id') 
                 || $this->session->userdata('intern_id') || $this->session->userdata('superadminId'))
          {
              $this->session->sess_destroy();
          }
                        $result = $this->SuperAdmin_M->Info($email, $password);
                        
                        foreach($result as $res){$internId=$res->id;}
                        $newdata = array('superadminId' => $internId);
                        $this->session->set_userdata($newdata);
                        
                  redirect('superadmin/index/dashboard');
                }
                  else{
         $message='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Invalid Email Id and password</div>';
                  $this->session->set_flashdata('invalid', $message);
                    redirect('superadmin/index/index','refresh');
                          }
      
  }
   public function logout()
  {
    $this->session->sess_destroy();
    redirect('superadmin/index','refresh');
  }
  public function add_banner()
  {
    if($_POST)
    {
      
      if(isset($_FILES["banner"]["name"])) 
      {
        
        $config['upload_path']='banner/';
        $config['allowed_types']='jpg|jpeg|png|gif';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('banner'))
        {
          echo '<script type="text/javascript">alert("Unsupported Banner");</script>';
          //echo $this->upload->display_errors();
        }
        else
        {
          $image=$this->upload->data();
          $banner_name=$_FILES["banner"]["name"];
        }
      }
      $active="YES";
      $display="HIDE";
      $data=array(

          "banner_name"=>$banner_name,
          "is_active"=>$active,
          "display"=>$display,
          "type"=>$_POST['type']
        );
      $result=$this->View_M->add_banner($data);
      if($result == true)
      {
        redirect(base_url()."superadmin/index/banner_added");
      }
      else
      {
        redirect(base_url()."superadmin/index/banner_not_added");
      }
    }
    $this->data['subview']='superadmin/add_banner';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
  }
  public function banner_added()
  {
    $this->session->set_flashdata('banner_added', 'Banner Added');
    $this->add_banner();
  }
  public function banner_not_added()
  {
    $this->session->set_flashdata('banner_not_added', 'Banner Not Added');
    $this->add_banner();
  }
  public function tickets()
  {
    $this->data['subview']='superadmin/tickets';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
  }
  public function view_tickets($related_to=NULL)
  {
    $related_to=$this->uri->segment(4);
    $data['tickets']=$this->SuperAdmin_M->get_tickets($related_to);
    $data['subview']='superadmin/view_tickets';
    $this->load->view('superadmin/_layout_superadmin',$data);
  }
  public function change_query_status()
  {
    $type=$this->uri->segment(4);
    $status=$this->uri->segment(5);
    $query_id=$this->uri->segment(6);
    $result=$this->SuperAdmin_M->change_status($status,$query_id);
    if($result == true)
    {
      $details=$this->SuperAdmin_M->get_query_details($query_id);
      
        $dataurl=$details->email.'--'.$details->name.'--'.$status.'--'.$type.'--'.$query_id;
        //echo $dataurl;
        redirect("https://www.softcadinfotech.in/email/shoot_email_for_query/".$dataurl);

        //redirect(base_url()."superadmin/index/view_tickets");
    }
    else
    {
        Echo "Status Not Saved";
    }
  }
  public function change_status_by_user()
  {
    $status=$this->uri->segment(2);
    $query_id=$this->uri->segment(3);
    $result=$this->SuperAdmin_M->change_status_by_user($status,$query_id);
    if($result == true)
    {
      redirect(base_url()."Queries/Re-Opened");
    }
  }
  public function new_candidates()
  {
    $sql="SELECT * FROM candidate WHERE new_entry_check='0' ORDER BY created DESC";
    $query=$this->db->query($sql);
    $udata['new_entry_check']='1';
    $this->db->update('candidate',$udata);
    $this->data['new_candidates']=$query->result();
    $this->data['subview']='superadmin/subview/new_candidates';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
  }
  public function new_employers()
  {
    $sql="SELECT * FROM employer WHERE new_entry_check='0' ORDER BY created DESC";
    $query=$this->db->query($sql);
    $udata['new_entry_check']='1';
    $this->db->update('employer',$udata);
    $this->data['new_employers']=$query->result();
    $this->data['subview']='superadmin/subview/new_employers';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
  }
  public function new_interns()
  {
    $sql="SELECT * FROM intern WHERE new_entry_check='0' ORDER BY created DESC";
    $query=$this->db->query($sql);
    $udata['new_entry_check']='1';
    $this->db->update('intern',$udata);
    $this->data['new_interns']=$query->result();
    $this->data['subview']='superadmin/subview/new_interns';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
  }
  public function view_job_alerts()
  {
      $sql="SELECT * FROM job_alerts ORDER BY created DESC";
      $query=$this->db->query($sql);
      $this->data['details']=$query->result();
      $this->data['subview']='superadmin/view_job_alerts';
    $this->load->view('superadmin/_layout_superadmin',$this->data);
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
          "service_amount"=>$this->input->post("service_price"),
          "duration"=>$this->input->post("service_duration")
          );
        $result=$this->Services_M->save_service($data);
        //exit();
        if($result == true)
        {
          redirect(base_url()."superadmin/index/saved_successfully");
        }
        else
        {
          redirect(base_url()."superadmin/index/not_saved"); 
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