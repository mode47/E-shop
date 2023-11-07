<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class categoryController extends Controller
{
    public function index(){
      return view("index",[
        "category"=> Category::latest()->filter(
            request(['search']) )->paginate(18)->withQueryString(),
        'product'=> Product::orderBy('created_at','asc')->get()

      ]);
    }
}