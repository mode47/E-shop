<?php

namespace App\Livewire\Category;

use App\Http\Repository\Category\CategoryRepository;
use App\Models\category;
use Livewire\Component;

class Index extends Component
{

    public $deleteId;
    public function render(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->all();
        return view('livewire.category.index',[
            'categories' => $categories
        ])
        ->extends('layouts.admin')
        ->section('content');
    }

    public function edit($id){        
        $this->dispatch('getData', $id);
    }

    public function delete($deleteid){
       
        category::find($deleteid)->delete();
        return redirect(route('admin.category.index'))->with('success','Deleted Successfully!');

        
    }
 
    // public function delete(CategoryRepository $categoryRepository){
    //     $categoryRepository->destroy($this->deleteId);
    //     return redirect(route('admin.category.index'))->with('success','Deleted Successfully!');
    // }
}