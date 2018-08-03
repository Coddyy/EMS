<?php if($this->session->userdata('superadminId')){ ?>
     
           
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <div class="container" >
    	<div class="row">
    		<div class="col-md-12">
    		<h3 align="center">Add Banner</h3>
<br />
<?php if($this->uri->segment(3) == "banner_added"){ ?>
		<div class="alert alert-success alert-dismissable" style="width:70%;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  		Banner Added Successfully
		</div>
<?php } else if($this->uri->segment(3) == "banner_not_added"){ ?>
    	<div class="alert alert-danger alert-dismissable">
  			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			Banner Not Added
		</div>
<?php } ?>
<br />
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="banner" required />
					<br />
					<label>Choose Visibility Type </label>
					<select id="type" name="type" >
                        <option value="Public">Public</option>
                        <option value="Candidate">Candidate</option>
                        <option value="Employer">Employer</option>
                    </select>
					<br /><br />
					<input class="pull-left" type="submit" name="add_banner" value="Add Banner" />
				</form>
			</div>
		</div>
	</div>
<?php  }
else
{
    redirect('superadmin/index');
} ?>
	<?php //$banner=$this->View_M->get_the_banner();
		//foreach ($banner as $key) {
		
			//$picture=$key->banner_name;
			//$pic=base_url()."banner/".$picture;?>
			<!-- <img src='<?php echo $pic;?>' /> -->

	<?php //}
	?>