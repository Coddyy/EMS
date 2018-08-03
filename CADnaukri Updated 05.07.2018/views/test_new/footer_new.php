<!-- Start Footer-->
	<style>
		 .news_button{height: 40px; padding: 0px 22px; color: #fff; background: #F60; border: none; border-radius: 3px;}
		 #subs_res{padding:10px;color:#F60}
		 .sub_error{color: #F60}
		 .sub_sucess{color:#0859A8}

		.blue-bg, .blue-bg p, .blue-bg li, .blue-bg a { color: #bbb;background-color: #1765AD;}
		   
			
		 li a:hover{color:#fff;text-decoration: none;}

		.parallax2 {
		    /* The image used */
		    background-image: url("<?php echo base_url()?>assets/images/img/bb.jpg");

		    /* Set a specific height */
		    min-height: 500px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		ul.a {list-style-type: none;font-size: 12px;padding: 10px;}

  </style>

	<footer>
	  <section class="blue-bg" style="border:1px solid yellow;padding: 50px 0px;">
	          <section class="section parallex2">
	              <div class="container main_width">
	                    <div class="container-inner">
	                      <div class="blue-category">
	                          <div class="row">
	                              <div class="col-xs-12 col-md-3">
	                                <div class="blue-category-inner" style="">
	                                  <h4 style="padding: 0 10px; color: #fff;">Information</h4>
	                                        <ul class="a">
	                                          <li><a href="<?php echo base_url('index/aboutus')?>">About Us</a></li>
	                                            <li><a href="<?php echo base_url('index/terms_and_condition')?>">Terms &amp; Conditions</a></li>
	                                            <li><a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a></li>
	                                            <li><a href="<?php echo base_url('index/disclaimer')?>">Disclaimer of Warranties and Liabilities</a></li>
	                                            <li><a href="<?php echo base_url('index/back_ground_check')?>">Background Check</a></li>
	                                            <!--
	                                            <li><a href="#">Careers with Us</a></li>
	                                            <li><a href="#">Sitemap</a></li>
	                                            <li><a href="<?php echo base_url('index/contactus')?>">Contact Us</a></li>
	                                            <li><a href="">FAQs</a></li>
	                                            <li><a href="#">Summons / Notices</a></li>
	                                            <li><a href="#">Grievances</a></li>
	                                            <li><a href="#">Fraud Alert</a></li>-->
	                                        </ul>
	                                </div>
	                              </div>
	                                <div class="col-xs-12 col-md-3">
	                                <div class="blue-category-inner">
	                                  <h4 style="padding: 0 10px; color: #fff;">Jobseekers</h4>
	                                        <ul class="a">
	                                          <li><a href="<?php echo base_url('best_design_jobsfor_job_seeker/for_job_seeker')?>">For Job Seeker</a></li>
	                                            <li><a href="<?php echo base_url();?>best_design_jobs/search">Search Jobs</a></li>
	                                          
	                                          <?php    
	                                          if(!($this->session->userdata('candidate_id')) || !($this->session->userdata('emp_id')))
	                                           {?>
	                                               <li><a href="<?php echo base_url('candidate/Login')?>">Register Now</a></li>
	                                            <li><a href="<?php echo base_url('best_design_jobs/search')?>">All Jobs</a></li>
	                                            <?php } ?>
	                                           <!-- <li><a href="#">Create Job Alert</a></li>
	                                            <li><a href="#">Report a Problem</a></li>
	                                            <li><a href="#">Blogs</a></li>
	                                            <li><a href="#">Security Advice</a></li>
	                                            <li><a href="#">Mobile Site</a></li>-->
	                                            
	                                        </ul>
	                                        <!--<h5>Fast Forward</h5>
	                                        <ul>
	                                            <li><a href="#">Resume Writing</a></li>
	                                            <li><a href="#">Profile Enhancement</a></li>
	                                            <li><a href="#">Recruiter Reach</a></li>
	                                            <li><a href="#">Jobs For You</a></li>                                            
	                                            
	                                        </ul>-->
	                                </div>
	                              </div>
	                                <div class="col-xs-12 col-md-3">
	                                <div class="blue-category-inner">
	                                  <h4 style="padding: 0 10px; color: #fff;">Browse Jobs</h4>
	                                        <ul class="a">
	                                        <!-- <li><a href="<?php echo base_url('best_design_jobs/for_job_seeker')?>">All Design Jobs</a></li>-->
	                                         <li><a href="<?php echo base_url();?>CAD-Jobs" > CAD Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>CAE-Jobs">CAE Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>CFD-Jobs" >CFD Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>PLM-Jobs" >PLM Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>BIM-Jobs" >BIM Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>CAD-Sales-Jobs" >CAD Sales Jobs</a></li>
	                                    <li><a href="<?php echo base_url();?>CAD-Developer-Jobs">CAD Software Dev. Jobs</a></li>                                         
	                                        </ul>
	                                </div>
	                              </div>
	                                <div class="col-xs-12 col-md-3">
	                                <div class="blue-category-inner">
	                                  <h4 style="padding: 0 10px; color: #fff;">Employers</h4>
	                                        <ul class="a">
	                                          <li><a href="<?php echo base_url('best_design_jobsfor_job_seeker/for_corporates_recruiters')?>">For Corporates/Recruiters</a></li>
	                                           
	                                            <li>Help Line: 8260701701</li>                                            
	                                        </ul>
	                                </div>
	                              </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	          </section>
	        </section>
	        
	    
	        <section class="wht-bg footer-last" style="background-color:; height:50px;margin-top: 0px;">
	          <section class="section"> 
	              <div class="container">
	                  <div class="container-inner desktop" >
	                    &copy; 2015 cadnaukri.com, All rights reserved.   <a href="<?php echo base_url('index/disclaimer')?>">Disclaimer</a>  |  <a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a> 
	                    <span class="social-div" style="margin-top: -3px">
	                      <a href="https://www.facebook.com/CADnaukri" target="_blank" title="https://www.facebook.com/CADnaukri"><img src="<?php echo base_url()?>assets/images/fb-icon.png" alt="" /></a>
	                        <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" title="https://plus.google.com/u/0/+CADnaukri" ><img src="<?php echo base_url()?>assets/images/gp-icon.png" alt="" /></a>
	                        <a href="https://twitter.com/cadnaukri" target="_blank" title="https://twitter.com/cadnaukri"><img src="<?php echo base_url()?>assets/images/tw-icon.png" alt="" /></a>
	                        <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" title="https://www.youtube.com/watch?v=LaKtY29qcyo"><img src="<?php echo base_url()?>assets/images/yt-icon.png" alt="" /></a>
	                    </span>
	                    </div>

	                    <div class="container-inner mobile" >
	                    &copy; 2015 cadnaukri.com, All rights reserved.<br>   <a href="<?php echo base_url('index/disclaimer')?>">Disclaimer</a>  |  <a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a> <br>
	                    <span class="social-div" style="margin-top: -3px">
	                      <a href="https://www.facebook.com/CADnaukri" target="_blank" title="https://www.facebook.com/CADnaukri"><img src="<?php echo base_url()?>assets/images/fb-icon.png" alt="" /></a>
	                        <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" title="https://plus.google.com/u/0/+CADnaukri" ><img src="<?php echo base_url()?>assets/images/gp-icon.png" alt="" /></a>
	                        <a href="https://twitter.com/cadnaukri" target="_blank" title="https://twitter.com/cadnaukri"><img src="<?php echo base_url()?>assets/images/tw-icon.png" alt="" /></a>
	                        <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" title="https://www.youtube.com/watch?v=LaKtY29qcyo"><img src="<?php echo base_url()?>assets/images/yt-icon.png" alt="" /></a>
	                    </span>
	                    </div>
	                </div>            
	            </section>
	        </section>
	</footer>  

<!--End Footer-->