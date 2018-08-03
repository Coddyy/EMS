<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_events extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('download');
    }
  
}