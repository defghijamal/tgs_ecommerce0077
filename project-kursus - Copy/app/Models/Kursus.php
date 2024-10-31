<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $table = 'kursus';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'alasan',
        'kursus',
        'status'
    ];
    //
}
