<?php

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\userController;

use App\Livewire\Category\Index;

use App\Models\category;
use App\Models\Product;
use App\Models\subcategory;

use Illuminate\Support\Facades\Route;



// Route::get('/admin', function () {
//         return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');

});

Route::get('/shop',function(){
   return view('shop',[
    'categories'=>category::all(),
    'products'=>product::all(),
    'subcategories'=>subcategory::all(),
    ]);

});

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/list-categories' , Index::class)->name('admin.category.index');
    Route::get('/list-subcategories',\App\Livewire\SubCategory\Index::class)->name('admin.subcategory.index');
    Route::get('/list-products',\App\Livewire\Product\Index::class)->name('admin.product.index');
    // Route::prefix('categories')->group(function (Router $route) {
    //     // $route->get('/',[CategoryController::class,'index'])->name('admin.category.index');
    //     $route->get('/create-category' , [CategoryController::class,'create'])->name('admin.category.create');
    //     $route->post('/store-category',[CategoryController::class,'store'])->name('admin.category.store');
    //     $route->get('/edit-category/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
    //     $route->put('/update-category',[CategoryController::class,'update'])->name('admin.category.update');
    //     $route->delete('/delete-category/{id}',[CategoryController::class,'destroy'])->name('admin.category.delete');
    // });

});


Route::get('/userlogin',[userController::class,'login'])->middleware('auth');


    // Route::delete('admin/products/{product}', [productController::class, 'destroy']);
// Route::middleware('Admin')->group(function () {
// // Route::get('/category',[CategoryController::class,'create']);
// Route::get('/subcategory',[subcategoriesController::class,'subcategory']);
// Route::post('/createCategory',[CategoryController::class,'store']);
// Route::post('/createSubCategory',[subcategoriesController::class,'createSubCategory']);


// Route::post('/storeProduct',[productController::class,'store']);
// Route::get('/product',[productController::class,'create']);

// Route::get('/showprodcuts',[productController::class,'show']);

// Route::delete('/admin/products/',[productController::class,'destroy']);

// Route::get('/discount',[discountController::class,'discount']);
// Route::post('/createDiscount',[discountController::class,'store']);
// Route::get('/item',[productItemController::class,'item']);
// Route::post('/createItem',[productItemController::class,'store']);

// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['Admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';