<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
				#flipkart-navbar {background-color: #fff;color: blue;}

			.row1{padding-top: 10px;}

			.row2 {padding-bottom: 20px;}

			.flipkart-navbar-input {padding: 11px 16px;border-radius: 2px 0 0 2px;border: 1px solid #ddd;outline: 50;font-size: 15px;}

			.flipkart-navbar-button {background-color: #ffe11b;border: 1px solid #ffe11b;border-radius: 0 2px 2px 0;color: black;padding: 10px 0;height: 45px;cursor: pointer;}

			.cart-button {
				background-color: #2469d9;
			    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
			    padding: 10px 0;
			    text-align: center;
			    height: 41px;
			    border-radius: 2px;
			    font-weight: 500;
			    width: 120px;
			    display: inline-block;
			    color: #FFFFFF;
			    text-decoration: none;
			    color: inherit;
			    border: none;
			    outline: none;
			}

			.cart-button:hover{
			    text-decoration: none;
			    color: #fff;
			    cursor: pointer;
			}

			.cart-svg {
			    display: inline-block;
			    width: 16px;
			    height: 16px;
			    vertical-align: middle;
			    margin-right: 8px;
			}

			.item-number {
			    border-radius: 3px;
			    background-color: rgba(0, 0, 0, .1);
			    height: 20px;
			    padding: 3px 6px;
			    font-weight: 500;
			    display: inline-block;
			    color: #fff;
			    line-height: 12px;
			    margin-left: 10px;
			}

			.upper-links {
			    display: inline-block;
			    padding: 0 11px;
			    line-height: 23px;
			    font-family: 'Roboto', sans-serif;
			    letter-spacing: 0;
			    color: inherit;
			    border: none;
			    outline: none;
			    font-size: 12px;
			}

			.dropdown {
			    position: relative;
			    display: inline-block;
			    margin-bottom: 0px;
			}

			.dropdown:hover {
			    background-color: #fff;
			}

			.dropdown:hover .links {
			    color: #000;
			}

			.dropdown:hover .dropdown-menu {
			    display: block;
			}

			.dropdown .dropdown-menu {
			    position: absolute;
			    top: 100%;
			    display: none;
			    background-color: #fff;
			    color: #333;
			    left: 0px;
			    border: 0;
			    border-radius: 0;
			    box-shadow: 0 4px 8px -3px #555454;
			    margin: 0;
			    padding: 0px;
			}

			.links {
			    color: #fff;
			    text-decoration: none;
			}

			.links:hover {
			    color: #fff;
			    text-decoration: none;
			}

			.profile-links {
			    font-size: 12px;
			    font-family: 'Roboto', sans-serif;
			    border-bottom: 1px solid #e9e9e9;
			    box-sizing: border-box;
			    display: block;
			    padding: 0 11px;
			    line-height: 23px;
			}

			.profile-li{
			    padding-top: 2px;
			}

			.largenav {
			    display: none;
			}

			.smallnav{
			    display: block;
			}

			.smallsearch{
			    margin-left: 15px;
			    margin-top: 15px;
			}

			.menu{
			    cursor: pointer;
			}

			@media screen and (min-width: 768px) {
			    .largenav {
			        display: block;
			    }
			    .smallnav{
			        display: none;
			    }
			    .smallsearch{
			        margin: 0px;
			    }
			}

			/*Sidenav*/
			.sidenav {
			    height: 100%;
			    width: 0;
			    position: fixed;
			    z-index: 1;
			    top: 0;
			    left: 0;
			    background-color: #fff;
			    overflow-x: hidden;
			    transition: 0.5s;
			    box-shadow: 0 4px 8px -3px #555454;
			    padding-top: 0px;
			}

			.sidenav a {
			    padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    font-size: 25px;
			    color: #818181;
			    display: block;
			    transition: 0.3s
			}

			.sidenav .closebtn {
			    position: absolute;
			    top: 0;
			    right: 25px;
			    font-size: 36px;
			    margin-left: 50px;
			    color: #fff;        
			}

			@media screen and (max-height: 450px) {
			  .sidenav a {font-size: 18px;}
			}

			.sidenav-heading{font-size: 36px;color: #fff;}
			.banner_style{width: 990px;margin-top: -10px;}
			@media screen and (max-width: 768px){
				.banner_style{max-width: 380px;}
			}

</style>

<!--Top Header-->
<div id="flipkart-navbar" >
    <div class="container" style="max-width: 1000px;">
        <div class="row row2">
            <div class="col-sm-3">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ <a href="<?php echo base_url();?>" title="CADnaukri.com" ><img src="<?php echo base_url()?>assets/images/img/Logo-1-min.jpg" alt="CADnaukri"  class="imglogo2" style="" ></a></span></h2>
                <h1 style="margin:0px;"><span class="largenav"><a href="<?php echo base_url();?>" title="CADnaukri.com" ><img src="<?php echo base_url()?>assets/images/img/Logo-1-min.jpg" alt="CADnaukri" class="imglogo1" style="border:;" ></a></span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-9 col-xs-11">
                <div class="row" style="margin-top:20px;">
                    <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Cad Cam Training Institutes" name="">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="1px" height="1px">
                            <span class="glyphicon glyphicon-search search_style"></span>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="#">CAD</a>
    <a href="#">CAM</a>
    <a href="#">CAE</a>
    <a href="#">CATIA</a>
</div>
<!--Top header-->

<div class="container" style="max-width: 1000px;">
	<div class="row">
		<div class="col-md-12 col-xs-12" title="CADnaukri.com" style="border:0px solid red;"><img src="<?php echo base_url()?>assets/images/img/96_720_2-min.png" alt="CADnaukri" class=" img-responsive" width="1000px" style="margin-top: -10px;">
    	</div>
	</div>
</div>
<div class="container" style="max-width: 1000px;border:1px solid #ddd;line-height: 30px;">
 	<div class="row">
 	<div class="col-md-12 col-xs-12 top-div" style="font-size: 20px;font-weight: 500;">Company Name</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-map-marker" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>Location</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-calendar" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>Year of Estd.</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-phone" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>(+ 91 9999999999)</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-phone-alt" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>LandLine</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-envelope" style="font-size:22px;color:#FF7900;padding:0 10px;" ></span>Email</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-earphone" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>(+ 91 9999999999)</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-home" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>Address</div>
 	<div class="col-md-12 col-xs-12 top-div"><span class="glyphicon glyphicon-book" style="font-size:22px;color:#FF7900;padding:0 10px;"></span>Course Offered</div>
 </div>
 </div>


<script type="text/javascript">
	function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>

