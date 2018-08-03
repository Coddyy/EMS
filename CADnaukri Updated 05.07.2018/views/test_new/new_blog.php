
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.fasmall {
  padding: 10px;
  font-size: 11.5px;
  width: 32.5px;
  text-align: center;
  text-decoration: none;
  margin: 2.5px 1px;
  border-radius: 50%;
}
.fa {
  padding: 20px;
  font-size: 23px;
  width: 65px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa1:hover {
    opacity: 0.5;
    text-decoration: none;
    color: #FFF;
    font-size: 15px;
    padding: 24px;
	width: 65px;
	text-align: center; 
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
p {
	font-family: "Helvetica Neue";
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 21.6px;
}
</style>
<style type="text/css">
.title{font-size: 36px;margin-top: 10px;margin-left: 200px;}

@media screen and (max-width: 768px){
	.title{font-size: 36px;margin-top: 10px;margin-left: 100px;}
}	
	.advertise{height:360px;width: 370px;border:0px solid #999;}
	.advertise1{height:0px;}
	.desktop{visibility: visible;}
	.mobile{height: 0px;visibility: hidden;}
	@media screen and (max-width: 768px){
		.desktop{visibility: hidden;height: 0px;}
		.mobile{visibility: visible;height: auto;}
		.advertise1{height:360px;width: 370px;border:0px solid #999;}
	}
	
}
</style>
<!--Start Blog Container-->
	<div class="container" style="background-color: #999;">
		<p style="" class="title"> Blog Title</p>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border:0px solid red;">
				<img src="<?php echo base_url()?>assets/images/blogging.png" style="height: 360px;width: 100%;" class="img-responsive" >
			</div>
			<div class="col-md-2 col-lg-2 col-xs-12 desktop" style="">
				<div class="row" style="margin-left: 30px;"><p style="margin-left: 15px;">Follow Us</p>

					<div class="col-md-12 col-lg-12 col-xs-12"><a href="#" class="fa1 fa fa-facebook"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="#" class="fa1 fa fa-twitter"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="#" class="fa1 fa fa-google"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="#" class="fa1 fa fa-linkedin"></a></div>
				</div>
			</div>

			<div class="col-md-3 col-lg-3 col-xs-12 desktop" style="border:0px solid red;"><p style="margin-top: -30px;margin-left: 140px;">Advertisement</p>
				<img src="<?php echo base_url();?>assets/images/blog_ad.jpg" alt="CADnaukri" class="advertise" style="" alt="CADnaukri">
				
			</div>
<p class="mobile" style="margin-left: 14px;border:1px solid red;">Image Discription : </p>
			<div class="row mobile">
				<p style="margin-left: 32px;">Follow Us</p>
				<div class="col-xs-3 mobile"><a href="#" class="fa1 fa fa-facebook"></a></div>
				<div class="col-xs-3 mobile"><a href="#" class="fa1 fa fa-twitter"></a></div>
				<div class="col-xs-3 mobile"><a href="#" class="fa1 fa fa-google"></a></div>
				<div class="col-xs-3 mobile"><a href="#" class="fa1 fa fa-linkedin"></a></div>
			</div>

		</div>
		
<p class="desktop">Image Discription : </p>
		<h4>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;">Blogger Name:<span>xyz</span></div>
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;">Post Date:<span>11/11/2017</span></div>
			</div>
		</h4>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xs-12">
				<h3 style="font-family: Helvetica Neue; font-weight: bold;" >Article Description : </h3>
				<p style="text-align: justify;">Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam  erat.
                <span data-toggle="collapse" data-target="#view" align="right" id="h" style="color: #0055A5;cursor:progress" class="btn1">Read more..</span></p>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $(".btn1").hide();
    });
    $(".btn2").click(function(){
        $(".btn1").show();
    });
});
</script>

				
            	<p id="view" class="collapse" style="text-align: justify;">
            		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
				    <span data-toggle="collapse" data-target="#view" align="right" class="btn2" style="color: #0055A5;cursor:progress">less..</p>
				</p>	
            </div>
		</div>

<style type="text/css">
.fa2{font-size: 26px;}
.fa2:hover{text-decoration: none;font-size: 30px;}
</style>
		<div class="row mobile">
			<div class="col-xs-12 " style=""><img src="<?php echo base_url();?>assets/images/cadnaukri_blog_ad.jpg" alt="CADnaukri" class="advertise1" style="" alt="CADnaukri">
			</div>
		</div>
<!-- <div class="col-md-3 col-xs-12 mobile " style="border:0px solid red;"><img src="<?php echo base_url();?>assets/images/blog_ad.jpg" alt="CADnaukri" class="advertise" style="" alt="CADnaukri">
			</div> -->

		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border: 0px solid;height: 150px;">
				<div class="col-md-3 col-lg-3 col-xs-12" style="font-size: 18px;padding-top: 25px;text-align: center;">Share Now:</div>
				
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="#" class="fa2 fa fa-facebook-square" style=""></a></div>

				<div class="col-md-2 col-lg-2 col-xs-3"><a href="#" class="fa2 fa fa-twitter-square"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="#" class="fa2 fa fa-google-plus"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="#" class="fa2 fa fa-linkedin-square"></a></div>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 desktop" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="78" name="comment" form="usrform">Enter text here...</textarea>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 mobile" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="50" name="comment" form="usrform">Enter text here...</textarea>
			</div>
			
		</div>

		<!-- <div class="row">
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red; width: 385;height: 155"><img src="<?php echo base_url();?>assets/images/6.jpg" alt="CADnaukri" class="" style="" alt="CADnaukri" align="center"></div>
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red; width: 385;height: 155"><img src="<?php echo base_url();?>assets/images/1.jpg" alt="CADnaukri" class="" style="" alt="CADnaukri" align="center"></div>
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red; width: 385;height: 155"><img src="<?php echo base_url();?>assets/images/8.jpg" alt="CADnaukri" class="" style="" alt="CADnaukri" align="center"></div>
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red; width: 385;height: 155"><img src="<?php echo base_url();?>assets/images/9.jpg" alt="CADnaukri" class="" style="" alt="CADnaukri" align="center"></div>
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red; width: 385;height: 155"><img src="<?php echo base_url();?>assets/images/1.jpg" alt="CADnaukri" class="" style="" alt="CADnaukri" align="center"></div>
			<div class="col-md-4 col-xs-12 desktop" style="border:1px solid red;"><img src="<?php echo base_url();?>assets/images/10.jpg" alt="CADnaukri" class="" style="display: block; width: 385;height: 155" alt="CADnaukri" align="center"></div>
			
		</div> -->
<!-- Blog Bottom-->
<style>
div.gallery {
    margin: 5px;
    border: 1px solid blue;
    float: left;
    width: 275px;
}

div.gallery:hover {
    border: 1px solid red;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="<?php echo base_url();?>assets/images/10.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="<?php echo base_url();?>assets/images/6.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="<?php echo base_url();?>assets/images/2.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="#">
    <img src="<?php echo base_url();?>assets/images/8.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<!--Blog Buttom-->



		<div class="row">
			<div class="col-xs-12 mobile"><img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri" class="" style="width: 100%;" alt="CADnaukri"></div>
			
		</div>

	</div><!--End Blog container-->

<!--End Blog Container-->
