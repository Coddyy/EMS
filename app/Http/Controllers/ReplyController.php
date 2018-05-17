<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Main_M as Main_M;
use App\Reply_M as Reply_M;
use Session;
class ReplyController extends Controller
{
    public function __construct()
    {
        //
    }
    public function all_replies(Request $request)
    {
    	$post=$request->all();
    	echo json_encode($post['task_id']);
  		// echo '<pre>';
		// print_r($post);die();
		// $replies=$Reply_M->all_replies($post['task_id']);
		// // echo '<pre>';
		// // print_r($replies);die();
		// foreach ($replies as $key => $value) 
		// {
		// 	echo $value->reply;
		// }

		// <span class="pull-left">Hello Employee</span>
		// <br />
		// <span class="pull-right">Hello Admin</span>

    } 
    public function reply_issue()
    {
        // $post=$request->all();
        // echo '<pre>';
        // print_r($post);
        echo "hello";
    }
}
?>