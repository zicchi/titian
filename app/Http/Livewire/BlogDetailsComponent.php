<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Product;
use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $blogs = Blog::where('slug', $this->slug)->first();
        $shareComponent = \Share::currentPage()
        ->facebook()
        ->whatsapp();

        return view('livewire.blog-details-component',['blogs' => $blogs, 'shareComponent'=> $shareComponent])->layout('layouts.base');
    }

    public function ShareWidget()
    {

    }
}
