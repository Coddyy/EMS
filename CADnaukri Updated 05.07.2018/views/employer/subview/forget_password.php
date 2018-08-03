<div class="container" style="padding-bottom: 10%;">
        <div class="formbox">
		<h1 class="orange"><i class="fa fa-check"></i>Reset Your Password</h1>
				<h3> Enter email address  to receive an email with the link to reset your password. !</h3>
				<hr/>
		<?php
		  if($this->session->flashdata('msg')){
			  $msg = $this->session->flashdata('msg');?>
			  <div class="alert alert-danger alert-dismissible fade in col-md-6 col-md-offset-3" data-dismiss="alert" role="alert"><?php echo $msg; ?></div>
		  <?php } ?>
	<div class="divider"></div>
	<form class="form-horizontal" action="<?=current_url()?>" method="post">
			<input type="email" class="form-control"  placeholder="Email" style="display:none">
               <div class="form-group">
				  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-6">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-4">
					 <button type="submit" class="btn btn-primary">RESET</button>
					<a href="<?php echo base_url('hauth/index')?>" style="margin-bottom: 0;"  value="Cancel" class="btn btn-primary">Cancel</a>
					
					</div>
				  </div>
	</form>
       
			
		</div>
		
</div>