<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_M extends Model
{
	public function index()
    {
    	echo "Hi I am model";
    }
    public function my_tasks($id)
    {
    	//echo $id;die();
    	$result=\DB::table('task')->where('emp_id',$id)->where('status','!=','C')->get();
    	if($result)
    	{
    		return $result;
    	}
    	else
    	{
    		return false;
    	}

    }
    public function start_task($task_id,$emp_id)
    {
    	date_default_timezone_set("Asia/Kolkata");
    	$success=\DB::table('task')->where('id',$task_id )->where('emp_id',$emp_id )->update(['status' => 'S','start_time' => date('Y-m-d H:i:s')]);
    	if($success)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function end_task($task_id)
    {
    	date_default_timezone_set("Asia/Kolkata");

        $time=\DB::table('task')->where('id',$task_id)->first();
        $end_date=date('Y-m-d H:i:s');

        $total_mins_taken=round((strtotime($end_date) - strtotime($time->start_time))/60, 0);

    	$success=\DB::table('task')->where('id',$task_id )->update(['status' => 'C','end_time' => $end_date,'total_time' => ($time->total_time + $total_mins_taken)]);
    	if($success)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
}
?>