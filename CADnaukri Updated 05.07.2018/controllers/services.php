<?php
class Services extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Services_M');
        $this->load->model('Candidate_M');
        $this->load->model('Employee_M');
        $this->load->model('View_M');
    }
    public function index()
    {
        //echo 'Hello';

    }
    public function all_services()
    {
        if($this->Candidate_M->isLoggedin() == TRUE)
        {
            $banner_id=$this->View_M->select_a_random_banner_candidate();
        }
        else if($this->Employee_M->isLoggedin() == TRUE)
        {
            $banner_id=$this->View_M->select_a_random_banner_employer();
        }
        else
        {
            $banner_id=$this->View_M->select_a_random_banner_public();  
        }
        $this->View_M->allow_banner($banner_id);
        $this->View_M->disallow_banner($banner_id);

        if($_POST)
        {
            //var_dump($_POST);exit();
            $service_id=$this->input->post('service_id');
            $service_ids=$this->Employee_M->get_service_ids($this->session->userdata('emp_id'));
            $ids=array('1','2','3');
            if(in_array($service_id, $ids))
            {
                foreach ($service_ids as $key) 
                {
                    
                    if(in_array($key->service_id, $ids))
                    {
                        $this->session->set_flashdata('error','You can add one package at a time');
                        redirect(base_url()."services/all_services");
                    }
                }
            }
            $data['service_id']=$this->input->post('service_id');
            $data['user_id']=$this->session->userdata('emp_id');
            $data['created']=date('Y-m-d H:i:s');
            $success=$this->db->insert('services_cart',$data);
            if($success)
            {
                $this->session->set_flashdata('success','Service added to cart');
        		redirect(base_url()."services/all_services");
            }
            else
            {
                $this->session->set_flashdata('error','Service not added');
        		redirect(base_url()."services/all_services");
            }
        }



        $data['all_service_details']=$this->Services_M->get_all_services();
        $data['subview']='services';
        $this->load->view('_layout_home',$data);
    }
    public function get_duration($service_id)
    {
        $sql="SELECT duration FROM services WHERE id='$service_id';";
        $query=$this->db->query($sql);
        echo json_encode($query->row()->duration);
    }

}
?>