<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<?php 

$exam_details_id=$this->uri->segment(3);
if($this->View_M->is_there_exam($exam_details_id) == FALSE)
{
      redirect(base_url()."best_design_jobs/exams");
} ?>
<?php if($this->Candidate_M->isLoggedin() == TRUE)
{
  $exam_id=$this->uri->segment(3);
  redirect(base_url()."candidate/give_exam_now/".$exam_id);

}?>

<?php if($this->Employee_M->isLoggedin() == TRUE)
{
  redirect(base_url()."employer/dashboard");
}
?>
<style type="text/css">
div,h1,h2,h3,h4,h5,h6,p,a,ul,li{font-family: calibury;}
    .btn_signup{background-color: #0055A5;border:none;}
    .btn_reset{background-color:#FF7900;border:none;color:#fff;}
    .btn_reset:hover{background-color:#0055A5;color: #fff; }
    .btn_signup:hover{background-color:#FF7900; }
    .btn_submit{margin-left: -65px;margin-top: 10px;background-color: #FF7900; color: #fff; min-height: 33px;}
    .btn_submit:hover{background-color:#0055A5;color:#fff;}
    @media screen and (max-width: 768px){
    .btn_submit{margin-left: 40%;}
    .btn_signup{text-align: center;}
    }
      .forgot_password{float:right; color:##FF7900;}
      .forgot_password:hover{color: #FF6600;text-decoration: none;}
    </style>

<?php //echo md5('Abhra@12'); ?>

<style>
.error{
  color:red;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />

<meta name="description" content="Candidate Signup | Search CAD CAM CAE CFD PLM BIM Jobs"/>
<?php if($this->uri->segment(3) == "popup")
{ ?>

<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/grid.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/layout.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontello.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/new_custom.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico"/>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.bxslider.css" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/easy-responsive-tabs.css " />
<link type="text/css" href="<?php echo base_url()?>assets/css/menu-css.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/gridslider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.multiselect.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php } ?>
<title>Candidate Signup | Search CAD CAM CAE CFD PLM BIM Jobs</title>

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
  <body><div class="se-pre-con"></div>
<!--Top bar-->
            <!-- <style>
                    body {margin:0;}

                    .topnav {
                      overflow: hidden;
                      background-color: #FF7900;
                    }

                    .topnav a {
                      float: left;
                      display: block;
                      color: #fff;
                      text-align: center;
                      padding: 5px 16px;
                      text-decoration: none;
                      font-size: 14px;
                    }

                    .topnav a:hover {
                      background-color: #0055A5;
                      color: #fff;
                    }

                    .active {
                      background-color: #0055A5;
                      color: #fff;
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
                        text-align: center;
                      }

                    }
                    .log_btn{text-transform: capitalize; background-color:#0055A5;}
                    .log_btn:hover{background-color:#FF7900; }
                  @media screen and (max-width: 768px){
                    .new_logo{text-align: center;}
                  }

          </style>


        <div class="container-fluid header" id="myheader">
          <div class="row" style="background-color: #FF7900;margin-top: -40px ;">
            <div class="container" style="text-align: center;max-width: 1000px;border:0px solid red;padding: 0 -10px;" align="center">
              <div class="topnav" id="myTopnav" align="center">
                  <a style="background-color: transparent;">Browse jobs <span style="font-weight: bold;">↔</span> </a>
                  <a href="<?php echo base_url();?>best_design_jobs/search" style="text-transform: capitalize;">All jobs</a>
                  <a href="<?php echo base_url();?>CAD-Jobs" style="text-transform: capitalize;">Cad jobs</a>
                  <a href="<?php echo base_url();?>CAE-Jobs" style="text-transform: capitalize;">Cae jobs</a>
                  <a href="<?php echo base_url();?>CFD-Jobs" style="text-transform: capitalize;">Cfd jobs</a>
                  <a href="<?php echo base_url();?>BIM-Jobs" style="text-transform: capitalize;">Bim jobs</a>
                  <a href="<?php echo base_url();?>CAD-Sales-Jobs" style="text-transform: capitalize;">Cad sales jobs</a>
                  <a href="<?php echo base_url();?>CAD-Developer-Jobs" style="text-transform: capitalize;">Cad programming jobs</a>
                  <a href="<?php echo base_url();?>employer/login" class="log_btn" style="">For Employer</a>
               
                  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
              </div>
            </div>
          </div>
        </div>

        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>     

      <br><br> -->
<!--End Top Bar-->
<style type="text/css">
  .top_{font-size: 16px;background-color: #0055a5;border-radius: 4px;color:#fff;height: 35px;line-height: 35px;vertical-align: middle;}
  .top_login{color:#FF7900;}
  .top_login:hover{color:#fff;text-decoration: none;}
</style>


<?php $exam_id=$this->uri->segment(3);?>

<div class="main-container">
        <section class="wht-bg">
<?php //echo $segment; ?>        
        <section class="section">
              <div class="container" style="border-left:1px solid #cccccc;border-right:1px solid #cccccc;">
          <div class="row " align="center">
            <div class="col-md-3 col-xs-1"></div>
              <div class="col-md-6 col-xs-10 top_">
                Start Exam
              </div>
            <div class="col-md-3 col-xs-1"></div>
          </div>

                <div class="container-inner line-sepa-bottom" style="">
                    <div class="row" style="margin-top: -25px;"><div class="col-md-3 col-xs-1"></div>

                        <div class="col-md-6 col-xs-10 " style="box-shadow:2px 2px 5px 2px #cccccc;">
                        <div class="" style="width: 100%;">
                        

                        <?php if($this->session->flashdata('error')){
                $msg = $this->session->flashdata('error');?>
                    <div class="alert alert-danger alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: red">  <?php echo $msg; ?>
                </div>
                <br/>
                <?php } if($this->session->flashdata('email_exists')){
                $msg = $this->session->flashdata('email_exists');?>
                    <div class="alert alert-info alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: blue;">  <?php echo $msg; ?>
                    <a href="<?php echo base_url();?>candidate/login/exam/<?php echo $exam_id;?>"><button class="btn btn-success">Login</button></a>
                </div>
                <br/>
                <?php } if($this->session->flashdata('applied')){
                $msg = $this->session->flashdata('applied');?>
                    <div class="alert alert-info alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: blue;">  <?php echo $msg; ?>
                   
                </div>
                <br/>
                <?php } ?>


          
                    <!-- <h1 style="color: #0055A5;">Candidates Sign In!</h1>
                      <p>Don't miss out an opportunity, just login to your account now and search for the latest jobs. Always use your updated CV to apply for jobs!!</p> -->

                            <!--Test Sign in-->
                                            

                            <!--End Test Sign in-->

                            <!-- Sign in -->
                            <!-- <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data">
                              <label for="email">Email</label>
                              <input type="text" name="email_id" id="email_id" required=""/>
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" required="" />
                              <label for="checkbox3">                              
                              <input type="checkbox" name="checkbox3" id="checkbox3" /> Remember me                               
                              <a style="float:right" href="<?php //echo base_url('candidate/forgot_password')?>">Forgot Password?</a>
                              </label>
                              <center> <input type="submit" name="login" id="button2" value="Sign in" class="button" /></center>                             
                            </form> -->
                            <!-- Sign in -->
                    </div>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-3 col-xs-1"></div>
                        <div class="col-md-6 col-xs-10" style="box-shadow:2px 2px 5px 2px #cccccc;">
                        <div class="" style="width: 100%;">
                          <?php
              if($this->session->flashdata('sucess')){
                   $succesmsg = $this->session->flashdata('sucess');?>
                 <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
                 <br/>
                 <?php } ?>
                          <h2 style="color: #0055A5;padding:0px 10px;font-size: 24px;text-align: center;border-bottom: none;">Submit Details<!-- Candidate Registration --></h2>
                            <!-- <p style="padding:10px 10px;">You will be able to Add your Profile, Upload CV, Search & Apply for Jobs, Find Popular Recruiters. Join CADnaukri today, its FREE!</p> -->
                      <!-- <p style="padding:10px 10px;">Already have your account with us! Please Sign-In on right</p> -->
                           
                              
                  <div class="span3 " style="">
                       <form style="" id="f1" action="" method="post" >
              <input class="span3" name="name" placeholder="Full Name" type="text" onkeyup="validatename(this)" id="name" required><label id="errname"></label>
                          <input class="span3" name="email" placeholder="Email" type="email" onkeyup="validateemail()" id="emailid" required><label id="erremail"></label>
                          <input class="span3" name="mobile" placeholder="Mobile Number" maxlength="10" type="tel" onkeyup="validateno(this)" id="phoneno" required><label id="errno"></label>
<label for="checkbox" class="smltxtlbl">
                               <input type="checkbox" name="checkbox" id="checkbox" required />
By clicking Create an account, you agree to our<a href="<?php echo base_url();?>Terms-And-Conditions" class="pa"> Terms and conditions</a> that you have read our<a href="<?php echo base_url();?>Privacy-Policy" class="pa"> Privacy Policy </a>. You may receive SMS message notifications from Facebook and can opt out at any time.</label>

                          <center><button class="btn btn-success btn_signup" onclick="validate()" type="submit" style="">Start</button>
                           <button class="btn btn-default btn_reset" type="reset" style=""> Reset </button></center><br>
                           
                       </form>
                  </div><label id="signup"></label>
                              
                    </div>
                    </div>  
                    </div>
                  </div>

                  </div></div>
                  </section>       
        
          
        </section>

      </div>
<br>
        <style type="text/css">
         .pa:hover{
            color: #FF6600;
            text-decoration: none;}
            input.span3::-moz-placeholder{color:#0055A5; opacity: .5;}
          

        </style>
  
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
$('#confirmpassword').change(function() {
  var pass1 = $("#password_sign").val();
    var pass2 = $("#confirmpassword").val();
     document.getElementById('errcpwd').innerHTML="";
    if(pass1 == '')
    {
       document.getElementById('errcpwd').innerHTML="First fill up the password field";
        document.getElementById("confirmpassword").value='';
       $('#signup_form').attr('disabled', 'disabled');
      
  }
  else if (pass1 != pass2) {
        document.getElementById('errcpwd').innerHTML="Doesnot match with password";
         document.getElementById("confirmpassword").value='';
         $('#signup_form').attr('disabled', 'disabled');
       
    }
    else
    {
        $('#signup_form').prop('disabled', false);
     //$('#signup_form').attr('disabled', 'disabled');
  }
});
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



<script>
function validate()
{
  if(!validatename() || !validateemail() || !validateno())
  {
    show("signup");
    document.getElementById("f1").reset();
    dislabel("Enter Valid Details","signup","red");
    return false;
    
  }
  else
  {
    return true;
  }

}

function show(id)
{
  document.getElementById(id).style.display="block";
  return false;
}
function hide(id)
{
  document.getElementById(id).style.display="none";
  return true;
}


function validatename(txt)
{
  var name=document.getElementById("name").value;
  if(name.length == 0)
  {
    dislabel("Required Name","errname","red");
    return false;
  }
  else
  {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g, '');
    dislabel("Hello "+name,"errname","green");
    return true;
  }
}
function validateemail()
{
  var name=document.getElementById("emailid").value;
  if(name.length == 0)
  {
    dislabel("Required Email","erremail","red");
    return false;
  }
  else if(!name.match(/^[A-Za-z\-._0-9]*[@][a-zA-Z0-9]*[\.][A-Za-z]{1,4}[\.]{0,1}[a-z]{1,4}$/))
  {
    dislabel("Enter Valid Email","erremail","red");
    return false;
  }
  else
  {
    dislabel("Valid Email","erremail","green");
    return true;
  }
}
function validateno(txt)
{
  var name=document.getElementById("phoneno").value;
  if(name.length == 0)
  {
    dislabel("Required phone Number","errno","red");
    return false;
  }
  else if(name.length != 10)
  {
    txt.value = txt.value.replace(/[^0-9 ]+/g, '');
  dislabel("Enter 10 Valid Digits","errno","red");
    return false;
  }
  else if(!name.match(/^[987]{1,1}[0-9]{9,9}$/))
  {
    dislabel("Enter Valid Number","errno","red");
    return false;
  }
  else
  {
    dislabel("Valid Number","errno","green");
    return true;
  }
}
function dislabel(msg,plocation,color)
{
  document.getElementById(plocation).innerHTML = msg;
  document.getElementById(plocation).style.color = color;
}
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g, '');
}
</script>
