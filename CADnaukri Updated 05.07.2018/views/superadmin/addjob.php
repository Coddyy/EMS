<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/job/index')?>">Job List</a> 
						<span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/job/addjob')?>">Add Job</a> 
					</li>
                </ul>
</div>
<div class="row-fluid sortable">
      <div class="box span12">
		     <div class="box-header well" data-original-title>
		          <h2><i class="icon-edit"></i>Add JOb</h2>
	               <div class="pull-right">
	                   <a href="<?php echo base_url('superadmin/job/index')?>"  class="btn btn-primary">Back</a>
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
	                  <?php
	                  if($is_edit)
	                  {
					  	echo '<input type="hidden" name="user_id" value="'.$job->userId.'" />';
					  }
					  else
					  {
					  	echo '<input type="hidden" name="user_id" value="admin" />';
					  }
					  ?>

<style type="text/css">
  .radio_margin1{margin-left: 2%;}
  .radio_margin2{margin-right:-10%;}
  @media screen and (max-width: 768px){
    .radio_margin{margin-left: 0%;}
  }
</style>
	                  <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Hotlisted Job</label>
                                <div class="controls">	
                                   <label class="radio inline radio_margin1">
							        <input type="radio" value="Y"  name="is_feature" 
							        <?php echo $job->is_feature=='Y'?"checked":"";?>/>Yes
							      </label>
							      <label class="radio inline radio_margin2" style="margin-left: 5%;">
							        <input type="radio" value="N" name="is_feature" 
							        <?php echo $job->is_feature=='N'?"checked":"";?> />No
							      </label>
                                  	
                                </div>					
                            </div>
	                        <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Job Title</label>
                                <div class="controls">	
                                    <input type="text" class="input-xlarge form-control span4" id="jobtitle" name="jobtitle" 
                                    size="50"  placeholder="Job Title" value="<?php echo $job->jobtitle?>" required>		
                                    <div id="errfn" class="error"></div>		
                                </div>					
                            </div>

                            <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">No. of Opening</label>
                                <div class="controls">  
                                   <select name="experience" class="input-xlarge form-control span4">
                                              <!-- <option value="0" style="">--</option> -->
                                              <option value="1-2">1-2</option>
                                              <option value="2-4">2-4</option>
                                              <option value="4-10">4-10</option>
                                              <option value="bulk">Bulk Hiring</option>
                                              <option value="unspecified">unspicefied</option>
                                    </select>   
                                </div>          
                            </div>
                            




                            <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Industry Type</label>
                                <div class="controls">	
                                   <select style="height:5%;" name="industry_type" class="input-xlarge form-control span4">

                                   <?php if($this->uri->segment(4) != ""){ 
                                    $data=$this->Job_M->get_industry_type($job->industry_type);?>
                                    <option value="<?php echo $data->id;?>" style=""><?php echo $data->name;?></option>

                                   <?php } ?>
                                    <?php foreach($industry_type as $key){ ?>
                                      <option value="<?php echo $key->id; ?>" style=""><?php echo $key->name;?></option>
                                    <?php  } ?>
                                      
                                    </select>
                                </div>					
                        </div>
                        <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Years of experience</label>
                                <div class="controls">  
                                   <select name="experience" class="input-xlarge form-control span4">
                                              <!-- <option value="0" style="">--</option> -->
                                              <option value="0-1" <?php if($job->yop == '0-1'){echo 'selected="selected"';} ?> style="">0-1</option>
                                              <option value="1-2" <?php if($job->yop == '1-2'){echo 'selected="selected"';} ?>>1-2</option>
                                              <option value="2-3" <?php if($job->yop == '2-3'){echo 'selected="selected"';} ?>>2-3</option>
                                              <option value="3-5" <?php if($job->yop == '3-5'){echo 'selected="selected"';} ?>>3-5</option>
                                              <option value="5-7" <?php if($job->yop == '5-7'){echo 'selected="selected"';} ?>>5-7</option>
                                              <option value="7" <?php if($job->yop == '7'){echo 'selected="selected"';} ?>>7-10</option>
                                              <option value="7+" <?php if($job->yop == '7+'){echo 'selected="selected"';} ?>>10+</option>
                                            </select>   
                                </div>          
                        </div>
                        <div class="">
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label offset1">Cost To Company:(PA/Lakhs in <span class="WebRupee">Rs;</span>)</label>
                                <div class="controls">	
				
                                  <select style="height:5%; " name="salary" class="input-xlarge form-control span4">
                                      <option value="0-1"<?php if($job->salary == '0-1'){echo 'selected="selected"';} ?>style="">0-1</option>
                                      <option value="1-1.5" <?php if($job->salary == '1-1.5'){echo 'selected="selected"';} ?> style="">1-1.5</option>
                                      <option value="1.5-2.4" <?php if($job->salary == '1.5-2.4'){echo 'selected="selected"';} ?> style="">1.5-2.4</option>
                                      <option value="2.4-3.5" <?php if($job->salary == '2.4-3.5'){echo 'selected="selected"';} ?>>2.4-3.5</option>
                                      <option value="3.5-5" <?php if($job->salary == '3.5-5'){echo 'selected="selected"';} ?>>3.5-5</option>
                                      <option value="5-8" <?php if($job->salary == '5-8'){echo 'selected="selected"';} ?>>5-8</option>
                                      <option value="<=10" <?php if($job->salary == '<=10'){echo 'selected="selected"';} ?>>Upto 10</option>
                                      <option value="10-15" <?php if($job->salary == '10-15'){echo 'selected="selected"';} ?>>10-15</option>
                                      <option value="<=50" <?php if($job->salary == '<=50'){echo 'selected="selected"';} ?>>Upto 50</option>
                                      <option value="50+" <?php if($job->salary == '50+'){echo 'selected="selected"';} ?>>Above 50</option>
                                      
                                    </select>
				 
                                </div>					
                          </div>		
                         </div>
                           <div class="control-group">		
                              					
                          </div>									
						   <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Company</label>
                                <div class="controls">	
	                                 <select name="companyId" class="input-xlarge form-control span4"   required>
										<?php
	                                       foreach($companyInfo as $res){
	                                           $id=$res->id;
												 $name=$res->name;
												 $is_selected=$id==$job->companyId?"selected":"";
	                    		             ?>													
											<option value="<?php echo $id ?>" <?php echo $is_selected?>><?php echo $name?></option>
										 <?php } ?>
									</select>		
                                </div>					
                        </div>		
						    <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Location</label>
                                <div class="controls">	
                                  <input type="text" name="location" id="location" class="input-xlarge form-control span4" value="<?php echo $job->location?>" placeholder="" style="margin-bottom: 0;" required>	
                                </div>					
                          </div>	
			                <div class="control-group">		
                           <label for="exampleInputName2" class="span4 control-label">Designation</label>
                           <div class="controls">	
                                <input type="text" name="designation" id="designation" class="input-xlarge form-control span4" value="<?php echo $job->designation?>" placeholder="" style="margin-bottom: 0;" required>
                            </div>					
                        </div>	
			                <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Last date for receipt of Applications:</label>
                         <div class="controls">	
                            <input type="text" class="input-xlarge datepicker span4" id="datepicker" name="lastdate" value="<?php echo $job->lastdate?>">
                        </div>					
                     </div>	
                            <div class="control-group">		
                        <label for="exampleInputName2" class="span4 control-label">Eligibility</label>
                        <div class="controls">	
                                    <input type="text" name="qualification" class="input-xlarge form-control span4" value="<?php echo $job->qualification?>" 
                                    placeholder="Minimum Qualification"  required>		
                                    <div id="errfn" class="error"></div>		
                         </div>					
                     </div>
		                    <div class="control-group">		
                           <label for="exampleInputName2" class="span4 control-label">Desired Skill</label>
                          <div class="controls">
                                <select id="skills" multiple="multiple" size="5" name="skills[]" class="input-xlarge  form-control span4">
						   
                              <?php 
                            //  print_r($job_skills);
                              if($skills)
                              {
							  	foreach($skills as $s)
							  	{
							  		$is_selected='';
							  		if(in_array($s->id,$job_skills))
							  		{
										$is_selected='selected';
									}
									echo '<option value="'.$s->id.'" '.$is_selected.'>'.$s->name.'</option>';
								}
							  }
                              ?>
			             
                             </select>
                           </div>					
                       </div>
			                <div class="control-group">		
                          <label for="exampleInputName2" class="span4 control-label">Additional Skill:<span class="error">*</span></label>
                            <div class="controls">	
                                   <input type="text" class="input-xlarge form-control span4" name="addtionkeyskill" placeholder="Addtionkeyskill" maxlength="1000" value="<?php  echo $job->additionalSkills?>">
                              </div>					
                         </div>	
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Description:<span class="error">*</span></label>
                                <div class="controls">	
                                  <textarea   rows="5" name="description"  id="description" class="input-xlarge form-control span4"  placeholder="descrition" style="margin-bottom: 0;" required><?php  echo $job->description?></textarea>
                                </div>					
                          </div>
                          <div class="control-group">   
                            <label for="exampleInputName2" class="span4 control-label">Gender Preference:<span class="error">*</span></label>
                            <div class="controls">
                              <select class="input-xlarge form-control span4" name="gender">
                              <option value="<?php echo $job->gender; ?>" style=""><?php echo $job->gender; ?></option>
                                <option value="Male" style="">Male</option>
                                <option value="Female" style="">Female</option>
                                <option value="Male-Female" style="">Male/Female</option>
                              </select>

                            </div>

                    <div class="control-group">   
                      <label for="exampleInputName2" class="span4 control-label">Language:<span class="error">*</span></label>
                      <div class="controls">  
                      <input type="text" ondblclick="validatelanguage(this)" onkeyup="validatelanguage(this)" name="language" value="<?php echo $job->language;?>" maxlength="40" id="language"

                        class="input-xlarge form-control span4" value="<?php //echo $job->pincode; ?>" placeholder="" style="margin-bottom: 0;" required>
                      <label style="color:orange;">Use comma to separate</label>
                      </div>
                    </div>

                           <div class="control-group">		
                                <label for="exampleInputName2" class="span4 control-label">Job Tags:<span class="error">*</span></label>
                                <div class="controls">	
                                   <select id="job_tag" multiple="multiple" size="5" name="job_tag[]" class="input-xlarge  
                                 form-control span4" >
						   
                              <?php 
                              
                              $tag_array=array('CAD Jobs','CAE Jobs','CFD Jobs','PLM Jobs','BIM Jobs','CAD Sales Jobs','CAD SoftwareDev.Jobs','CAM Jobs');
                              if($tag_array)
                              {
							  	foreach($tag_array as $t)
							  	{
							  		$is_selected='';
							  		if(in_array($t,$job_tags))
							  		{
										$is_selected='selected';
									}
									echo '<option value="'.$t.'"'.$is_selected.'>'.$t.'</option>';
								}
							  }
                              ?>
			             
                             </select>
                                </div>					
                          </div>		
                          <div class="control-group">		
                          <label for="exampleInputName2" class="span4 control-label">Status:<span class="error">*</span></label>
                            <div class="controls">
                            <select  class="form-control span4" 	name="status">
                                <option value="Y" <?=$job->status=='Y'?'selected':''?>>Active</option>
                            	<option value="P" <?=$job->status=='P'?'selected':''?>>Pending</option>
                                 <option value="N" <?=$job->status=='N'?'selected':''?>>Inactive</option>
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
$(function(){
   $("#skills").multiselect({
   	header: "Choose options below",
       hide: ["explode", 1000],
       selectedList: 10 // 0-based index
   }); 
   $("#job_tag").multiselect({
   	header: "Choose options below",
       hide: ["explode", 1000],
       selectedList: 10 // 0-based index
   }); 
   $( "#datepicker" ).datepicker();
});
function validatelanguage()
{
  language.value = language.value.replace(/[^a-zA-Z,]+/g, '');
}
</script>