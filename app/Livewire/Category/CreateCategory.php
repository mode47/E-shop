<?php

namespace App\Livewire\Category;

use App\Http\Repository\Category\CategoryRepository;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCategory extends Component
{
    public $name;
    public $image;
    public $description;
    
     use WithFileUploads;
    public function render()
    {
        return view('livewire.category.create-category');
    }

    public function submit(CategoryRepository $categoryRepository){
        $data = $this->validate();
        $data['image']=$this->imagg->stort('uploads','public');
    dd($data);
        $category = $categoryRepository->create($data);

        if($category){
            return redirect(route('admin.category.index'))->with('success','Created Successfully!');
        }
        return  redirect(route('admin.category.index'))->with('error','Created not successfully!');
    }

    public function rules(){
        return [
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'image'=>'image|max:1024'
        ];
    }
}