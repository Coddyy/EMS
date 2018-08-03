<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Result Details</title>

<?php 

// $start=date('Y-m-d H:i:s');
// echo date('Y-m-d H:i',strtotime('+20 minutes',strtotime($start))); ?>

<style type="text/css">
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    font-size: 16px;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>

<!-- ####################  SCORE COUNTING ############## -->
<?php 
    
    // ********* Questions ****** //

    $exam_details_id=$this->uri->segment(3);
    $dbquestion=$this->Candidate_M->get_exam_questions($exam_details_id);

    $qtn1=$dbquestion->qtn1;$qtn2=$dbquestion->qtn2;$qtn3=$dbquestion->qtn3;$qtn4=$dbquestion->qtn4;$qtn5=$dbquestion->qtn5;
    $qtn6=$dbquestion->qtn6;$qtn7=$dbquestion->qtn7;$qtn8=$dbquestion->qtn8;$qtn9=$dbquestion->qtn9;$qtn10=$dbquestion->qtn10;

    $qtnarray=array($qtn1,$qtn2,$qtn3,$qtn4,$qtn5,$qtn6,$qtn7,$qtn8,$qtn9,$qtn10);
    // ********* End Questions ****** //



    // ********* Answers ********* //

    $apply_id=$this->uri->segment(4);
    $dbanswer=$this->Candidate_M->get_exam_answers($apply_id);
    //var_dump($dbanswer);
    $ans1=$dbanswer->ans1;$ans2=$dbanswer->ans2;$ans3=$dbanswer->ans3;$ans4=$dbanswer->ans4;$ans5=$dbanswer->ans5;
    $ans6=$dbanswer->ans6;$ans7=$dbanswer->ans7;$ans8=$dbanswer->ans8;$ans9=$dbanswer->ans9;$ans10=$dbanswer->ans10;

    $ansarray=array($ans1,$ans2,$ans3,$ans4,$ans5,$ans6,$ans7,$ans8,$ans9,$ans10);

    // ********* End Answers ********* //


    //echo $qtn1;
    
    //echo $qarray[9];
 ?>

<!-- #################### END SCORE COUNTING ############## -->



<div class="container">
    <div class="row col-md-12  custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Question</th>
            <th>Correct Answer</th>
            <th>Your Answer</th>
            <th>Status</th>
        </tr>
    </thead>
<?php   

    for($i=0; $i < count($qtnarray) ; $i++) 
    { 
        $question=$this->Candidate_M->get_question($qtnarray[$i]);
        $correct_op=$question->correctopt;
        $correctans=$this->Candidate_M->get_correct_option($qtnarray[$i]);
?>
            <tr>
                <td><?php echo $question->question;?></td>
                <td>
                    <?php 

                        $cans=$this->Candidate_M->take_ans($correct_op,$qtnarray[$i]);
                        echo $cans;
                        echo ' ('.$question->correctopt.')';

                    ?>
                </td>
                <td>
                    <?php 
                        $cans=$this->Candidate_M->take_ans($ansarray[$i],$qtnarray[$i]);
                        echo $cans;
                        echo ' ('.$ansarray[$i].')';

                    ?>
                </td>
                <td>
                    <?php 

                        if($correctans == $ansarray[$i])
                        {
                            echo '<span style="color:green;" class="glyphicon glyphicon-ok"></span>';
                        }
                        else
                        {
                            echo '<span style="color:red;" class="glyphicon glyphicon-remove"></span>';
                        }

                    ?>
                </td>
            </tr>
<?php   
    } 
?>
    </table>
    </div>
</div>