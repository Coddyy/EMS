<?php include('header.php'); ?>



			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?ph echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?ph echo base_url()?>/superadmin/advatisement/index">Advatisement</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Advatisement Control Home Page</h2>
                                  
                               </div>
                               
                                <div class="box-content">
                                     <form role="form" method="post" action="<?php echo base_url('superadmin/advatisement/saveHomeadv')?>" enctype="multipart/form-data">
                                         <input value="signin" name="page" type="hidden">
                                         
                                         <!---<div class="control-group">
                                            <label for="salutation" class="span2 control-label"><h4>Choose Advatisement Area:</h4></label>
                                              <div class="controls">
                                                <select class="input-xlarge form-control" name="place">
                                                    <option value=" ">Select Place</option> 
                                                    <option value="1">Right Corner</option>
                                                       <option value="2">Left Corner</option>
                                                     <option value="3">Middle Add area 1</option>
                                                       <option value="4">Middle Add area 2</option>
                                                        <option value="5">Middle Add area 3</option>
                                                        </select>
                                                    </div>
                                     </div>-->
                                         <div class="control-group">
                                            <label class="span2 control-label">Upload Add</label>
                                     <div class="controls">
                                      <div class="uploader" id="uniform-undefined">
                                          <input type="file" name="fileToUpload" size="19" style="opacity: 0;" onchange="return file_upload();">
                                             <span class="filename">No file selected</span><span class="action">Choose File</span></div>
                                            </div>
                                         </div>
                                         <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">Save Advatisement</button>
							  
		</div>
                                     </form>
                                    
                            </div>
                        </div>
                        </div>
<?php include 'footer.php';?>