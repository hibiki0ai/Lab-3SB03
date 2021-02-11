<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email(){
        $data = array('name'=>$_GET["ename"] ,'mm' => $_GET["Message"]);
        Mail::send(['text'=>'mail'],$data, function($message){
            $message->to($_GET["eemail"],$_GET["ename"])->subject($_GET["Sub"]);
            $message->from('hibiki0ai@gmail.com','tanachai');
        });
        echo "Basis Email Sent.Check your inbox    -- ";
        echo $_GET["ename"];
    }
}
