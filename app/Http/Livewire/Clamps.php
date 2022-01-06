<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Clamps extends Component
{
    public function render()
    {
        $prods = Product::where('category', 4)->limit(9)->get();
        return view('livewire.clamps', ['prods' =>$prods])->layout('layouts.base');
    }
}
