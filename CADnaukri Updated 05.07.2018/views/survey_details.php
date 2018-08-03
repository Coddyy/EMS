<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
	.button {
  position: relative;
    background-color: #000066;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
   /* height: auto;
    width:100%;*/
} 
.button:hover
{
  color: black;
    background-color:#34ca78;
    border-color: #34ca78;
}
</style>



</head>
<body>
	<div class="container" style="background-color:#0067b5;">
		<h2 style="text-align: center; font-family:Calibri; border-bottom: 1px solid; color: #fff;"> Survey Response Details</h2>
	</div>

  <div class="container" style="border:1px solid #CCCCCE;">
  <div class="row" style="margin-left: -28px; margin-right: -28px;">

    <br>
			<div class="col-xs-1 col-md-1" style="font-family:Calibri;  font-size: 18px; "><b>Id</b></div>
			<div class="col-xs-1 col-md-2" style="font-family:Calibri;  font-size: 18px;"><b>Date</b> </div>
			<div class="col-xs-3 col-md-3" style="font-family:Calibri;  font-size: 18px; text-align: center;"><b>Title</b></div>
      <div class="col-xs-6 col-md-3" style="font-family:Calibri;  font-size: 18px; "><b>No.of Responses</b></div>
			
		</div><br>
<?php foreach ($survey_details as $key) { ?>

    <div class="row" style="margin-left: -28px; margin-right: -28px;">
      <div class="col-xs-1 col-md-1" style="font-family:Calibri;  font-size: 18px; "><?php echo $key->id; ?></div>
      <div class="col-xs-1 col-md-2" style="font-family:Calibri;  font-size: 18px;"><?php echo $key->date; ?></div>
      <div class="col-xs-3 col-md-3" style="font-family:Calibri;  font-size: 18px; text-align: center;"><?php echo $key->survey_name; ?></div>
      <div class="col-xs-6 col-md-3" style="font-family:Calibri;  font-size: 18px; ">
      <span style="color:green;"><b><?php 
        echo $no_of_responses; ?></b></span>
      </div>
      <div class="col-xs-12 col-md-3" style="text-align: right;"><a href="<?php echo base_url();?>survey/cadnaukri_survey_response_details/"><button type="" class="button" style="margin-top: 0%; font-family:Calibri;"  ><b>View Details</b></button></a></div>
    </div>

<?php } ?>
	</div><!--End of container-->
</body>


