<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>My Exams</title>

<style type="text/css">
	.table-bordered {
border: 1px solid #dddddd;
border-collapse: separate;
border-left: 0;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}

.table {
width: 100%;
margin-bottom: 20px;
background-color: transparent;
border-collapse: collapse;
border-spacing: 0;
display: table;
}

.widget.widget-table .table {
margin-bottom: 0;
border: none;
}

.widget.widget-table .widget-content {
padding: 0;
}

.widget .widget-header + .widget-content {
border-top: none;
-webkit-border-top-left-radius: 0;
-webkit-border-top-right-radius: 0;
-moz-border-radius-topleft: 0;
-moz-border-radius-topright: 0;
border-top-left-radius: 0;
border-top-right-radius: 0;
}

.widget .widget-content {
padding: 20px 15px 15px;
background: #FFF;
border: 1px solid #D5D5D5;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
}

.widget .widget-header {
position: relative;
height: 40px;
line-height: 40px;
background: #E9E9E9;
background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
text-shadow: 0 1px 0 #fff;
border-radius: 5px 5px 0 0;
box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
border-bottom: 1px solid #bababa;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
border: 1px solid #D5D5D5;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius-topleft: 4px;
-moz-border-radius-topright: 4px;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
-webkit-background-clip: padding-box;
}

thead {
display: table-header-group;
vertical-align: middle;
border-color: inherit;
}

.widget .widget-header h3 {
top: 2px;
position: relative;
left: 10px;
display: inline-block;
margin-right: 3em;
font-size: 14px;
font-weight: 600;
color: #555;
line-height: 18px;
text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
}

.widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
display: inline-block;
margin-left: 13px;
margin-right: -2px;
font-size: 16px;
color: #555;
vertical-align: middle;
}
</style>
<div class="container">
<div class="span12">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
				
					&nbsp&nbspExams

				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Hiring</th>
								<th>Last Date</th>
								<th>Status</th>
								<th>Qualifiers</th>
							</tr>
						</thead>
						<tbody>

					<?php foreach ($exams as $key) { 

							if($key->exam_over == 'NO' && $key->exam_set == 'NO')
							{
								$color='orange';
								$status='Pending';
							}
							else if($key->exam_over == 'NO' && $key->exam_set == 'YES')
							{
								$color='green';
								$status='Ongoing';
							}
							else if($key->exam_over == 'YES' && $key->exam_set == 'YES')
							{
								$color='lightgreen';
								$status='Completed';
							}

							$exam_id=md5($key->exam_id).'a2l8'.$key->exam_id.'a2l8'.md5($key->exam_id + 1);

					?>
							<tr>
								<td><?php echo $key->company_name;?></td>
								<td><?php echo $key->hiring_for;?></td>
								<td ><?php echo $key->last_date;?></td>
								<td><b style="color:<?php echo $color;?>"><?php echo $status;?></td>
								<?php if($status != 'Pending'){ ?>
								<td><b><?php echo count($this->Employee_M->get_exam_qualifiers($key->exam_id));?></b></td>
								<?php } ?>
								<td class="td-actions">
								<?php if($status == 'Pending'){ ?>

									<a title="End Exam" href="<?php echo base_url();?>employer/create_exam" class="btn btn-small btn-warning">
									Complete Your Exam
									</a>

								<?php } else if($status != 'Completed'){ ?>
									<a title="Close" href="<?php echo base_url();?>employer/end_exam/<?php echo $key->exam_id;?>" class="btn btn-small btn-warning">
										<i class="btn-icon-only icon-off"></i>							
									<?php echo count($this->Employee_M->get_exam_qualifiers($key->exam_id));?>	
									</a>
									
								<?php } else { ?>

									<a title="Completed" href="#" class="btn btn-small btn-success" disabled>
										<i class="btn-icon-only icon-ok"></i>			
									</a>
									<a title="Qualifiers" href="<?php echo base_url();?>employer/get_exam_qualifiers/<?php echo $exam_id;?>" class="btn btn-small btn-info">
										<i class="btn-icon-only icon-eye"></i>			
									</a>
									
								<?php } ?>
									
								</td>
								
							</tr>
					<?php } ?>
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
            </div>
            <br /<br />
