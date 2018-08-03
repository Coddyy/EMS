<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>


<style type="text/css">
	.imglogo{margin-top: 50px;}
	@media screen and (max-width: 786px){
		.imglogo{margin-top: 0px;}
	}
</style>
	<style>
				body {margin:0;}

				.topnav {
				  overflow: hidden;
				  background-color: #FF7900;
				}

				.topnav a {
				  float: left;
				  display: block;
				  color: #fff;
				  text-align: center;
				  padding: 5px 16px;
				  text-decoration: none;
				  font-size: 14px;
				}

				.topnav a:hover {
				  background-color: #0055A5;
				  color: #fff;
				}

				.active {
				  background-color: #0055A5;
				  color: #fff;
				}

				.topnav .icon {
				  display: none;
				}

				@media screen and (max-width: 600px) {
				  .topnav a:not(:first-child) {display: none;}
				  .topnav a.icon {
				    float: right;
				    display: block;
				  }
				}

				@media screen and (max-width: 600px) {
				  .topnav.responsive {position: relative;}
				  .topnav.responsive .icon {
				    position: absolute;
				    right: 0;
				    top: 0;
				  }
				  .topnav.responsive a {
				    float: none;
				    display: block;
				    text-align: center;
				  }

				}
	</style>

<!--Header Starts-->

<div class="container header">
	<div class="row" style="">
		<div class="col-md-3 col-xs-12" style="border:0px solid red;text-align: center;">
      <img src="<?php echo base_url()?>assets/images/CADnaukri_Header-Logo1.jpg" alt="CADnaukri" class="imglogo" style="border:;" ></div>
		<div class="col-md-9 col-xs-12" style="border:0px solid red;"><img src="<?php echo base_url()?>assets/images/img/bb.jpg" alt="CADnaukri" class="" style="" height="100" width="100%"></div>
	</div>
</div><!--End of container header-->

<div class="container-fluid">
	<div class="row" style="background-color: #FF7900;margin: ;" >
		<div class="container" style="">
			<div class="topnav" id="myTopnav">
				  <a style="background-color: transparent;">Browse Jobs</a>
				  <a href="#" style="text-transform: capitalize;">All jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cae jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cad jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cae jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cfd jobs</a>
				  <a href="#" style="text-transform: capitalize;">Bim jobs</a>
				  <a href="#" style="text-transform: capitalize;">Plm jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cad sales jobs</a>
				  <a href="#" style="text-transform: capitalize;">Cad programming jobs</a>
				  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</div>
	</div>
</div>

<!--Header Ends-->

<!--Landing Page -->



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

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.modernizr.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.multiselect.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url()?>assets/js/modal.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.print.js"></script> -->

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

<!--My style-->
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
                   .icons{font-size:20px;padding: 15px 8px;}
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
                img.slide {
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

                img.slide:hover {
                    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
                }
            </style>

            <style> 
      #myimg {
          max-width: 380;
          height: 85%;
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
          padding:50px 50px;
          -webkit-animation: mymove 5s infinite;  Chrome, Safari, Opera 
          animation: mymove 5s infinite;
      }

      @-webkit-keyframes mymove {
          50% {background-size: 380px 380px;}
      }

      
      @keyframes mymove {
          50% {background-size: 380px 380px;border:10px solid red;border-radius: 50%;}
      }

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

<!--My style-->

<!--Layout -->
<div class="container main" style="">
  <div class="row" style="border: 0px solid red;padding: 10px 10px;"><!--Start Row 1-->
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


      <div class="col-md-8 col-xs-12" style="border:0px solid red;">
        <div class="row">
<style type="text/css">
  .title{font-size: 22px;}
  @media screen and (max-width: 768px){
    .title{font-size: 18px;}
  }
</style>

          <div class="col-xs-12"><p class="title"><?php echo $job->jobtitle; ?></p></div>
          <div class="col-xs-12 col-md-2 month" style=""><?php echo  date("d", strtotime($job->created));?><div class="col-xs-12 date"><?php echo  date("M", strtotime($job->created));?></div></div>

          <div class="col-xs-12 col-md-10 posted o_color" style="">
              <?php $company_name=$this->Company_M->get($job->companyId,TRUE)->name; ?>
            Posted By : <span class="b_color">Company </span><span class="job-location"><br><?= $city?></span>
            <div class="row">
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
              <div class="col-xs-12 col-md-12 b_color" style="font-weight: bold;">
                <i class="fa fa-eye icons" style="padding-left: 0px;" title="view jobs"></i><span class="o_color"> (<?php echo $views; ?>)</span> 
                <i class="fa fa-expeditedssl icons" style="" title="Job score"></i><span class="o_color"> (<?php echo number_format($score,1); ?>
                /10)</span> 
                <i class="fa fa-users icons " aria-hidden="true" title="Candidate Applied" style=""></i><span class="o_color"> (<?php
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

                 ?>)
                </span>
              </div>
            </div>
          </div>
