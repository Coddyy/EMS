<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async ></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async ></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>

<!--Start of header style-->
<style type="text/css">
  .imglogo{margin-top: 15px;margin-left: -5px;}
  @media screen and (max-width: 786px){
    .imglogo{margin-top: 0px;}
  }
  .imgbanner{margin-left: -20px;max-width: 105%;height: 100px;}
  @media screen and (max-width: 768px){
  .imgbanner{margin-left: -20px;max-width: 110%;height: 100px;}
  }
    .desktop1{visibility: visible;}
    .mobile1{visibility: hidden;}
     @media screen and (max-width: 768px){
    .desktop1{height: 0px;visibility: hidden;width: 0px;}
    .mobile1{visibility: visible;}
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

        @media screen and (max-width: 768px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        @media screen and (max-width: 768px) {
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
@media screen and (max-width: 768px){
  .new_logo{text-align: center;}
}

  </style>
<!--End of Header style-->
<!--Header Starts-->

<div class="container main_width">
  <div class="row" style="height: 100px;">

    
    <div class="col-md-3 col-xs-12 new_logo" style="">
      <a href="<?php echo base_url();?>" title="CADnaukri.com" ><img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="CADnaukri" class="" align="center" title="CADnaukri" style="margin-top: 3px;"></a>
    </div>
    <div class="col-md-9 col-xs-12" title="CADnaukri.com" style="border:0px solid red;">
      <img src="<?php echo base_url()?>assets/images/img/96_720_2-min.png" alt="CADnaukri" class="imgbanner" style="">
    </div>
  </div>
</div><!--End of container header-->

<div class="container-fluid header" id="myheader">
  <div class="row" style="background-color: #FF7900;margin: ;">
    <div class="container" style="text-align: center;max-width: 1000px;border:0px solid red;padding: 0 -10px;" align="center">
      <div class="topnav" id="myTopnav" align="center">
          <a style="background-color: transparent;">Browse jobs <span style="font-weight: bold;">↔</span> </a>
          <a href="<?php echo base_url();?>best_design_jobs/search" style="text-transform: capitalize;">All jobs</a>
          <a href="<?php echo base_url();?>CAD-Jobs" style="text-transform: capitalize;">Cad jobs</a>
          <a href="<?php echo base_url();?>CAE-Jobs" style="text-transform: capitalize;">Cae jobs</a>
          <a href="<?php echo base_url();?>CFD-Jobs" style="text-transform: capitalize;">Cfd jobs</a>
          <a href="<?php echo base_url();?>BIM-Jobs" style="text-transform: capitalize;">Bim jobs</a>
          <a href="<?php echo base_url();?>PLM-Jobs" style="text-transform: capitalize;">Plm jobs</a>
          <a href="<?php echo base_url();?>CAD-Sales-Jobs" style="text-transform: capitalize;">Cad sales jobs</a>
          <a href="<?php echo base_url();?>CAD-Developer-Jobs" style="text-transform: capitalize;">Cad programming jobs</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
  </div>
</div>

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

<!--Header Ends-->

<!--Landing Page -->



<title>

  <?php
   if($job->yop == '0-1')
    {
      echo "Fresher ";
    }
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
      echo " | ".$city." ";
      // if($job->yop == '0-1')
      // {
      //   $exp='Fresher';
      // }
      // else
      // {
      //   $exp=$job->yop;
      // }
      if($job->yop != '0-1')
      {
        echo "| Exp: ".$job->yop." Yrs ";
      }
      else
      {
        echo "";
      }
      

      $date=explode(' ',$job->created);
      //echo $date[0];
      echo "| ".date('F Y',strtotime($date[0]));


                      
  ?>

</title>
<?php //echo md5('Onlysoft');?>
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" />-->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url()?>assets/js/jquery.modernizr.js"></script> 
<script type="text/javascript" src="<?php //echo base_url()?>assets/js/jquery.multiselect.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="<?php //echo base_url()?>assets/js/modal.js"></script> 
<script type="text/javascript" src="<?php //echo base_url()?>assets/js/jQuery.print.js"></script> -->

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
                .main_width{max-width: 1000px;margin:auto;}
                .main{line-height:30px;border: 0px solid green;background-color:#ECF0F5;max-width: 1000px;}
                .month{background-color: #fff;border-radius: 15px;padding: 3px 0px;text-align: center;color:#0055A5;font-size: 18px;border:2px solid #FF7900;height: 80px;}
                  .date{background-color: #0055A5;border-bottom-left-radius: 14px;border-bottom-right-radius: 14px;padding: 2px;text-align: center;color:#fff;font-size: 18px;border:1px solid #000;margin-top: 7px;}
                  .posted{font-size: 16px; font-weight: ;height: 80px;padding-left: 30px;}
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
                             .con6li{display: inline-block;width: 110px;text-align: center;font-weight: bold;padding-top: 5px;height: 30px;}
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
                    width: 150px;
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
<div class="container main content" style="">
  <div class="row" style="border: 0px solid red;padding: 10px 10px;"><!--Start Row 1-->
      <div class="col-md-8 col-xs-12" style="border:0px solid red;">
        <div class="row">
<style type="text/css">
  .title{font-size: 22px;}
  @media screen and (max-width: 768px){
    .title{font-size: 18px;}
  }
  #welcome{color:#fff;background-color: #0055A5;}
  #welcome:hover{background-color: #FF7900;}
  .li_1{background-color: #FF7900;}
  .li_1:hover{background-color:#0055A5;}
</style>

          <div class="col-xs-12"><h1 style="margin-top: -1px;" class="title"><?php echo $job->jobtitle; ?></h1></div>
          <span class="col-xs-12" style="margin-top: -40px;">
            <!--After Login-->
                  <!-- <div class=""> -->
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
                                        <button class="btn dropdown-toggle" style="" type="button" data-toggle="dropdown" id="welcome">Hey <b><?php $row=explode(' ',$name); echo $row[0];?></b>
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu" style="background-color:;text-align:;margin: 0 -15px;">
                                          <li class="li_1"><a href="<?php echo base_url();?><?php echo $type;?>/dashboard">Dashboard</a></li>
                                          <!-- <li class="li_1"><a href="#">Change Password</a></li> -->
                                          <li class="li_1"><a href="<?php echo base_url();?><?php echo $type?>/logout">Logout</a></li>
                                        </ul>
                            </div>
                          <?php } ?>
                  <!-- </div> -->
<!--After Login-->
          </span>
          <div class="col-xs-12 col-md-2 month" style=""><?php echo  date("d", strtotime($job->created));?><div class="col-xs-12 date"><?php echo  date("M", strtotime($job->created));?></div></div>

          <div class="col-xs-12 col-md-10 posted o_color" style="">
              <?php $company_name=$this->Company_M->get($job->companyId,TRUE)->name; ?>
            Posted By : <span class="b_color">Company </span><span class="job-location b_color"><br><span class="o_color">Location : </span> <?= $city?></span>
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
              <!-- <div class="col-xs-12 col-md-6" align="right">
                <button type="submit" class="btn btn-success open-AddBookDialog  log"  data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal"  >Login To Apply</button>
              </div>
              <div class="col-xs-12 col-md-6">
                <a href="<?php echo base_url();?>candidate/login"><button type="submit" class="btn btn-success reg">Register To Apply</button></a>
              </div> -->
              <!-- DATA -->
            <?php 
                  if($this->Candidate_M->isLoggedin() == TRUE)
                    {
                      $applied_check=$this->Job_apply_M->get_by(array('user_id'=>$this->session->userdata('candidate_id'),'job_id'=>$job->id));
                      if(count($applied_check) > 0)
                      { // echo '?>
                        
                         <div class="col-xs-12 col-md-6" align="right">
                                <button  class="button log" style="color:white;" name="apply_job">Already Appiled</button>
                              </div>
                      <?php  //echo '<a href="#" class="button">Save Job</a>';
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
                             <div class="col-xs-12 col-md-6" align="right">
                                <button  class="button log" type="submit" style="color:white;" name="apply_job">Apply Job</button>
                              </div>

                <?php   } 
                        else  
                        {?> 
                            
                            <div class="col-xs-12 col-md-6" align="right">
                                <button  class="button log" type="submit" style="color:white;" name="apply_job">Apply Job</button>
                              </div>  
                <?php   } ?>
                      
                          <div class="col-xs-12 col-md-6" align="right">
                                 <button  class="button log" type="submit" style="color:white;" name="save_job">Save Job</button>
                              </div>
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
                              

                              <div class="col-xs-12 col-md-6" align="right">
                                <button type="submit" class="btn btn-success open-AddBookDialog  log"  data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal"  >Login To Apply</button>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <a href="<?php echo base_url();?>candidate/quick_apply/<?php echo $job->id;?>"><button type="submit" class="btn btn-success reg">Quick Apply</button></a>
                              </div>
                              
                <?php } 
                      else  
                      { ?> 
                        

                        <!-- <a href="#" class="open-AddBookDialog button log"   data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal" >Login To Apply</a>
                        <a href="<?php echo base_url();?>candidate/login" class="button reg" style="" >Register To Apply</a> -->
                        <div class="col-xs-12 col-md-6" align="right">
                            <button type="submit" class="btn btn-success open-AddBookDialog  log"  data-id="<?php echo $job->id?>" data-toggle="modal" data-target="#myModal"  >Login To Apply</button>
                        </div>
                          <div class="col-xs-12 col-md-6">
                                <a href="<?php echo base_url();?>candidate/quick_apply/<?php echo $job->id;?>"><button  class="btn btn-success reg">Quick Apply</button></a>
                          </div>

                        

                        
                <?php } ?>
                        <!-- <a href="#" class="button">Save Job</a> -->
                <?php } ?>
              <!-- DATA -->
            </div>
          </div>     

          <div class="col-md-12 col-xs-12 inner-content" style="margin-top: 20px;">
            <div class="col-md-3 col-xs-4" style="">Job Type</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?=$job->job_type; ?></div>
          </div>           

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Skills</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php
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
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"> <?=$city?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Salary (<small><i class="fa fa-inr" style=""></i><i> in lacs</i></small>)</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?=$job->salary?> <small><i>(per annum)</i></small></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Designation</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"> <?=$job->designation;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Additional Skills</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"> <?php if($job->additionalSkills != '' && $job->additionalSkills !=NULL){ echo $job->additionalSkills;}else{echo 'N.A';}?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Eligibility</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?=$job->qualification?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Gender <small><i>(preference)</i></small> </div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?=$job->gender;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Language <small><i>(preference)</i></small></div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo str_replace(',',' | ', $job->language); ?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Industry Type</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;">
            <?php ?>
              Not Specified
            </div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Experience</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"> <?=$job->yop?> <small><i> (in years)</i></small> </div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-12 col-xs-12" style="">Job Description</div>
          </div>
<style type="text/css">
  ::-webkit-scrollbar {
    width: 1px;
}
</style>
            <div class="col-md-12 col-xs-12" style="font-weight: normal;text-align: justify; overflow-y: scroll;height: 150px;border:1px solid #cccccc;"> <br><?=$job->description?></div>
          

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
            
<style type="text/css">
  .row_slide{text-align: left;}
  @media screen and (max-width:768px){
    .row_slide{text-align: center;}
  }
</style>
            
            <div class="row" style="border:0px solid red;margin-bottom: 10px;" title="CADnaukri.com"><!--Start Row 3-->
              <div class="col-md-12 col-xs-12 row_slide">
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide1.jpg"><img src="<?php echo base_url();?>assets/images/img/slide1.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide2.png"><img src="<?php echo base_url();?>assets/images/img/slide2.png" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide3.jpg"><img src="<?php echo base_url();?>assets/images/img/slide3.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide4.png"><img src="<?php echo base_url();?>assets/images/img/slide4.png" alt="CADnaukri" style="" class="slide"></a>
               
              </div>
            </div><!--End Row 3-->
          <!-- </div> -->
      </div><!--End of col-md-8 col-xs-12-->

      <style type="text/css">
        .scroll{margin-top: 0px;border:0px solid green;height: 80%; overflow: scroll;}/*overflow: hidden;*/
      </style>
<!--After Login-->
<!--After Login-->
      <!--test-->
      <div class="row">
        <h4 style="text-align: center; font-weight: bold;" class="b_color">View more jobs</h4>
        

        <div class="col-md-4 col-xs-12 scroll" style="text-align: left;" id=""  align="center"><!-- id="myimg" -->

          <?php foreach ($right_side_jobs as $key) { 
              $jobtitle=$key->jobtitle;
                $job_title=str_replace(' ', '-', $key->jobtitle);
                $location=str_replace(' ', '-', $key->location);
                $designation=str_replace(' ', '-', $key->designation);
                $id=md5($key->job_id).'g3q7'.$key->job_id.'g3q7'.md5($key->job_id + 1);
                $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$id;
          ?>
              <input type="hidden" id="job_id" value="<?php echo $key->job_id;?>" />
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
  </div><!--End of main-container-->
<!--Categories search-->

<style type="text/css">
    .con_view_p{text-align: center;font-size: 20px;font-weight: bold;font-family: calibri;margin-top: 10px;}
    .con_view_li{display: inline-block;width: 180px;text-align: center;font-weight: bold;padding-top: 5px;height: 30px;border:2px solid #FF7900;font-family: calibri;margin: 2px 2px;}
    .con_view_li:hover{color: #FF7900;background-color: #0055A5;}
    .con_view_row{background-color:#fff;}
     @media screen and (max-width: 768px){
      .con_view_li{display: inline-block;text-align:center;margin: 2px 2px;}
      .con_view_row{text-align: center;}
      }
  </style>
<div class="container" style="border:0px solid red;max-width:1000px;">
    <div class="row con_view_row" style="" align="">    
        <p class="con_view_p" style="">Popular Categories Searches</p>
        <ul class="" style="border: 0px solid #999;">
          <a href="<?php echo base_url();?>CAD-Jobs/Pune"> <li title="CAD Jobs in Pune" class="con_view_li " style="" >CAD Jobs in Pune</li></a>
          <a href="<?php echo base_url();?>CATIA/Bangalore"> <li title="CATIA Jobs in Bangalore" class="con_view_li" style="" >CATIA Jobs in Bangalore</li></a>
          <a href="<?php echo base_url();?>3ds-Max/Ahmedabad"> <li title="3ds jobs in Ahmedabad" class="con_view_li " style="" >3ds jobs in Ahmedabad</li></a>
          <a href="<?php echo base_url();?>SOLIDWORKS/Chennai"> <li title="SolidWorks Jobs in Chennai" class="con_view_li" style="padding: 5px 0px;" >SolidWorks Jobs in Chennai</li></a>
          <a href="<?php echo base_url();?>NX/Bangalore"> <li title="NX Jobs in Bangalore" class="con_view_li " style="" >NX Jobs in Bangalore</li></a>  
          <a href="<?php echo base_url();?>CAE-Jobs/Indore"> <li title="CAD Jobs in Indore" class="con_view_li " style="" >CAE Jobs in Indore</li></a>
          <a href="<?php echo base_url();?>BIM-Jobs/Delhi"> <li title="CATIA Jobs in Bangalore" class="con_view_li" style="" >BIM Jobs in Delhi</li></a>
          <a href="<?php echo base_url();?>CFD-Jobs/Surat"> <li title="3d jobs in Vadodara" class="con_view_li " style="" >CFD jobs in Surat</li></a>
          <a href="<?php echo base_url();?>PLM-Jobs/Chennai"> <li title="Interior Jobs in NCR" class="con_view_li" style="padding: 5px 0px;" >PLM Jobs in Chennai</li></a>
          <a href="<?php echo base_url();?>CAD-Sales-Jobs/Hyderabad"> <li title="3d Modeling Jobs in Hyderabad" class="con_view_li " style="" >CAD Sales Jobs in Hydrabad</li></a>      
        </ul><br>
    </div>
</div>    


<!--End Categories search-->

<!--Popullar job-->
<style type="text/css">
  .con6p{text-align: center;font-size: 18px;font-weight: bold;}
  .con6li{display: inline-block;width: 110px;text-align: center;font-weight: bold;padding-top: 5px;height: 30px;}
                              .con6li:hover{color: #FF7900;background-color: #0055A5;}
                              @media screen and (max-width: 768px){
                             .con6li{display: inline-block;text-align:left;}

                }
</style>
<div class="container" style="border:0px solid red;margin-bottom: -40px;">
    <div class="row" style="background-color:#fff;">
      <!-- <div class="col-md-12 col-xs-12"> -->
        <p class="con6p" style="">Popular job search results 
        for the following Keywords</p>
        <!-- <div class="col-xs-12 col-md-12"><!-- wrapper_container --> 
        <ul class="" style="border: 1px solid #999;">
          <a href="<?php echo base_url('Bangalore')?>"> <li title="Bangalore" class="con6li col-md-3 col-xs-6" style="" >Bangalore</li></a>
          <a href="<?php echo base_url('Bhubaneswar')?>"> <li title="Bhubneshwar" class="con6li col-md-3 col-xs-6" style="" >Bhubaneswar</li></a>
          <a href="<?php echo base_url('Mumbai')?>"> <li title="Mumbai" class="con6li col-md-3 col-xs-6" style="" >Mumbai</li></a>
          <a href="<?php echo base_url('Hyderabad')?>"> <li title="Hyderabad" class="con6li col-md-3 col-xs-6" style="" >Hyderabad</li></a>
          <a href="<?php echo base_url('Chennai')?>"> <li title="Chennai" class="con6li col-md-3 col-xs-6" style="" >Chennai</li></a>
          <a href="<?php echo base_url('Pune')?>"> <li title="Pune" class="con6li col-md-3 col-xs-6" style="" >Pune</li></a>
          <a href="<?php echo base_url('Ahmedabad')?>"> <li title="Ahmedabad" class="con6li col-md-3 col-xs-6" style="" >Ahmedabad</li></a>
          <a href="<?php echo base_url('Delhi')?>"> <li title="Delhi" class="con6li col-md-3 col-xs-6" style="" >Delhi</li></a>
          <a href="<?php echo base_url('Indore')?>"> <li title="Indore" class="con6li col-md-3 col-xs-6" style="" >Indore</li></a>
          <a href="<?php echo base_url('best_design_jobs/search')?>"> <li title="ALL JOBS" class="con6li col-md-3 col-xs-6" style="" > More Jobs</li></a>
        </ul><br><div style="border-bottom: 0px solid #999;"></div>
    <!-- </div> -->
  <!-- </div> -->
    </div><!--End of Row 4-->

</div>
<!--Popullar job-->





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



<?php //include 'footer.php'; ?>


 <style>
 .news_button{height: 40px; padding: 0px 22px; color: #fff; background: #F60; border: none; border-radius: 3px;}
 #subs_res{padding:10px;color:#F60}
 .sub_error{color: #F60}
 .sub_sucess{color:#0859A8}

.blue-bg, .blue-bg p, .blue-bg li, .blue-bg a {
    color: #bbb;background-color: #1765AD;
}
 li a:hover{color:#fff;}

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


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  -->

<script src="<?php echo base_url()?>assets/js/jquery.bxslider.js" async ></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true,
    randomStart: true,
    infiniteLoop: true,
      mode: 'horizontal',
      captions: true,
      controls: false,
      pager: true
      
  }); 
  $('.testimonials').bxSlider({
     
    auto: true,
    infiniteLoop: true,
    mode: 'horizontal',
    captions: true,
    controls: false,
    pager: true,
    useCSS:false
      
  }); 
  $('.news_slider').bxSlider({
     
    auto: true,
    infiniteLoop: true,
    mode: 'horizontal',
    captions: true,
    controls: false,
    pager: true,
    useCSS:false
      
  }); 
});
</script>
<!-- <script type="text/javascript">
 $(document).ready(function(){
 $(".menu li a").each(function() {
  if ($(this).next().length > 0) {
   $(this).addClass("parent");
  };
 })
 var menux = $('.menu li a.parent');
 var image_url="<?php //echo base_url('assets/images/btn-hamburger.png')?>";
 $( '<div class="more"><img src="'+image_url+'" alt=""></div>' ).insertBefore(menux);
 $('.more').click(function(){
   $(this).parent('li').toggleClass('open');
 });
 $('.menu-btn').click(function(){
   $('nav').toggleClass('menu-open');
 });
 });
</script> -->



<script src="<?php echo base_url()?>assets/js/easyResponsiveTabs.js" async ></script>

<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<script src="<?php echo base_url()?>assets/js/gridslider.js" async ></script>
<script type="text/javascript">
$(function ()
{
  $('.image-feed-slider').gridSlider({
    cols: 6, //Column count. Degrades on smaller screens. Degradation steps can be easily adjusted in css.
    rows: 3, //Row count. Applies to sliders only.
    image_stretch_mode: 'x', //Image stretch mode. Auto does not affect images. Other types are especially handy for image galleries.
    grid_height: 60, //Constrain forces sqare cells, numeric value forces fixed height. Especially handy for media galleries.
    align: 'center', //Target element alignment
    width: '100%', //Target element width
    ctrl_pag: false, //Display pagination
    autoplay_enable: true, //Autoplay
    autoplay_interval: 3 //Autoplay interval in seconds
  });
});
</script>
<script src="<?php echo base_url()?>assets/js/classie.js" async ></script>
<script src="<?php echo base_url()?>assets/js/modalEffects.js" async ></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.quickflip.js" async></script>
<script type="text/javascript">
  $('document').ready(function(){
    $('#flip-container').quickFlip();
    $('#flip-navigation div input:radio[name="radio"]').each(function(){
      $(this).change(function(){
        $('#flip-navigation div').each(function(){
          $(this).removeClass('selected');
        });
        $(this).parent().addClass('selected');
        var flipid=$(this).attr('id').substr(4);
        $('#flip-container').quickFlipper({ }, flipid, 1);
        
        return false;
      });
    });
  });
  $('.subscription_btn').on('click',function(){
    
    var subscription_mail_id=$('.subscription_mail_id').val();
    if(subscription_mail_id == '')
    {
      $('#subs_res').html('Enter an valid email id');
      $('#sub_res').addClass('sub_error');
      return false;
    }
    else{
      $.ajax({
           url: "<?php echo base_url('index/news_subscription')?>",
           data: {'email':subscription_mail_id},
           type: 'POST',
            dataType: 'json',
           success: function(data) {
                $('#subs_res').html('Thank you for connecting with us');
                  $('#sub_res').addClass('sub_sucess');

           },
          
        });

    }
  });
</script>
