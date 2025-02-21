<?php


namespace App\Http\Controllers;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Session;

class RoomController
{
    function show_form(){
        // return view
        return view('formRoom');
    }
    function show_hotel(){
        // return view
        $rooms = Session::get('rooms', []);


        return view('show_hotel')->with('rooms', $rooms);
    }

    function handleAddRoom(RoomRequest $request){
        $rooms = Session::get('rooms', []);

        $newroom= [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'des' => $request->input('des'),
            'image' => $request->input('image'),
        ];

        $rooms []= $newroom;

        Session::put('rooms', $rooms);

        return view('formRoom');
    }
}
