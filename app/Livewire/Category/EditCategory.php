<?php

namespace App\Livewire\Category;

use App\Http\Repository\Category\CategoryRepository;
use Livewire\Attributes\On;
use Livewire\Component;

class EditCategory extends Component
{
    public $category;
    public $name;
    public $description;

    #[On('getData')] 
    public function getData($id , CategoryRepository $categoryRepository){
        $category = $categoryRepository->find($id);
        $this->category = $category;
        $this->name = $category->name;
        $this->description = $category->description;
        
        $this->dispatch('show-modal','admin-edit-category');
    }

    public function update(CategoryRepository $categoryRepository){
        $data = $this->validate();
        $categoryRepository->update($this->category, $data);
        return redirect(route('admin.category.index'))->with('success','Updated Successfully!');

    }
    public function rules(){
        return [
            'name' => 'required|unique:categories,name,'.$this->category->id,
            'description'=> 'required',
        ];
    }

    
    public function render()
    {
            return view('livewire.category.edit-category');
    }
}
