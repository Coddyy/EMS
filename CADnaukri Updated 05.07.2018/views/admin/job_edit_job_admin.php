<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>
<br />
<?php foreach ($job as $key) { 

//var_dump($key->skill_name);exit();
  $job_id=$key->job_id;
  $employer_id=$key->employer_id;
  //var_dump($job_id)
  $jobtitle=$key->jobtitle;
  $job_posted=$key->job_posted;
  $employer_name=$key->employer_name;
  $company_name=$key->company_name;
  $posted_date=$key->job_posted;
  $job_desc=$key->description;
  $emp_email=$key->email;
  //var_dump($emp_email);
  //$skill_name=$key->skill_name;
  ?>

<div class="container">
  <div class="row form-horizontal" > 
   
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Job Title</label>  
      <div class="col-md-4">
      <input id="jobtitle" name="jobtitle" type="text" value="<?php echo $jobtitle; ?>" class="form-control input-md" required />
      <span class="help-block"></span>  
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">Posted Date</label>  
      <div class="col-md-4">
      <input id="posted_date" name="posted_date" type="text" value="<?php echo $posted_date; ?>" class="form-control input-md" required />
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Employer Name</label>  
      <div class="col-md-4">
      <input id="employer_name" name="employer_name" type="text" value="<?php echo $employer_name; ?>" class="form-control input-md" required />
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Company Name</label>  
      <div class="col-md-4">
      <input id="company_name" name="company_name" type="text" value="<?php echo $company_name; ?>" class="form-control input-md" required />
      <span class="help-block"></span>  
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Job Description</label>  
      <div class="col-md-8">
      <p style="outline: solid;"><?php echo $job_desc; ?></p>
      <span class="help-block"></span>  
      </div>
    </div>

<!-- Text input-->
   <!--  <div class="form-group">
      <label class="col-md-4 control-label">Skill Name</label>  
      <div class="col-md-4">
      <input id="company_name" name="company_name" type="text" value="<?php //echo $skill_name; ?>" class="form-control input-md" required />
      <span class="help-block"></span>  
      </div>
    </div> -->

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
      <?php $res=$this->Job_admin_m->is_approved($job_id);
      if($res == true){ ?>
      <?php } else { ?>
        <a href="<?php echo base_url();?>jobadmin/approve_job/<?php echo $job_id; ?>/Y"><button id="singlebutton" name="singlebutton" class="btn btn-success">Approve</button></a>
        <a href="<?php echo base_url();?>jobadmin/approve_job/<?php echo $job_id; ?>/M"><button id="singlebutton" name="singlebutton" class="btn btn-primary">Request Modification</button></a>
        <a href="<?php echo base_url();?>jobadmin/approve_job/<?php echo $job_id; ?>/N"><button id="singlebutton" name="singlebutton" class="btn btn-danger">Reject</button></a>
        <?php } ?>
      </div>
    </div>

    </fieldset>

  </div>
</div>
<?php } ?>