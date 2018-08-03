<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<title>
<?php 

    // if($this->uri->segment(2) != "")
    // {
        $url=explode('_',$this->uri->segment(2));
        $url3=explode('_',$this->uri->segment(3));
        echo ucfirst($this->uri->segment(1)) ." | ".ucfirst($url[0])." ".ucfirst($url[1])." | ".ucfirst($url3[0])." ".ucfirst($url3[1]);
    // }
    // else
    // {
    //     echo ucfirst($this->uri->segment(2));
    // }

?>
</title>
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
<!--Start Top bar-->
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibri;color:#000;}
    .signup{background-color: #FF6600;min-width: 30%; max-height: 32px;border:none;}
      .signup:hover{background-color: #0055A5;color: #fff;}

  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width:100px;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width:100px;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100px;}
    .next{width: 100px;}

  }
</style>
<style type="text/css">
                  .desk_mov{}
                  @media screen and (max-width: 768px){
                    .desk_mov{text-align: center;margin-left: none;}
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
  
  transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s ease-out;
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
                  <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/my_profile">My Profile</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/update_cv" >Update CV</a></li>
                    <?php 
                                if($this->session->userdata('candidate_id'))
                                  {
                                    $candidate_id=$this->session->userdata('candidate_id');
                                  }
                                  $total_jobs=$this->Candidate_M->get_total_applied_jobs($candidate_id);
                                  if($total_jobs != false){
                              ?>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_applied_jobs">Applied Jobs(<?php echo $total_jobs; ?>)</a></li>
                  <?php } else { ?>
                  <li style="color:black;"><a>Applied Jobs</a></li><?php } ?>
                    <!-- <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/working_on_it">Upgrade Service</a></li> -->
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_interviews">Track Interviews<?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?><span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?></a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_saved_jobs">Saved Jobs</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_profile_views">Profile Views 
                                    <?php if($this->Candidate_M->new_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                   <!--  <span class="w3-circle w3-center" style="width:3%;background-color:green;height:-1%;color:white;">
                                    &nbsp ! &nbsp</span>  -->
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?>
                                    </a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/social_links" >Add Social Link</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>Queries" >Report Issue</a></li>                
                                     
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
            	<div class="container"  style="border-radius: 4px;border:1px solid #cccccc;">
                <div class="container-inner">
                		<div class="row">
                      <div class="col-md-3 col-xs-12">
                       <!-- <div class="col-xs-3"> -->
                  			<div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">
                            	<ul class="side-profile">
                            	<?php
                               
                        //echo $candidate_id;
                        $imagepath=$this->Candidate_M->get_image_path($candidate_id);
                        if($imagepath != '')
                        {
                          $profile_image_url=$imagepath;
                          $add_or_edit='';
                        }
                else
                {
                  //echo $candidate_id;
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
                  $add_or_edit='Add';
                }
                ?>
<style type="text/css">
/*.img1{
 height: 220px;width: 180px;
}
  @media screen and (max-width: 786px){
    .img1{
      width: 550px;
    }
  }*/
  a:hover{text-decoration: none;}
  
</style>

						         <li class="profile-photo">
						         <a href="<?php echo base_url('candidate/dashboard')?>" >
						         	<img src="<?php echo $profile_image_url?>" alt="" class="img1"/>
						         </a>
						         </li>
                                    <!-- <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> <span class="glyphicon glyphicon-camera" style="font-size: 18px;"></span>
                                     </a></li> -->
                                </ul>
							
<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url();?>candidate/dashboard">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/personal_details') ?>">Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/account_setting') ?>">Update Password</a></li>
                                    
                                    <li><a href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url();?>candidate/dashboard">Dashboard</a>
                                          <a href="<?php echo base_url('candidate/profile/personal_details') ?>">Personal Details</a>
                                          <a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a>

                                          <a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a>
                                          <a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a>

                                          <a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a>
                                          <a href="<?php echo base_url('candidate/profile/account_setting') ?>">Update Password</a>
                                          <a href="<?php echo base_url('candidate/logout') ?>">Log Out</a>

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
               
    .profile_watermark{background-image: url("http://www.cadnaukri.com/assets/sam/watermark/CADnaukri.png");
      background-repeat: no-repeat;                                        
      background-position: top right;
      min-height: 100px;
                                      
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
                            <div class="row profile_watermark">
                              <div class="col-md-12  col-xs-12" style="border:0px solid #ccc;padding: 5px;border-radius: 4px;">
                              <?php //echo $gen_details->imagePath;?>
                                <center><img src="<?php echo $gen_details->imagePath;?>" class="no_opacity" alt="CADFolks" style=""></center>
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
                          <h4 style="margin-top: -5px;">DOB   :  <span> <?php echo date('d M Y',strtotime($gen_details->dob));?></span></h4>
                        </div>  
                        </div>
                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;"><?php echo $gen_details->gender;?></h4>
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
                       </div>
                     </div>
                     


                       <h1 class="h1_titel" style="">Educational Details</h1>
<?php foreach ($edu_details as $key) { ?>
                     <div class="row">  
                         <h4 style="text-align: center;color:#0055A5;"><?php echo $key->qualification;?></h4> 
                              
            
         
                      <div class="col-xs-12 col-md-12 box_margin">                      
                      

                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                 Qualification
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                             <?php echo $key->qualification;?>
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Board
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $key->board;?> 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                College/Institute
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $key->institute;?> 
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Passing Year
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $key->passingYear;?>
                            </div> 
                       </div>

                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Percenatge
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $key->percenatge;?> 
                            </div> 
                       </div>

              
                       <div class="row" >
                       <div class="col-md-10" style="background-color: #cccccc;font-size: 2px;">
                         &nbsp
                       </div>
                       
                       </div>
                       </div>

                           
                     </div>
            <?php } ?>
  
  <h1 class="h1_titel" style="">Experience Details</h1>

   <?php foreach ($exp_details as $key) { ?>
                     <div class="row">  
                         <h4 style="text-align: center;color:#0055A5;"><?php echo $key->company;?></h4>

                 
          
                      <div class="col-xs-12 col-md-12 box_margin" style="">                     
                      
                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 Designation
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->designation;?> 
                            </div>
                      </div>
                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 CTC
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->ctc;?> 
                            </div>
                      </div>
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 Experience
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->experience;?> 
                            </div>
                      </div>

                            <div class="row" >
                             <div class="col-md-10" style="background-color: #cccccc;font-size: 2px;">
                               &nbsp
                             </div>
                            </div>

                      </div>
                      <?php } ?>
                       <br />
                    </div>
                 </div>
<h1 class="h1_titel" style="">Project Details</h1>

<?php foreach ($proj_details as $key) { ?>
                     <div class="row">  
                         <!-- <h4 style="text-align: center;color:#0055A5;"><?php //echo $key->company;?></h4> -->
                      <div class="col-xs-12 col-md-12 box_margin" style="">                     
                      
                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 Client Name
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->clientName;?> 
                            </div>
                      </div>
                       <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 Execution Year
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->yearofexecution;?> 
                            </div>
                      </div>
                      <div class="row" style="padding-top: 1%">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;border: 0px solid red">
                                 Description
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop" style="border: 0px solid red;">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin" style="">
                              <?php echo $key->descrition;?> 
                            </div>
                      </div>

                            <div class="row" >
                             <div class="col-md-10" style="background-color: #cccccc;font-size: 2px;">
                               &nbsp
                             </div>
                            </div>

                      </div>
                      <?php } ?>
                       <br />
                    </div>
                 </div>
                 <div class="row" style="padding-top: 1%;padding-bottom: 1%">
                           <center><a href="<?php echo base_url('internship/profile/profile_details') ?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Download Profile</button></a></center>
                        </div>
                    
                                <p>&nbsp;</p>
                        </div>
                       </div>
                       </div>

<!--End col-md-9-->

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

                     
              
                              