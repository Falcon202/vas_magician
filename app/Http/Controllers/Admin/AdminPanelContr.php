<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\View\View;

class AdminPanelContr
{
    public function admin_panel(): View
    {
        return view('adminPanel.adminPanel', [
            'user' => Auth::user(),
        ]);
    }
}
