<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/sponors/home_images')?>"> Requiter Details List</a> 
					</li>
                </ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		 <div class="box-header well" data-original-title>
		      <?php
		        
		      ?>
               <h2><i class="icon-edit"></i>Requiter Details List(For Home Page )</h2>
               <?php 
               $href=base_url("superadmin/sponors/add_recruiter_company");
               
			   ?>
                <div class="pull-right"><a class="btn btn-primary" href="<?php echo $href ?>">Add New</a></div>
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
		       <table class="table table-striped table-bordered  bootstrap-datatable datatable" id="example">
		               
						  <thead>
							  <tr>
							      <th>SL No</th>
								 <th>Title</th>
								  <th>Image</th>
								    <th>Home Link</th>
                                  <th>Status</th>      
								  <th class="excludeThisClass">Actions</th>
							  </tr>
						  </thead> 
						 <tbody>
						 	<?php
						 	   if($home_images)
						 	   {
						 	   	$i=0;
							   	    foreach($home_images as $hm)
							   	    {
							   	    	$i++;
										echo '<tr>';
										   echo '<td>'.$i.'</td>';
											echo '<td>'.$hm->name .'</td>';
											echo '<td><img src="'.$hm->image_path.'" alt="" /></td>';
											echo '<td>'.$hm->home_link .'</td>';
											echo '<td>'.($hm->status=='Y'?"Active":"Inactive") .'</td>';
										echo '<td><a href="'.base_url("superadmin/sponors/add_recruiter_company/$hm->id").'">Edit</a></td>';
										echo '</tr>';
									}
							   }
							   ?>
						 </tbody>                
	          </table>
       </div>
	</div>
</div>