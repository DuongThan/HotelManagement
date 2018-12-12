<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;

class BookingController extends Controller
{
    public function Index(){
        $roomtypes = RoomType::where('number','>','0')->orderBy('index','asc')->get();
        return view('booking',['roomtypes'=>$roomtypes]);
    }
}
