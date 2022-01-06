<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HiJacks extends Component
{
    public function render()
    {
        $prods = Product::where('category', 11)->limit(9)->get();
        return view('livewire.hi-jacks', ['prods' =>$prods])->layout('layouts.base');
    }
}
