<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form_login(){
        return view('modules.auth.form_login');
    }
    public function auth(Request $request){
        $user=Admin::where('id_admin','=',$request->input('id_admin'))->first();
        if($user){
            if($user->password == $request->input('password')){
                session(['USER'=>$user]);
                return redirect()->route('dashboard.index');
            }else{
                return redirect()->route('login.form_login');
            }
        }else{
            return redirect()->route('login.form_login');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();

        return redirect()->route('login.form_login');
    }
}