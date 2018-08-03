<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<div class="container">
	<div class="row">
		<div class="span6  well">
		<?php if($this->uri->segment(3) == "notification_saved"){ ?>

			<div class="alert alert-success">
			  Notification Saved
			</div>

		<?php }else if($this->uri->segment(3) == "notification_not_saved"){ ?>

			<div class="alert alert-danger">
			  Notification Not Saved
			</div>

		<?php	} else if($this->uri->segment(3) == "notification_deleted"){ ?>

			<div class="alert alert-success">
			  Notification Deleted
			</div>

		<?php	}else if($this->uri->segment(3) == "notification_not_deleted"){ ?>

			<div class="alert alert-danger">
			  Notification Not Deleted
			</div>

		<?php	}?>
		      <legend align="center">Set Notification</legend>
		    <form accept-charset="UTF-8" action="" method="post">
				<input class="span12" name="notification" placeholder="Notification Details" type="text" maxlength="160" required=""> 
				<br />
		        <select class="span12" name="notice_for">
		            <option value='Candidate'>Candidate</option>
		            <option value='Employer'>Employer</option>
		        </select>
		        <br />
		        <select class="span12" name="notice_type" id="notice_type" onchange="getType()">
		        	<option value='Text'>Text</option>
		            <option value='Link'>Link</option>
		        </select>
		        <br />
		        <input style="display:none" placeholder="Enter Link" class="span12" id="txtbox" type="text" name="link" />
		        <br />
		        <button class="btn btn-warning" type="submit">Save</button>
		    </form>
		</div>
	</div>
</div>


<div class="container">
    <div class="row col-md-10  custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Date Posted</th>
            <th>Notification</th>
            <th>Notice For</th>
            <th>Type</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
<?php 	if($notifications){
		foreach ($notifications as $key) { ?>
            <tr>
                <td><?php echo date('d M Y',strtotime($key->created));?></td>
                <td><?php echo $key->notification;?></td>
                <td><?php echo $key->notice_for;?></td>
                <td>
                	
	                <?php 
	                	if($key->notice_type == "Link")
	                	{
	                		//echo " Link <br /><a href='".$key->link."'><button class='btn btn-info'>View</button></a>";
	                		echo " Link <br /><a href='".$key->link."'><p style='background-color:#69F4D8;text-align:center;border-radius:2px;'>View</p></a>";
	                	}
	                	else
	                	{
	                		echo "Text";
	                	}
	                ?>
                </td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url();?>superadmin/news/edit_notification/<?php echo $key->notification_id;?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="<?php echo base_url();?>superadmin/news/delete_notification/<?php echo $key->notification_id;?>" class="btn btn-danger btn-xs delete"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
            </tr>
<?php } } else { ?>
			<tr>
                <td colspan="5">No Notifications There</td>
            </tr>

<?php } ?>
    </table>
    </div>
</div>


  <?php //$details=$this->SuperAdmin_M->get_notifications();

		// foreach ($details as $key) 
		// {
		// 	echo '<a href="'.$key->link.'">Link</a>';	
		// }

?>
<script type="text/javascript">

function getType()
{
	var type=document.getElementById('notice_type').value;
	//alert(type);
	if(type == "Link")
	{
		document.getElementById('txtbox').style.display = "block";
	}
	else if(type == "Text")
	{
		document.getElementById('txtbox').style.display = "none";
	}
}	



</script>