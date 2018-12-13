<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Hotel;
use Session;
class HomeController extends Controller
{
    public function Index(){
        $article = Article::first();
        return view('home',['article'=>$article]);
    }
}
