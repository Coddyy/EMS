<?php  //include 'style.php' ?>
<!-- <div class="container">
<div class="xcolright"> -->
	<!--test-->

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
	<div class="main-container">

        <section class="wht-bg">

        

        <section class="section">

            	<div class="container">

                <div class="container-inner line-sepa-bottom">

  		<div class="row">
                      <div class="col-md-3 col-xs-12">
                       <!-- <div class="col-xs-3"> -->
                  			<div class="xcolright">
                            	<ul class="side-profile">
            <?php
     //        		if($this->Candidate_M->isLoggedin() == TRUE)
					// {
     //        			$candidate_id=$this->session->userdata('candidate_id');
     //        		}
            		//echo $candidate_id;
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

<style type="text/css">
.img1{
 height: 220px;width: 180px;
}
  @media screen and (max-width: 786px){
    .img1{
      width: 550px;
    }
  }
</style>  
						         <li class="profile-photo">
						         <a href="<?php echo base_url('candidate/dashboard')?>" >
						         	<img src="<?php echo $profile_image_url?>" alt="" class="img1" />
						         </a>
						         </li>
                                    <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?> <span class="glyphicon glyphicon-camera" style="font-size: 30px;"></span>
                                     </a></li>
                                </ul>
							
                   				<ul class="sidebar">
                   				<li><a href="<?php echo base_url('candidate/dashboard') ?>" >Dashboard</a></li>
                                	<li><a href="<?php echo base_url('candidate/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Experience Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/account_setting') ?>" class="active">Account Setting</a></li>
                                    <li><a href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>
                                </ul>
                    		</div>
                    	</div>
	<!--test-->
<!-- <div class="row"> -->
	<div class="col-md-9 col-xs-12">
                        <!-- <div class="col-xs-9"> -->
                  			<div class="xcolleft">

          		<?php if($this->session->flashdata('success')){ ?>
			        <div class="alert alert-success">
			            <a href="#" class="close" data-dismiss="alert">&times;</a>
			            <?php echo $this->session->flashdata('success'); ?>
			        </div>
			    <?php }else if($this->session->flashdata('error')){  ?>
			        <div class="alert alert-danger">
			            <a href="#" class="close" data-dismiss="alert">&times;</a>
			            <?php echo $this->session->flashdata('error'); ?>
			        </div>
			    <?php } ?>
    
    <h1><b>Account Details</b></h1>
            
 				     	
 						<!-- <label for="visiblity">Visibility : </label>
 						<div class="row" style="margin-top:4%">
 							<div class="col-md-6  col-xs-6 ">
 							<input type="radio" name="type" value="0" required onchange="">Private
 							</div>	
							<div class="col-md-6  col-xs-6 ">	
							<input type="radio" name="type" value="1" required onchange="" >Public
							</div>
						</div><br><br><br>
						
						<label for="adduser">Add User Name : </label>
						<div class="col-md-6 col-sm-6 col-xs-6">
						    <input type="text" name="add" value="">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
						    <input type="button" name="button" value="Add" class="button">
						</div><br><br><br><br><br><br><br><br> -->
						<div class="row">
						<!-- <div class="col-md-1 col-xs-1"></div> -->
						<div class="col-md-6 col-sm-6 col-xs-6">
							<label for="adduser">Change Password : </label></div>
							<div class="col-md-6 col-sm-6 col-xs-6">
						    <button type="button" class="button" data-toggle="modal" data-target="#myModal" style="">Change Password</button>
						    </div>
						    
						    
						    <!--<input type="submit" name="button" value="Change Passpord" class="">-->
						</div><!--End row-->
						<!--Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                
                           


						<!-- Modal content  -->
						
						<div class="modal-content">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;
						        </button>
						        <h4 class="modal-title">Change Your Password</h4>
						    </div>
						    <form action="" method="post" name="form1" id="form1">
						    <div class="modal-body">
						        New Password :<input type="text" name="password" required="" />
						        Confirm Password :<input type="text" name="cpassword" required="" />
						    </div>
						    <div class="modal-footer">
						        <!-- <button type="submit" class="btn btn-default" data-dismiss="modal">Confirm</button> -->
						        <input type="submit" class="btn btn-default" name="change_pasword" value="Save" />
						    </div>
						    </form>
						</div>
						
						 </div>
                        </div>
						
						

					</div>
				</div>
			

                           
                          
                           
						
						 
						
						
						
						
						

						
						
</div>
</div>
</div>
		
		
		<script type="text/javascript">
function addInput(f) {
var aInputs=f.getElementsByTagName('input');
for(var i=0; i<aInputs.length; i++) {
    if(aInputs[i].className=='hide') {
        aInputs[i].className='';
        break;
        }
    }
}
</script>

<style type="text/css">
input {display:block;}
.hide {display:none;} 
</style>

<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        $('#myBtn').click(function(){-->
<!--            $('#myModal').modal();-->
<!--        });-->
<!--    });-->
<!--</script>-->

											

										

									
	

									
											