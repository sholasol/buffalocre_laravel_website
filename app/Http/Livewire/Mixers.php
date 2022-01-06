<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Mixers extends Component
{
    public function render()
    {
        $prods = Product::where('category', 3)->limit(9)->get();
        return view('livewire.mixers', ['prods' =>$prods])->layout('layouts.base');
    }
}
