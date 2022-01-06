<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;

    public function render()
    {
        // $prods = Product::orderBy('created_at', 'ASC')->inRandomOrder()->limit(24)->get();
        $prods = Product::inRandomOrder()->limit(18)->get();
        return view('livewire.product-component', ['prods' =>$prods])->layout('layouts.base');
    }
}
