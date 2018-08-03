<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Candidate skills | Advance settings</title>

<?php 

$catagory=array('CAD','CAE','CFD','PLM','BIM','CAD Sales','CAD Dev');
$proficiency=array('Beginner','Intermediate','Advanced','Professional');

?>

<div class="container" style="margin-bottom: 10%;margin-top: 1%;">
	<h2 align="center">Advance skills setting</h2>
	<br />
	<div class="row">
		<?php if($this->session->flashdata('skillsuccess'))
			{

				$succesmsg = $this->session->flashdata('skillsuccess');
				echo 
				'<script>
					setTimeout(function(){window.location="'.base_url().'candidate/profile/skill_details"},5000);
				</script>';

		?>

				<div class="alert alert-success" role="alert"><?php echo $succesmsg;?></div>

		<?php } ?>
		<div class="col-md-2 col-xs-2 col-sm-2"><label>Skills</label></div>
		<div class="col-md-2 col-xs-2 col-sm-2"><label>Set catagory</label></div>
		<div class="col-md-3 col-xs-3 col-sm-3"><label>Certification type</label></div>
		<div class="col-md-3 col-xs-3 col-sm-3"><label>Institute</label></div>
		<div class="col-md-2 col-xs-2 col-sm-2"><label>Proficiency</label></div>
	</div>

	<form action="" method="post">

<?php 	$candidate_id=$this->session->userdata('candidate_id');
		$skills=$this->Candidate_M->more_skills($candidate_id);

		foreach($skills as $key) {

			if($this->Candidate_M->check_skill_exists($key->skill_id,$candidate_id) == FALSE)
			{
				//echo "Hello";exit();
				$this->Candidate_M->delete_more_skill($key->skill_id,$candidate_id);
			}
			else
			{
				//echo "Not Hello";exit();
			}
			

?>

		<div class="row">
			<div class="col-md-2 col-xs-2 col-sm-2"><input type="text" name="skill" value="<?php echo $key->name;?>" disabled/></div>
			<div class="col-md-2 col-md-2 col-xs-2 col-sm-2">
				<select name="catagory[]">
					<?php for ($i=0; $i <count($catagory) ; ++$i) 
						{ 
							$selected=(($key->catagory == $catagory[$i]) ? 'selected' : '');
							echo '<option value="'.$catagory[$i].'" '.$selected.'>'.$catagory[$i].'</option>';
						}
					?>
				</select>
			</div>
			<div class="col-md-3 col-md-3 col-xs-3 col-sm-3"><input type="text" name="institute[]" placeholder="Ex: CADD Centre Kothrud, Pune" value="<?php echo $key->institute;?>" /></div>

			<div class="col-md-3 col-md-3 col-xs-3 col-sm-3"><input type="text" name="certification[]" placeholder="Ex: Autodesk certified Associate" value="<?php echo $key->certification;?>" /></div>
			
			<div class="col-md-2 col-md-2 col-xs-2 col-sm-2">
				<select name="proficiency[]">
					<?php for ($i=0; $i <count($proficiency) ; ++$i) 
						{ 
							$selected=(($key->proficiency == $proficiency[$i]) ? 'selected' : '');
							echo '<option value="'.$proficiency[$i].'" '.$selected.'>'.$proficiency[$i].'</option>';
						}
					?>
				</select>
			</div>
			<input type="hidden" name="hidden_user_id" value="<?php echo $key->user_id;?>" />
			<input type="hidden" name="hidden_skill_id[]" value="<?php echo $key->skill_id;?>" />
			<input type="hidden" name="hidden_msd_id[]" value="<?php echo $key->msd_id;?>" />
		</div>
<?php } ?>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" name="submit" value="Save" />
			</div>
		</div>
	</form>
</div>
<br />
