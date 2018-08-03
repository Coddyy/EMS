<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Question Details</title>

<?php 

$exam_id=$this->uri->segment(4);
if($this->Employee_M->is_exam_set($exam_id) == true)
{
	redirect(base_url()."employer/exams");
}
?>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
	
	<fieldset>
<div class="col-md-12" align="left">
	    <a href="<?php echo base_url();?>employer/edit_exam/<?php echo $exam_id;?>"><button class="btn btn-warning">Back</button></a>
	  </div>
	<!-- Form Name -->

	<legend align="center">Update Question</legend>

<?php if($this->session->flashdata('updated')){ ?>
	<br /><br />
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
<?php } ?>

<form class="form-horizontal" action="" method="post">
	<div class="form-group">
	  <label class="col-md-3 control-label" for="textarea">Question</label>
	  <div class="col-md-6">                     
	    <textarea class="form-control" id="textarea" name="question" required=""><?php echo $question->question;?></textarea>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-3 control-label" for="textinput">Option 1</label>  
	  <div class="col-md-6">
	  <input id="textinput" name="opt1" type="text" value="<?php echo $question->opt1;?>" placeholder="placeholder" class="form-control input-md" required="">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-3 control-label" for="textinput">Option 2</label>  
	  <div class="col-md-6">
	  <input id="textinput" name="opt2" type="text" value="<?php echo $question->opt2;?>" placeholder="placeholder" class="form-control input-md" required="">
	    
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-3 control-label" for="textinput">Option 3</label>  
	  <div class="col-md-6">
	  <input id="textinput" name="opt3" type="text" value="<?php echo $question->opt3;?>" placeholder="placeholder" class="form-control input-md" required="">
	    
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-3 control-label" for="textinput">Option 4</label>  
	  <div class="col-md-6">
	  <input id="textinput" name="opt4" type="text" value="<?php echo $question->opt4;?>" placeholder="placeholder" class="form-control input-md" required="">
	    
	  </div>
	</div>
<?php $optns=array('1','2','3','4');?> 
	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-3 control-label" for="selectbasic">Correct Option</label>
	  <div class="col-md-6">
	    <select id="selectbasic" name="correctopt" class="form-control" required="">
	      <?php 

	      	for ($i=0; $i < count($optns); $i++) 
	      	{ 
	      		$selected=(($question->correctopt == $optns[$i]) ? 'selected' : ' ');
	      		echo '<option value="'.$optns[$i].'" '.$selected.'>'.$optns[$i].'</option>';
	      	}
	      		
	      ?>
	    </select>
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic"></label>
	  <div class="col-md-4" align="center">
	    <input  type="submit" name="submit" value="Update" />
	  </div>
	  </form>
	</div>
	</fieldset>
</div>

<br /><br />