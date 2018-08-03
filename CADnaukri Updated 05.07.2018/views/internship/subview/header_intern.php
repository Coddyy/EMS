<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Intern header start-->

        <style>

        body {margin:0;}

        .topnav {
          overflow: hidden;
          background-color: transparent;
          border:0px solid red;
          /*max-width: 400px;*/
          float: right;

        }
        @media screen and (max-width: 768px){
          .topnav {
          overflow: hidden;
          background-color: transparent;
          /*max-width: 400px;*/
          float: none;
        }

        }


        .topnav a  {
          float: left;
          display: block;
          color: #000;
          text-align: center;
          padding: 0px 10px;
          text-decoration: none;
          font-size: 14px;
          border-right: 1px solid #ccc;
          font-weight: bolder;
          color:#FF7900;
          margin-top: 12px;

        }
        @media screen and (max-width: 768px){
          .topnav a  {
          
          display: block;
          color: #000;
          text-align: center;
          padding: 0px 10px;
          text-decoration: none;
          font-size: 14px;
          border-right: 0px solid #ccc;
          font-weight: bolder;
          color:#FF7900;
          margin-top: 12px;
          max-width: 100px;
          margin-bottom: 10px;

        }
        } 

        .topnav a:hover {
          background-color: ;
          color: #0055A5;
        }

        .active {
          background-color: ;
          color: white;
        }

        .topnav .icon {
          display: none;
        }

        @media screen and (max-width: 600px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        @media screen and (max-width: 600px) {
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
        .a_emp{text-align: center;text-transform: uppercase;font-weight:normal;background-color:#0055A5;padding:5px;color:#fff;}
        .a_emp:hover{text-align: center;text-transform: uppercase;font-weight: normal;background-color:#FF7900;padding:5px;color:#fff;}

        .fa{font-size: 20px;color:#77716F;padding: 5px;}
        .fa:hover{color:#FF7900;}
        a.faa{color:#0055A5;font-size: 21px;}
        a.faa:hover{color:#FF7900;font-size: 21px;}
        .logo_img{text-align: left;}
        @media screen and (max-width: 768px){
          .logo_img{text-align: center;}
        }
        a:hover{text-decoration: none;font-size: 15px;}
        </style>

        <div class="container" style="max-width: 992px;margin-top:10px;border:0px solid red;margin-bottom: 2px;" align="center">
          <div class="row">
            <div class="col-md-3 col-xs-12 logo_img" style=""><img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="cadnaukri"" " ></div>
            <div class="col-md-4 col-xs-12" style="border:0px solid red;">
              <div class="row" style="border: 0px solid red; margin-bottom: 22px;">
              <div class="col-md-6 col-xs-12" style="border:0px solid red; text-align: center;">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-google"></i>
                <i class="fa fa-linkedin"></i>  
              </div>
              <div class="col-md-6 col-xs-12" style="border:0px solid red;margin-top: 5px;">  
                <a href="#" class="a_emp" style="">Employers</a>  
              </div>
            </div>


              <div class="col-md-12 col-xs-12" style="border:0px solid red;">
                <div class="topnav" id="topbar">
                    <a class="fa fa-home faa"  style="" href="#"></a>
                    <a href="#" class="active" >Blogs</a>
                    <a href="#">Internships</a> <!-- City-wise Industry-wise -->
                    <a href="#" style="border: none;">Interns</a><!-- sign-up sign-in -->
                    <a href="javascript:void(0);" style="font-size:20px;border:1px solid #0055A5;border-radius: 4px;" class="icon"  onclick="myFunction()">&#9776;</a>
                </div>
              </div>

            </div>

            <div class="col-xs-12 col-md-5" style="border:0px solid red;"><img src="<?php echo base_url();?>assets/images/img/intern/int.jpg"> </div>
          </div>
        </div>

        <div class="container-fluid" style="background-color:#0055A5;font-size: 2px; box-shadow: 1px 2px 1px #cccccc;"> </div>


        <script>
        function myFunction() {
            var x = document.getElementById("topbar");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>

<!--Intern header Ends-->


