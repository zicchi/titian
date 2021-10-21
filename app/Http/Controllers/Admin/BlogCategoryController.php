<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::paginate(5);
        return view('pages.admin.blog-categories.index',[
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $category = new BlogCategory();
        return view('pages.admin.blog-categories.form',[
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $category = new BlogCategory();
        $category->name = $request->input('name');
        $category->save();

        return redirect(route('admin::blog-category::index'));
    }

    public function edit(BlogCategory $category)
    {
        return view('pages.admin.blog-categories.form',[
            'category' => $category
        ]);
    }

    public function update(Request $request,BlogCategory $category)
    {
        $category->name = $request->input('name');
        $category->save();

        return redirect(route('admin::blog-category::index'));
    }

    public function destroy(BlogCategory $category)
    {
        $category->delete();
        return redirect(route('admin::blog-category::index'));
    }
}
