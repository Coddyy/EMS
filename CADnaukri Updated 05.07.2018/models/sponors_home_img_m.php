<?php
class Sponors_home_img_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'sponors_home_img';
	protected $_order_by = 'id';
	function __construct()
	{
		parent::__construct();
    }
    public function get_new()
	{
		$img = new stdClass();
		$img->name='';
		$img->image_path='';
		$img->start_date='';
		$img->end_date='';
		$img->home_link='';
		$img->status='Y';
	   return $img;
	}
	public function get_active_img()
	{
		$sql="SELECT * FROM `sponors_home_img` where  start_date < NOW() AND (end_date >= NOW() OR  end_date IS NULL)  ";
		$q=$this->db->query($sql);
		if($q)
		{
			return $q->result();
		}
		return FALSE;
	}

	

	

}