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

        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
//        dd($login);
        if(Auth::attempt($login))
        {
            return redirect('dashboard')->withSuccess('Hi Boss !');
        }else{
            return redirect()->back();
        }
    }

    public function dashboard(){
        if(Auth::check()){
            return view('backend.dashboard.home');
        }
        return redirect("backend.dashboard.login");
    }
}
