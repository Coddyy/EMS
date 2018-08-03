<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>



<style>
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
/*padding: 20px 15px 15px;*/
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
/*left: 10px;*/
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
/*margin-left: 13px;
margin-right: -2px;*/
font-size: 16px;
color: #555;
vertical-align: middle;
}
</style>

<!-- #################################### FLASHDATA ###################################### -->

<?php if($this->uri->segment(2) == "job_deleted"){
	if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Job</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } } else if($this->uri->segment(2) == "job_not_deleted"){
     if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Job</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } } else if($this->uri->segment(2) == "job_approved"){
    if($this->session->flashdata('Approved')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Job</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } } else if($this->uri->segment(2) == "job_rejected"){
    if($this->session->flashdata('Rejected')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Job</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } } ?>

<!-- #################################### END FLASHDATA ###################################### -->


<div class="container">
	<div class="row" align="center">
	<div class="col-md-12">
		<div class="span7" align="center" style="width:100%;">   
			<div class="widget stacked widget-table action-table" style="width:100%;">
    			<div align="left">
    			<a href="<?php echo base_url();?>jobadmin/"><button class="btn"><span class="glyphicon glyphicon-chevron-left"></span> Console</button></a></div>	
				<div class="widget-header">

					<h3>Posted Jobs</h3><br />
				</div> <!-- /widget-header -->
				
				<div class="widget-content" >
					
					<table class="table table-striped table-bordered" >
						<thead>
							<tr>
								<th align="center"></th>
								<th align="center">Name</th>
								<th align="center">Company Name</th>
								<th align="center">Company Email</th>
								<th align="center">Job Title</th>
								<!-- <th align="center">Job Posted</th> -->
								<!-- <th align="center">Job Description</th> -->
								<th align="center"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php if($jobs){
							 foreach ($jobs as $key) { 
								$job_id=$key->job_id;
								?>

								<td align="center">

									<?php 
									//echo $job_id;
										$res=$this->Job_admin_m->check_status($job_id);
										//echo $res;
										if($res == 'P')
										{ ?>
											<i style="color:orange;" class="fa fa-circle" aria-hidden="true"></i>
										<?php } else if($res == 'Y')
										{ ?>
											<i style="color:green;" class="fa fa-circle" aria-hidden="true"></i>
										<?php } else if($res == 'N')
										{ ?>
											<i style="color:red;" class="fa fa-circle" aria-hidden="true"></i>
									<?php	}else
									{ ?>
											<i style="color:blue;" class="fa fa-circle" aria-hidden="true"></i>
									<?php 	} ?>

								</td>
								<td align="center"><?php echo $key->employer_name; ?></td>
								<td align="center"><?php echo $key->company_name; ?></td>
								<td align="center"> &nbsp&nbsp   N.A   &nbsp&nbsp</td>
								<td align="center"><?php echo $key->jobtitle; ?></td>
								<!-- <td align="center"><?php //echo $key->job_posted; ?></td> -->
								<!-- <td align="center"><?php //echo $key->description; ?></td> -->
								<td class="td-actions" align="center">
																			
									<a href= "<?php echo base_url();?>jobadmin/edit_job_details/<?php echo $job_id;?>" class="btn btn-primary edit" data-input="<?php //echo $job_id;?>" id="<?php echo $job_id_id;?>"><em class="fa fa-edit"></em></a>
								</td>
								<td>
									 <a href= "#" class="btn btn-danger delete" data-input="<?php //echo $user_id;?>" id="<?php echo $job_id;?>"><em class="fa fa-trash"></em></a> 
								</td>
							</tr>
							<?php } } else {?>
							<td colspan="8">No Jobs Found</td>
							<?php } ?>
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
        </div>
    </div>
    </div>
</div>

<!-- #################################### JS DELETE JOB ######################################## -->
<script>
$(document).ready(function()
{
  $('.delete').click(function()
  {
    //var uid=$(this).attr("data-input");
    var id=$(this).attr("id");
    if(confirm("Are You Sure You Want To Delete This Job ??"))
    {
      window.location="<?php echo base_url();?>jobadmin/delete_job/"+id;
    }
    else
    {
      return false;
    }

  });

});
</script>
<!-- #################################### END JS DELETE JOB ###################################### -->