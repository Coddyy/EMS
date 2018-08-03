<?php include 'new_header.php' ?>

<style type="text/css">
	.conmain
	{
		border:1px solid red;
	}
.sidebar-right{
	border:1px solid #999;  margin: 20px 20px; border-radius: 5px;
}
.sidebar-right-ul{
	list-style-type: none ; margin: 10px 15px;
}
.sidebar-right-ul-li{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 40px;padding: 10px 10px;background-color: #ff7900;
}
 
.sidebar-right-ul-profile{
	border:1px solid #999; font-size: 18px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 170px;
}
.sidebar-right-ul-edit{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 1px; height: 40px;padding: 10px 10px;
}
.sidebar-right-ul-li:hover{
	background-color:#0055a5; 
	font-size: 16px;
}
.sidebar-right-ul-li a:hover{
	color:#fff;
	text-decoration-line: none;
}
.white{
	color:#fff;
}

</style>

<div class="container-fluid">
	<div class="row" style="border:2px solid;height: 120px;">
		<marquee> This is an advertisment area</marquee>
	</div>
</div>

<div class="container conmain">
	<div class="row">
		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 conmaincol3">
			<div class="sidebar-right" style="">
				<ul style="" class="sidebar-right-ul">
					<li class="sidebar-right-ul-profile" style="">
						<a href="#">
                                    <img src="http://www.cadnaukri.com/test/assets/images/profile-photo.png" alt="cadnaukri" style="max-width: 100%; max-height: 100%;">
                         </a>
                     </li>
                     <li class="sidebar-right-ul-edit"><a href="#">Add photo</a></li>
					<li class="sidebar-right-ul-li" style="color: #fff;"><a href="#" class="active white" style="color: #fff;">Profile</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Personal Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Educational Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Skill Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Experience Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Contact Details</a></li>
					<li class="sidebar-right-ul-li" style=""><a href="#" class="white">Log Out</a></li>
				</ul>
			</div>
		</div><!--End of conmaincol3-->

<style type="text/css">
	.center-main1{
		border:1px solid #999;  margin: 20px -35px; border-radius: 5px;
	}
	@media screen and (max-width: 988px) {
    .center-main1 {
        margin: 20px 20px;
    }
}

.center-main2{
		border:1px solid #999;  margin: -10px -35px; border-radius: 5px;
	}
	@media screen and (max-width: 988px) {
    .center-main2 {
        margin: -10px 20px;

    }
}

.center-main2-iframe{
	margin: 2px 15px;height: 248px; width: 622px;
}
@media screen and (max-width: 988px) {
    .center-main2-iframe {
        height: 120px; width: 175px;
        margin-top: -30%;
        margin-left: 35%;

    }
}

.center-main3{
	border:1px solid #999;  margin: 20px -35px; border-radius: 5px;
}
@media screen and (max-width: 988px) {
    .center-main3 {
        margin: 20px 20px;
    }
}

.center-main4{
	border:1px solid #999;  margin: -10px -35px; border-radius: 5px;
}
@media screen and (max-width: 988px) {
    .center-main4 {
        margin: -10px 20px;
    }
}
.center-mainform{
	border:1px solid red;border-radius: 5px;

}
@media screen and (max-width: 988px) {
    .center-mainform {
     
    }
}



</style>


		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 conmaincol6">
			<div class="center-main1" style="">
				<h4 style="text-align: center;">Welcome To Your Personal Cabinet!</h4>
				<div class="progress">
    				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> Profile Completeness 40%
    				</div>
  				</div>
  				<h5 style="font-weight: bold;">Your Last Activity</h5>
  				<h6>Logged In From Ip : </h6>
  				<h6>Last Logged Date :</h6>
  				<h6>Last Applied Job :</h6>
			</div><!--End of center-main1-->

			<div class="center-main2" style="border:1px solid green;">
				<h4 style="text-align: center;">Most Featured Jobs </h4>
				<div class="row" style="height: 200px;">
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12" style="font-weight: bold;">Job Title :</div>
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12" style="font-weight: bold;">Skills:</div>
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12" style="font-weight: bold;">Experience:</div>
					<div class="col-md-3 col-lg-3 col-xs-12 col-sm-12" style="font-weight: bold;">Location:</div>

				<!-- <iframe src="#" class="center-main2-iframe" >
  <p>Your browser does not support iframes.</p>
