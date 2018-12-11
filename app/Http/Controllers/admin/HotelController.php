<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;

class HotelController extends Controller
{
    public function getHotel(){
        $hotels = Hotel::first();
        return view('admin/hotel/getHotel',['hotels'=>$hotels]);
    }
    public function putHotel(Request $request){
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'tel'=>'required'
        ],
        [
            'name.required'=>'Tên khách sạn không được để trống',
            'email.required'=>'Email không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'tel.required'=>'Số điện thoại không được để trống'
        ]);
        $hotel = Hotel::first();
        $hotel->name = $request->name;
        $hotel->tel = $request->tel;
        $hotel->hotline = $request->hotline;
        $hotel->fax = $request->fax;
        $hotel->email = $request->email;
        $hotel->address = $request->address;
        $hotel->location = $request->location;
        $hotel->youtube = $request->youtube;
        $hotel->metaTitle = $request->metaTitle;
        $hotel->metaDescription = $request->metaDescription;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $pathLogo = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $pathLogo);
            $hotel->logo = $pathLogo;
        }
        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $pathFavican = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $pathFavican);
            $hotel->favicon = $pathFavican;
        }
        $hotel->save();
        return redirect('admin/hotel')->with('notification','Cập nhật thành công');
    }
}
