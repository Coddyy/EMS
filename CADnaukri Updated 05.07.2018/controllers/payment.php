<?php
class Payment extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
    	
    }
    public function index()
    {
        //echo 'Hello Payment';
        $this->load->view('paymentview');
    }
}
?>