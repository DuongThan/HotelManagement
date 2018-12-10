<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function getHotel(){
        return view('admin/hotel/getHotel');
    }
}
