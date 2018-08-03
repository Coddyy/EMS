<style type="text/css">
  div,h1,h2,h3,h4,h5,h6{font-family: Verdana;}
  @media screen and (max-width: 768px){
    div,h1,h2,h3,h4,h5,h6{font-family: Verdana;}
  }
  .button-search{height: 25px;padding: 3px;background-color:#0055A5;color: #fff;}
  .button-search:hover{background-color: #FF7900;}
  
</style>

<div class="container">
  <div class="row">
  <!--Left side-->
    <div class="col-md-3 col-xs-12">
        <div class="xcolright">
                              <ul class="side-profile">
                              
                     <li class="profile-photo">
                     <a href="<?php echo base_url()?>" >
                      <img src="<?php echo base_url();?>assets/images/Dashboard_Profile-Pic_Male.png" class="img-responsive img-desktop" style=""  title="Dashboard_Profile-Pic_Male.png -Cadnaukri.com" alt="Dashboard_Profile-Pic_Male.png" />
                     </a>
                     </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <span class="glyphicon glyphicon-camera" style="font-size: 18px;"></span> 
                                     </a></li>
                                </ul>
              
                          <ul class="sidebar">
                            
                                  <li><a href="#" class="active">Dashboard</a></li>
                                    <li><a href="#">Personal Details</a></li>
                                    <li><a href="#">Education Details</a></li>
                                    <li><a href="#">Skill Details</a></li>
                                    <li><a href="#">Experience Details</a></li>
                                    <li><a href="#">Contact Details</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li><a href="#">Log Out</a></li>

                                </ul>
                        </div>
    </div><!--Left side-->
<!--Center-->
    <div class="col-md-6 col-xs-12" style="border:0px solid #999;">
     <h4 align="center" style="text-transform: uppercase; font-weight: bolder;" >Wellcome To Your Personel Cabinet</h4><hr>
     <h4 style="color:#0055A5;"> Your Last Activity</h4>
     <h5 style="font-weight: bold;">Logged In From IP :</h5>
     <h5 style="color:#0055A5;"> Last Logged Date : </h5>
     <h5 style="color:#0055A5;">Last Applied Job : </h5><hr>
     <h4 style="color:#0055A5; font-weight: bold;"> Most Featured Jobs</h4>
     <div class="row" style="height: 200px;">
       <!-- <div class="col-xs-6 col-md-2">Name:</div>
       <div class="col-xs-6 col-md-2">Email:</div>
       <div class="col-xs-6 col-md-2">Mobile:</div>
       <div class="col-xs-6 col-md-2">Location:</div>
       <div class="col-xs-6 col-md-2">Company:</div>
       <div class="col-xs-6 col-md-2">View/Resume</div> -->
     </div><hr>
     <h4 style="color:#0055A5; font-weight: bold;"> Search Your Jobs :<a href="#" class=""> <span class="pull-right" style="color:#0055A5; font-size: 14px;">View more...</span></a></h4>
     <div class="row" style="border:0px solid red;">
       <div class="col-xs-12 col-md-4" style="min-height: 20px;"><input type="text" placeholder="Skill" name=""></div>
       <div class="col-xs-12 col-md-4" style="min-height: 20px;"><input type="text" placeholder="Experince" name=""></div>
       <div class="col-xs-12 col-md-4" style="min-height: 20px;"><input type="text" placeholder="Location" name=""></div>
       <button type="button" class="button-search pull-left" style="font-weight: normal;">Search</button>
       <button type="button" class="button-search pull-right" style="font-weight: normal;">View History</button>
     </div><hr><!--End Wise Row-->
     <!-- <div class="row">
       <div class="col-xs-6 col-md-3">Name:</div>
       <div class="col-xs-6 col-md-3">Email:</div>
       <div class="col-xs-6 col-md-3">Mobile:</div>
       <div class="col-xs-6 col-md-3">Location:</div>
       <div class="col-xs-6 col-md-3">Company:</div>
       <div class="col-xs-6 col-md-3">View/Resume</div>
     </div> -->


    </div><!--Center-->


<!--Right Side-->
    <div class="col-md-3 col-xs-12">
      <div class="xcolright">
                              <ul class="side-profile">
                              <li class="profile-photo">
                     <a href="<?php echo base_url()?>" >
                      <img src="<?php echo base_url();?>assets/images/CADnaukri_Dashboard_Profile-Pic_Female.png" alt="CADnaukri_Dashboard_Profile-Pic_Female.png"  class="img-responsive img-desktop" style="" title="CADnaukri_Dashboard_Profile-Pic_Female.png -Cadnaukri.com" />
                     </a>
                     </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal" class="small" >
                                      Advertise here !!
                                     </a></li>
                                </ul>
              
                          <ul class="sidebar">
                            <li><a href="#" class="active">Profile Viewed</a></li>
                                  <li><a href="#" >Applied Jobs</a></li>
                                    <li><a href="#">Upgrade Service</a></li>
                                    <li><a href="#">Track Interviews</a></li>
                                    <li><a href="#">Saved Jobs</a></li>
                                    <li><a href="#">Build Your CV</a></li>
                                    <li><a href="#">Learn Designing</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                        </div>
    </div><!--Right side-->
  </div><!--End Row-->
</div><!--End Container-->