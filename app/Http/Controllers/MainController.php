<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main_M as Main_M;
use App\Reply_M as Reply_M;
use Session;
use Illuminate\Support\Facades\Crypt;
class MainController extends Controller
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
            if(Session::get('type') == 'admin')
            {
            	$data['subview']=view('subview.dashboard_home');
                return view('project_dashboard',$data);
            }
            else
            {
                return redirect()->action('EmployeeController@index');
            }
        }
        else
        {
            Session::flush();
            return redirect()->action('LoginController@index');
        }
    }
    public function add_employee()
    {

            $data['subview']=view('subview.add_employee');
            return view('project_dashboard',$data);
        
    }
    public function insert_employee(Request $request)
    {
        // echo '<pre>';
        // print_r($_POST);

        $post=$request->all();
        $Main_M= new Main_M();
        $result=$Main_M->employee_insert($post);
        if($result)
        {
            Session::flash('success_msg', 'Employee added successfully');
        }
        else
        {
            Session::flash('error_msg', 'Employee not added!');
        }
        return redirect()->action('MainController@add_employee');

    }
    public function asign_task()
    {
        $data['subview']=view('subview.asign_task');
        return view('project_dashboard',$data);
    }
    public function insert_task(Request $request)
    {
        $post=$request->all();
        $Main_M= new Main_M();
        $result=$Main_M->asign_employee($post);
        if($result)
        {
            Session::flash('success_msg', 'Task Asigned');
        }
        else
        {
            Session::flash('error_msg', 'Task not asigned!');
        }
       return redirect()->action('MainController@asign_task');
    } 
    public function all_tasks(Request $request)
    {
        // $post=$request->all();
        // //print_r($post);
        // $module_id=Crypt::decrypt($post['id']);
        //die();
        //$data['module_id']=$module_id;
        $data['subview']=view('subview.all_tasks');
        return view('project_dashboard',$data);
    }
    public function reopen_issue(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $post=$request->all();
        // echo '<pre>';
        // print_r($post);die();
        $Main_M= new Main_M();
        $Reply_M= new Reply_M();
        $emp_id=$Main_M->get_employee_id($post['h_taskId']);
        $employee_name=$Main_M->get_employee_name($emp_id);
        //echo $employee_name;exit();
        $data['reply']='Reopend[ '.$employee_name.' ]: '.$post['reply'];
        $data['task_id']=$post['h_taskId'];
        $data['user_id']=$post['user_id'];
        $data['module_id']=$post['h_moduleId'];
        $data['type']='admin';
        $data['created']=date('Y-m-d H:i:s');

        $result=$Reply_M->save_replies($data);
        
        $result=$Main_M->save_reopen_reason($post['h_taskId']);
        if($result)
        {
            Session::flash('success_msg', 'Task Reopend');
        }
        else
        {
            Session::flash('error_msg', 'Task Reopen Failed!');
        }
       return redirect()->action('MainController@all_tasks');
    }
    public function close_task(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $post=$request->all();
        //echo '<pre>';
        //echo json_encode($post);//die();
        // $success=\DB::table('task')->where('id',$post['task_id'] )->update(['status' => 'C','end_time' => date('Y-m-d H:i:s')]);

        $time=\DB::table('task')->where('id',$post['task_id'])->first();
        $end_date=date('Y-m-d H:i:s');

        $total_mins_taken=round((strtotime($end_date) - strtotime($time->start_time))/60, 0);

        $success=\DB::table('task')->where('id',$post['task_id'])->update(['status' => 'C','end_time' => $end_date,'total_time' => ($time->total_time + $total_mins_taken)]);


        if($success)
        {
            Session::flash('success_msg', 'Task Closed');
        }
        else
        {
            Session::flash('error_msg', 'Task Close Failed!');
        }
       return redirect()->action('MainController@all_tasks');
    }
    public function add_module()
    {
        $data['subview']=view('subview.add_module');
        return view('project_dashboard',$data);
    }
    public function insert_module(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $post=$request->all();
        // echo '<pre>';
        // print_r($post);die();
        $data['module']=$post['module'];
        $data['hours']=$post['hours'];
        $data['created']=Date('Y-m-d H:i:s');
        $Main_M= new Main_M();
        $result=$Main_M->module_insert($data);
        if($result)
        {
            Session::flash('success_msg', 'Module Added');
        }
        else
        {
            Session::flash('error_msg', 'Module not added!');
        }
       return redirect()->action('MainController@add_module');
    }
    public function isAlreadyAssigned(Request $request)
    {
        $post=$request->all();
        $module_id=$post['module_id'];
        $emp_id=$post['emp_id'];
        $result=\DB::table('task')->where('module_id',$module_id)->where('emp_id',$emp_id)->count();
        if($result > 0)
        {
            echo json_encode(1);
        }
        else
        {
            echo json_encode(0);
        }
    }
    public function all_modules()
    {
        $data['subview']=view('subview.all_modules');
        return view('project_dashboard',$data);
    }
    
}
?>