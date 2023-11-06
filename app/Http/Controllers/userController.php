<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\subcategory;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
class userController extends Controller
{
    public function login(){
        if (auth()->user()->role=="admin"){
            return view("admin.index");
        }else{
            return view("index",[
                'products'=>product::latest()->filter(
                    request(['search' ])
                )->paginate(20)->withQueryString(),
               'categoreis'=> subcategory::all()
            ]);

        }

    }






}
