<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Sponors extends MY_Controller {

function __construct()

   {

     parent::__construct();

	 $this->load->model('SuperAdmin_M');	
	  $this->load->model('Sponors_home_img_M');	
	  $this->load->model('State_M');	
	  $this->load->model('Recuiter_details_M');	
	  $this->load->model('Functional_area_M');	
	  $this->load->model('Sponors_M');	
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('file');	

		

    }

    function index(){

           if($this->session->userdata('admin_id')){

               $result['sponorsInfo'] = $this->SuperAdmin_M->sponorsInfo();

	      $this->load->view('admin/sponorsDatabase',$result);

            }else{

                redirect('admin/index/index');

            }

     }

      function sponorsEntry($id=NULL){

       //     if($this->session->userdata('admin_id')){

       //         //$result['internInfo'] = $this->SuperAdmin_M->internInfo();

	      // $this->load->view('admin/sponors');

       //      }else{

       //          redirect('admin/index/index');

       //      }


	
	   		if($id)
  		    {
	  			$this->data['is_edit']=TRUE;
	  			//$this->data['status']=$_POST['status'];
				$this->data['sponors']=$this->Sponors_M->get($id);
				// $sql="SELECT functional_area_id FROM `sponors_courses` where sponors_id=$id";
				// $temp_courses=$this->db->query($sql)->result();
				// $this->data['courses']=array();
				// if($temp_courses)
				// {
				// 	foreach($temp_courses as $tmp)
				// 	{
				// 		array_push($this->data['courses'] ,$tmp->functional_area_id);
				// 	}
				// }
					
				
				$msg="Succesfully updated cad cam  detials";
			   }
		    else
		    {
				$this->data['is_edit']=FALSE;
				$this->data['status']='Pending';
				$this->data['sponors']=$this->Sponors_M->get_new();
				$this->data['courses']=array();

				
				$msg="Succesfully inserted cad cam  detials";
		    }
		    if($_POST)
		    {
		       //print_r($_POST);exit();
			   $target_dir = "assets/superadmin/sponors/";
			   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			   $image_path=base_url().$target_file;
				$today=date('Y-m-d h:i:s');
				//$coures=$_POST['course'];
				//	echo '<pre>';print_r($_POST);
				//print_r($coures);exit();
				//$pathname=$target_file;
				$filename=$_FILES["fileToUpload"]["name"];
				$data=array(
				'companyname'=>$_POST['companyname'],
				'category'=>$_POST['category'],
				'year_of_est'=>$_POST['year_of_est'],
				'logo'=>$filename,
	            'logo_path'=>$image_path,
				'description'=>$_POST['description'],
				'contact_person'=>$_POST['contact_person'],
				'email'=>$_POST['email'],
				'mobile'=>$_POST['mobile'],
				'location'=>$_POST['address'],	
				'city'=>$_POST['city'],
				'state'=>$_POST['state'],				
				'phno'=>$_POST['phno'],
				'cemail'=>$_POST['cemail'],
				'cmobile'=>$_POST['cmobile'],
				'pincode'=>$_POST['pincode'],
				'website'=>$_POST['website'],
				'course'=>$_POST['course'],
				'certification'=>$_POST['certification'],
				'affiliation'=>$_POST['affiliation'],
				'service'=>$_POST['service'],
				'created'=>$today,
				'modified'=>$today,
				'isActive'=>'1',
				'status'=>'Pending'
				
				);
				$insert_id=$this->Sponors_M->save($data,$id);

				$result=$this->Sponors_M->check_sponor_id_in_permission($insert_id);
				//var_dump($result);exit();
				if($result == true)
				{
					$udata=array(
					'sponor_id'=>$id,
					'companyname'=>$_POST['pcompanyname'],
					'category'=>$_POST['pcategory'],
					'year_of_est'=>$_POST['pyear_of_est'],
					'description'=>$_POST['pdescription'],
					'contact_person'=>$_POST['pcontact_person'],
					'email'=>$_POST['pemail'],
					'mobile'=>$_POST['pmobile'],
					'location'=>$_POST['paddress'],	
					'city'=>$_POST['pcity'],
					'state'=>$_POST['pstate'],				
					'phno'=>$_POST['pphno'],
					'cemail'=>$_POST['pcemail'],
					'cmobile'=>$_POST['pcmobile'],
					'pincode'=>$_POST['ppincode'],
					'website'=>$_POST['pwebsite'],
					'course'=>$_POST['pcourse'],
					'certification'=>$_POST['pcertification'],
					'affiliation'=>$_POST['paffiliation'],
					'service'=>$_POST['pservice']
					);
					$this->Sponors_M->update_permissions($id,$udata);
				}
				else
				{
					$pdata=array(
					'sponor_id'=>$insert_id,
					'companyname'=>'Y',
					'category'=>'Y',
					'year_of_est'=>'Y',
					'description'=>'Y',
					'contact_person'=>'Y',
					'email'=>'Y',
					'mobile'=>'Y',
					'location'=>'Y',	
					'city'=>'Y',
					'state'=>'Y',				
					'phno'=>'Y',
					'cemail'=>'Y',
					'cmobile'=>'Y',
					'pincode'=>'Y',
					'website'=>'Y',
					'course'=>'Y',
					'certification'=>'Y',
					'affiliation'=>'Y',
					'service'=>'Y'
					);
					$this->Sponors_M->add_to_permission($pdata);
				}
				


				// for($i=0;$i<count($coures);$i++)
				// {
				// 	$batch_array[$i]['sponors_id']=$insert_id;
				// 	$batch_array[$i]['functional_area_id']=$coures[$i];
				// }
				// if($this->data['is_edit'] == TRUE)
				// {
				// 	$sql="Delete from sponors_courses where sponors_id=$insert_id";
				// }
				// if($batch_array)
				// {
				// 	$this->db->insert_batch('sponors_courses', $batch_array); 
				// }
				
				//$this->db->batch_insert('sponors_courses',$batch_array);
				$this->session->set_flashdata('msg2', $msg);
			    redirect('admin/sponors','refresh');
			}
		    
	   		$this->data['states']=$this->State_M->get_by(array('country_id'=>100));
	   		$this->data['functional_area']=$this->Functional_area_M->get();
	   		$this->data['subview']='admin/sponors';
  		    //$this->load->view('superadmin/_layout_superadmin',$this->data);
	   		$this->load->view('admin/sponors',$this->data);
	   	// }
   		// else
   		// {
   		// 	redirect('superadmin/index/index');
   		// }

     }
     public function publish_now()
     {
     	$sponor_id=$this->uri->segment(4);
     	$this->Sponors_M->publish_now($sponor_id);
     	redirect(base_url().'admin/CAD-CAM-Schools');
     }
     public function stop_publish()
     {
     	$sponor_id=$this->uri->segment(4);
     	$this->Sponors_M->stop_publish($sponor_id);
     	redirect(base_url().'admin/CAD-CAM-Schools');
     }

     function insetSponors(){

   //         if($this->session->userdata('admin_id')){

   //            $target_dir = "assets/superadmin/sponors/";

			// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			// $uploadOk = 1;

			// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			// if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {

			//   //  echo "Sorry, only docs, DOCX, PDF files are allowed.";

			// 	$uploadOk = 0;

			// }

			// // Check if $uploadOk is set to 0 by an error

			// if ($uploadOk == 0) {

			//   //  echo "Sorry, your file was not uploaded.";

			// // if everything is ok, try to upload file

			// } else {

			// 	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			// 	   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

			// 	} else {

   //                                redirect('admin/index/index');

			// 	  //header('Location: cand_signup.php?fail=fail');

			// 	}

			// }

			// $today=date('Y-m-d h:i:s');

			// $pathname=$target_file;

			// $filename=$_FILES["fileToUpload"]["name"];

   //                    $data=array(

			// 'institution'=>$_PO	ST['institute'],

			// 'logo'=>$filename,

   //                      'logo_path'=>$pathname,

			// 'companyname'=>$_POST['companyname'],

			// 'location'=>$_POST['location'],	

			// 'city'=>$_POST['city'],

			// 'state'=>$_POST['state'],

			// 'email'=>$_POST['email'],

			// 'phno'=>$_POST['phno'],

			// 'mobile'=>$_POST['mobile'],

			// 'website'=>$_POST['website'],

   //                        'course'=>$_POST['course'],

			// 'description'=>$_POST['description'],

			// 'certification'=>$_POST['certification'],

                          

			// 'created'=>$today,

			// 'modified'=>$today,

			// 'isActive'=>'1',

			

			// );

   //                    $this->SuperAdmin_M->inset_Sponors($data);

   //                       $this->session->set_flashdata('msg2', 'Succesfully Insert Sponors');

   //                     redirect('admin/sponors/sponorsEntry','refresh');

   //          }else{

   //              redirect('admin/index/index');

   //          }


     		if($this->session->userdata('admin_id'))
          {
          	$target_dir = "assets/admin/sponors/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" )
			 {
			 	$uploadOk = 0;
			 }
			 if ($uploadOk == 0) 
			 {
                 //Error
		     } 
		     else 
		     {
		     	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

				   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

				} 
				else {
                      redirect('admin/index/index');
				}
			}

			$today=date('Y-m-d h:i:s');
			$pathname=$target_file;
			$filename=$_FILES["fileToUpload"]["name"];
			$data=array(
			'institution'=>$_POST['institute'],
			'logo'=>$filename,
            'logo_path'=>$pathname,
			'companyname'=>$_POST['companyname'],
			'location'=>$_POST['location'],	
			'city'=>$_POST['city'],
			'state'=>$_POST['state'],
			'email'=>$_POST['email'],
			'phno'=>$_POST['phno'],
			'mobile'=>$_POST['mobile'],
			'website'=>$_POST['website'],
			'course'=>$_POST['course'],
			'description'=>$_POST['description'],
			'certification'=>$_POST['certification'],
			'created'=>$today,
			'modified'=>$today,
			'isActive'=>'1',
			);
			
			$this->SuperAdmin_M->inset_Sponors($data);
			$this->session->set_flashdata('msg2', 'Succesfully Insert Sponors');
			redirect('admin/sponors/sponorsEntry','refresh');
         }
         else
         {
              redirect('admin/index/index');
          }
     }

     public function sponorsSingleList(){

   //          if($this->session->userdata('admin_id')){

   //       $id=$_POST['sponorsid'];

   //      // echo $id;

   //         $singleList=$this->SuperAdmin_M->sponorsSingleList($id);

   //       //  print_r($singleList);

   //         foreach ($singleList as $value) {

   //             $logo_path=$value->logo_path;

   //             $logo= base_url($logo_path);

         

   //       echo "

			// <h4>Institute Name: " . $value->institution . "</h4> 

			// <h4>Company Name : " .$value->companyname  . "</h4> 

			// <h4>Location  : " . $value->location   . "</h4> 

			// <h4>City : " .$value->city   . "</h4> 

			// <h4>State : " . $value->state   . "</h4> 

			// <h4>Phone Numebr : " . $value->phno   . "</h4> 

			// <h4>Mobile (+91) : " . $value->mobile   . "</h4> 

			// <h4>Web Adress : " . $value->website   . "</h4> 

			// <h4>Email : " . $value->email   . "</h4> 

			// <h4>Course Offered: " . $value->course   . "</h4> 

			// <h4>Decription : " . $value->description   . "</h4> 

			// <h4>Certification(Affiliation) : " . $value->certification   . "</h4> 

			

			// <h4>Logo :</h4> <img src=$logo  widht='50' height='70'>  ";

			

   //         }

   //         }

   //         else{

   //              redirect('admin/index/index');

   //          }

     	if($this->session->userdata('admin_id')){

         $id=$_POST['sponorsid'];

        // echo $id;

           $singleList=$this->SuperAdmin_M->sponorsSingleList($id);

         //  print_r($singleList);

           foreach ($singleList as $value) {

               $logo_path=$value->logo_path;

               $logo= base_url($logo_path);

         

         echo "

			<h4>Institute Name: " . $value->institution . "</h4> 

			<h4>Company Name : " .$value->companyname  . "</h4> 

			<h4>Location  : " . $value->location   . "</h4> 

			<h4>City : " .$value->city   . "</h4> 

			<h4>State : " . $value->state   . "</h4> 

			<h4>Phone Numebr : " . $value->phno   . "</h4> 

			<h4>Mobile (+91) : " . $value->mobile   . "</h4> 

			<h4>Web Adress : " . $value->website   . "</h4> 

			<h4>Email : " . $value->email   . "</h4> 

			<h4>Course Offered: " . $value->course   . "</h4> 

			<h4>Decription : " . $value->description   . "</h4> 

			<h4>Certification(Affiliation) : " . $value->certification   . "</h4> 

			

			<h4>Logo :</h4> <img src=$logo  widht='50' height='70'>  ";

			

           }

           }

           else{

                redirect('admin/index/index');

            }

     }

     public function  editSponors(){

       //    if($this->session->userdata('admin_id')){

       //   $id=$_GET['id'];

       //   //echo $id;

       //    $singleList['editData']=$this->SuperAdmin_M->sponorsSingleList($id);

       //    $this->load->view('admin/editSponors',$singleList);

       //    }

       // else{

       //          redirect('admin/index/index');

       //      }  

     	if($this->session->userdata('admin_id')){

         $id=$_GET['id'];

         //echo $id;

          $singleList['editData']=$this->SuperAdmin_M->sponorsSingleList($id);

          $this->load->view('admin/editSponors',$singleList);

          }

       else{

                redirect('admin/index/index');

            }

     }

      public function updateSponors(){

   //         if($this->session->userdata('admin_id')){

   //            $target_dir = "assets/admin/sponors/";

			// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			// $uploadOk = 1;

			// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			// if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {

			//   //  echo "Sorry, only docs, DOCX, PDF files are allowed.";

			// 	$uploadOk = 0;

			// }

			// // Check if $uploadOk is set to 0 by an error

			// if ($uploadOk == 0) {

			//   //  echo "Sorry, your file was not uploaded.";

			// // if everything is ok, try to upload file

			// } else {

			// 	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			// 	   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

			// 	} else {

   //                                redirect('admin/index/index');

			// 	  //header('Location: cand_signup.php?fail=fail');

			// 	}

			// }

			// $today=date('Y-m-d h:i:s');

			// $pathname=$target_file;

			// $filename=$_FILES["fileToUpload"]["name"];

   //                    $data=array(

			// 'institution'=>$_POST['institute'],

			// 'logo'=>$filename,

   //                      'logo_path'=>$pathname,

			// 'companyname'=>$_POST['companyname'],

			// 'location'=>$_POST['location'],	

			// 'city'=>$_POST['city'],

			// 'state'=>$_POST['state'],

			// 'email'=>$_POST['email'],

			// 'phno'=>$_POST['phno'],

			// 'mobile'=>$_POST['mobile'],

			// 'website'=>$_POST['website'],

   //                        'course'=>$_POST['course'],

			// 'description'=>$_POST['description'],

			// 'certification'=>$_POST['certification'],

                          

			// 'modified'=>$today,

			// 'isActive'=>'1',

			

			// );

   //                    $id=$_POST['id'];

   //                    $this->SuperAdmin_M->updateSponors($data,$id);

   //                     $this->session->set_flashdata('msg2', 'Succesfully Update Sponors');

   //                     redirect('admin/sponors/index','refresh');

   //          }else{

   //              redirect('admin/index/index');

   //          }
      	if($this->session->userdata('admin_id')){

              $target_dir = "assets/admin/sponors/";

			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;

			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) {

			  //  echo "Sorry, only docs, DOCX, PDF files are allowed.";

				$uploadOk = 0;

			}

			// Check if $uploadOk is set to 0 by an error

			if ($uploadOk == 0) {

			  //  echo "Sorry, your file was not uploaded.";

			// if everything is ok, try to upload file

			} else {

				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

				   // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

				} else {

                                  redirect('admin/index/index');

				  //header('Location: cand_signup.php?fail=fail');

				}

			}

			$today=date('Y-m-d h:i:s');

			$pathname=$target_file;

			$filename=$_FILES["fileToUpload"]["name"];

                      $data=array(

			'institution'=>$_POST['institute'],

			'logo'=>$filename,

                        'logo_path'=>$pathname,

			'companyname'=>$_POST['companyname'],

			'location'=>$_POST['location'],	

			'city'=>$_POST['city'],

			'state'=>$_POST['state'],

			'email'=>$_POST['email'],

			'phno'=>$_POST['phno'],

			'mobile'=>$_POST['mobile'],

			'website'=>$_POST['website'],

                          'course'=>$_POST['course'],

			'description'=>$_POST['description'],

			'certification'=>$_POST['certification'],

                          

			'modified'=>$today,

			'isActive'=>'1',

			

			);

                      $id=$_POST['id'];

                      $this->SuperAdmin_M->updateSponors($data,$id);

                       $this->session->set_flashdata('msg2', 'Succesfully Update Sponors');

                       redirect('admin/sponors/index','refresh');

            }else{

                redirect('admin/index/index');

            }

     }

     public function  deleteSponors($id){

          if($this->session->userdata('admin_id')){

         //$id=$_POST['id'];

         //echo $id;exit();

          $this->SuperAdmin_M->deleteSponors($id);

         redirect('admin/sponors/index');

          }

       else{

                redirect('admin/index/index');

            }  

     }

    

}