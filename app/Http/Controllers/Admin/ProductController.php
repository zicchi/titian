<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('pages.admin.product.index',[
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = ProductCategory::get();
        $product = new Product();
        return view('pages.admin.product.form',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->product_category_id = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->imageUrl = '';
        $product->save();

        return redirect(route('admin::product::index'));
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::get();

        return view('pages.admin.product.form',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request,Product $product)
    {
        $product->product_category_id = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->imageUrl = '';
        $product->save();

        return redirect(route('admin::product::index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin::product::index'));
    }
}
