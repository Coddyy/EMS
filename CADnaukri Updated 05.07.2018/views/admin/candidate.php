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
						<a href="<?php echo base_url()?>/admin/employee/index">Employee</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			 <?php if($this->session->flashdata('msg')){
		$msg = $this->session->flashdata('msg');?>
        <div class="alert alert-danger alert-dismissible fade in col-md-6" data-dismiss="alert" role="alert"> <b> <?php echo $msg; ?>
		</b></div>
		
    <?php } ?>
			 <div id="respose"></div>
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
				
                          <h2><i class="icon-info"></i>Candidate Database</h2>
                     
					   <!--  <div class="pull-right" >
						 <button class="btn btn-warning btn-sm pull-left" id="del_all">Delete </button>
						  <button class="btn btn-warning btn-sm pull-left" id="mail_all">Send Mail </button>
						 
						</div>	-->					 
                            
				</div>
                                
      <div class="box-content">
	<button id="btn-export" class="btn btn-warning">Export</button>
    <?php 
if(!empty($searchdata)){
	//print_r($searchdata);
}

	?>
	<form name="form" method="POST" action="" >   
    <select name="skill"  class="form-control" style="margin-top:1%" >
	<option value='' >Jobs by skill</option>									
	<option>3ds Max</option>
	<option>AutoCAD Architecture</option>
    <option>Autodesk Revit</option>
    <option>AutoCAD Mechanical</option>
    <option>AutoCAD LT</option>
    <option>AutoCAD Electrical</option>
    <option>Autodesk Inventor</option>
	<option>Alias</option>
	<option>ArchiCAD</option>
	<option>ARES</option>
	<option>BIM</option>
	<option>CATIA</option>
	<option>NX</option>
	<option>Solid Edge ST</option>
	<option>SOLIDWORKS</option>
	<option>Creo</option>
	<option>Pro/E</option>
	<option>BricsCAD</option>
	<option>MicroStation</option>
	<option>Rhino</option>
	<option>SpaceClaim</option>
	<option>ZW3D</option>
	<option>IronCAD</option>
	<option>TopSolid</option>
	<option>ZWCAD</option>
	<option>Vero</option>
	<option>Solidthinking Evolve</option>
	<option>AVEVA PDMS</option>
	<option>Delcam</option>
	<option>NX CAM</option>
	<option>CAMWorks</option>
	<option>SolidCAM</option>
	<option>Mastercam</option> 
	<option>ANSYS CFX</option>
	<option>ANSYS Workbench Platform</option>
	<option>ANSYS Fluent</option>
	<option>COMSOL</option>
	<option>CFD-ACE+</option>
	<option>CFD-CADalyzer</option>
	<option>STAR-CD</option>
	<option>STAR-CCM+</option>
	<option>scSTREAM</option>
	<option>HeatDesigner</option>
	<option>LS-DYNA</option>
	<option>Autodesk Simulation CFD</option>
	<option>HyperWorks</option>
	<option>HyperMesh</option>
	<option>Actran</option>
	<option>MSC Nastran</option>
	<option>Patran</option>
	<option>STAAD Pro</option>
	<option>SOLIDWORKS Flow Simulation</option>
	<option>SOLIDWORKS Plastics</option>
	<option>Autodesk Moldflow</option>
	<option>Moldex3D</option>
	<option>Tekla Structures</option>
	<option>Siemens Teamcenter</option>
	<option>PTC Windchill</option>
	<option>ENOVIA</option>
	<option>DELMIA</option>
    <option>SIMULIA</option>
    <option>3DVIA</option>
	<option>Onshape</option>

      </select>
   
     <select name="exeperience"  class="form-control" style="margin-top:1%">			
				<option value='' >Jobs by experience</option>										
				.									 <option value='0-0'>Fresher</option>
													  <option value='0-1' >0-1 years</option>
												      <option value='1-2' >1-2 years</option>
												     <option value='3' >2-5 years</option>	
													 <option value='4' >5-7 years</option>	
													 <option value='5' >above 7 years</option>	
										 </select>	
   <button type="submit" name="search" id="search" class="btn btn-warning" style="margin-left:1%" >Search</button>
   </form>
   	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/candidate/deleteallCandidate');?>" >
						<div class="pull-right">
							
							<button type="submit" name="mail" class="btn btn-warning">Send mail </button>
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
										<a href="<?php echo base_url()?>admin/candidate/signup" class="btn btn-warning">
                                            ADD Candidate
                                        </a>
									</div>
									<div id="dvData">
                                   <table class="table table-striped table-bordered  bootstrap-datatable datatable" id="example">
						  <thead>
							  <tr>
								 <th class="noExl"><input type="checkbox" name="checkall" id="checkall" value="yes"/></th> 
								  <th>Name</th>
								  <th>Email</th>
								  <th>Address</th>
                                  <th>Mobile</th>
								  <th class="" style="display:none">Dob</th>
								  <th class="" style="display:none">Language</th>
								  <th class="" style="display:none">Gender</th>
								  <th class="" style="display:none">Industry Type</th>
								  <th class="" style="display:none">Year Of Experience</th>
								  <th class="" style="display:none">Skills</th>
								  <th class="" style="display:none">Qualification</th>
                                
								  <th class="excludeThisClass">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php  
									   if(!empty($candInfo) && empty($searchdata)){
							$sl=1;									   
			              	foreach($candInfo  as $r)
						  	{
							  	$userId=$r->id;
							  	// $fName=$r->fName;
							  	// $lName=$r->lName;
								$name=$r->name;//.' '.$lName;
								$mobile=$r->mobile;
								$email=$r->email;
		                        $location=$r->location;
								$isActive=$r->isActive;
						
				?>	
                            
							<tr>
							<td class="noExl">
							<input name="userId[]" type="checkbox" id="userId" value="<?php echo $r->id; ?>"></td>
							
								<td><?php echo $name?> <?php if($this->SuperAdmin_M->is_today_birthday($r->id) == true)
									{
										echo "<span style='color:green;font-size:12px;'>Today's Birthday</span>";
									}
								?></td>

								<td class="center"><?php echo $email?></td>
								<td class="center"><?php echo $location?></td>
                                <td class="center"><?php echo $mobile?></td>
								<td class="center" style="display:none"><?php echo $r->dob?></td>
								<td class="center" style="display:none"><?php echo $r->language?></td> 
								<td class="center" style="display:none"><?php echo $r->gender?></td> 
								<td class="center" style="display:none"><?php echo $r->industryType?></td>
								<td class="center" style="display:none"><?php echo $r->yrofexp?></td>
								<td class="center" style="display:none"><?php echo $r->keyskills?></td> 
								<td class="center" style="display:none"><?php echo $r->qualification?></td>
								<td class="center excludeThisClass" style="width:30%" >
                                 
									<a class="btn btn-info" href="#<?php //echo base_url('admin/candidate/editCandidate?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<?php if(!empty($r->cvpath))
									{
										$disable='';
									}
									else{
										$disable='disabled';
									}?>
									<a class="btn btn-danger" href="#<?php //echo base_url('admin/candidate/download?id='.$r->id)?>" <?=$disable?>>
										<i class="icon-download icon-white"></i>  
										Download                                            
									</a>
									<a class="btn btn-info" href="<?php echo base_url();?>admin/candidate/view_profile_details/<?php echo $r->id;?>">
										<i class="icon-edit icon-white"></i>  
										View                                            
									</a>
								</td>
							</tr>
				<?php } ?>
                                                    
                                 <?php }
								 else if(!empty($searchdata))
								 {
							$sl=1;									   
			              foreach($searchdata  as $r)
						  {
						  $userId=$r->id;
						  $fName=$r->fName;
						  $lName=$r->lName;
						  $name=$fName.' '.$lName;
						  $mobile=$r->mobile;
						  $email=$r->email;
                          $location=$r->location;
						  $isActive=$r->isActive;
						
				?>	
                            
							<tr>
							<td><input name="userId[]" type="checkbox" id="userId[]" value="<?php echo $r->id; ?>"></td>
							
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $email?></td>
								<td class="center"><?php echo $location?></td>
                                 <td class="center"><?php echo $mobile?></td>
								<td class="center" style="display:none"><?php echo $r->dob?></td>
								<td class="center" style="display:none"><?php echo $r->language?></td> 
								<td class="center" style="display:none"><?php echo $r->gender?></td> 
								<td class="center" style="display:none"><?php echo $r->industryType?></td>
								<td class="center" style="display:none"><?php echo $r->yrofexp?></td>
								<td class="center" style="display:none"><?php echo $r->keyskills?></td> 
								<td class="center" style="display:none"><?php echo $r->qualification?></td>
								<td class="center excludeThisClass" style="width:30%" >
                                  
									<a class="btn btn-info" href="#<?php //echo base_url('admin/candidate/editCandidate?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#<?php //echo base_url('admin/candidate/download?id='.$r->id)?>">
										<i class="icon-download icon-white"></i>  
										Download                                            
									</a>
									<a class="btn btn-info" href="<?php echo base_url();?>admin/candidate/view_profile_details/<?php echo $r->id;?>">
										<i class="icon-edit icon-white"></i>  
										View                                            
									</a>
									
								</td>
							</tr>
								 <?php	 } }
								  
                                  else{
					echo   '<font size="3"><b>No datas are not found</b></font>';   
					} ?>                    
										    
									 
									</tbody>
                                         </table>
										 </div>
										 
										 </form>	
							
                            
                               
			  </div>
			 
			</div>
		</div>
 <!--------------------------------Employee View---------------------------------------------------------->

 <!--------------------------------Employee View---------------------------------------------------------->
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>CANDIDATE PERSONAL DETAILS</h3>
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
<!--script src='<?php echo base_url()?>assets/superadmin/js/dataTables.tableTools.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/superadmin/css/dataTables.tableTools.css">-->
<SCRIPT LANGUAGE="JavaScript">
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

