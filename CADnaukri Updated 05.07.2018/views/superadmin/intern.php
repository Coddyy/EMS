<?php include('header.php'); ?>



			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/intern/index')?>">Intern</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Intern Database</h2>
                                   
                                    <!--<div class="pull-right" >
					<a href="<?php echo base_url()?>superadmin/intern/signup" class="btn btn-warning">
                                            ADD Intern
                                        </a>
				</div>-->
				</div>
                                
                             <div class="box-content">
                                  <?php     if(!empty($internInfo)){?>
								    <form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('superadmin/intern/deleteallIntern');?>" > 
                                    <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example'>
                                                         
							<div class="pull-right" style="padding: 1%">
							<button type="submit" name="mail" class="btn btn-warning">Send mail </button>
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
										<a href="<?php echo base_url()?>superadmin/intern/signup" class="btn btn-warning">
                                            ADD Intern
                                        </a>
									</div>
						  <thead>
							  <tr>
							 
							  <th><input  type="checkbox" id="checkall"  name="checkall"/></th> 
								  <th>Name</th>
								  <th>Email</th>
								   <th>Mobile</th>
								    <th>Join date</th> 
                                   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php           
			              foreach($internInfo  as $r){
						 $internid=$r->id;
						  $fName=$r->name;
						  //$lName=$r->lName;
						   $name=$fName;//.' '.$lName;
						    $email=$r->email;
                             $mobile=$r->phno;
                            $isActive=$r->isActive;
						
				?>	
                                                     
							<tr>
							 <td><input name="userId[]" type="checkbox" id="userId[]" value="<?php echo $r->id; ?>"></td>
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $email?></td>
								  <td class="center"><?php echo $mobile?></td>	
								    <td class="center excludeThisClass" style="white-space: nowrap;"><?php echo date('Y-m-d',strtotime($r->created))?></td>												
								    <td class="center">
                                               <?php $edit_url=base_url('superadmin/intern/editIntern?id='.$r->id);?>                    
									<a class="btn btn-info" href="<?php echo $edit_url; ?>" title="Edit">
										<i class="icon-edit icon-white"></i>  
										                                            
									</a>
									<a class="btn btn-primary" href="<?php echo base_url('superadmin/intern/view_profile/'.$r->id)?>" title="Profile preview" target="_blank">
										<i class="icon-eye-open icon-white"></i>  </a>
									<a class="btn btn-danger delete" href="<?php echo base_url('superadmin/intern/delete_intern/'.$r->id)?>" title="Profile Delete" >
										<i class="icon-trash icon-white"></i>  </a>
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

  <!-- ########################## Get MAC Address ################-->


  <script type="text/javascript">
    var macAddress = "";
    var ipAddress = "";
    var computerName = "";
    var wmi = GetObject("winmgmts:{impersonationLevel=impersonate}");
    e = new Enumerator(wmi.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration WHERE IPEnabled = True"));
    for(; !e.atEnd(); e.moveNext()) {
        var s = e.item(); 
        macAddress = s.MACAddress;
        ipAddress = s.IPAddress(0);
        computerName = s.DNSHostName;
    } 
</script>
<input type="text" id="txtMACAdress" />
<input type="text" id="txtIPAdress" />
<input type="text" id="txtComputerName" />

<script type="text/javascript">
    document.getElementById("txtMACAdress").value = unescape(macAddress);
    document.getElementById("txtIPAdress").value = unescape(ipAddress);
    document.getElementById("txtComputerName").value = unescape(computerName);
</script>

  <!-- ########################## END Get MAC Address ################-->
				
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
