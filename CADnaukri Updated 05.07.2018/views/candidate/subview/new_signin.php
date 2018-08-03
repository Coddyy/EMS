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
                        

                        <?php if($this->session->flashdata('error')){
                $msg = $this->session->flashdata('error');?>
                    <div class="alert alert-danger alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: red">  <?php echo $msg; ?>
                </div>
                <br/>
                <?php } if($this->uri->segment(2) == "sign_up_success"){

                       if($this->session->flashdata('success')){ ?>
                       <div class="alert alert-success">
                         <a href="#" class="close" data-dismiss="alert">&times;</a>
                         <strong>Your</strong> <?php echo $this->session->flashdata('success'); ?>
                       </div>
                  <?php } } if($this->uri->segment(2) == "sign_up_failed"){

                       if($this->session->flashdata('error')){  ?>
                      <div class="alert alert-danger">
                         <a href="#" class="close" data-dismiss="alert">&times;</a>
                         <strong>Sign Up</strong> <?php echo $this->session->flashdata('error'); ?>
                      </div>
                  <?php } } ?>


          
                    <h1>Candidates Sign In!</h1>
                      <p>Don't miss out an opportunity, just login to your account now and search for the latest jobs. Always use your updated CV to apply for jobs!!</p>
                            <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data">
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
                           
                              
                  <div class="span3 well">
                       <form id="f1" action="<?php echo base_url();?>signup/sign_up" method="post">
              <input class="span3" name="name" placeholder="Full Name" type="text" onkeyup="validatename()" id="name" required><label id="errname"></label>
                          <input class="span3" name="email" placeholder="Email" type="email" onkeyup="validateemail()" id="emailid" required><label id="erremail"></label>
                          <input class="span3" name="mobile" placeholder="Mobile Number" maxlength="10" type="tel" onkeyup="validateno()" id="phoneno" required><label id="errno"></label>
                          <button class="btn btn-warning" onclick="validate()" type="submit">Sign up</button>
                       </form>
                  </div><label id="signup"></label>
                              
                             
        
          
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


function validatename()
{
  var name=document.getElementById("name").value;
  if(name.length == 0)
  {
    dislabel("Required Name","errname","red");
    return false;
  }
  else
  {
    dislabel("Hey "+name,"errname","green");
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
function validateno()
{
  var name=document.getElementById("phoneno").value;
  if(name.length == 0)
  {
    dislabel("Required phone Number","errno","red");
    return false;
  }
  else if(name.length != 10)
  {
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
</script>
