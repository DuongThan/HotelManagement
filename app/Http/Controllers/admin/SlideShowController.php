<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SlideShow;

class SlideShowController extends Controller
{
    public function getSlideShow(){
        $slideshows = SlideShow::orderBy('index','asc')->get();
        return view('admin.slideshow.getSlideShow',['slideshows'=>$slideshows]);
    }
    public function addSlideShow(){
        return view('admin.slideshow.addSlideShow');
    }

    public function editSlideShow($slideShowId){
        $slideshow = SlideShow::find($slideShowId);
        return view('admin.slideshow.editSlideShow',['slideshow'=>$slideshow]);
    }

    public function postSlideShow(Request $request){
        $this->validate($request,
        [
            'input_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'index'=>'required'
        ],
        [
            'input_img.required'=>'Hình ảnh không được để trống',
            'index.required'=>'Thứ tự không được để trống'
        ]);
        $name = '';
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        $slideshow = new SlideShow();
        $slideshow->image = $name;
        $slideshow->index = $request->index;
        $slideshow->save();
        return redirect('admin/slideshow/add')->with('notification','Thêm slideshow thành công');
    }
    public function putSlideShow($slideShowId,Request $request){
        $slideshow = SlideShow::find($slideShowId);
        $slideshow->index = $request->index;
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $slideshow->image = $name;
        }
        $slideshow->save();
        return redirect('admin/slideshow/edit/'.$slideShowId)->with('notification','Cập nhật thành công');
    }
    public function deleteSlideShow($slideShowId){
        $slideshow = SlideShow::find($slideShowId);
        $slideshow->delete();
        return redirect('admin/slideshow')->with('notification','Xóa loại phòng thành công');
    }
}
