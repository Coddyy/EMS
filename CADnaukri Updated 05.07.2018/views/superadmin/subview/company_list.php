<div>
	<ul class="breadcrumb">
		<ul class="breadcrumb">
			<li>
			<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
			</li>
			<li>
			<a href="<?php echo base_url('superadmin/company/index')?>">Company List</a> 
			<span class="divider">/</span>
			</li>
			<li>
			<a href="<?php echo base_url('superadmin/company/add_company')?>">Add Company</a> 
			</li>
		</ul>
	</ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		 <div class="box-header well" data-original-title>
               <h2><i class="icon-edit"></i>Company List</h2>
               <?php 
               $href=base_url("superadmin/company/add_company");
			   ?>
         <div class="pull-right"><a class="btn btn-primary" href="<?php echo $href ?>">Add New</a></div>
		 </div>
			<div class="box-content">
	        <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example' >
	                 <thead>
							<tr>
							<th>SL No</th>
							<th>Name </th>
							<!-- <th>TagLine</th> -->
							<th>Website</th>
							<th>Corporate Office</th>      
							<th>Conatct No</th>      
							<th class="">Actions</th>
							</tr>
						  </thead> 
						 <tbody>
							<?php
							if($company_list)
							{
								$i=0;
								foreach($company_list as $hm)
								{
									$delete_url=base_url("superadmin/company/delete_comapny/$hm->id");
									echo '<tr>';
									echo '<td>'.$i++.'</td>';
									echo '<td>'.$hm->name .'</td>';
									//echo '<td>'.$hm->tagline.'</td>';
									echo '<td>'.$hm->website .'</td>';
									echo '<td>'.$hm->address .'</td>';
									echo '<td>'.$hm->phno .' ,'.$hm->mobile .'</td>';
									echo '<td class="center" style="white-space: nowrap;"><a href="'.base_url("superadmin/company/add_company/$hm->id").'" class="btn btn-primary">Edit</a>';
									echo '<a href="'.$delete_url.'" class="btn btn-warning delete">Delete</a></td>';
									echo '</tr>';
								}
							}
							?>
						 </tbody>                
	          </table>
			</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

 