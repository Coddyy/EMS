 <title>Repost Job</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
 <style>

 .error

 {

 color:#FF0000;

 }

</style>

<!--test-->
<div class="row-fluid sortable">
      <div class="box span12">
		     <div class="box-header well" data-original-title>
		     	<h2><i class="icon-edit"></i><?=$this->uri->segment("3")==""?'ADD':'REPOST';?> Job</h2>
		     	<div class="pull-right">
	                   <a href="<?php echo base_url('superadmin/job/index')?>"  class="btn btn-primary">Back</a>
	            	</div>
	            </div>

<!--test-->
 <div class="main-container" style="border:0px solid red;">

     <section class="wht-bg">

          <section class="section">

                        <!-- <div class="col-xs-12" style="border:1px solid green;">

                  			<div class="xcolleft">

                  			<div class="row">

                  			  <div class="col-md-8"><h3>
                  			  <?=$this->uri->segment("3")==""?'ADD':'REPOST';?> Job</h3></div>

                  			 

                  			</div> -->

                  		   <?php 	

                  		   	if($this->session->flashdata('success'))

								{

									$succesmsg = $this->session->flashdata('success');

								?>

									<div class="alert alert-success" role="alert" style=" color: #4F8A10;

   										 background-color: #DFF2BF;padding:10px"><?php echo $succesmsg;?></div>

								<?php } ?> 

							<?php 

							$new_skills_array=array();

							if($is_edit_skills==TRUE)

							{

								foreach($job_skill_detail as $csk)

								{

									array_push($new_skills_array, $csk->skill_id);

									 

								}

							}

							?>

								<form class="form-horizontal" method="post" action="" id="f1" style="border:0px solid red;">


									<div class="form-group" style="margin-top:10px; border: 0px solid green;">
									

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Job

											Title<span class="error">*&nbsp&nbsp</span>

										</label>

										

											<input type="text" class="form-control span6" id="jobtitle" onkeyup="validatejobtitle()" name="jobtitle" value="<?php echo $job->jobtitle?>" size="50" onblur="allLetter()" placeholder="Job Title" maxlength="40" required>

											
											<label id="errjt"></label>

										
								</div>

									
									<div class="form-group" style="margin-top:10px; border: 0px solid green;">

										<label for="exampleInputName2" class="span4 control-label"  style="border: 0px solid red; text-align: left;">Experience (IN years)<span class="error">*&nbsp&nbsp</span>

										</label>
										
										<div class="col-sm-10"  style="border: 0px solid red;">
											<select name="experience">
                                              <option value="0" style="">--</option>
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

									<div class="form-group" style="margin-top:10px; border: 0px solid green;">
									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label"  style="border: 0px solid red; text-align: left;">Job Type<span class="error">*&nbsp&nbsp</span>
										</label>
										<div class="col-sm-10"  style="border: 0px solid red;">
											<select name="job_type">
											<option value="<?php echo $job->job_type;?>" style=""><?php echo $job->job_type;?></option>
											  <option value="Full-time" style="">Full-time</option>
				                              <option value="Part-time" style="">Part-time</option>
				                              <option value="Contractual" style="">Contractual</option>
				                              <option value="Freelance" style="">Freelance</option>
				                            </select>
										</div>
									<!-- </div> -->
									</div>
									<div class="form-group" style="margin-top:10px; border: 0px solid green;">

									<!-- <div class="form-group" style=""> -->

										<label for="exampleInputName2" class="span4 control-label"  style="border: 0px solid red;text-align: left;">Indutry Type<span class="error">*&nbsp&nbsp</span>
										</label>
										<div class="col-sm-10"  style="border: 0px solid red;">
										<select name="industry_type">
										<?php $data=$this->Job_M->get_industry_type($job->industry_type);?>
											<option value="<?php echo $data->id;?>" style=""><?php echo $data->name;?></option>
											<?php $industry_type=$this->Job_M->get_industry_type();
											foreach($industry_type as $key){ 

												?>
											  <option value="<?php echo $key->id; ?>" style=""><?php echo $key->name;?></option>
											<?php  } ?>
				                              
				                            </select>
											  
										</div>
									<!-- </div> -->
									</div>
									<div class="form-group" style="margin-top:10px; border: 0px solid green;">

									<!-- <div class="form-group" style=""> -->

										<label for="exampleInputName2" class="span4 control-label"  style="border: 0px solid red;text-align: left;">
										CTC Per Annum:(PA/Lakhs in <span class="WebRupee">Rs;</span>)<span class="error">*&nbsp&nbsp</span>

										</label>
										<div class="col-sm-10"  style="border: 0px solid red;">

											<select  name="salary">
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
										<!-- </div> -->

									</div>
										<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Gender<span

											class="error">*&nbsp&nbsp</span></label>

										<div class="col-sm-10">

											<select  name="gender">
											<option value="<?php echo $job->gender;?>" style=""><?php echo $job->gender;?></option>
											  <option value="Male" style="">Male</option>
				                              <option value="Female" style="">Female</option>
				                              <option value="Male-Female" style="">Male/Female</option>
				                            </select>

										</div>

									<!-- </div> -->

									</div>
										<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Language<span

											class="error">*&nbsp&nbsp</span></label>

										<!-- <div class="col-sm-10"> -->

											<input type="text" value="<?php echo $job->language;?>" ondblclick="validatelanguage(this)" onkeyup="validatelanguage(this)" name="language" maxlength="40" id="language"

												class="form-control span6" value="<?php //echo $job->pincode; ?>" placeholder="" style="margin-bottom: 0;" required>
											<label style="color:orange;">Use Comma To Separate</label>
										<!-- </div> -->

									<!-- </div> -->

									</div>


									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Company

											<span

											class="error">*&nbsp&nbsp</span>

										</label>

										<div class="col-sm-10">

											<select name="companyId"  class="form-control">

											<?php 

											if(!empty($company_data))

											{

												foreach($company_data  as $cd)

												{

													$is_selected=$cd->id==$job->companyId?'selected':'';

													echo '<option value="'.$cd->id.'"'.$is_selected.'>'.$cd->name.'</option>';

												}

												  

												  

											}

											?>

											</select>



										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Location<span

											class="error">*&nbsp&nbsp</span></label>

										<div class="col-sm-10">

										<select  class="form-control" name="location">

											<?php
											
											foreach($city_list as $ctl)
											{
												$is_selected=$ctl->city_id==$profile->location?'selected':'';
												echo '<option value="'.$ctl->city_name.'" '.$is_selected.'>'.$ctl->city_name.'</option>';
											}
											
											?>
											</select>

										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Designation&nbsp&nbsp</label>

										<div class="col-sm-10">

											<input type="text" name="designation" id="designation" 

												class="form-control span6" value="<?php echo $job->designation?>" placeholder=""

												style="margin-bottom: 0;" >

										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Last

											date for receipt of Applications:<span class="error">*&nbsp&nbsp</span>

										</label>

										<div class="col-sm-10">

											<?php 
											$val1 = date_format(date_create($job->lastdate), 'm/d/Y');?>

                                            <input type="text" id="datepicker" name="lastdate" id="lastdate" class="form-control span6"
                                            value="<?php echo $val1?>" style="cursor:pointer" readonly>

										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Desired

											Qualification<span class="error">*&nbsp&nbsp</span>

										</label>

										<div class="col-sm-10">

											<input type="text" name="qualification" class="form-control span6"

												value="<?php echo $job->qualification?>" placeholder="Minimum Qualification" required>

											<div id="errfn" class="error"></div>

										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Desired

											Skill<span class="error">*&nbsp&nbsp</span>

										</label>

										<div class="col-sm-10">

											<select multiple="multiple" placeholder="Skills"

												name="skills[]" class="SlectBox form-control" required>

												<?php 

												if(!empty($skills))

												{

													foreach($skills as $s)

													{

														$is_selected=(in_array($s->id, $new_skills_array))?'selected':'';

														echo '<option value="'.$s->id.'"'.$is_selected.'>'.$s->name.'</option>';

													}

													

												}

													

												?>

											</select>

										</div>

									<!-- </div> -->

									</div>

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">

										Additional Skill:<span class="error">*&nbsp&nbsp</span>

										</label>

										<div class="col-sm-10">

											<input type="text" class="form-control span6"  value="<?php echo $job->additionalSkills?>" name="additionalSkills" 
											placeholder="Addtionkeyskill" maxlength="1000">

										</div>

									<!-- </div> -->

								</div>

								<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group"> -->

										<label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Description:<span

											class="error">*&nbsp&nbsp</span></label>

										<div class="col-sm-10">

											<textarea cols="80" rows="8" name="description"

												class="description" id="description" class="form-control span6"

												placeholder="Descrition" 

												style="margin-bottom: 0;width:48%;height:30%;" required><?php echo $job->description?></textarea>

										</div>
									<!-- </div> -->
								</div>
										<!-- #################### -->
										<div class="form-group" style="margin-top:10px">

											<!-- <div class="form-group"> -->

											<!-- <div class="control-group"> -->		
                                <label for="exampleInputName2" class="span4 control-label" style="text-align: left;">Job Tags:<span class="error">*&nbsp&nbsp</span></label>

                                <div class="col-sm-10 ">	
                                   <select id="job_tag" multiple="multiple" size="5" name="job_tag[]" class="input-xlarge  
                                 form-control " >
						   
                              <?php 
                              
                              $tag_array=array('CAD Jobs','CAE Jobs','CFD Jobs','PLM Jobs','BIM Jobs','CAD Sales Jobs','CAD SoftwareDev.Jobs');
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
                          <!-- </div>		 -->


										<!-- #################### -->

									</div>

									<!-- </div> -->

									<div class="form-group" style="margin-top:10px">

									<!-- <div class="form-group" > -->

										<!-- <div class="col-sm-offset-5 col-sm-6"> -->
											<div class="row">
												<center>

											<button class="btn btn-primary" type="submit" onclick="validate()" name="submit" class="button">Repost</button>



											<a href="<?php echo base_url('superadmin/job/index')?>"

												class="btn btn-danger">Cancel</a>
											</center>

										<!-- </div> -->

									<!-- </div> -->

									</div>

								</form>

							</div>

                  	</div>

                 </div>

               </div>

             </div>

           </div>

         </section>

     </section>

 </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Profile Image</h4>

      </div>

      <div class="modal-body">

       <form  method="post" action="<?php echo base_url('employer/dashboard')?>" enctype="multipart/form-data" 

  		   onsubmit="return validate_image_upload();" >

        <div class="row">

	    <div class="form-group ">

			<label for="tile" class="control-label col-sm-3">Select Your Image</label>

			<div class="col-sm-9">

			 <input type="file" name="file" id="fileToUpload">

			</div>

	  	</div>

	   </div>

	    <div class="row">

	    <div class="col-sm-offset-3">

	    <button type="submit" class="btn btn-primary" name="upload">Upload</button>

	      <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>

	     </div>

	    </div>

       </form>

      </div>

     

    </div>

  </div>

