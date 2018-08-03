<title>Employer | Candidate Profile View</title>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
div{font-family: calibury;}
div.content{font-size: 18px;border-bottom: 1px solid #cccccc;padding: 5px;}
	.con_main{background-color:#fff;min-height: 520px;max-width: 990px;border:1px solid #cccccc;box-shadow: 5px 5px 5px #cccccc; margin-bottom:20px;border-radius: 4px;}
	.heading{background-color: #0055A5;color:#fff;height: 40px;line-height: 40px;vertical-align: middle;text-align: center;border-radius: 4px;margin-top: 0px;border-bottom-left-radius: 0px;border-bottom-right-radius: 0px;box-shadow: 5px 5px 5px #cccccc;}
	.a{text-align: left;color:#0055A5; font-weight: bolder;}
	.b{text-align: left;font-size: 16px;}
	.btn_a{width: 120px; background-color:#0055A5;border:none; }
	.btn_a:hover{background-color:#FF7900;border:none; }
	.btn_b{width: 120px; background-color:#FF7900;border:none; }
	.btn_b:hover{background-color:#0055A5;border:none; }
	@media screen and (max-width: 768px){
		.btn_b{margin-top: 20px;}
	}
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
a:hover{text-decoration: none;}
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
                 
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<div class="container con_main">
	<div class="row">
		<h3 class="heading">Candidate Profile View</h3>
	</div>
<?php 	


$candidate_id=$this->uri->segment(3); 
$details=$this->Employee_M->get_cand_detials($candidate_id);
$cv_url=base_url($details->cvpath);
//echo $details->candidate_id;
//echo $cv_url;

?>
	<div class="container" align="center" style="max-width: 800px;min-height: 450px;margin-bottom: 10px; border:0px solid red;border-radius: 4px;background-color: #fff;">
		<div class="row content">
			<div class="col-md-12 col-xs-12 a" style="">Experience :</div>			
			<div class="col-md-12 col-xs-12 b" style=""><?php echo $details->experience;?></div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Current Industry Type :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($details->industry_type)
			{
				echo $details->industry_type;
			}
			else
			{
				echo 'Not Available';
			}

			?></div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Current Location :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($details->location)
			{
				echo $details->location;
			}
			else
			{
				echo 'Not Available';
			}

			?> </div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Current Salary :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($details->salary)
			{
				echo $details->salary;
			}
			else
			{
				echo 'Not Available';
			}

			?> 
			Lacs per yr</div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Current Skill :</div>
			<div class="col-md-12 col-xs-12 b">
			
			<?php 
			if($skill_name)
			{
				foreach ($skill_name as $key) 
				{
					echo $key->skill_name." ";	
				}
			}
			else
			{
				echo 'Not Available';
			}
			
			?>
			</div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Qualification :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($details->qualification)
			{
				echo $details->qualification;
			}
			else
			{
				echo 'Not Available';
			}

			?></div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Language :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($language)
			{
				foreach ($language as $key) 
				{
					echo $key->language_name." ";	
				}
			}
			else
			{
				echo 'Not Available';
			}
			
			?></div>
		</div><br>

		<div class="row content">
			<div class="col-md-12 col-xs-12 a">Project Details :</div>
			<div class="col-md-12 col-xs-12 b"><?php 
			if($project)
			{
				foreach ($project as $key) 
				{
					echo $key->descrition." Not Available";	
				}
			}
			else
			{
				echo 'Not Available';
			}
			
			?></div>
		</div><br>

<br>
		<div class="row" style="margin: 50px 0px;">
			<div class="col-md-6 col-xs-12">
                <a class="btn btn-info" href="<?php echo base_url();?>employer/request_candidate_cv/<?php echo $details->email.'/'.$details->candidate_id;?>">
                    Request CV
                </a>
                
			</div>
			<div class="col-md-6 col-xs-12">
				<button type="button" class="btn btn-primary btn_a">Back</button>
			</div>
		</div>
	
	</div>
</div><!--End Con_main-->