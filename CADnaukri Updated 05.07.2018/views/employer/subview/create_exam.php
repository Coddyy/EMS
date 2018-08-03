<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<title>Set Question</title>

<?php 

if($this->uri->segment(3) == '')
{
  redirect(base_url()."employer/exam_details");
}
else if($this->Employee_M->exam_already_set($this->session->userdata('emp_id')) == true)
{
  redirect(base_url()."employer/exams");
} 
else if(empty($company_data))
{
  redirect(base_url()."Employer/Company-Profile");
}
?>
<!-- <?php 

// $examId=$this->uri->segment(3);
// if($this->Employee_M->is_there_exam_details($examId) == false )
// {
//   redirect(base_url()."employer/exam_details");
// }

?> -->
<div class="container">
    <div class="span3">

<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
<?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
<?php }else if($this->session->flashdata('exam_set')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('exam_set'); ?>
        </div>
        <script type="text/javascript">
          setTimeout(function(){ window.location="<?php echo base_url();?>employer/dashboard"; }, 3000);
        </script>
<?php } ?>


<?php 

//echo $exam_id;
$saved_questions=$this->Employee_M->get_questions($exam_id);

$ques1=$this->Employee_M->get_question_details($saved_questions->qtn1);
$ques2=$this->Employee_M->get_question_details($saved_questions->qtn2);
$ques3=$this->Employee_M->get_question_details($saved_questions->qtn3);
$ques4=$this->Employee_M->get_question_details($saved_questions->qtn4);
$ques5=$this->Employee_M->get_question_details($saved_questions->qtn5);
$ques6=$this->Employee_M->get_question_details($saved_questions->qtn6);
$ques7=$this->Employee_M->get_question_details($saved_questions->qtn7);
$ques8=$this->Employee_M->get_question_details($saved_questions->qtn8);
$ques9=$this->Employee_M->get_question_details($saved_questions->qtn9);
$ques10=$this->Employee_M->get_question_details($saved_questions->qtn10);

$qarray=array($ques1->question,$ques2->question,$ques3->question,$ques4->question,$ques5->question,$ques6->question,$ques7->question,$ques8->question,$ques9->question,$ques10->question);

?>

<input type="hidden" id="ques1" value="<?php echo $ques1->question;?>" />
<input type="hidden" id="ques2" value="<?php echo $ques2->question;?>" />
<input type="hidden" id="ques3" value="<?php echo $ques3->question;?>" />
<input type="hidden" id="ques4" value="<?php echo $ques4->question;?>" />
<input type="hidden" id="ques5" value="<?php echo $ques5->question;?>" />
<input type="hidden" id="ques6" value="<?php echo $ques6->question;?>" />
<input type="hidden" id="ques7" value="<?php echo $ques7->question;?>" />
<input type="hidden" id="ques8" value="<?php echo $ques8->question;?>" />
<input type="hidden" id="ques9" value="<?php echo $ques9->question;?>" />
<input type="hidden" id="ques10" value="<?php echo $ques10->question;?>" />

<?php
$emp_id=$this->session->userdata('emp_id');
//echo $emp_id;exit();
$questions=$this->Employee_M->question_left($emp_id);
      
      if($questions)
      {
        foreach($questions as $key) 
        {
           if($key->qtn1)
           {
                $q1=1;
           }else
           {
                $q1=0;
           }if($key->qtn2)
           {
                $q2=1;
           }else
           {
                $q2=0;
           }if($key->qtn3)
           {
                $q3=1;
           }else
           {
                $q3=0;
           }if($key->qtn4)
           {
                $q4=1;
           }else
           {
                $q4=0;
           }if($key->qtn5)
           {
                $q5=1;
           }else
           {
                $q5=0;
           }if($key->qtn6)
           {
                $q6=1;
           }else
           {
                $q6=0;
           }if($key->qtn7)
           {
                $q7=1;
           }else
           {
                $q7=0;
           }if($key->qtn8)
           {
                $q8=1;
           }else
           {
                $q8=0;
           }if($key->qtn9)
           {
                $q9=1;
           }else
           {
                $q9=0;
           }if($key->qtn10)
           {
                $q10=1;
           }else
           {
                $q10=0;
           }
           $t_questions=($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 );
           $insert_question=($t_questions + 1);
           //$insert_question=11;
           $question_no=$insert_question;

           
        }
      }
      else
      {
        $t_questions=0;
        $insert_question=0;
        $question_no=1;
      }
