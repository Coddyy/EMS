<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Sheet_Examinee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<?php 
    
    // ********* Questions ****** //

    $exam_details_id=$exam->exam_details_id;
    $dbquestion=$this->Candidate_M->get_exam_questions($exam_details_id);

    $qtn1=$dbquestion->qtn1;$qtn2=$dbquestion->qtn2;$qtn3=$dbquestion->qtn3;$qtn4=$dbquestion->qtn4;$qtn5=$dbquestion->qtn5;
    $qtn6=$dbquestion->qtn6;$qtn7=$dbquestion->qtn7;$qtn8=$dbquestion->qtn8;$qtn9=$dbquestion->qtn9;$qtn10=$dbquestion->qtn10;

    $qtnarray=array($qtn1,$qtn2,$qtn3,$qtn4,$qtn5,$qtn6,$qtn7,$qtn8,$qtn9,$qtn10);
    // ********* End Questions ****** //



    // ********* Answers ********* //

    $apply_id=$exam->apply_id;
    $dbanswer=$this->Candidate_M->get_exam_answers($apply_id);
    //var_dump($dbanswer);
    $ans1=$dbanswer->ans1;$ans2=$dbanswer->ans2;$ans3=$dbanswer->ans3;$ans4=$dbanswer->ans4;$ans5=$dbanswer->ans5;
    $ans6=$dbanswer->ans6;$ans7=$dbanswer->ans7;$ans8=$dbanswer->ans8;$ans9=$dbanswer->ans9;$ans10=$dbanswer->ans10;

    $ansarray=array($ans1,$ans2,$ans3,$ans4,$ans5,$ans6,$ans7,$ans8,$ans9,$ans10);

    // ********* End Answers ********* //


    //echo $qtn1;
    
    //echo $qarray[9];
 ?>


<body>
<!-- <div class="container sty2" style="max-width: 1100px; border: 1px solid gray; margin-top: 10px; border-radius: 4px;"> -->

<div class="container sty2" style="max-width: 1000px; margin-top: 20px; outline: 1px solid #84b5dd; outline-offset: 15px;">
 
  <!-- <div class="row sty0" >
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#84b5dd; border: 1px solid gray;text-align: center;font-size: 18px;">Examinee Details</div>
    <div class=" col-md-4  col-sm-12 col-xs-12 sty sty1" >NAME: </div>
    <div class=" col-md-8  col-sm-12 col-xs-12 sty" >Shanta Pradhan</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty sty1" >CADCAT ID:</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty">NKNA1219593</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty sty1" >MOBILE:</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty" >9861860701</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty sty1" >LOCATION:</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty">Bhubaneswar</div>
    <div class=" col-md-2  col-sm-12 col-xs-12 sty sty1">E-mail:</div>
    <div class=" col-md-4  col-sm-12 col-xs-12 sty ">John@email.com</div>
    <div class=" col-md-3 col-sm-12 col-xs-12 sty sty1">CURRENT OCCUPATION:</div>
    <div class=" col-md-3  col-xs-12 col-xs-12 sty">Design Engineer</div>
    </div>
    <br>



 <div class="row sty0" >
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#84b5dd; border: 1px solid gray;text-align: center;font-size: 16px;">CADCAT Details</div>
    <div class="col-md-4 sty sty1" >TEST ID: </div>
    <div class="col-md-8 sty" >000CJKBASKCJ54654</div>
    <div class="col-md-4 sty sty1" >Test Sponsored By:</div>
    <div class="col-md-8 sty">NKNA1219593</div>
    <!-- <div class="col-sm-2 sty sty1" >DATE APPEARED:</div> -->
    <!-- <div class="col-sm-2 sty" >9861860701</div> 
    <div class="col-md-2 sty sty1" >Date Appeared:</div>
    <div class="col-md-2 sty">27/03/2018</div>
    <div class="col-md-2 sty sty1">Start Time:</div>
    <div class="col-md-2 sty ">18:10:15 Hours</div>
    <div class="col-md-2 sty sty1">End Time:</div>
    <div class="col-md-2 sty">18:19:25 Hours</div>
    </div> -->
