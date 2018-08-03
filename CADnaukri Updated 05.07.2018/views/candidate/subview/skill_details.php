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
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibri;color:;}

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
/*div.line{
	 
    border: 0px solid red;margin-top: -40px;padding: 2px;background-color:#FF7900;

}*/
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
<!-- border: 0px solid red;margin-top: -40px;padding: 2px;background-color:#FF7900; -->
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
                        <div class="col-md-3 col-xs-12">
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
						         	<img src="<?php echo $profile_image_url?>" alt="" class="img1" />
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

                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>" >Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Professional Details</a></li>

                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>" class="active">Skill Details</a></li>
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
                                          
                                          <a href="<?php echo base_url('candidate/profile/skill_details') ?>" class="active">Skill Details</a>
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
<style type="text/css">
                  .desk_mov{}
                  @media screen and (max-width: 768px){
                    .desk_mov{text-align: center;margin-left: none;}
                  }
                </style>                        <!-- <div class="col-xs-9"> -->

<style type="text/css">
  .align_text{text-align: right;}
  @media screen and (max-width: 768px){
    .align_text{text-align: left;}
  }
</style>
                  			<div class="xcolleft">

                        	<h1 class="desk_mov"><b>Skill Details</b></h1>           

                        	<?php

                        	//echo '<pre>';print_r($candidate_industry_type);exit;

                        	$new_skills_array=array();

                            if($is_edit_skills==TRUE) 

                            {

                            	foreach($candidate_skill_detail as $csk)

                            	{

                            		array_push($new_skills_array, $csk->key_id);

                            	

                            	}

                            }

                            $new_functioanl_array=array();

                            if($is_edit_functional==TRUE)

                            {

                            	foreach($candidate_functional_area as $cfa)

                            	{

                            		array_push($new_functioanl_array, $cfa->functional_area_id);

                            		 

                            	}

                            }

                            $new_industry_array=array();

                            if($is_edit_industry==TRUE)

                            {

                            	foreach($candidate_industry_type as $cit)

                            	{

                            		array_push($new_industry_array, $cit->industry_type_id);

                            		 

                            	}

                            }
              	

                        		if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

								<?php } ?>
                  

<!--test-->

                            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            	<div class="row">
                            	<div class="col-md-3 col-md-offset-1 col-xs-12 align_text">
                              <label for="textfield">Key Skills:</label>
                          </div>
                          <div class="col-md-7 col-xs-12">
                              <select multiple="multiple" class="" name="keyskill[]">

                              		<option value='' disabled>Select skills</option>

                                <?php foreach($skills as $s)

                                {

                                	$is_selected=(in_array($s->id, $new_skills_array))?'selected':'';

                                	

                                 echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';

                                }?>

	                          </select>
	                      </div>
	                      </div>

	                      <div class="row" style="margin-top: 20px;">
                            	<div class="col-md-3 col-md-offset-1 col-xs-12 align_text">
	                          		<label for="textfield">Industry Type:</label>
	                      		</div>
	                      		<div class="col-md-7 col-xs-12">	
                              		<select multiple="multiple" name="industrytype[]">

                              			<option value='' disabled> Select Industry</option>

			                                <?php foreach($industry_type as $s)

			                                {

			                                	$is_selected=(in_array($s->id, $new_industry_array))?'selected':'';

			                                   echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';

			                                }?>

	                          		</select>
	                          	</div>
	                     	</div>

	                     	<div class="row" style="margin-top: 20px;">
                            	<div class="col-md-3 col-md-offset-1 col-xs-12 align_text">
	                          		<label for="textfield">Preferred Position:</label>
	                          	</div>
	                          	<div class="col-md-7 col-xs-12">
                              		<select multiple="multiple" name="functionalarea[]">

                              			<option value='' disabled>Select Position	</option>

			                                <?php foreach($functional_area as $s)

			                                {

			                               	  $is_selected=(in_array($s->id, $new_functioanl_array))?'selected':'';

			                                   echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';

			                                }?>

	                          		</select>
	                          	</div>
	                          </div>
	                         

							

							<!-- <div class="col-md-12 " style="margin-top:30px" align="center"> 

								<input type="button" name="button" id="button" value="Reset" class="btn reset" />

                              <input type="submit" name="button" id="button" value="Save" class="btn submit" />					

							</div> -->

							<div class="col-md-12 col-xs-12" style="margin-top:10px">
                             <center>    
                              <button type="reset" name="button" id="button" value="Reset" class=" next">Reset</button>     
                              <button type="submit" name="button" id="button" value="Save" class=" cancle" />Save</button>
                            </center>
                        </div>

						</form>

