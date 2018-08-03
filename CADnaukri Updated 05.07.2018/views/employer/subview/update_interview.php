  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<title>Interview Schedule </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    .update_btn{min-width: 100px;padding: 2px;}
    .dash_btn{height: 40px;border:none;}
    .dash_btn:hover{background-color: #FF7900;}
</style>

<!--Start Top bar-->
<style type="text/css">
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

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/dashboard'); ?>" >Dashboard</a></li>
                
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#" >Upgrade Services</a></li>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Queries">Report Issue</a></li>
                  
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/Job-Views">Total Job views</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/application_recieved') ?>">Track Applications</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>Employer/View-Interviews">Interviews</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Post Status</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="#">Chat</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('employer/logout') ?>">Log Out</a></li>
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<style type="text/css">
    .well{background-color: #E9E9E9;}
</style>


<?php $candidate_id=$this->uri->segment(4);?>
<br>
<div class="container well">
<?php   if($this->uri->segment(2) == "interview_schedule_updated")
        { ?>
            <div class="alert alert-success" align="center">
              Your interview has been updated
            </div>
<?php   } 
        else if ($this->uri->segment(2) == "interview_not_updated")
        { ?>
            <div class="alert alert-danger" align="center">
              Your interview scheduling not updated
            </div>
<?php   } ?>
<div class="span3">
<div class="col-md-12 col-xs-12" style="background-color:#0055A5;font-size: 22px;color:#fff;text-align: center;border-radius: 4px;height: 40px;line-height: 40px; vertical-align: middle; ">
    Update Interview
</div><br><br><br>
    <form action="" method="post">
<?php foreach ($interview as $key) { ?>

        <label>Contact Person<span style="color:red;">*</span></label>
        <input type="text" name="name" class="span3" value="<?php echo $key->contact_person;?>" required="">
        <label>Mobile</label>
        <input type="number" maxlength="10" value="<?php echo $key->mobile;?>" name="mobile" class="span3">
        <label>Venue<span style="color:red;">*</span></label>
        <input type="text" name="venue" value="<?php echo $key->venue;?>" class="span3" required="">
        <label>Date</label>
        <input type="date" name="date" value="<?php echo $key->date;?>" class="span3">
        <label>Time<span style="color:red;">*</span></label>
        <select name="time" required="">
            <option value="<?php echo $key->time;?>"><?php echo str_replace('-',' ',$key->time);?></option>
            <option value="First-half">First half</option>
            <option vale="Second-half">Second half</option>
        </select>
        <label>Note</label>
        <input type="text" value="<?php echo $key->note;?>" name="note" class="span3" >
        <input type="hidden" value="<?php echo $candidate_id;?>" name="hidden_candidate_id" class="span3" >
        <br /><br />
        </div></div>
        <div class="container" >
            <div class="row">
            <div class="col-md-12" align="center">
                <input type="submit" value="Update" class="btn btn-primary update_btn" align="center">
            </div>
            </form>
            <!-- <div class="col-md-6">
                <a href="<?php echo base_url();?>employer/dashboard"><button class="btn btn-primary dash_btn">Dashboard</button></a>
            </div> -->
            </div>
        <div class="clearfix"></div>
        <?php  } ?>
        </div>
    

<br />
