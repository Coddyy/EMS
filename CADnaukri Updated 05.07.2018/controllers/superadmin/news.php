<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->model('News_event_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
     $this->load->library('email');
		
    }
    function index($id=NULL)
	{
		if($this->session->userdata('superadminId'))
		{
	       	if($id)
	       	{
		   		$this->data['news']=$this->News_event_M->get($id);
		   		$msg="News And Event Updated Succesfully";
		   	}
		   	else
		   	{
		   		$this->data['news']=$this->News_event_M->get_new();
		   		$msg="News And Event added Succesfully";
		    }
			if(isset($_POST['Savenews']))
			{
				$name=$this->input->post('name');
				$description=$this->input->post('description');
				$ext_link=$this->input->post('ext_link');
				$news_events_data=array(
				'name'=>$name,
				'description'=>$description,
				'ext_link'=>$ext_link,
				'status'=>$this->input->post('status')
				);
				$this->News_event_M->save($news_events_data,$id);
				$this->session->set_flashdata('msg2', $msg);
		    	redirect('superadmin/news/index','refresh');
	     	}
			$this->data['news_info']=$this->News_event_M->get();
			$this->load->view('superadmin/news',$this->data);			
        }
		else
		{
            redirect('superadmin/index/index');
        }
	}  
	function news_list()
	{
		if($this->session->userdata('superadminId'))
		{
	        
				$this->data['news_info']=$this->News_event_M->get();
			    $this->load->view('superadmin/news_list',$this->data);			
        }
		else
		{
            redirect('superadmin/index/index');
        }
	} 
	public function delete_news($id)	 
	{	
		$this->News_event_M->delete_news($id);
	   $this->session->set_flashdata('msg2', 'Deleted Sucessfully');
	  redirect('superadmin/news/news_list','refresh');
	
			
	}
	public function set_notification()
	{
		if($_POST)
		{
			//var_dump($_POST);
			$data= array(
				'notification' =>$this->input->post('notification'),
				'notice_for' =>$this->input->post('notice_for'), 
				'notice_type' =>$this->input->post('notice_type'),
				'link' =>$this->input->post('link'),
				'created'=>date('Y-m-d H:i:s')
				);
			$success=$this->db->insert('notification',$data);
			if($success)
			{
				redirect(base_url()."superadmin/news/notification_saved");
			}
			else
			{
				redirect(base_url()."superadmin/news/notification_not_saved");
			}
		}
		$sql="SELECT * FROM notification ORDER BY created DESC;";
		$query=$this->db->query($sql);
		$data['notifications']=$query->result();
		$data['subview']='superadmin/set_notification';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function edit_notification()
	{
		$n_id=$this->uri->segment(4);
		if($_POST)
		{
			//var_dump($_POST);
			$data= array(
				'notification' =>$this->input->post('notification'),
				'notice_for' =>$this->input->post('notice_for'), 
				'notice_type' =>$this->input->post('notice_type'),
				'link' =>$this->input->post('link'),
				'created'=>date('Y-m-d H:i:s')
				);
			$this->db->where('notification_id',$n_id);
			$success=$this->db->update('notification',$data);
			if($success)
			{
				redirect(base_url()."superadmin/news/notification_updated/".$n_id);
			}
			else
			{
				redirect(base_url()."superadmin/news/notification_not_updated/".$n_id);
			}
		}
		$sql="SELECT * FROM notification WHERE notification_id='$n_id'";
		$query=$this->db->query($sql);
		$data['details']=$query->result();
		$data['subview']='superadmin/edit_notification';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function notification_saved()
	{
		$this->set_notification();
	}
	public function notification_not_saved()
	{
		$this->set_notification();
	}
	public function notification_updated()
	{
		$this->edit_notification();
	}
	public function notification_not_updated()
	{
		$this->edit_notification();
	}
	public function delete_notification()
	{
		$n_id=$this->uri->segment(4);
		$this->db->where('notification_id',$n_id);
		$success=$this->db->delete('notification');
		if($success)
			{
				redirect(base_url()."superadmin/news/notification_deleted/".$n_id);
			}
			else
			{
				redirect(base_url()."superadmin/news/notification_not_deleted/".$n_id);
			}
	}
	public function notification_deleted()
	{
		$this->set_notification();
	}
	public function notification_not_deleted()
	{
		$this->set_notification();
	}

 }