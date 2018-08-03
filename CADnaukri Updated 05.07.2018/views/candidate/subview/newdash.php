 <meta name="google-signin-client_id" content="1080439175172-bk4for67c82tdtg2m11du0t7ofv58nid.apps.googleusercontent.com">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
<title>Hi <?php echo $candidate_details->name;?> | Welcome To Your Personal Cabinet</title> 
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<style type="text/css">
                /*div,h1,h2,h3,h4,h5,h6{font-family: calibry; }*/
                /*.button-search{height: 25px;padding: 3px;background-color:#0055A5;color: #fff;}*/
                /*.button-search:hover{background-color: #FF7900;}*/
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibri;color:#000;}
                
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
  background: url("<?php echo base_url()?>/assets/sam/loader/loader_gif.gif") center no-repeat #fff;
}

.sidebar li a {
  padding-left: 1vw;
  padding-top: 1vw;
  padding-bottom: 1vw; 

}
.navbar-nav li a:hover {
background-color: #fff;

  }
  .logout{
    float: right;
  }

  .img-circle{
    height: 5vw;
    width: 5vw;
  }
 @media screen and (max-width:760px){
  .img-circle{
    height: 30vw;
    width: 30vw;
  }
 }


  </style>
  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(800);;
  });
  </script>
<div style="display: none;" class="g-signin2" data-onsuccess="onSignIn"></div>
<script type="text/javascript">
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  //$('#email').text(profile.getId());

  var userId=profile.getId();
  var name=profile.getName();
  var email=profile.getEmail();
  var mobile= '0000000000';
  var request='TRUE';

  $.ajax({
        url: '<?php echo base_url();?>candidate/googleLogin',
        type: 'post',
        data: {user_id: userId ,name:name,mobile:mobile,email:email,'ajax':request},
        success: function(rdata){
          console.log(rdata);
          if($.parseJSON(rdata) == 'EmailAlreadyRegistered')
          {
             $('#emailalreadyregistered').css('display','block');
          } 
          else if($.parseJSON(rdata) == 'LoggedIn')
          {
              window.location="<?php echo base_url();?>candidate/dashboard";
          }
          else
          {
              var auth2 = gapi.auth2.getAuthInstance();
              auth2.signOut().then(function () {
                //console.log('User signed out.');
              });
          }
          
        }
    });



}
</script>


</head>

<body onload="myFunction()">
    <div class="se-pre-con"></div>

