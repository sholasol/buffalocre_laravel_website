<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Granites extends Component
{
    public function render()
    {
        $prods = Product::where('category', 8)->limit(9)->get();
        return view('livewire.granites', ['prods' =>$prods])->layout('layouts.base');
    }
}
