<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/company/index')?>">Company List</a> 
						<span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/company/add_company')?>">Add Company</a> 
					</li>
                </ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		     <div class="box-header well" data-original-title>
		          <h2><i class="icon-edit"></i>Add Company</h2>
	               <div class="pull-right">
	                   <a href="<?php echo base_url('superadmin/company/index')?>"  class="btn btn-primary">Back</a>
	            	</div>
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
	                       <label for="exampleInputName2" class="span4 control-label">Company Name:</label>
	                           <div class="controls ">	
	                              <input type="text" class="input-xlarge form-control span8" id="name" 
	                                 name="name" placeholder="Company Name" value="<?php echo $company->name ?>" 
	                                 required="" />		
	                                 <div id="company_name_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Tag Line Of the Company:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="tagline" 
	                                 name="tagline" placeholder="Tag Line Of the Company" value="<?php echo $company->tagline ?>" >		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Regd.Corporate Office:</label>
	                          <div class="controls ">	
	                             <textarea class="input-xlarge form-control span8" name="regdoffc" required=""><?php echo $company->regdoffc ?></textarea>
	                                 <div id="regd_corporate_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Correspondence Address:</label>
	                           <div class="controls ">	
	                              <textarea class="input-xlarge form-control span8" name="address"><?php echo $company->address ?></textarea>
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Company Website:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="website" name="website" 
	                                 placeholder="Company website" value="<?php echo $company->website ?>" required="">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Size Of Company:</label>
	                           <div class="controls ">	
	                               <select class="input-xlarge  form-control span8"  name="teamsize">
		                               <option value="">Select Company Size</option>
		                               <option value="0-5">0-5</option>
		                               <option value="5-10">5-10</option>
		                               <option value="10-50">10-50</option>
		                               <option value="50-100">50-100</option>
		                               <option value="100-500">100-500</option>
		                               <option value="<500">Above 500</option>
	                               </select>
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Land Line Number:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="phno" name="phno" 
	                                 placeholder="Company Land Line Number" value="<?php echo $company->phno ?>" >		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Mobile Number:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="mobile" name="mobile" 
	                                 placeholder="Company Mobile Number" value="<?php echo $company->mobile ?>" required="">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Email:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="email" name="email" 
	                                 placeholder="Company Email" value="<?php echo $company->email ?>" required="">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">
							<label class="span4 control-label">Logo</label>
								<div class="controls ">
								   	<input type="file"  class="input-xlarge form-control span8"  name="fileToUpload"
								   	 id="fileToUpload" <?php echo ($is_edit=='TRUE'?"":"required")?>  >
								    <?php
				                      if($is_edit==TRUE)
				                      {
									    echo '<a href="'. $company->logo.'" class="btn btn-primary btn-sm offset4" 
									    style="margin-top:-3%">Prview</a>';
									  }
				                     ?>
				                     <input type="hidden" value="<?php echo $company->logo ?>" name="existing_image_path" />
				                     <div id="file_error" class="error"></div>		
						       </div>
						 </div>
						 <div class="control-group">
							<label class="span4 control-label">Cover Image</label>
								<div class="controls ">
								   	<input type="file"  class="input-xlarge form-control span8"  name="coverimage"
								   	 id="coverimage"  >
								    <?php
				                      if($is_edit==TRUE)
				                      {
									    echo '<a href="'. $company->coverimage.'" class="btn btn-primary btn-sm offset4" 
									    style="margin-top:-3%">Prview</a>';
									  }
				                     ?>
				                     <input type="hidden" value="<?php echo $company->coverimage ?>" name="existing_image_path" />
				                     <div id="coverimage_error" class="error"></div>		
						       </div>
						 </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Description:</label>
	                           <div class="controls ">	
	                                <textarea class="input-xlarge form-control span8" name="description"><?php echo $company->description ?></textarea>
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Facebook:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="facebook" name="facebook" 
	                                 placeholder="Company Facebook" value="<?php echo $company->facebook ?>" >		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">LinkedIn:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="linkedin" name="linkedin" 
	                                 placeholder="Company Linked In" value="<?php echo $company->linkedin ?>">		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Twitter:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="twitter" name="twitter" 
	                                 placeholder="Company Twitter" value="<?php echo $company->twitter ?>" >		
	                                 <div id="sponors_error" class="error"></div>		
	                            </div>					
	                    </div>
	                     <div class="control-group">		
	                       <label for="exampleInputName2" class="span4 control-label">Google+:</label>
	                           <div class="controls ">	
	                                 <input type="text" class="input-xlarge form-control span8" id="google" name="google" 
	                                 placeholder="Company google" value="<?php echo $company->google ?>" >		
	                                 <div id="sponors_error" class="error"></div>		
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
  $('#coverimage').on('change',function(){
  	//alert('Hello');
 
  	$("#coverimage_error").html('');
  	var ext = $('#coverimage').val().split('.').pop().toLowerCase();
  	var submit=true;
	if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
	    $("#coverimage_error").html("Only gif,png,jpg and jpeg allowed");
	    
	     	$('#savebtn').prop('disabled', true);
	     	submit=false;
	}
  	if(submit==true)
	{
		$('#savebtn').prop('disabled', false);
	}
	
  });
  
  
</script>