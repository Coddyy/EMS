<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />
<?php 
if($this->uri->segment(3) != '' && $this->uri->segment(3) != NULL){
  $segment=$this->uri->segment(3)." | ".$this->uri->segment(2);
}
else if($this->uri->segment(2) != '' && $this->uri->segment(2) != NULL)
{
  $segment=$this->uri->segment(2);
}

?>
  <meta name="description" content="<?php echo $segment;?>"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  h1,h2,h3,h4,h5,h6,p,div,a{font-family: calibri;}
</style>

<title>
<?php if($this->uri->segment(2) != ''){

    $tagsurl=explode('-',$this->uri->segment(1));
    $tag=strToUpper($tagsurl[0])." ".strToUpper($tagsurl[1])." ".strToUpper($tagsurl[2])." ".strToUpper($tagsurl[3]);

      echo $tag." | ".str_replace('-',' ',$this->uri->segment(2));
}
else
{
    $tagsurl=explode('-',$this->uri->segment(1));
    //$tag=$tagsurl[0]." ".$tagsurl[1]." ".$tagsurl[2];
    $tag=strToUpper($tagsurl[0])." ".strToUpper($tagsurl[1])." ".strToUpper($tagsurl[2])." ".strToUpper($tagsurl[3]);
    echo $tag;
 
}
?>

</title>
</head>
<div class="container">
<?php if($this->Candidate_M->isLoggedin() == TRUE || $this->Employee_M->isLoggedin() == TRUE){ 
 if($this->Candidate_M->isLoggedin() == TRUE)
      { 
          $candidate_id=$this->session->userdata('candidate_id');
          $name=$this->Candidate_M->get_cand_name($candidate_id);
          $type="candidate";
      }
      else if($this->Employee_M->isLoggedin() == TRUE) 
      {
          $employer_id=$this->session->userdata('emp_id');
          $name=$this->Employee_M->get_emp_name($employer_id);
          $type="employer";
      }
?>
          <div class="dropdown pull-right" style="margin-right:2%;">
            <button class="btn dropdown-toggle" style="color:white;background-color: #ff7900;" type="button" data-toggle="dropdown">Hey <b><?php 
                                        $first_name=explode(' ',$name);
                                        echo $first_name[0];
                                        ?></b>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?><?php echo $type;?>/dashboard">Dashboard</a></li>
              <li><a href="<?php echo base_url();?><?php echo $type?>/logout">Logout</a></li>
            </ul>
          </div>
<?php } ?>
</div>
<div id="fb-root"></div>

<?php //foreach($city_wise_job as $sr)
//       {
//         var_dump($sr->id);exit();
//       }
?>
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
<style type="text/css">
  .contmain{border:0px solid red;margin-left: -30px;margin-top: 45px;}
  @media screen and (max-width: 768px){
    .contmain{border:0px solid red;margin-left: 0px;margin-top: 45px;}
  }
</style>
<div class="main-container contmain" style="">
    <section class="wht-bg">

      <!--Start Create free job Alert-->
<style type="text/css">
  .con3{
background-color:#0055A5 ;
padding: 5px 5px;
}
@media screen and (max-width: 786px){
            .space{
              margin-top: 15px;
              
            }
            }
</style>


<div class="container con3" style="margin-top: 25px;margin-left:;">
                <p style="text-align: center; color: #fff; font-size: 18px; padding-top: 10px;">Create Your Free Job Alert!</p>
             <form action="<?php echo base_url();?>best_design_jobs/save_job_alert" method="post">

              <div class="row">
            
              <?php if($this->uri->segment(2) == "alert_saved"){
                if($this->session->flashdata('alert_saved')){ ?>
                    <div class="alert alert-success" style="width:90%;margin-left: 5%;margin-right: 5%;">
                       <a href="#" class="close" data-dismiss="alert">&times;</a>
                       <?php echo $this->session->flashdata('alert_saved'); ?>
                    </div>
              <?php } } else if($this->uri->segment(2) == "alert_not_saved"){
                if($this->session->flashdata('alert_not_saved')){  ?>
                  <div class="alert alert-danger" style="width:90%;">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      <?php echo $this->session->flashdata('alert_not_saved'); ?>
                  </div>
              <?php } } ?>
                <div class="col-md-4 col-xs-12">
                   <input type="text" placeholder="Name" id="name" class="form-control " style="max-width: 100%;" name="name" required>
                </div>
                <div class="col-md-4 col-xs-12">
                   <input type="text" placeholder="Email" id="email" class="form-control " style="max-width: 100%;" name="email" required>
                </div>
                <div class="col-md-4 col-xs-12">
                    <input type="text" placeholder="Mobile"  id="mobile" class="form-control " style="max-width: 100%;" name="mobile" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <select style="color: #999;" name="industry_type" class=" " required>
                        <option value="">-- Select Industry Type --</option>
                                    <?php foreach($industry_type as $key)
                                          {
                                            $industry_name=$key->name;
                                            $industry_id=$key->id;
                                            echo "<option value='$industry_id'>$industry_name</option>";
                                          } 
                                    ?>
                    </select>

                </div>
                <div class="col-md-4 col-xs-12">
                    <select style="color: #999;" name="location" class=" space" required>
                        <option value="">-- Select City --</option>
                        <?php foreach($citis as $key)
                              {
                                $city_name=$key->label;
                                $city_id=$key->id;
                                echo "<option value='$city_name'>$city_name</option>";
                              } 
                        ?>
                    </select>
                </div>
                <div class="col-md-4 col-xs-12">
                    <input type="submit" value="SUBMIT" class="button orange-button space" style="width: 100%;" />
                </div>
            </div>
          </form>
        </div> <!-- End of container 3-->

