<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />
<?php 
if($this->uri->segment(3) != '' && $this->uri->segment(3) != NULL){
  $segment=$this->uri->segment(2)." | ".$this->uri->segment(3);
}
else if($this->uri->segment(2) != '' && $this->uri->segment(2) != NULL)
{
  $segment=$this->uri->segment(2);
}

?>
  <meta name="description" content="<?php echo $segment;?>"/>
<title>We apologise! CADnaukri bots couldn't find <?php echo $segment;?></title>
<div class="container top-btm-space" align="center">
	<div class="wrap">
    <div class="logo" >
      <img style="height: 50%;width:50%;" src="<?php echo base_url(); ?>assets/images/development.gif" alt="CADnaukri Development Is Going On" />
    </div>
  </div>
  <!-- <h4 class="orange">Oops! Perhaps you have wrongly landed here</h4>
  <h4 class="orange">Please do not panic you can browse back to home</h4> -->
  <h1>We apologise! CADnaukri bots couldn't help you</h1>
  <div class="sub">
    <p><a href="<?php echo base_url(); ?>">Go Back to Home</a></p>
  </div>
</div>