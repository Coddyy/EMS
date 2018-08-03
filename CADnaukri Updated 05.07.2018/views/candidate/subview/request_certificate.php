<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Request Certificate</title>
<style type="text/css">
	.glyphprogress 
	{
    background: #fff;
    width: 1000px;
    color: #e0e0e0;
    display: inline-block;
}
.glyphprogress ul {
    list-style: none;
    -webkit-margin-before: 0px;
    -webkit-margin-after: 0px;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 0px;
    margin: 0;
}
.glyphprogress li {
    display: inline-block;
    width: 24%;
}

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    float: left;
    position: relative;
    width: 77%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 20px;
    z-index: 1;
}
.glyphstep {
    width: 40px;
    height: 40px;
    line-height:30px;
    display: inline-block;
    border-radius: 40px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: relative;
    left: 0;
    text-align: center;
    font-size: 20px;
}
.glyphstep i {
	margin-top: 6px;
	margin-left: 1px;
}
.glyphcomplete {
    border: 2px solid lightgreen !important;
    color: lightgreen;
}
.glyphactive {
    border: 2px solid lightblue !important;
    color: lightblue;
}
</style>

<?php 
	
	$candidate_id=$this->session->userdata('candidate_id');

	$progress2=$this->Candidate_M->progress_edu_details($candidate_id);
	$progress3=$this->Candidate_M->progress_exp_details($candidate_id);
    $progress4=$this->Candidate_M->progress_skill_details($candidate_id);

    if($progress2 == 0)
    {
    	$viewurl='candidate/profile/educational_details';
    }
    else if($progress3 == 0)
    {
    	$viewurl='candidate/profile/skill_details';
    }
    else if($progress4 == 0)
    {
    	$viewurl='candidate/profile/experience_details';
    }


     
    $progress=( $progress2 + $progress3 + $progress4 );
    //echo $progress;
    if($progress == 0)
    {
    	$status=1;
    }
    else
    {
    	$status=$progress + 1;
    }

?>
<input type="hidden" id="status" value="<?php echo $status;?>" />

<script type="text/javascript">

	function SetActiveGlyphStep(stepNumber) {

    $('.glyphstep').each(function(index){
        if (index < stepNumber) {
            $(this).removeClass('glyphactive');
            $(this).removeClass('glyphcomplete');
            $(this).addClass('glyphcomplete');
        } else if (index == stepNumber) {
            $(this).removeClass('glyphactive');
            $(this).removeClass('glyphcomplete');
            $(this).addClass('glyphactive');
        } else {
            $(this).removeClass('glyphactive');
            $(this).removeClass('glyphcomplete');
        }
    });
}

$(document).ready(function(){

var status=document.getElementById('status').value;
//alert(status);
SetActiveGlyphStep(status);
});
</script>
<div class="container">
	<div class="row">
		<h2 align="center">Request Certificate</h2>


		<?php if($this->session->flashdata('requested')){ ?>

	        <div class="alert alert-success">
	            <a href="#" class="close" data-dismiss="alert">&times;</a>
	            <?php echo $this->session->flashdata('requested'); ?>
	        </div>
	        <script>
			    setTimeout(function(){ window.location="<?php echo base_url();?>candidate/my_exams"; }, 5000);
			</script>
    	<?php } ?>


		<br /><br />
		<div class="col-md-1"></div>
		<div class="col-md-11">
			<div class="glyphprogress">
			    <div class="connecting-line"></div>
			    <ul>
			        <li>
			            <span class="glyphstep">
			                <i class="glyphicon glyphicon-ok"></i>
			            </span>
			        </li>

			        <li>
			            <span class="glyphstep">
				            <?php if($progress > 0 ){ ?>

				                <i class="glyphicon glyphicon-ok"></i>

				            <?php } else { ?>

				            	<i class="glyphicon glyphicon-unchecked"></i>

				            <?php } ?>
			            </span>
			        </li>
			        <li>
			            <span class="glyphstep">
			                <?php if($progress > 1 ){ ?>

				                <i class="glyphicon glyphicon-ok"></i>

				            <?php } else { ?>

				            	<i class="glyphicon glyphicon-unchecked"></i>
				            	
				            <?php } ?>
			            </span>
			        </li>
			        <li>
			            <span class="glyphstep">
			                <?php if($progress > 2 ){ ?>

				                <i class="glyphicon glyphicon-ok"></i>

				            <?php } else { ?>

				            	<i class="glyphicon glyphicon-unchecked"></i>
				            	
				            <?php } ?>
			            </span>
			        </li>
			        
			    </ul>
			    <br />
			    <?php //echo $viewurl;?>
			    <ul>
			        <li>
			            <!-- <button class="btn btn-success" disabled="">Done</button> -->
			        </li>
			        <li>
			        <?php if($progress == 0){ ?>

			            <a href="<?php echo base_url($viewurl);?>"><button class="btn btn-info">Add Details</button></a>
			        <?php } ?>
			        </li>
			        <li>
			        <?php if($progress == 1){ ?>
			            <a href="<?php echo base_url($viewurl);?>"><button class="btn btn-info">Add Details</button></a>
			            <?php } ?>
			        </li>
			        <li>
			        <?php if($progress == 2){ ?>
			            <a href="<?php echo base_url($viewurl);?>"><button class="btn btn-info">Add Details</button></a>
			        <?php } ?>
			        </li>
			    </ul>
			</div>
			
		</div>
		<div class="col-md-12" align="center">

		<?php if($progress == 3){ ?>
			<a href="<?php echo base_url();?>candidate/requested/<?php echo $this->uri->segment(3);?>" align="center"><button class="btn btn-info">Request</button></a>
		<?php } ?>

		</div>
	</div>
</div>

<br /><br /><br />