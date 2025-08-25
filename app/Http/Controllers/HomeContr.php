<?php

namespace App\Http\Controllers;

use App\Models\BlogView;
use App\Models\Category;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HomeContr extends Controller
{
    public function index(): View
    {
        return view('index', [

        ]);
    }
    public function contact(): View
    {
        return view('otherSites.contact', [

        ]);
    }
    public function references(): View
    {
        return view('otherSites.references', [

        ]);
    }
    public function akceprodeti(): View
    {
        return view('otherSites.akceProDeti', [

        ]);
    }
    public function kouzelnikprodeti(): View
    {
        return view('otherSites.kouzelnikProDeti', [

        ]);
    }
}
