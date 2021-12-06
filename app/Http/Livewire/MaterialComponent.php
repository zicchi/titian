<?php

namespace App\Http\Livewire;

use App\Models\Material;
use App\Models\Product;
use Livewire\Component;

class MaterialComponent extends Component
{
    public $material_slug;

    public function mount($material_slug)
    {
        $this->material_slug = $material_slug;
    }

    public function render()
    {
        $material = Material::where('slug', $this->material_slug)->first();
        $material_id = $material->id;
        $material_name = $material->name;

        $products = Product::where('product_material_id', $material_id)->paginate(1);

        $materials = Material::all();

        return view('livewire.material-component', ['products' => $products, 'materials' => $materials, 'categories_name' => $material_name])->layout('layouts.base');
    }
}
