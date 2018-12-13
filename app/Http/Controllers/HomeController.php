<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Hotel;
use Session;
class HomeController extends Controller
{
    public function Index(){
        $hotels = Hotel::first()->select('name','logo','hotline','email','address','favicon')->first();
        Session::put('hotel', $hotels );
        $article = Article::first();
        return view('home',['article'=>$article]);
    }
}
