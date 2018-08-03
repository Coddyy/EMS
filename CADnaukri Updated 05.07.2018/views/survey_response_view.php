<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Survey form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body style="background-color: ">

<div class="container" style="background-color:#0067b5;">
  <h4 style="margin-top: 2%; margin-bottom: 2%; color: #ffffff"><center>SPONSORED SURVEY</center></h4>
    
</div>
<div class="container">
<h3 style="text-align: center; color:#0067b5;"><small><b>Stand a Chance To Reach Your Right Employer Just Complete This Survey</b></small></h3>
<h4 style="text-align: center; margin-bottom: 1%; font-size: 12px; color: #aeb6bf;">CADnaukri.com conducts such surveys on behalf of product development companies.</h4>
<?php if($submitted == "education")
{ $survey_id=$survey_id; ?>
	<form action="" method="post" enctype="multipart/form-data">

<!-- ******************************************** FORM 2 **************************************** -->


		<!-- <input type="text" name="name" /> -->

		<div class="form-group row">
      <div class="col-xs-12">
          <label for ="Linkedin" style="font-size: 14px;">9. Provide URL of your Linkedin profile.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="" placeholder="Paste URL of your Linkedin Profile.">
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="name" style="font-size: 14px;">10. Enter your full namein CAPITAL letters.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="name" placeholder="Enter Name Ex: JAWED KHAN" required>
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="email" style="font-size: 14px;">11.  Enter your email address.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="email" placeholder="Enter Email Ex: francis@yahoo.com" required>
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="phone" style="font-size: 14px;">12. Enter your mobile number.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="mobile" placeholder="Enter Mobile No. Ex:+919298969499">
          </div>
      </div>
      <div class="form-group">
          <label for ="register" style="font-size: 14px;">13. Are you registered with CADnaukri.com?</label><br>
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="registered" value="Interested" required checked>Interested to register. 
          </label><br>
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="registered" value="Not Registered" required >Not registered yet.
          </label><br>
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="registered" value="Registered" required>Already registered. 
          </label><br> 
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="registered" value="Not Interested" required >Not interested.
          </label><br>
      </div>
      <div class="form-group row">
      <div class="col-xs-3 col-md-1">
      <label for="Upload">Upload :</label>
      </div>
      <div class="col-xs-3 col-md-2" style="margin-left: -2%;">
      
		<input type="file" name="fileToUpload" id="fileToUpload" onchange="return file_upload();" />
		<div id="error_file" class="error"></div>
      </div><br>
      <div class="col-xs-12">
      <p style="color:red;font-size: 15px;">(Only PDF/DOC/DOCxis allowed. File size should not exceed 500Kb).</p>
      </div>

      </div>

      <div class="form-group row">
      <div class="col-md-2 col-xs-2"> </div>
      <!-- <div class="col-xs-3"> <input type="submit" name="Submit" ></div> -->
      <input type="submit" name="personal_details_submitted" value="Submit Form" />
	<input type="hidden" value="<?php echo $survey_id; ?>" name="hidden_survey_id" />
          
      </div>
    </div>
	</br>
</br>
</br>	
</br>



<!-- ******************************************** END FORM 2 ************************************ -->

	</form>
<?php } else if($submitted == "personal")
{ ?> 
	<?php if($this->uri->segment(2) == "submitted_successfully")
	{ ?>
	<br />
		<div class="alert alert-success">
	  		<strong>Success!</strong> Indicates a successful or positive action.
		</div>
	<?php  } ?>
<?php } else { ?>
	<form action="" method="post">

<!-- ******************************************** FORM 1 ************************************ -->

	<div class="form-group" >
          <label for ="exp" style="font-size: 14px;">1.  Are you experienced or fresher?</label><br>
    
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="exp" value="Experienced" required>Experienced 
          </label>
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="exp" value="Fresher" required>Fresher
          </label>
        </div>
        <div class="form-group row">
        <div class="col-xs-12">
          <label for ="year" style="font-size: 14px;">2.  If experienced, how many years in the design industry you have worked ?</label>
        </div>
        <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="exp_year" placeholder="Enter in Years & Months" required>
        </div>
        </div>
        <div class="form-group row">
        <div class="col-xs-12">
          <label for ="work" style="font-size: 14px;">3.  Which industry types/verticals you have already worked before?</label>
        </div>
        <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="industry_types" placeholder="Use commas to separate industry" required>
        </div>
        </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="skills" style="font-size: 14px;">4. Mention your CAD/CAM/CAE/CFD/PLM software skills.</label> 
      </div>
      <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="software_skills" placeholder="Ex:Creo,Hypermesh,etc.(Use comma to separate)" required>
      </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-12">
          <label for ="proficiency" style="font-size: 14px;">5. Mention your designing proficiency level in the scale of 01 – 10.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="proficiency" placeholder="Enter value between 1 to 10 " required>
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="skipjob" style="font-size: 14px;">6.  Are you planning to switch your current job or seeking a new job?</label> 
          </div>
          <div class="col-xs-2">
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="plan" value="Yes" required>Yes 
          </label>
          </div>
          <div class="col-xs-2">
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="plan" value="No" required>No
          </label>
          </div>
          <div class="col-xs-8">
          <label class="radio-inline" style="font-size: 14px;">
          <input type="radio" name="plan" value="Not Decided Yet" required>Not decided yet.
          </label>
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="notice" style="font-size: 14px;">7.  Specify the notice period before joining a new job.</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="notice_period" placeholder="Ex: X months- XX days" required>
          </div>
      </div>
      <div class="form-group row">
      <div class="col-xs-12">
          <label for ="notice" style="font-size: 14px;">8. Expected Salary</label> 
          </div>
          <div class="col-xs-12 col-lg-6 col-md-6">
          <input class="form-control" type="text" id ="" name="expected_salary" placeholder="" required>
          </div>
          </div>

		<!-- <input type="text" name="name" /> -->
		<input type="submit" name="submit" value="Submit" />


<!-- ******************************************** END FORM 1 ************************************ -->

	</form>
</div>
<?php 	} ?>
  


<div class="container" style="background-color:#0067b5; margin-top:10%; height:;">
<div class="row" >
<div class="col-md-6 col-xs-12">
<p style="text-align: left; font-size: 12px; color: #ffffff; margin-top: 3%;";>Copyright ©  2017  CADnaukri.com&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAll Right Reserved.</p>
</div>

<!--<div class="col-md-6 col-xs-12">
<p style="text-align: right; color: #ffffff;margin-top: 1%;">CADnaukri.com, All Right Reserved</p>-->
</div>
</div>
</div>

</body>
</html>
<script>

function file_upload()
{
	var imgpath = document.getElementById('fileToUpload').value; 	                      
	if(imgpath == "")
	{
		alert("Upload your word file");
		return false;
	}
	else
	{
	    var arr1 = new Array;
		arr1 = imgpath.split("\\");
	    var len = arr1.length;
		var img1 = arr1[len-1];
		var filext = img1.substring(img1.lastIndexOf(".")+1);
		if(filext == "doc" || filext == "docx" || filext == "pdf")
		{
			return true;
		}
	    else
		{
		   document.getElementById("fileToUpload").value = '';
		   alert("You are requested to upload .doc .docx & .pdf documents only.");
		    return false;
		}
	}
}

</script>
