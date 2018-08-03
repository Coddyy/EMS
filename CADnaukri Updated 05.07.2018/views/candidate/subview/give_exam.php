<br /><br />
<title>Security Activated</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php if(empty($this->uri->segment(3)) || empty($this->uri->segment(4)) || empty($this->uri->segment(5)))
{
    //exit()
;  redirect(base_url()."candidate/dashboard");
}
?>
<?php 

// echo $db_apply_id;
$exam_details_id=$this->uri->segment(3);
$candidate_id=$this->uri->segment(4);
$uapply_id=$this->uri->segment(5);
$ex_apply_id=explode('c1s8', $uapply_id);
$right_side=explode('c1s8',$ex_apply_id[1]);
$apply_id=$right_side[0];
//echo $apply_id;exit();

if($this->Candidate_M->check_is_there_exam_id($exam_details_id,$candidate_id,$apply_id) == false)
{
  ?>
    <div class="container" >
  <div class="alert alert-danger" >
    We have received some suspisious activities. Your exam has been canceled. Redirecting...
  </div></div>
  <?php
  
  //echo "working;";exit();
  $this->Candidate_M->mark_spam($apply_id);
  ?>
  <script>
    setTimeout(function(){ window.location="<?php echo base_url();?>candidate/dashboard"; }, 6000);
  </script>
  <?php
} else if($this->Candidate_M->is_spamming_happend($apply_id))
  {

   ?>

  <div class="container" >
    <div class="alert alert-danger">
      Your exam has been canceled. Redirecting...
    </div>
  </div>
    <script>
    setTimeout(function(){ window.location="<?php echo base_url();?>candidate/dashboard"; }, 5000);
  </script>

<?php  } else {


?>

<style>
.demo {
  text-align: center;
  font-size: 20px;
  margin-top:0px;
}

/* The radio */
.radio {
 
     display: block;
    position: relative;
    padding-left: 40px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 18px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

/* Hide the browser's default radio button */
.radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    display: none;
}

/* Create a custom radio button */
.checkround {

    position: absolute;
    top: 6px;
    left: 15px;
    height: 20px;
    width: 20px;
    background-color: #fff ;
    border-color:orange;
    border-style:solid;
    border-width:2px;
     border-radius: 50%;
}


/* When the radio button is checked, add a blue background */
.radio input:checked ~ .checkround {
    background-color: #fff;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkround:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio input:checked ~ .checkround:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.radio .checkround:after {
     left: 2px;
    top: 2px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background:#0055a5;
    
 
}




</style>


<?php


//echo $stamp;exit();

?>

</head>

<body>


<?php 
$exam_details_id=$this->uri->segment(3);
$candidate_id=$this->uri->segment(4);

$question=$this->Candidate_M->test_details($exam_details_id); 

    //var_dump($question);

    $qtn1=$question->qtn1;
    $qtn2=$question->qtn2;
    $qtn3=$question->qtn3;
    $qtn4=$question->qtn4;
    $qtn5=$question->qtn5;
    $qtn6=$question->qtn6;
    $qtn7=$question->qtn7;
    $qtn8=$question->qtn8;
    $qtn9=$question->qtn9;
    $qtn10=$question->qtn10;

$answers=$this->Candidate_M->get_ans($apply_id);
if($answers)
{
  //echo "ok";exit();
  foreach($answers as $key) 
  {
      //echo $key->ans1;exit();
     if($key->ans1)
     {
          $a1=1;
          //echo "ok";exit();
     }else
     {
          $a1=0;
     }if($key->ans2)
     {
          $a2=1;
     }else
     {
          $a2=0;
     }if($key->ans3)
     {
          $a3=1;
     }else
     {
          $a3=0;
     }if($key->ans4)
     {
          $a4=1;
     }else
     {
          $a4=0;
     }if($key->ans5)
     {
          $a5=1;
     }else
     {
          $a5=0;
     }if($key->ans6)
     {
          $a6=1;
     }else
     {
          $a6=0;
     }if($key->ans7)
     {
          $a7=1;
     }else
     {
          $a7=0;
     }if($key->ans8)
     {
          $a8=1;
     }else
     {
          $a8=0;
     }if($key->ans9)
     {
          $a9=1;
     }else
     {
          $a9=0;
     }if($key->ans10)
     {
          $a10=1;
     }else
     {
          $a10=0;
     }
      $t_ans=($a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 );
      $insert_ans=($t_ans + 1);
     
     //echo $t_ans;exit();
     $question_no=$insert_ans;

     if($question_no == 1)
     {
          $qtn= $qtn1;
     }
     else if($question_no == 2)
     {
          $qtn= $qtn2;
     }
     else if($question_no == 3)
     {
          $qtn= $qtn3;
     }
     else if($question_no == 4)
     {
          $qtn= $qtn4;
     }
     else if($question_no == 5)
     {
          $qtn= $qtn5;
     }
     else if($question_no == 6)
     {
          $qtn= $qtn6;
     }
     else if($question_no == 7)
     {
          $qtn= $qtn7;
     }
     else if($question_no == 8)
     {
          $qtn= $qtn8;
     }
     else if($question_no == 9)
     {
          $qtn= $qtn9;
     }
     else if($question_no == 10)
     {
          $qtn= $qtn10;
     }
     
  }


}
else
{
  $t_ans=0;
  $insert_ans=1;
  $question_no=1;
}
//echo $qtn;exit();

//echo $insert_ans;exit();
if($insert_ans > 10)
{
  //echo $db_apply_id;exit();


  // ####################  SCORE COUNTING ##############//
          
          // ********* Questions ****** //

          // $exam_details_id=$key->exam_details_id;

          $dbquestion=$this->Candidate_M->get_exam_questions($exam_details_id);

          $qtn1=$dbquestion->qtn1;$qtn2=$dbquestion->qtn2;$qtn3=$dbquestion->qtn3;$qtn4=$dbquestion->qtn4;$qtn5=$dbquestion->qtn5;
          $qtn6=$dbquestion->qtn6;$qtn7=$dbquestion->qtn7;$qtn8=$dbquestion->qtn8;$qtn9=$dbquestion->qtn9;$qtn10=$dbquestion->qtn10;

          $qtnarray=array($qtn1,$qtn2,$qtn3,$qtn4,$qtn5,$qtn6,$qtn7,$qtn8,$qtn9,$qtn10);
          // ********* End Questions ****** //



          // ********* Answers ********* //

          // $apply_id=$key->apply_id;
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
          echo $j;
          $score=$j;
          $this->Candidate_M->update_total_score($score,$candidate_id);
          //exit();
        //#################### END SCORE COUNTING ##############



  redirect(base_url()."candidate/save_exam/".$db_apply_id);
}

$the_question=$this->Candidate_M->get_question($qtn);



?>


<div id="examboard" class="container" style="border: 1px solid #cccccc; max-width: 700px; border-radius: 4px;margin-top: -30px;">
  <br /><br />
<div class="col-md-12 row" style="border: 0px solid blue; margin-top: -30px;">



<?php 

$exam_time=$this->Candidate_M->get_exam_time($exam_details_id);

$date=$this->Candidate_M->get_exam_start_time($apply_id);

$timer=date('Y-m-d H:i:s',strtotime('+'.$exam_time.' minutes',strtotime($date)));


//echo $timer;
//exit();

?> 

<input type="hidden" id="date" value="<?php echo $timer;?>" />


<p id="demo" class="demo pull-right"></p></div>

<br /><br /><br /><br />

<div class="col-md-12 row" style=" border: 0px solid black; margin-left: 0px;">
    <div  class="col-md-12" style=" border:0px solid red; border-radius: 2px;box-shadow: 1px 1px 1px 1px #e2e2e2;background-color: ; margin-top: -60px;">
    

        <p style="font-size: 22px;">Q. <?php echo $the_question->question;?></p></div>
        <br />
        <form action="" method="post" style="border: 0px solid green;margin-top: 10px;">
            <label class="radio"><?php echo $the_question->opt1;?>
              <input type="radio" checked="checked" value="1" name="ans">
              <span class="checkround"></span>
            </label>
            <label class="radio"><?php echo $the_question->opt2;?>
              <input type="radio" value="2" name="ans">
              <span class="checkround"></span>
            </label>
            <label class="radio"><?php echo $the_question->opt3;?>
              <input type="radio" value="3" name="ans">
              <span class="checkround"></span>
            </label>
            <label class="radio"><?php echo $the_question->opt4;?>
              <input type="radio" value="4" name="ans">
              <span class="checkround"></span>
            </label>
            <br />
            <input type="hidden" name="h_ans_no" value="<?php echo $question_no;?>" />
            <input type="hidden" name="h_apply_id" value="<?php echo $apply_id;?>" />
            <input class="btn btn-success" style="margin-left: 15px;" type="submit" name="submit" value="Save & Next" />
        </form>
        <br /><br />
    </div>

</div>
</div>





<script>

var date=document.getElementById("date").value;

//alert(date);
    // Set the date we're counting down to
    

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var countDownDate = new Date(date).getTime();
    var now = (new Date()).getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";

    document.getElementById("demo").innerHTML = "Time Left: " + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "TIME OUT";
        document.getElementById("examboard").innerHTML = "<h3 slign='center'>Exam Over. Redirecting....</h3>";
        //return true;
        window.location="<?php echo base_url();?>candidate/save_exam/<?php echo $apply_id;?>";
    }
}, 1000);
</script>

<?php } ?>
<br /><br /><br />
