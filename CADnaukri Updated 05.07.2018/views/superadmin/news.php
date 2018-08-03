<?php include('header.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<link href="<?php echo base_url('assets/superadmin/css/sumoselect.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/superadmin/js/jquery.sumoselect.js'); ?>"></script>
<script language="javascript">
function validate()
{
		var chks = document.getElementsByName('userId[]');
		var hasChecked = false;
		for (var i = 0; i < chks.length; i++)
		{
		if (chks[i].checked)
		{
		hasChecked = true;
		break;
		}
		}
		if (hasChecked == false)
		{
		alert("Please select at least one.");
		return false;
		}
		return true;
}
</script>
<div>
	<ul class="breadcrumb">
			<li><a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url()?>/superadmin/news/news_list">News and Events</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url()?>/superadmin/news/index">Add News and Events</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	    <div class="box-header well" data-original-title>
			<h2><i class="icon-info"></i>ADD NEWS AND EVENTS</h2>
			<div class="pull-right"><a href="<?php echo base_url('superadmin/news/news_list')?>" class="btn btn-primary">Back </a></div>
        </div>
		<div class="box-content">
		<?php
				  if($this->session->flashdata('msg2'))
				  {
					$succesapply = $this->session->flashdata('msg2');?>
					<div class="alert alert-success">
				          <button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Well done!</strong><?php echo $this->session->flashdata('msg2'); ?>
					</div>
			 <?php } ?>
			<form class="form-horizontal" name="registration" action=""  method="post"   enctype="multipart/form-data">
				<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">News Title</label>
                <div class="controls">
				<input type="text" class="input-xlarge form-control span8" id="name" name="name" size="50" onblur="allLetter()" placeholder="Name" value="<?php echo $news->name?>" required="">
                </div>
				<div id="errfn" class="error"></div> 
				</div>
				<div class="control-group">
                <label for="exampleInputDescription" class="control-label">Description</label>
                <div class="controls">
                <textarea class="input-xlarge form-control span8" id="description"  name="description" size="50" value=""  required=""><?php echo $news->description?></textarea>
                </div>			
                <div id="errfnds" class="error"></div>
				</div>
				<div class="control-group">
                <label for="exampleInputDescription" class="control-label">External Link</label>
                <div class="controls">
                <input type="text" class="input-xlarge form-control span8" id="ext_link" name="ext_link" size="50" onblur="allLetter()" placeholder="External Link(If any)" value="<?php echo $news->ext_link?>" required="">
              
                </div>			
                <div id="errfnds" class="error"></div>
				</div>
				<div class="control-group">
                <label for="exampleInputDescription" class="control-label">Status</label>
                <div class="controls">
                    <select class="form-control span8" name="status" required>
                    	<option value="Y"  <?php echo ($news->status=='Y'?'selected':'')?>>Active</option>
                    	<option value="N"  <?php echo ($news->status=='N'?'selected':'')?>>Inactive</option>
                    </select>
                </div>			
                <div id="errfnds" class="error"></div>
				</div>
				<div class="control-group offset2" >
				<button type="submit" class="btn btn-warning btn-large" name="Savenews">Save</button>
				</div>
			</form>
		</div>
    </div>
	      
</div>
<script>
	function goBack() {
    window.history.back()
}
</script>
<?php include('footer.php') ?>

