<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    public function render()
    {
        if (request()->filled('category')){
            $blogs = Blog::where('blog_category_id',request()->input('category'))->paginate(6);
        }else{
            $blogs = Blog::paginate(6);
        }
        return view('livewire.blog-component', ['blogs' => $blogs])->layout('layouts.base');
    }
}
