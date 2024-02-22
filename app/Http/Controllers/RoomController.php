<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\RoomLevel;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->paginate(10);
        $hotels = Hotel::where('status', 'active')->orderBy('id','desc')->get();
        $room_levels = RoomLevel::where('status', 'active')->orderBy('id','desc')->get();
        return view('backend.room.list', compact('rooms','hotels','room_levels'));
    }

    public function create()
    {
        $hotels = Hotel::orderBy('id','desc')->get();
        $room_levels = RoomLevel::orderBy('id','desc')->get();
        return view('backend.room.create',compact('hotels','room_levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'hotel_id' => 'required',
            'hotline' => 'string|nullable',
            'price' => 'string|nullable',
            'room_level_id' => 'required',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
            'hotel_id.required' => 'Đây là trường bắt buộc',
            'room_level_id.required' => 'Đây là trường bắt buộc',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Room::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Room::create($data);
        if ($status) {
            request()->session()->flash('success', 'Room successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('room.index');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $hotels = Hotel::where('status', 'active')->orderBy('id','desc')->get();
        $room_levels = RoomLevel::where('status', 'active')->orderBy('id','desc')->get();
        return view('backend.room.edit', compact('room','hotels','room_levels'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findorFail($id);
        $request->validate([
            'name' => 'required',
            'summary' => 'string|nullable',
            'description' => 'string|nullable',
            'hotel_id' => 'required',
            'hotline' => 'string|nullable',
            'price' => 'string|nullable',
            'room_level_id' => 'required',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
            'hotel_id.required' => 'Đây là trường bắt buộc',
            'room_level_id.required' => 'Đây là trường bắt buộc',
        ]);
        $data = $request->all();

        $status = $room->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Room successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('room.index');
    }

    public function destroy($id)
    {
        $company = Room::find($id);
        $company->delete();
        return redirect()->route('room.index');
    }
}
