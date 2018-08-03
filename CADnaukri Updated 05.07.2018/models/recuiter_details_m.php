<?php
class Recuiter_details_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'recuiter_details';
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