<?php

namespace App\Providers;

use App\Http\Repository\Category\CategoryRepository;
use App\Http\Repository\Category\Elqouent\CategotyElqouentRepository;
use App\Http\Repository\product\Elqouent\ProductElqountRepository;
use App\Http\Repository\product\ProductRepository;
use App\Http\Repository\SubCategory\Elqouent\SubCategoryElqountRepository;
use App\Http\Repository\SubCategory\SubCategoryRepository;
use App\Models\category;
use App\Models\product;
use App\Models\subcategory;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CategoryRepository::class,function(){
            return new CategotyElqouentRepository(new category);
        });
        
        $this->app->bind(SubCategoryRepository::class,function(){
            return new SubCategoryElqountRepository(new subcategory);
        });
           
        $this->app->bind(   ProductRepository::class,function(){
           return new ProductElqountRepository(new product);
        });
    }
    public function boot(): void
    {

    }
}