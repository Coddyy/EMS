<?php

class Api extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();

       $this->load->library('PdfParser');
       $this->load->library('form_validation');
    }
	public function get_skills()
	{
		$sql="SELECT id,name FROM skills;";
		$query=$this->db->query($sql);
		$data['skills']=$query->result();
		// echo "<pre>";
		// print_r($data);
		echo json_encode($data);
	}
	public function get_industry_types()
	{
		$sql="SELECT id,name FROM industry_type;";
		$query=$this->db->query($sql);
		$data['industry_type']=$query->result();
		// echo "<pre>";
		// print_r($data);
		echo json_encode($data);
	}
	public function get_designations()
	{
		$sql="SELECT designation_id,designation_name FROM designations;";
		$query=$this->db->query($sql);
		$data['designations']=$query->result();
		// echo "<pre>";
		// print_r($data);
		echo json_encode($data);
	}
	public function get_languages()
	{
		$sql="SELECT id,name FROM language;";
		$query=$this->db->query($sql);
		$data['languages']=$query->result();
		// echo "<pre>";
		// print_r($data);
		echo json_encode($data);
	}

	public function gsignup()
	{
		$this->load->view('gsignup');
	}
}
?>