<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function configurations()
    // {
    //     return $this->hasMany(ProductConfiguration::class);
    // }

    // public function orderLines()
    // {
    //     return $this->hasMany(OrderLine::class);
    // }

}