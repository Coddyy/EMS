<title>Internship | Forget Password</title>
<div class="main-container">

        <section class="wht-bg">

        <section class="section">

            	<div class="container" style="max-width: 700px;box-shadow: 2px 2px 2px 2px #cccccc;">

                <div class="container-inner line-sepa-bottom">

                		<div class="row">                        

                            <div class="col-xs-12">

                  			<div class="xcolright" style="width: 100%;">

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
                          
			                   	<h1>Reset Your Password</h1>

			                      <p>Enter email address to receive an email with the link to reset your password. !</p>

                              <form id="form2" name="form2" method="post" action="">

                              <div class="col-md-2">

                               <label for="email">Email</label>

                              </div>

                             <div class="col-md-10">

                              <input type="text" name="email_id" id="email_id" required=""/>

                              </div> 
                              <div class="col-md-2">

                               <label for="email">DOB</label>

                              </div>

                             <div class="col-md-10">

                              <input type="date" name="dob" id="email_id" required=""/>

                              </div>
                              <div class="col-md-2">

                               <label for="email">Nick Name</label>

                              </div>

                             <div class="col-md-10">

                              <input type="text" name="nick_name" id="email_id" required=""/>

                              </div>
                              <div class="col-md-2">

                               <label for="email">Password</label>

                              </div>
                              <div class="col-md-10">

                              <input type="password" name="password" minlength="8" id="pass" required=""/>

                              </div>
                              <div class="col-md-2">

                               <label for="email">Confirm Password</label>

                              </div>
                              <div class="col-md-10">

                              <input type="password" name="password" onblur="validate()" onchange="validate()" minlength="8" id="cpass" required=""/>

                              </div>

                              <div class="col-md-12 col-xs-12" align="center">

                              	<button type="submit" onmouseover="validate()" name="forgot" id="forgot" class="btn btn_signup" >Submit</button>

                               <a href="<?php echo base_url('internship/login')?>" class="btn btn_reset">Cancel</a>

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
     <style type="text/css">
       .btn_signup{background-color: #0055A5;border:none;color:#fff;width: 70px;}
    .btn_reset{background-color:#FF7900;border:none;color:#fff;width: 70px;}
    .btn_reset:hover{background-color:#0055A5;color: #fff; }
    .btn_signup:hover{background-color:#FF7900;color:#fff; }
    .btn_submit{margin-left: -65px;margin-top: 10px;background-color: #FF7900; color: #fff; min-height: 33px;}
    .btn_submit:hover{background-color:#0055A5;color:#fff;}
    @media screen and (max-width: 768px){
    .btn_submit{margin-left: 40%;}
    .btn_signup{text-align: center;}
    }
     </style>

     <script type="text/javascript">
       
       function validate()
       {
          var pass=document.getElementById('pass').value;
          var cpass=document.getElementById('cpass').value;
          if(pass != cpass)
          {
            alert("Confirm password not matching");
            $('#pass').val('');
            $('#cpass').val('');
          }
          else
          {
            //Do nothing;
          }
       }
     </script>