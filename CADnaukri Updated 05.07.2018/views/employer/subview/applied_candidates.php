<title>Employer | Applied Candidates</title>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


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
<div id="resultajax"></div>
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

								<style type="text/css">
  #exe {
    box-sizing: content-box;    
    width: 768px;
    height: 120px;
    /*padding: 30px;    */
    /*border: 10px solid blue;*/
}
</style>

								    <li class="profile-photo">

								    <a href="<?php echo base_url('employer/dashboard')?>" >

								    <img src="<?php echo $profile_image_url?>" id="exe" alt="" /></a>

								   </li>

                                    <!-- <li class="profile-edit">

                                    <a  data-toggle="modal" data-target="#myModal">

                                      <?php echo $add_or_edit?> Photo

                                     </a>

                                    

                                    </li> -->

                                </ul>

							

<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a></li>
                                    <li><a href="<?php echo base_url('employer/job_details') ?>">Job Posts</a></li>
                                    <li><a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a></li>
                                    <li><a href="<?php echo base_url('employer/application_recieved') ?>"  class="active">Application Received</a></li>
                                    <li><a href="<?php echo base_url('employer/update_password');?>">Update Password</a></li>
                                    <li><a href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url('employer/dashboard'); ?>">Dashboard</a>
                                          <a href="#">Profile</a>
                                          <a href="<?php echo base_url('employer/company_profile') ?>">Company Details</a>
                                          <a href="<?php echo base_url('employer/job_details') ?>" >Job Posts</a>
                                          <a href="<?php echo base_url('employer/internship_details') ?>">Internship Posts</a>
                                          <a href="<?php echo base_url('employer/application_recieved') ?>"  class="active">Application Received</a>
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
<h3 class="fixed_top">Application  Details</h3><br>
<?php $back_url=base_url('employer/application_recieved');?>
                            <a  href="<?=$back_url?>" class="button aaa">
                              BACK</a>

    <style type="text/css">
      .fixed_top{border:0px solid red;padding-left: 265px;margin-top: -5px;width:50%;}
        .aaa{float:right;margin-top: -50px;margin-right: 10px;}
      @media screen and (max-width: 768px){
      .fixed_top{border:0px solid red;padding-left: 20px;margin-top: 0px;width:100%;}
      .aaa{float:left;margin-top: 0px;margin-left: 20px;}                        
    </style>

                        <div class="col-xs-12 col-md-9" style="height: 700px; overflow: scroll;">

                  			<div class="xcolleft">

                        		<!-- <div class="col-md-8"><h3>Application  Details</h3></div> -->

                        		<?php 

                        		if(!empty($job_apply))

                        		{

                        			$id="datatable";

                        		}

                        		else 

                        		{

                        			$id="simple";

                        		}

                        		?>

                  			     <table id="<?php echo $id?>" class="table table-bordered">

									<thead>

										<tr>

										   <th>Applicant Name</th>
										   <th>Experience</th>
											<!-- <th>Email</th> -->
											<th>Location</th>
											<!-- <th>Mobile</th> -->

											<!-- <th>Applicant Name</th> -->
											<th>Download CV</th>
											

										</tr>

								</thead>

								<tbody>
								<!-- <form action="" method="post"> --><!--Use For Ajax -->
								<?php 

								 if($get_cand != false)

								 {

									//$sl_no=0;

									foreach($get_cand as $ca)

								 	{
										//$candidate=$this->Candidate_M->get_new($ja->candidate_id);
								 		echo '<tr>';

								 		//echo '<td>'.++$sl_no.'</td>';

								 		echo '<td>'.$ca->name .'</td>';
								 		echo '<td>'.$ca->experience .'</td>';
										//echo '<td>'.$ca->email .'</td>';
										echo '<td>'.$ca->location .'</td>';
										//echo '<td>'.$ca->mobile .'</td>';

								 		// echo "<td><a href='http://cadnaukri.com/employer/get_applied_candidate'><button class='btn btn-primary'>View</button></a></td>";

										//echo '<td>'.$candidate->fName .' '. $candidate->lName.'</td>';

									//	echo '<td>'.$candidate->candidate_id .'<td>'; (not in use)
										

										if($ca->cvpath != '')
										{
											$job_id=$this->uri->segment(3);
											$employer_id=$this->session->userdata('emp_id');
											$limit_exceeded=$this->Employee_M->check_cv_download_limit($employer_id);
                      $service_active=$this->Employee_M->check_service_active($employer_id);
                      //echo $service_active;exit();
											if($service_active == "1")
											{
												$cv_url=base_url($ca->cvpath);
												// echo '<td><a onclick="getAvl()" data-value="'.$job_id.'" href="'.$cv_url.'" >Download</a></td>'; 
									?>
											<td>
											<!-- <button onclick="not_avl()" class="btn btn-primary">Download</button> -->
												<form action="<?php echo base_url();?>employer/cv_download_page/<?php echo $job_id; ?>" method="post">
													<input type="submit" value="Download"></input>
													<input type="hidden" value="<?php echo $cv_url; ?>" name="cv_url"></input>
													<input type="hidden" value="<?php echo $job_id; ?>" name="job_id"></input>
												</form>
											</td>
									<?php	}
											else
											{ 
												echo '<td><input type="submit" onclick="alert_this()" value="Download"></input></td>'; 
											}
										}
										else
										{
											echo '<td>'.'Not available'.'</td>';
										} 
								 		 echo '</tr>';


								 	}

									

								 }

							 else 

								 {

									echo '<tr><td colspan="10">NO APPLICANTS FOUND</td></tr>';

								}

								?>

					 		<input type="hidden" id="this_job_id" name="job_id" value="<?php echo $this->uri->segment(3); ?>" />
							<!-- </form> --> <!--Use For Ajax -->
							   </tbody>

					       </table>

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

			<label for="tile" class="control-label col-sm-3">Select Your Image </label>

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

// function update_cv_downloaded()
// {
// 	//alert("Hi");
// 	<?php 
// 	$emp_id=$this->session->userdata('emp_id');
// 	//$job_id=$this->uri->segment(3);
// 	$this->Employee_M->update_downloaded($emp_id);

// 	?>
	
// }


// function getAvl()
// {
// 	var val=<?php $this->session->userdata('emp_id'); ?>
//     $.ajax({
//     type: "POST",
//     url: "<?php echo base_url();?>employer/update_cv_downloaded",
//     data:{emp_id:val},
//     success: function(data){
//         $("#resultajax").html(data);
//     }
//     });
// }
// function getAvl()
// {
// 	var id=<?php echo $this->uri->segment(3); ?>
// 	//var id = $(this).data('value');
//     $.ajax({
//     type: "POST",
//     url: "<?php echo base_url();?>employer/update_cv_downloaded",
//     data:{job_id:id},
//     success: function(data){
//         $("#resultajax").html(data);
//     }
//     });
// }

function not_avl()
{
	alert("You may not download CVs due to some technical upgradation work!");
}
function alert_this()
{
	alert("To download CVs please you need to update your account");
	window.location="<?php echo base_url();?>services/all_services";
}
$(document).ready(function() {
	$('#datatable').DataTable();
} );



</script>         

                         