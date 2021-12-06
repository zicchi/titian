<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{

    public $sorting;
    public $pageSize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pageSize = "12";
    }

    public function render()
    {
        if ($this->sorting == "lowToHigh")
        {
            $products = Product::orderBy('price', 'DESC')->paginate($this->pageSize);
        }
        else if ($this->sorting == "highToLow")
        {
            $products = Product::orderBy('price', 'ASC')->paginate($this->pageSize);
        }else {
            $products = Product::paginate($this->pageSize);
        }

        $categories = ProductCategory::all();
        $materials = Material::all();

        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories, 'materials' => $materials])->layout('layouts.base');
    }
}
