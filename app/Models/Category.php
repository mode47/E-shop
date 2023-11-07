<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded=[];
    use HasFactory;
    public function scopeFilter($query, array $filters) // Post::newQuery()->filter()
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query->where('name', 'like', '%' . $search . '%')

            )
        );
        }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // public function promotions()
    // {
    //     return $this->belongsToMany(Promotion::class, 'promotion_category', 'category_id', 'promotion_id');
    // }
}