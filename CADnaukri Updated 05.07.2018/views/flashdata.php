<br />
<div class="container">
<?php if($this->uri->segment(2) == "sign_up_success"){ ?>
	<div class="alert alert-success" align="center" style="color: #336434";>
  		Set password link is sent to the registered email!<br>
  		Please check your SPAM folder if necessary
	</div>
	<div style="border: 0px solid red;margin-bottom: 245px; text-align: center;">
	<a href="<?php echo base_url();?>"> Back to home</a>
<?php } else if($this->uri->segment(2) == "email_already_exist"){?>
	<div class="alert alert-info">
  		This email is already registered with us.
	</div>

	<a href="<?php echo base_url();?>"> Back to home</a> 
<?php } else if($this->uri->segment(2) == "link_expired") { ?>
	<div class="alert alert-danger position" align="center" style="background-color: ;border: 0px solid red; max-width: 1000px;">
  		Your verification link has expired!<br>
  		Contact Admin: <a href="#"> "feedback@cadnaukri.com"</a>
  		<br>
	</div>
	<div style="border: 0px solid red;margin-bottom: 245px; text-align: center;">
	<a href="<?php echo base_url();?>"> Back to home</a>
<?php } else if($this->uri->segment(2) == "password_set_failed") { ?>
	<div class="alert alert-danger">
  		Password setting failed!<br>
  		Contact Admin: <a href="#"> "feedback@cadnaukri.com"</a>
	</div>
</div>
	<a href="<?php echo base_url;?>"> Back to home</a>

<?php } else if($this->uri->segment(2) == "not_authorized") { ?>
	<div class="alert alert-danger">
  		We're working on this.. Please bear with us!
	</div>
	<a href="<?php echo base_url;?>"> Back To Home</a>
<?php } else if($this->uri->segment(2) == "rpassword_set_success"){ ?>
	<div class="alert alert-success">
  		Your password is set successfully :)
	</div>
	<a href="<?php echo base_url();?>employer/login"><button style="background-color: #00ff80;color:black;"> Login Now</button></a>
<?php } ?>
</div>
</div>
<style type="text/css">
	
	.position{background-position: center;
	}
</style>