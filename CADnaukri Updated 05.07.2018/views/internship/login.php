<style>
.error{
	color:red;
}
</style>

<div class="main-container">
        <section class="wht-bg">
        
        <section class="section">
            	<div class="container">
                <div class="container-inner line-sepa-bottom">
                		<div class="row">
                        <div class="col-xs-4 Fright">
                  			<div class="xcolright" style="width: 100%">
                  			<?php echo validation_errors(); ?>

                  			<?php if($this->session->flashdata('error')){
								$msg = $this->session->flashdata('error');?>
						        <div class="alert alert-danger alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: red">  <?php echo $msg; ?>
								</div>
								<br/>
						    <?php } ?>
						
                   	<h1>Internship Sign In!</h1>
                      <p>Don't miss out an opportunity, just login to your account now and search for the latest jobs. Always use your updated CV to apply for jobs!!</p>
                            <form id="form2" name="form2" method="post" action="<?php echo base_url('candidate/login')?>" enctype="multipart/form-data">
                              <label for="email">Email</label>
                              <input type="text" name="email_id" id="email_id" required=""/>
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" required="" />
                             
                               <label for="checkbox3">
                              	  <input type="checkbox" name="checkbox3" id="checkbox3" /> Remember me
                               
							   	<a style="float:right" href="<?php echo base_url('candidate/forgot_password')?>">Forgot Password?</a>
							   	 </label>
                              <br />
                              <input type="submit" name="login" id="button2" value="Sign in" class="button" />
                            </form>
                            <p>&nbsp;</p>
                    </div>
                    	</div>
                        <div class="col-xs-8">
                  			<div class="xcolleft" style="width: 100%">
                  				<?php
							if($this->session->flashdata('sucess')){
						       $succesmsg = $this->session->flashdata('sucess');?>
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
							   <br/>
							   <?php } ?>
                        	<h1>Candidate Registration</h1>
                            <p>You will be able to Add your Profile, Upload CV, Search & Apply for Jobs, Find Popular Recruiters. Join CADnaukri today, its FREE!</p>
                      <p>Already have your account with us! Please Sign-In on right</p>
                            <form action="<?php echo base_url('candidate/login')?>" method="post" enctype="multipart/form-data" id="registration" name="registration" 
                            onsubmit="return sign_up_validation();">
                            
                              <label for="firstname">First Name <span class="error">*</span></label>
                              <input type="text" name="firstname" id="firstname" required  maxlength="30"/>
							  <div id="error_fname" class="error"></div>
							  
                              <label for="middlename">Middle Name</label>
                              <input type="text" name="middlename" id="middlename" maxlength="30"/>
                              
                              <label for="lastname">Last Name<span class="error">*</span></label>
                              <input type="text" name="lastname" id="lastname"  maxlength="30"/>
							  <div id="error_lname" class="error"></div>
							  
                              <label for="password_sign">Password<span class="error">*</span></label>
                              <input type="password" name="password_sign" id="password_sign"  maxlength="10" required/>
							  <div id="errpwd" class="error"></div>
							  
                              <label for="confirmpassword">Confirm Password<span class="error">*</span></label>
                              <input type="password" name="confirmpassword" id="confirmpassword"  maxlength="10" />
							  <div id="errcpwd" class="error"></div>
							  
                              <label for="emailid">Email <span class="error">*</span></label>
                              <input type="email" name="emailid" id="emailid"  onblur="valid_email(this.value)"/>
							  <div id="errEmail" class="error"></div>
							  
                              <label for="phoneno">Mobile Number<span class="error">*</span></label>
                              <input type="text" name="phoneno" id="phoneno"  
                              			maxlength="10"  onkeypress="return isNumber(event)" onblur="valid_phonenumber(this.value)" required/>
                              	<div id="errMobile" class="error"></div>
                              	
                              <label for="presentlocation">Present Location <span class="error">*</span></label>
                              <input type="text" name="presentlocation" id="presentlocation" maxlength="100" required/>
                              <div id="error_location" class="error"></div>
                              
                              <label for="fileToUpload">CV Upload</label>
                              <input type="file" name="fileToUpload" id="fileToUpload" onchange="return file_upload();" />
                              <div id="error_file" class="error"></div>
                              
                              <div style="clear:both"></div>
                              
                              <label for="select">Nationality</label>
                              <select name="nationality" id="nationality" required>
							  <option value="">-- select country --</option>
							  <?php foreach($country_list as $cl)
							  {
							  	echo '<option value="'.$cl->country_id.'">'.$cl->country_name.'</option>';
							  }
							  	?>
                              </select>
                              
                              </div>
							  <br/>
                                <label for="isActive" class="smltxtlbl">
                                <input type="checkbox" name="isAgree" id="isAgree"  required/>&nbsp;
                                I understand and fully agree to the 
                                <a href="<?php echo base_url('index/privacy_policy')?>" 
                                onclick="javascript:void window.open('<?php echo base_url('index/privacy_policy')?>','1427880781003',
                                    'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
                                    return false;">Terms &amp; Conditions</a> of the site to send career related emails &amp; sms. 
                                </label>
                                
                              <br />
                               <label for="isActive" class="smltxtlbl"> 
                               <input type="checkbox" name="is_job_email" id="is_job_email" />&nbsp;Also Send me jobs closely related to my search terms </label>
                              <br />
                              <span id="alert_msg" style="font-weight: bold; color: #f00"></span>
                              <input type="hidden" id="err_flag" name="err_flag" value="0" />
                             <!-- <input type="submit" name="signup_form" id="signup_form" value="SIGN UP" class="btn btn-primary" />-->
                              <button type="submit" name="signup_form" id="signup_form"  class="btn btn-primary">SIGN UP</button>
                                 <a href="<?php echo base_url('candidate/login')?>" name="reset" id="rest" value="Cancel" class="btn btn-danger">Cancel</a> 
                            </form>
                            <p>&nbsp;</p>
                    </div>
                    	</div>
                        
                        <div> 
                </div>
                </div>
        </section>
        
        	
        </section>
	
