<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class EditProductCategory extends Component
{
    public $name;
    public $slug;
    public $cat_id;

    public function mount($cat_id)
    {
        $category = Category::where('id', $cat_id)->first();
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function generateSlug()
    {
         $this->slug = Str::slug($this->name, '-');
    }

    //form validation function
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' =>'required',
            'slug' =>'required'
        ]);
    }

    //edit the product
    public function updateCat()
    {  //form validation before processing
        $this->validate([
            'name' =>'required',
            'slug' =>'required'
        ]);


        $ctg = Category::find($this->cat_id);
        $ctg->name = $this->name;
        $ctg->slug = $this->slug;

        $ctg->save();
        $this->dispatchBrowserEvent('success');

    }


    public function render()
    {
        return view('livewire.edit-product-category')->layout('layouts.base');
    }
}
