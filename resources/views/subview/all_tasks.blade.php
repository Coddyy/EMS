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

if(Session::get('type') == 'employee')
{
  Session::flush();
  return redirect()->action('LoginController@index');
}


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
            <th style="width:6%;">MID</th>
            <th style="width:23.9%;">Task</th>
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

// $hourdiff = round((strtotime($value->end_time) - strtotime($value->start_time))/60, 0);
// echo ($value->hours * 60).'>>>>>>'.$hourdiff.'<br />';

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
              <td style="width:6%;"><?php echo $value->module_id;?> </td>
              <td style="width:24%;font-family: sans-serif;">
                <?php 

                    $taken_mins = round((strtotime($value->end_time) - strtotime($value->start_time))/60, 0);
                    $given_mins=($value->hours * 60);
                    if(($given_mins - $taken_mins) < 0)
                    {
                      $delaymins=($given_mins - $taken_mins) * (-1);
                      $hours = floor($delaymins / 60).'Hrs,'.($delaymins -   floor($delaymins / 60) * 60).'Mins';
                      echo '<i style="color:red;" title='.$hours.' class="fa fa-level-down"></i>';
                    }
                      echo '  '.$value->task;
                ?> 
              </td>
              <td style="width:9%;"><?php echo date('d F y',strtotime($date));?></td>
              <td style="width:15.5%;"><?php echo $employee_name;?></td>
              <td style="width:8%;"><?php echo $value->hours;?></td>
              <td>
                <span style="background-color:<?php echo $bgcolor;?>;border-radius:4px;color:white">&nbsp<?php echo $status;?>&nbsp</span>
                <?php if($value->status == 'C')
                      {
                        echo '<a onclick="put_value_modal1(this)" data-module_id='.$value->module_id.' data-id='.$value->id.' data-toggle="modal" data-target="#myModal" href="#" title="Reopen Issue">
                                <i class="fa fa-caret-square-o-up"></i>
                              </a>';
                      } else if($value->status == 'R')
                      {
                        echo '<a onclick="put_value_modal2(this)" data-id='.$value->id.' data-module_id='.$value->module_id.' data-emp_id='.$value->emp_id.' data-toggle="modal" data-target="#myModal1" href="#" title="Reopen Issue">
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
              <textarea maxlength="120" rows="2" class="form-control" name="reply" required></textarea>
              <br />
              <input type="hidden" id="h_taskId1" value="" name="h_taskId" />
              <input type="hidden" id="h_moduleId1" value="" name="h_moduleId" />
              <input type="hidden" id="h_adminId" value="<?php echo Session::get('id');?>" name="user_id" />
              <input class="btn btn-info" type="submit" value="Reopen" />
          </form>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
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
              <input type="hidden" name="type" value="admin" />
              <input type="hidden" id="h_taskId2" value="" name="h_taskId" />
              <input type="hidden" id="h_moduleId2" value="" name="h_moduleId" />
              <input type="hidden" id="h_adminId" value="<?php echo Session::get('id');?>" name="user_id" />
              <input class="btn btn-info pull-right" style="margin-top:-24px;float:right;" type="submit" value="Reply" />
          </form>
        </div>
        
        <div class="modal-footer">
          <button onclick="end_task()" type="button" class="btn btn-success" >Close Issue</button>
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
    var task_id=$(val).attr('data-id');
     var module_id=$(val).attr('data-module_id');
    //alert(module_id);
    $('#h_taskId1').val(task_id);
    $('#h_moduleId1').val(module_id);
  }
  function put_value_modal2(val)
  {
    // alert('ok');
    var task_id=$(val).attr('data-id');
    var emp_id=$(val).attr('data-emp_id');
    var module_id=$(val).attr('data-module_id');
    var admin_id=<?php echo Session::get('id') ?>;
    //alert(module_id);
    // var fieldId='#task_id'+task_id;

    $('#h_taskId2').val(task_id);
    $('#h_moduleId2').val(module_id);

    $.ajax({
        url: '{{ route("allReplies") }}',
        type: 'GET',
        data: {module_id:module_id,task_id: task_id , emp_id:emp_id,admin_id:admin_id ,_csrf: '{{ csrf_field() }}'},
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
function end_task()
{
    var task_id=$('#h_taskId2').val();
    //alert(task_id);
    $.ajax({
        url: '{{ route("closeTask") }}',
        type: 'GET',
        data: {task_id: task_id ,_csrf: '{{ csrf_field() }}'},
        success: function(data){
          
            // var val = $.parseJSON(data);
            // console.log(val);
            window.location='{{ route("allTasks") }}';
        },
    });
}


</script>


  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>