<!--     <br>
 -->
    <div class="row sty0" >
  	<div class="col-md-12" style="background-color:#84b5dd; border: 1px solid gray;text-align: center;font-size: 20px;">Answer Sheet</div>

<?php   

    for($i=0; $i < count($qtnarray) ; $i++) 
    { 
        $question=$this->Candidate_M->get_question($qtnarray[$i]);
        $correct_op=$question->correctopt;
        $correctans=$this->Candidate_M->get_correct_option($qtnarray[$i]);
?>
    <div class="col-md-2 sty sty1" >Question<?php echo ($i+1);?>: </div>
    <div class="col-md-10 sty" ><b style="color:blue;"><?php echo $question->question;?></b></div>
    <div class="col-md-2 sty sty1" >Selected Option:</div>
    <div class="col-md-10 sty"><b style="color:orange;">
        <?php 
            $cans=$this->Candidate_M->take_ans($ansarray[$i],$qtnarray[$i]);
            if($cans != false)
            {
                echo $cans;
                echo ' ('.$ansarray[$i].')';
            }
            else
            {
                echo 'Empty';
            }
            

        ?></b>
    </div>
    <div class="col-md-2 sty sty1" >Correct Answer:</div>
    <div class="col-md-10 sty" ><b style="color:green;">
        <?php 

            $cans=$this->Candidate_M->take_ans($correct_op,$qtnarray[$i]);
            echo $cans;
            echo ' ('.$question->correctopt.')';

        ?></b>
    </div>
<?php } ?>


	<br>

    <div class="row sty0" >
  	<div class="col-md-12" style="background-color:#84b5dd; border: 1px solid gray;text-align: center;font-size: 16px;">Test Score</div>
    <div class="col-md-3 sty sty1" >You Answered: </div>
    <div class="col-md-9 sty" >8 out of 10 </div>
    <div class="col-md-3 sty sty1" >No. of Correct Answers:</div>
    <div class="col-md-9 sty">6</div>
    <div class="col-md-3 sty sty1" >No. of Wrong Answers:</div>
    <div class="col-md-9 sty" >2</div>
    <div class="col-md-3 sty sty1" >Your Score (in %):</div>
    <div class="col-md-9 sty " >50%</div>
    <div class="col-md-3 sty sty1">Remarks:</div>
    <div class="col-md-9 sty ">You are a Duffer, reappear test with little more bheja</div>
    <!-- <div class="col-sm-3 sty ">John@email.com</div> -->
    <!-- <div class="col-sm-3 sty sty1">CURRENT OCCUPATION:</div> -->
    <!-- <div class="col-sm-3 sty">Design Engineer</div> -->
    </div>
    <br>
    <p align="center">Test scores are auto-generated. Design & layout of page is subject to change without prior notice.</p>
    <br>
    <!-- <div class="col-sm-12" align="center">
    	<button class="btn btn-primary" align="center">Request Free Certificate</button>

    </div> -->
    <br /><br />
    </div>
</div>
<br />
</body>
</html>




<style type="text/css">
.sty{
	background-color:#fff;
	border: 1px solid #bfbfbf;
    font-size: 16px;
}

	@media screen and (max-width: 768px) {
   .sty{border: none;

   } 
}
.sty1{font-size: 14px;
font-weight: bold;}
	@media screen and (max-width:768px) {
   .sty1{border-top: 1px solid #bfbfbf;

   } 
}
	@media screen and (max-width:768px) {
   .sty2{border-bottom: 1px solid #bfbfbf;

   } 
}
	@media screen and (max-width:768px) {
   .sty0{border: 1px solid #bfbfbf;

   } 
}


</style>