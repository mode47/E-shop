<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(SiteUser::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(UserPaymentMethod::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(Address::class, 'shipping_address');
    }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status');
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}