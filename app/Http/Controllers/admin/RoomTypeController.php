<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomType;

class RoomTypeController extends Controller
{
    public function getRoomType(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        return view('admin.roomtype.getRoomType',['roomtypes'=>$roomtypes]);
    }
    public function getRoomTypePrice(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        return view('admin.roomtype.getRoomTypePrice',['roomtypes'=>$roomtypes]);
    }

    public function editRoomTypePrice($roomTypeId){
        $roomtype = RoomType::find($roomTypeId);
        return view('admin.roomtype.editRoomTypePrice',['roomtype'=>$roomtype]);
    }

    public function putRoomTypePrice($roomTypeId,Request $request){
        $roomType = RoomType::find($roomTypeId);
        $roomType->price = $request->price;
        $roomType->save();
        return redirect('admin/roomtype/roomtype-price')->with('notification','Cập nhật thành công');
    }

    public function addRoomType(){
        return view('admin.roomtype.addRoomType');
    }

    public function editRoomType($roomTypeId){
        $roomtype = RoomType::find($roomTypeId);
        return view('admin.roomtype.editRoomType',['roomtype'=>$roomtype]);
    }

    public function postRoomType(Request $request){
        $this->validate($request,
        [
            'title'=>'required|unique:RoomType',
            'input_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ],
        [
            'title.required'=>'Tên loại phòng không được để trống',
            'title.unique'=>'Tên loại phòng đã tồn tại',
            'input_img.required'=>'Hình ảnh không được để trống'
        ]);
        $name = '';
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        $roomType = new RoomType();
        $roomType->title = $request->title;
        $roomType->image = $name;
        $roomType->price = 0;
        $roomType->index = $request->index;
        $roomType->save();
        return redirect('admin/roomtype/add')->with('notification','Thêm loại phòng thành công');
    }
    public function putRoomType($roomTypeId,Request $request){
        $roomType = RoomType::find($roomTypeId);
        $roomType->index = $request->index;
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $roomType->image = $name;
        }
        $roomType->save();
        return redirect('admin/roomtype/edit/'.$roomTypeId)->with('notification','Cập nhật thành công');
    }
    public function deleteRoomType($roomTypeId){
        $roomtype = RoomType::find($roomTypeId);
        $roomtype->delete();
        return redirect('admin/roomtype')->with('notification','Xóa loại phòng thành công');
    }
}
