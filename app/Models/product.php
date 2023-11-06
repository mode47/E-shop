<?php

namespace App\Models;
use App\Models\subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function discount(){
    return $this->belongsTo(discount::class);

}
public function subcategory(){
    return $this->belongsTo(subcategory::class);

}
public function scopeFilter($query, array $filters)
{
    $query->when(
        $filters['search'] ?? false,
        fn ($query, $search) =>
        $query->where(fn ($query) =>
            $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('sku','like','%' .$search .'%'))
    );

    // $query->when(
    //     $filters['category'] ?? false,
    //     fn ($query, $category) =>
    //     $query->whereHas(
    //         'category',
    //         fn ($query) =>
    //         $query->where('slug', $category)
    //     )
    // );

    // $query->when(
    //     $filters['author'] ?? false,
    //     fn ($query, $author) =>
    //     $query->whereHas(
    //         'author',
    //         fn ($query) =>
    //         $query->where('username', $author)
    //     )
    // );
}
}
