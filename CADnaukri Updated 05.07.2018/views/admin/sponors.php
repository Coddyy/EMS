<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
<!--<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />-->

<style>
	.ms-options-wrap>li
	{
		list-style-type: none;
	}
	.ui-multiselect
	{
		height:38px;
	}
</style>
<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('superadmin/index/index')?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('superadmin/sponors/index')?>">CAD CAM center</a> <span class="divider">/</span>
					</li>
          <li>
						<a href="<?php echo base_url('superadmin/sponors/sponorsEntry')?>">Add CAD CAM center</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
					
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-edit"></i>&nbspCAD/CAM Schools</h2>
				</div>
             <div class="box-content">
                                  <?php
		  if($this->session->flashdata('msg2'))
		{
			$succesapply = $this->session->flashdata('msg2');?>

			<div class="alert alert-success">
		          <button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Well done!</strong> <?php echo $succesapply ?>
			</div>
		<?php } ?>
               <?php if($this->uri->segment(4) != ""){
                $sponor_id=$this->uri->segment(4);
                //echo $sponor_id;
                $permission=$this->Sponors_M->get_permissions($sponor_id); 
                //echo $permission->companyname;    
               } ?> 

<!-- ===================================================== -->
<style type="text/css">
	.input_text{width:30%;}
	.input_select{width: 31%;}
	.radio-inline{margin-left:30px;}
	#hide_show {margin-top: -2px;margin-right:  10px;}
	
	@media screen and (max-width: 768px){
		.input_text{width: 100%;}
		.input_select{width: 100%;}
	}
</style>


<div class="container">
           <form  name="registration" action=""  method="post"   enctype="multipart/form-data" class="form-inline">			
				  <div><h4>Company Introduction</h4></div>
                                     <hr />

                                     <div class="clear"></div>
