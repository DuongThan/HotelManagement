<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Session;

class ContactController extends Controller
{
    public function getContact(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $contacts = Contact::orderBy('date','desc')->get();
        return view('admin/contact/getContact',['contacts'=>$contacts]);
    }
    public function editContact($contactId){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $contact = Contact::find($contactId);
        return view('admin.contact.editContact',['contact'=>$contact]);
    }
    public function deleteContact($contactId){
        $contact = Contact::find($contactId);
        $contact->delete();
        return redirect('admin/contact')->with('notification','Xóa tài khoản thành công');
    }
}
