<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CAD NAUKRI ADMIN PANEL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cad naukri">
  <meta name="author" content="SUBODHA SAHU">

  <link  href="<?php echo base_url()?>assets/superadmin/css/bootstrap-cerulean.css" rel="stylesheet">
  <style type="text/css">
    body {
    padding-bottom: 40px;
    }
    .sidebar-nav {
    padding: 9px 0;
    }
          .error{
              color: #ff0000;
          }
          brand img {
        float: left;
        height: 27px;
        /* width: 20px; */
        margin-right: 5px;
        background-color: transparent;
    }
  </style>
  <link href="<?php echo base_url()?>assets/superadmin/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/superadmin/css/charisma-app.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/superadmin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
  <link href='<?php echo base_url()?>assets/superadmin/css/fullcalendar.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
  <link href='<?php echo base_url()?>assets/superadmin/css/chosen.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/uniform.default.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/colorbox.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.cleditor.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.noty.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/noty_theme_default.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/elfinder.min.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/elfinder.theme.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.iphone.toggle.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/opa-icons.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/uploadify.css' rel='stylesheet'>
        
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/superadmin/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/superadmin/css/dataTables.tableTools.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
<!-- ******************* FOR BLINK WHEN SHORTAGE DAILY POLL  *********************** -->
<style>
blink {
    -webkit-animation: 2s linear infinite condemned_blink_effect; // for android
    animation: 2s linear infinite condemned_blink_effect;
    /*color:red;*/
}
@-webkit-keyframes condemned_blink_effect { // for android
    0% {
        visibility: hidden;
    }
    50% {
        visibility: hidden;
    }
    100% {
        visibility: visible;
    }
}
@keyframes condemned_blink_effect {
    0% {
        visibility: hidden;
    }
    10% {
        visibility: hidden;
    }
    20% {
        visibility: visible;
    }
}
</style>
<!-- ******************* END FOR BLINK WHEN SHORTAGE DAILY POLL  *********************** -->


</head>

