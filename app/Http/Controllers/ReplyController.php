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
    // public function all_replies(Request $request)
    // {
    //     $post=$request->all();
    //     //echo $post['task_id'];
    //     //echo '<pre>';
    //     // print_r($post);die();
    //     $Reply_M= new Reply_M();
    //     $replies=$Reply_M->all_replies($post['task_id']);
    //     // echo json_encode($replies);die();
    //     $reply=array();
    //     $type=array();
    //     foreach ($replies as $key => $value) 
    //     {
    //         $reply[]='<span style="color:red">'.$value->reply.'</span><br />';
    //         $type[]=$value->type;
    //     }
    //     $data['reply']=$reply;
    //     $data['type']=$type;

    //     echo json_encode($data);

    // } 
    public function all_replies(Request $request)
    {
        $post=$request->all();
        //$data=$post['emp_id'];
        //echo '<pre>';
        //echo $post['admin_id'];die();
        $Main_M= new Main_M();
        $Reply_M= new Reply_M();
        $replies=$Reply_M->all_replies($post['task_id'],$post['emp_id'],$post['admin_id']);
        // echo json_encode($replies);die();
        $reply=array();
        foreach ($replies as $key => $value) 
        {
            if($value->type == 'admin')
            {
                $dbname=$Main_M->get_admin_name($value->user_id);
            }
            else if($value->type == 'employee')
            {
                $dbname=$Main_M->get_employee_name($value->user_id);
            }
            $ename=explode(' ',$dbname);
            $name=$ename[0];
            if(Session::get('type') == 'admin')
            {
                if($value->type == 'admin' && $value->user_id == $post['admin_id'])
                {

                    $reply[]='<span style="color:rgb(125, 125, 125);" class="pull-right">'.$value->reply.' &nbsp<span style="color:orange;font-size:10px;" class="pull-right"> '.$name.'</span></span><br />';
                }
                else
                {
                    $reply[]='<span style="color:#17a2b8;" class="pull-left">'.$value->reply.' &nbsp<span style="color:orange;font-size:10px;" class="pull-right"> '.$name.'</span></span><br />';
                }
            }
            else if(Session::get('type') == 'employee')
            {
                if($value->type == 'employee' && $value->user_id == $post['emp_id'])
                {
                    $reply[]='<span style="color:red" class="pull-right">'.$value->reply.'</span><br />';
                }
                else
                {
                    $reply[]='<span style="color:blue" class="pull-left">'.$value->reply.'</span><br />';
                }
            }
        }
        $data['reply']=$reply;

        echo json_encode($data);
    }
    public function reply_issue()
    {
        $Reply_M= new Reply_M();
        $replies=$Reply_M->all_replies(11);
        foreach ($replies as $key => $value) 
        {
            echo $value->reply;
        }
    }
}
?>