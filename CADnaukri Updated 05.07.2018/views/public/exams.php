<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<title>Exams</title>

<style type="text/css">
	.clear {
    clear:both;    
}
.btn-info {
    margin-right:15px;
    text-transform:uppercase;
    padding:10px;
    display:block;
    float:left;
}
.btn-info a {
    display:block;
    text-decoration:none;
    width:100%;
    height:100%;
    color:#fff;
}
.more.label {
    float:right;    
}
</style>

<div class="container">
	<div class="span8">
<?php 
	foreach ($exams as $key) 
	{ 

		//echo $key->exam_details_id;?>

        <h2><span style="color:blue;"><?php echo $key->company_name;?></span> Hiring <span style="color:orange;"><?php echo $key->hiring_for;?></span></h2>
         <div>
            <div class="tags">
            <?php if($this->session->userdata('candidate_id'))
            		{
            ?>
            			<span class="btn btn-info"><a href="<?php echo base_url();?>candidate/give_exam_now/<?php echo $key->exam_details_id;?>">Start</a></span>
            <?php 	}
            		else
            		{ 
            ?>
            			<a href="<?php echo base_url();?>candidate/user_details/<?php echo $key->exam_details_id;?>"><span class="btn btn-info">Start Test</span></a>
            			
            <?php 	}
            ?>
                
        	</div> 
        <div class="clear"></div>
        <hr>
        
    	</div>
<?php } ?>
	</div>
</div>	