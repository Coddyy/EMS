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
<!--Start Top bar-->
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width: 100px; ;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width: 100px; ;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100px;}
    .next{width: 100px;}
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

            	<div class="container" style="border-radius: 4px;border:1px solid #cccccc;">

                <div class="container-inner">

                		<div class="row">
                		 <div class="col-md-3 col-xs-12" >
                         <!-- <div class="col-xs-3"> -->
                  			<div class="xcolright" style=" box-shadow: 5px 5px 0px 0px #CCCCCC;">
                            	<ul class="side-profile">
                            	<?php
                            	 if($candidate->imagePath != '')
                            	{
									$profile_image_url=$candidate->imagePath;
									$add_or_edit='';
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
									$add_or_edit='Add';
								}
								?>

<style type="text/css">
/*.img1{
 height: 100px;width: 180px;
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
						         	<img src="<?php echo $profile_image_url?>" alt="" class="img1"  />
						         </a>
						         </li>
                                    <!-- <li class="profile-edit"> 
                                    <a  data-toggle="modal" data-target="#myModal">
                                      <?php echo $add_or_edit?><span class="glyphicon glyphicon-camera" style="font-size: 18px;"></span>
                                     </a></li> -->
                                </ul>
							
<!--Test Collapse-->            
                            
                                <ul class="sidebar desktop_view">
                                    <li><a href="<?php echo base_url();?>candidate/dashboard">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/personal_details') ?>">Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>" class="active">Contact Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>" >Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>" >Skill Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/account_setting') ?>">Update Password</a></li>
                                    
                                    <li><a href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>
                                </ul>

                                <div class="mobile_view">
                                      <div class="topnav" id="Topnav">
                                          <a href="<?php echo base_url();?>candidate/dashboard">Dashboard</a>
                                          <a href="<?php echo base_url('candidate/profile/personal_details') ?>">Personal Details</a>
                                          <a href="<?php echo base_url('candidate/profile/contact_details') ?>" class="active">Contact Details</a>

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
                    	<div class="col-md-9 col-xs-12">
                       <!--  <div class="col-xs-9"> -->
<style type="text/css">
                  .desk_mov{}
                  @media screen and (max-width: 768px){
                    .desk_mov{text-align: center;margin-left: none;}
                  }
                </style>
                  			<div class="xcolleft">

	                        	<h1 class="desk_mov"><b>Contact Details</b></h1>      

	                        <?php if($this->session->flashdata('success'))
	                        {

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

								<?php } ?>              

	                            <form  name="registration" action="<?php echo base_url('candidate/profile/contact_details')?>" method="POST"> 

									<div class="row" style="">
										<div class="col-md-3 col-md-offset-1 col-xs-12 align_text" style="">
                      <label for="exampleInputName2" class="" >Primary Email : <span class="star"></span></label>
                    </div>  
                      <div class="col-md-7 col-xs-12">   
                      <input type="text" name="email" value="<?php echo $candidate->email?>" placeholder="abc@gmail.com" class="form-control" readonly>
                    </div>                    
                  </div>

                  <style type="text/css">
                    a.addon{color: orange;font-size: 16px;font-family: calibury;}
    a.addon:hover{color:#0055A5;}
    /*.plus{color:#FF7900;font-size: 15px;cursor: pointer;}
    .plus:hover{color:#0055A5;}*/
                  </style>

                  <div class="row" style="">
                    <div class="col-md-3 col-md-offset-1 col-xs-12 align_text" style="">
                      <label for="exampleInputName2" >Secondry Email : <span class="star"></span></label>
                    </div>
                    <div class="col-xs-12 col-md-7">  
                       <div class="input-group">       
                      <input type="text" name="secondary_email" value="<?php echo $candidate->secondary_email?>" placeholder="xyz@gmail.com" class="form-control" readonly>
                       <span class="input-group-addon addon" style="">
                            <a href="<?php echo base_url();?>candidate/add_secondary_email" class="addon"> Add/Update</a>
                          </span>
                        </div>
                    </div>
                  </div>
                  


                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-3 col-md-offset-1 col-xs-12 align_text" style="">
                      <label for="exampleInputName2" >Mobile Number : <span class="star"></span></label>  
                    </div>
                    <div class="col-md-7 col-xs-12">
                      <input type="text" name="mobile" value="<?php echo $candidate->mobile?>" placeholder="9833511251" class="form-control">
                    </div>
                  </div>

											<!-- <div class="row" style="">

												<div class="col-md-2">

												<label for="textfield">Default Mobile:</label>

										  		</div>

												<div class="col-md-3" style="">

										 			 <input type="text" name="mobile" value="<?php echo $candidate->mobile?>"  class="form-control"  onkeypress="javascript:return isNumber (event)">

												</div>

										   	 	<div class="col-md-2">

										   			<label for="textfield">Alternative Mobile:</label>

									         	</div>

								     		  <div class="col-md-4" style="">

												  <input type="text" name="alt_mob" value="<?php echo $candidate_details->altMobile?>" class="form-control"  onkeypress="javascript:return isNumber (event)">

								    		  </div>

									   </div> -->
                   

										 <!-- <div class="col-md-2">

										 <label for="textfield">Alternative Email:</label>

										 	

										 </div>

										  <div class="col-md-3" style="">

											  <input type="email" name="alt_email" value="<?php echo $candidate_details->altEmail?>" class="form-control" >

											  <div id="errfne" class="error"></div>

										  </div>

									  	   <div class="col-md-2">

									  	   <label for="textfield">Land Line Number:</label>

										   		

										   </div>

										    <div class="col-md-4" >

										   		<input type="text" name="land" value="<?php echo $candidate_details->landNo?>" class="form-control" onkeypress="javascript:return isNumber (event)">

										   </div> -->

									 <!-- <div class="row" style="">
									    <div class="col-md-6 col-md-offset-6" >
                        <label>
                          <input type="checkbox" name="same_adress"  id="same_adress">Same As Present Address
										  </label>
								      </div>
								  </div> -->


								 <div class="row" style="">
								  <div class="col-md-12">

								     <h6 class="fontsize" style="color: #0055A5;font-size: 18px;text-align: center;"><b>Postal Address</b></h6>

									 <div class="form-horizontal">

									   

										 <div class="form-group">

										 	<label for="inputEmail3" class="col-md-3 col-md-offset-1 control-label align_text" style="" >Address:<span class="star">*</span>

										 	</label>

										 <div class="col-md-7 col-xs-12">

											 <textarea   name="presentaddress" id="presentaddress" required style="overflow:hidden" ><?php echo ($candidate_details->prsAddrr ?  $candidate_details->prsAddrr : 'Not Available')?></textarea>

										 <div id="errfnpl" class="star"></div>

									  </div>

								   </div>

								 <!-- <div class="form-group">

									 <label for="inputPassword3" class="col-sm-12 control-label" style="text-align: left;"  >Country:<span class="star">*</span></label>

									 <div class="col-sm-10">

									 	<select class="country" id="prscountry" name ="prscountry" class="form-control" required>

									 	<option value=''>Select Country</option>

									 	<?php 

									 	foreach($countris as $c)

									 	{

									 		$is_selected=$candidate_details->prsCountry==$c->country_id?'selected':'';

									 		echo '<option value="'.$c->country_id.'"'.$is_selected. '>'.$c->country_name.'</option>';

									  	}

									 	?>

									 	</select>

									 </div>

								 </div> -->

								 <!-- <div class="form-group">

									 <label for="presentstate" class="col-sm-3 control-label" style="text-align: left;" >State:<span class="star">*</span></label>

									 <div class="col-sm-10">

									  	<select name="presentstate" id="presentstate" class="form-control" required>

									  	<option value=''>Select Country</option>

									 	<?php 

									 	foreach($state as $c)

									 	{

									 		$is_selected=$candidate_details->prsCountry==$c->country_id?'selected':'';

									 		echo '<option value="'.$c->country_id.'"'.$is_selected. '>'.$c->country_name.'</option>';

									  	}

									 	?>
									  	</select>

									 </div>

								 </div> -->

								 <!-- <div class="row"> -->

									 <div class="form-group">

										 <label for="presentstate" class="col-md-3 col-md-offset-1 control-label align_text" style="" >City:<span class="star">*</span></label>

										 <div class="col-md-7 col-xs-12">

										  	<!-- <input type="text" class="form-control" name="presentcity" id="presentcity"

										  		value="<?php echo $candidate_details->prsCity?>" required > -->

                          <select name="presentcity">
                      <?php foreach ($city_list as $key ) 
                            {
                              $selected=($key->city_name == $candidate_details->prsCity ? 'selected' : '');
                              echo '<option value="'.$key->city_name.'" '.$selected.'>'.$key->city_name.'</option>';
                            } 
                      ?>
                      </select>

										 </div>

									 </div>

								<!--  </div> -->

								 

								  <div class="form-group" style="">

									  <label for="exampleInputName2" class="col-md-3 col-md-offset-1 col-xs-12 control-label align_text" style="">Pin/Zip code :<span class="star">*</span></label>

									  <div class="col-md-7 col-xs-12">

									  	<input type="text" class="form-control" name="presentpincode"  id="presentpincode"  

									  	value="<?php echo $candidate_details->prsPin?>" required  onkeypress="javascript:return isNumber (event)">


									  	<div id="errfnpin" class="star"></div>

									  </div>
								  </div>
						    </div>
				      </div>
            </div>
		     </div>
			</div>		 

