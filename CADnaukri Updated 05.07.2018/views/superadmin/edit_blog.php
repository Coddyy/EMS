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
      <a href="<?php echo base_url();?>superadmin/admin/add_blog"><button class="btn btn-primary">Back</button></a>
    </div>
    <div class="col-md-3"><h3 class="pull-left">Edit Blog</h3></div>
  </div>
</div>

<br />

<form class="form-horizontal"  method="post" enctype="multipart/form-data">
<fieldset>
<?php foreach ($blog_details as $key) { ?>

<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Title</label>  
  <div class="col-md-4">
  <input id="fn" name="blog_title" type="text" placeholder="Title" value="<?php echo $key->blog_title;?>" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Content</label>  
  <div class="col-md-4">
  <input id="cmpny" name="description" type="text" placeholder="Description" value="<?php echo $key->description;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">More About Content</label>  
  <div class="col-md-4">
  <input id="cmpny" name="more_description" type="text" placeholder="More Description" value="<?php echo $key->more_description;?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Image</label>  
  <div class="col-md-4">
  <input id="email" name="blogpic" type="file" placeholder="Image" value="<?php echo $key->image;?>" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Image Description</label>  
  <div class="col-md-4">
  <input id="cmpny" name="image_desc" type="text" placeholder="Blog Link" value="<?php echo $key->image_desc;?>" class="form-control input-md" required="">
    
  </div>
</div>




<!-- Text input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Update</button>

    
  </div>
</div>

<?php } ?>
</form>
</fieldset>
