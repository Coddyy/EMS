  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



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
		<title>Reset Email</title>
<style type="text/css">
/*Start Make pramary*/
	.mobile_btn{background-color:#FF7900;color:#fff;padding: 7px; }
	.mobile_btn:hover{background-color:#0055A5;}
	.desktop_btn{margin-top:-6px;margin-bottom: -5px;padding: 7px;margin-right: -9px;background-color:#FF7900; }
	.desktop_btn:hover{background-color:#0055A5;}
	.desktop{display: show;}
	.mobile{display: none;}
	@media screen and (max-width: 768px){
		.desktop{display: none;}
		.mobile{display: block;}
		div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
	}
/* End Make pramary*/

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

                <?php  if($this->session->userdata('candidate_id'))
                        { ?>


                          <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>candidate/dashboard">Dashboard</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>candidate/my_profile">My profile</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/update_cv">Update CV</a></li>
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
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/working_on_it">Upgrade Service</a></li>
                    
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

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>                
                                     
                  </ul>

                         
                       <?php } else if($this->session->userdata('emp_id')){?>

                        <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                      <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/dashboard">Dashboard</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Application-Recieved">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>
                 
                  </ul>


                         
                        <?php } ?>

                  
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->
<style type="text/css">
	

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 20px;
 	margin-bottom: 20px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    /*-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);*/
    /*-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);*/
    /*box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);*/

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 600px;
    padding: 40px 50px;
    height: 300px;
    text-align: center;

}
@media screen and (max-width: 768px){
	.main-center{height: auto;padding: 40px 15px;}
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

</style>

<style type="text/css">
	.con{margin-top: 50px;margin-bottom: 50px;box-shadow: 5px 5px 5px #cccccc;border-top: 1px solid #cccccc;width:800px;height: 520px;}
    @media screen and (max-width: 768px){
        .con{margin-top: 0px;margin-bottom: 0px;width: auto;height: auto;}
    }
    a:hover{text-decoration:none;}
 .panel_head{margin: 2px 2px;font-size: 20px;background-color: #0055A5;color:#fff;padding: 2px; }
 /*.panel_main{box-shadow: 5px 5px 5px #cccccc;}*/
    .a1{height: 500px;max-width: 500px;}
    .post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;background-color:#0055A5;color:#fff; }
    .post_btn:hover{background-color:#FF7900; }
    .ver_link{width: 200px;box-shadow: 5px 5px 5px #cccccc;background-color:#0055A5;color:#fff;margin-bottom: -30px; }
    .ver_link:hover{background-color:#FF7900; }

    @media screen and (max-width: 768px){
    	..panel_head{color:red;}
        .a1{height: auto;}
        .post_btn{width:150px;}
        .ver_link{width: 200px;}
    }
</style>
	</head>
	<body>
		<div class="container con">
			<div class="row main" >
			<?php if($this->uri->segment(2) == "wrong_password")
					 {
				?>
						<div class="alert alert-danger" style="margin:0px 20px 20px 20px;">
						  <center><b style="font-size: 20px;">Oops! Password is incorrect</b></center>
						</div>
				<?php }
				else if($this->uri->segment(2) == "verification_sent")
				{ ?>
						<div class="alert alert-success" style="margin:0px 20px 20px 20px;">
						  <center><b style="font-size: 20px;">Verification link has been sent on your registered email.</b></center>
						</div>

				<?php } ?>
				<div class="main-login main-center" style="border:0px solid red;">
<?php if($this->uri->segment(2) == "reset_email" || $this->uri->segment(2) == "wrong_password")
{ ?>				

	<div class="panel-group a1" style="border:0px solid red;margin-top: -40px;">
    <div class="panel panel-primary panel_main">
      <div class="panel-body" style="">
          <div class="panel-heading panel_head">
            <h4 align="center" style="color:#fff;">Enter Password</h4>
        </div>
          <div class="panel-body" style="border: 0px solid #0055A5;border-top: none;border-radius: 4px;">
					<form class="form-horizontal" method="post" action="">
						<!-- <h3 align="center">Enter Password</h3> -->
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Current Email" value="<?php echo $this->session->userdata('email');?>" required/>
								</div>
								<br />
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your password" required />
								</div>
							</div>
						</div>
<br>
						<div class="form-group ">
							<button type="submit" class="ver_link" name="verify" value="Reset Email"/>Send Verification Mail</button>
						</div>
					</form>
<?php } else if($this->uri->segment(2) == "change_email")
{ ?>
	<div class="panel-group a1" style="border:0px solid red;margin-top: -40px;">
    <div class="panel panel-primary panel_main">
      <div class="panel-body" style="">
          <div class="panel-heading panel_head">
            <h4 align="center">New Email</h4>
        </div>
          <div class="panel-body" style="border: 1px solid #0055A5;border-top: none;border-radius: 4px;">

					<form class="form-horizontal" method="post" action="">
						
						<div class="form-group" style="padding:20px 20px;">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<?php 
											if($this->Candidate_M->isLoggedin() == TRUE)
											{
												$candidate_id=$this->session->userdata('candidate_id');
												$result=$this->Candidate_M->check_secondary_email_exists($candidate_id) ;
												$value=($result!= false ? $result : '');
											}
											else if($this->Employee_M->isLoggedin() == TRUE)
											{
												$emp_id=$this->session->userdata('emp_id');
												$result=$this->Employee_M->check_secondary_email_exists($emp_id);
												$value=($result!= false ? $result : '');
											}
										?>
									<input type="text" class="form-control" name="s_email" id="email" value="<?php echo $value;?>" placeholder="New Email" readonly required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="post_btn" name="change_email" value="Reset Email"/>Reset Email</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php } else if($this->uri->segment(2) == "add_secondary_email"){ 


?>

		<div class="panel-group a1" style="border:0px solid red;margin-top: -40px;">
		    <div class="panel panel-primary panel_main">
		      <div class="panel-body" style="">
		          <div class="panel-heading panel_head">
		            <h4 align="center" style="color:#fff;">Update Secondary Email</h4>
		        </div>
		          <div class="panel-body" style="border: 0px solid #0055A5;border-top: none;border-radius: 4px;">
							<form class="form-horizontal" method="post" action="">
								<!-- <h3 align="center">Enter Password</h3> -->
								<div class="form-group">
                      				<label for="primary email" class="col-sm-12" style="margin:2px 0px;text-align: left;color:#000;">Primary Email</label>

									<div class="col-sm-12">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope fa" aria-hidden="true"></i>
											</span>											
											<input type="text" class="form-control" name="email" id="p_email"  placeholder="Current Email" value="<?php echo $this->session->userdata('email');?>" readonly required/>
										</div>
										<br />
									</div>
                      				<label for="secondry email" class="col-sm-12" style="margin:2px 0px;text-align: left;color:#000;">Secondry Email</label>
                      				<div class="col-sm-12" style="border:0px solid red;color:#000;">
										<div class="input-group" style="border:0px solid red;margin: 0px 0;">
											<span class="input-group-addon">
												<i class="fa fa-envelope fa" aria-hidden="true"></i>
											</span>


											
										<?php 
											if($this->Candidate_M->isLoggedin() == TRUE)
											{
												$candidate_id=$this->session->userdata('candidate_id');
												$result=$this->Candidate_M->check_secondary_email_exists($candidate_id) ;
												$value=($result!= false ? $result : '');
											}
											else if($this->Employee_M->isLoggedin() == TRUE)
											{
												$emp_id=$this->session->userdata('emp_id');
												$result=$this->Employee_M->check_secondary_email_exists($emp_id);
												$value=($result!= false ? $result : '');
											}
										?>
											<input type="email" class="form-control" name="secondary_email" id="s_email"  placeholder="Secondary Email" value="<?php echo $value;?>" onclick="check_same()" onkeyup="check_same()" onkeypress="check_same()" onmouseout="check_same()" required/>
											<input type="hidden" id="second_email" value="<?php echo $value;?>"></input>

											<span class="input-group-addon desktop"><a href="<?php echo base_url();?>employer/reset_email"><button onmouseenter="check_same()" id="mp" type="button" class="btn-info pull-right desktop_btn" style="">Make Primary</button></a></span>

										</div>
										<?php 
										if($this->Candidate_M->isLoggedin() == TRUE)
										{

											$candidate_id=$this->session->userdata('candidate_id');
											if($this->Candidate_M->check_secondary_email_exists($candidate_id) != false){ 
									?>
									<span class="input-group mobile pull-right">
											<a href="<?php echo base_url();?>candidate/reset_email"><button onmouseenter="check_same()" id="mp" type="button" class="mobile_btn btn-info">Make Primary</button></a>
									</span>

									<?php  } }else if($this->Employee_M->isLoggedin() == TRUE)
											{ 
												$emp_id=$this->session->userdata('emp_id');
												if($this->Employee_M->check_secondary_email_exists($emp_id) != false){ 
									?>


											<span class="input-group mobile pull-right"><a href="<?php echo base_url();?>employer/reset_email"><button onmouseenter="check_same()" id="mp" type="button" class="mobile_btn btn-info">Make Primary</button></a></span>

									<?php } } ?>
									</div>
								</div>
<br>
								<div class="form-group ">
									<input id="save" onmouseenter="check_same()" type="submit" class="save_btn" name="secondary" value="Save"  />
								</form>
									
								</div>

								<style type="text/css">
									input.save_btn{background-color: #0055A5;font-size: 20px;height: 30px;margin-bottom:-20px;}
									input.save_btn:hover{background-color:#FF7900;}
                  input.back_btn{font-size: 18px;color:#0055a5;}
                  @media screen and (max-width: 768px){
                    input.back_btn{margin-bottom:10px;}
                  }
								</style>
							



<?php } else if($this->uri->segment(2) == "email_changed_successfully"){ 
?>

					<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<div class="alert alert-success">
						  				Email Changed Successfully. Redirecting.....
									</div>
								</div>
							</div>
						</div>
<?php 
			$session=$this->uri->segment(3);

?>
		<script type="text/javascript">
			// Your application has indicated there's an error
		    window.setTimeout(function(){

		        // Move to a new location or you can do something else
		        window.location.href = "<?php echo base_url();?><?php echo $session;?>/login";

		    }, 3000);
		</script>

<?php 	$this->session->sess_destroy(); }?>
				</div>
			</div>
		</div>

	</div></div></div>
<!--Change back button session-->
  <div class="row" align="center">
    <a href="<?php echo base_url()?>candidate/profile/contact_details">
<input type="button" class="btn btn-default back_btn" value="Back"></a>
</div>
<!--Change back button session-->




</div>
	</body>
</html>

<script type="text/javascript">

	function check_same()
	{
		var primary_email=document.getElementById('p_email').value;
		var secondary_email=document.getElementById('s_email').value;
		var value=document.getElementById('second_email').value;
		if(primary_email == secondary_email)
		{
			alert("You can't use primary email");
			document.getElementById('s_email').value=value;
			
		}
		else
		{
			//alert("OK"); //Do Noting
		}
	}

</script>