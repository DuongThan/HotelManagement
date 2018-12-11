<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\RoomType;

class RoomController extends Controller
{
    public function getRoom(){
        $rooms = Room::orderBy('index','asc')
                    ->join('RoomType', 'Room.roomTypeId', '=', 'RoomType.roomTypeId')
                    ->select('Room.*', 'RoomType.title')->get();
        return view('admin/room/getRoom',['rooms'=>$rooms]);
    }
    public function addRoom(){
        $roomtypes = RoomType::orderBy('index','asc')->get();
        return view('admin.room.addRoom',['roomtypes'=>$roomtypes]);
    }

    public function editRoom($roomId){
        $room = Room::find($roomId);
        $roomtypes = RoomType::orderBy('index','asc')->get();
        return view('admin.room.editRoom',['room'=>$room],['roomtypes'=>$roomtypes]);
    }

    public function postRoom(Request $request){
        $this->validate($request,
        [
            'roomTypeId'=>'required',
            'code'=>'required|unique:Room',
            'index'=>'required'
        ],
        [
            'roomTypeId.required'=>'Loại phòng không được để trống',
            'code.required'=>'Số hiệu phòng không được để trống',
            'code.unique'=>'Số hiệu phòng đã tồn tại',
            'index.required'=>'Số thứ tự không được để trống'
        ]);
        $room = new Room();
        $room->code = $request->code;
        $room->roomTypeId = $request->roomTypeId;
        $room->index = $request->index;
        $room->status = 1;
        $room->save();
        return redirect('admin/room/add')->with('notification','Thêm phòng thành công');
    }
    public function putRoom($roomId,Request $request){
        $this->validate($request,
        [
            'roomTypeId'=>'required',
            'index'=>'required'
        ],
        [
            'roomTypeId.required'=>'Loại phòng không được để trống',
            'index.required'=>'Số thứ tự không được để trống'
        ]);
        $room = Room::find($roomId);
        $room->roomTypeId = $request->roomTypeId;
        $room->index = $request->index;
        $room->status = $request->status;
        $room->save();
        return redirect('admin/room/edit/'.$roomId)->with('notification','Cập nhật thành công');
    }
    public function deleteRoom($roomId){
        $room = Room::find($roomId);
        $room->delete();
        return redirect('admin/room')->with('notification','Xóa phòng thành công');
    }
}
