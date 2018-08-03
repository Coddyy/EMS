<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"	type="text/css" media="all">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<div class="span10">   
	<div class="widget stacked widget-table action-table">				
		<div class="widget-header">
			<h3>Requests</h3>
		</div>
		<div class="widget-content">
			
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Current Account</th>
						<th>Account Requested</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($requests as $key) { 

						$emp_name=$this->Employee_M->get_emp_name($key->emp_id);
						$emp_email=$this->Employee_M->get_emp_email($key->emp_id);
						if($key->status == 'Approved')
						{
							$color='green';
						}
						else if($key->status == 'Pending')
						{
							$color='orange';
						}
						else if($key->status == 'Rejected')
						{
							$color='red';
						}
						else if($key->status == 'Stopped')
						{
							$color='red';
						}
						//echo $key->request_id;exit();

				?>
					<tr>
						<td>

						<?php echo $emp_name;?>
						<?php 
							$today=date('Y-m-d');
							$date1=date_create($key->last_date);
							$date2=date_create($today);
							$diff=date_diff($date1,$date2);
							//echo $diff->format("%a days");

						if($key->status != 'Pending')
						{
							if($key->last_date < date('Y-m-d', strtotime("+10 days")))
							{
								
								//echo $diff->format("%a days");
								
								echo '<blink><b style="color:red">'.$diff->format("%a days").' left</b></blink>';
							}
							else if($key->last_date < date('Y-m-d', strtotime("+20 days")))
							{
								echo '<blink><b style="color:orange">'.$diff->format("%a days").' left</b></blink>';
							}
						}
						?>
						</td>
						<td><?php echo $emp_email;?></td>
						<td><?php echo $key->current_account;?></td>
						<td><?php echo $key->requested_account;?></td>
						<td style="color:<?php echo $color;?>"><b><?php echo $key->status;?></b></td>

						<?php if($key->status == 'Pending')
						{ ?>
						<td>
							<a href="<?php echo base_url();?>superadmin/employee/approve_request/<?php echo $key->emp_id;?>/<?php echo $key->requested_account;?>/<?php echo $emp_name;?>/<?php echo $emp_email;?>/YES/<?php echo $key->request_id;?>"><button class="btn btn-success">Approve</button></a>
						</td>
						<td>
							<a href="<?php echo base_url();?>superadmin/employee/approve_request/<?php echo $key->emp_id;?>/<?php echo $key->requested_account;?>/<?php echo $emp_name;?>/<?php echo $emp_email;?>/NO/<?php echo $key->request_id;?>"><button class="btn btn-danger">Reject</button></a>
						</td>
						<?php } else if($key->status == 'Approved') { ?>

						<td>
							<a href="<?php echo base_url();?>superadmin/employee/stop_add_company/<?php echo $key->emp_id;?>/<?php echo $key->request_id;?>"><button class="btn btn-danger">Stop</button></a>
						</td>

						<?php } else if($key->status == 'Rejected') { ?>

						<td>
							<a href="<?php echo base_url();?>superadmin/employee/approve_request/<?php echo $key->emp_id;?>/<?php echo $key->requested_account;?>/<?php echo $emp_name;?>/<?php echo $emp_email;?>/YES/<?php echo $key->request_id;?>"><button class="btn btn-success">Approve</button></a>
						</td>

						<?php } else if($key->status == 'Stopped') { ?>

						<td>
							<a href="<?php echo base_url();?>superadmin/employee/start_add_company/<?php echo $key->emp_id;?>/<?php echo $key->request_id;?>"><button class="btn btn-success">Start</button></a>
						</td>

						<?php } ?>
					</tr>
					
				<?php } ?>
				</tbody>
			</table>
		</div> 
	</div>
</div>