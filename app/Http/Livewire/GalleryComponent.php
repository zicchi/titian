<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class GalleryComponent extends Component
{
    public function render()
    {
        $galleries = Gallery::paginate(6);
        return view('livewire.gallery-component', ['galleries'=>$galleries])->layout('layouts.base');
    }
}
