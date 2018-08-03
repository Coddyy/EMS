  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
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

 <title>Repost Job</title>
 <style>

 .error

 {

 color:#FF0000;

 }

</style>
<style>
 .error
 {
 color:#FF0000;
 }
 #exe {
    box-sizing: content-box;    
    width: 768px;
    height: 120px;
    align-items: center;
    /*padding: 30px;    */
    /*border: 10px solid blue;*/
}
a:hover{text-decoration: none;}
</style>
<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


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
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Application-Recieved">Track Applications</a></li>
                    
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

                          <div class="col-xs-12 col-md-3">

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

								    <li class="profile-photo">

								    <a href="<?php echo base_url('employer/dashboard')?>" >

								    <img src="<?php echo $profile_image_url?>" id="exe" alt="" /></a>

								   </li>

                                    <!-- <li class="profile-edit">

                                    <a  data-toggle="modal" data-target="#myModal">

                                      <?php echo $add_or_edit?> Photo

                                     </a>

                                    

                                    </li> -->

                                </ul>

							

                   				<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a></li>
                                    <li><a href="<?php echo base_url('Employer/Company-Profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a></li>

                                    <li><a href="<?php echo base_url('Employer/Job-Post') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('Employer/Internship-Details') ?>">Internship Posts</a></li>
                                    <!-- <li><a href="<?php echo base_url('Employer/Application-Recieved') ?>">Application Received</a></li> -->
                                    <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>">Dashboard</a>
                                          <a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a>
                                          <a href="<?php echo base_url('Employer/Company-Profile') ?>" >Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a>

                                          <a href="<?php echo base_url('Employer/Job-Post') ?>">Job Posts</a>
                                          <a href="<?php echo base_url('Employer/Internship-Details') ?>">Internship Posts</a>
                                          <!-- <a href="<?php echo base_url('Employer/Application-Recieved') ?>">Application Received</a> -->
                                          <a href="<?php echo base_url('employer/update_password');?>">Update Password</a>
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
                                                text-decoration: none;
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
                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;height: 50px;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;}
                     .frame{height: 700px;overflow-y: scroll;overflow-x: hidden;margin-top: -20px;border:0px solid red;}
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:left;margin-top: 10px;margin-left: 20px;} 
                     .frame{margin-top: 30px;border:0px solid green;}

                       }
                                                
                  </style>

