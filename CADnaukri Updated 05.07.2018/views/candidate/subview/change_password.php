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
                            	 if($candidate_details->imagePath != '')
                            	{
									$profile_image_url=$candidate_details->imagePath;
									$add_or_edit='Edit';
								}
								else
								{
									$profile_image_url=base_url('assets/images/profile-photo.png');
									$add_or_edit='Add';
								}
								?>
						         <li class="profile-photo">
						         <a href="<?php echo base_url('candidate/dashboard')?>" >
						         	<img src="<?php echo $profile_image_url?>" alt="" />
						         </a>
						         </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> Photo
                                     </a></li>
                                </ul>
							
                   				<ul class="sidebar">
                                	<li><a href="<?php echo base_url('candidate/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Experience Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>
                                </ul>
                    		</div>
                    	</div>
                        <div class="col-xs-9">
                        <div id="error_match" class="error"></div>
							<form  class="validatedForm" method="post" action="" onsubmit="return password_match()">
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
   