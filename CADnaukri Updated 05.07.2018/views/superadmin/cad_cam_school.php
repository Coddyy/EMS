<?php include('header.php'); ?>

		<div>
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="<?php echo base_url('superadmin/cadcam_school/index')?>">CAD CAM center</a> <span class="divider">/</span>
				</li>
                <li>
					<a href="<?php echo base_url('superadmin/cadcam_school/cad_cam')?>">Add CAD CAM Schools</a> <span class="divider">/</span>
				</li>
			</ul>
		</div>
				
		<div class="row-fluid sortable">
          <div class="box span12">
			<div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i>Add CAD CAM Schools</h2>
			</div>
           <div class="box-content">
	          <?php
			  if($this->session->flashdata('msg2'))
			{
				$succesapply = $this->session->flashdata('msg2');?>

				<div class="alert alert-success">
			          <button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Well done!</strong> You successfully updated CAD CAM centers.
				</div>
			<?php } ?>
                           
       <form  name="registration" action="<?php echo current_url()?>"  method="post"   enctype="multipart/form-data">			
			  <div><h4>Institution Details</h4></div>
                                 <hr />
                              <div class="control-group">		
                                  <label for="exampleInputName2" class="span2 control-label">Name Of institute<span style="color: red"> *</span></label>
                                   <div class="controls ">	
                                     <input type="text" class="input-xlarge form-control" id="institue_name" name="institue_name" size="50" value="<?php echo $cad_cam->institue_name?>" placeholder="Name Of Institute" required="">		
                                            <div id="errfn" class="error"></div>		
                                    </div>					
                               </div>
               <div class="control-group">
				<label class="span2 control-label">Logo Of The Institute</label>
					<div class="controls">
			      		<div class="uploader" id="uniform-undefined">
                   				<input type="file" name="fileToUpload" size="19" style="opacity: 0;">
                  				<span class="filename">No file selected</span><span class="action">Choose File</span>
                 	 </div>
				</div>
               </div>
               <div class="clear"></div>
               <div><h4>Contact Details</h4></div>
                <hr />
                  <div class="control-group">
                      <label  class="span2 control-label">Contact Person Name<span style="color: red"> *</span></label>					              
                      <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="contact_person" name="contact_person" value="<?php echo $cad_cam->contact_person?>" placeholder="Contact Person Name" required="">	
                                <div  class="error"></div>	
                            </div>		
                    </div>	
                    <div class="control-group">
                        <label class="span2 control-label">Address line - I <span style="color: red"> *</span></label>					                        <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="address_line1" name="address_line1" value="<?php echo $cad_cam->address_line1?>"  placeholder="Address line - I" required="">	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                         <div class="control-group">
                        <label class="span2 control-label">Address line - II </label>					             <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="address_line2" name="address_line2"  value="<?php echo $cad_cam->address_line2?>" placeholder="Address line - II">	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                        <div class="control-group">
                        <label class="span2 control-label">Contact Number <span style="color: red"> *</span></label>					             
                        <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="contact_no" name="contact_no" value="<?php echo $cad_cam->contact_no?>"  placeholder="Contact Number" required="">	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                         <div class="control-group">
                        <label class="span2 control-label">Additional  Number</label>					             
                        <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="additional_no" name="additional_no" value="<?php echo $cad_cam->additional_no?>" placeholder="Additional  Number" >	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                         <div class="control-group">
                        <label class="span2 control-label">Website Address<span style="color: red"> *</span></label>					             
                        <div class="controls">
                              <input type="text" class="input-xlarge form-control" id="website" name="website" value="<?php echo $cad_cam->website?>"  placeholder="website" required="">	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                        <div class="control-group">
                        <label class="span2 control-label">Courses Offered <span style="color: red"> *</span></label>					             
                        <div class="controls">
                            <textarea cols="3" rows="4" class="input-xlarge form-control" required="" name="courses" ><?php echo $cad_cam->courses?></textarea>
                             <div  class="info offset1" style="font-size: 12px;color: cornflowerblue;" >Multiple Courses can be entered by using comma</div>	
                                <div  class="error"></div>	
                            </div>		
                        </div>
                          	
                        <div class="control-group" >
                                        <center>  <button type="submit" class="btn btn-warning btn-large">Save</button></center>
						  
				</div>
			</fieldset>
			</form>
		  </div>
		</div>
	</div>
			
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