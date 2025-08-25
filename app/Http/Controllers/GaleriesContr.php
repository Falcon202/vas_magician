<?php

namespace App\Http\Controllers;

use App\Models\BlogView;
use Illuminate\View\View;

class GaleriesContr
{
    public function fotogalery(): View
    {
        return view('otherSites.fotogalery', [
            'blogViews' => BlogView::where('is_disabled', false)->orderBy('id', 'asc')->get(),
        ]);
    }

    public function videogalery(): View
    {
        return view('otherSites.videogalery', [

        ]);
    }
}
