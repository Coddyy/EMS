<?php if($this->session->userdata('superadminId')){ ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<style type="text/css">
    .span12{
        width:300%;
    }
</style>
<br />
<div class="container-fluid">
    <div class="row">
        <?php if($this->uri->segment(3) == "saved_successfully"){ ?>
                <div class="alert alert-success  alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Service Saved Successfully
                </div>
        <?php } else if($this->uri->segment(3) == "not_saved"){ ?>
                <div class="alert alert-info alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Service Not Saved
                </div>
        <?php } ?>
    	<div class="span8 well">
    	      <legend>Add Service</legend>
    	    <form accept-charset="UTF-8" action="" method="post">
    			<input class="span12" name="service_name" placeholder="Service name" type="text" required /> 
    	        <input class="span12" name="service_price" placeholder="Price" type="text" required /> 
                <textarea class="span12" name="service_description" rows="3" placeholder="Description" type="textarea" required ></textarea>
                <br />
                <?php $duration=array('15' => '15 Days','30' => '1 Month','60' => '2 Months','90' => '3 Months','180' => '6 Months','240' => '8 Months','365' => '1 Year'); ?>
                <select class="span12" name="duration" required>
                <option value="">--Select Duration--</option>
                    <?php 

                        foreach ($duration as $key => $value) 
                        {
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }

                    ?>
                </select>
                <br />
    	        <button class="btn btn-warning" type="submit">Add</button>
    	    </form>
    	</div>
    </div>
</div>

<?php  }
else
{
    redirect('superadmin/index');
} ?>
