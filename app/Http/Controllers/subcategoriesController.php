<?php

namespace App\Http\Controllers;



use App\Models\subCategory;
use Illuminate\Http\Request;

class subcategoriesController extends Controller
{
    public function subcategory(){

        return view("admin.subcategory");
        }
        public function createSubCategory(){
            //    dd( request('description'));
                // validate input
                $attributes = request()->validate([
                    'name' => ['required', 'string', 'max:255', 'min:3', 'unique:subcategories,name'],

                ]);

                subCategory::create($attributes);
                return back();
            }
}