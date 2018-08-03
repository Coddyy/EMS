<?php include('header.php'); ?>


<div>
	<ul class="breadcrumb">
		<li><a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span></li>
		<li><a href="<?php echo base_url()?>/superadmin/news/news_list">News and Events</a> <span class="divider">/</span></li>
		<!--<li><a href="<?php echo base_url()?>/superadmin/news/index">Add News and Events</a></li>-->
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	    <div class="box-header well" data-original-title>
			<h2><i class="icon-info"></i>NEWS AND EVENTS</h2>
			<div class="pull-right"><a href="<?php echo base_url('superadmin/news/index')?>" class="btn btn-primary">Add News </a></div>
        </div>
		<div class="box-content">
			 <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example'>
          	    <thead>
				   <tr>
						  <th>Sl.No</th> 
						  <th>Name</th>
						  <th>Description</th>
						   <th>Status</th>
                           <th>Actions</th>
			        </tr>
					 </thead>   
					 <tbody>
					 <?php 
					   if($news_info)
					   {
					   	$i=0;
					   	  foreach($news_info as $n)
					   	  {
					   	  	$i++;
						  	echo '<tr>';
						  	echo '<td>'.$i.'</td>';
						  	echo '<td>'.$n->name.'</td>';
						  	echo '<td >'.$n->description.'</td>';
						  	echo '<td>'.($n->status=='Y'?'Active':'Inactive').'</td>';
						    echo '<td style="  white-space: nowrap;">
							    <a class="btn btn-info" href="'.base_url("superadmin/news/index/$n->id").'">
							    <i class="icon-edit icon-white"></i>Edit</a>
							     &nbsp;&nbsp;<a class="btn btn-warning" href="'.base_url("superadmin/news/delete_news/$n->id").'">
							    <i class="icon-delete icon-white"></i>Delete</a>
						    
						    </td>';
						  	echo '</tr>';
						  }
					   }
					 ?>
                     </tbody>
				</table>
		</div>
	</div>
	
</div>

<?php include('footer.php') ?>

