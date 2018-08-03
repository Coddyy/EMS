<?php include('header.php'); ?>



			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/admin/job/index">Job Database</a> <span class="divider">/</span>
					</li>
                                        <li>
						<a href="<?php echo base_url()?>/admin/job/editjob">Edit Job</a> 
					</li>
				</ul>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Update Job</h2>
                                 </div>
                                <div class="box-content">
                              <form   class="form-horizontal" method="post" action="<?php echo base_url('admin/job/updateJob')?>" >
                            <?php foreach($jobsingleList as $r) { ?>
                                  <input type="hidden" name="id" value="<?php echo $r->id?>" />
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Job Title</label>
                                <div class="controls">	
                                    <input type="text" class="input-xlarge form-control" value="<?php echo $r->jobtitle?>" id="jobtitle" name="jobtitle" size="50"  placeholder="Job Title" required>		
                                    <div id="errfn" class="error"></div>		
                                </div>					
                            </div>
                       <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Years of experience</label>
                                <div class="controls">	
                                   <select name="yop" required="">

                                <?php $yop=array('0-1','1-2','2-3','3-5','5-7','7+','10+');
                                      for ($i=0; $i < count($yop); $i++) 
                                      { 
                                        $is_selected=($yop[$i] == $r->yop ? 'selected' : '');
                                        echo '<option value='.$yop[$i].' '.$is_selected.'>'.$yop[$i].'</option>';
                                      }
                                        
                                ?>
                                  </select>		
                                </div>					
                        </div>	
                        <div class="control-group">   
                                <label for="exampleInputName2" class="span2 control-label">Industry Type</label>
                                <div class="controls">	
                        <select style="height:5%;" name="industry_type">
                          <?php foreach($industry_type as $key){ ?>
                            <option value="<?php echo $key->id; ?>" style=""><?php echo $key->name;?></option>
                          <?php  } ?>
                        </select>
                        </div>          
                        </div>
                        <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Cost To Company:(PA/Lakhs in <span class="WebRupee">Rs;</span>)</label>
                                <div class="controls">	
					<div class="span3" >	
          <?php $salary=array('0-1','1-1.5','1.5-2.4','2.4-3.5','3.5-5','5-8','<=10','10-15','<=50','50+');?>
                            <select style="height:5%; " name="salary">
                              <?php 
                                for ($i=0; $i < count($salary); $i++) { 
                               
                              $is_selected=($salary[$i] == $r->salary ? 'selected' : '');
                                  echo '<option value='.$salary[$i].' '.$is_selected.'>'.$salary[$i].'</option>';
                                }
                              ?>
                            </select>
				                 </div>
                      </div>					
                </div>									
							      
                       <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Company</label>
                                <div class="controls">	
                                 <select name="companyId" class="input-xlarge form-control"   required>
				<?php
                                //$companyInfo = $this->admin_M->companyInfo();
                                    foreach($companyInfo as $res){
                                           $id=$res->id;
					 $name=$res->name?>
                                  <option value="<?php echo $id ?>"><?php echo $name?></option>
                                                 
                               <?php if($id == $r->companyId)  {  ?>                        
                                     <option value="<?php echo $r->companyId ?>" selected=""><?php echo $name?></option>
                                <?php }?>
                                      <?php }?>
				</select>		
                                </div>					
                        </div>		
			<div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Location</label>
                                <div class="controls">	
                                  <!-- <input type="text" name="location" id="location" class="input-xlarge form-control" value="<?php echo $r->location ?>" placeholder="" style="margin-bottom: 0;" required> -->
                                  <select style="height:5%; " name="location" required="">
                                    <?php foreach($citis  as $cd)

                                      {

                                        $is_selected=$cd->id==$r->location?'selected':'';

                                        echo '<option value="'.$cd->label.' '.$is_selected.'">'.$cd->label.'</option>';

                                      } ?>
                                  </select>	
                                </div>					
                          </div>	
			<div class="control-group">		
                           <label for="exampleInputName2" class="span2 control-label">Designation</label>
                           <div class="controls">	
                                <input type="text" name="designation" id="designation" class="input-xlarge form-control" value="<?php echo $r->designation ?>" placeholder="" style="margin-bottom: 0;" required>
                            </div>					
                        </div>	
			<div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Last date for receipt of Applications:</label>
                         <div class="controls">	
                            <input type="text" class="input-xlarge datepicker" id="date01" name="lastdate" value="<?php echo $r->lastdate ?>">
                        </div>					
                     </div>	
                     <div class="control-group">		
                        <label for="exampleInputName2" class="span2 control-label">Desired Qualification</label>
                        <div class="controls">	
                                    <input type="text" name="qualification" class="input-xlarge form-control" value="<?php echo $r->qualification ?>" placeholder="Minimum Qualification"  required>		
                                    <div id="errfn" class="error"></div>		
                         </div>					
                     </div>
		     <div class="control-group">		
                           <label for="exampleInputName2" class="span2 control-label">Desired Skill</label>
                          <div class="controls">
                              <select id="selectError1" class="input-xlarge form-control"  
                              multiple data-rel="chosen" name="skills">
                 <?php
                 $req_kills=$this->Job_skill_M->get_by(array('skill_id'=>$r->id));
                 foreach($req_kills as $req)
                 {
                  $skill_name=$this->Skills_M->get($req->skill_id,TRUE)->name;
               echo '<option value="'.$req->skill_id.'">'.$skill_name.'</option>';
             }
                       ?>           
                                     
                             </select>
                           </div>					
                        </div>
			<div class="control-group">		
                          <label for="exampleInputName2" class="span2 control-label">Additional Skill:<span class="error">*</span></label>
                            <div class="controls">	
                                   <input type="text" class="input-xlarge form-control" name="addtionkeyskill" value="<?php echo $r->additionalSkills ?>" placeholder="Addtionkeyskill" maxlength="1000">
                              </div>					
                         </div>	
                          <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Description:<span class="error">*</span></label>
                                <div class="controls">	
                                  <textarea   rows="5" name="description"  id="description" class="input-xlarge form-control"   placeholder="descrition" style="margin-bottom: 0;" required><?php echo $r->description?></textarea>
                                </div>					
                          </div>
                            <?php } ?>
                          <div class="control-group offset2" >
                              <button type="submit" class="btn btn-warning btn-large">Update Job</button>
			  </div>
				</form>
                                </div>
                            </div>
                        </div>
<?php include('footer.php') ?>