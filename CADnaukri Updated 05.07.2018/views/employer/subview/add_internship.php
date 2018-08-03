  


  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->

<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> -->


<head>


<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="<?php echo base_url('assets/css/editor1.css')?>" type="text/css" rel="stylesheet"/>

<script src="<?php echo base_url('assets/js/editor1.js')?>"></script>
<script type="text/javascript">
$(document).ready( function() {
$("#txtEditor").Editor();                    
});
</script>


  <style type="text/css">
                      
                      @media screen and (max-width: 768px){
                      .input_date{width: 100%;}
                      }
                    </style>

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



<style>
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

 .error

 {

 color:#FF0000;

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


	<style type="text/css">
       #exe {
         box-sizing: content-box;    
         width: 768px;
         height: 120px;
         /*padding: 30px;    */
        /*border: 10px solid blue;*/
           }
   </style>


 <div class="main-container">

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

								    <a href="<?php echo base_url('employer/dashboard')?>" >

								    <img src="<?php echo $profile_image_url?>" id="exe" alt="" /></a>

								   </li>

                                    <!-- <li class="profile-edit">

                                    <a  data-toggle="modal" data-target="#myModal">

                                      <?php //echo $add_or_edit?> Photo

                                     </a>

                                    

                                    </li> -->

                                </ul>

							

                   				<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>                                  
                                    <li><a href="<?php echo base_url('employer/profile') ?>" >Profile</a></li>
                                    <li><a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/post_ad') ?>" class="active">Post your Ad</a></li>
                                    <li><a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a></li>
                                    <!-- <li><a href="<?php //echo base_url('employer/application_recieved') ?>">Application Received</a></li> -->
                                    <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a>                         
                                          <a href="#">Profile</a>
                                          <a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a>
                                          <a href="<?php echo base_url('employer/post_ad') ?>" class="active">Post your Ad</a>
                                          <a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a>
                                          <a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a>
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
                        .xcolleft_height{height: 550px;overflow-x: hidden;overflow-y: scroll;}
                    .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
                     .aaa{float:right;margin-top: -40px;margin-right: 10px;background-color:#0055A5;color:#fff; }
                     .aaa:hover{background-color:#FF7900;}
                        @media screen and (max-width: 768px){
                          .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
                         .aaa{float:right;margin-top: -35px;margin-left: 20px;} 
                        .xcolleft_height{height: auto;overflow-x: hidden;overflow-y: hidden;}

                         }                       
                  </style>
                    

<h3 class="fixed_top"><?=$this->uri->segment("3")==""?'Add':'Update';?> Internship</h3>
<?php $back_url=base_url('employer/internship_details');?>
                  			  	<a  href="<?php echo base_url();?>employer/post_ad" class="btn btn-default aaa">
                  			  		BACK</a>
                            <div class="col-xs-12 col-md-9" style="margin-left: -10px;">

                  			<div class="xcolleft xcolleft_height" style="">

                  			<!-- <div class="row">

                  			  <div class="col-md-8"><h3><?=$this->uri->segment("3")==""?'ADD':'UPDATE';?> Internship</h3></div>

                  			  <div class="col-md-4"  style="margin-top: 5%;">
								<?php $back_url=base_url('employer/dashboard');?>
                  			  	<a  href="<?=$back_url?>" class="button">
                  			  		BACK</a>

                  			  </div>

                  			</div> -->

                  			<?php 	if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert" style=" color: #4F8A10;

   										 background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>

								<?php } ?>

								<form role="form" method="post" action="">
<!--test-->
<style type="text/css">
   .lable_stl{border: 0px solid red; text-align: left;font-size: 16px;}
   .row_margin{margin-top:10px;}
   @media screen and(max-width: 768px){
    div.row_margin{margin-top: -20px;border:1px solid red;}
   }
</style>
                <div class="row row_margin" style="">
										<div class="form-group" style="padding: 0 20px;">
  											<label for="tile" class="col-sm-4 lable_stl">Title:<span class="error">*</span>
                        </label> 
                        <div class="col-sm-8"  style="border: 0px solid red;">
												  <input type="text" class="form-control " id="title" name="title" value="<?php echo $intership->title?>" placeholder="Enter a title for intership" required>
                        </div>
											    <div class="error"></div>
										</div>
                  </div>
<!--test-->                  

                <div class="row row_margin" style="">
  										<div class="form-group" style="padding: 0 20px;">

											<label for="last_name" class="col-sm-4 lable_stl">Company</label>
                      <div class="col-sm-8"  style="border: 0px solid red;">
										  <select name="companyId" id="companyId"  class="form-control">
											<?php 

											if(!empty($company_data))

											{

												foreach($company_data  as $cd)

												{

													$is_selected=$cd->id==$intership->companyId?'selected':'';

													echo '<option value="'.$cd->id.'"'.$is_selected.'>'.$cd->name.'</option>';

												}

												  

												  

											}

											?>

											</select>
                    </div>

											<div class="error"></div>
										</div>
									</div>
<!-- <div id="txtEditor"></div> -->

                <div class="row " style="margin-top: 25px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="location" class="col-sm-4 lable_stl">Internship Description:<span class="error">*</span></label>
                      <div class="col-sm-8"  style="border: 0px solid red;" >

										<textarea rows='1' class="form-control " name="description" id="txtEditor"><?php echo $intership->description?></textarea>
                  </div>
										<div class="error" style="color: #FF0000"></div>

									</div>
                </div>


                <div class="row " style="margin-top: 25px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="location" class="col-sm-4 lable_stl">Eligibility:<span

											class="error">*</span></label>
                      <div class="col-sm-8"  style="border: 0px solid red;">

										<textarea rows='1' class="form-control" placeholder="Ex. Final Yr Mechanical Engneering" name="whocanapply"><?php echo $intership->whocanapply?></textarea>
                  </div>
										<div class="error" style="color: #FF0000"></div>

									</div>
                </div>


                <div class="row " style="margin-top: 25px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="location" class="col-sm-4 lable_stl">Location:<span

											class="error">*</span></label> <!-- <input type="text"

											class="form-control " id="location" name="location"

											value="<?php echo $intership->location?>"

											placeholder="Intership Location" 

											required> -->
                      <div class="col-sm-8"  style="border: 0px solid red;">

											<select  name="location" required="">
						                        <?php if( $intership->location){?><option value="<?php echo $intership->location;?>"><?php echo $intership->location;?></option><?php }?>
						                      <?php foreach($cities  as $cd)

						                        {

						                          //$is_selected=$cd->id==$job->companyId?'selected':'';

						                          echo '<option value="'.$cd->city_name.'">'.$cd->city_name.'</option>';

						                        } ?>
						                    </select>
                      </div>


										<!-- <div class="info" style="font:6px;color:red;">Add multiple locations separeted by comma.</div> -->

										<div class="error" style="color: #FF0000"></div>

									</div>
                </div>



                <div class="row " style="margin-top: 25px;">
									

										<div class="form-group" style="padding: 0 20px;">

											<label for="last_name" class="col-sm-4 lable_stl">Skills: <small style="color:red;font-style: italic;"><br> (Use Ctrl to add upto 3 skills.)</small> </label>

                      <div class="col-sm-8"  style="border: 0px solid red;">

											<select id="skills" multiple="multiple" size="5" name="skills[]" class="input-xlarge  form-control span4">
                   
                            <?php 
                                //  print_r($job_skills);
                                  if($skills)
                                  {
                                    foreach($skills as $s)
                                    {
                                      $is_selected='';
                                      if(in_array($s->id,$job_skills))
                                      {
                                        $is_selected='selected';
                                      }
                                      echo '<option value="'.$s->id.'" '.$is_selected.'>'.$s->name.'</option>';
                                  }
                                  }
                            ?>
                       
                                 </select>
                               </div>

										</div>
									</div>

                <div class="row " style="margin-top: 25px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="location" class="col-sm-4 lable_stl">No.of

											Internships available:<span class="error">*</span>

										</label> 

										<!-- <input type="number" class="form-control "id="noofintership" name="noofintership" 

										value="<?php echo $intership->noofintership?>" placeholder="Number of Internships available:"

										required onkeypress="return isNumber(event)"> -->
                      <div class="col-sm-8"  style="border: 0px solid red;">

										<select name="noofintership" required="">
				                         	<?php if($intership->noofintership == '10')
				                               {
				                                  $view='Upto 10';
				                               }
				                               else if($intership->noofintership == '10+')
				                               {
				                                  $view='Above 10';
				                               }
				                               else
				                               {
				                                  $view=$intership->noofintership;
				                               }?>
				                              <?php if( $intership->noofintership){?><option value="<?php echo $intership->noofintership;?>"><?php echo $view;?></option><?php }?>
				                              <option value="1-2">1-2</option>
				                              <option value="2-4">2-4</option>
				                              <option value="4-8">4-8</option>
				                              <option value="10">Upto 10</option>
				                              <option value="10+">Above 10</option>
				                              
				                            </select>
                                  </div>

										<div class="error" style="color: #FF0000"></div>
                  </div>
									</div>

                <div class="row " style="margin-top: 25px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="Start Date" class="col-sm-4 lable_stl">Start Date:<span

											class="error">*</span>

										</label>
                     

										<div class='input-group date col-sm-8 input_date' style="padding: 0 15px;">
											<?php $val1 = date_format(date_create( $intership->startDate), 'm/d/Y');?>
											<input type='text' class="form-control" name="startDate"

												id='startDate' placeholder="Pick The Start  Date"

												value="<?php echo $val1?>" />
                      </div>

										
									</div>
                </div>

                <div class="row " style="margin-top: 10px;">

									<div class="form-group" style="padding: 0 20px;">

										<label for="number" class="col-sm-4 lable_stl">Duration:<span

											class="error">*</span>
                      <small style="color:red;font-style: italic;"><br>(Enter course duration in Month.)</small>
                    </label> 
                      <div class="col-sm-8"  style="border: 0px solid red;">   

								   <input type="text" class="form-control " id="duration" name="duration"

											value="<?php echo $intership->duration?>"

											placeholder="Duration" required>
                     <!-- <div class="info"><small style="color:red;font-style: italic;margin-top: -5px;">(Enter The Course Duration in Month.)</small></div> -->
                    </div>

										<!-- <div class="info" style="font:6px">Enter The Course Duration in Month</div> -->

									</div>
                </div>

                <div class="row " style="margin-top: 10px;">


									<div class="form-group" style="padding: 0 20px;">

										<label for="number" class="col-sm-4 lable_stl">Stipend:<span

											class="error">*</span></label> 

											<!-- <input type="text" class="form-control " id="stipend" name="stipend" 

											value="<?php echo $intership->stipend?>" placeholder="stipend" required> -->
                      <div class="col-sm-8"  style="border: 0px solid red;">   

											 <select name="stipend" required="">
											 <?php if($intership->stipend == '20000')
					                               {
					                                  $view='Upto 20000';
					                               }
					                               else if($intership->stipend == '20000+')
					                               {
					                                  $view='Above 20000';
					                               }
					                               else
					                               {
					                                  $view=$intership->stipend;
					                               }?>
											 <?php if( $intership->stipend){?><option value="<?php echo $intership->stipend;?>"><?php echo $view;?></option><?php }?>
				                              <option value="3000-5000">3000 - 5000</option>
				                              <option value="5000-8000">5000 - 8000</option>
				                              <option value="8000-12000">8000 - 12000</option>
				                              <option value="20000">Upto 20000</option>
				                              <option value="20000+">Above 20000</option>
				                             </select>
                    </div>

									</div>

                </div>

                <div class="row " style="margin-top: 25px;">


									<div class="form-group" style="padding: 0 20px;">

										<label for="number" class="col-sm-4 lable_stl">Application

											Deadline:<span class="error">*</span>

										</label>
                    
										<div class='input-group date col-sm-8 input_date' style="padding: 0 15px;">
										<?php $val = date_format(date_create($intership->endDate), 'm/d/Y');?>
											<input type='text' class="form-control" name="endDate"

												id='endDate' value="<?php echo $val?>"

												placeholder="Pick The Application Last Date" />

											</span>
                    </div>
										</div>

									</div>

									<div class="form-group col-md-12 col-xs-12" align="center">

										<button class="button" type="submit">Save</button>

									</div>



								</form>

							</div>

                  	</div>

                 </div>

               </div>

             </div>

           </div>

         </section>

     </section>

 </div><br><br>
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

$(function(){


    $("#startDate").datepicker({

        numberOfMonths: 1,
		minDate:0,
        onSelect: function (selected) {

            var dt = new Date(selected);

            dt.setDate(dt.getDate() + 1);

            $("#endDate").datepicker("option", "minDate", dt);

        }

    });

    $("#endDate").datepicker({

        numberOfMonths: 1,

        onSelect: function (selected) {

            var dt = new Date(selected);

            dt.setDate(dt.getDate() - 1);

            $("#startDate").datepicker("option", "maxDate", dt);

        }

    });
    $("#skills").multiselect({
    header: "Choose options below",
       hide: ["explode", 1000],
       selectedList: 10 // 0-based index
   }); 

});
function isNumber(evt) {
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					return false;
				}
				return true;
			}
</script>     
  