<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main_M as Main_M;
use App\Employee_M as Employee_M;
use Session;
use Illuminate\Support\Facades\Crypt;
class EmployeeController extends Controller
{
	
    public function __construct()
    {
        //
        
        
    }
    public function index()
    {
        // echo '<pre>';
        // print_r(Session::all());die();
        if(Session::has('id'))
        {
            // echo '<pre>';
            // print_r(Session::all());die();
        	$data['subview']=view('subview.employee.dashboard_employee');
            return view('project_dashboard',$data);
        }
        else
        {
            Session::flush();
            return redirect()->action('LoginController@index');
        }
    }
    public function my_tasks()
    {
    	if(Session::has('id'))
        {
	    	$data['subview']=view('subview.employee.my_tasks');
            return view('project_dashboard',$data);
	    }
        else
        {
            Session::flush();
            return redirect()->action('LoginController@index');
        }
    }
    public function start_task($task_id)
    {
    	//echo $task_id;die();
    	if(Session::has('id'))
    	{
    		$emp_id=Session::get('id');
    		$taskId=Crypt::decrypt($task_id);
    		$Employee_M = new Employee_M();
    		$success=$Employee_M->start_task($taskId,$emp_id);
    		if($success == true)
    		{
    			Session::flash('success_msg', 'Task Started');
    			return redirect()->action('EmployeeController@my_tasks');
    		}
    		else
    		{
    			Session::flash('error_msg', 'Task Start Failed');
    			return redirect()->action('EmployeeController@my_tasks');
    		}
    	}
    } 
    public function end_task($task_id)
    {
    	//echo $task_id;die();
    	if(Session::has('id'))
    	{
    		$emp_id=Session::get('id');
    		$taskId=Crypt::decrypt($task_id);
    		$Employee_M = new Employee_M();
    		$success=$Employee_M->end_task($taskId,$emp_id);
    		if($success == true)
    		{
    			Session::flash('success_msg', 'Task Completed');
    			return redirect()->action('EmployeeController@my_tasks');
    		}
    		else
    		{
    			Session::flash('error_msg', 'Task Complete Failed');
    			return redirect()->action('EmployeeController@my_tasks');
    		}
    	}
    } 
}
?>