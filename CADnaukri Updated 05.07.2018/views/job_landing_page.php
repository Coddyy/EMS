 
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


						<style type="text/css">
								.main{line-height:30px;border: 0px solid green;background-color:#ECF0F5;}
								.month{background-color: #fff;border-radius: 15px;padding: 3px 0px;text-align: center;color:#0055A5;font-size: 18px;border:2px solid #FF7900;height: 80px;}
							    .date{background-color: #0055A5;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;padding: 2px;text-align: center;color:#fff;font-size: 18px;border:1px solid #000;margin-top: 7px;}
							    .posted{font-size: 16px; font-weight: bold;height: 80px;padding-left: 30px;}
							    .o_color{color:#FF7900;}
							    .ob_color{background-color: #FF7900;}
							    .b_color{color:#0055A5;}
							    .bb_color{background-color: #0055A5;}
							     .tag_skill{color: #A598A5;padding-right: 10px;}
							     .tag_skill:hover{color: grey;text-decoration: none;}
							     .top10px{margin-top: 20px;}
							     .icons{font-size:24px;padding: 15px 8px;}
		                         .reg{background:#FF7900;padding:;display: block;font-size:15px;height: 40px;width: 60%;}
		                         .reg:hover{background:#0055A5;font-size: 17px;}

		                         .log{background:#0055A5;padding:;display: block;font-size:15px;height: 40px;width: 60%;}
		                         .log:hover{background:#FF7900;font-size: 17px;}
		                         .inner-content{border-bottom: 1px solid grey; font-weight: bold;line-height: normal;padding: 9.3px;}
		                         .desktop{height: 35px;}
		                         .mobile{height: 0px;visibility: hidden;}
		                         @media screen and (max-width: 768px){
		                         	.desktop{height: 0px;visibility: hidden;}
		                         	.mobile{height: 60px;visibility: visible;}
		                         }


		                         @media screen and (max-width: 768px){
		                          .reg{font-size: 12px;width: 100%;}
		                          .reg:hover{background:#0055A5;font-size: 14px;}
		                          .log{font-size: 12px;width: 100%;}
		                          .log:hover{background:#FF7900;font-size: 14px;}
		                         }
		                         .con6li{display: inline-block;width: 110px;text-align: center;}
								.con6li:hover{color: #FF7900;background-color: #0055A5;}
								@media screen and (max-width: 768px){
		                         .con6li{display: inline-block;text-align:left;}

								}
						</style>
						<style>
								img {
								    border: 1px solid #ddd;
								    border-radius: 4px;
								    padding: 5px;
								    width: 138px;
								    height: 100px;
								}
								img.side 
								{
								    border: 1px solid #ddd;
								    border-radius: 4px;
								    padding: 5px;
								    width:360px;
								    height: 100px;							    
								}
								/*@media screen and (max-width: 768px)
								{
									img.side 
									{
									    border: 1px solid red;
									    border-radius: 4px;
									    padding: 5px;
									    max-width:100%;
									    height: 100px;							    
									}
								}*/

								img:hover {
								    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
								}
						</style>

						<style> 
			#myimg {
			    max-width: 380;
			    height: 400px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/7.jpg');
			    background-size: 360px 360px;
			    -webkit-animation: mymove 5s infinite;
			    animation: mymove 5s infinite;
			}

			
			@-webkit-keyframes mymove {
			    50% {background-size: 380px 380px;}
			}

			
			@keyframes mymove {
			    50% {background-size: 340px 340px;border:0px solid red;border-radius: 50%;}
			}


			#myimg1 {
			    width: 340;
			    height: 360px;
			    border: 1px solid black;
			    background-image: url('959fee8e38a81160d1845394644928b5--educational-quotes-rice');
			    background-size: 270px 270px;
			    margin:20px 6px;
			    /*padding:50px 50px;*/
			    /*-webkit-animation: mymove 5s infinite;  Chrome, Safari, Opera 
			    animation: mymove 5s infinite;*/
			}

			/*@-webkit-keyframes mymove {
			    50% {background-size: 380px 380px;}
			}*/

			
			/*@keyframes mymove {
			    50% {background-size: 380px 380px;border:10px solid red;border-radius: 50%;}
			}*/

			#myimg2 {
			    width: 1160;
			    height: 100px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/web_design_dev.jpg');
			    background-size: 105px 105px;
			}

			

			/*#facebook_link:hover{
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/face_ps_c.jpg');
			    background-size:154px 30px;
			    font-size: 0px;color:#fff;
			}
			#twitter_link:hover{
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/twit_ps_c.jpg');
			    background-size:152px 31px;
			    font-size: 0px;color:#fff;
			    -webkit-animation: mymove 5s infinite;  
			    animation: mymove 5s infinite;
			}
			#google_link:hover{
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/google_ps_c.jpg');
			    background-size:152px 31px;
			    font-size: 0px;color:#fff;
			    -webkit-animation: mymove 5s infinite;  
			    animation: mymove 5s infinite;
			}
			@media screen and (max-width: 768px)
			{
				#google_link:hover
				{
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/google_ps.jpg');
			    background-size:110px 30px;
			    font-size: 0px;color:#fff;
				}
			}
			@media screen and (max-width: 768px)
			{
				#twitter_link:hover
				{
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/twit_ps.jpg');
			    background-size:110px 30px;
			    font-size: 0px;color:#fff;
				}
			}
			@media screen and (max-width: 768px)
			{
				#facebook_link:hover
				{
				padding-left: -20px;
				border:0px solid red;
				max-width: 154px;
			    height: 32px;
			    border: 0px solid black;
			    background-image: url('<?php echo base_url();?>assets/images/img/face_ps.jpg');
			    background-size:110px 30px;
			    font-size: 0px;color:#fff;
				}
			}*/
						</style>                        




<div class="container main" style="">
	<div class="row" style="border: 0px solid red;padding: 10px 10px;"><!--Start Row 1-->
			<div class="col-md-8 col-xs-12" style="border:0px solid red;">
				<div class="row">
					<div class="col-xs-12"><h3>Title of the job</h3></div>
					<div class="col-xs-12 col-md-2 month" style="">Month<div class="col-xs-12 date">Date</div></div>

					<div class="col-xs-12 col-md-10 posted o_color" style="">Posted By : <span class="b_color">Company name</span>
						<div class="row">
							<div class="col-xs-12 col-md-12 b_color" style="font-weight: bold;">
								<i class="fa fa-eye icons" style="padding-left: 0px;" title="view jobs"></i><span class="o_color"> (30)</span> 
								<i class="fa fa-expeditedssl icons" style="" title="Job score"></i><span class="o_color"> (3.0/10)</span> 
								<i class="fa fa-users icons " aria-hidden="true" title="Candidate Applied" style=""></i><span class="o_color"> (10)
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-xs-12 top10px"  style="" >
						<div class="row">
							<div class="col-xs-6 col-md-6">
								<button type="submit" class="btn btn-success log">Login To Apply</button>
							</div>
							<div class="col-xs-6 col-md-6">
								<button type="submit" class="btn btn-success reg">Register To Apply</button>
							</div>
						</div>
					</div>								

					<div class="col-md-12 col-xs-12 inner-content" style="margin-top: 20px;">
						<div class="col-md-3 col-xs-4" style="">Skills</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Skills</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Location</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Location</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Salary</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Salary</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Designation</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Designation</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Additional Skills</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Additional Skills</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Eligibility</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Eligibility</div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Experience</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Experience </div>
					</div>
					<div class="col-md-12 col-xs-12 inner-content" style="">
						<div class="col-md-3 col-xs-4" style="">Job Description</div>
						<div class="col-md-1 col-xs-1">:-</div>
						<div class="col-md-8 col-xs-6" style=""> Job Description</div>
					</div>

				</div>
					<!-- <div class="row"> -->
						<div class="col-md-12 col-xs-12" style="font-size: 10px;margin-top: 0px;">Tags :- 
							<a href="#" class="tag_skill">Catigory</a><a href="#" class="tag_skill">Skill 1</a>
							<a href="#" class="tag_skill">Skill 2</a><a href="#" class="tag_skill">Location 1</a>
							<a href="#" class="tag_skill">Location 2</a>
						</div>

						<!--Start Row 2-->
						<div class="row" style="margin: 10px -15px;border:0px solid yellow;">
							<div class="col-md-12 col-xs-12">
								<div class="col-xs-12 col-md-3">
									<button type="button" class="btn btn-success log">GO BACK</button>
									<!-- <input type="button" name="" value="GO BACK"> -->
								</div>
								<div class="col-xs-12 col-md-9 desktop" style="">
									<div class="col-md-2 col-xs-2">Share:</div>
									<a href="#"><div class="col-md-2 col-xs-4" id="facebook_link" style="border:0px solid red;">Facebook</div></a>
									<a href="#"><div class="col-md-2 col-xs-3" id="twitter_link" style="border:0px solid red;">Twitter</div></a>
									<a href="#"><div class="col-md-2 col-xs-3" id="google_link" style="border:0px solid red;">Google</div></a>
								</div>
								<div class="col-xs-12 col-md-10 mobile">
									<div class="col-md-12 col-xs-12">Share:</div>
									<a href="#"><div class="col-md-2 col-xs-4" id="facebook_link" style="border:0px solid red;">Facebook</div></a>
									<a href="#"><div class="col-md-2 col-xs-4" id="twitter_link" style="border:0px solid red;">Twitter</div></a>
									<a href="#"><div class="col-md-2 col-xs-4" id="google_link" style="border:0px solid red;">Google</div></a>
								</div>
							</div>
						</div><!--End Row 2-->
						

						
						<div class="row" style="border:0px solid red;margin-bottom: 10px;" title="CADnaukri.com"><!--Start Row 3-->
							<div class="col-md-12 col-xs-12" align="center">
								<a target="_blank" href="web_design_dev.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="2.jpg"><img src="<?php echo base_url();?>assets/images/img/5.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="3.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="7.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="web_design_dev.jpg"><img src="<?php echo base_url();?>assets/images/img/web_design_dev.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="7.jpg"><img src="<?php echo base_url();?>assets/images/img/1.png" alt="CADnaukri" style=""></a>
								<a target="_blank" href="4.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="5.jpg"><img src="<?php echo base_url();?>assets/images/img/5.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="3.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style=""></a>
								<a target="_blank" href="4.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style=""></a>
							</div>
						</div><!--End Row 3-->
					<!-- </div> -->
			</div><!--End of col-md-8 col-xs-12-->

			<style type="text/css">
				.scroll{margin-top: 30px;border:0px solid green;height: 80%; overflow: scroll;}
			</style>

			<!--test-->
			<div class="row">
				<div class="col-md-4 col-xs-12 scroll" class="img-responsive" id="" style="" align="center"><!-- id="myimg" -->
					<a target="_blank" href="<?php echo base_url();?>assets/images/img/7.jpg"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>	
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a> 
					<a target="_blank" href="<?php echo base_url();?>assets/images/img/7.jpg"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>	
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>
					<a target="_blank" href="#"><img src="<?php echo base_url();?>assets/images/img/Jobseeker.png" class="side img-responsive" alt="CADnaukri" style=""></a>


				</div>
			</div>

			<!--test-->

	</div><!--End Row 1-->
	
<!--Popullar job-->

    <div class="row" style="background-color:#ECF0F5;">
    	<div class="col-md-12 col-xs-12">
      	<p class="con6p" style="text-align: center;font-size: 18px;font-weight: bold;">Popular job search results 
        for the following Keywords</p>
        <div class=""><!-- wrapper_container -->
				<ul class="" style="border-bottom: 1px solid #999;">
					<a href="<?php echo base_url('best_design_jobs/Bangalore')?>"> <li title="Bangalore" class="con6li col-md-3 col-xs-6" style="" >Bangalore</li></a>
					<a href="<?php echo base_url('best_design_jobs/Bhubaneswar')?>"> <li title="Bhubneshwar" class="con6li col-md-3 col-xs-6" style="" >Bhubneshwar</li></a>
					<a href="<?php echo base_url('best_design_jobs/Mumbai')?>"> <li title="Mumbai" class="con6li col-md-3 col-xs-6" style="" >Mumbai</li></a>
					<a href="<?php echo base_url('best_design_jobs/Hyderabad')?>"> <li title="Hyderabad" class="con6li col-md-3 col-xs-6" style="" >Hyderabad</li></a>
					<a href="<?php echo base_url('best_design_jobs/Chennai')?>"> <li title="Chennai" class="con6li col-md-3 col-xs-6" style="" >Chennai</li></a>
					<a href="<?php echo base_url('best_design_jobs/Pune')?>"> <li title="Pune" class="con6li col-md-3 col-xs-6" style="" >Pune</li></a>
					<a href="<?php echo base_url('best_design_jobs/Ahmedabad')?>"> <li title="Ahmedabad" class="con6li col-md-3 col-xs-6" style="" >Ahmedabad</li></a>
					<a href="<?php echo base_url('best_design_jobs/Delhi')?>"> <li title="Delhi" class="con6li col-md-3 col-xs-6" style="" >Delhi</li></a>
					<a href="<?php echo base_url('best_design_jobs/Indore')?>"> <li title="Indore" class="con6li col-md-3 col-xs-6" style="" >Indore</li></a>
					<a href="<?php echo base_url('best_design_jobs/search')?>"> <li title="ALL JOBS" class="con6li col-md-3 col-xs-6" style="" > More Jobs</li></a>
				</ul>
		</div>
	</div>
    </div><!--End of Row 4-->

<!--Popullar job-->


</div><!--End of main-container-->

