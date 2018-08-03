<?php
class Employee_details_M extends MY_Model 
{
	protected $_primary_key = 'id';
	protected $_table_name = 'employerdetails';
	protected $_order_by = 'id';
	function __construct()
	{
		parent::__construct();
	}
  
}