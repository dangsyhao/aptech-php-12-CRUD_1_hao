<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //Get username and Password from Database laravel_hao and table users//
    function getView(){
        $user=DB::table('users')->get();
        return view('viewDemo',['users'=>$user]);
    }

    //The Demo funtion- not use do home work excersise//
    function demoFun(){
        $user=DB::table('users')->get();
        $arr=array($user);
         print_r($arr);
       
    }
}
