<?php

Class Seo extends CI_Controller {

    function sitemap()
    {

        $this->data['data'] = array('index/search','index/aboutus','index/terms_and_condition','index/privacy_policy','index/disclaimer','index/back_ground_check','index/for_job_seeker','candidate/login','employer/login');//select urls from DB to Array
        $sql="SELECT id,jobtitle,lastdate last_date,location FROM `job` where lastdate >= NOW()";
        $active_job=$this->db->query($sql)->result();
        foreach($active_job as $aj)
        {
        	$jobtitile=str_replace('–', '', $aj->jobtitle);
        	$jobtitile=str_replace('-', '', $jobtitile);
             $jobtitile=str_replace(' ', '-', $jobtitile);
        	$jobtitile= trim(preg_replace('/-+/', '-', $jobtitile), '-');
        
        	$city_name=$this->clean($aj->location);
        	$city_name=preg_replace('/[^A-Za-z0-9\-\']/', '', $city_name); 
        	if(is_numeric($city_name))
        	{
				$sql1="Select city_name FROM  `cities` WHERE  `city_id` =$aj->location";
				$active_job_location=$this->db->query($sql1)->row();
				$city_name=str_replace('/', '', $active_job_location->city_name);
				$city_name=str_replace('–', '', $city_name);
        	    $city_name=str_replace('-', '', $city_name);
				$city_name=str_replace(' ', '-', $city_name);
				$city_name= trim(preg_replace('/-+/', '-', $city_name), '-');
			}
			
        	$custom_url=$jobtitile.'-'.$city_name;
			array_push( $this->data['data'] , 'index/signle_search/'.$aj->id);
			array_push( $this->data['data'] , $custom_url);
		}
		//echo '<pre>';print_r($this->data['data']);exit();
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$this->data);
    }
    function clean($string)
     {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	  // $string = str_replace('.', '-', $string); // Replaces all spaces with hyphens.
	  // $string = str_replace('-', '--', $string); // Replaces all spaces with hyphens.
	    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
    function page_not_found()
    {
    	  //$this->output->set_status_header('404'); 
		$this->data['subview']='public/page_not_found';
		$this->load->view('_layout_home',$this->data);
	}
}