<!--End Create free job Alert-->

<!--City Test-->
<style type="text/css">
  
  .quick_search{font-size: 18px;font-weight:bold; border: 0px solid red;display: block;margin-top: 7px;}
  .drp{margin-left: -25px;}
  .topbar_li_1{padding: 0px 0px;}
  @media screen and (max-width: 768px){
    .quick_search{font-size: 16px;margin-top: 8px;}
    .drp{margin-left: -180px;padding: 0px 0px;}
  } 
</style>
<div class="container">
    <div class="row">

<br />



      <div class="col-md-1 col-xs-5 quick_search" style="">Search </div><!-- <span class="glyphicon glyphicon-arrow-right col-md-1 col-xs-2" style="padding: 0px; font-size: 18px;border: 0px solid red;margin-top: 10px;"></span> -->
      <div class="col-md-6 col-xs-5">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="" data-toggle="dropdown" style="border:none; margin-top: 0px;margin-left: -25px;font-size: 18px;">By Catagory
          <span class="caret"></span></button>
          <ul class="dropdown-menu drp" >
            <!-- <li class="topbar_li_1"><a href="<?php //echo base_url('best_design_jobs/search')?>">ALL JOBS</a></li> -->
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>CAD-Jobs/<?php echo $this->uri->segment(2);?>" class="drp1">CAD JOBS</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>CAE-Jobs/<?php echo $this->uri->segment(2);?>">CAE JOBS</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>CFD-Jobs/<?php echo $this->uri->segment(2);?>">CFD JOBS</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>BIM-Jobs/<?php echo $this->uri->segment(2);?>">BIM JOBS</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>PLM-Jobs/<?php echo $this->uri->segment(2);?>">PLM JOBS</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>CAD-Sales-Jobs/<?php echo $this->uri->segment(2);?>">CAD SALES</a></li>
            <li class="topbar_li_1 col-md-3 col-xs-3"><a href="<?php echo base_url();?>CAD-Developer-Jobs/<?php echo $this->uri->segment(2);?>">CAD DEVELOPERS</a></li> 
          </ul>
        </div>
      </div>

    </div>
</div>
<br><br>


<!--City Test-->


