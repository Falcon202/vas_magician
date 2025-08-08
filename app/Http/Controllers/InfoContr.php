<?php

namespace App\Http\Controllers;

use App\Models\BlogView;
use Illuminate\View\View;

class InfoContr
{
    public function info(): View
    {
        $nextBlogViews = BlogView::all()->shuffle();

        return view('info', [
            'nextBlogViews' => $nextBlogViews,
        ]);
    }
}
