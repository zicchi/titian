<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Product;
use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public $slug;
    public $category_slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $blogs = Blog::where('slug', $this->slug)->first();
        $allblogs = BlogCategory::all();

        $shareComponent = \Share::currentPage()
        ->facebook()
        ->whatsapp();

        return view('livewire.blog-details-component',['blogs' => $blogs, 'allblogs'=> $allblogs, 'shareComponent'=> $shareComponent])->layout('layouts.base');
    }
}
