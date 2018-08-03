<?php include 'new_header.php' ?>

<style type="text/css">
	.conmain
	{
		border:1px solid red;
	}
.sidebar-right{
	border:1px solid #999;  margin: 20px 20px; border-radius: 5px;
}
.sidebar-right-ul{
	list-style-type: none ; margin: 10px 15px;
}
.sidebar-right-ul-li{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 40px;padding: 10px 10px;background-color: #ff7900;
}
 
.sidebar-right-ul-profile{
	border:1px solid #999; font-size: 18px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 170px;
}
.sidebar-right-ul-edit{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 1px; height: 40px;padding: 10px 10px;
}
.sidebar-right-ul-li:hover{
	background-color:#0055a5; 
	font-size: 16px;
}
.sidebar-right-ul-li a:hover{
	color:#fff;
	text-decoration-line: none;
}
.white{
	color:#fff;
}

</style>

<div class="container-fluid">
	<div class="row" style="border:2px solid;height: 120px;"></div>
</div>

<div class="container conmain">
	<div class="row">
		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 conmaincol3">
			<div class="sidebar-right" style="">
				<ul style="" class="sidebar-right-ul">
					<li class="sidebar-right-ul-profile" style="">
						<a href="#">
                                    <img src="http://www.cadnaukri.com/test/assets/images/profile-photo.png" alt="" style="max-width: 100%; max-height: 100%;">
                         </a>
                     </li>
                     <li class="sidebar-right-ul-edit"><a href="#">Add photo</a></li>
					<li class="sidebar-right-ul-li" style="color: #fff;"><a href="#" class="active white" style="color: #fff;">Profile</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Personal Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Educational Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Skill Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Experience Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Contact Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Log Out</a></li>
				</ul>
			</div>
		</div><!--End of conmaincol3-->

		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
			<!--test-->
<h3>Personal Details</h3>   
                        	<?php if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

								<?php } ?>

						<form  name="registration" action="<?php echo base_url('candidate/profile/personal_details')?>"
                            	 method="POST"> 
                            <div class="row">
                            	<div class="col-md-12">
                            		 <label for="textfield">Name</label>
                                   <input type="text" name="firstname" style="height: 40px; width: 100%;" id="firstname" value="<?php echo $candidate->name?>"/>
                            	</div>
                            </div><br>
                             <div class="row"> 
                             		<div class="col-md-6">
                             			<label for="textfield5">Height(in cm)</label><br>
                             		    <input type="text" style="height: 40px; width: 100%;" name="height" id="height" 
                             			value="<?php echo $candidate_details->height?>"
                                   		placeholder="Height" 
                                   		onkeypress="javascript:return isNumberKey_height (event)"/> 
                                   		 <div class="star" id="height_error"></div>
                             		</div>
                             		<div class="col-md-6">
                             		 <label for="textfield6">Weight (In KG)</label>
                             			  <input type="text" style="height: 40px; width: 100%;" name="weight" id="weight" value="<?php echo $candidate_details->weight?>" 
                                  placeholder="Weight" onkeypress="javascript:return isNumberKey (event)"/>
                                  <div class="star" id="weight_error"></div>
                             		</div>
                             	<p>(Provide Your Height in CM Values and is recomended ITI, Diploma and simple Graduate)</p>
                             </div>
                            
                              <div class="row">
                              	 <div class="col-md-6" >
                              	  <label for="textfield4">Date of Birth</label>
                              	 <?php $val1 = date_format(date_create($candidate_details->dob), 'm/d/Y');?>
                                  <input type="text" id="datepicker" name="dob" id="dob" value="<?php echo $val1 ?> " style="cursor:pointer" readonly>
	                             </div>
	                              <div class="col-md-6" >
	                             <label for="textfield6">Marital Status</label>
                              <select name="mstatus" >
	                                 <option value="">Select</option>
		                              <option value="Single"  <?=$candidate_details->martialStatus=='Single'?'selected':''?>>Single</option>
		                              <option value="Married"  <?=$candidate_details->martialStatus=='Married'?'selected':''?>>Married</option>
                              </select>
	                              </div>
                              </div>
                               <div class="row">
                               		<div class="col-md-6" >
                               			<label for="textfield7">Number of Members in Family</label>
                             	     <input type="text" name="member" id="member" value="<?php echo $candidate_details->noofFamily?>" onkeypress="javascript:return isNumberKey_member (event)" />
                             	 <div class="star" id="member_error"></div>
                               		</div>
                               		<div class="col-md-6" >
                               		<label for="textfield8">Gender</label>
	                              <select name='gender'>
	                              	<option value="">Select</option>
		                            <option value="Male" 
		                            <?=$candidate_details->gender=='Male'?'selected':''?>>Male</option>
		                              <option value="Female" <?=$candidate_details->gender=='Female'?'selected':''?>>Female</option>
	                              </select>
                               		</div>
                               	</div>
                             
                              
                             	 
                              
                             <?php
                             $new_language_array=array();
                            if($is_edit_lang==TRUE) 
                            {
                            	foreach($candidate_language as $cl)
                            	{
                            		array_push($new_language_array, $cl->language_id);
                            	
                            	}
                            }?>
                              <label for="select">Language Known</label>
                               <select multiple="multiple" name="language[]">
                            
									<?php foreach($all_language as $s)
									{
										
										$is_selected=(in_array($s->id, $new_language_array))?'selected':'';
										echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';
										
									}
										?>
					   		</select>
                              <div class="col-md-6 col-md-offset-3" style="margin-top:10px">
                              	 <input type="submit" name="button" id="button" value="Reset" class="button" name="personal_details" />
                              <input type="submit" name="button" id="button" value="Save" class="btn btn-primary" />
                              </div>	                             
                             
                            </form>
                            <p>&nbsp;</p>

			<!--test-->
		</div>

		<style type="text/css">
	.sidebar-left{
	border:1px solid #999;  margin: 20px 20px; border-radius: 5px;
}
.sidebar-left-ul{
	list-style-type: none ; margin: 10px 15px;
}
.sidebar-left-ul-li{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 40px;padding: 10px 10px;background-color: #0055a5;
}
 
.sidebar-left-ul-profile{
	border:1px solid #999; font-size: 18px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 250px;
}
.sidebar-left-ul-edit{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 1px; height: 40px;padding: 10px 10px;
}
.sidebar-left-ul-li:hover{
	background-color: #ff7900;
	font-size: 16px;
}
.sidebar-left-ul-li a:hover{
	color:#fff;
	text-decoration-line: none;
}

</style>

		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 conmaincol3">
			
			<div class="sidebar-left" style="">
				<ul style="" class="sidebar-left-ul">
					<li class="sidebar-left-ul-profile" style="background-color:none;">
						<a href="#">
                                    <!-- <img src="http://www.cadnaukri.com/test/assets/images/profile-photo.png" alt=""> -->
                         </a>
                     </li>
                     <!-- <li class="sidebar-left-ul-edit"><a href="#"> Add photo</a></li> -->
					<li class="sidebar-left-ul-li" style=""><a href="#" class="active white">Profile Viewed</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Applied Job</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Upgrade Service</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Track Imterviews</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">View Chats</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Build Your CV</a></li>
					<!-- <li class="sidebar-left-ul-li" style=""><a href="#" class="white">Log Out</a></li> -->
				</ul>
			</div>

		</div><!--End of conmaincol3-->
	</div><!--End of Row-->
</div><!--End of Container conmain-->