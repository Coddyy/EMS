<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<title>Site Map</title>
<style type="text/css">
   .footer-section {
    background: ;
    color: #666666;
    padding: 5em 0;
    
}
footer img {
    border: 1px solid #666666;
    padding: 8px;
}
.footer-column b {
   color:  #669933;
}
.footer-column h4 {
    font-size: 2em;
    margin-bottom: .5em;
    color:blue;
}
.footer-column p {
    font-size: .96em;
    line-height: 1.8em;
}
footer.footer-column ul, li, a {
   font-size: 16px;
    text-decoration: none;
    list-style: none;
    color: orange;
    padding: 5px;
}
.footer-column input {
   color: inherit;
   background-color: #353535;
   padding: 8px;
   border: 0;
   border-radius: 5px;
   margin: 8px;
}
.footer-column button {
   display: inline-block;
   justify-content: left;
   margin-right: 70%;
   margin-left: 3%;
   padding: 7px;
   color: #ffffff;
   background-color: #7c9c37;
   border: 0;
   border-radius: 6px;
}
.footer-bottom-area {
   padding: 12px 2%;
   background-color: ;
   border-top: 2px solid #000;
}
.footer-bottom-area p {
   color: #666666;
}
</style>
<footer>
         <div class="footer-section">
            <div class="container wow fadeInUp">
               <div class="footer-four-columns">
                  <div class="col-md-3 footer-column wow fadeInUp">
                     <h4>About us</h4>
                     <!-- <img class="img-responsive" src="https://ak1.picdn.net/shutterstock/videos/2880220/thumb/4.jpg" alt="img"> -->
                     <iframe width="257" height="154" src="https://www.youtube.com/embed/d_Zvxqe6bQs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     <!-- <iframe width="257" height="154" src="https://www.youtube.com/embed/w_HkAiuHSWg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->

                     <p>The story behind this job portal, its genesis and the founder's strong pitch for special attention to the design industry's needs through CADnaukri.</p>
                     <br><a href="<?php echo base_url();?>About-Us"><b style="color:blue;"> Read More <i class="fa fa-angle-double-right"></i></b></a>
                  </div>
                  <div class="col-md-3 footer-column wow fadeInUp">
                     <h4>Users</h4>
                     <ul>
                        <li><a href="<?php echo base_url('employer/dashboard');?>">Upgrade Services</a></li>
                        <li><a href="<?php echo base_url('employer/login');?>">Employer | Signup</a></li>
                        <li><a href="<?php echo base_url('employer/login');?>">Employer | Signin</a></li>
                        <li><a href="<?php echo base_url('employer/post_ad');?>">Employer | Post your AD</a></li>
                        <li><a href="<?php echo base_url('Employer/Application-Recieved');?>">Employer | Track applications</a></li>

                        <li><a href="<?php echo base_url('candidate/login');?>">Candidate | Signup</a></li>
                        <li><a href="<?php echo base_url('candidate/login');?>">Candidate | Signin</a></li>
                        <li><a href="<?php echo base_url('candidate/update_cv');?>">Candidate | Upload CV</a></li>
                        <li><a href="<?php echo base_url('candidate/view_saved_jobs');?>">Candidate | Track jobs</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 footer-column wow fadeInUp">
                     <h4>Popular jobs</h4>
                     <!-- <p><b class="col3">Post Title</b><br>
                        Friday, 6th April 2000 Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. 
                        <br><b> Read More <i class="fa fa-angle-double-right"></i></b>
                     </p>
                     <p><b class="col3">Post Title</b><br>
                        Friday, 6th April 2000 Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. 
                        <br><b> Read More <i class="fa fa-angle-double-right"></i></b>
                     </p> -->
                     <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Pune');?>">Jobs in Pune</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Chennai');?>">Jobs in Chennai</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Hyderabad')?>">Jobs in Hyderabad</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Bangalore')?>">Jobs in Bengaluru</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Ahmedabad')?>">Jobs in Ahmedabad</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Bhubaneswar')?>">Jobs in Bhubaneswar</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Mumbai')?>">Jobs in Mumbai</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Delhi')?>">Jobs in Delhi NCR</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Indore')?>">Jobs in Indore</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Surat')?>">Jobs in Surat</a></li>
                        <li><a href="<?php echo base_url('CAD-CAM-CFD-PLM-Jobs/Rest-of-india')?>">Jobs in India</a></li>
                  </div>
                  <div class="col-md-3 footer-column wow fadeInUp">
                     <h4>Contact us</h4>
                     <!-- <p>
                        Tel: xxxxx xxxxxxxxxx <br>
                        Fax: xxxxx xxxxxxxxxx <br>
                        Email:  <b>contact@mydomain.com</b><br>
                     </p> -->
                     <!-- <h3> NEWSLETTER </h3>
                     <div class="form">
                        <input type="text" placeholder="Name" name="">
                        <input type="Email" placeholder="Email" name=""><br>
                        <button> SUBMIT </button> 
                     </div> -->
                     <li><a href="<?php echo base_url('About-Us');?>">About company</a></li>
                        <li><a href="#">Our team</a></li>
                        <li><a href="<?php echo base_url('Contact-Us');?>">Contact us</a></li>
                        <li><a href="<?php echo base_url('Terms-And-Conditions');?>">Terms & conditions</a></li>
                        <li><a href="<?php echo base_url('Privacy-Policy');?>">Privacy policy</a></li>
                        <li><a href="<?php echo base_url('Disclaimer');?>">Disclaimer</a></li>
                        <li><a href="<?php echo base_url('Background-Check');?>">Background check</a></li>
                        
                  </div>
                  <!-- <div class="clearfix"> </div> -->
                  
               </div>
            </div>
            <div class="container wow fadeInUp">
               <br /><br />
               <h3 align="center">Related Videos</h3>
               <div class="col-md-3 footer-column wow fadeInUp" style="margin-bottom: 4px;">
                  <iframe width="257" height="154" src="https://www.youtube.com/embed/w_HkAiuHSWg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div>
               <div class="col-md-3 footer-column wow fadeInUp" style="margin-bottom: 4px;">
                  <iframe width="257" height="154" src="https://www.youtube.com/embed/t0PipokYMtE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div>
               <div class="col-md-3 footer-column wow fadeInUp" style="margin-bottom: 4px;">
                  <iframe width="257" height="154" src="https://www.youtube.com/embed/qqHvS_IAj2A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div>
               <div class="col-md-3 footer-column wow fadeInUp" style="margin-bottom: 4px;">
                  <iframe width="257" height="154" src="https://www.youtube.com/embed/qPQ3Q1Vabjg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div>
            </div>
         </div>
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="footer-bottom">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <!-- <div class="fba-copyright text-center">
                                 <p>Copyright © 2017 Designed by Habibullah. All rights reserved.</p>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>