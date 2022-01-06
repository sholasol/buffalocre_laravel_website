<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Product;
use Livewire\WithPagination;

class DashboardComponent extends Component
{
    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'ASC')->paginate(3);
        $prods = Product::orderBy('created_at', 'ASC')->paginate(10);
        return view('livewire.dashboard-component', ['prods'=>$prods, 'blogs'=>$blogs])->layout('layouts.base');
    }
}
