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
						<a href="<?php echo base_url()?>/admin/job/addjob">Add Job</a> 
					</li>
				</ul>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Add Job</h2>
                                 </div>
                                <div class="box-content">
                              <form   class="form-horizontal" method="post" action="<?php echo base_url('admin/job/saveJob')?>" >

                            <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Job Title</label>
                                <div class="controls">	
                                    <input type="text" class="input-xlarge form-control" id="jobtitle" name="jobtitle" size="50"  placeholder="Job Title" required>		
                                    <div id="errfn" class="error"></div>		
                                </div>					
                            </div>
                       <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Years of experience</label>
                                <div class="controls">	
                                  <select name="yop">
                                    <!-- <option value="0" style="">--</option> -->
                                    <option value="0-1" style="">0-1</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-3">2-3</option>
                                    <option value="3-5">3-5</option>
                                    <option value="5-7">5-7</option>
                                    <option value="7">7-10</option>
                                    <option value="10">10+</option>
                                  </select>
                                   <!-- <input type="text" class="input-xlarge form-control" id="yop" name="yop" size="50"  placeholder="Job Title" required> -->		
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
                                          <!-- <input type="text" name="minsal" id="minrange" class=" form-control" value=""  placeholder="Minium" style="margin-bottom: 0;" required> -->
                                          <select style="height:5%; " name="salary">
                                            <option value="0-1" style="">0-1</option>
                                                          <option value="1-1.5" style="">1-1.5</option>
                                                          <option value="1.5-2.4" style="">1.5-2.4</option>
                                                          <option value="2.4-3.5">2.4-3.5</option>
                                                          <option value="3.5-5">3.5-5</option>
                                                          <option value="5-8">5-8</option>
                                                          <option value="<=10">Upto 10</option>
                                                          <option value="10-15">10-15</option>
                                                          <option value="<=50">Upto 50</option>
                                                          <option value="50+">Above 50</option>
                                                        </select>
                                        </div>
                                    <div class="span3">	
					<!-- <input type="text" name="maxsal" id="maxrange" class=" form-control" value="" placeholder="Maximum" style="margin-bottom: 0;" required> -->
				  </div>
                                </div>					
                          </div>									
							      
                       <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Company</label>
                                <div class="controls">	
                                 <select name="companyId" class="input-xlarge form-control"   required>
				<?php
                                       foreach($companyInfo as $res){
                                           $id=$res->id;
					 $name=$res->name;
                                 ?>													
				<option value="<?php echo $id ?>"><?php echo $name?></option>
				 <?php } ?>
				</select>		
                                </div>					
                        </div>		
			<div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Location</label>
                                <div class="controls">	
                                  <!-- <input type="text" name="location" id="location" class="input-xlarge form-control" value="" placeholder="" style="margin-bottom: 0;" required> -->	
                                  <select style="height:5%; " name="location" required="">
                                    <?php foreach($citis  as $cd)

                                      {

                                        //$is_selected=$cd->id==$job->companyId?'selected':'';

                                        echo '<option value="'.$cd->label.'">'.$cd->label.'</option>';

                                      } ?>
                                  </select>
                                </div>					
                          </div>	
			<div class="control-group">		
                           <label for="exampleInputName2" class="span2 control-label">Designation</label>
                           <div class="controls">	
                                <input type="text" name="designation" id="designation" class="input-xlarge form-control" value="" placeholder="" style="margin-bottom: 0;" required>
                            </div>					
                        </div>	
			<div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Last date of Applications:</label>
                         <div class="controls">	
                            <input type="date" class="input-xlarge datepicker" id="date01" name="lastdate" >
                        </div>					
                     </div>	
                     <div class="control-group">		
                        <label for="exampleInputName2" class="span2 control-label">Desired Qualification</label>
                        <div class="controls">	
                                    <input type="text" name="qualification" class="input-xlarge form-control" value="" placeholder="Minimum Qualification"  required>		
                                    <div id="errfn" class="error"></div>		
                         </div>					
                     </div>
		     <div class="control-group">		
                           <label for="exampleInputName2" class="span2 control-label">Desired Skill</label>
                          <div class="controls">
                              <select id="selectError1" class="input-xlarge form-control"  multiple data-rel="chosen" placeholder="Skills" name="skills">
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
                           </div>					
                        </div>
			<div class="control-group">		
                          <label for="exampleInputName2" class="span2 control-label">Additional Skill:<span class="error">*</span></label>
                            <div class="controls">	
                                   <input type="text" class="input-xlarge form-control" name="addtionkeyskill" placeholder="Addtionkeyskill" maxlength="1000">
                              </div>					
                         </div>	
                          <div class="control-group">		
                                <label for="exampleInputName2" class="span2 control-label">Description:<span class="error">*</span></label>
                                <div class="controls">	
                                  <textarea   rows="5" name="description"  id="description" class="input-xlarge form-control"  placeholder="descrition" style="margin-bottom: 0;" required></textarea>
                                </div>					
                          </div>									
                          <div class="control-group offset2" >
                              <button type="submit" class="btn btn-warning btn-large">Add Job</button>
			  </div>
				</form>
                                </div>
                            </div>
                        </div>
<?php include('footer.php') ?>