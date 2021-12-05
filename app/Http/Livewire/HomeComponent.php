<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::paginate('12');
        $clients = Client::all();
        return view('livewire.home-component', ['products' => $products, 'clients' => $clients])->layout('layouts.base');
    }
}
