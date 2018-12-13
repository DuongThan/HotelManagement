<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function Index(){
        return view('contact');
    }
    public function PostContact(Request $request){
        $this->validate($request,
        [
            'fullName'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ],
        [
            'fullName.required'=>'Họ tên không được để trống',
            'email.required'=>'Email không được để trống',
            'phone.required'=>'Số điện thoại không được để trống'
        ]);
        $contact = new Contact();
        $contact->fullName = $request->fullName;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->request = $request->requestData;
        $contact->date = Carbon::now()->format('Y-m-d');
        $contact->save();
        return redirect('/lien-he')->with('notification','Thành công. Chúng tôi sẽ liên hệ với bạn ngay khi nhận được yêu cầu.');
    }
}
