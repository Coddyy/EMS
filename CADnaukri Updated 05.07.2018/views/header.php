<?php 
//echo $this->uri->segment(3);
// $row=explode('-',$this->uri->segment(1));
// $url=$row[1];
// if($url != 'Opening')
// {
if($this->uri->segment(2) != 'test_landing_page')
{

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <title>CAD CAM CAE BIM Jobs - Pune Chennai Bangalore Hyderabad</title> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />

<!-- <meta name="description" content="CAD CAM CAE CFD PLM BIM Jobs in India. Apply Now! Pune | Mumbai | Delhi NCR | Gurgaon | Faridabad | Hyderabad | Bengaluru | Chennai | Bhubaneswar | Kolkata | Indore"/> -->

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

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/grid.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/layout.css" /> <!-- Create Issues in responsive (view_job_details_new.php) -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontello.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/new_custom.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico"/>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.bxslider.css" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/easy-responsive-tabs.css " />
<link type="text/css" href="<?php echo base_url()?>assets/css/menu-css.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/gridslider.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.multiselect.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
  h1,h2,h3,h4,h5,h6,p,div,a{font-family: calibri;}
</style>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 --><?php 
$urlis=$this->uri->segment_array();
if(!empty($urlis))
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/table.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/modal.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/alert.css" />
<!--  -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" />

<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" />-->
<?php }?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" async ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" async ></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.modernizr.js" async ></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.multiselect.js" async ></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js" async ></script> 
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/modal.js" async ></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.print.js" async ></script> 


<style>
  .star
  {
    color:#FF0000;
  }
  #datepicker {
    background: url('../../assets/images/calender.png') no-repeat 2px 4px;
    padding-left: 25px;
}
textarea
{
min-height:0px
}
.design-form-inner input
{
  max-width:43%;
}
input[type=checkbox]:not(old), input[type=radio ]:not(old)
{
      opacity: 1;
}

</style>

<!-- **************** OLD CODE FOR GOOGLE ANALYTICS *******************-->

<script>
  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-90988933-1', 'auto');
  // ga('send', 'pageview');

</script>
<!-- **************** END OLD CODE FOR GOOGLE ANALYTICS *******************-->

<!-- **************** NEW CODE FOR GOOGLE ANALYTICS *******************-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84911144-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-84911144-1');
</script>
<!-- **************** END NEW CODE FOR GOOGLE ANALYTICS *******************-->


 <style type="text/css">
      /*.logonew{ margin-top: 38px;margin-bottom: 0px;border:0px solid;height: 43px;width: 216px;margin-left: -7px;}   
      @media screen and (max-width: 786px){
        .logonew{
           margin-top: 0px;margin-bottom: 0px;border:0px solid;height: 43px;width: 216px;margin-left: 0px;text-align: center;
        }
      }*/
      .logonew{ margin-top: 15px;margin-bottom: 0px;border:0px solid red; text-align: center;}
       @media screen and (max-width: 768px){
        .logonew{text-align: center; margin-top: 0px;}
      } 

.advertisment {
    position: relative;
    text-align: center;
    color: #fff;
}
.bottom-right {
    position: absolute;
    bottom: 7px;
    right: 16px;
    width: 100%;
    font-size: 20px;
}
@media screen and (max-width: 768px){
  .new_logo{text-align: center;}
}

 </style>


