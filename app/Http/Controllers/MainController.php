<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main_M as Main_M;
use Session;
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
    public function all_tasks()
    {
        $data['subview']=view('subview.all_tasks');
        return view('project_dashboard',$data);
    }
}
?>