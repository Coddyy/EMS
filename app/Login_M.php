<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_M extends Model
{
	public function index()
    {
    	echo "Hi I am model";
    }
    public function login($username,$password,$type)
    {
        if($type == 'admin')
        {
    	   $success=\DB::table('admin')->where('email',$username)->where('password', $password)->first();
        }
        else if($type == 'employee')
        {
            $success=\DB::table('employee')->where('email',$username)->where('password', $password)->first();
        }
    	if($success)
    	{
    		//echo $success->id;die();
    		$data=array(
    					'id' => $success->id,
    					'name' => $success->name,
    					'email' => $success->email,
    					'mobile' => $success->mobile,
                        'type' => $success->type
    					);
    		return $data;
    	}
    	else
    	{
    		return false;
    	}
    }
}
