<?php
class School_M extends MY_Model 
{
    	
    function __construct()
	{
		parent::__construct();
		  $this->load->helper('date');
		
	}
	public function save_schools($data)
	{
		var_dump($data);
		$success=$this->db->insert('cad_cam_school_new',$data);
		if($success)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>