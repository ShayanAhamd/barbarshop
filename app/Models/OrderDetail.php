<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = [
         'order_id',
         'product_id',
         'price',
         'disc_price',
         'qty',
         'discount_id',
         'discount_name',
         'disc_amount',
         'disc_percentage',
         'notes',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
