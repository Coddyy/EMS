<?php

class Blog extends MY_Controller {
	//constructor function 
  function __construct()
   {
      parent::__construct();
	   	$this->load->model('Skills_M');
		$this->load->model('Functional_area_M');
		$this->load->model('Industry_type_M');
		$this->load->model('Education_details_M');
		$this->load->model('Job_M');
		$this->load->model('Job_skill_M');
		$this->load->model('Job_apply_M');
		$this->load->model('Candidate_M');
		$this->load->model('Employee_M');
		$this->load->model('City_M');
		$this->load->model('Company_M');
		$this->load->model('News_event_M');	
		$this->load->model('Sponors_home_img_M');		
		$this->load->model('Sponors_M');		
		$this->load->model('Search_M');
		$this->load->model('Recuiter_details_M');	
		$this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->model('View_M');
    $this->load->model('Blog_M');
		
    }
    public function index()
    {
        $data['subview']='blogs/blog_homepage/blog_home';
        $this->load->view('_layout_home',$data);
    }

   public function Twelve_make_ways_to_succeed_in_job_interviews()
   {

   	//Will Use When More Than One Blogs Are There

   		//if($_POST)
		//{

			//Do Nothing
			
		//}

   	//Static 1 Blog

   		$blog_id=33;
      $this->Blog_M->save_views($blog_id);
   		$data['blog_details']=$this->Blog_M->get_this_blog($blog_id);
   		if($data['blog_details'] != false)
   		{
   			  $data['subview']='public/test_blog';
			   $this->load->view('_layout_home',$data);
   		}
   		else
   		{
   			echo "No such blog there!";
   		}
		
   }
  public function Want_an_exciting_career_then_its_time_to_become_a_Design_Engineer()
   {

    //Will Use When More Than One Blogs Are There

      //if($_POST)
    //{

      //Do Nothing
      
    //}

    //Static 1 Blog

      $blog_id=34;
      $this->Blog_M->save_views($blog_id);
      $data['blog_details']=$this->Blog_M->get_this_blog($blog_id);
      if($data['blog_details'] != false)
      {
          $data['subview']='public/test_blog';
         $this->load->view('_layout_home',$data);
      }
      else
      {
        echo "No such blog there!";
      }
    
   }
   public function test_blog()
   {
      $data['subview']='blogs/blog1/blogpage';
      $this->load->view('_layout_home',$data);
   }  

   public function find_data()
   {
   		$sql="SELECT candidate.name AS name,candidate.email AS email,candidate.mobile AS mobile,skills.name AS skill_name,expdetails.experience AS exp 
   		FROM candidate 
   		LEFT JOIN candiate_key_skills ON candiate_key_skills.user_id = candidate.id 
   		LEFT JOIN expdetails ON expdetails.userId = candidate.id 
   		JOIN skills ON skills.id= candiate_key_skills.key_id 
   		WHERE (candiate_key_skills.key_id = '34' OR candiate_key_skills.key_id = '59' OR candiate_key_skills.key_id = '119') AND (expdetails.experience='2-3' OR expdetails.experience='3-5') 
   		GROUP BY candidate.name 
   		ORDER BY candidate.created DESC;
   		";
   		$query=$this->db->query($sql);
   		$data=$query->result();
   		foreach ($data as $key) 
   		{
   			echo '<span style="color:green;"><b>Name : </b></span><b style="color:blue;">'.$key->name.'</b> <span style="color:green;"><b>Email : </b></span><b style="color:blue;">'.$key->email.'</b>  <span style="color:green;"><b>Mobile : </b></span><b style="color:blue;">'.$key->mobile.'</b> <span style="color:green;"><b>Skill : </b></span><b style="color:blue;">'.$key->skill_name.'</b> <span style="color:green;"><b>Exp : </b></span><b style="color:blue;">'.$key->exp.'</b>';
   			echo "<br />";
   			echo "<br />";
   		}
   }
   public function today_registered()
   {
      date_default_timezone_set("Asia/Kolkata"); 
      $today=date('Y-m-d');
      $sql="SELECT name,email,mobile FROM candidate WHERE DATE(created) LIKE '%$today%' ORDER BY created DESC;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      $data=$query->result();
      echo '<h2>Today Registered</h2>';
      echo "<br />";
        echo "<br />";
      foreach ($data as $key) 
      {

        echo '<span style="color:green;"><b>Name : </b></span><b style="color:blue;">'.$key->name.'</b> <span style="color:green;"><b>Email : </b></span><b style="color:blue;">'.$key->email.'</b>  <span style="color:green;"><b>Mobile : </b></span><b style="color:blue;">'.$key->mobile.'</b>';
        echo "<br />";
        echo "<br />";
      }
   }
   public function today_birthday()
   {
      date_default_timezone_set("Asia/Kolkata"); 
      $today=date('Y-m-d');
      $sql="SELECT name,email,mobile FROM candidate WHERE DATE(dob) LIKE '%$today%' ORDER BY created DESC;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      $data=$query->result();
      echo '<h2>Birthdays</h2>';
      echo "<br />";
        echo "<br />";
      foreach ($data as $key) 
      {

        echo '<span style="color:green;"><b>Name : </b></span><b style="color:blue;">'.$key->name.'</b> <span style="color:green;"><b>Email : </b></span><b style="color:blue;">'.$key->email.'</b>  <span style="color:green;"><b>Mobile : </b></span><b style="color:blue;">'.$key->mobile.'</b>';
        echo "<br />";
        echo "<br />";
      }
   }

   public function blog_2()
   {
      $data['subview']='blogs/blog2/blog_2';
      $this->load->view('_layout_home',$data);
   }
   public function blog_3()
   {
      $data['subview']='blogs/blog3/blog_3';
      $this->load->view('_layout_home',$data);
   }
   public function blog_4()
   {
      $data['subview']='blogs/blog4/blog_4';
      $this->load->view('_layout_home',$data);
   }
   public function blog_5()
   {
      $data['subview']='blogs/blog5/blog_5';
      $this->load->view('_layout_home',$data);
   }
   public function our_team()
   {
      $this->load->view('our_team');
   }
}
?>