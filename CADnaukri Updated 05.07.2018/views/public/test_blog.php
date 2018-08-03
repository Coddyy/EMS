
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>
<?php 
    foreach($blog_details as $key)
    { 
      echo $key->blog_title; 
    } ?> &nbsp- CADnaukri.com
</title>
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
		.title{font-size: 26px;margin-top: 10px;font-weight: bold;}
		@media screen and (max-width: 768px){
			p.title{font-size:18px;margin-left: -5px;}
		}

		@media screen and (max-width: 768px){
			.title{font-size: 36px;margin-top: 10px;margin-left: 100px;}
		}	
			.advertise{height:360px;width: 360px;border:0px solid #999;}
			.advertise1{height:0px;}
			.desktop{visibility: visible;}
			.mobile{height: 0px;visibility: hidden;}
			@media screen and (max-width: 768px){
				.desktop{visibility: hidden;height: 0px;width: 0px;}
				.mobile{visibility: visible;height: auto;}
				.advertise1{height:360px;width: 370px;border:0px solid #999;}
			}
			
		}
	</style>

<?php foreach ($blog_details as $key) { 

	$blog_title=$key->blog_title;
	//echo $key->image_desc;
	$picture=$key->image;
	$pic="blogimage/".$picture;
?>
<!--Start Blog Container-->
<style type="text/css">
		/*spin*/
			/*.overlay{
				opacity: 0;
				margin-top:-50px;
				text-align: center;
				color: #fff;
				height: 40px;
				}
			.main:hover .overlay{
				opacity: 1;
				font-size:18px;
			}
			#spin {
			    margin: auto;
			    border: 1px solid black;
			    margin-top:-30px;
			    margin-left: 0px;
			    background-color:;
			    -webkit-animation: mymove 2s infinite;
			    animation: mymove 2s infinite;
			    animation-direction: alternate;
				}
			#spin:hover {
			    margin: auto;
			    border: 1px solid black;
			    margin-top:-30px;
			    margin-left: 0px;
			    
			    background-color:;
			    
			    -webkit-animation: mymove 0s infinite;
			    animation: mymove 0s infinite;
			    animation-direction: alternate;
			}

			@keyframes mymove {
			    0% {transform: rotate(360deg);}

				}
			button{color: #FF7900;background-color: #0055A5;border-radius: 10px;padding: 8px 10px;
		    	text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
		    	}
		    button:hover{color: #0055A5;background-color: #FF7900;border-radius: 10px;padding: 8px 10px;font-size: 20px;
		    	text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
		    	}*/
		/*spin*/

			/*.image {
		  display: block;
		  width: 100%;
		  height: 360px;
		}*/

		/*.image:hover {
			width: 200px;
		  height: 200px;
		}*/
</style>
<style type="text/css">
/*Advertisment area start*/
        .inner_courses
        {
            /*width:1100px;
            height:auto;
            float:left;*/
        }
        .inner_courses .sec
        {
            width:300px;
            height:360px;
            float:left;
            margin:0px;
            border: 1px solid #e8e8e8;
            background-color: #FFFFFF;
            border-radius:6px;
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            -ms-border-radius:6px;
            padding:10px;
        }
        .view-tenth img {
           -webkit-transform: scaleY(1);
           -moz-transform: scaleY(1);
           -o-transform: scaleY(1);
           -ms-transform: scaleY(1);
           transform: scaleY(1);
           -webkit-transition: all 0.7s ease-in-out;
           -moz-transition: all 0.7s ease-in-out;
           -o-transition: all 0.7s ease-in-out;
           -ms-transition: all 0.7s ease-in-out;
           transition: all 0.7s ease-in-out;
        }
        .view-tenth .mask {
           background-color: #0055A5;
           -webkit-transition: all 0.5s linear;
           -moz-transition: all 0.5s linear;
           -o-transition: all 0.5s linear;
           -ms-transition: all 0.5s linear;
           transition: all 0.5s linear;
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
           filter: alpha(opacity=0);
           opacity: 0;
        }
        .view-tenth h2 {
           border-bottom:1px solid #63b5d9;
           background: transparent;
           margin: 20px 40px 0px 40px;
           -webkit-transform: scale(0);
           -moz-transform: scale(0);
           -o-transform: scale(0);
           -ms-transform: scale(0);
           transform: scaleY(10);
           color: #333;
           -webkit-transition: all 0.5s linear;
           -moz-transition: all 0.5s linear;
           -o-transition: all 0.5s linear;
           -ms-transition: all 0.5s linear;
           transition: all 1s linear;
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
           filter: alpha(opacity=0);
           opacity: 0;
        }
        .view-tenth p {
           color: #333;
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
           filter: alpha(opacity=0);
           opacity: 0;
           -webkit-transform: scale(0);
           -moz-transform: scale(0);
           -o-transform: scale(0);
           -ms-transform: scale(0);
           transform: scaleX(2);
           -webkit-transition: all 0.5s linear;
           -moz-transition: all 0.5s linear;
           -o-transition: all 0.5s linear;
           -ms-transition: all 0.5s linear;
           transition: all 1s linear;
        }
        .view-tenth a.info {
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
           filter: alpha(opacity=0);
           opacity: 0;
           -webkit-transform: scale(0);
           -moz-transform: scale(0);
           -o-transform: scale(0);
           -ms-transform: scale(0);
           transform: scale(0);
           -webkit-transition: all 0.5s linear;
           -moz-transition: all 0.5s linear;
           -o-transition: all 0.5s linear;
           -ms-transition: all 0.5s linear;
           transition: all 0.5s linear;
        }
        .view-tenth:hover img {
           -webkit-transform: scale(10);
           -moz-transform: scale(10);
           -o-transform: scale(10);
           -ms-transform: scale(10);
           transform: scale(10);
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
           filter: alpha(opacity=0);
           opacity: 0;
        }
        .view-tenth:hover .mask {
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
           filter: alpha(opacity=100);
           opacity: 1;
        }
        .view-tenth:hover h2,.view-tenth:hover p,.view-tenth:hover a.info {
           -webkit-transform: scale(1);
           -moz-transform: scale(1);
           -o-transform: scale(1);
           -ms-transform: scale(1);
           transform: scale(1);
           -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
           filter: alpha(opacity=100);
           opacity: 1;
        }
        .view {
           width:280px;
           height: 340px;
           float: left;
           overflow: hidden;
           position: relative;
           text-align: center;
           -webkit-box-shadow: 1px 1px 2px #e6e6e6;
           -moz-box-shadow: 1px 1px 2px #e6e6e6;
           box-shadow: 1px 1px 2px #e6e6e6;
           cursor:pointer;
        }
        .view .mask,.view .content {
           width: 280px;
           height: 340px;
           position: absolute;
           overflow: hidden;
           top: 0;
           left: 0;
        }
        .view img {
           display: block;
           position: relative;
        }
        .view h2 {
           /*text-transform: uppercase;*/
           color: #fff;
           text-align: center;
           position: relative;
           font-size: 17px;
           padding:10px;
           /*margin: 20px 0 0 0;*/
           font-family: 'Open Sans', sans-serif;
        }
        .view p {
           font-size: 14px;
           position: relative;
           color: #fff;
           padding: 10px 20px 20px;
           text-align: center;
        }
        .view a.info {
           display: inline-block;
           text-decoration: none;
           padding: 7px 14px;
           background: #61aaca;
           color: #fff;
           text-transform: uppercase;
           -webkit-box-shadow: 0 0 1px #4289a9;
           -moz-box-shadow: 0 0 1px #4289a9;
           box-shadow: 0 0 1px #4289a9;
           border-radius:6px;
           font-family: 'Open Sans', sans-serif;
        }
        .view a.info:hover {
           -webkit-box-shadow: 0 0 5px #4289a9;
           -moz-box-shadow: 0 0 5px #4289a9;
           box-shadow: 0 0 5px #4289a9;
           background: #ff8400;
        }
        .marlt
        {
            margin-left:193px;
        }
        /*Advertisment area end*/
</style>



	<div class="container" style="border:0px solid black;background-color: #E2E6E7;">
		<p style="" class="title" style=""><?php echo $blog_title; ?></p>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border:0px solid red;" title="<?php echo $key->image_desc; ?>-www.cadnaukri.com">
				<img src="<?php echo base_url($pic)?>" style="height: 360px;width: 100%;" class="img-responsive" ><br>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;font-weight: bold;"><span>Blogger : <a href="https://in.linkedin.com/in/shantiswarup-mahapatra"><?php echo $key->blogger_name; ?></a></span></div>
            <div class="col-md-12 col-lg-12 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;"> <b>Date Posted :</b> <span><?php 

              $date=explode(' ',$key->created);
              
              echo date("d F Y",strtotime($date[0])); 
              //echo $key->blog_id;
            ?></span></div>
        </div>



			</div>
			<div class="col-md-2 col-lg-2 col-xs-12 desktop" style="border:0px solid green;">
				<div class="row" style="margin-left: 30px;"><p style="margin-left: 15px;">Follow Us</p>

					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://www.facebook.com/CADnaukri" class="fa1 fa fa-facebook" title="facebook.com"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://twitter.com/cadnaukri" class="fa1 fa fa-twitter" title="twitter.com"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://plus.google.com/+CADnaukri" class="fa1 fa fa-google" title="google.com"></a></div>
					<div class="col-md-12 col-lg-12 col-xs-12"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa1 fa fa-linkedin" title="linkedin.com"></a></div>
				</div>
			</div>

			<div class="col-md-4 col-lg-4 col-xs-12 desktop main" style="border:0px solid green;">
        <p style="margin-top: -30px;margin-left: 0px;font-size: 18px;" class="small"> <!-- Advertisement --></p>
					
					<!--test-->
          <style type="text/css">
          .b{font-size: 25px;margin-left: 38px;visibility: hidden;margin-top: -30px;}
            .view:hover>.a{visibility: hidden;}.view:hover>.b{visibility: visible;},
          
          </style>
				<div class="col-md-12" style="margin-left: -10px;">
					<div class="inner_courses" title="Apply Now - www.cadnaukri.com">    
              <div class="sec">
                  <div class="view view-tenth">
                    	<img src="<?php echo base_url();?>assets/images/AD-for-blog-post-min.jpg" alt="CADnaukri" class="image" style="" alt="CADnaukri">
                        		<div class="mask">
                          			<h2>CADnaukri</h2>
                            		<p>Latest jobs in CAD CAM CAE BIM.</p>
                            		<a href="<?php echo base_url();?>candidate/login" class="info">Apply Now</a>
                        		</div>
                            <div class="small a" style="font-size: 25px;margin-left: 38px;">Advertisement</div>
                            <div class="small b" style="">Sign up</div>
                  </div>
              </div>          
          </div>
        </div>
        <div class="col-md-12" style="margin-left: -10px;">
          <i class="fa fa-eye" aria-hidden="true" style="margin-top: -10px;"></i><?php echo $key->views;?>
        </div>
					<!--test-->
                  <!-- <i class="fa fa-eye" aria-hidden="true" style="margin-top: -10px;"></i><?php echo $key->views;?> -->

				<!--<img src="<?php echo base_url();?>assets/images/AD-for-blog-post-min.jpg" alt="CADnaukri" class="advertise" style="" alt="CADnaukri"> 

				<div class="overlay">
					<a href="<?php //echo base_url()?>/candidate/login"><button class="btn1" id="spin">Sign up</button></a>
				</div> -->


				
			</div>
			
			
			<span class="mobile" style="border:0px solid red;margin-left: 0px;display: inline-block;"><?php echo $key->image_desc; ?></span>
			<div class="row mobile">
				<p style="margin-left: 32px;">Follow Us</p>
				<div class="col-xs-3 mobile"><a href="https://www.facebook.com/CADnaukri" class="fa1 fa fa-facebook"></a></div>
				<div class="col-xs-3 mobile"><a href="https://twitter.com/cadnaukri" class="fa1 fa fa-twitter"></a></div>
				<div class="col-xs-3 mobile"><a href="https://plus.google.com/+CADnaukri" class="fa1 fa fa-google"></a></div>
				<div class="col-xs-3 mobile"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa1 fa fa-linkedin"></a></div>
			</div>
		</div>
		
		<!-- <p class="desktop" style="margin-top: -30px;border:0px solid red;font-size: 16px;font-family: Garamond;"><?php echo $key->image_desc; ?></p> -->
		<!-- <h4> -->
  
			<!-- <div class="row">
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;font-weight: bold;"><span><?php echo $key->blogger_name; ?></span></div>
				<div class="col-md-4 col-lg-4 col-xs-12" style="border:0px solid red;height: 30px;font-size: 16px;font-family: Garamond;font-weight: bold;">Post Date:<span><?php 

					$date=explode(' ',$key->created);
					
					echo date("d F Y",strtotime($date[0])); 
					//echo $key->blog_id;
				?></span></div>
			</div> -->

		<!-- </h4> -->
<style type="text/css">
  .blog_desc{margin-top: -10px}
  @media screen and (max-width: 768px){
    .blog_desc{margin-top:0px;}
  }
</style>

		<div class="row" style="border: 0px solid red;">
			<div class="col-md-12 col-lg-12 col-xs-12 blog_desc" style="">

				<h3 style="font-family: Helvetica Neue; font-weight: bold;" > </h3>

					<p style="text-align: justify;"><?php echo $key->description; ?>
                		<span data-toggle="collapse" data-target="#view" align="right" style="color: #0055A5;cursor:progress" class="btn1"><br>Read more..
                		</span>
            		</p>
			
            	<div id="view" class="collapse" style="text-align: justify;">
            		<!-- <?php echo $key->blog_id;; ?> -->
            		   

            		<?php 

            		$content=$this->Blog_M->get_contents($key->blog_id);
            		foreach ($content as $keycontent) 
            		{ 
            			$color=$keycontent->color;
            			$title=$keycontent->is_title;
            			if($title == 'YES')
            			{
            				$type='bold';
            			}
            			else
            			{
            				$type='normal';
            			}
            			?>
            			<p style="font-weight:<?php echo $type; ?>;color:<?php echo $color; ?>;"><?php echo $keycontent->content;?></p>

            		<?php } ?>








				    	<span data-toggle="collapse" data-target="#view" align="right" class="btn2" style="color: #0055A5;cursor:progress">less..</span>
				    </div>
					
            </div>
		</div>

<style type="text/css">
.fa2{font-size: 26px;}
.fa2:hover{text-decoration: none;font-size: 30px;}

</style>
		<div class="row mobile main">
			<div class="col-xs-12" style="">
				<a href="<?php echo base_url()?>/candidate/login">	<img src="<?php echo base_url();?>assets/images/AD-for-blog-post-min.jpg" alt="CADnaukri" class="advertise1" style="width: 100%;" alt="CADnaukri"></a>

				<!-- <div class="overlay">
					<a href="<?php //echo base_url()?>/candidate/login"><button class="btn1" id="spin">Sign up</button></a>
				</div> -->

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xs-12" style="border: 0px solid;height: 150px;">
				<div class="col-md-4 col-lg-4 col-xs-12" style="margin-left: 0px;font-size: 18px;padding-top: 25px;text-align: ;">Share Now :</div>

				
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://www.facebook.com/CADnaukri" class="fa2 fa fa-facebook-square" style=""></a></div>

				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://twitter.com/cadnaukri" class="fa2 fa fa-twitter-square"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://plus.google.com/+CADnaukri" class="fa2 fa fa-google-plus"></a></div>
				<div class="col-md-2 col-lg-2 col-xs-3"><a href="https://www.linkedin.com/company/cadnaukri-com" class="fa2 fa fa-linkedin-square"></a></div>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 desktop" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="76" name="comment" form="usrform" class="desktop" >Enter text here...</textarea>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 mobile" style="border: 0px solid;">
				<h4>Comment :</h4>
				<textarea rows="5" cols="50" name="comment" form="usrform">Enter text here...</textarea>
			</div>
			
		</div>

		
<!-- Blog Bottom-->
	<style>
		div.gallery {
		    margin: 5px;
		    border: 1px solid red;
		    float:left;
		    width: 312px;
		}

		div.gallery:hover {
		    border: 1px solid blue;
		}

		div.gallery img {
		    width: 100%;
		    height: 120px;
		}

		div.des {
		    padding: 15px;
		    text-align: center;
		}

		.button {
		    background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding:10px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		}

	</style>

		<!-- <div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/10.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/2.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/8.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>


		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/10.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<div class="gallery desktop">
		  <a target="_blank" href="#">
		    <img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri">
		  </a>
		  <div class="des">Add a description of the image here</div>
		</div>

		<button class="button pull-right desktop">More Articles</button>

		<div class="row">
			<div class="col-xs-12 mobile"><img src="<?php echo base_url();?>assets/images/3.jpg" alt="CADnaukri" class="" style="width: 100%;" alt="CADnaukri">
			</div>			
		</div>
		<button class="button pull-right mobile">More Articles</button> -->
	</div>
	<!--End Blog container-->
	<div class="container-fluid">
		<div class="footer">
		  	<a target="_blank" href="#">
		    	<img src="<?php echo base_url();?>assets/images/8.jpg" style="width: 100%;height: 120px;" alt="CADnaukri">
		  	</a>
		  	<!-- <div class="des">Banner</div> -->
		</div>
	</div>
<style type="text/css">
div.footer {
		    margin: 5px;
		    border: 1px solid red;
		    float:left;
		    width: 100%;
		}
</style>
<!--End Blog Container-->
<?php } ?> <!--End Foreach() -->
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
