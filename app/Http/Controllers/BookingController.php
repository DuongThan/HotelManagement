<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function Index(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        $checkout = Carbon::now()->addDays(1)->format('Y-m-d');
        return view('booking',['roomtypes'=>$roomtypes],['checkout'=>$checkout]);
    }
    public function SaveSessionBooking(Request $request) {
        $data = $request->datapost;
        return view('confirmbooking',['data'=>$data]);
    }
}
