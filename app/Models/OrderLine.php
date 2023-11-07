<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    use HasFactory;
    public function productItem()
    {
        return $this->belongsTo(ProductItem::class);
    }

    public function order()
    {
        return $this->belongsTo(ShopOrder::class);
    }
}