<?php

namespace App\Livewire\SubCategory;

use App\Http\Repository\SubCategory\SubCategoryRepository;
use App\Models\subcategory;
use Livewire\Component;
use Illuminate\Validation\Rule;
class CreateSubCategory extends Component
{
    
    
    public $name='';
    public $category_id='1';
    public function render()
    {
        return view('livewire.sub-category.create-sub-category');
    }
    public function submit(SubCategoryRepository $subcategoryRepository){
        
        $data = $this->validate();
       
        if(!isset($data['name']) && !isset($data['category_id'])){ 
            return  redirect(route('admin.subcategory.index'))->with('error','Created not successfully!');
 
           
        
        }                
        else{
            $subcategoryRepository->create($data);
            return redirect(route('admin.subcategory.index'))->with('success','Created Successfully!');
        }
    }
    public function updatedCategory($value)
    {
        
        $this->category_id = subcategory::where('category_id', $value)->get();
        
    }
    public function rules(){
        return [
            'name' => 'required|min:3',
            'category_id'=> ['required', Rule::exists('categories', 'id')],

            
        ];
        
    }
}