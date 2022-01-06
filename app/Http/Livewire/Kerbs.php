<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Kerbs extends Component
{
    public function render()
    {
        $prods = Product::where('category', 7)->limit(9)->get();
        return view('livewire.kerbs', ['prods' =>$prods])->layout('layouts.base');
    }
}
