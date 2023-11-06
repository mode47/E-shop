<?php

namespace App\Http\Controllers;
use App\Http\Repository\Category\CategoryRepository;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct(private CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    public function index(){
        return view("admin.category");
    }

    public function create(){
        return view('admin.category.create-category');
    }
    public function store(StoreCategoryRequest $request){
        $data = $request->all();
        $category = $this->categoryRepository->create($data);
        if($category){
            return back()->with('success','Created successfully');
        }
        return back()->with('success','Sorry, can\'t created!, try again');
    }

    public function edit($id){
        $category = $this->categoryRepository->find($id);
        return view('admin.category.edit-category',compact('category'));
    }

    public function update(UpdateCategoryRequest $request , $id){
        $data = $request->all();
        $category = $this->categoryRepository->find($id);

        if($category){
            $this->categoryRepository->update($category,$data);
            return back()->with('success-update','Updated Successfully');
        }
        return back()->with('error-update','Updated Not Successfully');
    }

    public function destroy($id){
        $category = $this->categoryRepository->delete($id);
        if($category){
            $category->delete();
            return back()->with('success-delete','Deleted Successfully!');
        }
        return back()->with('error-delete','Deleted not Successfully!');
    }

}
