<title>Download CV</title>

<div class="container">
	<div class="row">
		<div class="col-xs-12" align="center"> 
		<br />
			<h3><b>Download CV</b></h3>
			<a style="align: center;" href="<?php echo $cv_url; ?>" ><img style="width:50%;" src="<?php echo base_url();?>/assets/images/cvdownloadlogo.png" /></a><br /><br />
<?php if($this->uri->segment(2) == "cv_download_page"){ ?>
			<a class="btn btn-warning" href="<?php echo base_url();?>/employer/get_applied_candidate/<?php echo $job_id; ?>">Back</a>
<?php } else if($this->uri->segment(2) == "cvDownload"){ ?>
			<a class="btn btn-warning" href="<?php echo base_url();?>employer/get_exam_qualifiers/<?php echo $exam_details_id;?>">Back</a>
<?php } ?>
			<br />
			<br />
		</div>
	</div>
</div>
