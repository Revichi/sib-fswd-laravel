<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'sale_price',
        'brands',
        'rating'
    ];
    public function catagories()
    {
        return $this->belongsTo(Catagories::class);
    }
}
