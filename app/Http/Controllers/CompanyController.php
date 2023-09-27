<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('backend.company.list');
    }
    public function create(){
        return view('backend.company.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:company',
            'status'=> 'required'
        ],[
            'name.required'=>'Đây là trường bắt buộc',
            'email.required'=>'Đây là trường bắt buộc',
            'email.email'=>'Email này không hợp lệ',
            'email.unique'=>'Email này đã được sử dụng',
            'status.required'=>'Đây là trường bắt buộc',
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $totalstaff = $request->input('totalstaff');
        $manager_id = $request->input('manager');
        $status = $request->input('status');
        $company = new Company();
        $company->name = $name;
        $company->email = $email;
        $company->address = $address;
        $company->total_staff = $totalstaff;
        $company->user_id = $manager_id;
        $company->status = $status;
        $company->save();
        return redirect()->back()->withSuccess('Thêm mới công ty thành công');
    }
    public function edit($id){
        $company = Company::find($id);
        return view('backend.company.edit',compact('company'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'status'=> 'required'
        ],[
            'name.required'=>'Đây là trường bắt buộc',
            'email.required'=>'Đây là trường bắt buộc',
            'email.email'=>'Email này không hợp lệ',
            'status.required'=>'Đây là trường bắt buộc',
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $totalstaff = $request->input('totalstaff');
        $manager_id = $request->input('manager');
        $status = $request->input('status');
        $company = Company::find($id);
        $company->name = $name;
        $company->email = $email;
        $company->address = $address;
        $company->total_staff = $totalstaff;
        $company->user_id = $manager_id;
        $company->status = $status;
        $company->save();
        return redirect()->back()->withSuccess('Cập nhật công ty thành công');

    }

    public function destroy(){

    }
}
