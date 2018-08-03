<?php include('header.php'); ?>


<script language="javascript">

function validate()

{

var chks = document.getElementsByName('userId[]');

var hasChecked = false;

for (var i = 0; i < chks.length; i++)

{

if (chks[i].checked)

{

hasChecked = true;

break;

}

}

if (hasChecked == false)

{

alert("Please select at least one.");

return false;

}

return true;

}

</script>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/admin/intership/index">Internship</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Intern Database</h2>
                 	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/internship/deletechkdinternship');?>" >                    
                                    <div class="pull-right" >
					<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
					<a href="<?php echo base_url()?>/admin/internship/addInternship" class="btn btn-warning">
                                            ADD Internship
                                        </a>
				</div>
				</div>
                               
                             <div class="box-content">
                                  <?php     if(!empty($internshipInfo)){?>
                                    <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='myTable'>
						  <thead>
							  <tr>
							   <th class="noExl"><input type="checkbox" name="checkall" onClick="Check(document.form1.userId)" value="yes"/></th> 
								  <th>Title</th>
								  <th>WHo Can Apply</th>
                                                                  <th>Company NAme</th>
                                                                   <th>Start Date</th>
                                                                   <th>End Date</th>
                                                                   <th>Location</th>
                                                                   <th>Duration</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php           
			              foreach($internshipInfo  as $r){
						 $internshipid=$r->id;
						  $title=$r->title;
						  $whocanapply=$r->whocanapply;
						   $name=$r->name;
                                                   $startDate=$r->startDate;
                                                   $endDate=$r->endDate;
                                                    $location=$r->location;
                                                     $duration=$r->duration;
                                                   $isActive=$r->isActive;
						
				?>	
                                                     
							<tr>
                                                            <td class="noExl">
							<input name="userId[]" type="checkbox" id="userId" value="<?php echo $r->id; ?>"></td>
															<td><?php echo $title?></td>
                                                            <td><?php echo $whocanapply?> </td>
                                                           
                                                            <td><?php echo $name?></td>
                                                            <td><?php echo $startDate?></td>
                                                            <td><?php echo $endDate?></td>
                                                            <td><?php echo $location?></td>
                                                            <td><?php echo $duration?></td>
                                                            <td style="width:20%">
                                                                   
									<a class="btn btn-info" href="<?php echo base_url('admin/internship/editInternship?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url('admin/internship/deleteInternship?id='.$r->id)?>" onclick="return confirm('Are you sure?')">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                                                        
                                                        
                                                  
                                                      <?php } ?>
                                                  </tbody>
                                         </table>
                                  </div>
								  </form>
                                  <?php }
                                  else{
					echo   '<font size="3"><b>No datas are not found</b></font>';   
					} ?>
			 
			</div>
		</div>
 <!--------------------------------Employee View---------------------------------------------------------->

  
				
<?php include('footer.php'); ?>


