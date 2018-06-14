<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Route;

class CrudController extends Controller
{
    function index(){
        
        $user=Users::all();
        return view('crud.home',['user'=>$user]);
    }

    function add( Request $request)
    {
        if(isset($_GET['submit'])){

            $name=$request->name;
            $role=$request->role;
            $email=$request->email;
    
            $Users= new Users();
            $Users->users_name=$name;
            $Users->users_role=$role;
            $Users->users_email=$email;
            $Users->save();

            return redirect()->action('CrudController@index');
        }

        return view('crud.add');

    }


    function del(Request $request,$id){

        Users::where('users_id',$id)->delete();
        return redirect()->action('CrudController@index');
    }


    function edit(Request $request,$id){

        if(isset($_GET['submit'])){

            $name=$request->name;
            $role=$request->role;
            $email=$request->email;

            Users::where('users_id',$id)->update(['users_name'=>$name,'users_email'=>$email,'users_role'=>$role]);
            return redirect()->action('CrudController@index');    
        }

        $users=Users::where('users_id',$id)->get();
        return view('crud.edit',['users'=>$users]);
        

    }



}//END-CLASS//
