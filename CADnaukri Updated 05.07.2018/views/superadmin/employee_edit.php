<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>superadmin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>superadmin/employee/index">Employee</a> <span class="divider">/</span>
					</li>
                                        <li>
						<a href="<?php echo base_url()?>superadmin/employee/signup">Employee Edit</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-edit"></i>Employer Edit</h2>
				</div>
                                
                             <div class="box-content">
                                  
                                 <fieldset>
                                     <?php 
                                    // print_r($empsingleList);
                                     foreach ($empsingleList as $value) {
                                          $id=$value->id;
                                          //$fName=$value->fName;
                                          //$lName=$value->lName;
                                          $fName=$value->name;
                                          $email=$value->email;
                                          $mobile=$value->mobile;
                                          $companyName=$value->companyName;
                                          $location=$value->location;
                                          $address=$value->address;
                                          $roles=$value->roles;
                                          $nationality=$value->nationality;
                                                                                
                                         
                                     }
                                     
                                     ?>
                                 <form  name="registration" action="<?php echo base_url('superadmin/employee/empUpdate')?>"  method="post"   enctype="multipart/form-data">			
				   <input type="hidden" class="input-xlarge form-control"  name="id" value="<?php echo $id?>">		
                                  <div class="control-group">		
                                      <label for="exampleInputName2" class=span2 control-label>First Name<span class="error">*</span></label>
                                       <div class="controls">	
                                         <input type="text" class="input-xlarge form-control" id="fname" value="<?php echo $fName?>" name="fname" size="50"  placeholder="First Name">		
                                                <div id="errfn" class="error"></div>		
                                        </div>					
                            </div>				
                           <!--  <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Last Name<span class="error">*</span></label>	
                                <div class="controls">				
                                    <input type="text" class="input-xlarge form-control" id="lname"value="<?php echo $lName?>" name="lname" size="50"  placeholder="Last Name">	
                                    <div id="errfnl" class="error"></div>				
                                </div>				
                            </div> -->				
                            <div class="control-group">			
                                <label for="inputEmail3" class="span2 control-label">Email<span class="error">*</span></label>	
                                <div class="controls">				
                                     <input type="email" class=" input-xlarge form-control" id="email" value="<?php echo $email?>" name="email" size="50" onblur="ValidateEmail()" placeholder="Email">
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>				
                            
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Mobile Number<span class="error">*</span></label>	
                                <div class="controls">	
                                    <input type="tel" class="input-xlarge  form-control" id="mobile" value="<?php echo $mobile?>" name="mobile"  placeholder="e.g. 8895679043">	
						 <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>	
                                </div>				 
                            </div>				 
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Company Name<span class="error">*</span></label>	
                                <div class="controls">						
                                    <input type="text" class="input-xlarge form-control" id="companyname" value="<?php echo $companyName?>" name="companyname" onblur="cnalphanumeric()" placeholder="Company Name">	
                                    <div id="errfncn" class="error"></div>		
                                </div>				
                            </div>				 
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Present Location<span class="error">*</span></label>	
                                <div class="controls">					
                                    <input type="text" class="input-xlarge  form-control" id="presentlocation" value="<?php echo $location?>" name="presentlocation" size="50" onblur="alphanumeric()" placeholder="Present Location">	
                                    <div id="errfnpl" class="error"></div>				
                                </div>			
                            </div>			
                            <div class="control-group">	
                            <?php $designation=$this->SuperAdmin_M->get_designation($roles);
                            ?>
                                <label for="exampleInputName2" class="span2 control-label">Roles and Designation<span class="error">*</span></label>	
                                <div class="controls">			
                                    <input type="text" class="input-xlarge  form-control" id="role" name="role" value="<?php echo $designation;?>" placeholder="Roles and Designation">	
                                    <div id="errfnrd" class="error"></div>
                                </div>		
                            </div>				
                            <div class="control-group">
                                <label for="exampleInputName2" class="span2 control-label">Address<span class="error">*</span></label>					
                                <div class="controls">
                                    <textarea class="input-xlarge  form-control" rows="3" value="<?php echo $address?>" placeholder="Address" name="address"  ></textarea>
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>				  
                             <div class="control-group">
						<label for="exampleInputName2" class="span2 control-label">Nationality<span class="error">*</span></label>
					<div class="controls">
						<select name="nationality" class="input-xlarge  form-control" onblur="countryselect()">
                                    <option value="">Select COuntry</option>               
							 <?php
              $country=$this->Country_M->get();
              foreach($country as $c)
              {
			  	$is_selected=$c->country_id==$nationality?'selected':'';
			  	echo '<option value="'.$c->country_id.'" >'.$c->country_name.'</option>';
			  }
              ?>
							</select>
							<div id="errfnn" class="error"></div>
					</div>
				  </div>
			
				
					<div class="control-group offset2" >
                                             <button type="submit" class="btn btn-warning btn-large">Update</button>							  
					</div>
				</fieldset>
				</form>
			  </div>
			</div>
		</div>
				
<?php include('footer.php'); ?>