<style type="text/css">
    h5:hover,a:hover{text-decoration: none;}
    .h3titel{color:#fff;background-color: #FF7900;width: 110%; height: 31px;font-weight:none;font-family:calibri;padding: 5px;border-radius: 2px;text-align: left;margin-top: ;}
    .h3titel:hover{background-color: #0055A5;color:#fff;}
    .put_margin{border:0px solid green;margin: 0px -15px;}
    @media screen and (max-width: 768px){
     .put_margin{border:0px solid blue;margin: 0px 0px;}
    }
</style>

      <section class="section" >

            	<div class="container" >
                 <div class="container-inner line-sepa-bottom put_margin" style="">
       <div class="job-container" style="border:0px solid red;">
              <h1 class="title" style="margin-top: 0px;"> Jobs In  <?php echo str_replace('-',' ',$this->uri->segment(2));?></h1><br><br><br>
              
                            <div class="job-list" style="border:0px solid red; margin-top: -60px;">
                            <?php
							if($this->session->flashdata('job_appply_success')){
						       $succesmsg = $this->session->flashdata('job_appply_success');?>
							   <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
							   <br/>
							   <?php } ?>
                            	<ul>
                            	 
                            	<?php 
                            	if($city_wise_job)
                            	{
                            		
                            	foreach($city_wise_job as $sr)
                            	{
                                //var_dump($sr->job_id);exit();
                            		$job_skills=$this->Job_skill_M->get_skills_name($sr->id);
                            		$job_id=$sr->id;
                                
                                $views=$this->Job_M->total_job_view($job_id); 
                                $applications=$this->Job_M->total_job_application($job_id);
                                if($applications != false)
                                {
                                  $ans=$applications/$views;
                                  $score=$ans*10;
                                  if($score < 3)
                                  {
                                    $score= 3;
                                  }
                                  else if($score > 10)
                                  {
                                    $score= 10;
                                  }
                                }
                                else
                                {
                                  $score= 3;
                                }
                            	?>
								
                                	<li id="<?php echo $sr->job_id?>">
                                    	<div class="job-list-inner">
                                        	<div class="job-list-title">
                                        	<input type="hidden" name="title"  id="title-<?php echo $sr->job_id?>" value="<?php echo ucfirst($sr->jobtitle)?>" />

                                        	<input type="hidden" name="description" id="description-<?php echo $sr->description?>" value="<?php echo $sr->description?>" />

											<?php 
											$jobtitle=$sr->jobtitle;
											$job_title=str_replace(' ', '-', $sr->jobtitle);
											$location=str_replace(' ', '-', $sr->location);
											$designation=str_replace(' ', '-', $sr->designation);
											//$url=$job_title.'-'.$location;
                      $id=md5($sr->job_id).'g3q7'.$sr->job_id.'g3q7'.md5($sr->job_id + 1);
											$url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$id;
					
											?>

                        	<a href='<?php echo base_url($url)?>'>
                        	<h4 class="h3titel"><?php echo ucfirst($sr->jobtitle)?></h4></a>
                            <p style="font-size: 14px;color: #000;"> Last Date:<?php echo date("jS F, Y", strtotime($sr->lastdate))?></p>
                            
                            <p><b><span style="color:#004f98;">Job Score: </span><span style="color:green;">(<?php echo number_format($score,1); ?>/10)</span></b></p>
                            <?php
                            if($this->session->userdata('candidate_id'))
                            {
                            	$candidate_id=$this->session->userdata('candidate_id');
                            	$check_applied=$this->Job_apply_M->get_by(
                            	array('job_id'=>$job_id,
                            	'user_id'=>$candidate_id));
                            	// $url=base_url("candidate/job_apply/$job_id");
                            	if(count($check_applied) > 0 )
                            	{
                            		echo '<button type="button" class="  btn-primary" disabled="disabled" style="position: absolute;top: 0;right: 0;padding: 7px 30px;">Already Applied</button>';
														//echo '<a class="button btn-disabled" href="#"> </a>';
													}
													else
													{

                            $expired=$this->Job_M->check_expiry($job_id);
                            //echo '<a class="button" href="'.$url.'">'.$expired.'</a>';
                            if($expired == true)
                            {
                                //echo "hello";
                                  // echo '<a class="button" onclick="expired()">View</a>';
                              echo '<a class="button" href="'.base_url($url).'">View</a>';
                            }
                            else
                            {
														    echo '<a class="button" href="'.base_url($url).'">View</a>';
                            }
													}
													
												}
												else
												{
                          $expired=$this->Job_M->check_expiry($job_id);
                            if($expired == true)
                            {
                                //echo "hello";
                                 // echo '<a class="button" onclick="expired()">View</a>';
                                echo '<a class="button" href="'.base_url($url).'">View</a>';

                            }
                            else{
													         // $url=base_url("candidate/login/search/$job_id");
  													       // echo '<a class="button" href="'.$url.'">Apply</a>';
                                echo '<a class="button" href="'.base_url($url).'">View</a>';
                              
                            }
												}
                          ?>
                         
                      </div>
                      <div class="job-post-details">
                      	<ul>
                         <!-- <li><b><span style="color:#004f98;">Job Score</span><span style="color:green;">(<?php //echo number_format($score,1); ?>/10)</span></b></li> -->
                          	<li><a href="#" style="font-size: 14px;color: #000;"><span class="glyphicon glyphicon-briefcase" style="font-size: 16px;color: #FF7900;"></span><?php 

                            $row=explode('-',$sr->yop);
                            echo $row[0];
                            //echo $sr->yop; ?> to <?php echo $row[1]; ?> Yrs</a></li>
                          	
                              <li><a href="#" style="font-size: 14px;color: #000;"><span class="glyphicon glyphicon-map-marker" style="font-size: 16px;color: #FF7900;"></span>
                        <?php if (is_numeric($sr->location)) 
                            { 
                            echo $this->City_M->get($sr->location,TRUE)->city_name;
                            }
                            else
                            {
                            	echo $sr->location;
                            }?></a></li>
                            

                              <li><a href="#" style="font-size: 14px;color: #000;"><span></span> Posted Date 
                              <?php echo date("jS F, Y", strtotime($sr->created))
                               //echo $sr->created ;// strtotime(date("d-M-Y"),$sr->created)?></a></li>
                          </ul>
                      </div>
                      <div class="job-content-details">
                      	<p><?php //echo $sr->description?> </p>
                          <div class="job-link">
                          <?php
                          echo '<b>Skills :</b><a href="#"> ';
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
                                                 
                                                 $url="https://twitter.com/share?url=".base_url('best_design_jobs/signle_search/'.$sr->job_id)."via=CADnaukri&
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
                              $url="https://plus.google.com/share?url=".base_url('best_design_jobs/signle_search/'.$sr->job_id);
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
link: '<?php echo base_url()?>best_design_jobs/signle_search/'+id,
picture: '<?php echo base_url("assets/assets/images/logo.png")?>',
caption: job_title,
description: descriptions,
message: ''
});
});
});
</script>
</script>
</script>
</script>
</script>
</script>
<script>
function expired()
{
  alert('Job Expired');
}
</script>