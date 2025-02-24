<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function show_form(){
        return view('formRoom');
    }

    public function show_hotel(){
        $rooms = Session::get('rooms', []);
        return view('show_hotel', compact('rooms'));
    }

    public function handleAddRoom(Request $request){
        $rooms = Session::get('rooms', []);

        $newroom = [
            'name'  => $request->input('name'),
            'price' => $request->input('price'),
            'des'   => $request->input('des'),
            'image' => $request->input('image'),
        ];

        $rooms[] = $newroom;
        Session::put('rooms', $rooms);

        return redirect()->back();
    }

    public function clearSession(){
        Session::forget('rooms');

        return redirect()->back()->with('success', 'Session đã được xóa!');
    }

}

