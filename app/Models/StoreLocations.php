<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreLocations extends Model
{
    use HasFactory;
    protected $table = 'store_locations';
    protected $fillable = [
        'nama_kota',
        'nama_toko'
    ];
}
