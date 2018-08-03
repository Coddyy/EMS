
<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/sponors/add_home_images')?>">Add Sponors Home Images</a> 
					</li>
                </ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		 <div class="box-header well" data-original-title>
		      <?php
		        
		      ?>
               <h2><i class="icon-edit"></i>Add Sponsored Advertisements(For Home Page )</h2>
               <div class="pull-right"><input type="button" class="btn btn-primary" value="Back" onclick="goBack()"></div>
		 </div>
         <div class="box-content">
	         <?php
				  if($this->session->flashdata('msg2'))
				  {
					$succesapply = $this->session->flashdata('msg2');?>
					<div class="alert alert-success">
				          <button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Well done!</strong><?php echo $this->session->flashdata('msg2'); ?>
					</div>
			 <?php } ?>
		                       
	           <form  name="registration" action=""  method="post"   enctype="multipart/form-data">	
	              
	                  <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Name Of Sponors</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="sponors" name="sponors" 
	                                 size="50"  placeholder="Name Of Sponors" value="<?php echo $home_image->name ?>" required="">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     
	                    <div class="control-group">
							<label class="span4 control-label">Logo Of The Institutelabel</label>
								<div class="controls ">
								   	<input type="file"  class="input-xlarge form-control span8"  name="fileToUpload" id="fileToUpload" <?php echo ($is_edit=='TRUE'?"":"required")?>  >
								    <?php
				                      if($is_edit==TRUE)
				                      {
									    echo '<a href="'. $home_image->image_path.'" class="btn btn-primary btn-sm offset4" style="margin-top:-3%">Prview</a>';
									  }
				                     ?>
				                     <input type="hidden" value="<?php echo $home_image->image_path ?>" name="existing_image_path" />
				                     <div id="file_error" class="error"></div>		
						       </div>
						 </div>
						  <div class="control-group">
								<label class="span4 control-label">Start Date</label>
								 <div class="controls   ">	
								        <input type="text" class="input-xlarge form-control span8  start_date" id="start_date" 
	                                     name="start_date" placeholder="Pick  start date"  
	                                     value="<?php echo $home_image->start_date?>"  readonly required="" >	
									                             	
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>
						 </div>
						  <div class="control-group">
							<label class="span4 control-label">End Date<br/>
							 <span style="font-size: 10px">(Left Blank If Not Needed)</span></label>
						      <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8 end_date" id="end_date" 
	                                 name="end_date" readonly="" placeholder="Pick end date" 
	                                 value="<?php echo $home_image->end_date?>">		
	                                 <div id="end_date_error" class="error"></div>		
	                            </div>
	                       </div>
	                       <br/>
	                       
	                  <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Sponors Home Link</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="home_link" name="home_link" 
	                                 size="50"  placeholder="Sponors Home Link" value="<?php echo $home_image->home_link ?>" required="">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                       <div class="control-group">
							<label class="span4 control-label">Status</label>
								<div class="controls">
				      				<select class="input-xlarge  form-control span8"  name="status" required="">
	                       					  <option value="Y" <?php echo ($home_image->status=='Y'?'selected':'')?>>Active</option>
	                       					  <option value="N" <?php  echo ($home_image->status=='N'?'selected':'')?>>Inactive</option>
	                       					</select>
                     			</div>
						 </div>
						  <div class="control-group">
						  	<label class="span4 control-label"></label>
							<div class="controls offset-2">
				      			 <button type="submit" class="btn btn-primary btn-large" id="savebtn">Save</button>
				      			 <button type="reset" class="btn btn-warning btn-large">Cancel</button>
                     			</div>
						 </div>
	           </form>
	   </div>
	</div>
</div>
<script>
function goBack() {
    window.history.back()
}
	$( function() {
  var dateFormat = "mm/dd/yy",
      from = $( ".start_date" )
        .datepicker({
        	changeMonth: true,
         })
        .on( "change", function() {
          to.datepicker( "option", "minDate");
        }),
      to = $( ".end_date" ).datepicker({
          changeMonth: true,
           })
      .on( "change", function() {
        from.datepicker( "option", "maxDate");
      });
  } );
  $('#fileToUpload').on('change',function(){
  	//alert('Hello');
 
  	$("#file_error").html('');
  	var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
  	var submit=true;
	if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
	    $("#file_error").html("Only gif,png,jpg and jpeg allowed");
	    
	     	$('#savebtn').prop('disabled', true);
	     	submit=false;
	}
  	var file_size = $('#fileToUpload')[0].size;
  	if(file_size > 15000)
  	{
			$("#file_error").html("File size is greater than 15KB");
			 	$('#savebtn').prop('disabled', true);
			 	submit=false;
	}
	if(submit==true)
	{
		$('#savebtn').prop('disabled', false);
	}
	
  });
</script>