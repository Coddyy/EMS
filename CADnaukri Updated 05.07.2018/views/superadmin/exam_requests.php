<!DOCTYPE html>
<html lang="en">
<head>
  <title>CADnaukri_table</title>
  <meta charset="CADnaukri">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <style type="text/css">
    .thstyle{
      text-align: center;
      background-color: #37a0ff;
      color: #fff;
      box-shadow: 1px 1px 1px 1px;

    }
    tbody.td{margin-left: 20px;

    }

    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

  </style>
<div class="container" style="border: 0px solid red;">
  <div class="row" style="background-color: #0055a4; color: #fff;"><h4>Exams:</h4>
  
  </div>
  <div class="row" >	<table class="table table-bordered" >
    <thead-dark>
      <tr>
        <th class="thstyle">CADcat ID</th>
        <!-- <th class="thstyle">TEST ID</th> -->
        <th class="thstyle">Company Name</th>
        <!-- <th class="thstyle">Sponsored</th> -->
        <th class="thstyle">Test Date</th>
        <th class="thstyle">Examinee</th>
        <th class="thstyle">E-mail</th>
        <th class="thstyle">Mobile</th>
        <th class="thstyle">Status</th>
        <th class="thstyle">Score</th>
        <th class="thstyle">Score Sheet</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($exams as $key) { 

  $dbdate=explode(' ',$key->created);
  $date=$dbdate[0];

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
?>

      <tr >
        <td><?php if($key->CADcat_id){echo '<b style="color:green;">'.$key->CADcat_id.'</b>';}else{echo '<b style="color:red;">N.A</b>';}?></td>
        <!-- <td><?php echo $key->exam_details_id;?></td> -->
        <td><?php echo $key->company_name;?></td>
        <!-- <td>john@example.com</td> -->
        <td><?php echo date('d F Y',strtotime($date));?></td>
        <td><?php echo $key->name;?></td>
        <td><?php echo $key->email;?></td>
        <td><?php echo $key->mobile;?></td>
        <td align="center"><b style="color:<?php echo $color;?>;"><?php echo $status;?></b></td>
        <td align="center"><b style="color:<?php echo $scorecolor;?>"><?php echo ($j * 10);?>%</b>
        <td><a href="<?php echo base_url();?>superadmin/admin/exam_score/<?php echo $key->apply_id;?>"><button class="btn btn-info">Score Sheet</button></td>
      </tr>    
<?php } ?>
    </tbody>
  </table>
  </div>
</body>