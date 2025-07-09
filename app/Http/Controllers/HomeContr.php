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
    public function home()
    {
        return view('blog', [
            'categories' => Category::all(),
            'blogViews' => BlogView::where('is_disabled', false)->orderBy('id', 'asc')->get(),
        ]);
    }
    public function category($id): View
    {
        $category = Category::where('id', $id)->first();
        if( ! $category){
            abort(404, 'KATEGORIE NEEXISTUJE');
        }

        $blogViews = BlogView::where('category_id', $id)->orderBy('id', 'asc')->get();

        return view('blog', [
            'categories' => Category::all(),
            'category' => $category,
            'blogViews' => $blogViews,
        ]);
    }
}
