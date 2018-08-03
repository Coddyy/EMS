<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<title><?php echo $title; ?></title>

<!--Start Top bar-->
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibri;color:#000;}

  ul>li>a.menu_list{color:#fff;background-color: #FF7900;}
  ul>li>a.menu_list:hover{background-color: #0055A5;color:#fff;}

.ani_ul{margin-top: 30px;background-color: #FF7900;border:1px solid grey;min-width: 200px;height: auto;
}
.li_menu{border-bottom: 1px solid #fff;font-size: 16px;}


</style>
<style type="text/css">
  .next{background-color:#FF6600;width:50%;color:#fff;vertical-align: center;}
  .cancle{background-color:#0055A5;width:50%;color:#fff;vertical-align: center;}
  .cancle:hover{background-color: #FF6600;}
  .next:hover{background-color: #0055A5;}
  @media screen and (max-width: 768px){
    .cancle{width: 100%;}
    .next{width: 100%;}
  }
</style>

<style type="text/css">
  .open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  
}
.open > .dropdown-menu li a {
  color: #000;  
}
.dropdown-menu li a{
  color: #fff;
}
.dropdown-menu {
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  transform: scale(1, 0);
  display: block;
  
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
}
.dropup .dropdown-menu {
  -webkit-transform-origin: bottom;
  transform-origin: bottom;  
}

.navbar .nav > li > .dropdown-menu:after {

}
.dropup > .dropdown-menu:after {
  border-bottom: 0;
  border-top: 6px solid rgba(39, 45, 51, 0.9);
  top: auto;
  display: inline-block;
  bottom: -6px;
  content: '';
  position: absolute;
  left: 50%;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
}

</style>
<!-- 
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("#box").animate({height: "10px"},1000);
    });
});
</script> -->
 <div class="se-pre-con"></div>
<?php if($this->Candidate_M->isLoggedin() == TRUE){?>

  <div class="container-fluid">
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right btn1" onclick="click_this();" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" id="btn2" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('internship/dashboard') ?>">Dashboard</a></li>                 
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">My Resume</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Applied Internships</a></li>
                    
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Track Interviews</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Report Issue</a></li>           
                                     
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>
<!--End Top bar-->

<style type="text/css">
  div,p,h1,h2,h3,h4,h5,h6,small,label,fieldset,button{font-family: calibri;}
</style>
<style type="text/css">
	.con_main{max-width: 500px;margin-top:80px;margin-bottom: 300px; border:1px solid #ccc;box-shadow: 2px 2px 2px 2px #cccccc;border-radius: 4px;}
	.h1_head{border: 0px solid green;background-color: #0055A5;color:#fff;margin:3px;border-radius: 4px;height: 30px;}
	.btn_submit{background-color:#0055A5;color:#fff;}
	.btn_submit:hover{background-color:#FF7900;color:#fff; }
  .btn_back{background-color:#0055A5;color:#fff;margin-top: 10px;margin-bottom: 10px;width: 75px;}
  .btn_back:hover{background-color:#FF7900;color:#fff; }
  .file_upload{margin-top: -25px;}
  @media screen and (max-width: 768px){
    .con_main{margin:0 0;}
  .file_upload{margin-top: 0px;}

  }
</style>


<?php //if($this->uri->segment(2) == "quick_apply" && $this->Intern_M->isLoggedin() == FALSE){ ?>

<div class="container con_main" style="" align="center">
	<div class="row" style="">
  <?php if($this->uri->segment(2) == "already_applied"){?>
      <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          You've already applied.
      </div>
<?php } else if($this->uri->segment(2) == "quick_apply_success"){?>
      <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          You've successfully applied.
      </div>
<?php } ?>
    <h3 align="center" style="" class="h1_head">Quick Apply</h3>
    <small style="color:#FF7900;">Use quick apply for faster and more secure job application.</small>
		<form action="" method="post" enctype="multipart/form-data" style="padding:10px;">
            <fieldset style="margin-top: 10px;"> 
            <label style="text-align: left;">Full Name:</label>                       
               <input type="text" id="name" name="name" class="input-block-level" placeholder="Full Name" required=""> 
            <label style="text-align: left;">Email:</label>
               <input type="email" id="email" name="email" class="input-block-level" placeholder="Email" required="">
            <label style="text-align: left;">Mobile:</label>
                <input type="number" id="mobile" name="mobile" maxlength="10" class="input-block-level" placeholder="Mobile" required="">
               <!--  <textarea rows="2" maxlength="150" id="cover_letter" name="cover_letter" class="input-block-level" placeholder="Cover Letter" ></textarea> -->
                <br />
                <!-- <div class="row"></div> -->
                <label style="margin-top: 10px;text-align: left;">Upload CV</label>
                <input type="file" id="fileToUpload" name="fileToUpload" class="file_upload" placeholder="Resume" required="">
                <small style="color:red;margin-left: -70px;">(allowed file types PDF/DOC/DOCx) </small>
                <br />
                <br/>
                <center>
                	<button type="submit" class="btn btn_submit">Submit</button>
           		 </center>
            </fieldset>
        </form> 

      <a href="<?php echo base_url();?>">  <button type="button" style="" class="btn btn_back">Home</button> </a>      
	</div>
</div><!--Container con_main Ends-->

<!-- <?php //}else if($this->uri->segment(2) == "apply_now" && $this->Intern_M->isLoggedin() == TRUE){ 

         //  $intern_id=$this->session->userdata('intern_id');
         //  $internship_id=$this->uri->segment(3);
         //  $applied=$this->Intern_M->check_applied($intern_id,$internship_id);
         //  $have_cv=$this->Intern_M->check_have_cv($intern_id);
         // // var_dump($applied);var_dump($have_cv);exit();
         //  if($have_cv== FALSE || $applied == TRUE)
         //  {
         //    redirect(base_url()."internship/login");
         //  }


?>
<div class="container con_main" style="">
    <div class="row">
    <h1 align="center" class="h1_head">Apply</h1>
        <form action="<?php echo base_url();?>internship/apply/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data" style="padding:10px;">
            <fieldset style="margin-top: 10px;">
                <input type="text" id="name" name="name" class="input-block-level" value="<?php echo $this->session->userdata('name');?>" disabled="">
                <input type="text" id="email" name="email" class="input-block-level" placeholder="Email" value="<?php echo $this->session->userdata('email');?>" disabled="">
                <input type="tel" id="mobile" name="mobile" maxlength="10" class="input-block-level" placeholder="Mobile" required="" value="<?php echo $this->session->userdata('phno');?>" disabled="">
                <textarea rows="2" maxlength="150" id="cover_letter" name="cover_letter" class="input-block-level" placeholder="Cover Letter" ></textarea>
                <br />
                <label style="margin-top: 10px;">Resume</label>
                <!-- <input type="file" id="fileToUpload" name="fileToUpload" class="input-block-level" placeholder="Resume" required=""> -->
                <?php //echo $resume;?>
                <!-- <br />
                <center>
                <button type="submit" class="btn btn_submit">Submit</button>
            </center>
            </fieldset>
        </form>
    </div>
</div>--> 
<?php //} else
//         {
//           redirect(base_url()."candidate/login");
//         }
?> 
<br />