<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>CAD CAM SCHOOL</title>
<!--Cad cam school design-->
<style type="text/css">
	div{border:0px solid red;overflow: hidden;}
	input[type=text] {
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    background-color: white;
    background-image: url('<?php echo base_url()?>assets/images/img/searchps.png');
    background-position: 0px 0px; 
    background-repeat: no-repeat;
    padding: 2px 20px 2px 40px;
    width: 100%;
    margin-top: 5px;margin-bottom: 5px;
}
.banner_img{margin-top: 10px;border-radius: 4px;}
.search_btn{margin-top: 5px;margin-bottom: 5px; width: 100%;padding: 3px 20px 3px 20px;font-size: 14px;background-color: #FF7900;height: 29px;color:#fff;}
.search_btn:hover{font-size: 16px;background-color:#00FF80;}
.search_btn:focus{font-size: 16px;background-color:#FF7900;}
.sign_up{padding: 0px 5px;margin-top:2px;color:#fff;}
.social_icon{font-size:24px; color:#0055A5;padding-right: 5px;}
.social_icon:hover{font-size:24px; color:#FF7900;padding-right: 5px;}
@media screen and (max-width: 768px){
	.banner_img{margin-top: 10px;height: 50px;}
	.social_icon{font-size:22px; color:#0055A5;padding:0px;line-height: 26px;}
	.social_icon:hover{font-size:22px; color:#FF7900;padding:0px;}
}
</style>
<style type="text/css">
          .blink {   
                  animation-duration: 2000ms;
                  animation-name: tgl;
                  animation-iteration-count: infinite;
                  /*animation-direction: alternate;*/
                  }

                  @keyframes tgl 
                  {
                     0%{opacity: 1;color: red;}
                    25%{opacity: 1;color: #0055A5;}
                    50%{opacity: 1;color: #FF80FF;}
                    75%{opacity: 1;color: purple;}
                   100%{opacity: 1;color: yellow;}
                  }
          .blink:hover{text-decoration: none;color:#fff;animation: none;}
          @media screen and (max-width: 768px){
  .new_logo{text-align: center;}
}
</style>
<div class="container" style="border:0px solid grey;max-width: 1000px;background-color: #fff;">
	<div class="row" style="">
		<div class="col-md-3 col-xs-12 new_logo">
                        <!-- <div id=""> --><a href="<?php echo base_url();?>" title="www.cadnaukri.com">
                          <!-- <img src="<?php echo base_url()?>assets/images/img/Logo-1-min.jpg" alt="CADnaukri" class="logonew"></a> -->
                          <img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="CADnaukri" class="" align="center" title="CADnaukri" style="margin-top: 3px;"></a>

                        <!-- </div> -->   
                    </div>

		<div class="col-md-9 col-xs-12" align="" >

			<div class="row" style="height: 40px;margin-top: 10px;">
				<span class="col-md-9 col-xs-8" style="line-height: 26px;">Follow us :-
					<a href="https://www.facebook.com/CADnaukri" class="" title="https://www.facebook.com/CADnaukri - CADnaukri.com"><i class="fa fa-facebook-square social_icon" style=""></i></a>
					<a href="https://twitter.com/cadnaukri" class="" title="https://twitter.com/cadnaukri - CADnaukri.com"><i class="fa fa-twitter-square social_icon" style=""></i></a>
					<a href="https://www.linkedin.com/in/cadnaukri/" class="" title="https://www.linkedin.com/in/cadnaukri/ - CADnaukri.com"><i class="fa fa-linkedin-square social_icon" style=""></i></a>
					<a href="https://plus.google.com/u/0/+CADnaukri" class="socialmedia" title="https://plus.google.com/u/0/+CADnaukri - CADnaukri.com"><i class="fa fa-google-plus-square social_icon" style=""></i></a>
				</span>
				<span class="col-md-3 col-xs-4" style="">
					<a href="<?php echo base_url();?>CAD-CAM-Schools/Register"><button type="button" class="btn btn-info pull-right sign_up blink" title="Add Listing"> Add Your Listing</button></a>
				</span>
			</div>

			<div class="row" style="background-color: #B1BEBA; margin-top: 0px; border-radius: 4px;">

				<marquee style="color:#fff; padding: 9px 0px;" class="blink">Popular Cad Cam Schools !</marquee>
				<!-- <div class="col-md-5 col-xs-12">
					<input type="text" name="search" placeholder="Search.." >
				</div>
				<div class="col-md-5 col-xs-12">
					<input type="text" name="search" placeholder="Location Search.." >
				</div>
				<div class="col-md-2 col-xs-12">
					<button type="button" class="btn btn-default pull-right search_btn btn-responsive" style="">Search</button>
				</div> -->
			</div>
		</div>
	</div><!--Row1-->
<!--Start Banner-->

	<style type="text/css">
		.mobile_360{display: none;}
		.mobile_412{display: none;}
		.mobile_768{display: none;}
		@media screen and (max-width: 360px){
			.mobile_360{display:inline-block; border: 1px solid red;margin-top: 10px;border-radius: 4px;}
		}

		@media screen and (min-width:361px) and (max-width: 412px){
			.mobile_412{display:inline-block; border: 1px solid green;margin-top: 10px;border-radius: 4px;}
		}

		@media screen and (min-width:413px) and (max-width: 768px){
			.mobile_768{display:inline-block; border: 1px solid yellow;margin-top: 10px;border-radius: 4px;}
		}
	</style>

	<div class="row desktop">
			<img src="<?php echo base_url()?>assets/images/img/cad-school2_1030_96.png" alt="CADnaukri" class="banner_img img-responsive" >
	</div>

	<div class="row mobile_360">
			<img src="<?php echo base_url()?>assets/images/img/360/cad-school-banner_360.png" alt="CADnaukri" class="img-responsive">
	</div>

	<div class="row mobile_412">
			<img src="<?php echo base_url()?>assets/images/img/412/cad-school-banner_412.png" alt="CADnaukri" class="img-responsive">
	</div>

	<div class="row mobile_768">
			<img src="<?php echo base_url()?>assets/images/img/768/Untitled-1.gif" alt="CADnaukri" class="img-responsive">
	</div>
<!--End Banner-->
	<div class="row" style="margin-top: 6px;">
		<!-- <div class="topnav fixed" id="myTopnav">
		  <a href="#home" class="a_class">Top search result</a>
		  <a href="#news" class="a_class">Popular Search</a>
		  <a href="#contact" class="a_class">Most search</a>
		  <a href="#about" class="a_class">About</a>
		  <a href="#" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div> -->
	</div><!--Row2-->

<!-- ====================================================================================================================================================== -->
<?php foreach ($schools as $key) { ?>

<!--Desktop-->
	<div class="row desktop" style="">
		<div class="col-md-9 col-xs-12 image">
			<div class="col-md-12 col-xs-12" style="font-size: 18px;font-weight: 500;">
				<?php if($key->companyname){
					$field='companyname';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->companyname : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
				?>
			</div>
			<div class="col-md-12 col-xs-12 div_icon"><span class="glyphicon glyphicon-home icon_list" style="" title="Address"></span>
				<?php if($key->location){
					$field='location';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->location : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					// echo $key->location;
				?>
			</div>
			<div class="col-md-12 col-xs-12 div_icon"><span class="glyphicon glyphicon-pushpin icon_list" style="" title="Pin code"></span>
				<?php if($key->pincode){
					$field='pincode';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->pincode : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->pincode;
				?>
			</div>
			<div class="col-md-6 col-xs-6 div_icon"><span class="glyphicon glyphicon-map-marker icon_list" style="" title="Location"></span>
				<?php if($key->city){
					$field='city';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->city : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->city;
				?>
			</div>

			<div class="col-md-6 col-xs-6 div_icon"><span class="glyphicon glyphicon-calendar icon_list" style="" title="Estd Year"></span>
				<?php if($key->year_of_est){
					$field='year_of_est';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->year_of_est : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->year_of_est;
				?>
			</div>
			<!-- <div class="col-md-4 col-xs-6"><span class="glyphicon glyphicon-home" style="font-size:11px;color:#FF7900;padding:0 10px;" title="Address"></span>Address</div> -->
			<div class="col-md-6 col-xs-6 div_icon"><span class="glyphicon glyphicon-phone icon_list" style="" title="Mobile"></span>
				<?php if($key->cmobile){
					$field='cmobile';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->cmobile : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->cmobile;
				?>
			</div>
			<div class="col-md-6 col-xs-6 div_icon"><span class="glyphicon glyphicon-phone-alt icon_list" style="" title="Landline"></span>
				<?php if($key->phno){
					$field='phno';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->phno : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->phno;
				?>
			</div>
			<!-- <div class="col-md-4 col-xs-6"><span class="glyphicon glyphicon-earphone" style="font-size:11px;color:#FF7900;padding:0 10px;" title="Whatsapp"></span>(+ 91 9999999999)</div> -->
			<div class="col-md-6 col-xs-12 div_icon"><span class="glyphicon glyphicon-globe icon_list" style="" title="website"></span>
				<?php if($key->website){
					$field='website';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->website : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;

					//echo $key->website;
				?>
			</div>
			<div class="col-md-6 col-xs-12 div_icon"><span class="glyphicon glyphicon-envelope icon_list" style="" title="Email"></span>
				<?php if($key->cemail){
					$field='cemail';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->cemail : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->website;
				?>
			</div>
	 		
			
			<div class="col-md-12 col-xs-12 div_icon" style="color:grey; font-weight: 400"><span class="glyphicon glyphicon-book icon_list" style="" title="Course Offered"></span><i>Course Offered</i><br>
				<div class="col-md-12 col-xs-12" style="color:#888F95;">
				<ul class="">
			<?php 	if($key->course){
					$field='course';
					$sponor_id=$key->id;
					$var=$this->Sponors_M->check_permission($sponor_id,$field);
					if($var == true)
					{
						 $row=explode(';',$key->course); 
						//echo count($row);
						for($i=0;$i<count($row);$i++)
						{ ?>
						<li class=" list_tag col-md-4 col-xs-6" style="display: inline-block;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i> <?php echo $row[$i]; ?></i></li>
			<?php } } else{ ?>

						<li class=" list_tag col-md-4 col-xs-6" style="display: inline-block;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i> Not Available</i></li>

			<?php 	} } else { ?>
						<li class=" list_tag col-md-4 col-xs-6" style="display: inline-block;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i> Not Available</i></li>
			<?php } ?>
				</ul>
				</div>
			</div>

	 	</div>
	 	<!-- <div class="col-md-3 col-xs-12" style="border:0px solid red;margin-top: 2px;margin-bottom: 10px;"> -->
	 		<center><img src="http://www.cadnaukri.com/assets/images/img/cad-school1-min.png" alt="CADnaukri" class="img-responsive" style=""></center>
	 	<!-- </div> -->
	</div>
<!--End Desktop-->
<!--Mobile View-->
	<div class="row mobile" style="">
		<div class="col-md-9 col-xs-12 image">
			<div class="col-md-12 col-xs-12" style="font-size: 18px;font-weight: 500;">
				<?php if($key->companyname){
					$field='companyname';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->companyname : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
				?>
			</div>
			<div class="col-md-12 col-xs-12 div_icon"><span class="glyphicon glyphicon-home icon_list" style="" title="Address"></span>
				<?php if($key->location){
					$field='location';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->location : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					// echo $key->location;
				?>
			</div>
			<div class="col-md-12 col-xs-6 div_icon" style="width: 150px;"><span class="glyphicon glyphicon-pushpin icon_list" style="" title="Pin code"></span>
				<?php if($key->pincode){
					$field='pincode';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->pincode : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->pincode;
				?>
			</div>
			<div class="col-md-6 col-xs-6 div_icon" style="width: 150px;"><span class="glyphicon glyphicon-map-marker icon_list" style="" title="Location"></span>
				<?php if($key->city){
					$field='city';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->city : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->city;
				?>
			</div>
			<div class="col-md-6 col-xs-6 div_icon" style="width: 150px;"><span class="glyphicon glyphicon-calendar icon_list" style="" title="Estd Year"></span>
				<?php if($key->year_of_est){
					$field='year_of_est';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->year_of_est : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->year_of_est;
				?>
			</div>
			<div class="col-md-6 col-xs-6 div_icon" style="width: 150px;"><span class="glyphicon glyphicon-phone icon_list" style="" title="Mobile"></span>
				<?php if($key->cmobile){
					$field='cmobile';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->cmobile : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->cmobile;
				?>
			</div>
			<div class="col-md-6 col-xs-12 div_icon"><span class="glyphicon glyphicon-phone-alt icon_list" style="" title="Landline"></span>
				<?php if($key->phno){
					$field='phno';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->phno : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->phno;
				?>
			</div>
			<div class="col-md-6 col-xs-12 div_icon"><span class="glyphicon glyphicon-globe icon_list" style="" title="website"></span>
				<?php if($key->website){
					$field='website';
					$sponor_id=$key->id;
					$var=($this->Sponors_M->check_permission($sponor_id,$field) ? $key->website : 'Not Available');
					}
					else
					{
						$var='Not Available';
					}
					echo $var;
					//echo $key->website;
				?>
			</div>
			<div class="col-md-6 col-xs-12 div_icon"><span class="glyphicon glyphicon-envelope icon_list" style="" title="Email"></span><?php echo $key->cemail;?></div>	 		
			<div class="col-md-12 col-xs-12 div_icon" style="color:grey; font-weight: 400;border:0px solid red;">
				<span class="glyphicon glyphicon-book icon_list" style="" title="Course Offered"></span><i>Course Offered</i><br>
				<!-- <div class="col-md-12 col-xs-12" style="color:#888F95;border: 1px solid red;margin-left: -20px;width: 100%;"> -->
				<span class="pull-left">
				
			<?php 	if($key->course){
					$field='course';
					$sponor_id=$key->id;
					$var=$this->Sponors_M->check_permission($sponor_id,$field);
					if($var == true)
					{
						$row=explode(';',$key->course); 
						//echo count($row);
						for($i=0;$i<count($row);$i++)
						{ ?>
						<li class="list_tag col-xs-6" style="display: inline-block; overflow:;text-align: left;width: auto;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i><?php echo $row[$i]; ?></i></li>
				<?php } } else{ ?>

						<li class=" list_tag col-md-4 col-xs-6" style="display: inline-block;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i> Not Available</i></li>

			<?php 	} } else { ?>
						<li class=" list_tag col-md-4 col-xs-6" style="display: inline-block;"><span class="glyphicon glyphicon-tag icon_list_inner"></span> <i> Not Available</i></li>
			<?php } ?>
				</span>
				<!-- </div> -->
			</div>

	 	</div>
	 	
	 	<!-- <div class="col-md-3 col-xs-12" style="border:0px solid red;margin-top: 2px;margin-bottom: 10px;" align="center"> -->
	 		<!-- <center><img src="http://www.cadnaukri.com/assets/images/img/cad-school1_mob-min.png" alt="CADnaukri" class="" style=""></center> -->
	 	<!-- </div> -->
	
	</div>
<!--End Mobile View-->
<?php } ?>
<!-- ===================================================================================================================================== -->

<!--Start Banner-->

	<style type="text/css">
		.mobile_360{display: none;}
		.mobile_412{display: none;}
		.mobile_768{display: none;}
		@media screen and (max-width: 360px){
			.mobile_360{display:inline-block; border: 1px solid red;margin-top: 10px;border-radius: 4px;}
		}

		@media screen and (min-width:361px) and (max-width: 412px){
			.mobile_412{display:inline-block; border: 1px solid green;margin-top: 10px;border-radius: 4px;}
		}

		@media screen and (min-width:413px) and (max-width: 768px){
			.mobile_768{display:inline-block; border: 1px solid yellow;margin-top: 10px;border-radius: 4px;}
		}
	</style>

	<div class="row desktop">
			<img src="<?php echo base_url()?>assets/images/img/cad-school2_1030_96.png" alt="CADnaukri" class="banner_img img-responsive" >
	</div>

	<div class="row mobile_360">
			<img src="<?php echo base_url()?>assets/images/img/360/cad-school-banner_360.png" alt="CADnaukri" class="img-responsive">
	</div>

	<div class="row mobile_412">
			<img src="<?php echo base_url()?>assets/images/img/412/cad-school-banner_412.png" alt="CADnaukri" class="img-responsive">
	</div>

	<div class="row mobile_768">
			<img src="<?php echo base_url()?>assets/images/img/768/Untitled-1.gif" alt="CADnaukri" class="img-responsive">
	</div>
<!--End Banner-->


<style type="text/css">
	  .con8text{text-align: center; font-size: 22px;color: black; padding: 5px 5px; margin-top: 0px;font-weight: bold;}
	  .icon_list{font-size:11px;color:#FF7900;padding:0 10px;}
	  .icon_list_inner{font-size:11px;color:#0055A5;padding: 10px 5px;border: 0px solid green;}
	  .div_icon{color:#888F95;}
	  @media screen and (max-width: 768px){
	  .list_tag{border:0px solid yellow;margin-left: ;line-height: 5px;font-size: 10.5px;text-align: left;}
		}

		.desktop{line-height: 20px;border-bottom: 1px solid lightgrey;overflow: hidden; margin-top: 10px;}

		.mobile{display: none;}

		@media screen and (max-width: 768px){
		.desktop{display: none;}
		.mobile{display: inline-block;border:0px solid red;}
		.icon_list_inner{font-size:11px;color:#0055A5;padding: 10px 2px;margin-left: 0px;border: 0px solid red;}
		}

</style>
<!-- =============================================================================================================================================== -->
</div><!--End of container-->

<!--Pagination-->
	<!-- <div class="container" style="max-width: 1000px;">
	  <ul class="pagination pagination-lg pull-right">
	    <li><a href="cad_cam_school">1</a></li>
	    <li><a href="cad_cam_school">2</a></li>
	    <li><a href="cad_cam_school">3</a></li>
	    <li><a href="cad_cam_school">4</a></li>
	    <li><a href="cad_cam_school">5</a></li>
	  </ul>
	</div> -->
<!--Pagination-->

<style type="text/css">
	.a_class{border-right: 5px solid grey;border-radius: 30%;}
				.topnav {overflow: hidden;background-color: #FF7900; border-radius: 4px;}
	@media screen and (max-width: 600px){
		.a_class{border:none;border-radius: 0%;}
	}
	.topnav a {float: left;display: block;color: #f2f2f2;text-align: center;padding: 3px 16px;text-decoration: none;font-size: 17px;}

	.topnav a:hover {background-color: #0055A5;color: #FF7900;}

	.active {background-color: #4CAF50;color: white;}

	.topnav .icon {display: none;}

	@media screen and (max-width: 600px) {
	  .topnav a:not(:first-child) {display: none;}
	  .topnav a.icon {float: right;display: block;}
	}

	@media screen and (max-width: 600px) {
	  .topnav.responsive {position: relative;}
	  .topnav.responsive .icon {position: absolute;right: 0;top: 0;}
	  .topnav.responsive a {float: none;display: block;text-align: left;}
	}
</style>
<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
	}
</script>

<br />
<!-- =============================================================================================================================================== -->

<!-- Start Footer-->
	<style>
		 .main_width{max-width: 1000px;margin:auto;}
		 .news_button{height: 40px; padding: 0px 22px; color: #fff; background: #F60; border: none; border-radius: 3px;}
		 #subs_res{padding:10px;color:#F60}
		 .sub_error{color: #F60}
		 .sub_sucess{color:#0859A8}

		.blue-bg, .blue-bg p, .blue-bg li, .blue-bg a { color: #bbb;background-color: #1765AD;}
		   
			
		 li a:hover{color:#fff;text-decoration: none;}

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
	                          <div class="row" style="border:0px solid red;" align="center">
	                              <div class="col-xs-6 col-md-3" style="height: 220px;">
	                                <div class="blue-category-inner" style="">
	                                  <h4 style="padding: 0 10px; color: #fff;">Information</h4>
	                                        <ul class="a">
	                                          <li><a href="<?php echo base_url('index/aboutus')?>">About Us</a></li>
	                                            <li><a href="<?php echo base_url('index/terms_and_condition')?>">Terms &amp; Conditions</a></li>
	                                            <li><a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a></li>
	                                            <li><a href="<?php echo base_url('index/disclaimer')?>">Disclaimer of Warranties and Liabilities</a></li>
	                                            <li><a href="<?php echo base_url('index/back_ground_check')?>">Background Check</a></li>
	                                        </ul>
	                                </div>
	                              </div>
	                                <div class="col-xs-6 col-md-3" style="height: 220px;">
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
	                                <div class="col-xs-6 col-md-3" style="height: 220px;">
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
	                                <div class="col-xs-6 col-md-3" style="height: 220px;">
	                                <div class="blue-category-inner">
	                                  <h4 style="padding: 0 10px; color: #fff;">Employers</h4>
	                                        <ul class="a">
	                                          <li><a href="<?php echo base_url('best_design_jobsfor_job_seeker/for_corporates_recruiters')?>">For Corporates/Recruiters</a></li>
	                                           
	                                            <li>Help Line: 8260701701</li>                                            
	                                        </ul>
	                                </div>
	                              </div>

	                              <!-- <div class="col-xs-6 col-md-3" style="height: 220px;">
	                                <div class="blue-category-inner">
	                                  <h4 style="padding: 0 10px; color: #fff;">Cad Cam Schools</h4>
	                                        <ul class="a">
	                                          <li><a href="#"></a>CAD Institute in Pune</li>
	                                          <li><a href="#"></a>CAD Institute in Pune</li>
	                                          <li><a href="#"></a>CAD Institute in Pune</li>
	                                          <li><a href="#"></a>CAD Institute in Pune</li>
	                                          <li><a href="#"></a>CAD Institute in Pune</li>                                          
	                                        </ul>
	                                </div>
	                              </div> -->

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

<!--End Footer-->
<!-- =============================================================================================================================================== -->
