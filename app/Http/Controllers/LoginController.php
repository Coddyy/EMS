<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main_M as Main_M;
use App\Login_M as Login_M;
use Session;
class LoginController extends Controller
{
	public function __construct()
    {
        //
    }
    public function index()
    {
    	//echo md5('Abhra');
        return view('login');
    }
    public function login(Request $request)
    {
    	$post=$request->all();
    	// echo '<pre>';
    	// print_r($post);
    	$username=$post['username'];
    	$password=md5($post['password']);
    	$Login_M= new Login_M();
    	$data=$Login_M->login($username,$password);
    	if($data != false)
    	{
    		$request->session()->put($data);
    		return redirect()->action('MainController@index');
    	}
    	else
    	{
    		$request->session()->flush();
    		Session::flash('error_msg', 'Login failed!');
    		return redirect()->action('LoginController@index');

    	}
    	

    }
    public function logout()
    {
    	Session::flush();
    	return redirect()->action('LoginController@index');
    }
}