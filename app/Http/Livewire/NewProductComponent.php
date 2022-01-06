<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class NewProductComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $prods = Product::orderBy('created_at', 'ASC')->limit(10)->get();
        return view('livewire.new-product-component', ['prods' =>$prods])->layout('layouts.base');
    }
}
