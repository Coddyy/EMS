<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<div class="container">
	<div class="frmDronpDown">
		<div class="row">
			<label>Country:</label><br/>
			<select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
			<option value="">Select Country</option>
			<?php
			$results=$this->Sign_up_m->ajaxtest();
			foreach($results as $country) {
				$id=$country->id;
			?>
			<option value="<?php echo $id; ?>"><?php echo $country->name; ?></option>
			<?php
			}
			?>
			</select>
		</div>
		<div class="row">
			<label>State:</label><br/>
			<select name="state" id="state-list" class="demoInputBox">
			<option value="">Select State</option>
			</select>
		</div>
	</div>
</div>
<?php
// require_once("dbcontroller.php");
// $db_handle = new DBController();
if(!empty($_POST["country_id"]))
 {
	$c_id=$_POST["country_id"];
	$results=$this->Sign_up_m->state($c_id);
	//$query ="SELECT * FROM state WHERE c_id ='c_id';";
	//$results = $db_handle->runQuery($query);
 ?>
  	<option value="">Select State</option>
<?php
 	foreach($results as $state) {
 		$s_id=$state->id;
 ?>
	<option value="<?php echo $s_id ?>"><?php echo $state->name; ?></option>
 <?php
	}
 }
?>

<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "<?php echo base_url();?>signup/ajaxtest",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}
</script>