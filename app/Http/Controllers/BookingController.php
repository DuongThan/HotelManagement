<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
use App\Booking;
use Carbon\Carbon;
use Session;
use DateTime;

class BookingController extends Controller
{
    public function Index(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        $booking = new Booking();
        $booking->checkIn = Carbon::now()->format('Y-m-d');
        $booking->checkOut =  Carbon::now()->addDays(1)->format('Y-m-d');
        $booking->adult =  2;
        Session::put('booking', $booking);
        return view('booking',['roomtypes'=>$roomtypes],['booking'=>$booking]);
    }
    
    public function Search(Request $request){
        $booking = Session::get('booking');
        $booking->checkIn = $request->checkIn;
        $booking->checkOut = $request->checkOut;
        $booking->adult = $request->adult;
        Session::put('booking', $booking);
        $datetime1 = new DateTime($booking->checkIn);
        $datetime2 = new DateTime($booking->checkOut);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $roomtypes = RoomType::orderBy('index','asc')->get();
        foreach($roomtypes as $item){
            $item->price *= $days;
        }
        return view('booking',['roomtypes'=>$roomtypes],['booking'=>$booking]);
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
        $booking = Session::get('booking');
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
           for($i=0; $i< $item->number; $i++){
                $bookingPost = new Booking();
                $bookingPost->roomTypeId = $item->roomTypeId;
                $bookingPost->checkIn = $booking->checkIn;
                $bookingPost->checkOut = $booking->checkOut;
                $bookingPost->adult = $booking->adult;
                $bookingPost->totalMoney = $item->price;
                $bookingPost->fullName = $request->fullName;
                $bookingPost->email = $request->email;
                $bookingPost->phone = $request->phone;
                $bookingPost->address = $request->address;
                $bookingPost->request = $request->requestData;
                $bookingPost->dateBook = Carbon::now()->format('Y-m-d H:i:s');
                $bookingPost->status = 1;
                if(count(json_decode($data)) > 1 || $item->number > 1){
                    $bookingPost->note = 'Khách đặt theo nhóm. Số lượng khách bằng số lượng khách trong đoàn';
                }
                $bookingPost->save();
           }
        }
        return redirect('confirm')->with('notification','Đặt phòng thành công');
    }
}
