<head>
<!-- <button onclick="myFunction()">click</button> -->

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
if($this->uri->segment(1) != 'CAD-Sales-Jobs' && $this->uri->segment(2) != 'CAD-Developer-Jobs')
{
  $url=explode('-',$this->uri->segment(1));
  $cat=$url[0];
}
else if($this->uri->segment(1) != 'CAD-Sales-Jobs')
{
  $cat='CAD-Sales';
}
else if($this->uri->segment(1) != 'CAD-Sales-Jobs')
{
  $cat='CAD-Dev';
}
else
{
  $description=$segment;
}


$description=$this->View_M->meta_description($cat);

//echo $description;
?>
  <meta name="description" content="<?php echo $description;?>"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  h1,h2,h3,h4,h5,h6,p,div,a{font-family: calibri;}


 
</style>

<title>
<?php if($this->uri->segment(2) != ''){

    $tagsurl=explode('-',$this->uri->segment(1));
    $tag=$tagsurl[0]." ".$tagsurl[1]." ".$tagsurl[2];

    $locationurl=explode('-',$this->uri->segment(2));
    $i=0;
  
    echo $tag." | ";//.$this->uri->segment(3);
    while($i < count($locationurl))
    {
      echo $locationurl[$i]." ";
      $i++;
    }
}
else
{
    $tagsurl=explode('-',$this->uri->segment(1));
    $tag=$tagsurl[0]." ".$tagsurl[1]." ".$tagsurl[2];
    echo $tag;
 
}
?>

</title>

</head>

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
  .contmains{margin-left: 10px;}
</style>
<div class="main-container contmains">
    <section class="wht-bg">


<!--Location Test-->
  <div class="container">
    <div class="row">
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

<!-- ********** COLOR BOX *************-->
<style type="text/css">
 @media screen and (max-width: 768px;){

   
  }

</style>


<div class="desktop1">
    <?php if($this->Candidate_M->isLoggedin() == TRUE || $this->Employee_M->isLoggedin() == TRUE)
          {
            //echo "In Session";
            $session="YES";
          }
          else
          {
            //echo "No Session";
            $session="NO";
          } 
    ?>
    <!-- <?php if($session == "NO"){ $width="100%";

    echo '<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />

        
        <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
        <script>
          function openColorBox(){
            $.colorbox({
              iframe:true,
              fixed:true,
              width:"'.$width.'",
              height:"90%",
              href: "http://www.cadnaukri.com/candidate/login/popup",
              onLoad: function() {
                $("#cboxClose").remove();
                setTimeout(function(){
                  $(window).colorbox;
                }, 5000)
              }
            });
          }

          function countDown(){
            seconds--
            $("#seconds").text(seconds);
            if (seconds === 0){
              openColorBox();
              clearInterval(i);
            }
          }

          var seconds = 1,
              i = setInterval(countDown, 10000);
        </script>';

      } ?> -->
</div>
<!-- **********COLOR BOX **************** -->

<!-- **********  Right Side Profile Button *************-->
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

<!-- **********  END Right Side Profile Button *************-->
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

<div>
      <?php 
            if($this->uri->segment(2) != '')
            { ?>
<!-- <div style="border:0px solid red;margin-top: -30px;" class="col-md-3"> -->
   <b style="font-size: 18px;" title="Search results">Search results :</b>  <a href="<?php echo base_url();?><?php echo $this->uri->segment(1); ?>"><b class="" style="border:0px solid red;font-size: 18px;margin-top: 0px;"  ><?php echo str_replace('-', ' ', $this->uri->segment(1)); ?></b></a> » 
              <a href="<?php echo base_url();?><?php echo $this->uri->segment(2); ?>"><b class="" style="border:0px solid red;font-size: 18px;margin-top: 0px;" ><?php echo str_replace('-', ' ', $this->uri->segment(2)); ?></b></a>
<!-- </div> -->
    </div><?php } else if($this->uri->segment(1) != '') 
            { ?>
          
              <a href="<?php echo base_url();?><?php echo $this->uri->segment(1); ?>"><b><?php echo str_replace('-', ' ', $this->uri->segment(1)); ?></b></a>
      <?php } ?>
