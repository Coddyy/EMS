<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply_M extends Model
{
	public function index()
    {
    	echo "Hi I am model";
    }
    public function all_replies($module_id)
    {
    	//echo $task_id;die();
    	$result=\DB::table('conversation')->where('module_id',$module_id)->get();
    	// echo '<pre>';
     // 	print_r($result);die();
    	if($result)
    	{
    		return $result;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function save_replies($data)
    {
        $success=\DB::table('conversation')->insert($data);
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