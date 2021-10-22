<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('pages.admin.blog.index',[
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        $blog = new Blog();
        $categories = BlogCategory::all();
        return view('pages.admin.blog.form',[
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->published = $request->input('published',false);
        $blog->blog_category_id = $request->input('category');
        $blog->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $blog->imageUrl = $request->file('image')->store('public/images/blog');
        } else {
            $blog->imageUrl = "";
        }
        $blog->save();

        return redirect(route('admin::blogs::index'));
    }

    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('pages.admin.blog.form',[
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request,Blog $blog)
    {
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->published = $request->input('published',false);
        $blog->blog_category_id = $request->input('category');
        $blog->user_id = auth()->user()->id;
        if ($request->hasFile('image')) {
            $blog->imageUrl = $request->file('image')->store('public/images/blog');
        } else {
            $blog->imageUrl = "";
        }
        $blog->save();

        return redirect(route('admin::blogs::index'));
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('admin::blogs::index'));
    }
}
