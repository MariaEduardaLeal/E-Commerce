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
}
