<style>
.hideextra { white-space: nowrap; overflow: hidden; text-overflow:ellipsis; }
.isa_info, .isa_success, .isa_warning, .isa_error {
margin: 10px 0px;
padding: 6px 8px;
}
.isa_info {
    color: #00529B;
    background-color: #BDE5F8;
}
.isa_success {
    color: #4F8A10;
    background-color: #DFF2BF;
}
.isa_warning {
    color: #9F6000;
    background-color: #FEEFB3;
}
.isa_error {
    color: #D8000C;
    background-color: #FFBABA;
}
.isa_info i, .isa_success i, .isa_warning i, .isa_error i {
    margin:10px 22px;
    font-size:2em;
    vertical-align:middle;
}
</style>
<div>
	<ul class="breadcrumb">
		<li><a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a>
			<span class="divider">/</span></li>
		<li><a href="<?php echo base_url('superadmin/job/index')?>">Job
				Database</a> <span class="divider">/</span></li>
	</ul>
</div>


<div class="row-fluid sortable">
	<div class="box span12">
	<?php
				  if(count($pending_job) > 0)
				  {
					$succesapply = $this->session->flashdata('msg2');?>
					<div class="alert alert-info">
				         <p>Some jobs are yet to review .Please have a look.</p>
					</div>
			 <?php } ?>
		<div class="box-header well" data-original-title>
			<h2>
				<i class="icon-info"></i>Job Database
			</h2>

			<div class="pull-right"><a href="<?php echo base_url()?>superadmin/job/addJob"
						class="btn btn-warning"> ADD Job </a></div>
		</div>
		<div class="box-content">
		    <?php
				  if($this->session->flashdata('msg2'))
				  {
					$succesapply = $this->session->flashdata('msg2');?>
					<div class="alert alert-success">
				          <button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Well done!</strong><?php echo $this->session->flashdata('msg2'); ?>
					</div>
			 <?php } ?>
			  
               <?php     if(!empty($jobinfo)){?>	
               <form name="form1" method="POST" onSubmit="return validate();"
				action="<?php echo base_url('superadmin/job/deletechkdjob');?>">
				<table
					class="table table-striped table-bordered  bootstrap-datatable datatable"
					id='example'>
					<thead>
						<tr>
							<th class="noExl">#</th>
							<th>Employer Name</th>
							<th>Company</th>
							<th>Job Title</th>
						<!--	<th>Desigination</th>-->
							<!-- <th>Required Qualification</th> -->
							<th>Exp(In Yrs)</th>
							<th>Location</th>
							<th>Post Date</th>
							<th>Modified Date</th>
							<th>Status</th>
							<!--<th>Skills</th>-->
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                 	
                 	<?php 
                 	$i=0;
                 //print_r($jobinfo);
                 	foreach($jobinfo as $jb)
                 	{
                 		$data=$this->SuperAdmin_M->get_emp_name($jb->userId);
                 		foreach($data as $key ) 
                 		{
                 			$emp_name=$key->name;
                 		}
                 		
                 		$i++;
                 		$job_info=$this->Job_M->get($jb->id,TRUE);
                 		$compamy_ifo=$this->Company_M->get($jb->companyId,TRUE);
                 		?>
							<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $emp_name;?> </td>
							<td><?php echo $compamy_ifo->name?> </td>
							
							<td class="center"><?php echo $job_info->jobtitle?></td>
						<!--	<td class="center"><?php echo $job_info->designation?></td>-->
							<!-- <td class="center"><?php echo $job_info->qualification?></td> -->
							<td class="center"><?php echo $job_info->yop?></td>
							<td class="center"><?php echo $job_info->location?></td>
							<td class="center excludeThisClass" style="white-space: nowrap;"><?php echo date('d M y',strtotime($job_info->created))?></td>	
							<td class="center excludeThisClass" style="white-space: nowrap;"><?php echo date('d M y',strtotime($job_info->modified))?></td>	
							<?php 
							if( $job_info->status == 'OP')
							{
								$status='Processing';
								$class="isa_info";
							}
							else if( $job_info->status == 'P')
							{
								$status='Pending';
								$class="isa_warning";
							}
							else if( $job_info->status=='Y')
							{
								$status='Active';
								$class="isa_success";
							}
							else
							{
								$status='Inactive';
								$class="isa_error";
							}

							$delete_url=base_url('superadmin/job/delete_job/'.$jb->id);
							$republish_url=base_url('superadmin/job/repost_job/'.$jb->id);
							$applied_candidates_url=base_url('superadmin/job/get_applied_candidates/'.$jb->id);
							// $delete_url=base_url('superadmin/job/addJob/'.$jb->id); //For Testing 
							?>
							<td class="center"><span class="<?php echo $class?>"><?php echo $status?></span></td>
							<!--<td><?php echo $skills?></td>-->
						
								 <td class="hideextra" style="white-space: nowrap;">
								 	<a class="btn btn-warning" title="Edit"
									href="<?php echo base_url('superadmin/job/addJob/'.$jb->id)?>" style="color:#ec5c00;">
										<i class="icon-edit icon-white"></i> 
								   </a>
								   <a class="btn btn-success" title="Re-Publish"
									href="<?php echo $republish_url;?>">
										<i class="icon-share icon-white"></i> 
								   </a>
								   <a class="btn btn-danger deletethis" title="Delete"
									href="<?php echo $delete_url;?>">
										<i class="icon-white icon-trash"></i> 
								   </a>
								   <a class="btn btn-info" title="Applications"
									href="<?php echo $applied_candidates_url;?>">
										<i class="icon-list icon-white"></i> 
								   </a>
								   <?php
								   	$jobtitle=$jb->jobtitle;
											$job_title=str_replace(' ', '-', $jb->jobtitle);
											$location=str_replace(' ', '-', $jb->location);
											$designation=str_replace(' ', '-', $jb->designation);
											//$url=base_url('index/signle_search/'.$jb->id);
											 $id=md5($jb->id).'g3q7'.$jb->id.'g3q7'.md5($jb->id + 1);
											$url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$id;
								   ?>
								    <a class="btn btn-primary" title="Preview"
									href="<?php echo base_url($url)?>" target="_blank">
										<i class="icon-eye-open icon-white"></i>
								   </a>
								
								 </td>
								 
							
						</tr>
					<?php } ?>
				
                                                                                                               
                                                  
                                                     
                                                  </tbody>
				</table>
			</form>
                                 
                                  <?php
																																		
}
else { 
																																			echo '<font size="3"><b>No datas are not found</b></font>';
																											}
																																		?>
			  </div>
	</div>
</div>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script
	src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script
	src="<?php echo base_url('assets/superadmin/js/jquery.table2excel.js'); ?>"></script>
<script>
	

$(document).ready(function () { 

	$('.deletethis').click(function()
	{
		var uid=$(this).attr("data-input");
		var id=$(this).attr("id");
		if(confirm("Are You Sure You Want To Delete This ??"))
		{
			//window.location="<?php echo base_url();?>cart/delete/"+id+'/'+uid;
		}
		else
		{
			return false;
		}

	});
    var oTable = $('#example').dataTable({
        stateSave: true
    });

    var allPages = oTable.fnGetNodes();

    $('body').on('click', '#checkall', function () {
        if ($(this).hasClass('allChecked')) {
            $('input[type="checkbox"]', allPages).prop('checked', false);
        } else {
            $('input[type="checkbox"]', allPages).prop('checked', true);
        }
        $(this).toggleClass('allChecked');
    })
});
</script>
<SCRIPT LANGUAGE="JavaScript"><!-- <!-- Beginfunction Check(chk){if(document.form1.checkall.checked==true){	for (i = 0; i < chk.length; i++){	chk[i].checked = true ;}}else{for (i = 0; i < chk.length; i++)chk[i].checked = false ;}}// End --></script>


</script>