<!-- =========================================================================================== -->

                           <div class="control-group"> 
                           <div class="controls"> 

                             <label for="exampleInputName2" class="control-label span4">Company Name<span style="color:red;">*</span></label>  
                                           
                                    <input type="text" class="form-control input_text" id="companyname" onclick="showbox()" name="companyname" placeholder="Company Name"  value="<?php echo $sponors->companyname?>" required="" style="">  
                                    <!-- <div id="errfncn" class="error"></div>  --> 
                                    <?php if($this->uri->segment(4) != ""){ 

                                      if($permission->companyname == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      

                                    ?>
                                   
                                    <label class="radio-inline" style=""><input type="radio" id="hide_show" style="" name="pcompanyname"  value="Y" <?php echo $yes; ?>/>Show</label> 
                                    <label class="radio-inline" style=""><input type="radio" id="hide_show" name="pcompanyname" style="" value="N" <?php echo $no; ?>/>Hide </label>
                               	
                                    <?php } ?>
                                </div>        
                            </div>

<!-- =========================================================================================== -->

                                      <div class="control-group">		
                                      <label for="exampleInputName2" class="span4 control-label">Category<span style="color:red;">*</span> </label>
                                       <div class="controls  ">	
	                                   <select class="input-xlarge  form-control input_select" onchange="showbox()" id="selectError1" name="category" style="" required="">
                                     <?php if($sponors->category !=''){
                                              if($sponors->category == "Training"){
                                                $category="Training Institute";
                                              }
                                              else if($sponors->category == "EnggServices"){
                                                $category="Engg. Services Company";
                                              }
                                              else if($sponors->category == "Both"){
                                                $category="Training & CAD Consulting";
                                              }

                                      ?>
                                         <option value="<?php echo $sponors->category; ?>" ><?php echo $category; ?></option>
                                         <option value="Training" > Training Institute</option>
                                         <option value="EnggServices" > Engg. Services Company</option>
                                         <option value="Both" > Training & CAD Consulting</option>
                                      <?php } else { ?>
                                      <option value="0" > Select Category</option>
                  										   <option value="Training" > Training Institute</option>
                  										   <option value="EnggServices" > Engg. Services Company</option>
                                         <option value="Both" > Training & CAD Consulting</option>
                                         <?php } ?>
                										  </select>
                                  <?php if($this->uri->segment(4) != ""){  

                                      if($permission->category == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                    <label class="radio-inline"><input type="radio" id="hide_show" name="pcategory" value="Y" <?php echo $yes; ?>/>Show </label>
                                    <label class="radio-inline"><input type="radio" id="hide_show" name="pcategory" value="N" <?php echo $no; ?>/>Hide </label>
                                  <?php } ?>
                                        </div>	
                                       			
                                   </div>
           
                                   <?php $year=date('Y'); ?>
<!-- =========================================================================================== -->

                                   <div class="control-group">    
                                      <label for="exampleInputName2" class="span4 control-label">Year Estd.<span style="color:red;">*</span></label>
                                       <div class="controls ">  
                                         <select name="year_of_est" id="model-list" class="input-xlarge  form-control input_select"  required="">
                                         <?php if($sponors->year_of_est != ""){ ?>
                                         <option value="<?php echo $sponors->year_of_est;?>"><?php echo $sponors->year_of_est;?></option> 
                                         <?php for($i=$year;$i>=1980;$i--){?>
                                            
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php } ?>
                                         <?php } else { ?>
                                            <?php for($i=$year;$i>=1980;$i--){?>
                                            
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php } } ?>
                                        </select>    
                                                <!-- <div id="errfn" class="error"></div>   -->
                                                <?php if($this->uri->segment(4) != ""){  

                                      if($permission->year_of_est == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                    <label class="radio-inline"><input type="radio" id="hide_show" name="pyear_of_est" value="Y" <?php echo $yes; ?>/>Show </label>
                                    <label class="radio-inline"><input type="radio" id="hide_show" name="pyear_of_est" value="N" <?php echo $no; ?>/>Hide </label>
                                  <?php } ?>  
                                        </div>          
                                   </div>
                                 
                                  <!-- <div class="control-group">		
                                      <label for="exampleInputName2" class="span4 control-label">Name Of institute</label>
                                       <div class="controls ">	
                                         <input type="text" class="input-xlarge form-control span8" id="institute" name="institute" size="50"  placeholder="Name Of Institute" value="<?php echo $sponors->institution?>" required="">		
                                                <div id="errfn" class="error"></div>		
                                        </div>					
                                   </div> -->
<!-- =========================================================================================== -->

			                   <div class="control-group">
								   <label class="span4 control-label">Company Logo</label>
									<div class="controls">
							      		    <input type="file" name="fileToUpload"   class="input-xlarge form-control span8" >
			                       	</div>
                          <p class="isa_warning" style="color:orange;">Image size W-150 * H-65</p>
						        </div>
<!-- =========================================================================================== -->

                         <div class="control-group">
          <label class="span4 control-label" for="textarea2">Company Profile</label>
        <div class="controls ">
          <textarea class="cleditor input-xlarge  form-control input_text" style="" placeholder="Upto 60 characters" name="description" id="textarea2" rows="3"><?php echo $sponors->description?></textarea>
          <?php if($this->uri->segment(4) != ""){  

                                      if($permission->description == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
            <label class="radio-inline"><input type="radio" id="hide_show" name="pdescription" value="Y" checked="checked"/>Show </label>
            <label class="radio-inline"><input type="radio" id="hide_show" name="pdescription" value="N" />Hide</label> 
          <?php } ?>  
                </div>  
        </div>
      <!-- </div> -->
<!-- =========================================================================================== -->

                         	<div>  <h4>Contact Person Details</h4>     </div>
                          <hr />
                          <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">Contact Person<span style="color:red;">*</span></label>         
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control input_text" style="" id="contact_person" name="contact_person" placeholder="Contact Person Name" value="<?php echo $sponors->contact_person?>" required="">  
                                    <!-- <div id="errfnad" class="error"></div>   -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->contact_person == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                       <label class="radio-inline"><input type="radio" id="hide_show" name="pcontact_person" value="Y" <?php echo $yes; ?>/>Show</label> 
                                       <label class="radio-inline"><input type="radio" id="hide_show" name="pcontact_person" value="N" <?php echo $no; ?>/>Hide</label> 
                                    <?php } ?>
                                </div>    
                            </div>
                            <div class="control-group">     
                                <label for="inputEmail3" class="span4 control-label">Email<span style="color:red;">*</span></label>  
                                <div class="controls">        
                                     <input type="email" class=" input-xlarge form-control input_text" style=""  id="email" name="email" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $sponors->email?>" required>
                                    <!-- <div id="errfne" class="error"></div>   -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->email == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pemail" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pemail" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>         
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>     
                                </div>        
                            </div>
                          <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Mobile<span style="color:red;">*</span></label>  
                                <div class="controls">  
                                    <input type="tel" onkeyup = "validate_number(this)" class="input-xlarge  form-control input_text" style="" id="mobile" name="mobile"  placeholder="e.g. 8895679043"  value="<?php echo $sponors->mobile?>" required  />
             <?php echo form_error('mobile', '<div class="error">', '</div>'); ?> 
             <?php if($this->uri->segment(4) != ""){  

                                      if($permission->mobile == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                     <label class="radio-inline"> <input type="radio" id="hide_show" name="pmobile" value="Y" <?php echo $yes; ?>/>Show </label>
                                     <label class="radio-inline"> <input type="radio" id="hide_show" name="pmobile" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                                </div>         
                            </div>
                            <h4>Company Details</h4>     
                          <hr />
                          <div class="control-group">
                                <label for="exampleInputName2" class="input-xlarge span4 control-label">Address<span style="color:red;">*</span></label>					
                                <div class="controls">
                                  <textarea maxlength="140" class="cleditor input-xlarge  form-control input_text" style="" rows="3" id="add"placeholder="Enter address" name="address" required><?php echo $sponors->location?>
                                  </textarea>	
                                  <?php if($this->uri->segment(4) != ""){  

                                      if($permission->location == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="paddress" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="paddress" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                                    <!-- <div id="errfnad" class="error"></div>	 -->
                                </div>		
                            </div>	
                              <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">City/Town<span style="color:red;">*</span></label>					
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control input_text" style="" id="city" name="city"  placeholder="City/Town" value="<?php echo $sponors->city?>" required="">	
                                  <?php if($this->uri->segment(4) != ""){  

                                      if($permission->city == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                     <label class="radio-inline"> <input type="radio" id="hide_show" name="pcity" value="Y" <?php echo $yes; ?>/>Show </label>
                                     <label class="radio-inline"> <input type="radio" id="hide_show" name="pcity" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>
                              <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">State<span style="color:red;">*</span></label>					
	                                <div class="controls">
	                                   <select  name="state"   class=" input-xlarge form-control input_select" style="" required="">
                                     <?php if($sponors->state != ""){ ?>
                                     <option value="<?php echo $sponors->state;?>"><?php echo $sponors->state;?></option>
                                   <?php } else { ?>
	                                   	  <?php 
	                                   	    foreach($states as $s)
	                                   	    {
	                                   	    	$is_select=($s->state_id==$sponors->state?'selected':'');
                    												echo '<option value="'.$s->state_name.'" '.$is_select.'>'.$s->state_name.'</option>';
                    											} }
	                                   	  ?>
	                                   	  </select>
                                        <?php if($this->uri->segment(4) != ""){  

                                      if($permission->state == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" name="pstate" id="hide_show" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" name="pstate" id="hide_show" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
	                                </div>		
                            </div>
                            <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">Pincode<span style="color:red;">*</span></label>          
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control input_text" style="" id="city" name="pincode"  placeholder="Pincode" value="<?php echo $sponors->pincode?>" required=""> 
                                    <!-- <div id="errfnad" class="error"></div>   -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->pincode == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="ppincode" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="ppincode" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                                </div>    
                            </div>
                            <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Website</label>  
                                <div class="controls">          
                                    <input type="text" class="input-xlarge  form-control input_text" style="" id="website"  name="website" size="50"  placeholder="e.g.www.instituion.com" value="<?php echo $sponors->website?>"> 
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->website == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" name="pwebsite" id="hide_show" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" name="pwebsite" id="hide_show" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?> 
                                    <div id="errfnpl" class="error"></div>        
                                </div>      
                            </div>
                            <div class="control-group">			
                                <label for="inputEmail3" class="span4 control-label">Company Email<span style="color:red;">*</span></label>	
                                <div class="controls">				
                                     <input type="email" class=" input-xlarge form-control input_text" style="" id="email" name="cemail" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $sponors->cemail?>" required>
                                    <!-- <div id="errfne" class="error"></div>	 -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->cemail == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show"  name="pcemail" value="Y" <?php echo $yes; ?>/>Show</label> 
                                      <label class="radio-inline"><input type="radio"  id="hide_show" name="pcemail" value="N" <?php echo $no; ?>/>Hide</label> 
                                    <?php } ?> 				 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>
                            <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Company Mobile<span style="color:red;">*</span></label>  
                                <div class="controls">  
                                    <input type="tel" onkeyup = "validate_number(this)" class="input-xlarge  form-control input_text" style="" id="mobile" name="cmobile"  placeholder="e.g. 8895679043"  value="<?php echo $sponors->cmobile?>"  required />
             <?php echo form_error('mobile', '<div class="error">', '</div>'); ?> 
             <?php if($this->uri->segment(4) != ""){  

                                      if($permission->cmobile == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                     <label class="radio-inline"> <input type="radio" name="pcmobile" id="hide_show" value="Y" <?php echo $yes; ?>/>Show </label>
                                     <label class="radio-inline"> <input type="radio" name="pcmobile" id="hide_show" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                                </div>         
                            </div>
                              <div class="control-group">			
                                <label for="inputEmail3" class="span4 control-label">Landline </label>	
                                <div class="controls">				
                                     <input type="number" onkeyup = "validate_number(this)" class=" input-xlarge form-control input_text" style="" id="phno" name="phno" size="50"  placeholder="Contact Number" value="<?php echo $sponors->phno?>">
                                    <!-- <div id="errfne" class="error"></div>			 -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->phno == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pphno" value="Y" <?php echo $yes; ?>/>Show</label> 
                                     <label class="radio-inline"> <input type="radio" id="hide_show" name="pphno" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>		 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>	
                           	
   <?php if($sponors->category != ""){ ?> 
<!-- ############## SHOW HIDE DIV ################ -->

        <!--******* Training Box *******-->

        <div id="trainingbox" style="display:none">  

          <div> <h4>Software Courses</h4> </div>
          <hr />       
            <div class="control-group">
              <label class="span4 control-label" for="selectError1">Course Offered<span style="color:red;">*</span></label>
                 <div class="controls">
                 <input type="text" class="input-xlarge  form-control input_text" style="" onkeyup = "validate_content(this)" id="course" placeholder="Example:- Autocad ; Catia ; Creo" value="<?php echo $sponors->course?>" name="course" required>
                   
                  <?php if($this->uri->segment(4) != ""){  

                                      if($permission->course == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" name="pcourse" id="hide_show" value="Y" <?php echo $yes; ?>/>Show</label> 
                                      <label class="radio-inline"><input type="radio" name="pcourse" id="hide_show" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
            </div>
            </div>

            <div>  <h4>Affiliations & Certifications</h4>     </div>
             <hr /> 
            <div class="control-group"> 
                  <label for="exampleInputName2" class="span4 control-label">Certifying Agencies</label>  
                      <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" value="<?php echo $sponors->certification;?>" name="certification" onkeyup = "validate_content(this)" placeholder="Certifying Body Eg: Autodesk ; PTC University ; etc" >  
                                    <!-- <div id="errfnrd" class="error"></div> -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->certification == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pcertification" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pcertification" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                     </div>   
            </div>        
            <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">University Affiliations</label>  
                    <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" name="affiliation" value="<?php echo $sponors->affiliation;?>" onkeyup = "validate_content(this)" placeholder="Universities Eg: KIIT University ; AICTE ; etc" >  
                                    <!-- <div id="errfnrd" class="error"></div> -->
                                    <?php if($this->uri->segment(4) != ""){  

                                      if($permission->affiliation == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" name="paffiliation" id="hide_show" value="Y" <?php echo $yes; ?>/>Show</label> 
                                      <label class="radio-inline"><input type="radio" name="paffiliation" id="hide_show" value="N" <?php echo $no; ?>/>Hide</label> 
                                    <?php } ?>
                    </div>   
            </div>
        </div><!--******* End Training Box *******-->

          <!--******* Service Box *******-->

          <div id="servicebox" style="display:none">  
            <div>  <h4>Services</h4>     </div>
             <hr /> 
             <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">Consultency Services</label>  
                      <div class="controls">      
                        <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" name="service" value="<?php echo $sponors->service;?>" onkeyup = "validate_content(this)" placeholder="Services Eg: Service 1 ; Service 2 ; etc" >  
                        <!-- <div id="errfnrd" class="error"></div> -->
                        <?php if($this->uri->segment(4) != ""){  

                                      if($permission->service == 'Y')
                                      {
                                        $yes="checked";
                                        $no="";
                                      }
                                      else
                                      {
                                        $yes="";
                                        $no="checked";
                                      }
                                      
?>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pservice" value="Y" <?php echo $yes; ?>/>Show </label>
                                      <label class="radio-inline"><input type="radio" id="hide_show" name="pservice" value="N" <?php echo $no; ?>/>Hide </label>
                                    <?php } ?>
                     </div> 
                </div>
          </div> <!--******* End Service Box *******-->
<!-- ############## END SHOW HIDE DIV ################ -->

   <?php }else { ?>                            
                            
  <!-- ############## SHOW HIDE DIV ################ -->

        <!--******* Training Box *******-->

        <div id="trainingbox" style="display:none">  

          <div> <h4>Software Courses</h4> </div>
          <hr />       
                 <div class="controls">

            <div class="control-group">
              <label class="span4 control-label" for="selectError1">Course Offered<span style="color:red;">*</span></label>
                 <input type="text" class="input-xlarge  form-control input_text" style="" onkeyup = "validate_content(this)" id="course" placeholder="Example:- Autocad ; Catia ; Creo" value="<?php echo $sponors->course?>" name="course" required>
                   
                  
            </div>
            </div>

            <div>  <h4>Affiliations & Certifications</h4>     </div>
             <hr />	
            <div class="control-group">	
                  <label for="exampleInputName2" class="span4 control-label">Certifying Agencies</label>	
                      <div class="controls">			
                                    <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" name="certification" onkeyup = "validate_content(this)" placeholder="Certifying Body Eg: Autodesk ; PTC University ; etc" >	
                                    <!-- <div id="errfnrd" class="error"></div> -->
                     </div>		
            </div>				
            <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">University Affiliations</label>  
                    <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" name="affiliation" onkeyup = "validate_content(this)" placeholder="Universities Eg: KIIT University ; AICTE ; etc" >  
                                    <!-- <div id="errfnrd" class="error"></div> -->
                    </div>   
            </div>
        </div><!--******* End Training Box *******-->

          <!--******* Service Box *******-->

          <div id="servicebox" style="display:none">  
            <div>  <h4>Services</h4>     </div>
             <hr /> 
             <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">Consultency Services</label>  
                      <div class="controls">      
                        <input type="text" class="input-xlarge  form-control input_text" style="" id="certification" name="service" onkeyup = "validate_content(this)" placeholder="Services Eg: Service 1 ; Service 2 ; etc" >  
                        <!-- <div id="errfnrd" class="error"></div> -->
                     </div> 
                </div>
          </div> <!--******* End Service Box *******-->
<!-- ############## END SHOW HIDE DIV ################ -->
             
    <?php } ?>            
            </div>
                            <!-- <div class="control-group" >
                              <div class="col-md-4"></div> 
                              <div class="col-md-4 offset4">
                               	<button type="submit" class="btn btn-primary btn-large">Save</button>
                               	<button type="reset" class="btn btn-warning btn-large">Cancel</button>
							  </div> 
							</div> -->

								<div class="row" >
									<div class="col-md-12 col-sm-12" align="center">
										<button type="submit" class="btn btn-primary btn-large save">Save</button>

                    </form>
                               			<button type="reset" class="btn btn-warning btn-large cancle">Cancel</button>
                               		</div>
								</div>





				</fieldset>
				
			</div>
			  </div>
			</div>
		</div>

<style type="text/css">
	.save{background: #0055A5;color:#fff; width: 80px;}
	.save:hover{background-color:#FF7900;color: }
	.cancle{background:#FF7900;width: 80px; }
	.cancle:hover{background-color:#0055A5; }
</style>
				
<script>
function validate_number(num) {
    num.value = num.value.replace(/[^0-9]+/g, '');
}
function validate_content(content) {
  //alert(course);
    content.value = content.value.replace(/[^a-zA-Z0-9;]+/g, '');
}
// $(function(){
//    $("#courses").multiselect({
//    	header: "Choose options below",
//        hide: ["explode", 1000],
//        selectedList: 10 // 0-based index
//    }); 
// });
    function showbox()
    {
      var selectone=document.getElementById("selectError1");
      //alert(selectone.value);
      var training=document.getElementById("trainingbox");
      var service=document.getElementById("servicebox");
      if(selectone.value == "Training"){
        training.style.display ="block";
        service.style.display ="none";
      }
      else if(selectone.value== "EnggServices")
      {
        //alert("Working");
        training.style.display ="none";
        service.style.display ="block";
        
      }
      else if(selectone.value== "Both")
      {
        training.style.display ="block";
        service.style.display = "block";
      }

    }
    </script> 