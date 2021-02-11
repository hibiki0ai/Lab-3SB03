<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email(){
        $data = array('name'=>"Tanachai");
        Mail::send(['text'=>'mail'],$data, function($message){
            $message->to('ball15000@gmail.com','ball')->subject('Laravel Basic Testing Mail');
            $message->from('hibiki0ai@gmail.com','tanachai');
        });
        echo "Basis Email Sent.Check your inbox";
        echo $_GET["fname"];
    }
}
