<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'password' => ['required'],
        ]);
        
        if(Admin::where('password', md5($request->password))->value('id')){
            $request->session('admin')->regenerate();
            return redirect()->intended('/');
        } else {
            return back("/")->with("error", "Login Error");
        }
    }
}