<style type="text/css">
  
  a:hover{text-decoration:none;}
</style>
          <div class="col-md-12 col-xs-12 top10px"  style="" ><br>
            <div class="row" style="">
              <div class="col-xs-12 col-md-6" align="right">
                <button type="submit" class="btn btn-success open-AddBookDialog  log"  data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal"  >Login To Apply</button>
              </div>
              <div class="col-xs-12 col-md-6">
                <a href="<?php echo base_url();?>candidate/login"><button type="submit" class="btn btn-success reg">Register To Apply</button></a>
              </div>
            </div>
          </div>                

          <div class="col-md-12 col-xs-12 inner-content" style="margin-top: 20px;">
            <div class="col-md-3 col-xs-4" style="">Skills</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style=""><?php
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
                      ?></div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Location</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style=""> <?=$city?></div>


          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Salary</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style=""><?=$job->salary?>/P.A</div>
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
            <div class="col-md-8 col-xs-6" style=""><?=$job->qualification?></div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Experience</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style=""> <?=$job->yop?> (in years) </div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-6" style="">Job Description       </div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-12 col-xs-12" style="font-weight: normal;"> <br><?=$job->description?></div>
          </div>

        </div>
          <!-- <div class="row"> -->
            <!-- <div class="col-md-12 col-xs-12" style="font-size: 10px;margin-top: 0px;">Tags :- 
              <a href="#" class="tag_skill">Catagory</a><a href="#" class="tag_skill">Skill 1</a>
              <a href="#" class="tag_skill">Skill 2</a><a href="#" class="tag_skill">Location 1</a>
              <a href="#" class="tag_skill">Location 2</a>
            </div> -->

            <!--Start Row 2-->
            <div class="row" style="margin: 10px -15px;border:0px solid yellow;">
              <div class="col-md-12 col-xs-12">
                <div class="col-xs-12 col-md-4">
                  <button type="button" class="btn btn-success log" onclick="goBack()">GO BACK</button>
                  <!-- <input type="button" name="" value="GO BACK"> -->
                </div>
                <div class="col-xs-12 col-md-8 desktop" style="">
                  <div class="col-md-2 col-xs-2">Share:</div>
                  <a href="#" class="share_button"><div class="col-md-3 col-xs-4" id="facebook_link" style="border:0px solid red;">Facebook </div></a>
                  <?php $url="https://twitter.com/share?url=".current_url()."via=CADnaukri& related=twitterapi%2Ctwitter& hashtags=CADnaukri& text=".$job->jobtitle; ?><a href="#" onclick="fbs_click();">
                    <div class="col-md-2 col-xs-3" id="twitter_link" style="border:0px solid red;">Twitter</div></a>
                  <?php $url="https://plus.google.com/share?url=".current_url(); ?><a href="<?=$url?>">
                    <div class="col-md-2 col-xs-3" id="google_link" style="border:0px solid red;">Google</div></a>
                </div>
                <div class="col-xs-12 col-md-10 mobile">
                  <div class="col-md-12 col-xs-12">Share:</div>
                  <a href="#" class="share_button"><div class="col-md-2 col-xs-4" id="facebook_link" style="border:0px solid red;">Facebook</div></a>
                  <?php $url="https://twitter.com/share?url=".current_url()."via=CADnaukri& related=twitterapi%2Ctwitter& hashtags=CADnaukri& text=".$job->jobtitle; ?><a href="#" onclick="fbs_click();">
                  <div class="col-md-2 col-xs-4" id="twitter_link" style="border:0px solid red;">Twitter</div></a>
                  <?php $url="https://plus.google.com/share?url=".current_url(); ?><a href="<?=$url?>">
                  <div class="col-md-2 col-xs-4" id="google_link" style="border:0px solid red;">Google</div></a>
                </div>
              </div>
            </div><!--End Row 2-->
            

            
            <div class="row" style="border:0px solid red;margin-bottom: 10px;" title="CADnaukri.com"><!--Start Row 3-->
              <div class="col-md-12 col-xs-12" align="center">
                <a target="_blank" href="web_design_dev.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="2.jpg"><img src="<?php echo base_url();?>assets/images/img/5.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="3.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="7.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style="" class="slide"></a>
               <!--  <a target="_blank" href="web_design_dev.jpg"><img src="<?php echo base_url();?>assets/images/img/web_design_dev.jpg" alt="CADnaukri" style=""></a>
                <a target="_blank" href="7.jpg"><img src="<?php echo base_url();?>assets/images/img/1.png" alt="CADnaukri" style=""></a>
                <a target="_blank" href="4.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style=""></a>
                <a target="_blank" href="5.jpg"><img src="<?php echo base_url();?>assets/images/img/5.jpg" alt="CADnaukri" style=""></a>
                <a target="_blank" href="3.jpg"><img src="<?php echo base_url();?>assets/images/img/2.jpg" alt="CADnaukri" style=""></a>
                <a target="_blank" href="4.jpg"><img src="<?php echo base_url();?>assets/images/img/7.jpg" alt="CADnaukri" style=""></a> -->
              </div>
            </div><!--End Row 3-->
          <!-- </div> -->
      </div><!--End of col-md-8 col-xs-12-->

      <style type="text/css">
        .scroll{margin-top: 30px;border:0px solid green;height: 75%; overflow: scroll;}/*overflow: hidden;*/
      </style>

      <!--test-->
      <div class="row">
        <div class="col-md-4 col-xs-12 scroll" style="text-align: left;" id=""  align="center"><!-- id="myimg" -->
          <?php foreach ($right_side_jobs as $key) { 
          		$jobtitle=$key->jobtitle;
                $job_title=str_replace(' ', '-', $key->jobtitle);
                $location=str_replace(' ', '-', $key->location);
                $designation=str_replace(' ', '-', $key->designation);
                $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$key->job_id;
          ?>
                <a href="<?php echo base_url($url);?>" target="_blank">
                	<p><i style="font-size: 100%;color:#FF7900;" class="fa fa-briefcase"></i>&nbsp<span style="color:#0055A5;"><?php echo $key->jobtitle;?></span> <?php if($this->Job_M->job_is_featured($key->job_id) == TRUE)
                    {
                      echo '<span style="color:white;background-color:green;border-radius:2px;">&nbspVerified&nbsp</span>';
                    } ?><br>
                    <i style="font-size: 100%;color:#FF7900;" class="fa fa-map-marker"></i>&nbsp<span style="color:;"><span><?php 

                	if(is_numeric($key->location)) 
                	{
                		$city= $this->City_M->get($key->location,TRUE)->city_name;
                		echo $city;
                		//echo $key->location;
                	}
                	else
                	{
                		echo $key->location;
                	}
                	

                	?></span></span> 
                		| 
                	<i style="font-size: 100%;color:#FF7900;" class="fa fa-briefcase"></i>
                  <?php echo $key->yop;?> Yrs</p>
                </a>

              <?php } ?>


          

        </div>
      </div>

      <!--test-->

  </div><!--End Row 1-->
  
