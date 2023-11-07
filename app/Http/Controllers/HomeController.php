<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      // dd(Item::orderBy('created_at','asc')->get());
        return view("index",[
          "product"=> Product::latest()->filter(
              request(['search']) )->paginate(10)->withQueryString(),
          'NewArrivals'=> Item::orderBy('created_at','desc')->get(),
            'BESTSELLERS'=> Item::orderBy('price','desc')->get(),
         
            
        ]);
      }
}