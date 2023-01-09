<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'name',
        'status',
        'qty',
        'price',
        'id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