?>
<?php if($insert_question <= 10){ ?>
        <h2 align="center">Add Question</h2>
        <h3 class="pull-left">Question <?php echo $question_no;?></h3><h3 style="color:green;" class="pull-right"><?php echo $t_questions;?> Questions Added</h3>

          <form action="" method="post">
          <label>Question</label>
          <textarea name="question" rows="2" maxlength="400" class="span3" id="q" onblur="check()" required=""></textarea>
          <label>Option 1</label>
          <input type="text" name="opt1" maxlength="100" class="span3" id="o1" required="">
          <label>Option 2</label>
          <input type="text" name="opt2" maxlength="100" class="span3" id="o2" required="">
          <label>Option 3</label>
          <input type="text" name="opt3" maxlength="100" class="span3" id="o3" required="">
          <label>Option 4</label>
          <input type="text" name="opt4" maxlength="100" class="span3" id="o4" required="">
          <label>Correct Option</label>
          <select class="span3" name="correctopt" required="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
          </select>
          <br /> <br />
          <input type="submit" onmouseenter="check();check_question()" value="Save" name="save" class="btn btn-primary ">
          <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">Added Questions</button>
          <input type="hidden" name="h_insert_question" value="<?php echo $insert_question;?>" />
          <div class="clearfix"></div>
          </form>
<?php } else { ?>
          <h2 align="center">Set Exam</h2><br />
          <div class="col-md-4"></div>
          <div align="center" class="col-md-1">
          <a href="<?php echo base_url();?>employer/set_exam/<?php echo $exam_id;?>"><button align="center" class="btn btn-success">Set Exam</button> </a>
          </div>
          <div class="col-md-1"></div>
          <div align="center" class="col-md-1">
    
          <a href="<?php echo base_url();?>employer/edit_exam/<?php echo $exam_id;?>"><button align="center" class="btn btn-info">Edit Exam</button> </a>
          </div>
          <div class="col-md-4"></div>
          <br /><br /><br /><br /><br /><br />
<?php } ?>
    </div>
</div>
<!-- ******************  Question MODAL  ********************-->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h3 align="center">Already Added</h3>
        </div>
        <div class="modal-body">
  <?php for($i=0; $i <count($qarray); ++$i)
        { ?>

        <p style="font-size: 16px;"><?php echo ($i + 1).". ".$qarray[$i]; ?></p>

  <?php } ?>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- ****************** END Question MODAL  ********************-->
<br />
<script type="text/javascript">
  
function check()
{
  var question=document.getElementById('q').value;
  var option1=document.getElementById('o1').value;
  var option2=document.getElementById('o2').value;
  var option3=document.getElementById('o3').value;
  var option4=document.getElementById('o4').value;
  
  var arr=[question,option1,option2,option3,option4];
  //alert(arr.length);
  var err_flag=0
  for(var i=0; i < arr.length ; ++i)
  {
    var needle=arr[i];
    if(i == 0)
    {
      var haystack=[option1,option2,option3,option4];
    }
    else if(i == 1)
    {
      var haystack=[question,option2,option3,option4];
    }
    else if(i == 2)
    {
      var haystack=[question,option1,option3,option4];
    }
    else if(i == 3)
    {
      var haystack=[question,option1,option2,option4];
    }
    else if(i == 4)
    {
      var haystack=[question,option1,option2,option3];
    }
    var length = haystack.length;
    for(var j = 0; j < length; ++j) 
    {
        //var disp=haystack[j] +" "+ needle;
        //alert(disp);
        if(haystack[j] == needle)
        { 
          var err_flag=(err_flag+1);
        }
    }
  }
  //alert(err_flag);
  if(question != '' && option1 != '' && option2 != '' && option3 != '' && option4 != '')
  {
    if(err_flag > 0)
    {
      alert("Same inputs are not allowed");
      $('#q').val('');
      $('#o1').val('');
      $('#o2').val('');
      $('#o3').val('');
      $('#o4').val('');
    }
  }
}
function check_question()
{
  var qu1=document.getElementById('ques1').value;
  var qu2=document.getElementById('ques2').value;
  var qu3=document.getElementById('ques3').value;
  var qu4=document.getElementById('ques4').value;
  var qu5=document.getElementById('ques5').value;
  var qu6=document.getElementById('ques6').value;
  var qu7=document.getElementById('ques7').value;
  var qu8=document.getElementById('ques8').value;
  var qu9=document.getElementById('ques9').value;
  var qu10=document.getElementById('ques10').value;

  var question=document.getElementById('q').value;
  //alert(qu1);
  var qarr= [qu1,qu2,qu3,qu4,qu5,qu6,qu7,qu8,qu9,qu10];
  if(question != '')
  {
    for(var i=0 ; i < qarr.length ; ++i)
    {
      if(question == qarr[i])
      {
        alert('This question is already added');
        $('#q').val('');
        return false;
      }
    }
  }

}

</script>
