<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<br />

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-2">
      <a href="<?php echo base_url();?>superadmin/admin/add_daily_poll"><button class="btn btn-primary">Back</button></a>
    </div>
    <div class="col-md-3"><h3 class="pull-left">Edit Poll</h3></div>
  </div>
</div>

<br />

<form class="form-horizontal"  method="post">
<fieldset>
<?php foreach ($poll_details as $key) { ?>

<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Question</label>  
  <div class="col-md-4">
  <input id="fn" name="question" type="text" placeholder="Question" value="<?php echo $key->question;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Option A</label>  
  <div class="col-md-4">
  <input id="ln" name="ans_A" type="text" placeholder="Option A" value="<?php echo $key->ans_A;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Option B</label>  
  <div class="col-md-4">
  <input id="cmpny" name="ans_B" type="text" placeholder="Option B" value="<?php echo $key->ans_B;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Option C</label>  
  <div class="col-md-4">
  <input id="email" name="ans_C" type="text" placeholder="Option C" value="<?php echo $key->ans_C;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">Option D</label>  
  <div class="col-md-4">
  <input id="city" name="ans_D" type="text" placeholder="Option D" value="<?php echo $key->ans_D;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Repost</button>

    
  </div>
</div>

<?php } ?>
</form>
</fieldset>
