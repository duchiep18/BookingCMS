<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;


class AuthController extends Controller
{
    public function login(){
        return view('backend.dashboard.login');
    }
    public function submitLogin (Request $request){
        $this->validate($request,[
           'username' => 'required',
           'password' => 'required'
        ],[
            'username.required' => 'Đây là trường bắt buộc, làm ơn hãy nhập !',
            'password.required' => 'Đây là trường bắt buộc, làm ơn hãy nhập !',
        ]);
        if(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => ('admin'),
        ],$request->input('rememberMe')))
        {
            return redirect()->route('dashboard')->withSuccess('Hi Boss !');
        }elseif(Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => ('user'),
        ])){
            Session::flash('error','You do not have any permission to access this page!');
            return redirect()->route('home');
        }
        else{
            Session::flash('error','Email or Password maybe is incorrect ! Please check again !');
            return redirect()->back();
        }
    }
    public function register(){
        return view('backend.dashboard.register');
    }
    public function registerSubmit(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Vui lòng nhập email của bạn, không được để chống !',
            'email.email' => 'Email đăng ký của bạn chưa đúng định dạng !',
            'email.unique' => 'Email này đã tồn tại !',
            'username.required' => 'Vui lòng nhập tên trong tài khoản của bạn',
            'password.required' => 'Vui lòng nhập email của bạn, không được để chống !',
        ]);
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $role='user';
        $newUser = new User;
        $newUser->email = $email;
        $newUser->username = $username;
        $newUser->role = $role;
        $newUser->password = bcrypt($password);
        $newUser->save();
        return redirect()->route('login')->withSuccess('Chúc mừng bạn đã đăng ký thành công');
    }
    public function dashboard(){
        if(Auth::check()){
            return view('backend.dashboard.home');
        }
        return redirect("backend.dashboard.login");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
