<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<title>
Queries
</title>
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
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url(); ?><?php echo $session;?>/dashboard" >Dashboard</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<style>
fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 10px;
    
    background: #fbfbfb;
}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:red;
    font-size: 112%;
}
.post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;}
@media screen and (max-width: 768px){
        .post_btn{width:100px;}
    }

</style>
<br />
<br />
<div class="container" style="border: 0px solid red;" >
<!-- <a href="<?php //echo base_url('employer/dashboard'); ?>" class="pull-right"><button class="btn btn-primary post_btn">Dashboard</button></a><br>
 -->
	<div class="row">
    <div class="col-md-3">&nbsp</div>
        <div class="col-md-6 col-xs-12">
            
                <!-- <img src="<?php echo base_url();?>assets/images/query.png" /> -->
            
        </div>
        <div class="col-md-6 col-xs-12" >
        <?php if($this->uri->segment(1) == "Query-saved"){ ?>
            <div class="alert alert-success">
              Your Query Has Been Saved Successfully
            </div>
        <?php } else if($this->uri->segment(1) == "Query-not-saved"){ ?>
            <div class="alert alert-danger">
              Oops! Query Not Saved
            </div>
        <?php } ?>
        <?php if($this->uri->segment(2) == "Re-Opened"){ ?>
            <div class="alert alert-info">
              Your Query Has Been Re Opened
            </div>
        <?php } else if($this->uri->segment(2) == "Re-Opened-Failed"){ ?>
            <div class="alert alert-danger">
              Oops! Query Not Saved
            </div>
        <?php } ?>
            <form action="" method="post" id="query" role="form" enctype="multipart/form-data">
            <fieldset><legend class="text-center">Valid information is required for any queries. <!--<span class="req"> <small> required *</small></span> --></legend>

            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Full name: </label>
                    <input class="form-control" type="text" placeholder="Full Name" name="name" id = "txt" onkeyup = "Validate(this)" value="<?php echo $userdata[0]; ?>" required /> 
                        <div id="errFirst"></div>    
            </div>
            
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="mobile" id="phone" class="form-control phone" maxlength="10" onkeyup="validatephone(this);" value="<?php echo $userdata[2]; ?>" placeholder="Mobile" required="" /> 
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" value="<?php echo $userdata[1]; ?>" placeholder="Email" name="email" id = "email"  onkeyup="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">     
                <label for="firstname"><span class="req">* </span> Related To </label>
                    <select name="related_to" required="">
                        <option value="SALES">Sales</option>
                        <option value="JOB-POST">Job Post</option>
                        <option value="WEB-PAGE">Web Pages</option>
                        <option value="PLACEMENT">Placement</option>
                    </select>    
            </div>

            <div class="form-group">     
                <label for="firstname">I am</label>
                    <select name="query_from" required="">
                        <option value="<?php echo $is_active; ?>" selected="" ><?php echo $is_active; ?></option>
                    
                    </select>    
            </div>

            <div class="form-group">     
                <label for="firstname"><span class="req">* </span> Comments </label>
                    <input class="form-control" style="width:100%;" type="textarea" placeholder="Comment" name="comments" id = "txt" onkeyup = "Validate(this)" maxlength="150" required /> 
                        <div id="errFirst"></div>    
            </div>
            <div class="form-group">     
                <label for="firstname"><span class="req"> </span> Screenshot ( If Any ) </label>
                    <input class="form-control" style="width:100%;" type="file" name="screenshot" /> 
                        <div id=""><span style="color:orange;" ><small>[ Size Should be less than 50 kb ]</small></span></div>    
            </div>
           

            

            <div class="form-group" align="center" style="">
                <button class="btn btn-success" type="submit" name="submit_reg" onclick="validate()">Shoot</button>
            </div>
            <div class="status" id="shoot"></div>
 

            </fieldset>
            </form><!-- ends register form -->
        </div><!-- ends col-6 -->
        <div class="col-md-3">&nbsp</div>
	</div>
</div>
<br />
<br />
<script>
function validate()
{
    alert(screentshot.files[0].size);
    if(!email_validate())
    {
        show("shoot");
        queryprompt("Enter Valid Details","shoot","red");
        document.getElementById("query").reset();
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
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g, '');
}
// validate email
function email_validate(email)
{
    var email=document.getElementById("email").value;
    if(email.length == 0)
    {
        queryprompt("Required Email","status","red");
        return false;
    }
    else if(!email.match(/^[A-Za-z0-9.\-_]{1,}@[A-Za-z]{1,}\.[a-z]{2,4}$/))
    {
        queryprompt("Enter Valid Email","status","red");
        return false;
    }
    else
    {
        queryprompt("Good To Go","status","green");
        return true;
    }
}
function queryprompt(msg,plocation,color)
{
    document.getElementById(plocation).innerHTML = msg;
    document.getElementById(plocation).style.color = color;
}

</script>