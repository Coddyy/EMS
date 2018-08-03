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
		<li><a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url()?>/admin/candidate/index">News and Events</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url()?>/admin/candidate/editCandidate">add News and Events</a></li>
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	    <div class="box-header well" data-original-title>
			<h2><i class="icon-info"></i>ADD NEWS AND EVENTS</h2>
        </div>
		<div class="box-content">
			<form class="form-horizontal" name="registration" action=""  method="post"   enctype="multipart/form-data">
				<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">Name</label>
                <div class="controls">
				<input type="text" class="input-xlarge form-control span8" id="name" name="name" size="50" onblur="allLetter()" placeholder="Name" value="">
                </div>
				<div id="errfn" class="error"></div> 
				</div>
				<div class="control-group">
                <label for="exampleInputDescription" class="control-label">Description</label>
                <div class="controls">
                <textarea class="input-xlarge form-control span8" id="description"  name="description" size="50" value=""></textarea>
                </div>			
                <div id="errfnds" class="error"></div>
				</div>
				<div class="control-group offset2" >
				<button type="submit" class="btn btn-warning btn-large" name="Savenews">Save</button>
				</div>
			</form>
		</div>
    </div>
	      <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example'>
          	<form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('admin/news/delete_news');?>" >                           
							<div class="pull-right" style="padding: 1%">
						
										<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>
									</div>
						  <thead>
							  <tr>
							 
							  <th><input  type="checkbox" id="checkall"  name="checkall"/></th> 
								  <th>Name</th>
								  <th>Description</th>
                                   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                                       <?php 
							if(!empty($news_info))
							{								
			              foreach($news_info  as $r){
						  $newsid=$r->id;
						  $name=$r->name;
						  $description=$r->description;

				?>	
                                                     
							<tr>
							 <td><input name="userId[]" type="checkbox" id="userId[]" value="<?php echo $r->id; ?>"></td>
								<td><?php echo $name?> </td>
								<td class="center"><?php echo $description?></td>
																					<td class="center">
                                                                   
									<a class="btn btn-info" href="<?php echo base_url('admin/intern/editIntern?id='.$r->id)?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									
								</td>
							</tr>
                                                        
                                                        
                                                  
							<?php } } ?>
                                                  </tbody>
												  </form>
                                         </table>
</div>

<?php include('footer.php') ?>
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url('application/views/script/intlTelInput.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-multiselect.js'); ?>"></script>