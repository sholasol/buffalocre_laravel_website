<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Moulders extends Component
{
    public function render()
    {

        $prods = Product::where('category', 2)->limit(9)->get();
        return view('livewire.moulders', ['prods' =>$prods])->layout('layouts.base');
    }
}