$(function() {
   var startDate = $(".startDate").val();
   var endDate = $(".endDate").val();

   $("#btn-export").click(function(){
      $('<table>')
         .append(
            $("#example").DataTable().$('tr').clone()
         )
         .table2excel({
            exclude: ".excludeThisClass",
            name: "Worksheet Name",
            filename: "Candidate_list" //do not include extension
         });
   });

   $("#example").dataTable();
});
/* var table = $('#example').DataTable({
    "order": [[1, "desc"]],
    dom: 'T<"clear">lfrtip',
    oTableTools: {
        "sSwfPath": "<?=base_url()?>assets/superadmin/swf/copy_csv_xls_pdf.swf",
        "aButtons": [{
            "sExtends": "collection",
            "oSelectorOpts": { filter: 'applied', order: 'current' },
            "sButtonText": "Export",
            "aButtons": ["csv", "xls", "pdf", "print"]
        }]
 
    }
 
 
}); */



function getCanddetails(candid)
{
	//alert(empid);
	var data=candid;
	var dataString= "candid=" + candid;
        //console.log(dataString);
	$.ajax({
		type: "POST",
		url: "<?php echo base_url()?>admin/candidate/candidateSingleList",  //file name
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

   <script>
            $(document).ready(function() {
                resetcheckbox();
                $('#selecctall').click(function(event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"              
                        });
                    } else {
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                        });
                    }
                });
 
 
                $("#del_all").on('click', function(e) {
                	//alert('hello');
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);
                     
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//						return  false;
                    $.ajax({
                        url: '<?php echo base_url() ?>admin/candidate/deleteallCandidate',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
					
                        $("#respose").html(data);
						window.location.reload()
                        $('#selecctall').attr('checked', false);
                    });
                });
				  $("#mail_all").on('click', function(e) {
                	//alert('hello');
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);
                     
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//						return  false;
                    $.ajax({
                        url: '<?php echo base_url() ?>admin/candidate/sendMail',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
					
                        $("#respose").html(data);
						window.location.reload()
                        $('#selecctall').attr('checked', false);
                    });
                });
 
                $(".addrecord").click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        type: 'POST',
                        url: url
                    }).done(function() {
                        window.location.reload();
                    });
                });
                 
                function  resetcheckbox(){
                $('input:checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                   });
                }
            });
        </script>
				

