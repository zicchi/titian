<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{

    public function render()
    {
        $products = Product::paginate(1);
        return view('livewire.shop-component', ['products' => $products])->layout('layouts.base');
    }
}
