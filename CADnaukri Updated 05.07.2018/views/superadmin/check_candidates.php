<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
	<div class="widget-header">
		<i class="icon-th-list"></i>
		<h3>Candidates [ <b style="color:red;"><?php echo count($candidates);?></b> ]  
			<span class="pull-right">
				<span style="margin-right: 15px;">Sort by :</span> 
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/All"><button style="margin-right: 10px;" class="btn btn-info">All</button></a>
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/Resume"><button style="margin-right: 10px;" class="btn btn-info">No Resume</button></a>
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/Location"><button style="margin-right: 10px;" class="btn btn-info">No Location</button>
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/Skill"><button style="margin-right: 10px;" class="btn btn-info">No Skill</button></a>
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/Job_applying"><button style="margin-right: 10px;" class="btn btn-info">Not Applying</button></a>
				<a href="<?php echo base_url();?>superadmin/candidate/casual_candidates/No_filter"><button style="margin-right: 10px;" class="btn btn-info">No Filter</button></a>
			</span>
		</h3>
	</div> <!-- /widget-header -->
	<br />
	<div class="widget-content">
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Resume</th>
					<th>Location</th>
					<th>Skill</th>
					<th>Applying</th>
				</tr>
			</thead>
			<tbody>
	<?php if($candidates)
			{
				foreach ($candidates as $key) 
				{ 

					$order_by=$this->uri->segment(4);
					if($order_by == "All")
					{

					}


					$dbcv=$this->SuperAdmin_M->cv_there($key->id);
					if($dbcv == TRUE)
					{
						$ccolor='green';
						$cv="Updated";
					}
					else
					{
						$ccolor='red';
						$cv="Not-Updated";
					}
					$dblocation=$this->SuperAdmin_M->location_there($key->id);
					if($dblocation == TRUE)
					{
						$lcolor='green';
						$location="Updated";
					}
					else
					{
						$lcolor='red';
						$location="Not-Updated";
					}
					$dbskills=$this->SuperAdmin_M->skill_there($key->id);
					if($dbskills == TRUE)
					{
						$scolor='green';
						$skills="Updated";
					}
					else
					{
						$scolor='red';
						$skills="Not-Updated";
					}
					$dbnot_applying=$this->SuperAdmin_M->job_applying($key->id);
					if($dbnot_applying == TRUE)
					{
						$acolor='green';
						$not_applying="Applying";
					}
					else
					{
						$acolor='red';
						$not_applying="Not-Applying";
					}


	?>
					<tr>
						<td><?php echo $key->name;?></td>
						<td><?php echo $key->email;?></td>
						<td><?php echo $key->mobile;?></td>
						<td><span style="background-color: <?php echo $ccolor;?>;color:white;text-align: center;font-size: 12px;"><b>&nbsp&nbsp<?php echo $cv;?>&nbsp&nbsp</span></b></td>
						<td><span style="background-color: <?php echo $lcolor;?>;color:white;text-align: center;font-size: 12px;"><b>&nbsp&nbsp<?php echo $location;?>&nbsp&nbsp</span></b></td>
						<td><span style="background-color: <?php echo $scolor;?>;color:white;text-align: center;font-size: 12px;"><b>&nbsp&nbsp<?php echo $skills;?>&nbsp&nbsp</span></b></td>
						<td><span style="background-color: <?php echo $acolor;?>;color:white;text-align: center;font-size: 12px;"><b>&nbsp&nbsp<?php echo $not_applying;?>&nbsp&nbsp</span></b></td>
					</tr>

	<?php		}
			}
			else
			{ ?>
					<tr>
						<td colspan="5">No candidates there</td>
					</tr>
	<?php	} ?>
				

				</tbody>
			</table>
		
	</div> <!-- /widget-content -->

</div> <!-- /widget -->
</div>