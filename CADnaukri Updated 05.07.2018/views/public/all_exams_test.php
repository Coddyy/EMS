<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>CADcat Home</title>


<style type="text/css">

.sidebarservices li 
	{
  /*list-style:none; 
  background-color:#0e6eb7; 
  margin:5px 10px;
  text-align:left; 
  padding: 10px 0 10px 20px;
  border-radius:5px 5px;
  cursor:pointer;*/
  }
/*.sidebarservices li a {
  text-decoration:none; 
  color:white !important;
  font-family: Century Gothic, sans-serif;
  }
  .head:hover{background-color:#0e6eb7; }
  .sidebarservices li:hover {
    background:black;
    color:black;
  }*/

</style>


<div class="container" style="border: 1px solid #ccc;border-radius: 4px; max-width: 800px;background-color: rgba(37, 37, 37,0.4, #E6E6E6);">
	<div class="row" style="border: 0px solid #ccc;">
		<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
			<ul class="sidebarservices">
				<li class="head"><b style="color:black;">Upcoming Exams</b></li>
				<?php 
					foreach ($exams as $key) 
					{ 

						//echo $key->exam_details_id;
				?>
		        		<li><h4><span style="color:blue;"><?php echo $key->company_name;?></span> Hiring <span style="color:orange;"><?php echo $key->hiring_for;?></span></h4>
		        <!-- <?php 
		        	if($this->session->userdata('candidate_id'))
            		{
            	?>
            			<a href="<?php echo base_url();?>candidate/give_exam_now/<?php echo $key->exam_details_id;?>"><span class="btn btn-info">Start</span></a>
            	<?php 	
            		}
            		else
            		{ 
            	?>
            			<a href="<?php echo base_url();?>candidate/user_details/<?php echo $key->exam_details_id;?>"><span class="btn btn-info">Start Test</span></a>
            			
            	<?php 	
            		}
            	?> -->

		        		</li>
		        <?php } ?>

		    </ul>
		</div>
		<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
			<ul class="sidebarservices">
				<li class="head"><b style="color:black;">Top Qualifiers</b></li>
		        <?php 
					foreach ($qualifiers as $key) 
					{ 

						//echo $key->exam_details_id;
				?>
						<li><?php echo $key->name;?></li>


				<?php } ?>
		    </ul>
		</div>
	</div>
	<hr>
	<div class="row" style="border: 0px solid #ccc;">
		<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
			<ul class="sidebarservices">
				<li class="head"><b style="color:black;">Ongoing Exams</b></li>
		        <?php 
					foreach ($exams as $key) 
					{ 

						//echo $key->exam_details_id;
				?>
		        		<li><h4><span style="color:blue;"><?php echo $key->company_name;?></span> Hiring <span style="color:orange;"><?php echo $key->hiring_for;?></span></h4>
		        <?php 
		        	if($this->session->userdata('candidate_id'))
            		{
            	?>
            			<a href="<?php echo base_url();?>candidate/give_exam_now/<?php echo $key->exam_details_id;?>"><span class="btn btn-info" style="width: 30px;">Start</span></a>
            	<?php 	
            		}
            		else
            		{ 
            	?>
            			<a href="<?php echo base_url();?>candidate/user_details/<?php echo $key->exam_details_id;?>"><span class="btn btn-info">Start Test</span></a>
            			
            	<?php 	
            		}
            	?>

		        		</li>
		        <?php } ?>
		    </ul>
		</div>
		<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12">
			<ul class="sidebarservices">
		        <li><a href="#">Networking Services</a></li>
		        <li><a href="#">Troubleshooting Services</a></li>
		        <li><a href="#">Internet Services</a></li>
		        <li><a href="#">Server Services</a></li>
		        <li><a href="#">Menu Item</a></li>
		        <li><a href="#">PC & Printer Repair Services</a></li>
		    </ul>
		</div>

		<div class="col-md-6 col-xs-12 col-lg-6 col-sm-12" style="border: 0px solid green; height: 130px;background-color:#ECECEC; box-shadow: rgb(211, 211, 211); margin-left: -1px; border-radius: 2px;">
			<ul class="sidebarservices">
		       
		        <li style=""><a href="#">Sponsors</a></li>
		        <li style=""><a href="#">Request Database</a></li>
		        <li style=""><a href="#">Become a partner</a></li>
		        <li style=""><a href="#">Contact CADnaukri.com</a></li>
		    </ul>
		</div>
		
	</div>
	 <br />
</div>
	</div>
</div>

<?php 

// $array= array();
// //echo count($candidate);//exit();
// for($i=0; $i < count($candidate); ++$i)
// {
// 	//echo $candidate[$i]->apply_id;
// 	$array[]=$candidate[$i]->apply_id;
// }
// var_dump($array);echo '<br /><br />';
// sort($array);
// var_dump($array);

?>

<br /><br />