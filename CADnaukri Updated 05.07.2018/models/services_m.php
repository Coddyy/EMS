<?php
class Services_M extends MY_Model 
{		
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		//echo "Helo Model";exit();
	}
	public function save_service($data)
	{
		//var_dump($data);exit();
		$success=$this->db->insert('services',$data);
		if($success)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function get_all_services()
	{
		$sql="SELECT id,service_name,service_description,service_amount,duration FROM services;";
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function get_service_duration($service_id)
	{
		$sql="SELECT duration FROM services WHERE id='$service_id';";
		$query=$this->db->query($sql);
		return $query->row()->duration;
	}
}
?>