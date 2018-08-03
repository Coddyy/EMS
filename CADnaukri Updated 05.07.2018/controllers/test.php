<?php
class Test extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Candidate_M');
        $this->load->model('Employee_M');
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
    	
    }
    // public function new_header()
    // {
    //     $this->load->view('header');

    // }
    public function new_dashboard()
    {
        $this->load->view('new_dashboard');

    }

    public function new_homepage()
    {
        $this->load->view('new_homepage');

    }
    public function homepage_header()
    {
        $this->load->view('homepage_header');

    }
    public function new_personal_details()
    {
        $this->load->view('new_personal_details');
    }
     public function new_account_setting()
    {
        $this->load->view('new_account_setting');
    }
    public function footer()
    {
        $this->load->view('footer');
    }

    // public function new_header_new()
    // {
    //     $this->load->view('new_header_new');
    // }
    public function header()
    {
        $this->load->view('header');
    }
   public function search_bar()
    {
        $this->load->view('search_bar');
    }
    public function daily_poll_new()
    {
        $this->load->view('daily_poll_new');
    }
    public function daily_poll()
    {
        $this->load->view('daily_poll');
    }
    public function view_daily_poll()
    {
        $this->load->view('view_daily_poll');
    }
    public function testcron()
    {
    	$count='12345';
    	$data=array(
    		"count"=>$count,
    		"date"=>date("Y-m-d H:i:s")
    		);
    	$this->Candidate_M->testcronnew($data);
    }
    public function employer_dashboard()
    {
        $this->data['subview']='employeer_dashboard';
        $this->load->view('_layout_home',$this->data);
    }
    public function new_dash()
    {
        $this->data['subview']='candidate/subview/dashboard_new';
        $this->load->view('_layout_home',$this->data);
    }
    public function candidate_dashboard()
    {
        $this->data['subview']='candidate_dashboard';
        $this->load->view('_layout_home',$this->data);
    }
    public function graph()
    {
        $this->load->view('graph');
    }
    public function blog()
    {
        $this->load->view('test_new/Blogs');
    }
    public function image_style()
    {
        $this->load->view('test_new/image_style');
    }
    public function news_event1()
    {
        $this->load->view('test_new/news_event1');
    }
    public function social()
    {
        $this->load->view('test_new/social');
    }
    public function news_slider()
    {
        $this->load->view('test_new/news_slider');
    }
    public function homepage($city=NULL)
    {
        $this->data['skills']=$this->Skills_M->skill_autocomplete();
        $this->data['functional_area']=$this->Functional_area_M->get();
        $this->data['jobs']=$this->Job_M->get();
        $this->data['featured_jobs']=$this->Job_M->get_active_jobs('Y');
        $this->data['citis']=$this->City_M->location_autocomplete();
        $this->data['industry_type']=$this->Industry_type_M->get();
        $this->data['home_images']=$this->Sponors_home_img_M->get_active_img();
        $this->data['recuiter_images']=$this->Recuiter_details_M->get();
        $this->data['news_events']=$this->News_event_M->get_by(array('status'=>'Y'));
        $this->data['cad_cam_schools']=$this->Sponors_M->get();

        $this->data['per_day_visitors']=$this->Search_M->get_per_day_visitors();
        $this->data['total_candidate_registerd']=$this->Candidate_M->get_total_candidates();
        $this->data['total_employee_registerd']=$this->Employee_M->get_total_employees();
        $this->data['total_jobs']=$this->Job_M->get_total_jobs();
        $this->data['active_candidates']=$this->Candidate_M->get_active_candidates();
        $this->data['selected_city']=$city;
        $this->data['fake_random_registrations']=$this->Search_M->get_random_fake_registrations();
        $this->data['new_fake_random_registrations']=$this->Search_M->get_new_fake_registrations();
        
        $this->load->view('test_new/homepage',$this->data);
    }
    public function new_blog()
    {
        $this->load->view('test_new/view_blog');
    }
     public function new_blog1()
    {
        $this->load->view('test_new/new_blog');
    }
    public function add_blog()
    {
        $this->load->view('test_new/add_blog');
    }
    public function job_post()
    {
        $this->load->view('test_new/job_post');
    }
    public function preview()
    {
        $this->load->view('test_new/preview');
    }
    public function job_by_location()
    {
        $this->load->view('test_new/job_by_location');
    }
    public function emp_profile()
    {
        $this->load->view('emp_profile');
    }
    public function emp_company()
    {
        $this->load->view('emp_company');
    }
    public function landing_page()
    {
        $this->load->view('job_landing_page');
    }
    public function job_landing_header()
    {
        $this->load->view('test_new/job_landing_header');
    }
    public function top_view()
    {
        $this->load->view('test_new/top_view');
    }
    public function dashboard_enquiry()
    {
        //$this->load->view('public/dashboard_enquery');
        $this->data['subview']='public/dashboard_enquery';
        $this->load->view('_layout_home',$this->data);
    }
    public function test_news()
    {
        $this->load->view('test_new/test_news');
    }
    public function demo()
    {
        $this->load->view('test_new/demo');
    }
     public function cad_cam_school()
    {
        $this->load->view('test_new/cad_cam_school');
    }
     public function cad_cam_school_1()
    {
        $this->load->view('test_new/cad_cam_school_1');
    }
     public function mdb_blog()
    {
        $this->load->view('test_new/mdb_blog');
    }
     public function admin_dashboard()
    {
        $this->load->view('test_new/admin_dashboard');
    }
    public function template()
    {
        $this->load->view('test_new/template');
    }
    public function grabcad()
    {
        $this->load->view('test_new/grabcad');
    }
    public function grab_cad()
    {
        $this->load->view('test_new/grab_cad');
    }
     public function collapse_menu()
    {
        $this->load->view('test_new/collapse_menu');
    }
    public function first()
    {
        $this->load->view('test_new/first');
    }
    public function manage_ad()
    {
        $this->load->view('test_new/manage_ad');
    }
    public function email_template()
    {
        $this->load->view('test_new/email_template');
    }
    public function post_ad_temp()
    {
        $this->load->view('test_new/post_ad_temp');
    }
    public function reject_ad_temp()
    {
        $this->load->view('test_new/reject_ad_temp');
    }
}
?>


