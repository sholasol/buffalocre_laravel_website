<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Blocks extends Component
{
    public function render()
    {
        $prods = Product::where('category', 5)->limit(9)->get();
        return view('livewire.blocks', ['prods' =>$prods])->layout('layouts.base');
    }
}
