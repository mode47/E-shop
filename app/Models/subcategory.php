<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function product(){
        return $this->hasMany(product::class);
    }
}