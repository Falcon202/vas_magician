<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Redirect;

class HomeContr extends Controller
{
    public function home()
    {
        return view('home', [
            'users' => User::all(),
        ]);
//        if (Auth::check()){
//            return Redirect::route('admin_panel');
//        } else {
//            return view('home', [
//                'users' => User::all(),
//            ]);
//        }

    }
}