<div class="container con3" style="margin-top: 20px;margin-left: -15px;">
                <p style="text-align: center; color: #fff; font-size: 18px; padding-top: 10px;">Create Your Free Job Alert</p>
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

<?php if($this->uri->segment(2) != ''){ ?>
<style type="text/css">
  .sortbyexp_sal{border:0px solid red; margin-top: 0px;margin-left: -50px;font-size: 18px;}
  @media screen and (max-width: 786px){
    .sortbyexp_sal{border:0px solid green; margin-top: 0px;margin-left: -10px;font-size: 18px;}
  }
  .drp_menu1{margin-left: -50px;padding: 5px 22px;}
  .drp_menu{margin-left: -30px;padding: 5px 22px;}
  @media screen and (max-width: 786px){
  .drp_menu,.drp_menu1{margin-left: -10px;padding: 5px 22px;}

  }
</style><br>
  <div class="col-md-2 col-xs-6 pull-right sortby" >
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle sortbyexp_sal" type="button" id="" data-toggle="dropdown" style="">Sort By Experience
          <span class="caret"></span></button>
          <ul class="dropdown-menu drp_menu" style="">
            <li class="topbar_li_1">
              <form method="post" action="">
                <input type="submit" name="exp_low_to_high" value="Low To High" />
              </form>
            </li><br>
            <li class="topbar_li_1">
              <form method="post" action="">
                <input type="submit" name="exp_high_to_low" value="High To Low" />
              </form>
            </li>   
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-xs-6 pull-right sortby" >
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle sortbyexp_sal" type="button" id="" data-toggle="dropdown" style="">Sort By Salary
          <span class="caret"></span></button>
          <ul class="dropdown-menu drp_menu1" style="">
            <li class="topbar_li_1">
              <form method="post" action="">
                <input type="submit" name="sal_low_to_high" value="Low To High" />
              </form>
            </li><br>
            <li class="topbar_li_1">
              <form method="post" action="">
                <input type="submit" name="sal_high_to_low" value="High To Low" />
              </form>
            </li>   
          </ul>
        </div>
      </div>
      <hr style="margin-top: 0px;">
                              
<?php } else { 

$catagory=$this->uri->segment(1);
//echo $catagory;
?>
<style type="text/css">
  .loca{border:none; margin-top: 0px;margin-left: -80px;margin-top: ;font-size: 18px}
  .quick_search{font-size: 18px;font-weight:bold; border: 0px solid red;display: block;margin-top: 7px;}
  @media screen and (max-width: 768px){
    .quick_search{font-size: 16px;margin-top: 8px;}
    .loca{ border:none; margin-top: 0px;margin-left: 0px;margin-top: ;font-size: 18px}
  } 
</style>
</div>
      <div class="col-md-2 col-xs-4 quick_search" style="">Search   </div><!-- <span class="glyphicon glyphicon-arrow-right col-md-1 col-xs-2" style="padding: 0px; font-size: 18px;border: 0px solid red;margin-top: 10px;"></span> -->

<!--col-md-2 col-xs-5-->      <div class="col-md-9">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle loca" type="button" id="" data-toggle="dropdown" style="">By Location
          <span class="caret"></span></button>
          <ul class="dropdown-menu" style="margin-left: -16px;padding: 0px 0px;">
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Pune">Pune</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Ahmedabad" style="" >Ahmedabad</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Bangalore" >Bangalore</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Chennai" >Chennai</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Bhubaneswar" >Bhubaneswar</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Delhi" >Delhi</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Hyderabad" >Hyderabad</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Indore" >Indore</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Mumbai" >Mumbai</a></li>
            <li class="topbar_li_1 col-md-2 col-xs-3"><a href="<?php echo base_url();?><?php echo $catagory; ?>/Surat" >Surat</a></li>
               
          </ul>
        </div>
      </div><br><br><br>
      <div class="col-md-2 col-xs-1">

        <style type="text/css">
          .drpSkill{border:none; margin-top: -5px;margin-left: -40px;}
          @media screen and (max-width: 786px){
            .drpSkill{margin-left:-2px;}
          }
        </style>

        <!-- <div class="dropdown">
          <button class="btn btn-default dropdown-toggle drpSkill" type="button" id="" data-toggle="dropdown" style="">By Skills
          <span class="caret"></span></button>
          <ul class="dropdown-menu" style="">
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Ahmedabad')?>" style="" >Ahmedabad</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Bangalore')?>" >Bangalore</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Chennai')?>" >Chennai</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Coimbatore')?>" >Coimbatore</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Delhi')?>" >Delhi</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Hyderabad')?>" >Hyderabad</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Indore')?>" >Indore</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Mumbai')?>" >Mumbai</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Noida')?>" >Noida</a></li>
            <li class="topbar_li_1"><a href="<?php echo base_url('best_design_jobs/cad_cam_cfd_plm/Pune')?>" >Pune</a></li>   
          </ul>
        </div> -->
      </div>
    </div><!--End row-->
