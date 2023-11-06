<?php

namespace App\Livewire\Product;

use App\Http\Repository\product\ProductRepository;
use App\Models\product;
use Livewire\Component;

class Index extends Component
{
    public function render(ProductRepository $productRepository)

    
    {
        $product=$productRepository->all();
      
        
        return view('livewire.product.index',[

            'products'=>$product
        ])->extends('layouts.admin')->section('content');
    }
    public function edit($id){        
        $this->dispatch('getData', $id);
    }
    public function delete($deleteid){
       
        product::find($deleteid)->delete();
        return redirect(route('admin.product.index'))->with('success','Deleted Successfully!');

        
    }
   

}