<div class="main-container" align="center">
  <div class="container" style="margin: 2px; background-color: #fff; border:1px solid #ccc; border-radius: 4px;padding: 1px;">
                <div class="container-fluid">
                  <div class="navbar-header" align="center">

                     <?php
                                    $candidate_id=$this->session->userdata('candidate_id');
                                    //echo $candidate_id;
                                    $imagepath=$this->Candidate_M->get_image_path($candidate_id);
                                    if($imagepath != '')
                                    {
                                      $profile_image_url=$imagepath;
                                      $add_or_edit='Edit';
                                    }
                                    else
                                    {
                                      //$profile_image_url=base_url('assets/images/profile-photo.png');
                                      $gender=$this->Candidate_M->check_gender_for_pic($candidate_id);
                                      //echo $gender;
                                      if($gender == 'Male')
                                      {
                                        $profile_image_url=base_url('assets/images/Dashboard_Profile-Pic_Male.png');
                                      }
                                      else
                                      {
                                        $profile_image_url=base_url('assets/images/CADnaukri_Dashboard_Profile-Pic_Female.png');
                                      }
                                      $add_or_edit='';
                                    }
                                    ?>
                                   
                                      <a data-toggle="modal" href="#myModalImage" align="center">
                                        <img  class="img-circle"src="<?php echo $profile_image_url?>" alt="" style="padding:2px;" />
                                      </a>
                                    

                  
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a style="color:#0055A5; text-transform: uppercase;font-weight: bold;" >Welcome <p style="color: red;display: inline;"><?php echo $candidate_details->name;?></p></a></li>   
                   <li><a style="color: black;font-weight: bold;">Logged in from IP :<span style="color:#0055A5;"><?php echo $last_login_ip; ?></span> </a>  </li>
                    <li><a style="color: black;font-weight: bold;">Last Logged Info   : <span style="color:#0055A5;"><?php echo $last_login_date; ?></span> </a> </li>
                    <!-- <li><a style="color: black;font-weight: bold;"> Last Applied Job   :  <span style="color:#0055A5;"><?php echo $last_applied_job; ?></span></a> </li> -->
                  </ul>
                  <ul class=" nav navbar-nav pull-right"> <li><a  style="color: #fff;font-weight: bold;text-transform: uppercase;" href="<?php echo base_url('candidate/logout') ?>" onclick="Out();"><button class="btn btn-primary" style="padding-top: 1px;padding-bottom: 1px;">Log Out</button></a></li></ul>
                </div>
              </div>
        <section class="wht-bg">        
        <section class="section">
              <div class="container" style="border-radius: 4px;border:1px solid #cccccc;">
                
                <div class="container-inner">
                    <div class="row">
                      <div class="col-xs-12 col-md-3">
                        <div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">
                              

                            
                                <ul class="sidebar desktop_view" align="left" >
                                    <li><a  href="<?php echo base_url();?>candidate/dashboard" class="active">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a></li>
                                    
                                    

                                <li><a href="<?php echo base_url()?>candidate/my_profile">My Profile</a></li>

                            <li><a href="<?php echo base_url()?>candidate/update_cv">Update CV</a></li>
                              <?php 
                                if($this->session->userdata('candidate_id'))
                                  {
                                    $candidate_id=$this->session->userdata('candidate_id');
                                  }
                                  $total_jobs=$this->Candidate_M->get_total_applied_jobs($candidate_id);
                                  if($total_jobs != false){
                              ?>
                                  <li><a href="<?php echo base_url()?>candidate/view_applied_jobs">Applied Jobs(<?php echo $total_jobs; ?>)</a></li>
                                  <?php } else { ?>
                                  <li style="color:black;"><a>Applied Jobs</a></li><?php } ?>
                                    <!-- <li><a href="<?php echo base_url()?>candidate/working_on_it">Upgrade Service</a></li> -->
                                    <li><a href="<?php echo base_url()?>candidate/view_interviews">Track Interviews<?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                  
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?></a></li>
                                    <li><a href="<?php echo base_url()?>candidate/view_saved_jobs">Saved Jobs</a></li>
                                    <li><a href="<?php echo base_url()?>candidate/view_profile_views">Profile Views 
                                    <?php if($this->Candidate_M->new_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                   <!--  <span class="w3-circle w3-center" style="width:3%;background-color:green;height:-1%;color:white;">
                                    &nbsp ! &nbsp</span>  -->
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?>
                                    </a></li>
                                    <!-- <li><a href="<?php echo base_url()?>candidate/working_on_it">Build Your CV</a></li> -->
                                    <li><a href="<?php echo base_url()?>candidate/social_links">Add Social Link</a></li>
                                    <li><a href="<?php echo base_url()?>Queries">Report Issue</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/account_setting') ?>">Update Password</a></li>
                                    
                                    <li><a href="<?php echo base_url('candidate/logout') ?>" onclick="Out();">Log Out</a></li>
                                </ul>
                                <script type="text/javascript">
                                  function Out() 
                                  {
                                    //alert('Hey');
                                      var auth2 = gapi.auth2.getAuthInstance();
                                      auth2.signOut().then(function () {
                                        console.log('User signed out.');
                                      });
                                  }
                                </script>
                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url();?>candidate/dashboard" class="active">Dashboard</a>
                                          <a href="<?php echo base_url('candidate/profile/personal_details') ?>" >Personal Details</a>
                                          <a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a>                                      
                                          <a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a>
                                          <a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a>                                      
                                          <a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a>
                                        <a href="<?php echo base_url()?>candidate/my_profile">My Profile</a>
                                          <a href="<?php echo base_url()?>candidate/update_cv">Update CV</a>
                                           <?php 
                                if($this->session->userdata('candidate_id'))
                                  {
                                    $candidate_id=$this->session->userdata('candidate_id');
                                  }
                                  $total_jobs=$this->Candidate_M->get_total_applied_jobs($candidate_id);
                                  if($total_jobs != false){
                              ?><a href="<?php echo base_url()?>candidate/view_applied_jobs">Applied Jobs(<?php echo $total_jobs; ?>)</a>  <?php } else { ?><a>Applied Jobs</a><?php } ?>

                              <a href="<?php echo base_url()?>candidate/view_interviews">Track Interviews<?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                  
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?></a>
                                    <a href="<?php echo base_url()?>candidate/view_saved_jobs">Saved Jobs</a>

                                    <a href="<?php echo base_url()?>candidate/view_profile_views">Profile Views 
                                    <?php if($this->Candidate_M->new_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                   <!--  <span class="w3-circle w3-center" style="width:3%;background-color:green;height:-1%;color:white;">
                                    &nbsp ! &nbsp</span>  -->
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?>
                                    </a>
                                    <a href="<?php echo base_url()?>candidate/social_links">Add Social Link</a>
                                    <a href="<?php echo base_url()?>Queries">Report Issue</a>
                                      <a href="<?php echo base_url('candidate/profile/account_setting') ?>">Update Password</a>
                                    <a onclick="Out()" href="<?php echo base_url('candidate/logout') ?>">Log Out</a>

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

                                              #foo {
    position: fixed;
    bottom: 10;
    right: 90;
  }
  /* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 250px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: relative;
    z-index: 1;
    bottom: 125%;
    left: 20%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
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
                  <div class="col-md-9 col-lg-9 col-xs-12" style="border:0px solid red;background-color: #fff;">
                          <div class="xcolleft" style="">
                            <!-- <h1>Educational Details</h1>   -->
                            <?php if($this->session->flashdata('success'))

                                {

                                    $succesmsg = $this->session->flashdata('success');

                                ?>

                                    <div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

                                

                             <!-- ####################### -->

                                <?php } ?>


                              <div class="container-fluid" style="border:0px solid #ddd;border-radius: 5px;margin-bottom: 20px;">
                                  <div class="xcolright" style="border:1px solid grey; background-color: #fff;">
                                       <!--  <center><h3 style="color:#0055A5; font-weight: bolder;">Welcome to your personal cabinet!</h3></center>  -->                     
                                        <br/>
                                      <div class="row">                              
                                          <div class="col-xs-12 col-md-12">


                            
                                
<!--  ####################################### PROGRESS BAR ######################################-->

          <?php if($progress == 1 || $progress == 0){ ?>
                             <div class="progress"  align="center" style="width:50%; margin-left: 25%; margin-right: 25%;color:red;"><b style="color: #165783;">Profile Completeness</b>
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color:red;width:20%">20%
                                <span class="sr-only">100% Complete</span>
                                </div>
                             </div>

          <?php } else if($progress == 2){ ?>
                             <div class="progress"  align="center" style="width:50%; margin-left: 25%; margin-right: 25%;">
                              <b style="color: #165783;">Profile Completeness</b>
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color:orange;color:black;width:40%">40%
                                <span class="sr-only">100% Complete</span>
                                </div>
                             </div>

          <?php } else if($progress == 3){ ?>
                             <div class="progress"  align="center" style="width:50%; margin-left: 25%; margin-right: 25%;">
                              <b style="color: #165783;">Profile Completeness</b>
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color:#ffdb4d;color:black;width:60%">60%
                                <span class="sr-only">100% Complete</span>
                                </div>
                             </div>

          <?php } else if($progress == 4){ ?>
                             <div class="progress"  align="center" style="width:50%; margin-left: 25%; margin-right: 25%;">
                              <b style="color: #165783;">Profile Completeness</b>
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color:#ace600;color:black;width:80%">80%
                                <span class="sr-only">100% Complete</span>
                                </div>
                             </div>

          <?php } else if($progress == 5){ ?>
                             <div class="progress"  align="center" style="width:50%; margin-left: 25%; margin-right: 25%;">
                              <b style="color: #165783;">Profile Completeness</b>
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color:green;color:white;width:90%">90%
                                <span class="sr-only">100% Complete</span>
                                </div>
                             </div>

          <?php } ?> 
<!--  #####################################  END PROGRESS BAR  ######################################-->
          </div> 
      </div>
 <!--Notice Board-->
<style type="text/css">
    .body {
  background-color: #333333;
}

.carousel-content {
    color:black;
    display:flex;
    align-items:center;
}

#text-carousel {
  width: 100%;
  padding: 20px;
  border:0px solid red;
}
.carousel-control{background-color: #fff;opacity: 0;}
    .carousel-control:focus{background-color: #fff;opacity: 0;}
    .carousel-control:hover{background-color: #fff;opacity: 0;}

</style>

<div class="container" style="border:1px solid #0055A5;max-width: 450px;border-radius: 4px;">
  <h4 align="center" style="background-color:#0055A5;padding:5px;color:#fff;box-shadow: 5px 5px 5px #cccccc;border-radius:4px;"><b>Announcement</b></h4> 
                  <div id="text-carousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class=" col-xs-12" style="text-align: center;">
            <div class="carousel-inner">
            <?php $details=$this->Candidate_M->get_notifications(); ?>
                <div class="item active" align="center" style="">
                    <!-- <div class="carousel-content" style="background-color:#fff;text-align: center;"> -->
                        <div style="background-color: transparent;text-align: center;">
                           <p style="background-color: #fff;text-align: center;font-size: 18px;font-weight: bold;border:0px solid red;color:#000;"><?php 
                                   
                                if($details)
                                {         
                                  foreach ($details as $key) 
                                    { 

                                      if($key->notice_type=='Link')
                                        {
                                          echo ''.$key->notification.' <a href="'.$key->link.'">Click Here</a>'; 
                                        }
                                        else
                                        {
                                          echo $key->notification;
                                        }
                                    }
                                }
                                else
                                {
                                  echo "No Notifications Yet";
                                }

                                  ?> 
                              
                              </p>
                        </div>
                    <!-- </div> -->
                </div>
                <div class="item">
        <p class="" style="background-color: #fff;text-align: center;font-size: 18px;font-weight: bold;border:0px solid red;color:#000;">No Notifications Yet</p>
      </div>
                
                
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#text-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#text-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
</div>


              <!--Notice Board-->


<div class="row" style="">
      <h4 style="color:#0055A5;">Your Last Activity</h4> 
     <!--  <h5 style="font-weight: bold;color:#000;">Logged in from IP :<span style="color:#0055A5;"><?php echo $last_login_ip; ?></span>   </h5> -->
      <!-- <h5 style="color:#000;">Last Logged Info   : <span style="color:#0055A5;"><?php echo $last_login_date; ?></span>   </h5> -->
      <h5 style="color:#000;"> Last Applied Job   :  <span style="color:#0055A5;"><?php echo $last_applied_job; ?></span> </h5>
</div>

                                      <!-- <h4>                                    <span style="color:#0055A5;">Company, Location</span> </h4> -->
<!--Test -->
        <style type="text/css">
          .col2-6{
            background-color:#0055A5;
            border:2px solid #fff;
            color: #fff;
            padding: 1px 1px;
            text-align: center;
          }
        </style>
                        </div>
                              <?php $this->load->model('Candidate_M');
                                if($this->session->userdata('candidate_id'))
                                  {
                                   $id=$this->session->userdata('candidate_id');

                                    $result=$this->Candidate_M->check_cv($id);
                                    if($result == false){ 
                              ?>
                              <form action="<?php echo base_url();?>candidate/cvupload" method="post" class="form-inline" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="col-md-12 col-sm-12 col-xs-12 alert alert-info" align="center">
                                  <label style="">Upload CV |
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

                    <div class="row alert alert-success" style="text-align: center;"><b>Your CV Is Successfully Updated</b></div>
                    <?php } } ?>



<!--End Test-->
       
       
<style type="text/css">
  .rowjob{
    /*margin-right: 15px;*/
    background-color:#E8EAEA;border-radius: 4px;
    box-shadow: 5px 5px 2px 0px #CCCCCC;
  }

    .rowjobcol {margin-top: 10px;}
       
