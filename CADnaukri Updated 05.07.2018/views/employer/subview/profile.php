  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<title>Employer | Profile</title>
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


<style>

 .error

 {

 color:#FF0000;

 }
    .addon{background-color: transparent;}
    .addon:hover{background-color:none;color:#0055A5;}
    .plus{color:#FF7900;font-size: 15px;cursor: pointer;}
    .plus:hover{color:#0055A5;}

    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

</style>

<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">

  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;border:none;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;border:none;}
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

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>
                 
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

                          <div class="col-md-3 col-xs-12">

                  			<div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">

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
<style type="text/css">
  #exe {
    box-sizing: content-box;    
    width: 768px;
    height: 120px;
    /*padding: 30px;    */
    /*border: 10px solid blue;*/
}
</style>
								    <li class="profile-photo"><img src="<?php echo $profile_image_url?>" alt=""  id="exe"/></li>

                                    <!-- <li class="profile-edit">  
                                    <a  data-toggle="modal" data-target="#myModal">

                                     

                                     </a></li> -->

                                </ul>

							
<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>
                                    <li><a href="<?php echo base_url('employer/profile'); ?>" class="active">Your Profile</a></li>
                                    <li><a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a></li>

                                    <li><a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a></li>
                                    <!-- <li><a href="<?php //echo base_url('employer/application_recieved') ?>">Application Received</a></li> -->
                                    <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>">Dashboard</a>
                                          <a href="<?php echo base_url('employer/profile'); ?>" class="active">Your Profile</a>
                                          <a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a>

                                          <a href="<?php echo base_url('employer/job_details') ?>" >Job Posts</a>
                                          <a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a>
                                          <!-- <a href="<?php //echo base_url('employer/application_recieved') ?>">Application Received</a>          -->
                                          <a href="<?php echo base_url('employer/logout');?>">Log Out</a>
                                          <a href="javascript:void(0);" style="font-size:17px;" class="icon" onclick="myFunction1()">&#9776;</a>
                                      </div>
                                </div> 

                                <style type="text/css">
                                           
                                              .mobile_view{display: none;}
                                            
                                              @media screen and (max-width: 768px){
                                                .desktop_view{display: none;}
                                                .mobile_view{display: block;}
                                              }

                                              body {margin:0;}

                                              .topnav {
                                                overflow: hidden;
                                                background-color: #0055A5;
                                                border-radius: 2px;
                                              }

                                              .topnav a {
                                                float: left;
                                                display: block;
                                                color: #f2f2f2;
                                                text-align: center;
                                                padding: 5px 16px;
                                                text-decoration: none;
                                                font-size: 15px;
                                              }

                                              .topnav a:hover {
                                                background-color: #FF7900;
                                                color: black;
                                              }

                                              .active {
                                                background-color: #0055A5;
                                                color: white;
                                              }

                                              .topnav .icon {
                                                display: none;
                                              }

                                              @media screen and (max-width: 768px) {
                                                .topnav a:not(:first-child) {display: none;}
                                                .topnav a.icon {
                                                  float: right;
                                                  display: block;
                                                }
                                              }

                                              @media screen and (max-width: 768px) {
                                                .topnav.responsive {position: relative;}
                                                .topnav.responsive .icon {
                                                  position: absolute;
                                                  right: 0;
                                                  top: 0;
                                                }
                                                .topnav.responsive a {
                                                  float: none;
                                                  display: block;
                                                  text-align: left;
                                                }

                                              }
                                              a:hover{text-decoration: none;}
                                </style>
                                <script>
                                    function myFunction1() {
                                        var x = document.getElementById("Topnav");
                                        if (x.className === "topnav") {
                                            x.className += " responsive";
                                        } else {
                                            x.className = "topnav";
                                        }
                                    }
                                </script> 
<!--Test Collapse-->  

                    		</div>

                    	</div>
<style type="text/css">
                    .fixed_top{border:0px solid red;width:100%;margin-bottom: 20px;margin-top: -2px;background-color:#fff;border-radius: 2px;padding: 3px;color:#000;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;}
                     .mid{border:0px solid red;margin-left: -20px; }
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;text-align: center; width:100%;}
                         .aaa{float:left;margin-top: 10px;margin-left: 20px;} 
                         .mid{margin-left: 0px; }                       
                  </style>

                      <!-- <h3 class="fixed_top">Add Your <?php echo ucfirst(str_replace('_',' ',$this->uri->segment(2)));?></h3> -->


                        <div class="col-md-9 col-xs-12" style="">
                          <h3 class="fixed_top">Add Your <?php echo ucfirst(str_replace('_',' ',$this->uri->segment(2)));?></h3>

							<div class="xcolleft">

								<!-- <div class="row"> -->

									<!-- <div class="col-md-8">

										<h3>Add Your <?php //echo ucfirst(str_replace('_',' ',$this->uri->segment(2)));?></h3>

									</div> -->

									<!-- <div class="col-md-4">

										<a class="button"

											href-="<?php //echo base_url('employer/dashboard')?>"

											style="margin-top: 5%;"> <i class="fa fa-arrow-left"></i>BACK

										</a>

									</div> -->

								<!-- </div> -->

                  			  <?php 	

                  			  if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert"

									style="color: #4F8A10; background-color: #DFF2BF; padding: 10px"><?php echo $succesmsg;?></div>

								<?php } ?>



