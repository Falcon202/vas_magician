<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TownContr
{
    public function town($id): View
    {
        return view('otherSites.town', [

        ]);
    }
}
