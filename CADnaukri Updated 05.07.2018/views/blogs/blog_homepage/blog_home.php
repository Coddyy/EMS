<title>Blogs</title>

<style type="text/css">
	
body{background-color:#ECF0F1;}

.navbar-inverse {
    background-color: #34495E;
    border-color: #34495E;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius:0px;
    
}
.navbar-brand {
   
    float: left;
    height:auto;
    padding: 10px 10px;
    font-size: 18px;
    line-height: 20px;
}
.navbar-brand>img{ width:80%;}

.navbar-inverse .navbar-nav > li > a {
    color: #F39C12;
}
.navbar-inverse .navbar-nav > li > a:hover {
   background-color: #009688;
}

.btn-default {
    color: #333;
    background-color: #009688;
    border-color: #009688;
    border-radius:0px;
    color:#fff;
}

#blog-section{margin-top:40px;margin-bottom:80px;}
.content-title{padding:5px;background-color:#fff;}
.content-title h3 a{color:#34495E;text-decoration:none; transition: 0.5s;}
.content-title h3 a:hover{color:#F39C12; }
.content-footer{background-color:#16A085;padding:10px;position: relative;}
.content-footer span a {
    color: #fff;
    display: inline-block;
    padding: 6px 5px;
    text-decoration: none;
    transition: 0.5s;
}
.content-footer span a:hover{     
    color:#F39C12;   
}
aside{
    margin-top: 30px;
    -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
-moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
aside .content-footer>img {
    width: 33px;
    height: 33px;
    border-radius: 100%;
    margin-right: 10px;
    border: 2px solid #fff;
}

.user-ditels {
    width: 300px;
    top: -100px;
    height: 100px;
    padding-bottom: 99px;
    position: absolute;
    border: solid 2px #fff;
    background-color: #34495E;
    right: 25px;
    display: none;
    z-index: 1;
}

@media (max-width:768px){
    .user-ditels {   
    right: 5px;   
}
    
}
.user-small-img{cursor: pointer;}

.content-footer:hover .user-ditels  {
    display: block;
}


.content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
.user-full-ditels h3 {
    color: #fff;
    display: block;
    margin: 0px;
    padding-top: 10px;
    padding-right: 28px;
    text-align: right;
}
.user-full-ditels p{    
    color: #fff;
    display: block;
    margin: 0px;
     padding-right: 20px;
    padding-top: 5px;
   text-align: right;}
.social-icon {
    background-color: #fff;
    margin-top: 10px;
    padding-right: 20px;
    text-align: right;
}
.social-icon>a{font-size:20px;text-decoration:none;padding: 5px;}
.social-icon a:nth-of-type(1){color:#4E71A8;}
.social-icon a:nth-of-type(2){color:#3FA1DA;}
.social-icon a:nth-of-type(3){color:#E3411F;}
.social-icon a:nth-of-type(4){color:#CA3737;}
.social-icon a:nth-of-type(5){color:#3A3A3A;}


/*recent-post-col////////////////////*/
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    margin-top: 30px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;    
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #f1c40f;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}

.recent-post{width: 100%;height: 80px;list-style-type: none;}
.post-img img {
    width: 100px;
    height: 70px;
    float: left;
    margin-right: 15px;
    border: 5px solid #16A085;
    transition: 0.5s;
}

.recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}
.post-img, .recent-post a:hover{color:#F39C12;}
.post-img img:hover{border: 5px solid #F39C12;}

/*===============ARCHIVES////////////////////////////*/



button.accordion {
    background-color: #16A085;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #F39C12;color: #fff;
}

button.accordion:after {
    content: '\002B';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}


/*categories//////////////////////*/

.categories-btn{
    background-color: #F39C12;
    margin-top:30px;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    
}
.categories-btn:after {
    content: '\25BA';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.categories-btn:hover {
    background-color: #16A085;color: #fff;
}

.form-control{border-radius: 0px;}

.btn-warning {
    border-radius: 0px;
    background-color: #F39C12;
    margin-top: 15px;
}
.input-group-addon{border-radius: 0px;}
</style>
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta name="author" content="sumit kumar"> 
	<title>blog</title> 
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
        
        
    </head>

<body>
   
   
    <section id="blog-section" >
     <div class="container">
       <div class="row">
         <div class="col-lg-8">
           <div class="row">
              <div class="col-lg-6 col-md-6">
             <aside>
                <img style="width:304px;height:226px" src="<?php echo base_url();?>application/views/blogs/blog2/de0eafc5-4910-4ab4-9128-c65922bd4434.png" class="img-responsive">
                <div class="content-title" style="background-color: #ffe680;">
				<div class="text-center">
				<h3 style="word-wrap: break-word;"><a style="word-wrap: break-word;" href="<?php echo base_url();?>CAD-CAM-Technology-for-CNC-Manufacturing-&-Metalworking-Machine-Shops">CAD-CAM Technology for CNC Manufacturing & Metalworking Machine Shops</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a> -->                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p style="word-wrap: break-word;">CAD-CAM Technology for CNC Manufacturing & Metalworking Machine Shops</p>
                        </span>
                        <div class="social-icon">
						<a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
						<a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
						<a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
					</div>
                    </div>
				</div>
             </aside>
            </div>
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <img style="width:304px;height:226px" src="<?php echo base_url();?>application/views/blogs/blog3/blog3i.jpg" class="img-responsive">
                <div class="content-title" style="background-color: #ffe680;">
				<div class="text-center" >
				<h3 ><a href="<?php echo base_url();?>CAD-CAM-in-the-dental-practice-Things-you-should-know">CAD/CAM in the dental practice: Things you should know!</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a> -->                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                        <div class="social-icon">
						<a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
						<a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
						<a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
					</div>
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <img style="width:304px;height:226px;" src="<?php echo base_url();?>application/views/blogs/blog4/blog4i.jpg" class="img-responsive">
                <div class="content-title" style="background-color: #ffe680;">
				<div class="text-center">
				<h3><a href="<?php echo base_url();?>Is-SolidWorks-CAM-Better-Than-an-Integrated-System">Is SolidWorks CAM Better Than an Integrated System?</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a> -->                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                        <div class="social-icon">
						<a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
						<a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
						<a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
					</div>
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <img style="width:304px;height:226px;" src="<?php echo base_url();?>application/views/blogs/blog5/blog5i.png" class="img-responsive">
                <div class="content-title" style="background-color: #ffe680;">
				<div class="text-center">
				<h3><a href="<?php echo base_url();?>The-Advantages-of-CAD-CAM-Software-for-3D-Printing">The Advantages of CAD-CAM Software for 3D Printing !!</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a> -->                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                        <div class="social-icon">
						<a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
						<a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
						<a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
					</div>
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-6 col-md-6">
             <aside>
                <img style="width:304px;height:226px;" src="<?php echo base_url();?>application/views/blogs/blog1/main.png" class="img-responsive">
                <div class="content-title" style="background-color: #ffe680;">
				<div class="text-center">
				<h3><a href="#">Want an exciting career- then it’s time to become a Design Engineer</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a> -->                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                        <div class="social-icon">
						<a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
						<a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
						<a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>				
					</div>
                    </div>
				</div>
             </aside>
            </div>       
               
               
           </div>
          </div>
           
<!--           // RECENT POST===========-->
         <div class="col-lg-4">           
               <div class="widget-sidebar">
                 <h2 class="title-widget-sidebar">// RECENT POST</h2>
                   <div class="content-widget-sidebar">
                    <ul>
                     <li class="recent-post">
                        <div class="post-img">
                         <img src="<?php echo base_url();?>application/views/blogs/blog2/de0eafc5-4910-4ab4-9128-c65922bd4434.png" class="img-responsive">
                         </div>
                         <a style="word-wrap: break-word;" href="<?php echo base_url();?>CAD-CAM-Technology-for-CNC-Manufacturing-&-Metalworking-Machine-Shops">CAD-CAM Technology for CNC Manufacturing & Metalworking Machine Shops</a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 01 May 2018</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <img src="<?php echo base_url();?>application/views/blogs/blog3/blog3i.jpg" class="img-responsive">
                         </div>
                         <a href="<?php echo base_url();?>CAD-CAM-in-the-dental-practice-Things-you-should-know">CAD/CAM in the dental practice: Things you should know!</a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 April 2018</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <img src="<?php echo base_url();?>application/views/blogs/blog4/blog4i.jpg" class="img-responsive">
                         </div>
                         <a href="<?php echo base_url();?>Is-SolidWorks-CAM-Better-Than-an-Integrated-System">Is SolidWorks CAM Better Than an Integrated System?</a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 20 April 2018</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         <img src="<?php echo base_url();?>application/views/blogs/blog5/blog5i.png" class="img-responsive">
                         </div>
                         <a href="#"><a href="<?php echo base_url();?>The-Advantages-of-CAD-CAM-Software-for-3D-Printing">The Advantages of CAD-CAM Software for 3D Printing !!</a></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 10 April 2018</small></p>
                        </li>
                        
                        
                    </ul>
                   </div>
                 </div>
             
             
             
        <!--=====================
               CATEGORIES
          ======================-->
             <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">Other</h2>
                 <a href="<?php echo base_url(); ?>CADcat"><button class="categories-btn">CADcat</button></a>
                 <a href="<?php echo base_url(); ?>CAD-CAM-CFD-PLM-Jobs/Rest-of-india"><button class="categories-btn">Jobs</button></a>
                 <a href="<?php echo base_url(); ?>Internships"><button class="categories-btn">Internships</button></a>
                 <a href="<?php echo base_url(); ?>"><button class="categories-btn">Images</button></a>
             </div>  
    </section>
    
    
   
	
	 <script src="js/jquery-3.1.1.js"></script>
	 <script src="js/bootstrap.js"></script>
	 <script>
         $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
         });
         
         
        
      
         
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

       



</body>
</html>