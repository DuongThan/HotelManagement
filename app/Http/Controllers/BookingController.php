<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
use App\Booking;
use Carbon\Carbon;
use Session;

class BookingController extends Controller
{
    public function Index(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        $checkout = Carbon::now()->addDays(1)->format('Y-m-d');
        return view('booking',['roomtypes'=>$roomtypes],['checkout'=>$checkout]);
    }
    public function ConfirmBooking() {
        $data = Session::get('datasavebooking');
        $booking = Session::get('booking');
        return view('confirmbooking',['data'=>$data],['booking'=>$booking]);
    }
    public function SaveSessionBooking(Request $request) {
        $dataPost = $request->datapost;
        $totalMoney = 0;
        foreach(json_decode($dataPost) as $item){
            $totalMoney += $item->price * $item->number;
        }
        $booking = new Booking();
        $booking->checkIn = $request->checkIn;
        $booking->checkOut = $request->checkOut;
        $booking->adult = $request->adult;
        $booking->child = $request->child;
        $booking->totalMoney = $totalMoney;
        Session::put('datasavebooking', $dataPost);
        Session::put('booking', $booking);
        return redirect('confirm');
    }
    public function PostBooking(Request $request){
        
        $this->validate($request,
        [
            'fullName'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ],
        [
            'fullName.required'=>'Họ tên không được để trống',
            'email.required'=>'Email không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'phone.required'=>'Số điện thoại không được để trống'
        ]);
        $booking = Session::get('booking');
        $data = Session::get('datasavebooking');
        foreach(json_decode($data) as $item){
            $bookingPost = new Booking();
            $bookingPost->roomTypeId = $item->roomTypeId;
            $bookingPost->checkIn = $booking->checkIn;
            $bookingPost->checkOut = $booking->checkOut;
            $bookingPost->adult = $booking->adult;
            $bookingPost->child = $booking->child;
            $bookingPost->totalMoney = $booking->totalMoney;
            $bookingPost->fullName = $request->fullName;
            $bookingPost->email = $request->email;
            $bookingPost->phone = $request->phone;
            $bookingPost->address = $request->address;
            $bookingPost->request = $request->requestData;
            $bookingPost->dateBook = Carbon::now()->format('Y-m-d');
            $bookingPost->status = 1;
            $bookingPost->save();
        }
        return redirect('confirm')->with('notification','Đặt phòng thành công');
    }
}
