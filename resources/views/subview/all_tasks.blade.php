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
    width: 12.5%;
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
$Main_M= new Main_M();
use App\Reply_M as Reply_M;
$Reply_M= new Reply_M();
if(Session::has('id')){ 

//  echo '<pre>';
// $data=Session::all();
// echo Session::get('name');die();

?>
<div class="container">
  <div class="row">
    <h2>All Tasks</h2>
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
            <th style="width:6%;">ID</th>
            <th style="width:24%;">Task</th>
            <th style="width:9%;">Issued On</th>
            <th style="width:15.5%;">Employee</th>
            <th style="width:8%;">Hours</th>
            <th>Status</th>
            <th>Started</th>
            <th>Completed</th>
          </tr>
      </thead>
      <tbody>

<?php 

$tasks=$Main_M->get_all_tasks();

foreach ($tasks as $key => $value) { 

$employee_name=$Main_M->get_employee_name($value->emp_id);
$dbdate=explode(' ',$value->created);
$date=$dbdate[0];

if($value->start_time){

$dbstime=explode(' ',$value->start_time);
$stime=$dbstime[1];
$dbsdate=explode(' ',$value->start_time);
$sdate=$dbsdate[0];
$start=date("G:i", strtotime($stime)).' '.date('d,F',strtotime($sdate));}
else{$start='<span style="color:red;">NA</span>';}

if($value->end_time){ 
$dbetime=explode(' ',$value->end_time);
$etime=$dbetime[1];
$dbedate=explode(' ',$value->end_time);
$edate=$dbedate[0];
$end=date("G:i", strtotime($etime)).' '.date('d,F',strtotime($edate));}
else{$end='<span style="color:red;">NA</span>';}

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
              <td style="width:6%;"><?php echo $value->id;?> </td>
              <td style="width:24%;"><?php echo $value->task;?> </td>
              <td style="width:9%;"><?php echo date('d F y',strtotime($date));?></td>
              <td style="width:15.5%;"><?php echo $employee_name;?></td>
              <td style="width:8%;"><?php echo $value->hours;?></td>
              <td>
                <span style="background-color:<?php echo $bgcolor;?>;border-radius:4px;color:white">&nbsp<?php echo $status;?>&nbsp</span>
                <?php if($value->status == 'C')
                      {
                        echo '<a onclick="put_value_modal1(this)" data-id='.$value->id.' data-toggle="modal" data-target="#myModal" href="#" title="Reopen Issue">
                                <i class="fa fa-caret-square-o-up"></i>
                              </a>';
                      } else if($value->status == 'R')
                      {
                        echo '<a onclick="put_value_modal2(this)" data-id='.$value->id.' data-emp_id='.$value->emp_id.' data-toggle="modal" data-target="#myModal1" href="#" title="Reopen Issue">
                                <i style="color:orange;" class="fa fa-exclamation-circle"></i>
                              </a>';
                              $replies=$Reply_M->all_replies($value->id);
                              $task_id='task_id'.$value->id;
                              // echo '<pre>';
                              // print_r(json_encode($replies)); 
                              ?>
                        <!-- echo '<input type="hidden" id="task_id-'.$value->id.'" value="'.json_encode($replies).'" />'; -->
                        <input type="hidden" id="<?php echo $task_id;?>" value="<?php print_r(json_encode($replies)); ?>" />
                      <?php } ?>
              </td>
              <td><?php echo $start;?></td>
              <td><?php echo $end; ?></td>
          </tr>

            <!-- Reopen Reason Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Why Reopen ?</h4>
        </div>
        <div class="modal-body" align="center">
          <!--<p>Some text in the modal.</p>-->
          <form action="{{ route('reopenIssue') }}" method="POST">
            {{ csrf_field() }}
              <textarea maxlength="120" rows="2" class="form-control" name="reason" required></textarea>
              <br />
              <input type="hidden" id="h_taskId1" value="" name="h_taskId" />
              <input class="btn btn-info" type="submit" value="Reopen" />
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<button onclick="myFunction()">Click</button>
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
        <div class="modal-body" align="center">
          <p id="demo" style="height:200px;">
            
          

          </p>
          <form action="{{ route('replyIssue') }}" method="POST">
            {{ csrf_field() }}
              <!-- <textarea maxlength="120" class="form-control" name="reason" required></textarea> -->
              <input type="text" maxlength="120" style="float:left;width:80%;" class="form-control" name="reason" required />&nbsp&nbsp
              <br />
              <input type="hidden" id="h_taskId2" value="" name="h_taskId" />
              <input type="hidden" id="h_adminId" value="<?php echo Session::get('id');?>" name="h_adminId" />
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
  
  function put_value_modal1(val)
  {
    // alert('ok');
    var id=$(val).attr('data-id');
    //alert(id);
    $('#h_taskId1').val(id);
  }
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
