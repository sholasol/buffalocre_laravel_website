<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Livewire\WithPagination;

class CreateProduct extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $price;
    public $featured;
    public $category;

    public function deleteProd($id)
    {
        $blg = Product::find($id);
        $blg->delete();
        $this->dispatchBrowserEvent('success');
    }


     //form validation function
     public function updated($fields)
     {
         $this->validateOnly($fields, [
             'name' =>'required',
             'image' =>'required',
             'category' =>'required',
             'description' =>'required'
             //'slug'  =>'required|unique:blogs'
         ]);
     }


     public function createProduct()
    {  //form validation before processing
        $this->validate([
            'name' =>'required',
            'image' =>'required',
            'category' =>'required',
             'description' =>'required'
        ]);

        $prd = new Product();
        $prd->name = $this->name;
        $prd->description = $this->description;
        $prd->price = $this->price;
        $prd->category = $this->category;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products', $imageName); //storage directory and image name
        $prd->image = $imageName;
        $prd->save();
        $this->dispatchBrowserEvent('success');

    }



    public function render()
    {
        $prods = Product::paginate(10);
        $cats = Category::all();
        return view('livewire.create-product', ['prods' =>$prods, 'cats'=>$cats])->layout('layouts.base');
    }
}
