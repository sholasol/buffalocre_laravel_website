<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Product;

class HomeComponent extends Component
{
    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->inRandomOrder() ->limit(3)->get();
        $products = Product::orderBy('created_at', 'DESC')->inRandomOrder() ->limit(4)->get();
        return view('livewire.home-component', ['blogs' =>$blogs, 'products'=>$products])->layout('layouts.base');
    }
}
