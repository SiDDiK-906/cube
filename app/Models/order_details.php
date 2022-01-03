<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    public function relationToProduct(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function relationToUser(){
        return $this->belongsTo(User::class, 'vendor_id', 'id');
    }
}
