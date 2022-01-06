<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Pavers extends Component
{
    public function render()
    {
        $prods = Product::where('category', 6)->limit(9)->get();
        return view('livewire.pavers', ['prods' =>$prods])->layout('layouts.base');
    }
}
