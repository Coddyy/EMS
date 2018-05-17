<?php use Illuminate\Support\Facades\Crypt; ?>
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
$task_id=Crypt::encrypt($value->id);
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
              <td><span style="background-color:<?php echo $bgcolor;?>;border-radius:4px;color:white">&nbsp<?php echo $status;?>&nbsp</span></td>
              <td>
                <?php if($value->status == 'P' || $value->status == 'R'){ ?>
                  <a href="{{ route('StartTask',$task_id) }}"><button class="btn btn-info">Start</button></a>
                <?php } else if($value->status == 'S'){ ?>
                    <a href="{{ route('EndTask',$task_id) }}"><button class="btn btn-warning">End</button></a>
                <?php } else if($value->status == 'C'){ ?>
                    <button disabled="" class="btn btn-success">Completed</button>
                <?php } ?>
                </td>
          </tr>
<?php } ?>
      </tbody>
    </table>
</div>
  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>