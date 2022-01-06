<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class BigJohns extends Component
{
    public function render()
    {
        $prods = Product::where('category', 13)->limit(9)->get();
        return view('livewire.big-johns', ['prods' =>$prods])->layout('layouts.base');
    }
}