<script>
function sign_up_validation()
{
	
	//$('#signup').prop('disabled', true);
	var password=$('#password_sign').val();
	var confirmpassword=$('#confirmpassword').val();
	var email=$('#emailid').val();
	var phoneno=$('#phoneno').val();
	var fileToUpload=$('#fileToUpload').val();
	var err_flag=$('#err_flag').val();
	if(password != confirmpassword)
	{
		$('#err_flag').val('1');
		$('#errcpwd').html('Password and confirm password does not match');
	}
	else
	{
		$('#errcpwd').html('');
	}
	if(email != '')
	{
	
		var dataString='email_id=' + email;
	    $.ajax({
            type: "POST",
             url: "<?=base_url('candidate/email_exists')?>",
          	 data: dataString,
               success: function (msg) {
                  // alert(msg);
            	if(parseInt(msg) > 0)
            	{
            		$('#err_flag').val('1');
            		$('#errEmail').html('Email id already exists');
				}
            	else
            	{
            		$('#errEmail').html('');
            	}
            },
            error: function (errormessage) {

            	$('#err_flag').val('1');

            }
        });	   
		
	}
	if(phoneno != '')
	{
		var dataString1='phone_num=' + phoneno;
	    console.log(dataString1);
			$.ajax({
            type: "POST",
             url: "<?=base_url('candidate/phone_exists')?>",
          	 data: dataString1,
            success: function (msg) {
               // alert(msg);
            	if(parseInt(msg) > 0)
            	{
            		$('#err_flag').val('1');
            		$('#errMobile').html('Phone number already exists.');
            	}
              	else
              	{
					 document.getElementById('errMobile').innerHTML="";	
				}
            },
            error: function (errormessage) 
			{
            	$('#err_flag').val('1');
            }
        });	  
	}
	if(fileToUpload != '')
	{
		var temp=file_upload();
		if(temp==false)
		{
			$('#err_flag').val('1');
    		$('#error_file').html('You are requested to upload .doc .docx & .rtf documents only.');
		}
	}
	if(parseInt(err_flag) ==0)
	{
		//alert('ok');
		return true;
	}
	else
	{
		//alert('not ok');
		$('#alert_msg').html('Some errors still exist! Please correct !!!');
		return false;
	}
	
	
	
}




