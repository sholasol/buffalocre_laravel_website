<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductCategory extends Component
{
    public $name;
    public $slug;
    public $cat_id;

    public function generateSlug()
    {
         $this->slug = Str::slug($this->name, '-');
    }

    public function deleteCat($id)
    {
        $blg = Category::find($id);
        $blg->delete();
        $this->dispatchBrowserEvent('success');
    }

     //form validation function
     public function updated($fields)
     {
         $this->validateOnly($fields, [
             'name' =>'required',
             'slug' =>'required'
             //'slug'  =>'required|unique:blogs'
         ]);
     }


     public function createCat()
     {  //form validation before processing
         $this->validate([
             'name' =>'required',
             'slug' =>'required'
         ]);

         $prd = new Category();
         $prd->name = $this->name;
         $prd->slug = $this->slug;
         $prd->save();
         $this->dispatchBrowserEvent('success');

     }

    public function render()
    {
        $cats = Category::paginate(10);
        return view('livewire.product-category', ['cats'=>$cats])->layout('layouts.base');
    }
}
