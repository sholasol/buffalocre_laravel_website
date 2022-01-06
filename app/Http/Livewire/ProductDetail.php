<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductDetail extends Component
{
    public $prod_id;

    public function mount($prod_id)
    {
        $this->prod_id = $prod_id;
    }

    public function render()
    {
        $cats = Category::inRandomOrder()->limit(6)->get();
        $product = Product::where('id', $this->prod_id)->first();
        $prods = Product::inRandomOrder()->limit(2)->get();
        return view('livewire.product-detail',['prods'=>$prods,'product'=>$product, 'cats'=>$cats])->layout('layouts.base');
    }
}
