<div class="main-container">
        <section class="wht-bg">
        <section class="section">
              <div class="container">
                <div class="container-inner line-sepa-bottom">
                    <div class="row">                        
                            <div class="col-xs-8">
                        <div class="xcolright" style="width: 100%">
                  <?php if($this->uri->segment(2) == "security_check_failed"){
                  if($this->session->flashdata('security_check_failed')){  ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('security_check_failed'); ?>
                    </div>
                  <?php } } ?>
                          <h1>Reset Your Password</h1>
                            <!-- <p>Enter email address to receive an email with the link to reset your password. !</p> -->
                              <form id="form2" name="form2" method="post" action="<?php echo base_url('candidate/forgot_password')?>">
                              <div class="col-md-2">
                               <label for="email">Email</label>
                              </div>
                             <div class="col-md-10">
                              <input type="text" name="email" required=""/>
                              </div> 
                              <div class="col-md-2">
                               <label for="email">Mobile</label>
                              </div>
                              <div class="col-md-10">
                              <input type="text" name="mobile" maxlength="10" required=""/>
                              </div>
                              <div class="col-md-2">
                               <label for="email">Nick Name</label>
                              </div>
                              <div class="col-md-10">
                              <input type="text" name="nick_name" required=""/>
                              </div>
                              <div class="col-md-2">
                               <label for="email">Date Of Birth</label>
                              </div>
                              <div class="col-md-10">
                              <input type="date" name="dob" required=""/>
                              </div>
                              <div class="col-md-offset-4">
                                <button type="submit" name="forgot" id="forgot" class="btn btn-primary" />Submit</button>
                               <a href="<?php echo base_url('candidate/login')?>" class="btn btn-danger">Cancel</a>
                              </div>  
                              
                            </form>
                            <p>&nbsp;</p>
                    </div>
                      </div>
                        
                        </div>
                       
                            </div>
                        </div>
                </div>
                </div>
        </section>
      </section> 
     </div>