<?php

namespace App\Http\Controllers\admin;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    //

    function getLogin(){
        return view('admin.login.loginView');
    }


    public function setLogin(Request $request)
{
    $rules = [
 
        'email'=>'required',
         
        'password'=>'required',
         
        ];
         
        $messages = [
         
         
         
        'email.required'=>'tài khoản không được để trống',
         
        'password.required'=>'mật khẩu không được để trống',
         
        ];
         
        $Validator = Validator::make($request->all(),$rules,$messages);
         
        if($Validator->fails()){
         
       $errors['errors'] = $Validator->errors();

        return view('admin.login.loginView',$errors);


        }else{
         
            $arr=[
 
                'uEmail' => $request->email,
                 
                'uPassWord'=> $request->password
                 
                ];
                 
                If(DB::table('user')->where($arr)->count()==1){
                 
                     return 'dang nhap thanh cong';
                }else{
                 
                    return 'dang nhap that bai';
                 
                }
                 
                
        }
}


}
