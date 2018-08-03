<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Save Profile</title>
<?php 
$apply_id=$this->uri->segment(3);

if($this->Candidate_M->is_there_apply_id($apply_id) == false)
{

		
	 //$this->Candidate_M->mark_spam($apply_id); 
	 
	 ?>

	<div class="container">
	  <div class="alert alert-danger">
	    We have received some suspisious activities. Your profile has been black listed. Redirecting...
	  </div></div>
	  <script>
		setTimeout(function()
				{ 
					window.location="<?php redirect(base_url().$_SERVER['REQUEST_URI']);?>"; 
				}, 6000);
	</script>
	</div>
<?php } else if($this->Candidate_M->is_spamming_happend($apply_id))
  {

   ?>

  <div class="container">
    <div class="alert alert-danger">
      Your exam has been canceled. Redirecting...
    </div>
  </div>
    <script>
    setTimeout(function(){ window.location="<?php echo base_url();?>candidate/dashboard"; }, 5000);
  </script>

<?php  } ?>
<?php 

$candidate_id=$details->candidate_id;
if($this->Candidate_M->is_registered($candidate_id) == FALSE)
		{
			$disabled='';
		}
		else
		{
			$disabled='disabled';
		}

$dbdate=explode(' ',$details->created);
$date=$dbdate[0];
?>
<style type="text/css">
	              input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:18px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
</style>

<div class="container">
	<div class="row">
<div class="col-md-12 " align="center" style="text-align:left">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Save Profile</h4></div>
   <div class="panel-body">
       

        
            <div class="box-body">
                     <div class="col-sm-6">
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-12" align="center">
            <h4 style="color:#00b1b1;font-size: 27px;"><?php echo $details->company_name;?> </h4></span>
              <span><p style="font-size: 20px;">Hiring: <?php echo $details->hiring_for;?> </p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Applicant Name:</div><div class="col-sm-7 col-xs-6  tital"><?php echo $details->name;?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 tital"> <?php echo $details->email;?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Application date:</div><div class="col-sm-7 tital"><?php echo date('d M Y',strtotime($date));?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mobile:</div><div class="col-sm-7 tital"><?php echo $details->mobile;?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Score:</div>
<?php if($this->Candidate_M->isLoggedIn() == TRUE)
		{ ?>
			
			
			<div class="col-sm-7 tital">
			<a href="<?php echo base_url();?>candidate/my_exams/<?php echo $apply_id;?>"><button class="btn btn-primary">My Exams</button></a>
			</div>

<?php } else if($this->Candidate_M->is_registered($candidate_id) == FALSE)
		{ ?>
			
			<div class="col-sm-7 tital">
			<form action="" method="post">
			<input type="hidden" name="hidden_no_use" value="No Use"/>
				<input type="submit" class="btn btn-info" <?php echo $disabled;?> value="Verify Email" />
			</form>
			</div>
			
<?php } else { ?>

			<div class="col-sm-7 tital">
			<a href="<?php echo base_url();?>candidate/login"><button class="btn btn-success">Login</button></a>
			</div>
<?php 	} ?>



 <div class="clearfix"></div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
<?php 

//$datetime1= date("Y-m-d H:i:s");
//    $datetime2= date("2018-03-30 05:25:00");

// $date_a = new DateTime($datetime1);
// $date_b = new DateTime($datetime2);

// $interval = date_diff($date_a,$date_b);

// echo $interval->format('%i:%s');

     ?>
       
   </div>
</div>




