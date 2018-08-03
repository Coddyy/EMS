<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
     $this->load->library('email');
		
    }
    function index()
	{
		if($this->session->userdata('adminId'))
			{
	        
				if(isset($_POST['Savenews']))
				{
				$name=$this->input->post('name');
				$description=$this->input->post('description');
				$news_events_data=array(
				'name'=>$name,
				'description'=>$description,
				'created'=>date('Y-m-d'),
				'modified'=>date('Y-m-d'),
				'status'=>'0'
				);
				$this->SuperAdmin_M->add_news_events($news_events_data);
				}
			$data['news_info']=$this->SuperAdmin_M->get_news_events();
			$this->load->view('admin/news',$data);			
            }
		else{
            redirect('admin/index/index');
            }
	}   
	public function delete_news()	 {	
	
			if($this->session->userdata('adminId')){
				if(isset($_POST['delete'])){
				$userId=$this->input->post('userId');
				$this->SuperAdmin_M->delete_news($userId);
				redirect('admin/news');
				} 
			}  
		}		
    
		
	}
 