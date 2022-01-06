<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class Cements extends Component
{
    public function render()
    {
        $prods = Product::where('category', 9)->limit(9)->get();
        return view('livewire.cements', ['prods' =>$prods])->layout('layouts.base');
    }
}
