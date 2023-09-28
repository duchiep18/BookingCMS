<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PersonnelController extends Controller
{
    public function index(){
        $personnels = User::all();
        return view('backend.personnel.list',compact('personnels'));
    }
    public function create(){
        return view('backend.personnel.create');
    }
    public function store(Request $request){
        $request->validate([
            'username'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required',
            'status'=> 'required'
        ],[
            'username.required'=>'Đây là trường bắt buộc',
            'email.required'=>'Đây là trường bắt buộc',
            'email.email'=>'Email này không hợp lệ',
            'email.unique'=>'Email này đã được sử dụng',
            'password.required'=>'Đây là trường bắt buộc',
            'status.required'=>'Đây là trường bắt buộc',
        ]);
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $phone = $request->input('phonenum');
        $address = $request->input('address');
        $company = $request->input('company');
        $salary = $request->input('salary');
        $role = $request->input('role');
        $status = $request->input('status');
        $personnel = new User();
        $personnel->email  = $email;
        $personnel->username  = $username;
        $personnel->password  = bcrypt($password);
        $personnel->gender  = $gender;
        $personnel->phone_number  = $phone;
        $personnel->address  = $address;
        $personnel->company_id  = $company;
        $personnel->salary  = $salary;
        $personnel->role  = $role;
        $personnel->status  = $status;
        $personnel->save();
        return redirect()->route('listPsn')->with('success','Thêm mới nhân sự thành công');
    }

    public function edit($id){
        $personnel = User::find($id);
        return view('backend.personnel.edit' , compact('personnel'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'username'=> 'required',
            'email'=> 'required|email',
            'password'=>'required',
            'status'=> 'required'
        ],[
            'username.required'=>'Đây là trường bắt buộc',
            'email.required'=>'Đây là trường bắt buộc',
            'email.email'=>'Email này không hợp lệ',
            'password.required'=>'Đây là trường bắt buộc',
            'status.required'=>'Đây là trường bắt buộc',
        ]);
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $phone = $request->input('phonenum');
        $address = $request->input('address');
        $company = $request->input('company');
        $salary = $request->input('salary');
        $role = $request->input('role');
        $status = $request->input('status');
        $personnel =User::find($id);
        $personnel->email  = $email;
        $personnel->username  = $username;
        $personnel->password  = bcrypt($password);
        $personnel->gender  = $gender;
        $personnel->phone_number  = $phone;
        $personnel->address  = $address;
        $personnel->company_id  = $company;
        $personnel->salary  = $salary;
        $personnel->role  = $role;
        $personnel->status  = $status;
        $personnel->save();
        return redirect()->route('listPsn')->with('success','Cập nhật nhân sự thành công');
    }

    public function destroy($id){
        $personnel=User::find($id);
        $personnel->delete();
        return redirect()->route('listCompany');
    }
}
