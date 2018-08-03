
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
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
    <div class="se-pre-con"></div>

<title>Employer | View Company</title>

<style type="text/css">
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
<!-- 
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#box").animate({height: "10px"},1000);
    });
});
</script> -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right btn1" onclick="click_this();" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" id="btn2" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
<?php foreach ($details as $key) {  ?>
  
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $key->name;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Email</td>
                        <td><?php 
                        if($key->company_email)
                        {
                          echo $key->company_email;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <!-- <tr>
                        <td>Mobile</td>
                        <td><?php echo $key->mobile;?></td>
                      </tr> -->
                      <!-- <tr>
                        <td>Lanline</td>
                        <td><?php echo $key->phno;?></td>
                      </tr> -->
                      <tr>
                        <td>Registered Office:</td>
                         <td><?php echo $key->regdoffc;?></td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td><?php
                        if($key->location)
                        {
                          $city_name=$this->City_M->get_city_name($key->location);
                          echo $city_name;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php 
                        if($key->address)
                        {
                          echo $key->address;
                        }
                        else
                        {
                          echo 'Not Available';
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td>Description</td>
                        <td><?php 
                        if($key->description)
                        {
                          echo $key->description;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <!-- <tr>
                        <td>Size Of Company</td>
                        <td><?php
                        if($key->teamsize)
                        {
                          echo $key->teamsize;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr> -->
                      <tr>
                        <td>Facebook</td>
                        <td><?php
                        if($key->facebook)
                        {
                          echo $key->facebook;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Linkdin</td>
                        <td><?php
                        if($key->linkedin)
                        {
                          echo $key->linkedin;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?>
                        </td>
                           
                      </tr>
                      </tr>
                        <td>Twitter</td>
                        <td><?php
                        if($key->twitter)
                        {
                          echo $key->twitter;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?>
                        </td>
                           
                      </tr>
                      <!-- </tr>
                        <td>Linkdin</td>
                        <td></td>
                        </td>
                           
                      </tr> -->
                     
                    </tbody>
                  </table>
                </div>
<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>