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
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
  
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
                <div class="container-inner ">
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
								    <img src="<?php echo $profile_image_url?>" alt="" id="exe"/></a>
								   </li>
                                    <!-- <li class="profile-edit">
                                      <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> <span class="glyphicon glyphicon-camera" style="font-size: 16px;"></span>
                                      </a>
                                    </li> -->
                                </ul>
<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a></li>
                                    <li><a href="<?php echo base_url('Employer/Company-Profile') ?>"  class="active">Company Details</a></li>
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
                                          <a href="<?php echo base_url('Employer/Company-Profile') ?>"  class="active">Company Details</a>
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
                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
                    .submit{background-color:#0055A5;color:#fff; }
                    .submit:hover{background-color:#FF7900;color:#fff; }
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;background-color:#0055A5;margin-bottom: 40px;border:none;}
                     .aaa:hover{background-color:#FF7900; }
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:right;margin-top: -35px;margin-left: 20px;}                        
                     }
                     }
                  </style>
<h3 class="fixed_top"><?=$this->uri->segment("3")==""?'Add':'Update';?> Company</h3>
<a class="btn btn-default aaa" href="<?php echo base_url('employer/company_profile')?>" style="">
  <span style="text-transform: none;color:#fff;"> Back</span>
</a>

                       <div class="col-xs-12 col-md-9" style="border:0px solid red;height: 550px;overflow-y: scroll;margin-top: -20px;">
                  		  <div class="xcolleft">
                  			<!-- <div class="row">
	                  			<div class="col-md-12 col-xs-12 ">
	                  			  	<a class="button" href="<?php echo base_url('employer/company_profile')?>" 
	                  			  	style="margin-bottom: 40px;">
	                  			  		<span style="text-transform: none;color:#fff;">Back</span>
	                  			  	</a>
	                  			  </div>

                  			   <div class="col-md-12">
                  			  	<h1 style="font-weight: bolder;"><?=$this->uri->segment("3")==""?'Add':'Update';?> Company</h1>
                  			  </div> 
                 			  
                  			</div> -->
                  			<?php 	
                  				if($this->session->flashdata('success'))
								{
									$succesmsg = $this->session->flashdata('success');
								?>
									<div class="alert alert-success" role="alert" style=" color: #4F8A10;
   										 background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>
								<?php } ?> 

                  			<form method="post" action=""	onsubmit="return checkForm(this);" 
                  			enctype="multipart/form-data">
								<div class="full">
								  <div class="one_half first">
  									<span class="full"> 
										<span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Company Name:<span class="error">*</span></h4>
										</span>
										 <span class="three_fifth" style="margin-bottom: 0;"> 
											 <input type="text" name="name" id="name"
											  value="<?php echo $company->name?>" class="form-control" 
											   placeholder="" style="margin-bottom: 0;" required> 
										 		<label for="name" class="error"></label>
										</span>
									</span> 
									<!-- <span class="full"> 
										<span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Tag Line:</h4>
										</span> 
										<span class="three_fifth" style="margin-bottom: 0;"> 
											<input type="text" name="tagline" id="tagline" class="form-control" 
											value="<?php //echo $company->tagline?>" class="input-textarea" 
											placeholder="">
											<label for="tagline" class="error"></label>
										</span>
									</span>  -->
									<span class="full"> 
										<span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Regd.Corporate Office<span class="error">*</span>:</h4>
										</span>
										 <span class="three_fifth" style="margin-bottom: 0;"> 
											 <input type="text" name="regdoffc" id="regdoffc" class="form-control"
											  value="<?php echo $company->regdoffc?>" class="input-textarea"
												placeholder="" style="margin-bottom: 0;" required>
										</span>
									</span> 
									<span class="full">
										<span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Correspondence Address :</h4>
										</span> 
										<span class="three_fifth" style="margin-bottom: 0;">
											 <input type="text" name="address" id="address" class="form-control"
											 value="<?php echo $company->address?>" class="input-textarea" 
											 placeholder="" style="margin-bottom: 0;" >
										</span>
									</span>
									<span class="full">
									    <span class="two_fifth first" style="margin-bottom: 0;">
												<h4>Company Website:<span class="error">*</span></h4>
										</span> 
										<span class="three_fifth" style="margin-bottom: 0;"> 
											<input type="text" name="website" id="website" class="form-control"
											value="<?php echo $company->website?>" class="input-textarea" 
											placeholder="" style="margin-bottom: 0;" required>
										 </span>
									</span> 
                  <span class="full"> 
                     <span class="two_fifth first" style="margin-bottom: 0;">
                      <h4>Company Email:<span class="error">*</span></h4>
                    </span> 
                    <span class="three_fifth" style="margin-bottom: 0;">
                       <input type="email" name="company_email" id="company_email" class="form-control" onblur="validatecemail(this)"
                      value="<?php echo $company->company_email?>" class="input-textarea" placeholder=""
                      style="margin-bottom: 0;" required>
                    </span>
                  </span> 
                  <span class="full">
                      <span class="two_fifth first" style="margin-bottom: 0;">
                        <h4>Location<span class="error">*</span></h4>
                    </span> 
                    <span class="three_fifth" style="margin-bottom: 0;"> 
                      <select  class="form-control" name="location" required>
                      <?php
                      
                      foreach($city_list as $ctl)
                      {
                        
                        $is_selected=$ctl->city_id == $company->location ? 'selected' : '';
                        echo '<option value="'.$ctl->city_id.'" '.$is_selected.'>'.$ctl->city_name.'</option>';
                      }
                      
                      ?>
                      </select>
                     </span>
                  </span> 
                  
									<!-- <span class="full"> 
										<span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Size Of Company:</h4>
										</span>
										 <span class="three_fifth" style="margin-bottom: 0;"> 
										  	<select class="form-control" name="teamsize" id="teamsize">
										  		<option value="" >Select</option>
										  		<option value="0-5" <?php echo  $company->teamsize=='0-5'?'selected':''
										  		?>>0-5</option>
										  		<option value="5-10" <?php echo  $company->teamsize=='5-10'?'selected':
										  		''?>>5-10</option>
										  		<option value="10-50" <?php echo  $company->teamsize=='10-50'?'selected
										  		':''?>>10-50</option>
										  		<option value="50-100" <?php echo  $company->teamsize=='50-100'?'select
										  		ed':''?>>50-100</option>
										  		<option value="100-500" <?php echo  $company->teamsize=='100-500'?'sele
										  		cted':''?>>100-500</option>
										  		<option value="<500" <?php echo  $company->teamsize=='<500'?'selected':
										  		''?>>Above 500</option>
											</select>
										</span>
									</span> -->
									 <!-- <span class="full"> 
									 	<span class="two_fifth first" style="margin-bottom: 0;">
									 		<h4>Land Line Number:</h4>
										</span> 
										<span class="three_fifth" style="margin-bottom: 0;">
										   <input type="text" name="phno" id="phno" class="form-control"
											value="<?php echo $company->phno?>" class="input-textarea" placeholder=""
											style="margin-bottom: 0;" onkeypress="return isNumber(event)">
										</span>
									</span> -->
									 <!-- <span class="full"> 
										 <span class="two_fifth first" style="margin-bottom: 0;">
											<h4>Mobile Number:<span class="error">*</span></h4>
										</span> --> 
										<!-- <span class="three_fifth" style="margin-bottom: 0;">
										 <input type="text" name="mobile" id="mobile" class="form-control"
										    value="<?php echo $company->mobile?>" class="input-textarea" placeholder=""
										    style="margin-bottom: 0;" required maxlength="10" onkeypress="return isNumber(event)">
										</span>
									</span>  -->
									<!-- <span class="full"> 
										<span class="two_fifth first" style="margin-bottom: 0;">
										<h4>Email:</h4>
										</span> 
										<span class="three_fifth" style="margin-bottom: 0;"> 
											<input type="email" name="email" id="email" class="form-control"
											value="<?php echo $company->email?>" class="input-textarea" placeholder=""
											style="margin-bottom: 0;">
										</span>
									</span>  -->
									<!-- <span class="full">
										<h4><i class="fa fa-camera" style="color: #0055A5;"></i>  Logo:</h4> 
										<input type="file" name="fileToUpload" id="fileToUpload">
									</span> -->
									<span class="full"> 
										<label for="editor1">
											<h4>Company Bio:<span class="error">*</span></h4>
										</label> 
										<textarea cols="80" rows="3" name="description"
										 id="description" class="description form-control" 
										 placeholder="Descrition" style="margin-bottom: 0;" 
										 required><?php echo $company->description?></textarea>
										</span> 
										<!-- <span class="full">
											<h4><i class="fa fa-camera" style="color: #0055A5;"></i>  Cover Image:</h4> 
											<input class="criteria-image-button " name="coverimage"
											type="file" value="Upload Logo" />
										 </span> -->
										  <span class="full"> 
										  	<span class="two_fifth first" style="margin-bottom: 0;">
  											   <h5>Facebook:</h5>
										     </span> 
										     <span class="three_fifth" style="margin-bottom: 0;"> 
											     <input type="text" name="facebook" id="facebook"
											    class="form-control input-textarea" 
											    value="<?php $company->facebook?>"  placeholder=""
											     style="margin-bottom: 0;">
										   </span>
										   </span>
										   <span class="full"> 
										  	    <span class="two_fifth first" style="margin-bottom: 0;">
										   			<h5>LinkedIn:</h5>
										   	    </span> 
										   	    <span class="three_fifth" style="margin-bottom: 0;">
										   	      <input type="text" name="linkedin" id="linkedin"
										   	      class="form-control input-textarea"
										   	       value="<?php echo  $company->linkedin?>" placeholder="" 
										   	       style="margin-bottom: 0;">
										   	    </span>
										   	</span> 
										   	<span class="full"> 
										   		<span class="two_fifth first" style="margin-bottom: 0;">
													<h5>Twitter:</h5>
												</span> 
												<span class="three_fifth" style="margin-bottom: 0;"> 
												<input type="text" name="twitter" id="twitter" class="form-control
												" value="<?php echo $company->twitter?>" class="input-textarea" 
												placeholder="" style="margin-bottom: 0;">
									           </span>
 										    </span> 
 										    <span class="full"> 
 										    	<span class="two_fifth first" style="margin-bottom: 0;">
 										    		<h5>Google+:</h5>
												</span> 
												<span class="three_fifth" style="margin-bottom: 0;"> 
												<input type="text" name="google" id="google" class="form-control"
												value="<?php echo $company->google?>" class="input-textarea" 
												placeholder="" style="margin-bottom: 0;">
										</span>
										</span>
									</div>
									<div class="row" style="margin-top:1%;border:0px solid red;">									
										<label class="checkbox-inline" style="">
											<div class="col-md-1 col-xs-2 col-sm-2">
												<input type="checkbox" name="isActive" value="1" style="margin-top: 3px;" required>
											</div>
											<div class="col-md-11 col-xs-10 col-sm-10">
												<span style="">I understand and fully agree to the 
												<a href="<?php echo base_url('index/terms_and_condition')?>"
													onclick="javascript:void window.open('<?php echo base_url('best_design_jobs/terms_and_condition')?>','1427880781003','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Terms & Conditions</a> of the site to Post Job.</span>
											</div>
										</label>
									</div>
									<!-- <div class="clear"></div> -->
									<!-- <div class="row" style="margin-top:1%;border:0px solid red;">

										<label class="checkbox-inline" style="">
											<div class="col-md-1 col-xs-2 col-sm-2">
												<input type="checkbox" value="1" name="isMobile" style="margin-top: 3px;" checked>
											</div>
											<div class="col-md-11 col-xs-10 col-sm-10">
											    Allow mynumber to be made public.
											</div>
										</label>
									</div> -->


									<!-- <div class="clear"></div> -->
									<div class="row" style="margin-top:1%;border:0px solid red;">
										<label class="checkbox-inline" style="">
											<div class="col-md-1 col-xs-2 col-sm-2">
									
												<input type="checkbox" value="1" name="isEmail" style="margin-top: 3px;" checked>
											</div>
											<div class="col-md-11 col-xs-10 col-sm-10">
												Allow my email ID to be made public
												<span style="color: red; font-size: 12px">(Candidates shall apply

												  directly if email ID is mentioned)</span>
											</div>
										</label>
									</div>
									