<body>
  <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
  <!-- topbar starts -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a href="<?=base_url('superadmin/dasboard')?>"> <img class="img-responsive" alt="Cadnaukri Logo" src="<?php echo base_url()?>assets/images/logo.png"  style="height:60px"/></a>
        
        
        <div class="btn-group pull-right" >
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-user"></i><span class="hidden-phone"> admin</span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
                        <li><a href="<?php //echo base_url('superadmin/index/profile')?>">Profile</a></li>
                        <li><a href="<?php echo base_url('superadmin/admin/change_password')?>">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('superadmin/index/logout')?>">Logout</a></li>
          </ul>
        </div>
        <!-- user dropdown ends -->
        
        
      </div>
    </div>
  </div>
  <!-- topbar ends -->
  <?php } ?>
  <div class="container-fluid">
    <div class="row-fluid">
    <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
    
      <!-- left menu starts -->
      <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">Main</li>
            <?php 
            if($this->session->userdata('superadminId'))
            {
            ?>
                              <li><a class="ajax-link" href="<?php echo base_url('superadmin/index/dashboard')?>">
                                                        <i class="icon-home"></i>
                                                        <span class="hidden-tablet"> Dashboard</span>
                                                 </a></li>
            <li><a class="ajax-link" href="<?php echo base_url('superadmin/employee/index')?>">
                                                        <i class="icon-eye-open"></i>
                                                        <span class="hidden-tablet"> Recuiters</span>
                                                 </a></li>
                                                   <li><a class="ajax-link" href="<?php echo base_url('superadmin/company/index')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Companies</span>
                                                 </a>
                                                 </li>
                                                 <li><a class="ajax-link" href="<?php echo base_url('superadmin/job/index')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Jobs &nbsp
                                                        <?php 
                                                        if($this->SuperAdmin_M->newJobs() > 0)
                                                        {
                                                            echo '<span style="color:green;">(New '.$this->SuperAdmin_M->newJobs().')</span>'; 
                                                        } 
                                                        ?></span>
                                                 </a>
                                                 </li>
                                                  <li><a class="ajax-link" href="<?php echo base_url('superadmin/job/skills')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Skills</span>
                                                 </a>
                                                 </li>
                                                   <li>
                                                   <a class="ajax-link" href="<?php echo base_url('superadmin/internship/index')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Internship</span>
                                                 </a>
                                                 </li>
                        <li><a class="ajax-link" href="<?php echo base_url('superadmin/candidate/index')?>">
                                                        <i class="icon-edit"></i>
                                                        <span class="hidden-tablet"> Candidates</span>
                                                 </a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url('superadmin/candidate/casual_candidates/All')?>">
                                                        <i class="icon-edit"></i>
                                                        <span class="hidden-tablet"> Candidate Activities</span>
                                                 </a></li>
                          <li><a class="ajax-link" href="<?php echo base_url('superadmin/intern/index')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Interns</span>
                                                 </a></li>
                          
                                                 <li><a class="ajax-link" href="<?php echo base_url('superadmin/CAD-CAM-Schools')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">CAD/CAM Schools</span>
                                                 </a></li>
                                 <li><a class="ajax-link" href="<?php echo base_url('superadmin/news/news_list')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">News and Events</span>
                                                 </a></li>
                                               
                                                 
                                                   <li>
                                                   <a class="ajax-link" href="<?php echo base_url('superadmin/sponors/home_images')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Sponsors(Home Page)</span>
                                                 </a>
                                                 </li>
                                                  <li>
                                                   <a class="ajax-link" href="<?php echo base_url('superadmin/sponors/recruiter_company')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Top Companies(Home Page)</span>
                                                 </a>
                                                 </li>
                                                   <li><a class="ajax-link" href="<?php echo base_url('superadmin/admin/index')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Admin</span>
                                                 </a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url('superadmin/index/add_banner')?>">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Add Dynamic Banner</span>
                                                 </a></li>
                                                  <li><a class="ajax-link" href="<?php echo base_url();?>superadmin/services/add_service">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Add Services</span>
                                                 </a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>superadmin/index/tickets">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Tickets</span>
                                                 </a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>superadmin/employee/requests">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">View Account Requests</span>
                                                 </a></li>
                                                 <li><a class="ajax-link" href="<?php echo base_url();?>superadmin/index/view_job_alerts">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">View Job Alerts</span>
                                                 </a></li>
                                                 <li>
                                                  <a class="ajax-link" href="<?php echo base_url();?>superadmin/admin/add_daily_poll">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Add Daily Poll </span>
                                            <?php 
                                                $polls=$this->SuperAdmin_M->count_pending_polls();
                                                  if($polls < 3)
                                                  { //echo $polls;
                                            ?>
                                                        <blink style="color:red;"><b>Critically Low</b></blink>
                                                    
                                            <?php   }
                                                    else if($polls < 4)
                                                    { 
                                            ?>
                                                        <blink style="color:orange;"><b>Insufficient Polls</b></blink>
                                            <?php   }
                                                else
                                                {
                                                  //Do Nothing
                                                }

                                            ?>
                                                        


                                                  </a>
                                                 </li>
                                                 <li><a data-toggle="collapse" data-parent="#accordion" href="<?php echo base_url();?>superadmin/news/set_notification">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Set Notification</span>
                                                     </a>
                        
                                                </li>
                                                 <li><a data-toggle="collapse" data-parent="#accordion" href="<?php echo base_url();?>superadmin/admin/add_blog">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet">Add Blog</span>
                                                     </a>
                        
                                                </li>
                                                      <li><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        <i class="icon-list-alt"></i>
                                                        <span class="hidden-tablet"> Advatisement Control</span>
                                                     </a>
            
            </li>
            <?php }
            else if($this->session->userdata('admin_id'))
            {
                
                         $admin_id=$this->session->userdata('admin_id');
                         $data=$this->SuperAdmin_M->get_module($admin_id);
                         foreach($data as $row)
                         {
                          $module_id=$row->module_id;
                           
                         }
                        
                         $dataset=$this->SuperAdmin_M->get_module_name($module_id);
                        
                         foreach($dataset as $row)
                         {
                           $module_name=$row; ?>
                           
                          <li><a class="ajax-link" href="<?php echo base_url('admin/'.$module_name.'/index')?>">
                                                        <i class="icon-eye-open"></i>
                                                        <span class="hidden-tablet"><?php echo $module_name;?></span>
                                                 </a></li> 
                          
                      <?php    }
                          
            }
              ?>
            <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('superadmin/advatisement/index')?>">Home page</a>
                                                                </td>
                                                            </tr>
                                                              <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('superadmin/advatisement/signin')?>">Sign In page</a>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('superadmin/advatisement/signup')?>">Sign Up page</a>
                                                                </td>
                                                            </tr>


                                                        </table>
                                                    </div>
            </div>
        </div><!--/.well -->
      </div><!--/span-->
      <!-- left menu ends -->
      
      
      
      <div id="content" class="span10">
      <!-- content starts -->
      <?php } ?>
