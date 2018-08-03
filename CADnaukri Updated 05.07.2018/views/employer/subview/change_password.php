<div class="main-container">

        <section class="wht-bg">

        

        <section class="section">

            	<div class="container">

                <div class="container-inner line-sepa-bottom">

				 <?php

				  if($this->session->flashdata('successmsg'))

				{

					$succesmsg = $this->session->flashdata('successmsg');

				?>

					<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

				<?php } ?>

                		<div class="row">                        

                         <div class="col-xs-3">

                  			<div class="xcolright">

                            	<ul class="side-profile">

                            	<?php

                                 if($employee_details->imagePath != '')

                                {

                                    $profile_image_url=$employee_details->imagePath;

                                    $add_or_edit='Edit';

                                }

                                else

                                {
                                    $gender=$this->Employee_M->get_gender($this->session->userdata('emp_id'));
                                    if($gender == 'Male')
                                    {
                                      $profile_image_url=base_url('assets/images/Dashboard_Profile-Pic_Male.png');
                                    }
                                    else
                                    {
                                      $profile_image_url=base_url('assets/images/CADnaukri_Dashboard_Profile-Pic_Female.png');
                                    }
                                    

                                    $add_or_edit='Add';

                                }

                                ?>

								    <li class="profile-photo"><img src="<?php echo $profile_image_url?>" alt="" /></li>

                                    <li class="profile-edit"><a href="#" ><?php echo $add_or_edit?>Photo</a></li>

                                </ul>

							

                   					<ul class="sidebar">
                   					<li><a href="<?php echo base_url('employer/dashboard') ?>" >Dashboard</a></li>

                                	<li><a href="<?php echo base_url('employer/company_profile') ?>">Company Profile</a></li>

                                    <li><a href="<?php echo base_url('employer/job_details') ?>">Job Detaiils</a></li>

                                    <li><a href="<?php echo base_url('employer/application_recieved') ?>">Application Received</a></li>

                              		<li><a href="<?php echo base_url('employer/internship_details') ?>">Internship Details</a></li>

                              		<li><a href="<?php echo base_url('employer/logout') ?>">Log Out</a></li>

                                  </ul>

                    		</div>

                    	</div>

                        <div class="col-xs-9">

                        <div id="error_match" class="error"></div>

							<form  class="validatedForm" method="post" action=""

							 onsubmit="password_match()">

                              <label for="password">New Password</label>

                              <input type="password" name="password" id="password" required="" />

							   <label for="password">Confirm Password</label>

							  <input type="password" name="confirmpassword" id="confirmpassword"  maxlength="10" 

							    >

                              <br />

                              <div class="col-md-offset-4">

                              <button type="submit" name="update" id="button2"  class="btn btn-primary" />Update</button>

                              <a href="<?php echo base_url('candidate/dashboard')?>" class="btn btn-danger">cancel</a>

                              </div>

                              

                            </form>

                        </div>

                        </div>

                      

                        </div>

                </div>

                </div>

        </section>

      </section> 
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Profile Image</h4>

      </div>

      <div class="modal-body">

       <form  method="post" action="<?php echo base_url('employer/dashboard')?>" enctype="multipart/form-data" 

  		   onsubmit="return validate_image_upload();" >

        <div class="row">

	    <div class="form-group ">

			<label for="tile" class="control-label col-sm-3">Select Your Image</label>

			<div class="col-sm-9">

			 <input type="file" name="file" id="fileToUpload">

			</div>

	  	</div>

	   </div>

	    <div class="row">

	    <div class="col-sm-offset-3">

	    <button type="submit" class="btn btn-primary" name="upload">Upload</button>

	      <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>

	     </div>

	    </div>

       </form>

      </div>

     

    </div>

  </div>

</div>
 <script>

 function password_match() 

 {

	    var pass1 = document.getElementById("password").value;

	    var pass2 = document.getElementById("confirmpassword").value;

	    var ok = true;

	    if (pass1 != pass2) {

		    $('#error_match').html('Password doesnot match');

	          ok = false;

	    }

	    else {

	    	  $('#error_match').html('');	   

	    }

	    return ok;

	}

   </script> 

   