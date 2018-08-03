<style type="text/css">
  /*div,h1,h2,h3,h4,h5,h6{font-family: calibry; }*/
    div,p,h1,h2,h3,h4,h5,h6,ul,li,{font-family: calibury;color:#000;}

  .button-search{background:#0055A5;color: #fff;}
  .button-search:hover{background-color: #FF7900;}
  li>a:hover{text-decoration: none;}
  @media screen and (max-width: 768px){
   .button-search{margin-top: 10px;}
  }
  /*.imgs{position: absolute;
    clip: rect(0px,200px,130px,0px);}*/
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
</head>
    <div class="se-pre-con"></div>
    <div class= "head" align="center">
    <div class="container" style="margin: 2px; background-color: #fff; border:1px solid #ccc; border-radius: 4px;padding: 1px;">
                <div class="container-fluid">
                  <div class="navbar-header" align="center">

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
                                      <a  data-toggle="modal" href="#myModal" align="center">
                                        <img  class="img-circle"src="<?php echo $profile_image_url?>" alt="" style="padding:2px;" />
                                      </a>
                                    

                  
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a style="color:#0055A5; text-transform: uppercase;font-weight: bold;" >Welcome <p style="color: red;display: inline;"><?php echo $employee_details->name;?></p></a></li>   
                   <li><a style="color: black;font-weight: bold;">Logged in from IP :<span style="color:#0055A5;"><?php echo $last_login_ip; ?></span> </a>  </li>
                    <li><a style="color: black;font-weight: bold;">Last Logged Info   : <span style="color:#0055A5;"><?php echo $last_login_date; ?></span> </a> </li>
                   <!--  <li><a style="color: black;font-weight: bold;"> Last Job Posted   :  <span style="color:#0055A5;"><?php echo $last_posted_job;?></span></a> </li> -->
                  </ul>
                  <ul class=" nav navbar-nav pull-right"> <li><a  style="color: #fff;font-weight: bold;text-transform: uppercase;" href="<?php echo base_url('employer/logout');?>" onclick="Out();"><button class="btn btn-primary" style="padding-top: 1px;padding-bottom: 1px;">Log Out</button></a></li></ul>
                </div>
              </div></div>

<div class="container" style="border-radius: 4px;border:1px solid #cccccc;">
  <div class="row">
    <div class="container-inner">
  <!--Left side-->
    <div class="col-md-3 col-xs-12">
      <div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">
         
<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" class="active">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a></li>
                                    <li><a href="<?php echo base_url('Employer/Company-Profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a></li>
                                    <li><a href="<?php echo base_url('Employer/Job-Post') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('Employer/Internship-Details') ?>">Internship Posts</a></li>
                                    <!-- <li><a href="<?php //echo base_url('Employer/Application-Recieved') ?>">Application Received</a></li> -->
                                   
                                    <li><a href="<?php echo base_url();?>employer/my_profile">My Profile</a></li>                            
                            <li><a href="<?php echo base_url();?>employer/upgrade_account">Upgrade Account  
                             
                                <?php 

                                  if($this->Employee_M->is_there_notification($this->session->userdata('emp_id')) ==TRUE)
                                  {

                                    echo '<span class="small">New</span>' ;
                                  }
                                  else
                                  {
                                    echo ' ';
                                  }

                                ?>
                              </a>
                            </li>
                            <li><a href="<?php echo base_url();?>Queries">Report Issue</a></li>
                            <li><a href="<?php echo base_url();?>Employer/Job-Views" >Total Job views</a></li>
                            <li><a href="<?php echo base_url('Employer/Application-Recieved') ?>">Track Applications</a></li>
                            <li><a href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                            <li><a href="#">Post Status</a></li>

                           <!--  <li><a href="#">CV Downloads</a></li> -->
                            <li><a href="#">Chat</a></li>
                             <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>

                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>" class="active">Dashboard</a>
                                          <a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a>
                                          <a href="<?php echo base_url('Employer/Company-Profile') ?>">Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a>

                                          <a href="<?php echo base_url('Employer/Job-Post') ?>">Job Posts</a>
                                          <a href="<?php echo base_url('Employer/Internship-Details') ?>">Internship Posts</a>
                                          <!-- <a href="<?php //echo base_url('Employer/Application-Recieved') ?>">Application Received</a> -->
                                           <a href="<?php echo base_url();?>employer/my_profile">My Profile</a>                            
                            <a href="<?php echo base_url();?>employer/upgrade_account">Upgrade Account  
                             
                                <?php 

                                  if($this->Employee_M->is_there_notification($this->session->userdata('emp_id')) ==TRUE)
                                  {

                                    echo '<span class="small">New</span>' ;
                                  }
                                  else
                                  {
                                    echo ' ';
                                  }

                                ?>
                              </a>
                            
                            <a href="<?php echo base_url();?>Queries">Report Issue</a>
                            <a href="<?php echo base_url();?>Employer/Job-Views" >Total Job views</a>
                            <a href="<?php echo base_url('Employer/Application-Recieved') ?>">Track Applications</a>
                            <a href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a>
                            <a href="#">Post Status</a>

                           <!--  <li><a href="#">CV Downloads</a></li> -->
                            <a href="#">Chat</a>
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

    </div><!--Left side-->

  
<!--################################################################################################-->
<!--iframe test-->


<!-- <iframe height="300px" width="100%" src="demo_iframe.htm" name="iframe_a"></iframe>

<p><a href="https://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>

<p>When the target of a link matches the name of an iframe, the link will open in the iframe.</p> -->


<!--iframe test-->
<!--################################################################################################-->




<!--Center-->
            <div class="col-md-9 col-xs-12" style="border:0px solid #999;">
              <!--Frame-->   

              <!-- <iframe height="700px" width="100%" src="<?php echo base_url();?>test/emp_profile" name="iframe_call" scrolling="no"></iframe> -->
              <title>CAD CAM CAE BIM Jobs - Pune Chennai Bangalore Hyderabad</title>
               <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
              <!-- Latest compiled and minified CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

              <!-- jQuery library -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

              <!-- Latest compiled JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <style type="text/css">
                div,h1,h2,h3,h4,h5,h6{font-family: calibry; }
                /*.button-search{height: 25px;padding: 3px;background-color:#0055A5;color: #fff;}*/
                /*.button-search:hover{background-color: #FF7900;}*/
              </style>

              <!-- <h4 align="center" style=" font-weight:bolder;color:#0055A5;">Welcome To Your Personel Cabinet</h4> -->
              <br>

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
        <div class=" col-xs-12" style="text-align: left;">
            <div class="carousel-inner">
              <?php $details=$this->Employee_M->get_notifications();?>
                <div class="item active" align="left" style="background-color: red;">
                    <div class="carousel-content" style="background-color:#fff;text-align: left;">
                        <div style="background-color: transparent;text-align: left;">
                            <p style="text-align: left;font-size: 18px;font-weight: bold;border:0px solid red;color:#000;"><?php 
                                   
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
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="carousel-content" style="background-color:#fff;text-align: left;">
                        <div>
                            <p style="text-align: left;font-size: 18px;font-weight: bold;border:0px solid red;color:#000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, sint fuga !</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="item">
                    <div class="carousel-content">
                        <div>                          
                            <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo explicabo sit blanditiis laborum dolore illum fuga veniam quae expedita libero accusamus quas harum ex numquam necessitatibus provident deleniti tenetur iusto officiis recusandae corporis culpa quaerat?</p>
                        </div>
                    </div>
                </div> -->
                
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

<!-- <style type="text/css">
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
  height: auto;
  padding: 50px;
}

</style> -->
              <!--Notice Board-->

                   <h4 style="color:#0055A5;"> Your Last Activity</h4>
                   <!-- <h5 style="font-weight: bold;">Logged In From IP :<span style="color:#0055A5;"><?php echo $last_login_ip;?></span></h5>
                   <h5 style="color:#000;"> Last Login Date : <span style="color:#0055A5;"><?php echo $last_login_date;?></span></h5> -->
                   <h5 style="color:#000;"> Last Job Posted : <span style="color:#0055A5;"><?php echo $last_posted_job;?></span></h5>
                   
                   <!-- <h4 style="color:#0055A5; font-weight: bold;"> Most Searched Candidates</h4>
                   <div class="row">
                     <div class="col-xs-6 col-md-2">Name:</div>
                     <div class="col-xs-6 col-md-2">Email:</div>
                     <div class="col-xs-6 col-md-2">Mobile:</div>
                     <div class="col-xs-6 col-md-2">Location:</div>
                     <div class="col-xs-6 col-md-2">Company:</div>
                     <div class="col-xs-6 col-md-2">View/Resume</div>
                   </div> --><br><hr >
                   <h4 style="color:#0055A5; font-weight: bold;"> Search Your Candidate :<a href="#"> <span class="pull-right" style="color:#0055A5;"></span></a></h4><br>
                   <div class="row col-sm-12" style="border:0px solid red;">
                      <form action="" method="post">
                     <div class="col-xs-12 col-md-4" style="min-height:;">Skill-Wise<input type="text" onkeyup="return validate_text(this)" name="skill" required=""></input></div>
                     <div class="col-xs-12 col-md-4" style="min-height:;">Location-Wise<select style="height:5%; width: 100%;" name="location">
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
                                            
                                          </select></div>
                     <!-- <div class="col-xs-6 col-md-6" style="min-height: 40px;">Industry-Wise</div> -->
                     <div class="col-xs-12 col-md-4" style="min-height:;">Experience-Wise
                                    <select style="height:5%; width: 100%;" name="experience">
                                      <option value="0" style="">--</option>
                                      <option value="0-1" style="">0-1</option>
                                      <option value="1-2">1-2</option>
                                      <option value="2-3">2-3</option>
                                      <option value="3-5">3-5</option>
                                      <option value="5-7">5-7</option>
                                      <option value="7">7+</option>
                                    </select>
                    </div></div>
                     <!-- <div class="col-xs-6 col-md-6" style="min-height: 40px;">Salary-Wise</div> -->
                     <!-- <div class="col-xs-6 col-md-6" style="min-height: 40px;">Company-Wise</div> -->
                    <center> <input class="button-search" name="search_candidate" type="submit"  value="Search" /></center>
                   <hr><!--End Wise Row-->
                </form>
                   <div class="row">
                     <!-- <div class="col-xs-6 col-md-3">Name:</div>
                     <div class="col-xs-6 col-md-3">Location:</div>
                     <div class="col-xs-6 col-md-3">Company:</div>
                     <div class="col-xs-6 col-md-3">View/Resume</div> -->
                   </div>
                 
                <!--Frame-->   
              </div>
<!--Center-->


<!--Right Side-->
   
<!--Right side-->
  </div><!--End Row-->
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

<style type="text/css">
  /*.history_view{padding-left: 10px;}*/
 /* @media screen and (max-width: 768px){
    .history_view{padding-left: 0px;font-size: 11px;}*/
  }
</style>
<center> <p style="font-size: 22px; font-weight: bolder;height: 40px;"><?php echo $title;?></p></center>
<div class="container history_view" style="max-width: 980px;margin: auto;overflow-x: scroll;">
 
    <div class="row col-md-12 col-xs-12 col-lg-12 col-sm-12">
    <table class="table table-striped " align="center">

    <thead>
        <tr>
            <th>Name</th>
            <th>Skill</th>
            <th>Experience</th>
            <th>Location</th>
            <th colspan="2" class="text-center" style="text-align: center;">Action</th>
        </tr>
    </thead>
        <?php if($candidates){ 

          foreach ($candidates as $key) {

        ?>
            <tr>
                <td><?php echo $key->Name; ?></td>
                <td><?php echo $key->skillName; ?></td>
                <td><?php echo $key->experience; ?></td>

                <?php if($key->Location != '' && $key->Location != NULL && is_numeric($key->Location) == FALSE){ ?>
                  <td><?php echo $key->Location; ?></td>
                <?php } else{ ?>
                  <td>Not Available</td>
                <?php }  ?>
                <td>|</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url();?>employer/view_candidate_profile/<?php echo $key->candidate_id;?>"><span class="glyphicon glyphicon-eye-open"></span>&nbspView</a> </td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url();?>employer/schedule_interview/<?php echo $key->candidate_id;?>"><span class="glyphicon glyphicon-eye-open"></span>&nbspSchedule Interview</a> </td>
            </tr>
        <?php } } else { ?>
        <tr>
          <td colspan="4">No Results Found</td>
        </tr>
        <?php } ?>   
    </table>
    </div>
</div></div><br><br>



<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ LOCATION MODAL $$$$$$$$$$$$$$$$$$$$$$$ -->



<div class="container">
  <!-- Trigger the modal with a button -->
  <button style="display:none;" type="button" id="some-id" class="btn btn-info btn-lg" data-toggle="modal" data-target="#locationmodal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="locationmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
          <h4 class="modal-title">Enter Location</h4>
        </div>
        <div class="modal-body">
        	<form class="form-group" action="<?php echo base_url(); ?>employer/save_location" method="post">
	         	<select class="form-control" name="location" required>
	         	<?php foreach ($locationapi as $key) 
	         	{ ?>

	         		<option value="<?php echo $key->city_id ;?>"><?php echo $key->city_name; ?></option>

	         	<?php } ?>
	         	</select>
	         	<br />
	         	<input type="submit" name="save_location" value="Save" class="btn btn-success">
         	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php if($empLocation)
{
	//Do Nothing
}
else
{ ?>

<script>
$(document).ready(function(){
  $('#some-id').trigger('click');
});
<?php } ?>
</script>



<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  END LOCATION MODAL $$$$$$$$$$$$$$$$$$$$$$$$$ -->


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ NEAR BY CANDIDATES MODAL $$$$$$$$$$$$$$$$$$$$$$$ -->



<div class="container">
  <!-- Trigger the modal with a button -->
  <button style="" type="button" id="some-id" class="btn btn-info btn-lg" data-toggle="modal" data-target="#nearbycandidatesmodal">Near By Candidates</button>

  <!-- Modal -->
  <div class="modal fade" id="nearbycandidatesmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Near By Candidates</h4>
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
                    width: 600px;
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
                  <div id="wrapper" style="overflow: hidden;">
                    <?php 
                            if($nearbycandidates)
                            {
                              foreach ($nearbycandidates as $key) 
                              { 
                                

                          ?>
                          <a href="<?php echo base_url($url);?>">
                            <ul class="dd-header" style="height:40px;">
                                <li>
                                    <div style="margin-left:10px;">
                                    <div class="col-sm-6">
                                       <?php echo $key->name; ?>   |   <?php echo $key->location; ?>
                                      </div>
                                      <div class="col-sm-6">
                                       <a style=""href="<?php echo base_url();?>employer/view_candidate_profile/<?php echo $key->id;?>"><button class="btn btn-info btn-small">View</button></a> 
                                       <a href="<?php echo base_url();?>employer/schedule_interview/<?php echo $key->id;?>"><button class="btn btn-info">Schedule</button></a>
                                    </div>
                                    </div>
                                </li>
                                <li></li>
                            </ul>
                          </a>
                    <?php } } else { echo 'No Nearby candidates Found' ; }?>
                    </div>
              

            
            
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  
</div>


<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  END NEAR BY CANDIDATES MODAL $$$$$$$$$$$$$$$$$$$$$$$$$ -->



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
function validate_text(text)
{
  text.value=text.value.replace(/[^A-Za-z ]+/g,'');
}
</script>