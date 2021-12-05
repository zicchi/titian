<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\Contact;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $abouts = About::all();
        $contacts = Contact::all();
        return view('livewire.about-component', ['abouts' => $abouts, 'contacts'=>$contacts])->layout('layouts.base');
    }
}
