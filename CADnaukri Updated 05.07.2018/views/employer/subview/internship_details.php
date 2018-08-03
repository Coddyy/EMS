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

    <style type="text/css">
       #exe {
         box-sizing: content-box;    
         width: 768px;
         height: 120px;
         /*padding: 30px;    */
        /*border: 10px solid blue;*/
           }
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="">
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

                <div class="container-inner "><!-- line-sepa-bottom -->

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

                                    <!-- <li class="profile-edit"> -->

                                    <a  data-toggle="modal" data-target="#myModal">

                                      <?php //echo $add_or_edit?> <!-- Photo -->
                                      <!-- <span class="glyphicon glyphicon-camera" style="font-size: 16px;"></span> -->

                                     </a>

                                    

                                    <!-- </li> -->

                                </ul>

              

<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>                                  
                                    <li><a href="<?php echo base_url('employer/profile') ?>" >Your Profile</a></li>
                                    <li><a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a></li>
                                    <li><a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('employer/internship_details') ?>" class="active">Internship Posts</a></li>
                                    <!-- <li><a href="<?php //echo base_url('employer/application_recieved') ?>">Application Received</a></li> -->
                                    <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a>                         
                                          <a href="#">Profile</a>
                                          <a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a>
                                          <a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a>
                                          <a href="<?php echo base_url('employer/internship_details') ?>" class="active">Internship Posts</a>
                                          <!-- <a href="<?php //echo base_url('employer/application_recieved') ?>">Application Received</a> -->
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
                                              a:hover{text-decoration:none;}
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
                      .xcolleft_height{height: 550px;overflow-y: scroll;}
                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;}
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:right;margin-top: -35px;margin-left: 20px;} 
                      .xcolleft_height{height: auto;}

                         }                       
                  </style>

                  <h3 class="fixed_top">Internship Details</h3>
                  <!-- <?php 

                                if(!empty($company_data))

                                {
                                  $internship_url=base_url('employer/add_internship');
                                  echo '<a href="'.$internship_url.'" class="button aaa" >Add Internship</a>';

                                }

                                else 

                                {

                                  echo '<a href="#" class="button aaa" onclick="show_alert()">Add Internship</a>';

                                }

                              ?> -->
<!--Start desktop-->
                        <div class="col-xs-12 col-md-9 desktop_view">

                          <div class="xcolleft xcolleft_height" style="">
                            <?php 

                                if(!empty($internship_details))

                                {

                                  $id="datatable";

                                }

                                else 

                                {

                                  $id="simple";

                                }

                                ?>
                            <div class="col-xs-12" style="overflow-x:auto;">
                            <table id="<?php echo $id?>" class="table  table table-bordered">

                              <thead>

                                <tr>

                                  <th>Title</th>

                                  <th>Location</th>

                                  <th>Start Date</th>

                                  <th>Duration</th>

                                  <th>Last Date</th>

                                  <th>Action</th>

                                </tr>

                              </thead>

                            <tbody>

                              <?php 

                              if(!empty($internship_details))

                              {

                                foreach ($internship_details as $intd)

                                {
                                  $edit_url=base_url('employer/add_internship/'.$intd->intern_id);
                                  $delete_url=base_url('employer/delete_internship/'.$intd->intern_id);

                                  echo '<tr>';

                                  echo '<td>'.$intd->title.'</td>';

                                  echo '<td>'.$intd->location.'</td>';

                                  echo '<td>'.$intd->startDate.'</td>';

                                  echo '<td>'.$intd->duration.'</td>';

                                  echo '<td>'.$intd->endDate.'</td>';

                                    echo '<td>'.'<a href="'.$edit_url.'" title="EDIT INTERNSHIP"><i class="fa fa-pencil-square-o"></i></a>&nbsp;<a class="delete" href="'.$delete_url.'" title="DELETE INTERNSHIP">  <i class="fa fa-trash-o"></i></a> '.'</td>';

                                  echo '</tr>';

                                }

                              }

                              else 

                              {

                                echo '<tr><td colspan="10">NO DATA FOUND</td></tr>';

                              }

                              ?>

                    

                               </tbody>

                              </table>
                            </div>
                          </div>

                        </div>
<!--End desktop-->

<!--Start Mobile-->
    <style type="text/css">
      .mobile_box{border:0px solid #cccccc;margin-left: 2px;
            margin-right: 2px;height: auto;margin-bottom: 5px;
            background-color: #ECF0F5;
            }
            .bold{font-weight: bold;font-size: 16px;margin-top: 10px;}
            .margin{margin-bottom: 5px;border-bottom:1px solid #7B7E8C;}
            /*.margin_last{margin-bottom: 5px;border-bottom:10px solid #fff;}*/

    </style>
      <div class="container mobile_view">
          <?php 

                                if(!empty($internship_details))

                                {

                                  $id="datatable";

                                }

                                else 

                                {

                                  $id="simple";

                                }

                                ?>
        <div class="row mobile_box" id="<?php echo $id?>">
                            <?php 

                              if(!empty($internship_details))

                              {

                                foreach ($internship_details as $intd)

                                {
                                  $edit_url=base_url('employer/add_internship/'.$intd->intern_id);
                                  $delete_url=base_url('employer/delete_internship/'.$intd->intern_id);
                                  ?>

            <div class="col-xs-12 col-sm-6 bold">Title</div>
            <div class="col-xs-12 col-sm-6 margin"><?php echo $intd->title; ?></div>

            <div class="col-xs-12 col-sm-6 bold">Location</div>
            <div class="col-xs-12 col-sm-6 margin"><?php echo $intd->location; ?></div>

            <div class="col-xs-12 col-sm-6 bold">Start Date</div>
            <div class="col-xs-12 col-sm-6 margin"><?php echo $intd->startDate; ?></div>

            <div class="col-xs-12 col-sm-6 bold">Duration</div>
            <div class="col-xs-12 col-sm-6 margin"><?php echo $intd->duration; ?></div>

            <div class="col-xs-12 col-sm-6 bold">Last Date</div>
            <div class="col-xs-12 col-sm-6 margin"><?php echo $intd->endDate; ?></div>

            <div class="col-xs-12 col-sm-6 bold">Action</div>
            <div class="col-xs-12 col-sm-6 margin">
              
              <?php echo '<a href="'.$edit_url.'" title="EDIT INTERNSHIP"><i class="fa fa-pencil-square-o"></i></a>&nbsp;<a class="delete" href="'.$delete_url.'" title="DELETE INTERNSHIP">  <i class="fa fa-trash-o"></i></a>';
              ?>
            </div>
            <div class="col-xs-12" style="background-color: #fff;"> </div>


            <?php 
            }

                              }

                              else 

                              {

                                echo 'NO DATA FOUND';

                              }

                              ?>
          
        </div>
      </div>
<!--End Mobile-->

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
<br><br>
<script type="text/javascript">
$('.delete').click(function()
  {
    var uid=$(this).attr("data-input");
    var id=$(this).attr("id");
    if(confirm("Are You Sure You Want To Delete This ??"))
    {
      return true;
      //window.location="<?php echo base_url();?>cart/delete/"+id+'/'+uid;
    }
    else
    {
      return false;
    }

  });
 $('#datatable').dataTable( {

      "bFilter": false,

      "ordering": false,

        "info":     false,

        "bLengthChange": false

    } );



 function show_alert()

 {

  alert('Add Company Details Before Proceeding');

 }

</script>                                