function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48  || charCode > 57))
   {
        $('errMobile').html('Only enter the number without country code');
        return false;
    }
    return true;
}
function password_match()
{
    var pass1 = document.getElementById("password_sign").value;
    var pass2 = document.getElementById("confirmpassword").value;

     if (pass1 != pass2) {
        document.getElementById('errcpwd').innerHTML="Doesnot match with password";
         document.getElementById("confirmpassword").value='';
         return false;
       
    }
    else {
    	 document.getElementById('errcpwd').innerHTML="";
        return true;
    }
   
}
function file_upload()
{
	var imgpath = document.getElementById('fileToUpload').value; 	                      
	if(imgpath == "")
	{
		alert("upload your word file");
		return false;
	}
	else
	{
	    var arr1 = new Array;
		arr1 = imgpath.split("\\");
	    var len = arr1.length;
		var img1 = arr1[len-1];
		var filext = img1.substring(img1.lastIndexOf(".")+1);
		if(filext == "doc" || filext == "docx" || filext == "pdf")
		{
			return true;
		}
	    else
		{
		   document.getElementById("fileToUpload").value = '';
		   alert("You are requested to upload .doc .docx & .rtf documents only.");
		    return false;
		}
	}
}
function allLetter()
{	
	var firstname = document.registration.firstname;
	var letters = /^[A-Za-z]+$/;

	if(firstname.value.match(letters))
	{
		document.getElementById('errfn').innerHTML="";
		return true;
	}
	else
	{
		
	
		 document.getElementById('errfn').innerHTML="FirstName must have alphabet characters only";
		firstname.focus();
		return false;
	}
}
function valid_email(email)
{
	var dataString='email_id=' + email;
    $.ajax({
        type: "POST",
         url: "<?=base_url('candidate/email_exists')?>",
      	 data: dataString,
           success: function (msg) {
              // alert(msg);
        	if(parseInt(msg) > 0)
        	{
        		$('#err_flag').val('1');
        		$('#errEmail').html('Email id already exists');
			}
        	else
        	{
        		$('#err_flag').val('0');
        		$('#errEmail').html('');
        	}
        },
        error: function (errormessage) {

        	$('#err_flag').val('1');

        }
    });	   
	
	
	 
}
function valid_phonenumber(phoneno)
{
	  var dataString1='phone_num=' + phoneno;
	    console.log(dataString1);
			$.ajax({
            type: "POST",
             url: "<?=base_url('candidate/phone_exists')?>",
          	 data: dataString1,
            success: function (msg) {
               // alert(msg);
            	if(parseInt(msg) > 0)
            	{
            		$('#err_flag').val('1');
            		$('#errMobile').html('Phone number already exists.');
            	}
              	else
              	{
              		$('#err_flag').val('0');
					 document.getElementById('errMobile').innerHTML="";	
				}
            },
            error: function (errormessage) 
			{
            	$('#err_flag').val('1');
            }
        });	  
}
</script>
<!-- var xmlhttp; 
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		alert(xmlhttp.responseText);
	 
	}
	xmlhttp.open("POST","<?php echo base_url('candidate/email_exists'); ?>/"+email,true);
	xmlhttp.setRequestHeader("Cache-Control", "no-cache");
	xmlhttp.setRequestHeader("Pragma", "no-cache");
	xmlhttp.setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT");
	xmlhttp.send();
 -->