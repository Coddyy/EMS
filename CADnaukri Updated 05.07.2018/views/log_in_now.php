 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php if($this->uri->segment(2) == "registration_successfully"){ ?>


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
                            <form id="form2" name="form2" method="post" action="<?php echo base_url();?>candidate/login" enctype="multipart/form-data">
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
                    	<div class="alert alert-success">
								Congratulations!&nbsp Your registration is successfull. You Can Login Now  &nbsp&nbsp<b> >> </b>
						</div>
					</div>
				</div>
			</section>


<?php } ?>