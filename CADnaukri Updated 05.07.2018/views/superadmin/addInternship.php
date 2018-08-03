
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/superadmin/internship/index">Internship</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			<div class="row-fluid sortable">
                            <div class="box span12">
				<div class="box-header well" data-original-title>
                                    <h2><i class="icon-info"></i>Add Internship</h2>
				</div>      <div class="box-content">
                              <form role="form" method="post" action="<?php echo base_url('superadmin/internship/insertInternship')?>">
                    
                    <div class="control-group">
                         <label for="tile" class="span2 control-label">Title Of Internship:</label>
                        <div class="controls">
                             <input type="text" class="input-xlarge form-control " id="title" name="title" value="<?php echo set_value('tile'); ?>" placeholder="Title Of Intership" required>
                            <div  class="error"></div>
                        
                        </div>
                    </div>
                   <div class="control-group">
                          <label for="last_name" class="span2 control-label"><h4>Comapny Name:</h4></label>
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
                        <label for="location" class="span2 control-label"><h4>About the Internship:</h4></label>
                    <div class="controls"> 
                         <textarea rows='5' cols="5" class="input-xlarge form-control " name="description" value="<?php echo set_value('description'); ?>" placeholder="Write Down Something About Intership"></textarea>
                        </div>
                    </div>
                     <div class="control-group">
                        <label for="location" class="span2 control-label"><h4>Who can apply:</h4></label>
                       <div class="controls"> 
                        <textarea rows='5' class="input-xlarge form-control " name="whocanapply" value="<?php echo set_value('whocanapply'); ?>" placeholder="Eligibility Criteria"></textarea>
                       </div>
                    </div>
                     <div class="control-group">
                        <label for="location" class="span2 control-label"><h4>Location:</h4></label>
                        <div class="controls"> 
                        <select  name="location" required="">
                      <?php foreach($cities  as $cd)

                        {

                          //$is_selected=$cd->id==$job->companyId?'selected':'';

                          echo '<option value="'.$cd->city_name.'">'.$cd->city_name.'</option>';

                        } ?>
                    </select>
                     </div>
                     </div>
                    <div class="control-group">
                        <label for="location" class="span2 control-label"><h4>No. of Internships </h4></label>
                       <div class="controls"> 
                        <!-- <input type="number" class="input-xlarge form-control " id="noofintership" name="noofintership" value="<?php echo set_value('location'); ?>" placeholder="INumber of Internships available:" onblur="ValidateEmail()" required> -->
                        <select name="noofintership" required="">
                              <option value="1-2">1-2</option>
                              <option value="2-4">2-4</option>
                              <option value="4-8">4-8</option>
                              <option value="10">Upto 10</option>
                              <option value="10+">Above 10</option>
                              
                             </select>
                       </div>
                    </div>
                    <div class="control-group">
                        <label for="location" class="span2 control-label"><h4>Skill</h4></label>
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
                        <label for="Start Date" class="span2 control-label"><h4>Start Date:</h4></label>
                         <div class="controls"> 
                             <input type="date" class="input-xlarge datepicker" id="date01" name="startDate" placeholder="Pick Up the start date">
                                   
                                </div>
                        
                    </div>
                     <div class="control-group">
                        <label for="number" class="span2 control-label"><h4>Duration:</h4></label>
                       <div class="controls"> 
                           <input type="number" min="1"  class="input-xlarge form-control " id="duration" name="duration" value="<?php echo set_value('duration'); ?>" placeholder="Duration" required> 
                             <div  class="info offset2" style="color:green">Enter The Course Duration in Month</div>
                        
                    </div>
                     </div>
                     <div class="control-group">
                        <label for="number" class="span2 control-label"><h4>Stipend:</h4></label>
                        <div class="controls"> 
                             <!-- <input type="text" class="input-xlarge form-control " id="stipend" name="stipend" value="<?php echo set_value('stipend'); ?>" placeholder="stipend" required> --> 
                             <?php if($r->stipend == '20000')
                               {
                                  $view='Upto 20000';
                               }
                               else if($r->stipend == '20000+')
                               {
                                  $view='Above 20000';
                               }
                               else
                               {
                                  $view=$r->stipend;
                               }?>
                             <select name="stipend" required="">
                              <option value="3000-5000">3000 - 5000</option>
                              <option value="5000-8000">5000 - 8000</option>
                              <option value="8000-12000">8000 - 12000</option>
                              <option value="8000-12000">8000 - 12000</option>
                              <option value="20000">Upto 20000</option>
                              <option value="20000+">Above 20000</option>
                             </select>
                            
                        
                    </div>
                     </div>
                     <div class="control-group">
                        <label for="number" class="span2 control-label"><h4>Application Deadline:</h4></label>
                       <div class="controls"> 
                              <div class='input-group date'>
                                 <input type="date" class="input-xlarge datepicker" id="date02" name="endDate" placeholder="Pick Up the End date">
                                   
                                </div>
                     </div>
                     </div>
                     <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">Add Internship</button>
							  
		</div>
                    
                            
                       </form>   
                                </div>
								 </div>
                            </div>
 <?php //include 'footer.php'; ?>
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
 </script>