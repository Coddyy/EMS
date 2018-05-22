<?php use Illuminate\Support\Facades\Crypt; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
  table {
    width: 50%;

}

thead, tbody, tr, td, th {
    display: block;
}


tbody {
    overflow-y: auto;
    height: 400px;
}

tbody td, thead th {
    float: left;
    width: 14%;
    padding:0rem;
}

tr:after {
    clear: both;
    content: ' ';
    display: block;
    visibility: hidden;
}
</style>

<?php 

use App\Main_M as Main_M;
use App\Employee_M as Employee_M;
$Employee_M = new Employee_M();
$Main_M= new Main_M();
if(Session::has('id')){ 

//  echo '<pre>';
// $data=Session::all();
// echo Session::get('name');die();

?>
<div class="container">
  <div class="row">
    <h2>My Tasks</h2>
    
  </div>
  @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
    @endif

    @if(Session::has('error_msg'))
        <div class="alert alert-danger">{{ Session::get('success_msg') }}</div>
    @endif
  <table class="table table-striped" >
      <thead>
          <tr>
            <th>Task ID</th>
            <th>Task</th>
            <th>Date Issued</th>
            <th>Employee</th>
            <th>Hours</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
      </thead>
      <tbody>
<?php 
$id=Session::get('id');
$tasks=$Employee_M->my_tasks($id);
// echo '<pre>';
// print_r($tasks);die();
foreach ($tasks as $key => $value) { 

$employee_name=$Main_M->get_employee_name($value->emp_id);
$dbdate=explode(' ',$value->created);
$date=$dbdate[0];
$taskID=Crypt::encrypt($value->id);
if($value->status == 'P')
{
  $bgcolor='orange';
  $status='Peding';
}
else if($value->status == 'S')
{
    $bgcolor='blue';
    $status='Started';
}
else if($value->status == 'C')
{
    $bgcolor='green';
    $status='Completed';
}
else if($value->status == 'R')
{
    $bgcolor='#ff9966';
    $status='Reopend';
}
?>
          <tr>
              <td><?php echo $value->id;?> </td>
              <td><?php echo $value->task;?> </td>
              <td><?php echo date('d F y',strtotime($date));?></td>
              <td><?php echo $employee_name;?></td>
              <td><?php echo $value->hours;?></td>
              <td><span style="background-color:<?php echo $bgcolor;?>;border-radius:4px;color:white">&nbsp<?php echo $status;?>&nbsp</span>
              <?php if($value->status == 'R')
                      {
                        echo '<a onclick="put_value_modal2(this)" data-id='.$value->id.' data-emp_id='.$value->emp_id.' data-toggle="modal" data-target="#myModal1" href="#" title="Reopen Issue">
                                <i style="color:orange;" class="fa fa-exclamation-circle"></i>
                              </a>';
                              $task_id='task_id'.$value->id;
                              ?>
                      <?php } ?>

              </td>
              <td>
                <?php if($value->status == 'P' || $value->status == 'R'){ ?>
                  <a href="{{ route('StartTask',$taskID) }}"><button class="btn btn-info">Start</button></a>
                <?php } else if($value->status == 'S'){ ?>
                    <a href="{{ route('EndTask',$taskID) }}"><button class="btn btn-warning">End</button></a>
                <?php } else if($value->status == 'C'){ ?>
                    <button disabled="" class="btn btn-success">Completed</button>
                <?php } ?>
                </td>
          </tr>


          <!-- Reply Modal -->
<!-- 
<button data-toggle="modal" data-target="#myModal1">Click</button> -->

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Conversation</h5>
        </div>
        <style type="text/css">
            #style-4::-webkit-scrollbar-track
            {
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              background-color: #F5F5F5;
            }

            #style-4::-webkit-scrollbar
            {
              width: 10px;
              background-color: #F5F5F5;
            }

            #style-4::-webkit-scrollbar-thumb
            {
              background-color: #000000;
              border: 2px solid #555555;
            }
        </style>
        <div class="modal-body" align="center">
        <p style="overflow: hidden;">
          <p id="demo" class="scrollbar" style="height:200px;overflow-y: scroll;padding-right: 5px;">
            
          
          </p>
        </p>
          <form action="{{ route('replyIssue') }}" method="POST">
            {{ csrf_field() }}
              <!-- <textarea maxlength="120" class="form-control" name="reason" required></textarea> -->
              <input type="text" maxlength="60" style="float:left;width:80%;" class="form-control" name="reply" required />&nbsp&nbsp
              <br />
              <input type="hidden" name="type" value="employee" />
              <input type="hidden" id="h_taskId2" value="" name="h_taskId" />
              <input type="hidden" id="h_adminId" value="<?php echo Session::get('id');?>" name="user_id" />
              <input class="btn btn-info pull-right" style="margin-top:-24px;float:right;" type="submit" value="Reply" />
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>






<?php } ?>
      </tbody>
    </table>
</div>

<script type="text/javascript">

  function put_value_modal2(val)
  {
    // alert('ok');
    var task_id=$(val).attr('data-id');
    var emp_id=$(val).attr('data-emp_id');
    var admin_id=<?php echo Session::get('id') ?>;
    //alert(admin_id);
    var fieldId='#task_id'+task_id;

    $('#h_taskId2').val(task_id);
    $.ajax({
        url: '{{ route("allReplies") }}',
        type: 'GET',
        data: {task_id: task_id , emp_id:emp_id,admin_id:admin_id ,_csrf: '{{ csrf_field() }}'},
        success: function(data){
          
            var val = $.parseJSON(data);
            var reply  = val.reply;
            //console.log(val);
            //console.log(reply.length);
            for (var i = 0 - 1; i < reply.length; i++) 
            {
              $('#demo').html(val.reply);
            }
            
           
        },
        complete: function(){
            
          }
    });

  }

function getFullName(item) {
    var fullname = [item.reply];//,item.emp_id];.join(" ");
    return fullname;
}


</script>



  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>