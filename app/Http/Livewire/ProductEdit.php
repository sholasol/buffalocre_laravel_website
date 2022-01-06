<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class ProductEdit extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $price;
    public $featured;
    public $prod_id;
    public $newimage;
    public $category;

    public function mount($prod_id)
    {
        $product = Product::where('id', $prod_id)->first();
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category = $product->category;
        $this->image = $product->image;
    }

     //form validation function
     public function updated($fields)
     {
         $this->validateOnly($fields, [
            'name' =>'required',
            'category' =>'required',
            'description' =>'required'
         ]);
     }


     public function editProduct()
    {  //form validation before processing
        $this->validate([
            'name' =>'required',
            'category' =>'required',
            'description' =>'required'
        ]);


        $prd = Product::find($this->prod_id);
        $prd->name = $this->name;
        $prd->description = $this->description;
        $prd->price = $this->price;
        $prd->category = $this->category;

        //if new image is selected
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products', $imageName); //storage directory and image name

            $prd->image = $imageName;
        }

        $prd->save();
        $this->dispatchBrowserEvent('success');

    }


    public function render()
    {
        $cats = Category::all();
        return view('livewire.product-edit', ['cats'=>$cats])->layout('layouts.base');
    }
}
