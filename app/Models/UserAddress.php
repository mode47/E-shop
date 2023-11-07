<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function user(){
        return $this->belongsTo(SiteUser::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}