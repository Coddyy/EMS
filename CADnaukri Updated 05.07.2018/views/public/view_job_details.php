<?php// include 'new_header.php' ?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />
<meta name="description" content="India's Premiere First CAD CAM C -->



<?php// include 'new_header.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />
<meta name="description" content="India's Premiere First CAD CAM CAE CFD Job Portal. Search & 

Apply for Job Vacancies across Top Product Design Companies in India. Compare And Apply For Best 

Package. Search Now. Post your CV or Resume to find dream Job Now!"/>
<META NAME="Keywords" CONTENT="Job, Jobs, Job Search, Top Companies, CAD Jobs in India, CAD

Jobs in Chennai, CAD Jobs Bangalore, CAD Jobs in Pune, CFD Jobs, CAD Jobs in Mumbai, Structural 

Design Jobs in Mumbai, Mold Design Jobs in Gurgaon, Mold Design Jobs in Chennai, Interior Design 

Jobs, Architectural Jobs, CAD CAM Jobs in Hyderabad, AutoCAD Jobs in Hyderabad, AutoCAD Jobs 

in Visakhapatnam, Autocad Jobs in Bhubaneswar, Proe Jobs, Creo Jobs, CATIA Jobs in India, Pro 

E Jobs in India, CAD CAM Jobs in Delhi, CAD Jobs in Kolkata, Automobile Design Jobs, Car Design 

Jobs, FEA Jobs, PLM Jobs in India, ANSYS Jobs, Hypermesh Jobs, Revit Jobs, Inventor Jobs in India, 

Design Engineer Jobs in India, BIM Jobs, DELCAM Jobs, SolidWorks Jobs in Pune, SolidWorks Jobs 

in Gujrat, CAD Jobs in Surat, CAD Jobs in Rajkot, CAD Jobs, Jamnagar, CAD Jobs in Baroda, Design 

Jobs in Vadodara, NX Jobs in Gurgaon, MicroStation Jobs in India, CAD GIS Jobs, Nastran Jobs, 

Patran Jobs, LS-DYNA Jobs in India, ANSYS Fluent Jobs, Mastercam Jobs, Staad Pro Jobs, Moldflow 

Jobs, Teamcenter Jobs, PTC Windchill Jobs, ENOVIA Jobs, Draughtsman Jobs, Draftsman Jobs, Lead 

Engineer Jobs, Design Manager Jobs, Tool Design Jobs, Revit Technician MEP Jobs, Instrumentation 

Designer Jobs, Simulation Engineer Jobs, R&D Jobs, Structural Engineer Jobs, Ship Designer, 

Landscape Architect Jobs, BIM Manager Jobs, Electronics Design Engineer Jobs, Embedded Design 

Engineer, Piping Design Jobs, Aerospace Product Engineer Jobs, Marine Design Jobs, BIW Design 

Jobs, CAE Engineer Jobs, Vehicle Design Manager Jobs, Automotive Interior Design Jobs, Packaging 

Design Engineer Jobs"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>

  <?php
  $tags = count($job_tags);
      $i = 0;
      foreach($job_tags as $jt)
      {
          
          // if(++$i === $tags) 
          // {
          //     echo $jt->name.' ';
          //  }
          //  else
          //  {
             echo $jt->name.'  | ';
           //}
        }
      $numItems = count($job_skills);
      $i = 0;

      foreach($job_skills as $js)
      {
          
          if(++$i === $numItems) 
          {
              echo $js->name.' ';
           }
           else
           {
             echo $js->name.'  | ';
           }
        }
      if (is_numeric($job->location)) 
      { 
        $city= $this->City_M->get($job->location,TRUE)->city_name;
      }
      else
      {
        $city= $job->location;
      }
      echo " ".$city." ";
      $date=explode(' ',$job->created);
      //echo $date[0];
      echo "| ".date('F Y',strtotime($date[0]));
                      
  ?>

</title>

