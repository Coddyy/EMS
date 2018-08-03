<style type="text/css">
      div,h1,h2,h3,h4,h5,h6,p,span,section,li,ul,a{color:#000;font-family: calibri;}

 a:hover{text-decoration: none;}
      .signup{background-color: #FF6600;min-width: 15%; max-height: 32px;}
      .signup:hover{background-color: #0055A5;color: #fff;}
      .reset{background-color: #0055A5;color: #fff;width: 15%;max-height: 35px;border:none;}
      .reset:hover{background-color: #FF6600;color: #fff;}
      .con_height{border:0px solid red;height: 480px;}
      @media screen and (max-width: 768px){
        .con_height{height: 100%;}
      .signup{background-color: #FF6600;min-width: 50%; max-height: 32px;}

      .reset{background-color: #0055A5;color: #fff;width: 50%;max-height: 35px;border:none;margin-top: 10px;}

      }
    </style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<head>
  <style type="text/css">
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url("") center no-repeat #fff;
}
  </style>
  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(800);;
  });
  </script>
</head>
    <div class="se-pre-con"></div>

<div class="main-container con_height" style="">
        <section class="wht-bg">
        <section class="section">
            	<div class="container" style="border-radius: 4px;border:1px solid #cccccc;">
                <div class="container-inner">
                		<div class="row">                        
                        <div class="col-xs-12 col-md-3">
                  			<div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">
                            	<!--<ul class="side-profile">
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
						         <a href="<?php echo base_url('internship/dashboard')?>" >
						         	<img src="<?php echo $profile_image_url?>" alt="" />
						         </a>
						         </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> Photo
                                     </a></li>
                                </ul>-->
							
                   				<ul class="sidebar">
                                    <li><a href="<?php echo base_url('internship/dashboard') ?>" >Dashboard</a></li>
                                  <li><a href="<?php echo base_url('internship/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/educational_details') ?>" >Educational Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/internship_prefernce') ?>" class="active">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/profile_details') ?>">View Profile</a></li>
                                    <li><a href="<?php echo base_url('internship/update_password') ?>">Update Password</a></li>                                  
                                    <li><a href="<?php echo base_url('internship/logout') ?>">Log Out</a></li>
                                </ul>
                    		</div>
                    	</div>
                        
                        <div class="col-xs-12 col-md-9">
                  			<div class="xcolleft">
                        	<h1>Contact Details</h1>   
                        	<?php if($this->session->flashdata('success'))
                        	{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

								<?php } ?>                             
							                         
                            <form role="form"  action="<?php echo base_url('internship/profile/internship_prefernce') ?>"  enctype="multipart/form-data" method="post">
                     <div class="row">
                    
                     <div class="col-xs-12 col-md-12">
	                     <div class="form-group" style="margin-left: -10px;">
	                        <label for="institute" class="control-label col-xs-12 col-md-6">Email:</label>
                          <div class="col-xs-12 col-md-6">
	                        <input type="text" name="email" id="" value="" required/>
	                        <!-- <select class="form-control" name="industry_type" >
	                        	<option value="">Select Type of Internship</option>
	                        	<?php
	                        	if($industry_type)
	                        	{
									foreach($industry_type as $it)
	                        	   {
	                        	   	$is_selescted=$intern_prefernce->industrytype==$it->id?'selected':'';
									 echo '<option value="'.$it->id.'"'.$is_selescted.'>'.$it->name.'</option>';
								    }
								}
	                        	
								?>
	                        </select> -->
                        </div>
	                      <div  class="error" style="color:#FF0000"></div>
	                     </div>
                    </div>
                     <div class="col-xs-12 col-md-12">
                            <div class="form-group" style="margin-left: -10px;">
                                <label for="location_insti" class="control-label col-xs-12 col-md-6">Mobile:</label>
                                <div class="col-md-6 col-xs-12">
                                <input type="text" name="mobile" id="" value="" required/>
                              </div>
                            <div  class="error" style="color:#FF0000"></div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="row">
                       
                      </div>
                    <div class="col-md-12 col-xs-12" style="margin-top:10px">
                        <center>
                       <input name="submit" class="btn btn-default signup" id="submit" value="Save" type="submit" style="">
                       <a href="<?php echo current_url()?>"  class="btn btn-default reset" >Cancel</a>
                   </center>
                    </div>
                </form>
                            <p>&nbsp;</p>
                    </div>
                 </div>
                        
                        
                        </div>
                        <!-- <div class="job-container">
                        	<h2 class="title"><span></span>Latest Jobs Matching Your Profile</h2>
                            <div class="job-list">
                            <?php
                            $job_appply_success=$this->session->flashdata('job_appply_success');
                            if(!empty($job_appply_success))
                            {
								echo '<div class="alert alert-success" role="alert">'.$job_appply_success.'</div>';
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
											   	  echo '<a class="button" href="#">Alreday Applied</a>';
											   }
											   else
											   {
											   	$url= base_url("candidate/job_apply/".$mj->id);
											   	 echo '<a class="button" href="'.$url.'">Apply</a>';
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
                        </div> -->
                </div>
                </div>
        </section>
      </section></div> 
   <br>
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
</script>