<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Blog\CreateBlogReq;
use App\Http\Requests\Blog\EditBlogReq;
use App\Models\Blog;
use App\Models\BlogView;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class AdminPBlogContr
{
    public function blog(): View
    {
        $blogViews = BlogView::all()->sortByDesc('created_at');

        return view('adminPanel.blog.blog', [
            'blogViews' => $blogViews,
        ]);
    }
    public function create(): View
    {
        $categories = Category::all();
        return view('adminPanel.blog.blogCreate', [
            'categories' => $categories,
        ]);
    }
    public function do_create(CreateBlogReq $request): RedirectResponse
    {
        $request->validated();

        Blog::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'date' => Carbon::createFromFormat('d. m. Y', $request->date)->format('Y-m-d'),
            'location' => $request->location,
            'location2' => $request->location2,
            'text' => $request->text,
            'is_disabled' => ($request->is_disabled == 'on'),
        ]);

        return Redirect::route('ap_blog')->with('status', 'blog_created');
    }
    public function edit($id): View
    {
        $blog = Blog::where('id', $id)->first();
        if( ! $blog){
            abort(404, "BLOG NEEXISTUJE");
        }

        return view('adminPanel.blog.blogEdit', [
            'blog' => $blog,
            'categories' => Category::all(),
        ]);
    }
    public function do_edit(EditBlogReq $request): RedirectResponse
    {
        $request->validated();
        $id = $request->id;

        $blog = Blog::where('id', $id)->first();
        $blog->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'date' => Carbon::createFromFormat('d. m. Y', $request->date)->format('Y-m-d'),
            'location' => $request->location,
            'location2' => $request->location2,
            'text' => $request->text,
            'is_disabled' => ($request->is_disabled == 'on'),
        ]);

        return Redirect::route('ap_blog_edit', ['id' => $id])->with('status', 'blog_edited');
    }
    public function do_delete(): View
    {

        return view('adminPanel.adminPanel', [

        ]);
    }
}
