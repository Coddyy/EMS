<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/job/skills')?>">Skill List</a> 
						<span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/job/add_skill')?>">Add Skill</a> 
					</li>
                </ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		     <div class="box-header well" data-original-title>
		          <h2><i class="icon-edit"></i>Add JOb</h2>
	               <div class="pull-right">
	                   <a href="<?php echo base_url('superadmin/job/skills')?>"  class="btn btn-primary">Back</a>
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
		                       
	              <form   method="post" action="" >
	                        <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Name</label>
                                <div class="controls">	
                                    <input type="text" class="input-xlarge form-control span8" id="name" name="name" 
                                    size="50"  placeholder="Skill Name" value="<?php echo $skills->name?>" required>		
                                    <div id="errfn" class="error"></div>		
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
