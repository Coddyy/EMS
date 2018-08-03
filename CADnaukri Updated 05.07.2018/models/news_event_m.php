<?php
class News_event_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'news_events';
	protected $_order_by = 'id';
	function __construct()
	{
		parent::__construct();
    }
    public function get_new()
	{
		$img = new stdClass();
		$img->name='';
		$img->description='';
		$img->ext_link='';
		$img->status='1';
	   return $img;
	}
	public function delete_news($id)
	{
		$sql="DELETE FROM `news_events` WHERE id=$id";
		$this->db->query($sql);
		
	}
	

	

	

}