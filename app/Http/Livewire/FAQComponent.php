<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FAQComponent extends Component
{
    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.f-a-q-component', ['faqs'=> $faqs])->layout('layouts.base');
    }
}
