  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<title>Employer | Profile</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<head>
  <style type="text/css">
  .signup{background-color: #FF6600;min-width: 30%; max-height: 32px;border:none;}
      .signup:hover{background-color: #0055A5;color: #fff;}
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

                                 if($mydata->imagePath != '')

                                {

                                    $profile_image_url=$mydata->imagePath;

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
                                    <li><a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a></li>
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
                                          <a href="<?php echo base_url('employer/profile'); ?>" >Your Profile</a>
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

<!--col-md-9 Start-->
               <style type="text/css">
               
    .profile_watermark{background-image: url("http://www.cadnaukri.com/assets/sam/watermark/CADnaukri.png");
      background-repeat: no-repeat;                                        
      background-position: top right;
                                      
  }      
  @media screen and (max-width: 768px){
    .profile_watermark{background-image: url("none");}
  }
    .no_opacity{width: 180px;height: 180px;border: 1px solid #ccc;padding: 5px;border-radius: 4px;}                        
                                    </style>
                        <div class="col-md-9 col-xs-12 ">
                        <div id="my_profile" >
                        <div class="xcolleft"> 
                          <div class="profile_print" id="profile_print" style="border: 1px solid rgba(0, 0, 0, 0.2);" >             
                             <h1 class="h1_titel">My Profile</h1>   
                            <div class="row profile_watermark"><!--profile_watermark-->
                              <div class="col-md-12  col-xs-12" style="border:0px solid #ccc;padding: 5px;border-radius: 4px;">
                                <center><img src="<?php echo $mydata->imagePath;?>" class="no_opacity" style="">
                                
                              </center>

                              </div>
                             </div>
                              <!-- <div class="col-md-8 col-xs-12" style="border: 0px solid red;"> -->
                                
                                                        
                      <div class="row " style="padding-top: 1%;">
                              <!-- <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10 desktop" style="font-weight: bold;">
                                   Name</div> <div class="col-md-1 col-xs-1 desktop">:</div> -->
                              
                              <div class="col-md-12 col-xs-12" align="center">
                                 <h4><?php echo $this->session->userdata('name');?></h4>
                              </div>
                            </div>                     

                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;">DOB   :  <span> <?php echo $mydata->dob;?></span></h4>
                        </div>  
                        </div>
                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;"><?php echo $mydata->gender;?></h4>
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
                      
                      <div class="row" style="padding-top: 1%;margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                 Mobile
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                              <?php echo $this->session->userdata('mobile');?>
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Email
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $this->session->userdata('email');?>
                            </div> 
                       </div>        
                       <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Company
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $mydata->companyName;?>
                            </div> 
                       </div>  
                        <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Location
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $mydata->location;?>
                            </div> 
                       </div>   
                       </div>
                     </div>
                  


                       <!-- <h1 class="h1_titel" style="">Educational Details</h1>

                     <div class="row">  
                         <h4 style="text-align: center;color:#0055A5;">Professional qualification</h4> 
                                        
                      <div class="col-xs-12 col-md-12 box_margin">                      
                      
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                 Degree
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                             [DEGREE]
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Branch/Stream
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [BRANCH/STREAM] 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                College/Institute
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [INSTITUTE] 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Institute's location
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [LOCATION]
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                University
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [UNIVERSITY] 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Current semester
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [CURRENT SEMESTER] 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Year of graduation
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [YEAR OF GRADUATE]
                            </div> 
                       </div>

                       
                       </div>
                     </div>
            
  
                     <div class="row">  
                         <h4 style="text-align: center;color:#0055A5;">Basic qualification</h4>

                                       
                      <div class="col-xs-12 col-md-12 box_margin" style="">                     
                      
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 % Secured in 10th
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              [% Secured in 10th] 
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%;margin-bottom: 5px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                % Secured in 12th
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                [% Secured in 12th] 
                            </div> 
                       </div>                
                      </div>
                    </div>
                 </div>-->
                 <div class="row" style="padding-top: 1%;padding-bottom: 1%">
                           <center><a href="<?php echo base_url('employer/my_profile') ?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Download Profile</button></a></center>
                        </div>
                     
                                <p>&nbsp;</p>
                        </div>
                       </div>
                       </div> 
  

<!--End col-md-9-->

                    </div>
                        
                        
                        </div>
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

                     
              
                                       

<!--col-md-9 Ends-->

                 