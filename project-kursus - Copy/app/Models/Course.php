<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'foto_kursus',
        'nama_kursus',
        'foto_pengajar',
        'nama_pengajar',
        'pekerjaan_pengajar',
        'rating',
        'harga',
        'diskon',
        'type', // online/offline
        'stok',
    ];
}
