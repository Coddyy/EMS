<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Instructions</title>


<?php if(empty($this->uri->segment(3)) || empty($this->uri->segment(4)) || empty($this->uri->segment(5)))
{
	redirect(base_url()."candidate/dashboard");
}
?>
<div class="container">
<?php 

$exam_details_id=$this->uri->segment(3);
$candidate_id=$this->uri->segment(4);
$uapply_id=$this->uri->segment(5);
$ex_apply_id=explode('c1s8', $uapply_id);
$right_side=explode('c1s8',$ex_apply_id[1]);
$apply_id=$right_side[0];

if($this->Candidate_M->check_is_there_exam_id($exam_details_id,$candidate_id,$apply_id) == false)
{
	//echo "Spam";exit();
	$this->Candidate_M->mark_spam($apply_id);

?>
		<div class="alert alert-danger" style="margin-bottom: 20%;margin-top: 10%;">
	    	We have received some suspisious activities. Your exam has been canceled. Redirecting...
	  	</div>
		<script>
		    setTimeout(function(){ window.location="<?php echo base_url();?>candidate/dashboard"; }, 6000);
		</script>
	<?php
}
else
{
	//echo "Not Spam";

	$uapply_id=$this->uri->segment(5);
	$apply_id=md5($apply_id).'c1s8'.$uapply_id.'c1s8'.md5($apply_id + 1);

	?>
	<div class="row">
		
		<body style="overflow:auto;"><style id="webfonts-style" type="text/css"></style><div class="zw-page" style="margin-left: 96px; margin-right: 96px; column-count: 1; column-gap: 0px;"><div class="zw-header"><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 11pt;"><br></p></div><div class="zw-contentpane"><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; border-bottom: 0px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;"></span></p><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-top: 0px; border-top: 0px; padding-bottom: 0px; border-bottom: 0px;"><br></p><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-top: 0px; border-top: 0px; padding-bottom: 0px; border-bottom: 0px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt; font-weight: bold;">Instructions :</span></p><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-top: 0px; border-top: 0px;"><br></p><ol start="1" class="list_20691552_0" style="margin: 0px; padding-left: 24px; list-style: decimal;"><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding: 0px 10.6562px 0px 24px; border-top: 0px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">The test consists of 10 questions one at a time.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">The test is free of cost to appear.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">The test will be time-bound, certain time frame is alloted per question as per requirement.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">For attempting the test , candidate need to give its particular name,contact number, etc.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">Any kind of suspicious activity can lead the candidate to disqualify from the test and permanent restriction from test. The main purpose of test is to test your domain of interest.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">For appearing the test , candidate need a laptop with webcam attached and turn on before taking test .&nbsp;</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">the whole test will be recorded for evaluation , if any kind suspicious activity found during evaluation it leads to disqualify with any prior notification.</span></li><li style="line-height: 1.2; margin-bottom: 0px; margin-top: 0px; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; padding-top: 0px; border-bottom: 0px; padding-left: 24px;"><span style="font-family: arial, roboto, sans-serif; font-size: 12pt;">Normally for declaration of result , it may take 2-5 days of working days. For downloading of scorecard and Certificate of merit , the candidate have to register with CADnaukri .</span></li></ol><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-bottom: 0px; border-bottom: 0px;"><br></p><p style="margin: 0px; line-height: 1.2; font-family: arial, roboto, sans-serif; font-size: 12pt; padding-top: 0px; border-top: 0px; padding-bottom: 0px; border-bottom: 0px;"><br></p></div><div></div><div></div></div></body>


	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4" align="center">
		<a align="center" href="<?php echo base_url();?>candidate/give_exam/<?php echo $exam_details_id;?>/<?php echo $candidate_id;?>/<?php echo $uapply_id;?>"><button class="btn btn-info" >Start</button></a>
	</div>
	<div class="col-md-4"></div>

	<?php
}

?>

</div>
<br /><br />
<br /><br />