<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>
Request Upgrade Service
</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

.form-control{
    background: transparent;
}
form {
	width: 320px;
	margin: 20px;
}
form > div {
	position: relative;
	overflow: hidden;
}
form input, form textarea {
	width: 100%;
	border: 2px solid gray;
	background: none;
	position: relative;
	top: 0;
	left: 0;
	z-index: 1;
	padding: 8px 12px;
	outline: 0;
}
form input:valid, form textarea:valid {
	background: white;
}
form input:focus, form textarea:focus {
	border-color: #357EBD;
}
form input:focus + label, form textarea:focus + label {
	background: #357EBD;
	color: white;
	font-size: 70%;
	padding: 1px 6px;
	z-index: 2;
	text-transform: uppercase;
}
form label {
	-webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
	transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
	position: absolute;
	color: #999;
	padding: 7px 6px;
	font-weight: normal;
}
form textarea {
	display: block;
	resize: vertical;
}
form.go-bottom input, form.go-bottom textarea {
	padding: 12px 12px 12px 12px;
}
form.go-bottom label {
	top: 0;
	bottom: 0;
	left: 0;
	width: 100%;
}
form.go-bottom input:focus, form.go-bottom textarea:focus {
	padding: 4px 6px 20px 6px;
}
form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
	top: 100%;
	margin-top: -16px;
}
form.go-right label {
	border-radius: 0 5px 5px 0;
	height: 70%;
	top: 0;
	right: 100%;
	width: 100%;
	margin-right: -100%;
}
form.go-right input:focus + label, form.go-right textarea:focus + label {
	right: 0;
	margin-right: 0;
	width: 40%;
	padding-top: 5px;
}
</style>
<?php if($this->Employee_M->isLoggedin() == TRUE)
      {
      	$emp_id=$this->session->userdata('emp_id');
      	$emp_email=$this->session->userdata('email');
      	$emp_mobile=$this->session->userdata('mobile');
      	$emp_name=$this->session->userdata('name');
?>       	
<div class="container" align="center">
    <div class="row">
<?php if($this->uri->segment(2) == "request_recorded")
{ ?>
	<div class="alert alert-success">
	  Your request has been recorded.
	</div>
<?php }else if($this->uri->segment(2) == "request_not_recorded")
{ ?>
	<div class="alert alert-danger">
	  Your request is not recorded.
	</div>
<?php } ?>



		<form role="form" class="col-md-9 go-right" method="post">
			<h2 align="center">Request Upgrade Service</h2>
			<div class="form-group">
				<select id="dropdown" name="download_limit" onchange="select()">
					
					<option value="10" seleted>(10+10 CV Downloads/Profile Views)</option>
					<option value="25">(10+25 CV Downloads/Profile Views)
					<option value="50">(10+50 CV Downloads/Profile Views)
					<option value="100">(10+100 CV Downloads/Profile Views)
					<option value="250">(10+250 CV Downloads/Profile Views)
					<option value="500">(10+500 CV Downloads/Profile Views)
					<option value="1000">(10+1000 CV Downloads/Profile Views)
					<option value="1000+">(10+Unlimited CV Downloads/Profile Views)

				</select>
			</div>
			<div class="form-group">
				<input id="name" name="name" type="text" class="form-control" value="<?php echo $emp_name;?>" required readonly>
				<label for="name">Name</label>
			</div>
			<div class="form-group">
				<input id="phone" name="phone" type="tel" class="form-control" value="<?php echo $emp_mobile;?>" required readonly>
				<label for="phone">Mobile</label>
			</div>
			<div class="form-group">
				<input id="phone" name="phone" type="email" class="form-control" value="<?php echo $emp_email;?>" required readonly>
				<label for="phone">Email</label>
			</div>
			<div class="form-group">
				<textarea id="message" name="phone" class="form-control" required>Hi, please upgrade my service to download additional CVs for my jobs.</textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-info" style="background-color: #5caceb;" id="phone" name="submit" value="Send" type="submit" required >
				<input type="hidden" name="employer_id" value="<?php echo $emp_id;?>" />
			</div>
			
		</form>
	</div>
</div>
<?php } ?>
<script type="text/javascript">
	
function select()
{
	var val=document.getElementById('dropdown').value;
	//alert(val);
	if(val != "10")
	{
		alert("You don't have the authorization now for selecting these");
		document.getElementById('dropdown').value="10";
	}
	else
	{
		return true;
	}
}
	
</script>