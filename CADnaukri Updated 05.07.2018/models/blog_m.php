<?php

class Blog_M extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{

	}
	public function get_this_blog($blog_id=NULL)
	{
		$sql="SELECT * FROM blog WHERE blog_id='$blog_id';";
		$query=$this->db->query($sql);
		if($query->num_rows() == 1)
		{
			//var_dump($query->result());exit();
			return $query->result();
		}
		else
		{
			return false;
		}
		
	}
	public function get_contents($blog_id)
	{
		$sql="SELECT * FROM blog_content WHERE blog_id='$blog_id';";
		$query=$this->db->query($sql);
		//var_dump($query->result());exit();
		return $query->result();
	}
	public function save_views($blog_id)
	{
		$sql="UPDATE blog SET views=(views + 1) WHERE blog_id='$blog_id';";
		$query=$this->db->query($sql);
		
	}
}
?>