<?php

namespace App\Http\Controllers;

use App\Models\BlogPhoto;
use App\Models\BlogView;
use Illuminate\View\View;
class BlogContr extends Controller
{
    public function blog($id)
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
