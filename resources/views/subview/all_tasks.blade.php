
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
    width: 16%;
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
if(Session::has('id')){ 

//  echo '<pre>';
// $data=Session::all();
// echo Session::get('name');die();

?>
<div class="container">
  <div class="row">
    <h2>All Tasks</h2>
  </div>
  
  <table class="table table-striped" >
      <thead>
          <tr>
            <th>Task ID</th>
            <th>Task</th>
            <th>Date Issued</th>
            <th>Employee</th>
            <th>Hours</th>
            <th>Status</th>
            
          </tr>
      </thead>
      <tbody>
<?php 

$tasks=$Main_M->get_all_tasks();
foreach ($tasks as $key => $value) { 

$employee_name=$Main_M->get_employee_name($value->emp_id);
$dbdate=explode(' ',$value->created);
$date=$dbdate[0];
if($value->status == 'P')
{
  $bgcolor='orange';
  $status='Peding';
}
?>
          <tr>
              <td><?php echo $value->id;?> </td>
              <td><?php echo $value->task;?> </td>
              <td><?php echo date('d F y',strtotime($date));?></td>
              <td><?php echo $employee_name;?></td>
              <td><?php echo $value->hours;?></td>
              <td><span style="background-color:<?php echo $bgcolor;?>;border-radius:4px;color:white">&nbsp<?php echo $status;?>&nbsp</span></td>
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