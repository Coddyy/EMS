<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> -->
<?php if($this->Candidate_M->isLoggedin() == TRUE)
{
  redirect(base_url()."candidate/job_alert");

} ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	div,h1,h2,h3,h4,h5,h6{font-family: calibury;color:#000;}
	div{font-size: 16px;}
	.form-group{margin-bottom: 25px;}
	a:hover{text-decoration: none;}
</style>

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
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
</style>
<script type="text/javascript">
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("5000");;
	});
</script>
</head>

<title>Job Alert</title>
<!--Start Top bar-->
<style type="text/css">
  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width: 100px; ;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width: 100px; ;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100px;}
    .next{width: 100px;}
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
<body >
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
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/update_cv" >Update CV</a></li>
                    <?php 
                                if($this->session->userdata('candidate_id'))
                                  {
                                    $candidate_id=$this->session->userdata('candidate_id');
                                  }
                                  $total_jobs=$this->Candidate_M->get_total_applied_jobs($candidate_id);
                                  if($total_jobs != false){
                              ?>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_applied_jobs">Applied Jobs(<?php echo $total_jobs; ?>)</a></li>
                  <?php } else { ?>
                  <li style="color:black;"><a>Applied Jobs</a></li><?php } ?>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/working_on_it">Upgrade Service</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_interviews">Track Interviews<?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?><span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?></a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_saved_jobs">Saved Jobs</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_profile_views">Profile Views 
                                    <?php if($this->Candidate_M->new_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                   <!--  <span class="w3-circle w3-center" style="width:3%;background-color:green;height:-1%;color:white;">
                                    &nbsp ! &nbsp</span>  -->
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?>
                                    </a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/social_links" >Add Social Link</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>Queries" >Report Issue</a></li>                
                                     
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<!--End Top bar-->

<body>
	<div class="se-pre-con"></div>
<div class="container" style="max-width: 990px;height: auto;border-bottom: 2px solid #FF7900;">
	<div class="row">

		<h1 style="background-color: #0055A5;text-align: center;color:#fff;height: 32px;line-height: 32px;vertical-align: middle;border-radius: 4px;">Job Alert</h1>
		<div class="col-md-2 col-xs-1" style="">
    



    </div>
		<div class="col-md-8 col-xs-10" style="box-shadow: 2px 2px 5px 5px  #cccccc;margin-top: -18px;">
    <?php if($this->uri->segment(2) == "job_alert_saved")
{ ?>
      <div class="alert alert-success">
  Alert Saved
</div>
<?php 
} else if($this->uri->segment(2) == "job_alert_not_saved")
{ ?>
  <div class="alert alert-danger">
  Alert Not Saved
</div>
<?php } else if($this->uri->segment(2) == "email_exists")
{ ?>
  <div class="alert alert-info">
   You have already saved a alert
</div>
<?php } ?>
			<form class="form-horizontal" id="job_alert" action="" method="post">
          <div class="form-group" style="margin-top: 20px;">
              <label class="control-label col-sm-3" for="skill">Name :</label>
              <div class="col-sm-7">  
                <input type="text" name="name" required>        
              </div>
              <div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:red;"></small></div>
          </div>
          <div class="form-group" style="margin-top: 20px;">
              <label class="control-label col-sm-3" for="skill">Mobile :</label>
              <div class="col-sm-7">  
                <input type="text" name="mobile" required>        
              </div>
              <div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:red;"></small></div>
          </div>
          <div class="form-group" style="margin-top: 20px;">
              <label class="control-label col-sm-3" for="skill">Email :</label>
              <div class="col-sm-7">  
                <input type="text" name="email" required>        
              </div>
              <div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:red;"></small></div>
          </div>
    			<div class="form-group" >
      				<label class="control-label col-sm-3" for="location" >Location:</label>
      				<div class="col-sm-7">
      					<select size="1" class="form-control" name="city" id="location" required>
						  <?php foreach ($city_list as $city) { 

                  //$selected=($city->city_name == $key->)
                  $selected="";
                  echo "<option value='".$city->city_name."' ".$selected.">".$city->city_name."</option>";
                
                 } ?>
						</select>
      				</div>
    			</div>
    			
          <div class="form-group">
              <label class="control-label col-sm-3" for="industry">Industry Type :</label>
              <div class="col-sm-7">  
              <select size="1" class="form-control" name="industry_type" id="industry_type">

                <?php foreach ($industry_type as $industry_type) { 

                  //$selected=($skill->name == $key->)
                  $selected="";
                  echo "<option value='".$industry_type->name."' ".$selected.">".$industry_type->name."</option>";
                
                 } ?>

              </select>        
              </div>
              <div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:red;"></small></div>
          </div>

          <div class="form-group">
            <div class="col-sm-12" style="margin-top: 5px;text-align:center;"><small style="font-size: 14px;color:green;"><a style="color:#66ff66;" href="<?php echo base_url();?>candidate/login"><b>Login</b></a> To Activate</small></div>
          </div>
    			<div class="form-group">
      				<label class="control-label col-sm-3" for="skill">Skill :</label>
      				<div class="col-sm-7">  
      					<select size="1 " class="form-control" name="skill" id="skill" disabled>

                <?php foreach ($skills as $skill) { 

                  //$selected=($skill->name == $key->)
                  $selected="";
						      echo "<option value='".$skill->name."' ".$selected.">".$skill->name."</option>";
                
                 } ?>
						</select>        
        			</div>
        			<div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:red;"></small></div>
    			</div>

          <div class="form-group">
              <label class="control-label col-sm-3" for="salary">Salary :</label>
              <div class="col-sm-7">  
                <select size="1" class="form-control" name="salary" id="salary" disabled>
                  <?php 
                        $ctc =array('0-1','1-2','2-3','3-5','5-7','7-10','10+');

                           for($i=0;$i<count($ctc);$i++)
                            {
                              //$selected=($ctc[$i]==$ed->ctc?'selected':'');
                              $selected="";

                              echo '<option value="'.$ctc[$i].'" '.$selected.'>'.$ctc[$i].'</option>';

                            }

                  ?>
                </select>        
                <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
              </div>
              <div class="col-sm-2" style="margin-top: 5px;"><small style="font-size: 14px;color:blue;"> Lacs per year</small></div>
          </div>
    			<div class="form-group" style="font-size: 16px;">
      				<label class="control-label col-sm-3" for="email">Email Frequency :</label>
      				<div class="col-sm-7"> 
				    <select size="1" class="form-control" name="email_frequency" id="email_frequency" disabled>
    						  <?php 
                        $ctc =array('Weekly','Fortnightly','Monthly');

                           for($i=0;$i<count($ctc);$i++)
                            {
                              //$selected=($ctc[$i]==$ed->ctc?'selected':'');
                              $selected="";

                              echo '<option value="'.$ctc[$i].'" '.$selected.'>'.$ctc[$i].'</option>';

                            }

                  ?>
    						</select>
    						</div>
    			</div>

    			<!-- <div class="form-group" style="font-size: 16px;">
      				<label class="control-label col-sm-3" for="sms">Sms Alert:</label>
      				<div class="col-sm-8" style="border:0px solid red;margin-top: 8px;">  
				      <input type="radio" name="sms" style="height: 12px;" checked>Daily
				      <input type="radio" name="sms" style="height: 12px;">Weekly
				    </div>
    			</div> -->

    			<div class="form-group">
    			<style type="text/css">
    				.btn_alert{width: 130px;background-color: #0055A5;color:#fff;}
    				.btn_alert:hover{background-color: #FF7900;color:#fff;}
    				@media screen and (max-width: 768px){
    				.btn_alert{margin-top: 10px;}
    				}

    			</style>        
				    <div class="col-sm-12" align="center">
				      	<div class="col-xs-12 col-md-4"><button type="submit" class="btn btn-default btn_alert">Save</button></div>
            </form>
            		
				    </div>
				</div>
  
  <?php //echo $this->session->userdata('name'); //Test purpose
// echo $this->session->userdata('email');
// echo $this->session->userdata('mobile');
?>
		</div>	<!--End col-md-6-->
		<div class="col-md-3 col-xs-1"></div>
	</div><br>
</div>	
</body>
