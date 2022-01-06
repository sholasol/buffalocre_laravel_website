<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class LongJohns extends Component
{
    public function render()
    {
        $prods = Product::where('category', 12)->limit(9)->get();
        return view('livewire.long-johns', ['prods' =>$prods])->layout('layouts.base');
    }
}
