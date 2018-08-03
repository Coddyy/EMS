
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







<div class="main-container" style="">

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

								   <li class="profile-photo">
                      <style type="text/css">
                          #exe {
                            box-sizing: content-box;    
                            width: 768px;
                            height: 120px;
                            /*padding: 30px;    */
                            /*border: 10px solid blue;*/
                        }
                      </style>

								    <a href="<?php echo base_url('employer/dashboard')?>" >

								    <img src="<?php echo $profile_image_url?>" alt="" id="exe"/></a>

								   </li>

                                    <!-- <li class="profile-edit">

                                    <a  data-toggle="modal" data-target="#myModal">

                                      
                                      <span class="glyphicon glyphicon-camera" style="font-size: 16px;"></span>

                                     </a>

                                    

                                    </li> -->

                                </ul>

							

<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>
                                    <li><a href="<?php echo base_url('employer/profile'); ?>">Your Profile</a></li>
                                    <li><a href="<?php echo base_url('Employer/Company-Profile') ?>" class="active">Company Details</a></li>
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
                                          <a href="<?php echo base_url('Employer/Company-Profile') ?>" class="active">Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>">Post your Ad</a>

                                          <a href="<?php echo base_url('Employer/Job-Post') ?>">Job Posts</a>
                                          <a href="<?php echo base_url('Employer/Internship-Details') ?>">Internship Posts</a>
                                          <!-- <a href="<?php echo base_url('Employer/Application-Recieved') ?>">Application Received</a> -->
                                          <!-- <a href="#">Update Password</a> -->
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
                  .xcolleft_height{height: 500px;overflow-y: scroll;}
                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;background-color:#0055A5;color:#fff; }
                     .aaa:hover{background-color:#FF7900;color:#fff; }
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:right;margin-top: -35px;margin-left: 20px;} 
                        .xcolleft_height{height: auto;}

                         }
                        

                  </style>
                 
<?php //echo count($company_data);?>
<?php 

//echo $this->Employee_M->get_account_type($this->session->userdata('emp_id'));
//echo count($company_data);

