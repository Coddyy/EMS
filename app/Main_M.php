<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_M extends Model
{
	public function index()
    {
    	echo "Hi I am model";
    }
    public function employee_insert($data)
    {
    	// echo '<pre>';
    	// print_r($data);
    	$success=\DB::table('employee')->insert(['name' => $data['emp_name'],'type' => 'employee','mobile' => $data['emp_mobile'], 'email' => $data['emp_email'],'role' => $data['role'],'password' => md5($data['emp_password']),'created' => date('y-m-d H:i:s'),'status' =>'0','working_status' => '0']);
    	if($success)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function all_non_asigned_employees()
    {
        $success=\DB::table('employee')->where('working_status' ,'0')->get();
        if($success)
        {
            //echo '<pre>';
            //print_r($success);die();
            return $success;
        }
        else
        {
            return false;
        }
    }
    public function asign_employee($data)
    {
        // echo '<pre>';
        // print_r($data);die();
        $success=\DB::table('task')->insert(['emp_id'=>$data['emp_id'],'task'=>$data['task'],'hours'=>$data['hours'],'created' => date('Y-m-d H:i:s'),'status'=>'P']);
        if($success)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_all_tasks()
    {
        // echo '<pre>';
        // print_r($data);die();
        $success=\DB::table('task')->orderBy('created','DESC')->get();
        if($success)
        {
            return $success;
        }
        else
        {
            return false;
        }
    }
    public function get_employee_name($emp_id)
    {
        $emp=\DB::table('employee')->where('id',$emp_id)->first();
        return $emp->name;
    }
    public function save_reopen_reason($id,$reason)
    {
        $success=\DB::table('task')->where('id',$id)->update(['reopen_reason' => $reason,'status' => 'R']);
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