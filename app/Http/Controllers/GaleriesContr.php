<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GaleriesContr
{
    public function fotogalery(): View
    {
        return view('otherSites.fotogalery', [

        ]);
    }

    public function videogalery(): View
    {
        return view('otherSites.videogalery', [

        ]);
    }
}
