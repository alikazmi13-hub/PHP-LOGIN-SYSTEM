<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailserver extends Controller
{


        public function index(){
        $data=['name'=>"Alikazmi",'data'=>"Hello Alikazmi I Hope you are Doing well"];
        $user ['to']='syedmuhammadaliraza6662@gmail.com';
            Mail::send('mail',$data,function($messages)use($user){
            $messages->to($user['to']);
            $messages->subject('Hello Alikazmi');
          });
        }
}