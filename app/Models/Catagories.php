<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagories extends Model
{
    use HasFactory;
    protected $table = "catagories";
    protected $fillable = [
        'name'
    ];
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
