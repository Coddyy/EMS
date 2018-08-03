<style type="text/css">
  .space{margin:5px 200px; background-color: #D2D2D2;border-width:5px;  
    border-style:groove;}
  @media screen and (max-width: 768px){
    .space{margin:0px 0px;}
  }
  .sub{background-color: #0055A5;border:none;}
  .can{background-color: #FF7900;border:none;}
  .can:hover{background-color: #0055A5;font-size: 16px;}
  .sub:hover{background-color: #FF7900;font-size: 16px;}
</style>


<div class="main-container" style="border:0px solid red;">
        <section class="wht-bg">
        <section class="section">
            	<div class="container" style="border:0px solid red;">
                <div class="container-inner ">
                		<div class="row" style="border:0px solid red;">                        
                            <div class="col-xs-12">
                  			<div class="xcolright space" style="">
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
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert">
							   <?php echo $succesmsg;?></div>
							   <br/>
							   <?php } ?>
			                   	<h1 align="center" style="color: #0055A5;">Reset Your Password</h1>
			                      <p align="center" style="font-size: 14px;">Enter your registered email address to receive the password reset links !</p><br>
                              <form id="form2" name="form2" method="post" action="<?php echo base_url('employer/forgot_password')?>">
                                <div class="row">
                              <div class="col-md-12">
                               <label for="email">Email</label>
                              </div>
                             <div class="col-md-12">
                              <input type="text" name="email_id" id="email_id" placeholder="Enter your registered email" required=""/>
                              </div> 
                                </div><br>
                              <div class="row">
                              <div class="col-md-12" style="border:0px solid red;height: 50px;" align="center" >
                              	<button type="submit" name="forgot" id="forgot" class="btn btn-primary sub" style="" align="" />Submit</button><span>  </span>
                               <a href="<?php echo base_url('employer/login')?>" class="btn btn-primary can" style="" align="" >Cancel</a>
                              </div> 
                              </div> 
                              
                            </form>
                            <p>&nbsp;</p>
                    </div>
                    	</div>
                        
                        </div>
                       
                            </div>
                        </div>
                </div>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>
      </section> 
     </div>