<?php }else{

  //No CSS and Links FOR Job View Page
} ?>
</head>
<!-- <div id="header" class="transparent"> -->
  <!-- <div class="main-container">
    <div class="top-header"> -->
      <div class="container" style="width: 100%;border:0px solid green;">
        <div class="row" style="height: 100px;border:0px solid red;padding: 0 -10px;">
                <div class="col-md-3 col-xs-12 new_logo">
                        <!-- <div id=""> --><a href="<?php echo base_url();?>" title="www.cadnaukri.com">
                          <!-- <img src="<?php echo base_url()?>assets/images/img/Logo-1-min.jpg" alt="CADnaukri" class="logonew"></a> -->
                          <img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="CADnaukri" class="" align="center" title="CADnaukri" style="margin-top: 3px;"></a>

                        <!-- </div> -->   
                    </div>
                <div class="col-xs-12 col-md-9 advertisment" style="border:0px solid red;">

            <?php if($this->Candidate_M->isLoggedin() == TRUE)
                  { ?>
                      
                <?php $banner=$this->View_M->get_the_banner_candidate();
                  //if($banner != '' && $banner != NULL){
                    foreach ($banner as $key) {
                    
                      $picture=$key->banner_name;
                      $pic=base_url()."banner/".$picture;?>
                      
                      <img src="<?php echo $pic;?>" alt="CADnaukri" class="" style="height: 96px; width: 100%;border:0px solid red;" alt="CADnaukri">

                <?php } 
                  ?>

            <?php } else if($this->Employee_M->isLoggedin() == TRUE)
                  { ?>

                <?php $banner=$this->View_M->get_the_banner_employer();
                  //if($banner != '' && $banner != NULL){
                    foreach ($banner as $key) {
                    
                      $picture=$key->banner_name;
                      $pic=base_url()."banner/".$picture;?>
                      
                      <img src="<?php echo $pic;?>" alt="CADnaukri" class="" style="height: 96px; width: 100%;border:0px solid red;" alt="CADnaukri">

                <?php } 
                  ?>

            <?php } else { ?>


                <?php $banner=$this->View_M->get_the_banner_public();
                  //if($banner != '' && $banner != NULL){
                    foreach ($banner as $key) {
                    
                      $picture=$key->banner_name;
                      $pic=base_url()."banner/".$picture;?>
                      
                      <img src="<?php echo $pic;?>" alt="CADnaukri" class="" style="height: 96px; width: 100%;border:0px solid red;" alt="CADnaukri">

                <?php } 
                  ?>
                  
            <?php } ?> 

                  <div class="bottom-right"> <marquee direction="left" class="small"><b>Advertise Here !!</b></marquee></div>
                </div>

<style type="text/css">
  .small {   
  animation-duration: 300ms;
  animation-name: tgle;
  animation-iteration-count: infinite;
  /*animation-direction: alternate;*/
  width: 70%;
}

@keyframes tgle {
  0% {
    opacity: 1;
    color: lightgreen;
  }

  25% {
    color: green;
    opacity:0.5;
  }

  50% {
    opacity: 1;
    color: pink;
  }

  75% {
   opacity: 0.5;
   color: orange;
 }

 100% {
   opacity: 1;
   color: #0055A5;
 }
}
                </style>
                
            
                  <!-- <div class="col-md-3 col-xs-12">
                    
                        <div id="logo"><a href="<?php //echo base_url()?>">
                      <img src="http://cadnaukri.com/test/assets/images/CADnaukri_Header-Logo.jpg" alt="CADnaukri" class="logonew" style="height: ;min-width: 245px;border:0px solid red;"></a></div> 

                    </div> -->
                     <?php 
                    $ur1_log=base_url('candidate/login'); 
                    $btn_text_1='<span>Register For</span>Dream Jobs';
                    $ur1_logout=base_url('employer/login');
                     $btn_text_2='<span>Unlimited</span>Job Posting';
                   // echo $this->session->userdata('candidate_id'); 
                    $style='';
                    if($this->session->userdata('candidate_id'))
                    {
                      $ur1_log=base_url("candidate/dashboard");
                      $ur1_logout=base_url("candidate/logout");
                      $btn_text_1='Dashboard';
                      $btn_text_2='Logout';
                      $style="background:none";
                      //Do nothing
                      /*echo '<a href="'. base_url("candidate/dashboard").'" class="button">
                                <span>Go To Dashboard</span>
                                </a>';
                                echo '<a href="'.base_url("candidate/logout").'" class="button">
                                <span>Logout</span>
                                </a>';*/
                      
                    }
                    else if($this->session->userdata('emp_id'))
                    {
                      $style="background:none";;
            //Do nothing
            $btn_text_1='Dashboard';
                      $btn_text_2='Logout';
            $ur1_log=base_url("employer/dashboard");
                      $ur1_logout=base_url("employer/logout");
          }
          
          
                    ?>
            
          
                    <!-- <div class="col-xs-12 col-md-9 right " style="width: auto;min-height: 96px;border:1px solid;"><marquee>This is an advertisment area</marquee>
                    </div> -->
                   
                </div>
            </div>
         
         <style type="text/css">
  .nav-bg1{
    margin-top: -10px;


  }
  @media screen (max-width: 768px) {
    .nav-bg1{
    margin-top: 0px;
    background-color: red;
  }
}
.topbar_li a:hover{
  color:#fff;
  background-color:transparent;
  /*font-size: 16px;*/
  text-decoration-line: none;


}
.topbar_li_1 a:hover{
  color:#fff;
  background-color:#FF7900;
  /*font-size: 16px;*/
  text-decoration-line: none;


}

