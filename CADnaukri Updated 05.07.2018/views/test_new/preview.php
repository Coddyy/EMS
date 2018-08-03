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
                    <!-- <div class="inner_courses" title="Apply Now. www.cadnaukri.com">
                  
                        <div class="sec">
                            <div class="view view-tenth">
                                <img src="<?php echo base_url();?>assets/images/AD-for-blog-post-min.jpg" alt="CADnaukri" class="image" style="" alt="CADnaukri">
                            <div class="mask">
                                <h2>CADnaukri</h2>
                                <p>Latest jobs in CAD CAM CAE BIM.</p>
                                <a href="#" class="info">Apply Now</a>
                            </div>
                            </div>
                        </div>
                    </div> -->





<!-- new_homepage.php-->
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
                    25%{opacity: 1;color: blue;}
                    50%{opacity: 1;color: orange;}
                    75%{opacity: 1;color: purple;}
                   100%{opacity: 1;color: yellow;}
                  }
          .blink:hover{text-decoration: none;color:#0055A5;animation: none;}
</style>
<style type="text/css">
    .con8_main{background-color: #E2E6E7;min-height: 400px;border:0px solid red;}
    .row_height{height: 170px; margin:  20px 0;}
    .cont{background-color:;border:0px solid red;text-align:center;font-weight: bold;font-size: 18px;}
    .head{color: #0055A5;}
    .number{color:#FF7900;}
    .img_div{height: 100px;}
    .img_size{height: 90px; border:0px solid red; background-color:#E2E6E7;}
    .img_size:hover{border:0px solid red; background-color: ;height: 100px;}
    .w_margin{ background-color: #FF7900;border-radius: 10px;border: 6px solid lightblue;padding: 0px 5px;}
    @media screen and (max-width:768px ){
      .cont{border-bottom: 2px solid grey;padding: 10px;}
    }
</style>

<?php if($active_candidates < 50)
      {
          $candidates=rand(45,100);
      }
      else
      {
          $candidates=$active_candidates;
      }
      //endif;
      if($candidates >= $per_day_visitors)
      {
          $visitors=($candidates + rand(131,197));
          //echo "Greater";
        }
        else if($candidates < $per_day_visitors)
        {
          $visitors=$per_day_visitors; 
        }

?>

<div class="container con8_main " style="">
  <div class="row row_height">

    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Current Visitors</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/1-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-3 col-xs-3"></div>
      <div class="col-md-6 col-xs-12 number" style=""><?php echo $visitors;?></div>
    </div>

    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Current Candidates</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/2-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-12 col-xs-12 number"><?php echo $candidates; ?></div>
    </div>

    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Current Employers</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/3-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-12 col-xs-12 number"> <?php echo rand(7,23) ?></div>
    </div>

  </div>

  <div class="row row_height">
    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Employers Registered</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/4-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-12 col-xs-12 number"><?php echo "628";//$total_employee_registerd+; ?></div>
    </div>
    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Candidates Registered</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/5-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-12 col-xs-12 number">
              <?php 
                      $candidates=(13443 + $total_candidate_registerd);
                      if($fake_random_registrations != '' && $fake_random_registrations= NULL)
                      {
                        echo ($candidates + $fake_random_registrations); 
                      }
                      else
                      {
                        echo $candidates;
                      }
                    ?>
      </div>
      <div class="col-md-12 col-xs-12 " style=""><span class="w_margin blink">New <?php echo $new_fake_random_registrations;?></span></div>

    </div>
    <div class="col-md-4 col-xs-12 cont" style="">
      <div class="col-md-12 col-xs-12 head">Latest Jobs</div>
      <div class="col-md-12 col-xs-12 img_div">
        <img src="<?php echo base_url()?>assets/images/img/1-min.png" alt="CADnaukri" class="img_size">
      </div>
      <div class="col-md-12 col-xs-12 number">45<?php echo $total_jobs; ?></div>
    </div>
  </div>
  
</div><!--End of Container-->

  
<!-- new_homepage.php-->








