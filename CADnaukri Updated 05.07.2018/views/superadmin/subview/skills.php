<div>
	<ul class="breadcrumb">
		<li><a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a>
			<span class="divider">/</span></li>
		<li><a href="<?php echo base_url('superadmin/job/skills')?>">Skill
				Database</a> <span class="divider">/</span></li>
	</ul>
</div>


<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>
				<i class="icon-info"></i>Skill Database
			</h2>

			<div class="pull-right"><a href="<?php echo base_url()?>superadmin/job/add_skill"
						class="btn btn-warning"> ADD Skill </a></div>
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
              
				<table class="table table-striped table-bordered  bootstrap-datatable datatable" >
					<thead>
						<tr>
							<th class="noExl">Sl No</th>
							<th>Name</th>
							
							<!--<th>Skills</th>-->
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                 	
                 	<?php 
                 	$i=0;
                 //print_r($jobinfo);
                 	foreach($skills_info as $sk)
                 	{
                 		$i++;
                 		echo '<tr>
							<td>'.$i.'</td>';
							echo '<td>'.$sk->name.'</td>';
							echo '<td><a class="btn btn-info"
									href="'.base_url('superadmin/job/add_skill/'.$sk->id).'">
										<i class="icon-edit icon-white"></i> Edit
								   </a>&nbsp;&nbsp;<a class="btn btn-warning"
									href="'.base_url('superadmin/job/delete_skill/'.$sk->id).'">
										<i class="icon-delete icon-trash"></i> Delete
								   </a></td>';	   
						echo '</tr>';
                 	}
                 	?>
				
                  </tbody>
				</table>
			      
			  </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () { 
  $('.datatable').dataTable({
              "iDisplayLength": 30,
    });

  
  
});
</script>
