<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeds extends Model
{
    use HasFactory;
    protected $table = 'seeds';
    protected $fillable = [
        'kategori_id',
        'foto_produk',
        'nama_produk',
        'harga',
        'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
