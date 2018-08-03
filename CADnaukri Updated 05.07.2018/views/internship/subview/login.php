<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>
<link rel="stylesheet" href="<?php echo base_url()?>assets/sam/css/main_style.css" />
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/sam/footer/Footer-with-social-icons.css"> -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


 <title>Internship | Login</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<meta name="viewport" content="width=device-width, initial-scale=1">



<!--Intern header start-->

        <style>

        body {margin:0;}

        .topnav {
          overflow: hidden;
          background-color: transparent;
          border:0px solid red;
          /*max-width: 400px;*/
          float: right;

        }
        @media screen and (max-width: 768px){
          .topnav {
          overflow: hidden;
          background-color: transparent;
          /*max-width: 400px;*/
          float: none;
        }

        }


        .topnav a  {
          float: left;
          display: block;
          color: #000;
          text-align: center;
          padding: 0px 10px;
          text-decoration: none;
          font-size: 14px;
          border-right: 1px solid #ccc;
          font-weight: bolder;
          color:#FF7900;
          margin-top: 12px;

        }
        @media screen and (max-width: 768px){
          .topnav a  {
          
          display: block;
          color: #000;
          text-align: center;
          padding: 0px 10px;
          text-decoration: none;
          font-size: 14px;
          border-right: 0px solid #ccc;
          font-weight: bolder;
          color:#FF7900;
          margin-top: 12px;
          max-width: 100px;
          margin-bottom: 10px;

        }
        } 

        .topnav a:hover {
          background-color: ;
          color: #0055A5;
        }

        .active {
          background-color: ;
          color: white;
        }

        .topnav .icon {
          display: none;
        }

        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        @media screen and (max-width: 600px) {
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
        .a_emp{text-align: center;text-transform: uppercase;font-weight:normal;background-color:#0055A5;padding:5px;color:#fff;}
        .a_emp:hover{text-align: center;text-transform: uppercase;font-weight: normal;background-color:#FF7900;padding:5px;color:#fff;}

        .fa{font-size: 20px;color:#77716F;padding: 5px;}
        .fa:hover{color:#FF7900;}
        a.faa{color:#0055A5;font-size: 21px;}
        a.faa:hover{color:#FF7900;font-size: 21px;}
        .logo_img{text-align: left;}
        @media screen and (max-width: 768px){
          .logo_img{text-align: center;}
        }
        a:hover{text-decoration: none;font-size: 14px;}
        </style>
<div class="content">
        <div class="container" style="max-width: 1000px;margin-top:10px;border:0px solid red;margin-bottom: 2px;" align="center">
          <div class="row">
            <div class="col-md-3 col-xs-12 logo_img" style=""><a href="<?php echo base_url();?>"> <img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="cadnaukri" ></a></div>
            <div class="col-md-4 col-xs-12" style="border:0px solid red;">
              <div class="row" style="border: 0px solid red; margin-bottom: 22px;">
              <div class="col-md-6 col-xs-12" style="border:0px solid red; text-align: center;">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-google"></i>
                <i class="fa fa-linkedin"></i>  
              </div>
              <div class="col-md-6 col-xs-12" style="border:0px solid red;margin-top: 5px;">  
                <a href="#" class="a_emp" style="">Employers</a>  
              </div>
            </div>


              <div class="col-md-12 col-xs-12" style="border:0px solid red;padding: 0 0;">
                <div class="topnav" id="topbar">
                    <a class="fa fa-home faa"  style="" href="#"></a>
                    <a href="#" class="active" >Blogs</a>
                    <a href="<?php echo base_url();?>internship/internships">Internships</a> <!-- City-wise Industry-wise -->
                    <a href="<?php echo base_url();?>internship/login" style="border: none;">Interns</a><!-- sign-up sign-in -->
                    <a href="javascript:void(0);" style="font-size:20px;border:1px solid #0055A5;border-radius: 4px;" class="icon"  onclick="myFunction()">&#9776;</a>
                </div>
              </div>

            </div>

            <div class="col-xs-12 col-md-5" style="border:0px solid red;"><img src="<?php echo base_url();?>assets/images/img/intern/int.jpg"> </div>
          </div>
        </div>

        <!-- <div class="container-fluid" style="background-color:#0055A5;font-size: 2px; box-shadow: 1px 2px 1px #cccccc;"> </div> -->


        <script>
        function myFunction() {
            var x = document.getElementById("topbar");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>

<!--Intern header Ends-->
 <head>

   <style type="text/css">
div,h1,h2,h3,h4,h5,h6,p,a,ul,li{font-family: calibri;}
   
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(" ") center no-repeat #fff;
  /*<?php //echo base_url()?>/assets/sam/loader/loader_gif.gif*/
}
  </style>
  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(800);;
  });
  </script>
 </head>
<style>
.error{
	color:red;
}
</style>

<!--New style-->
<!-- <div class="se-pre-con"></div> -->
<style type="text/css">
  .signup{background-color: #FF6600;width: 30%; }
      .signup:hover{background-color: #0055A5;color: #fff;}
      .reset{background-color: #0055A5;color: #fff;width: 30%;}
      .reset:hover{background-color: #FF6600;color: #fff;}
      .forgot_password{float:right; color:#0055A5;font-size: 14px;}
.forgot_password:hover{color: #FF6600;text-decoration: none;}


.back_img  {
    /*background-image: url("<?php echo base_url()?>assets/images/img/intern/1.png");*/
    background-color: #E2E1E0;
    height: auto;
    background-repeat: no-repeat;
    background-attachment: fixed;
    
}
.con_img{
  /*background-image: url("<?php echo base_url()?>assets/images/img/intern/Register-For-Internship---CADnaukri.png");*/
  /*background-color: blue;*/
  background-repeat:no-repeat;
  background-color: #fff;
  height:auto;

}
.view_more{background-color:#0055A5;color:#fff;}
.view_more:hover{background-color:#FF7900;color:#fff; }
@media screen and (max-width: 800px){
  .back_img .con_img{background-color: #fff;height: auto;background-image: url(none)}
  div a.see{border:0px solid red;text-align: center;display: block;}
  .title_margin{border:0px solid red;margin-left: -10px;}
}
.row_class{margin-top: -25px;border:0px solid red;padding-right: 15px;}
.row_class1{border:0px solid red;padding-right: 15px;}
.col_bold{font-weight: bolder;}
.col_normal{font-weight: normal;}
.title{background-color:#FF7900;height: 30px;border-radius: 4px;color:#fff;margin-top: 10px;vertical-align: middle;line-height: 30px;padding-left: 5px; }
.location{line-height: 30px;vertical-align: middle;color:#FF7900;}
.location:hover{color:#0055A5;}
div a.see{font-size: 12px;margin-left: 20px; }

a:hover{text-decoration: none;}
</style>
<div class="main-container">
<div class="container-fluid" style="background-color:#0055A5;font-size: 2px; box-shadow: 1px 2px 1px #cccccc;"> </div>


        <section class="wht-bg back_img" >
        
        <section class="section">
            	<div class="container con_img" style="border:0px solid red;">
                <div class="container-inner" style="">
                    <div class="row row_class" style="">
                    	<div class="col-md-7 col-xs-12" style="border-right:0px solid red;box-shadow:5px 5px 5px #cccccc;">
                        <div class="col-md-12 col-xs-12" align="center" style="background-color:#0055A5;color:#fff;height: 34px;font-weight: bolder;line-height: 34px;vertical-align: middle;border-radius: 4px;"><h4>Hot Internships Available</h4>
                        </div>
                        <div class="col-md-12 col-xs-12" style="border:1px solid #ccc;background-color:#ECF0F5;margin-top: 20px;border-radius: 4px;">

<?php foreach($hotlisted_internships as $key ) { ?>

                          <a href="<?php echo base_url();?>internship/internship_details/<?php echo $key->internship_id;?>" class="see" ><div class="col-md-12 col-xs-12 title_margin" style=""><h5 class="title"><?php echo $key->title;?></h5></div></a>
                          <div class="col-md-12 col-xs-12" style="font-size: 12px;">
                            <span class="glyphicon glyphicon-home location" title="Company"></span>
                            <span style="color:#868686;line-height: 30px;vertical-align: middle;"><?php echo $key->company_name;?></span>
                          </div>

                          <div class="col-md-12 col-xs-12" style="font-size: 12px;">
                            <span class="glyphicon glyphicon-map-marker location" title="location" style=""></span>
                            <span style="color:#868686;line-height: 30px;vertical-align: middle;"> <?php echo $key->location;?></span>
                          </div>

                          <div class="col-md-9 col-xs-12" style="font-size: 12px;">
                            <span class="glyphicon glyphicon-time location" title="Last date of application"></span>
                            <span style="color:#868686;line-height: 30px;vertical-align: middle;"><?php echo $key->endDate;?></span> 
                          </div> 
                          <div class="col-md-3 col-xs-12" style="">
                            <a href="<?php echo base_url();?>internship/internship_details/<?php echo $key->internship_id;?>" class="see" >See details</a>
                          </div>
<?php } ?>
                        </div>


                        <div class="col-md-12 col-xs-12" style="text-align: center;margin-top: 30px;margin-bottom: 25px;border:0px solid red;line-height: 50px;vertical-align: middle;">
                          <a href="<?php echo base_url();?>internship/internships"><button type="button" class="btn btn-default view_more">More Opportunities</button></a>                       
                        </div>


                      </div><!--End col-md-8-->
                      <div class="col-md-1"></div>
                     	
<div class="col-md-4 col-xs-12" style="box-shadow:2px 2px 5px 2px #cccccc;background-color: #ECF0F5;border:0px solid red;">
          <div class="col-md-12 col-xs-12" align="center" style="background-color:#0055A5;color:#fff;height: 34px;font-weight: bolder;line-height: 34px;vertical-align: middle;border-radius: 4px;"><h4>Intern Signup Here</h4>
                        </div>


<?php if($login_tab == "Yes"){?>                    
                  			
<hr>

<div class="" style="width: 100%">
                          <?php
              if($this->session->flashdata('sucess')){
                   $succesmsg = $this->session->flashdata('sucess');?>
                 <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
                 <br/>
                 <?php } if($this->uri->segment(2) == 'sign_up_success')
                  { ?>
                     <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert">  
                     You've registered successfully.Please check your mail to set password.
                     </div>
                <?php  } else if($this->uri->segment(2) == 'registration_successfully') {?>
                      <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert">  
                     Password Set Successfully
                     </div>
                <?php } ?>
                          <!-- <h3 style="color: #0055A5;padding:0px 10px;text-align: center;margin-top: 15px;">Intern Sign-up</h3> -->
                            <!-- <p>If you are a studnet Looking for a global career,Find your dream internship, its FREE!</p>
                      <p>Already have your account with us! Please Sign-In on right</p> -->
                            <form action="<?php echo base_url('internship/login')?>" method="post" enctype="multipart/form-data" id="registration" name="registration" 
                            onsubmit="return sign_up_validation();" style="" >
                            
                              <label for="firstname" style="margin-top: 10px;">Name <span class="error">*</span></label>
                              <input type="text" name="firstname" id="firstname" required  maxlength="30"/>
                <div id="error_fname" class="error"></div>
                
                              <!-- <label for="password_sign">Password<span class="error">*</span></label>
                              <input type="password" name="password_sign" id="password_sign"  maxlength="10" required/>
                <div id="errpwd" class="error"></div>
                
                              <label for="confirmpassword">Confirm Password<span class="error">*</span></label>
                              <input type="password" name="confirmpassword" id="confirmpassword"  maxlength="10" onblur="password_match()"/>
                <div id="errcpwd" class="error"></div> -->
                
                              <label for="emailid">Email <span class="error">*</span></label>
                              <input type="email" name="emailid" id="emailid"  onblur="valid_email(this.value)"/>
                <div id="errEmail" class="error"></div>
                
                              <label for="phoneno">Mobile Number<span class="error">*</span></label>
                              <input type="text" name="phoneno" id="phoneno"  
                                    maxlength="10"  onkeypress="return isNumber(event)" onblur="valid_phonenumber(this.value)" required/>
                                <div id="errMobile" class="error"></div>
                                 
                                <label for="isActive" class="smltxtlbl">
                                <input type="checkbox" name="isAgree" id="isAgree"  required/>&nbsp;
                                I accept your website's
                                <a href="<?php echo base_url('Terms-And-Conditions')?>" style="font-size: 14px;"
                                onclick="javascript:void window.open('<?php echo base_url('Terms-And-Conditions')?>','1427880781003',
                                    'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
                                    return false;">T&amp;C.</a>
                                </label>
                                
                              <br />
                              
                              <span id="alert_msg" style="font-weight: bold; color: #f00"></span>
                              <input type="hidden" id="err_flag" name="err_flag" value="0" />
                           <!--   <input type="submit" name="signup_form" id="signup_form" value="SIGN UP" class="btn btn-primary" />-->

                              <div class="row" align="center">
                                 <button type="submit" name="signup_form" id="signup_form"  class="btn btn-default signup" style="color:#fff;">Sign up</button>
                                 <a href="<?php echo base_url('internship/login')?>" name="reset" id="rest" value="Cancel" class="btn btn-default reset">Cancel</a> 
                             </div>

                            </form>
                            <p>&nbsp;</p>
                    </div>
                    <!--Start Sign in-->

                    <div class="" style="width: 100%">
                        <?php echo validation_errors(); ?>

                        <?php if($this->session->flashdata('error')){
                $msg = $this->session->flashdata('error');?>
                    <div class="alert alert-danger alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: red;margin-top: 10px;font-size: 12px;font-weight: bolder;">  <?php echo $msg; ?>
                </div>
                <br/>
                <?php } 


                ?>
            <div class="col-md-12 col-xs-12" align="center" style="background-color:#0055A5;color:#fff;height: 34px;font-weight: bolder;line-height: 34px;vertical-align: middle;border-radius: 4px;margin-top: 20px;"><h4>Intern Signin</h4>
                        </div>
                    <!-- <h3 style="color: #0055A5;padding:0px 10px;text-align: center; margin-top: 15px;margin-bottom: 20px; border:0px solid;">Intern Sign-in</h3> -->
                      <!-- <p>Don't miss out an opportunity, just login to your account now and Find your dream internship!!</p> -->

                          <!--Test Sign in-->

                            <form class="" style=" border:0px solid;margin-left: 5px;" id="form2" name="form2" method="post" action="<?php echo base_url('internship/login')?>" enctype="multipart/form-data">
                              <div class="form-group" style="border:0px solid red;">
                                  <label for="email" class="" style="color:#000;margin-top: 20px;">Email:</label>
                                  <input class="form-control" type="text" name="email_id" id="email_id" required=""/>
                              </div>
                          <div class="form-group" style="border:0px solid red;">
                                  <label for="password" style="color:#000;">Password</label>
                                  <input type="password" class="form-control" style="" name="password" id="password" required="" />
                              </div>
                             
                              <center>

                                <input type="submit" name="login" id="button2" value="Log in" class="btn btn-default signup" style="max-height: 30px;" />
                              </center>
                            

                               <label for="checkbox3" style="margin-top: 15px; margin-left: -4px;color: #000;margin-bottom: 15px;border-bottom:0px solid red;">
                                  <input type="checkbox" name="checkbox3" id="checkbox3"/> Remember me
    
                  <a class="forgot_password" href="<?php echo base_url('internship/forgot_password')?>">Forgot password?</a>
                   </label>
                              
                              
                            </form>
                    </div>
                    <!--End Sign in-->

<?php } ?>


                    	</div>
                  </div><br>
                    <!-- <div class="row row_class1" style="">
                      <div class="col-md-8 col-xs-12"></div>
                        <div class="col-md-4 col-xs-12" style="box-shadow:2px 2px 5px 2px #cccccc;background-color: #fff;">

                        
                  			<div class="" style="width: 100%">
                  				<?php
							if($this->session->flashdata('sucess')){
						       $succesmsg = $this->session->flashdata('sucess');?>
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
							   <br/>
							   <?php } if($this->uri->segment(2) == 'sign_up_success')
                  { ?>
                     <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert">  
                     You've registered successfully. Please Check Your Mail To Set Your Password.
                     </div>
                <?php  } else if($this->uri->segment(2) == 'registration_successfully') {?>
                      <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert">  
                     Password Set Successfully
                     </div>
                <?php } ?>
                        	<h1 style="color: #0055A5;padding:0px 10px;font-size: 28px;text-align: center;margin-top: 15px;">Intern Registration</h1>
                            <form action="<?php echo base_url('internship/login')?>" method="post" enctype="multipart/form-data" id="registration" name="registration" 
                            onsubmit="return sign_up_validation();">
                            
                              <label for="firstname">Name <span class="error">*</span></label>
                              <input type="text" name="firstname" id="firstname" required  maxlength="30"/>
							  <div id="error_fname" class="error"></div>
							                <label for="emailid">Email <span class="error">*</span></label>
                              <input type="email" name="emailid" id="emailid"  onblur="valid_email(this.value)"/>
							  <div id="errEmail" class="error"></div>
							  
                              <label for="phoneno">Mobile Number<span class="error">*</span></label>
                              <input type="text" name="phoneno" id="phoneno"  
                              			maxlength="10"  onkeypress="return isNumber(event)" onblur="valid_phonenumber(this.value)" required/>
                              	<div id="errMobile" class="error"></div>
                              	 
                                <label for="isActive" class="smltxtlbl">
                                <input type="checkbox" name="isAgree" id="isAgree"  required/>&nbsp;
                                I accept your website's
                                <a href="<?php echo base_url('Terms-And-Conditions')?>" 
                                onclick="javascript:void window.open('<?php echo base_url('Terms-And-Conditions')?>','1427880781003',
                                    'width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
                                    return false;">Terms &amp; Conditions.</a>
                                </label>
                                
                              <br />
                              
                              <span id="alert_msg" style="font-weight: bold; color: #f00"></span>
                              <input type="hidden" id="err_flag" name="err_flag" value="0" />
                           		<div class="row" align="center">
                                 <button type="submit" name="signup_form" id="signup_form"  class="btn btn-default signup" style="color:#fff;">Sign up</button>
                                 <a href="<?php echo base_url('internship/login')?>" name="reset" id="rest" value="Cancel" class="btn btn-default reset">Cancel</a> 
                             </div>

                            </form>
                            <p>&nbsp;</p>
                    </div>
                    	</div>
                        
                        <div> 
                </div>
                </div> -->
        </section>
        
        	
        </section>
<div class="container-fluid" style="background-color:#FF7900;font-size: 2px; box-shadow: 1px 2px 1px #cccccc;"> </div>
	
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

     if (pass1 != pass2) 
     {
     	$('#password_sign').val('');
     	$('#confirmpassword').val('');
        document.getElementById('errcpwd').innerHTML="Doesnot match with password";
        // document.getElementById("confirmpassword").value='';
         return false;
       
    }
    else 
    {
    	 document.getElementById('errcpwd').innerHTML="";
        return true;
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
         url: "<?=base_url('internship/email_exists')?>",
      	 data: dataString,
           success: function (msg) {
              // alert(msg);
        	if(parseInt(msg) > 0)
        	{
        		$('#emailid').val('');
        		$('#err_flag').val('1');
        		$('#errEmail').html('Email id already exists');
			}
        	else
        	{
        		$('#err_flag').val('0');
        		$('#errEmail').html('');
        	}
        },
        error: function (errormessage)
         {

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
             url: "<?=base_url('internship/phone_exists')?>",
          	 data: dataString1,
            success: function (msg) {
               // alert(msg);
            	if(parseInt(msg) > 0)
            	{
            		$('#phoneno').val('');
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
</div>

 <!--Footer Start-->
 <style type="text/css">
   


#myFooter {
  background-color: #0055A5;
  color:white;
}

#myFooter .footer-copyright{
  background-color: #FF7900;
  padding-top:3px;
  padding-bottom:3px;
  text-align: center;
}

#myFooter .footer-copyright p{
  margin:10px;
  color: #d2d1d1;
}

#myFooter ul{
  list-style-type: none;
    padding-left: 0;
    line-height: 1.7;

}

#myFooter h5{
  font-size: 20px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
    font-family: calibri;
}


#myFooter a{
  color:#d2d1d1;
  text-decoration: none;
  font-size: 15px;
  font-family: calibri;

}

#myFooter a:hover, #myFooter a:focus{
  text-decoration: none;
  color:white;
}

#myFooter .myCols{
  text-align: left;
}

#myFooter .social-networks{
  text-align: center;
  padding-top: 30px;
  padding-bottom: 38px;

}

#myFooter .social-networks a{
    font-size: 32px;
    margin-right: 5px;
    margin-left: 5px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover{
  text-decoration: none;

}

#myFooter .facebook:hover{
  color:#0077e2;
}

#myFooter .google:hover{
  color:#ef1a1a;
}

#myFooter .twitter:hover{
  color: #00aced;
}
#myFooter .linkedin:hover{
  color: #0077e2;
}
@media screen and (max-width: 767px){
  #myFooter {
    text-align: center;
  }
  #myFooter .myCols{
  text-align: center;
}
}



/* CSS used for positioning the footers at the bottom of the page. */
/* You can remove this. */


html{
  height: 100% !important;
}

body{
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
}

.content{
  flex: 1 0 auto;
  -webkit-flex: 1 0 auto;
  min-height: 200px;
}

#myFooter{
  flex: 0 0 auto;
    -webkit-flex: 0 0 auto;
}
 </style>
        <footer id="myFooter">
        <div class="container" style="max-width: 1000px;">
            <div class="row">
                <div class="col-sm-2 myCols" style="">
                    <h5>City-wise</h5>
                    <ul>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Pune');?>">Jobs in Pune</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Chennai');?>">Jobs in Chennai</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Hyderabad')?>">Jobs in Hyderabad</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Bangalore')?>">Jobs in Bengaluru</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Ahmedabad')?>">Jobs in Ahmedabad</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Bhubaneswar')?>">Jobs in Bhubaneswar</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Mumbai')?>">Jobs in Mumbai</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Delhi')?>">Jobs in Delhi NCR</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Indore')?>">Jobs in Indore</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Surat')?>">Jobs in Surat</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Rest-of-india')?>">Jobs in India</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 myCols">
                    <h5>Category-wise</h5>
                    <ul>
                        <li><a href="<?php echo base_url('CAD-Jobs');?>">CAD jobs</a></li>                        
                        <li><a href="<?php echo base_url('CAE-Jobs');?>">CAE jobs</a></li>
                        <li><a href="<?php echo base_url('CFD-Jobs');?>">CFD jobs</a></li>
                        <li><a href="<?php echo base_url('PLM-Jobs');?>">PLM jobs</a></li>
                        <li><a href="<?php echo base_url('BIM-Jobs');?>">BIM jobs</a></li>
                        <li><a href="<?php echo base_url('CAD-Sales-Jobs');?>">CAD Sales jobs</a></li>
                        <li><a href="<?php echo base_url('CAD-Developer-Jobs');?>">CAD Developers jobs</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Rest-of-india')?>">All jobs</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-2 myCols">
                    <h5>Employers</h5>
                    <ul>                        
                        <li><a href="<?php echo base_url('employer/dashboard');?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('employer/dashboard');?>">Upgrade Services</a></li>
                        <li><a href="<?php echo base_url('employer/login');?>">Signup</a></li>
                        <li><a href="<?php echo base_url('employer/login');?>">Signin</a></li>
                        <li><a href="<?php echo base_url('employer/post_ad');?>">Post your AD</a></li>
                        <li><a href="<?php echo base_url('Employer/Application-Recieved');?>">Track applications</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 myCols">
                    <h5>Job-seekers</h5>
                    <ul>
                        <li><a href="<?php echo base_url('candidate/dashboard');?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('candidate/login');?>">Signup</a></li>
                        <li><a href="<?php echo base_url('candidate/login');?>">Signin</a></li>
                        <li><a href="<?php echo base_url('candidate/update_cv');?>">Upload CV</a></li>
                        <li><a href="<?php echo base_url('candidate/view_saved_jobs');?>">Track jobs</a></li>
                        <li><a href="<?php echo base_url('candidate/view_interviews');?>">Track interviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 myCols">
                    <h5>Interns</h5>
                    <ul>
                        <li><a href="<?php echo base_url('internship/dashboard');?>">Dashboard</a></li>
                        <li><a href="<?php echo base_url('internship/login');?>">Signup</a></li>
                        <li><a href="<?php echo base_url('internship/login');?>">Signin</a></li>
                        <li><a href="<?php echo base_url('internship/dashboard');?>">Upload resume</a></li>
                        <li><a href="<?php echo base_url('internship/dashboard');?>">Track interviews</a></li>
                        <li><a href="<?php echo base_url('internship/dashboard');?>">Track internship</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 myCols">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="<?php echo base_url('About-Us');?>">About company</a></li>
                        <li><a href="#">Our team</a></li>
                        <li><a href="#">Read blogs</a></li>

                        <li><a href="<?php echo base_url('Contact-Us');?>">Contact us</a></li>
                        <li><a href="<?php echo base_url('Terms-And-Conditions');?>">Terms & conditions</a></li>
                        <li><a href="<?php echo base_url('Privacy-Policy');?>">Privacy policy</a></li>
                        <li><a href="<?php echo base_url('Disclaimer');?>">Disclaimer</a></li>
                        <li><a href="<?php echo base_url('Background-Check');?>">Background check</a></li>                      

                    </ul>
                </div>
                
                

            </div>
        </div>
        <style type="text/css">
          .social_link{font-size: 30px;color: #fff;}
          .social_link:hover{font-size: 30px;color: #FF7900;}

        </style>
        <div class="social-networks" >
            <a href="https://twitter.com/cadnaukri" target="_blank" title="" class="twitter"><i class="fa fa-twitter social_link" style=""></i></a>
            <a href="https://www.facebook.com/CADnaukri" target="_blank" class="facebook"><i class="fa fa-facebook-official social_link" style=""></i></a>
            <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" class="google"><i class="fa fa-google-plus social_link" style=""></i></a>
            <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" class="google"><i class="fa fa-youtube social_link" style=""></i></a>
            <a href="https://in.linkedin.com/company/cadnaukri-com" target="_blank" class="linkedin"><i class="fa fa-linkedin social_link" style=""></i></a>
        </div>
        <div class="footer-copyright">
            <p>All rights reserved @ 2018 CADnaukri.com</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!--footer Ends-->