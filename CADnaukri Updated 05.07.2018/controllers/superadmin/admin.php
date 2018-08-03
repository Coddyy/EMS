<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');
	 $this->load->model('Candidate_M');	
	 $this->load->model('View_M');
	 $this->load->model('Job_M');
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('download');
    }
    function index(){
	//echo  'Heloooooooooooo';

	//print_r($data['admin_list']); exit;
	$data['msg']='';
	if(isset($_POST['SaveAdmin']))
	{
		
		$name=$this->input->post('name');
		$emailid=$this->input->post('emailid');
		$password=$this->input->post('password');
		$phone_no=$this->input->post('phone_no');
		
	
		$admindetails=array(
		'name'=>$name,
		'email'=>$emailid,
		'password'=>$password,
		'phone_number'=>$phone_no,
		'timestamp'=>date('Y-m-d H:i:s'),
		'status'=>'1'
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
		//print_r($data['admin_list']); exit();
		$this->SuperAdmin_M->assignModule($role_tbl_data);
		$data['msg']='Admin Successfully Added';
		$data['msg_color']='alert_success';
					/* $this->load->library('email');
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
					$this->email->send(); */
	}
	if($this->input->post('delete_btn'))
	{
		 $admin_id=$this->input->post('admin_id');
		 $delete_status=$this->SuperAdmin_M->delete_admin_list($admin_id);
		 if($delete_status=='1')
		 {
			 $data['msg']='Admin Successfully Deleted';
			 $data['msg_color']='alert_success';
		 }
		 else
		 {
			$data['msg']='Deletion Failed';
			$data['msg_color']='alert_error';
		 }
	}
	$data['admin_list']=$this->SuperAdmin_M->get_admin_list();
	$this->load->view('superadmin/addadmin',$data);
	}
	public function add_daily_poll($sort=NULL)
	{
		if($_POST)
		{
			$status="Pending";
			$data=array(

				"question"=>$this->input->post("question"),
				"ans_A"=>$this->input->post("ans_A"),
				"ans_B"=>$this->input->post("ans_B"),
				"ans_C"=>$this->input->post("ans_C"),
				"ans_D"=>$this->input->post("ans_D"),
				"display_permission"=>$status,
				"display_result"=>$status,
				"created"=>date("Y-m-d H:i:s")
				);
			$saved=$this->SuperAdmin_M->add_daily_poll($data);
			if($saved == true)
			{
				redirect(base_url()."superadmin/admin/daily_poll_added");
			}
			else
			{
				redirect(base_url()."superadmin/admin/daily_poll_not_added");
			}

		}
		$this->load->view('superadmin/add_daily_poll');
		// $data['subview']='superadmin/add_daily_poll';
		// $this->load->view('superadmin/_layout_superadmin',$data);

	}
	public function daily_poll_added()
	{
		$this->session->set_flashdata('daily_poll_added', 'Daily Poll Added');
		$this->add_daily_poll();
	}
	public function daily_poll_not_added()
	{
		$this->session->set_flashdata('daily_poll_not_added', 'Daily Poll Not Added');
		$this->add_daily_poll();
	}
	public function delete_daily_poll()
	{
		//var_dump($this->uri->segment(3));exit();
		$question_id=$this->uri->segment(4);
		$result=$this->SuperAdmin_M->delete_poll($question_id);
		if($result == true)
		{
			redirect(base_url()."superadmin/admin/poll_deleted");
		}
		else
		{
			redirect(base_url()."superadmin/admin/poll_not_deleted");
		}
		
	}
	public function poll_deleted()
	{
		$this->session->set_flashdata('poll_deleted', 'Poll Deleted Successfully');
		$this->add_daily_poll();
	}
	public function poll_not_deleted()
	{
		$this->session->set_flashdata('poll_not_deleted', 'Poll Not Deleted');
		$this->add_daily_poll();
	}
	public function edit_daily_poll()
	{
		$question_id=$this->uri->segment(4);
		if($_POST)
		{
			$data=array(

				"question"=>$this->input->post("question"),
				"ans_A"=>$this->input->post("ans_A"),
				"ans_B"=>$this->input->post("ans_B"),
				"ans_C"=>$this->input->post("ans_C"),
				"ans_D"=>$this->input->post("ans_D")

				);
			$result=$this->SuperAdmin_M->edit_poll($question_id,$data);
			if($result == true)
			{
				redirect(base_url()."superadmin/admin/poll_updated");
			}
			else
			{
				redirect(base_url()."superadmin/admin/poll_not_updated");
			}
		}
		
		$data['poll_details']=$this->SuperAdmin_M->get_that_poll($question_id);
		//$this->load->view('superadmin/edit_daily_poll',$data);
		$data['subview']='superadmin/edit_daily_poll';
		$this->load->view('superadmin/_layout_superadmin',$data);

	}
	public function repost_daily_poll()
	{
		if($_POST)
		{
			$status="Pending";
			$data=array(

				"question"=>$this->input->post("question"),
				"ans_A"=>$this->input->post("ans_A"),
				"ans_B"=>$this->input->post("ans_B"),
				"ans_C"=>$this->input->post("ans_C"),
				"ans_D"=>$this->input->post("ans_D"),
				"display_permission"=>$status,
				"display_result"=>$status,
				"created"=>date("Y-m-d")
				);
			$saved=$this->SuperAdmin_M->add_daily_poll($data);
			if($saved == true)
			{
				redirect(base_url()."superadmin/admin/daily_poll_added");
			}
			else
			{
				redirect(base_url()."superadmin/admin/daily_poll_not_added");
			}

		}
		$question_id=$this->uri->segment(4);
		$data['poll_details']=$this->SuperAdmin_M->get_that_poll($question_id);		
		$data['subview']='superadmin/repost_daily_poll';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function poll_updated()
	{
		$this->session->set_flashdata('poll_updated', 'Poll Updated Successfully');
		$this->add_daily_poll();
	}
	public function poll_not_updated()
	{
		$this->session->set_flashdata('poll_not_updated', 'Poll Not Updated');
		$this->add_daily_poll();
	}
	public function view_result()
	{
		$question_id=$this->uri->segment(4);
		$data['view_poll']=$this->SuperAdmin_M->get_that_poll($question_id);
		$this->load->view('superadmin/view_daily_poll_result',$data);
	}
	public function add_blog()
	{
		if($_POST)
		{
			if(isset($_FILES["blogpic"]["name"])) 
	      	{
	        
		        $config['upload_path']='blogimage/';
		        $config['allowed_types']='jpg|jpeg|png|gif';
		        $this->load->library('upload',$config);
		        if(!$this->upload->do_upload('blogpic'))
		        {
		          echo '<script type="text/javascript">alert("Unsupported Banner");</script>';
		          	redirect(base_url()."superadmin/admin/image_not_supported");
		          //return false;
		          //echo $this->upload->display_errors();
		        }
		        else
		        {
		          $image=$this->upload->data();
		          $blog_image_name=$_FILES["blogpic"]["name"];
		        }
      		}
      		$data=array(

      			"blog_title"=>$this->input->post("blog_title"),
      			"blogger_name"=>$this->input->post("blogger_name"),
      			"description"=>$this->input->post("description"),
      			//"more_description"=>$this->input->post("more_description"),
      			"image"=>$blog_image_name,
      			"image_desc"=>$this->input->post("image_desc"),
      			"created"=>date("Y-m-d H:i:s")

      			);
      		$blog_id=$this->SuperAdmin_M->add_blog($data);
      		//echo $blog_id;exit();
      		$i=0;
      		$insert_batch_content=array();
      		foreach($_POST['content'] as $key => $value) 
      		{
      			// var_dump($_POST['content']);
      			// var_dump($_POST['title']);
      			// exit();

      			$insert_batch_content[$i]['blog_id']=$blog_id;
      			$insert_batch_content[$i]['content']=$_POST['content'][$key];
      			$insert_batch_content[$i]['is_title']=$_POST['title'][$key];
      			$insert_batch_content[$i]['color']=$_POST['color'][$key];
      			$i++;

      		}
      		$result=$this->SuperAdmin_M->insert_batch_blog_content($insert_batch_content);
      		if($result == true)
      		{
      			redirect(base_url()."superadmin/admin/blog_added");
      		}
      		else
      		{
      			redirect(base_url()."superadmin/admin/blog_not_added");
      		}
		}
		$this->load->view('superadmin/add_blog');
		// $data['subview']='superadmin/add_blog';
		// $this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function image_not_supported()
	{
		$this->session->set_flashdata('error', 'Image Not Supported');
		$this->add_blog();
	}
	public function blog_added()
	{
		$this->session->set_flashdata('success', 'Blog Added Successfully');
		$this->add_blog();
	}
	public function blog_not_added()
	{
		$this->session->set_flashdata('error', 'Blog Not Added');
		$this->add_blog();
	}
	public function delete_blog()
	{
		//var_dump($this->uri->segment(3));exit();
		$blog_id=$this->uri->segment(4);
		$result=$this->SuperAdmin_M->delete_blog($blog_id);
		if($result == true)
		{
			redirect(base_url()."superadmin/admin/blog_deleted");
		}
		else
		{
			redirect(base_url()."superadmin/admin/blog_not_deleted");
		}
		
	}
	public function blog_deleted()
	{
		$this->session->set_flashdata('success', 'Blog Deleted Successfully');
		$this->add_blog();
	}
	public function blog_not_deleted()
	{
		$this->session->set_flashdata('error', 'Blog Not Deleted');
		$this->add_blog();
	}
	public function edit_blog()
	{
		$blog_id=$this->uri->segment(4);
		if($_POST)
		{
			if(isset($_FILES["blogpic"]["name"])) 
	      	{
	        
		        $config['upload_path']='blogimage/';
		        $config['allowed_types']='jpg|jpeg|png|gif';
		        $this->load->library('upload',$config);
		        if(!$this->upload->do_upload('blogpic'))
		        {
		          echo '<script type="text/javascript">alert("Unsupported Banner");</script>';
		          //echo $this->upload->display_errors();
		        }
		        else
		        {
		          $image=$this->upload->data();
		          $blog_image_name=$_FILES["blogpic"]["name"];
		        }
      		}
      		$data=array(

      			"blog_title"=>$this->input->post("blog_title"),
      			"description"=>$this->input->post("description"),
      			"more_description"=>$this->input->post("more_description"),
      			"image"=>$blog_image_name,
      			"image_desc"=>$this->input->post("image_desc")

      			);
			$result=$this->SuperAdmin_M->edit_blog($blog_id,$data);
			if($result == true)
			{
				redirect(base_url()."superadmin/admin/blog_updated");
			}
			else
			{
				redirect(base_url()."superadmin/admin/blog_not_updated");
			}
		}
		
		$data['blog_details']=$this->SuperAdmin_M->get_that_blog($blog_id);
		$this->load->view('superadmin/edit_blog',$data);
		// $data['subview']='superadmin/edit_blog';
		// $this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function blog_updated()
	{
		$this->session->set_flashdata('blog_updated', 'Poll Updated Successfully');
		$this->add_blog();
	}
	public function blog_not_updated()
	{
		$this->session->set_flashdata('blog_not_updated', 'Poll Not Updated');
		$this->add_blog();
	}
	public function add_pincode()
	{
		
		if($_POST)
		{
			$city_id=$_POST['city_id'];
			$data=array(

				"city_id"=>$city_id,
				"pincode"=>$this->input->post("pincode")
				);
			$result=$this->Job_M->add_pincode($data);
			// if($result == true)
			// {
			// 	redirect
			// }
			// else
			// {
			// 	redirect
			// }
		}
		$this->load->view('add_pincode');
	}
	public function change_password()
	{
		if($_POST)
		{
			$email=$_POST['email'];
			$success=$this->SuperAdmin_M->check_admin_email($email);
			if($success == true)
			{
				$password=$_POST['password'];
				$result=$this->SuperAdmin_M->change_admin_password($password,$email);
				if($result == true)
				{
					redirect(base_url()."superadmin/admin/password_changed_successfully");
				}
				else
				{
					redirect(base_url()."superadmin/admin/password_not_changed");
				}
			}
			else
			{
				redirect(base_url()."superadmin/admin/email_not_recognised");
			}
		}
		$data['subview']='superadmin/subview/admin_change_password';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function password_changed_successfully()
	{
		$this->change_password();
	}
	public function password_not_changed()
	{
		$this->change_password();
	}
	public function email_not_recognised()
	{
		$this->change_password();
	}
	public function js_test()
	{
		$this->load->view('superadmin/form');
	}
	public function manage_meta_description()
	{
		if(isset($_POST['update']))
		{
			$this->db->truncate('meta_description');
			for ($i=0; $i <count($_POST['cat']) ; $i++) 
			{ 

				$cat=$_POST['cat'][$i];
				$desc=$_POST['desc'][$i];
				$data['desc_for']=$cat;
				$data['description']=$desc;
				$success=$this->db->insert('meta_description',$data);
				if($succes)
				{
					redirect(base_url()."superadmin/admin/manage_meta_description");
				}
			}
		}
		if(isset($_POST['add']))
		{
			$data['desc_for']=$_POST['desc_for'];
			$data['created']=date('Y-m-d H:i:s');
			$success=$this->db->insert('meta_description',$data);
			if($succes)
			{
				redirect(base_url()."superadmin/admin/manage_meta_description");
			}
		}
		$sql="SELECT * FROM meta_description";
		$query=$this->db->query($sql);

		$data['m_ds']=$query->result();
		$data['subview']='superadmin/manage_description';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function exams()
	{
		$data['exams']=$this->SuperAdmin_M->get_all_exams();
		$data['subview']='superadmin/exams';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function exam_qualifiers($exam_details_id)
	{
		$data['exams']=$this->SuperAdmin_M->get_exams_qualifiers($exam_details_id);
		$data['subview']='superadmin/exam_requests';
		$this->load->View('superadmin/_layout_superadmin',$data);
	}
	public function exam_score()
	{
		$apply_id=$this->uri->segment(4);
		$data['exam']=$this->SuperAdmin_M->get_this_exam($apply_id);
		$data['subview']='superadmin/score_sheet';
		$this->load->View('superadmin/_layout_superadmin',$data);
		//$this->load->View('superadmin/score_sheet',$data);
	}
	public function questions($exam_details_id)
	{
		$data['question']=$this->SuperAdmin_M->get_questions($exam_details_id);
		$data['subview']='superadmin/questions';
		$this->load->View('superadmin/_layout_superadmin',$data);
	}
	public function get_certificate_requests()
	{
		if($_POST)
		{
			$apply_id=$_POST['h_apply_id'];
			//echo $id;exit();
			if (isset($_FILES["fileToUpload"]["name"])) 
			{
				$target_dir = "certificates/";
				$target_file = $target_dir . basename($id.rand(133,4000000).$_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				//$newfilename = round(microtime(true)) . '_' . $data['name'];
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$data['certificate_url']=$target_file;
				$data['certificate_status']='2';

				$this->db->where('apply_id',$apply_id);
				$result=$this->db->update('certificate',$data);
				if($result)
				{
					redirect(base_url().'superadmin/admin/get_certificate_requests','refresh');
				}


			}
		}
		$sql="SELECT * FROM certificate ORDER BY created DESC";
		$query=$this->db->query($sql);
		//var_dump($query->result());exit();
		$data['certificates']=$query->result();
		$data['subview']='superadmin/certificate_requests';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	// public function video()
	// {
	// 	$this->load->view('bgvideo');
	// }
	public function service_transactions()
	{
		$data['subview']='superadmin/service_transactions';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}
	public function view_services()
	{
		$trxn_id=$this->uri->segment(4);
		$url="https://softcadinfotech.in/payment/view_services/".$trxn_id;
		$apidata = file_get_contents($url); // put the contents of the file into a variable
		$jsondata=json_decode($apidata);
		$data['serviceArr']=$jsondata->service_id;

		// $serviceIdArr=explode('-',$serviceArr);
		// for ($i=0; $i < count($serviceIdArr) ; ++$i) 
		// { 
		// 	//echo $serviceIdArr[$i];
		// }
		//exit();
		$data['subview']='superadmin/service_taken';
		$this->load->view('superadmin/_layout_superadmin',$data);
	}


}
?>