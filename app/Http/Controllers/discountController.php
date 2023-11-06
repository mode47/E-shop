<?php

namespace App\Http\Controllers;

use App\Models\discount;
use Illuminate\Http\Request;

class discountController extends Controller
{
    public function discount(){
        return view('admin.discount');

    }
    public function store(){
        $attributes=request()->validate([
            'desc'=>['required'],
            'name'=>['required'],
            'discount_percent'=>['required'],
            'active'=>['required']
            ]);

            discount::create($attributes);
            return redirect('/category');



    }


}
