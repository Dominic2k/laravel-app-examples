<?php
namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function show_form(){
        return view('formRoom');
    }


    function handleAddRoom(RoomRequest $request){
        $rooms = Session::get('rooms', []);

        $newroom = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'des' => $request->input('des'),
            'image' => $request->input('image'),
        ];

        $rooms[] = $newroom;
        Session::put('rooms', $rooms);

        return redirect()->route('form')->with('success', 'Thêm phòng thành công!');
    }
    public function show_hotel(){
        $rooms = Session::get('rooms');
        return view('show_hotel', compact('rooms'));
    }


    public function clearSession(){
        Session::forget('rooms');

        return redirect()->back()->with('success', 'Session đã được xóa!');
    }

}

