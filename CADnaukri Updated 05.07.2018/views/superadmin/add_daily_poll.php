<?php if($this->session->userdata('superadminId') || $this->session->userdata('admin_id')){ ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form class="form-horizontal"  method="post">
<fieldset>



<!-- Form Name -->
<legend align="center">Add Daily Poll</legend>
<?php if($this->uri->segment(3) == "daily_poll_added"){
if($this->session->flashdata('daily_poll_added')){ ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Added Successfully
        </div>
    <?php } } else if($this->uri->segment(3) == "daily_poll_not_added"){
    if($this->session->flashdata('daily_poll_not_added')){  ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Not Added 
        </div>
    <?php } } else if($this->uri->segment(3) == "poll_deleted"){
    if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Deleted Successfully
        </div>
    <?php } } else if($this->uri->segment(3) == "poll_not_deleted"){
    if($this->session->flashdata('error')){  ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Not Deleted 
        </div>
    <?php } } else if($this->uri->segment(3) == "poll_updated"){
    if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Updated Successfully
        </div>
    <?php } } else if($this->uri->segment(3) == "poll_not_updated"){
    if($this->session->flashdata('error')){  ?>
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Poll Not Updated 
        </div>
    <?php } } ?>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="fn">Question</label>  
  <div class="col-md-4">
  <input id="fn" name="question" type="text" placeholder="Question" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Option A</label>  
  <div class="col-md-4">
  <input id="ln" name="ans_A" type="text" placeholder="Option A" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Option B</label>  
  <div class="col-md-4">
  <input id="cmpny" name="ans_B" type="text" placeholder="Option B" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Option C</label>  
  <div class="col-md-4">
  <input id="email" name="ans_C" type="text" placeholder="Option C" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">Option D</label>  
  <div class="col-md-4">
  <input id="city" name="ans_D" type="text" placeholder="Option D" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">ADD</button>
  </div>
</div>

</fieldset>
</form>
<br />
<div class="container">
  <a href="<?php echo base_url();?>superadmin/index/dashboard"><button class="btn btn-primary">Back</button></a>
</div>
<br />
<?php 

    $sort=$this->uri->segment(4);
    $polls=$this->SuperAdmin_M->get_daily_polls($sort);




?>
<div class="container">
  <div class="row">
  
  <a href="<?php echo base_url();?>superadmin/admin/add_daily_poll/I"><button class="btn btn-danger pull-right">Inactive</button>
  <span class="pull-right">&nbsp&nbsp</span>
  <a href="<?php echo base_url();?>superadmin/admin/add_daily_poll/P"><button class="btn btn-warning pull-right">Pending</button>
  <span class="pull-right">&nbsp&nbsp</span>
  <a href="<?php echo base_url();?>superadmin/admin/add_daily_poll/A"><button class="btn btn-success pull-right">Active</button>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Question</th>
                <th>Option A</th>
                <th>Option A</th>
                <th>Option C</th>
                <th>Option D</th>
                <th>Status</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($polls as $key) { ?>
            <tr id="d1">

                <td><?php echo $key->question_id; ?></td>
                <td id="l1"><?php echo $key->created; ?></td>
                <td id="f1"><?php echo $key->question; ?></td>
                <td id="l1"><?php echo $key->ans_A; ?></td>
                <td id="m1"><?php echo $key->ans_B; ?></td>
                <td id="l1"><?php echo $key->ans_C; ?></td>
                <td id="m1"><?php echo $key->ans_D; ?></td>
                <td id="m1">
            <?php $status=$this->SuperAdmin_M->check_status($key->question_id); 
                  //echo $status;
                  if($status == 'Pending')
                  {
            ?>
                    <div style="background-color: orange;border-radius: 5px;color:white;text-align: center;">&nbspPending&nbsp</div>
            <?php } 
                  else if($status == 'YES')
                  {
            ?>
                    <div style="background-color: green;border-radius: 5px;color:white;text-align: center;">&nbspActive&nbsp</div>
            <?php } else if($status == 'NO')
                  {
            ?>
                    <div style="background-color: red;border-radius: 5px;color:white;text-align: center;">&nbspInactive&nbsp</div>
            <?php }
            ?>
                
               
                

                </td>

                <td><a title="REPOST" href="<?php echo base_url();?>superadmin/admin/repost_daily_poll/<?php echo $key->question_id; ?>"><button type="button" class="update btn btn-info btn-sm"><span class="glyphicon glyphicon-new-window"></span></button></a></td>

                <td><a href="<?php echo base_url();?>superadmin/admin/view_result/<?php echo $key->question_id; ?>"><button type="button" class="update btn btn-primary btn-sm"><span class="glyphicon glyphicon-log-in"></span></button></a></td>

                <td><a href="<?php echo base_url();?>superadmin/admin/edit_daily_poll/<?php echo $key->question_id; ?>"><button type="button" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

                <td><button id="this_id" value="<?php echo $key->question_id ;?>" class="btn btn-danger btn-sm" onclick="delete_this();" ><span class="glyphicon glyphicon-trash"></span></button></td>
              
            </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</div>


<script>
function delete_this()
{
  //alert("Working");
  var id=document.getElementById('this_id').value;
  //alert(id);//$(this).attr("id");
    if(confirm("Are You Sure You Want To Delete This ??"))
    {
      window.location="<?php echo base_url();?>superadmin/admin/delete_daily_poll/"+id;
      //alert('hi');
    }
    else
    {
      return false;
    }
}

</script>

<?php  }
else
{
    redirect('superadmin/index');
} ?>