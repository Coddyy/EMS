<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async ></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async ></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="mK2K1PYPOmsPXkVVaVwVeKaDr1BFKYIdlX287dEeUUk" />
  <meta name="description" content="<?php echo $segment;?>"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico"/>
<title>Preview Internship</title>
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
<style type="text/css">
  .social_btn{font-size: 28px;color:#0055A5;text-align: center;margin-top: 30px;}
  .social_btnLink{padding-right: 20px;}
  .social_btnLink:hover{color:#FF7900;}
  .btn_top{border:0px solid green;margin-top: 30px;text-align: right;}
  .log_btn{font-size: 20px; background-color:#0055A5;color: #fff;padding:0px 20px;}
  .reg_btn{font-size: 20px; background-color:#FF7900;color:#fff;padding: 0px 4px; }
  .log_btn:hover{background-color:#FF7900; }
  .reg_btn:hover{background-color:#0055A5;}
@media screen and (max-width: 768px){
  .btn_top{border:0px solid red;margin-top: 0px;margin-bottom:10px;}
  .social_btn{margin-top: 0px;border:0px solid red;}
  .btn_top{text-align: center;}
}
</style>
<!-- <div class="container main_width">
  <div class="row" style="height: 100px;">

    
    <div class="col-md-3 col-xs-12 new_logo" style="">
      <a href="<?php echo base_url();?>" title="CADnaukri.com" ><img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="CADnaukri" class="" align="center" title="CADnaukri" style="margin-top: 3px;"></a>
    </div>
    <div class="col-md-5 col-xs-12 social_btn" title="CADnaukri.com">
      <span style="color:#0055A5;font-size: 24px;padding-right: 10px;">Follow Us  :- </span>
      <i class="fa fa-facebook-square social_btnLink"></i>
      <i class="fa fa-google-plus-square social_btnLink"></i>
      <i class="fa fa-linkedin-square social_btnLink"></i>
      <i class="fa fa-tumblr-square social_btnLink"></i>
      
    </div>
    <div class="col-md-4 col-xs-12 btn_top">
      <button class="log_btn" style="">Login </button>
      <button class="reg_btn" style="">Register </button>      
    </div>


  </div>
</div> -->
<!--End of container header-->

<!-- <div class="container-fluid header" id="myheader">
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
</div> -->

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

 
</title>

</head>

<body>



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
                    width: 155px;
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

      

      


</style>  
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
<style type="text/css">
  
  a:hover{text-decoration:none;}
body,div,a{font-family: calibury;}
.job_title{ }
</style>


<!--My style-->

<!--Layout -->

<?php foreach ($details as $key) { ?>

<div class="container main content" style="">
  <div class="row" style="border: 0px solid red;padding: 10px 10px;"><!--Start Row 1-->
      <div class="col-md-12 col-xs-12" style="border:0px solid red;">
        <div class="row" style="">
          <div class="col-xs-12 job_title"><h3 style="margin-top: 0px;" class=" b_color"><?php echo $key->title;?></h3></div>
          <div class="col-xs-12"><h5 style="margin-top: 0px;" class=" b_color">Last Date of Application :<?php echo date('d F Y',strtotime($key->endDate));?></h5></div>
          <div class="col-xs-12"><h5 style="margin-top: 0px;" class=" b_color">Posted By: Company</h5></div>
          <div class="col-xs-12"><h5 style="margin-top: 0px;" class=" b_color"><?php echo $key->location;?></h5></div>         
        </div>

        <div class="row">                                     
          
        	<div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-12 col-xs-12" style="">About Internship</div>            
          </div>


          <div class="col-md-12 col-xs-12 inner-content" style="height: auto;border:1px solid #cccccc;overflow-y:hidden;">
            <div class="col-md-12 col-xs-12" id="ss" style="font-weight: normal;">
              <?php echo $key->description;?>
          </div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Skills</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo $key->duration;?></div>
          </div>
          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Duration</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo $key->duration;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Stipned</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo $key->stipend;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Who can Apply</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo $key->whocanapply;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">No.of Internship</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo $key->noofintership;?></div>
          </div>

          <div class="col-md-12 col-xs-12 inner-content" style="">
            <div class="col-md-3 col-xs-4" style="">Start Date</div>
            <div class="col-md-1 col-xs-1">:-</div>
            <div class="col-md-8 col-xs-6" style="font-weight: normal;"><?php echo date('d F Y',strtotime($key-> startDate));?></div>
          </div>
        </div>
<!--test-->
      <div class="col-xs-12 col-md-4" style="border:0px solid yellow;margin-top: 2px;">
          <button type="button" class="btn btn-success log" onclick="goBack()">GO BACK</button>
      </div>

              <div class="col-xs-12 col-md-8 desktop" style="">
                  <span class="col-md-2 col-xs-2" style="border:0px solid yellow;">Share:</span>
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

                <div class="row" style="border:0px solid red;margin-bottom: 10px;" align="center" title="CADnaukri.com"><!--Start Row 3-->
              <div class="col-md-12 col-xs-12 row_slide">
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide1.jpg"><img src="<?php echo base_url();?>assets/images/img/slide1.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide2.png"><img src="<?php echo base_url();?>assets/images/img/slide2.png" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide3.jpg"><img src="<?php echo base_url();?>assets/images/img/slide3.jpg" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide4.png"><img src="<?php echo base_url();?>assets/images/img/slide4.png" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide2.png"><img src="<?php echo base_url();?>assets/images/img/slide2.png" alt="CADnaukri" style="" class="slide"></a>
                <a target="_blank" href="http://www.cadnaukri.com/assets/images/img/slide2.png"><img src="<?php echo base_url();?>assets/images/img/slide2.png" alt="CADnaukri" style="" class="slide"></a>
               
              </div>
            </div>

<?php } ?>
<!--test-->


      </div>
      <!-- <div class="col-xs-12 col-md-4" style=""><h4 style="text-align: center; font-weight: bold;" class="b_color">More Internship</h4></div> -->

      <!-- <div class="col-xs-12 col-md-4 " style=";height:55%;overflow: scroll;">
       
        <div class="col-xs-12 col-md-12">oneoneoneoneone oneoneoneoneoneone</div>
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div> 
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>
        <div class="col-xs-12 col-md-12">oneoneoneoneone oneoneoneoneoneone</div>
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div> 
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>
        <div class="col-xs-12 col-md-12">oneoneoneoneone oneoneoneoneoneone</div>
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div> 
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
        <div class="col-xs-12 col-md-12">one oneoneoneoneoneoneoneoneone</div>      
             
      </div> -->
</div>
            
<style type="text/css">
  .row_slide{text-align: left;}
  @media screen and (max-width:768px){
    .row_slide{text-align: center;}
  }
</style>
            
            
         
      </div><!--End of main-container-->

      <style type="text/css">
        .scroll{margin-top: 0px;border:0px solid green;height: 80%; overflow: scroll;}/*overflow: hidden;*/
      </style>
       

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
    <div class="row con_view_row" style="" align="center">    
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
          <!-- <a href="<?php echo base_url('Delhi')?>"> <li title="Delhi" class="con6li col-md-3 col-xs-6" style="" >Delhi</li></a> -->
          <a href="<?php echo base_url('Indore')?>"> <li title="Indore" class="con6li col-md-3 col-xs-6" style="" >Indore</li></a>
          <a href="<?php echo base_url('best_design_jobs/search')?>"> <li title="ALL JOBS" class="con6li col-md-3 col-xs-6" style="" > More Jobs</li></a>
        </ul><br><div style="border-bottom: 0px solid #999;"></div>
    <!-- </div> -->
  <!-- </div> -->
    </div><!--End of Row 4-->

</div>
<!--Popullar job-->









<br>

    <br />
    
 
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




