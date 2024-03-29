<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'tbl_barang';

    protected $fillable = [
        'id_jenis',
        'nama_jenis',
        'harga',
        'stok',
    ];

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'update_at';
}



