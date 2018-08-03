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
						<a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/internship/index')?>">Internship</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Intern Database</h2>
                 	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('superadmin/internship/deletechkdinternship');?>" >                    
                                    <div class="pull-right" >
					<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
					<a href="<?php echo base_url()?>/superadmin/internship/addInternship" class="btn btn-warning">
                                            ADD Internship
                                        </a>
				</div>
				</div>
                               
                             <div class="box-content">
                                  <?php     if(!empty($internshipInfo)){?>
                                    <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example'>
						  <thead>
							  <tr>
							   <th class="noExl"><input type="checkbox" name="checkall" id="checkall" value="yes"/></th> 
								  <th>Title</th>
								  <th>WHo Can Apply</th>
                                   <th>Company NAme</th>
                                   <th>Start Date</th>
                                   <th>End Date</th>
                                   <th>Location</th>
                                   <th>Duration</th>
                                   <th>Status</th>
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
                                                            <td>
                                                              <?php 
                                                                if($r->status == 0)
                                                                {
                                                                  echo '<button class="btn btn-warning" disabled>Pending</button>';
                                                                }
                                                                else if($r->status == 1)
                                                                {
                                                                  echo '<button class="btn btn-success" disabled>Active</button>';
                                                                }
                                                              ?>
                                                            </td>
                                                            <td style="width:20%">
                                                                   
									<a title="Edit" class="btn btn-info" href="<?php echo base_url('superadmin/internship/editInternship?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>                                        
									</a>
                  <a title="Applications" class="btn btn-primary" href="<?php echo base_url('superadmin/internship/get_applied_interns/'.$r->id)?>">
                    <i class="icon-list icon-white"></i>                                              
                  </a>
									<a title="Delete" class="btn btn-danger delete" href="<?php echo base_url('superadmin/internship/delete_internship/'.$r->id)?>">
										<i class="icon-trash icon-white"></i>                                 
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   
<script src="<?php echo base_url('assets/superadmin/js/jquery.table2excel.js'); ?>"></script>
<script>
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
</script>
