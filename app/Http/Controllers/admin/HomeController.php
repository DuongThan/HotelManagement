<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class HomeController extends Controller
{
    public function getIndex(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        return view('admin/home/getIndex');
    }
    public function Login(){
        return view('admin/login');
    }
    public function Logout(){
        Session::forget('statusLogin');
        return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
    }

    public function postLogin(Request $request){
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required'
        ],
        [
            'username.required'=>'Tên tài khoản không được để trống',
            'password.required'=>'Mật khẩu không được để trống'
        ]);
        $username = $request->username;
        $password = $request->password;
        $user = User::where("userName",$username)
                        ->where("password",md5($password))
                        ->first();
        if($user == null)
            return redirect('/admin/login')->with('notification','Tài khoản hoặc mật khẩu không đúng');
        else{
            Session::put('statusLogin', true );
            return redirect('/admin');
        }
    }
}
