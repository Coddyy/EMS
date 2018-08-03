 

 <style>
 	.tab-button
 	{
		width:94%;
		background-color: none;
		min-height: 80px;
	}
	.tab_link
	{
		color: rgb(255, 255, 255);
	}
 </style>
<title>CADnaukri.com | Job Search | Job Posting | CAD | CAM | CAE | CFD | BIM | PLM Jobs</title>
 <div class="main-container">
    	<div class="banner">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-9 banner-tab">
                    	<div class="banner-tab-content">
                            <div id="parentHorizontalTab">
                                <ul class="resp-tabs-list hor_1">
                                <li><a href="<?php echo base_url('best_design_jobs/search')?>" class="tab_link">All Design Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/CadJobs')?>" class="tab_link"> CAD Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/CAEJobs')?>" class="tab_link">CAE Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/CFDJobs')?>" class="tab_link">CFD Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/PLMJobs')?>" class="tab_link">PLM Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/BIMJobs')?>" class="tab_link">BIM Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/CADSalesJobs')?>" class="tab_link">CAD Sales Jobs</a></li>
                                <li><a href="<?php echo base_url('best_design_jobs/search/CADSoftwareDev.Jobs')?>" class="tab_link">CAD Software Dev. Jobs</a></li>
                                </ul>
                                <div class="resp-tabs-container hor_1">
                                    <div>
                                    
                                        <div class="design-form">
                                            <h3>Look for opportunities that suits your talent !</h3>
                                            <div class="design-form-inner">
                                            	<form method="post" id ="search_form" action="<?php echo base_url('best_design_jobs/search')?>">
                                            	<input type="hidden" name="selected_skill" id="selected_skill" />
                                                	<input type="text" placeholder="Skill" name="skills"  id="skills" />
                                                	<select style="color: #999;" name="experience">
                                                    	<option value="">Experience</option>
                                                        <option value="0">Fresher</option>
                                                    	<option value="1">0-1 years</option>
                                                    	<option value="2">1-2 years</option>
                                                    	<option value="2">2-5 years</option>
                                                    	<option value="5">5-7 years</option>
                                                    	<option value="7">above 7 years</option>
                                                    </select>
                                                   <input type="hidden" name="selected_location" id="selected_location" />
                                                       	<input type="text" placeholder="Location"  id="location" class="form-control" style="max-width: 19%;" name="location">
                                                    <input type="button " value="search" class="button blue-button" onclick="javascript:form_submit()">
                                                </form>
                                            </div>
                                            <!--<p class="right"><a href="#" >Advance Search</a></p>-->
                                        </div>
                                                                
                                    </div>
                                   
                                </div>
                            </div>
                		</div>
                	</div>
                    <div class="col-xs-3 banner-slide">
                    	<div class="banner-slide-content">
                    		<div id="flip-tabs" class="example" >
    <form action="" method="get">
		<div id="flip-navigation" >
			<div class="selected"><label for="tab-0"><input name="radio" type="radio" value="on" id="tab-0" checked/> Experienced Candidates</label></div>
			<div><label for="tab-1"><input name="radio" type="radio" value="tw" id="tab-1" /> Student Interns</label></div>
			
		</div>
     </form>
		<div id="flip-container" >
			<div class="flip-container-inner" >
				<ul >
					<li>
                    	<a href="<?php echo base_url('candidate/login')?>">
                    	<div class="sign-icon-img"><img src="<?php echo base_url()?>assets/images/signup-icon.png" alt="" /></div>
                        <div class="sign-icon-name">Sign Up</div>
                        </a>
                    </li>
					<li>
					<a href="<?php echo base_url('candidate/login')?>">
                  
                        
                    	<div class="sign-icon-img"><img src="<?php echo base_url()?>assets/images/signin-icon.png" alt="" /></div>
                        <div class="sign-icon-name">Sign In</div>
                        
                        </a>
                        </li>					
				</ul>
			</div>
			<div class="flip-container-inner" >
				<ul >
					<li>
                    	  <a href="<?php echo base_url('internship/login')?>">
                         
                    	<div class="sign-icon-img"><img src="<?php echo base_url()?>assets/images/signup-icon.png" alt="" /></div>
                        <div class="sign-icon-name">Sign Up</div>
                        
                        </a>
                    </li>
					<li>
                   
                    	  <a href="<?php echo base_url('internship/login')?>">
                        
                    	<div class="sign-icon-img"><img src="<?php echo base_url()?>assets/images/signin-icon.png" alt="" /></div>
                        <div class="sign-icon-name">Sign In</div>
                        
                        </a>
                        
                        </li>					
				</ul>
			</div>
			
		</div>
	</div>
    <div class="tab-button">
    <a href="<?php echo base_url('employer/login')?>" class="button">Access Employer Zone</a>
    </div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <section class="light-grey">
        	<section class="section ">
            	<div class="container">
                <br />
                    <div class="job-container">
                            <h2 class="title"><span></span>Featured Jobs</h2>
                            <div class="job-list">
                            <?php
                            if($this->session->flashdata('job_appply_success')){
                               $succesmsg = $this->session->flashdata('job_appply_success');?>
                               <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
                               <br/>
                               <?php } ?>
                                <ul>
                                <?php 
                                if($featured_jobs)
                                {
                                    foreach($featured_jobs as $fj)
                                    {
                                        $jobtitle=$fj->jobtitle;
                                            $job_title=str_replace(' ', '-', $fj->jobtitle);
                                            $location=str_replace(' ', '-', $fj->location);
                                            $designation=str_replace(' ', '-', $fj->designation);
                                            //$url=base_url('best_design_jobs/signle_search/'.$fj->id).'"><h5>'.$fj->jobtitle;
                                            $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$fj->id;
                                        
                                        echo '<li>
                                            <div class="job-list-inner">
                                            <div class="job-list-title">
                                                <a href="'.$url.'"><h5>'.$fj->jobtitle.'</h5></a>
                                                <p>'.$fj->designation.' | Last Date '.date("jS F, Y", strtotime($fj->lastdate)).'</p>';?>
                                                
                                                
                                                 <?php
                                                 $job_id=$fj->id;
                                                if($this->session->userdata('candidate_id'))
                                                {
                                                    $candidate_id=$this->session->userdata('candidate_id');
                                                    $check_applied=$this->Job_apply_M->get_by(
                                                    array('job_id'=>$job_id,
                                                    'user_id'=>$candidate_id));
                                                    $url=base_url("candidate/job_apply/$job_id");
                                                    if(count($check_applied) > 0 )
                                                    {
                                                        echo '<button type="button" class="  btn-primary" disabled="disabled" style="position: absolute;top: 0;right: 0;padding: 7px 30px;">Already Applied</button>';
                                                        //echo '<a class="button btn-disabled" href="#"> </a>';
                                                    }
                                                    else
                                                    {
                                                        echo '<a class="button" href="'.$url.'">Apply</a>';
                                                    }
                                                    
                                                }
                                                else
                                                {
                                                    
                                                    $url=base_url("candidate/login/best_design_jobs/$job_id");
                                                     echo '<a class="button" href="'.$url.'">Apply</a>';
                                                }
                                                ?>
                                                
                                              <?php 
                                               echo '
                                            </div>
                                            <div class="job-post-details">
                                                <ul>
                                                    <li><a href="#"><span><img src="'.base_url("assets/images/post-time-icon.png").'" alt="" /></span>'.$fj->yop.'</a></li>
                                                    <li><a href="#"><span><img src="'.base_url("assets/images/post-location.png").'" alt="" /></span>'.$fj->location.'</a></li>
                                                    <li><a href="#"><span></span> Posted Date '.date("jS F, Y", strtotime($fj->created)).'</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-content-details">
                                                 <p>'.substr($fj->description, 0, 500).'</p>
                                                <div class="job-link"><a href="#">Skills :'.$fj->all_skills.'</div>
                                            </div>
                                        </div>
                                      </li>';
                                    }
                                }
                                ?>
                               
                                </ul>
                            </div>
                        </div>



                	<div class="container-inner">
                    	<h2 class="center heading-title"><span>Companies For Better Opportunities</span></h2>
                        <div class="image-feed-slider">	
                            <?php
                              if($recuiter_images)
                              {
                              	for($i=0;$i<3;$i++)
                              	{
									foreach($recuiter_images as $r)
							  	  {
									echo ' <a href="#">
									<img src="'.$r->image_path.'" title="'.$r->name.'"  height="152" width="60"/></a>';
								  }
								}
							  	
							  }
                            ?>
                            <!--<a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo01.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo02.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo03.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo04.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo05.jpg" title="" /></a>
                            <a href="#"><img src="<?php echo base_url()?>assets/images/logo/logo06.jpg" title="" /></a>-->
                            
                            
                            
                        </div>
                    	
                    </div>
                </div>
            </section>
        </section>
        <section class="deep-grey">
        	<section class="section parallex1">
        		<div class="container">
                	<div class="container-inner line-sepa-top ">
                    	<div class="stey-3col">
                        	<div class="row">
                            	<div class="col-xs-3 sponsored-div">
                                	<div class="sponsored-content">
                                    	<h5>Sponsored Advertisements</h5>
                                    	<ul class="small-logo">
                                    	<?php 
                                    	if($home_images)
                                    	{
											foreach($home_images as $hm)
											{
												echo '<li><a href="'.$hm->home_link.'" target="_blank" title="'.$hm->name.'"><img src="'.$hm->image_path.'" alt="" /></a></li>';
											}
										}
										?>
                                        <!--	<li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/1.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/2.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/3.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/4.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/5.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/6.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/7.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/8.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/9.jpg" alt="" /></a></li>
                                        
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/10.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/11.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/12.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/1.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/2.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/3.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/4.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/5.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/6.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/7.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/8.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/9.jpg" alt="" /></a></li>
                                        
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/10.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/11.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sponors_logo/12.jpg" alt="" /></a></li>
                                           
                                            <!--
                                             <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo02.jpg" alt="" /></a></li>
                                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo01.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo03.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo01.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo02.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo03.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo01.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo02.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo03.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo01.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo02.jpg" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/s-logo03.jpg" alt="" /></a></li>-->
                                        </ul>
                                	</div>
                                </div>
                                <div class="col-xs-6 subscribe-div">
                                	<div class="subscribe-content">
                                    	<h4>Subscribe Now to avail of latest </h4>
                                    	<form action="" method="POST">
                                        	<!--<input type="text" placeholder="Your name" />-->
                                           <div id="subs_res"  class=""></div>
                                            <input type="email" placeholder="Your email id"  name ="subscription_mail_id" class="newsletter-input subscription_mail_id" / >
                                           <input type="button" class="button news_button subscription_btn" id="" value="Subscribe" >
                                        </form>
                                	</div>
                                    <div class="stey-connected">
                                    	<h2>Stay Connected</h2>
                                        <ul class="social-icon">
                                        	<li><a href="https://www.facebook.com/CADnaukri"><img src="<?php echo base_url()?>assets/images/sfb-icon.png" alt="" /></a></li>
                                            <li><a href="https://twitter.com/cadnaukri"><img src="<?php echo base_url()?>assets/images/stw-icon.png" alt="" /></a></li>
                                            <li><a href="#"><img src="<?php echo base_url()?>assets/images/sgp-icon.png" alt="" /></a></li>
                                            <li><a href="https://www.linkedin.com/company/cadnaukri-com"><img src="<?php echo base_url()?>assets/images/sin-icon.png" alt="" /></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-3 side-link-div">
                                	<div class="extra-content">
                                    	<ul>
                                        	<li>
                                                <ul>
                                                	<li><a href="#"><span><img src="<?php echo base_url()?>assets/images/job-icon.png" alt=""></span>Job Offers</a></li>
                                                    <li><a href="#"><span><img src="<?php echo base_url()?>assets/images/intership-icon.png" alt=""></span>Internships</a></li>
                                                    <li><a href="#"><span><img src="<?php echo base_url()?>assets/images/product-update-icon.png" alt=""></span>Product Updates</a></li>
                                                    <li><a href="#"><span><img src="<?php echo base_url()?>assets/images/news-icon.png" alt=""></span>News &amp; Events</a></li>
                                                    <li><a href="#" class="orange-bgcol"><span><img src="<?php echo base_url()?>assets/images/cad-icon.png" alt=""></span>CAD CAM Schools</a></li>
                                                    <li>
                                                    	<div class="logo-box">
                                                    	  
                                                        	<ul>
                                                        	<?php
                                                        	$array=array_chunk($cad_cam_schools, 3);
                                                        	$first_chunk=$array[0];
                                                        	$second_chunk=$array[1];
                                                        	  foreach($first_chunk as $f)
                                                        	  {
															  	echo '<li><a href="'.$f->website.'" title="'.$f->institution.'"
															  	 target="_blank"><img src="'.$f->logo_path.'" alt="" /></a></li>';
															  }
                                                        	?>
                                                            	
                                                               <!-- <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/cad-academy.jpg" alt="" /></a></li>
                                                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/cadd-center.jpg" alt="" /></a></li>-->
                                                            </ul>
                                                            <a href="#" class="blue-button">See More</a>
                                                        </div>
                                                    </li>
                                                    <li><a href="#" class="orange-bgcol"><span><img src="<?php echo base_url()?>assets/images/best-icon.png" alt=""></span>Centre of Excellences</a></li>
                                                    <li>
                                                    	<div class="logo-box">
                                                        	<ul>
                                                        	<?php
                                                        	 foreach($second_chunk as $s)
                                                        	  {
															  	echo '<li><a href="'.$s->website.'" title="'.$s->institution.'"
															  	 target="_blank"><img src="'.$s->logo_path.'" alt="" widht="84" height="50"/></a></li>';
															  }
                                                        	?>
                                                            	<!--<li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/softed-world.jpg" alt="" /></a></li>
                                                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/cad-academy.jpg" alt="" /></a></li>
                                                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/s-logo/cadd-center.jpg" alt="" /></a></li>-->
                                                            </ul>
                                                            <a href="#" class="blue-button">See More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                	</div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-news">
                        	<h2 class="title"><span></span>Latest News Updates</h2>
                            <div class="latest-news-content">
                            	<ul class="news_slider">
                            	  <?php
                            	     if($news_events)
                            	     {
									 	foreach($news_events as $news)
									 	{
									 	    if($news->ext_link !='')
									 	    {
												$ext_link=$news->ext_link;
											}
											else
											{
												$ext_link='#';
											}
									 	 echo '<li>
	                                    	<h3>'.$news->name.'</h3>
	                                        <p>'. substr($news->description, 0, 1000).'</p>
	                                        <a href="'.$ext_link.'" class="readmore" target="_blank">Read More</a>
	                                    </li>';
											
										}
									 }
                            	  ?>
                                	<!--<li>
                                    	<h3>News Title</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum...</p>
                                        <a href="#" class="readmore">Read More</a>
                                    </li>
                                    <li>
                                    	<h3>News Title</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum...</p>
                                        <a href="#" class="readmore">Read More</a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                    <!--    <div class="career-boxse">
                        	<div class="row">
                            	<div class="col-xs-4">
                                	<div class="career-box-inner">
                                    	<h4>Career Stories</h4>
                                        <div class="career-content-box career-img">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        <a href="#" class="readmore">Read More</a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                	<div class="career-box-inner">
                                    	<h4>eLearning</h4>
                                        <div class="career-content-box learn-img">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        <a href="#" class="readmore">Read More</a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                	<div class="career-box-inner">
                                    	<h4>Resume Writing</h4>
                                        <div class="career-content-box writer-img">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        <a href="#" class="readmore">Read More</a></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
        	</section>
        </section>
        <section class="wht-bg">
        	<section class="section">
            	<div class="container">
					<div class="container-inner line-sepa-bottom">
                    	<div class="job-details">
                        	<div class="row">
                            	<div class="col-xs-4">
                                	<div class="job-inner-details">
                                    	<p>Last Job Posted</p>
                                        <h2>20th June</h2>
                        			</div>
                        		</div>
                                <div class="col-xs-4">
                                	<div class="job-inner-details">
                                    	<p>Recruiters Registered Today</p>
                                        <h2>360</h2>
                        			</div>
                        		</div>
                                <div class="col-xs-4">
                                	<div class="job-inner-details">
                                    	<p>Candidates Joined Today</p>
                                        <h2>9864</h2>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        
                    </div>
               </div>
            
            </section>
        </section>
   
     <script>
  $(function() {
    var data =<?php echo json_encode($skills)?>;
   /*  var data = [
            { label: "anders", id: "1", category: "" },
            { label: "andreas", id: "2", category: "" },
            { label: "antal", id: "3", category: "" },
            { label: "annhhx10", id: "4", category: "Products" },
            { label: "annk K12", id: "5", category: "Products" },
            { label: "annttop C13", id: "6", category: "Products" },
            { label: "anders andersson", id: "7", category: "People" },
            { label: "andreas andersson", id: "8", category: "People" },
            { label: "andreas johnson", id: "9", category: "People" }
        ];*/
    $( "#skills" ).autocomplete({
      source: data, select: function(event, ui) {
                  $('#selected_skill').val((ui.item.id));
            }
    });
     var locations =<?php echo json_encode($citis)?>;
    $( "#location" ).autocomplete({
      source: locations, select: function(event, ui) {
               $('#selected_location').val((ui.item.id));
            }
    });
  });
  function form_submit()
  {
  	
  	  $("#search_form").submit();
  }
  </script> 