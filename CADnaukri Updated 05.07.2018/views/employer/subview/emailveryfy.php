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

							if($this->session->flashdata('successmsg')){

						       $succesmsg = $this->session->flashdata('successmsg');?>

							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>

							   <br/>

							   <?php } ?>

                   	            <h1>Employee Email Verification</h1>

                   

                            <form id="form2" name="form2" method="post" action="<?php echo base_url('employer/email_verify')?>">

                            <?php $emp_id=$this->uri->segment(3);?>

					         <input  type="hidden" value="<?php echo rawurldecode($emp_id)?>" name="emp_id"/>

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

                               <input type="reset" name="login" id="btn-lg btn btn-warning" value="Cancel" class="button" style="height: 40px;

    padding: 0px 22px;"/>

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

               

                 <div class="main-container">

        <section class="wht-bg">

        <section class="section">

            	<div class="container">

                <div class="container-inner line-sepa-bottom">

                        <div class="job-container">

                        	<h2 class="title"><span></span>Latest Jobs Matching Your Profile</h2>

                            <div class="job-list">

                            	<ul>

                                	<li>

                                    	<div class="job-list-inner">

                                        	<div class="job-list-title">

                                            	<h5>Manager- International Institutional Sales</h5>

                                                <p>Job Category Name</p>

                                                <a class="button" href="#">Apply</a>

                                            </div>

                                            <div class="job-post-details">

                                            	<ul>

                                                	<li><a href="#"><span><img alt="" src="images/post-time-icon.png"></span> 2 to 4 Yrs</a></li>

                                                    <li><a href="#"><span><img alt="" src="images/post-location.png"></span> Hyderabad</a></li>

                                                    <li><a href="#"><span></span> Posted Date 31-Aug-2015</a></li>

                                                </ul>

                                            </div>

                                            <div class="job-content-details">

                                            	<p>Be completely responsible for achieving market share in the assigned territories -Develop innovative modes to identify relevant prospects and connect with them to close a deal -Meet </p>

                                                <div class="job-link"><a href="#">Skills : B2B</a>  |  <a href="#">Concept</a>  |  <a href="#">Institutional</a>  |  <a href="#">International</a>  |  <a href="#">Sales</a></div>

                                                <div class="share-div">

                                                Share :

                                                <ul class="list-share">

                                                <li><a href="#">Facebook</a></li>

                                                <li><a href="#">Twitter</a></li>

                                                <li><a href="#">Linkedin</a></li>

                                                <li><a href="#">Google+</a></li>

                                                

                                                </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                    	<div class="job-list-inner">

                                        	<div class="job-list-title">

                                            	<h5>Manager- International Institutional Sales</h5>

                                                <p>Job Category Name</p>

                                                <a class="button" href="#">Apply</a>

                                            </div>

                                            <div class="job-post-details">

                                            	<ul>

                                                	<li><a href="#"><span><img alt="" src="images/post-time-icon.png"></span> 2 to 4 Yrs</a></li>

                                                    <li><a href="#"><span><img alt="" src="images/post-location.png"></span> Hyderabad</a></li>

                                                    <li><a href="#"><span></span> Posted Date 31-Aug-2015</a></li>

                                                </ul>

                                            </div>

                                            <div class="job-content-details">

                                            	<p>Be completely responsible for achieving market share in the assigned territories -Develop innovative modes to identify relevant prospects and connect with them to close a deal -Meet </p>

                                                <div class="job-link"><a href="#">Skills : B2B</a>  |  <a href="#">Concept</a>  |  <a href="#">Institutional</a>  |  <a href="#">International</a>  |  <a href="#">Sales</a></div>

                                                <div class="share-div">

                                                Share :

                                                <ul class="list-share">

                                                <li><a href="#">Facebook</a></li>

                                                <li><a href="#">Twitter</a></li>

                                                <li><a href="#">Linkedin</a></li>

                                                <li><a href="#">Google+</a></li>

                                                

                                                </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                    	<div class="job-list-inner">

                                        	<div class="job-list-title">

                                            	<h5>Manager- International Institutional Sales</h5>

                                                <p>Job Category Name</p>

                                                <a class="button" href="#">Apply</a>

                                            </div>

                                            <div class="job-post-details">

                                            	<ul>

                                                	<li><a href="#"><span><img alt="" src="images/post-time-icon.png"></span> 2 to 4 Yrs</a></li>

                                                    <li><a href="#"><span><img alt="" src="images/post-location.png"></span> Hyderabad</a></li>

                                                    <li><a href="#"><span></span> Posted Date 31-Aug-2015</a></li>

                                                </ul>

                                            </div>

                                            <div class="job-content-details">

                                            	<p>Be completely responsible for achieving market share in the assigned territories -Develop innovative modes to identify relevant prospects and connect with them to close a deal -Meet </p>

                                                <div class="job-link"><a href="#">Skills : B2B</a>  |  <a href="#">Concept</a>  |  <a href="#">Institutional</a>  |  <a href="#">International</a>  |  <a href="#">Sales</a></div>

                                                <div class="share-div">

                                                Share :

                                                <ul class="list-share">

                                                <li><a href="#">Facebook</a></li>

                                                <li><a href="#">Twitter</a></li>

                                                <li><a href="#">Linkedin</a></li>

                                                <li><a href="#">Google+</a></li>

                                                

                                                </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                    	<div class="job-list-inner">

                                        	<div class="job-list-title">

                                            	<h5>Manager- International Institutional Sales</h5>

                                                <p>Job Category Name</p>

                                                <a class="button" href="#">Apply</a>

                                            </div>

                                            <div class="job-post-details">

                                            	<ul>

                                                	<li><a href="#"><span><img alt="" src="images/post-time-icon.png"></span> 2 to 4 Yrs</a></li>

                                                    <li><a href="#"><span><img alt="" src="images/post-location.png"></span> Hyderabad</a></li>

                                                    <li><a href="#"><span></span> Posted Date 31-Aug-2015</a></li>

                                                </ul>

                                            </div>

                                            <div class="job-content-details">

                                            	<p>Be completely responsible for achieving market share in the assigned territories -Develop innovative modes to identify relevant prospects and connect with them to close a deal -Meet </p>

                                                <div class="job-link"><a href="#">Skills : B2B</a>  |  <a href="#">Concept</a>  |  <a href="#">Institutional</a>  |  <a href="#">International</a>  |  <a href="#">Sales</a></div>

                                                <div class="share-div">

                                                Share :

                                                <ul class="list-share">

                                                <li><a href="#">Facebook</a></li>

                                                <li><a href="#">Twitter</a></li>

                                                <li><a href="#">Linkedin</a></li>

                                                <li><a href="#">Google+</a></li>

                                                

                                                </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </li>                                    

                                    

                                </ul>

                            </div>

                        </div>

                </div>

                </div>

        </section>

      </section> <?php



?>