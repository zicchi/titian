<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{

    public $sorting;
    public $pageSize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pageSize = "2";
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = ProductCategory::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        if ($this->sorting == "lowToHigh")
        {
            $products = Product::where('id', $category_id)->orderBy('price', 'DESC')->paginate($this->pageSize);
        }
        else if ($this->sorting == "highToLow")
        {
            $products = Product::where('id', $category_id)->orderBy('price', 'ASC')->paginate($this->pageSize);
        }else {
            $products = Product::where('id', $category_id)->paginate($this->pageSize);
        }

        $categories = ProductCategory::all();

        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'categories_name' => $category_name])->layout('layouts.base');
    }
}
