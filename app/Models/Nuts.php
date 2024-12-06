<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nuts extends Model
{
    use HasFactory;
    protected $table = 'nuts';
    protected $fillable = [
        'kategori_id',
        'foto_produk',
        'nama_produk',
        'harga',
        'deskripsi',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
