<?php

namespace App\Models;

use App\Models\subcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function subcategory(){
       return $this->hasMany(subcategory::class);
    }
}