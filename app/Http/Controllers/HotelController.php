<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Str;
use DB;
use App\Models\Location;
class HotelController extends Controller
{
    public function index()
    {
        $hotels = DB::table('hotels')->paginate(10);
        return view('backend.hotel.list', compact('hotels'));
    }

    public function create()
    {
        $locations = Location::where('status','active')->orderBy('id','desc')->get();
        return view('backend.hotel.create',compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'nullable',
            'description' => 'required',
            'location_id' => 'required',
            'image' => 'string|nullable',
            'image_list' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
            'description.required' => 'Đây là trường bắt buộc',
            'location_id.required' => 'Email này không hợp lệ',
        ]);

        $data = $request->all();
        $slug = Str::slug($request -> name);
        $count = Hotel::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Hotel::create($data);
        if ($status) {
            request()->session()->flash('success', 'Hotel successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('hotel.index');
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $locations = Location::where('status','active')->orderBy('id','desc')->get();
        return view('backend.hotel.edit', compact('hotel','locations'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::findorFail($id);
        $request->validate([
            'name' => 'required',
            'summary' => 'nullable',
            'description' => 'required',
            'location_id' => 'required',
            'image' => 'string|nullable',
            'image_list' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
            'description.required' => 'Đây là trường bắt buộc',
            'location_id.required' => 'Email này không hợp lệ',
        ]);
        $data = $request->all();

        $status = $hotel->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Hotel successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('hotel.index');
    }

    public function destroy($id)
    {
        $company = Hotel::find($id);
        $company->delete();
        return redirect()->route('hotel.index');
    }
}
