<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    public function getUser(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $users = User::all();
        return view('admin.user.getUser',['users'=>$users]);
    }

    public function addUser(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        return view('admin.user.addUser');
    }

    public function editUser($userName){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $user = User::find($userName);
        return view('admin.user.editUser',['user'=>$user]);
    }

    public function postUser(Request $request){
        $this->validate($request,
        [
            'userName'=>'required|unique:User|min:5',
            'password'=>'required|min:8',
            'email'=>'required|min:8'
        ],
        [
            'userName.required'=>'Tên tài khoản không được để trống',
            'userName.min'=>'Độ dài tên tài khoản tối thiểu 5 ký tự',
            'userName.unique'=>'Tên tài khoản đã tồn tại',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Độ dài mật khẩu khoản tối thiểu 8 ký tự',
            'email.required'=>'Email không được để trống'
        ]);
        $user = new User();
        $user->userName = $request->userName;
        $user->password = md5($request->password);
        $user->email = $request->email;
        $user->status = 1;
        $user->save();
        return redirect('admin/user/add')->with('notification','Thêm tài khoản thành công');
    }
    public function putUser($userName,Request $request){
        $this->validate($request,
        [
            'email'=>'required|min:8'
        ],
        [
            'email.required'=>'Email không được để trống'
        ]);
        $user = User::find($userName);
        if($request->password != null && $request->password!=''){
            $user->password = md5($request->password);
        }
        $user->email = $request->email;
        $user->status = $request->status;
        $user->save();
        return redirect('admin/user/edit/'.$userName)->with('notification','Cập nhật thành công');
    }
    public function deleteUser($userName){
        $user = User::find($userName);
        $user->delete();
        return redirect('admin/user')->with('notification','Xóa tài khoản thành công');
    }
}
