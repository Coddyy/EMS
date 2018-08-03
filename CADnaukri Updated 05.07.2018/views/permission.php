<?php if($this->uri->segment(2) == "permission"){ ?>
	<br />
	<a href="<?php echo base_url();?>signup/allow_sign_up" align="center"><button class="btn btn-success">Allow Sign UP</button></a>
	<br />
	<br />
	<a href="<?php echo base_url();?>signup/stop_sign_up"  align="center"><button class="btn btn-danger">Stop Sign Up</button></a>
	<br />
	<br />

<?php } else if($this->uri->segment(2) == "allow_sign_up"){ ?>

	<br />
	<a href="<?php echo base_url();?>signup/stop_sign_up"><button class="btn btn-danger">Stop Sign Up</button></a>
	<br />
	<br />
	
<?php } else if($this->uri->segment(2) == "stop_sign_up"){ ?>
	
	<br />
	<a href="<?php echo base_url();?>signup/allow_sign_up"><button class="btn btn-success">Allow Sign UP</button></a>
	<br />
	<br />
	
<?php } ?>