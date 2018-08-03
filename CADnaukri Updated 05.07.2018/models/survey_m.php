<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Survey_M extends MY_Model 

{
    function __construct() {

        parent::__construct();

    }
    public function index()
    {
    	//echo "Hello Survey Model";
    }
   	public function save_edu_details($data)
    {
    	$success=$this->db->insert('survey',$data);
    	if($success)
    	{
    		$survey_id=$this->db->insert_id();
    		return $survey_id;
    	}
    	else
    	{
    		//echo "Survey Id Not Found";
    		return false;
    	}
    } 
    public function save_per_details($survey_id,$data)
    {
    	$this->db->where('survey_id',$survey_id);
		$success=$this->db->update('survey',$data); 
    	if($success)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function check_edu_submitted($survey_id)
    {
    	$sql="SELECT survey_id FROM survey WHERE survey_id='$survey_id' AND is_edu_submitted='true';";
    	$query=$this->db->query($sql);
    	if($query->num_rows() == 1)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function get_all_surveys()
    {
        $sql="SELECT * FROM surveys;";
        $query=$this->db->query($sql);
        return $query->result();
    }
     public function get_no_of_responses()
    {
        $sql="SELECT * FROM survey;";
        $query=$this->db->query($sql);
        //var_dump($query->num_rows());exit();
        return $query->num_rows();
    }
    public function get_responses($survey_name=null)
    {
        $sql="SELECT * FROM survey;";
        $query=$this->db->query($sql);
        return $query->result();
    }

}
?>