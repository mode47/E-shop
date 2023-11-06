<?php

namespace App\Livewire\SubCategory;
use App\Http\Repository\SubCategory\SubCategoryRepository;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Validation\Rule;

class EditSubCategory extends Component
{
    public $name;
    public $subcategory;
    public $category_id;
    #[On('getData')] 
    public function getData($id , SubCategoryRepository $SubCategoryRepository){
        $subcategory = $SubCategoryRepository->find($id);
        $this->subcategory = $subcategory;
        $this->name = $subcategory->name;
        $this->category_id = $subcategory->category_id;
        
        $this->dispatch('show-modal','admin-edit-subcategory');
    }
    

    public function update(SubCategoryRepository $SubCategoryRepository){
        $data = $this->validate();
        $SubCategoryRepository->update($this->subcategory, $data);
        return redirect(route('admin.subcategory.index'))->with('success','Updated Successfully!');
    }
    public function rules(){
        return [
            'name' => 'required',
            'category_id'=> ['required', Rule::exists('categories', 'id')],

        ];
    }
    public function render()
    {
        return view('livewire.sub-category.edit-sub-category');
    }
}