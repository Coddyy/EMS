<?php include('header.php'); ?>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/admin/intern/index">Intern</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Intern Database</h2>
                                   
                                    <!--<div class="pull-right" >
					<a href="<?php echo base_url()?>admin/intern/signup" class="btn btn-warning">
                                            ADD Intern
                                        </a>
				</div>-->
				</div>
                                
                             <div class="box-content">
                                  <?php     if(!empty($internInfo)){?>
								    <form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/intern/deleteallIntern');?>" > 
                                    <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example'>
                                                         
							<div class="pull-right" style="padding: 1%">
							<button type="submit" name="mail" class="btn btn-warning">Send mail </button>
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
										<a href="<?php echo base_url()?>admin/intern/signup" class="btn btn-warning">
                                            ADD Intern
                                        </a>
									</div>
						  <thead>
							  <tr>
							 
							  <th><input  type="checkbox"  id="checkall" name="checkall"/></th> 
								  <th>Name</th>
								  <th>Email</th>
								   <th>Mobile</th>
                                   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php     
							//print_r($internInfo);
			              foreach($internInfo  as $r){
						 $internid=$r->id;
						  $fName=$r->fName;
						  $lName=$r->lName;
						   $name=$r->name;//.' '.$lName;
						    $email=$r->email;
                             $mobile=$r->phno;
                            $isActive=$r->isActive;
						
				?>	
                                                     
							<tr>
							 <td><input name="userId[]" type="checkbox" id="userId[]" value="<?php echo $r->id; ?>"></td>
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $email?></td>
								  <td class="center"><?php echo $mobile?></td>													<td class="center">
                                                                   
									<a class="btn btn-info" href="<?php echo base_url('admin/intern/editIntern?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url('admin/intern/deleteIntern?id='.$r->id)?>" onclick="return confirm('Are you sure?')">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                                                        
                                                        
                                                  
                                                      <?php } ?>
                                                  </tbody>
                                         </table>
                                  </form>
                                  <?php }
                                  else{
					echo   '<font size="3"><b>No datas are not found</b></font>';   
					} ?>
			  </div>
			 
			</div>
		</div>
 <!--------------------------------Employee View---------------------------------------------------------->

  
				
<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   
<script src="<?php echo base_url('assets/superadmin/js/jquery.table2excel.js'); ?>"></script>
<script language="JavaScript">
<!-- 

<!-- Begin
$(document).ready(function () { 
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
// End -->
</script>
