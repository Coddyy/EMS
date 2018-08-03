<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php 

$img=imagecreate(300, 300);
//imagefill($img, 0,0,imagecolorallocate($img,220,220,220));
$blue=imagecolorallocate($img,0,0,255);

imageline($img, 25, 25, 275, 275, $blue);
imagejpeg($img,"banner/demo.jpg");

?>
<!-- <img src="<?php echo base_url();?>banner/demo.jpg" /> -->



<style>
.vl {
    border-left: 6px solid green;
    height: 450px;
}
.hl {
    border-bottom: 6px solid blue;
    width: 1020px;

}
</style>
<div class="container">
	<div class="vl">
		<!-- <h5 style="margin-bottom:29%;">&nbspSecond</h5> -->
		<h5 style="margin-bottom:5%;">&nbsp100%</h5>
		<h5 style="margin-bottom:5%;">&nbsp80%</h5>
		<h5 style="margin-bottom:5%;">&nbsp60%</h5>
		<h5 style="margin-bottom:5%;">&nbsp40%</h5>
		<h5 style="margin-bottom:5%;">&nbsp40%</h5>
		<h5 style="margin-bottom:5%;">&nbsp20%</h5>
		<h5 >&nbsp0%</h5>
	</div>

	<div class="hl"></div>
	<div class="row" style="margin-left: 0px;">

		<div class="pull-left" style="background-color: white;width:5%;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Mon</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Tue</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Wed</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Thu</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Fri</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Sat</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		<div class="pull-left" style="width:5%;text-align: center;background-color: orange;">Sun</div>
		<div class="pull-left" style="width:5%;background-color: white;">.</div>
		
	</div>

