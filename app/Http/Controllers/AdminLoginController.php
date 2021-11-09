<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;


class AdminLoginController extends Controller
{
    //
    function loginpage(){
        return view ('admin-login');
    }
    
    function signin(Request $req){
        $user = new Admin;
        $eml = $req->Email;
        $pass = $req->Password;
        $data = DB::table('admins')
            ->where('email', '=', $eml)
            ->where('password', $req->Password)
            ->count();
        if ($data == 1) {
            $current_user = Admin::where('Email', $eml)->first();
            $req->session()->put('Admin', $current_user->email);
            $req->session()->put('id', $current_user->id);
            session()->put('login', 1);
            return redirect('admin/profile')->with('logedin', $data);
        } else {
            return redirect('admin-portal');
        }
    }
    function profile(){
        return view('admin-profile');
    }
    function Logoutadmin()
    {
        if (session()->has('Admin')) {
            session()->flush();
            session()->regenerateToken();
        }
        return view('admin-login');
    }
    
}
