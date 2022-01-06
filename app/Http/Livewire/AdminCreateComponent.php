<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Livewire\WithPagination;

class AdminCreateComponent extends Component
{
    use WithFileUploads; //

    public $title;
    public $content;
    public $image;
    public $slug;

    // public function generateslug()
    // {
    //     $this->slug = Str::slug($this->title);
    // }

     //form validation function
     public function updated($fields)
     {
         $this->validateOnly($fields, [
             'title' =>'required',
             'content' =>'required',
             'image' =>'required'
             //'slug'  =>'required|unique:blogs'
         ]);
     }

     public function deleteBlog($id)
    {
        $blg = Blog::find($id);
        $blg->delete();
        $this->dispatchBrowserEvent('success');
        //session()->flash('message', 'Category has been deleted successfully');
    }

     public function createBlog()
    {  //form validation before processing
        $this->validate([
            'title' =>'required',
             'content' =>'required',
             'image' =>'required'
             //'slug'  =>'required|unique:blogs'
        ]);

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->content = $this->content;
        //$blog->slug = $this->slug;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blogs', $imageName); //storage directory and image name
        $blog->image = $imageName;
        $blog->save();
        $this->dispatchBrowserEvent('success');
    }


    public function render()
    {
        $blogs = Blog::paginate(10);
        return view('livewire.admin-create-component', ['blogs' =>$blogs])->layout('layouts.base');
    }
}
