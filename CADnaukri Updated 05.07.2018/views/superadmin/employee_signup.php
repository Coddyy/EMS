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
						<a href="<?php echo base_url()?>superadmin/employee/signup">Employee Sign Up</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-edit"></i>Employee Sign Up</h2>
				</div>
                                
                             <div class="box-content">
                                   <?php
		  if($this->session->flashdata('msg2'))
		{
			$succesapply = $this->session->flashdata('msg2');?>

			<div class="alert alert-success">
		          <button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Well done!</strong> You successfully inset Employee.
			</div>
		<?php } ?>
                                 <fieldset>
                                 <form  name="registration" action="<?php echo base_url('superadmin/employee/empdata')?>"  method="post"   enctype="multipart/form-data">			
				
                                  <div class="control-group">		
                                      <label for="exampleInputName2" class="span2 control-label">First Name<span class="error">*</span></label>
                                       <div class="controls">	
                                         <input type="text" class="input-xlarge form-control" id="fname" name="fname" size="50" onblur="allLetter()" placeholder="First Name">		
                                                <div id="errfn" class="error"></div>		
                                        </div>					
                            </div>				
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Last Name<span class="error">*</span></label>	
                                <div class="controls">				
                                    <input type="text" class="input-xlarge form-control" id="lname" name="lname" size="50" onblur="allLetterl()" placeholder="Last Name">	
                                    <div id="errfnl" class="error"></div>				
                                </div>				
                            </div>				
                            <div class="control-group">			
                                <label for="inputEmail3" class="span2 control-label">Email<span class="error">*</span></label>	
                                <div class="controls">				
                                     <input type="email" class=" input-xlarge form-control" id="email" name="email" size="50" onblur="ValidateEmail()" placeholder="Email">
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>				
                            <div class="control-group">		
                                <label for="inputPassword3" class="span2 control-label">Password<span class="error">*</span></label>			
                                <div class="controls">					
                                    <input type="password" class="input-xlarge form-control" id="password" name="password"  size="12" onblur="password_validation(3,10)" placeholder="Password">	
                                    <div id="errfnp" class="error"></div>				
		 	                          <?php echo form_error('password', '<div class="error">', '</div>'); ?>	
                                </div>				
                            </div>				
                            <div class="control-group">		
                                <label for="inputPassword3" class="span2 control-label">Confirm Password<span class="error">*</span></label>	
                                <div class="controls">						
                                    <input type="password" class="input-xlarge form-control" id="cpassword" name="cpassword"  size="12" onblur="cpassword_validation(3,10)" placeholder="Confirm Password">	
                                    <div id="errfnc" class="error"></div>	
                                </div>				
                            </div>				
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Mobile Number<span class="error">*</span></label>	
                                <div class="controls">	
                                    <input type="tel" class="input-xlarge  form-control" id="mobile" name="mobile"  placeholder="e.g. 8895679043">	
						 <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>	
                                </div>				 
                            </div>				 
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Company Name<span class="error">*</span></label>	
                                <div class="controls">						
                                    <input type="text" class="input-xlarge form-control" id="companyname" name="companyname" onblur="cnalphanumeric()" placeholder="Company Name">	
                                    <div id="errfncn" class="error"></div>		
                                </div>				
                            </div>				 
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Present Location<span class="error">*</span></label>	
                                <div class="controls">					
                                    <input type="text" class="input-xlarge  form-control" id="presentlocation"  name="presentlocation" size="50" onblur="alphanumeric()" placeholder="Present Location">	
                                    <div id="errfnpl" class="error"></div>				
                                </div>			
                            </div>			
                            <div class="control-group">	
                                <label for="exampleInputName2" class="span2 control-label">Roles and Designation<span class="error">*</span></label>	
                                <div class="controls">			
                                    <select id="role" name="role" required>
                                    <option value="">-Select-</option>
                                     <?php foreach($designations as $key) 
                                         {
                                          $designation_id=$key->designation_id;
                                          $designation_name=$key->designation_name;
                                          echo "<option value='$designation_id'>$designation_name</option>";
                                         }  

                                    ?>
                              </select>
                                    <div id="errfnrd" class="error"></div>
                                </div>		
                            </div>				
                            <div class="control-group">
                                <label for="exampleInputName2" class="span2 control-label">Address<span class="error">*</span></label>					
                                <div class="controls">
                                    <textarea class="input-xlarge  form-control" rows="3" placeholder="Address" name="address" onblur="alphanumericad()" ></textarea>
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>				  
                             <div class="control-group">
						<label for="exampleInputName2" class="span2 control-label">Nationality<span class="error">*</span></label>
					<div class="controls">
						<select name="nationality" class="input-xlarge  form-control" onblur="countryselect()">
							  <option value="">-- select one --</option>
							 <?php
              $country=$this->Country_M->get();
              foreach($country as $c)
              {
			  	//$is_selected=$c->country_id==$r->nationality?'selected':'';
			  	echo '<option value="'.$c->country_id.'" >'.$c->country_name.'</option>';
			  }
              ?>
							</select>
							<div id="errfnn" class="error"></div>
					</div>
				  </div>
			
				
					<div class="control-group offset2" >
                                             <button type="submit" class="btn btn-warning btn-large">Sign Up</button>							  
					</div>
				</fieldset>
				</form>
			  </div>
			</div>
		</div>
				
<?php include('footer.php'); ?>