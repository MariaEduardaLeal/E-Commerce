<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $user_type = Auth::user()->usertype;

        if($user_type =='1'){
            return view('admin.home');
        }else{
            return view('dashboard');
        }
    }
    public function index()
    {
        return view('home.userpage');
    }
}