<h3 class="fixed_top "><?=$this->uri->segment("3")==""?'Add':'Repost';?> Job</h3>
                        <div class="col-xs-12 col-md-9 frame" style="">

                  			<div class="xcolleft">

                  			<!-- <div class="row">

                  			  <div class="col-md-8" style=""><h3>
                  			  <?=$this->uri->segment("3")==""?'Add':'Repost';?> Job</h3></div>

                  			 

                  			</div> -->

                  		   <?php 	

                  		   	if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert" style=" color: #4F8A10;

   										 background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>

								<?php } ?> 

							<?php 

							$new_skills_array=array();

							if($is_edit_skills==TRUE)

							{

								foreach($job_skill_detail as $csk)

								{

									array_push($new_skills_array, $csk->skill_id);

									 

								}

							}

							?>
              <style type="text/css">
                .lable_stl{border: 0px solid red; text-align: left;font-size: 16px;}
              </style>

								<form class="form-horizontal" method="post" action="" id="f1" style="" >


									<div class="row" style="margin-top:10px;">
									<div class="form-group" style="padding: 0 20px;" >

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  >Job

											Title<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<input type="text" class="form-control" id="jobtitle" onkeyup="validatejobtitle()" name="jobtitle" value="<?php echo $job->jobtitle?>" size="50" onblur="allLetter()" placeholder="Job Title" maxlength="40" required>

											
											<label id="errjt"></label>

										</div>

									</div>
								</div>

									
									<div class="row" style="margin-top:0px;">
									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  style="border: 0px solid red;">Experience (IN years)<span class="error">*</span>

										</label>
										<!-- <?php
										$yop=explode(" ",$job->yop);
										?>-->

										<!-- <div class="col-sm-10">

											<input type="text" name="yop_from" id="yop_from" class="form-control"  placeholder="from"

											value="<?php echo (isset($yop[0]) ? $yop[0]: "") ?>" onkeypress="return isNumber(event)">

											

										</div> -->
										<!-- <div class="col-sm-1">  - </div> -->
										<div class="col-sm-8"  style="border: 0px solid red;">

										<!--	<input type="text" name="yop_to" id="yop_to" class="form-control"  placeholder="to"

											value="<?php echo (isset($yop[1]) ? $yop[1]: "") ?>" onkeypress="return isNumber(event)"> -->
											<select name="experience">
                                              <!-- <option value="0" style="">--</option> -->
                                              <option value="0-1" <?php if($job->yop == '0-1'){echo 'selected="selected"';} ?> style="">0-1</option>
                                              <option value="1-2" <?php if($job->yop == '1-2'){echo 'selected="selected"';} ?>>1-2</option>
                                              <option value="2-3" <?php if($job->yop == '2-3'){echo 'selected="selected"';} ?>>2-3</option>
                                              <option value="3-5" <?php if($job->yop == '3-5'){echo 'selected="selected"';} ?>>3-5</option>
                                              <option value="5-7" <?php if($job->yop == '5-7'){echo 'selected="selected"';} ?>>5-7</option>
                                              <option value="7" <?php if($job->yop == '7'){echo 'selected="selected"';} ?>>7-10</option>
                                              <option value="7+" <?php if($job->yop == '7+'){echo 'selected="selected"';} ?>>10+</option>
                                            </select>
											
                                            </div>
										</div>
									</div>

									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  style="">Job Type<span class="error">*</span>
										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">
											<select style="height:5%; width: 100%;" name="job_type">
											<option value="<?php echo $job->job_type;?>" style=""><?php echo $job->job_type;?></option>
											  <option value="Full-time" style="">Full-time</option>
				                              <option value="Part-time" style="">Part-time</option>
				                              <option value="Contractual" style="">Contractual</option>
				                              <option value="Freelance" style="">Freelance</option>
				                            </select>
										</div>
									</div>
									</div>
									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  style="border: 0px solid red;">Indutry Type<span class="error">*</span>
										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">
										<select style="height:5%; width: 100%;" name="industry_type">
										<?php $data=$this->Job_M->get_industry_type($job->industry_type);?>
											<option value="<?php echo $data->id;?>" style=""><?php echo $data->name;?></option>
											<?php $industry_type=$this->Job_M->get_industry_type();
											foreach($industry_type as $key){ 

												?>
											  <option value="<?php echo $key->id; ?>" style=""><?php echo $key->name;?></option>
											<?php  } ?>
				                              
				                            </select>
											  
				                            </select>
										</div>
									</div>
									</div>
									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  style="border: 0px solid red;">
										CTC Per Annum:(PA/Lack in <span class="WebRupee">Rs;</span>)<span class="error">*</span>

										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">

											<select style="height:5%; width: 100%;" name="salary">
											  <option value="0-1"<?php if($job->salary == '0-1'){echo 'selected="selected"';} ?>style="">0-1</option>
				                              <option value="1-1.5" <?php if($job->salary == '1-1.5'){echo 'selected="selected"';} ?> style="">1-1.5</option>
				                              <option value="1.5-2.4" <?php if($job->salary == '1.5-2.4'){echo 'selected="selected"';} ?> style="">1.5-2.4</option>
				                              <option value="2.4-3.5" <?php if($job->salary == '2.4-3.5'){echo 'selected="selected"';} ?>>2.4-3.5</option>
				                              <option value="3.5-5" <?php if($job->salary == '3.5-5'){echo 'selected="selected"';} ?>>3.5-5</option>
				                              <option value="5-8" <?php if($job->salary == '5-8'){echo 'selected="selected"';} ?>>5-8</option>
				                              <option value="<=10" <?php if($job->salary == '<=10'){echo 'selected="selected"';} ?>>Upto 10</option>
				                              <option value="10-15" <?php if($job->salary == '10-15'){echo 'selected="selected"';} ?>>10-15</option>
				                              <option value="<=50" <?php if($job->salary == '<=50'){echo 'selected="selected"';} ?>>Upto 50</option>
				                              <option value="50+" <?php if($job->salary == '50+'){echo 'selected="selected"';} ?>>Above 50</option>
				                              
				                            </select>
										</div>
										</div>

									</div>
										<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Gender<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<select style="height:5%; width: 100%;" name="gender">
											<option value="<?php echo $job->gender;?>" style=""><?php echo $job->gender;?></option>
											  <option value="Male" style="">Male</option>
				                              <option value="Female" style="">Female</option>
				                              <option value="Male-Female" style="">Male/Female</option>
				                            </select>

										</div>

									</div>

									</div>
										<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Language<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<input type="text" value="<?php echo $job->language;?>" ondblclick="validatelanguage(this)" onkeyup="validatelanguage(this)" name="language" maxlength="40" id="language"

												class="form-control" value="<?php //echo $job->pincode; ?>" placeholder="" style="margin-bottom: 0;" required>
											<label style="color:orange;">Use Comma To Separate</label>
										</div>

									</div>

									</div>


									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Company

											<span

											class="error">*</span>

										</label>

										<div class="col-sm-8">

											<select name="companyId"  class="form-control">

											<?php 

											if(!empty($company_data))

											{

												foreach($company_data  as $cd)

												{

													$is_selected=$cd->id==$job->companyId?'selected':'';

													echo '<option value="'.$cd->id.'"'.$is_selected.'>'.$cd->name.'</option>';

												}

												  

												  

											}

											?>

											</select>



										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Location<span

											class="error">*</span></label>

										<div class="col-sm-8">

										<select  class="form-control" name="location">

											<?php
											
											foreach($city_list as $ctl)
											{
												$is_selected=$ctl->city_id==$profile->location?'selected':'';
												echo '<option value="'.$ctl->city_name.'" '.$is_selected.'>'.$ctl->city_name.'</option>';
											}
											
											?>
											</select>

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Designation</label>

										<div class="col-sm-8">

											<input type="text" name="designation" id="designation"

												class="form-control" value="<?php echo $job->designation?>" placeholder=""

												style="margin-bottom: 0;" >

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Last

											date for receipt of Applications:<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<?php 
											$val1 = date_format(date_create($job->lastdate), 'm/d/Y');?>

                                            <input type="text" id="datepicker" name="lastdate" id="lastdate" 
                                            value="<?php echo $val1?>" style="cursor:pointer" readonly>

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Desired

											Qualification<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<input type="text" name="qualification" class="form-control"

												value="<?php echo $job->qualification?>" placeholder="Minimum Qualification" required>

											<div id="errfn" class="error"></div>

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Desired

											Skill<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<select multiple="multiple" placeholder="Skills"

												name="skills[]" class="SlectBox form-control" required>

												<?php 

												if(!empty($skills))

												{

													foreach($skills as $s)

													{

														$is_selected=(in_array($s->id, $new_skills_array))?'selected':'';

														echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';

													}

													

												}

													

												?>

											</select>

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">

										Additional Skill:<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<input type="text" class="form-control"  value="<?php echo $job->additionalSkills?>" name="additionalSkills" 
											placeholder="Addtionkeyskill" maxlength="1000">

										</div>

									</div>

								</div>

								<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Description:<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<textarea cols="80" rows="2" name="description"

												class="description" id="description" class="form-control"

												placeholder="Descrition" 

												style="margin-bottom: 0;" required><?php echo $job->description?></textarea>

										</div>
									</div>
								</div>
										<!-- #################### -->
										<div class="row" style="margin-top:10px">

											<div class="form-group" style="padding: 0 20px;">

											<!-- <div class="control-group"> -->		
                                <label for="exampleInputName2" class="col-sm-4 lable_stl">Job Tags:<span class="error">*</span></label>
                                <div class="col-sm-8">	
                                   <select id="job_tag" multiple="multiple" size="5" name="job_tag[]" class="input-xlarge  
                                 form-control " >
						   
                              <?php 
                              
                              $tag_array=array('CAD Jobs','CAE Jobs','CFD Jobs','PLM Jobs','BIM Jobs','CAD Sales Jobs','CAD SoftwareDev.Jobs');
                              if($tag_array)
                              {
							  	foreach($tag_array as $t)
							  	{
							  		$is_selected='';
							  		if(in_array($t,$job_tags))
							  		{
										$is_selected='selected';
									}
									echo '<option value="'.$t.'"'.$is_selected.'>'.$t.'</option>';
								}
							  }
                              ?>
			             
                             </select>
                                </div>					
                          </div>		


										<!-- #################### -->

									</div>

									<!-- </div> -->

									<div class="row" style="margin-top:10px">

									<div class="form-group" >

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<center>
											<button type="submit" onclick="validate()" name="submit" class="btn btn-primary log">Submit</button>



											<a href="<?php echo base_url('employer/dashboard')?>"

												class="btn btn-primary reset">Cancel</a>
											</center>
										<!-- </div> -->

									</div>

									</div>

								</form>

							</div>

                  	</div>

                 </div>

               </div>

             </div>

           </div>

         </section>

     </section>

 </div><br>
