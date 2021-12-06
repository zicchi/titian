<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{

    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = ProductCategory::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $products = Product::where('product_category_id', $category_id)->paginate(1);

        $categories = ProductCategory::all();
        $materials = Material::all();

        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'categories_name' => $category_name,'materials' => $materials])->layout('layouts.base');
    }
}
