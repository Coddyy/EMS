<?php

class Country_M extends MY_Model
{

	protected $_primary_key = 'country_id';

	protected $_table_name = 'countries';

	protected $_order_by = 'country_name';
	function __construct()

	{

		parent::__construct();

	}

	

}