</div><!--End container-->
                

<!--End Location Test-->





<?php } ?>

<style type="text/css">
  .left_move{margin-left: -30px;}
  @media screen and (max-width: 768px){
    .left_move{margin-left: 0px;}
  }
</style>


      <section class="section">
              <div class="container">


      <div>
      <?php 
            if($this->uri->segment(3) != '')
            { ?>
<!-- <div style="border:0px solid red;margin-top: -30px;" class="col-md-3"> -->
    <a href="<?php //echo base_url();?>best_design_jobs/<?php //echo $this->uri->segment(2); ?>"><b class="" style="border:0px solid red;font-size: 18px;margin-top: 0px;"  ><?php //echo str_replace('_', ' ', $this->uri->segment(2)); ?></b></a><!--  »  -->
              <a href="<?php //echo base_url();?>best_design_jobs/<?php //echo $this->uri->segment(3); ?>"><b class="" style="border:0px solid red;font-size: 18px;margin-top: 0px;" ><?php //echo str_replace('_', ' ', $this->uri->segment(3)); ?></b></a>
<!-- </div> -->
    </div>

              
              
      <?php } 
            else if($this->uri->segment(2) != '') 
            { ?>
          
              <a href="<?php echo base_url();?>best_design_jobs/<?php //echo $this->uri->segment(2); ?>"><b><?php //echo str_replace('_', ' ', $this->uri->segment(2)); ?></b></a>
      <?php } ?>
                    <br><br>
                 <div class="container-inner line-sepa-bottom left_move" style="">
       <div class="job-container" style="border:0px solid green;margin-top: -50px;">
              <h1 class="title1" style="text-align: center;font-weight: bold;"><span style="text-transform: normal;" title="<?php echo $title?> in <?php echo $this->uri->segment(2);?> - CADnaukri.com" ><?php echo $title?> <?php
                  if($this->uri->segment(2) == 'Rest-of-india')
                  {
                    echo "India";
                  } 
                  else
                  {
                    echo $this->uri->segment(2);
                  }
                  
              ?></span></h1><br>
              
                            <div class="job-list" style="margin-top: -10px;border:0px solid green;">
                            <?php
              if($this->session->flashdata('job_appply_success')){
                   $succesmsg = $this->session->flashdata('job_appply_success');?>
                 <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
                 <br/>
                 <?php } ?>
                              <ul style="">
                               
                              <?php 
                              if($tag_wise_job)
                              {
                                
                              foreach($tag_wise_job as $sr)
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
                                          <input type="hidden"  name="title" id="title-<?php echo $sr->job_id?>" value="<?php echo ucfirst($sr->jobtitle)?>" />

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



                      <style type="text/css">
                        h5:hover,a:hover{text-decoration: none;}
                        .h3titel{color:#fff;background-color: #FF7900;width: 110%; height: 31px;font-weight:none;font-family:calibri;padding: 5px;border-radius: 2px;text-align: left;margin-top: ;}
                        .h3titel:hover{background-color: #0055A5;color:#fff;}
                        

                      </style>

                          <a href='<?php echo base_url($url)?>'>
                          <h4 style="margin-left:0px;" class="h3titel"><?php echo ucfirst($sr->jobtitle)?></h4></a>
                            <p style="color:#000; font-size: 16px;"> Last Date:<?php echo date("jS F, Y", strtotime($sr->lastdate))?></p>
                            
                            <p style="font-size: 16px;"><b><span style="color:#004f98;">Job Score: </span><span style="color:green;">(<?php echo number_format($score,1); ?>/10)</span></b></p>
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
                                  //echo '<a class="button" onclick="expired()">Expired</a>';
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
                                 //echo '<a class="button" onclick="expired()">Expired</a>';
                              echo '<a class="button" href="'.base_url($url).'">View</a>';
                            }
                            else{
                                   // $url=base_url("candidate/login/search/$job_id");
                                   echo '<a class="button" href="'.base_url($url).'">View</a>';
                            }
                        }
                          ?>
                         
                      </div>
                      <div class="job-post-details">
                        <ul>
                         <!-- <li><b><span style="color:#004f98;">Job Score</span><span style="color:green;">(<?php //echo number_format($score,1); ?>/10)</span></b></li> -->
                            <li><a href="#"  style="font-size: 14px;color: #000;" title="Experience"><span class="glyphicon glyphicon-briefcase" style="font-size: 16px;color: #FF7900;"></span><?php 

                            $row=explode('-',$sr->yop);
                            echo $row[0];
                            //echo $sr->yop; ?> to <?php echo $row[1]; ?> Yrs</a></li>
                            
                              <li><a href="#" style="font-size: 14px;color: #000;" title="Location"><span class="glyphicon glyphicon-map-marker" style="font-size: 16px;color: #FF7900;"></span>
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
<style type="text/css">

</style>
                      <div class="job-content-details">
                        <p><?php //echo $sr->description?> </p>
                          <div class="job-link" style="font-size: 14px;">
                          <?php
                          echo '<b>Skills :</b><a href="#" class="" style="font-size: 14px; color:#000;"> ';
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
                                                <div class="share-div" style="font-size: 14px;">
                                                Share :
                                                 <ul class="list-share">
                                                <li><a class="share_button" href="#" title="">Facebook</a></li>
                                                <li>
                                                 <?php 
                                                 
                                                 $url="https://twitter.com/share?url=".base_url('best_design_jobs/signle_search/'.$sr->job_id)."via=CADnaukri&
                          related=twitterapi%2Ctwitter&
                          hashtags=CADnaukri&
                          text=".$sr->jobtitle;
                                                 ?>
                                                <a href="<?=$url?>" title="https://twitter.com/share - CADnaukri.com" >
                        Twitter
                        </a>
                                                
                                                
                                                
                                            
                                                
                             </li>
                             <!-- <li><a href="#">Linkedin</a></li>-->
                              <li>
                             <?php
                              $url="https://plus.google.com/share?url=".base_url('best_design_jobs/signle_search/'.$sr->job_id);
                              ?>
                              <a href="<?=$url?>" title="https://plus.google.com/share - CADnaukri.com" >Google+</a>
                              
                             </li>
                              
                              </ul>
                              </div>
                          </div>
                      </div>
                  </li>
                  <?php }
                  }else
                  {
                    echo '<h5>No Job Found</h5>'; ?>
                    <a href="<?php echo base_url();?><?php echo $this->uri->segment(2); ?>" class="btn btn-info btn-lg pull-left" style="background-color: #FF7900; margin-left: 40px;margin-bottom: -30px;" >
          <span class="glyphicon glyphicon-arrow-left" style="padding:2px 10px;"></span> 
        </a>
                <?php }
                                    
                                     ?>
                                  
                                   
                                                                      
                                    
                                </ul>
                            </div>
                        </div>
                           </div>
                        </div>
                </<section>
        </<section>
    
    </section>
</div></section></section></section></div>


<?php

 ?>



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

// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function pop()
{
  alert('Working');
}
</script>
<style>
 #foo {
    position: fixed;
    bottom: 10;
    right: 90;
  }
  /* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
<?php if($this->Candidate_M->isLoggedin() == TRUE){ aaaa?>
<div id="foo">
  <div class="popup" >
  <?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?>
    <span class="popuptext" id="myPopup">
      New Interview Notification
      <a href="<?php echo base_url();?>candidate/view_interviews" ><button class="btn btn-info">Check</button>
    </span>
  <?php } ?>
  </div>
</div>
<?php } ?>