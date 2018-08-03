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
    <div class="se-pre-con"></div>
<title>Employer | Update Password</title>
<style type="text/css">
.next{background-color:#FF6600;color:#fff;}
.next:hover{background-color: #0055A5;}
    .con{margin-top: 30px;margin-bottom: 50px;box-shadow: 5px 5px 5px #cccccc;border-top: 1px solid #cccccc;width:800px;}
    @media screen and (max-width: 768px){
        .con{margin-top: 0px;margin-bottom: 0px;width: auto;}
    }
</style>
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
  
</style>

<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100%;}
    .next{width: 100%;}
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
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/logout') ?>">Log Out</a></li>
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <style type="text/css">
 a:hover{text-decoration:none;}
 .panel_head{margin: 2px 2px;font-size: 18px;background-color: #0055A5;color:#fff;text-align: center; }
 .panel_main{box-shadow: 5px 5px 5px #cccccc;}
    .a1{height: 500px;max-width: 500px;}
    .post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;background-color:#0055A5;color:#fff; }
    .post_btn:hover{background-color:#FF7900; }
    .post_btn1{width: 80px;box-shadow: 5px 5px 5px #cccccc;background-color:#0055A5;color:#fff; }

    .post_btn1:hover{background-color:#FF7900; }

    @media screen and (max-width: 768px){
        .a1{height: auto;}
        .post_btn{width:100px;}
    }
 </style>

    <!-- <a href="<?php //echo base_url('employer/dashboard'); ?>" class="pull-right"><button class="btn btn-primary post_btn">Dashboard</button></a><br> -->
  <div class="container con">
  <center>
  <div class="panel-group a1"><br><br><br>
    <div class="panel panel-primary panel_main">
      <div class="panel-body" style="">
          <div class="panel-heading panel_head">
            Reset Password
        </div><br>
          <div class="panel-body" style="border: 1px solid #0055A5;border-top: none;border-radius: 4px;">
            <form class="form-horizontal" action="" method="post" id="f1" onsubmit="return validate()">
                    <fieldset style="border:none;">
                <div class="form-group">
                <label class="control-label col-sm-4" align="left" for="password">New Password</label>
                <div class="col-sm-8">
                  <input class="form-control" onkeyup="validatepass()" id="pass" placeholder="Password" name="password" type="password" required>
                </div>
              </div>
              <label id="errpass"></label>
              <div class="form-group">
              <label class="control-label col-sm-4" align="left" for="confirm">Confirm Password</label>
                <div class="col-sm-8">              
                <input class="form-control" id="cpass" onkeyup="validatecpass()" placeholder="Confirm Password" name="confirm_password" type="password" value="" required>
              </div>
              </div>
              <label id="errcpass"></label>
              <button type="submit" align="center" onclick="validate()" class="post_btn"> Update</button>
              <label id="signup"> </label>
            </fieldset>
              </form>              
          </div>
      </div> 

        <!-- <a href="<?php echo base_url();?>employer/dashboard"><button class="pull-left btn btn-primary">Dashboard</button></a>
        <a href="<?php echo base_url();?>employer/logout"><button class="pull-right btn btn-warning">Logout</button></a> -->
      </div>
              <div class="row">
                <div class="col-md-12 col-xs-12" style="margin-top: 20px;">
                <a href="<?php echo base_url();?>employer/dashboard"><button class="post_btn1">Back</button></a>
              </div>
              </div>
    </div> 
              
</center>
</div>
<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});

function validate()
{
  if( !validatepass() || !validatecpass())
  {
    show("signup");
    dislabel("Enter Valid Details","signup","red");
    document.getElementById("f1").reset();
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
  return;
}
function hide(id)
{
  document.getElementById(id).style.display="none";
}

function validatepass()
{
  var name=document.getElementById("pass").value;
  if(name.length < 8)
  {
    dislabel("Enter at least 8 characters","errpass","red");
    return false;
  }
  else if(name.length > 16)
  {
    dislabel("Oops! Max length 16 characters!","errpass","red");
    return false;
  }
  // else if(!name.match(/^[A-Z]{1,}[a-z]{1,}[!@#$%^&*\-\.\_]{1,}[0-9]{1,}[A-Za-z0-9!@#$%^&*\-\.\_]*$/))
  else if(!name.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$#@$!%*?&])[A-Za-z\d$#@$!%*?&]{8,16}$/))
  {
    dislabel("Should have 1 Capital, Small, Number and Special","errpass","red");
    return false;
  }
  else
  {
    dislabel("Great!","errpass","green");
    return true;
  }
}
function validatecpass()
{
  var password=document.getElementById("pass").value;
  var confirm_password=document.getElementById("cpass").value;
  if(password != confirm_password)
  {
    dislabel("Don't Copy!, Please Type Your Password","errcpass","red");
    return false;
  }
  else
  {
    dislabel("Matched","errcpass"," green");
    return true;
  }
}

function dislabel(msg,plocation,color)
{
  document.getElementById(plocation).innerHTML = msg;
  document.getElementById(plocation).style.color = color;
}
</script>