<style type="text/css">
.log{background-color:#0055A5;border:none;width: 10%; }
.log:hover{background-color:#FF7900; }
.reset{background-color:#FF7900;border:none;width: 10%;}
@media screen and (max-width: 768px){
	.log,.reset{width: 30%;}
}
</style>

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
function isNumber(evt) {
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				console.log(charCode);
				if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !=46) {
					return false;
				}
				return true;
			}
	$('select[multiple]').multiselect({



		// text to use in dummy input

		//placeholder   : 'Select',    



		// how many columns should be use to show options

		columns       : 1,  



		// include option search box   

		search        : false,    



		// search filter options

		searchOptions : {

		  default      : 'Search', // search input placeholder text

		  showOptGroups: false     // show option group titles if no options remaining

		},     



		// add select all option

		selectAll     : false, 



		// select entire optgroup   

		selectGroup   : false,  



		// minimum height of option overlay

		minHeight     : null,   



		// maximum height of option overlay

		maxHeight     : null,  



		// display the checkbox to the user

		showCheckbox  : true,  



		// options for jquery.actual

		jqActualOpts  : {},    



		// maximum width of option overlay (or selector)

		maxWidth      : null, 



		// minimum number of items that can be selected

		minSelect     : false, 



		// maximum number of items that can be selected

		maxSelect     : false, 



});
$(function() {
    $( "#datepicker" ).datepicker({minDate:0});
  });

  $(function() {
   
     var locations =<?php echo json_encode($citis)?>;
     //alert(locations);
    $( "#location" ).autocomplete({
    	

      source: locations, select: function(event, ui) {
               $('#selected_location').val((ui.item.label));
            }
            
    });
  });

	</script>

<script>

function validatedesignation()
{
	designation.value = designation.value.replace(/[^a-zA-Z- ]+/g, '');
}
function validatelanguage()
{
	language.value = language.value.replace(/[^a-zA-Z,]+/g, '');
}
function dislabel(msg,plocation,color)
{
	document.getElementById(plocation).innerHTML = msg;
	document.getElementById(plocation).style.color = color;
}
function validatejobtitle()
{
	var name=document.getElementById("jobtitle").value;
	if(name.length > 10 &&  name.length < 20)
	{
		dislabel("Good !","errjt","orange");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 20 && name.length < 30)
	{
		dislabel("Great !","errjt","#87CEFA");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 30)
	{
		dislabel("Awesome !","errjt","#32CD32");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 0 && name.length < 10)
	{
		dislabel("Not Preferable !","errjt","red");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return false;
	}
	else if(name.length == 0)
	{
		dislabel("Enter Jobtitle!","errjt","red");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return false;
	}
}

$(function(){
   $("#skills").multiselect({
   	header: "Choose options below",
       hide: ["explode", 1000],
       selectedList: 10 // 0-based index
   }); 
   $("#job_tag").multiselect({
   	header: "Choose options below",
       hide: ["explode", 1000],
       selectedList: 10 // 0-based index
   }); 
   $( "#datepicker" ).datepicker();
});
</script>