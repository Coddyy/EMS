<?php
class Taskmail extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //echo 'Hello';
        $this->load->library('email');
        $this->email->set_mailtype("html");

        $this->email->from('no-reply@cadnaukri.com','Abhra Sarkar | Tasks');
        $this->email->to('abhrasarkar.job@gmail.com');
        $this->email->subject("Tasks");

        $this->email->subject("Hello Tasks");
        $this->email->message("Test");
    
        $this->email->send();

    }
}
?>