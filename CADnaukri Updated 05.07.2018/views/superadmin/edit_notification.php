<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body onload="getType()">
<div class="container">
	<div class="row">
		<div class="span6  well">
		<?php if($this->uri->segment(3) == "notification_updated"){ ?>

			<div class="alert alert-success">
			  Notification Updated
			</div>

		<?php }else if($this->uri->segment(3) == "notification_not_updated"){ ?>

			<div class="alert alert-danger">
			  Notification Not Updated
			</div>

		<?php	} ?>
<?php foreach ($details as $key) { ?>
		      <legend align="center">Set Notification</legend>
		    <form accept-charset="UTF-8" action="" method="post">
				<input class="span12" name="notification" placeholder="Notification Details" value="<?php echo $key->notification;?>" type="text" maxlength="160" required=""> 
				<br />
		        <select class="span12" name="notice_for">
		        	<option value='<?php echo $key->notice_for;?>'><?php echo $key->notice_for;?></option>
		            <option value='Candidate'>Candidate</option>
		            <option value='Employer'>Employer</option>
		        </select>
		        <br />
		        <select class="span12" name="notice_type" id="notice_type" onchange="getType()">
		        	<option value='<?php echo $key->notice_type;?>'><?php echo $key->notice_type;?></option>
		        	<option value='Text'>Text</option>
		            <option value='Link'>Link</option>
		        </select>
		        <br />
		        <input style="display:none" placeholder="Enter Link" class="span12" id="txtbox" type="text" value="<?php echo $key->link;?>" name="link" />
		        <br />
		        <button class="btn btn-success" type="submit">Save</button>
		    </form>
		    <a href="<?php echo base_url();?>superadmin/news/set_notification"><button class="btn btn-primary" type="submit">Back</button></a>
<?php } ?>
		</div>
	</div>
</div>
</body>
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