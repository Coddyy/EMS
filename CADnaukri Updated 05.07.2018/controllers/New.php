<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('image_lib');
		// $this->load->helper(array('captcha'));

	}
	public function index()
	{
		echo "Working";
	}
}
?>