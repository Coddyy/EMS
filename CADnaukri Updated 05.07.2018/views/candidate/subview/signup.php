<style type="text/css">
	
	.error
	{
		color:#ff0000;
				
	}
	.filed-error 
	 {
       border: 1px solid #ff0000;
     }
    
</style>
<section id="sign_up_form">
			
	<div class="container"  style="padding-left: 60px;padding-top: 20px;margin-top: 8%;padding-bottom: 10px">
	<div class="signup_wrapper" style="min-height: 455px; padding: 10px 10px 20px; border: 5px solid #f4eede;border-radius: 20px;">
	 <h2 class="col-md-offset-4">
	 <span style="color: #5e554e; font-size: 24px; margin-bottom: 23px; text-align: center;">
	 SIGN UP HERE</span></h2>
	<?php echo validation_errors(); ?>
		<form class="form-horizontal" role="form" action="<?php echo base_url('user/signup')?>" method="post" id="sign_up_form" onsubmit="return submit_signup()">
		<input type="password" id="" name="" placeholder="" VALUE=""/>
		   <div class="row">
		      <div class="col-sm-6">
		      	<div class="form-group">
				  <label for="inputEmail3" class="col-sm-4 control-label">First Name</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" />
					  <span id="fname_error" class="error"></span>
				  </div>
				</div>
		      </div>
			  <div class="col-sm-6">
				<div class="form-group">
				  <label for="inputEmail3" class="col-sm-3 control-label">Last Name</label>
				  <div class="col-sm-7">
					<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
						<span id="lname_error" class="error"></span>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-sm-6">
			  	<div class="form-group">
				  <label for="inputPassword3" class="col-sm-4 control-label">User Name</label>
				  <div class="col-sm-8">
					<input type="text" class="form-control" id="username" name="username" placeholder="User Name" onblur="username_check(this.value)"/>
						<span id="username_error" class="error"></span>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6">
			  	<div class="form-group ">
				  <label for="inputPassword3" class="col-sm-3 control-label">Sex</label>
				  <div class="col-sm-7">
					<select class="form-control " name="sex" id="sex">
				     <option value="">Select</option>
				      <option value="M">Male</option>
				     <option value="F">Female</option>
				    </select>
				    <div id="sex_error" class="error"></div>
				  </div>
				</div>
			   </div>
			 </div>
			
             <div class="row">
		   	 <div class="col-sm-6">
				<div class="form-group" >
				  <label for="inputPassword3" class="col-sm-4 control-label">EMail</label>
				  <div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email Id" onblur="email_check(this.value)" />
					<div id="email_error" class="error"></div>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6">
				<div class="form-group" >
				  <label for="inputPassword3" class="col-sm-3 control-label">Mobile</label>
				  <div class="col-sm-7">
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
					<div id="mobile_error" class="error"></div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row">
			<div class="col-sm-6">	
				<div class="form-group">
				  <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
				  <div class="col-sm-8" >
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
					<div id="password_error" class="error"></div>
				  </div>
				</div>
			</div>
			 <div class="col-sm-6">	
				<div class="form-group">
				  <label for="inputPassword3" class="col-sm-3 control-label">Living Area</label>
				  <div class="col-sm-7" >
					<input type="text" class="form-control" id="living_area" name="living_area" placeholder="Zip Code" autocomplete="off" data-country="us"/>
					<div id="living_area_error" class="error"></div>
				  </div>
				</div>
			</div>
		   </div>
		   <div class="row">
				<div class="form-group">
				  <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
				  
				   <div class="col-sm-3" style="padding-left: 2%">
					   	<select class="form-control" name="date" id="date" >
					     <option value="">Date</option>
					     <?php for($i=1;$i<=31;$i++){
						 	echo '<option value="'.$i.'">'.$i.'</option>';
						 }?>
					    
						</select>
						 <div id="date_error" class="error"></div>
				   </div>
				    <div class="col-sm-3">
					   	<select class="form-control"  name="month" id="month">
					     <option value="">Month</option>
						  <?php for($i=1;$i<=12;$i++){
						 	echo '<option value="'.$i.'">'.$i.'</option>';
						 }?>
						</select>
						<div id="month_error" class="error"></div>
				   </div>
				    <div class="col-sm-3" style="padding-right: 2%">
					   	<select class="form-control" name="year" id="year">
					     <option value="">Year</option>
					     <?php 
					     $year=date("Y", strtotime("now - 18 years"));
						 for($i=$year; $i>1950; $i--) {
							      print('<option value="'.$i.'">'.$i.'</option>'."\n");
							}?>
						</select>
				     <div id="year_error" class="error"></div>
				
				  </div>
				</div>
             </div>
			<div class="row">
				<div class="form-group ">
				  <label for="inputPassword3" class="col-sm-2 control-label">Preferred Sport</label>
				  <div class="col-sm-9">
					  
					   	  <?php foreach($sportstype as $st){?>
						 <div class="col-sm-6">
						<li class="prefereedsports" styl="list-style-type:none">
								<label style="font-weight: normal;font-size: 13px;"><input type="checkbox" class="preferred_sport" name="preferred_sport[]"  
								value="<?php echo $st->id?>"> <?php echo ucfirst( $st->sportstype)?></label>
						</li>
						</div>
						<?php } ?>
						<div id="preferred_sport_error" class="error"></div>
						
	                 
				  </div>
				 </div>
		   </div>
		  <div class="form-group">
			  <div class="col-sm-offset-3 col-sm-10">
			    <label style="font-weight: normal;font-size: 13px;">
			      <input type="checkbox"  required=""/> I am at least 18 years of age and I agree to the "<a href="#" >terms and conditions</a>" and the "<a href="#" > privacy policy</ a>"
			    </label>
			  </div>
		 </div>
		 <div class="form-group">
				  <div class="col-sm-offset-3 col-sm-10">
					<button type="submit"  class="btn btn-warning btn-lg ">Sign Up Now </button>
					<a href="<?php echo current_url()?>" class="btn-danger btn-lg btn ">Cancel</a>
				  </div>
				</div>
		</form>