</style> 
<!--Orange Strip-->
<div class="bottom-header"> 
            <div class="bottom-header" style="background-color: #FF7900;margin-top: 0px;border-bottom: 0px solid #FF7900;"> 
                <div class="container"> 
                    <div class="row">
                        <div class="col-xs-8 menu-cont">
                            <div class="nav-bg">        
                             <nav>            
                               <div class="menu-btn">
             
                                <div class="clear"></div>
                                </div>
                              </nav>
                            </div>
                        </div>
                        <div class="col-xs-4 number-cont">&nbsp;
                       </div>
                    </div>
                </div>
            </div>
</div>
<!--End Orange Strip-->

        <!--Header head-->
        <!-- <div class="container">
         <div class="bottom-header" style="background-color:"> 
          <div class="bottom-header" style="background-color:#FF7900;"> 
              <div class="container"  style="background-color:"> 
                  <div class="row" style="background-color: #FF7900;">
                      <div class="col-xs-12 menu-cont" style="margin-bottom: -8px; margin-top: -8px;" >
                          <div class="nav-bg nav-bg1" >        
                            <nav>            
                              <div class="menu-btn" style=" background-color: transparent;margin-top: 6px;">
                                  <img src="<?php echo base_url()?>assets/images/btn-hamburger.png" alt=""> Menu
                              </div>
                               <ul class="menu">
                                
                                  <li class="topbar_li"><a href="<?php echo base_url('best_design_jobs/cooming_soon')?>">Jobs by Location</a>
                               
                                <ul>
                                  
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
                                </li>
                                  <li class="topbar_li"><a href="<?php echo base_url('best_design_jobs/search')?>">Top Design Jobs</a></li>
                                  <li class="topbar_li"><a href="<?php echo base_url('best_design_jobs/cooming_soon')?>">Overseas Jobs</a></li>
                                  <li class="topbar_li"><a href="<?php echo base_url('best_design_jobs/cooming_soon')?>">Recruit with us</a></li>
                                  <li class="topbar_li" style=""><a href="#">Internship</a></li>   
                                  <li class="topbar_li" style=""><a href="#">More Jobs</a></li> 
                                  <li class="topbar_li" style=""><a href="#">Contact Us</a></li>             
                               </ul>                           
                            </nav>
                           </div> 
                      </div>                        
                 </div>
            </div>
          </div>
         </div>
        </div> -->
        <!--End Header head-->


 </div><!--div id="header" class="transparent"-->

<!--Quick Search-->

<br>
<!-- <style type="text/css">
  input.select_skill::-moz-placeholder, input.select_location::-moz-placeholder{color: #FF7900;opacity: 0.5;}
  input.select_skill::-moz-placeholder, input.select_location::-webkit-placeholder{color: #FF7900;opacity: 1;}
  input.select_location,input.select_skill{color:#0055A5;height: 28px;}
</style>

 <div class="container">
   <div class="row">
     <div class="col-md-2 col-xs-5" style="border:0px solid;margin-top: 5px;">Search Quickly<span class="glyphicon glyphicon-arrow-right" style="padding-left: 18px;color: #999;"></span></div>
     <div class="col-md-2 col-xs-3" style="border:0px solid;">
      <input type="text" name="location" maxlength="10" placeholder="Location" class="select_location" autocomplete/>
    </div>
     <div class="col-md-2 col-xs-3" style="border:0px solid;">
      <input type="text" name="skill" maxlength="10" placeholder="Skill" class="select_skill"></div>
   </div>
 </div> -->

 <!--End container-->
<!--End Quick Search-->


 <script type="text/javascript">
 $(document).ready(function(){
 $(".menu li a").each(function() {
  if ($(this).next().length > 0) {
   $(this).addClass("parent");
  };
 })
 var menux = $('.menu li a.parent');
 var image_url="<?php echo base_url('assets/images/btn-hamburger.png')?>";
 $( '<div class="more"><img src="'+image_url+'" alt=""></div>' ).insertBefore(menux);
 $('.more').click(function(){
   $(this).parent('li').toggleClass('open');
 });
 $('.menu-btn').click(function(){
   $('nav').toggleClass('menu-open');
 });
 });
</script>


