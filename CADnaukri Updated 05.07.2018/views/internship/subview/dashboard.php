<style type="text/css">
    a:hover{text-decoration: none;}
</style>
<style type="text/css">
    .name-box{margin: 50px;}
      .signup{background-color: #FF6600;}
      .signup:hover{background-color: #0055A5;color: #fff; }
      .reset{background-color: #0055A5;color: #fff;}
      .reset:hover{background-color: #FF6600;color: #fff;}
      div,h1,h2,h3,h4,h5,h6,p,span,section,li,ul,a{color:#000;font-family: calibri;}
    </style>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<title>Intern | Dashboard</title>
    <div class="se-pre-con"></div>

    <!--Start Top bar-->
  <style type="text/css">

  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100%;}
    .next{width: 100%;}
  }
</style>

<style type="text/css">
  .open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  
}
.open > .dropdown-menu li a {
  color: #000;  
}
.dropdown-menu li a{
  color: #fff;
}
.dropdown-menu {
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  transform: scale(1, 0);
  display: block;
  
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
}
.dropup .dropdown-menu {
  -webkit-transform-origin: bottom;
  transform-origin: bottom;  
}

.navbar .nav > li > .dropdown-menu:after {

}
.dropup > .dropdown-menu:after {
  border-bottom: 0;
  border-top: 6px solid rgba(39, 45, 51, 0.9);
  top: auto;
  display: inline-block;
  bottom: -6px;
  content: '';
  position: absolute;
  left: 50%;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
}

</style>
<!-- 
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#box").animate({height: "10px"},1000);
    });
});
</script> -->
 <div class="se-pre-con"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right btn1" onclick="click_this();" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" id="btn2" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">My Resume</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Applied Internships</a></li>
                    
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Track Interviews</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Report Issue</a></li>           
                                     
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<div class="main-container">
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
                                    <li><a href="<?php echo base_url('internship/dashboard') ?>" class="active" >Dashboard</a></li>
                                	<li><a href="<?php echo base_url('internship/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/contact_details') ?>">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/profile_details') ?>">View Profile</a></li>
                                    <li><a href="<?php echo base_url('internship/update_password') ?>">Update Password</a></li>                         
                                    <li><a href="<?php echo base_url('internship/logout') ?>">Log Out</a></li>
                                </ul>
                    		</div>
                    	</div>
                        <style type="text/css">
                            .col_height{height: 550px;}
                            .welcome{color:#0055A5;font-weight: 400;}
                            @media screen and (max-width: 768px){
                            .col_height{height: auto;}

                            }
                        </style>
                        <div class="col-xs-12 col-md-9">
                  			<div class="xcolleft col_height">
                            <!-- <div class="">
                        	<h1>Account Details</h1> 
                            <a href="<?php echo base_url('internship/changePassword')?>"  class="button" style="position:relative;margin-left:40%">Changes Password</a>
					          </div> -->
                              <center><h3 style="color:#0055A5; font-weight: bolder;">Hi, <?php echo ucwords(strtolower($intern_details->name))?> welcome to your personal cabinet!</h3></center> 
                            <!-- <center style="color:#0055A5;font-size: 22px;"><div class="welcome"></div></center> -->

                            <!--  <div class="profile-data-box">
                            <table class="profile-data" border="0" cellpadding="0" cellspacing="1">
                            	<tr>
                                	<td colspan="2" class="profile-name-box" >
                                    	<?php echo ucwords(strtolower($intern_details->name))?>                                  
                                    	  </td>
                                    
                                </tr>
                            	<tr>
                                	<td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Email</th>
                                            </tr>
                                            <tr>
                                            <td><?php echo $intern_details->email?></td>                            
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="wid50">
                                    	<table class="wid100" border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            <th colspan="2">Contact Number</th>
                                            </tr>
                                             <tr>
                                            <td>
                                            <?php
                                            echo $intern_details->phno;
                                           ?>
                                           </td>
                                           </tr>
                                        </table>
                                    </td>
                                </tr>
                                
                            </table>
                            </div> -->
                            <style type="text/css">
                                .b_color{color:#0055A5;}
                                .o_color{color:#FF7900}
                                .row_con{font-size: 18px;border:0px solid red;max-width: 700px;margin:auto;padding: 20px;
                                    border-radius: 4px;background-color:#ECF0F5;box-shadow: 5px 5px 5px  #ccc; 
                                }
                                .row_con1{font-size: 18px;border:0px solid red;max-width: 700px;margin:auto;padding: 20px;
                                    border-radius: 4px;}
                            </style>

                            <div class="row" style="height: 20px;"> </div>
                            <div class="row row_con" style="" align="center">
                                <h4 style="color:#0055A5;font-size: 22px;margin-top: -10px;">Your Last Activity</h4>
                                <div class="row" style="background-color:#0055A5;font-size: 1px;margin: 5px -15px;"> </div> 
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 b_color" align="left">Last login IP:</div>
                                    <div class="col-md-6 col-xs-12 o_color" align="left"><?php echo $last_login_ip;?></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 b_color" align="left">Last login Date:</div>
                                    <div class="col-md-6 col-xs-12 o_color" align="left"><?php echo $last_login_date;?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6 col-xs-12 b_color" align="left">Last applied internship:</div>
                                    <div class="col-md-6 col-xs-12 o_color" align="left"><?php echo $last_applied_internship;?></div>
                                </div>
                             </div>
                             <br>

                             <!-- <div class="row row_con1" style="">
                                    <div class="row" style="background-color:#0055A5;border-right: 4px;"><?php echo ucwords(strtolower($intern_details->name))?></div>
                                    <div class="col-md-6 col-xs-12"></div>
                                    <div class="col-md-6 col-xs-12"></div>
                                    <div class="col-md-6 col-xs-12"></div>
                                    <div class="col-md-6 col-xs-12"></div>                                    
                            </div> -->
                            <style type="text/css">
          .col2-6{
            background-color:#0055A5;
            border:2px solid #fff;
            color: #fff;
            padding: 1px 1px;
            text-align: center;
          }
        </style>
        <?php 
                                if($this->session->userdata('intern_id'))
                                  {
                                   $id=$this->session->userdata('intern_id');

                                    $result=$this->Intern_M->check_have_cv($id);
                                    if($result == false){ 
                              ?>
                              <form action="<?php echo base_url();?>internship/cvupload" method="post" class="form-inline" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="col-md-12 col-sm-12 col-xs-12 alert alert-info" align="center">
                                  <label style="">Upload Resume |
                                    <input type="file" class="form-control" style="background-color: transparent; border:2px solid transparent; margin-top: -2px; padding: 0px 5px; min-height: 20px;border-top: 1px solid #000; border-bottom: 1px solid #000;border-width: 1px;" name="fileToUpload" id="fileToUpload" onchange="return file_upload();" required/>
                                    <input type="submit" class="form-control"  name="button" id="button" value="Upload" class="button" style="max-height: 35px;" />
                                    <input type="hidden" class="form-control"  name="hidden_id" value="<?php echo $id; ?>" />
                                  </label>
                                  <div id="error_file" class="error"></div>
                                </div>
                              </form>
                        <!-- <div class="col-md-2"></div> -->
                    <?php }  else
                      { ?>

                    <div class="row alert alert-success" style="text-align: center;max-width: 500px;margin:auto;" align="center"><b>You have succesfully uploaded your resume.</b></div>
                    <?php } } ?>
                        <div class="row" align="center" style="margin:20px;">
                            <a align="center" href="<?php echo base_url();?>internship/internships">
                             <button class="btn btn-search" style="text-transform:uppercase;">View Internships</button>
                             </a>
                        </div>

                </div>
             <style type="text/css">
                 .btn-search{background-color: #FF7900;color:#fff;font-weight: bolder;width: 150px;}
                 .btn-search:hover{background-color:#0055A5;color:#fff;}
                 /*@media screen and(max-width: 768px){
                 .btn-search{background-color: #FF7900;color:#fff;font-weight: bolder;width: 200px;}

                 }*/

             </style>

                             
                    		</div>
                    	</div>
                        
                        </div>
                        <!-- <div class="job-container">
                        	<h2 class="title">Latest Jobs Matching Your Profile</h2>
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