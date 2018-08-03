<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Employer | Profile</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<head>
  <style type="text/css">
  .signup{background-color: #FF6600;min-width: 30%; max-height: 32px;border:none;}
      .signup:hover{background-color: #0055A5;color: #fff;}
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url("") center no-repeat #fff;
}
  </style>
  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(800);;
  });
  </script>
</head>
    <div class="se-pre-con"></div>


<style>

 .error

 {

 color:#FF0000;

 }
    .addon{background-color: transparent;}
    .addon:hover{background-color:none;color:#0055A5;}
    .plus{color:#FF7900;font-size: 15px;cursor: pointer;}
    .plus:hover{color:#0055A5;}

    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

</style>

<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">

  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;border:none;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;border:none;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100%;}
    .next{width: 100%;}
  }
</style>

<style type="text/css">
  .open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  
}
.open > .dropdown-menu li a {
  color: #000;  
}
.dropdown-menu li a{
  color: #fff;
}
.dropdown-menu {
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  transform: scale(1, 0);
  display: block;
  
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
}
.dropup .dropdown-menu {
  -webkit-transform-origin: bottom;
  transform-origin: bottom;  
}

.navbar .nav > li > .dropdown-menu:after {

}
.dropup > .dropdown-menu:after {
  border-bottom: 0;
  border-top: 6px solid rgba(39, 45, 51, 0.9);
  top: auto;
  display: inline-block;
  bottom: -6px;
  content: '';
  position: absolute;
  left: 50%;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
}

</style>


 <div class="main-container" style="border:0px solid red;">

     <section class="wht-bg">

          <section class="section">

            <div class="container" style="border-radius: 4px;border:1px solid #cccccc;">

                <div class="container-inner">

                	 <div class="row">

                          
<!--col-md-9 Start-->
               <style type="text/css">
               
    .profile_watermark{background-image: url("http://www.cadnaukri.com/assets/sam/watermark/CADnaukri.png");
      background-repeat: no-repeat;                                        
      background-position: top right;
                                      
  }      
  @media screen and (max-width: 768px){
    .profile_watermark{background-image: url("none");}
  }
    .no_opacity{width: 180px;height: 180px;border: 1px solid #ccc;padding: 5px;border-radius: 4px;}                        
                                    </style>
                        <div class="col-md-12 col-xs-12 col-sm-12" style="">
                        <div id="my_profile" >
                        <div class="xcolleft"> 
                          <div class="profile_print" id="profile_print" style="border: 1px solid rgba(0, 0, 0, 0.2);" >             
                             <h1 class="h1_titel">Employer Profile</h1>   
                            <div class="row profile_watermark"><!--profile_watermark-->
                              <div class="col-md-12  col-xs-12" style="border:0px solid #ccc;padding: 5px;border-radius: 4px;">
                                <center><img src="<?php echo $mydata->imagePath;?>" class="no_opacity" style="">
                                
                              </center>

                              </div>
                             </div>
                              <!-- <div class="col-md-8 col-xs-12" style="border: 0px solid red;"> -->
                                
                                                        
                      <div class="row " style="padding-top: 1%;">
                              <!-- <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10 desktop" style="font-weight: bold;">
                                   Name</div> <div class="col-md-1 col-xs-1 desktop">:</div> -->
                              
                              <div class="col-md-12 col-xs-12" align="center">
                                 <h4><?php echo $mydata->name;?></h4>
                              </div>
                            </div>                     

                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;">DOB   :  <span> <?php echo $mydata->dob;?></span></h4>
                        </div>  
                        </div>
                        <div class="row" style="border:0px solid red;">
                        <div class="col-md-12 col-xs-12" align="center">
                          <h4 style="margin-top: -5px;"><?php echo $mydata->gender;?></h4>
                        </div>  
                        </div>
                      
                      <style type="text/css">
                      .h1_titel{padding-left: 20px;background-color: #9A9A9A;color:#fff;height: 40px;line-height: 40px;vertical-align: middle;}
                      .mobile{display: none;}
                      .box_margin{border: 0px solid red;margin: 0 50px;}

                      @media screen and (max-width: 768px){
                        .desktop{display: none}
                        .mobile{display: block;}
                        .box_margin{border: 0px solid green;margin: 0 0px;}                        
                        .name_center{text-align: center;font-weight: bold;}
                        .mobile_margin{margin-bottom: 10px;border-bottom: 1px solid #ccc;}
                      }
                      </style>

                      <h1 class="h1_titel">Contact Details</h1>
                     <div class="row">                      
                      <div class="col-xs-12 col-md-12 box_margin">                     
                      
                      <div class="row" style="padding-top: 1%;margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                 Mobile
                            </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>

                            <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                              <?php echo $mydata->mobile;?>
                            </div>
                      </div>

                       <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Email
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                               <?php echo $mydata->email;?>
                            </div> 
                       </div>        
                       <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Company
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $mydata->companyName;?>
                            </div> 
                       </div>  
                        <div class="row" style="padding-top: 1%; margin-bottom: 10px;">
                            <div class="col-md-4 col-md-offset-1 col-xs-offset-1 col-xs-10" style="font-weight: bold;">
                                Location
                             </div>
                                  <div class="col-md-1 col-xs-1 desktop">:</div>
                             <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-0 mobile_margin">
                                <?php echo $mydata->location;?>
                            </div> 
                       </div>   
                       </div>
                     </div>
                 <div class="row" style="padding-top: 1%;padding-bottom: 1%">
                           <center>
                           <a href="<?php echo base_url();?>superadmin/employee/download_profile_details/<?php echo $this->uri->segment(4);?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Download Profile</button></a></center>
                           <center>
                           <p>&nbsp&nbsp</p>
                           <a href="<?php echo base_url();?>superadmin/employee/company_details/<?php echo $this->uri->segment(4);?>" target="_blank" > <button class="btn btn-primary print-link no-print signup">Company Details</button></a></center>
                        </div>
                     
                                <p>&nbsp;</p>
                        </div>
                       </div>
                       </div> 
  

<!--End col-md-9-->

                    </div>
                        
                        
                        </div>
                </div>
                </div>
        </section>
      </section>
      </div>



