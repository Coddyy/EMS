<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title> Exam Details</title>

<?php if(empty($company_data))
{
    redirect(base_url()."Employer/Company-Profile");
    
} 
else if($this->Employee_M->check_exam_details_there($this->session->userdata('emp_id')) != false)
{
    $exam_details_id=$this->Employee_M->check_exam_details_there($this->session->userdata('emp_id'));
    // echo $exam_details_id;exit();
    redirect(base_url()."employer/create_exam/".$exam_details_id);
}
foreach ($company_data as $key) 
{
    $company_name=$key->name;
}

?>
<div class="container">
    <div class="span3">
        <h2 align="center">Exam Details</h2>
        <form action="" method="post">
        <label>Hiring For (Designation)</label>
        <input type="text" name="hiring_for" class="span3" required="">
        <label>Company Name</label>
        <input type="text" name="company_name" value="<?php echo $company_name ;?>" class="span3" readonly="">
        <label>Start Date</label>
        <input type="date" min="<?php echo date('Y-m-d');?>" name="start_date" class="span3" id="sd" onblur="check()" required="">
        <label>Last Date</label>
        <input type="date" min="<?php echo date('Y-m-d');?>" name="last_date" class="span3" id="ed" onblur="check()" required="">
        <span id="err_log" style="color:red;display: none;">Enter Valid Date</span>
        <label>Total Time For Exam (Minutes)</label>
        <select name="exam_time" style="margin-bottom: 15px;" required="">
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
        </select>

        <input type="submit" onmouseenter="check()" value="Create" class="btn btn-primary">
        <div class="clearfix"></div>
        </form>
    </div>
</div>
<br /><br />

<script type="text/javascript">
    function check()
    {
        var sd=$('#sd').val();
        var ed=$('#ed').val();
        if(sd != '' && ed != '')
        {
            //alert(sd);
            if(ed < sd)
            {
                $('#err_log').show();
                $('#ed').val('');
            }
            else
            {
                $('#err_log').hide();
                return true;
            }
        }
    }
</script>