<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->inRandomOrder() ->limit(12)->get();
        return view('livewire.blog-component', ['blogs' =>$blogs])->layout('layouts.base');
    }
}