</iframe> -->

				</div>
				
			</div><!--End of center-main2-->

			<div class="center-main3" style="">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" style="">
						<h5>Search your job: </h5>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" style=" text-align: right; margin-top: 8px;">
						<a href="#">View more..</a>
					</div>
				</div>
			</div><!--End of center-main3-->

			<div class="center-main4" style="">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
						<form action="" method="post" class="center-mainform form-inline" style="">
    							<div class="form-group" style="padding-right: 21px;">
    							  <label for="skill">Skill:</label>
    							  <input type="text" class="form-control" placeholder="Enter skill" name="skill" style="height: 25px;">
    							</div>
								<div class="form-group" style="padding-right: 21px;">
								<label for="Experience">Experience:</label>
								    <select class="form-control" style="height: 25px; padding: 1px 0px;">
								        <option>0-1</option>
								        <option>1-2</option>
								        <option>2-4</option>
								        <option>4-6</option>
								        <option>6-8</option>
        								<option>8-10</option>
								        <option>10-15</option>
      								</select>
								</div>  

    							<div class="form-group" style="padding-right: 21px;">
								<label for="Location">Location:</label>
							      	<select class="form-control" style="height: 25px; padding: 1px 0px;">
         						         <option value="0" style="">ALL</option>
                                         <option value="Pune" style="">Pune</option>
                                         <option value="Tamil Nadu.">Tamil Nadu.</option>
                                         <option value="Kolkata">Kolkata</option>
                                         <option value="Gujarat." style="">Gujarat.</option>
                                         <option value="Chennai">Chennai</option>
                                         <option value="Hyderabad">Hyderabad</option>
                                         <option value="Gurgaon" style="">Gurgaon</option>
                                         <option value="Surat">Surat</option>
                                         <option value="Bangalore">Bangalore</option>
                                         <option value="Delhi">Delhi</option>
                                         <option value="Ahmedabad">Ahmedabad</option>
                                         <option value="Surat">Surat</option>
                                         <option value="Nashik">Nashik</option>
                                         <option value="Bhubaneswar">Bhubaneswar</option>
                                         <option value="Roorkee">Roorkee</option>
                                         <option value="Vadodara">Vadodara</option>
                                         <option value="Nagpur">Nagpur</option>
                                         <option value="Vadodara">Vadodara</option>
                                         <option value="Faridabad">Faridabad</option>      
                                    </select>
   								 </div> </br><br>
    
    							<button type="submit" class="btn btn-info pull-right" style="color: #fff; background-color:#FF7900">Search</button>
    							<button type="" class="btn btn-info pull-left" style="color: #fff; background-color:#FF7900">View History</button>
  						</form>					
					</div><!--End of first col-md-6 -->
					<div class="col-md-6">
						
					</div><!--End of second col-md-6 -->	
				</div>
			</div><!--End of center-main4-->

		</div><!--End of conmaincol6-->

<style type="text/css">
	.sidebar-left{
	border:1px solid #999;  margin: 20px 20px; border-radius: 5px;
}
.sidebar-left-ul{
	list-style-type: none ; margin: 10px 15px;
}
.sidebar-left-ul-li{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 40px;padding: 10px 10px;background-color: #0055a5;
}
 
.sidebar-left-ul-profile{
	border:1px solid #999; font-size: 18px; margin-left: -40px; border-radius: 2px; margin-top: 5px; height: 250px;
}
.sidebar-left-ul-edit{
	border:1px solid #999; font-size: 14px; margin-left: -40px; border-radius: 2px; margin-top: 1px; height: 40px;padding: 10px 10px;
}
.sidebar-left-ul-li:hover{
	background-color: #ff7900;
	font-size: 16px;
}
.sidebar-left-ul-li a:hover{
	color:#fff;
	text-decoration-line: none;
}

</style>

		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 conmaincol3">
			
			<div class="sidebar-left" style="">
				<ul style="" class="sidebar-left-ul">
					<li class="sidebar-left-ul-profile" style="background-color:none;">
						<a href="#">
                                    <!-- <img src="http://www.cadnaukri.com/test/assets/images/profile-photo.png" alt=""> -->
                         </a>
                     </li>
                     <!-- <li class="sidebar-left-ul-edit"><a href="#"> Add photo</a></li> -->
					<li class="sidebar-left-ul-li" style=""><a href="#" class="active white">Profile Viewed</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Applied Job</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Upgrade Service</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Track Imterviews</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">View Chats</a></li>
					<li class="sidebar-left-ul-li" style=""><a href="#" class="white">Build Your CV</a></li>
					<!-- <li class="sidebar-left-ul-li" style=""><a href="#" class="white">Log Out</a></li> -->
				</ul>
			</div>

		</div><!--End of conmaincol3-->
	</div><!--End of Row-->
</div><!--End of Container conmain-->




