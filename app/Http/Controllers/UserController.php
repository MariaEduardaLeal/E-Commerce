<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function redirect()
    {
        $user_type = Auth::user()->usertype;
        file_put_contents("user_type.txt", $user_type);
        if($user_type =='1'){
            return view('adm.admpage');
        }else{
            return view('home.userpage');
        }
    }
    public function index()
    {
        return view('home.userpage');
    }
    public function registerPage()
    {
        return view('auth.register');
    }
    public function loginPage()
    {
        return view('auth.login');
    }

    public function profile()
    {
        return view('profile.show');
    }
}
