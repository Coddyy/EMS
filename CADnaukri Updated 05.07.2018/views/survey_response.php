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
	<h2 style="text-align: center; font-family:Calibri; border-bottom: 1px solid;  color: #fff; height: : 6%;"> Survey Response</h2>
</div>

<div class="container" style="border:1px solid #CCCCCE;">
  <div class="row" style="margin-left: 0px; margin-right: 0px;">
		

    <!-- <br>
			<div class="col-xs-3" style="font-family:Calibri;  font-size: 18px; ">Sl.no</div>
			<div class="col-xs-3" style="font-family:Calibri;  font-size: 18px;">Name </div>
			<div class="col-xs-3" style="font-family:Calibri;  font-size: 18px; ">Email</div>
			<div class="col-xs-3" style="text-align: right;"><button type="" class="button" style="margin-bottom: 0%; font-family:Calibri; "><b>View</b></button></div>
		</div><br>
    <div class="row " style="margin-left: -27px; margin-right: -28px;">
      <div class="col-xs-3" style="font-family:Calibri;  font-size: 18px; ">Sl.no</div>
      <div class="col-xs-3" style="font-family:Calibri;  font-size: 18px;">Name </div>
      <div class="col-xs-3" style="font-family:Calibri;  font-size: 18px; ">Email</div>
      <div class="col-xs-3" style="text-align: right;"><button type="" class="button" style="margin-top: 0%; font-family:Calibri;" ><b>View</b></button></div>
    </div> -->

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Current Status</th>
              <th>Year Of Exp</th>
              <th>Industry Type</th>
              <th>Skill</th>
              <th>Proficiency</th>
              <th>Plan</th>
              <th>Expected Salary</th>
              <th>Notice Period</th>
              <th>Linkdin</th>
              <th>Registration</th>
              <th>CV</th>
            </tr>
          </thead>
          <tbody>
<?php foreach ($responses as $key) { ?>

            <tr>
              <td><?php echo $key->survey_date_time; ?></td>
              <td><?php echo $key->name; ?></td>
              <td><?php echo $key->email; ?></td>
              <td><?php echo $key->mobile; ?></td>
              <td><?php echo $key->exp; ?></td>
              <td><?php echo $key->exp_year; ?></td>
              <td><?php echo $key->industry_types; ?></td>
              <td><?php echo $key->software_skills; ?></td>
              <td><?php echo $key->proficiency; ?></td>
              <td><?php echo $key->plan; ?></td>
              <td><?php echo $key->expected_salary; ?></td>
              <td><?php echo $key->notice_period; ?></td>
              <td><?php echo $key->linkedin; ?></td>
              <td><?php echo $key->registered; ?></td>
              <td>Working</td>
            </tr>
<?php } ?>
          </tbody>
        </table>


    </div>   <!-- End Of ROW-->
	</div><!--End of container-->
</body>