@media screen and (max-width:768px){
  .rowjobcol{margin-top:1px;}
}


</style>
             
   
                            

                
                <!-- <div class="row"> -->
                  
            <!--   </div>  -->            
                        
 <style type="text/css">
  .searchj{
     margin-top: -35px;
  }

@media screen and(max-width: 768px) {
    .searchj {
       
        
        
    }
  }
 </style>
</div>


<br>
      <hr>  
    </div><br>



                           <!-- ####################### -->
                            
     
    </div>
<!--Right Side-->
   
<!--Right side-->
<style type="text/css">
  .eye_color{color:#0055A5;padding: 0px 10px;}
  ul:hover .eye_color{color:#FF7900;}
</style>



</div>




  <!--Featured jobs-->
    <div class="hotlist" style="max-width: 970px; margin: auto;margin-top: -20px;">

      <!-- <div class="clearfix"></div> --><br>
    <h3 class="col-md-6 pull-left"style="border-radius: 4px;font-weight: bolder;text-align: center;border:1px solid #cccccc;height: 40px;line-height: 40px; vertical-align: middle;background-color: #0055A5; color:#fff;margin-bottom: -5px;box-shadow: 5px 5px 5px #cccccc;">Hotlisted Jobs</h3>
                        <?php foreach($featured_jobs as $key) {
                          $jobtitle=$key->jobtitle;
                          $job_title=str_replace(' ', '-', $key->jobtitle);
                          $location=str_replace(' ', '-', $key->location);
                          $designation=str_replace(' ', '-', $key->designation);
                          $id=md5($key->job_id).'g3q7'.$key->job_id.'g3q7'.md5($key->job_id + 1);
                          $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$id;

                        ?>
          <style type="text/css">
            @media screen and(max-width: 786px;){
              .colviewmore{
                margin-left: 500px;
              }
            }
            a:hover{text-decoration: none;}
          </style>
            
                    <div class="row rowjob col-sm-12 pull-right" style="border-bottom: 1px solid #999;background-color: #fff; color:#165783; margin-right: 2px;">
                        <div class="col-xs-12 col-md-3 rowjobcol" align="left" style="color:#165783;"><?php echo $key->jobtitle; ?></div>
                        <div class="col-xs-12 col-md-2 rowjobcol" align="left"><?php echo $key->skill_name; ?></div>
                        <div class="col-xs-12 col-md-2 rowjobcol" align="left">Exp. <?php echo $key->yop; ?> yrs</div>
                        <div class="col-xs-12 col-md-2 rowjobcol" align="left"><?php echo $key->location; ?></div>
                        <div class="col-xs-12 col-md-2 rowjobcol" align="right" style="margin-top: 5px;margin-bottom: 5px;">
                          <a href="<?php echo base_url($url);?>"><button class="btn btn-primary">View</button></a>
                        </div>
                    </div>
                    
                    
        <?php } ?>
               
                    <!-- <div class="row rowjob">
                        <div class="col-xs-7 col-md-7" align="left">
                            <h5 style ="color:blue;"><b> Search your job: </b> </h5></div>
                        <div class="col-xs-5 col-md-5 " align="right"> 
                          <a href="<?php //echo base_url();?>best_design_jobs/featured_job" class="btn" style <!="color:blue;">View more</a> 
                        </div>
                    </div> -->
        </div>
   
<!--Featured jobs-->
            <form action="" method="post">
                   
                    <div class="col-xs-9 col-md-12 " align="center" style="margin-top: 10px;">
                      <?php   if($this->session->userdata('candidate_id'))
                          { $candidate_id=$this->session->userdata('candidate_id');} ?>
                        <input type="hidden" name="candidate_id" value="<?php echo $candidate_id; ?>" />
                        <input type="submit" class="btn btn-primary log1" name="View_previous_search" value="View History" /><br>
                    </div>
                    
            </form>      
<!--Search Form-->

</div>
<!--Search Bar-->
      <style type="text/css">
        .searchrow{ background-color: #fff;margin: 5px 2px;padding: 10px;}
        .locationcol{text-transform: uppercase; margin-top: 6px;}
        @media screen and (max-width: 768px){
        .locationcol{text-transform: uppercase; margin-top: 20px;margin-bottom: 20px;}

        }
      </style><br>
    <h3 class="col-md-6 pull-left"style="border-radius: 4px;font-weight: bolder;text-align: center;border:1px solid #cccccc;height: 40px;line-height: 40px; vertical-align: middle;background-color: #0055A5; color:#fff;margin-bottom: -5px;box-shadow: 5px 5px 5px #cccccc;">Search Your Query</h3>
            <div class="row searchrow col-md-12 pull-right" style="color:#fff;">   
              
                <form action="" method="post">                   
                    <div class="col-xs-12 col-md-4 col-sm-3 col-lg-4 " align="left" style="font-size: 14px;margin-top: 6px;" >
                        <div class="" style="font-size: 14px;margin-top: 0px;">
                          <strong>SKILL : </strong>
                          <input type="text" name="skill" required/>
                        </div>
                    </div>
                            
                   
                    <div class="col-xs-12 col-md-4 col-sm-3 col-lg-4" align="left">
                        <div class="dropdown" style="text-transform: uppercase;margin-top: 6px;"><strong>Experience : </strong>
                          <select style="" name="experience">
                        <option value="0" style="">--</option>
                        <option value="0-1" style="">0-1</option>
                        <option value="1-2">1-2</option>
                        <option value="2-3">2-3</option>
                        <option value="3-5">3-5</option>
                        <option value="5-7">5-7</option>
                        <option value="7">7+</option>
                      </select></div>
                    </div>
                                        
                    <div class="col-xs-12 col-md-4 col-sm-3 col-lg-4" align="left" style="">
                        <div class="dropdown locationcol" style=""><strong>Location : </strong>
                            <select style=" " name="location">
                              <option value="0" style="">--</option>
                              <option value="Pune" style="">Pune</option>
                              <option value="Tamil Nadu.">Tamil Nadu.</option>
                              <option value="Kolkata">Kolkata</option>
                              <option value="Gujarat." style="">Gujarat.</option>
                              <option value="Chennai">Chennai</option>
                              <option value="Hyderabad">Hyderabad</option>
                              <option value="Gurgaon" style="">Gurgaon</option>
                              <option value="Surat">Surat</option>
                              <option value="Bangalore">Bangalore</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Ahmedabad">Ahmedabad</option>
                              <option value="Surat">Surat</option>
                              <option value="Nashik">Nashik</option>
                              <option value="Bhubaneswar">Bhubaneswar</option>
                              <option value="Roorkee">Roorkee</option>
                              <option value="Vadodara">Vadodara</option>
                              <option value="Nagpur">Nagpur</option>
                              <option value="Vadodara">Vadodara</option>
                              <option value="Faridabad">Faridabad</option>
                              
                            </select>
                        </div>
                    </div>                                        
                    <div class="col-xs-12 col-md-12 " align="center">     
                      <?php   if($this->session->userdata('candidate_id'))
                          { $candidate_id=$this->session->userdata('candidate_id');} ?>
                        <input type="hidden" name="candidate_id" value="<?php echo $candidate_id; ?>" />
                        <input type="submit" onclick="spin1()" class="reg" name="Dashboard_search" value="Search" />

                    </div>
                  
                    <br>
                </form>
             
            </div>
              <br>
    
<!--End searchbar-->
<br>
<!--Search Form-->
  <style type="text/css">
                  .col6text{margin-left: -30px; margin-right: -10px;background-color:;}

                  @media screen and (max-width: 768px) {.col6text {margin-left: 0px; margin-right:0px;background-color:;}}
                  .col6text1{/*margin-right: -30px;*/background-color:;}
                  @media screen and (max-width: 768px) {
                  .col6text1 {margin-right: none;background-color: ;}}
                  .colexp{ margin-left: 15px;}
                  @media screen and (max-width: 768px) {.colexp { margin-left: 0px;margin-bottom: 15px;}}
                  .collocation{margin-left: 0px;}
                  @media screen and (max-width: 768px) {.collocation {margin-left: 0px;margin-bottom: 10px;}}
  </style>          
  

  <br>
        <?php   if($this->session->userdata('candidate_id'))
            {
              $candidate_id=$this->session->userdata('candidate_id');
            }
        //if($search_results != false)
          //{
            if($search_results != 0 && $search_results != '')
            { ?>
<div style="max-width:1000px;height:250px;overflow:auto; border:none; background-color:#E8EAEA;">
              <?php foreach ($search_results as $key) 
              { 

                $jobtitle=$key->jobtitle;
                      $job_title=str_replace(' ', '-', $key->jobtitle);
                      $location=str_replace(' ', '-', $key->location);
                      $designation=str_replace(' ', '-', $key->designation);
                      //$url=$job_title.'-'.$location;
                      $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$key->job_id;

                ?>

<!--Search job-->
<style type="text/css">
  .rowjobsearch{
    margin:5px 5px;
    border-radius: 4px;
   /* padding-top: 5px;*/
  }
  
</style> 
                <div class="row rowjobsearch" style="margin:5px 5px; border-bottom: 1px solid #999;">
                    <div class="col-xs-12 col-md-3" align="left"><?php echo $key->jobtitle; ?></div>
                    <div class="col-xs-12 col-md-2" align="left"><?php echo $key->skill_name; ?></div>
                    <div class="col-xs-12 col-md-3" align="left">Exp. <?php echo $key->yop; ?>yrs</div>
                    <div class="col-xs-12 col-md-2" align="left"><?php echo $key->location; ?></div>
                    <div class="col-xs-12 col-md-2" align="right" style="margin-top: 5px;margin-bottom: 5px;"><a href="<?php echo base_url($url);?>">
                      <button class="btn btn-primary">View</button></a>
                    </div>
                </div>
              
<?php         } ?>
 </div> 
           <?php }
            else if($search_results == 0)
            { ?>
                <!-- <div class="row" >
                <br />
                  <div class="col-xs-12 col-md-12" align="center" style="color:red;"><b>Results Not Found</b></div>
                </div> -->
<?php       //}
         // } 
          if($previous_skill_search != '')
          {
         /*else*/ if($previous_skill_search != false)
            {
            //if($previous_skill_search != 0)
            //{
              foreach ($previous_skill_search as $key) 
              { 
                $jobtitle=$key->jobtitle;
                $job_title=str_replace(' ', '-', $key->jobtitle);
                $location=str_replace(' ', '-', $key->location);
                $designation=str_replace(' ', '-', $key->designation);
                //$url=$job_title.'-'.$location;
                $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$key->job_id;


                ?>
                
                <div class="row" style="background-color:#E8EAEA;border-bottom: 1px solid #999;margin: 2px 0px;box-shadow: 5px 5px 5px 0px #cccccc;border-radius: 4px;">
                  <div class="col-xs-12 col-md-3 rowjobcol" align="left"><?php echo $key->jobtitle; ?></div>
                  <div class="col-xs-12 col-md-2 rowjobcol" align="left"><?php echo $key->skill_name; ?></div>
                  <div class="col-xs-12 col-md-3 rowjobcol" align="left">Exp. <?php echo $key->yop; ?> Yrs</div>
                  <div class="col-xs-12 col-md-2 rowjobcol" align="left"><?php echo $key->location; ?></div>
                  <!-- <div class="col-xs-2 col-md-2" align="left"><?php //echo $key->company_name; ?></div> -->
                  <div class="col-xs-12 col-md-2" align="right" style="margin-top: 5px; margin-bottom: 5px; ">
                    <a href="<?php echo base_url($url);?>">
                      <button class="btn btn-primary">View</button>        
                    </a>
                  </div>
                </div>
                <!-- <br /> -->

<?php         }
            //}
            }
            else if($previous_skill_search == false)
            { ?>
               <div class="row" >
                <br />
                  <div class="col-xs-12 col-md-12" align="center" style="color:red;"><b>Results Not Found</b></div>
                </div>
<?php       }
          }
          else if($previous_skill_search == '')
          { ?>
              <div class="row" >
              <br />
                <div class="col-xs-12 col-md-12" align="center" style="color:red;"><b>Results Not Found</b></div>
              </div>
<?php     }
}
          else
          { ?>
            <div class="row" >
            <br />
              <div class="col-xs-12 col-md-12" align="center" style="color:blue;"><b>NO RECENT SEARCH</b></div>
            </div>
  <?php     } 
            
          //}  ?>
  <br> 

<style type="text/css">
  .reg{background:#FF7900;padding:;display: block;font-size:15px;height: 40px;width: 150px;}
                             .reg:hover{background:#0055A5;}

                             .log1{background:#0055A5;padding:;display: block;font-size:15px;height: 40px;max-width: 150px;}
                             .log1:hover{background:#0055A5;}
 @media screen and (max-width: 768px){
                              .reg{font-size: 12px;width:150px;}
                              .reg:hover{background:#0055A5;font-size: 14px;}
                              .log1{font-size: 12px;width:150px;}
                              .log1:hover{background:#FF7900;font-size: 14px;}
                             }
</style>

</div></div></div></section></section></div>

<br>


<div class="modal fade" id="myModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

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

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ NEAR BY JOBS MODAL $$$$$$$$$$$$$$$$$$$$$$$ -->



<div class="container">
  <!-- Trigger the modal with a button -->
  <button style="display:none;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#nearbyjobsnmodal">Near By Jobs</button>

  <!-- Modal -->
  <div class="modal fade" id="nearbyjobsnmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Near By Jobs</h4>
        </div>
        <div class="modal-body">




                  <style class="cp-pen-styles">
                  
                  
                  #wrapper a {
                    color: #000;
                    text-decoration: none;
                  }
                  #wrapper .dd-header {
                    margin: 1px 1px 1px 0;
                    padding: 0;
                    width: 400px;
                    height: auto;
                    background-color: #fff;
                    list-style-type: none;
                    overflow: hidden;
                    -webkit-transition: all 300ms ease-in-out;
                    -moz-transition: all 300ms ease-in-out;
                    -o-transition: all 300ms ease-in-out;
                    -ms-transition: all 300ms ease-in-out;
                    transition: all 300ms ease-in-out;
                    border-left: 10px solid #000;
                  }

                  #wrapper .dd-header:hover {
                    border-left: 10px solid #9cbe4f;
                    
                  }
                  </style>
                  <div id="wrapper">
                    <?php 
                            if($nearbyjobs)
                            {
                              foreach ($nearbyjobs as $sr) 
                              { 
                                $jobtitle=$sr->jobtitle;
                                $job_title=str_replace(' ', '-', $sr->jobtitle);
                                $location=str_replace(' ', '-', $sr->location);
                                $designation=str_replace(' ', '-', $sr->designation);
                                //$url=$job_title.'-'.$location;
                                $id=md5($sr->id).'g3q7'.$sr->id.'g3q7'.md5($sr->id + 1);
                                $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$id;

                          ?>
                          <a href="<?php echo base_url($url);?>">
                            <ul class="dd-header" style="height:40px;">
                                <li>
                                    <div style="margin-left:20px;">
                                        <?php echo $jobtitle; ?>   |   <?php echo $location; ?>
                                    </div>
                                </li>
                                <li></li>
                            </ul>
                          </a>
                    <?php } } else { echo 'No Nearby jobs Found' ; }?>
                    </div>
              

            
            
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  END NEAR BY JOBS MODAL $$$$$$$$$$$$$$$$$$$$$$$$$ -->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ LOCATION MODAL $$$$$$$$$$$$$$$$$$$$$$$ -->



<div class="container">
  <!-- Trigger the modal with a button -->
  <button style="display: none" type="button" id="some-id" class="btn btn-info btn-lg" data-toggle="modal" data-target="#locationmodal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="locationmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Your Location</h4>
        </div>
        <div class="modal-body">
          <form class="form-group" action="<?php echo base_url(); ?>candidate/save_location" method="post">
            <select class="form-control" name="location" required>
            <option value="">--Type Location--</option>
            <?php foreach ($locationapi as $key) 
            { ?>

              <option value="<?php echo $key->city_name ;?>"><?php echo $key->city_name; ?></option>

            <?php } ?>
            </select>
            <br />
            <input type="submit" name="save_location" value="Save" class="btn btn-success">
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>
<?php if(!$candPassword)
{ ?>
  	<script>
		$(document).ready(function()
		{

		  $('#enterPass').trigger('click');


		});
	</script>
<?php }
else if(!$candLocation)
{ ?>

	<script>
		$(document).ready(function()
		{

		  $('#some-id').trigger('click');


		});
	</script>
<?php } ?>


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  END LOCATION MODAL $$$$$$$$$$$$$$$$$$$$$$$$$ -->


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ MOBILE,PASSWORD MODAL $$$$$$$$$$$$$$$$$$$$$$$ -->



<div class="container">
  <!-- Trigger the modal with a button -->
  <button style="display:none;" type="button" id="enterPass" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mobpasswordmodal">Information</button>

  <!-- Modal -->
  <div class="modal fade" id="mobpasswordmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body">




                  <style class="cp-pen-styles">
                  
                  
                  #wrapper a {
                    color: #000;
                    text-decoration: none;
                  }
                  #wrapper .dd-header {
                    margin: 1px 1px 1px 0;
                    padding: 0;
                    width: 400px;
                    height: auto;
                    background-color: #fff;
                    list-style-type: none;
                    overflow: hidden;
                    -webkit-transition: all 300ms ease-in-out;
                    -moz-transition: all 300ms ease-in-out;
                    -o-transition: all 300ms ease-in-out;
                    -ms-transition: all 300ms ease-in-out;
                    transition: all 300ms ease-in-out;
                    border-left: 10px solid #000;
                  }

                  #wrapper .dd-header:hover {
                    border-left: 10px solid #9cbe4f;
                    
                  }
                  </style>
                  <div id="wrapper">
                    
                  <form action="" method="post" class="form-group">
                  <label>Mobile Number:</label>
                  	<input type="text" name="mobile" required="" />
                  	<label>Password:</label>
                  	<input type="text" name="password" id="pass" onkeyup="validatepass()" onblur="check(this)" required="" />
                  	<label id="errpass"></label>
                  	<label>Confirm Password:</label>
                  	<input type="text" name="cpassword" id="cpass" onkeyup="validatepass()" onblur="check(this)" required="" />
                  	<label id="errcpass"></label>
                  	<div style="display: none;" class="alert alert-success" id="mathed">
					  Mathed
					</div>
					<div style="display: none;" class="alert alert-danger" id="notmathed">
					  Not Mathed
					</div>
					<label>Date Of Birth:</label>
                  	<input type="date" name="dob" required="" />
                  	<label>Nick Name:</label>
                  	<input type="text" name="nick_name" required="" />
                  	<input type="submit" class="btn btn-info" name="savePassMobInformation" onmouseenter="validatesubmit()" required="" />

                  </form>

                    </div>
              <script type="text/javascript">
              	
		            function check(val)
		            {
		              	var pass=$('#pass').val();
		              	//alert(pass);
		              	var cpass=$('#cpass').val();
		              	if(pass != '' && cpass != '')
		              	{
		              		if(pass == cpass)
		              		{
		              			$('#mathed').show();
		              			$('#notmathed').hide();
		              		}
		              		else
		              		{
		              			$('#cpass').val('');
		              			$('#mathed').hide();
		              			$('#notmathed').show();
		              		}
		              	}

		            }
		            function validatepass()
					{
						var successflag=0;
						var name=document.getElementById("pass").value;
						if(name.length < 8)
						{
							dislabel("Enter at least 8 characters","errpass","red");
							return successflag;
						}
						else if(name.length > 16)
						{
							dislabel("Oops! Max length 16 characters!","errpass","red");
							return successflag;
						}
						// else if(!name.match(/^[A-Z]{1,}[a-z]{1,}[!@#$%^&*\-\.\_]{1,}[0-9]{1,}[A-Za-z0-9!@#$%^&*\-\.\_]*$/))
						else if(!name.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$#@$!%*?&])[A-Za-z\d$#@$!%*?&]{8,16}$/))
						{
							dislabel("Should have 1 Capital, Small, Number and Special","errpass","red");
							return successflag;
						}
						else
						{
							successflag=1;
							dislabel("Great!","errpass","green");
							return successflag;
						}
					}

					function dislabel(msg,plocation,color)
					{
						document.getElementById(plocation).innerHTML = msg;
						document.getElementById(plocation).style.color = color;
					}
					function validatesubmit()
					{
						//alert(validatepass());
						if($('#pass').val() != '' && $('#cpass').val())
						if(validatepass() == 0)
						{
							$('#pass').val('');
							$('#cpass').val('');
						}
					}

              </script>

            
            
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  END MOBILE,PASSWORD  MODAL $$$$$$$$$$$$$$$$$$$$$$$$$ -->

<br><br><br><br>
<script>  
  function signOut() {    
    var auth2 = gapi.auth2.getAuthInstance();    
    auth2.signOut().then(function () 
      {      
        console.log('User signed out.');    
      });  
  }
</script>
 <!--###################Add More Option#################-->
 <script type="text/javascript">
function validate_image_upload() 
{
    var fuData = document.getElementById('fileToUpload');
    var FileUploadPath = fuData.value;

//To check if user upload any file
    if (FileUploadPath == '')
     {
        $('#myModalImage').modal('hide');
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
        $('#myModalImage').modal('hide');
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
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

</script>

<?php if($this->Candidate_M->isLoggedin() == TRUE){ 

    $candidate_id=$this->session->userdata('candidate_id');
?>
<div id="foo">
  <div class="popup" >
  <?php if($this->Candidate_M->is_having_exp($candidate_id) != TRUE){  ?>
    <span class="popuptext" id="myPopup">
      Add Details For Better Jobs 
      <br />
      <a href="<?php echo base_url();?>candidate/profile/experience_details" ><button class="btn btn-info">Add</button>
    </span>
  <?php } else if($this->Candidate_M->is_having_skill($candidate_id) != TRUE){ ?>
        <span class="popuptext" id="myPopup">
          Add Skills For Better Jobs 
          <br />
          <a href="<?php echo base_url();?>candidate/profile/skill_details" ><button class="btn btn-info">Add</button>
        </span>
  <?php }  ?>
  </div>
</div>
<?php } ?>
</body>


