<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Carbins extends Component
{
    public function render()
    {
        $prods = Product::where('category', 10)->limit(9)->get();
        return view('livewire.carbins', ['prods' =>$prods])->layout('layouts.base');
    }
}
