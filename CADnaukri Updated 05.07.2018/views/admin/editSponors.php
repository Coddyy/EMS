<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/index/index')?>">Homeas</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/sponors/index')?>">Sponors</a> <span class="divider">/</span>
					</li>
                                        <li>
						<a href="<?php echo base_url('admin/sponors/editSponors')?>">Edit Sponors</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-edit"></i>Edit Sponors</h2>
				</div>
                                          <div class="box-content">
                                  <?php
		  if($this->session->flashdata('msg2'))
		{
			$succesapply = $this->session->flashdata('msg2');?>

			<div class="alert alert-success">
		          <button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Well done!</strong> You successfully update Sponors.
			</div>
		<?php } ?>
                                              <?php //print_r($editData);
                                     foreach ($editData as $value) {
                                         $id=$value->id;
                                         $institution=$value->institution;
                                         $logo=$value->logo_path;
                                         $companyname=$value->companyname;
                                         $location=$value->location;
                                         $city=$value->city;
                                         $state=$value->state;
                                         $phno=$value->phno;
                                          $email=$value->email;
                                         $mobile=$value->mobile;
                                         $website=$value->website;
                                         $course=$value->course;
                                         $description=$value->description;
                                         $certification=$value->certification;
    
                                    }
                                    $logo_path=base_url($logo);
                                              ?>
                               
                                 <form  name="registration" action="<?php echo base_url('admin/sponors/updateSponors ')?>"  method="post"   enctype="multipart/form-data">			
				  <div>  <h4>Institution Details</h4>     </div>
                                     <hr />
                                     <input type="hidden"  value="<?php echo $id?>" id="id" name="id" >		
                                  <div class="control-group">		
                                      <label for="exampleInputName2" class=span2 control-label">Name Of institute<span class="error">*</span></label>
                                       <div class="controls ">	
                                         <input type="text" class="input-xlarge form-control" value="<?php echo $institution?>" id="institute" name="institute" size="50"  placeholder="Name Of Institute">		
                                                <div id="errfn" class="error"></div>		
                                        </div>					
                                   </div
                                   <div class="control-group">
					<label class="span2 control-label">Current Logo<span class="error">*</span></label>
					<div class="controls">
				      <div class="span10" id="uniform-undefined">
                                          <img src="<?php echo $logo_path?>" width="100" height="100" />
					</div>
                                        
                                     </div>
                                     <div class="control-group">
					<label class="span2 control-label">Change Logo<span class="error">*</span></label>
					<div class="controls">
				      <div class="uploader" id="uniform-undefined">
                                          <input type="file" name="fileToUpload" size="19" style="opacity: 0;">
                                          <span class="filename">No file selected</span><span class="action">Choose File</span></div>
					</div>
                                        
                                     </div>
                                   
			
                             <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Company Name<span class="error">*</span></label>	
                                <div class="controls">						
                                    <input type="text" class="input-xlarge form-control" value="<?php echo $companyname?>" id="companyname" name="companyname" onblur="cnalphanumeric()" placeholder="Company Name">	
                                    <div id="errfncn" class="error"></div>		
                                </div>				
                            </div>
                                     <div>  <h4>Contact Details</h4>     </div>
                                     <hr />
                                      
                              <div class="control-group">
                                <label for="exampleInputName2" class="span2 control-label">Location<span class="error">*</span></label>					
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control" id="location" value="<?php echo $location?>" name="location" placeholder="Location">	
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>	
                              <div class="control-group">
                                <label for="exampleInputName2" class="span2 control-label">City<span class="error">*</span></label>					
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control" value="<?php echo $city?>" id="city" name="city"  placeholder="City">	
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>
                              <div class="control-group">
                                <label for="exampleInputName2" class="span2 control-label">State<span class="error">*</span></label>					
                                <div class="controls">
                                 <input type="text" value="<?php echo $state?>" name="state" class="input-xlarge form-control typeahead" placeholder="Statr Typing..."
                                        id="typeahead" data-provide="typeahead" data-items="4"  
                                        data-source="[&quot;Andaman and Nicobar Islands&quot;,&quot;Andhra Pradesh&quot;,&quot;Arunachal Pradesh&quot;,&quot;Assam&quot;, &quot;Bihar&quot;,&quot;Chandigarh&quot;,&quot;Chhattisgarh&quot;,&quot;Dadra and Nagar Haveli&quot;,&quot;Daman and Diu&quot;, &quot;Delhi&quot;,&quot;Goa&quot;,&quot;Gujarat&quot;,&quot;Haryana&quot;,&quot;Himachal Pradesh&quot;,&quot;Jammu and Kashmir&quot;,&quot;Jharkhand&quot;,&quot;Karnataka&quot;,&quot;Kerala&quot;,&quot;Lakshadweep&quot;,&quot;Madhya Pradesh&quot;,&quot;Maharashtra&quot;,&quot;Manipur&quot;,&quot;Meghalaya&quot;,&quot;Mizoram&quot;,&quot;Nagaland&quot;,&quot;Odisha&quot;,&quot;Pondicherry&quot;,&quot;Punjab&quot;,&quot;Rajasthan&quot;,&quot;Sikkim&quot;,&quot;Tamil Nadu&quot;,&quot;Telangana&quot;,&quot;Tripura&quot;,&quot;Uttar Pradesh&quot;,&quot;Uttaranchal&quot;,&quot;West Bengal&quot;]">
                                       
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>
                            <div class="control-group">			
                                <label for="inputEmail3" class="span2 control-label">Email<span class="error">*</span></label>	
                                <div class="controls">				
                                     <input type="email" class=" input-xlarge form-control" value="<?php echo $email?>" id="email" name="email" size="50" onblur="ValidateEmail()" placeholder="Email">
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>
                              <div class="control-group">			
                                <label for="inputEmail3" class="span2 control-label">Landline Number<span class="error">*</span></label>	
                                <div class="controls">				
                                     <input type="number" class=" input-xlarge form-control" value="<?php echo $phno?>" id="phno" name="phno" size="50"  placeholder="Contact Number">
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>	
                            				
                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Mobile Number<span class="error">*</span></label>	
                                <div class="controls">	
                                    <input type="tel" class="input-xlarge  form-control" value="<?php echo $mobile?>" id="mobile"  name="mobile"  placeholder="e.g. 8895679043">	
						 <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>	
                                </div>				 
                            </div>	
                                <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Website<span class="error">*</span></label>	
                                <div class="controls">					
                                    <input type="text" class="input-xlarge  form-control" value="<?php echo $website?>" id="website"  name="website" size="50"  placeholder="e.g.www.instituion.com">	
                                    <div id="errfnpl" class="error"></div>				
                                </div>			
                            </div>
                            	<div>  <h4>Course Details</h4>     </div>
                                     <hr />			 
                            
                              <div class="control-group">
				<label class="span2 control-label" for="selectError1">Course Offered<span class="error">*</span></label>
				<div class="controls">
				<select class="input-xlarge  form-control" id="selectError1" multiple data-rel="chosen" name="course">
				           <?php $myArray = explode(',', $course); 
                                           $count=count($myArray);
                                              for($i=0;$i<$count;$i++){
                                           ?>
                                               <option value='<?php echo $myArray[$i]?>' selected><?php echo $myArray[$i]?></option>
                                              <?php } ?>
                                          
                                            <option value='3ds Max' >3ds Max</option>
                                            <option value='BIM' >BIM</option>
                                            <option value='AutoCAD Civil 3D' >AutoCAD Civil 3D</option>	
                                            <option value='AutoCAD Architecture' >AutoCAD Architecture</option>	
                                            <option value='Autodesk Revit' >Autodesk Revit</option>	
                                            <option value='ArchiCAD' >ArchiCAD</option>
                                            <option value='BricsCAD' >BricsCAD</option>
                                            <option value='Solidthinking Inspire' >Solidthinking Inspire</option>	
                                            <option value='Autodesk Inventor' >Autodesk Inventor</option>	
                                            <option value='CATIA' >CATIA</option>	
                                            <option value='NX' >NX</option>
                                            <option value='Pro/E' >Pro/E</option>
                                            <option value='Solid Edge' >Solid Edge</option>	
                                            <option value='SolidWorks' >SolidWorks</option>	
                                            <option value='IronCAD' >IronCAD</option>	
                                            <option value='Creo' >Creo</option>	
                                            <option value='ZW3D' >ZW3D</option>	
                                            <option value='TopSolid' >TopSolid</option>	
                                            <option value='Exclusive Articles' >Exclusive Articles</option>
                                            <option value='AutoCAD LT' >AutoCAD LT</option>	
                                            <option value='MicroStation' >MicroStation</option>	
                                            <option value='Rhino' >Rhino</option>	
                                            <option value='SpaceClaim' >SpaceClaim</option>	
                                            <option value='ZWCAD' >ZWCAD</option>	
                                            <option value='AutoCAD Electrical' >AutoCAD Electrical</option>	
                                            <option value='MoI' >MoI</option>	
                                            <option value='Vero' >Vero</option>
                                            <option value='ARES' >ARES</option>
                                             <option value='Solidthinking Evolve' >Solidthinking Evolve</option>	
                                             <option value='CFD' >CFD</option>
				</select>
				</div>
			</div>
                          <div class="control-group">
			 <label class="span2 control-label" for="textarea2">Description</label>
			<div class="controls span10">
			<textarea class="cleditor input-xlarge  form-control" value="<?php echo $description?>" name="description" id="textarea2" rows="3"></textarea>
			</div>
			</div>
                         <div>  <h4>Certification</h4>     </div>
                            <hr />	
                            <div class="control-group">	
                                <label for="exampleInputName2" class="span2 control-label">Name Of Certification<span class="error">*</span></label>	
                                <div class="controls">			
                                    <input type="text" class="input-xlarge  form-control" value="<?php echo $certification?>" id="certification" name="certification"  placeholder="Name Certification(Affilication)">	
                                    <div id="errfnrd" class="error"></div>
                                </div>		
                            </div>				
                            <div class="control-group" >
                                            <center>  <button type="submit" class="btn btn-warning btn-large">Update Sponors</button></center>
							  
					</div>
				</fieldset>
				</form>
			  </div>
			</div>
		</div>
				
<?php include('footer.php'); ?>
