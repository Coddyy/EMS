<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>


<title>Job Views</title>
<head>
  <style type="text/css">
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
<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}

  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100%;}
    .next{width: 100%;}
  }
</style>

<!-- 
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#box").animate({height: "10px"},1000);
    });
});
</script> -->
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
.btn1{margin-top: 3px;}
@media screen and (max-width: 768px){
.btn1{margin-right: -16px;}
}
</style>

    <div class="se-pre-con"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right btn1" onclick="click_this();" type="button" id="menu1" data-toggle="dropdown" style="background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" id="btn2" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <!-- <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li> -->

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/logout');?>">Log Out</a></li>
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->


<!--Test -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
    </style>

<div class="container" style="">
    <style type="text/css">
        .next{background-color:#FF6600;color:#fff;vertical-align: center;}
 .next:hover{background-color: #0055A5;}
 @media screen and (max-width: 768px){
    .next{width: ;}
 }
 .post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;}
  @media screen and (max-width: 768px){
    .post_btn{width:100px;}
  }

  .job_view{background-color:#0055A5;
    color:#fff;vertical-align: middle;
    height: 35px;
    border-radius: 4px;
    box-shadow: 5px 5px 5px #cccccc;
    margin-bottom: 20px;
     }

     .con_height{height: 550px; overflow-y: scroll;border:0px solid red;max-width: 978px;}
     .mobile_view{display: none;}
     .desktop_view{display: block;}
     .mobile_view_title{font-size: 18px;background-color:#FF7900;color:#fff;border-radius: 4px;}
     .mobile_view_data{font-weight: bold;}
     @media screen and (max-width: 768px){
     /*.con_height{height: auto; overflow: scroll;}*/
     .desktop_view{display: none;}
     .mobile_view{display: block;border:0px solid green;line-height: 24px;background-color:#ECF0F5;box-shadow: 5px 5px 2px 5px #cccccc;}
     }


    </style>
  


<div class="col-md-12 col-xs-12 job_view">
        <h2 style="text-align: center;margin-top: 0px;color:#fff;">Job Views</h2><br>
</div>
</div>
<!--Start Desktop view-->
        <div class="container con_height desktop_view">    
        
            <p></p>


              <!-- <div style="overflow-y:scroll;"> -->
                <table class="table table-hover">
                  <thead>
                  <tr style="">
                    <th>Jobtitle</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Views</th>
                    <th>Applications</th>
                    <th>Score</th>
                  </tr>
                </thead>
                  <tbody>
                              <?php if($my_jobs){
                              foreach($my_jobs as $key)
                              { 
                                  $views=$this->Job_M->total_job_view($key->job_id); 
                                  $applications=$this->Job_M->total_job_application($key->job_id);
                                  if($applications != false)
                                  {
                                      if($views <= 0)
                                      {
                                          $dviews=1;
                                      }
                                      else
                                      {
                                          $dviews=$views;
                                      }
                                    $ans=$applications/$dviews;
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
                                    $score= rand(3,6);
                                  }

                              ?>
                  
                  <tr>
                    <td><?php echo $key->jobtitle; ?></td>
                    <td><?php $row=explode(' ',$key->created);echo date('d F Y',strtotime($row[0])); ?></td>
                    <td><?php echo $key->location; ?></td>
                    <td><?php echo $key->views; ?></td>
                    <td><?php echo $applications; ?></td>
                    <td><b style="color:green;"><?php echo number_format($score,1); ?></b></td>
                  </tr>
                  <?php } } else { ?>
                              <tr> 
                                  <td colspan="5">No Jobs There</td>
                                  </tr>
                              <?php } ?>

                              </tbody>

                </table>
              <!-- </div> -->
        </div>
<!--End Desktop view-->

<!--Start Mobile view-->
<div class="container mobile_view" style="">
  <div class="row">
        <?php if($my_jobs){
                              foreach($my_jobs as $key)
                              { 
                                  $views=$this->Job_M->total_job_view($key->job_id); 
                                  $applications=$this->Job_M->total_job_application($key->job_id);
                                  if($applications != false)
                                  {
                                      if($views <= 0)
                                      {
                                          $dviews=1;
                                      }
                                      else
                                      {
                                          $dviews=$views;
                                      }
                                    $ans=$applications/$dviews;
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
                                    $score= rand(3,6);
                                  }

                              ?>
    <div class="col-xs-12">
    <div class="col-xs-12 mobile_view_title" style=""><?php echo $key->jobtitle; ?></div>
    <div class="col-xs-4 mobile_view_data">Date</div><div class="col-xs-8"><?php $row=explode(' ',$key->created);echo date('d F Y',strtotime($row[0])); ?></div>
    <div class="col-xs-4 mobile_view_data">Location</div><div class="col-xs-8"><?php echo $key->location; ?></div>
    <div class="col-xs-4 mobile_view_data">Views</div><div class="col-xs-8"><?php echo $key->views; ?></div>
    <div class="col-xs-4 mobile_view_data">Application</div><div class="col-xs-8"><?php echo $applications; ?></div>
    <div class="col-xs-4 mobile_view_data">Score</div><div class="col-xs-8"><b style="color:green;"><?php echo number_format($score,1); ?></b></div>
  </div>
    <?php } } else { ?>
                              <tr> 
                                  <td colspan="5">No Jobs There</td>
                                  </tr>
                              <?php } ?>
  </div>
</div>

<!--End Mobile view-->

        <br>
<!--Test-->