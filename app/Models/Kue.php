<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kue extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'harga',
        'ukuran',
        'image',
    ];
}
