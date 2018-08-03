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



  <title>Post Ad</title>


<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
  
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
<!--End Top bar-->

 <style type="text/css">
 a:hover{text-decoration:none;}
 div.panel_head{margin: 2px 2px;font-size: 18px;background-color:#0055A5;color:#fff;}
 .panel_main{box-shadow: 5px 5px 5px #cccccc;}
 	.a1{height: 500px;max-width: 500px;}
 	.post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;background-color:#0055A5;border:none; }
  .post_btn:hover{background-color:#FF7900; }
 	@media screen and (max-width: 768px){
 		.a1{height: auto;}
 		.post_btn{width:100px;}
  }
    .con{margin-top: 50px;margin-bottom: 50px;box-shadow: 5px 5px 5px #cccccc;border-top: 1px solid #cccccc;width:800px;}
    @media screen and (max-width: 768px){
        .con{margin-top: 0px;margin-bottom: 0px;width: auto;}
    }
 	
 </style>
<div class="container con">
	<!-- <a href="<?php //echo base_url('employer/dashboard'); ?>" class="pull-right"><button class="btn btn-primary post_btn">Dashboard</button></a><br> -->
  <h2 align="center" class="">Post Your Ad Here! </h2>
  <center>
  <div class="panel-group a1"><br>
    <div class="panel panel-primary panel_main">
      <div class="panel-heading panel_head">What You Want To Post ?</div>
      <div class="panel-body" style="">
      	<!-- <a href="<?php echo base_url('employer/add_internship') ?>"><button class="btn btn-primary pull-left post_btn">INTERNSHIP</button></a> -->
        <?php 
                  if(!empty($company_data))

                  {

                    echo '<a href="'.base_url('employer/add_internship').'" class="btn btn-primary pull-left post_btn" style="" >INTERNSHIP</a>';

                  }

                  else 

                  {

                    echo '<a href="#" class="btn btn-primary pull-left post_btn" onclick="show_alert()">INTERNSHIP</a>';

                  }

                ?>
      	<!-- <a href="<?php echo base_url('employer/add_job') ?>"><button class="btn btn-primary pull-right post_btn">JOB</button></a> -->
        <?php 
                  if(!empty($company_data))
                  {
                    if($this->Employee_M->is_company_mail_verified($this->session->userdata('emp_id')) == TRUE)
                    {
                        echo '<a href="'.base_url('employer/add_job').'" class="btn btn-primary pull-right post_btn" style="" >JOB</a>';
                    }
                    else
                    {
                      echo '<a href="#" class="btn btn-primary pull-right post_btn" onclick="show_alert2()">JOB</a>';
                    }

                    

                  }

                  else 

                  {

                    echo '<a href="#" class="btn btn-primary pull-right post_btn" onclick="show_alert()">JOB</a>';

                  }

                ?>
      </div>
    </div> 
  </div>
</center>
</div>
<script type="text/javascript">
  
function show_alert()
{

  alert('Add Company Details Before Proceeding');
  window.location="<?php echo base_url();?>employer/add_company";
}
function show_alert2()
{

  alert('Please Verify Your Company Email Before Proceeding');
  window.location="<?php echo base_url();?>Employer/Company-Profile"

}
</script>


