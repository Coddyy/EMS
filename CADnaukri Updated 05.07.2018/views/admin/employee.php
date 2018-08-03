
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
						<a href="<?php echo base_url()?>admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>admin/employee/index">Employee</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Employee Database</h2>
                                   
                                  <!--  <div class="pull-right" >
					<a href="<?php echo base_url()?>superadmin/employee/signup" class="btn btn-warning">
                                            ADD EMPLOYEE
                                        </a>
				</div>-->
				</div>
                                
                             <div class="box-content">
                                  <?php     if(!empty($empInfo)){?>
                                     	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/employee/actionEmployee');?>" > 
										
										<table>                 
							<div class="pull-right" style="padding: %">
							<button type="submit" name="mail" class="btn btn-warning">Send mail </button>
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
										<a href="<?php echo base_url()?>admin/employee/signup" class="btn btn-warning">
                                             ADD EMPLOYEE
                                        </a>
									</div><table>   
									
                          <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example' >
                                 
						  <thead>
							  <tr>
							   <th><input type="checkbox" name="checkall" id="checkall" value="yes"/></th> 
								  <th>Name</th>
								  <th>Email</th>
								  <th>Address</th>
                                  <th>Company Name</th>
                                   <th>Role</th>
                                  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php           
			              foreach($empInfo  as $r){
						 $empid=$r->id;
						  $fName=$r->name;
						  //$lName=$r->lName;
						   $name=$fName;//.' '.$lName;
						   $roles=$r->roles;
						  $email=$r->email;
                           $companyName=$r->companyName;
                            $location=$r->location;
						   $mobile=$r->mobile;
                          $isActive=$r->isActive;
						
				?>	
                                                     
							<tr>
							<td><input name="userId[]" type="checkbox" id="userId" value="<?php echo $r->id; ?>"></td>
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $email?></td>
								<td class="center"><?php echo $location?></td>
                                <td class="center"><?php echo $companyName?></td>
                                <td class="center"><?php echo $roles?></td>
								<td class="center" style="width:25%">
                                
<a class="btn btn-info" href="#<?php //echo base_url('admin/employee/editEmployee?id='.$r->id)?>"><i class="icon-edit icon-white"></i>Edit</a>
<a class="btn btn-info" href="<?php echo base_url();?>admin/employee/view_profile_details/<?php echo $r->id;?>"><i class="icon-edit icon-white"></i>View</a>
						
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
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>EMPLOYEE PERSONAL DETAILS</h3>
    </div>
    <div class="modal-body">
    	<!-- Ajax Request--><div class="loading" align="center">
            <img src="<?php echo base_url();?>assets/superadmin/img/loading.gif" alt="Loading..."/></div>
     </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
       </div>
</div>


				
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
<script type="text/javascript">
function getEmpDetails(empid)
{
	//alert(empid);
	var data=empid;
	var dataString= "empid=" + empid;
        //console.log(dataString);
	$.ajax({
		type: "POST",
		url: "<?php echo base_url()?>admin/employee/empSingleList",  //file name
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

var checkflag = "false";
function check(field) {
  if (checkflag == "false") {
    for (i = 0; i < field.length; i++) {
      field[i].checked = true;
    }
    checkflag = "true";
    return "Uncheck All";
  } else {
    for (i = 0; i < field.length; i++) {
      field[i].checked = false;
    }
    checkflag = "false";
    return "Check All";
  }
}

</script>
</script>

<!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script type="text/javascript"  src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>-->

