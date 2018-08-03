<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		<?php if($job != false)
			{
				foreach ($job as $value) 
					{ ?>


						<div class=" col-lg-12 form-group">
					     	<label class="col-lg-2"><?php echo $value->jobtitle; ?></label>
					      	<div class="col-lg-4"> 
					      		<a href="<?php echo base_url();?>signup/get_candidate/<?php echo $value->id;?>"<button class="btn btn-primary" style="height:5%;">View</button></a>
					     	</div>
						</div>
						<br />

				
				<?php }
			}
			else
			{?>
						<label>No Results Found</label>
	<?php 	}
		?>
	</div>
</div>