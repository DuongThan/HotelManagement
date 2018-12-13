<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Room;
use Carbon\Carbon;
use Session;

class BookingController extends Controller
{
    public function getBooking(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $bookings = Booking::orderBy('dateBook','desc')
                    ->join('RoomType', 'Booking.roomTypeId', '=', 'RoomType.roomTypeId')
                    ->leftJoin('Room', 'Booking.roomId', '=', 'Room.roomId')
                    ->select('Booking.*','RoomType.title','Room.code')
                    ->get();
        return view('admin/booking/getBooking',['bookings'=>$bookings]);
    }
    public function editBooking($bookingId){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $booking = Booking::join('RoomType', 'Booking.roomTypeId', '=', 'RoomType.roomTypeId')
                    ->leftJoin('Room', 'Booking.roomId', '=', 'Room.roomId')
                    ->select('Booking.*','RoomType.title','Room.code')
                    ->where('Booking.bookingId','=',$bookingId)
                    ->first();
        $rooms = Room::where("Room.roomTypeId","=",$booking->roomTypeId)
                    ->get();
        if($booking->roomId == null){
            $booking->roomId = -1;
        }
        return view('admin/booking/editBooking',['booking'=>$booking],['rooms'=>$rooms]);
    }
    public function putBooking($bookingId,Request $request){
        $booking = Booking::find($bookingId);
        $booking->note = $request->note;
        $booking->roomId = $request->roomId;
        $booking->status = $request->status;
        $booking->save();
        return redirect('admin/booking/edit/'.$bookingId);
    }

    public function getDiagramBooking(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $rooms = Room::orderBy('index','asc')
                    ->join('RoomType', 'Room.roomTypeId', '=', 'RoomType.roomTypeId')
                    ->select('Room.*','RoomType.title')
                    ->get();
        $bookingCheckIn = Booking::where("Booking.status","2")
                    ->get();
        $bookingWaitCheckIn = Booking::where("Booking.status","1")
                    ->where('Booking.roomId','>', 0)
                    ->get();
        foreach($rooms as $room){
            // kiểm tra phòng có đặt phòng check in
            $key = -1;
            for($i = 0;$i < count($bookingCheckIn); $i++){
                if($bookingCheckIn[$i]->roomId == $room->roomId){
                    $key = $i;
                    $room->guest = $bookingCheckIn[$i]->fullName;
                    $room->bookingId = $bookingCheckIn[$i]->bookingId;
                    $room->totalMoney = $bookingCheckIn[$i]->totalMoney;
                    break;
                }
            }
            if($key >= 0){
                $room->trangthaidatphong = 1; // 1: phòng đã checkin, 0: phòng trống, 2: phòng chưa checkin
            }
            else
            {
                $room->trangthaidatphong = 0;
                $room->bookingId = -1;
                $room->totalMoney = 0;
            }
            // kiểm tra phòng có đặt phòng chưa checkin
            $key2 = -1;
            for($i = 0;$i < count($bookingWaitCheckIn); $i++){
                if($bookingWaitCheckIn[$i]->roomId == $room->roomId){
                    $key2 = $i;
                    $room->guest = $bookingWaitCheckIn[$i]->fullName;
                    $room->bookingId = $bookingWaitCheckIn[$i]->bookingId;
                    $room->totalMoney = $bookingWaitCheckIn[$i]->totalMoney;
                    break;
                }
            }
            if($key2 >= 0){
                $room->trangthaidatphong = 2;
            }
        }
        return view('admin/booking/diagram',['rooms'=>$rooms]);
    }
    public function postQuickBooking(Request $request){
        $room = Room::where("Room.code",$request->roomCode)->first();
        $booking = new Booking();
        $booking->roomTypeId = $room->roomTypeId;
        $booking->roomId = $room->roomId;
        $booking->fullName = $request->fullName;
        $booking->adult = $request->adult;
        $booking->checkIn = $request->checkIn;
        $booking->checkOut = $request->checkOut;
        $booking->totalMoney = $request->totalMoney;
        $booking->status = 2;
        $booking->dateBook = Carbon::now()->format('Y-m-d H:i:s');
        $booking->save();
        return redirect('admin/booking/diagram');
    }
    public function postCheckoutBooking(Request $request){
        $booking = Booking::find($request->bookingId);
        $booking->status = 3;
        $booking->save();
        return redirect('admin/booking/diagram');
    }
    public function postCheckinBooking(Request $request){
        $booking = Booking::find($request->bookingId);
        $booking->status = 2;
        $booking->save();
        return redirect('admin/booking/diagram');
    }
}
