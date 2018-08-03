<div class="main-container">
        <section class="wht-bg">
        
        <section class="section">
            <div class="container">
                <div class="container-inner line-sepa-bottom">
                	<div class="row">
                	 <div class="col-md-10 ">
                        
                  		  <div class="xcolright" style="width: 100%">
                  			<?php echo validation_errors(); ?>

                  			<?php if($this->session->flashdata('error')){
								$msg = $this->session->flashdata('error');?>
						        <div class="alert alert-danger alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: red">  <?php echo $msg; ?>
								</div>
								<br/>
						    <?php } ?>
							<?php
							if($this->session->flashdata('success')){
						       $succesmsg = $this->session->flashdata('success');?>
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
							   <br/>
							   <?php } ?>
                   	            <h1>Candidates Email Verification</h1>
                   
                            <form id="form2" name="form2" method="post" action="">
                            <?php $user_id=rawurldecode($this->uri->segment(3));?>
					         <input  type="hidden" value="<?php echo $user_id?>" name="user_id"/>
                            <div class="row">
	                            <div class="col-md-2">
	                              <label for="email">Verification Code</label>
	                            </div>
	                             <div class="col-md-6">
	                              <input type="text" name="verification_code" id="verification_code" required=""/>
	                             </div>	
                                       
                            </div>
                                 
                              <br />
                              <div class="col-md-offset-2">
                                <input type="submit" name="login" id="button2" value="Verify" class="button" />
                                <a href="<?php echo base_url('candidate/login')?>"  class="btn btn-warning" >Cancel</a>
                             <!--  <input type="reset" name="login"value="Cancel" class="button" style="height: 40px;
    padding: 0px 22px;"/>-->
                              </div>
                            
                            </form>
                            <p>&nbsp;</p>
                    </div>
                  </div>
                 </div>
               </div>
             </div>
          </section>
    </section>
 </div>
               
                 