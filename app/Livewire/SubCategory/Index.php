<?php

namespace App\Livewire\SubCategory;

use App\Http\Repository\SubCategory\SubCategoryRepository;
use App\Models\subcategory;
use Livewire\Component;

class Index extends Component
{
    public function render(SubCategoryRepository $subCategoryRepository)
    {
        $subcategory=$subCategoryRepository->all();
       
        return view('livewire.sub-category.index',['subcategories'
         => $subcategory])->extends('layouts.admin')->section('content');
    }
    public function edit($id){        
        $this->dispatch('getData', $id);
    }
    public function delete($deleteid){
       
        subcategory::find($deleteid)->delete();
        return redirect(route('admin.subcategory.index'))->with('success','Deleted Successfully!');

        
    }

    
}