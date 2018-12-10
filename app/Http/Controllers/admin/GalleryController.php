<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function getGallery(){
        return view('admin/gallery/getGallery');
    }
}
