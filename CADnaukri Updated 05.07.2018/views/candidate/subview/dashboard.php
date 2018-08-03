<style type="text/css">
        div,p,h1,h2,h3,h4,h5,h6,ul,li,section{font-family: calibury;color:#000;}
    
</style>
<div class="main-container">
        <section class="wht-bg">
        <section class="section">
            	<div class="container">
                <div class="container-inner line-sepa-bottom">
                		<div class="row">                        
                        <div class="col-xs-3">
                  			<div class="xcolright">
                            	<ul class="side-profile">
                            	<?php
                            	if($candidate_details->imagePath != '')
                            	{
									// $profile_image_url=$candidate_details->imagePath;
         //                            $profile_img=$candidate_details->profileImage;

                                    $picture=$candidate_details->profileImage;
                                    $pic=base_url()."assets/candidate/profile_image/".$picture;
									$add_or_edit='Edit';?>
                                    <!-- <div align="center"><a>Delete</a></div> -->

								<?php }
								else
								{
									$profile_image_url=base_url('assets/images/profile-photo.png');
									$add_or_edit='Add';
								}
								?>
						         <li class="profile-photo">
						         <a href="<?php echo base_url('candidate/dashboard')?>" >
						         	<img src="<?php echo $pic; ?>" alt="" />
						         </a>
						         </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> Photo
                                     </a></li>
                                </ul>
							
                   				<ul class="sidebar">
                   					<li><a href="<?php echo base_url('candidate/dashboard') ?>" class="active">Dashboard.</a></li>
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
                  			<div class="xcolleft">


                            <div class="col-md-2"></div>
                                <?php $this->load->model('Candidate_M');
                                     if($this->session->userdata('candidate_id'))
                                     {
                                        $id=$this->session->userdata('candidate_id');

                                        $result=$this->Candidate_M->check_cv($id);
                                        if($result == false){ 
                                ?>
                                <form action="<?php echo base_url();?>candidate/cvupload" method="post" 
                                enctype="multipart/form-data" name="form1" id="form1">
                            

                                <div class="col-md-8 col-sm-12 alert alert-danger" align="right">
                                <label>Upload CV |
                                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="return file_upload();" required/>
                                    <input type="submit" name="button" id="button" value="Upload" class="button" style="height:35%;width:15%;" />
                                    <input type="hidden" name="hidden_id" value="<?php echo $id; ?>" />
                                </label>
                                <div id="error_file" class="error"></div>

                                </div>

                                </form>
                                <div class="col-md-2"></div>
                            <?php }  else
                            { ?>

                            <div class="row alert alert-success" style="text-align: center;"><b>Your CV Is Successfully Updated</b></div>
                            <?php } } ?>
                            <br />
                        	<!-- <h1>Account Details --> <a href="<?php echo base_url('candidate/changePassword')?>"  class="button" style="position:relative;margin-left:40%">Change Password</a>
					          </div>
                            <div class="welcome-message">Welcome <?php echo ucwords(strtolower($candidate_details->name))?> to Your Personal Cabinet !</div>
                            <div class="profile-data-box">
                            <table class="profile-data" border="0" cellpadding="0" cellspacing="1">
                            	<tr>
                                	<td colspan="2" class="profile-name-box">
                                    	<?php echo ucwords(strtolower($candidate_details->name));?>                                  
                                    	  </td>
                                    <!-- .'  '.ucwords(strtolower($candidate_details->lName)) -->
                                </tr>
                            	<tr>
                                	<td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Email</th>
                                            </tr>
                                            <tr>
                                            <td><?php echo $candidate_details->email?></td>
                                            <td ><span class="green-txt">Verified</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Contact Number</th>
                                            </tr>
                                            <?php
                                           // echo $candidate_details->mobile;
                                             if($candidate_details->mobile != '')
                                            {
	                                            	
	                                            	$is_verified=($candidate_details->mobileVerificationCode == 1?'<span class="green-txt">Verified</span>':'<span style="color:#FF0000">Not Verified</span>');
	                                            echo '<tr>
													<td>'.$candidate_details->mobile.'</td>
													<td>'.$is_verified.'</td>
													</tr>';
											}
											else
											{
												echo '<tr>
												<td>Not Available</td></tr>';
											}
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                	<td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Industry Type</th>
                                            </tr>
                                            <?php
                                            if(!empty($candidate_industry_type))
                                            {
												echo '<tr><td>'.$candidate_industry_type->industry_type.'</td></tr>';
											}
											else
											{
												echo '<tr>
			                                            <td>Not Mentioned</td>
			                                            <td >&nbsp;</td>
			                                            </tr>';
											}
                                            ?>
                                            
                                        </table>
                                    </td>
                                    <td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Alternative Email</th>
                                            </tr>
                                            <?php
                                            if(!empty($candidate_details_all))
                                            {
												echo '<tr><td>'.$candidate_details_all->altEmail.'</td></tr>';
											}
											else
											{
												echo '<tr>
			                                            <td>Not Mentioned</td>
			                                            <td >&nbsp;</td>
			                                            </tr>';
											}
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                	<td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Key Skills</th>
                                            </tr>
                                            <?php
                                             if(!empty($candidate_key_skills))
                                            {
												echo '<tr><td>'.$candidate_key_skills->skills.'</td></tr>';
											}
											else
											{
												echo '<tr>
			                                            <td>Not Mentioned</td>
			                                            <td >&nbsp;</td>
			                                            </tr>';
											}
                                            ?>
                                        </table>
                                    </td>
                                    <td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Preferred Position</th>
                                            </tr>
                                            <?php
                                            if(!empty($candidate_preferred_postions))
                                            {
												echo '<tr><td>'.$candidate_preferred_postions->preferred_postions.'</td></tr>';
											}
											else
											{
												echo '<tr>
			                                            <td>Not Mentioned</td>
			                                            <td >&nbsp;</td>
			                                         </tr>';
											}
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            
                    		</div>
                    	</div>
                        
                        </div>
                        <div class="job-container">
                        	<h2 class="title"><span></span>Latest Jobs Matching Your Profile</h2>
                            <div class="job-list">
                            <?php
                            $job_appply_success=$this->session->flashdata('job_appply_success');
                            $job_appply_failed=$this->session->flashdata('job_appply_failed');
                            if(!empty($job_appply_success))
                            {
								echo '<div class="alert alert-success" role="alert">'.$job_appply_success.'</div>';
							}
                            else if(!empty($job_appply_failed))
                            {
                                echo '<div class="alert alert-danger" role="alert">'.$job_appply_failed.'</div>';
                            }
							
                            ?>
                            	<ul>
                            	<?php if(!empty($matched_job))
                            	{
                            	foreach($matched_job as $mj)
                            	{
                            	  $job_skills=$this->Candidate_M->matched_skills($mj->id);
                            	  $applied_or_not=$this->Job_apply_M->get_by(array('user_id'=>$this->session->userdata('candidate_id'),'job_id'=>$mj->id));
								?>
                                	<li>
                                    	<div class="job-list-inner">
                                        	<div class="job-list-title">
                                            	<h5><?=$mj->jobtitle?></h5>
                                                <p>Job Category Name</p>
                                               <?php  if(count($applied_or_not) > 0)
                                               {
											   	  echo '<button type="button" class="  btn-primary" disabled="disabled" style="position: absolute;top: 0;right: 0;padding: 7px 30px;">Already Applied</button>';
											   }
											   else
											   {
                                                    $expired=$this->Job_M->check_expiry($mj->id);
                                                    if($expired == true)
                                                    {
                                                        
                                                         echo '<a class="button" onclick="expired()">Apply</a>';
                                                    }
                                                    else{
        											   	$url= base_url("candidate/job_apply/".$mj->id);
        											   	 echo '<a class="button" href="'.$url.'">Apply</a>';
                                                    }
											   }
                                               ?>
                                            </div>
                                            <div class="job-post-details">
                                            	<ul>
                                                	<li>
                                                	<a href="#">
                                                	<span>
                                                	<img alt="" src="<?php echo base_url()?>assets/images/post-time-icon.png"></span> <?=$mj->yop?> Yrs</a></li>
                                                    <li><a href="#"><span><img alt="" src="<?php echo base_url()?>assets/images/post-location.png"></span> <?=$mj->location?></a></li>
                                                    <li><a href="#"><span></span> Posted Date 
                                                    <?=date('d-F-Y',strtotime($mj->created))?></a></li>
                                                </ul>
                                            </div>
                                            <div class="job-content-details">
                                            	<p><?=$mj->description?> </p>
                                                <div class="job-link">
                                                <a href="#">Skills :</a> 
                                                <?php foreach($job_skills as $js)
                                                {
													echo '<a href="#">'.$js->name.'</a>  |' ;
												}   
                                                ?>
                                                </div>
                                                <div class="share-div">
                                                Share :
                                                <ul class="list-share">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Linkedin</a></li>
                                                <li><a href="#">Google+</a></li>
                                                
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php 
                                    }
									
								 }
								 else
								 {
								 	echo 'No job found for you.Please update your profile to get the latest job';
								 }
								  ?>
                                   
                                    
                                </ul>
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
       <form  method="post" action="<?php echo base_url('candidate/dashboard')?>" enctype="multipart/form-data" 
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

function validate_image_upload() 
{
    var fuData = document.getElementById('fileToUpload');
    var FileUploadPath = fuData.value;

//To check if user upload any file
    if (FileUploadPath == '')
     {
    	  $('#myModal').modal('hide');
        alert("Please upload an image");
        return false;
    } 
    else
    {
        var Extension = FileUploadPath.substring(
        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
        //The file uploaded is an image
        if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                || Extension == "jpeg" || Extension == "jpg")
         {

           // alert(Extension);
        	  return true;
        } 

		else
		 {
			  $('#myModal').modal('hide');
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
          
            return false;

        }
    }
 
}
function file_upload()
{
    var imgpath = document.getElementById('fileToUpload').value;                          
    if(imgpath == "")
    {
        alert("upload your word file");
        return false;
    }
    else
    {
        var arr1 = new Array;
        arr1 = imgpath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1);
        if(filext == "doc" || filext == "docx" || filext == "pdf")
        {
            return true;
        }
        else
        {
           document.getElementById("fileToUpload").value = '';
           alert("You are requested to upload .doc .docx & .rtf documents only.");
            return false;
        }
    }
}


</script>
<script>
function expired()
{
  alert('Job Expired');
}
</script>