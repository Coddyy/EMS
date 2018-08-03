<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Candidate | My Exams</title>
<style type="text/css">
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    font-size:15px;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
</style>
<div class="container">
    <div class="row col-md-12  custyle">
        <?php if($this->session->flashdata('already_applied')){
                $msg = $this->session->flashdata('already_applied');?>
                    <div class="alert alert-info alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: blue">  <?php echo $msg; ?>
                </div>
        <?php } ?>
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Applied Date</th>
            <th>Company</th>
            <th>Position Applied</th>
            <th class="text-center">Status</th>
            <th class="text-center">Score</th>
            <th class="text-center">Time</th>
            <th class="text-center">Certificate</th>
        </tr>
    </thead>
    <?php foreach ($exams as $key) { 

        $datetime1= $key->exam_start_time;
        $datetime2= $key->exam_end_time;
        //echo $datetime2;
        $date_a = new DateTime($datetime1);
        $date_b = new DateTime($datetime2);

        $interval = date_diff($date_a,$date_b);

        $dbdate=explode(' ',$key->created);
        $date=$dbdate[0];
        if($key->is_spam == '1')
        {
            $color='red';
            $status='Disqualified';
        }
        
        else if($key->is_over == 'YES')
        {
            $color='green';
            $status='Over';
        }
        else
        {
            $color='orange';
            $status='Pending';
        }


    ?>

<!-- ####################  SCORE COUNTING ############## -->
<?php 
    
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

    $url_apply_id=md5($key->apply_id)."1a8c".$key->apply_id."1a8c".md5($key->apply_id);

?>
<!-- #################### END SCORE COUNTING ############## -->


            <tr>
                <td><?php echo $key->company_name;?></td>
                <td><?php echo date('d M Y',strtotime($date));?></td>
                <td><?php echo $key->hiring_for;?></td>
                <td align="center"><b style="color:<?php echo $color;?>;"><?php echo $status;?></b></td>
                <td align="center"><b style="color:<?php echo $scorecolor;?>"><?php echo ($j * 10);?>%</b></td>
                <td align="center"><?php echo $interval->format('%i')." Mins ".$interval->format('%s')." Secs";?></td>

                <?php if($key->is_spam != '1'){

                        if($key->certificate_status == '1')
                        { ?>

                            <td align="center"><b style="color:orange">Pending</b></td>

                <?php   } else if($key->certificate_status == '2')
                        { 
                            $certificate_url=base_url($key->certificate_url);
                            if($certificate_url){ ?>

                            <td align="center"><a href="<?php echo $certificate_url;?>"><button class="btn btn-info">Download</button></a></td>

                <?php       } else { ?>

                            <td align="center"><b style="color:orange">Not Available</b></td>
                <?php             }  ?>

                <?php   } else {  ?>

                            <td align="center"><a href="<?php echo base_url();?>candidate/request_certificate/<?php echo $url_apply_id;?>"><button class="btn btn-info">Request</button></a></td>

                <?php   } } else { ?>

                            <td align="center"><b style="color:red">Disqualified</b></td>
                
                <?php } ?>


            <!--    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>-->
            </tr>
    <?php } ?>
    </table>
    </div>
</div>