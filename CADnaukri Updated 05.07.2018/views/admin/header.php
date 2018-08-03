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
<link href="<?php echo base_url()?>assets/superadmin/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/superadmin/css/bootstrap-responsive.css" rel="stylesheet">
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
	
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a href="<?=base_url('admin/dasboard')?>"> <img class="img-responsive" alt="Cadnaukri Logo" src="<?php echo base_url()?>assets/images/logo.png" /></a>
				
				<div class="btn-group pull-right" >
				
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone">admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url('admin/index/profile')?>">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url('admin/index/logout')?>">Logout</a></li> 
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
                              <li><a class="ajax-link" href="<?php echo base_url('admin/index/dashboard')?>">
                                                        <i class="icon-home"></i>
                                                        <span class="hidden-tablet"> Dashboard</span>
                                                 </a></li>
												 <?php 
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
													 
											<?php 	 }
													?>
													<?php if($module_id == '7')
													{ ?>


														<li><a class="ajax-link" href="<?php echo base_url('superadmin/admin/add_daily_poll')?>">
                                                        <i class="icon-eye-open"></i>
                                                        <span class="hidden-tablet">Manage Daily Poll</span>
                                                 

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

                                            ?> </a> </li>


											<?php 	}  ?>
						
						<div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('admin/advatisement/index')?>">Home page</a>
                                                                </td>
                                                            </tr>
                                                              <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('admin/advatisement/signin')?>">Sign In page</a>
                                                                </td>
                                                            </tr>
                                                             <tr>
                                                                <td>
                                                                    <a href="<?php echo base_url('admin/advatisement/signup')?>">Sign Up page</a>
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