	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	logo{background-color: red;}
</style>


<!--Start-->

	<!DOCTYPE html>
<html>
<head>
<style>
			body {
			    font-family: "Lato", sans-serif;
			}
			.desktop_head{
				height: 60px;
			    width: 100%;
			    position: fixed;
			    z-index: 1;
			   /* top: 60px;*/
			    left: 300;
			    background-color:lightgreen;
			    overflow-x: hidden;
			    padding-top: 10px;
			    text-align: center;
			    font-size: 30px;
			    word-spacing: 50px;    
			}
			.desktop_head a {			    
			    text-decoration: none;		    
			}
			@media screen and (max-width: 768px){
				.desktop_head{display: none;}
			}
			.desktop_head1{
				height: 30px;
			    width: 100%;
			    position: fixed;
			    z-index: 1;
			    top: 60px;
			    left:0;
			    background-color:lightgreen;
			    overflow-x: hidden;
			    padding-top: 5px;
			    text-align: center;
			    font-size: 16px;
			    word-spacing: 10px;
			    font-weight: 200px;    
			}
			.desktop_head1 a {			    
			    text-decoration: none;		    
			}
			@media screen and (max-width: 768px){
				/*.desktop_head1{display: none;}*/
			}

			.logo {
			    height:60px;
			    max-width: 300px;
			    position: fixed;
			    z-index: 1;
			    /*top: -20;*/
			    /*left:20;*/
			    background-color: #fff;
			    overflow-x: hidden;
			    /*padding-top: 20px;*/
			    text-align: center;

			}
			.sidenav {
			    height: 100%;
			    width: 200px;
			    position: fixed;
			    z-index: 1;
			    top: 60px;
			    left: 0;
			    background-color: lightblue;
			    border:1px solid #ddd;
			    border-width: 8px;
			    border-radius: 4px;
			    overflow-x: hidden;
			    padding-top: 0px;

			}
			@media screen and (max-width: 768px){
				.sidenav{display: none;}
				.sidenav-right{display: none;}
			}

			.sidenav a {
			    padding: 10px 5px;
			    text-decoration: none;
			    font-size: 18px;
			    color: #818181;
			    display: block;
			    border:1px solid red;
			    margin-bottom: 5px;
			}

			.sidenav a:hover {
			    color: #ddd;
			    background-color: #000;
			}
			.sidenav-right{
				height: 100%;
			    width: 200px;
			    position: fixed;
			    z-index: 1;
			    top: 60px;
			    left: 1700px;
			    background-color: lightblue;
			    border:1px solid #ddd;
			    border-width: 8px;
			    border-radius: 4px;
			    overflow-x: hidden;
			    padding-top: 0px;
			}
			.sidenav-right a {
			    padding: 6px 8px 6px 16px;
			    text-decoration: none;
			    font-size: 25px;
			    color: #818181;
			    display: block;
			    border:1px solid red;
			    margin-bottom: 5px;
			}
			.sidenav-right a:hover {
			    color: #ddd;
			    background-color: #000;
			}

			.main {
			    margin-left: 200px; /* Same as the width of the sidenav */
			    font-size: 28px; /* Increased text to enable scrolling */
			    max-width: 1500px;
			    padding: 0px 10px;
			    margin-top: 75px;
			}

			@media screen and (max-width: 768px){
				.main{margin-left: 0px;margin-top: 130px;}
			}
			/*@media screen and (max-height: 450px) {
			    .sidenav {padding-top: 15px;}
			    .sidenav a {font-size: 18px;}
			}*/
</style>
</head>
<body>
<div class="container-fluid " style="">
	<div class="row">
		<div class="col-md-3 col-xs-12 logo"><center><img class="img-responsive" alt="Cadnaukri Logo" src="http://www.cadnaukri.com/assets/images/logo.png"></center></div>
		<div class="col-md-9 col-xs-12 desktop_head">
			<a href="#">Candidate</a>
	  		<a href="#">Employer</a>
	  		<a href="#">Intern</a>
	  		<a href="#">School</a>
		</div>
		<div class="col-md-9 col-sm-12 mobile_view desktop_head1">
			<a href="#">Candidate</a>
	  		<a href="#">Employer</a>
	  		<a href="#">Intern</a>
	  		<a href="#">School</a>
		</div>
	</div>
</div>
<!--Desktop View-->
<div class="sidenav">
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
</div>
<!--Desktop view-->
<!--Mobile View-->
	<div class="mobile_view" style="margin-top:90px;min-width: 100%; position: fixed;">
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

<div class="sidenav-right">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <h2>Sidebar</h2>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Scroll down the page to see the result.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p><p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>


</div>
     
</body>
</html> 


<!--End-->