<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class BlogEdit extends Component
{

    use WithFileUploads;

    public $title;
    public $content;
    public $image;
    public $blog_id;
    public $newimage;

    public function mount($blog_id)
    {
        $product = Blog::where('id', $blog_id)->first();
        $this->title = $product->title;
        $this->content = $product->content;
        $this->image = $product->image;
    }

     //form validation function
     public function updated($fields)
     {
         $this->validateOnly($fields, [
             'title' =>'required',
             'content' =>'required'
             //'slug'  =>'required|unique:blogs'
         ]);
     }


     public function editProduct()
    {  //form validation before processing
        $this->validate([
            'title' =>'required',
             'content' =>'required'
        ]);


        $prd = Blog::find($this->blog_id);
        $prd->title = $this->title;
        $prd->content = $this->content;

        //if new image is selected
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('blogs', $imageName); //storage directory and image name

            $prd->image = $imageName;
        }

        $prd->save();
        $this->dispatchBrowserEvent('success');

    }



    public function render()
    {
        return view('livewire.blog-edit')->layout('layouts.base');
    }
}
