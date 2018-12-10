<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function getBooking(){
        return view('admin/booking/getBooking');
    }
}
