    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  
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

<title>Interview Schedule</title>

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
  /*-webkit-transform: scale(1, 1);*/
  transform: scale(1, 1); 
  -moz-transform: scale(1, 1);

  
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

    <div class="se-pre-con"></div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="background-color: #FF7900;height: 14px;margin-top: -20px;margin-bottom: 10px;">    
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle pull-right " onclick="click_this();" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 3px;background-color:#0055A5;"><center> <span class="glyphicon glyphicon-th-list" style="color:#fff;margin-left: 3px;"></span></center>
                </button>

                
                  <ul class="dropdown-menu pull-right ani_ul" role="menu1" aria-labelledby="menu1" style="" id="box">
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url();?>candidate/dashboard">Dashboard</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/my_profile">My Profile</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/update_cv">Update CV</a></li>
                    <?php 
                                if($this->session->userdata('candidate_id'))
                                  {
                                    $candidate_id=$this->session->userdata('candidate_id');
                                  }
                                  $total_jobs=$this->Candidate_M->get_total_applied_jobs($candidate_id);
                                  if($total_jobs != false){
                              ?>
                   
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_applied_jobs">Applied Jobs(<?php echo $total_jobs; ?>)</a></li>
                  <?php } else { ?>
                  <li style="color:black;"><a>Applied Jobs</a></li><?php } ?>
                    <!-- <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/working_on_it">Upgrade Service</a></li> -->
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_interviews">Track Interviews<?php if($this->Candidate_M->new_interview_notification($this->session->userdata('candidate_id')) == '1'){ ?><span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?></a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_saved_jobs">Saved Jobs</a></li>
                    
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/view_profile_views">Profile Views 
                                    <?php if($this->Candidate_M->new_notification($this->session->userdata('candidate_id')) == '1'){ ?>
                                   <!--  <span class="w3-circle w3-center" style="width:3%;background-color:green;height:-1%;color:white;">
                                    &nbsp ! &nbsp</span>  -->
                                    <span class="glyphicon glyphicon-eye-open eye_color" style=""></span>
                                    <?php } ?>
                                    </a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>candidate/social_links" >Add Social Link</a></li>
                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url()?>Queries" >Report Issue</a></li>

                    <li role="" class="li_menu" style=""><a role="menuitem" style="" class="menu_list"  href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>                
                                     
                  </ul>
               

             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Top bar-->

<br>
<style type="text/css">
div,p,h1,h2,h3,h4,h5,h6,ul,li{font-family: calibury;color:#000;}
	.heading{background-color: #0055A5;
		border-radius: 4px;
		color: #fff;text-align: center;
		font-size: 22px;
		box-shadow: 5px 5px 5px #cccccc;
	}  
  .desktop{display: block;}
  .mobile{display: none;}
	.con_hight{height: 600px;}
  .bold{font-weight: bold;font-size: 16px;margin-top: 10px;}
  .margin{margin-bottom: 5px;border-bottom:1px solid #cccccc;box-shadow: 2px 2px 2px #ccc;}
  .margin_last{margin-bottom: 5px;}

  .mobile_box{border:1px solid #cccccc;margin-left: 2px;
    margin-right: 2px;height: auto;margin-bottom: 5px;
    box-shadow: 2px 2px 2px 2px #cccccc;background-color: #D6DADA;
  }
  .confirm{background-color:#0055A5;border:none;color:#fff;}
  .confirm:hover{background-color: #FF7900;}
	@media screen and (max-width: 768px){
    .desktop{display: none;}
    .mobile{display: block;}
  }
</style>

<div class="container">
	<div class="col-md-12 col-xs-12 heading" style="">  View Interview </div>
</div>
<!--Desktop-->
<div class="container con_hight desktop">

    <div class="span7">
    	<div class="widget stacked widget-table action-table">			
    		<div class="widget-content">
    			
    			<table class="table table-striped table-bordered table-hover table-responsive" >
    				<thead>
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
    				</thead>
    				<tbody>			
    					<?php if($interviews){
    						foreach($interviews as $key)
    						{ 
    							if($key->status == "Attending")
    							{
    								$color='green';
    							}
    							else if($key->status == "Pending")
    							{
    								$color='orange';
    							}
    							else if($key->status == "Ignored")
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
    						<td><span style="background-color: <?php $color;?>;border-radius: :2px;"><?php echo $key->status; ?></span></td>
    						<td class="td-actions">
    						<?php if($key->status == "Pending"){ ?>
    							<a href="<?php echo base_url();?>candidate/inteview_confirmation/<?php echo $key->interview_id;?>/" class="btn btn-small btn-warning">
    								<i class="icon-spinner icon-spin icon-large"></i>										
    							</a>
    							<?php } else { ?>
    								<center><button class="btn  confirm" disabled="">Confirmed</button></center>
    								
    							<?php } ?>
    							
    							<a href="javascript:;" class="btn btn-small">
    								<i class="btn-icon-only icon-remove"></i>										
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
    </div>
</div>
<!--Desktop-->

<!--Mobile -->
<div class="container mobile" style="">
  
    <?php if($interviews){
                foreach($interviews as $key)
                { 
                  if($key->status == "Attending")
                  {
                    $color='green';
                  }
                  else if($key->status == "Pending")
                  {
                    $color='orange';
                  }
                  else if($key->status == "Ignored")
                  {
                    $color='red';
                  }

                ?>
    <div class="row mobile_box" style="">
    <div class="col-xs-12 col-sm-6 bold">Candidate Name</div>
    <div class="col-xs-12 col-sm-6 margin"><?php echo $key->candidate_name; ?></div>
    <div class="col-xs-12 col-sm-6 bold">Contact person</div>
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
      <span style="background-color: <?php $color;?>;border-radius: :2px;"><?php echo $key->status; ?></span>
    </div>
    <div class="col-xs-12 col-sm-6 bold">Action</div>
    <div class="col-xs-12 col-sm-6 margin_last">
      <?php if($key->status == "Pending"){ ?>
                  <a href="<?php echo base_url();?>candidate/inteview_confirmation/<?php echo $key->interview_id;?>/" class="btn btn-small btn-warning">
                    <i class="icon-spinner icon-spin icon-large"></i>                   
                  </a>
                  <?php } else { ?>
                    <button class="btn confirm" disabled="">Confirmed</button>
                    
                  <?php } ?>
                  
                  <a href="javascript:;" class="btn btn-small">
                    <i class="btn-icon-only icon-remove"></i>                   
                  </a>
    </div> 

  </div>
  <div class="row" style="background-image: #fff;"> </div>
  <?php } } else { ?>
                  <tr>
                  No Interviews There
                  </tr>
              <?php   } ?>
</div>
<!--Mobile-->

<br>
<style type="text/css">
	a:hover{text-decoration:none;}
</style>