<style type="text/css">
  .align_text{text-align: right;}
  @media screen and (max-width: 768px){
    .align_text{text-align: left;}
  }
</style>

		<div id="addedRows4"></div>
<div class="col-md-3"></div>
		<div class="col-md-9 col-xs-12" style="margin-top:10px; text-align: center;"> 

				<button type="reset" class="next">Reset</button>

				<button type="submit" class="cancle">Submit</button>
  </form>
  <!-- <a href="<?php echo base_url();?>candidate/add_secondary_email"><button class="btn btn-info">Add Secondary Email</button>
  </a> -->
		</div>

	

</div>

 </div>

 </section>

 </section>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Profile Image</h4>
      </div>
      <div class="modal-body">
       <form  method="post" action="<?php echo base_url('candidate/dashboard')?>" enctype="multipart/form-data" 
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
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
        	//document.getElementById("employee_id").focus();
        	// document.getElementById("errorEmpId").innerHTML="Only Numbers  allowed";
        	 return false;
		}
		return true;
              

       
    }  
$(document).ready(function(){

    $('#prscountry').on('change',function(){

        var countryID = $(this).val();

        console.log(countryID);

        if(countryID){

            $.ajax({

                type:'POST',

                url:'<?php echo base_url('candidate/state_list')?>',

                data:'country_id='+countryID,

                success:function(html){

                    $('#presentstate').html(html);

                  

                }

            }); 

        }else{

            $('#presentstate').html('<option value="">Select state first</option>');

           

        }

    });
     $('#country').on('change',function(){

        var countryID = $(this).val();

        console.log(countryID);

        if(countryID){

            $.ajax({

                type:'POST',

                url:'<?php echo base_url('candidate/state_list')?>',

                data:'country_id='+countryID,

                success:function(html){

                    $('#state').html(html);

                  

                }

            }); 

        }else{

            $('#state').html('<option value="">Select country first</option>');

           

        }

    });


    $('#same_adress').on('change',function(){

        var present_address=$('#presentaddress').val();

        $("#address").val(present_address);

        var presentcity=$('#presentcity').val();

        $("#city").val(presentcity);

        var presentpincode=$('#presentpincode').val();

        $("#pincode").val(presentpincode);

        var present_country=$('#prscountry').val();

    	var present_country=$('#prscountry').val();

    	var presentstate= $("#presentstate").val();

    	 $("#country").val(present_country);

    	 

    	  if(present_country){

              $.ajax({

                  type:'POST',

                  url:'<?php echo base_url('candidate/state_list')?>',

                  data:'country_id='+present_country,

                  success:function(html){

                      $('#state').html(html);

                      $("#state").val(presentstate);

                  }

              }); 

          }else{

              $('#state').html('<option value="">Select state first</option>');

             

          }

          console.log(presentstate);

    	  $("#state").val(presentstate);

    	  

          

     });

    

 });

 

</script>