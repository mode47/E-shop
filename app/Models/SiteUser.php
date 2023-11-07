<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteUser extends Model
{

    protected $guarded=[];
    use HasFactory;
    public function addresses()
    {
        return $this->hasManyThrough(Address::class, UserAddress::class);
    }
    public function userAddresses()
    {
        return $this->hasMany(UserAddress::class);
    }
    public function paymentMethods()
    {
        return $this->hasMany(UserPaymentMethod::class);
    }

    public function orders()
    {
        return $this->hasMany(ShopOrder::class);
    }

    public function reviews()
    {
        return $this->hasMany(UserReview::class);
    }
    
}