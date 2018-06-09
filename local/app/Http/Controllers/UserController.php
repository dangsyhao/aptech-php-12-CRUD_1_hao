<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //Get username and Password from Database laravel_hao and table users//
    function getView(){
        $user=User::all();
        return view('viewDemo',['users'=>$user]);
    }
}
