<?php

class City_M extends MY_Model

{

	protected $_primary_key = 'city_id';

	protected $_table_name = 'cities';

	protected $_order_by = 'city_name';


	function __construct()

	{

		parent::__construct();

	}
	function location_autocomplete()
	{
		$this->db->select('city_name as label,city_id id');
		$this->db->from($this->_table_name);
		$this->db->order_by($this->_order_by,'ASC');
		$q=$this->db->get();

		//echo $this->db->last_query();exit;
		return $q->result();
	}
	public function get_city_name($city_id)
	{
		$sql="SELECT city_name FROM cities WHERE city_id='$city_id';";
		$query=$this->db->query($sql);
		return $query->row()->city_name;
	}

	

}