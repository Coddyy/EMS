<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<h3>Requests</h3>
				</div>
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>CADcat ID</th>
								<th>Date</th>
								<th class="td-actions"></th>
							</tr>
						</thead>
						<tbody>
					<?php foreach ($certificates as $key) { ?>

							
								<tr>
									<td><?php echo $key->CADcat_id;?></td>
									<td>Internet</td>
								<?php	if($this->Candidate_M->is_certificate_provided($key->apply_id) != TRUE ){?>
										<td class="td-actions">
											<form action="" method="post" enctype="multipart/form-data">

												<input type="file" id="img" onchange="validate(this)" name="fileToUpload" required="" />
												<input type="hidden" name="h_apply_id" value="<?php echo $key->apply_id;?>" />
												<input type="submit" name="submit" value="Upload" />

											</form>
											<!-- 
											<a href="javascript:;" class="btn btn-small">
												<i class="btn-icon-only icon-remove"></i>										
											</a> -->
										</td>
								<?php } else { ?>
										<td><b style="color:green;">Cerificate Provided</b></td>
								<?php } ?>
								</tr>
								
					<?php 	 } ?>		
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>

<script type="text/javascript">
	
	function validate()
	{
		var img=document.getElementById('img').value;
		//alert(img);
		var res= img.split(".");
		alert(res.length);
	}
	


</script>