<style type="text/css">
      div,h1,h2,h3,h4,h5,h6,p,span,section,li,ul,a{color:#000;font-family: calibri;}

a:hover{text-decoration: none;}
      .signup{background-color: #FF6600;min-width: 30%; max-height: 32px;border:none;}
      .signup:hover{background-color: #0055A5;color: #fff;}
      .reset{background-color: #0055A5;color: #fff;width: 30%;max-height: 35px;border:none;}
      .reset:hover{background-color: #FF6600;color: #fff;}
      .con_height{border:0px solid red;height: 480px;}
      @media screen and (max-width: 768px){
        .con_height{height: 100%;}
      }
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


<title>Internship | Profile Details</title>

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
                            	<!-- <ul class="side-profile">
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
                                </ul> -->
							
                   				<ul class="sidebar">
                                    <li><a href="<?php echo base_url('internship/dashboard') ?>" >Dashboard</a></li>
                                  <li><a href="<?php echo base_url('internship/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/educational_details') ?>" >Educational Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/contact_details') ?>" >Contact Details</a></li>
                                    <li><a href="<?php echo base_url('internship/profile/profile_details') ?>" class="active">View Profile</a></li>
                                    <li><a href="<?php echo base_url('internship/update_password') ?>">Update Password</a></li>                                  
                                    <li><a href="<?php echo base_url('internship/logout') ?>">Log Out</a></li>
                                </ul>
                    		</div>
                    	</div>
<style type="text/css">
  .profile_watermark{background-image: url("http://www.cadnaukri.com/assets/sam/watermark/CADnaukri.png");
    background-repeat: no-repeat;
    background-position: top right;}
    @media screen and (max-width: 768px){
      .profile_watermark{background-image: url("none");}
    }
</style>
                        <div class="col-md-9 col-xs-12 ">
                        <div id="my_profile" >
		                    <div class="xcolleft"> 
		                      <div class="profile_print" id="profile_print" style="border: 1px solid rgba(0, 0, 0, 0.2);"	>			  			
		                         <h1 class="h1_titel">My Profile</h1>   
		                        <div class="row profile_watermark">
		                         	<div class="col-md-12  col-xs-12" style="border:0px solid #ccc;padding: 5px;border-radius: 4px;">
		                         		<center><img src="<?php echo base_url($details->image_path);?>" style="width: 180px;height: 180px;border: 1px solid #ccc;padding: 5px;border-radius: 4px;"></center>
		                         	</div>
                             </div>
		                         	<!-- <div class="col-md-8 col-xs-12" style="border: 0px solid red;"> -->
		                         		
		                         	                          
					            <div class="row " style="padding-top: 1%;">
			                        <!-- <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10 desktop" style="font-weight: bold;">
			                             Name</div> <div class="col-md-1 col-xs-1 desktop">:</div> -->
			                        
			                        <div class="col-md-12 col-xs-12" align="center">
			                           <h4> <?php echo $interns->name; ?></h4>
			                        </div>
		                        </div>                     

		                   	<div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;">DOB   :  <span> <?php echo $details->dob;?></span></h4>
                        </div>  
                        </div>
                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;"><?php echo $details->gender;?></h4>
                        </div>  
                        </div>
		                  
		                  <style type="text/css">
                      .h1_titel{padding-left: 20px;background-color: #9A9A9A;color:#fff;height: 40px;line-height: 40px;vertical-align: middle;}
		                  .mobile{display: none;}
                      .box_margin{border: 0px solid red;margin: 0 50px;}

		                  @media screen and (max-width: 768px){
		                  	.desktop{display: none}
		                  	.mobile{display: block;}
                        .box_margin{border: 0px solid green;margin: 0 0px;}                        
                        .name_center{text-align: center;font-weight: bold;}
                        .mobile_margin{margin-bottom: 10px;border-bottom: 1px solid #ccc;}
		                  }
		                  </style>

                      <h1 class="h1_titel">Contact Details</h1>
                     <div class="row">                      
                      <div class="col-xs-12 col-md-12 box_margin">                     
                      
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                 Mobile
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                              <?php echo $details->phno;?>
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Email
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->email;?> 
                            </div> 
                       </div>             
                       </div>
                     </div>
                     


		                   <h1 class="h1_titel" style="">Educational Details</h1>

		                 <div class="row">	
                     	   <h4 style="text-align: center;color:#0055A5;">Professional qualification</h4> 
                                      	
		                 	<div class="col-xs-12 col-md-12 box_margin">	                 		
		                 	
		                  <div class="row" style="padding-top: 1%">
		                        <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
		                             Degree
		                        </div>
		                              <div class="col-md-1 col-xs-1 desktop">:</div>

		                        <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
		                         <?php echo $details->degree;?>
		                        </div>
		                  </div>

		                   <div class="row" style="padding-top: 1%">
		                        <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
		                            Branch/Stream
		                         </div>
		                              <div class="col-md-1 col-xs-1 desktop">:</div>
		                         <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
		                            <?php echo $details->stream;?> 
		                        </div> 
		                   </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                College/Institute
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->institute;?> 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Institute's location
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->location_insti;?>
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                University
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->university;?> 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Current semester
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->current_sem;?> 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Year of graduation
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->gaduationyearr;?> 
                            </div> 
                       </div>

		                   
		                   </div>
		                 </div>
<!-- <div class="container" align="center" style="border: 1px solid red;max-width: 700px;margin:auto;"> -->
  
                     <div class="row">  
                         <h4 style="text-align: center;color:#0055A5;">Basic qualification</h4>

                                       
                      <div class="col-xs-12 col-md-12 box_margin" style="">                     
                      
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 % Secured in 10th
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $details->ten_percentage;?> 
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%;margin-bottom: 5px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                % Secured in 12th
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $details->twelve_percentage;?> 
                            </div> 
                       </div>                
                      </div>
                    </div>
<!-- </div> -->
		                  
		                    
		                    <!-- <div class="row" style="padding-top: 1%;padding-bottom: 1%">
		                       <center><a href="<?php echo base_url('internship/profile/profile_details') ?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Download Profile</button></a></center>
		                    </div> -->
		                    

		             </div>
                 <div class="row" style="padding-top: 1%;padding-bottom: 1%">
                           <center><a href="<?php echo base_url('internship/profile/profile_details') ?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Download Profile</button></a></center>
                        </div>
		                 
		                            <p>&nbsp;</p>
		                    </div>
                       </div>
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
      </section>
      </div><br> 
   
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

        $(function() {
            $("#my_profile").find('.print-link').on('click', function() {
                //Print ele2 with default options
               $("#my_profile").print({
		            globalStyles: true,
		            mediaPrint: true,
		            stylesheet: null,
		            noPrintSelector: ".no-print",
		            iframe: false,
		            append: null,
		            prepend: null,
		            manuallyCopyFormValues: true,
		            timeout: 250,
		            title: 'Profile Details',
		            doctype: '<!doctype html>'
		            });
               });
             });
           /* $("#ele4").find('button').on('click', function() {
                //Print ele4 with custom options
                $("#ele4").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Add this at top
                    prepend : "Hello World!!!<br/>",
                    //Add this on bottom
                    append : "<br/>Buh Bye!"
                });
            });
            // Fork https://github.com/sathvikp/jQuery.print for the full list of options
        });*/
/*
function print()
{
	$("#my_profile").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 250,
            title: null,
            doctype: '<!doctype html>'
    });
	
}*/

</script>