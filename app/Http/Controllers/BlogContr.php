<?php

namespace App\Http\Controllers;

use App\Models\BlogPhoto;
use App\Models\BlogView;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
class BlogContr extends Controller
{
    public function blog()
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
    public function single_blog($id)
    {
        $blogView = BlogView::where('id', $id)->first();
        if( ! $blogView){
            abort(404, 'BLOG NEEXISTUJE');
        } else {
            if($blogView->is_disabled){
                abort(404, 'BLOG JIŽ NEEXISTUJE');
            }
        }

        $blogPhotos = BlogPhoto::where('blog_id', $id)->where('is_main_photo', false)->get();

        $nextBlogViews = BlogView::where('id', '!=', $id)->get()->shuffle();

        return view('singleBlog', [
            'blogView' => $blogView,
            'blogPhotos' => $blogPhotos,
            'nextBlogViews' => $nextBlogViews,
        ]);
    }
}
