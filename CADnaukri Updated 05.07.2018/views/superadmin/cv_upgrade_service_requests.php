<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<h3>Requests</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Request Date</th>
								<th>Approved Date</th>
								<th>Employer Name</th>
								<th>Employer Email</th>
								<th>Download Limit</th>
								<th>Status</th>
								<th colspan="2" class="td-actions">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($requests as $key) { 

							$rrow=explode(' ',$key->request_date);
							$rdate=$rrow[0];
							$arow=explode(' ',$key->approved_date);
							$adate=$arow[0];
						?>


							<tr>
								<td><?php echo date('d M Y',strtotime($rdate));?></td>
								<td><?php 
									if($adate != NULL && $adate != '')
									{
										echo date('d M Y',strtotime($adate));
									}
									else
									{
										echo 'Pending';
									}
									?>
								</td>
								<td><?php echo $key->name;?></td>
								<td><?php echo $key->email;?></td>
								<td><?php echo $key->download_limit;?></td>
								<td >
									<?php 
										if($key->request_status == 1)
										{
											echo "<button class='btn btn-success' disabled>Approved</button>";
										}
										else if($key->request_status == 0)
										{
											echo "<button class='btn btn-warning' disabled>Pending</button>";
										}

									?>
								</td>
								<td colspan="2" class="td-actions">
									<a href="<?php echo base_url();?>superadmin/employee/approve_service/<?php echo $key->download_limit;?>/<?php echo $key->employer_id;?>/<?php echo $key->request_id;?>" class="btn btn-small btn-success">
										<i class="btn-icon-only icon-ok"></i>										
									</a>
									<a href="javascript:;" class="btn btn-danger">
										<i class="btn-icon-only icon-remove"></i>										
									</a>
								</td>
							</tr>

						<?php } ?>	
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>