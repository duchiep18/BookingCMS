<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\RoomLevel;
class RoomLevelController extends Controller
{
    public function index()
    {
        $room_levels = DB::table('room_level')->paginate(10);
        return view('backend.room_level.list', compact('room_levels'));
    }

    public function create()
    {
        return view('backend.room_level.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = RoomLevel::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = RoomLevel::create($data);
        if ($status) {
            request()->session()->flash('success', 'RoomLevel successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('room_level.index');
    }

    public function edit($id)
    {
        $roomLevel = RoomLevel::find($id);
        return view('backend.room_level.edit', compact('roomLevel'));
    }

    public function update(Request $request, $id)
    {
        $roomLevel = RoomLevel::findorFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
        ]);
        $data = $request->all();

        $status = $roomLevel->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'RoomLevel successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('room_level.index');
    }

    public function destroy($id)
    {
        $company = RoomLevel::find($id);
        $company->delete();
        return redirect()->route('room_level.index');
    }
}
