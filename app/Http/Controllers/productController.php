<?php

namespace App\Http\Controllers;


use App\Models\product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
class productController extends Controller
{
    public function store(){

        // $img = request()->file('image')->store('images');
        // dd('Done ' .$img);

        // Handle the case where no file was uploaded
        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255', 'min:8', 'unique:products,name'],
            'Image'=>['required','image'],
            'description'=>['required', 'string', 'max:255', 'min:8'],
            'sku'=> ['required', 'string'],
            'price'=> ['required', 'string'],
            'subcategory_id'=> ['required', Rule::exists('subcategories', 'id')],
            'discount_id'=>['required', Rule::exists('discounts', 'id')],
            // 'inventory_id'=>['required', Rule::exists('productinventory', 'id')],

        ]);

        $attributes['Image']=request()->file('Image')->store('images');
        // dd($attributes) ;
        // $attributes=request()->validate([
        // 'name' => ['required','string', 'max:255','min:10'],
        // ]);
        product::create($attributes);
        return redirect('/showprodcuts');

        }
  public function create(){
    return view('admin.product-create',);
  }
  public function show(){
    return view('admin.product-show',
    ['products'=>product::latest()->filter(
        request(['search' ])
    )->paginate(20)->withQueryString()]);


  }
  public function destroy(Request $request)
  {
    $Id = $request->get('peoductId');


//    $tableDl = DB::select('select * from products where id = ?', [$Id]);

   DB::delete('delete FROM products where id = ?', [$Id]);


   return back()->with('success', 'Post delete!');

}}