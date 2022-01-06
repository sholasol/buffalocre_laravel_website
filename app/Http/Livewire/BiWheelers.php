<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class BiWheelers extends Component
{
    public function render()
    {
        $prods = Product::where('category', 14)->limit(9)->get();
        return view('livewire.bi-wheelers', ['prods' =>$prods])->layout('layouts.base');

    }
}
