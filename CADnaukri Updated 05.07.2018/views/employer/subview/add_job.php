  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
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
 <title>
<?php 

    // if($this->uri->segment(2) != "")
    // {
        $url=explode('_',$this->uri->segment(2));
        echo ucfirst($this->uri->segment(1)) ." | ".ucfirst($url[0])." ".ucfirst($url[1]);
    // }
    // else
    // {
    //     echo ucfirst($this->uri->segment(2));
    // }

?>
</title>
<style type="text/css">
	.next{background-color:#FF6600;width:60%;color:#fff;}
	.cancle{background-color:#0055A5;width:60%;color:#fff;}
	.cancle:hover{background-color: #FF6600;}
	.next:hover{background-color: #0055A5;}
</style>
 <style>
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

 .error

 { color:#FF0000;}
a:hover{text-decoration: none;}
</style>

<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}

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
<div class="container-fluid" style="width: 100%;">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <!--Image-->



          <!--Image-->
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="">
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>

                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu"><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>
                    
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

						<style type="text/css">
  #exe {
    box-sizing: content-box;    
    width: 768px;
    height: 120px;
    /*padding: 30px;    */
    /*border: 10px solid blue;*/
}
</style>		    <li class="profile-photo">

								    <a href="<?php echo base_url('employer/dashboard')?>" >

								    <img src="<?php echo $profile_image_url?>" alt="" id="exe" /></a>

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
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>" class="active">Post your Ad</a></li>

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
                                          <a href="<?php echo base_url('Employer/Company-Profile') ?>"  >Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>" class="active">Post your Ad</a>

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
  .lable_stl{border: 0px solid red; text-align: left;font-size: 16px;}

                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;}
                     .mid{border:0px solid red;margin-left: -20px; }
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:right;margin-top: -35px;margin-left: 20px;} 
                         .mid{margin-left: 0px; }                       
                  </style>

<h3 class="fixed_top"><?php $title=str_replace('_',' ',$this->uri->segment(2)); 
								echo ucwords($title);

								?></h3>
<?php $back_url=base_url('employer/job_details');?>
								<a  href="<?php echo base_url()?>employer/post_ad" class="button aaa">
                  			  		BACK</a>


		            <div class="col-xs-12 col-md-9 mid" style="">

		      			<div class="xcolleft">

		      			<div class="row">

                  			  <div class="col-md-8"><?php //echo strToUpper("hello"); ?></div>

                  			 

                  			</div>

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

<!-- *************************************** URI-SEGMENT = ADD JOB   ************************************ -->


		<?php if($this->uri->segment(2) == "add_job"){ ?>
								<form class="form-horizontal" method="post" action="" id="f1" >

								
								<br />
									<div class="row" style="margin-top:10px;">
									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl"  style="border: 0px solid red;">Job

											Title<span class="error">*</span>

										</label>

										<div class="col-sm-8"  style="border: 0px solid red;">

											<input type="text" class="form-control" id="jobtitle" onkeyup="validatejobtitle(this)" onclick="validatejobtitle(this)" name="jobtitle" value="<?php echo $job->jobtitle?>" size="50" onblur="allLetter()" placeholder="Job Title" maxlength="26" required>
								<label id="errjt"></label>

										</div>

									</div>
								</div>

									<div class="row" style="margin-top:-10px;">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Designation</label>

										<div class="col-sm-8">

											<input type="text" onkeyup="validatedesignation(this)" onclick="validatedesignation(this)" name="designation" id="designation"

												class="form-control" value="<?php echo $job->designation?>" placeholder="Designation"

												style="margin-bottom: 0;" >

										</div>

									</div>

									</div>
									<!-- <div class="row" style="margin-top:10px">

									<div class="form-group">

										<label for="exampleInputName2" class="col-sm-2 control-label">Company Name</label>

										<div class="col-sm-10">

											<input type="text" name="company_name" id="company_name"

												class="form-control" value="<?php //echo $job->company_name?>" placeholder="Company Name"

												style="margin-bottom: 0;" required>

										</div>

									</div>

									</div> -->
									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

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


									<div class="row" style="margin-top:10px;" align="center">

									<div class="form-group" style="padding: 0 40px;">

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<!-- <div class="row"> --><div class="col-md-1"></div>
											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button type="submit" onclick="validate()" name="job_profile" class="next">Next</button>
										</div>

											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
												<button class="cancle">
											<a href="<?php echo base_url('employer/dashboard')?>"

												class=""></a>Cancel</button>
											</div>
										<!-- </div> -->
										<!-- </div> -->

									</div>

									</div>

						</form>

<!-- *************************************** END URI-SEGMENT = ADD JOB   ************************************ -->

<!-- *************************************** URI-SEGMENT = JOB DETAILS   ************************************ -->
<?php } else if($this->uri->segment(2) =="add_job_details"){ ?>
					<form class="form-horizontal" method="post" action="" id="f1" >

							<!-- <h3 align="center"><?php $title=str_replace('_',' ',$this->uri->segment(2)); 
								echo strToUpper($title);

								?></h3> -->
								<br />
									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label"  style="border: 0px solid red;text-align: left;padding-left: 30px;">Job Type<span class="error">*</span>
										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">
											<select style="height:5%; width: 100%;" name="job_type">
											  <option value="Full-time" style="">Full-time</option>
				                              <option value="Part-time" style="">Part-time</option>
				                              <option value="Contractual" style="">Contractual</option>
				                              <option value="Freelance" style="">Freelance</option>
				                            </select>
										</div>
									</div>
									</div>
									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label"  style="border: 0px solid red;text-align: left;padding-left: 30px;">Industry Type<span class="error">*</span>
										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">
											<select style="height:5%; width: 100%;" name="industry_type">
											<?php foreach($industry_type as $key){ ?>
											  <option value="<?php echo $key->id; ?>" style=""><?php echo $key->name;?></option>
											<?php  } ?>
				                              
				                            </select>
										</div>
									</div>
									</div>
									<div class="row" style="margin-top:10px;">
									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label"  style="border: 0px solid red;text-align: left;padding-left: 30px;">Experience (in years)<span class="error">*</span>
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
                                              <option value="0-1" style="">0-1</option>
                                              <option value="1-2">1-2</option>
                                              <option value="2-3">2-3</option>
                                              <option value="3-5">3-5</option>
                                              <option value="5-7">5-7</option>
                                              <option value="7+">7-10</option>
                                              <option value="10+">10+</option>
                                            </select>
											
                                            </div>
										</div>
									</div>


									<div class="row" style="margin-top:10px;">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label"  style="border: 0px solid red;text-align: left;padding-left: 30px;">
										Salary:(Rs. in Lacs P.A.)  <span class="WebRupee"></span><span class="error">*</span>

										</label>
										<div class="col-sm-8"  style="border: 0px solid red;">
											<select style="height:5%; width: 100%;" name="salary">
											  <option value="0-1" style="">0-1</option>
				                              <option value="1-1.5" style="">1-1.5</option>
				                              <option value="1.5-2.4" style="">1.5-2.4</option>
				                              <option value="2.4-3.5">2.4-3.5</option>
				                              <option value="3.5-5">3.5-5</option>
				                              <option value="5-8">5-8</option>
				                              <option value="<=10">Upto 10</option>
				                              <option value="10-15">10-15</option>
				                              <option value="<=50">Upto 50</option>
				                              <option value="50+">Above 50</option>
				                            </select>
										</div>
										<!-- <div class="col-sm-4">

											<input type="text" name="minsal" id="minsal"

												class="form-control" value="<?php echo (isset($job->minsal) ? $job->minsal: "") ?>" placeholder="From"

												style="margin-bottom: 0;" required onkeypress="return isNumber(event)">



										</div>
										<div class="col-sm-1">-</div>
										<div class="col-sm-4">

											<input type="text" name="maxsal" id="maxsal"

												class="form-control" value="<?php echo (isset($job->maxsal) ? $job->maxsal: "") ?>" placeholder="To"

												style="margin-bottom: 0;" required onkeypress="return isNumber(event)">



										</div> -->

									</div>

									</div>

									
									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label" style="text-align: left;padding-left: 30px;">Location<span

											class="error">*</span></label>

										<div class="col-sm-8">

										<!-- <input type="hidden" name="selected_location" id="selected_location"> -->
										<select style="height:5%; width: 100%;" name="location" required="">
											<?php foreach($citis  as $cd)

												{

													//$is_selected=$cd->id==$job->companyId?'selected':'';

													echo '<option value="'.$cd->label.'">'.$cd->label.'</option>';

												} ?>
										</select>
											<!-- <input type="text" name="location" id="location"

												class="form-control" value="<?php echo $job->location?>" placeholder=""

												style="margin-bottom: 0;" required> -->

										</div>

									</div>

									</div>
									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label" style="text-align: left;padding-left: 30px;">Pincode<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<input type="text" name="pincode" id="pincode"

												class="form-control" maxlength="6" value="<?php //echo $job->pincode; ?>" placeholder="" style="margin-bottom: 0;" required>

										</div>

									</div>

									</div>
									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label" style="text-align: left;padding-left: 30px;">Gender preference<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<select style="height:5%; width: 100%;" name="gender">
											  <option value="Male" style="">Male</option>
				                              <option value="Female" style="">Female</option>
				                              <option value="Male-Female" style="">Male/Female</option>
				                            </select>

										</div>

									</div>

									</div>
									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 control-label" style="text-align: left;padding-left: 30px;">Language<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<input type="text" ondblclick="validatelanguage(this)" onkeyup="validatelanguage(this)" name="language" maxlength="40" id="language"

												class="form-control" value="<?php //echo $job->pincode; ?>" placeholder="" style="margin-bottom: 0;" required>
											<label style="color:orange;">Use Comma To Separate</label>
										</div>

									</div>

									</div>
									<div class="row" style="margin-top:10px;" align="center">

									<div class="form-group" style="padding: 0 40px;">

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<div class="col-md-1"></div>
											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button type="submit" onclick="validate()" name="add_job_details" class=" next">Next</button>
										</div>

											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button class="cancle">
											<a href="<?php echo base_url('employer/dashboard')?>"

												class=""></a>Cancel</button>
											</div>

										<!-- </div> -->

									</div>

									</div>
					</form>

<!-- *************************************** END URI-SEGMENT = JOB DETAILS   ************************************ -->



<!-- ************************************ URI-SEGMENT = QUALIFICATION DETAILS ************************************* -->

<?php } else if($this->uri->segment(2) == "qualification_details"){ ?>
				
				<form class="form-horizontal" method="post" action="" id="f1" >
						
						<!-- <h3 align="center"><?php $title=str_replace('_',' ',$this->uri->segment(2)); 
								echo strToUpper($title);

								?></h3> -->
								<br />			

									

									

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Eligibility:<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<input type="text" name="qualification" class="form-control"

												value="<?php echo $job->qualification?>" placeholder="Minimum Qualification" required>

											<div id="errfn" class="error"></div>

										</div>

									</div>

									</div>

									<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Desired

											Skills<span class="error">*</span>

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

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">

										Additional Skills:<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<input type="text" class="form-control"  value="<?php echo $job->additionalSkills?>" name="additionalSkills" 
											placeholder="Addtionkeyskill" maxlength="1000">

										</div>

									</div>

								</div>
								<div class="row" style="margin-top:10px;" align="center">

									<div class="form-group" style="padding: 0 40px;">

										<div class="col-md-1"></div>
											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button type="submit" onclick="validate()" name="qualification_details" class="next">Next</button>
										</div>

											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											
											<a href="<?php echo base_url('employer/dashboard')?>"

												class=""><button class="cancle">Cancel</button></a>
											</div>
													
										

									</div>

									</div>
						</form>


<!-- ************************************ END URI-SEGMENT = QUALIFICATION DETAILS ********************************** -->


<!-- ************************************ URI-SEGMENT = JOB DESCRIPTION ************************************* -->
<?php } else if($this->uri->segment(2) == "job_description"){ ?>
				
				<form class="form-horizontal" method="post" action="" id="f1" >

					<!-- <h3 align="center"><?php $title=str_replace('_',' ',$this->uri->segment(2)); 
								echo strToUpper($title);

								?></h3> -->
								<br />
								<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Description:<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<textarea cols="80" rows="2" name="description"

												class="description" maxlength="565" id="description" class="form-control"

												placeholder="Descrition" 

												style="margin-bottom: 0;" required><?php echo $job->description?></textarea>

										</div>
									</div>
								</div>
										<!-- #################### -->
										<div class="row" style="margin-top:10px">

											<div class="form-group" style="padding: 0 40px;">

											<!-- <div class="control-group"> -->		
                                <label for="exampleInputName2" class="col-sm-4 lable_stl">Job Tags:<span class="error">*</span></label>
                                <div class="col-sm-8">	
                                   <select id="job_tag" multiple="multiple" size="5" name="job_tag[]" class="input-xlarge  
                                 form-control " required>
						   
                              <?php 
                              
                              $tag_array=array('CAD Jobs','CAE Jobs','CFD Jobs','PLM Jobs','BIM Jobs','CAD Sales Jobs','CAD SoftwareDev.Jobs','CAM Jobs');
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

									</div>

									<!-- </div> -->

									<!--test-->
									<div class="row" style="margin-top:10px;" align="center">

									<div class="form-group" style="padding: 0 40px;">

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<!-- <div class="row"> --><div class="col-md-1"></div>
											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button type="submit" onclick="validate()" name="job_description" class="next">Next</button>
										</div>

											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
												<button class="cancle">
											<a href="<?php echo base_url('employer/dashboard')?>"

												class=""></a>Cancel</button>
											</div>
										<!-- </div> -->
										<!-- </div> -->

									</div>

									</div>

									<!--test-->

									<!-- <div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 20px;">

										<div class="col-sm-offset-5 col-sm-6">

											<button type="submit" onclick="validate()" name="job_description" class="button next">Next</button>



											<a href="<?php echo base_url('employer/dashboard')?>"

												class="btn btn-primary button cancl">Cancel</a>

										</div>

									</div>

									</div> -->

								</form>

							</div>

          
<!-- ************************************ END URI-SEGMENT = JOB DESCRIPTION ************************************* -->

<!-- ************************************  URI-SEGMENT = SUBMIT ************************************* -->

<?php } if($this->uri->segment(2) == "submit"){ ?> 

				<form class="form-horizontal" method="post" action="" id="f1" >

						<!-- <h3 align="center"><?php $title=str_replace('_',' ',$this->uri->segment(2)); 
								echo strToUpper($title);

								?></h3> -->
								<br />
								<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Application Deadline:<span class="error">*</span>

										</label>

										<div class="col-sm-8">

											<?php 
											$val1 = date_format(date_create($job->lastdate), 'm/d/Y');?>

                                            <input type="date" id="datepicker" name="lastdate" 
                                            value="<?php echo $job->lastdate;?>" style="cursor:pointer" >

										</div>

									</div>

									</div>
								<div class="row" style="margin-top:10px">

									<div class="form-group" style="padding: 0 40px;">

										<label for="exampleInputName2" class="col-sm-4 lable_stl">Company Email:<span

											class="error">*</span></label>

										<div class="col-sm-8">

											<input type="email" name="company_email"

												class="description" id="description" class="form-control"

												placeholder="Enter Company Email" 

												style="margin-bottom: 0;" required><?php //echo $job->company_email?></input>

										</div>
									</div>
								</div>
									<!--test-->
										<div class="row" style="margin-top:10px;" align="center">

									<div class="form-group" style="padding: 0 40px;">

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<!-- <div class="row"> --><div class="col-md-1"></div>
											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
											<button type="submit" onclick="validate()" name="submit_job" class="next">Next</button>
										</div>

											<div class="col-md-5 col-xs-12 col-sm-12" style="margin-top: 10px;">
												<button class="cancle">
											<a href="<?php echo base_url('employer/dashboard')?>"

												class=""></a>Cancel</button>
											</div>
										<!-- </div> -->
										<!-- </div> -->

									</div>

									</div>
									<!--test-->

									
						</form>

<?php } ?> <!-- &&&  Total IF-ELSE Block Ended &&& -->

<!-- ************************************ END URI-SEGMENT = SUBMIT ************************************* -->

<!--#############  URI SEGMENTS ENDED #############-->


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

</div>
<br>
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
	if(name.length > 8 &&  name.length < 15)
	{
		dislabel("Good !","errjt","orange");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 15 && name.length < 20)
	{
		dislabel("Great !","errjt","#87CEFA");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 22)
	{
		dislabel("Awesome !","errjt","#32CD32");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 0 && name.length < 8)
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