<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  PERSONAL DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

<?php if($this->uri->segment(2) == "profile"){ ?>
								<form class="form-horizontal" name="registration" action=""

									method="post" enctype="multipart/form-data">

									<div class="row">

										<div class="form-group" >


											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Full Name</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="text" class="form-control" id="fName"

													name="fName" size="50" placeholder="Full Name"

													value="<?php echo $profile->name?>" required>



											</div>

										</div>

									</div>

									<div class="row">

										<div class="form-group">

											<label for="inputEmail3" class="col-sm-2 control-label" style="margin:0 7px;">Email</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="email" class="form-control" id="email"

													name="email" size="50" placeholder="Email"

													value="<?php echo $profile->email?>">



											</div>

										</div>

									</div>

                  <div class="row" style="margin-bottom: 15px;">

                    <div class="form-group">

                      <label for="inputEmail3" class="col-sm-2 control-label" style="margin:0 7px;">Secondry Email</label>

                      <div class="col-sm-7" style="margin:0 7px;">              

                      <div class="input-group">
                          
                          <input type="email" class="form-control" id="" name="email" size="50" placeholder="Secondry Email" value="<?php echo $profile->secondary_email?>">
                          <span class="input-group-addon addon" style="">
                            <i class="glyphicon plus" style="" onclick="gothere()">Add/Update</i>
                          </span> 
                      </div>


                      </div>

                    </div>

                  </div>
                  

									<div class="row">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Mobile

												</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="tel" class="form-control" id="mobile"

													name="mobile" placeholder="e.g. 8895679043"

													value="<?php echo $profile->mobile?>"  onkeypress="return isNumber(event)">



											</div>

										</div>

									</div>

									<div class="row" style="">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Location</label>

											<div class="col-sm-7" style="margin:0 7px;">
											<select  class="form-control" name="location">

											<?php
											
											foreach($city_list as $ctl)
											{
												$is_selected=$ctl->city_id==$profile->location?'selected':'';
												echo '<option value="'.$ctl->city_id.'" '.$is_selected.'>'.$ctl->city_name.'</option>';
											}
											
											?>
											</select>

												<!--<input type="text" class="form-control" name="nationality"

													placeholder="Nationality"

													value="<?php echo $profile->nationality?>">-->



											</div>

										</div>

									</div>

									<div class="row" style="margin-top: 15px;margin-bottom: 15px;">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Nationality</label>

											<div class="col-sm-7" style="margin:0 7px;">
											<select  class="form-control" name="nationality">

											<?php
											
											foreach($country_list as $cl)
											{
												$is_selected=$cl->country_id==$profile->nationality?'selected':'';
												echo '<option value="'.$cl->country_id.'" '.$is_selected.'>'.$cl->country_name.'</option>';
											}
											
											?>
											</select>

												<!--<input type="text" class="form-control" name="nationality"

													placeholder="Nationality"

													value="<?php echo $profile->nationality?>">-->



											</div>

										</div>

									</div>

									<div class="row">

										<div class="form-group" style="">
                      <div class="col-md-1 col-xs-1"></div>

											<div class="col-md-5 col-xs-5 col-sm-6">

												<button type="submit" class="btn btn-primary next pull-right" name="personal_details"

													value="Submit">Next</button>
                      </div>
                      <div class="col-md-5 col-xs-5 col-sm-6">

												<a href="<?php echo base_url('employer/dashboard')?>" class="btn btn-danger cancle">Cancel</a>
                      </div>

											</div>

										</div>

									<!-- </div> -->
								</form>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ END PERSONAL DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

<?php } if($this->uri->segment(2) == 'company_details'){ ?>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ COMPANY DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

<form class="form-horizontal" name="registration" action="" method="post" enctype="multipart/form-data">

									<div class="row" style="">
									<style type="text/css">
										.star{color:red;}
									</style>
										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Industry type <span class="star" >*</span> </label>

											<div class="col-sm-7" style="margin:0 7px;">
											<select  class="form-control" name="industry_type">

											<?php
											
											foreach($industry_types as $d)
											{
												$is_selected=$d->id==$profile->industry_type?'selected':'';
												echo '<option value="'.$d->id.'" '.$is_selected.'>'.$d->name.'</option>';
											}
											
											?>
											
											?> 
											</select>

											</div>

										</div>

									</div>


									<div class="row" style="margin-top: 15px;">

										<div class="form-group">

											<label for="companyname" class="col-sm-2 control-label" style="margin:0 7px;">Company

												Name</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="text" class="form-control" id="companyName"

													name="companyName" size="50" placeholder="Company Name"

													value="<?php echo $profile->companyName?>">



											</div>

										</div>

									</div>

									<div class="row" style="">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Designation</label>

											<div class="col-sm-7" style="margin:0 7px;">
											<select  class="form-control" name="roles">

											<?php
											
											foreach($designations as $d)
											{
												$is_selected=$d->designation_id==$profile->roles?'selected':'';
												echo '<option value="'.$d->designation_id.'" '.$is_selected.'>'.$d->designation_name.'</option>';
											}
											
											?>
											</select>
											</div>

										</div>

									</div>

									<div class="row" style="margin-top: 15px;">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Company Email</label>

											<div class="col-sm-7" style="margin:0 7px;">
											<input type="text" class="form-control" id="company_email"

													name="company_email" placeholder="Company Email"

													value="<?php echo $profile->company_email?>" required>

											

											</div>

										</div>

									</div>

									<!-- <div class="row">

										<div class="form-group">
                      <div class="col-md-1"></div>
											<div class="col-md-5 col-xs-6">

												<button type="submit" class="btn btn-primary next pull-right" name="company_details"	value="Submit">Next</button>
                        </div>
                        <div class="col-md-5 col-xs-6">

												<a href="<?php echo base_url('employer/dashboard')?>" class="btn  cancle">Cancels</a>
                      </div>

											</div>

										</div> -->
                    <div class="row">

                    <div class="form-group" style="">
                      <div class="col-md-1 col-xs-1"></div>

                      <div class="col-md-5 col-xs-5 col-sm-6">

                        <button type="submit" class="btn btn-primary next pull-right" name="company_details"

                          value="Submit">Next</button>
                      </div>
                      <div class="col-md-5 col-xs-5 col-sm-6">

                        <a href="<?php echo base_url('employer/dashboard')?>" class="btn btn-danger cancle">Cancel</a>
                      </div>

                      </div>

                    </div>

									
								</form>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ END COMPANY DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<?php } if($this->uri->segment(2) == 'social_logins'){ ?>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ SOCIAL LOGIN DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<form class="form-horizontal" name="registration" action="" method="post" enctype="multipart/form-data">								
									<div class="row">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Facebook</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="text" class="form-control" id="fName"

													name="facebook" size="50" placeholder="Facebook"

													value="<?php echo $profile->facebook?>" >



											</div>

										</div>

									</div>
									<div class="row">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Linkedin</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="text" class="form-control" id="fName"

													name="linkdin" size="50" placeholder="Linkedin"

													value="<?php echo $profile->linkdin?>">



											</div>

										</div>

									</div>
									<div class="row">

										<div class="form-group">

											<label for="exampleInputName2" class="col-sm-2 control-label" style="margin:0 7px;">Twitter</label>

											<div class="col-sm-7" style="margin:0 7px;">

												<input type="text" class="form-control" id="fName"

													name="twitter" size="50" placeholder="Twitter"

													value="<?php echo $profile->twitter?>">



											</div>

										</div>

									</div>
									<div class="row">

                    <div class="form-group" style="">
                      <div class="col-md-1 col-xs-1"></div>

                      <div class="col-md-5 col-xs-5 col-sm-6">

                        <button type="submit" class="btn btn-primary next pull-right" name="social_logins"

                          value="Submit">Submit</button>
                      </div>
                      <div class="col-md-5 col-xs-5 col-sm-6">

                        <a href="<?php echo base_url('employer/dashboard')?>" class="btn btn-danger cancle">Cancel</a>
                      </div>
                        

                      </div>

                    </div>
									</form>
                  
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ END SOCIAL LOGIN DETAILS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->	
<?php } ?>

<!-- <center>
<button class="btn btn-info" onclick="gothere()">Add Secondary Email</button>
</center> -->

							</div>

						</div>

                 </div>

               </div>

             </div>

           </div>

         </section>

     </section>

 </div>
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

</div><br><br>
<script>
function isNumber(evt) {
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					return false;
				}
				return true;
			}
function gothere()
{
  setTimeout(function(){ alert("Hello"); }, 3000);
  window.location="<?php echo base_url();?>employer/add_secondary_email";
}



</script>