<br><br>
									<div class="col-md-12">
										<!-- <div class="col-md-offset-10"> -->
											<center><span class="draft-resume-button">
												<button type="submit" name="submit" class="btn btn-default submit">Submit
											</span></button>
										<!-- </div> -->
									</div>
								</div>
							</form>

						</div>
                  	</div>

                    </div>

               </div>
              </div>
           </section>
     </section>
 </div>
 <br><br>
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
  <script type="text/javascript">
	function isNumber(evt) {
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					return false;
				}
				return true;
			}
			
  function checkForm(form)
  {
    if(!form.isActive.checked) 
    {
      alert("Please indicate that you accept the Terms and Conditions");
      form.isActive.focus();
      return false;
    }
    return true;
  }
function validatecemail(email)
{
  //alert(email.value); //Ok
  var inputemail=email.value;
  var splitemail=inputemail.split('@');
  var afterat=splitemail[1];
  //alert(afterat);exit;
  var prevpoint=afterat.split('.');
  var email=prevpoint[0];
  //alert(email);exit;
  var emails=['gmail','yahoo','zoho','mail','hotmail','rediffmail','gmx','fastmail','hushmail','inbox','shortmail','aol'];
  var length=emails.length;
  //alert(length);exit;
  for (var i = 0; i < length; i++) 
  {
    if(emails[i] == email)
    {
      alert('You\'re requested to provide your company email');
      $('#company_email').val('');
    }
  }

}
</script>
       