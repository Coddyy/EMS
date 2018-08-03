<?php include('header.php'); ?>


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
						 <!--<div class="pull-right" >
					<a href="<?php echo base_url()?>superadmin/sponors/sponorsEntry" class="btn btn-warning">
                                            ADD CAD CAM center
                                        </a>-->
				</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="myTable">
						 <form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('superadmin/employee/deleteallCandidate');?>" >                        
							<div class="pull-right" style="padding: 1%">
							<button type="submit" name="mail" class="btn btn-warning">Send mail </button>
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
										<a href="<?php echo base_url()?>superadmin/sponors/sponorsEntry" class="btn btn-warning">
                                            ADD CAD CAM center
                                        </a>
									</div>
						  <thead>
							  <tr>
							   <th><input  type="checkbox" id="userId[]"  onClick="this.value=check(this.form.userId)" name="chk[]"/></th> 
								  <th>Institution</th>
								  <th>Company Name</th>
								  <th>Adress</th>
								  <th>Conct Numbert</th>
                                   <th>course</th>
                                   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                  <?php foreach ($sponorsInfo as $value) {
                                                 $location=$value->location;
                                                   $city=$value->city;
                                                   $state=$value->state;
                                                    $phno=$value->phno;
                                                    $mobile=$value->mobile;
                                                     $address=$location.','.$city.','.$state;
                                                      $contactno=$phno.','.$mobile;
                                                      $contactno=$phno.','.$mobile;
                                                         ?>
							<tr>
							<td><input name="userId[]" type="checkbox" id="userId[]" value="<?php echo $value->id; ?>"></td>
								<td><?php echo $value->institution;?></td>
								<td class="center"><?php echo $value->companyname;?></td>
								<td class="center"><?php echo $address;?></td>
                                <td class="center"><?php echo $contactno;?></td>
                                <td class="center"><?php echo $value->course;?></td>
								 <td class="center" style="width: 100%;" >
									<a class="btn btn-success btn-setting" onclick="getSponors(<?php echo $value->id ?>)">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
                                                                    <a class="btn btn-info" href="<?php echo base_url('superadmin/sponors/editSponors?id='.$value->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
                                                                    </a>
                                                                        

									<a class="btn btn-danger" href="<?php echo base_url('superadmin/sponors/deleteSponors?id='.$value->id)?>" onclick="return confirm('Are you sure?')">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<?php } ?>
							
						  </tbody>
					  </table>            
			</div>
	</div><!--/span-->
			
</div><!--/row-->
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>SPONORS DETAILS</h3>
    </div>
    <div class="modal-body">
    	<!-- Ajax Request--><div class="loading" align="center"><img src="<?php echo base_url();?>assets/superadmin/img/loading.gif" alt="Loading..."/></div>
     </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
       </div>
</div>
			
<?php include('footer.php'); ?>
<script type="text/javascript">
function getSponors(sponorsid)
{
	//alert(empid);
	var data=sponorsid;
	var dataString= "sponorsid=" + sponorsid;

	$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>superadmin/sponors/sponorsSingleList",  //file name
		data: dataString,
		beforeSend: function()
		{
			$('.loading').fadeIn('medium');
		},
		success: function(response)
		{
			$(".modal-body").html(null);
			$(".modal-body").fadeIn(5000).html(response);		
			$('.loading').fadeOut('medium');
		}
	});
}
</script>
