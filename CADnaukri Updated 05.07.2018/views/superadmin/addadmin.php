<?php include('header.php'); ?>
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
 <link href="<?php echo base_url('assets/superadmin/css/sumoselect.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/superadmin/js/jquery.sumoselect.js'); ?>"></script>
      <script type="text/javascript">
				jQuery(document).ready(function ($)  {

							window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 5 });

							window.test = $('.testsel').SumoSelect({okCancelInMulti:true });

							window.testSelAll = $('.testSelAll').SumoSelect({okCancelInMulti:true, selectAll:true });

							window.testSelAll2 = $('.testSelAll2').SumoSelect({selectAll:true });

						});

    </script>

<style>
.alert_error
{
	color:red;
}
.alert_success
{
	color:Green;
}
</style>
<div>

	<ul class="breadcrumb">

	<li>

            <a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>

	</li>

	<li>

	   <a href="">add admin</a> <span class="divider">/</span>

	</li>

        <li>

	   <a href="<?php echo base_url('superadmin/admin/index')?>">add admin</a> 

	</li>

        </ul>

</div>

<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>ADD ADMIN</h2>
        </div>
        <div class="box-content">
         <form class="form-horizontal" name="registration" action=""  method="post"   enctype="multipart/form-data">
		 <?php 
					$sql='select * from module';
					$query=$this->db->query($sql);
					$result=$query->result();
				
			?>
			<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">Assign Modules</label>
                 <div class="controls">
			    <select  multiple="multiple" placeholder="Modules" name="module[]" class="SlectBox form-control" required>
				<?php foreach($result as $row)
				{
				$module_id = $row->id;
				$module_name = $row->name;
				?>
				 <option value="<?php echo $module_id?>"><?php echo $module_name?></option>
				<?php
				} ?>       
					   
						</select>
                </div>
			<div id="errfn" class="error"></div> 
            </div>
			<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">Name</label>
                 <div class="controls">
				<input type="text" class="input-xlarge form-control span8" id="name" name="name" size="50" onblur="allLetter()" placeholder="Name" value="">
                </div>
			<div id="errfn" class="error"></div> 
            </div>
			<div class="control-group">
                <label for="exampleInputPassword1" class="control-label">Email</label>
                 <div class="controls">
                    <input type="email" class="input-xlarge form-control span8" id="emailid" name="emailid" size="50" onblur="ValidateEmail()" placeholder="Email" value="">
                </div>    
                <div id="errfne" class="error"></div>
					<?php echo form_error('emailid', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="control-label">Password</label>
                 <div class="controls">
                 <input type="password" class="input-xlarge form-control span8" id="password"  name="password" size="50" placeholder="Password" value="">
                 </div>			
                 <div id="errfnpl" class="error"></div>
			</div>
			<div class="control-group">
                <label for="exampleInputPassword1" class="control-label">Phone Number</label>
                 <div class="controls">
                    <input type="text" class="input-xlarge form-control span8" id="phone_no" name="phone_no" size="50" placeholder="Phone Number" value="">
                </div>    
                <div id="errfne" class="error"></div>
					<?php echo form_error('phone_no', '<div class="error">', '</div>'); ?>
             </div>
			<div class="control-group offset2" >
				<button type="submit" class="btn btn-warning btn-large" name="SaveAdmin">Save</button>
			</div>
        </form>
	</div>
    </div>
</div>
<?php 
if($msg)
{ ?>
	<div class="alert alert-success" role="alert"><h4 class="<?php echo $msg_color?>"><?php echo $msg; ?></h4></div>
<?php }
?>
<div class="row-fluid sortable">
      <div class="box span12">
		 <div class="box-header well" data-original-title>
               <h2><i class="icon-edit"></i>Admin List</h2>
               <?php 
               $href=base_url("superadmin/admin/addadmin");
			   ?>
         <div class="pull-right"></div>
		 </div>
			<div class="box-content">
	        <table class="table table-striped table-bordered  bootstrap-datatable datatable" id='example' >
	                 <thead>
							<tr>
							<th>SL No</th>
							<th>Admin Name </th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Assigned Module</th>    
							<th class="">Actions</th>
							</tr>
						  </thead> 
						 <tbody>
							<?php
							if($admin_list)
							{
								 $i=0;
								foreach($admin_list as $res)
								{ 
								$admin_id=$res->id;
								$name=$res->name;
								$email=$res->email;
								$phone_number=$res->phone_number;
								$module_id=$res->module_id;
								$module_array=(explode(",",$module_id));
								
								// $dataset=$this->SuperAdmin_M->get_module_name($module_id);
									 
								 ?>
								
								<tr>
								<td class="center"><?php echo ++$i?></td>
								<td class="center"><?php echo $name?></td>
								<td class="center"><?php echo $email?></td>
								<td class="center"><?php echo $phone_number?></td>
								 <td class="center">
								<?php  
								$sl_comma_adm='1';
								$count_array=count($module_array);
								foreach($module_array as $row)
									 {
										 $module_name=$row;
										 $dataset=$this->SuperAdmin_M->get_module_name($module_name);
										 $module=(implode(" , ",$dataset));
										 echo $module;
										if($sl_comma_adm < $count_array)
											{
												echo ',';
											}
											$sl_comma_adm ++;
										 
									 }
									 ?>
								</td>
								<form action="" method="post">
                                <td class="center">	
								<input type="hidden" name="admin_id" value="<?php echo $admin_id?>">
								<input type="submit" name="delete_btn"  Value="Delete" class="btn btn-warning"></td>
								</form>
								</tr>
						  <?php } 
							}
							?>
						 </tbody>                
	          </table>
			</div>
	</div>
</div>

<?php include('footer.php') ?>

		<script src="<?php echo base_url('application/views/script/intlTelInput.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap-multiselect.js'); ?>"></script>