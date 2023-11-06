<?php

namespace App\Livewire\Product;

use App\Http\Repository\product\ProductRepository;
use App\Models\product;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateProdcut extends Component
{
    use WithFileUploads;

   
    public $name;
    
   
    public $sku;
   
    public $price;
   
    public $description;
    
   
    public $Image;
   
    public $subcategory_id;
   
    public $discount_id;
    public function render()
    {
        return view('livewire.product.create-prodcut');
    }
    public function submit(ProductRepository $productRepository){
        
    //    dump($this->discount_id);
    //    dump($this->name);
    //    dump($this->sku);
    //    dump($this->price);
    //    dump($this->description);
       dump($this->Image);
        $data = $this->validate();
        
    }
        
     #   $product = $productRepository->create($data);

    //     if($product){
    //         return redirect(route('admin.product.index'))->with('success','Created Successfully!');
    //     }
    //     return  redirect(route('admin.product.index'))->with('error','Created not successfully!');
    // // }
    public function rules(){
        return [
            'name' => ['required',  'unique:products,name'],
            'Image'=>['required'],
            'description'=>['required'],
            'sku'=> ['required', ],
            'price'=> ['required'],
            'subcategory_id'=> ['required', Rule::exists('subcategories', 'id')],
            'discount_id'=>['required', Rule::exists('discounts', 'id')],
            // 'inventory_id'=>['required', Rule::exists('productinventory', 'id')],
            
        ];
    }
    
    
    public function updatedsubCategory($value)
    {
        
        $this->subcategory_id = product::where('subcategory_id', $value)->get();
        
    }
    
    public function updateddiscount($value)
    {
        
        $this->discount_id = product::where('discount_id', $value)->get();
        
    }
    
}