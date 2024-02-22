<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Str;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $locations = DB::table('locations')->paginate(10);
        return view('backend.location.list', compact('locations'));
    }

    public function create()
    {
        return view('backend.location.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'string|nullable',
            'image' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->name);
        $count = Location::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        $status = Location::create($data);
        if ($status) {
            request()->session()->flash('success', 'Location successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('location.index');
    }

    public function edit($id)
    {
        $location = Location::find($id);
        return view('backend.Location.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $location = Location::findorFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'string|nullable',
            'image' => 'string|nullable',
            'status' => 'required|in:active,inactive'
        ], [
            'name.required' => 'Đây là trường bắt buộc',
        ]);
        $data = $request->all();

        $status = $location->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Location successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
        }
        return redirect()->route('location.index');
    }

    public function destroy($id)
    {
        $company = Location::find($id);
        $company->delete();
        return redirect()->route('location.index');
    }
}