</section>


<script>
	function submit_signup()
	{
		var fname=$('#fname').val();
		var lname=$('#lname').val();
		var username=$('#username').val();
	    var date=$('#date').val();
	    var month=$('#month').val();
	    var year=$('#year').val();
		var sex=$('#sex').val();
		var living_area=$('#living_area').val();
		var email=$('#email').val();
		var mobile=$('#mobile').val();
		var password=$('#password').val();
		if(fname=='')
		{
			$('#fname_error').html('First Name can not be blank');
			$('#fname').addClass('filed-error ');
			return false;
			
		}
		else
		{
				$('#fname').removeClass('filed-error ');
			$('#fname_error').html('');
		
		}
		if(lname=='')
		{
			$('#lname_error').html('Last Name can not be blank');
			$('#lname').addClass('filed-error ');
			return false;
			
		}
		else
		{
				$('#lname').removeClass('filed-error ');
			$('#lname_error').html('');
		
		}
		if(username=='')
		{
			$('#username_error').html('User Name can not be blank');
			$('#username').addClass('filed-error ');
			return false;
			
		}
		else
		{
			$('#username_error').html('User Name can not be blank');
			$('#username').removeClass('filed-error ');
				return true;
						
		}
		if(sex=='')
		{
			$('#sex_error').html('Please select your sex');
			$('#sex').addClass('filed-error ');
			return false;
			
		}
		else
		{
				$('#sex').removeClass('filed-error ');
			$('#sex_error').html('');
		
		}
		if(date=='')
		{
			$('#date_error').html('Please provide your date of birth');
			$('#date').addClass('filed-error ');
			return false;
			
		}
		else
		{
			$('#date').removeClass('filed-error ');
			$('#date_error').html('');
		
		}
		if(month=='')
		{
			$('#month_error').html('Please provide your date of birth');
			$('#month').addClass('filed-error ');
			return false;
			
		}
		else
		{
			$('#month').removeClass('filed-error ');
			$('#month_error').html('');
		
		}
		if(year=='')
		{
			$('#year_error').html('Please provide your date of birth');
			$('#year').addClass('filed-error ');
			return false;
			
		}
		else
		{
			$('#year').removeClass('filed-error ');
			$('#year_error').html('');
		
		}
		if(sex=='')
		{
			$('#sex_error').html('Please select your sex');
			$('#sex').addClass('filed-error ');
			return false;
			
		}
		else
		{
			$('#sex_error').html('');
		
		}
		if(living_area == '')
		{
			$('#living_area_error').html('Please select a zip code');
			$('#living_area').addClass('filed-error ');
			return false;
		}
		else
		{
			$('#living_area').html('');
		}
		
		if ($(".preferred_sport:checked").length > 0) 
		{
			  $('.preferred_sport').html('');
		}
		else
		{
			   $('.preferred_sport_error').html('Please select atleast one preferred sport');
			  $('.preferred_sport').addClass('filed-error ');
			  return false;
		}
		
		if(email == '')
		{
			 $('#email_error').html('Please provide your email id ');
			  $('#email').addClass('filed-error ');
			  return false;
			
		}  
		else
		{
			$('#email').html('');
		}
		if(mobile == '')
		{
			 $('#mobile_error').html('Please provide your mobile number');
			  $('#mobile').addClass('filed-error ');
			  return false;
			
		}  
		else
		{
			$('#mobile').html('');
		}
		if(password == '')
		{
			 $('#password_error').html('Please enter your password');
			  $('#password').addClass('filed-error ');
			  return false;
			
		}  
		else
		{
			$('#password').html('');
		}
		 
		//return false;
	}
	
	function username_check(username)
	{
					var xmlhttp;    
					if (window.XMLHttpRequest)
					{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function()
					{
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					  { 
					  
					        if(xmlhttp.responseText > 0)
					        {
					       		 $('#username_error').html('User Name already exists.Please choose another name');
								$('#username').addClass('filed-error ');
								 document.getElementById("username").value='';
									
							  return false;
							}
						   else
						   {
						   	
					       		 $('#username_error').html('');
					       		return false;
						   }
						
					         
					   
					  }
					}
					xmlhttp.open("POST",'<?php echo base_url()?>user/username_exists/'+username,true);
					xmlhttp.setRequestHeader("Cache-Control", "no-cache");
					xmlhttp.setRequestHeader("Pragma", "no-cache");
					xmlhttp.setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT");
					xmlhttp.send();
	}
	function email_check(email)
	{
					var xmlhttp;    
					if (window.XMLHttpRequest)
					{
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					}
					else
					{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function()
					{
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					  { 
					  
					        if(xmlhttp.responseText > 0)
					        {
					       		 $('#email_error').html('Email ID  already exists.Please choose another name');
								$('#email').addClass('filed-error ');
								 document.getElementById("email").value='';
									
							  return false;
							}
						   else
						   {
						   	
					       		 $('#email_error').html('');
					       		return false;
						   }
						
					         
					   
					  }
					}
					xmlhttp.open("POST",'<?php echo base_url()?>user/email_exists/'+email,true);
					xmlhttp.setRequestHeader("Cache-Control", "no-cache");
					xmlhttp.setRequestHeader("Pragma", "no-cache");
					xmlhttp.setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT");
					xmlhttp.send();
	}
	
	
	
	
	$('input#living_area').cityAutocomplete();

</script>