?>
                    <h3 class="fixed_top">Company Lists</h3>

                  <?php 
                    if ($this->Employee_M->add_company_permitted($this->session->userdata('emp_id')) == false)
                    { ?>
                          <a onclick="nopermission()" class="btn btn-default aaa" style="position: relative;">  Add Company</a>
                  <?php   }
                    else 
                    {
                      if(empty($company_data))
                      { ?>
                        <a href="<?php echo base_url('employer/add_company')?>" class="btn btn-default aaa" style="position: relative;">  Add Company</a>


                    <?php } else if($this->Employee_M->get_account_type($this->session->userdata('emp_id')) == 'Basic'){    
                           if(count($company_data) > 1) {?>

                                <a  onclick="prompt()" class="btn btn-default aaa" style="position: relative;"> Add Company</a>
                      
                    <?php } else { ?>

                                <a href="<?php echo base_url('employer/add_company')?>" class="btn btn-default aaa" style="position: relative;">  Add Company</a>


                    <?php  } } else if($this->Employee_M->get_account_type($this->session->userdata('emp_id')) == 'Silver'){ 

                          if(count($company_data) > 3) {?>

                                <a  onclick="prompt()" class="btn btn-default aaa" style="position: relative;"> Add Company</a>
                      
                    <?php } else { ?>

                                <a href="<?php echo base_url('employer/add_company')?>" class="btn btn-default aaa" style="position: relative;"> Add Company</a>
                    
                    <?php  } } else if($this->Employee_M->get_account_type($this->session->userdata('emp_id')) == 'Gold'){ if(count($company_data) > 5) {?>

                                <a  onclick="prompt()" class="btn btn-default aaa" style="position: relative;"> Add Company</a>
                      
                    <?php } else { ?>

                                <a href="<?php echo base_url('employer/add_company')?>" class="btn btn-default aaa" style="position: relative;">?>
                    <?php  } } else if($this->Employee_M->get_account_type($this->session->userdata('emp_id')) == 'Diamond'){ 

                      //echo $this->Employee_M->get_account_type($this->session->userdata('emp_id'));

                      if(count($company_data) > 9) {?>

                                <a  onclick="prompt()" class="btn btn-default aaa" style="position: relative;"> Add Company</a>
                     
                    <?php } else { ?>

                                <a href="<?php echo base_url('employer/add_company')?>" class="btn btn-default aaa" style="position: relative;">Add Company</a>
                      
                    <?php } } }?>


                        <div class="col-xs-12 col-md-9" style="margin-left: -10px;">

                  			<div class="xcolleft xcolleft_height" style="">




                  			<?php 	if($this->session->flashdata('success'))
								{
									$succesmsg = $this->session->flashdata('success');
								?>
									<div class="alert alert-success" role="alert" style=" color: #4F8A10;
   										 background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>
								<?php } else if($this->session->flashdata('csuccess'))
                {
                  $succesmsg = $this->session->flashdata('csuccess');
                ?>
                  <div class="alert alert-success" role="alert" style=" color: #4F8A10;
                       background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>
                <?php }?> 


                  			  <!-- <div class="col-md-8"><h1 style="border-bottom: none;font-weight: bolder;">Company List</h1></div> -->

                  			    <!-- <div class="col-md-4 ">
                              <style type="text/css">
                                .aaa{float:right;}
                                @media screen and (max-width: 768px){
                                  .aaa{float:left;}
                                }
                              </style>
                  			    	<a href="<?php //echo base_url('employer/add_company')?>" class="button aaa" style="position: relative;" >Add Company</a>

                  			    </div> -->

                  			  <?php 

                  			  if(!empty($company_data))

                  			  {

                  			  	$id="datatable";

                  			  }

                  			  else 

                  			  {

                  			  	$id="simple";

                  			  }

                  			  ?>
          <div class="col-xs-12" style="overflow-x:auto;">
                        		<table class="table table-bordered" id="<?php echo $id?>">

  							    <thead>

								   <tr>

									<th>Title</th>

									<!-- <th>TagLine</th> -->

									<th>Company Email</th>
                  <th>Status</th>
									<!-- <th>Coroporate Office</th> -->

									<th>Action</th>

								 </tr>

							   </thead>

								 <tbody>

								  <?php 

		                  			  if(!empty($company_data))

		                  			  {

		                  			    foreach($company_data as $cd)

		                  			    {
										$edit_url=base_url('employer/add_company/'.$cd->id);
										$delete_url=base_url('employer/delete_company/'.$cd->id);
                    $view_url=base_url('employer/view_company/'.$cd->id);
		                  			    	echo '<tr>';

		                  			    	echo '<td>'.$cd->name.'</td>';

		                  			    	//echo '<td>'.$cd->tagline.'</td>';

		                  			    	echo '<td>'.$cd->company_email.'</td>';

                                  if($cd->company_email_verified == 1)
                                  {
                                    echo '<td style="color:green;"><b>Verified</b></td>';
                                  }
                                  else
                                  {
                                    echo '<td style="color:red;">Not Verified</td>';
                                  }
                                  

		                  			    	//echo '<td>'.$cd->regdoffc.'</td>';

		                  			    	echo '<td>'.'<a href="'.$edit_url.'" title="EDIT COMPANY"><i class="fa fa-pencil-square-o"></i></a>&nbsp;<a class="delete" href="'.$delete_url.'" title="DELTE COMPANY" >  <i class="fa fa-trash-o"></i></a>&nbsp;<a href="'.$view_url.'" > <i class="fa fa-eye"></i> </a> '.'</td>';

		                  			    	echo '</tr>';

		                  			    }

		                  			  }

		                  			  else

		                  			  {

		                  			  	echo '<tr><td colspan="5">NO DATA FOUND</td></tr>';

		                  			  }

		                  			  ?>

									

                                </tbody>

					           </table>
                   </div>

                        	</div>

                        </div>

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
       <input type="text" id="pass" onblur="validatepass(this)" />
<br><br>
 <script type="text/javascript">

 $(document).ready(function()
{
  $('.delete').click(function()
  {
    if(confirm("Are You Sure You Want To Delete This ??"))
    {
      window.location="<?php echo $delete_url;?>";
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
});

 function validatepass(v)
 {
    var name=v.value;
    if(!name.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$#@$!%*?&])[A-Za-z\d$#@$!%*?&]{8,16}$/))
    {
        alert('Not ok');
        $('#pass').val('');
    }
 }
function prompt()
{
  alert('Please upgrade service to add more than one company');
  return false;
}
function nopermission()
{
  alert('Please renenw your account for this serivice.');
  return false;
}



</script>                        