  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<head>
  <style type="text/css">
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url("") center no-repeat #fff;
}
  </style>
  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut(800);;
  });
  </script>
</head>
    <div class="se-pre-con"></div>

<title>Interview Schedule</title>

<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
  
</style>

<!--Test-->


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

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>employer/my_profile" >My Profile</a></li>
                
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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<style type="text/css">
        .next{background-color:#FF6600;color:#fff;vertical-align: center;}
 .next:hover{background-color: #0055A5;}
 @media screen and (max-width: 768px){
    .next{width: ;}

 }
 .post_btn{width: 150px;box-shadow: 5px 5px 5px #cccccc;}
 	@media screen and (max-width: 768px){
 		.post_btn{width:100px;}
 	}
 .con_height{height: 500px;overflow-y: scroll;}
 .desktop{display: block;}
 .mobile{display: none;}
 @media screen and (max-width: 768px){
 .con_height{height: auto;}
 .desktop{display: none;}
 .mobile{display: block;}
 }
 .mobile_box{border:1px solid #cccccc;margin-left: 2px;
    margin-right: 2px;height: auto;margin-bottom: 5px;
    box-shadow: 2px 2px 2px 2px #cccccc;background-color: #D6DADA;
  }
  .bold{font-weight: bold;font-size: 16px;margin-top: 10px;}
  .margin{margin-bottom: 5px;border-bottom:1px solid #cccccc;box-shadow: 2px 2px 2px #ccc;}
  .margin_last{margin-bottom: 5px;}
  .heading{background-color:#0055A5;color:#fff;font-size: 22px;text-align: center;border-radius: 4px; }  
 </style>
<div class="container">
<div class="col-xs-12 col-md-12 heading">Interviews</div>
</div>

<!--Desktop-->
    <div class="container con_height desktop" style="">
      <div style="overflow-x:auto;">
        <table class="table-bordered">
          <tr>
            <th>Candidate Name</th>
        		<th>Contact Person</th>
        		<th>Mobile</th>
        		<th>Venue</th>
        		<th>Date</th>
        		<th>Time</th>
        		<th>Note</th>
        		<th>Status</th>
        		<th class="td-actions">Actions</th>
          </tr>
    <tbody>
					
					<?php if($interviews){
						foreach($interviews as $key)
						{ 
							if($key->status == 'Pending')
							{
								$color='orange';
							}
							else if($key->status == 'Attending')
							{
								$color='#8cff1a';
							}
							else if($key->status == 'Ignored')
							{
								$color='red';
							}

							

					?>
						<tr>
							<td><?php echo $key->candidate_name; ?></td>
							<td><?php echo $key->contact_person; ?></td>
							<td><?php echo $key->mobile; ?></td>
							<td><?php echo $key->venue; ?></td>
							<td><?php echo $key->date; ?></td>
							<td><?php echo $key->time; ?></td>
							<td><?php echo $key->note; ?></td>
							<td><p style="background-color: <?php echo $color;?> ;text-align: center;color:white;"><?php echo $key->status; ?></p></td>
							<td class="td-actions">
								<a href="<?php echo base_url();?>employer/update_interview/<?php echo $key->interview_id;?>/<?php echo $key->candidate_id;?>" class="btn btn-small btn-info">
									<i class="btn-icon-only icon-edit"></i>										
								</a>
								
								<a href="<?php echo base_url();?>employer/delete_interview/<?php echo $key->interview_id;?>" onclick="deletethis();" class="btn btn-small btn-danger">
									<i class="btn-icon-only icon-trash"></i>
																			
								</a>
							</td>
						</tr>
						<?php } } else { ?>
						<tr>
							No Interviews There
						</tr>
					<?php 	} ?>
					
					
					</tbody>
    
        </table>
      </div>
    </div>
<!--End Desktop-->
<br>
<!--Test-->

<!--Mobile-->
<div class="container mobile">

      <?php if($interviews){
            foreach($interviews as $key)
            { 
              if($key->status == 'Pending')
              {
                $color='orange';
              }
              else if($key->status == 'Attending')
              {
                $color='#8cff1a';
              }
              else if($key->status == 'Ignored')
              {
                $color='red';
              }

              

          ?>

  <div class="row mobile_box">
    <div class="col-xs-12 col-sm-6 bold">Candidate Name</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->candidate_name; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Contact Person</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->contact_person; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Mobile</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->mobile; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Venue</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->venue; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Date</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->date; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Time</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->time; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Note</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->note; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Status</div>
    <div class="col-xs-12 col-sm-6 margin">
        <p style="background-color: <?php echo $color;?> ;text-align: center;color:white;">
        <?php echo $key->status; ?>
          
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 bold">Action</div>
    <div class="col-xs-12 col-sm-6 margin_last">
      <a href="<?php echo base_url();?>employer/update_interview/<?php echo $key->interview_id;?>/<?php echo $key->candidate_id;?>" class="btn btn-small btn-info">
        <i class="btn-icon-only icon-edit"></i>                   
      </a>
                
      <a href="<?php echo base_url();?>employer/delete_interview/<?php echo $key->interview_id;?>" onclick="deletethis();" class="btn btn-small btn-danger">
      <i class="btn-icon-only icon-trash"></i>
    </div>
  </div>
    <?php } } else { ?>
            <tr>
              No Interviews There
            </tr>
          <?php   } ?>
</div>


<!--End Mobile-->


<script>
//alert("hi");
function deletethis()
{
	//confirm("Are you want to delete this??");
	if(confirm("Do you really want to delete this?"))
	{
		return true;
	}
	else
	{
		return false;
	}
}

</script>