</div>



<script>
function isNumber(evt) {
				evt = (evt) ? evt : window.event;
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				console.log(charCode);
				if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !=46) {
					return false;
				}
				return true;
			}
	$('select[multiple]').multiselect({



		// text to use in dummy input

		//placeholder   : 'Select',    



		// how many columns should be use to show options

		columns       : 1,  



		// include option search box   

		search        : false,    



		// search filter options

		searchOptions : {

		  default      : 'Search', // search input placeholder text

		  showOptGroups: false     // show option group titles if no options remaining

		},     



		// add select all option

		selectAll     : false, 



		// select entire optgroup   

		selectGroup   : false,  



		// minimum height of option overlay

		minHeight     : null,   



		// maximum height of option overlay

		maxHeight     : null,  



		// display the checkbox to the user

		showCheckbox  : true,  



		// options for jquery.actual

		jqActualOpts  : {},    



		// maximum width of option overlay (or selector)

		maxWidth      : null, 



		// minimum number of items that can be selected

		minSelect     : false, 



		// maximum number of items that can be selected

		maxSelect     : false, 



});
$(function() {
    $( "#datepicker" ).datepicker({minDate:0});
  });

  $(function() {
   
     var locations =<?php echo json_encode($citis)?>;
     //alert(locations);
    $( "#location" ).autocomplete({
    	

      source: locations, select: function(event, ui) {
               $('#selected_location').val((ui.item.label));
            }
            
    });
  });

	</script>

<script>

function validatedesignation()
{
	designation.value = designation.value.replace(/[^a-zA-Z- ]+/g, '');
}
function validatelanguage()
{
	language.value = language.value.replace(/[^a-zA-Z,]+/g, '');
}
function dislabel(msg,plocation,color)
{
	document.getElementById(plocation).innerHTML = msg;
	document.getElementById(plocation).style.color = color;
}
function validatejobtitle()
{
	var name=document.getElementById("jobtitle").value;
	if(name.length > 10 &&  name.length < 20)
	{
		dislabel("Good !","errjt","orange");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 20 && name.length < 30)
	{
		dislabel("Great !","errjt","#87CEFA");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 30)
	{
		dislabel("Awesome !","errjt","#32CD32");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return true;
	}
	else if(name.length > 0 && name.length < 10)
	{
		dislabel("Not Preferable !","errjt","red");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return false;
	}
	else if(name.length == 0)
	{
		dislabel("Enter Jobtitle!","errjt","red");
		jobtitle.value = jobtitle.value.replace(/[^a-zA-Z- ]+/g, '');
		return false;
	}
}

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
</script>