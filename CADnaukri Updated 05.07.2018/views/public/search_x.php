<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
FB.init({
appId : '1635409370011416',
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});
};
 
(function() {
var e = document.createElement('script');
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
e.async = true;
document.getElementById('fb-root').appendChild(e);
}());
</script>

<div class="main-container">
    <section class="wht-bg">
      <section class="section">
            	<div class="container">
                 <div class="container-inner line-sepa-bottom">
       <div class="job-container">
              <h2 class="title"><span></span><?php echo $title?></h2>
              
                            <div class="job-list">
                            <?php
							if($this->session->flashdata('job_appply_success')){
						       $succesmsg = $this->session->flashdata('job_appply_success');?>
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
							   <br/>
							   <?php } ?>
                            	<ul>
                            	 
                            	<?php 
                            	if($search_result)
                            	{
                            		
                            	foreach($search_result as $sr)
                            	{
                            		$job_skills=$this->Job_skill_M->get_skills_name($sr->job_id);
                            		$job_id=$sr->job_id;
                            	?>
								
                                	<li id="<?php echo $sr->job_id?>">
                                    	<div class="job-list-inner">
                                        	<div class="job-list-title">
                                        	<input type="hidden" name="title" id="title-<?php echo $sr->job_id?>" value="<?php echo ucfirst($sr->jobtitle)?>" />
                                        	<input type="hidden" name="description" id="description-<?php echo $sr->description?>" value="<?php echo $sr->description?>" />
                                            	<a href='<?php echo base_url("index/signle_search/$sr->job_id")?>'>
                                            	<h5><?php echo ucfirst($sr->jobtitle)?></h5></a>
                                                <p> Last Date:<?php echo date("jS F, Y", strtotime($sr->lastdate))?></p>
                                                <?php
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
													
													$url=base_url("candidate/login/search/$job_id");
													 echo '<a class="button" href="'.$url.'">Apply</a>';
												}
                                                ?>
                                               
                                            </div>
                                            <div class="job-post-details">
                                            	<ul>
                                                	<li><a href="#"><span><img alt="" src="<?php echo base_url('assets/images/post-time-icon.png')?>"></span><?php echo $sr->yop?>  to <?php echo $sr->yop?> Yrs</a></li>
                                                	
                                                    <li><a href="#"><span><img alt="" src="<?php echo base_url('assets/images/post-location.png')?>"></span><?php if (is_numeric($sr->location)) 
                                                  { 
                                                  echo $this->City_M->get($sr->location,TRUE)->city_name;
                                                  }
                                                  else
                                                  {
                                                  	echo $sr->location;
                                                  }?></a></li>
                                                    <li><a href="#"><span></span> Posted Date 
                                                    <?php echo date("jS F, Y", strtotime($sr->created))
                                                     //echo $sr->created ;// strtotime(date("d-M-Y"),$sr->created)?></a></li>
                                                </ul>
                                            </div>
                                            <div class="job-content-details">
                                            	<p><?php echo $sr->description?> </p>
                                                <div class="job-link">
                                                <?php
                                                echo '<a href="#">Skills : ';
                                                $numItems = count($job_skills);
												$i = 0;
                                                foreach($job_skills as $js)
                                                {
													
													if(++$i === $numItems) 
													{
												    	echo $js->name.'</a> ';
												   }
												   else
												   {
												   	 echo $js->name.'</a>  | ';
												   }
												}
												?>
                                              <!--  <a href="#">Skills : B2B</a>  |  <a href="#">Concept</a>  |  <a href="#">Institutional</a>  |  <a href="#">International</a>  |  <a href="#">Sales</a>-->
                                                </div>
                                                <div class="share-div">
                                                Share :
                                                 <ul class="list-share">
                                                <li><a class="share_button" href="#">Facebook</a></li>
                                                <li>
                                                 <?php 
                                                 
                                                 $url="https://twitter.com/share?url=".base_url('index/signle_search/'.$sr->job_id)."via=CADnaukri&
												  related=twitterapi%2Ctwitter&
												  hashtags=CADnaukri&
												  text=".$sr->jobtitle;
                                                 ?>
                                                <a href="<?=$url?>">
												Twitter
												</a>
                                                
                                                
                                                
                                            
                                               	
                                               </li>
                                               <!-- <li><a href="#">Linkedin</a></li>-->
                                                <li>
                                               <?php
                                                $url="https://plus.google.com/share?url=".base_url('index/signle_search/'.$sr->job_id);
                                                ?>
                                                <a href="<?=$url?>" >Google+</a>
                                                
                                               </li>
                                                
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php }
                                    }else
                                    {
									  echo '<h5>No Job Found..</h5>';
									}
                                    
                                     ?>
                                  
                                   
                                                                      
                                    
                                </ul>
                            </div>
                        </div>
                           </div>
                        </div>
                </<section>
        </<section>
    </section>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('.share_button').click(function(e){
	//alert('Hello');
	var id=this.id;
	//alert(id);
	var content=$("#"+id).html();
	var job_title=$("title-"+id).val();
	var descriptions=$("description-"+id).val();
	
e.preventDefault();
FB.ui(
{
method: 'feed',
name: job_title,
link: '<?php echo base_url()?>index/signle_search/'+id,
picture: '<?php echo base_url("assets/assets/images/logo.png")?>',
caption: job_title,
description: descriptions,
message: ''
});
});
});
</script>