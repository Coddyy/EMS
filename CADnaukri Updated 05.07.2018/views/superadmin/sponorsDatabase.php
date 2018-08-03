<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo base_url('superadmin/sponors/index')?>">CAD CAM centers</a> 
		</li>
                                       
  		 </ul>
</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> CAD CAM centers Database</h2>
						 <div class="pull-right" >
					<a href="<?php echo base_url()?>superadmin/CAD-CAM-Schools/Register" class="btn btn-warning">
                                            ADD CAD CAM center
                                        </a>
				</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="myTable">
						  <thead>
							  <tr>
							   <th>Sl.No</th> 
								  <!-- <th>Institution</th> -->
								  <th>Company Name</th>
								  <th>Contact Person</th>
								  <th>Adress</th>
								  <th>Contact Number</th>
                                  <th>Course</th>
                                  <th>Status</th>
                                  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                  <?php 
                                  $i=0;
                                  foreach ($sponorsInfo as $value) {
                                  	$i++;
                                                 $location=$value->location;
                                                   $city=$value->city;
                                                   $state=$value->state;
                                                    $phno=$value->phno;
                                                    $mobile=$value->cmobile;
                                                     $address=$location.','.$city.','.$state;
                                                      $contactno=$phno.','.$mobile;
                                              $sql="SELECT b.id,c.name as course_name FROM `sponors` a,`sponors_courses` b,
                                              `functional_area` c
                                              where a.id=b.sponors_id and b.id=c.id and a.id=$value->id";
                                               $result=$this->db->query($sql)->result();
                                               $str=str_replace(';',',',$value->course);
              //                                  $str='';
              //                                  if($result)
              //                                  {
												  //  	 foreach($result as $r)
	             //                                    {
												  //   	$str .= $r->course_name.',';
												  //   }
                                                   
											   // }
											   	$status=$value->status;
											   	if($status == 'Active')
											   	{
											   		$color='green';
                                                    
											   	} 
											   	else if($status == 'Pending')
											   	{
											   		$color='orange';
											   	}
											   	else if($status == 'Deactive')
											   	{
											   		$color='red';
											   	}
											   	?>
							<tr>
							    <td><?php echo $i; ?></td>
								<!-- <td><?php //echo $value->institution;?></td> -->
								<td class="center"><?php echo $value->companyname;?></td>
								<td><?php echo $value->contact_person;?></td>
								<td class="center"><?php echo $address;?></td>
                                <td class="center"><?php echo $contactno;?></td>
                                <td class="center"><?php echo $str;?></td>
                                <td class="center"><div style="border-radius:2px;color:white;text-align:center;background-color: <?php echo $color; ?>;">&nbsp&nbsp<?php echo $status;?>&nbsp&nbsp</div></td>
								 <td class="center" style="  white-space: nowrap;">
								 <?php if($status == 'Active'){ ?>
								 	<a class="btn btn-danger" 
										href="<?php echo base_url('superadmin/sponors/stop_publish/'.$value->id)?>"
										<i class="icon-edit icon-white"></i>Deactive
									</a>
								 <?php } else {  ?> 
								 	<a class="btn btn-success" 
										href="<?php echo base_url('superadmin/sponors/publish_now/'.$value->id)?>"
										<i class="icon-edit icon-white"></i>Publish
									</a>
								 <?php } ?>
								 	


									<a class="btn btn-info" 
										href="<?php echo base_url('superadmin/sponors/sponorsEntry/'.$value->id)?>"
										<i class="icon-edit icon-white"></i>Edit </a>
										<a class="btn btn-warning" 
										href="<?php echo base_url('superadmin/sponors/delete_sponors/'.$value->id)?>"
										<i class="icon-edit icon-white"></i>Delete </a>
                                                                    
                                                                        

									
								</td>
							</tr>
							<?php } ?>
							
						  </tbody>
					  </table>            
			</div>
	</div><!--/span-->
			
</div><!--/row-->
<script type="text/javascript">
	function delete()
	{
		if(confirm("Are you want to delete this??"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>

