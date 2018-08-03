<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/sam/css/mdb.min.css" />

</head>
<body>

	<style>
			* {
			    box-sizing: border-box;
			}

			body {
			    margin: 0px;
			    background-image: url("<?php echo base_url()?>assets/images/img/1920/4.gif");background-repeat: repeat;
			}

			/* Style the side navigation */
			.sidenav {
			    height: 100%;
			    width: 250px;
			    position: fixed;
			    z-index: 1;
			    top: 100px;
			    left: 0;
			    background-color: #FF7900;
			    overflow-x: hidden;
			    border:2px solid lightgrey;
			    border-right: none;
			    border-radius: 5px;
			    
			}


			/* Side navigation links */
			.sidenav a {
			    color: #0055A5;
			    padding: 5px;
			    text-decoration: none;
			    display: block;
			    border-bottom: 2px solid lightgrey;
			    margin: 1px;
			}

			/* Change color on hover */
			.sidenav a:hover {
			    background-color: #ddd;
			    color: black;
			}

			/* Style the side navigation */
			.sidenav1 {
			    height: 100%;
			    width: 250px;
			    position: fixed;
			    z-index: 1;
			    top: 100px;
			    right: 0;
			    background-color: #FF7900;
			    overflow-x: hidden;
			    border:2px solid lightgrey;
			    border-right: none;
			    border-radius: 5px;
			    
			}


			/* Side navigation links */
			.sidenav1 a {
			    color: #0055A5;
			    padding: 5px;
			    text-decoration: none;
			    display: block;
			    border-bottom: 2px solid lightgrey;
			    margin: 1px;
			}

			/* Change color on hover */
			.sidenav1 a:hover {
			    background-color: #ddd;
			    color: black;
			}

			/* Style the content */
			.content {

			    margin-left: 250px;
			    /*padding-left: 0px;*/
			}
			#aaa {

			    width: 60px;
			    max-height: 88px;
			    color:#fff;
			    background: #0055A5;
			    -webkit-transition: width 2s; /* Safari */
			    -webkit-transition-timing-function: linear; /* Safari */
			    transition: width 2s;
			    /*transition: height 2s;*/
			    transition-timing-function: linear;
			    overflow:hidden;
			    margin-bottom: 10px;
			    border-radius: 4px;
			    border-top-left-radius: 0px;

			     
			     border-bottom:  10px solid lightgreen;
   				 -webkit-animation: mymove 2s infinite; /* Chrome, Safari, Opera */
   				 animation: mymove 2s infinite;			   
			}
			/* Chrome, Safari, Opera */
			@-webkit-keyframes mymove {50% {border-bottom-color: lightblue;}}

			/* Standard syntax */
			@keyframes mymove {50% {border-bottom-color: #FF7900;}}


			 #aaa h2 {padding-left: 50px;margin-top: -5px;}
			 #aaa span{margin-top: 10px;margin-left: -10px;font-size: 26px;}
			 #aaa a{color:#fff;}
			 #aaa a:hover{color:#FF7900;}
			 #aaa:hover {width:   320px;height: auto;}
	</style>
</head>
<body>
<div class="container-fluid" style="border:0px solid red;height: 100px;background-color: #fff;" align="center">
	<a href="http://www.cadnaukri.com/superadmin/dasboard"> <img class="img-responsive" alt="Cadnaukri Logo" src="http://www.cadnaukri.com/assets/images/logo.png" style="height:60px"></a>
</div>
<div class="row" style="max-width: 1000px;">
	<div class="col-md-3">
<!-- Start Sidenav-->
	<div class="sidenav desktop_view" style="word-spacing: -10px;">
		<h4 style="text-align: center;border-bottom: 1px solid lightgrey;margin-bottom: 0px;padding: 5px;">Menu</h4>
	  <a href="#"><span class="glyphicon glyphicon-home">   Dashboard</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Banner</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Daily-Poll</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Services</span></a>
	  <a href="http://www.cadnaukri.com/superadmin/admin/add_blog"><span class="glyphicon glyphicon-plus">   Blog</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   News  and  Event</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Job's</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Companies</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Skill's</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Intern's</span></a>
	  <a href="#"><span class="glyphicon glyphicon-plus">   Admin</span></a>
	</div>

<!--Mobile View-->
	<div class="mobile_view" style="">
        <div class="topnav" id="Topnav">
         <a href="#"><span class="glyphicon glyphicon-home"> Dashboard</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Banner</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Daily-poll</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Services</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Blog</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> News & Event</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Jobs</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Companies</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Skill's</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Intern's</span></a>
		 <a href="#"><span class="glyphicon glyphicon-plus"> Admin</span></a>
         <a href="javascript:void(0);" style="font-size:17px;" class="icon" onclick="myFunction1()">&#9776;</a>
        </div>
    </div>  

    <style type="text/css">
    	.mobile_view{display: none;}
    	@media screen and (max-width: 768px){
    		.mobile_view{display: block;}
    		.desktop_view{display: none;}
    	}
    	.topnav {
  			    overflow: hidden;
  			    background-color: #0055A5;
  			    border-radius: 2px;
  				}
  			  .topnav a {
                float: left;
  			    display: block;
   			   color: #f2f2f2;
   			   text-align: center;
   			   padding: 5px 16px;
   			   text-decoration: none;
   			   font-size: 15px;
   				}
   			 .topnav a:hover {
   			   background-color: #FF7900;
   			   color: black;
   			   text-decoration: none;
   			 }

   			 .active {
   			   background-color: #0055A5;
   			   color: white;
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
               text-align: left;
             }

           }
    </style>

    <script type="text/javascript">
    	function myFunction1() {
        var x = document.getElementById("Topnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } 
        else {
            x.className = "topnav";
        }
    }
    </script>                             

<!--Mobile View-->
<!--End Sidenav-->
<!--Start content-->
<span class="desktop_view">
	<div class="content" id ="aaa" >
		<img src="http://www.cadnaukri.com/assets/images/img/50-70/Candidate-min.png" style="margin-top: 5px;clear: all;float: right;">
		<!-- <span class="glyphicon glyphicon-user" style="color:orange;"><br><p style="font-size: 14px;clear;">Candidate</p></span> -->
	  <a href=""><h4>Candidate</h4></a>
	</div>
	<div class="content" id ="aaa">
		<img src="http://www.cadnaukri.com/assets/images/img/50-70/Employer-min.png" style="margin-top: 5px;clear: all;float: left;">
		<!-- <span class="glyphicon glyphicon-user" style=""><br><p style="font-size: 14px;">Employer</p></span> -->
	  <h4>Employeer</h4>
	</div>
	<div class="content" id ="aaa">Interns
		<img src="http://www.cadnaukri.com/assets/images/img/50-70/Interns-min.png" style="margin-top: 5px;clear: all;float: left;">
		<!-- <span class="glyphicon glyphicon-user" style=""><br><p style="font-size: 14px;">Interns</p></span> -->
	  <h4>Interns</h4>
	</div>
	<div class="content" id ="aaa">
		<img src="http://www.cadnaukri.com/assets/images/img/50-70/school_cad-min.png" style="margin-top: 5px;clear: all;float: left;">
		<!-- <span class="glyphicon glyphicon-home" style=""><br><p style="font-size: 14px;">School</p></span> -->
	  <h4 style="word-spacing: 5px;">Cad Cam School</h4>
	</div>
	<div class="content" id ="aaa">  NEWS
		<img src="http://www.cadnaukri.com/assets/images/img/50-70/News-&-Events-min.png" id="change" onclick="changeImage()" style="float: right;padding-bottom: 20px;"><h4 style="word-spacing: 5px;">News and Events</h4>
		<!-- <span class="glyphicon glyphicon-book"><br><p style="font-size: 14px;">News</p></span> -->
	  <h2 style="word-spacing: 5px;">News and Events</h2>
	</div>
	<!-- <script type="text/javascript">
		function changeImage(){
			var element=document.getElementById("change")
			element.src="http://www.cadnaukri.com/assets/images/img/50-70/Interns-min.png";
		}
	</script> -->
</span>
<!--End Content-->
<!-- ####################################################################################################-->
</div>
<div class="col-md-6" style="border:1px solid red;background-color: #fff;">	
                            
</div>
<div class="col-md-3">
<!-- ####################################################################################################-->
<!-- Start Sidenav right-->
	<div class="sidenav1 desktop_view" style="word-spacing: 10px;">
		<h4 style="text-align: center;border-bottom: 1px solid lightgrey;margin-bottom: 0px;padding: 5px;">Menu</h4>
	  <a href="#"><span class="glyphicon glyphicon-cog fa-spin"></span> Advertisment control  </a>
	  <a href="#"><span class="glyphicon glyphicon-eye-open" style=""></span> Sponcer's(Home Page)</a>
	  <a href="#"><span class="glyphicon glyphicon-eye-open" style=""></span> Top companies</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	</div>
<!--Mobile view-->
	<div class="mobile_view" style="">
        <div class="topnav" id="Topnav1">
	  <a href="#"><span class="glyphicon glyphicon-cog fa-spin"></span> Advertisment control  </a>
	  <a href="#"><span class="glyphicon glyphicon-eye-open" style=""></span> Sponcer's(Home Page)</a>
	  <a href="#"><span class="glyphicon glyphicon-eye-open" style=""></span> Top companies</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
         <a href="javascript:void(0);" style="font-size:17px;" class="icon" onclick="myFunction2()">&#9776;</a>
        </div>
    </div>

    <style type="text/css">
    	.mobile_view{display: none;}
    	@media screen and (max-width: 768px){
    		.mobile_view{display: block;}
    		.desktop_view{display: none;}
    	}
    	.topnav {
  			    overflow: hidden;
  			    background-color: #0055A5;
  			    border-radius: 2px;
  				}
  			  .topnav a {
                float: left;
  			    display: block;
   			   color: #f2f2f2;
   			   text-align: center;
   			   padding: 5px 16px;
   			   text-decoration: none;
   			   font-size: 15px;
   				}
   			 .topnav a:hover {
   			   background-color: #FF7900;
   			   color: black;
   			   text-decoration: none;
   			 }

   			 .active {
   			   background-color: #0055A5;
   			   color: white;
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
             .topnav.responsive.icon {
               position: absolute;
               right: 0;
               top: 0;
             }
             .topnav.responsive a {
               float: none;
               display: block;
               text-align: left;
             }

           }
    </style>

    <script type="text/javascript">
    	function myFunction2() {
        var y = document.getElementById("Topnav1");
        if (y.className === "topnav") {
            y.className += " responsive";
        } 
        else {
            y.className = "topnav";
        }
    }
    </script>

<!--Mobile View-->

<!--End Sidenav right-->
</div>
</div>
</body>
</html>