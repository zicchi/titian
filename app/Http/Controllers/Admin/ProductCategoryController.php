<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::paginate(5);
        return view('pages.admin.product-categories.index',[
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $category = new ProductCategory();
        return view('pages.admin.product-categories.form',[
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $category = new ProductCategory();
        $category->name = $request->input('name');
        $category->save();

        return redirect(route('admin::product-category::index'));
    }

    public function edit(ProductCategory $category)
    {
        return view('pages.admin.product-categories.form',[
            'category' => $category
        ]);
    }

    public function update(Request $request,ProductCategory $category)
    {
        $category->name = $request->input('name');
        $category->save();

        return redirect(route('admin::product-category::index'));
    }

    public function destroy(ProductCategory $category)
    {
        $category->delete();
        return redirect(route('admin::product-category::index'));
    }
}
