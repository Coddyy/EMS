<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<title>Set Question</title>

<?php if($this->Employee_M->exam_already_set($this->session->userdata('emp_id')) == true)
{
  redirect(base_url()."employer/exams");
} else if(empty($company_data))
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
          <textarea name="question" rows="2" maxlength="200" class="span3"></textarea>
          <label>Option 1</label>
          <input type="text" name="opt1" maxlength="100" class="span3">
          <label>Option 2</label>
          <input type="text" name="opt2" maxlength="100" class="span3">
          <label>Option 3</label>
          <input type="text" name="opt3" maxlength="100" class="span3">
          <label>Option 4</label>
          <input type="text" name="opt4" maxlength="100" class="span3">
          <label>Correct Option</label>
          <select class="span3" name="correctopt">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
          </select>
          <br /> <br />
          <input type="submit" value="Save" name="save" class="btn btn-primary ">
          <input type="hidden" name="h_insert_question" value="<?php echo $insert_question;?>" />
          <div class="clearfix"></div>
          </form>
<?php } else { ?>
          <h2 align="center">Set Exam</h2><br />
          <div class="col-md-5"></div>
          <div align="center" class="col-md-1">
          <a href="<?php echo base_url();?>employer/set_exam/<?php echo $exam_id;?>"><button align="center" class="btn btn-success">Set Exam</button> </a>
          </div>
          <div align="center" class="col-md-1">
          <a href="<?php echo base_url();?>employer/edit_exam/<?php echo $exam_id;?>"><button align="center" class="btn btn-info">Edit Exam</button> </a>
          </div>
          <div class="col-md-5"></div>
          <br /><br /><br /><br /><br /><br />
<?php } ?>
    </div>
</div>
<br />