<?php

namespace App\Http\Livewire;

use App\Models\BlogCategory;
use Livewire\Component;

class BlogCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $categories = BlogCategory::where('slug', $this->category_slug)->first();

        return view('livewire.blog-category-component', ['categories'=> $categories]);
    }
}
