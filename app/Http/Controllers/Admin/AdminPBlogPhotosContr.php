<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogPhoto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPBlogPhotosContr
{
    public function photos($id): View
    {
        $blog = Blog::where('id', $id)->first();
        if( ! $blog){
            abort(404, "BLOG NEEXISTUJE");
        }

        $not_main_photos = BlogPhoto::where('blog_id', $id)->where('is_main_photo', false)->get();
        $main_photo = BlogPhoto::where('blog_id', $id)->where('is_main_photo', true)->first();

        return view('adminPanel.blog.blogPhotos', [
            'blog' => $blog,
            'not_main_photos' => $not_main_photos,
            'main_photo' => $main_photo,
        ]);
    }
    public function add_photo(Request $request): RedirectResponse
    {
        $request->validateWithBag('adding_side_photos',[
            'images.*' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
            'blog_id' => ['required', Rule::exists(Blog::class, 'id')],
        ], [
            'images.*.required' => 'Vyberte 1 nebo více fotografií.',
            'images.*.image' => 'Vyberte 1 nebo více fotografií.',
            'images.*.mimes' => 'Obrázky mohou být jen typu jpeg, png, jpg, svg nebo gif.',
            'images.*.max' => 'Žádná z fotografií nesmí být větší než 10 MB.',
            'blog_id' => 'Vyskytla se chyba, zopakujte akci.',
        ]);
        $blog_id = $request->input('blog_id');

        $count_of_photos = 0;
        if($request->hasFile('images')) {
            foreach($request->file('images') as $file) {
                $name = date('Y_m_d-H_i_s').'-'.$file->getClientOriginalName();

                $blogPhoto = new BlogPhoto();
                $blogPhoto->blog_id = $blog_id;
                $blogPhoto->original_name = $name;
                $blogPhoto->is_main_photo = false;
                $blogPhoto->file = file_get_contents($file->getRealPath());
                $blogPhoto->save();

                $count_of_photos++;
            }
        }

        return Redirect::route('ap_blog_photos', ['id' => $blog_id])->with('status', 'photos_added')->with('count_of_photos', $count_of_photos);
    }
    public function add_main_photo(Request $request): RedirectResponse
    {
        $request->validateWithBag('adding_main_photo',[
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
            'blog_id' => ['required', Rule::exists(Blog::class, 'id')],
        ], [
            'image.required' => 'Vyberte 1 fotografii.',
            'image.image' => 'Vyberte 1 fotografii.',
            'image.mimes' => 'Fotografie může být pouze typu jpeg, png, jpg, svg nebo gif.',
            'image.max' => 'Fotografie nesmí být větší než 10 MB.',
            'blog_id' => 'Vyskytla se chyba, zopakujte akci.',
        ]);
        $blog_id = $request->input('blog_id');

        $was_created = false;
        $blog_main_photo = BlogPhoto::where('blog_id', $blog_id)->where('is_main_photo', true)->first();
        if( ! $blog_main_photo){
            $blog_main_photo = new BlogPhoto();
            $blog_main_photo->blog_id = $blog_id;
            $blog_main_photo->is_main_photo = true;
            $was_created = true;
        }

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $blog_main_photo->original_name = date('Y_m_d-H_i_s') . '-' . $file->getClientOriginalName();
            $blog_main_photo->file = file_get_contents($file->getRealPath());
            $blog_main_photo->save();
        }

        if($was_created){
            return Redirect::route('ap_blog_photos', ['id' => $blog_id])->with('status', 'main_photo_added');
        } else {
            return Redirect::route('ap_blog_photos', ['id' => $blog_id])->with('status', 'main_photo_updated');
        }
    }

    public function delete_photo(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => ['required', 'integer', Rule::exists(BlogPhoto::class, 'id')],
        ], [
            'id' => 'Vyskytla se chyba, zopakujte akci.',
        ]);
        $blog_photo_id = $request->input('id');

        $blog_photo = BlogPhoto::where('id', $blog_photo_id)->first();
        $blog_photo->delete();

        if($blog_photo->is_main_photo){
            return Redirect::route('ap_blog_photos', ['id' => $blog_photo->blog_id])->with('status', 'main_photo_deleted');
        } else {
            return Redirect::route('ap_blog_photos', ['id' => $blog_photo->blog_id])->with('status', 'photo_deleted');
        }
    }
}