<!--test-->
<style type="text/css">
	input.submit{background-color: #0055A5;color:#fff;padding:0px 20px;height: 30px; border-radius: 2px;}
	input.submit:hover{background-color: #FF7900;color:#fff;}
	input.reset{background-color: #FF7900;color:#fff;padding:0px 18px;height: 30px; border-radius: 2px;}
	input.reset:hover{background-color: #0055A5;color:#fff;}


</style>
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
</div><br><br>
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
	$('select[multiple]').multiselect({



		// text to use in dummy input

		//placeholder   : 'Select',    



		// how many columns should be use to show options

		columns       : 1,  



		// include option search box   

		search        : false,    



		// search filter options

		searchOptions : {

		  default      : 'Search', // search input placeholder text

		  showOptGroups: false     // show option group titles if no options remaining

		},     



		// add select all option

		selectAll     : false, 



		// select entire optgroup   

		selectGroup   : false,  



		// minimum height of option overlay

		minHeight     : null,   



		// maximum height of option overlay

		maxHeight     : null,  



		// display the checkbox to the user

		showCheckbox  : true,  



		// options for jquery.actual

		jqActualOpts  : {},    



		// maximum width of option overlay (or selector)

		maxWidth      : null, 



		// minimum number of items that can be selected

		minSelect     : false, 



		// maximum number of items that can be selected

		maxSelect     : false, 



});

	function show_hide_experience(checked_value)

	{

		//alert(checked_value);

		if(checked_value == 0)

		{

			$("#experience_summery").css("display", "none");

			

		}

		if(checked_value == 2)

		{

			$("#experience_summery").css("display", "block");

			

		}

		

	}

</script>

<script type="text/javascript">



var rowCount2 = 1;



function addMoreRows3(frm) {



rowCount2 ++;



var recRow2 = 



'<div id="rowCount2'+rowCount2+'">  <div class="row"><div class="col-md-2"><label for="Company">Company</label><input type="text" class="form-control" name="company[]"></div> <div class="col-md-2"><label for="Designation" >Designation</label><input type="text" class="form-control" name="designation[]"></div><div class="col-md-2"><label for="From" >From </label><select name="joining_year[]"  class="form-control"><?php for($i=1960;$i<=Date('Y');$i++){echo '<option value="'.$i.'">'.$i.'</option>'; }?></select></div><div class="col-md-2"><label for="To" >To </label><select name="leaving_year[]"  class="form-control"><?php for($i=1960;$i<=Date('Y');$i++){echo '<option value="'.$i.'">'.$i.'</option>'; }?></select></div><div class="col-md-2"><label for="Current" >CTC</label><input type="text" class="form-control" name="ctc[]"><h6>Rs(per month)</h6></div><div class="col-md-2" style="padding-top: 22px;"><a href=javascript:void(0);" onclick="removeRow2('+rowCount2+');"><i class="fa fa-minus-circle"></i>Remove</a></div></div>'

jQuery('#addedRows3').append(recRow2);



}







function removeRow2(removeNum) {



jQuery('#rowCount2'+removeNum).remove();



}



</script>





<script type="text/javascript">



var rowCount1 = 1;



function addMoreRows2(frm) {

	 var addDiv = $('#addedRows2');

		rowCount1 ++;

$('<div id="rowCount1'+rowCount1+'"><div class="row"><div class="form-group"><div class="col-sm-3"><label>Project Detail<textarea class="form-control"  name="projectdetail[]"  style="min-height: 7px"></textarea></div><div class="col-sm-3"><label>Client Name</label><input type="text" class="form-control" name="cname[]" placeholder="Client Name"></div><div class="col-sm-2"><label>Year Of Execution</label><select name="yexe[]" id="yexe" class="form-control"><option value="">Year</option><?php for($i=1960;$i<=Date('Y');$i++){echo '<option value="'.$i.'">'.$i.'</option>';}?></select></div><div class="col-sm-2"><label>Client location</label><textarea class="form-control" rows="2" cols="50" name="Clocation[]" style="min-height: 7px"></textarea></div><div class="col-sm-2" style="padding-top: 22px;"><a href="javascript:void(0);" onclick="removeRow1('+rowCount1+');"><i class="fa fa-minus-circle"></i>Remove</span></a></div></div></div></div>')

.appendTo(addDiv);

//var recRow1 = 

//'<div id="rowCount1'+rowCount1+'"><div class="row"><div class="col-md-12"><div class="form-group"><div class="col-sm-3"><label>Project Detail</label><textarea class="form-control"  name="projectdetail[]"  style="min-height: 7px"></textarea></div><div class="col-sm-3"><label>Client Name</label><input type="text" class="form-control" name="cname[]" placeholder="Client Name"></div><div class="col-sm-2"><label>Year Of Execution</label><select name="yexe[]" id="yexe" class="form-control"><option value=''>Year</option><?php for($i=1960;$i<=Date('Y');$i++){echo '<option value="'.$i.'">'.$i.'</option>';}?></select></div><div class="col-sm-2"><label>Client location</label><textarea class="form-control" rows="2" cols="50" name="Clocation[]" style="min-height: 7px"></textarea></div><div class="col-sm-2" style="padding-top: 22px;"><a href=javascript:void(0);" onclick="removeRow1('+rowCount1+');"><i class="fa fa-plus-minus fa-lg" title="Add"></i>Remove </a></div></div></div></div>'; 

//jQuery('#addedRows2').append(recRow1);



}







function removeRow1(removeNum) {



jQuery('#rowCount1'+removeNum).remove();



}



</script>