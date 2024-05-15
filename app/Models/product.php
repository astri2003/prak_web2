<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = ['name', 'harga', 'stock', 'kategori', 'gambar'];
}