<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" />-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.modernizr.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.multiselect.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/modal.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.print.js"></script>
<style type="text/css">
                         .reg{background:#FF7900;padding:10px 2px;display: block;font-size:12px;height: 40px;width: 60%;}
                         .reg:hover{background:#0055A5;font-size: 13px;}
                         .log{background:#0055A5;padding:10px 2px;display: block;height: 40px;width: 60%;}
                         .log:hover{background:#FF7900;font-size: 13px;}

                         @media screen and (max-width: 768px){
                          .reg{font-size: 10px;padding:2px 2px; height: 30px;width: 100%;}
                          .reg:hover{background:#0055A5;font-size: 11px;padding:1px 1px;}
                          .log{font-size: 10px;padding:2px 2px; height: 30px;width: 100%;}
                          .log:hover{background:#FF7900;font-size: 11px;padding:1px 1px;}
                         }

</style>
<style type="text/css">

/*@media screen and (max-width: 1366px) {
    .con2col {
      max-width:116px;
    }*/

@media screen and (max-width: 768px) {
    .con5col {
        
        border-right: none ;
        border-bottom: ;
        text-align: left;
        
    }
}

@media screen and (max-width: 768px) {
    /*.con2 {

        
        background-color: red;
        
    }*/
}

/*@media screen and (max-width: 1366px) {
   .con2colm {

        
        margin-left: 185px;
        
    }
}*/



.con5{
  background-color: #ECF0F5;
}
.con5a{
color: #B2211F;

}
a.con5a:hover,a.co5a:active{
  color: #FF7900;
  font-size: 16px;
  text-decoration: none;
}
.con6p{
  margin: 10px 15px; font-size: 18px; 
}
@media screen and (max-width: 768px) {
    .con6p{
      font-size: 16px;
    }
}
.con6li{
  display: inline-block; margin: 5px 8px;
  padding: 10px 5px;
}
.con6li:hover{
  color: #FF7900;
  background-color: #0055A5;
  /*height:  40px;*/
  /*padding: 10px 5px;*/
}
  

.con4{
background-color:#0055A5 ;
padding: 5px 5px;
}
.orange-button {
    background: #ff7900;
    border: 1px solid #ff7900;
    font-family: 'robotobold';
    text-transform: uppercase;
    padding: 8px 15px;
}


</style>

</head>

<!--test-->







      

      <!--test-->

<style type="text/css">
  .con2rows{

  background-color: #ff7900;
  border:0px solid #bbbbbb;
   margin-left: 0px;
  margin-right: 0px;
}

.con2cols{


border-right: 1px solid #fff; 
border-radius: 0px; 
padding: 0px 2px;
text-align: center; 
background-color: ; 
color: #fff; 
max-width:116px;
max-height: 50px;
margin:3px 4px;
margin-left: 8px;
margin-top: 2px;
margin-bottom: 2px;
}
  
.con2colms{
  margin-left: ;
}

.confluid{
  background-color: #ff7900; 
  height:auto;
  margin-top: 16px;
}

@media screen and (max-width: 768px) {
.confluid{
  background-color:#fff; 
  height:auto;
  max-width: 100%;
  margin-top: 16px;
  padding: -10px 50px;
}
.concon{
  margin: 10px -22px;

}
    .con2cols {
        
        /*margin: 2px 14.5px;*/
        margin-top: 2px;
        margin-left: 19px;
        border-bottom: 2px solid #999;
        border-right: none;
        
        text-align: left;
       
    }
} 
a:hover{text-decoration: none;}
</style>
</head>
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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
</head>

<body>

<?php //echo $this->uri->segment(3); ?>

    <!--/ .header-in-->
    <div class="main-container">
        <section class="wht-bg">
        
       <section class="section">
              <div class="container">
                <div class="container-inner line-sepa-bottom">
                    <div class="row">                        
                        
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
                                        <button class="btn dropdown-toggle" style="color:white;background-color: #ff7900;" type="button" data-toggle="dropdown">Hey <b><?php echo $name;?></b>
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo base_url();?><?php echo $type;?>/dashboard">Dashboard</a></li>
                                          <li><a href="<?php echo base_url();?><?php echo $type?>/logout">Logout</a></li>
                                        </ul>
                                      </div>
                    <?php } ?>
                        <div class="col-xs-12 col-md-12">
                        <div class="xcolleft">
                            
                            <div class="single-searchresult" >
                              <h2><?php echo $job->jobtitle; ?></h2>
                              
                      
                                <div class="single-searchresult-head">
                                 <input type="hidden" name="job_id" id="job_id" value="<?php echo $job->id?>" />
                                <input type="hidden" name="title" id="title" value="<?php echo strtoupper($job->jobtitle)?>" />
                                          <input type="hidden" name="description" id="description" value="<?php echo strtoupper($job->description)?>" />
                                          <?php if (is_numeric($job->location)) 
                                                  { 
                                              $city= $this->City_M->get($job->location,TRUE)->city_name;
                                                  }
                                                  else
                                                  {
                                                    $city= $job->location;
                                                  }?>
                                  <div class="row">
                                      <div class="col-xs-12 col-md-1">
                                          <div class="date-details">
                                              <?php echo  date("d", strtotime($job->created));?>
                                                <span class="date-month"><?php echo  date("M", strtotime($job->created));?></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">   
                                        <?php
                                        $company_name=$this->Company_M->get($job->companyId,TRUE)->name;                                                    ?>
                                            <h6>Posted by:  Company</h6>
                                            <p class="job-location"><?=$city?></p>
                                   <?php 
                                   if($this->session->flashdata('error'))
                                   {
                    $msg = $this->session->flashdata('error');?>
                    <div class="col-md-offset-4">
                          <div class="alert alert-danger alert-dismissible
                           fade in col-md-12" data-dismiss="alert" role="alert" 
                            style="color: red">  <?php echo $msg; ?>
                      </div>
                    </div>
                <?php } ?>
                <?php 
                $id=$job->id;
                $views=$this->Job_M->total_job_view($id); 
                $applications=$this->Job_M->total_job_application($id);

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
                <div class="col-md-12 col-xs-12">
                <b style="color:#004f98;">Total Job Views</b><span style="color:green;"> (<?php echo $views; ?>)</span>&nbsp&nbsp&nbsp&nbsp
                <b style="color:#004f98;">Job Score</b><span style="color:green;"> (<?php echo number_format($score,1); ?>
                /10)</span>&nbsp&nbsp&nbsp&nbsp
                <b style="color:#004f98;">Candidates Applied</b><span style="color:green;"> (<?php
                  if(!empty($applications))
                  {
                    echo $applications; 
                  }
                  else
                  {
                    $min=10;
                    $max=20;
                    echo rand($min,$max);
                    //echo "0";
                  }

                 ?>)</span>
                </div>
                <?php 
                if($this->session->flashdata('success'))
                {
                $msg = $this->session->flashdata('success');?>
                <br />
                <div class="col-md-offset-4">
                      <div class="alert alert-success alert-dismissible 
                      fade in col-md-12" data-dismiss="alert" role="alert" 
                      style="color:green;"> <b> <?php echo $msg; ?></b>
                  </div>
                  <br />
                </div>
                <?php } ?>
                            
                            </div>
                               <div class="col-xs-3 right">
                    <?php
                    if($this->Candidate_M->isLoggedin() == TRUE)
                    {
                      $applied_check=$this->Job_apply_M->get_by(array('user_id'=>$this->session->userdata('candidate_id'),'job_id'=>$job->id));
                      if(count($applied_check) > 0)
                      {
                        echo '<a href="#" class="button" disabled="disabled">Already Appiled</a>';
                        //echo '<a href="#" class="button">Save Job</a>';
                      }
                      else
                      {
                    
                            ?>
                    <form action="" method="POST">
                      <input type="hidden" name="job_id" value="<?php echo $job->id?>" >
                        <input type="hidden" name="candidate_id" value="<?php echo $this->session->userdata('candidate_id');?>" >
                <?php   $expired=$this->Job_M->check_expiry($id);

                        if($expired == true) // No expiry Checking, Now All can apply expired jobs //
                        { ?>
                            <!-- // expiry restricted button, this button restrict apply for expired jobs // 
                            <button  class="button" onclick="expired()" name="apply_job">Apply Job</button> 
                            -->
                            <button  class="button log" type="submit" name="apply_job">Apply Job</button>
                <?php   } 
                        else  
                        {?> 
                            <button  class="button log" type="submit" name="apply_job">Apply Job</button>  
                <?php   } ?>
                       <button  class="button log" type="submit" name="save_job">Save Job</button>
                       </form>
                    <?php 
                        
                      }
                    }
                    else
                    {
                     $expired=$this->Job_M->check_expiry($id);
                      if($expired == true) // No expiry Checking, Now All can apply expired jobs //
                      { ?>
                              <!-- // expiry restricted button, this button restrict login for expired jobs //
                              <button  class="button" onclick="expired()" name="apply_job">Login To Apply</button> --> 
                              

                              <a href="#" class="open-AddBookDialog button log"  data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal" >Login To Apply</a>
                              <a href="<?php echo base_url();?>candidate/login" class="button reg" >Register To Apply</a>
                              
                <?php } 
                      else  
                      { ?> 
                        

                        <a href="#" class="open-AddBookDialog button log"   data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal" >Login To Apply</a>
                        <a href="<?php echo base_url();?>candidate/login" class="button reg" style="" >Register To Apply</a>

                        

                        
                <?php } ?>
                        <!-- <a href="#" class="button">Save Job</a> -->
                <?php } ?>
                                      
                          </div>
                      </div>
                     
                      <ul class="single-search-list">
                        <!-- <li><span>Job Title : </span><?php //$job->jobtitle?></li> -->
                          <li><span>Salary : </span><?=$job->minsal?>/P.A</li>
                          <li><span>Skills Required : </span> 
                         <?php
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
                      ?></li>
                                        <li><span>Location :</span><?=$city?></li>
                                        <li><span>Eligibility :</span><?=$job->qualification?></li>
                                        <li><span>Experience :</span><?=$job->yop?> (in years)</li>
                                        <li><span>Job Description :</span><?=$job->description?></li>
                                    </ul>
                                    <div class="row">
                                      <div class="col-xs-3">
                                        <a href="#" class="button log" onclick="goBack()">Go Back</a>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="share-div">
                                                Share :
                                                <ul class="list-share">
                                                <li><a class="share_button" href="#">Facebook</a></li>
                                                <li>
                                               <!-- <a href="https://twitter.com/share" class="twitter-share-button"  data-count="vertical">Tweet it</a></div>-->
                                                 <?php 
                                                 $url="https://twitter.com/share?url=".current_url()."via=CADnaukri&
                          related=twitterapi%2Ctwitter&
                          hashtags=CADnaukri&
                          text=".$job->jobtitle;
                                                 ?>
                                                <a href="#" 
                                               onclick="fbs_click();">
                        Twitter
                        </a>
                                                
                                                
                                                
                                            
                                                
                                               </li>
                                               <!-- <li><a href="#">Linkedin</a></li>-->
                                                <li>
                                               <?php
                                                $url="https://plus.google.com/share?url=".current_url();
                                                ?>
                                                <a href="<?=$url?>" >Google+</a>
                                                
                                               </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                      </div>
<!-- <div class="col-md-3 col-xs-12 small loader">Advertisment<img src="<?php echo base_url()?>assets/images/Visitors.png" alt="CADnaukri" class="img_size"></div> -->
                        
                        </div>
                        
                </div>
                </div>
        </section>
        
          
        </section>
      </div>
       
        </section>
        <br />
         <div class="container con6" style="background-color:#ECF0F5; margin-top: -50px; ">
      <div class="row"><p class="con6p" style="">Popular job search results 
        for the following Keywords</p>
        <div class="wrapper_container">
<ul class="" style="border-bottom: 1px solid #999;">
<a href="<?php echo base_url('best_design_jobs/Bangalore')?>"> <li title="Bangalore" class="con6li" style="" >Bangalore</li></a>
<a href="<?php echo base_url('best_design_jobs/Bhubaneswar')?>"> <li title="Bhubneshwar" class="con6li" style="" >Bhubneshwar</li></a>
<a href="<?php echo base_url('best_design_jobs/Mumbai')?>"> <li title="Mumbai" class="con6li" style="" >Mumbai</li></a>
<a href="<?php echo base_url('best_design_jobs/Hyderabad')?>"> <li title="Hyderabad" class="con6li" style="" >Hyderabad</li></a>
<a href="<?php echo base_url('best_design_jobs/Chennai')?>"> <li title="Chennai" class="con6li" style="" >Chennai</li></a>
<a href="<?php echo base_url('best_design_jobs/Pune')?>"> <li title="Pune" class="con6li" style="" >Pune</li></a>
<a href="<?php echo base_url('best_design_jobs/Ahmedabad')?>"> <li title="Ahmedabad" class="con6li" style="" >Ahmedabad</li></a>
<a href="<?php echo base_url('best_design_jobs/Delhi')?>"> <li title="Delhi" class="con6li" style="" >Delhi</li></a>
<a href="<?php echo base_url('best_design_jobs/Indore')?>"> <li title="Indore" class="con6li" style="" >Indore</li></a>
<a href="<?php echo base_url('best_design_jobs/search')?>"> <li title="ALL JOBS" class="con6li" style="" > More Jobs</li></a>
</ul>
      </div>
<!-- <div class="col-md-6 col-xs-6" style="margin-top: 10px; margin-bottom: 10px;">Design Jobs In Bangalore</div>
<div class="col-md-6 col-xs-6" style="margin-top: 10px; margin-bottom: 10px;">Cad Jobs In Bangalore</div> -->
    </div><!--End of container con6-->


<br>
</div>
    </div>
    <br />
    
 <!--LOGIN MODAL -->
 <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Candidate Sign In</h4>
      </div>
      <div class="modal-body">
   <input type="hidden" name="jobid" id="bookId" value=""/>
               
      
                      
                            <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data">
                              <label for="email">Email</label>
                              <input type="text" name="email_id" id="email_id" required=""/>
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" required="" />
                             
                               <label for="checkbox3">
                                  <input type="checkbox" name="checkbox3" id="checkbox3" /> Remember me
                               
                  <a style="float:right" href="<?php echo base_url('candidate/forgot_password')?>">Forgot Password?</a>
                   </label>
                              <br />
                              <input type="submit" name="login" id="button2" value="Sign in" class="button" />
                            </form>
                            <p>&nbsp;</p>
         
          </form>
        
      
    
      </div>
      <div class="modal-footer" style="text-align: center;">
      <?php //echo $job->id; ?>
    Don't have an account yet? Register <a href="<?php echo base_url()?>candidate/login/<?php echo $job->id; ?>" >here</a>  
   <!-- <form action="<?php echo base_url()?>candidate/login/<?php echo $job->id; ?>"> Register </form> -->
      </div>
    </div>
  </div>
</div>

<!-- ###########$$$$$$$$$$$$$   VERY IMPORTANT CODE - GET CITY FROM IP ADDRESS $$$$$$$$$$################### -->
<?php

 /*Get user ip address*/

      /*Get user ip address*/
      // $ip_address=$_SERVER['REMOTE_ADDR'];

      // /*Get user ip address details with geoplugin.net*/
      // $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
      // $addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

      // /*Get City name by return array*/ 
      // $city = $addrDetailsArr['geoplugin_city']; 

      // /*Get Country name by return array*/ 
      // $country = $addrDetailsArr['geoplugin_countryName'];

      /*Comment out these line to see all the posible details*/
      /*echo '<pre>'; 
      print_r($addrDetailsArr);
      die();*/

      if(!$city)
      {
         $city='Not Define'; 
      }
      if(!$country)
      {
         $country='Not Define'; 
      }
      echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
      echo '<strong>City</strong>:- '.$city.'<br/>';
      echo '<strong>Country</strong>:- '.$country.'<br/>';
      
?>

<!-- ###########$$$$$$$$$$$$$   VERY IMPORTANT CODE - GET CITY FROM IP ADDRESS $$$$$$$$$$################### -->

<?php //echo md5("Abhra@12");?>
 <script type="text/javascript">
 function fb_share() {
  var id=$('#job_id').val();
  var job_title=$('#title').val();
  var description=$('#description').val();
FB.ui(
{
  
method: 'feed',
name: job_title,
 href: '<?php echo base_url()?>best_design_jobs/signle_search/'+id,
link: '<?php echo base_url()?>best_design_jobs/signle_search/'+id,
picture: '<?php echo base_url("assets/assets/images/logo.png")?>',
caption: job_title,
description: description,
message: ''
});
}
$(document).ready(function(){
  $('.share_button').on( 'click', fb_share );

});
function goBack() 
{
    window.history.back()
}

$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
   console.log(myBookId);
     $(".modal-body #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     $('#myModal').modal('show');
});

function fbs_click() {
    var twtTitle = document.title;
    var descrption = $('#description').val();;
    var twtUrl = location.href;
    var maxLength = 140 - (twtUrl.length + 1);
    if (twtTitle.length > maxLength) {
        twtTitle = twtTitle.substr(0, (maxLength - 3)) + '...';
    }
    var twtLink = 'http://twitter.com/home?status=' + encodeURIComponent(twtTitle + ' '+descrption +' ' + twtUrl);
     var width  = 575,
    height = 400,
    left   = ($(window).width()  - width)  / 2,
    top    = ($(window).height() - height) / 2,
    url    = this.href,
    opts   = 'status=1' +
             ',width='  + width  +
             ',height=' + height +
             ',top='    + top    +
             ',left='   + left;
    window.open(twtLink, 'twitter', opts);
    //window.open(twtLink);
}
function expired()
{
  alert('Job Expired');
}
</script>

 <footer>
 