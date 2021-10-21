<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::when($request->filled('tag'),function ($q){
            $q->whereHas('tags',function ($q){
                $q->where('id',\request()->input('tag'));
            });
        })->paginate(5);
        return view('pages.admin.product.index',[
            'products' => $products
        ]);
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = ProductCategory::get();
        $product = new Product();
        return view('pages.admin.product.form',[
            'product' => $product,
            'categories' => $categories,
            'tags' => $tags,
            'tag_ids' => []
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tag' => 'required'
        ]);
        $product = new Product();
        $product->product_category_id = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->imageUrl = '';
        $product->save();

        $product->tags()->sync($request->input('tag',[]));

        return redirect(route('admin::product::index'));
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::get();
        $tags = Tag::all();

        return view('pages.admin.product.form',[
            'product' => $product,
            'categories' => $categories,
            'tags' => $tags,
            'tag_ids' => $product->tags()->pluck('id')->toArray()
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

        $product->tags()->sync($request->input('tag',[]));

        return redirect(route('admin::product::index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin::product::index'));
    }
}
