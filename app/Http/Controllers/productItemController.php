<?php

namespace App\Http\Controllers;

use App\Models\productitem;
use Illuminate\Http\Request;

class productItemController extends Controller
{

    public function item(){
        return view('admin.item');

    }
    public function store(){
        $attributes=request()->validate([
            'quantity'=>['required']]);
            productitem::create($attributes);
            return redirect('/category');

        

    }


}