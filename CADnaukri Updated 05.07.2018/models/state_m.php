<?php

class State_M extends MY_Model 

{

	protected $_primary_key = 'state_id';

	protected $_table_name = 'states';

	protected $_order_by = 'state_name';

	

	function __construct()

	{

		parent::__construct();

	}

	

	

}