<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Exam Qualifiers</title>
<style type="text/css">
.table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 230px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
</style>


<?php //echo $this->session->userdata('emp_id');?>


<div class="container">
  	<div class="row">
      	<div class="panel panel-default">
        	<div class="panel-heading">
	          	<h4>
	            	Exam Qualifiers 
	          	</h4>
        	</div>
	        <table class="table table-fixed">
		        <thead>
		            <tr>
		              	<th class="col-xs-1">CADcat ID</th>
		              	<th class="col-xs-2">Date</th>
		              	<th class="col-xs-4">Name</th>
		              	<th class="col-xs-1">Score</th>
		              	<th class="col-xs-2">Time</th>
		              	<th class="col-xs-2">Resume</th>
		            </tr>
		        </thead>
	          	<tbody>
<?php 


  if($qualifiers)
  {
    foreach ($qualifiers as $key) { 
  


// ####################  SCORE COUNTING ############## //

    
    // ********* Questions ****** //

    $exam_details_id=$key->exam_details_id;
    $dbquestion=$this->Candidate_M->get_exam_questions($exam_details_id);

    $qtn1=$dbquestion->qtn1;$qtn2=$dbquestion->qtn2;$qtn3=$dbquestion->qtn3;$qtn4=$dbquestion->qtn4;$qtn5=$dbquestion->qtn5;
    $qtn6=$dbquestion->qtn6;$qtn7=$dbquestion->qtn7;$qtn8=$dbquestion->qtn8;$qtn9=$dbquestion->qtn9;$qtn10=$dbquestion->qtn10;

    $qtnarray=array($qtn1,$qtn2,$qtn3,$qtn4,$qtn5,$qtn6,$qtn7,$qtn8,$qtn9,$qtn10);

    // ********* End Questions ****** //



    // ********* Answers ********* //

    $apply_id=$key->apply_id;
    $dbanswer=$this->Candidate_M->get_exam_answers($apply_id);
    //var_dump($dbanswer);
    $ans1=$dbanswer->ans1;$ans2=$dbanswer->ans2;$ans3=$dbanswer->ans3;$ans4=$dbanswer->ans4;$ans5=$dbanswer->ans5;
    $ans6=$dbanswer->ans6;$ans7=$dbanswer->ans7;$ans8=$dbanswer->ans8;$ans9=$dbanswer->ans9;$ans10=$dbanswer->ans10;

    $ansarray=array($ans1,$ans2,$ans3,$ans4,$ans5,$ans6,$ans7,$ans8,$ans9,$ans10);

    // ********* End Answers ********* //


    //echo $qtn1;
    
    //echo $qarray[9];
    $j=0;
    for($i=0; $i < count($qtnarray) ; $i++) 
    { 
        $correctans=$this->Candidate_M->get_correct_option($qtnarray[$i]);

        if($correctans == $ansarray[$i])
        {
            ++$j;
        }
        else
        {
            $j=$j;
        }
    }
    //echo $j;
    if($j < 4)
    {
        $scorecolor='red';
    }
    else if($j < 8)
    {
        $scorecolor='orange';
    }
    else if($j > 7)
    {
        $scorecolor='green';
    }

// #################### END SCORE COUNTING ############## //


	    		$datetime1= $key->exam_start_time;
		        $datetime2= $key->exam_end_time;
		        //echo $datetime2;
		        $date_a = new DateTime($datetime1);
		        $date_b = new DateTime($datetime2);

		        $interval = date_diff($date_a,$date_b);

		        $dbdate=explode(' ',$key->created);
		        $date=$dbdate[0];

	    ?>

		            <tr>
		              	<td class="col-xs-1"><?php echo $key->apply_id;?></td>
		              	<td class="col-xs-2"><?php echo $key->created;?></td>
		              	<td class="col-xs-4"><?php echo $key->name;?></td>
		              	<td class="col-xs-1"><b style="color:<?php echo $scorecolor;?>"><?php echo ($j * 10);?>%</b></td>
		              	<td class="col-xs-2"><?php echo $interval->format('%i')." Mins ".$interval->format('%s')." Secs";?></td>
		              	<td class="col-xs-2">
			     <?php 
		              		if($key->cvpath)
			                {
                        $employer_id=$this->session->userdata('emp_id');
					              	$limit_exceeded=$this->Employee_M->check_cv_download_limit($employer_id);
                          $cv_url=base_url($key->cvpath);
        									if($limit_exceeded == "No")
        									{
				                    
				                        // echo '<a href="'.base_url($key->cvpath).'"><button class="btn btn-info">Download</button></a>';  
          ?>
                                <form action="<?php echo base_url();?>employer/cvDownload/<?php echo $job_id; ?>" method="post">
                                  <input type="submit" value="Download"></input>
                                  <input type="hidden" value="<?php echo $cv_url; ?>" name="cv_url"></input>
                                  <input type="hidden" value="<?php echo $key->exam_details_id; ?>" name="exam_details_id"></input>
                                </form>
				  <?php             }
				                    else if($limit_exceeded == "Yes")
				                    {
				                    	echo '<td><input class="btn btn-info" type="submit" onclick="alert_this()" value="Download"></input></td>';
				                        
				                    }
				                }
  				              else 
        								{ 
        									 echo "Not Available";
        								}

                     		?>
                     	</td>
		            </tr>
		<?php }  } else { ?>
              <tr><td colspan="6">No candidates there</td></tr>

    <?php } ?>
	          	</tbody>
	        </table>
      	</div>
  	</div>
</div>

<script type="text/javascript">
	
function alert_this()
{
	alert("To download more CVs please contact hr@cadnaukri.com");
}
</script>