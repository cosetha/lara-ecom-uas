<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','kategori_id','nama','gambar','harga','stok'];
}
