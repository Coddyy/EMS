<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script> 


<script language="javascript">function validate(){var chks = document.getElementsByName('userId[]');var hasChecked = false;for (var i = 0; i < chks.length; i++){if (chks[i].checked){hasChecked = true;break;}}if (hasChecked == false){alert("Please select at least one.");return false;}return true;}</script>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/admin/job/index">Job Database</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Job Database</h2>
                                   
                                    <div class="pull-right" >
					
				</div>
				</div>
                                <div class="box-content">
                                  <?php     if(!empty($jobinfo)){?>	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/job/deletechkdjob');?>" >						<div class="pull-right">																								<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>										<a href="<?php echo base_url()?>admin/job/addJob" class="btn btn-warning">                                            ADD Job                                        </a>									</div>
                                   <table class="table table-striped table-bordered  bootstrap-datatable datatable display" id='myTable'>
						  <thead>
                                                      <tr>	 <th class="noExl"><input type="checkbox" name="checkall" onClick="Check(document.form1.userId)" value="yes"/></th> 
                                                               <th>Company Name</th>
								  <th>Job Title</th>
								  <th>Desigination</th>
								   <th>Required Qualification</th>
                                                                     <th>Required Experience</th>
								  <th>Location</th>
                                                                   <!-- <th>Skills</th> -->
                                                                  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php           
			              foreach($jobinfo  as $r){
						 $id=$r->id;
						  $jobtitle=$r->jobtitle;
						  $designation=$r->designation;
						  $yop=$r->yop;
						  $description=$r->description;
                                                  $qualification=$r->qualification;
						  $location=$r->location;
                                                  $skills=$r->skills;
                                                  $name=$r->name;?>
                                                    
                                                     
							<tr>							<td>				<input name="userId[]" type="checkbox" id="userId" value="<?php echo $r->id; ?>"></td>
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $jobtitle?></td>
								<td class="center"><?php echo $designation?></td>
                                                                <td class="center"><?php echo $qualification?></td>
                                                                <td class="center"><?php echo $yop?></td >
                                                              <td class="center"><?php echo $location?></td>	
                                                                 <!-- <td ><?php echo $skills?></td>		 -->					
                                                                 <td style="width:60%">
                                                                   <a class="btn btn-info" href="<?php echo base_url('admin/job/addJob/'.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo base_url('admin/job/deleteJob?id='.$r->id)?>" onclick="return confirm('Are you sure?')">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
                                                                                                               
                                                  
                                                      <?php } ?>
                                                  </tbody>
                                         </table></form>
                                 
                                  <?php }
                                  else{
					echo   '<font size="3"><b>No datas are not found</b></font>';   
					} ?>
			  </div>
			</div>
		</div>
 
				
<?php include('footer.php'); ?>

<SCRIPT LANGUAGE="JavaScript"><!-- <!-- Beginfunction Check(chk){if(document.form1.checkall.checked==true){	for (i = 0; i < chk.length; i++){	chk[i].checked = true ;}}else{for (i = 0; i < chk.length; i++)chk[i].checked = false ;}}// End --></script> 


$(document).ready(function () { 
    var oTable = $('#myTable').dataTable({
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