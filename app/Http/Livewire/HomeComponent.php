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
        $sliders = Product::where('slider_status',true)->get();
        $clients = Client::all();
        return view('livewire.home-component', [
            'products' => $products,
            'clients' => $clients,
            'sliders' => $sliders
        ])->layout('layouts.base');
    }
}
