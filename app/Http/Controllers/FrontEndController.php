<?php

namespace App\Http\Controllers;

use App\Models\RoomLevel;
use Illuminate\Http\Request;
use App\Models\Room;
use DB;
use Hash;
use Session;
use Auth;

class FrontEndController extends Controller
{
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }
    public function home(){
       $rooms = Room::where('status','active')->orderBy('id','desc')->paginate(10);
       $room_levels = RoomLevel:: where('status','active')->orderBy('id','desc')->paginate(5);
        return view('frontend.index',compact('rooms','room_levels'));
    }
}
