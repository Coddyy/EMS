<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<h3>New Candidates</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($new_employers as $key) { ?>
							<tr>
								<td><?php echo $key->name;?></td>
								<td><?php echo $key->email;?></td>
								<td><?php echo $key->mobile;?></td>
								<!-- <td class="td-actions">
									<a href="javascript:;" class="btn btn-small btn-primary">
										<i class="btn-icon-only icon-ok"></i>										
									</a>
									
									<a href="javascript:;" class="btn btn-small">
										<i class="btn-icon-only icon-remove"></i>										
									</a>
								</td> -->
							</tr>
						<?php } ?>
							
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>