<!--Popullar job-->
<style type="text/css">
  .con6p{text-align: center;font-size: 18px;font-weight: bold;}
</style>
    <div class="row" style="background-color:#ECF0F5;">
      <div class="col-md-12 col-xs-12">
        <p class="con6p" style="">Popular job search results 
        for the following Keywords</p>
        <div class="col-xs-12 col-md-12"><!-- wrapper_container -->
        <ul class="" style="border-bottom: 1px solid #999;">
          <a href="<?php echo base_url('Bangalore')?>"> <li title="Bangalore" class="con6li col-md-3 col-xs-6" style="" >Bangalore</li></a>
          <a href="<?php echo base_url('Bhubaneswar')?>"> <li title="Bhubneshwar" class="con6li col-md-3 col-xs-6" style="" >Bhubneshwar</li></a>
          <a href="<?php echo base_url('Mumbai')?>"> <li title="Mumbai" class="con6li col-md-3 col-xs-6" style="" >Mumbai</li></a>
          <a href="<?php echo base_url('Hyderabad')?>"> <li title="Hyderabad" class="con6li col-md-3 col-xs-6" style="" >Hyderabad</li></a>
          <a href="<?php echo base_url('Chennai')?>"> <li title="Chennai" class="con6li col-md-3 col-xs-6" style="" >Chennai</li></a>
          <a href="<?php echo base_url('Pune')?>"> <li title="Pune" class="con6li col-md-3 col-xs-6" style="" >Pune</li></a>
          <a href="<?php echo base_url('Ahmedabad')?>"> <li title="Ahmedabad" class="con6li col-md-3 col-xs-6" style="" >Ahmedabad</li></a>
          <a href="<?php echo base_url('Delhi')?>"> <li title="Delhi" class="con6li col-md-3 col-xs-6" style="" >Delhi</li></a>
          <a href="<?php echo base_url('Indore')?>"> <li title="Indore" class="con6li col-md-3 col-xs-6" style="" >Indore</li></a>
          <a href="<?php echo base_url('best_design_jobs/search')?>"> <li title="ALL JOBS" class="con6li col-md-3 col-xs-6" style="" > More Jobs</li></a>
        </ul>
    </div>
  </div>
    </div><!--End of Row 4-->

<!--Popullar job-->


</div><!--End of main-container-->


<!--Layout -->



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

      // if(!$city)
      // {
      //    $city='Not Define'; 
      // }
      // if(!$country)
      // {
      //    $country='Not Define'; 
      // }
      // echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
      // echo '<strong>City</strong>:- '.$city.'<br/>';
      // echo '<strong>Country</strong>:- '.$country.'<br/>';
      
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
 






<!--Landing Page -->


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
