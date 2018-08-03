<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advatisement extends MY_Controller {
function __construct()
   {
     parent::__construct();
	 $this->load->model('SuperAdmin_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
            $this->load->library('email');
		
    }
    function index(){
           if($this->session->userdata('superadminId')){
               $result['advatisement'] = $this->SuperAdmin_M->advatisement();
	      $this->load->view('superadmin/advatisement',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
      function signin(){
           if($this->session->userdata('superadminId')){
               $result['advatisement'] = $this->SuperAdmin_M->advatisement();
	      $this->load->view('superadmin/advatisement_signin',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
      function signup(){
           if($this->session->userdata('superadminId')){
               $result['advatisement'] = $this->SuperAdmin_M->advatisement();
	      $this->load->view('superadmin/advatisement_signup',$result);
            }else{
                redirect('superadmin/index/index');
            }
     }
     function saveHomeadv(){
          if($this->session->userdata('superadminId')){
                 $target_dir = "assets/advatisement/home/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				   echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
                                    echo 'Eror';
                                 // redirect('user/signup');
				  //header('Location: cand_signup.php?fail=fail');
				}
			}
                        $page='home';
                        $place=$_POST['place'];
                        $pathname=$target_file;
			$filename=$_FILES["fileToUpload"]["name"];
                        $data=array(
                            'page'=>'home',
                            'place'=>$place,
                            'image'=>$filename,
                            'path'=>$pathname
                        );
                      //  print_r($data);
                         $this->SuperAdmin_M->saveHomeadv($data);
                         redirect('superadmin/advatisement/index');
            }else{
                redirect('superadmin/index/index');
            }
     }
}